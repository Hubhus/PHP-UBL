<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing OrderLineReferenceType
 *
 * ABIE
 *  Order Line Reference. Details
 *  Information about an Order Line Reference.
 *  Order Line Reference
 * XSD Type: OrderLineReferenceType
 */
class OrderLineReferenceType
{

    /**
     * BBIE
     *  Order Line Reference. Line Identifier. Identifier
     *  Identifies the referenced Order Line assigned by the buyer.
     *  1
     *  Order Line Reference
     *  Line Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\LineID $lineID
     */
    private $lineID = null;

    /**
     * BBIE
     *  Order Line Reference. Sales Order_ Line Identifier. Identifier
     *  Identifies the referenced Order Line assigned by the seller.
     *  0..1
     *  Order Line Reference
     *  Sales Order
     *  Line Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\SalesOrderLineID $salesOrderLineID
     */
    private $salesOrderLineID = null;

    /**
     * BBIE
     *  Order Line Reference. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Order Line Reference
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Order Line Reference. Line Status Code. Code
     *  Identifies the status of the referenced Order Line with respect to its original state.
     *  0..1
     *  Order Line Reference
     *  Line Status Code
     *  Code
     *  Line Status_ Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\LineStatusCode $lineStatusCode
     */
    private $lineStatusCode = null;

    /**
     * ASBIE
     *  Order Line Reference. Order Reference
     *  An association to Order Reference.
     *  0..1
     *  Order Line Reference
     *  Order Reference
     *  Order Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderReference $orderReference
     */
    private $orderReference = null;

    /**
     * Gets as lineID
     *
     * BBIE
     *  Order Line Reference. Line Identifier. Identifier
     *  Identifies the referenced Order Line assigned by the buyer.
     *  1
     *  Order Line Reference
     *  Line Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\LineID
     */
    public function getLineID()
    {
        return $this->lineID;
    }

    /**
     * Sets a new lineID
     *
     * BBIE
     *  Order Line Reference. Line Identifier. Identifier
     *  Identifies the referenced Order Line assigned by the buyer.
     *  1
     *  Order Line Reference
     *  Line Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\LineID $lineID
     * @return self
     */
    public function setLineID(\NOKA\PHPUBL\UBL\Common\BasicComponents\LineID $lineID)
    {
        $this->lineID = $lineID;
        return $this;
    }

    /**
     * Gets as salesOrderLineID
     *
     * BBIE
     *  Order Line Reference. Sales Order_ Line Identifier. Identifier
     *  Identifies the referenced Order Line assigned by the seller.
     *  0..1
     *  Order Line Reference
     *  Sales Order
     *  Line Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\SalesOrderLineID
     */
    public function getSalesOrderLineID()
    {
        return $this->salesOrderLineID;
    }

    /**
     * Sets a new salesOrderLineID
     *
     * BBIE
     *  Order Line Reference. Sales Order_ Line Identifier. Identifier
     *  Identifies the referenced Order Line assigned by the seller.
     *  0..1
     *  Order Line Reference
     *  Sales Order
     *  Line Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\SalesOrderLineID $salesOrderLineID
     * @return self
     */
    public function setSalesOrderLineID(\NOKA\PHPUBL\UBL\Common\BasicComponents\SalesOrderLineID $salesOrderLineID)
    {
        $this->salesOrderLineID = $salesOrderLineID;
        return $this;
    }

    /**
     * Gets as uUID
     *
     * BBIE
     *  Order Line Reference. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Order Line Reference
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
     *  Order Line Reference. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Order Line Reference
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
     * Gets as lineStatusCode
     *
     * BBIE
     *  Order Line Reference. Line Status Code. Code
     *  Identifies the status of the referenced Order Line with respect to its original state.
     *  0..1
     *  Order Line Reference
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
     *  Order Line Reference. Line Status Code. Code
     *  Identifies the status of the referenced Order Line with respect to its original state.
     *  0..1
     *  Order Line Reference
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
     * Gets as orderReference
     *
     * ASBIE
     *  Order Line Reference. Order Reference
     *  An association to Order Reference.
     *  0..1
     *  Order Line Reference
     *  Order Reference
     *  Order Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderReference
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * Sets a new orderReference
     *
     * ASBIE
     *  Order Line Reference. Order Reference
     *  An association to Order Reference.
     *  0..1
     *  Order Line Reference
     *  Order Reference
     *  Order Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderReference $orderReference
     * @return self
     */
    public function setOrderReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderReference $orderReference)
    {
        $this->orderReference = $orderReference;
        return $this;
    }


}

