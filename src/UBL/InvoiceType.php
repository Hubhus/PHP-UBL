<?php

namespace NOKA\PHPUBL\UBL;

/**
 * Class representing InvoiceType
 *
 * ABIE
 *  Invoice. Details
 *  The document used to request payment.
 *  Invoice
 * XSD Type: InvoiceType
 */
class InvoiceType
{

    /**
     * A container for all extensions present in the document.
     *
     * @var \NOKA\PHPUBL\UBL\Common\ExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Invoice. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Invoice
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
     *  Invoice. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Invoice
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
     *  Invoice. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Invoice
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
     *  Invoice. Identifier
     *  An identifier for the Invoice assigned by the Creditor.
     *  1
     *  Invoice
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Invoice Number
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Invoice. Copy_ Indicator. Indicator
     *  Indicates whether a document is a copy (true) or not (false).
     *  0..1
     *  Invoice
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
     *  Invoice. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Invoice
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Invoice. Issue Date. Date
     *  The date assigned by the Creditor on which the Invoice was issued.
     *  1
     *  Invoice
     *  Issue Date
     *  Date
     *  Date. Type
     *  Invoice Date
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Invoice. Issue Time. Time
     *  The time assigned by the Creditor at which the Invoice was issued.
     *  0..1
     *  Invoice
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Invoice. Invoice Type Code. Code
     *  Code specifying the type of the Invoice.
     *  0..1
     *  Invoice
     *  Invoice Type Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\InvoiceTypeCode $invoiceTypeCode
     */
    private $invoiceTypeCode = null;

    /**
     * BBIE
     *  Invoice. Note. Text
     *  Free-form text applying to the Invoice. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Invoice
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
     *  Invoice. Tax Point Date. Date
     *  The date of the Invoice, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Invoice
     *  Tax Point Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $taxPointDate
     */
    private $taxPointDate = null;

    /**
     * BBIE
     *  Invoice. Document_ Currency Code. Code
     *  The currency in which the Document is presented. This may be the same currency as the pricing or as the tax.
     *  0..1
     *  Invoice
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
     *  Invoice. Tax_ Currency Code. Code
     *  The currency used for tax amounts in the Invoice.
     *  0..1
     *  Invoice
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
     *  Invoice. Pricing_ Currency Code. Code
     *  The currency used for prices in the Invoice.
     *  0..1
     *  Invoice
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
     *  Invoice. Payment_ Currency Code. Code
     *  The currency used for payment in the Invoice.
     *  0..1
     *  Invoice
     *  Payment
     *  Currency Code
     *  Code
     *  Currency_ Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\PaymentCurrencyCode $paymentCurrencyCode
     */
    private $paymentCurrencyCode = null;

    /**
     * BBIE
     *  Invoice. Payment Alternative_ Currency Code. Code
     *  The alternative currency used for payment in the Invoice.
     *  0..1
     *  Invoice
     *  Payment Alternative
     *  Currency Code
     *  Code
     *  Currency_ Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\PaymentAlternativeCurrencyCode $paymentAlternativeCurrencyCode
     */
    private $paymentAlternativeCurrencyCode = null;

    /**
     * BBIE
     *  Invoice. Accounting Cost Code. Code
     *  The Buyer's accounting code applied to the Invoice as a whole.
     *  0..1
     *  Invoice
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AccountingCostCode $accountingCostCode
     */
    private $accountingCostCode = null;

    /**
     * BBIE
     *  Invoice. Accounting Cost. Text
     *  The Buyer's accounting code applied to the Invoice as a whole, expressed as text.
     *  0..1
     *  Invoice
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AccountingCost $accountingCost
     */
    private $accountingCost = null;

    /**
     * BBIE
     *  Invoice. Line Count. Numeric
     *  The number of lines in the document.
     *  0..1
     *  Invoice
     *  Line Count
     *  Numeric
     *  Numeric. Type
     *
     * @var float $lineCountNumeric
     */
    private $lineCountNumeric = null;

    /**
     * ASBIE
     *  Invoice. Invoice_ Period. Period
     *  An association to period(s) to which the Invoice applies.
     *  0..n
     *  Invoice
     *  Invoice
     *  Period
     *  Period
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\InvoicePeriod[] $invoicePeriod
     */
    private $invoicePeriod = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Order Reference
     *  An association to Order Reference.
     *  0..1
     *  Invoice
     *  Order Reference
     *  Order Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderReference $orderReference
     */
    private $orderReference = null;

    /**
     * ASBIE
     *  Invoice. Billing Reference
     *  An association to Billing Reference.
     *  0..n
     *  Invoice
     *  Billing Reference
     *  Billing Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\BillingReference[] $billingReference
     */
    private $billingReference = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Despatch_ Document Reference. Document Reference
     *  An associative reference to Despatch Advice.
     *  0..n
     *  Invoice
     *  Despatch
     *  Document Reference
     *  Document Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DespatchDocumentReference[] $despatchDocumentReference
     */
    private $despatchDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Receipt_ Document Reference. Document Reference
     *  An associative reference to Receipt Advice.
     *  0..n
     *  Invoice
     *  Receipt
     *  Document Reference
     *  Document Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReceiptDocumentReference[] $receiptDocumentReference
     */
    private $receiptDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Originator_ Document Reference. Document Reference
     *  An associative reference to Originator Document.
     *  0..n
     *  Invoice
     *  Originator
     *  Document Reference
     *  Document Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginatorDocumentReference[] $originatorDocumentReference
     */
    private $originatorDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Contract_ Document Reference. Document Reference
     *  An associative reference to Contract.
     *  0..n
     *  Invoice
     *  Contract
     *  Document Reference
     *  Document Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ContractDocumentReference[] $contractDocumentReference
     */
    private $contractDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Invoice
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
     *  Invoice. Signature
     *  An association to Signature.
     *  0..n
     *  Invoice
     *  Signature
     *  Signature
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Signature[] $signature
     */
    private $signature = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Accounting_ Supplier Party. Supplier Party
     *  An association to the Accounting Supplier Party.
     *  1
     *  Invoice
     *  Accounting
     *  Supplier Party
     *  Supplier Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AccountingSupplierParty $accountingSupplierParty
     */
    private $accountingSupplierParty = null;

    /**
     * ASBIE
     *  Invoice. Accounting_ Customer Party. Customer Party
     *  An association to the Accounting Customer Party.
     *  1
     *  Invoice
     *  Accounting
     *  Customer Party
     *  Customer Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AccountingCustomerParty $accountingCustomerParty
     */
    private $accountingCustomerParty = null;

    /**
     * ASBIE
     *  Invoice. Payee_ Party. Party
     *  An association to the Payee.
     *  0..1
     *  Invoice
     *  Payee
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\PayeeParty $payeeParty
     */
    private $payeeParty = null;

    /**
     * ASBIE
     *  Invoice. Buyer_ Customer Party. Customer Party
     *  An association to the Buyer.
     *  0..1
     *  Invoice
     *  Buyer
     *  Customer Party
     *  Customer Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\BuyerCustomerParty $buyerCustomerParty
     */
    private $buyerCustomerParty = null;

    /**
     * ASBIE
     *  Invoice. Seller_ Supplier Party. Supplier Party
     *  An association to the Seller.
     *  0..1
     *  Invoice
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\SellerSupplierParty $sellerSupplierParty
     */
    private $sellerSupplierParty = null;

    /**
     * ASBIE
     *  Invoice. Tax Representative_ Party. Party
     *  An association to the Tax Representative.
     *  0..1
     *  Invoice
     *  Tax Representative
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxRepresentativeParty $taxRepresentativeParty
     */
    private $taxRepresentativeParty = null;

    /**
     * ASBIE
     *  Invoice. Delivery
     *  An association to Delivery.
     *  0..n
     *  Invoice
     *  Delivery
     *  Delivery
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Delivery[] $delivery
     */
    private $delivery = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Delivery Terms
     *  An association to Delivery Terms.
     *  0..1
     *  Invoice
     *  Delivery Terms
     *  Delivery Terms
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryTerms $deliveryTerms
     */
    private $deliveryTerms = null;

    /**
     * ASBIE
     *  Invoice. Payment Means
     *  An association to Payment Means.
     *  0..n
     *  Invoice
     *  Payment Means
     *  Payment Means
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentMeans[] $paymentMeans
     */
    private $paymentMeans = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Payment Terms
     *  An association to Payment Terms.
     *  0..n
     *  Invoice
     *  Payment Terms
     *  Payment Terms
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentTerms[] $paymentTerms
     */
    private $paymentTerms = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Prepaid_ Payment. Payment
     *  An association to prepaid payment(s).
     *  0..n
     *  Invoice
     *  Prepaid
     *  Payment
     *  Payment
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\PrepaidPayment[] $prepaidPayment
     */
    private $prepaidPayment = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Allowance Charge
     *  An association to Allowances and Charges that apply to the Invoice as a whole.
     *  0..n
     *  Invoice
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AllowanceCharge[] $allowanceCharge
     */
    private $allowanceCharge = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Tax_ Exchange Rate. Exchange Rate
     *  An association to Exchange Rate between the Document Currency and the Tax Currency.
     *  0..1
     *  Invoice
     *  Tax
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxExchangeRate $taxExchangeRate
     */
    private $taxExchangeRate = null;

    /**
     * ASBIE
     *  Invoice. Pricing_ Exchange Rate. Exchange Rate
     *  An association to Exchange Rate between the Document Currency and the Pricing Currency.
     *  0..1
     *  Invoice
     *  Pricing
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\PricingExchangeRate $pricingExchangeRate
     */
    private $pricingExchangeRate = null;

    /**
     * ASBIE
     *  Invoice. Payment_ Exchange Rate. Exchange Rate
     *  An association to Exchange Rate between the Document Currency and the Payment Currency.
     *  0..1
     *  Invoice
     *  Payment
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentExchangeRate $paymentExchangeRate
     */
    private $paymentExchangeRate = null;

    /**
     * ASBIE
     *  Invoice. Payment Alternative_ Exchange Rate. Exchange Rate
     *  An association to Exchange Rate between the Document Currency and the Payment Alternative Currency.
     *  0..1
     *  Invoice
     *  Payment Alternative
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentAlternativeExchangeRate $paymentAlternativeExchangeRate
     */
    private $paymentAlternativeExchangeRate = null;

    /**
     * ASBIE
     *  Invoice. Tax Total
     *  An association to tax total for specific tax types/rates.
     *  0..n
     *  Invoice
     *  Tax Total
     *  Tax Total
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxTotal[] $taxTotal
     */
    private $taxTotal = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Legal_ Monetary Total. Monetary Total
     *  An association to the total amount payable on the Invoice, including Allowances, Charges, and Taxes.
     *  1
     *  Invoice
     *  Legal
     *  Monetary Total
     *  Monetary Total
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\LegalMonetaryTotal $legalMonetaryTotal
     */
    private $legalMonetaryTotal = null;

    /**
     * ASBIE
     *  Invoice. Invoice Line
     *  An association to one or more Invoice Lines.
     *  1..n
     *  Invoice
     *  Invoice Line
     *  Invoice Line
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\InvoiceLine[] $invoiceLine
     */
    private $invoiceLine = [
        
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
     *  Invoice. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Invoice
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
     *  Invoice. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Invoice
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
     *  Invoice. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Invoice
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
     *  Invoice. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Invoice
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
     *  Invoice. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Invoice
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
     *  Invoice. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Invoice
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
     *  Invoice. Identifier
     *  An identifier for the Invoice assigned by the Creditor.
     *  1
     *  Invoice
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Invoice Number
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
     *  Invoice. Identifier
     *  An identifier for the Invoice assigned by the Creditor.
     *  1
     *  Invoice
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Invoice Number
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
     *  Invoice. Copy_ Indicator. Indicator
     *  Indicates whether a document is a copy (true) or not (false).
     *  0..1
     *  Invoice
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
     *  Invoice. Copy_ Indicator. Indicator
     *  Indicates whether a document is a copy (true) or not (false).
     *  0..1
     *  Invoice
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
     *  Invoice. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Invoice
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
     *  Invoice. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Invoice
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
     *  Invoice. Issue Date. Date
     *  The date assigned by the Creditor on which the Invoice was issued.
     *  1
     *  Invoice
     *  Issue Date
     *  Date
     *  Date. Type
     *  Invoice Date
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
     *  Invoice. Issue Date. Date
     *  The date assigned by the Creditor on which the Invoice was issued.
     *  1
     *  Invoice
     *  Issue Date
     *  Date
     *  Date. Type
     *  Invoice Date
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
     *  Invoice. Issue Time. Time
     *  The time assigned by the Creditor at which the Invoice was issued.
     *  0..1
     *  Invoice
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
     *  Invoice. Issue Time. Time
     *  The time assigned by the Creditor at which the Invoice was issued.
     *  0..1
     *  Invoice
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
     * Gets as invoiceTypeCode
     *
     * BBIE
     *  Invoice. Invoice Type Code. Code
     *  Code specifying the type of the Invoice.
     *  0..1
     *  Invoice
     *  Invoice Type Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\InvoiceTypeCode
     */
    public function getInvoiceTypeCode()
    {
        return $this->invoiceTypeCode;
    }

    /**
     * Sets a new invoiceTypeCode
     *
     * BBIE
     *  Invoice. Invoice Type Code. Code
     *  Code specifying the type of the Invoice.
     *  0..1
     *  Invoice
     *  Invoice Type Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\InvoiceTypeCode $invoiceTypeCode
     * @return self
     */
    public function setInvoiceTypeCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\InvoiceTypeCode $invoiceTypeCode)
    {
        $this->invoiceTypeCode = $invoiceTypeCode;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Invoice. Note. Text
     *  Free-form text applying to the Invoice. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Invoice
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
     *  Invoice. Note. Text
     *  Free-form text applying to the Invoice. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Invoice
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
     *  Invoice. Note. Text
     *  Free-form text applying to the Invoice. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Invoice
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
     *  Invoice. Note. Text
     *  Free-form text applying to the Invoice. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Invoice
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
     *  Invoice. Note. Text
     *  Free-form text applying to the Invoice. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Invoice
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
     * Gets as taxPointDate
     *
     * BBIE
     *  Invoice. Tax Point Date. Date
     *  The date of the Invoice, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Invoice
     *  Tax Point Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getTaxPointDate()
    {
        return $this->taxPointDate;
    }

    /**
     * Sets a new taxPointDate
     *
     * BBIE
     *  Invoice. Tax Point Date. Date
     *  The date of the Invoice, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Invoice
     *  Tax Point Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $taxPointDate
     * @return self
     */
    public function setTaxPointDate(\DateTime $taxPointDate)
    {
        $this->taxPointDate = $taxPointDate;
        return $this;
    }

    /**
     * Gets as documentCurrencyCode
     *
     * BBIE
     *  Invoice. Document_ Currency Code. Code
     *  The currency in which the Document is presented. This may be the same currency as the pricing or as the tax.
     *  0..1
     *  Invoice
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
     *  Invoice. Document_ Currency Code. Code
     *  The currency in which the Document is presented. This may be the same currency as the pricing or as the tax.
     *  0..1
     *  Invoice
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
     * Gets as taxCurrencyCode
     *
     * BBIE
     *  Invoice. Tax_ Currency Code. Code
     *  The currency used for tax amounts in the Invoice.
     *  0..1
     *  Invoice
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
     *  Invoice. Tax_ Currency Code. Code
     *  The currency used for tax amounts in the Invoice.
     *  0..1
     *  Invoice
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
     * Gets as pricingCurrencyCode
     *
     * BBIE
     *  Invoice. Pricing_ Currency Code. Code
     *  The currency used for prices in the Invoice.
     *  0..1
     *  Invoice
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
     *  Invoice. Pricing_ Currency Code. Code
     *  The currency used for prices in the Invoice.
     *  0..1
     *  Invoice
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
     * Gets as paymentCurrencyCode
     *
     * BBIE
     *  Invoice. Payment_ Currency Code. Code
     *  The currency used for payment in the Invoice.
     *  0..1
     *  Invoice
     *  Payment
     *  Currency Code
     *  Code
     *  Currency_ Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\PaymentCurrencyCode
     */
    public function getPaymentCurrencyCode()
    {
        return $this->paymentCurrencyCode;
    }

    /**
     * Sets a new paymentCurrencyCode
     *
     * BBIE
     *  Invoice. Payment_ Currency Code. Code
     *  The currency used for payment in the Invoice.
     *  0..1
     *  Invoice
     *  Payment
     *  Currency Code
     *  Code
     *  Currency_ Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\PaymentCurrencyCode $paymentCurrencyCode
     * @return self
     */
    public function setPaymentCurrencyCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\PaymentCurrencyCode $paymentCurrencyCode)
    {
        $this->paymentCurrencyCode = $paymentCurrencyCode;
        return $this;
    }

    /**
     * Gets as paymentAlternativeCurrencyCode
     *
     * BBIE
     *  Invoice. Payment Alternative_ Currency Code. Code
     *  The alternative currency used for payment in the Invoice.
     *  0..1
     *  Invoice
     *  Payment Alternative
     *  Currency Code
     *  Code
     *  Currency_ Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\PaymentAlternativeCurrencyCode
     */
    public function getPaymentAlternativeCurrencyCode()
    {
        return $this->paymentAlternativeCurrencyCode;
    }

    /**
     * Sets a new paymentAlternativeCurrencyCode
     *
     * BBIE
     *  Invoice. Payment Alternative_ Currency Code. Code
     *  The alternative currency used for payment in the Invoice.
     *  0..1
     *  Invoice
     *  Payment Alternative
     *  Currency Code
     *  Code
     *  Currency_ Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\PaymentAlternativeCurrencyCode $paymentAlternativeCurrencyCode
     * @return self
     */
    public function setPaymentAlternativeCurrencyCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\PaymentAlternativeCurrencyCode $paymentAlternativeCurrencyCode)
    {
        $this->paymentAlternativeCurrencyCode = $paymentAlternativeCurrencyCode;
        return $this;
    }

    /**
     * Gets as accountingCostCode
     *
     * BBIE
     *  Invoice. Accounting Cost Code. Code
     *  The Buyer's accounting code applied to the Invoice as a whole.
     *  0..1
     *  Invoice
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
     *  Invoice. Accounting Cost Code. Code
     *  The Buyer's accounting code applied to the Invoice as a whole.
     *  0..1
     *  Invoice
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
     *  Invoice. Accounting Cost. Text
     *  The Buyer's accounting code applied to the Invoice as a whole, expressed as text.
     *  0..1
     *  Invoice
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
     *  Invoice. Accounting Cost. Text
     *  The Buyer's accounting code applied to the Invoice as a whole, expressed as text.
     *  0..1
     *  Invoice
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
     *  Invoice. Line Count. Numeric
     *  The number of lines in the document.
     *  0..1
     *  Invoice
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
     *  Invoice. Line Count. Numeric
     *  The number of lines in the document.
     *  0..1
     *  Invoice
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
     * Adds as invoicePeriod
     *
     * ASBIE
     *  Invoice. Invoice_ Period. Period
     *  An association to period(s) to which the Invoice applies.
     *  0..n
     *  Invoice
     *  Invoice
     *  Period
     *  Period
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\InvoicePeriod $invoicePeriod
     */
    public function addToInvoicePeriod(\NOKA\PHPUBL\UBL\Common\AggregateComponents\InvoicePeriod $invoicePeriod)
    {
        $this->invoicePeriod[] = $invoicePeriod;
        return $this;
    }

    /**
     * isset invoicePeriod
     *
     * ASBIE
     *  Invoice. Invoice_ Period. Period
     *  An association to period(s) to which the Invoice applies.
     *  0..n
     *  Invoice
     *  Invoice
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvoicePeriod($index)
    {
        return isset($this->invoicePeriod[$index]);
    }

    /**
     * unset invoicePeriod
     *
     * ASBIE
     *  Invoice. Invoice_ Period. Period
     *  An association to period(s) to which the Invoice applies.
     *  0..n
     *  Invoice
     *  Invoice
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvoicePeriod($index)
    {
        unset($this->invoicePeriod[$index]);
    }

    /**
     * Gets as invoicePeriod
     *
     * ASBIE
     *  Invoice. Invoice_ Period. Period
     *  An association to period(s) to which the Invoice applies.
     *  0..n
     *  Invoice
     *  Invoice
     *  Period
     *  Period
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\InvoicePeriod[]
     */
    public function getInvoicePeriod()
    {
        return $this->invoicePeriod;
    }

    /**
     * Sets a new invoicePeriod
     *
     * ASBIE
     *  Invoice. Invoice_ Period. Period
     *  An association to period(s) to which the Invoice applies.
     *  0..n
     *  Invoice
     *  Invoice
     *  Period
     *  Period
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\InvoicePeriod[] $invoicePeriod
     * @return self
     */
    public function setInvoicePeriod(array $invoicePeriod)
    {
        $this->invoicePeriod = $invoicePeriod;
        return $this;
    }

    /**
     * Gets as orderReference
     *
     * ASBIE
     *  Invoice. Order Reference
     *  An association to Order Reference.
     *  0..1
     *  Invoice
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
     *  Invoice. Order Reference
     *  An association to Order Reference.
     *  0..1
     *  Invoice
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
     * Adds as billingReference
     *
     * ASBIE
     *  Invoice. Billing Reference
     *  An association to Billing Reference.
     *  0..n
     *  Invoice
     *  Billing Reference
     *  Billing Reference
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\BillingReference $billingReference
     */
    public function addToBillingReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\BillingReference $billingReference)
    {
        $this->billingReference[] = $billingReference;
        return $this;
    }

    /**
     * isset billingReference
     *
     * ASBIE
     *  Invoice. Billing Reference
     *  An association to Billing Reference.
     *  0..n
     *  Invoice
     *  Billing Reference
     *  Billing Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBillingReference($index)
    {
        return isset($this->billingReference[$index]);
    }

    /**
     * unset billingReference
     *
     * ASBIE
     *  Invoice. Billing Reference
     *  An association to Billing Reference.
     *  0..n
     *  Invoice
     *  Billing Reference
     *  Billing Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBillingReference($index)
    {
        unset($this->billingReference[$index]);
    }

    /**
     * Gets as billingReference
     *
     * ASBIE
     *  Invoice. Billing Reference
     *  An association to Billing Reference.
     *  0..n
     *  Invoice
     *  Billing Reference
     *  Billing Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\BillingReference[]
     */
    public function getBillingReference()
    {
        return $this->billingReference;
    }

    /**
     * Sets a new billingReference
     *
     * ASBIE
     *  Invoice. Billing Reference
     *  An association to Billing Reference.
     *  0..n
     *  Invoice
     *  Billing Reference
     *  Billing Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\BillingReference[] $billingReference
     * @return self
     */
    public function setBillingReference(array $billingReference)
    {
        $this->billingReference = $billingReference;
        return $this;
    }

    /**
     * Adds as despatchDocumentReference
     *
     * ASBIE
     *  Invoice. Despatch_ Document Reference. Document Reference
     *  An associative reference to Despatch Advice.
     *  0..n
     *  Invoice
     *  Despatch
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DespatchDocumentReference $despatchDocumentReference
     */
    public function addToDespatchDocumentReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\DespatchDocumentReference $despatchDocumentReference)
    {
        $this->despatchDocumentReference[] = $despatchDocumentReference;
        return $this;
    }

    /**
     * isset despatchDocumentReference
     *
     * ASBIE
     *  Invoice. Despatch_ Document Reference. Document Reference
     *  An associative reference to Despatch Advice.
     *  0..n
     *  Invoice
     *  Despatch
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDespatchDocumentReference($index)
    {
        return isset($this->despatchDocumentReference[$index]);
    }

    /**
     * unset despatchDocumentReference
     *
     * ASBIE
     *  Invoice. Despatch_ Document Reference. Document Reference
     *  An associative reference to Despatch Advice.
     *  0..n
     *  Invoice
     *  Despatch
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDespatchDocumentReference($index)
    {
        unset($this->despatchDocumentReference[$index]);
    }

    /**
     * Gets as despatchDocumentReference
     *
     * ASBIE
     *  Invoice. Despatch_ Document Reference. Document Reference
     *  An associative reference to Despatch Advice.
     *  0..n
     *  Invoice
     *  Despatch
     *  Document Reference
     *  Document Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\DespatchDocumentReference[]
     */
    public function getDespatchDocumentReference()
    {
        return $this->despatchDocumentReference;
    }

    /**
     * Sets a new despatchDocumentReference
     *
     * ASBIE
     *  Invoice. Despatch_ Document Reference. Document Reference
     *  An associative reference to Despatch Advice.
     *  0..n
     *  Invoice
     *  Despatch
     *  Document Reference
     *  Document Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DespatchDocumentReference[] $despatchDocumentReference
     * @return self
     */
    public function setDespatchDocumentReference(array $despatchDocumentReference)
    {
        $this->despatchDocumentReference = $despatchDocumentReference;
        return $this;
    }

    /**
     * Adds as receiptDocumentReference
     *
     * ASBIE
     *  Invoice. Receipt_ Document Reference. Document Reference
     *  An associative reference to Receipt Advice.
     *  0..n
     *  Invoice
     *  Receipt
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReceiptDocumentReference $receiptDocumentReference
     */
    public function addToReceiptDocumentReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ReceiptDocumentReference $receiptDocumentReference)
    {
        $this->receiptDocumentReference[] = $receiptDocumentReference;
        return $this;
    }

    /**
     * isset receiptDocumentReference
     *
     * ASBIE
     *  Invoice. Receipt_ Document Reference. Document Reference
     *  An associative reference to Receipt Advice.
     *  0..n
     *  Invoice
     *  Receipt
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReceiptDocumentReference($index)
    {
        return isset($this->receiptDocumentReference[$index]);
    }

    /**
     * unset receiptDocumentReference
     *
     * ASBIE
     *  Invoice. Receipt_ Document Reference. Document Reference
     *  An associative reference to Receipt Advice.
     *  0..n
     *  Invoice
     *  Receipt
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReceiptDocumentReference($index)
    {
        unset($this->receiptDocumentReference[$index]);
    }

    /**
     * Gets as receiptDocumentReference
     *
     * ASBIE
     *  Invoice. Receipt_ Document Reference. Document Reference
     *  An associative reference to Receipt Advice.
     *  0..n
     *  Invoice
     *  Receipt
     *  Document Reference
     *  Document Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReceiptDocumentReference[]
     */
    public function getReceiptDocumentReference()
    {
        return $this->receiptDocumentReference;
    }

    /**
     * Sets a new receiptDocumentReference
     *
     * ASBIE
     *  Invoice. Receipt_ Document Reference. Document Reference
     *  An associative reference to Receipt Advice.
     *  0..n
     *  Invoice
     *  Receipt
     *  Document Reference
     *  Document Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReceiptDocumentReference[] $receiptDocumentReference
     * @return self
     */
    public function setReceiptDocumentReference(array $receiptDocumentReference)
    {
        $this->receiptDocumentReference = $receiptDocumentReference;
        return $this;
    }

    /**
     * Adds as originatorDocumentReference
     *
     * ASBIE
     *  Invoice. Originator_ Document Reference. Document Reference
     *  An associative reference to Originator Document.
     *  0..n
     *  Invoice
     *  Originator
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginatorDocumentReference $originatorDocumentReference
     */
    public function addToOriginatorDocumentReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginatorDocumentReference $originatorDocumentReference)
    {
        $this->originatorDocumentReference[] = $originatorDocumentReference;
        return $this;
    }

    /**
     * isset originatorDocumentReference
     *
     * ASBIE
     *  Invoice. Originator_ Document Reference. Document Reference
     *  An associative reference to Originator Document.
     *  0..n
     *  Invoice
     *  Originator
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOriginatorDocumentReference($index)
    {
        return isset($this->originatorDocumentReference[$index]);
    }

    /**
     * unset originatorDocumentReference
     *
     * ASBIE
     *  Invoice. Originator_ Document Reference. Document Reference
     *  An associative reference to Originator Document.
     *  0..n
     *  Invoice
     *  Originator
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOriginatorDocumentReference($index)
    {
        unset($this->originatorDocumentReference[$index]);
    }

    /**
     * Gets as originatorDocumentReference
     *
     * ASBIE
     *  Invoice. Originator_ Document Reference. Document Reference
     *  An associative reference to Originator Document.
     *  0..n
     *  Invoice
     *  Originator
     *  Document Reference
     *  Document Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginatorDocumentReference[]
     */
    public function getOriginatorDocumentReference()
    {
        return $this->originatorDocumentReference;
    }

    /**
     * Sets a new originatorDocumentReference
     *
     * ASBIE
     *  Invoice. Originator_ Document Reference. Document Reference
     *  An associative reference to Originator Document.
     *  0..n
     *  Invoice
     *  Originator
     *  Document Reference
     *  Document Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginatorDocumentReference[] $originatorDocumentReference
     * @return self
     */
    public function setOriginatorDocumentReference(array $originatorDocumentReference)
    {
        $this->originatorDocumentReference = $originatorDocumentReference;
        return $this;
    }

    /**
     * Adds as contractDocumentReference
     *
     * ASBIE
     *  Invoice. Contract_ Document Reference. Document Reference
     *  An associative reference to Contract.
     *  0..n
     *  Invoice
     *  Contract
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ContractDocumentReference $contractDocumentReference
     */
    public function addToContractDocumentReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ContractDocumentReference $contractDocumentReference)
    {
        $this->contractDocumentReference[] = $contractDocumentReference;
        return $this;
    }

    /**
     * isset contractDocumentReference
     *
     * ASBIE
     *  Invoice. Contract_ Document Reference. Document Reference
     *  An associative reference to Contract.
     *  0..n
     *  Invoice
     *  Contract
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContractDocumentReference($index)
    {
        return isset($this->contractDocumentReference[$index]);
    }

    /**
     * unset contractDocumentReference
     *
     * ASBIE
     *  Invoice. Contract_ Document Reference. Document Reference
     *  An associative reference to Contract.
     *  0..n
     *  Invoice
     *  Contract
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContractDocumentReference($index)
    {
        unset($this->contractDocumentReference[$index]);
    }

    /**
     * Gets as contractDocumentReference
     *
     * ASBIE
     *  Invoice. Contract_ Document Reference. Document Reference
     *  An associative reference to Contract.
     *  0..n
     *  Invoice
     *  Contract
     *  Document Reference
     *  Document Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ContractDocumentReference[]
     */
    public function getContractDocumentReference()
    {
        return $this->contractDocumentReference;
    }

    /**
     * Sets a new contractDocumentReference
     *
     * ASBIE
     *  Invoice. Contract_ Document Reference. Document Reference
     *  An associative reference to Contract.
     *  0..n
     *  Invoice
     *  Contract
     *  Document Reference
     *  Document Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ContractDocumentReference[] $contractDocumentReference
     * @return self
     */
    public function setContractDocumentReference(array $contractDocumentReference)
    {
        $this->contractDocumentReference = $contractDocumentReference;
        return $this;
    }

    /**
     * Adds as additionalDocumentReference
     *
     * ASBIE
     *  Invoice. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Invoice
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
     *  Invoice. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Invoice
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
     *  Invoice. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Invoice
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
     *  Invoice. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Invoice
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
     *  Invoice. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Invoice
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
     *  Invoice. Signature
     *  An association to Signature.
     *  0..n
     *  Invoice
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
     *  Invoice. Signature
     *  An association to Signature.
     *  0..n
     *  Invoice
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
     *  Invoice. Signature
     *  An association to Signature.
     *  0..n
     *  Invoice
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
     *  Invoice. Signature
     *  An association to Signature.
     *  0..n
     *  Invoice
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
     *  Invoice. Signature
     *  An association to Signature.
     *  0..n
     *  Invoice
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
     * Gets as accountingSupplierParty
     *
     * ASBIE
     *  Invoice. Accounting_ Supplier Party. Supplier Party
     *  An association to the Accounting Supplier Party.
     *  1
     *  Invoice
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
     *  Invoice. Accounting_ Supplier Party. Supplier Party
     *  An association to the Accounting Supplier Party.
     *  1
     *  Invoice
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
     *  Invoice. Accounting_ Customer Party. Customer Party
     *  An association to the Accounting Customer Party.
     *  1
     *  Invoice
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
     *  Invoice. Accounting_ Customer Party. Customer Party
     *  An association to the Accounting Customer Party.
     *  1
     *  Invoice
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
     * Gets as payeeParty
     *
     * ASBIE
     *  Invoice. Payee_ Party. Party
     *  An association to the Payee.
     *  0..1
     *  Invoice
     *  Payee
     *  Party
     *  Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\PayeeParty
     */
    public function getPayeeParty()
    {
        return $this->payeeParty;
    }

    /**
     * Sets a new payeeParty
     *
     * ASBIE
     *  Invoice. Payee_ Party. Party
     *  An association to the Payee.
     *  0..1
     *  Invoice
     *  Payee
     *  Party
     *  Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\PayeeParty $payeeParty
     * @return self
     */
    public function setPayeeParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\PayeeParty $payeeParty)
    {
        $this->payeeParty = $payeeParty;
        return $this;
    }

    /**
     * Gets as buyerCustomerParty
     *
     * ASBIE
     *  Invoice. Buyer_ Customer Party. Customer Party
     *  An association to the Buyer.
     *  0..1
     *  Invoice
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
     *  Invoice. Buyer_ Customer Party. Customer Party
     *  An association to the Buyer.
     *  0..1
     *  Invoice
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
     *  Invoice. Seller_ Supplier Party. Supplier Party
     *  An association to the Seller.
     *  0..1
     *  Invoice
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
     *  Invoice. Seller_ Supplier Party. Supplier Party
     *  An association to the Seller.
     *  0..1
     *  Invoice
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
     * Gets as taxRepresentativeParty
     *
     * ASBIE
     *  Invoice. Tax Representative_ Party. Party
     *  An association to the Tax Representative.
     *  0..1
     *  Invoice
     *  Tax Representative
     *  Party
     *  Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxRepresentativeParty
     */
    public function getTaxRepresentativeParty()
    {
        return $this->taxRepresentativeParty;
    }

    /**
     * Sets a new taxRepresentativeParty
     *
     * ASBIE
     *  Invoice. Tax Representative_ Party. Party
     *  An association to the Tax Representative.
     *  0..1
     *  Invoice
     *  Tax Representative
     *  Party
     *  Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxRepresentativeParty $taxRepresentativeParty
     * @return self
     */
    public function setTaxRepresentativeParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxRepresentativeParty $taxRepresentativeParty)
    {
        $this->taxRepresentativeParty = $taxRepresentativeParty;
        return $this;
    }

    /**
     * Adds as delivery
     *
     * ASBIE
     *  Invoice. Delivery
     *  An association to Delivery.
     *  0..n
     *  Invoice
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
     *  Invoice. Delivery
     *  An association to Delivery.
     *  0..n
     *  Invoice
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
     *  Invoice. Delivery
     *  An association to Delivery.
     *  0..n
     *  Invoice
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
     *  Invoice. Delivery
     *  An association to Delivery.
     *  0..n
     *  Invoice
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
     *  Invoice. Delivery
     *  An association to Delivery.
     *  0..n
     *  Invoice
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
     *  Invoice. Delivery Terms
     *  An association to Delivery Terms.
     *  0..1
     *  Invoice
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
     *  Invoice. Delivery Terms
     *  An association to Delivery Terms.
     *  0..1
     *  Invoice
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
     * Adds as paymentMeans
     *
     * ASBIE
     *  Invoice. Payment Means
     *  An association to Payment Means.
     *  0..n
     *  Invoice
     *  Payment Means
     *  Payment Means
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentMeans $paymentMeans
     */
    public function addToPaymentMeans(\NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentMeans $paymentMeans)
    {
        $this->paymentMeans[] = $paymentMeans;
        return $this;
    }

    /**
     * isset paymentMeans
     *
     * ASBIE
     *  Invoice. Payment Means
     *  An association to Payment Means.
     *  0..n
     *  Invoice
     *  Payment Means
     *  Payment Means
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentMeans($index)
    {
        return isset($this->paymentMeans[$index]);
    }

    /**
     * unset paymentMeans
     *
     * ASBIE
     *  Invoice. Payment Means
     *  An association to Payment Means.
     *  0..n
     *  Invoice
     *  Payment Means
     *  Payment Means
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentMeans($index)
    {
        unset($this->paymentMeans[$index]);
    }

    /**
     * Gets as paymentMeans
     *
     * ASBIE
     *  Invoice. Payment Means
     *  An association to Payment Means.
     *  0..n
     *  Invoice
     *  Payment Means
     *  Payment Means
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentMeans[]
     */
    public function getPaymentMeans()
    {
        return $this->paymentMeans;
    }

    /**
     * Sets a new paymentMeans
     *
     * ASBIE
     *  Invoice. Payment Means
     *  An association to Payment Means.
     *  0..n
     *  Invoice
     *  Payment Means
     *  Payment Means
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentMeans[] $paymentMeans
     * @return self
     */
    public function setPaymentMeans(array $paymentMeans)
    {
        $this->paymentMeans = $paymentMeans;
        return $this;
    }

    /**
     * Adds as paymentTerms
     *
     * ASBIE
     *  Invoice. Payment Terms
     *  An association to Payment Terms.
     *  0..n
     *  Invoice
     *  Payment Terms
     *  Payment Terms
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentTerms $paymentTerms
     */
    public function addToPaymentTerms(\NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentTerms $paymentTerms)
    {
        $this->paymentTerms[] = $paymentTerms;
        return $this;
    }

    /**
     * isset paymentTerms
     *
     * ASBIE
     *  Invoice. Payment Terms
     *  An association to Payment Terms.
     *  0..n
     *  Invoice
     *  Payment Terms
     *  Payment Terms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentTerms($index)
    {
        return isset($this->paymentTerms[$index]);
    }

    /**
     * unset paymentTerms
     *
     * ASBIE
     *  Invoice. Payment Terms
     *  An association to Payment Terms.
     *  0..n
     *  Invoice
     *  Payment Terms
     *  Payment Terms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentTerms($index)
    {
        unset($this->paymentTerms[$index]);
    }

    /**
     * Gets as paymentTerms
     *
     * ASBIE
     *  Invoice. Payment Terms
     *  An association to Payment Terms.
     *  0..n
     *  Invoice
     *  Payment Terms
     *  Payment Terms
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentTerms[]
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    /**
     * Sets a new paymentTerms
     *
     * ASBIE
     *  Invoice. Payment Terms
     *  An association to Payment Terms.
     *  0..n
     *  Invoice
     *  Payment Terms
     *  Payment Terms
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentTerms[] $paymentTerms
     * @return self
     */
    public function setPaymentTerms(array $paymentTerms)
    {
        $this->paymentTerms = $paymentTerms;
        return $this;
    }

    /**
     * Adds as prepaidPayment
     *
     * ASBIE
     *  Invoice. Prepaid_ Payment. Payment
     *  An association to prepaid payment(s).
     *  0..n
     *  Invoice
     *  Prepaid
     *  Payment
     *  Payment
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\PrepaidPayment $prepaidPayment
     */
    public function addToPrepaidPayment(\NOKA\PHPUBL\UBL\Common\AggregateComponents\PrepaidPayment $prepaidPayment)
    {
        $this->prepaidPayment[] = $prepaidPayment;
        return $this;
    }

    /**
     * isset prepaidPayment
     *
     * ASBIE
     *  Invoice. Prepaid_ Payment. Payment
     *  An association to prepaid payment(s).
     *  0..n
     *  Invoice
     *  Prepaid
     *  Payment
     *  Payment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrepaidPayment($index)
    {
        return isset($this->prepaidPayment[$index]);
    }

    /**
     * unset prepaidPayment
     *
     * ASBIE
     *  Invoice. Prepaid_ Payment. Payment
     *  An association to prepaid payment(s).
     *  0..n
     *  Invoice
     *  Prepaid
     *  Payment
     *  Payment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrepaidPayment($index)
    {
        unset($this->prepaidPayment[$index]);
    }

    /**
     * Gets as prepaidPayment
     *
     * ASBIE
     *  Invoice. Prepaid_ Payment. Payment
     *  An association to prepaid payment(s).
     *  0..n
     *  Invoice
     *  Prepaid
     *  Payment
     *  Payment
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\PrepaidPayment[]
     */
    public function getPrepaidPayment()
    {
        return $this->prepaidPayment;
    }

    /**
     * Sets a new prepaidPayment
     *
     * ASBIE
     *  Invoice. Prepaid_ Payment. Payment
     *  An association to prepaid payment(s).
     *  0..n
     *  Invoice
     *  Prepaid
     *  Payment
     *  Payment
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\PrepaidPayment[] $prepaidPayment
     * @return self
     */
    public function setPrepaidPayment(array $prepaidPayment)
    {
        $this->prepaidPayment = $prepaidPayment;
        return $this;
    }

    /**
     * Adds as allowanceCharge
     *
     * ASBIE
     *  Invoice. Allowance Charge
     *  An association to Allowances and Charges that apply to the Invoice as a whole.
     *  0..n
     *  Invoice
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
     *  Invoice. Allowance Charge
     *  An association to Allowances and Charges that apply to the Invoice as a whole.
     *  0..n
     *  Invoice
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
     *  Invoice. Allowance Charge
     *  An association to Allowances and Charges that apply to the Invoice as a whole.
     *  0..n
     *  Invoice
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
     *  Invoice. Allowance Charge
     *  An association to Allowances and Charges that apply to the Invoice as a whole.
     *  0..n
     *  Invoice
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
     *  Invoice. Allowance Charge
     *  An association to Allowances and Charges that apply to the Invoice as a whole.
     *  0..n
     *  Invoice
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
     * Gets as taxExchangeRate
     *
     * ASBIE
     *  Invoice. Tax_ Exchange Rate. Exchange Rate
     *  An association to Exchange Rate between the Document Currency and the Tax Currency.
     *  0..1
     *  Invoice
     *  Tax
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxExchangeRate
     */
    public function getTaxExchangeRate()
    {
        return $this->taxExchangeRate;
    }

    /**
     * Sets a new taxExchangeRate
     *
     * ASBIE
     *  Invoice. Tax_ Exchange Rate. Exchange Rate
     *  An association to Exchange Rate between the Document Currency and the Tax Currency.
     *  0..1
     *  Invoice
     *  Tax
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxExchangeRate $taxExchangeRate
     * @return self
     */
    public function setTaxExchangeRate(\NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxExchangeRate $taxExchangeRate)
    {
        $this->taxExchangeRate = $taxExchangeRate;
        return $this;
    }

    /**
     * Gets as pricingExchangeRate
     *
     * ASBIE
     *  Invoice. Pricing_ Exchange Rate. Exchange Rate
     *  An association to Exchange Rate between the Document Currency and the Pricing Currency.
     *  0..1
     *  Invoice
     *  Pricing
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\PricingExchangeRate
     */
    public function getPricingExchangeRate()
    {
        return $this->pricingExchangeRate;
    }

    /**
     * Sets a new pricingExchangeRate
     *
     * ASBIE
     *  Invoice. Pricing_ Exchange Rate. Exchange Rate
     *  An association to Exchange Rate between the Document Currency and the Pricing Currency.
     *  0..1
     *  Invoice
     *  Pricing
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\PricingExchangeRate $pricingExchangeRate
     * @return self
     */
    public function setPricingExchangeRate(\NOKA\PHPUBL\UBL\Common\AggregateComponents\PricingExchangeRate $pricingExchangeRate)
    {
        $this->pricingExchangeRate = $pricingExchangeRate;
        return $this;
    }

    /**
     * Gets as paymentExchangeRate
     *
     * ASBIE
     *  Invoice. Payment_ Exchange Rate. Exchange Rate
     *  An association to Exchange Rate between the Document Currency and the Payment Currency.
     *  0..1
     *  Invoice
     *  Payment
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentExchangeRate
     */
    public function getPaymentExchangeRate()
    {
        return $this->paymentExchangeRate;
    }

    /**
     * Sets a new paymentExchangeRate
     *
     * ASBIE
     *  Invoice. Payment_ Exchange Rate. Exchange Rate
     *  An association to Exchange Rate between the Document Currency and the Payment Currency.
     *  0..1
     *  Invoice
     *  Payment
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentExchangeRate $paymentExchangeRate
     * @return self
     */
    public function setPaymentExchangeRate(\NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentExchangeRate $paymentExchangeRate)
    {
        $this->paymentExchangeRate = $paymentExchangeRate;
        return $this;
    }

    /**
     * Gets as paymentAlternativeExchangeRate
     *
     * ASBIE
     *  Invoice. Payment Alternative_ Exchange Rate. Exchange Rate
     *  An association to Exchange Rate between the Document Currency and the Payment Alternative Currency.
     *  0..1
     *  Invoice
     *  Payment Alternative
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentAlternativeExchangeRate
     */
    public function getPaymentAlternativeExchangeRate()
    {
        return $this->paymentAlternativeExchangeRate;
    }

    /**
     * Sets a new paymentAlternativeExchangeRate
     *
     * ASBIE
     *  Invoice. Payment Alternative_ Exchange Rate. Exchange Rate
     *  An association to Exchange Rate between the Document Currency and the Payment Alternative Currency.
     *  0..1
     *  Invoice
     *  Payment Alternative
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentAlternativeExchangeRate $paymentAlternativeExchangeRate
     * @return self
     */
    public function setPaymentAlternativeExchangeRate(\NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentAlternativeExchangeRate $paymentAlternativeExchangeRate)
    {
        $this->paymentAlternativeExchangeRate = $paymentAlternativeExchangeRate;
        return $this;
    }

    /**
     * Adds as taxTotal
     *
     * ASBIE
     *  Invoice. Tax Total
     *  An association to tax total for specific tax types/rates.
     *  0..n
     *  Invoice
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
     *  Invoice. Tax Total
     *  An association to tax total for specific tax types/rates.
     *  0..n
     *  Invoice
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
     *  Invoice. Tax Total
     *  An association to tax total for specific tax types/rates.
     *  0..n
     *  Invoice
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
     *  Invoice. Tax Total
     *  An association to tax total for specific tax types/rates.
     *  0..n
     *  Invoice
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
     *  Invoice. Tax Total
     *  An association to tax total for specific tax types/rates.
     *  0..n
     *  Invoice
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
     *  Invoice. Legal_ Monetary Total. Monetary Total
     *  An association to the total amount payable on the Invoice, including Allowances, Charges, and Taxes.
     *  1
     *  Invoice
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
     *  Invoice. Legal_ Monetary Total. Monetary Total
     *  An association to the total amount payable on the Invoice, including Allowances, Charges, and Taxes.
     *  1
     *  Invoice
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
     * Adds as invoiceLine
     *
     * ASBIE
     *  Invoice. Invoice Line
     *  An association to one or more Invoice Lines.
     *  1..n
     *  Invoice
     *  Invoice Line
     *  Invoice Line
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\InvoiceLine $invoiceLine
     */
    public function addToInvoiceLine(\NOKA\PHPUBL\UBL\Common\AggregateComponents\InvoiceLine $invoiceLine)
    {
        $this->invoiceLine[] = $invoiceLine;
        return $this;
    }

    /**
     * isset invoiceLine
     *
     * ASBIE
     *  Invoice. Invoice Line
     *  An association to one or more Invoice Lines.
     *  1..n
     *  Invoice
     *  Invoice Line
     *  Invoice Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvoiceLine($index)
    {
        return isset($this->invoiceLine[$index]);
    }

    /**
     * unset invoiceLine
     *
     * ASBIE
     *  Invoice. Invoice Line
     *  An association to one or more Invoice Lines.
     *  1..n
     *  Invoice
     *  Invoice Line
     *  Invoice Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvoiceLine($index)
    {
        unset($this->invoiceLine[$index]);
    }

    /**
     * Gets as invoiceLine
     *
     * ASBIE
     *  Invoice. Invoice Line
     *  An association to one or more Invoice Lines.
     *  1..n
     *  Invoice
     *  Invoice Line
     *  Invoice Line
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\InvoiceLine[]
     */
    public function getInvoiceLine()
    {
        return $this->invoiceLine;
    }

    /**
     * Sets a new invoiceLine
     *
     * ASBIE
     *  Invoice. Invoice Line
     *  An association to one or more Invoice Lines.
     *  1..n
     *  Invoice
     *  Invoice Line
     *  Invoice Line
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\InvoiceLine[] $invoiceLine
     * @return self
     */
    public function setInvoiceLine(array $invoiceLine)
    {
        $this->invoiceLine = $invoiceLine;
        return $this;
    }


}

