<?php

namespace Iddigital\Cms\Common\Structure\Web\Persistence;

use Iddigital\Cms\Common\Structure\Type\Persistence\StringValueObjectMapper;
use Iddigital\Cms\Common\Structure\Web\IpAddress;
use Iddigital\Cms\Core\Persistence\Db\Mapping\Definition\Column\ColumnTypeDefiner;

/**
 * The ip address value object mapper.
 *
 * @author Elliot Levin <elliotlevin@hotmail.com>
 */
class IpAddressMapper extends StringValueObjectMapper
{
    /**
     * @inheritDoc
     */
    public function __construct($columnName = 'ip_address')
    {
        parent::__construct($columnName);
    }

    /**
     * Gets the mapped class type.
     *
     * @return string
     */
    protected function classType()
    {
        return IpAddress::class;
    }

    /**
     * Defines the column type for the string property.
     *
     * @param ColumnTypeDefiner $stringColumn
     *
     * @return void
     */
    protected function defineStringColumnType(ColumnTypeDefiner $stringColumn)
    {
        $stringColumn->asVarchar(IpAddress::MAX_LENGTH);
    }
}