<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing OrderReferenceType
 *
 * ABIE
 *  Order Reference. Details
 *  Information about an Order Reference.
 *  Order Reference
 * XSD Type: OrderReferenceType
 */
class OrderReferenceType
{

    /**
     * BBIE
     *  Order Reference. Identifier
     *  Identifies the referenced Order assigned by the buyer.
     *  1
     *  Order Reference
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "PO-001" "3333-44-123"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Order Reference. Sales Order Identifier. Identifier
     *  Identifies the referenced Order assigned by the seller.
     *  0..1
     *  Order Reference
     *  Sales Order Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\SalesOrderID $salesOrderID
     */
    private $salesOrderID = null;

    /**
     * BBIE
     *  Order Reference. Copy_ Indicator. Indicator
     *  Indicates whether the referenced Order is a copy (true) or the original (false).
     *  0..1
     *  Order Reference
     *  Copy
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $copyIndicator
     */
    private $copyIndicator = null;

    /**
     * BBIE
     *  Order Reference. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Order Reference
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Order Reference. Issue Date. Date
     *  The date on which the referenced Order was issued.
     *  0..1
     *  Order Reference
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Order Reference. Issue Time. Time
     *  The time at which the referenced Order was issued.
     *  0..1
     *  Order Reference
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Order Reference. Customer_ Reference. Text
     *  A reference used (CRI) for tagging purchasing card transactions.
     *  0..1
     *  Order Reference
     *  Customer
     *  Reference
     *  Text
     *  Text. Type
     *  Customer Reference Identifier (CRI) when using a puchasing card
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\CustomerReference $customerReference
     */
    private $customerReference = null;

    /**
     * ASBIE
     *  Order Reference. Document Reference
     *  An association to Document Reference.
     *  0..1
     *  Order Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentReference $documentReference
     */
    private $documentReference = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Order Reference. Identifier
     *  Identifies the referenced Order assigned by the buyer.
     *  1
     *  Order Reference
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "PO-001" "3333-44-123"
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
     *  Order Reference. Identifier
     *  Identifies the referenced Order assigned by the buyer.
     *  1
     *  Order Reference
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "PO-001" "3333-44-123"
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
     * Gets as salesOrderID
     *
     * BBIE
     *  Order Reference. Sales Order Identifier. Identifier
     *  Identifies the referenced Order assigned by the seller.
     *  0..1
     *  Order Reference
     *  Sales Order Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\SalesOrderID
     */
    public function getSalesOrderID()
    {
        return $this->salesOrderID;
    }

    /**
     * Sets a new salesOrderID
     *
     * BBIE
     *  Order Reference. Sales Order Identifier. Identifier
     *  Identifies the referenced Order assigned by the seller.
     *  0..1
     *  Order Reference
     *  Sales Order Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\SalesOrderID $salesOrderID
     * @return self
     */
    public function setSalesOrderID(\NOKA\PHPUBL\UBL\Common\BasicComponents\SalesOrderID $salesOrderID)
    {
        $this->salesOrderID = $salesOrderID;
        return $this;
    }

    /**
     * Gets as copyIndicator
     *
     * BBIE
     *  Order Reference. Copy_ Indicator. Indicator
     *  Indicates whether the referenced Order is a copy (true) or the original (false).
     *  0..1
     *  Order Reference
     *  Copy
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getCopyIndicator()
    {
        return $this->copyIndicator;
    }

    /**
     * Sets a new copyIndicator
     *
     * BBIE
     *  Order Reference. Copy_ Indicator. Indicator
     *  Indicates whether the referenced Order is a copy (true) or the original (false).
     *  0..1
     *  Order Reference
     *  Copy
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $copyIndicator
     * @return self
     */
    public function setCopyIndicator($copyIndicator)
    {
        $this->copyIndicator = $copyIndicator;
        return $this;
    }

    /**
     * Gets as uUID
     *
     * BBIE
     *  Order Reference. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Order Reference
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
     *  Order Reference. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Order Reference
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
     * Gets as issueDate
     *
     * BBIE
     *  Order Reference. Issue Date. Date
     *  The date on which the referenced Order was issued.
     *  0..1
     *  Order Reference
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * Sets a new issueDate
     *
     * BBIE
     *  Order Reference. Issue Date. Date
     *  The date on which the referenced Order was issued.
     *  0..1
     *  Order Reference
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $issueDate
     * @return self
     */
    public function setIssueDate(\DateTime $issueDate)
    {
        $this->issueDate = $issueDate;
        return $this;
    }

    /**
     * Gets as issueTime
     *
     * BBIE
     *  Order Reference. Issue Time. Time
     *  The time at which the referenced Order was issued.
     *  0..1
     *  Order Reference
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getIssueTime()
    {
        return $this->issueTime;
    }

    /**
     * Sets a new issueTime
     *
     * BBIE
     *  Order Reference. Issue Time. Time
     *  The time at which the referenced Order was issued.
     *  0..1
     *  Order Reference
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $issueTime
     * @return self
     */
    public function setIssueTime(\DateTime $issueTime)
    {
        $this->issueTime = $issueTime;
        return $this;
    }

    /**
     * Gets as customerReference
     *
     * BBIE
     *  Order Reference. Customer_ Reference. Text
     *  A reference used (CRI) for tagging purchasing card transactions.
     *  0..1
     *  Order Reference
     *  Customer
     *  Reference
     *  Text
     *  Text. Type
     *  Customer Reference Identifier (CRI) when using a puchasing card
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\CustomerReference
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * Sets a new customerReference
     *
     * BBIE
     *  Order Reference. Customer_ Reference. Text
     *  A reference used (CRI) for tagging purchasing card transactions.
     *  0..1
     *  Order Reference
     *  Customer
     *  Reference
     *  Text
     *  Text. Type
     *  Customer Reference Identifier (CRI) when using a puchasing card
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\CustomerReference $customerReference
     * @return self
     */
    public function setCustomerReference(\NOKA\PHPUBL\UBL\Common\BasicComponents\CustomerReference $customerReference)
    {
        $this->customerReference = $customerReference;
        return $this;
    }

    /**
     * Gets as documentReference
     *
     * ASBIE
     *  Order Reference. Document Reference
     *  An association to Document Reference.
     *  0..1
     *  Order Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentReference
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * ASBIE
     *  Order Reference. Document Reference
     *  An association to Document Reference.
     *  0..1
     *  Order Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentReference $documentReference
     * @return self
     */
    public function setDocumentReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentReference $documentReference)
    {
        $this->documentReference = $documentReference;
        return $this;
    }


}

