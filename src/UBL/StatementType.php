<?php

namespace NOKA\PHPUBL\UBL;

/**
 * Class representing StatementType
 *
 * ABIE
 *  Statement. Details
 *  The document used to specify the status of Orders, Billing, and Payment. This document is a Statement of Account and not intended as a summary Invoice
 *  Statement
 * XSD Type: StatementType
 */
class StatementType
{

    /**
     * A container for all extensions present in the document.
     *
     * @var \NOKA\PHPUBL\UBL\Common\ExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Statement. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Statement
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
     *  Statement. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Statement
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
     *  Statement. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Statement
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
     *  Statement. Identifier
     *  An identifier for the Statement.
     *  1
     *  Statement
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Statement. Copy_ Indicator. Indicator
     *  Indicates whether the Statement is a copy (true) or not (false).
     *  0..1
     *  Statement
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
     *  Statement. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Statement
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Statement. Issue Date. Date
     *  The date assigned by the Creditor on which the Statement was issued.
     *  1
     *  Statement
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Statement. Issue Time. Time
     *  The time assigned by the Creditor at which the Statement was issued.
     *  0..1
     *  Statement
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Statement. Note. Text
     *  Free-form text applying to the Statement. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Statement
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
     *  Statement. Document_ Currency Code. Code
     *  The default currency for the Statement.
     *  1
     *  Statement
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
     *  Statement. Total_ Debit Amount. Amount
     *  The total of all debit amounts for the Statement.
     *  0..1
     *  Statement
     *  Total
     *  Debit Amount
     *  Amount
     *  Amount. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TotalDebitAmount $totalDebitAmount
     */
    private $totalDebitAmount = null;

    /**
     * BBIE
     *  Statement. Total_ Credit Amount. Amount
     *  The total of all credit amounts for the Statement.
     *  0..1
     *  Statement
     *  Total
     *  Credit Amount
     *  Amount
     *  Amount. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TotalCreditAmount $totalCreditAmount
     */
    private $totalCreditAmount = null;

    /**
     * BBIE
     *  Statement. Total_ Balance Amount. Amount
     *  The total amount for the Statement.
     *  0..1
     *  Statement
     *  Total
     *  Balance Amount
     *  Amount
     *  Amount. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TotalBalanceAmount $totalBalanceAmount
     */
    private $totalBalanceAmount = null;

    /**
     * BBIE
     *  Statement. Line Count. Numeric
     *  The number of lines in the document.
     *  0..1
     *  Statement
     *  Line Count
     *  Numeric
     *  Numeric. Type
     *
     * @var float $lineCountNumeric
     */
    private $lineCountNumeric = null;

    /**
     * ASBIE
     *  Statement. Statement_ Period. Period
     *  An association to period(s) to which the Statement applies.
     *  0..1
     *  Statement
     *  Statement
     *  Period
     *  Period
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\StatementPeriod $statementPeriod
     */
    private $statementPeriod = null;

    /**
     * ASBIE
     *  Statement. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Statement
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
     *  Statement. Signature
     *  An association to Signature.
     *  0..n
     *  Statement
     *  Signature
     *  Signature
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Signature[] $signature
     */
    private $signature = [
        
    ];

    /**
     * ASBIE
     *  Statement. Accounting_ Supplier Party. Supplier Party
     *  An association to the Accounting Supplier Party.
     *  1
     *  Statement
     *  Accounting
     *  Supplier Party
     *  Supplier Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AccountingSupplierParty $accountingSupplierParty
     */
    private $accountingSupplierParty = null;

    /**
     * ASBIE
     *  Statement. Accounting_ Customer Party. Customer Party
     *  An association to the Accounting Customer Party.
     *  1
     *  Statement
     *  Accounting
     *  Customer Party
     *  Customer Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AccountingCustomerParty $accountingCustomerParty
     */
    private $accountingCustomerParty = null;

    /**
     * ASBIE
     *  Statement. Buyer_ Customer Party. Customer Party
     *  An association to the Buyer.
     *  0..1
     *  Statement
     *  Buyer
     *  Customer Party
     *  Customer Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\BuyerCustomerParty $buyerCustomerParty
     */
    private $buyerCustomerParty = null;

    /**
     * ASBIE
     *  Statement. Seller_ Supplier Party. Supplier Party
     *  An association to the Seller.
     *  0..1
     *  Statement
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\SellerSupplierParty $sellerSupplierParty
     */
    private $sellerSupplierParty = null;

    /**
     * ASBIE
     *  Statement. Originator_ Customer Party. Customer Party
     *  An association to the Originator.
     *  0..1
     *  Statement
     *  Originator
     *  Customer Party
     *  Customer Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginatorCustomerParty $originatorCustomerParty
     */
    private $originatorCustomerParty = null;

    /**
     * ASBIE
     *  Statement. Payee_ Party. Party
     *  An association to the Payee.
     *  0..1
     *  Statement
     *  Payee
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\PayeeParty $payeeParty
     */
    private $payeeParty = null;

    /**
     * ASBIE
     *  Statement. Payment Means
     *  An association to Payment Means.
     *  0..1
     *  Statement
     *  Payment Means
     *  Payment Means
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentMeans $paymentMeans
     */
    private $paymentMeans = null;

    /**
     * ASBIE
     *  Statement. Payment Terms
     *  An association to Payment Terms.
     *  0..n
     *  Statement
     *  Payment Terms
     *  Payment Terms
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentTerms[] $paymentTerms
     */
    private $paymentTerms = [
        
    ];

    /**
     * ASBIE
     *  Statement. Allowance Charge
     *  An association to Allowances and Charges that apply to the Statement period as a whole.
     *  0..n
     *  Statement
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AllowanceCharge[] $allowanceCharge
     */
    private $allowanceCharge = [
        
    ];

    /**
     * ASBIE
     *  Statement. Tax Total
     *  An association with summary information for particular taxes.
     *  0..n
     *  Statement
     *  Tax Total
     *  Tax Total
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxTotal[] $taxTotal
     */
    private $taxTotal = [
        
    ];

    /**
     * ASBIE
     *  Statement. Statement Line
     *  An association to one or more Statement Lines.
     *  1..n
     *  Statement
     *  Statement Line
     *  Statement Line
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\StatementLine[] $statementLine
     */
    private $statementLine = [
        
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
     *  Statement. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Statement
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
     *  Statement. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Statement
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
     *  Statement. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Statement
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
     *  Statement. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Statement
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
     *  Statement. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Statement
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
     *  Statement. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Statement
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
     *  Statement. Identifier
     *  An identifier for the Statement.
     *  1
     *  Statement
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
     *  Statement. Identifier
     *  An identifier for the Statement.
     *  1
     *  Statement
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
     *  Statement. Copy_ Indicator. Indicator
     *  Indicates whether the Statement is a copy (true) or not (false).
     *  0..1
     *  Statement
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
     *  Statement. Copy_ Indicator. Indicator
     *  Indicates whether the Statement is a copy (true) or not (false).
     *  0..1
     *  Statement
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
     *  Statement. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Statement
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
     *  Statement. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Statement
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
     *  Statement. Issue Date. Date
     *  The date assigned by the Creditor on which the Statement was issued.
     *  1
     *  Statement
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
     *  Statement. Issue Date. Date
     *  The date assigned by the Creditor on which the Statement was issued.
     *  1
     *  Statement
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
     *  Statement. Issue Time. Time
     *  The time assigned by the Creditor at which the Statement was issued.
     *  0..1
     *  Statement
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
     *  Statement. Issue Time. Time
     *  The time assigned by the Creditor at which the Statement was issued.
     *  0..1
     *  Statement
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
     *  Statement. Note. Text
     *  Free-form text applying to the Statement. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Statement
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
     *  Statement. Note. Text
     *  Free-form text applying to the Statement. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Statement
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
     *  Statement. Note. Text
     *  Free-form text applying to the Statement. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Statement
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
     *  Statement. Note. Text
     *  Free-form text applying to the Statement. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Statement
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
     *  Statement. Note. Text
     *  Free-form text applying to the Statement. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Statement
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
     *  Statement. Document_ Currency Code. Code
     *  The default currency for the Statement.
     *  1
     *  Statement
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
     *  Statement. Document_ Currency Code. Code
     *  The default currency for the Statement.
     *  1
     *  Statement
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
     * Gets as totalDebitAmount
     *
     * BBIE
     *  Statement. Total_ Debit Amount. Amount
     *  The total of all debit amounts for the Statement.
     *  0..1
     *  Statement
     *  Total
     *  Debit Amount
     *  Amount
     *  Amount. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TotalDebitAmount
     */
    public function getTotalDebitAmount()
    {
        return $this->totalDebitAmount;
    }

    /**
     * Sets a new totalDebitAmount
     *
     * BBIE
     *  Statement. Total_ Debit Amount. Amount
     *  The total of all debit amounts for the Statement.
     *  0..1
     *  Statement
     *  Total
     *  Debit Amount
     *  Amount
     *  Amount. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TotalDebitAmount $totalDebitAmount
     * @return self
     */
    public function setTotalDebitAmount(\NOKA\PHPUBL\UBL\Common\BasicComponents\TotalDebitAmount $totalDebitAmount)
    {
        $this->totalDebitAmount = $totalDebitAmount;
        return $this;
    }

    /**
     * Gets as totalCreditAmount
     *
     * BBIE
     *  Statement. Total_ Credit Amount. Amount
     *  The total of all credit amounts for the Statement.
     *  0..1
     *  Statement
     *  Total
     *  Credit Amount
     *  Amount
     *  Amount. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TotalCreditAmount
     */
    public function getTotalCreditAmount()
    {
        return $this->totalCreditAmount;
    }

    /**
     * Sets a new totalCreditAmount
     *
     * BBIE
     *  Statement. Total_ Credit Amount. Amount
     *  The total of all credit amounts for the Statement.
     *  0..1
     *  Statement
     *  Total
     *  Credit Amount
     *  Amount
     *  Amount. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TotalCreditAmount $totalCreditAmount
     * @return self
     */
    public function setTotalCreditAmount(\NOKA\PHPUBL\UBL\Common\BasicComponents\TotalCreditAmount $totalCreditAmount)
    {
        $this->totalCreditAmount = $totalCreditAmount;
        return $this;
    }

    /**
     * Gets as totalBalanceAmount
     *
     * BBIE
     *  Statement. Total_ Balance Amount. Amount
     *  The total amount for the Statement.
     *  0..1
     *  Statement
     *  Total
     *  Balance Amount
     *  Amount
     *  Amount. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TotalBalanceAmount
     */
    public function getTotalBalanceAmount()
    {
        return $this->totalBalanceAmount;
    }

    /**
     * Sets a new totalBalanceAmount
     *
     * BBIE
     *  Statement. Total_ Balance Amount. Amount
     *  The total amount for the Statement.
     *  0..1
     *  Statement
     *  Total
     *  Balance Amount
     *  Amount
     *  Amount. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TotalBalanceAmount $totalBalanceAmount
     * @return self
     */
    public function setTotalBalanceAmount(\NOKA\PHPUBL\UBL\Common\BasicComponents\TotalBalanceAmount $totalBalanceAmount)
    {
        $this->totalBalanceAmount = $totalBalanceAmount;
        return $this;
    }

    /**
     * Gets as lineCountNumeric
     *
     * BBIE
     *  Statement. Line Count. Numeric
     *  The number of lines in the document.
     *  0..1
     *  Statement
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
     *  Statement. Line Count. Numeric
     *  The number of lines in the document.
     *  0..1
     *  Statement
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
     * Gets as statementPeriod
     *
     * ASBIE
     *  Statement. Statement_ Period. Period
     *  An association to period(s) to which the Statement applies.
     *  0..1
     *  Statement
     *  Statement
     *  Period
     *  Period
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\StatementPeriod
     */
    public function getStatementPeriod()
    {
        return $this->statementPeriod;
    }

    /**
     * Sets a new statementPeriod
     *
     * ASBIE
     *  Statement. Statement_ Period. Period
     *  An association to period(s) to which the Statement applies.
     *  0..1
     *  Statement
     *  Statement
     *  Period
     *  Period
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\StatementPeriod $statementPeriod
     * @return self
     */
    public function setStatementPeriod(\NOKA\PHPUBL\UBL\Common\AggregateComponents\StatementPeriod $statementPeriod)
    {
        $this->statementPeriod = $statementPeriod;
        return $this;
    }

    /**
     * Adds as additionalDocumentReference
     *
     * ASBIE
     *  Statement. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Statement
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
     *  Statement. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Statement
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
     *  Statement. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Statement
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
     *  Statement. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Statement
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
     *  Statement. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..n
     *  Statement
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
     *  Statement. Signature
     *  An association to Signature.
     *  0..n
     *  Statement
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
     *  Statement. Signature
     *  An association to Signature.
     *  0..n
     *  Statement
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
     *  Statement. Signature
     *  An association to Signature.
     *  0..n
     *  Statement
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
     *  Statement. Signature
     *  An association to Signature.
     *  0..n
     *  Statement
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
     *  Statement. Signature
     *  An association to Signature.
     *  0..n
     *  Statement
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
     *  Statement. Accounting_ Supplier Party. Supplier Party
     *  An association to the Accounting Supplier Party.
     *  1
     *  Statement
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
     *  Statement. Accounting_ Supplier Party. Supplier Party
     *  An association to the Accounting Supplier Party.
     *  1
     *  Statement
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
     *  Statement. Accounting_ Customer Party. Customer Party
     *  An association to the Accounting Customer Party.
     *  1
     *  Statement
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
     *  Statement. Accounting_ Customer Party. Customer Party
     *  An association to the Accounting Customer Party.
     *  1
     *  Statement
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
     * Gets as buyerCustomerParty
     *
     * ASBIE
     *  Statement. Buyer_ Customer Party. Customer Party
     *  An association to the Buyer.
     *  0..1
     *  Statement
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
     *  Statement. Buyer_ Customer Party. Customer Party
     *  An association to the Buyer.
     *  0..1
     *  Statement
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
     *  Statement. Seller_ Supplier Party. Supplier Party
     *  An association to the Seller.
     *  0..1
     *  Statement
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
     *  Statement. Seller_ Supplier Party. Supplier Party
     *  An association to the Seller.
     *  0..1
     *  Statement
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
     *  Statement. Originator_ Customer Party. Customer Party
     *  An association to the Originator.
     *  0..1
     *  Statement
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
     *  Statement. Originator_ Customer Party. Customer Party
     *  An association to the Originator.
     *  0..1
     *  Statement
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
     * Gets as payeeParty
     *
     * ASBIE
     *  Statement. Payee_ Party. Party
     *  An association to the Payee.
     *  0..1
     *  Statement
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
     *  Statement. Payee_ Party. Party
     *  An association to the Payee.
     *  0..1
     *  Statement
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
     * Gets as paymentMeans
     *
     * ASBIE
     *  Statement. Payment Means
     *  An association to Payment Means.
     *  0..1
     *  Statement
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
     *  Statement. Payment Means
     *  An association to Payment Means.
     *  0..1
     *  Statement
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
     * Adds as paymentTerms
     *
     * ASBIE
     *  Statement. Payment Terms
     *  An association to Payment Terms.
     *  0..n
     *  Statement
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
     *  Statement. Payment Terms
     *  An association to Payment Terms.
     *  0..n
     *  Statement
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
     *  Statement. Payment Terms
     *  An association to Payment Terms.
     *  0..n
     *  Statement
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
     *  Statement. Payment Terms
     *  An association to Payment Terms.
     *  0..n
     *  Statement
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
     *  Statement. Payment Terms
     *  An association to Payment Terms.
     *  0..n
     *  Statement
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
     * Adds as allowanceCharge
     *
     * ASBIE
     *  Statement. Allowance Charge
     *  An association to Allowances and Charges that apply to the Statement period as a whole.
     *  0..n
     *  Statement
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
     *  Statement. Allowance Charge
     *  An association to Allowances and Charges that apply to the Statement period as a whole.
     *  0..n
     *  Statement
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
     *  Statement. Allowance Charge
     *  An association to Allowances and Charges that apply to the Statement period as a whole.
     *  0..n
     *  Statement
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
     *  Statement. Allowance Charge
     *  An association to Allowances and Charges that apply to the Statement period as a whole.
     *  0..n
     *  Statement
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
     *  Statement. Allowance Charge
     *  An association to Allowances and Charges that apply to the Statement period as a whole.
     *  0..n
     *  Statement
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
     * Adds as taxTotal
     *
     * ASBIE
     *  Statement. Tax Total
     *  An association with summary information for particular taxes.
     *  0..n
     *  Statement
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
     *  Statement. Tax Total
     *  An association with summary information for particular taxes.
     *  0..n
     *  Statement
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
     *  Statement. Tax Total
     *  An association with summary information for particular taxes.
     *  0..n
     *  Statement
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
     *  Statement. Tax Total
     *  An association with summary information for particular taxes.
     *  0..n
     *  Statement
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
     *  Statement. Tax Total
     *  An association with summary information for particular taxes.
     *  0..n
     *  Statement
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
     * Adds as statementLine
     *
     * ASBIE
     *  Statement. Statement Line
     *  An association to one or more Statement Lines.
     *  1..n
     *  Statement
     *  Statement Line
     *  Statement Line
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\StatementLine $statementLine
     */
    public function addToStatementLine(\NOKA\PHPUBL\UBL\Common\AggregateComponents\StatementLine $statementLine)
    {
        $this->statementLine[] = $statementLine;
        return $this;
    }

    /**
     * isset statementLine
     *
     * ASBIE
     *  Statement. Statement Line
     *  An association to one or more Statement Lines.
     *  1..n
     *  Statement
     *  Statement Line
     *  Statement Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStatementLine($index)
    {
        return isset($this->statementLine[$index]);
    }

    /**
     * unset statementLine
     *
     * ASBIE
     *  Statement. Statement Line
     *  An association to one or more Statement Lines.
     *  1..n
     *  Statement
     *  Statement Line
     *  Statement Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStatementLine($index)
    {
        unset($this->statementLine[$index]);
    }

    /**
     * Gets as statementLine
     *
     * ASBIE
     *  Statement. Statement Line
     *  An association to one or more Statement Lines.
     *  1..n
     *  Statement
     *  Statement Line
     *  Statement Line
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\StatementLine[]
     */
    public function getStatementLine()
    {
        return $this->statementLine;
    }

    /**
     * Sets a new statementLine
     *
     * ASBIE
     *  Statement. Statement Line
     *  An association to one or more Statement Lines.
     *  1..n
     *  Statement
     *  Statement Line
     *  Statement Line
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\StatementLine[] $statementLine
     * @return self
     */
    public function setStatementLine(array $statementLine)
    {
        $this->statementLine = $statementLine;
        return $this;
    }


}

