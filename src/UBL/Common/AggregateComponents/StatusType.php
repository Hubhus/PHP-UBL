<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing StatusType
 *
 * ABIE
 *  Status. Details
 *  The information relevant to a condition or a position of an object.
 *  Status
 * XSD Type: StatusType
 */
class StatusType
{

    /**
     * BBIE
     *  Status. Condition Code. Code
     *  A code specifying the status condition of the related object.
     *  0..1
     *  Status
     *  Condition Code
     *  Code
     *  Transportation Status_ Code. Type
     *  UN/ECE Rec 24
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ConditionCode $conditionCode
     */
    private $conditionCode = null;

    /**
     * BBIE
     *  Status. Reference_ Date. Date
     *  A reference date value for this status.
     *  0..1
     *  Status
     *  Reference
     *  Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $referenceDate
     */
    private $referenceDate = null;

    /**
     * BBIE
     *  Status. Reference_ Time. Time
     *  A reference time value for this status.
     *  0..1
     *  Status
     *  Reference
     *  Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $referenceTime
     */
    private $referenceTime = null;

    /**
     * BBIE
     *  Status. Description. Text
     *  A textual description of this status.
     *  0..1
     *  Status
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Description $description
     */
    private $description = null;

    /**
     * BBIE
     *  Status. Status Reason Code. Code
     *  A code specifying a reason for a status condition.
     *  0..1
     *  Status
     *  Status Reason Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\StatusReasonCode $statusReasonCode
     */
    private $statusReasonCode = null;

    /**
     * BBIE
     *  Status. Status_ Reason. Text
     *  The reason, expressed as text, for this status condition or position.
     *  0..1
     *  Status
     *  Status
     *  Reason
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\StatusReason $statusReason
     */
    private $statusReason = null;

    /**
     * BBIE
     *  Status. Sequence. Identifier
     *  A unique identifier of the sequence of this status.
     *  0..1
     *  Status
     *  Sequence
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\SequenceID $sequenceID
     */
    private $sequenceID = null;

    /**
     * BBIE
     *  Status. Text
     *  Provides any textual information related to this status.
     *  0..1
     *  Status
     *  Text
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Text $text
     */
    private $text = null;

    /**
     * BBIE
     *  Status. Indication_ Indicator. Indicator
     *  Specifies an indicator relevant to a specific status.
     *  0..1
     *  Status
     *  Indication
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $indicationIndicator
     */
    private $indicationIndicator = null;

    /**
     * BBIE
     *  Status. Percent
     *  Specifies a percentage relevant to a specific status.
     *  0..1
     *  Status
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @var float $percent
     */
    private $percent = null;

    /**
     * Gets as conditionCode
     *
     * BBIE
     *  Status. Condition Code. Code
     *  A code specifying the status condition of the related object.
     *  0..1
     *  Status
     *  Condition Code
     *  Code
     *  Transportation Status_ Code. Type
     *  UN/ECE Rec 24
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ConditionCode
     */
    public function getConditionCode()
    {
        return $this->conditionCode;
    }

    /**
     * Sets a new conditionCode
     *
     * BBIE
     *  Status. Condition Code. Code
     *  A code specifying the status condition of the related object.
     *  0..1
     *  Status
     *  Condition Code
     *  Code
     *  Transportation Status_ Code. Type
     *  UN/ECE Rec 24
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ConditionCode $conditionCode
     * @return self
     */
    public function setConditionCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\ConditionCode $conditionCode)
    {
        $this->conditionCode = $conditionCode;
        return $this;
    }

    /**
     * Gets as referenceDate
     *
     * BBIE
     *  Status. Reference_ Date. Date
     *  A reference date value for this status.
     *  0..1
     *  Status
     *  Reference
     *  Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getReferenceDate()
    {
        return $this->referenceDate;
    }

    /**
     * Sets a new referenceDate
     *
     * BBIE
     *  Status. Reference_ Date. Date
     *  A reference date value for this status.
     *  0..1
     *  Status
     *  Reference
     *  Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $referenceDate
     * @return self
     */
    public function setReferenceDate(\DateTime $referenceDate)
    {
        $this->referenceDate = $referenceDate;
        return $this;
    }

    /**
     * Gets as referenceTime
     *
     * BBIE
     *  Status. Reference_ Time. Time
     *  A reference time value for this status.
     *  0..1
     *  Status
     *  Reference
     *  Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getReferenceTime()
    {
        return $this->referenceTime;
    }

    /**
     * Sets a new referenceTime
     *
     * BBIE
     *  Status. Reference_ Time. Time
     *  A reference time value for this status.
     *  0..1
     *  Status
     *  Reference
     *  Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $referenceTime
     * @return self
     */
    public function setReferenceTime(\DateTime $referenceTime)
    {
        $this->referenceTime = $referenceTime;
        return $this;
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Status. Description. Text
     *  A textual description of this status.
     *  0..1
     *  Status
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Status. Description. Text
     *  A textual description of this status.
     *  0..1
     *  Status
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Description $description
     * @return self
     */
    public function setDescription(\NOKA\PHPUBL\UBL\Common\BasicComponents\Description $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as statusReasonCode
     *
     * BBIE
     *  Status. Status Reason Code. Code
     *  A code specifying a reason for a status condition.
     *  0..1
     *  Status
     *  Status Reason Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\StatusReasonCode
     */
    public function getStatusReasonCode()
    {
        return $this->statusReasonCode;
    }

    /**
     * Sets a new statusReasonCode
     *
     * BBIE
     *  Status. Status Reason Code. Code
     *  A code specifying a reason for a status condition.
     *  0..1
     *  Status
     *  Status Reason Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\StatusReasonCode $statusReasonCode
     * @return self
     */
    public function setStatusReasonCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\StatusReasonCode $statusReasonCode)
    {
        $this->statusReasonCode = $statusReasonCode;
        return $this;
    }

    /**
     * Gets as statusReason
     *
     * BBIE
     *  Status. Status_ Reason. Text
     *  The reason, expressed as text, for this status condition or position.
     *  0..1
     *  Status
     *  Status
     *  Reason
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\StatusReason
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }

    /**
     * Sets a new statusReason
     *
     * BBIE
     *  Status. Status_ Reason. Text
     *  The reason, expressed as text, for this status condition or position.
     *  0..1
     *  Status
     *  Status
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\StatusReason $statusReason
     * @return self
     */
    public function setStatusReason(\NOKA\PHPUBL\UBL\Common\BasicComponents\StatusReason $statusReason)
    {
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * Gets as sequenceID
     *
     * BBIE
     *  Status. Sequence. Identifier
     *  A unique identifier of the sequence of this status.
     *  0..1
     *  Status
     *  Sequence
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\SequenceID
     */
    public function getSequenceID()
    {
        return $this->sequenceID;
    }

    /**
     * Sets a new sequenceID
     *
     * BBIE
     *  Status. Sequence. Identifier
     *  A unique identifier of the sequence of this status.
     *  0..1
     *  Status
     *  Sequence
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\SequenceID $sequenceID
     * @return self
     */
    public function setSequenceID(\NOKA\PHPUBL\UBL\Common\BasicComponents\SequenceID $sequenceID)
    {
        $this->sequenceID = $sequenceID;
        return $this;
    }

    /**
     * Gets as text
     *
     * BBIE
     *  Status. Text
     *  Provides any textual information related to this status.
     *  0..1
     *  Status
     *  Text
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Text
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * BBIE
     *  Status. Text
     *  Provides any textual information related to this status.
     *  0..1
     *  Status
     *  Text
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Text $text
     * @return self
     */
    public function setText(\NOKA\PHPUBL\UBL\Common\BasicComponents\Text $text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Gets as indicationIndicator
     *
     * BBIE
     *  Status. Indication_ Indicator. Indicator
     *  Specifies an indicator relevant to a specific status.
     *  0..1
     *  Status
     *  Indication
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getIndicationIndicator()
    {
        return $this->indicationIndicator;
    }

    /**
     * Sets a new indicationIndicator
     *
     * BBIE
     *  Status. Indication_ Indicator. Indicator
     *  Specifies an indicator relevant to a specific status.
     *  0..1
     *  Status
     *  Indication
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $indicationIndicator
     * @return self
     */
    public function setIndicationIndicator($indicationIndicator)
    {
        $this->indicationIndicator = $indicationIndicator;
        return $this;
    }

    /**
     * Gets as percent
     *
     * BBIE
     *  Status. Percent
     *  Specifies a percentage relevant to a specific status.
     *  0..1
     *  Status
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @return float
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Sets a new percent
     *
     * BBIE
     *  Status. Percent
     *  Specifies a percentage relevant to a specific status.
     *  0..1
     *  Status
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @param float $percent
     * @return self
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;
        return $this;
    }


}

