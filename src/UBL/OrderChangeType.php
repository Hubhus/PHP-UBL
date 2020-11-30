<?php

namespace NOKA\PHPUBL\UBL;

/**
 * Class representing OrderChangeType
 *
 * ABIE
 *  Order Change. Details
 *  The document used to specify changes to an existing Order.
 *  Order Change
 *  Purchase Order Change
 * XSD Type: OrderChangeType
 */
class OrderChangeType
{

    /**
     * A container for all extensions present in the document.
     *
     * @var \NOKA\PHPUBL\UBL\Common\ExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Order Change. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Order Change
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
     *  Order Change. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Order Change
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
     *  Order Change. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Order Change
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
     *  Order Change. Identifier
     *  An identifier for the Order Change assigned by the Buyer.
     *  0..1
     *  Order Change
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Order Change. Sales Order Identifier. Identifier
     *  An identifier for the Order Change issued by the Seller.
     *  0..1
     *  Order Change
     *  Sales Order Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\SalesOrderID $salesOrderID
     */
    private $salesOrderID = null;

    /**
     * BBIE
     *  Order Change. Copy_ Indicator. Indicator
     *  Indicates whether the Order Change is a copy (true) or not (false).
     *  0..1
     *  Order Change
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
     *  Order Change. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Order Change
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Order Change. Issue Date. Date
     *  The date assigned by the Buyer on which the Order was changed.
     *  1
     *  Order Change
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Order Change. Issue Time. Time
     *  The time assigned by the Buyer at which the Order was changed.
     *  0..1
     *  Order Change
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Order Change. Sequence_ Number. Identifier
     *  The Order Change Sequence Number assigned by the Buyer to ensure the proper sequencing of changes.
     *  1
     *  Order Change
     *  Sequence
     *  Number
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\SequenceNumberID $sequenceNumberID
     */
    private $sequenceNumberID = null;

    /**
     * BBIE
     *  Order Change. Note. Text
     *  Free-form text applying to the Order Change. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Order Change
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
     *  Order Change. Requested Invoice_ Currency Code. Code
     *  The currency requested for amount totals in Invoices related to this Order Change.
     *  0..1
     *  Order Change
     *  Requested Invoice
     *  Currency Code
     *  Code
     *  Currency_ Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\RequestedInvoiceCurrencyCode $requestedInvoiceCurrencyCode
     */
    private $requestedInvoiceCurrencyCode = null;

    /**
     * BBIE
     *  Order Change. Document_ Currency Code. Code
     *  The default currency for the Order Change.
     *  0..1
     *  Order Change
     *  Document
     *  Currency Code
     *  Code
     *  Currency_ Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\DocumentCurrencyCode $documentCurrencyCode
     */
    private $documentCurrencyCode = null;

    /**
     * BBIE
     *  Order Change. Pricing_ Currency Code. Code
     *  The currency that is used for all prices in the Order Change.
     *  0..1
     *  Order Change
     *  Pricing
     *  Currency Code
     *  Code
     *  Currency_ Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\PricingCurrencyCode $pricingCurrencyCode
     */
    private $pricingCurrencyCode = null;

    /**
     * BBIE
     *  Order Change. Tax_ Currency Code. Code
     *  The currency requested for tax amounts in Invoices related to this Order Change.
     *  0..1
     *  Order Change
     *  Tax
     *  Currency Code
     *  Code
     *  Currency_ Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TaxCurrencyCode $taxCurrencyCode
     */
    private $taxCurrencyCode = null;

    /**
     * BBIE
     *  Order Change. Customer Reference. Text
     *  A supplementary reference for the transaction (e.g., CRI when using purchasing card).
     *  0..1
     *  Order Change
     *  Customer Reference
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\CustomerReference $customerReference
     */
    private $customerReference = null;

    /**
     * BBIE
     *  Order Change. Accounting Cost Code. Code
     *  The Buyer's accounting code applied to the Order Change as a whole.
     *  0..1
     *  Order Change
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AccountingCostCode $accountingCostCode
     */
    private $accountingCostCode = null;

    /**
     * BBIE
     *  Order Change. Accounting Cost. Text
     *  The Buyer's accounting code applied to the Order Change as a whole, expressed as text.
     *  0..1
     *  Order Change
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AccountingCost $accountingCost
     */
    private $accountingCost = null;

    /**
     * BBIE
     *  Order Change. Line Count. Numeric
     *  The number of lines in the document.
     *  0..1
     *  Order Change
     *  Line Count
     *  Numeric
     *  Numeric. Type
     *
     * @var float $lineCountNumeric
     */
    private $lineCountNumeric = null;

    /**
     * ASBIE
     *  Order Change. Validity_ Period. Period
     *  The period for which the changed Order is valid.
     *  0..n
     *  Order Change
     *  Validity
     *  Period
     *  Period
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ValidityPeriod[] $validityPeriod
     */
    private $validityPeriod = [
        
    ];

    /**
     * ASBIE
     *  Order Change. Order Reference
     *  An association to Order Reference (the reference of the Order being changed).
     *  1
     *  Order Change
     *  Order Reference
     *  Order Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderReference $orderReference
     */
    private $orderReference = null;

    /**
     * ASBIE
     *  Order Change. Quotation_ Document Reference. Document Reference
     *  An associative reference to Quotation.
     *  0..1
     *  Order Change
     *  Quotation
     *  Document Reference
     *  Document Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\QuotationDocumentReference $quotationDocumentReference
     */
    private $quotationDocumentReference = null;

    /**
     * ASBIE
     *  Order Change. Originator_ Document Reference. Document Reference
     *  An associative reference to Originator Document.
     *  0..1
     *  Order Change
     *  Originator
     *  Document Reference
     *  Document Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginatorDocumentReference $originatorDocumentReference
     */
    private $originatorDocumentReference = null;

    /**
     * ASBIE
     *  Order Change. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Order Change
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
     *  Order Change. Contract
     *  An association to Contract
     *  0..n
     *  Order Change
     *  Contract
     *  Contract
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Contract[] $contract
     */
    private $contract = [
        
    ];

    /**
     * ASBIE
     *  Order Change. Signature
     *  An association to Signature.
     *  0..n
     *  Order Change
     *  Signature
     *  Signature
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Signature[] $signature
     */
    private $signature = [
        
    ];

    /**
     * ASBIE
     *  Order Change. Buyer_ Customer Party. Customer Party
     *  An association to the Buyer.
     *  1
     *  Order Change
     *  Buyer
     *  Customer Party
     *  Customer Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\BuyerCustomerParty $buyerCustomerParty
     */
    private $buyerCustomerParty = null;

    /**
     * ASBIE
     *  Order Change. Seller_ Supplier Party. Supplier Party
     *  An association to the Seller.
     *  1
     *  Order Change
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\SellerSupplierParty $sellerSupplierParty
     */
    private $sellerSupplierParty = null;

    /**
     * ASBIE
     *  Order Change. Originator_ Customer Party. Customer Party
     *  An association to the Originator.
     *  0..1
     *  Order Change
     *  Originator
     *  Customer Party
     *  Customer Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginatorCustomerParty $originatorCustomerParty
     */
    private $originatorCustomerParty = null;

    /**
     * ASBIE
     *  Order Change. Freight Forwarder_ Party. Party
     *  An association to a Freight Forwarder or Carrier.
     *  0..1
     *  Order Change
     *  Freight Forwarder
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\FreightForwarderParty $freightForwarderParty
     */
    private $freightForwarderParty = null;

    /**
     * ASBIE
     *  Order Change. Accounting_ Customer Party. Customer Party
     *  An association to the Accounting Customer Party.
     *  0..1
     *  Order Change
     *  Accounting
     *  Customer Party
     *  Customer Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AccountingCustomerParty $accountingCustomerParty
     */
    private $accountingCustomerParty = null;

    /**
     * ASBIE
     *  Order Change. Accounting_ Supplier Party. Supplier Party
     *  An association to the Accounting Supplier Party.
     *  0..1
     *  Order Change
     *  Accounting
     *  Supplier Party
     *  Supplier Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AccountingSupplierParty $accountingSupplierParty
     */
    private $accountingSupplierParty = null;

    /**
     * ASBIE
     *  Order Change. Delivery
     *  An association to Delivery.
     *  0..n
     *  Order Change
     *  Delivery
     *  Delivery
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Delivery[] $delivery
     */
    private $delivery = [
        
    ];

    /**
     * ASBIE
     *  Order Change. Delivery Terms
     *  An association to Delivery Terms.
     *  0..1
     *  Order Change
     *  Delivery Terms
     *  Delivery Terms
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryTerms $deliveryTerms
     */
    private $deliveryTerms = null;

    /**
     * ASBIE
     *  Order Change. Payment Means
     *  An association to Payment Means.
     *  0..1
     *  Order Change
     *  Payment Means
     *  Payment Means
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentMeans $paymentMeans
     */
    private $paymentMeans = null;

    /**
     * ASBIE
     *  Order Change. Transaction Conditions
     *  Associates the Order Change with a purchasing, sales, or payment condition applying to the whole order.
     *  0..1
     *  Order Change
     *  Transaction Conditions
     *  Transaction Conditions
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransactionConditions $transactionConditions
     */
    private $transactionConditions = null;

    /**
     * ASBIE
     *  Order Change. Allowance Charge
     *  An association to Allowances and Charges that apply to the Order Change as a whole.
     *  0..n
     *  Order Change
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AllowanceCharge[] $allowanceCharge
     */
    private $allowanceCharge = [
        
    ];

    /**
     * ASBIE
     *  Order Change. Destination_ Country. Country
     *  An association to the country of destination (for customs purposes).
     *  0..1
     *  Order Change
     *  Destination
     *  Country
     *  Country
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DestinationCountry $destinationCountry
     */
    private $destinationCountry = null;

    /**
     * ASBIE
     *  Order Change. Tax Total
     *  An association to the total tax amount of the changed Order (as calculated by the Buyer).
     *  0..n
     *  Order Change
     *  Tax Total
     *  Tax Total
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxTotal[] $taxTotal
     */
    private $taxTotal = [
        
    ];

    /**
     * ASBIE
     *  Order Change. Anticipated_ Monetary Total. Monetary Total
     *  An association to the total amounts for the Order Change anticipated by the Buyer.
     *  0..1
     *  Order Change
     *  Anticipated
     *  Monetary Total
     *  Monetary Total
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AnticipatedMonetaryTotal $anticipatedMonetaryTotal
     */
    private $anticipatedMonetaryTotal = null;

    /**
     * ASBIE
     *  Order Change. Order Line
     *  An association to one or more (changed) Order Lines.
     *  1..n
     *  Order Change
     *  Order Line
     *  Order Line
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderLine[] $orderLine
     */
    private $orderLine = [
        
    ];

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
     *  Order Change. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Order Change
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
     *  Order Change. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Order Change
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
     *  Order Change. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Order Change
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
     *  Order Change. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Order Change
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
     *  Order Change. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Order Change
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
     *  Order Change. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Order Change
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
     *  Order Change. Identifier
     *  An identifier for the Order Change assigned by the Buyer.
     *  0..1
     *  Order Change
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
     *  Order Change. Identifier
     *  An identifier for the Order Change assigned by the Buyer.
     *  0..1
     *  Order Change
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
     * Gets as salesOrderID
     *
     * BBIE
     *  Order Change. Sales Order Identifier. Identifier
     *  An identifier for the Order Change issued by the Seller.
     *  0..1
     *  Order Change
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
     *  Order Change. Sales Order Identifier. Identifier
     *  An identifier for the Order Change issued by the Seller.
     *  0..1
     *  Order Change
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
     *  Order Change. Copy_ Indicator. Indicator
     *  Indicates whether the Order Change is a copy (true) or not (false).
     *  0..1
     *  Order Change
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
     *  Order Change. Copy_ Indicator. Indicator
     *  Indicates whether the Order Change is a copy (true) or not (false).
     *  0..1
     *  Order Change
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
     *  Order Change. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Order Change
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
     *  Order Change. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Order Change
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
     *  Order Change. Issue Date. Date
     *  The date assigned by the Buyer on which the Order was changed.
     *  1
     *  Order Change
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
     *  Order Change. Issue Date. Date
     *  The date assigned by the Buyer on which the Order was changed.
     *  1
     *  Order Change
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
     *  Order Change. Issue Time. Time
     *  The time assigned by the Buyer at which the Order was changed.
     *  0..1
     *  Order Change
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
     *  Order Change. Issue Time. Time
     *  The time assigned by the Buyer at which the Order was changed.
     *  0..1
     *  Order Change
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
     * Gets as sequenceNumberID
     *
     * BBIE
     *  Order Change. Sequence_ Number. Identifier
     *  The Order Change Sequence Number assigned by the Buyer to ensure the proper sequencing of changes.
     *  1
     *  Order Change
     *  Sequence
     *  Number
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\SequenceNumberID
     */
    public function getSequenceNumberID()
    {
        return $this->sequenceNumberID;
    }

    /**
     * Sets a new sequenceNumberID
     *
     * BBIE
     *  Order Change. Sequence_ Number. Identifier
     *  The Order Change Sequence Number assigned by the Buyer to ensure the proper sequencing of changes.
     *  1
     *  Order Change
     *  Sequence
     *  Number
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\SequenceNumberID $sequenceNumberID
     * @return self
     */
    public function setSequenceNumberID(\NOKA\PHPUBL\UBL\Common\BasicComponents\SequenceNumberID $sequenceNumberID)
    {
        $this->sequenceNumberID = $sequenceNumberID;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Order Change. Note. Text
     *  Free-form text applying to the Order Change. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Order Change
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
     *  Order Change. Note. Text
     *  Free-form text applying to the Order Change. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Order Change
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
     *  Order Change. Note. Text
     *  Free-form text applying to the Order Change. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Order Change
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
     *  Order Change. Note. Text
     *  Free-form text applying to the Order Change. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Order Change
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
     *  Order Change. Note. Text
     *  Free-form text applying to the Order Change. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Order Change
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
     * Gets as requestedInvoiceCurrencyCode
     *
     * BBIE
     *  Order Change. Requested Invoice_ Currency Code. Code
     *  The currency requested for amount totals in Invoices related to this Order Change.
     *  0..1
     *  Order Change
     *  Requested Invoice
     *  Currency Code
     *  Code
     *  Currency_ Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\RequestedInvoiceCurrencyCode
     */
    public function getRequestedInvoiceCurrencyCode()
    {
        return $this->requestedInvoiceCurrencyCode;
    }

    /**
     * Sets a new requestedInvoiceCurrencyCode
     *
     * BBIE
     *  Order Change. Requested Invoice_ Currency Code. Code
     *  The currency requested for amount totals in Invoices related to this Order Change.
     *  0..1
     *  Order Change
     *  Requested Invoice
     *  Currency Code
     *  Code
     *  Currency_ Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\RequestedInvoiceCurrencyCode $requestedInvoiceCurrencyCode
     * @return self
     */
    public function setRequestedInvoiceCurrencyCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\RequestedInvoiceCurrencyCode $requestedInvoiceCurrencyCode)
    {
        $this->requestedInvoiceCurrencyCode = $requestedInvoiceCurrencyCode;
        return $this;
    }

    /**
     * Gets as documentCurrencyCode
     *
     * BBIE
     *  Order Change. Document_ Currency Code. Code
     *  The default currency for the Order Change.
     *  0..1
     *  Order Change
     *  Document
     *  Currency Code
     *  Code
     *  Currency_ Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\DocumentCurrencyCode
     */
    public function getDocumentCurrencyCode()
    {
        return $this->documentCurrencyCode;
    }

    /**
     * Sets a new documentCurrencyCode
     *
     * BBIE
     *  Order Change. Document_ Currency Code. Code
     *  The default currency for the Order Change.
     *  0..1
     *  Order Change
     *  Document
     *  Currency Code
     *  Code
     *  Currency_ Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\DocumentCurrencyCode $documentCurrencyCode
     * @return self
     */
    public function setDocumentCurrencyCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\DocumentCurrencyCode $documentCurrencyCode)
    {
        $this->documentCurrencyCode = $documentCurrencyCode;
        return $this;
    }

    /**
     * Gets as pricingCurrencyCode
     *
     * BBIE
     *  Order Change. Pricing_ Currency Code. Code
     *  The currency that is used for all prices in the Order Change.
     *  0..1
     *  Order Change
     *  Pricing
     *  Currency Code
     *  Code
     *  Currency_ Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\PricingCurrencyCode
     */
    public function getPricingCurrencyCode()
    {
        return $this->pricingCurrencyCode;
    }

    /**
     * Sets a new pricingCurrencyCode
     *
     * BBIE
     *  Order Change. Pricing_ Currency Code. Code
     *  The currency that is used for all prices in the Order Change.
     *  0..1
     *  Order Change
     *  Pricing
     *  Currency Code
     *  Code
     *  Currency_ Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\PricingCurrencyCode $pricingCurrencyCode
     * @return self
     */
    public function setPricingCurrencyCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\PricingCurrencyCode $pricingCurrencyCode)
    {
        $this->pricingCurrencyCode = $pricingCurrencyCode;
        return $this;
    }

    /**
     * Gets as taxCurrencyCode
     *
     * BBIE
     *  Order Change. Tax_ Currency Code. Code
     *  The currency requested for tax amounts in Invoices related to this Order Change.
     *  0..1
     *  Order Change
     *  Tax
     *  Currency Code
     *  Code
     *  Currency_ Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TaxCurrencyCode
     */
    public function getTaxCurrencyCode()
    {
        return $this->taxCurrencyCode;
    }

    /**
     * Sets a new taxCurrencyCode
     *
     * BBIE
     *  Order Change. Tax_ Currency Code. Code
     *  The currency requested for tax amounts in Invoices related to this Order Change.
     *  0..1
     *  Order Change
     *  Tax
     *  Currency Code
     *  Code
     *  Currency_ Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TaxCurrencyCode $taxCurrencyCode
     * @return self
     */
    public function setTaxCurrencyCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\TaxCurrencyCode $taxCurrencyCode)
    {
        $this->taxCurrencyCode = $taxCurrencyCode;
        return $this;
    }

    /**
     * Gets as customerReference
     *
     * BBIE
     *  Order Change. Customer Reference. Text
     *  A supplementary reference for the transaction (e.g., CRI when using purchasing card).
     *  0..1
     *  Order Change
     *  Customer Reference
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
     *  Order Change. Customer Reference. Text
     *  A supplementary reference for the transaction (e.g., CRI when using purchasing card).
     *  0..1
     *  Order Change
     *  Customer Reference
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
     *  Order Change. Accounting Cost Code. Code
     *  The Buyer's accounting code applied to the Order Change as a whole.
     *  0..1
     *  Order Change
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
     *  Order Change. Accounting Cost Code. Code
     *  The Buyer's accounting code applied to the Order Change as a whole.
     *  0..1
     *  Order Change
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
     *  Order Change. Accounting Cost. Text
     *  The Buyer's accounting code applied to the Order Change as a whole, expressed as text.
     *  0..1
     *  Order Change
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
     *  Order Change. Accounting Cost. Text
     *  The Buyer's accounting code applied to the Order Change as a whole, expressed as text.
     *  0..1
     *  Order Change
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
     * Gets as lineCountNumeric
     *
     * BBIE
     *  Order Change. Line Count. Numeric
     *  The number of lines in the document.
     *  0..1
     *  Order Change
     *  Line Count
     *  Numeric
     *  Numeric. Type
     *
     * @return float
     */
    public function getLineCountNumeric()
    {
        return $this->lineCountNumeric;
    }

    /**
     * Sets a new lineCountNumeric
     *
     * BBIE
     *  Order Change. Line Count. Numeric
     *  The number of lines in the document.
     *  0..1
     *  Order Change
     *  Line Count
     *  Numeric
     *  Numeric. Type
     *
     * @param float $lineCountNumeric
     * @return self
     */
    public function setLineCountNumeric($lineCountNumeric)
    {
        $this->lineCountNumeric = $lineCountNumeric;
        return $this;
    }

    /**
     * Adds as validityPeriod
     *
     * ASBIE
     *  Order Change. Validity_ Period. Period
     *  The period for which the changed Order is valid.
     *  0..n
     *  Order Change
     *  Validity
     *  Period
     *  Period
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ValidityPeriod $validityPeriod
     */
    public function addToValidityPeriod(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ValidityPeriod $validityPeriod)
    {
        $this->validityPeriod[] = $validityPeriod;
        return $this;
    }

    /**
     * isset validityPeriod
     *
     * ASBIE
     *  Order Change. Validity_ Period. Period
     *  The period for which the changed Order is valid.
     *  0..n
     *  Order Change
     *  Validity
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValidityPeriod($index)
    {
        return isset($this->validityPeriod[$index]);
    }

    /**
     * unset validityPeriod
     *
     * ASBIE
     *  Order Change. Validity_ Period. Period
     *  The period for which the changed Order is valid.
     *  0..n
     *  Order Change
     *  Validity
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValidityPeriod($index)
    {
        unset($this->validityPeriod[$index]);
    }

    /**
     * Gets as validityPeriod
     *
     * ASBIE
     *  Order Change. Validity_ Period. Period
     *  The period for which the changed Order is valid.
     *  0..n
     *  Order Change
     *  Validity
     *  Period
     *  Period
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ValidityPeriod[]
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * ASBIE
     *  Order Change. Validity_ Period. Period
     *  The period for which the changed Order is valid.
     *  0..n
     *  Order Change
     *  Validity
     *  Period
     *  Period
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ValidityPeriod[] $validityPeriod
     * @return self
     */
    public function setValidityPeriod(array $validityPeriod)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as orderReference
     *
     * ASBIE
     *  Order Change. Order Reference
     *  An association to Order Reference (the reference of the Order being changed).
     *  1
     *  Order Change
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
     *  Order Change. Order Reference
     *  An association to Order Reference (the reference of the Order being changed).
     *  1
     *  Order Change
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
     * Gets as quotationDocumentReference
     *
     * ASBIE
     *  Order Change. Quotation_ Document Reference. Document Reference
     *  An associative reference to Quotation.
     *  0..1
     *  Order Change
     *  Quotation
     *  Document Reference
     *  Document Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\QuotationDocumentReference
     */
    public function getQuotationDocumentReference()
    {
        return $this->quotationDocumentReference;
    }

    /**
     * Sets a new quotationDocumentReference
     *
     * ASBIE
     *  Order Change. Quotation_ Document Reference. Document Reference
     *  An associative reference to Quotation.
     *  0..1
     *  Order Change
     *  Quotation
     *  Document Reference
     *  Document Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\QuotationDocumentReference $quotationDocumentReference
     * @return self
     */
    public function setQuotationDocumentReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\QuotationDocumentReference $quotationDocumentReference)
    {
        $this->quotationDocumentReference = $quotationDocumentReference;
        return $this;
    }

    /**
     * Gets as originatorDocumentReference
     *
     * ASBIE
     *  Order Change. Originator_ Document Reference. Document Reference
     *  An associative reference to Originator Document.
     *  0..1
     *  Order Change
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
     *  Order Change. Originator_ Document Reference. Document Reference
     *  An associative reference to Originator Document.
     *  0..1
     *  Order Change
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
     *  Order Change. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Order Change
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
     *  Order Change. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Order Change
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
     *  Order Change. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Order Change
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
     *  Order Change. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Order Change
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
     *  Order Change. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Order Change
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
     *  Order Change. Contract
     *  An association to Contract
     *  0..n
     *  Order Change
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
     *  Order Change. Contract
     *  An association to Contract
     *  0..n
     *  Order Change
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
     *  Order Change. Contract
     *  An association to Contract
     *  0..n
     *  Order Change
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
     *  Order Change. Contract
     *  An association to Contract
     *  0..n
     *  Order Change
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
     *  Order Change. Contract
     *  An association to Contract
     *  0..n
     *  Order Change
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
     *  Order Change. Signature
     *  An association to Signature.
     *  0..n
     *  Order Change
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
     *  Order Change. Signature
     *  An association to Signature.
     *  0..n
     *  Order Change
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
     *  Order Change. Signature
     *  An association to Signature.
     *  0..n
     *  Order Change
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
     *  Order Change. Signature
     *  An association to Signature.
     *  0..n
     *  Order Change
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
     *  Order Change. Signature
     *  An association to Signature.
     *  0..n
     *  Order Change
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
     *  Order Change. Buyer_ Customer Party. Customer Party
     *  An association to the Buyer.
     *  1
     *  Order Change
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
     *  Order Change. Buyer_ Customer Party. Customer Party
     *  An association to the Buyer.
     *  1
     *  Order Change
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
     *  Order Change. Seller_ Supplier Party. Supplier Party
     *  An association to the Seller.
     *  1
     *  Order Change
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
     *  Order Change. Seller_ Supplier Party. Supplier Party
     *  An association to the Seller.
     *  1
     *  Order Change
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
     *  Order Change. Originator_ Customer Party. Customer Party
     *  An association to the Originator.
     *  0..1
     *  Order Change
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
     *  Order Change. Originator_ Customer Party. Customer Party
     *  An association to the Originator.
     *  0..1
     *  Order Change
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
     * Gets as freightForwarderParty
     *
     * ASBIE
     *  Order Change. Freight Forwarder_ Party. Party
     *  An association to a Freight Forwarder or Carrier.
     *  0..1
     *  Order Change
     *  Freight Forwarder
     *  Party
     *  Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\FreightForwarderParty
     */
    public function getFreightForwarderParty()
    {
        return $this->freightForwarderParty;
    }

    /**
     * Sets a new freightForwarderParty
     *
     * ASBIE
     *  Order Change. Freight Forwarder_ Party. Party
     *  An association to a Freight Forwarder or Carrier.
     *  0..1
     *  Order Change
     *  Freight Forwarder
     *  Party
     *  Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\FreightForwarderParty $freightForwarderParty
     * @return self
     */
    public function setFreightForwarderParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\FreightForwarderParty $freightForwarderParty)
    {
        $this->freightForwarderParty = $freightForwarderParty;
        return $this;
    }

    /**
     * Gets as accountingCustomerParty
     *
     * ASBIE
     *  Order Change. Accounting_ Customer Party. Customer Party
     *  An association to the Accounting Customer Party.
     *  0..1
     *  Order Change
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
     *  Order Change. Accounting_ Customer Party. Customer Party
     *  An association to the Accounting Customer Party.
     *  0..1
     *  Order Change
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

    /**
     * Gets as accountingSupplierParty
     *
     * ASBIE
     *  Order Change. Accounting_ Supplier Party. Supplier Party
     *  An association to the Accounting Supplier Party.
     *  0..1
     *  Order Change
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
     *  Order Change. Accounting_ Supplier Party. Supplier Party
     *  An association to the Accounting Supplier Party.
     *  0..1
     *  Order Change
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
     * Adds as delivery
     *
     * ASBIE
     *  Order Change. Delivery
     *  An association to Delivery.
     *  0..n
     *  Order Change
     *  Delivery
     *  Delivery
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Delivery $delivery
     */
    public function addToDelivery(\NOKA\PHPUBL\UBL\Common\AggregateComponents\Delivery $delivery)
    {
        $this->delivery[] = $delivery;
        return $this;
    }

    /**
     * isset delivery
     *
     * ASBIE
     *  Order Change. Delivery
     *  An association to Delivery.
     *  0..n
     *  Order Change
     *  Delivery
     *  Delivery
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDelivery($index)
    {
        return isset($this->delivery[$index]);
    }

    /**
     * unset delivery
     *
     * ASBIE
     *  Order Change. Delivery
     *  An association to Delivery.
     *  0..n
     *  Order Change
     *  Delivery
     *  Delivery
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDelivery($index)
    {
        unset($this->delivery[$index]);
    }

    /**
     * Gets as delivery
     *
     * ASBIE
     *  Order Change. Delivery
     *  An association to Delivery.
     *  0..n
     *  Order Change
     *  Delivery
     *  Delivery
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\Delivery[]
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Sets a new delivery
     *
     * ASBIE
     *  Order Change. Delivery
     *  An association to Delivery.
     *  0..n
     *  Order Change
     *  Delivery
     *  Delivery
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Delivery[] $delivery
     * @return self
     */
    public function setDelivery(array $delivery)
    {
        $this->delivery = $delivery;
        return $this;
    }

    /**
     * Gets as deliveryTerms
     *
     * ASBIE
     *  Order Change. Delivery Terms
     *  An association to Delivery Terms.
     *  0..1
     *  Order Change
     *  Delivery Terms
     *  Delivery Terms
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryTerms
     */
    public function getDeliveryTerms()
    {
        return $this->deliveryTerms;
    }

    /**
     * Sets a new deliveryTerms
     *
     * ASBIE
     *  Order Change. Delivery Terms
     *  An association to Delivery Terms.
     *  0..1
     *  Order Change
     *  Delivery Terms
     *  Delivery Terms
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryTerms $deliveryTerms
     * @return self
     */
    public function setDeliveryTerms(\NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryTerms $deliveryTerms)
    {
        $this->deliveryTerms = $deliveryTerms;
        return $this;
    }

    /**
     * Gets as paymentMeans
     *
     * ASBIE
     *  Order Change. Payment Means
     *  An association to Payment Means.
     *  0..1
     *  Order Change
     *  Payment Means
     *  Payment Means
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentMeans
     */
    public function getPaymentMeans()
    {
        return $this->paymentMeans;
    }

    /**
     * Sets a new paymentMeans
     *
     * ASBIE
     *  Order Change. Payment Means
     *  An association to Payment Means.
     *  0..1
     *  Order Change
     *  Payment Means
     *  Payment Means
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentMeans $paymentMeans
     * @return self
     */
    public function setPaymentMeans(\NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentMeans $paymentMeans)
    {
        $this->paymentMeans = $paymentMeans;
        return $this;
    }

    /**
     * Gets as transactionConditions
     *
     * ASBIE
     *  Order Change. Transaction Conditions
     *  Associates the Order Change with a purchasing, sales, or payment condition applying to the whole order.
     *  0..1
     *  Order Change
     *  Transaction Conditions
     *  Transaction Conditions
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransactionConditions
     */
    public function getTransactionConditions()
    {
        return $this->transactionConditions;
    }

    /**
     * Sets a new transactionConditions
     *
     * ASBIE
     *  Order Change. Transaction Conditions
     *  Associates the Order Change with a purchasing, sales, or payment condition applying to the whole order.
     *  0..1
     *  Order Change
     *  Transaction Conditions
     *  Transaction Conditions
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransactionConditions $transactionConditions
     * @return self
     */
    public function setTransactionConditions(\NOKA\PHPUBL\UBL\Common\AggregateComponents\TransactionConditions $transactionConditions)
    {
        $this->transactionConditions = $transactionConditions;
        return $this;
    }

    /**
     * Adds as allowanceCharge
     *
     * ASBIE
     *  Order Change. Allowance Charge
     *  An association to Allowances and Charges that apply to the Order Change as a whole.
     *  0..n
     *  Order Change
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\AllowanceCharge $allowanceCharge
     */
    public function addToAllowanceCharge(\NOKA\PHPUBL\UBL\Common\AggregateComponents\AllowanceCharge $allowanceCharge)
    {
        $this->allowanceCharge[] = $allowanceCharge;
        return $this;
    }

    /**
     * isset allowanceCharge
     *
     * ASBIE
     *  Order Change. Allowance Charge
     *  An association to Allowances and Charges that apply to the Order Change as a whole.
     *  0..n
     *  Order Change
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllowanceCharge($index)
    {
        return isset($this->allowanceCharge[$index]);
    }

    /**
     * unset allowanceCharge
     *
     * ASBIE
     *  Order Change. Allowance Charge
     *  An association to Allowances and Charges that apply to the Order Change as a whole.
     *  0..n
     *  Order Change
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllowanceCharge($index)
    {
        unset($this->allowanceCharge[$index]);
    }

    /**
     * Gets as allowanceCharge
     *
     * ASBIE
     *  Order Change. Allowance Charge
     *  An association to Allowances and Charges that apply to the Order Change as a whole.
     *  0..n
     *  Order Change
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\AllowanceCharge[]
     */
    public function getAllowanceCharge()
    {
        return $this->allowanceCharge;
    }

    /**
     * Sets a new allowanceCharge
     *
     * ASBIE
     *  Order Change. Allowance Charge
     *  An association to Allowances and Charges that apply to the Order Change as a whole.
     *  0..n
     *  Order Change
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\AllowanceCharge[] $allowanceCharge
     * @return self
     */
    public function setAllowanceCharge(array $allowanceCharge)
    {
        $this->allowanceCharge = $allowanceCharge;
        return $this;
    }

    /**
     * Gets as destinationCountry
     *
     * ASBIE
     *  Order Change. Destination_ Country. Country
     *  An association to the country of destination (for customs purposes).
     *  0..1
     *  Order Change
     *  Destination
     *  Country
     *  Country
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\DestinationCountry
     */
    public function getDestinationCountry()
    {
        return $this->destinationCountry;
    }

    /**
     * Sets a new destinationCountry
     *
     * ASBIE
     *  Order Change. Destination_ Country. Country
     *  An association to the country of destination (for customs purposes).
     *  0..1
     *  Order Change
     *  Destination
     *  Country
     *  Country
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DestinationCountry $destinationCountry
     * @return self
     */
    public function setDestinationCountry(\NOKA\PHPUBL\UBL\Common\AggregateComponents\DestinationCountry $destinationCountry)
    {
        $this->destinationCountry = $destinationCountry;
        return $this;
    }

    /**
     * Adds as taxTotal
     *
     * ASBIE
     *  Order Change. Tax Total
     *  An association to the total tax amount of the changed Order (as calculated by the Buyer).
     *  0..n
     *  Order Change
     *  Tax Total
     *  Tax Total
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxTotal $taxTotal
     */
    public function addToTaxTotal(\NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxTotal $taxTotal)
    {
        $this->taxTotal[] = $taxTotal;
        return $this;
    }

    /**
     * isset taxTotal
     *
     * ASBIE
     *  Order Change. Tax Total
     *  An association to the total tax amount of the changed Order (as calculated by the Buyer).
     *  0..n
     *  Order Change
     *  Tax Total
     *  Tax Total
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxTotal($index)
    {
        return isset($this->taxTotal[$index]);
    }

    /**
     * unset taxTotal
     *
     * ASBIE
     *  Order Change. Tax Total
     *  An association to the total tax amount of the changed Order (as calculated by the Buyer).
     *  0..n
     *  Order Change
     *  Tax Total
     *  Tax Total
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxTotal($index)
    {
        unset($this->taxTotal[$index]);
    }

    /**
     * Gets as taxTotal
     *
     * ASBIE
     *  Order Change. Tax Total
     *  An association to the total tax amount of the changed Order (as calculated by the Buyer).
     *  0..n
     *  Order Change
     *  Tax Total
     *  Tax Total
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxTotal[]
     */
    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    /**
     * Sets a new taxTotal
     *
     * ASBIE
     *  Order Change. Tax Total
     *  An association to the total tax amount of the changed Order (as calculated by the Buyer).
     *  0..n
     *  Order Change
     *  Tax Total
     *  Tax Total
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxTotal[] $taxTotal
     * @return self
     */
    public function setTaxTotal(array $taxTotal)
    {
        $this->taxTotal = $taxTotal;
        return $this;
    }

    /**
     * Gets as anticipatedMonetaryTotal
     *
     * ASBIE
     *  Order Change. Anticipated_ Monetary Total. Monetary Total
     *  An association to the total amounts for the Order Change anticipated by the Buyer.
     *  0..1
     *  Order Change
     *  Anticipated
     *  Monetary Total
     *  Monetary Total
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\AnticipatedMonetaryTotal
     */
    public function getAnticipatedMonetaryTotal()
    {
        return $this->anticipatedMonetaryTotal;
    }

    /**
     * Sets a new anticipatedMonetaryTotal
     *
     * ASBIE
     *  Order Change. Anticipated_ Monetary Total. Monetary Total
     *  An association to the total amounts for the Order Change anticipated by the Buyer.
     *  0..1
     *  Order Change
     *  Anticipated
     *  Monetary Total
     *  Monetary Total
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\AnticipatedMonetaryTotal $anticipatedMonetaryTotal
     * @return self
     */
    public function setAnticipatedMonetaryTotal(\NOKA\PHPUBL\UBL\Common\AggregateComponents\AnticipatedMonetaryTotal $anticipatedMonetaryTotal)
    {
        $this->anticipatedMonetaryTotal = $anticipatedMonetaryTotal;
        return $this;
    }

    /**
     * Adds as orderLine
     *
     * ASBIE
     *  Order Change. Order Line
     *  An association to one or more (changed) Order Lines.
     *  1..n
     *  Order Change
     *  Order Line
     *  Order Line
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderLine $orderLine
     */
    public function addToOrderLine(\NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderLine $orderLine)
    {
        $this->orderLine[] = $orderLine;
        return $this;
    }

    /**
     * isset orderLine
     *
     * ASBIE
     *  Order Change. Order Line
     *  An association to one or more (changed) Order Lines.
     *  1..n
     *  Order Change
     *  Order Line
     *  Order Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderLine($index)
    {
        return isset($this->orderLine[$index]);
    }

    /**
     * unset orderLine
     *
     * ASBIE
     *  Order Change. Order Line
     *  An association to one or more (changed) Order Lines.
     *  1..n
     *  Order Change
     *  Order Line
     *  Order Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderLine($index)
    {
        unset($this->orderLine[$index]);
    }

    /**
     * Gets as orderLine
     *
     * ASBIE
     *  Order Change. Order Line
     *  An association to one or more (changed) Order Lines.
     *  1..n
     *  Order Change
     *  Order Line
     *  Order Line
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderLine[]
     */
    public function getOrderLine()
    {
        return $this->orderLine;
    }

    /**
     * Sets a new orderLine
     *
     * ASBIE
     *  Order Change. Order Line
     *  An association to one or more (changed) Order Lines.
     *  1..n
     *  Order Change
     *  Order Line
     *  Order Line
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderLine[] $orderLine
     * @return self
     */
    public function setOrderLine(array $orderLine)
    {
        $this->orderLine = $orderLine;
        return $this;
    }


}

