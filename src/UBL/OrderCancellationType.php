<?php

namespace NOKA\PHPUBL\UBL;

/**
 * Class representing OrderCancellationType
 *
 * ABIE
 *  Order Cancellation. Details
 *  The document used to cancel an entire Order.
 *  Order Cancellation
 * XSD Type: OrderCancellationType
 */
class OrderCancellationType
{

    /**
     * A container for all extensions present in the document.
     *
     * @var \NOKA\PHPUBL\UBL\Common\ExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Order Cancellation. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Order Cancellation
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
     *  Order Cancellation. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Order Cancellation
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
     *  Order Cancellation. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Order Cancellation
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
     *  Order Cancellation. Identifier
     *  An identifier for the Order Cancellation assigned by the Buyer.
     *  1
     *  Order Cancellation
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Order Cancellation. Copy_ Indicator. Indicator
     *  Indicates whether the Order Cancellation is a copy (true) or not (false).
     *  0..1
     *  Order Cancellation
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
     *  Order Cancellation. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Order Cancellation
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Order Cancellation. Issue Date. Date
     *  The date assigned by the Buyer on which the Order was cancelled.
     *  1
     *  Order Cancellation
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Order Cancellation. Issue Time. Time
     *  The time assigned by the Buyer at which the Order was cancelled.
     *  0..1
     *  Order Cancellation
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Order Cancellation. Note. Text
     *  Free-form text applying to the Order Cancellation. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Order Cancellation
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
     *  Order Cancellation. Cancellation_ Note. Text
     *  The general reason for cancellation of the referenced order.
     *  1
     *  Order Cancellation
     *  Cancellation
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\CancellationNote $cancellationNote
     */
    private $cancellationNote = null;

    /**
     * ASBIE
     *  Order Cancellation. Order Reference
     *  An associative reference to the Order(s) being cancelled. It is considered better practice to cancel only one Order in each Order Cancellation document.
     *  1..n
     *  Order Cancellation
     *  Order Reference
     *  Order Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderReference[] $orderReference
     */
    private $orderReference = [
        
    ];

    /**
     * ASBIE
     *  Order Cancellation. Originator_ Document Reference. Document Reference
     *  An associative reference to Originator Document.
     *  0..1
     *  Order Cancellation
     *  Originator
     *  Document Reference
     *  Document Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginatorDocumentReference $originatorDocumentReference
     */
    private $originatorDocumentReference = null;

    /**
     * ASBIE
     *  Order Cancellation. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Order Cancellation
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
     *  Order Cancellation. Contract
     *  An association to Contract.
     *  0..n
     *  Order Cancellation
     *  Contract
     *  Contract
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Contract[] $contract
     */
    private $contract = [
        
    ];

    /**
     * ASBIE
     *  Order Cancellation. Signature
     *  An association to Signature.
     *  0..n
     *  Order Cancellation
     *  Signature
     *  Signature
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Signature[] $signature
     */
    private $signature = [
        
    ];

    /**
     * ASBIE
     *  Order Cancellation. Buyer_ Customer Party. Customer Party
     *  An association to the Buyer.
     *  1
     *  Order Cancellation
     *  Buyer
     *  Customer Party
     *  Customer Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\BuyerCustomerParty $buyerCustomerParty
     */
    private $buyerCustomerParty = null;

    /**
     * ASBIE
     *  Order Cancellation. Seller_ Supplier Party. Supplier Party
     *  An association to the Seller.
     *  1
     *  Order Cancellation
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\SellerSupplierParty $sellerSupplierParty
     */
    private $sellerSupplierParty = null;

    /**
     * ASBIE
     *  Order Cancellation. Originator_ Customer Party. Customer Party
     *  An association to the Originator.
     *  0..1
     *  Order Cancellation
     *  Originator
     *  Customer Party
     *  Customer Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginatorCustomerParty $originatorCustomerParty
     */
    private $originatorCustomerParty = null;

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
     *  Order Cancellation. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Order Cancellation
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
     *  Order Cancellation. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Order Cancellation
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
     *  Order Cancellation. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Order Cancellation
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
     *  Order Cancellation. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Order Cancellation
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
     *  Order Cancellation. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Order Cancellation
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
     *  Order Cancellation. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Order Cancellation
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
     *  Order Cancellation. Identifier
     *  An identifier for the Order Cancellation assigned by the Buyer.
     *  1
     *  Order Cancellation
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
     *  Order Cancellation. Identifier
     *  An identifier for the Order Cancellation assigned by the Buyer.
     *  1
     *  Order Cancellation
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
     * Gets as copyIndicator
     *
     * BBIE
     *  Order Cancellation. Copy_ Indicator. Indicator
     *  Indicates whether the Order Cancellation is a copy (true) or not (false).
     *  0..1
     *  Order Cancellation
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
     *  Order Cancellation. Copy_ Indicator. Indicator
     *  Indicates whether the Order Cancellation is a copy (true) or not (false).
     *  0..1
     *  Order Cancellation
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
     *  Order Cancellation. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Order Cancellation
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
     *  Order Cancellation. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Order Cancellation
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
     *  Order Cancellation. Issue Date. Date
     *  The date assigned by the Buyer on which the Order was cancelled.
     *  1
     *  Order Cancellation
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
     *  Order Cancellation. Issue Date. Date
     *  The date assigned by the Buyer on which the Order was cancelled.
     *  1
     *  Order Cancellation
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
     *  Order Cancellation. Issue Time. Time
     *  The time assigned by the Buyer at which the Order was cancelled.
     *  0..1
     *  Order Cancellation
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
     *  Order Cancellation. Issue Time. Time
     *  The time assigned by the Buyer at which the Order was cancelled.
     *  0..1
     *  Order Cancellation
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
     *  Order Cancellation. Note. Text
     *  Free-form text applying to the Order Cancellation. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Order Cancellation
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
     *  Order Cancellation. Note. Text
     *  Free-form text applying to the Order Cancellation. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Order Cancellation
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
     *  Order Cancellation. Note. Text
     *  Free-form text applying to the Order Cancellation. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Order Cancellation
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
     *  Order Cancellation. Note. Text
     *  Free-form text applying to the Order Cancellation. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Order Cancellation
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
     *  Order Cancellation. Note. Text
     *  Free-form text applying to the Order Cancellation. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Order Cancellation
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
     * Gets as cancellationNote
     *
     * BBIE
     *  Order Cancellation. Cancellation_ Note. Text
     *  The general reason for cancellation of the referenced order.
     *  1
     *  Order Cancellation
     *  Cancellation
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\CancellationNote
     */
    public function getCancellationNote()
    {
        return $this->cancellationNote;
    }

    /**
     * Sets a new cancellationNote
     *
     * BBIE
     *  Order Cancellation. Cancellation_ Note. Text
     *  The general reason for cancellation of the referenced order.
     *  1
     *  Order Cancellation
     *  Cancellation
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\CancellationNote $cancellationNote
     * @return self
     */
    public function setCancellationNote(\NOKA\PHPUBL\UBL\Common\BasicComponents\CancellationNote $cancellationNote)
    {
        $this->cancellationNote = $cancellationNote;
        return $this;
    }

    /**
     * Adds as orderReference
     *
     * ASBIE
     *  Order Cancellation. Order Reference
     *  An associative reference to the Order(s) being cancelled. It is considered better practice to cancel only one Order in each Order Cancellation document.
     *  1..n
     *  Order Cancellation
     *  Order Reference
     *  Order Reference
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderReference $orderReference
     */
    public function addToOrderReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderReference $orderReference)
    {
        $this->orderReference[] = $orderReference;
        return $this;
    }

    /**
     * isset orderReference
     *
     * ASBIE
     *  Order Cancellation. Order Reference
     *  An associative reference to the Order(s) being cancelled. It is considered better practice to cancel only one Order in each Order Cancellation document.
     *  1..n
     *  Order Cancellation
     *  Order Reference
     *  Order Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderReference($index)
    {
        return isset($this->orderReference[$index]);
    }

    /**
     * unset orderReference
     *
     * ASBIE
     *  Order Cancellation. Order Reference
     *  An associative reference to the Order(s) being cancelled. It is considered better practice to cancel only one Order in each Order Cancellation document.
     *  1..n
     *  Order Cancellation
     *  Order Reference
     *  Order Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderReference($index)
    {
        unset($this->orderReference[$index]);
    }

    /**
     * Gets as orderReference
     *
     * ASBIE
     *  Order Cancellation. Order Reference
     *  An associative reference to the Order(s) being cancelled. It is considered better practice to cancel only one Order in each Order Cancellation document.
     *  1..n
     *  Order Cancellation
     *  Order Reference
     *  Order Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderReference[]
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * Sets a new orderReference
     *
     * ASBIE
     *  Order Cancellation. Order Reference
     *  An associative reference to the Order(s) being cancelled. It is considered better practice to cancel only one Order in each Order Cancellation document.
     *  1..n
     *  Order Cancellation
     *  Order Reference
     *  Order Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderReference[] $orderReference
     * @return self
     */
    public function setOrderReference(array $orderReference)
    {
        $this->orderReference = $orderReference;
        return $this;
    }

    /**
     * Gets as originatorDocumentReference
     *
     * ASBIE
     *  Order Cancellation. Originator_ Document Reference. Document Reference
     *  An associative reference to Originator Document.
     *  0..1
     *  Order Cancellation
     *  Originator
     *  Document Reference
     *  Document Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginatorDocumentReference
     */
    public function getOriginatorDocumentReference()
    {
        return $this->originatorDocumentReference;
    }

    /**
     * Sets a new originatorDocumentReference
     *
     * ASBIE
     *  Order Cancellation. Originator_ Document Reference. Document Reference
     *  An associative reference to Originator Document.
     *  0..1
     *  Order Cancellation
     *  Originator
     *  Document Reference
     *  Document Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginatorDocumentReference $originatorDocumentReference
     * @return self
     */
    public function setOriginatorDocumentReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginatorDocumentReference $originatorDocumentReference)
    {
        $this->originatorDocumentReference = $originatorDocumentReference;
        return $this;
    }

    /**
     * Adds as additionalDocumentReference
     *
     * ASBIE
     *  Order Cancellation. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Order Cancellation
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
     *  Order Cancellation. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Order Cancellation
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
     *  Order Cancellation. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Order Cancellation
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
     *  Order Cancellation. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Order Cancellation
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
     *  Order Cancellation. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Order Cancellation
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
     * Adds as contract
     *
     * ASBIE
     *  Order Cancellation. Contract
     *  An association to Contract.
     *  0..n
     *  Order Cancellation
     *  Contract
     *  Contract
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Contract $contract
     */
    public function addToContract(\NOKA\PHPUBL\UBL\Common\AggregateComponents\Contract $contract)
    {
        $this->contract[] = $contract;
        return $this;
    }

    /**
     * isset contract
     *
     * ASBIE
     *  Order Cancellation. Contract
     *  An association to Contract.
     *  0..n
     *  Order Cancellation
     *  Contract
     *  Contract
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContract($index)
    {
        return isset($this->contract[$index]);
    }

    /**
     * unset contract
     *
     * ASBIE
     *  Order Cancellation. Contract
     *  An association to Contract.
     *  0..n
     *  Order Cancellation
     *  Contract
     *  Contract
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContract($index)
    {
        unset($this->contract[$index]);
    }

    /**
     * Gets as contract
     *
     * ASBIE
     *  Order Cancellation. Contract
     *  An association to Contract.
     *  0..n
     *  Order Cancellation
     *  Contract
     *  Contract
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\Contract[]
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Sets a new contract
     *
     * ASBIE
     *  Order Cancellation. Contract
     *  An association to Contract.
     *  0..n
     *  Order Cancellation
     *  Contract
     *  Contract
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Contract[] $contract
     * @return self
     */
    public function setContract(array $contract)
    {
        $this->contract = $contract;
        return $this;
    }

    /**
     * Adds as signature
     *
     * ASBIE
     *  Order Cancellation. Signature
     *  An association to Signature.
     *  0..n
     *  Order Cancellation
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
     *  Order Cancellation. Signature
     *  An association to Signature.
     *  0..n
     *  Order Cancellation
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
     *  Order Cancellation. Signature
     *  An association to Signature.
     *  0..n
     *  Order Cancellation
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
     *  Order Cancellation. Signature
     *  An association to Signature.
     *  0..n
     *  Order Cancellation
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
     *  Order Cancellation. Signature
     *  An association to Signature.
     *  0..n
     *  Order Cancellation
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
     * Gets as buyerCustomerParty
     *
     * ASBIE
     *  Order Cancellation. Buyer_ Customer Party. Customer Party
     *  An association to the Buyer.
     *  1
     *  Order Cancellation
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
     *  Order Cancellation. Buyer_ Customer Party. Customer Party
     *  An association to the Buyer.
     *  1
     *  Order Cancellation
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
     * Gets as sellerSupplierParty
     *
     * ASBIE
     *  Order Cancellation. Seller_ Supplier Party. Supplier Party
     *  An association to the Seller.
     *  1
     *  Order Cancellation
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
     *  Order Cancellation. Seller_ Supplier Party. Supplier Party
     *  An association to the Seller.
     *  1
     *  Order Cancellation
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
     * Gets as originatorCustomerParty
     *
     * ASBIE
     *  Order Cancellation. Originator_ Customer Party. Customer Party
     *  An association to the Originator.
     *  0..1
     *  Order Cancellation
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
     *  Order Cancellation. Originator_ Customer Party. Customer Party
     *  An association to the Originator.
     *  0..1
     *  Order Cancellation
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


}

