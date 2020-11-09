<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing StatementLineType
 *
 * ABIE
 *  Statement Line. Details
 *  Information about a Line on a Statement of Account.
 *  Statement Line
 * XSD Type: StatementLineType
 */
class StatementLineType
{

    /**
     * BBIE
     *  Statement Line. Identifier
     *  Identifies the Statement Line.
     *  1
     *  Statement Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Statement Line. Note. Text
     *  Free-form text applying to the Statement Line. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Statement Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Note $note
     */
    private $note = null;

    /**
     * BBIE
     *  Statement Line. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Statement Line
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Statement Line. Balance Brought Forward_ Indicator. Indicator
     *  If true, indicates that the Statement Line contains a balance brought forward.
     *  0..1
     *  Statement Line
     *  Balance Brought Forward
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $balanceBroughtForwardIndicator
     */
    private $balanceBroughtForwardIndicator = null;

    /**
     * BBIE
     *  Statement Line. Debit_ Line Amount. Amount
     *  The amount debited on the Statement Line.
     *  0..1
     *  Statement Line
     *  Debit
     *  Line Amount
     *  Amount
     *  Amount. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\DebitLineAmount $debitLineAmount
     */
    private $debitLineAmount = null;

    /**
     * BBIE
     *  Statement Line. Credit_ Line Amount. Amount
     *  The amount credited on the Statement Line.
     *  0..1
     *  Statement Line
     *  Credit
     *  Line Amount
     *  Amount
     *  Amount. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\CreditLineAmount $creditLineAmount
     */
    private $creditLineAmount = null;

    /**
     * BBIE
     *  Statement Line. Balance Amount. Amount
     *  The balance amount on the Statement Line.
     *  0..1
     *  Statement Line
     *  Balance Amount
     *  Amount
     *  Amount. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\BalanceAmount $balanceAmount
     */
    private $balanceAmount = null;

    /**
     * ASBIE
     *  Statement Line. Payment Means
     *  An association to Payment Means.
     *  0..1
     *  Statement Line
     *  Payment Means
     *  Payment Means
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentMeans $paymentMeans
     */
    private $paymentMeans = null;

    /**
     * ASBIE
     *  Statement Line. Payment Terms
     *  An association to Payment Terms.
     *  0..n
     *  Statement Line
     *  Payment Terms
     *  Payment Terms
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentTerms[] $paymentTerms
     */
    private $paymentTerms = [
        
    ];

    /**
     * ASBIE
     *  Statement Line. Buyer_ Customer Party. Customer Party
     *  An association to Buyer.
     *  0..1
     *  Statement Line
     *  Buyer
     *  Customer Party
     *  Customer Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\BuyerCustomerParty $buyerCustomerParty
     */
    private $buyerCustomerParty = null;

    /**
     * ASBIE
     *  Statement Line. Seller_ Supplier Party. Supplier Party
     *  An association to Seller.
     *  0..1
     *  Statement Line
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\SellerSupplierParty $sellerSupplierParty
     */
    private $sellerSupplierParty = null;

    /**
     * ASBIE
     *  Statement Line. Originator_ Customer Party. Customer Party
     *  An association to Originator.
     *  0..1
     *  Statement Line
     *  Originator
     *  Customer Party
     *  Customer Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginatorCustomerParty $originatorCustomerParty
     */
    private $originatorCustomerParty = null;

    /**
     * ASBIE
     *  Statement Line. Accounting_ Customer Party. Customer Party
     *  An association to Accounting Customer Party.
     *  0..1
     *  Statement Line
     *  Accounting
     *  Customer Party
     *  Customer Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AccountingCustomerParty $accountingCustomerParty
     */
    private $accountingCustomerParty = null;

    /**
     * ASBIE
     *  Statement Line. Accounting_ Supplier Party. Supplier Party
     *  An association to Accounting Supplier Party.
     *  0..1
     *  Statement Line
     *  Accounting
     *  Supplier Party
     *  Supplier Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AccountingSupplierParty $accountingSupplierParty
     */
    private $accountingSupplierParty = null;

    /**
     * ASBIE
     *  Statement Line. Payee_ Party. Party
     *  An association to Payee.
     *  0..1
     *  Statement Line
     *  Payee
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\PayeeParty $payeeParty
     */
    private $payeeParty = null;

    /**
     * ASBIE
     *  Statement Line. Invoice_ Period. Period
     *  An association to Invoice Period.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Billing Reference
     *  An association to Billing Reference.
     *  0..n
     *  Statement Line
     *  Billing Reference
     *  Billing Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\BillingReference[] $billingReference
     */
    private $billingReference = [
        
    ];

    /**
     * ASBIE
     *  Statement Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Statement Line
     *  Document Reference
     *  Document Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * ASBIE
     *  Statement Line. Exchange Rate
     *  An association to Exchange Rate (between the Statement Line currency and the Related Document Currency).
     *  0..1
     *  Statement Line
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ExchangeRate $exchangeRate
     */
    private $exchangeRate = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Statement Line. Identifier
     *  Identifies the Statement Line.
     *  1
     *  Statement Line
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
     *  Statement Line. Identifier
     *  Identifies the Statement Line.
     *  1
     *  Statement Line
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
     * Gets as note
     *
     * BBIE
     *  Statement Line. Note. Text
     *  Free-form text applying to the Statement Line. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Note. Text
     *  Free-form text applying to the Statement Line. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Statement Line
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
     * Gets as uUID
     *
     * BBIE
     *  Statement Line. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Statement Line
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
     *  Statement Line. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Statement Line
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
     * Gets as balanceBroughtForwardIndicator
     *
     * BBIE
     *  Statement Line. Balance Brought Forward_ Indicator. Indicator
     *  If true, indicates that the Statement Line contains a balance brought forward.
     *  0..1
     *  Statement Line
     *  Balance Brought Forward
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getBalanceBroughtForwardIndicator()
    {
        return $this->balanceBroughtForwardIndicator;
    }

    /**
     * Sets a new balanceBroughtForwardIndicator
     *
     * BBIE
     *  Statement Line. Balance Brought Forward_ Indicator. Indicator
     *  If true, indicates that the Statement Line contains a balance brought forward.
     *  0..1
     *  Statement Line
     *  Balance Brought Forward
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $balanceBroughtForwardIndicator
     * @return self
     */
    public function setBalanceBroughtForwardIndicator($balanceBroughtForwardIndicator)
    {
        $this->balanceBroughtForwardIndicator = $balanceBroughtForwardIndicator;
        return $this;
    }

    /**
     * Gets as debitLineAmount
     *
     * BBIE
     *  Statement Line. Debit_ Line Amount. Amount
     *  The amount debited on the Statement Line.
     *  0..1
     *  Statement Line
     *  Debit
     *  Line Amount
     *  Amount
     *  Amount. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\DebitLineAmount
     */
    public function getDebitLineAmount()
    {
        return $this->debitLineAmount;
    }

    /**
     * Sets a new debitLineAmount
     *
     * BBIE
     *  Statement Line. Debit_ Line Amount. Amount
     *  The amount debited on the Statement Line.
     *  0..1
     *  Statement Line
     *  Debit
     *  Line Amount
     *  Amount
     *  Amount. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\DebitLineAmount $debitLineAmount
     * @return self
     */
    public function setDebitLineAmount(\NOKA\PHPUBL\UBL\Common\BasicComponents\DebitLineAmount $debitLineAmount)
    {
        $this->debitLineAmount = $debitLineAmount;
        return $this;
    }

    /**
     * Gets as creditLineAmount
     *
     * BBIE
     *  Statement Line. Credit_ Line Amount. Amount
     *  The amount credited on the Statement Line.
     *  0..1
     *  Statement Line
     *  Credit
     *  Line Amount
     *  Amount
     *  Amount. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\CreditLineAmount
     */
    public function getCreditLineAmount()
    {
        return $this->creditLineAmount;
    }

    /**
     * Sets a new creditLineAmount
     *
     * BBIE
     *  Statement Line. Credit_ Line Amount. Amount
     *  The amount credited on the Statement Line.
     *  0..1
     *  Statement Line
     *  Credit
     *  Line Amount
     *  Amount
     *  Amount. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\CreditLineAmount $creditLineAmount
     * @return self
     */
    public function setCreditLineAmount(\NOKA\PHPUBL\UBL\Common\BasicComponents\CreditLineAmount $creditLineAmount)
    {
        $this->creditLineAmount = $creditLineAmount;
        return $this;
    }

    /**
     * Gets as balanceAmount
     *
     * BBIE
     *  Statement Line. Balance Amount. Amount
     *  The balance amount on the Statement Line.
     *  0..1
     *  Statement Line
     *  Balance Amount
     *  Amount
     *  Amount. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\BalanceAmount
     */
    public function getBalanceAmount()
    {
        return $this->balanceAmount;
    }

    /**
     * Sets a new balanceAmount
     *
     * BBIE
     *  Statement Line. Balance Amount. Amount
     *  The balance amount on the Statement Line.
     *  0..1
     *  Statement Line
     *  Balance Amount
     *  Amount
     *  Amount. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\BalanceAmount $balanceAmount
     * @return self
     */
    public function setBalanceAmount(\NOKA\PHPUBL\UBL\Common\BasicComponents\BalanceAmount $balanceAmount)
    {
        $this->balanceAmount = $balanceAmount;
        return $this;
    }

    /**
     * Gets as paymentMeans
     *
     * ASBIE
     *  Statement Line. Payment Means
     *  An association to Payment Means.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Payment Means
     *  An association to Payment Means.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Payment Terms
     *  An association to Payment Terms.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Payment Terms
     *  An association to Payment Terms.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Payment Terms
     *  An association to Payment Terms.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Payment Terms
     *  An association to Payment Terms.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Payment Terms
     *  An association to Payment Terms.
     *  0..n
     *  Statement Line
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
     * Gets as buyerCustomerParty
     *
     * ASBIE
     *  Statement Line. Buyer_ Customer Party. Customer Party
     *  An association to Buyer.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Buyer_ Customer Party. Customer Party
     *  An association to Buyer.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Seller_ Supplier Party. Supplier Party
     *  An association to Seller.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Seller_ Supplier Party. Supplier Party
     *  An association to Seller.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Originator_ Customer Party. Customer Party
     *  An association to Originator.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Originator_ Customer Party. Customer Party
     *  An association to Originator.
     *  0..1
     *  Statement Line
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
     * Gets as accountingCustomerParty
     *
     * ASBIE
     *  Statement Line. Accounting_ Customer Party. Customer Party
     *  An association to Accounting Customer Party.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Accounting_ Customer Party. Customer Party
     *  An association to Accounting Customer Party.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Accounting_ Supplier Party. Supplier Party
     *  An association to Accounting Supplier Party.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Accounting_ Supplier Party. Supplier Party
     *  An association to Accounting Supplier Party.
     *  0..1
     *  Statement Line
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
     * Gets as payeeParty
     *
     * ASBIE
     *  Statement Line. Payee_ Party. Party
     *  An association to Payee.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Payee_ Party. Party
     *  An association to Payee.
     *  0..1
     *  Statement Line
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
     * Adds as invoicePeriod
     *
     * ASBIE
     *  Statement Line. Invoice_ Period. Period
     *  An association to Invoice Period.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Invoice_ Period. Period
     *  An association to Invoice Period.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Invoice_ Period. Period
     *  An association to Invoice Period.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Invoice_ Period. Period
     *  An association to Invoice Period.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Invoice_ Period. Period
     *  An association to Invoice Period.
     *  0..n
     *  Statement Line
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
     * Adds as billingReference
     *
     * ASBIE
     *  Statement Line. Billing Reference
     *  An association to Billing Reference.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Billing Reference
     *  An association to Billing Reference.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Billing Reference
     *  An association to Billing Reference.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Billing Reference
     *  An association to Billing Reference.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Billing Reference
     *  An association to Billing Reference.
     *  0..n
     *  Statement Line
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
     * Adds as documentReference
     *
     * ASBIE
     *  Statement Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Statement Line
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
     * Gets as exchangeRate
     *
     * ASBIE
     *  Statement Line. Exchange Rate
     *  An association to Exchange Rate (between the Statement Line currency and the Related Document Currency).
     *  0..1
     *  Statement Line
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ExchangeRate
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    /**
     * Sets a new exchangeRate
     *
     * ASBIE
     *  Statement Line. Exchange Rate
     *  An association to Exchange Rate (between the Statement Line currency and the Related Document Currency).
     *  0..1
     *  Statement Line
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ExchangeRate $exchangeRate
     * @return self
     */
    public function setExchangeRate(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ExchangeRate $exchangeRate)
    {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }


}

