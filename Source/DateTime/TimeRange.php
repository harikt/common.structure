<?php

namespace Iddigital\Cms\Common\Structure\DateTime;

/**
 * The time range value object.
 *
 * @author Elliot Levin <elliotlevin@hotmail.com>
 */
class TimeRange extends DateOrTimeRangeObject
{
    /**
     * @var TimeOfDay
     */
    protected $start;

    /**
     * @var TimeOfDay
     */
    protected $end;

    /**
     * TimeRange constructor.
     *
     * @param TimeOfDay $start
     * @param TimeOfDay $end
     */
    public function __construct(TimeOfDay $start, TimeOfDay $end)
    {
        parent::__construct($start, $end);
    }

    /**
     * @inheritDoc
     */
    protected function rangeOfClass()
    {
        return TimeOfDay::class;
    }

    /**
     * Gets the start time of the range.
     *
     * @return TimeOfDay
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Gets the end time of the range.
     *
     * @return TimeOfDay
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Returns whether the supplied time is within (inclusive) the time range.
     *
     * @param TimeOfDay $time
     *
     * @return bool
     */
    public function contains(TimeOfDay $time)
    {
        return $this->start->isEarlierThanOrEqual($time) && $this->end->isLaterThanOrEqual($time);
    }

    /**
     * Returns whether the supplied time is within (exclusive) the time range.
     *
     * @param TimeOfDay $time
     *
     * @return bool
     */
    public function containsExclusive(TimeOfDay $time)
    {
        return $this->start->isEarlierThan($time) && $this->end->isLaterThan($time);
    }

    /**
     * Returns whether the supplied time range overlaps this time range.
     *
     * @param TimeRange $otherRange
     *
     * @return bool
     */
    public function overlaps(TimeRange $otherRange)
    {
        return $this->contains($otherRange->getStart()) || $this->contains($otherRange->getEnd());
    }
}