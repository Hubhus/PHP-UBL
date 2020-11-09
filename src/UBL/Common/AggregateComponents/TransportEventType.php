<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing TransportEventType
 *
 * ABIE
 *  Transport Event. Details
 *  A significant occurrence or happening related to the transportation of goods.
 *  Transport Event
 * XSD Type: TransportEventType
 */
class TransportEventType
{

    /**
     * BBIE
     *  Transport Event. Identification. Identifier
     *  An identifier for the event.
     *  0..1
     *  Transport Event
     *  Identification
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\IdentificationID $identificationID
     */
    private $identificationID = null;

    /**
     * BBIE
     *  Transport Event. Occurrence Date. Date
     *  The date of an occurrence of the event.
     *  0..1
     *  Transport Event
     *  Occurrence Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $occurrenceDate
     */
    private $occurrenceDate = null;

    /**
     * BBIE
     *  Transport Event. Occurrence Time. Time
     *  The time of an occurrence of the event.
     *  0..1
     *  Transport Event
     *  Occurrence Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $occurrenceTime
     */
    private $occurrenceTime = null;

    /**
     * BBIE
     *  Transport Event. Transport Event Type Code. Code
     *  A code specifying the type of event.
     *  0..1
     *  Transport Event
     *  Transport Event Type Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TransportEventTypeCode $transportEventTypeCode
     */
    private $transportEventTypeCode = null;

    /**
     * BBIE
     *  Transport Event. Description. Text
     *  A textual description of the event.
     *  0..1
     *  Transport Event
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Description $description
     */
    private $description = null;

    /**
     * BBIE
     *  Transport Event. Completion_ Indicator. Indicator
     *  Indicates if this event is completed.
     *  0..1
     *  Transport Event
     *  Completion
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $completionIndicator
     */
    private $completionIndicator = null;

    /**
     * ASBIE
     *  Transport Event. Reported_ Shipment. Shipment
     *  Information about the separately identifiable collection of goods items (available to be) transported from one consignor to one consignee via one or more modes of transport.
     *  0..1
     *  Transport Event
     *  Reported
     *  Shipment
     *  Shipment
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReportedShipment $reportedShipment
     */
    private $reportedShipment = null;

    /**
     * ASBIE
     *  Transport Event. Current_ Status. Status
     *  The status of the event.
     *  1..n
     *  Transport Event
     *  Current
     *  Status
     *  Status
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\CurrentStatus[] $currentStatus
     */
    private $currentStatus = [
        
    ];

    /**
     * ASBIE
     *  Transport Event. Contact
     *  Any contacts for the event.
     *  0..n
     *  Transport Event
     *  Contact
     *  Contact
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Contact[] $contact
     */
    private $contact = [
        
    ];

    /**
     * Gets as identificationID
     *
     * BBIE
     *  Transport Event. Identification. Identifier
     *  An identifier for the event.
     *  0..1
     *  Transport Event
     *  Identification
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\IdentificationID
     */
    public function getIdentificationID()
    {
        return $this->identificationID;
    }

    /**
     * Sets a new identificationID
     *
     * BBIE
     *  Transport Event. Identification. Identifier
     *  An identifier for the event.
     *  0..1
     *  Transport Event
     *  Identification
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\IdentificationID $identificationID
     * @return self
     */
    public function setIdentificationID(\NOKA\PHPUBL\UBL\Common\BasicComponents\IdentificationID $identificationID)
    {
        $this->identificationID = $identificationID;
        return $this;
    }

    /**
     * Gets as occurrenceDate
     *
     * BBIE
     *  Transport Event. Occurrence Date. Date
     *  The date of an occurrence of the event.
     *  0..1
     *  Transport Event
     *  Occurrence Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getOccurrenceDate()
    {
        return $this->occurrenceDate;
    }

    /**
     * Sets a new occurrenceDate
     *
     * BBIE
     *  Transport Event. Occurrence Date. Date
     *  The date of an occurrence of the event.
     *  0..1
     *  Transport Event
     *  Occurrence Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $occurrenceDate
     * @return self
     */
    public function setOccurrenceDate(\DateTime $occurrenceDate)
    {
        $this->occurrenceDate = $occurrenceDate;
        return $this;
    }

    /**
     * Gets as occurrenceTime
     *
     * BBIE
     *  Transport Event. Occurrence Time. Time
     *  The time of an occurrence of the event.
     *  0..1
     *  Transport Event
     *  Occurrence Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getOccurrenceTime()
    {
        return $this->occurrenceTime;
    }

    /**
     * Sets a new occurrenceTime
     *
     * BBIE
     *  Transport Event. Occurrence Time. Time
     *  The time of an occurrence of the event.
     *  0..1
     *  Transport Event
     *  Occurrence Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $occurrenceTime
     * @return self
     */
    public function setOccurrenceTime(\DateTime $occurrenceTime)
    {
        $this->occurrenceTime = $occurrenceTime;
        return $this;
    }

    /**
     * Gets as transportEventTypeCode
     *
     * BBIE
     *  Transport Event. Transport Event Type Code. Code
     *  A code specifying the type of event.
     *  0..1
     *  Transport Event
     *  Transport Event Type Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TransportEventTypeCode
     */
    public function getTransportEventTypeCode()
    {
        return $this->transportEventTypeCode;
    }

    /**
     * Sets a new transportEventTypeCode
     *
     * BBIE
     *  Transport Event. Transport Event Type Code. Code
     *  A code specifying the type of event.
     *  0..1
     *  Transport Event
     *  Transport Event Type Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TransportEventTypeCode $transportEventTypeCode
     * @return self
     */
    public function setTransportEventTypeCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\TransportEventTypeCode $transportEventTypeCode)
    {
        $this->transportEventTypeCode = $transportEventTypeCode;
        return $this;
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Transport Event. Description. Text
     *  A textual description of the event.
     *  0..1
     *  Transport Event
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
     *  Transport Event. Description. Text
     *  A textual description of the event.
     *  0..1
     *  Transport Event
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
     * Gets as completionIndicator
     *
     * BBIE
     *  Transport Event. Completion_ Indicator. Indicator
     *  Indicates if this event is completed.
     *  0..1
     *  Transport Event
     *  Completion
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getCompletionIndicator()
    {
        return $this->completionIndicator;
    }

    /**
     * Sets a new completionIndicator
     *
     * BBIE
     *  Transport Event. Completion_ Indicator. Indicator
     *  Indicates if this event is completed.
     *  0..1
     *  Transport Event
     *  Completion
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $completionIndicator
     * @return self
     */
    public function setCompletionIndicator($completionIndicator)
    {
        $this->completionIndicator = $completionIndicator;
        return $this;
    }

    /**
     * Gets as reportedShipment
     *
     * ASBIE
     *  Transport Event. Reported_ Shipment. Shipment
     *  Information about the separately identifiable collection of goods items (available to be) transported from one consignor to one consignee via one or more modes of transport.
     *  0..1
     *  Transport Event
     *  Reported
     *  Shipment
     *  Shipment
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReportedShipment
     */
    public function getReportedShipment()
    {
        return $this->reportedShipment;
    }

    /**
     * Sets a new reportedShipment
     *
     * ASBIE
     *  Transport Event. Reported_ Shipment. Shipment
     *  Information about the separately identifiable collection of goods items (available to be) transported from one consignor to one consignee via one or more modes of transport.
     *  0..1
     *  Transport Event
     *  Reported
     *  Shipment
     *  Shipment
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReportedShipment $reportedShipment
     * @return self
     */
    public function setReportedShipment(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ReportedShipment $reportedShipment)
    {
        $this->reportedShipment = $reportedShipment;
        return $this;
    }

    /**
     * Adds as currentStatus
     *
     * ASBIE
     *  Transport Event. Current_ Status. Status
     *  The status of the event.
     *  1..n
     *  Transport Event
     *  Current
     *  Status
     *  Status
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\CurrentStatus $currentStatus
     */
    public function addToCurrentStatus(\NOKA\PHPUBL\UBL\Common\AggregateComponents\CurrentStatus $currentStatus)
    {
        $this->currentStatus[] = $currentStatus;
        return $this;
    }

    /**
     * isset currentStatus
     *
     * ASBIE
     *  Transport Event. Current_ Status. Status
     *  The status of the event.
     *  1..n
     *  Transport Event
     *  Current
     *  Status
     *  Status
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCurrentStatus($index)
    {
        return isset($this->currentStatus[$index]);
    }

    /**
     * unset currentStatus
     *
     * ASBIE
     *  Transport Event. Current_ Status. Status
     *  The status of the event.
     *  1..n
     *  Transport Event
     *  Current
     *  Status
     *  Status
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCurrentStatus($index)
    {
        unset($this->currentStatus[$index]);
    }

    /**
     * Gets as currentStatus
     *
     * ASBIE
     *  Transport Event. Current_ Status. Status
     *  The status of the event.
     *  1..n
     *  Transport Event
     *  Current
     *  Status
     *  Status
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\CurrentStatus[]
     */
    public function getCurrentStatus()
    {
        return $this->currentStatus;
    }

    /**
     * Sets a new currentStatus
     *
     * ASBIE
     *  Transport Event. Current_ Status. Status
     *  The status of the event.
     *  1..n
     *  Transport Event
     *  Current
     *  Status
     *  Status
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\CurrentStatus[] $currentStatus
     * @return self
     */
    public function setCurrentStatus(array $currentStatus)
    {
        $this->currentStatus = $currentStatus;
        return $this;
    }

    /**
     * Adds as contact
     *
     * ASBIE
     *  Transport Event. Contact
     *  Any contacts for the event.
     *  0..n
     *  Transport Event
     *  Contact
     *  Contact
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Contact $contact
     */
    public function addToContact(\NOKA\PHPUBL\UBL\Common\AggregateComponents\Contact $contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * isset contact
     *
     * ASBIE
     *  Transport Event. Contact
     *  Any contacts for the event.
     *  0..n
     *  Transport Event
     *  Contact
     *  Contact
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContact($index)
    {
        return isset($this->contact[$index]);
    }

    /**
     * unset contact
     *
     * ASBIE
     *  Transport Event. Contact
     *  Any contacts for the event.
     *  0..n
     *  Transport Event
     *  Contact
     *  Contact
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContact($index)
    {
        unset($this->contact[$index]);
    }

    /**
     * Gets as contact
     *
     * ASBIE
     *  Transport Event. Contact
     *  Any contacts for the event.
     *  0..n
     *  Transport Event
     *  Contact
     *  Contact
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\Contact[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * ASBIE
     *  Transport Event. Contact
     *  Any contacts for the event.
     *  0..n
     *  Transport Event
     *  Contact
     *  Contact
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Contact[] $contact
     * @return self
     */
    public function setContact(array $contact)
    {
        $this->contact = $contact;
        return $this;
    }


}

