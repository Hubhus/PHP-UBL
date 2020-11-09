<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing DespatchLineType
 *
 * ABIE
 *  Despatch Line. Details
 *  Information about a Despatch Line.
 *  Despatch Line
 * XSD Type: DespatchLineType
 */
class DespatchLineType
{

    /**
     * BBIE
     *  Despatch Line. Identifier
     *  Identifies the Despatch Line.
     *  1
     *  Despatch Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Despatch Line. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Despatch Line
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Despatch Line. Note. Text
     *  Free-form text applying to the Despatch Line. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Despatch Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Note $note
     */
    private $note = null;

    /**
     * BBIE
     *  Despatch Line. Line Status Code. Code
     *  Identifies the status of the Despatch Line with respect to its original state.
     *  0..1
     *  Despatch Line
     *  Line Status Code
     *  Code
     *  Line Status_ Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\LineStatusCode $lineStatusCode
     */
    private $lineStatusCode = null;

    /**
     * BBIE
     *  Despatch Line. Delivered_ Quantity. Quantity
     *  The quantity despatched.
     *  0..1
     *  Despatch Line
     *  Delivered
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\DeliveredQuantity $deliveredQuantity
     */
    private $deliveredQuantity = null;

    /**
     * BBIE
     *  Despatch Line. Backorder_ Quantity. Quantity
     *  The quantity on Back Order at the Supplier.
     *  0..1
     *  Despatch Line
     *  Backorder
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\BackorderQuantity $backorderQuantity
     */
    private $backorderQuantity = null;

    /**
     * BBIE
     *  Despatch Line. Backorder_ Reason. Text
     *  The reason for the Back Order.
     *  0..1
     *  Despatch Line
     *  Backorder
     *  Reason
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\BackorderReason $backorderReason
     */
    private $backorderReason = null;

    /**
     * BBIE
     *  Despatch Line. Outstanding_ Quantity. Quantity
     *  The quantity outstanding (which will follow in a later despatch).
     *  0..1
     *  Despatch Line
     *  Outstanding
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\OutstandingQuantity $outstandingQuantity
     */
    private $outstandingQuantity = null;

    /**
     * BBIE
     *  Despatch Line. Outstanding_ Reason. Text
     *  The reason for the Outstanding Quantity.
     *  0..1
     *  Despatch Line
     *  Outstanding
     *  Reason
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\OutstandingReason $outstandingReason
     */
    private $outstandingReason = null;

    /**
     * BBIE
     *  Despatch Line. Oversupply_ Quantity. Quantity
     *  The quantity over-supplied.
     *  0..1
     *  Despatch Line
     *  Oversupply
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\OversupplyQuantity $oversupplyQuantity
     */
    private $oversupplyQuantity = null;

    /**
     * ASBIE
     *  Despatch Line. Order Line Reference
     *  An association to Order Line Reference.
     *  1..n
     *  Despatch Line
     *  Order Line Reference
     *  Order Line Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderLineReference[] $orderLineReference
     */
    private $orderLineReference = [
        
    ];

    /**
     * ASBIE
     *  Despatch Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Despatch Line
     *  Document Reference
     *  Document Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * ASBIE
     *  Despatch Line. Item
     *  An association to Item.
     *  1
     *  Despatch Line
     *  Item
     *  Item
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Item $item
     */
    private $item = null;

    /**
     * ASBIE
     *  Despatch Line. Shipment
     *  An association to Shipment.
     *  0..n
     *  Despatch Line
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
     *  Despatch Line. Identifier
     *  Identifies the Despatch Line.
     *  1
     *  Despatch Line
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
     *  Despatch Line. Identifier
     *  Identifies the Despatch Line.
     *  1
     *  Despatch Line
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
     *  Despatch Line. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Despatch Line
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
     *  Despatch Line. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Despatch Line
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
     *  Despatch Line. Note. Text
     *  Free-form text applying to the Despatch Line. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Despatch Line
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
     *  Despatch Line. Note. Text
     *  Free-form text applying to the Despatch Line. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Despatch Line
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
     * Gets as lineStatusCode
     *
     * BBIE
     *  Despatch Line. Line Status Code. Code
     *  Identifies the status of the Despatch Line with respect to its original state.
     *  0..1
     *  Despatch Line
     *  Line Status Code
     *  Code
     *  Line Status_ Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\LineStatusCode
     */
    public function getLineStatusCode()
    {
        return $this->lineStatusCode;
    }

    /**
     * Sets a new lineStatusCode
     *
     * BBIE
     *  Despatch Line. Line Status Code. Code
     *  Identifies the status of the Despatch Line with respect to its original state.
     *  0..1
     *  Despatch Line
     *  Line Status Code
     *  Code
     *  Line Status_ Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\LineStatusCode $lineStatusCode
     * @return self
     */
    public function setLineStatusCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\LineStatusCode $lineStatusCode)
    {
        $this->lineStatusCode = $lineStatusCode;
        return $this;
    }

    /**
     * Gets as deliveredQuantity
     *
     * BBIE
     *  Despatch Line. Delivered_ Quantity. Quantity
     *  The quantity despatched.
     *  0..1
     *  Despatch Line
     *  Delivered
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\DeliveredQuantity
     */
    public function getDeliveredQuantity()
    {
        return $this->deliveredQuantity;
    }

    /**
     * Sets a new deliveredQuantity
     *
     * BBIE
     *  Despatch Line. Delivered_ Quantity. Quantity
     *  The quantity despatched.
     *  0..1
     *  Despatch Line
     *  Delivered
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\DeliveredQuantity $deliveredQuantity
     * @return self
     */
    public function setDeliveredQuantity(\NOKA\PHPUBL\UBL\Common\BasicComponents\DeliveredQuantity $deliveredQuantity)
    {
        $this->deliveredQuantity = $deliveredQuantity;
        return $this;
    }

    /**
     * Gets as backorderQuantity
     *
     * BBIE
     *  Despatch Line. Backorder_ Quantity. Quantity
     *  The quantity on Back Order at the Supplier.
     *  0..1
     *  Despatch Line
     *  Backorder
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\BackorderQuantity
     */
    public function getBackorderQuantity()
    {
        return $this->backorderQuantity;
    }

    /**
     * Sets a new backorderQuantity
     *
     * BBIE
     *  Despatch Line. Backorder_ Quantity. Quantity
     *  The quantity on Back Order at the Supplier.
     *  0..1
     *  Despatch Line
     *  Backorder
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\BackorderQuantity $backorderQuantity
     * @return self
     */
    public function setBackorderQuantity(\NOKA\PHPUBL\UBL\Common\BasicComponents\BackorderQuantity $backorderQuantity)
    {
        $this->backorderQuantity = $backorderQuantity;
        return $this;
    }

    /**
     * Gets as backorderReason
     *
     * BBIE
     *  Despatch Line. Backorder_ Reason. Text
     *  The reason for the Back Order.
     *  0..1
     *  Despatch Line
     *  Backorder
     *  Reason
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\BackorderReason
     */
    public function getBackorderReason()
    {
        return $this->backorderReason;
    }

    /**
     * Sets a new backorderReason
     *
     * BBIE
     *  Despatch Line. Backorder_ Reason. Text
     *  The reason for the Back Order.
     *  0..1
     *  Despatch Line
     *  Backorder
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\BackorderReason $backorderReason
     * @return self
     */
    public function setBackorderReason(\NOKA\PHPUBL\UBL\Common\BasicComponents\BackorderReason $backorderReason)
    {
        $this->backorderReason = $backorderReason;
        return $this;
    }

    /**
     * Gets as outstandingQuantity
     *
     * BBIE
     *  Despatch Line. Outstanding_ Quantity. Quantity
     *  The quantity outstanding (which will follow in a later despatch).
     *  0..1
     *  Despatch Line
     *  Outstanding
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\OutstandingQuantity
     */
    public function getOutstandingQuantity()
    {
        return $this->outstandingQuantity;
    }

    /**
     * Sets a new outstandingQuantity
     *
     * BBIE
     *  Despatch Line. Outstanding_ Quantity. Quantity
     *  The quantity outstanding (which will follow in a later despatch).
     *  0..1
     *  Despatch Line
     *  Outstanding
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\OutstandingQuantity $outstandingQuantity
     * @return self
     */
    public function setOutstandingQuantity(\NOKA\PHPUBL\UBL\Common\BasicComponents\OutstandingQuantity $outstandingQuantity)
    {
        $this->outstandingQuantity = $outstandingQuantity;
        return $this;
    }

    /**
     * Gets as outstandingReason
     *
     * BBIE
     *  Despatch Line. Outstanding_ Reason. Text
     *  The reason for the Outstanding Quantity.
     *  0..1
     *  Despatch Line
     *  Outstanding
     *  Reason
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\OutstandingReason
     */
    public function getOutstandingReason()
    {
        return $this->outstandingReason;
    }

    /**
     * Sets a new outstandingReason
     *
     * BBIE
     *  Despatch Line. Outstanding_ Reason. Text
     *  The reason for the Outstanding Quantity.
     *  0..1
     *  Despatch Line
     *  Outstanding
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\OutstandingReason $outstandingReason
     * @return self
     */
    public function setOutstandingReason(\NOKA\PHPUBL\UBL\Common\BasicComponents\OutstandingReason $outstandingReason)
    {
        $this->outstandingReason = $outstandingReason;
        return $this;
    }

    /**
     * Gets as oversupplyQuantity
     *
     * BBIE
     *  Despatch Line. Oversupply_ Quantity. Quantity
     *  The quantity over-supplied.
     *  0..1
     *  Despatch Line
     *  Oversupply
     *  Quantity
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
     *  Despatch Line. Oversupply_ Quantity. Quantity
     *  The quantity over-supplied.
     *  0..1
     *  Despatch Line
     *  Oversupply
     *  Quantity
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
     * Adds as orderLineReference
     *
     * ASBIE
     *  Despatch Line. Order Line Reference
     *  An association to Order Line Reference.
     *  1..n
     *  Despatch Line
     *  Order Line Reference
     *  Order Line Reference
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderLineReference $orderLineReference
     */
    public function addToOrderLineReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderLineReference $orderLineReference)
    {
        $this->orderLineReference[] = $orderLineReference;
        return $this;
    }

    /**
     * isset orderLineReference
     *
     * ASBIE
     *  Despatch Line. Order Line Reference
     *  An association to Order Line Reference.
     *  1..n
     *  Despatch Line
     *  Order Line Reference
     *  Order Line Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderLineReference($index)
    {
        return isset($this->orderLineReference[$index]);
    }

    /**
     * unset orderLineReference
     *
     * ASBIE
     *  Despatch Line. Order Line Reference
     *  An association to Order Line Reference.
     *  1..n
     *  Despatch Line
     *  Order Line Reference
     *  Order Line Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderLineReference($index)
    {
        unset($this->orderLineReference[$index]);
    }

    /**
     * Gets as orderLineReference
     *
     * ASBIE
     *  Despatch Line. Order Line Reference
     *  An association to Order Line Reference.
     *  1..n
     *  Despatch Line
     *  Order Line Reference
     *  Order Line Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderLineReference[]
     */
    public function getOrderLineReference()
    {
        return $this->orderLineReference;
    }

    /**
     * Sets a new orderLineReference
     *
     * ASBIE
     *  Despatch Line. Order Line Reference
     *  An association to Order Line Reference.
     *  1..n
     *  Despatch Line
     *  Order Line Reference
     *  Order Line Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderLineReference[] $orderLineReference
     * @return self
     */
    public function setOrderLineReference(array $orderLineReference)
    {
        $this->orderLineReference = $orderLineReference;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Despatch Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Despatch Line
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
     *  Despatch Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Despatch Line
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
     *  Despatch Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Despatch Line
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
     *  Despatch Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Despatch Line
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
     *  Despatch Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Despatch Line
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
     * Gets as item
     *
     * ASBIE
     *  Despatch Line. Item
     *  An association to Item.
     *  1
     *  Despatch Line
     *  Item
     *  Item
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\Item
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * ASBIE
     *  Despatch Line. Item
     *  An association to Item.
     *  1
     *  Despatch Line
     *  Item
     *  Item
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Item $item
     * @return self
     */
    public function setItem(\NOKA\PHPUBL\UBL\Common\AggregateComponents\Item $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Adds as shipment
     *
     * ASBIE
     *  Despatch Line. Shipment
     *  An association to Shipment.
     *  0..n
     *  Despatch Line
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
     *  Despatch Line. Shipment
     *  An association to Shipment.
     *  0..n
     *  Despatch Line
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
     *  Despatch Line. Shipment
     *  An association to Shipment.
     *  0..n
     *  Despatch Line
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
     *  Despatch Line. Shipment
     *  An association to Shipment.
     *  0..n
     *  Despatch Line
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
     *  Despatch Line. Shipment
     *  An association to Shipment.
     *  0..n
     *  Despatch Line
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

