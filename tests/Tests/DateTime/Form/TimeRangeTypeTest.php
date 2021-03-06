<?php

namespace Dms\Common\Structure\Tests\DateTime\Form;

use Dms\Common\Structure\DateTime\Form\TimeRangeType;
use Dms\Common\Structure\DateTime\TimeOfDay;
use Dms\Common\Structure\DateTime\TimeRange;
use Dms\Common\Structure\Tests\Form\FieldTypeTest;
use Dms\Core\Form\Field\Processor\Validator\DateFormatValidator;
use Dms\Core\Form\Field\Processor\Validator\RequiredValidator;
use Dms\Core\Form\IFieldType;
use Dms\Core\Form\Processor\Validator\FieldLessThanOrEqualAnotherValidator;
use Dms\Core\Language\Message;

/**
 * @author Elliot Levin <elliotlevin@hotmail.com>
 */
class TimeRangeTypeTest extends FieldTypeTest
{
    /**
     * @return IFieldType
     */
    protected function buildFieldType()
    {
        return new TimeRangeType('H:i:s');
    }

    /**
     * @inheritDoc
     */
    public function processedType()
    {
        return TimeRange::type()->nullable();
    }

    /**
     * @return array[]
     */
    public function validationTests()
    {
        return [
                [
                        [],
                        [
                                new Message(RequiredValidator::MESSAGE, ['field' => 'Start', 'input' => null]),
                                new Message(RequiredValidator::MESSAGE, ['field' => 'End', 'input' => null])
                        ]
                ],
                [
                        ['start' => '123', 'end' => '355'],
                        [
                                new Message(DateFormatValidator::MESSAGE, ['field' => 'Start', 'input' => 123, 'format' => 'H:i:s']),
                                new Message(DateFormatValidator::MESSAGE, ['field' => 'End', 'input' => 355, 'format' => 'H:i:s']),
                        ]
                ],
                [
                        ['start' => '15:00:00', 'end' => '14:59:59'],
                        [
                                new Message(FieldLessThanOrEqualAnotherValidator::MESSAGE, ['field1' => 'Start', 'field2' => 'End']),
                        ],
                        false
                ],
        ];
    }

    /**
     * @return array[]
     */
    public function processTests()
    {
        return [
                [['start' => '14:59:59', 'end' => '15:00:00'], new TimeRange(new TimeOfDay(14, 59, 59), new TimeOfDay(15, 0, 0))],
        ];
    }

    /**
     * @return array[]
     */
    public function unprocessTests()
    {
        return [
                [new TimeRange(new TimeOfDay(14, 59, 59), new TimeOfDay(15, 0, 0)), ['start' => '14:59:59', 'end' => '15:00:00']],
        ];
    }
}