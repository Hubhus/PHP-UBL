<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing ReminderLineType
 *
 * ABIE
 *  Reminder Line. Details
 *  Information about a Line on a Reminder document.
 *  Reminder Line
 * XSD Type: ReminderLineType
 */
class ReminderLineType
{

    /**
     * BBIE
     *  Reminder Line. Identifier
     *  Identifies the Reminder Line.
     *  1
     *  Reminder Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Reminder Line. Note. Text
     *  Free-form text applying to the Reminder Line. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Reminder Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Note $note
     */
    private $note = null;

    /**
     * BBIE
     *  Reminder Line. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Reminder Line
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Reminder Line. Balance Brought Forward_ Indicator. Indicator
     *  If true, indicates that the Remonder Line contains a balance brought forward.
     *  0..1
     *  Reminder Line
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
     *  Reminder Line. Debit_ Line Amount. Amount
     *  The amount debited on the Reminder Line.
     *  0..1
     *  Reminder Line
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
     *  Reminder Line. Credit_ Line Amount. Amount
     *  The amount credited on the Reminder Line.
     *  0..1
     *  Reminder Line
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
     *  Reminder Line. Accounting Cost Code. Code
     *  The buyer's accounting code applied to the Reminder Line.
     *  0..1
     *  Reminder Line
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AccountingCostCode $accountingCostCode
     */
    private $accountingCostCode = null;

    /**
     * BBIE
     *  Reminder Line. Accounting Cost. Text
     *  The buyer's accounting code applied to the Reminder Line, expressed as text.
     *  0..1
     *  Reminder Line
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AccountingCost $accountingCost
     */
    private $accountingCost = null;

    /**
     * ASBIE
     *  Reminder Line. Reminder_ Period. Period
     *  An association to Period.
     *  0..n
     *  Reminder Line
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
     *  Reminder Line. Billing Reference
     *  An association to Billing Reference
     *  0..n
     *  Reminder Line
     *  Billing Reference
     *  Billing Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\BillingReference[] $billingReference
     */
    private $billingReference = [
        
    ];

    /**
     * ASBIE
     *  Reminder Line. Exchange Rate
     *  An association to Exchange Rate (between the Reminder Line Currency and the Related Document currency).
     *  0..1
     *  Reminder Line
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
     *  Reminder Line. Identifier
     *  Identifies the Reminder Line.
     *  1
     *  Reminder Line
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
     *  Reminder Line. Identifier
     *  Identifies the Reminder Line.
     *  1
     *  Reminder Line
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
     *  Reminder Line. Note. Text
     *  Free-form text applying to the Reminder Line. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Reminder Line
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
     *  Reminder Line. Note. Text
     *  Free-form text applying to the Reminder Line. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Reminder Line
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
     *  Reminder Line. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Reminder Line
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
     *  Reminder Line. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Reminder Line
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
     *  Reminder Line. Balance Brought Forward_ Indicator. Indicator
     *  If true, indicates that the Remonder Line contains a balance brought forward.
     *  0..1
     *  Reminder Line
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
     *  Reminder Line. Balance Brought Forward_ Indicator. Indicator
     *  If true, indicates that the Remonder Line contains a balance brought forward.
     *  0..1
     *  Reminder Line
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
     *  Reminder Line. Debit_ Line Amount. Amount
     *  The amount debited on the Reminder Line.
     *  0..1
     *  Reminder Line
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
     *  Reminder Line. Debit_ Line Amount. Amount
     *  The amount debited on the Reminder Line.
     *  0..1
     *  Reminder Line
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
     *  Reminder Line. Credit_ Line Amount. Amount
     *  The amount credited on the Reminder Line.
     *  0..1
     *  Reminder Line
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
     *  Reminder Line. Credit_ Line Amount. Amount
     *  The amount credited on the Reminder Line.
     *  0..1
     *  Reminder Line
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
     * Gets as accountingCostCode
     *
     * BBIE
     *  Reminder Line. Accounting Cost Code. Code
     *  The buyer's accounting code applied to the Reminder Line.
     *  0..1
     *  Reminder Line
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
     *  Reminder Line. Accounting Cost Code. Code
     *  The buyer's accounting code applied to the Reminder Line.
     *  0..1
     *  Reminder Line
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
     *  Reminder Line. Accounting Cost. Text
     *  The buyer's accounting code applied to the Reminder Line, expressed as text.
     *  0..1
     *  Reminder Line
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
     *  Reminder Line. Accounting Cost. Text
     *  The buyer's accounting code applied to the Reminder Line, expressed as text.
     *  0..1
     *  Reminder Line
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
     * Adds as reminderPeriod
     *
     * ASBIE
     *  Reminder Line. Reminder_ Period. Period
     *  An association to Period.
     *  0..n
     *  Reminder Line
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
     *  Reminder Line. Reminder_ Period. Period
     *  An association to Period.
     *  0..n
     *  Reminder Line
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
     *  Reminder Line. Reminder_ Period. Period
     *  An association to Period.
     *  0..n
     *  Reminder Line
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
     *  Reminder Line. Reminder_ Period. Period
     *  An association to Period.
     *  0..n
     *  Reminder Line
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
     *  Reminder Line. Reminder_ Period. Period
     *  An association to Period.
     *  0..n
     *  Reminder Line
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
     * Adds as billingReference
     *
     * ASBIE
     *  Reminder Line. Billing Reference
     *  An association to Billing Reference
     *  0..n
     *  Reminder Line
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
     *  Reminder Line. Billing Reference
     *  An association to Billing Reference
     *  0..n
     *  Reminder Line
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
     *  Reminder Line. Billing Reference
     *  An association to Billing Reference
     *  0..n
     *  Reminder Line
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
     *  Reminder Line. Billing Reference
     *  An association to Billing Reference
     *  0..n
     *  Reminder Line
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
     *  Reminder Line. Billing Reference
     *  An association to Billing Reference
     *  0..n
     *  Reminder Line
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
     * Gets as exchangeRate
     *
     * ASBIE
     *  Reminder Line. Exchange Rate
     *  An association to Exchange Rate (between the Reminder Line Currency and the Related Document currency).
     *  0..1
     *  Reminder Line
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
     *  Reminder Line. Exchange Rate
     *  An association to Exchange Rate (between the Reminder Line Currency and the Related Document currency).
     *  0..1
     *  Reminder Line
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

