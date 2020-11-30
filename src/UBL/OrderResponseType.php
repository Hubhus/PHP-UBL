<?php

namespace NOKA\PHPUBL\UBL;

/**
 * Class representing OrderResponseType
 *
 * ABIE
 *  Order Response. Details
 *  The document used to indicate detailed acceptance or rejection of an Order or to make a counter-offer.
 *  Order Response
 *  Order Acknowledgement, PO Response
 * XSD Type: OrderResponseType
 */
class OrderResponseType
{

    /**
     * A container for all extensions present in the document.
     *
     * @var \NOKA\PHPUBL\UBL\Common\ExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Order Response. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Order Response
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
     *  Order Response. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL.
     *  0..1
     *  Order Response
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
     *  Order Response. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Order Response
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
     *  Order Response. Identifier
     *  An identifier for the Order Response assigned by the Seller.
     *  1
     *  Order Response
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
     *  Order Response. Sales Order Identifier. Identifier
     *  An identifier for the Order issued by the Seller.
     *  0..1
     *  Order Response
     *  Sales Order Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\SalesOrderID $salesOrderID
     */
    private $salesOrderID = null;

    /**
     * BBIE
     *  Order Response. Copy_ Indicator. Indicator
     *  Indicates whether the Order Response is a copy (true) or not (false).
     *  0..1
     *  Order Response
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
     *  Order Response. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Order Response
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Order Response. Issue Date. Date
     *  The date assigned by the Seller on which the Order was responded to.
     *  1
     *  Order Response
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Order Response. Issue Time. Time
     *  The time assigned by the Seller at which the Order was responded to.
     *  0..1
     *  Order Response
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Order Response. Note. Text
     *  Free-form text applying to the Order Response. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Order Response
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
     *  Order Response. Document_ Currency Code. Code
     *  The default currency for the Order Response.
     *  0..1
     *  Order Response
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
     *  Order Response. Pricing_ Currency Code. Code
     *  The currency that is used for all prices in the Order Response.
     *  0..1
     *  Order Response
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
     *  Order Response. Tax_ Currency Code. Code
     *  The currency that is used for all tax amounts in the Order Response.
     *  0..1
     *  Order Response
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
     *  Order Response. Total_ Packages Quantity. Quantity
     *  The total number of packages contained in the Order Response.
     *  0..1
     *  Order Response
     *  Total
     *  Packages Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TotalPackagesQuantity $totalPackagesQuantity
     */
    private $totalPackagesQuantity = null;

    /**
     * BBIE
     *  Order Response. Gross_ Weight. Measure
     *  The total gross weight for the Order Response (goods + packaging + transport equipment).
     *  0..1
     *  Order Response
     *  Gross
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\GrossWeightMeasure $grossWeightMeasure
     */
    private $grossWeightMeasure = null;

    /**
     * BBIE
     *  Order Response. Net_ Weight. Measure
     *  The total net weight for the Order Response (goods + packaging).
     *  0..1
     *  Order Response
     *  Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\NetWeightMeasure $netWeightMeasure
     */
    private $netWeightMeasure = null;

    /**
     * BBIE
     *  Order Response. Net Net_ Weight. Measure
     *  The total net weight of the goods in the Order Response excluding packaging.
     *  0..1
     *  Order Response
     *  Net Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\NetNetWeightMeasure $netNetWeightMeasure
     */
    private $netNetWeightMeasure = null;

    /**
     * BBIE
     *  Order Response. Gross_ Volume. Measure
     *  The total volume of the goods in the Order Response including packaging.
     *  0..1
     *  Order Response
     *  Gross
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\GrossVolumeMeasure $grossVolumeMeasure
     */
    private $grossVolumeMeasure = null;

    /**
     * BBIE
     *  Order Response. Net_ Volume. Measure
     *  The total volume of the goods in the Order Response excluding packaging.
     *  0..1
     *  Order Response
     *  Net
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\NetVolumeMeasure $netVolumeMeasure
     */
    private $netVolumeMeasure = null;

    /**
     * BBIE
     *  Order Response. Customer Reference. Text
     *  A supplementary reference assigned by the Buyer, e.g. the CRI in a purchasing card transaction.
     *  0..1
     *  Order Response
     *  Customer Reference
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\CustomerReference $customerReference
     */
    private $customerReference = null;

    /**
     * BBIE
     *  Order Response. Accounting Cost Code. Code
     *  An accounting cost code applied to the order as a whole.
     *  0..1
     *  Order Response
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AccountingCostCode $accountingCostCode
     */
    private $accountingCostCode = null;

    /**
     * BBIE
     *  Order Response. Accounting Cost. Text
     *  An accounting cost code applied to the order as a whole, expressed as text.
     *  0..1
     *  Order Response
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AccountingCost $accountingCost
     */
    private $accountingCost = null;

    /**
     * BBIE
     *  Order Response. Line Count. Numeric
     *  The number of lines in the document.
     *  0..1
     *  Order Response
     *  Line Count
     *  Numeric
     *  Numeric. Type
     *
     * @var float $lineCountNumeric
     */
    private $lineCountNumeric = null;

    /**
     * ASBIE
     *  Order Response. Validity_ Period. Period
     *  The period for which the Order Response is valid.
     *  0..n
     *  Order Response
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
     *  Order Response. Order Reference
     *  An association to Order Reference (the reference of the Order being responded to).
     *  1..n
     *  Order Response
     *  Order Reference
     *  Order Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderReference[] $orderReference
     */
    private $orderReference = [
        
    ];

    /**
     * ASBIE
     *  Order Response. Order_ Document Reference. Document Reference
     *  An associative reference to [another] Order.
     *  0..n
     *  Order Response
     *  Order
     *  Document Reference
     *  Document Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderDocumentReference[] $orderDocumentReference
     */
    private $orderDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Order Response. Originator_ Document Reference. Document Reference
     *  An associative reference to Originator Document.
     *  0..1
     *  Order Response
     *  Originator
     *  Document Reference
     *  Document Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginatorDocumentReference $originatorDocumentReference
     */
    private $originatorDocumentReference = null;

    /**
     * ASBIE
     *  Order Response. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Order Response
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
     *  Order Response. Contract
     *  An association to Contract
     *  0..n
     *  Order Response
     *  Contract
     *  Contract
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Contract[] $contract
     */
    private $contract = [
        
    ];

    /**
     * ASBIE
     *  Order Response. Signature
     *  An association to Signature.
     *  0..n
     *  Order Response
     *  Signature
     *  Signature
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Signature[] $signature
     */
    private $signature = [
        
    ];

    /**
     * ASBIE
     *  Order Response. Seller_ Supplier Party. Supplier Party
     *  An association to the Seller.
     *  1
     *  Order Response
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\SellerSupplierParty $sellerSupplierParty
     */
    private $sellerSupplierParty = null;

    /**
     * ASBIE
     *  Order Response. Buyer_ Customer Party. Customer Party
     *  An association to the Buyer.
     *  1
     *  Order Response
     *  Buyer
     *  Customer Party
     *  Customer Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\BuyerCustomerParty $buyerCustomerParty
     */
    private $buyerCustomerParty = null;

    /**
     * ASBIE
     *  Order Response. Originator_ Customer Party. Customer Party
     *  An association to the Originator.
     *  0..1
     *  Order Response
     *  Originator
     *  Customer Party
     *  Customer Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginatorCustomerParty $originatorCustomerParty
     */
    private $originatorCustomerParty = null;

    /**
     * ASBIE
     *  Order Response. Freight Forwarder_ Party. Party
     *  An association to a Freight Forwarder or Carrier.
     *  0..1
     *  Order Response
     *  Freight Forwarder
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\FreightForwarderParty $freightForwarderParty
     */
    private $freightForwarderParty = null;

    /**
     * ASBIE
     *  Order Response. Accounting_ Supplier Party. Supplier Party
     *  An association to the Accounting Supplier Party.
     *  0..1
     *  Order Response
     *  Accounting
     *  Supplier Party
     *  Supplier Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AccountingSupplierParty $accountingSupplierParty
     */
    private $accountingSupplierParty = null;

    /**
     * ASBIE
     *  Order Response. Accounting_ Customer Party. Customer Party
     *  An association to the Accounting Customer Party.
     *  0..1
     *  Order Response
     *  Accounting
     *  Customer Party
     *  Customer Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AccountingCustomerParty $accountingCustomerParty
     */
    private $accountingCustomerParty = null;

    /**
     * ASBIE
     *  Order Response. Delivery
     *  An association to Delivery.
     *  0..n
     *  Order Response
     *  Delivery
     *  Delivery
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Delivery[] $delivery
     */
    private $delivery = [
        
    ];

    /**
     * ASBIE
     *  Order Response. Delivery Terms
     *  An association to Delivery Terms.
     *  0..1
     *  Order Response
     *  Delivery Terms
     *  Delivery Terms
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryTerms $deliveryTerms
     */
    private $deliveryTerms = null;

    /**
     * ASBIE
     *  Order Response. Payment Means
     *  An association to Payment Means.
     *  0..1
     *  Order Response
     *  Payment Means
     *  Payment Means
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentMeans $paymentMeans
     */
    private $paymentMeans = null;

    /**
     * ASBIE
     *  Order Response. Allowance Charge
     *  An association to Allowances and Charges that apply to the Order Response as a whole.
     *  0..n
     *  Order Response
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AllowanceCharge[] $allowanceCharge
     */
    private $allowanceCharge = [
        
    ];

    /**
     * ASBIE
     *  Order Response. Transaction Conditions
     *  An association with any sales or purchasing conditions applying to the whole order.
     *  0..1
     *  Order Response
     *  Transaction Conditions
     *  Transaction Conditions
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransactionConditions $transactionConditions
     */
    private $transactionConditions = null;

    /**
     * ASBIE
     *  Order Response. Destination_ Country. Country
     *  Associates the order response with the country to which it is destined, for Customs purposes.
     *  0..1
     *  Order Response
     *  Destination
     *  Country
     *  Country
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DestinationCountry $destinationCountry
     */
    private $destinationCountry = null;

    /**
     * ASBIE
     *  Order Response. Tax Total
     *  An association to the total tax amount of the Order (as calculated by the Seller).
     *  0..n
     *  Order Response
     *  Tax Total
     *  Tax Total
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxTotal[] $taxTotal
     */
    private $taxTotal = [
        
    ];

    /**
     * ASBIE
     *  Order Response. Legal_ Monetary Total. Monetary Total
     *  An association to the total amounts for the Order (or counter-offer).
     *  0..1
     *  Order Response
     *  Legal
     *  Monetary Total
     *  Monetary Total
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\LegalMonetaryTotal $legalMonetaryTotal
     */
    private $legalMonetaryTotal = null;

    /**
     * ASBIE
     *  Order Response. Order Line
     *  An association to one or more Order Lines.
     *  1..n
     *  Order Response
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
     *  Order Response. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Order Response
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
     *  Order Response. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Order Response
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
     *  Order Response. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL.
     *  0..1
     *  Order Response
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
     *  Order Response. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL.
     *  0..1
     *  Order Response
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
     *  Order Response. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Order Response
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
     *  Order Response. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Order Response
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
     *  Order Response. Identifier
     *  An identifier for the Order Response assigned by the Seller.
     *  1
     *  Order Response
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
     *  Order Response. Identifier
     *  An identifier for the Order Response assigned by the Seller.
     *  1
     *  Order Response
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
     * Gets as salesOrderID
     *
     * BBIE
     *  Order Response. Sales Order Identifier. Identifier
     *  An identifier for the Order issued by the Seller.
     *  0..1
     *  Order Response
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
     *  Order Response. Sales Order Identifier. Identifier
     *  An identifier for the Order issued by the Seller.
     *  0..1
     *  Order Response
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
     *  Order Response. Copy_ Indicator. Indicator
     *  Indicates whether the Order Response is a copy (true) or not (false).
     *  0..1
     *  Order Response
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
     *  Order Response. Copy_ Indicator. Indicator
     *  Indicates whether the Order Response is a copy (true) or not (false).
     *  0..1
     *  Order Response
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
     *  Order Response. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Order Response
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
     *  Order Response. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Order Response
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
     *  Order Response. Issue Date. Date
     *  The date assigned by the Seller on which the Order was responded to.
     *  1
     *  Order Response
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
     *  Order Response. Issue Date. Date
     *  The date assigned by the Seller on which the Order was responded to.
     *  1
     *  Order Response
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
     *  Order Response. Issue Time. Time
     *  The time assigned by the Seller at which the Order was responded to.
     *  0..1
     *  Order Response
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
     *  Order Response. Issue Time. Time
     *  The time assigned by the Seller at which the Order was responded to.
     *  0..1
     *  Order Response
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
     *  Order Response. Note. Text
     *  Free-form text applying to the Order Response. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Order Response
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
     *  Order Response. Note. Text
     *  Free-form text applying to the Order Response. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Order Response
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
     *  Order Response. Note. Text
     *  Free-form text applying to the Order Response. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Order Response
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
     *  Order Response. Note. Text
     *  Free-form text applying to the Order Response. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Order Response
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
     *  Order Response. Note. Text
     *  Free-form text applying to the Order Response. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Order Response
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
     * Gets as documentCurrencyCode
     *
     * BBIE
     *  Order Response. Document_ Currency Code. Code
     *  The default currency for the Order Response.
     *  0..1
     *  Order Response
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
     *  Order Response. Document_ Currency Code. Code
     *  The default currency for the Order Response.
     *  0..1
     *  Order Response
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
     *  Order Response. Pricing_ Currency Code. Code
     *  The currency that is used for all prices in the Order Response.
     *  0..1
     *  Order Response
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
     *  Order Response. Pricing_ Currency Code. Code
     *  The currency that is used for all prices in the Order Response.
     *  0..1
     *  Order Response
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
     *  Order Response. Tax_ Currency Code. Code
     *  The currency that is used for all tax amounts in the Order Response.
     *  0..1
     *  Order Response
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
     *  Order Response. Tax_ Currency Code. Code
     *  The currency that is used for all tax amounts in the Order Response.
     *  0..1
     *  Order Response
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
     * Gets as totalPackagesQuantity
     *
     * BBIE
     *  Order Response. Total_ Packages Quantity. Quantity
     *  The total number of packages contained in the Order Response.
     *  0..1
     *  Order Response
     *  Total
     *  Packages Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TotalPackagesQuantity
     */
    public function getTotalPackagesQuantity()
    {
        return $this->totalPackagesQuantity;
    }

    /**
     * Sets a new totalPackagesQuantity
     *
     * BBIE
     *  Order Response. Total_ Packages Quantity. Quantity
     *  The total number of packages contained in the Order Response.
     *  0..1
     *  Order Response
     *  Total
     *  Packages Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TotalPackagesQuantity $totalPackagesQuantity
     * @return self
     */
    public function setTotalPackagesQuantity(\NOKA\PHPUBL\UBL\Common\BasicComponents\TotalPackagesQuantity $totalPackagesQuantity)
    {
        $this->totalPackagesQuantity = $totalPackagesQuantity;
        return $this;
    }

    /**
     * Gets as grossWeightMeasure
     *
     * BBIE
     *  Order Response. Gross_ Weight. Measure
     *  The total gross weight for the Order Response (goods + packaging + transport equipment).
     *  0..1
     *  Order Response
     *  Gross
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\GrossWeightMeasure
     */
    public function getGrossWeightMeasure()
    {
        return $this->grossWeightMeasure;
    }

    /**
     * Sets a new grossWeightMeasure
     *
     * BBIE
     *  Order Response. Gross_ Weight. Measure
     *  The total gross weight for the Order Response (goods + packaging + transport equipment).
     *  0..1
     *  Order Response
     *  Gross
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\GrossWeightMeasure $grossWeightMeasure
     * @return self
     */
    public function setGrossWeightMeasure(\NOKA\PHPUBL\UBL\Common\BasicComponents\GrossWeightMeasure $grossWeightMeasure)
    {
        $this->grossWeightMeasure = $grossWeightMeasure;
        return $this;
    }

    /**
     * Gets as netWeightMeasure
     *
     * BBIE
     *  Order Response. Net_ Weight. Measure
     *  The total net weight for the Order Response (goods + packaging).
     *  0..1
     *  Order Response
     *  Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\NetWeightMeasure
     */
    public function getNetWeightMeasure()
    {
        return $this->netWeightMeasure;
    }

    /**
     * Sets a new netWeightMeasure
     *
     * BBIE
     *  Order Response. Net_ Weight. Measure
     *  The total net weight for the Order Response (goods + packaging).
     *  0..1
     *  Order Response
     *  Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\NetWeightMeasure $netWeightMeasure
     * @return self
     */
    public function setNetWeightMeasure(\NOKA\PHPUBL\UBL\Common\BasicComponents\NetWeightMeasure $netWeightMeasure)
    {
        $this->netWeightMeasure = $netWeightMeasure;
        return $this;
    }

    /**
     * Gets as netNetWeightMeasure
     *
     * BBIE
     *  Order Response. Net Net_ Weight. Measure
     *  The total net weight of the goods in the Order Response excluding packaging.
     *  0..1
     *  Order Response
     *  Net Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\NetNetWeightMeasure
     */
    public function getNetNetWeightMeasure()
    {
        return $this->netNetWeightMeasure;
    }

    /**
     * Sets a new netNetWeightMeasure
     *
     * BBIE
     *  Order Response. Net Net_ Weight. Measure
     *  The total net weight of the goods in the Order Response excluding packaging.
     *  0..1
     *  Order Response
     *  Net Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\NetNetWeightMeasure $netNetWeightMeasure
     * @return self
     */
    public function setNetNetWeightMeasure(\NOKA\PHPUBL\UBL\Common\BasicComponents\NetNetWeightMeasure $netNetWeightMeasure)
    {
        $this->netNetWeightMeasure = $netNetWeightMeasure;
        return $this;
    }

    /**
     * Gets as grossVolumeMeasure
     *
     * BBIE
     *  Order Response. Gross_ Volume. Measure
     *  The total volume of the goods in the Order Response including packaging.
     *  0..1
     *  Order Response
     *  Gross
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\GrossVolumeMeasure
     */
    public function getGrossVolumeMeasure()
    {
        return $this->grossVolumeMeasure;
    }

    /**
     * Sets a new grossVolumeMeasure
     *
     * BBIE
     *  Order Response. Gross_ Volume. Measure
     *  The total volume of the goods in the Order Response including packaging.
     *  0..1
     *  Order Response
     *  Gross
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\GrossVolumeMeasure $grossVolumeMeasure
     * @return self
     */
    public function setGrossVolumeMeasure(\NOKA\PHPUBL\UBL\Common\BasicComponents\GrossVolumeMeasure $grossVolumeMeasure)
    {
        $this->grossVolumeMeasure = $grossVolumeMeasure;
        return $this;
    }

    /**
     * Gets as netVolumeMeasure
     *
     * BBIE
     *  Order Response. Net_ Volume. Measure
     *  The total volume of the goods in the Order Response excluding packaging.
     *  0..1
     *  Order Response
     *  Net
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\NetVolumeMeasure
     */
    public function getNetVolumeMeasure()
    {
        return $this->netVolumeMeasure;
    }

    /**
     * Sets a new netVolumeMeasure
     *
     * BBIE
     *  Order Response. Net_ Volume. Measure
     *  The total volume of the goods in the Order Response excluding packaging.
     *  0..1
     *  Order Response
     *  Net
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\NetVolumeMeasure $netVolumeMeasure
     * @return self
     */
    public function setNetVolumeMeasure(\NOKA\PHPUBL\UBL\Common\BasicComponents\NetVolumeMeasure $netVolumeMeasure)
    {
        $this->netVolumeMeasure = $netVolumeMeasure;
        return $this;
    }

    /**
     * Gets as customerReference
     *
     * BBIE
     *  Order Response. Customer Reference. Text
     *  A supplementary reference assigned by the Buyer, e.g. the CRI in a purchasing card transaction.
     *  0..1
     *  Order Response
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
     *  Order Response. Customer Reference. Text
     *  A supplementary reference assigned by the Buyer, e.g. the CRI in a purchasing card transaction.
     *  0..1
     *  Order Response
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
     *  Order Response. Accounting Cost Code. Code
     *  An accounting cost code applied to the order as a whole.
     *  0..1
     *  Order Response
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
     *  Order Response. Accounting Cost Code. Code
     *  An accounting cost code applied to the order as a whole.
     *  0..1
     *  Order Response
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
     *  Order Response. Accounting Cost. Text
     *  An accounting cost code applied to the order as a whole, expressed as text.
     *  0..1
     *  Order Response
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
     *  Order Response. Accounting Cost. Text
     *  An accounting cost code applied to the order as a whole, expressed as text.
     *  0..1
     *  Order Response
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
     *  Order Response. Line Count. Numeric
     *  The number of lines in the document.
     *  0..1
     *  Order Response
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
     *  Order Response. Line Count. Numeric
     *  The number of lines in the document.
     *  0..1
     *  Order Response
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
     *  Order Response. Validity_ Period. Period
     *  The period for which the Order Response is valid.
     *  0..n
     *  Order Response
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
     *  Order Response. Validity_ Period. Period
     *  The period for which the Order Response is valid.
     *  0..n
     *  Order Response
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
     *  Order Response. Validity_ Period. Period
     *  The period for which the Order Response is valid.
     *  0..n
     *  Order Response
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
     *  Order Response. Validity_ Period. Period
     *  The period for which the Order Response is valid.
     *  0..n
     *  Order Response
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
     *  Order Response. Validity_ Period. Period
     *  The period for which the Order Response is valid.
     *  0..n
     *  Order Response
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
     * Adds as orderReference
     *
     * ASBIE
     *  Order Response. Order Reference
     *  An association to Order Reference (the reference of the Order being responded to).
     *  1..n
     *  Order Response
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
     *  Order Response. Order Reference
     *  An association to Order Reference (the reference of the Order being responded to).
     *  1..n
     *  Order Response
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
     *  Order Response. Order Reference
     *  An association to Order Reference (the reference of the Order being responded to).
     *  1..n
     *  Order Response
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
     *  Order Response. Order Reference
     *  An association to Order Reference (the reference of the Order being responded to).
     *  1..n
     *  Order Response
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
     *  Order Response. Order Reference
     *  An association to Order Reference (the reference of the Order being responded to).
     *  1..n
     *  Order Response
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
     * Adds as orderDocumentReference
     *
     * ASBIE
     *  Order Response. Order_ Document Reference. Document Reference
     *  An associative reference to [another] Order.
     *  0..n
     *  Order Response
     *  Order
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderDocumentReference $orderDocumentReference
     */
    public function addToOrderDocumentReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderDocumentReference $orderDocumentReference)
    {
        $this->orderDocumentReference[] = $orderDocumentReference;
        return $this;
    }

    /**
     * isset orderDocumentReference
     *
     * ASBIE
     *  Order Response. Order_ Document Reference. Document Reference
     *  An associative reference to [another] Order.
     *  0..n
     *  Order Response
     *  Order
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderDocumentReference($index)
    {
        return isset($this->orderDocumentReference[$index]);
    }

    /**
     * unset orderDocumentReference
     *
     * ASBIE
     *  Order Response. Order_ Document Reference. Document Reference
     *  An associative reference to [another] Order.
     *  0..n
     *  Order Response
     *  Order
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderDocumentReference($index)
    {
        unset($this->orderDocumentReference[$index]);
    }

    /**
     * Gets as orderDocumentReference
     *
     * ASBIE
     *  Order Response. Order_ Document Reference. Document Reference
     *  An associative reference to [another] Order.
     *  0..n
     *  Order Response
     *  Order
     *  Document Reference
     *  Document Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderDocumentReference[]
     */
    public function getOrderDocumentReference()
    {
        return $this->orderDocumentReference;
    }

    /**
     * Sets a new orderDocumentReference
     *
     * ASBIE
     *  Order Response. Order_ Document Reference. Document Reference
     *  An associative reference to [another] Order.
     *  0..n
     *  Order Response
     *  Order
     *  Document Reference
     *  Document Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderDocumentReference[] $orderDocumentReference
     * @return self
     */
    public function setOrderDocumentReference(array $orderDocumentReference)
    {
        $this->orderDocumentReference = $orderDocumentReference;
        return $this;
    }

    /**
     * Gets as originatorDocumentReference
     *
     * ASBIE
     *  Order Response. Originator_ Document Reference. Document Reference
     *  An associative reference to Originator Document.
     *  0..1
     *  Order Response
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
     *  Order Response. Originator_ Document Reference. Document Reference
     *  An associative reference to Originator Document.
     *  0..1
     *  Order Response
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
     *  Order Response. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Order Response
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
     *  Order Response. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Order Response
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
     *  Order Response. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Order Response
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
     *  Order Response. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Order Response
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
     *  Order Response. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Order Response
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
     *  Order Response. Contract
     *  An association to Contract
     *  0..n
     *  Order Response
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
     *  Order Response. Contract
     *  An association to Contract
     *  0..n
     *  Order Response
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
     *  Order Response. Contract
     *  An association to Contract
     *  0..n
     *  Order Response
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
     *  Order Response. Contract
     *  An association to Contract
     *  0..n
     *  Order Response
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
     *  Order Response. Contract
     *  An association to Contract
     *  0..n
     *  Order Response
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
     *  Order Response. Signature
     *  An association to Signature.
     *  0..n
     *  Order Response
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
     *  Order Response. Signature
     *  An association to Signature.
     *  0..n
     *  Order Response
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
     *  Order Response. Signature
     *  An association to Signature.
     *  0..n
     *  Order Response
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
     *  Order Response. Signature
     *  An association to Signature.
     *  0..n
     *  Order Response
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
     *  Order Response. Signature
     *  An association to Signature.
     *  0..n
     *  Order Response
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
     *  Order Response. Seller_ Supplier Party. Supplier Party
     *  An association to the Seller.
     *  1
     *  Order Response
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
     *  Order Response. Seller_ Supplier Party. Supplier Party
     *  An association to the Seller.
     *  1
     *  Order Response
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
     *  Order Response. Buyer_ Customer Party. Customer Party
     *  An association to the Buyer.
     *  1
     *  Order Response
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
     *  Order Response. Buyer_ Customer Party. Customer Party
     *  An association to the Buyer.
     *  1
     *  Order Response
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
     *  Order Response. Originator_ Customer Party. Customer Party
     *  An association to the Originator.
     *  0..1
     *  Order Response
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
     *  Order Response. Originator_ Customer Party. Customer Party
     *  An association to the Originator.
     *  0..1
     *  Order Response
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
     *  Order Response. Freight Forwarder_ Party. Party
     *  An association to a Freight Forwarder or Carrier.
     *  0..1
     *  Order Response
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
     *  Order Response. Freight Forwarder_ Party. Party
     *  An association to a Freight Forwarder or Carrier.
     *  0..1
     *  Order Response
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
     * Gets as accountingSupplierParty
     *
     * ASBIE
     *  Order Response. Accounting_ Supplier Party. Supplier Party
     *  An association to the Accounting Supplier Party.
     *  0..1
     *  Order Response
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
     *  Order Response. Accounting_ Supplier Party. Supplier Party
     *  An association to the Accounting Supplier Party.
     *  0..1
     *  Order Response
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
     *  Order Response. Accounting_ Customer Party. Customer Party
     *  An association to the Accounting Customer Party.
     *  0..1
     *  Order Response
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
     *  Order Response. Accounting_ Customer Party. Customer Party
     *  An association to the Accounting Customer Party.
     *  0..1
     *  Order Response
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
     * Adds as delivery
     *
     * ASBIE
     *  Order Response. Delivery
     *  An association to Delivery.
     *  0..n
     *  Order Response
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
     *  Order Response. Delivery
     *  An association to Delivery.
     *  0..n
     *  Order Response
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
     *  Order Response. Delivery
     *  An association to Delivery.
     *  0..n
     *  Order Response
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
     *  Order Response. Delivery
     *  An association to Delivery.
     *  0..n
     *  Order Response
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
     *  Order Response. Delivery
     *  An association to Delivery.
     *  0..n
     *  Order Response
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
     *  Order Response. Delivery Terms
     *  An association to Delivery Terms.
     *  0..1
     *  Order Response
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
     *  Order Response. Delivery Terms
     *  An association to Delivery Terms.
     *  0..1
     *  Order Response
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
     *  Order Response. Payment Means
     *  An association to Payment Means.
     *  0..1
     *  Order Response
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
     *  Order Response. Payment Means
     *  An association to Payment Means.
     *  0..1
     *  Order Response
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
     * Adds as allowanceCharge
     *
     * ASBIE
     *  Order Response. Allowance Charge
     *  An association to Allowances and Charges that apply to the Order Response as a whole.
     *  0..n
     *  Order Response
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
     *  Order Response. Allowance Charge
     *  An association to Allowances and Charges that apply to the Order Response as a whole.
     *  0..n
     *  Order Response
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
     *  Order Response. Allowance Charge
     *  An association to Allowances and Charges that apply to the Order Response as a whole.
     *  0..n
     *  Order Response
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
     *  Order Response. Allowance Charge
     *  An association to Allowances and Charges that apply to the Order Response as a whole.
     *  0..n
     *  Order Response
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
     *  Order Response. Allowance Charge
     *  An association to Allowances and Charges that apply to the Order Response as a whole.
     *  0..n
     *  Order Response
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
     * Gets as transactionConditions
     *
     * ASBIE
     *  Order Response. Transaction Conditions
     *  An association with any sales or purchasing conditions applying to the whole order.
     *  0..1
     *  Order Response
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
     *  Order Response. Transaction Conditions
     *  An association with any sales or purchasing conditions applying to the whole order.
     *  0..1
     *  Order Response
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
     * Gets as destinationCountry
     *
     * ASBIE
     *  Order Response. Destination_ Country. Country
     *  Associates the order response with the country to which it is destined, for Customs purposes.
     *  0..1
     *  Order Response
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
     *  Order Response. Destination_ Country. Country
     *  Associates the order response with the country to which it is destined, for Customs purposes.
     *  0..1
     *  Order Response
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
     *  Order Response. Tax Total
     *  An association to the total tax amount of the Order (as calculated by the Seller).
     *  0..n
     *  Order Response
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
     *  Order Response. Tax Total
     *  An association to the total tax amount of the Order (as calculated by the Seller).
     *  0..n
     *  Order Response
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
     *  Order Response. Tax Total
     *  An association to the total tax amount of the Order (as calculated by the Seller).
     *  0..n
     *  Order Response
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
     *  Order Response. Tax Total
     *  An association to the total tax amount of the Order (as calculated by the Seller).
     *  0..n
     *  Order Response
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
     *  Order Response. Tax Total
     *  An association to the total tax amount of the Order (as calculated by the Seller).
     *  0..n
     *  Order Response
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
     * Gets as legalMonetaryTotal
     *
     * ASBIE
     *  Order Response. Legal_ Monetary Total. Monetary Total
     *  An association to the total amounts for the Order (or counter-offer).
     *  0..1
     *  Order Response
     *  Legal
     *  Monetary Total
     *  Monetary Total
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\LegalMonetaryTotal
     */
    public function getLegalMonetaryTotal()
    {
        return $this->legalMonetaryTotal;
    }

    /**
     * Sets a new legalMonetaryTotal
     *
     * ASBIE
     *  Order Response. Legal_ Monetary Total. Monetary Total
     *  An association to the total amounts for the Order (or counter-offer).
     *  0..1
     *  Order Response
     *  Legal
     *  Monetary Total
     *  Monetary Total
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\LegalMonetaryTotal $legalMonetaryTotal
     * @return self
     */
    public function setLegalMonetaryTotal(\NOKA\PHPUBL\UBL\Common\AggregateComponents\LegalMonetaryTotal $legalMonetaryTotal)
    {
        $this->legalMonetaryTotal = $legalMonetaryTotal;
        return $this;
    }

    /**
     * Adds as orderLine
     *
     * ASBIE
     *  Order Response. Order Line
     *  An association to one or more Order Lines.
     *  1..n
     *  Order Response
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
     *  Order Response. Order Line
     *  An association to one or more Order Lines.
     *  1..n
     *  Order Response
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
     *  Order Response. Order Line
     *  An association to one or more Order Lines.
     *  1..n
     *  Order Response
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
     *  Order Response. Order Line
     *  An association to one or more Order Lines.
     *  1..n
     *  Order Response
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
     *  Order Response. Order Line
     *  An association to one or more Order Lines.
     *  1..n
     *  Order Response
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

