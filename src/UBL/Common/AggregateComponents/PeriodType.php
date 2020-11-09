<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing PeriodType
 *
 * ABIE
 *  Period. Details
 *  Information about a period of time.
 *  Period
 * XSD Type: PeriodType
 */
class PeriodType
{

    /**
     * BBIE
     *  Period. Start Date. Date
     *  The start date of the period.
     *  0..1
     *  Period
     *  Start Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $startDate
     */
    private $startDate = null;

    /**
     * BBIE
     *  Period. Start Time. Time
     *  The start time of the period.
     *  0..1
     *  Period
     *  Start Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $startTime
     */
    private $startTime = null;

    /**
     * BBIE
     *  Period. End Date. Date
     *  The end date of the period.
     *  0..1
     *  Period
     *  End Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $endDate
     */
    private $endDate = null;

    /**
     * BBIE
     *  Period. End Time. Time
     *  The end time of the period.
     *  0..1
     *  Period
     *  End Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $endTime
     */
    private $endTime = null;

    /**
     * BBIE
     *  Period. Duration. Measure
     *  The duration of a period, expressed as a code; ISO 8601.
     *  0..1
     *  Period
     *  Duration
     *  Measure
     *  Measure. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\DurationMeasure $durationMeasure
     */
    private $durationMeasure = null;

    /**
     * BBIE
     *  Period. Description Code. Code
     *  A description of the period, expressed as a code.
     *  0..n
     *  Period
     *  Description Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\DescriptionCode[] $descriptionCode
     */
    private $descriptionCode = [
        
    ];

    /**
     * BBIE
     *  Period. Description. Text
     *  A description of the period.
     *  0..n
     *  Period
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * Gets as startDate
     *
     * BBIE
     *  Period. Start Date. Date
     *  The start date of the period.
     *  0..1
     *  Period
     *  Start Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * BBIE
     *  Period. Start Date. Date
     *  The start date of the period.
     *  0..1
     *  Period
     *  Start Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $startDate
     * @return self
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as startTime
     *
     * BBIE
     *  Period. Start Time. Time
     *  The start time of the period.
     *  0..1
     *  Period
     *  Start Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * BBIE
     *  Period. Start Time. Time
     *  The start time of the period.
     *  0..1
     *  Period
     *  Start Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $startTime
     * @return self
     */
    public function setStartTime(\DateTime $startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * BBIE
     *  Period. End Date. Date
     *  The end date of the period.
     *  0..1
     *  Period
     *  End Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * BBIE
     *  Period. End Date. Date
     *  The end date of the period.
     *  0..1
     *  Period
     *  End Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $endDate
     * @return self
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Gets as endTime
     *
     * BBIE
     *  Period. End Time. Time
     *  The end time of the period.
     *  0..1
     *  Period
     *  End Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets a new endTime
     *
     * BBIE
     *  Period. End Time. Time
     *  The end time of the period.
     *  0..1
     *  Period
     *  End Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $endTime
     * @return self
     */
    public function setEndTime(\DateTime $endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * Gets as durationMeasure
     *
     * BBIE
     *  Period. Duration. Measure
     *  The duration of a period, expressed as a code; ISO 8601.
     *  0..1
     *  Period
     *  Duration
     *  Measure
     *  Measure. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\DurationMeasure
     */
    public function getDurationMeasure()
    {
        return $this->durationMeasure;
    }

    /**
     * Sets a new durationMeasure
     *
     * BBIE
     *  Period. Duration. Measure
     *  The duration of a period, expressed as a code; ISO 8601.
     *  0..1
     *  Period
     *  Duration
     *  Measure
     *  Measure. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\DurationMeasure $durationMeasure
     * @return self
     */
    public function setDurationMeasure(\NOKA\PHPUBL\UBL\Common\BasicComponents\DurationMeasure $durationMeasure)
    {
        $this->durationMeasure = $durationMeasure;
        return $this;
    }

    /**
     * Adds as descriptionCode
     *
     * BBIE
     *  Period. Description Code. Code
     *  A description of the period, expressed as a code.
     *  0..n
     *  Period
     *  Description Code
     *  Code
     *  Code. Type
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\DescriptionCode $descriptionCode
     */
    public function addToDescriptionCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\DescriptionCode $descriptionCode)
    {
        $this->descriptionCode[] = $descriptionCode;
        return $this;
    }

    /**
     * isset descriptionCode
     *
     * BBIE
     *  Period. Description Code. Code
     *  A description of the period, expressed as a code.
     *  0..n
     *  Period
     *  Description Code
     *  Code
     *  Code. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescriptionCode($index)
    {
        return isset($this->descriptionCode[$index]);
    }

    /**
     * unset descriptionCode
     *
     * BBIE
     *  Period. Description Code. Code
     *  A description of the period, expressed as a code.
     *  0..n
     *  Period
     *  Description Code
     *  Code
     *  Code. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescriptionCode($index)
    {
        unset($this->descriptionCode[$index]);
    }

    /**
     * Gets as descriptionCode
     *
     * BBIE
     *  Period. Description Code. Code
     *  A description of the period, expressed as a code.
     *  0..n
     *  Period
     *  Description Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\DescriptionCode[]
     */
    public function getDescriptionCode()
    {
        return $this->descriptionCode;
    }

    /**
     * Sets a new descriptionCode
     *
     * BBIE
     *  Period. Description Code. Code
     *  A description of the period, expressed as a code.
     *  0..n
     *  Period
     *  Description Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\DescriptionCode[] $descriptionCode
     * @return self
     */
    public function setDescriptionCode(array $descriptionCode)
    {
        $this->descriptionCode = $descriptionCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Period. Description. Text
     *  A description of the period.
     *  0..n
     *  Period
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Description $description
     */
    public function addToDescription(\NOKA\PHPUBL\UBL\Common\BasicComponents\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Period. Description. Text
     *  A description of the period.
     *  0..n
     *  Period
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * BBIE
     *  Period. Description. Text
     *  A description of the period.
     *  0..n
     *  Period
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Period. Description. Text
     *  A description of the period.
     *  0..n
     *  Period
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Period. Description. Text
     *  A description of the period.
     *  0..n
     *  Period
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Description[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }


}

