<?php

namespace NOKA\PHPUBL\UBL;

/**
 * Class representing OrderResponseSimpleType
 *
 * ABIE
 *  Order Response Simple. Details
 *  The document used to indicate simple acceptance or rejection of an entire Order.
 *  Order Response Simple
 *  Order Acknowledgement, PO Response
 * XSD Type: OrderResponseSimpleType
 */
class OrderResponseSimpleType
{

    /**
     * A container for all extensions present in the document.
     *
     * @var \NOKA\PHPUBL\UBL\Common\ExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Order Response Simple. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Order Response Simple
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.0.5
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\UBLVersionID $uBLVersionID
     */
    private $uBLVersionID = null;

    /**
     * BBIE
     *  Order Response Simple. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Order Response Simple
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *  NES
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\CustomizationID $customizationID
     */
    private $customizationID = null;

    /**
     * BBIE
     *  Order Response Simple. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Order Response Simple
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *  BasicProcurementProcess
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ProfileID $profileID
     */
    private $profileID = null;

    /**
     * BBIE
     *  Order Response Simple. Identifier
     *  An identifier for the Order Response Simple assigned by the Seller.
     *  1
     *  Order Response Simple
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Purchase Order Response Number, Acknowledgement of Order Number
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Order Response Simple. Copy_ Indicator. Indicator
     *  Indicates whether the Order Response Simple is a copy (true) or not (false).
     *  0..1
     *  Order Response Simple
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
     *  Order Response Simple. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Order Response Simple
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Order Response Simple. Issue Date. Date
     *  The date assigned by the Seller on which the Order was responded to.
     *  1
     *  Order Response Simple
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Order Response Simple. Issue Time. Time
     *  The time assigned by the Seller at which the Order was responded to.
     *  0..1
     *  Order Response Simple
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Order Response Simple. Note. Text
     *  Free-form text applying to the Order Response Simple. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Order Response Simple
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * BBIE
     *  Order Response Simple. Accepted_ Indicator. Indicator
     *  Indicates whether the Order is accepted (true) or rejected (false).
     *  1
     *  Order Response Simple
     *  Accepted
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $acceptedIndicator
     */
    private $acceptedIndicator = null;

    /**
     * BBIE
     *  Order Response Simple. Rejection_ Note. Text
     *  The reason for rejection if the order was not accepted.
     *  0..1
     *  Order Response Simple
     *  Rejection
     *  Note
     *  Text
     *  Text. Type
     *  "Out of Stock","Not able to supply","Unable to fulfill within the contracted conditions", "Buyer Account not Recognised"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\RejectionNote $rejectionNote
     */
    private $rejectionNote = null;

    /**
     * BBIE
     *  Order Response Simple. Customer_ Reference. Text
     *  A supplementary reference for the transaction (e.g., when using purchasing card).
     *  0..1
     *  Order Response Simple
     *  Customer
     *  Reference
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\CustomerReference $customerReference
     */
    private $customerReference = null;

    /**
     * BBIE
     *  Order Response Simple. Accounting Cost Code. Code
     *  An accounting cost code applied to the order as a whole.
     *  0..1
     *  Order Response Simple
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AccountingCostCode $accountingCostCode
     */
    private $accountingCostCode = null;

    /**
     * BBIE
     *  Order Response Simple. Accounting Cost. Text
     *  An accounting cost code applied to the order as a whole, expressed as text.
     *  0..1
     *  Order Response Simple
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AccountingCost $accountingCost
     */
    private $accountingCost = null;

    /**
     * ASBIE
     *  Order Response Simple. Order Reference
     *  An association to Order Reference (the reference of the Order being responded to).
     *  1
     *  Order Response Simple
     *  Order Reference
     *  Order Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderReference $orderReference
     */
    private $orderReference = null;

    /**
     * ASBIE
     *  Order Response Simple. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Order Response Simple
     *  Additional
     *  Document Reference
     *  Document Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AdditionalDocumentReference[] $additionalDocumentReference
     */
    private $additionalDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Order Response Simple. Signature
     *  An association to Signature.
     *  0..n
     *  Order Response Simple
     *  Signature
     *  Signature
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Signature[] $signature
     */
    private $signature = [
        
    ];

    /**
     * ASBIE
     *  Order Response Simple. Seller_ Supplier Party. Supplier Party
     *  An association to the Seller.
     *  1
     *  Order Response Simple
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\SellerSupplierParty $sellerSupplierParty
     */
    private $sellerSupplierParty = null;

    /**
     * ASBIE
     *  Order Response Simple. Buyer_ Customer Party. Customer Party
     *  An association to the Buyer.
     *  1
     *  Order Response Simple
     *  Buyer
     *  Customer Party
     *  Customer Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\BuyerCustomerParty $buyerCustomerParty
     */
    private $buyerCustomerParty = null;

    /**
     * ASBIE
     *  Order Response Simple. Originator_ Customer Party. Customer Party
     *  An association to the Originator.
     *  0..1
     *  Order Response Simple
     *  Originator
     *  Customer Party
     *  Customer Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginatorCustomerParty $originatorCustomerParty
     */
    private $originatorCustomerParty = null;

    /**
     * ASBIE
     *  Order Response Simple. Accounting_ Supplier Party. Supplier Party
     *  An association to the Accounting Supplier Party.
     *  0..1
     *  Order Response Simple
     *  Accounting
     *  Supplier Party
     *  Supplier Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AccountingSupplierParty $accountingSupplierParty
     */
    private $accountingSupplierParty = null;

    /**
     * ASBIE
     *  Order Response Simple. Accounting_ Customer Party. Customer Party
     *  An association to the Accounting Customer Party.
     *  0..1
     *  Order Response Simple
     *  Accounting
     *  Customer Party
     *  Customer Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AccountingCustomerParty $accountingCustomerParty
     */
    private $accountingCustomerParty = null;

    /**
     * Adds as uBLExtension
     *
     * A container for all extensions present in the document.
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\ExtensionComponents\UBLExtension $uBLExtension
     */
    public function addToUBLExtensions(\NOKA\PHPUBL\UBL\Common\ExtensionComponents\UBLExtension $uBLExtension)
    {
        $this->uBLExtensions[] = $uBLExtension;
        return $this;
    }

    /**
     * isset uBLExtensions
     *
     * A container for all extensions present in the document.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUBLExtensions($index)
    {
        return isset($this->uBLExtensions[$index]);
    }

    /**
     * unset uBLExtensions
     *
     * A container for all extensions present in the document.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUBLExtensions($index)
    {
        unset($this->uBLExtensions[$index]);
    }

    /**
     * Gets as uBLExtensions
     *
     * A container for all extensions present in the document.
     *
     * @return \NOKA\PHPUBL\UBL\Common\ExtensionComponents\UBLExtension[]
     */
    public function getUBLExtensions()
    {
        return $this->uBLExtensions;
    }

    /**
     * Sets a new uBLExtensions
     *
     * A container for all extensions present in the document.
     *
     * @param \NOKA\PHPUBL\UBL\Common\ExtensionComponents\UBLExtension[] $uBLExtensions
     * @return self
     */
    public function setUBLExtensions(array $uBLExtensions)
    {
        $this->uBLExtensions = $uBLExtensions;
        return $this;
    }

    /**
     * Gets as uBLVersionID
     *
     * BBIE
     *  Order Response Simple. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Order Response Simple
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.0.5
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\UBLVersionID
     */
    public function getUBLVersionID()
    {
        return $this->uBLVersionID;
    }

    /**
     * Sets a new uBLVersionID
     *
     * BBIE
     *  Order Response Simple. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Order Response Simple
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.0.5
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\UBLVersionID $uBLVersionID
     * @return self
     */
    public function setUBLVersionID(\NOKA\PHPUBL\UBL\Common\BasicComponents\UBLVersionID $uBLVersionID)
    {
        $this->uBLVersionID = $uBLVersionID;
        return $this;
    }

    /**
     * Gets as customizationID
     *
     * BBIE
     *  Order Response Simple. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Order Response Simple
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *  NES
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\CustomizationID
     */
    public function getCustomizationID()
    {
        return $this->customizationID;
    }

    /**
     * Sets a new customizationID
     *
     * BBIE
     *  Order Response Simple. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Order Response Simple
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *  NES
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\CustomizationID $customizationID
     * @return self
     */
    public function setCustomizationID(\NOKA\PHPUBL\UBL\Common\BasicComponents\CustomizationID $customizationID)
    {
        $this->customizationID = $customizationID;
        return $this;
    }

    /**
     * Gets as profileID
     *
     * BBIE
     *  Order Response Simple. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Order Response Simple
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *  BasicProcurementProcess
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ProfileID
     */
    public function getProfileID()
    {
        return $this->profileID;
    }

    /**
     * Sets a new profileID
     *
     * BBIE
     *  Order Response Simple. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Order Response Simple
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *  BasicProcurementProcess
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ProfileID $profileID
     * @return self
     */
    public function setProfileID(\NOKA\PHPUBL\UBL\Common\BasicComponents\ProfileID $profileID)
    {
        $this->profileID = $profileID;
        return $this;
    }

    /**
     * Gets as iD
     *
     * BBIE
     *  Order Response Simple. Identifier
     *  An identifier for the Order Response Simple assigned by the Seller.
     *  1
     *  Order Response Simple
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Purchase Order Response Number, Acknowledgement of Order Number
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
     *  Order Response Simple. Identifier
     *  An identifier for the Order Response Simple assigned by the Seller.
     *  1
     *  Order Response Simple
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Purchase Order Response Number, Acknowledgement of Order Number
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
     * Gets as copyIndicator
     *
     * BBIE
     *  Order Response Simple. Copy_ Indicator. Indicator
     *  Indicates whether the Order Response Simple is a copy (true) or not (false).
     *  0..1
     *  Order Response Simple
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
     *  Order Response Simple. Copy_ Indicator. Indicator
     *  Indicates whether the Order Response Simple is a copy (true) or not (false).
     *  0..1
     *  Order Response Simple
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
     *  Order Response Simple. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Order Response Simple
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
     *  Order Response Simple. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Order Response Simple
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
     *  Order Response Simple. Issue Date. Date
     *  The date assigned by the Seller on which the Order was responded to.
     *  1
     *  Order Response Simple
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
     *  Order Response Simple. Issue Date. Date
     *  The date assigned by the Seller on which the Order was responded to.
     *  1
     *  Order Response Simple
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
     *  Order Response Simple. Issue Time. Time
     *  The time assigned by the Seller at which the Order was responded to.
     *  0..1
     *  Order Response Simple
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
     *  Order Response Simple. Issue Time. Time
     *  The time assigned by the Seller at which the Order was responded to.
     *  0..1
     *  Order Response Simple
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
     * Adds as note
     *
     * BBIE
     *  Order Response Simple. Note. Text
     *  Free-form text applying to the Order Response Simple. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Order Response Simple
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Note $note
     */
    public function addToNote(\NOKA\PHPUBL\UBL\Common\BasicComponents\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * BBIE
     *  Order Response Simple. Note. Text
     *  Free-form text applying to the Order Response Simple. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Order Response Simple
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * BBIE
     *  Order Response Simple. Note. Text
     *  Free-form text applying to the Order Response Simple. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Order Response Simple
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * BBIE
     *  Order Response Simple. Note. Text
     *  Free-form text applying to the Order Response Simple. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Order Response Simple
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Order Response Simple. Note. Text
     *  Free-form text applying to the Order Response Simple. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Order Response Simple
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Note[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as acceptedIndicator
     *
     * BBIE
     *  Order Response Simple. Accepted_ Indicator. Indicator
     *  Indicates whether the Order is accepted (true) or rejected (false).
     *  1
     *  Order Response Simple
     *  Accepted
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getAcceptedIndicator()
    {
        return $this->acceptedIndicator;
    }

    /**
     * Sets a new acceptedIndicator
     *
     * BBIE
     *  Order Response Simple. Accepted_ Indicator. Indicator
     *  Indicates whether the Order is accepted (true) or rejected (false).
     *  1
     *  Order Response Simple
     *  Accepted
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $acceptedIndicator
     * @return self
     */
    public function setAcceptedIndicator($acceptedIndicator)
    {
        $this->acceptedIndicator = $acceptedIndicator;
        return $this;
    }

    /**
     * Gets as rejectionNote
     *
     * BBIE
     *  Order Response Simple. Rejection_ Note. Text
     *  The reason for rejection if the order was not accepted.
     *  0..1
     *  Order Response Simple
     *  Rejection
     *  Note
     *  Text
     *  Text. Type
     *  "Out of Stock","Not able to supply","Unable to fulfill within the contracted conditions", "Buyer Account not Recognised"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\RejectionNote
     */
    public function getRejectionNote()
    {
        return $this->rejectionNote;
    }

    /**
     * Sets a new rejectionNote
     *
     * BBIE
     *  Order Response Simple. Rejection_ Note. Text
     *  The reason for rejection if the order was not accepted.
     *  0..1
     *  Order Response Simple
     *  Rejection
     *  Note
     *  Text
     *  Text. Type
     *  "Out of Stock","Not able to supply","Unable to fulfill within the contracted conditions", "Buyer Account not Recognised"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\RejectionNote $rejectionNote
     * @return self
     */
    public function setRejectionNote(\NOKA\PHPUBL\UBL\Common\BasicComponents\RejectionNote $rejectionNote)
    {
        $this->rejectionNote = $rejectionNote;
        return $this;
    }

    /**
     * Gets as customerReference
     *
     * BBIE
     *  Order Response Simple. Customer_ Reference. Text
     *  A supplementary reference for the transaction (e.g., when using purchasing card).
     *  0..1
     *  Order Response Simple
     *  Customer
     *  Reference
     *  Text
     *  Text. Type
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
     *  Order Response Simple. Customer_ Reference. Text
     *  A supplementary reference for the transaction (e.g., when using purchasing card).
     *  0..1
     *  Order Response Simple
     *  Customer
     *  Reference
     *  Text
     *  Text. Type
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
     * Gets as accountingCostCode
     *
     * BBIE
     *  Order Response Simple. Accounting Cost Code. Code
     *  An accounting cost code applied to the order as a whole.
     *  0..1
     *  Order Response Simple
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\AccountingCostCode
     */
    public function getAccountingCostCode()
    {
        return $this->accountingCostCode;
    }

    /**
     * Sets a new accountingCostCode
     *
     * BBIE
     *  Order Response Simple. Accounting Cost Code. Code
     *  An accounting cost code applied to the order as a whole.
     *  0..1
     *  Order Response Simple
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\AccountingCostCode $accountingCostCode
     * @return self
     */
    public function setAccountingCostCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\AccountingCostCode $accountingCostCode)
    {
        $this->accountingCostCode = $accountingCostCode;
        return $this;
    }

    /**
     * Gets as accountingCost
     *
     * BBIE
     *  Order Response Simple. Accounting Cost. Text
     *  An accounting cost code applied to the order as a whole, expressed as text.
     *  0..1
     *  Order Response Simple
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\AccountingCost
     */
    public function getAccountingCost()
    {
        return $this->accountingCost;
    }

    /**
     * Sets a new accountingCost
     *
     * BBIE
     *  Order Response Simple. Accounting Cost. Text
     *  An accounting cost code applied to the order as a whole, expressed as text.
     *  0..1
     *  Order Response Simple
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\AccountingCost $accountingCost
     * @return self
     */
    public function setAccountingCost(\NOKA\PHPUBL\UBL\Common\BasicComponents\AccountingCost $accountingCost)
    {
        $this->accountingCost = $accountingCost;
        return $this;
    }

    /**
     * Gets as orderReference
     *
     * ASBIE
     *  Order Response Simple. Order Reference
     *  An association to Order Reference (the reference of the Order being responded to).
     *  1
     *  Order Response Simple
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
     *  Order Response Simple. Order Reference
     *  An association to Order Reference (the reference of the Order being responded to).
     *  1
     *  Order Response Simple
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

    /**
     * Adds as additionalDocumentReference
     *
     * ASBIE
     *  Order Response Simple. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Order Response Simple
     *  Additional
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\AdditionalDocumentReference $additionalDocumentReference
     */
    public function addToAdditionalDocumentReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\AdditionalDocumentReference $additionalDocumentReference)
    {
        $this->additionalDocumentReference[] = $additionalDocumentReference;
        return $this;
    }

    /**
     * isset additionalDocumentReference
     *
     * ASBIE
     *  Order Response Simple. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Order Response Simple
     *  Additional
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalDocumentReference($index)
    {
        return isset($this->additionalDocumentReference[$index]);
    }

    /**
     * unset additionalDocumentReference
     *
     * ASBIE
     *  Order Response Simple. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Order Response Simple
     *  Additional
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalDocumentReference($index)
    {
        unset($this->additionalDocumentReference[$index]);
    }

    /**
     * Gets as additionalDocumentReference
     *
     * ASBIE
     *  Order Response Simple. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Order Response Simple
     *  Additional
     *  Document Reference
     *  Document Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\AdditionalDocumentReference[]
     */
    public function getAdditionalDocumentReference()
    {
        return $this->additionalDocumentReference;
    }

    /**
     * Sets a new additionalDocumentReference
     *
     * ASBIE
     *  Order Response Simple. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Order Response Simple
     *  Additional
     *  Document Reference
     *  Document Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\AdditionalDocumentReference[] $additionalDocumentReference
     * @return self
     */
    public function setAdditionalDocumentReference(array $additionalDocumentReference)
    {
        $this->additionalDocumentReference = $additionalDocumentReference;
        return $this;
    }

    /**
     * Adds as signature
     *
     * ASBIE
     *  Order Response Simple. Signature
     *  An association to Signature.
     *  0..n
     *  Order Response Simple
     *  Signature
     *  Signature
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Signature $signature
     */
    public function addToSignature(\NOKA\PHPUBL\UBL\Common\AggregateComponents\Signature $signature)
    {
        $this->signature[] = $signature;
        return $this;
    }

    /**
     * isset signature
     *
     * ASBIE
     *  Order Response Simple. Signature
     *  An association to Signature.
     *  0..n
     *  Order Response Simple
     *  Signature
     *  Signature
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSignature($index)
    {
        return isset($this->signature[$index]);
    }

    /**
     * unset signature
     *
     * ASBIE
     *  Order Response Simple. Signature
     *  An association to Signature.
     *  0..n
     *  Order Response Simple
     *  Signature
     *  Signature
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSignature($index)
    {
        unset($this->signature[$index]);
    }

    /**
     * Gets as signature
     *
     * ASBIE
     *  Order Response Simple. Signature
     *  An association to Signature.
     *  0..n
     *  Order Response Simple
     *  Signature
     *  Signature
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\Signature[]
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * ASBIE
     *  Order Response Simple. Signature
     *  An association to Signature.
     *  0..n
     *  Order Response Simple
     *  Signature
     *  Signature
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Signature[] $signature
     * @return self
     */
    public function setSignature(array $signature)
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * Gets as sellerSupplierParty
     *
     * ASBIE
     *  Order Response Simple. Seller_ Supplier Party. Supplier Party
     *  An association to the Seller.
     *  1
     *  Order Response Simple
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\SellerSupplierParty
     */
    public function getSellerSupplierParty()
    {
        return $this->sellerSupplierParty;
    }

    /**
     * Sets a new sellerSupplierParty
     *
     * ASBIE
     *  Order Response Simple. Seller_ Supplier Party. Supplier Party
     *  An association to the Seller.
     *  1
     *  Order Response Simple
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\SellerSupplierParty $sellerSupplierParty
     * @return self
     */
    public function setSellerSupplierParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\SellerSupplierParty $sellerSupplierParty)
    {
        $this->sellerSupplierParty = $sellerSupplierParty;
        return $this;
    }

    /**
     * Gets as buyerCustomerParty
     *
     * ASBIE
     *  Order Response Simple. Buyer_ Customer Party. Customer Party
     *  An association to the Buyer.
     *  1
     *  Order Response Simple
     *  Buyer
     *  Customer Party
     *  Customer Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\BuyerCustomerParty
     */
    public function getBuyerCustomerParty()
    {
        return $this->buyerCustomerParty;
    }

    /**
     * Sets a new buyerCustomerParty
     *
     * ASBIE
     *  Order Response Simple. Buyer_ Customer Party. Customer Party
     *  An association to the Buyer.
     *  1
     *  Order Response Simple
     *  Buyer
     *  Customer Party
     *  Customer Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\BuyerCustomerParty $buyerCustomerParty
     * @return self
     */
    public function setBuyerCustomerParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\BuyerCustomerParty $buyerCustomerParty)
    {
        $this->buyerCustomerParty = $buyerCustomerParty;
        return $this;
    }

    /**
     * Gets as originatorCustomerParty
     *
     * ASBIE
     *  Order Response Simple. Originator_ Customer Party. Customer Party
     *  An association to the Originator.
     *  0..1
     *  Order Response Simple
     *  Originator
     *  Customer Party
     *  Customer Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginatorCustomerParty
     */
    public function getOriginatorCustomerParty()
    {
        return $this->originatorCustomerParty;
    }

    /**
     * Sets a new originatorCustomerParty
     *
     * ASBIE
     *  Order Response Simple. Originator_ Customer Party. Customer Party
     *  An association to the Originator.
     *  0..1
     *  Order Response Simple
     *  Originator
     *  Customer Party
     *  Customer Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginatorCustomerParty $originatorCustomerParty
     * @return self
     */
    public function setOriginatorCustomerParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginatorCustomerParty $originatorCustomerParty)
    {
        $this->originatorCustomerParty = $originatorCustomerParty;
        return $this;
    }

    /**
     * Gets as accountingSupplierParty
     *
     * ASBIE
     *  Order Response Simple. Accounting_ Supplier Party. Supplier Party
     *  An association to the Accounting Supplier Party.
     *  0..1
     *  Order Response Simple
     *  Accounting
     *  Supplier Party
     *  Supplier Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\AccountingSupplierParty
     */
    public function getAccountingSupplierParty()
    {
        return $this->accountingSupplierParty;
    }

    /**
     * Sets a new accountingSupplierParty
     *
     * ASBIE
     *  Order Response Simple. Accounting_ Supplier Party. Supplier Party
     *  An association to the Accounting Supplier Party.
     *  0..1
     *  Order Response Simple
     *  Accounting
     *  Supplier Party
     *  Supplier Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\AccountingSupplierParty $accountingSupplierParty
     * @return self
     */
    public function setAccountingSupplierParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\AccountingSupplierParty $accountingSupplierParty)
    {
        $this->accountingSupplierParty = $accountingSupplierParty;
        return $this;
    }

    /**
     * Gets as accountingCustomerParty
     *
     * ASBIE
     *  Order Response Simple. Accounting_ Customer Party. Customer Party
     *  An association to the Accounting Customer Party.
     *  0..1
     *  Order Response Simple
     *  Accounting
     *  Customer Party
     *  Customer Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\AccountingCustomerParty
     */
    public function getAccountingCustomerParty()
    {
        return $this->accountingCustomerParty;
    }

    /**
     * Sets a new accountingCustomerParty
     *
     * ASBIE
     *  Order Response Simple. Accounting_ Customer Party. Customer Party
     *  An association to the Accounting Customer Party.
     *  0..1
     *  Order Response Simple
     *  Accounting
     *  Customer Party
     *  Customer Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\AccountingCustomerParty $accountingCustomerParty
     * @return self
     */
    public function setAccountingCustomerParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\AccountingCustomerParty $accountingCustomerParty)
    {
        $this->accountingCustomerParty = $accountingCustomerParty;
        return $this;
    }


}

