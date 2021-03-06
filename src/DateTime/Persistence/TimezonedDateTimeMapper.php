<?php declare(strict_types = 1);

namespace Dms\Common\Structure\DateTime\Persistence;

use Dms\Common\Structure\DateTime\TimezonedDateTime;
use Dms\Core\Persistence\Db\Mapping\Definition\MapperDefinition;
use Dms\Core\Persistence\Db\Mapping\IndependentValueObjectMapper;

/**
 * The timezoned date time value object mapper
 *
 * @author Elliot Levin <elliotlevin@hotmail.com>
 */
class TimezonedDateTimeMapper extends IndependentValueObjectMapper
{
    /**
     * @var string
     */
    private $dateTimeColumnName;

    /**
     * @var string
     */
    private $timezoneColumnName;

    public function __construct($dateTimeColumnName = 'datetime', $timezoneColumnName = 'timezone')
    {
        $this->dateTimeColumnName = $dateTimeColumnName;
        $this->timezoneColumnName = $timezoneColumnName;
        parent::__construct();
    }

    /**
     * Defines the value object mapper
     *
     * @param MapperDefinition $map
     *
     * @return void
     */
    protected function define(MapperDefinition $map)
    {
        $map->type(TimezonedDateTime::class);

        $map->property(TimezonedDateTime::DATE_TIME)
                ->mappedVia(function (\DateTimeImmutable $phpDateTime) {
                    // Remove timezone information as this is lost when persisted anyway
                    // The timezone will be stored in a separate column
                    return \DateTimeImmutable::createFromFormat(
                            'Y-m-d H:i:s',
                            $phpDateTime->format('Y-m-d H:i:s'),
                            new \DateTimeZone('UTC')
                    );
                }, function (\DateTimeImmutable $dbDateTime, array $row) {
                    // When persisted, the date time instance will lose its timezone information
                    // so it is loaded as if it is UTC but the actual timezone is stored in a
                    // separate column. So we can create a new date time in the correct timezone
                    // from the string representation of it in that timezone.
                    // TODO: handle prefixes for $row
                    return \DateTimeImmutable::createFromFormat(
                            'Y-m-d H:i:s',
                            $dbDateTime->format('Y-m-d H:i:s'),
                            new \DateTimeZone($row[$this->timezoneColumnName])
                    );
                })
                ->to($this->dateTimeColumnName)
                ->asDateTime();

        $map->computed(
                function (TimezonedDateTime $dateTime) {
                    return $dateTime->getTimezone()->getName();
                })
                ->to($this->timezoneColumnName)
                ->asVarchar(50);
    }
}