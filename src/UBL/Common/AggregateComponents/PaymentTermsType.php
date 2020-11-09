<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing PaymentTermsType
 *
 * ABIE
 *  Payment Terms. Details
 *  Information about Payment Terms.
 *  Payment Terms
 * XSD Type: PaymentTermsType
 */
class PaymentTermsType
{

    /**
     * BBIE
     *  Payment Terms. Identifier
     *  Identifies the Payment Terms.
     *  0..1
     *  Payment Terms
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Payment Terms. Payment Means Identifier. Identifier
     *  Identifies the applicable Payment Means.
     *  0..1
     *  Payment Terms
     *  Payment Means Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\PaymentMeansID $paymentMeansID
     */
    private $paymentMeansID = null;

    /**
     * BBIE
     *  Payment Terms. Prepaid Payment Reference Identifier. Identifier
     *  Identifies prepaid payment.
     *  0..1
     *  Payment Terms
     *  Prepaid Payment Reference Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\PrepaidPaymentReferenceID $prepaidPaymentReferenceID
     */
    private $prepaidPaymentReferenceID = null;

    /**
     * BBIE
     *  Payment Terms. Note. Text
     *  Free-form text applying to the Payment Terms. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Payment Terms
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
     *  Payment Terms. Reference_ Event Code. Code
     *  The event from which terms are offered for a length of time, identified by a standard code.
     *  0..1
     *  Payment Terms
     *  Reference
     *  Event Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ReferenceEventCode $referenceEventCode
     */
    private $referenceEventCode = null;

    /**
     * BBIE
     *  Payment Terms. Settlement_ Discount Percent. Percent
     *  The settlement discount rate (percentage) offered for payment within the settlement period.
     *  0..1
     *  Payment Terms
     *  Settlement
     *  Discount Percent
     *  Percent
     *  Percent. Type
     *
     * @var float $settlementDiscountPercent
     */
    private $settlementDiscountPercent = null;

    /**
     * BBIE
     *  Payment Terms. Penalty_ Surcharge Percent. Percent
     *  The penalty rate (percentage) charged for late payment.
     *  0..1
     *  Payment Terms
     *  Penalty
     *  Surcharge Percent
     *  Percent
     *  Percent. Type
     *
     * @var float $penaltySurchargePercent
     */
    private $penaltySurchargePercent = null;

    /**
     * BBIE
     *  Payment Terms. Amount
     *  The payment amount for the Payment Terms.
     *  0..1
     *  Payment Terms
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Amount $amount
     */
    private $amount = null;

    /**
     * ASBIE
     *  Payment Terms. Settlement_ Period. Period
     *  An association to Settlement Period.
     *  0..1
     *  Payment Terms
     *  Settlement
     *  Period
     *  Period
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\SettlementPeriod $settlementPeriod
     */
    private $settlementPeriod = null;

    /**
     * ASBIE
     *  Payment Terms. Penalty_ Period. Period
     *  An association to Penalty Period.
     *  0..1
     *  Payment Terms
     *  Penalty
     *  Period
     *  Period
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\PenaltyPeriod $penaltyPeriod
     */
    private $penaltyPeriod = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Payment Terms. Identifier
     *  Identifies the Payment Terms.
     *  0..1
     *  Payment Terms
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
     *  Payment Terms. Identifier
     *  Identifies the Payment Terms.
     *  0..1
     *  Payment Terms
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
     * Gets as paymentMeansID
     *
     * BBIE
     *  Payment Terms. Payment Means Identifier. Identifier
     *  Identifies the applicable Payment Means.
     *  0..1
     *  Payment Terms
     *  Payment Means Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\PaymentMeansID
     */
    public function getPaymentMeansID()
    {
        return $this->paymentMeansID;
    }

    /**
     * Sets a new paymentMeansID
     *
     * BBIE
     *  Payment Terms. Payment Means Identifier. Identifier
     *  Identifies the applicable Payment Means.
     *  0..1
     *  Payment Terms
     *  Payment Means Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\PaymentMeansID $paymentMeansID
     * @return self
     */
    public function setPaymentMeansID(\NOKA\PHPUBL\UBL\Common\BasicComponents\PaymentMeansID $paymentMeansID)
    {
        $this->paymentMeansID = $paymentMeansID;
        return $this;
    }

    /**
     * Gets as prepaidPaymentReferenceID
     *
     * BBIE
     *  Payment Terms. Prepaid Payment Reference Identifier. Identifier
     *  Identifies prepaid payment.
     *  0..1
     *  Payment Terms
     *  Prepaid Payment Reference Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\PrepaidPaymentReferenceID
     */
    public function getPrepaidPaymentReferenceID()
    {
        return $this->prepaidPaymentReferenceID;
    }

    /**
     * Sets a new prepaidPaymentReferenceID
     *
     * BBIE
     *  Payment Terms. Prepaid Payment Reference Identifier. Identifier
     *  Identifies prepaid payment.
     *  0..1
     *  Payment Terms
     *  Prepaid Payment Reference Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\PrepaidPaymentReferenceID $prepaidPaymentReferenceID
     * @return self
     */
    public function setPrepaidPaymentReferenceID(\NOKA\PHPUBL\UBL\Common\BasicComponents\PrepaidPaymentReferenceID $prepaidPaymentReferenceID)
    {
        $this->prepaidPaymentReferenceID = $prepaidPaymentReferenceID;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Payment Terms. Note. Text
     *  Free-form text applying to the Payment Terms. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Payment Terms
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
     *  Payment Terms. Note. Text
     *  Free-form text applying to the Payment Terms. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Payment Terms
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
     *  Payment Terms. Note. Text
     *  Free-form text applying to the Payment Terms. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Payment Terms
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
     *  Payment Terms. Note. Text
     *  Free-form text applying to the Payment Terms. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Payment Terms
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
     *  Payment Terms. Note. Text
     *  Free-form text applying to the Payment Terms. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Payment Terms
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
     * Gets as referenceEventCode
     *
     * BBIE
     *  Payment Terms. Reference_ Event Code. Code
     *  The event from which terms are offered for a length of time, identified by a standard code.
     *  0..1
     *  Payment Terms
     *  Reference
     *  Event Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ReferenceEventCode
     */
    public function getReferenceEventCode()
    {
        return $this->referenceEventCode;
    }

    /**
     * Sets a new referenceEventCode
     *
     * BBIE
     *  Payment Terms. Reference_ Event Code. Code
     *  The event from which terms are offered for a length of time, identified by a standard code.
     *  0..1
     *  Payment Terms
     *  Reference
     *  Event Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ReferenceEventCode $referenceEventCode
     * @return self
     */
    public function setReferenceEventCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\ReferenceEventCode $referenceEventCode)
    {
        $this->referenceEventCode = $referenceEventCode;
        return $this;
    }

    /**
     * Gets as settlementDiscountPercent
     *
     * BBIE
     *  Payment Terms. Settlement_ Discount Percent. Percent
     *  The settlement discount rate (percentage) offered for payment within the settlement period.
     *  0..1
     *  Payment Terms
     *  Settlement
     *  Discount Percent
     *  Percent
     *  Percent. Type
     *
     * @return float
     */
    public function getSettlementDiscountPercent()
    {
        return $this->settlementDiscountPercent;
    }

    /**
     * Sets a new settlementDiscountPercent
     *
     * BBIE
     *  Payment Terms. Settlement_ Discount Percent. Percent
     *  The settlement discount rate (percentage) offered for payment within the settlement period.
     *  0..1
     *  Payment Terms
     *  Settlement
     *  Discount Percent
     *  Percent
     *  Percent. Type
     *
     * @param float $settlementDiscountPercent
     * @return self
     */
    public function setSettlementDiscountPercent($settlementDiscountPercent)
    {
        $this->settlementDiscountPercent = $settlementDiscountPercent;
        return $this;
    }

    /**
     * Gets as penaltySurchargePercent
     *
     * BBIE
     *  Payment Terms. Penalty_ Surcharge Percent. Percent
     *  The penalty rate (percentage) charged for late payment.
     *  0..1
     *  Payment Terms
     *  Penalty
     *  Surcharge Percent
     *  Percent
     *  Percent. Type
     *
     * @return float
     */
    public function getPenaltySurchargePercent()
    {
        return $this->penaltySurchargePercent;
    }

    /**
     * Sets a new penaltySurchargePercent
     *
     * BBIE
     *  Payment Terms. Penalty_ Surcharge Percent. Percent
     *  The penalty rate (percentage) charged for late payment.
     *  0..1
     *  Payment Terms
     *  Penalty
     *  Surcharge Percent
     *  Percent
     *  Percent. Type
     *
     * @param float $penaltySurchargePercent
     * @return self
     */
    public function setPenaltySurchargePercent($penaltySurchargePercent)
    {
        $this->penaltySurchargePercent = $penaltySurchargePercent;
        return $this;
    }

    /**
     * Gets as amount
     *
     * BBIE
     *  Payment Terms. Amount
     *  The payment amount for the Payment Terms.
     *  0..1
     *  Payment Terms
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * BBIE
     *  Payment Terms. Amount
     *  The payment amount for the Payment Terms.
     *  0..1
     *  Payment Terms
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Amount $amount
     * @return self
     */
    public function setAmount(\NOKA\PHPUBL\UBL\Common\BasicComponents\Amount $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as settlementPeriod
     *
     * ASBIE
     *  Payment Terms. Settlement_ Period. Period
     *  An association to Settlement Period.
     *  0..1
     *  Payment Terms
     *  Settlement
     *  Period
     *  Period
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\SettlementPeriod
     */
    public function getSettlementPeriod()
    {
        return $this->settlementPeriod;
    }

    /**
     * Sets a new settlementPeriod
     *
     * ASBIE
     *  Payment Terms. Settlement_ Period. Period
     *  An association to Settlement Period.
     *  0..1
     *  Payment Terms
     *  Settlement
     *  Period
     *  Period
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\SettlementPeriod $settlementPeriod
     * @return self
     */
    public function setSettlementPeriod(\NOKA\PHPUBL\UBL\Common\AggregateComponents\SettlementPeriod $settlementPeriod)
    {
        $this->settlementPeriod = $settlementPeriod;
        return $this;
    }

    /**
     * Gets as penaltyPeriod
     *
     * ASBIE
     *  Payment Terms. Penalty_ Period. Period
     *  An association to Penalty Period.
     *  0..1
     *  Payment Terms
     *  Penalty
     *  Period
     *  Period
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\PenaltyPeriod
     */
    public function getPenaltyPeriod()
    {
        return $this->penaltyPeriod;
    }

    /**
     * Sets a new penaltyPeriod
     *
     * ASBIE
     *  Payment Terms. Penalty_ Period. Period
     *  An association to Penalty Period.
     *  0..1
     *  Payment Terms
     *  Penalty
     *  Period
     *  Period
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\PenaltyPeriod $penaltyPeriod
     * @return self
     */
    public function setPenaltyPeriod(\NOKA\PHPUBL\UBL\Common\AggregateComponents\PenaltyPeriod $penaltyPeriod)
    {
        $this->penaltyPeriod = $penaltyPeriod;
        return $this;
    }


}

