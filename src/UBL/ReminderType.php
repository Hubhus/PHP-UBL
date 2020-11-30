<?php

namespace NOKA\PHPUBL\UBL;

/**
 * Class representing ReminderType
 *
 * ABIE
 *  Reminder. Details
 *  The document used to remind the customer of payments overdue.
 *  Reminder
 * XSD Type: ReminderType
 */
class ReminderType
{

    /**
     * A container for all extensions present in the document.
     *
     * @var \NOKA\PHPUBL\UBL\Common\ExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Reminder. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Reminder
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
     *  Reminder. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Reminder
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
     *  Reminder. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Reminder
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
     *  Reminder. Identifier
     *  An identifier for the Reminder assigned by the Creditor.
     *  1
     *  Reminder
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
     *  Reminder. Copy_ Indicator. Indicator
     *  Indicates whether a document is a copy (true) or not (false).
     *  0..1
     *  Reminder
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
     *  Reminder. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Reminder
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Reminder. Issue Date. Date
     *  The date assigned by the Creditor on which the Invoice was issued.
     *  1
     *  Reminder
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
     *  Reminder. Issue Time. Time
     *  The time assigned by the Creditor on which the Reminder was issued.
     *  0..1
     *  Reminder
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Reminder. Reminder Type Code. Code
     *  Code specifying the type of the Reminder.
     *  0..1
     *  Reminder
     *  Reminder Type Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ReminderTypeCode $reminderTypeCode
     */
    private $reminderTypeCode = null;

    /**
     * BBIE
     *  Reminder. Reminder Sequence. Numeric
     *  The sequence number of the current reminder. Specifies the number of reminders previously sent plus one.
     *  0..1
     *  Reminder
     *  Reminder Sequence
     *  Numeric
     *  Numeric. Type
     *
     * @var float $reminderSequenceNumeric
     */
    private $reminderSequenceNumeric = null;

    /**
     * BBIE
     *  Reminder. Note. Text
     *  Free-form text applying to the Reminder. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Reminder
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
     *  Reminder. Tax Point Date. Date
     *  The date of the Reminder used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Reminder
     *  Tax Point Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $taxPointDate
     */
    private $taxPointDate = null;

    /**
     * BBIE
     *  Reminder. Document_ Currency Code. Code
     *  The currency in which the Document is presented. This may be the same currency as the pricing or as the tax.
     *  0..1
     *  Reminder
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
     *  Reminder. Tax_ Currency Code. Code
     *  The currency used for tax amounts in the Reminder.
     *  0..1
     *  Reminder
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
     *  Reminder. Pricing_ Currency Code. Code
     *  The currency used for prices in the Reminder.
     *  0..1
     *  Reminder
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
     *  Reminder. Payment_ Currency Code. Code
     *  The currency used for payment in the Reminder.
     *  0..1
     *  Reminder
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
     *  Reminder. Payment Alternative_ Currency Code. Code
     *  The alternative currency used for payment in the Reminder.
     *  0..1
     *  Reminder
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
     *  Reminder. Accounting Cost Code. Code
     *  The Buyer's accounting code applied to the Reminder as a whole.
     *  0..1
     *  Reminder
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AccountingCostCode $accountingCostCode
     */
    private $accountingCostCode = null;

    /**
     * BBIE
     *  Reminder. Accounting Cost. Text
     *  The Buyer's accounting code applied to the Reminder as a whole, expressed as text.
     *  0..1
     *  Reminder
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AccountingCost $accountingCost
     */
    private $accountingCost = null;

    /**
     * BBIE
     *  Reminder. Line Count. Numeric
     *  The number of lines in the document.
     *  0..1
     *  Reminder
     *  Line Count
     *  Numeric
     *  Numeric. Type
     *
     * @var float $lineCountNumeric
     */
    private $lineCountNumeric = null;

    /**
     * ASBIE
     *  Reminder. Reminder_ Period. Period
     *  An association to period(s) to which the Reminder applies.
     *  0..n
     *  Reminder
     *  Reminder
     *  Period
     *  Period
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReminderPeriod[] $reminderPeriod
     */
    private $reminderPeriod = [
        
    ];

    /**
     * ASBIE
     *  Reminder. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Reminder
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
     *  Reminder. Signature
     *  An association to Signature.
     *  0..n
     *  Reminder
     *  Signature
     *  Signature
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Signature[] $signature
     */
    private $signature = [
        
    ];

    /**
     * ASBIE
     *  Reminder. Accounting_ Supplier Party. Supplier Party
     *  An association to the Accounting Supplier Party.
     *  1
     *  Reminder
     *  Accounting
     *  Supplier Party
     *  Supplier Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AccountingSupplierParty $accountingSupplierParty
     */
    private $accountingSupplierParty = null;

    /**
     * ASBIE
     *  Reminder. Accounting_ Customer Party. Customer Party
     *  An association to the Accounting Customer Party.
     *  1
     *  Reminder
     *  Accounting
     *  Customer Party
     *  Customer Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AccountingCustomerParty $accountingCustomerParty
     */
    private $accountingCustomerParty = null;

    /**
     * ASBIE
     *  Reminder. Payee_ Party. Party
     *  An association to the Payee.
     *  0..1
     *  Reminder
     *  Payee
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\PayeeParty $payeeParty
     */
    private $payeeParty = null;

    /**
     * ASBIE
     *  Reminder. Tax Representative_ Party. Party
     *  An association to the Tax Representative.
     *  0..1
     *  Reminder
     *  Tax Representative
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxRepresentativeParty $taxRepresentativeParty
     */
    private $taxRepresentativeParty = null;

    /**
     * ASBIE
     *  Reminder. Payment Means
     *  An association to Payment Means.
     *  0..n
     *  Reminder
     *  Payment Means
     *  Payment Means
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentMeans[] $paymentMeans
     */
    private $paymentMeans = [
        
    ];

    /**
     * ASBIE
     *  Reminder. Payment Terms
     *  An association to Payment Terms.
     *  0..n
     *  Reminder
     *  Payment Terms
     *  Payment Terms
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentTerms[] $paymentTerms
     */
    private $paymentTerms = [
        
    ];

    /**
     * ASBIE
     *  Reminder. Prepaid_ Payment. Payment
     *  An association to prepaid payment(s).
     *  0..n
     *  Reminder
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
     *  Reminder. Allowance Charge
     *  An association to Allowances and Charges that apply to the Reminder as a whole.
     *  0..n
     *  Reminder
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AllowanceCharge[] $allowanceCharge
     */
    private $allowanceCharge = [
        
    ];

    /**
     * ASBIE
     *  Reminder. Tax_ Exchange Rate. Exchange Rate
     *  An association to Exchange Rate between the Document Currency and the Tax Currency.
     *  0..1
     *  Reminder
     *  Tax
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxExchangeRate $taxExchangeRate
     */
    private $taxExchangeRate = null;

    /**
     * ASBIE
     *  Reminder. Pricing_ Exchange Rate. Exchange Rate
     *  An association to Exchange Rate between the Document Currency and the Pricing Currency.
     *  0..1
     *  Reminder
     *  Pricing
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\PricingExchangeRate $pricingExchangeRate
     */
    private $pricingExchangeRate = null;

    /**
     * ASBIE
     *  Reminder. Payment_ Exchange Rate. Exchange Rate
     *  An association to Exchange Rate between the Document Currency and the Payment Currency.
     *  0..1
     *  Reminder
     *  Payment
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentExchangeRate $paymentExchangeRate
     */
    private $paymentExchangeRate = null;

    /**
     * ASBIE
     *  Reminder. Payment Alternative_ Exchange Rate. Exchange Rate
     *  An association to Exchange Rate between the Document Currency and the Payment Alternative Currency.
     *  0..1
     *  Reminder
     *  Payment Alternative
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentAlternativeExchangeRate $paymentAlternativeExchangeRate
     */
    private $paymentAlternativeExchangeRate = null;

    /**
     * ASBIE
     *  Reminder. Tax Total
     *  An association to Tax Total for specific tax types/rates.
     *  0..n
     *  Reminder
     *  Tax Total
     *  Tax Total
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxTotal[] $taxTotal
     */
    private $taxTotal = [
        
    ];

    /**
     * ASBIE
     *  Reminder. Legal_ Monetary Total. Monetary Total
     *  An association to the total amount payable on the Invoice, including Allowances, Charges, and Taxes.
     *  1
     *  Reminder
     *  Legal
     *  Monetary Total
     *  Monetary Total
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\LegalMonetaryTotal $legalMonetaryTotal
     */
    private $legalMonetaryTotal = null;

    /**
     * ASBIE
     *  Reminder. Reminder Line
     *  An association to Reminder Line.
     *  1..n
     *  Reminder
     *  Reminder Line
     *  Reminder Line
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReminderLine[] $reminderLine
     */
    private $reminderLine = [
        
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
     *  Reminder. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Reminder
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
     *  Reminder. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Reminder
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
     *  Reminder. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Reminder
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
     *  Reminder. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Reminder
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
     *  Reminder. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Reminder
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
     *  Reminder. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Reminder
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
     *  Reminder. Identifier
     *  An identifier for the Reminder assigned by the Creditor.
     *  1
     *  Reminder
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
     *  Reminder. Identifier
     *  An identifier for the Reminder assigned by the Creditor.
     *  1
     *  Reminder
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
     *  Reminder. Copy_ Indicator. Indicator
     *  Indicates whether a document is a copy (true) or not (false).
     *  0..1
     *  Reminder
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
     *  Reminder. Copy_ Indicator. Indicator
     *  Indicates whether a document is a copy (true) or not (false).
     *  0..1
     *  Reminder
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
     *  Reminder. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Reminder
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
     *  Reminder. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Reminder
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
     *  Reminder. Issue Date. Date
     *  The date assigned by the Creditor on which the Invoice was issued.
     *  1
     *  Reminder
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
     *  Reminder. Issue Date. Date
     *  The date assigned by the Creditor on which the Invoice was issued.
     *  1
     *  Reminder
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
     *  Reminder. Issue Time. Time
     *  The time assigned by the Creditor on which the Reminder was issued.
     *  0..1
     *  Reminder
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
     *  Reminder. Issue Time. Time
     *  The time assigned by the Creditor on which the Reminder was issued.
     *  0..1
     *  Reminder
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
     * Gets as reminderTypeCode
     *
     * BBIE
     *  Reminder. Reminder Type Code. Code
     *  Code specifying the type of the Reminder.
     *  0..1
     *  Reminder
     *  Reminder Type Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ReminderTypeCode
     */
    public function getReminderTypeCode()
    {
        return $this->reminderTypeCode;
    }

    /**
     * Sets a new reminderTypeCode
     *
     * BBIE
     *  Reminder. Reminder Type Code. Code
     *  Code specifying the type of the Reminder.
     *  0..1
     *  Reminder
     *  Reminder Type Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ReminderTypeCode $reminderTypeCode
     * @return self
     */
    public function setReminderTypeCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\ReminderTypeCode $reminderTypeCode)
    {
        $this->reminderTypeCode = $reminderTypeCode;
        return $this;
    }

    /**
     * Gets as reminderSequenceNumeric
     *
     * BBIE
     *  Reminder. Reminder Sequence. Numeric
     *  The sequence number of the current reminder. Specifies the number of reminders previously sent plus one.
     *  0..1
     *  Reminder
     *  Reminder Sequence
     *  Numeric
     *  Numeric. Type
     *
     * @return float
     */
    public function getReminderSequenceNumeric()
    {
        return $this->reminderSequenceNumeric;
    }

    /**
     * Sets a new reminderSequenceNumeric
     *
     * BBIE
     *  Reminder. Reminder Sequence. Numeric
     *  The sequence number of the current reminder. Specifies the number of reminders previously sent plus one.
     *  0..1
     *  Reminder
     *  Reminder Sequence
     *  Numeric
     *  Numeric. Type
     *
     * @param float $reminderSequenceNumeric
     * @return self
     */
    public function setReminderSequenceNumeric($reminderSequenceNumeric)
    {
        $this->reminderSequenceNumeric = $reminderSequenceNumeric;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Reminder. Note. Text
     *  Free-form text applying to the Reminder. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Reminder
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
     *  Reminder. Note. Text
     *  Free-form text applying to the Reminder. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Reminder
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
     *  Reminder. Note. Text
     *  Free-form text applying to the Reminder. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Reminder
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
     *  Reminder. Note. Text
     *  Free-form text applying to the Reminder. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Reminder
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
     *  Reminder. Note. Text
     *  Free-form text applying to the Reminder. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Reminder
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
     *  Reminder. Tax Point Date. Date
     *  The date of the Reminder used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Reminder
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
     *  Reminder. Tax Point Date. Date
     *  The date of the Reminder used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Reminder
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
     *  Reminder. Document_ Currency Code. Code
     *  The currency in which the Document is presented. This may be the same currency as the pricing or as the tax.
     *  0..1
     *  Reminder
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
     *  Reminder. Document_ Currency Code. Code
     *  The currency in which the Document is presented. This may be the same currency as the pricing or as the tax.
     *  0..1
     *  Reminder
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
     *  Reminder. Tax_ Currency Code. Code
     *  The currency used for tax amounts in the Reminder.
     *  0..1
     *  Reminder
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
     *  Reminder. Tax_ Currency Code. Code
     *  The currency used for tax amounts in the Reminder.
     *  0..1
     *  Reminder
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
     *  Reminder. Pricing_ Currency Code. Code
     *  The currency used for prices in the Reminder.
     *  0..1
     *  Reminder
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
     *  Reminder. Pricing_ Currency Code. Code
     *  The currency used for prices in the Reminder.
     *  0..1
     *  Reminder
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
     *  Reminder. Payment_ Currency Code. Code
     *  The currency used for payment in the Reminder.
     *  0..1
     *  Reminder
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
     *  Reminder. Payment_ Currency Code. Code
     *  The currency used for payment in the Reminder.
     *  0..1
     *  Reminder
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
     *  Reminder. Payment Alternative_ Currency Code. Code
     *  The alternative currency used for payment in the Reminder.
     *  0..1
     *  Reminder
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
     *  Reminder. Payment Alternative_ Currency Code. Code
     *  The alternative currency used for payment in the Reminder.
     *  0..1
     *  Reminder
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
     *  Reminder. Accounting Cost Code. Code
     *  The Buyer's accounting code applied to the Reminder as a whole.
     *  0..1
     *  Reminder
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
     *  Reminder. Accounting Cost Code. Code
     *  The Buyer's accounting code applied to the Reminder as a whole.
     *  0..1
     *  Reminder
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
     *  Reminder. Accounting Cost. Text
     *  The Buyer's accounting code applied to the Reminder as a whole, expressed as text.
     *  0..1
     *  Reminder
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
     *  Reminder. Accounting Cost. Text
     *  The Buyer's accounting code applied to the Reminder as a whole, expressed as text.
     *  0..1
     *  Reminder
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
     *  Reminder. Line Count. Numeric
     *  The number of lines in the document.
     *  0..1
     *  Reminder
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
     *  Reminder. Line Count. Numeric
     *  The number of lines in the document.
     *  0..1
     *  Reminder
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
     * Adds as reminderPeriod
     *
     * ASBIE
     *  Reminder. Reminder_ Period. Period
     *  An association to period(s) to which the Reminder applies.
     *  0..n
     *  Reminder
     *  Reminder
     *  Period
     *  Period
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReminderPeriod $reminderPeriod
     */
    public function addToReminderPeriod(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ReminderPeriod $reminderPeriod)
    {
        $this->reminderPeriod[] = $reminderPeriod;
        return $this;
    }

    /**
     * isset reminderPeriod
     *
     * ASBIE
     *  Reminder. Reminder_ Period. Period
     *  An association to period(s) to which the Reminder applies.
     *  0..n
     *  Reminder
     *  Reminder
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReminderPeriod($index)
    {
        return isset($this->reminderPeriod[$index]);
    }

    /**
     * unset reminderPeriod
     *
     * ASBIE
     *  Reminder. Reminder_ Period. Period
     *  An association to period(s) to which the Reminder applies.
     *  0..n
     *  Reminder
     *  Reminder
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReminderPeriod($index)
    {
        unset($this->reminderPeriod[$index]);
    }

    /**
     * Gets as reminderPeriod
     *
     * ASBIE
     *  Reminder. Reminder_ Period. Period
     *  An association to period(s) to which the Reminder applies.
     *  0..n
     *  Reminder
     *  Reminder
     *  Period
     *  Period
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReminderPeriod[]
     */
    public function getReminderPeriod()
    {
        return $this->reminderPeriod;
    }

    /**
     * Sets a new reminderPeriod
     *
     * ASBIE
     *  Reminder. Reminder_ Period. Period
     *  An association to period(s) to which the Reminder applies.
     *  0..n
     *  Reminder
     *  Reminder
     *  Period
     *  Period
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReminderPeriod[] $reminderPeriod
     * @return self
     */
    public function setReminderPeriod(array $reminderPeriod)
    {
        $this->reminderPeriod = $reminderPeriod;
        return $this;
    }

    /**
     * Adds as additionalDocumentReference
     *
     * ASBIE
     *  Reminder. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Reminder
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
     *  Reminder. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Reminder
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
     *  Reminder. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Reminder
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
     *  Reminder. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Reminder
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
     *  Reminder. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Reminder
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
     *  Reminder. Signature
     *  An association to Signature.
     *  0..n
     *  Reminder
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
     *  Reminder. Signature
     *  An association to Signature.
     *  0..n
     *  Reminder
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
     *  Reminder. Signature
     *  An association to Signature.
     *  0..n
     *  Reminder
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
     *  Reminder. Signature
     *  An association to Signature.
     *  0..n
     *  Reminder
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
     *  Reminder. Signature
     *  An association to Signature.
     *  0..n
     *  Reminder
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
     *  Reminder. Accounting_ Supplier Party. Supplier Party
     *  An association to the Accounting Supplier Party.
     *  1
     *  Reminder
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
     *  Reminder. Accounting_ Supplier Party. Supplier Party
     *  An association to the Accounting Supplier Party.
     *  1
     *  Reminder
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
     *  Reminder. Accounting_ Customer Party. Customer Party
     *  An association to the Accounting Customer Party.
     *  1
     *  Reminder
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
     *  Reminder. Accounting_ Customer Party. Customer Party
     *  An association to the Accounting Customer Party.
     *  1
     *  Reminder
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
     *  Reminder. Payee_ Party. Party
     *  An association to the Payee.
     *  0..1
     *  Reminder
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
     *  Reminder. Payee_ Party. Party
     *  An association to the Payee.
     *  0..1
     *  Reminder
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
     * Gets as taxRepresentativeParty
     *
     * ASBIE
     *  Reminder. Tax Representative_ Party. Party
     *  An association to the Tax Representative.
     *  0..1
     *  Reminder
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
     *  Reminder. Tax Representative_ Party. Party
     *  An association to the Tax Representative.
     *  0..1
     *  Reminder
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
     * Adds as paymentMeans
     *
     * ASBIE
     *  Reminder. Payment Means
     *  An association to Payment Means.
     *  0..n
     *  Reminder
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
     *  Reminder. Payment Means
     *  An association to Payment Means.
     *  0..n
     *  Reminder
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
     *  Reminder. Payment Means
     *  An association to Payment Means.
     *  0..n
     *  Reminder
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
     *  Reminder. Payment Means
     *  An association to Payment Means.
     *  0..n
     *  Reminder
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
     *  Reminder. Payment Means
     *  An association to Payment Means.
     *  0..n
     *  Reminder
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
     *  Reminder. Payment Terms
     *  An association to Payment Terms.
     *  0..n
     *  Reminder
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
     *  Reminder. Payment Terms
     *  An association to Payment Terms.
     *  0..n
     *  Reminder
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
     *  Reminder. Payment Terms
     *  An association to Payment Terms.
     *  0..n
     *  Reminder
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
     *  Reminder. Payment Terms
     *  An association to Payment Terms.
     *  0..n
     *  Reminder
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
     *  Reminder. Payment Terms
     *  An association to Payment Terms.
     *  0..n
     *  Reminder
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
     *  Reminder. Prepaid_ Payment. Payment
     *  An association to prepaid payment(s).
     *  0..n
     *  Reminder
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
     *  Reminder. Prepaid_ Payment. Payment
     *  An association to prepaid payment(s).
     *  0..n
     *  Reminder
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
     *  Reminder. Prepaid_ Payment. Payment
     *  An association to prepaid payment(s).
     *  0..n
     *  Reminder
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
     *  Reminder. Prepaid_ Payment. Payment
     *  An association to prepaid payment(s).
     *  0..n
     *  Reminder
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
     *  Reminder. Prepaid_ Payment. Payment
     *  An association to prepaid payment(s).
     *  0..n
     *  Reminder
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
     *  Reminder. Allowance Charge
     *  An association to Allowances and Charges that apply to the Reminder as a whole.
     *  0..n
     *  Reminder
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
     *  Reminder. Allowance Charge
     *  An association to Allowances and Charges that apply to the Reminder as a whole.
     *  0..n
     *  Reminder
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
     *  Reminder. Allowance Charge
     *  An association to Allowances and Charges that apply to the Reminder as a whole.
     *  0..n
     *  Reminder
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
     *  Reminder. Allowance Charge
     *  An association to Allowances and Charges that apply to the Reminder as a whole.
     *  0..n
     *  Reminder
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
     *  Reminder. Allowance Charge
     *  An association to Allowances and Charges that apply to the Reminder as a whole.
     *  0..n
     *  Reminder
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
     *  Reminder. Tax_ Exchange Rate. Exchange Rate
     *  An association to Exchange Rate between the Document Currency and the Tax Currency.
     *  0..1
     *  Reminder
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
     *  Reminder. Tax_ Exchange Rate. Exchange Rate
     *  An association to Exchange Rate between the Document Currency and the Tax Currency.
     *  0..1
     *  Reminder
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
     *  Reminder. Pricing_ Exchange Rate. Exchange Rate
     *  An association to Exchange Rate between the Document Currency and the Pricing Currency.
     *  0..1
     *  Reminder
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
     *  Reminder. Pricing_ Exchange Rate. Exchange Rate
     *  An association to Exchange Rate between the Document Currency and the Pricing Currency.
     *  0..1
     *  Reminder
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
     *  Reminder. Payment_ Exchange Rate. Exchange Rate
     *  An association to Exchange Rate between the Document Currency and the Payment Currency.
     *  0..1
     *  Reminder
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
     *  Reminder. Payment_ Exchange Rate. Exchange Rate
     *  An association to Exchange Rate between the Document Currency and the Payment Currency.
     *  0..1
     *  Reminder
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
     *  Reminder. Payment Alternative_ Exchange Rate. Exchange Rate
     *  An association to Exchange Rate between the Document Currency and the Payment Alternative Currency.
     *  0..1
     *  Reminder
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
     *  Reminder. Payment Alternative_ Exchange Rate. Exchange Rate
     *  An association to Exchange Rate between the Document Currency and the Payment Alternative Currency.
     *  0..1
     *  Reminder
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
     *  Reminder. Tax Total
     *  An association to Tax Total for specific tax types/rates.
     *  0..n
     *  Reminder
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
     *  Reminder. Tax Total
     *  An association to Tax Total for specific tax types/rates.
     *  0..n
     *  Reminder
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
     *  Reminder. Tax Total
     *  An association to Tax Total for specific tax types/rates.
     *  0..n
     *  Reminder
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
     *  Reminder. Tax Total
     *  An association to Tax Total for specific tax types/rates.
     *  0..n
     *  Reminder
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
     *  Reminder. Tax Total
     *  An association to Tax Total for specific tax types/rates.
     *  0..n
     *  Reminder
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
     *  Reminder. Legal_ Monetary Total. Monetary Total
     *  An association to the total amount payable on the Invoice, including Allowances, Charges, and Taxes.
     *  1
     *  Reminder
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
     *  Reminder. Legal_ Monetary Total. Monetary Total
     *  An association to the total amount payable on the Invoice, including Allowances, Charges, and Taxes.
     *  1
     *  Reminder
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
     * Adds as reminderLine
     *
     * ASBIE
     *  Reminder. Reminder Line
     *  An association to Reminder Line.
     *  1..n
     *  Reminder
     *  Reminder Line
     *  Reminder Line
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReminderLine $reminderLine
     */
    public function addToReminderLine(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ReminderLine $reminderLine)
    {
        $this->reminderLine[] = $reminderLine;
        return $this;
    }

    /**
     * isset reminderLine
     *
     * ASBIE
     *  Reminder. Reminder Line
     *  An association to Reminder Line.
     *  1..n
     *  Reminder
     *  Reminder Line
     *  Reminder Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReminderLine($index)
    {
        return isset($this->reminderLine[$index]);
    }

    /**
     * unset reminderLine
     *
     * ASBIE
     *  Reminder. Reminder Line
     *  An association to Reminder Line.
     *  1..n
     *  Reminder
     *  Reminder Line
     *  Reminder Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReminderLine($index)
    {
        unset($this->reminderLine[$index]);
    }

    /**
     * Gets as reminderLine
     *
     * ASBIE
     *  Reminder. Reminder Line
     *  An association to Reminder Line.
     *  1..n
     *  Reminder
     *  Reminder Line
     *  Reminder Line
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReminderLine[]
     */
    public function getReminderLine()
    {
        return $this->reminderLine;
    }

    /**
     * Sets a new reminderLine
     *
     * ASBIE
     *  Reminder. Reminder Line
     *  An association to Reminder Line.
     *  1..n
     *  Reminder
     *  Reminder Line
     *  Reminder Line
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReminderLine[] $reminderLine
     * @return self
     */
    public function setReminderLine(array $reminderLine)
    {
        $this->reminderLine = $reminderLine;
        return $this;
    }


}

