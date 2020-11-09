<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing ReceiptLineType
 *
 * ABIE
 *  Receipt Line. Details
 *  Information about a Receipt Line.
 *  Receipt Line
 * XSD Type: ReceiptLineType
 */
class ReceiptLineType
{

    /**
     * BBIE
     *  Receipt Line. Identifier
     *  Identifies the Receipt Line.
     *  1
     *  Receipt Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Receipt Line. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Receipt Line
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Receipt Line. Note. Text
     *  Free-form text applying to the Receipt Line. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Receipt Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Note $note
     */
    private $note = null;

    /**
     * BBIE
     *  Receipt Line. Received_ Quantity. Quantity
     *  The quantity received.
     *  0..1
     *  Receipt Line
     *  Received
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ReceivedQuantity $receivedQuantity
     */
    private $receivedQuantity = null;

    /**
     * BBIE
     *  Receipt Line. Short_ Quantity. Quantity
     *  The quantity received short; the difference between the quantity reported despatched and the quantity actually received.
     *  0..1
     *  Receipt Line
     *  Short
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ShortQuantity $shortQuantity
     */
    private $shortQuantity = null;

    /**
     * BBIE
     *  Receipt Line. Shortage Action Code. Code
     *  The action that the Delivery Party wishes the Despatch Party to take as a result of the shortage, expressed as a code.
     *  0..1
     *  Receipt Line
     *  Shortage Action Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ShortageActionCode $shortageActionCode
     */
    private $shortageActionCode = null;

    /**
     * BBIE
     *  Receipt Line. Rejected_ Quantity. Quantity
     *  The quantity rejected.
     *  0..1
     *  Receipt Line
     *  Rejected
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\RejectedQuantity $rejectedQuantity
     */
    private $rejectedQuantity = null;

    /**
     * BBIE
     *  Receipt Line. Reject Reason Code. Code
     *  The reason for rejection, expressed as a code.
     *  0..1
     *  Receipt Line
     *  Reject Reason Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\RejectReasonCode $rejectReasonCode
     */
    private $rejectReasonCode = null;

    /**
     * BBIE
     *  Receipt Line. Reject_ Reason. Text
     *  The reason for rejection.
     *  0..1
     *  Receipt Line
     *  Reject
     *  Reason
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\RejectReason $rejectReason
     */
    private $rejectReason = null;

    /**
     * BBIE
     *  Receipt Line. Reject Action Code. Code
     *  The action that the Delivery Party wishes the Despatch Party to take as a result of the rejection, expressed as a code.
     *  0..1
     *  Receipt Line
     *  Reject Action Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\RejectActionCode $rejectActionCode
     */
    private $rejectActionCode = null;

    /**
     * BBIE
     *  Receipt Line. Oversupply Quantity. Quantity
     *  The quanitity over-supplied i.e. the quantity over and above that ordered.
     *  0..1
     *  Receipt Line
     *  Oversupply Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\OversupplyQuantity $oversupplyQuantity
     */
    private $oversupplyQuantity = null;

    /**
     * BBIE
     *  Receipt Line. Received_ Date. Date
     *  The date on which the good/services are received.
     *  0..1
     *  Receipt Line
     *  Received
     *  Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $receivedDate
     */
    private $receivedDate = null;

    /**
     * BBIE
     *  Receipt Line. Timing Complaint Code. Code
     *  A complaint about the timing of delivery, expressed as a code.
     *  0..1
     *  Receipt Line
     *  Timing Complaint Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TimingComplaintCode $timingComplaintCode
     */
    private $timingComplaintCode = null;

    /**
     * BBIE
     *  Receipt Line. Timing Complaint. Text
     *  A complaint about the timing of delivery.
     *  0..1
     *  Receipt Line
     *  Timing Complaint
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TimingComplaint $timingComplaint
     */
    private $timingComplaint = null;

    /**
     * ASBIE
     *  Receipt Line. Order Line Reference
     *  An association to Order Line Reference.
     *  0..1
     *  Receipt Line
     *  Order Line Reference
     *  Order Line Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderLineReference $orderLineReference
     */
    private $orderLineReference = null;

    /**
     * ASBIE
     *  Receipt Line. Despatch_ Line Reference. Line Reference
     *  An associative reference to Despatch Line.
     *  0..n
     *  Receipt Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DespatchLineReference[] $despatchLineReference
     */
    private $despatchLineReference = [
        
    ];

    /**
     * ASBIE
     *  Receipt Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Receipt Line
     *  Document Reference
     *  Document Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * ASBIE
     *  Receipt Line. Item
     *  An association to Item.
     *  0..n
     *  Receipt Line
     *  Item
     *  Item
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Item[] $item
     */
    private $item = [
        
    ];

    /**
     * ASBIE
     *  Receipt Line. Shipment
     *  An association to Shipment.
     *  0..n
     *  Receipt Line
     *  Shipment
     *  Shipment
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Shipment[] $shipment
     */
    private $shipment = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Receipt Line. Identifier
     *  Identifies the Receipt Line.
     *  1
     *  Receipt Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Receipt Line. Identifier
     *  Identifies the Receipt Line.
     *  1
     *  Receipt Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     * @return self
     */
    public function setID(\NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as uUID
     *
     * BBIE
     *  Receipt Line. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Receipt Line
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\UUID
     */
    public function getUUID()
    {
        return $this->uUID;
    }

    /**
     * Sets a new uUID
     *
     * BBIE
     *  Receipt Line. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Receipt Line
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\UUID $uUID
     * @return self
     */
    public function setUUID(\NOKA\PHPUBL\UBL\Common\BasicComponents\UUID $uUID)
    {
        $this->uUID = $uUID;
        return $this;
    }

    /**
     * Gets as note
     *
     * BBIE
     *  Receipt Line. Note. Text
     *  Free-form text applying to the Receipt Line. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Receipt Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Note
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Receipt Line. Note. Text
     *  Free-form text applying to the Receipt Line. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Receipt Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Note $note
     * @return self
     */
    public function setNote(\NOKA\PHPUBL\UBL\Common\BasicComponents\Note $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as receivedQuantity
     *
     * BBIE
     *  Receipt Line. Received_ Quantity. Quantity
     *  The quantity received.
     *  0..1
     *  Receipt Line
     *  Received
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ReceivedQuantity
     */
    public function getReceivedQuantity()
    {
        return $this->receivedQuantity;
    }

    /**
     * Sets a new receivedQuantity
     *
     * BBIE
     *  Receipt Line. Received_ Quantity. Quantity
     *  The quantity received.
     *  0..1
     *  Receipt Line
     *  Received
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ReceivedQuantity $receivedQuantity
     * @return self
     */
    public function setReceivedQuantity(\NOKA\PHPUBL\UBL\Common\BasicComponents\ReceivedQuantity $receivedQuantity)
    {
        $this->receivedQuantity = $receivedQuantity;
        return $this;
    }

    /**
     * Gets as shortQuantity
     *
     * BBIE
     *  Receipt Line. Short_ Quantity. Quantity
     *  The quantity received short; the difference between the quantity reported despatched and the quantity actually received.
     *  0..1
     *  Receipt Line
     *  Short
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ShortQuantity
     */
    public function getShortQuantity()
    {
        return $this->shortQuantity;
    }

    /**
     * Sets a new shortQuantity
     *
     * BBIE
     *  Receipt Line. Short_ Quantity. Quantity
     *  The quantity received short; the difference between the quantity reported despatched and the quantity actually received.
     *  0..1
     *  Receipt Line
     *  Short
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ShortQuantity $shortQuantity
     * @return self
     */
    public function setShortQuantity(\NOKA\PHPUBL\UBL\Common\BasicComponents\ShortQuantity $shortQuantity)
    {
        $this->shortQuantity = $shortQuantity;
        return $this;
    }

    /**
     * Gets as shortageActionCode
     *
     * BBIE
     *  Receipt Line. Shortage Action Code. Code
     *  The action that the Delivery Party wishes the Despatch Party to take as a result of the shortage, expressed as a code.
     *  0..1
     *  Receipt Line
     *  Shortage Action Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ShortageActionCode
     */
    public function getShortageActionCode()
    {
        return $this->shortageActionCode;
    }

    /**
     * Sets a new shortageActionCode
     *
     * BBIE
     *  Receipt Line. Shortage Action Code. Code
     *  The action that the Delivery Party wishes the Despatch Party to take as a result of the shortage, expressed as a code.
     *  0..1
     *  Receipt Line
     *  Shortage Action Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ShortageActionCode $shortageActionCode
     * @return self
     */
    public function setShortageActionCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\ShortageActionCode $shortageActionCode)
    {
        $this->shortageActionCode = $shortageActionCode;
        return $this;
    }

    /**
     * Gets as rejectedQuantity
     *
     * BBIE
     *  Receipt Line. Rejected_ Quantity. Quantity
     *  The quantity rejected.
     *  0..1
     *  Receipt Line
     *  Rejected
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\RejectedQuantity
     */
    public function getRejectedQuantity()
    {
        return $this->rejectedQuantity;
    }

    /**
     * Sets a new rejectedQuantity
     *
     * BBIE
     *  Receipt Line. Rejected_ Quantity. Quantity
     *  The quantity rejected.
     *  0..1
     *  Receipt Line
     *  Rejected
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\RejectedQuantity $rejectedQuantity
     * @return self
     */
    public function setRejectedQuantity(\NOKA\PHPUBL\UBL\Common\BasicComponents\RejectedQuantity $rejectedQuantity)
    {
        $this->rejectedQuantity = $rejectedQuantity;
        return $this;
    }

    /**
     * Gets as rejectReasonCode
     *
     * BBIE
     *  Receipt Line. Reject Reason Code. Code
     *  The reason for rejection, expressed as a code.
     *  0..1
     *  Receipt Line
     *  Reject Reason Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\RejectReasonCode
     */
    public function getRejectReasonCode()
    {
        return $this->rejectReasonCode;
    }

    /**
     * Sets a new rejectReasonCode
     *
     * BBIE
     *  Receipt Line. Reject Reason Code. Code
     *  The reason for rejection, expressed as a code.
     *  0..1
     *  Receipt Line
     *  Reject Reason Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\RejectReasonCode $rejectReasonCode
     * @return self
     */
    public function setRejectReasonCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\RejectReasonCode $rejectReasonCode)
    {
        $this->rejectReasonCode = $rejectReasonCode;
        return $this;
    }

    /**
     * Gets as rejectReason
     *
     * BBIE
     *  Receipt Line. Reject_ Reason. Text
     *  The reason for rejection.
     *  0..1
     *  Receipt Line
     *  Reject
     *  Reason
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\RejectReason
     */
    public function getRejectReason()
    {
        return $this->rejectReason;
    }

    /**
     * Sets a new rejectReason
     *
     * BBIE
     *  Receipt Line. Reject_ Reason. Text
     *  The reason for rejection.
     *  0..1
     *  Receipt Line
     *  Reject
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\RejectReason $rejectReason
     * @return self
     */
    public function setRejectReason(\NOKA\PHPUBL\UBL\Common\BasicComponents\RejectReason $rejectReason)
    {
        $this->rejectReason = $rejectReason;
        return $this;
    }

    /**
     * Gets as rejectActionCode
     *
     * BBIE
     *  Receipt Line. Reject Action Code. Code
     *  The action that the Delivery Party wishes the Despatch Party to take as a result of the rejection, expressed as a code.
     *  0..1
     *  Receipt Line
     *  Reject Action Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\RejectActionCode
     */
    public function getRejectActionCode()
    {
        return $this->rejectActionCode;
    }

    /**
     * Sets a new rejectActionCode
     *
     * BBIE
     *  Receipt Line. Reject Action Code. Code
     *  The action that the Delivery Party wishes the Despatch Party to take as a result of the rejection, expressed as a code.
     *  0..1
     *  Receipt Line
     *  Reject Action Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\RejectActionCode $rejectActionCode
     * @return self
     */
    public function setRejectActionCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\RejectActionCode $rejectActionCode)
    {
        $this->rejectActionCode = $rejectActionCode;
        return $this;
    }

    /**
     * Gets as oversupplyQuantity
     *
     * BBIE
     *  Receipt Line. Oversupply Quantity. Quantity
     *  The quanitity over-supplied i.e. the quantity over and above that ordered.
     *  0..1
     *  Receipt Line
     *  Oversupply Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\OversupplyQuantity
     */
    public function getOversupplyQuantity()
    {
        return $this->oversupplyQuantity;
    }

    /**
     * Sets a new oversupplyQuantity
     *
     * BBIE
     *  Receipt Line. Oversupply Quantity. Quantity
     *  The quanitity over-supplied i.e. the quantity over and above that ordered.
     *  0..1
     *  Receipt Line
     *  Oversupply Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\OversupplyQuantity $oversupplyQuantity
     * @return self
     */
    public function setOversupplyQuantity(\NOKA\PHPUBL\UBL\Common\BasicComponents\OversupplyQuantity $oversupplyQuantity)
    {
        $this->oversupplyQuantity = $oversupplyQuantity;
        return $this;
    }

    /**
     * Gets as receivedDate
     *
     * BBIE
     *  Receipt Line. Received_ Date. Date
     *  The date on which the good/services are received.
     *  0..1
     *  Receipt Line
     *  Received
     *  Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getReceivedDate()
    {
        return $this->receivedDate;
    }

    /**
     * Sets a new receivedDate
     *
     * BBIE
     *  Receipt Line. Received_ Date. Date
     *  The date on which the good/services are received.
     *  0..1
     *  Receipt Line
     *  Received
     *  Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $receivedDate
     * @return self
     */
    public function setReceivedDate(\DateTime $receivedDate)
    {
        $this->receivedDate = $receivedDate;
        return $this;
    }

    /**
     * Gets as timingComplaintCode
     *
     * BBIE
     *  Receipt Line. Timing Complaint Code. Code
     *  A complaint about the timing of delivery, expressed as a code.
     *  0..1
     *  Receipt Line
     *  Timing Complaint Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TimingComplaintCode
     */
    public function getTimingComplaintCode()
    {
        return $this->timingComplaintCode;
    }

    /**
     * Sets a new timingComplaintCode
     *
     * BBIE
     *  Receipt Line. Timing Complaint Code. Code
     *  A complaint about the timing of delivery, expressed as a code.
     *  0..1
     *  Receipt Line
     *  Timing Complaint Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TimingComplaintCode $timingComplaintCode
     * @return self
     */
    public function setTimingComplaintCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\TimingComplaintCode $timingComplaintCode)
    {
        $this->timingComplaintCode = $timingComplaintCode;
        return $this;
    }

    /**
     * Gets as timingComplaint
     *
     * BBIE
     *  Receipt Line. Timing Complaint. Text
     *  A complaint about the timing of delivery.
     *  0..1
     *  Receipt Line
     *  Timing Complaint
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TimingComplaint
     */
    public function getTimingComplaint()
    {
        return $this->timingComplaint;
    }

    /**
     * Sets a new timingComplaint
     *
     * BBIE
     *  Receipt Line. Timing Complaint. Text
     *  A complaint about the timing of delivery.
     *  0..1
     *  Receipt Line
     *  Timing Complaint
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TimingComplaint $timingComplaint
     * @return self
     */
    public function setTimingComplaint(\NOKA\PHPUBL\UBL\Common\BasicComponents\TimingComplaint $timingComplaint)
    {
        $this->timingComplaint = $timingComplaint;
        return $this;
    }

    /**
     * Gets as orderLineReference
     *
     * ASBIE
     *  Receipt Line. Order Line Reference
     *  An association to Order Line Reference.
     *  0..1
     *  Receipt Line
     *  Order Line Reference
     *  Order Line Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderLineReference
     */
    public function getOrderLineReference()
    {
        return $this->orderLineReference;
    }

    /**
     * Sets a new orderLineReference
     *
     * ASBIE
     *  Receipt Line. Order Line Reference
     *  An association to Order Line Reference.
     *  0..1
     *  Receipt Line
     *  Order Line Reference
     *  Order Line Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderLineReference $orderLineReference
     * @return self
     */
    public function setOrderLineReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderLineReference $orderLineReference)
    {
        $this->orderLineReference = $orderLineReference;
        return $this;
    }

    /**
     * Adds as despatchLineReference
     *
     * ASBIE
     *  Receipt Line. Despatch_ Line Reference. Line Reference
     *  An associative reference to Despatch Line.
     *  0..n
     *  Receipt Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DespatchLineReference $despatchLineReference
     */
    public function addToDespatchLineReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\DespatchLineReference $despatchLineReference)
    {
        $this->despatchLineReference[] = $despatchLineReference;
        return $this;
    }

    /**
     * isset despatchLineReference
     *
     * ASBIE
     *  Receipt Line. Despatch_ Line Reference. Line Reference
     *  An associative reference to Despatch Line.
     *  0..n
     *  Receipt Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDespatchLineReference($index)
    {
        return isset($this->despatchLineReference[$index]);
    }

    /**
     * unset despatchLineReference
     *
     * ASBIE
     *  Receipt Line. Despatch_ Line Reference. Line Reference
     *  An associative reference to Despatch Line.
     *  0..n
     *  Receipt Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDespatchLineReference($index)
    {
        unset($this->despatchLineReference[$index]);
    }

    /**
     * Gets as despatchLineReference
     *
     * ASBIE
     *  Receipt Line. Despatch_ Line Reference. Line Reference
     *  An associative reference to Despatch Line.
     *  0..n
     *  Receipt Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\DespatchLineReference[]
     */
    public function getDespatchLineReference()
    {
        return $this->despatchLineReference;
    }

    /**
     * Sets a new despatchLineReference
     *
     * ASBIE
     *  Receipt Line. Despatch_ Line Reference. Line Reference
     *  An associative reference to Despatch Line.
     *  0..n
     *  Receipt Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DespatchLineReference[] $despatchLineReference
     * @return self
     */
    public function setDespatchLineReference(array $despatchLineReference)
    {
        $this->despatchLineReference = $despatchLineReference;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Receipt Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Receipt Line
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentReference $documentReference
     */
    public function addToDocumentReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentReference $documentReference)
    {
        $this->documentReference[] = $documentReference;
        return $this;
    }

    /**
     * isset documentReference
     *
     * ASBIE
     *  Receipt Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Receipt Line
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentReference($index)
    {
        return isset($this->documentReference[$index]);
    }

    /**
     * unset documentReference
     *
     * ASBIE
     *  Receipt Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Receipt Line
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentReference($index)
    {
        unset($this->documentReference[$index]);
    }

    /**
     * Gets as documentReference
     *
     * ASBIE
     *  Receipt Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Receipt Line
     *  Document Reference
     *  Document Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentReference[]
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * ASBIE
     *  Receipt Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Receipt Line
     *  Document Reference
     *  Document Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentReference[] $documentReference
     * @return self
     */
    public function setDocumentReference(array $documentReference)
    {
        $this->documentReference = $documentReference;
        return $this;
    }

    /**
     * Adds as item
     *
     * ASBIE
     *  Receipt Line. Item
     *  An association to Item.
     *  0..n
     *  Receipt Line
     *  Item
     *  Item
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Item $item
     */
    public function addToItem(\NOKA\PHPUBL\UBL\Common\AggregateComponents\Item $item)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * isset item
     *
     * ASBIE
     *  Receipt Line. Item
     *  An association to Item.
     *  0..n
     *  Receipt Line
     *  Item
     *  Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItem($index)
    {
        return isset($this->item[$index]);
    }

    /**
     * unset item
     *
     * ASBIE
     *  Receipt Line. Item
     *  An association to Item.
     *  0..n
     *  Receipt Line
     *  Item
     *  Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItem($index)
    {
        unset($this->item[$index]);
    }

    /**
     * Gets as item
     *
     * ASBIE
     *  Receipt Line. Item
     *  An association to Item.
     *  0..n
     *  Receipt Line
     *  Item
     *  Item
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\Item[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * ASBIE
     *  Receipt Line. Item
     *  An association to Item.
     *  0..n
     *  Receipt Line
     *  Item
     *  Item
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Item[] $item
     * @return self
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Adds as shipment
     *
     * ASBIE
     *  Receipt Line. Shipment
     *  An association to Shipment.
     *  0..n
     *  Receipt Line
     *  Shipment
     *  Shipment
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Shipment $shipment
     */
    public function addToShipment(\NOKA\PHPUBL\UBL\Common\AggregateComponents\Shipment $shipment)
    {
        $this->shipment[] = $shipment;
        return $this;
    }

    /**
     * isset shipment
     *
     * ASBIE
     *  Receipt Line. Shipment
     *  An association to Shipment.
     *  0..n
     *  Receipt Line
     *  Shipment
     *  Shipment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipment($index)
    {
        return isset($this->shipment[$index]);
    }

    /**
     * unset shipment
     *
     * ASBIE
     *  Receipt Line. Shipment
     *  An association to Shipment.
     *  0..n
     *  Receipt Line
     *  Shipment
     *  Shipment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipment($index)
    {
        unset($this->shipment[$index]);
    }

    /**
     * Gets as shipment
     *
     * ASBIE
     *  Receipt Line. Shipment
     *  An association to Shipment.
     *  0..n
     *  Receipt Line
     *  Shipment
     *  Shipment
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\Shipment[]
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * Sets a new shipment
     *
     * ASBIE
     *  Receipt Line. Shipment
     *  An association to Shipment.
     *  0..n
     *  Receipt Line
     *  Shipment
     *  Shipment
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Shipment[] $shipment
     * @return self
     */
    public function setShipment(array $shipment)
    {
        $this->shipment = $shipment;
        return $this;
    }


}

