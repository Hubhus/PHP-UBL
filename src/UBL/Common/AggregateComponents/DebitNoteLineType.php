<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing DebitNoteLineType
 *
 * ABIE
 *  Debit Note Line. Details
 *  Information about a Debit Note Line.
 *  Debit Note Line
 * XSD Type: DebitNoteLineType
 */
class DebitNoteLineType
{

    /**
     * BBIE
     *  Debit Note Line. Identifier
     *  Identifies the Debit Note Line.
     *  1
     *  Debit Note Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Debit Note Line. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Debit Note Line
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Debit Note Line. Note. Text
     *  Free-form text applying to the Debit Note Line. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Debit Note Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Note $note
     */
    private $note = null;

    /**
     * BBIE
     *  Debit Note Line. Debited_ Quantity. Quantity
     *  The quantity of Items debited.
     *  0..1
     *  Debit Note Line
     *  Debited
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\DebitedQuantity $debitedQuantity
     */
    private $debitedQuantity = null;

    /**
     * BBIE
     *  Debit Note Line. Line Extension Amount. Amount
     *  The total amount for the Debit Note Line, including Allowance Charges but net of taxes.
     *  1
     *  Debit Note Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\LineExtensionAmount $lineExtensionAmount
     */
    private $lineExtensionAmount = null;

    /**
     * BBIE
     *  Debit Note Line. Tax Point Date. Date
     *  The date of the Debit Note Line, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Debit Note Line
     *  Tax Point Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $taxPointDate
     */
    private $taxPointDate = null;

    /**
     * BBIE
     *  Debit Note Line. Accounting Cost Code. Code
     *  The buyer's accounting code applied to the Debit Note Line.
     *  0..1
     *  Debit Note Line
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AccountingCostCode $accountingCostCode
     */
    private $accountingCostCode = null;

    /**
     * BBIE
     *  Debit Note Line. Accounting Cost. Text
     *  The buyer's accounting code applied to the Debit Note Line, expressed as text.
     *  0..1
     *  Debit Note Line
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AccountingCost $accountingCost
     */
    private $accountingCost = null;

    /**
     * ASBIE
     *  Debit Note Line. Discrepancy_ Response. Response
     *  An association to Discrepancy Response; the reason for the Debit.
     *  0..n
     *  Debit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DiscrepancyResponse[] $discrepancyResponse
     */
    private $discrepancyResponse = [
        
    ];

    /**
     * ASBIE
     *  Debit Note Line. Despatch_ Line Reference. Line Reference
     *  An associative reference to Despatch Line.
     *  0..n
     *  Debit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DespatchLineReference[] $despatchLineReference
     */
    private $despatchLineReference = [
        
    ];

    /**
     * ASBIE
     *  Debit Note Line. Receipt_ Line Reference. Line Reference
     *  An associative reference to Receipt Line.
     *  0..n
     *  Debit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReceiptLineReference[] $receiptLineReference
     */
    private $receiptLineReference = [
        
    ];

    /**
     * ASBIE
     *  Debit Note Line. Billing Reference
     *  An association to Billing Reference.
     *  0..n
     *  Debit Note Line
     *  Billing Reference
     *  Billing Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\BillingReference[] $billingReference
     */
    private $billingReference = [
        
    ];

    /**
     * ASBIE
     *  Debit Note Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Debit Note Line
     *  Document Reference
     *  Document Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * ASBIE
     *  Debit Note Line. Pricing Reference
     *  An association to Pricing Reference.
     *  0..1
     *  Debit Note Line
     *  Pricing Reference
     *  Pricing Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\PricingReference $pricingReference
     */
    private $pricingReference = null;

    /**
     * ASBIE
     *  Debit Note Line. Delivery
     *  An association to Delivery.
     *  0..n
     *  Debit Note Line
     *  Delivery
     *  Delivery
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Delivery[] $delivery
     */
    private $delivery = [
        
    ];

    /**
     * ASBIE
     *  Debit Note Line. Tax Total
     *  An association to Tax Total.
     *  0..n
     *  Debit Note Line
     *  Tax Total
     *  Tax Total
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxTotal[] $taxTotal
     */
    private $taxTotal = [
        
    ];

    /**
     * ASBIE
     *  Debit Note Line. Item
     *  An association to Item
     *  0..1
     *  Debit Note Line
     *  Item
     *  Item
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Item $item
     */
    private $item = null;

    /**
     * ASBIE
     *  Debit Note Line. Price
     *  An association to Price.
     *  0..1
     *  Debit Note Line
     *  Price
     *  Price
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Price $price
     */
    private $price = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Debit Note Line. Identifier
     *  Identifies the Debit Note Line.
     *  1
     *  Debit Note Line
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
     *  Debit Note Line. Identifier
     *  Identifies the Debit Note Line.
     *  1
     *  Debit Note Line
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
     * Gets as uUID
     *
     * BBIE
     *  Debit Note Line. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Debit Note Line
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
     *  Debit Note Line. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Debit Note Line
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
     * Gets as note
     *
     * BBIE
     *  Debit Note Line. Note. Text
     *  Free-form text applying to the Debit Note Line. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Debit Note Line
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
     *  Debit Note Line. Note. Text
     *  Free-form text applying to the Debit Note Line. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Debit Note Line
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
     * Gets as debitedQuantity
     *
     * BBIE
     *  Debit Note Line. Debited_ Quantity. Quantity
     *  The quantity of Items debited.
     *  0..1
     *  Debit Note Line
     *  Debited
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\DebitedQuantity
     */
    public function getDebitedQuantity()
    {
        return $this->debitedQuantity;
    }

    /**
     * Sets a new debitedQuantity
     *
     * BBIE
     *  Debit Note Line. Debited_ Quantity. Quantity
     *  The quantity of Items debited.
     *  0..1
     *  Debit Note Line
     *  Debited
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\DebitedQuantity $debitedQuantity
     * @return self
     */
    public function setDebitedQuantity(\NOKA\PHPUBL\UBL\Common\BasicComponents\DebitedQuantity $debitedQuantity)
    {
        $this->debitedQuantity = $debitedQuantity;
        return $this;
    }

    /**
     * Gets as lineExtensionAmount
     *
     * BBIE
     *  Debit Note Line. Line Extension Amount. Amount
     *  The total amount for the Debit Note Line, including Allowance Charges but net of taxes.
     *  1
     *  Debit Note Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\LineExtensionAmount
     */
    public function getLineExtensionAmount()
    {
        return $this->lineExtensionAmount;
    }

    /**
     * Sets a new lineExtensionAmount
     *
     * BBIE
     *  Debit Note Line. Line Extension Amount. Amount
     *  The total amount for the Debit Note Line, including Allowance Charges but net of taxes.
     *  1
     *  Debit Note Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\LineExtensionAmount $lineExtensionAmount
     * @return self
     */
    public function setLineExtensionAmount(\NOKA\PHPUBL\UBL\Common\BasicComponents\LineExtensionAmount $lineExtensionAmount)
    {
        $this->lineExtensionAmount = $lineExtensionAmount;
        return $this;
    }

    /**
     * Gets as taxPointDate
     *
     * BBIE
     *  Debit Note Line. Tax Point Date. Date
     *  The date of the Debit Note Line, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Debit Note Line
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
     *  Debit Note Line. Tax Point Date. Date
     *  The date of the Debit Note Line, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Debit Note Line
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
     * Gets as accountingCostCode
     *
     * BBIE
     *  Debit Note Line. Accounting Cost Code. Code
     *  The buyer's accounting code applied to the Debit Note Line.
     *  0..1
     *  Debit Note Line
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
     *  Debit Note Line. Accounting Cost Code. Code
     *  The buyer's accounting code applied to the Debit Note Line.
     *  0..1
     *  Debit Note Line
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
     *  Debit Note Line. Accounting Cost. Text
     *  The buyer's accounting code applied to the Debit Note Line, expressed as text.
     *  0..1
     *  Debit Note Line
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
     *  Debit Note Line. Accounting Cost. Text
     *  The buyer's accounting code applied to the Debit Note Line, expressed as text.
     *  0..1
     *  Debit Note Line
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
     * Adds as discrepancyResponse
     *
     * ASBIE
     *  Debit Note Line. Discrepancy_ Response. Response
     *  An association to Discrepancy Response; the reason for the Debit.
     *  0..n
     *  Debit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DiscrepancyResponse $discrepancyResponse
     */
    public function addToDiscrepancyResponse(\NOKA\PHPUBL\UBL\Common\AggregateComponents\DiscrepancyResponse $discrepancyResponse)
    {
        $this->discrepancyResponse[] = $discrepancyResponse;
        return $this;
    }

    /**
     * isset discrepancyResponse
     *
     * ASBIE
     *  Debit Note Line. Discrepancy_ Response. Response
     *  An association to Discrepancy Response; the reason for the Debit.
     *  0..n
     *  Debit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDiscrepancyResponse($index)
    {
        return isset($this->discrepancyResponse[$index]);
    }

    /**
     * unset discrepancyResponse
     *
     * ASBIE
     *  Debit Note Line. Discrepancy_ Response. Response
     *  An association to Discrepancy Response; the reason for the Debit.
     *  0..n
     *  Debit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDiscrepancyResponse($index)
    {
        unset($this->discrepancyResponse[$index]);
    }

    /**
     * Gets as discrepancyResponse
     *
     * ASBIE
     *  Debit Note Line. Discrepancy_ Response. Response
     *  An association to Discrepancy Response; the reason for the Debit.
     *  0..n
     *  Debit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\DiscrepancyResponse[]
     */
    public function getDiscrepancyResponse()
    {
        return $this->discrepancyResponse;
    }

    /**
     * Sets a new discrepancyResponse
     *
     * ASBIE
     *  Debit Note Line. Discrepancy_ Response. Response
     *  An association to Discrepancy Response; the reason for the Debit.
     *  0..n
     *  Debit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DiscrepancyResponse[] $discrepancyResponse
     * @return self
     */
    public function setDiscrepancyResponse(array $discrepancyResponse)
    {
        $this->discrepancyResponse = $discrepancyResponse;
        return $this;
    }

    /**
     * Adds as despatchLineReference
     *
     * ASBIE
     *  Debit Note Line. Despatch_ Line Reference. Line Reference
     *  An associative reference to Despatch Line.
     *  0..n
     *  Debit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DespatchLineReference $despatchLineReference
     */
    public function addToDespatchLineReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\DespatchLineReference $despatchLineReference)
    {
        $this->despatchLineReference[] = $despatchLineReference;
        return $this;
    }

    /**
     * isset despatchLineReference
     *
     * ASBIE
     *  Debit Note Line. Despatch_ Line Reference. Line Reference
     *  An associative reference to Despatch Line.
     *  0..n
     *  Debit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDespatchLineReference($index)
    {
        return isset($this->despatchLineReference[$index]);
    }

    /**
     * unset despatchLineReference
     *
     * ASBIE
     *  Debit Note Line. Despatch_ Line Reference. Line Reference
     *  An associative reference to Despatch Line.
     *  0..n
     *  Debit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDespatchLineReference($index)
    {
        unset($this->despatchLineReference[$index]);
    }

    /**
     * Gets as despatchLineReference
     *
     * ASBIE
     *  Debit Note Line. Despatch_ Line Reference. Line Reference
     *  An associative reference to Despatch Line.
     *  0..n
     *  Debit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\DespatchLineReference[]
     */
    public function getDespatchLineReference()
    {
        return $this->despatchLineReference;
    }

    /**
     * Sets a new despatchLineReference
     *
     * ASBIE
     *  Debit Note Line. Despatch_ Line Reference. Line Reference
     *  An associative reference to Despatch Line.
     *  0..n
     *  Debit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DespatchLineReference[] $despatchLineReference
     * @return self
     */
    public function setDespatchLineReference(array $despatchLineReference)
    {
        $this->despatchLineReference = $despatchLineReference;
        return $this;
    }

    /**
     * Adds as receiptLineReference
     *
     * ASBIE
     *  Debit Note Line. Receipt_ Line Reference. Line Reference
     *  An associative reference to Receipt Line.
     *  0..n
     *  Debit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReceiptLineReference $receiptLineReference
     */
    public function addToReceiptLineReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ReceiptLineReference $receiptLineReference)
    {
        $this->receiptLineReference[] = $receiptLineReference;
        return $this;
    }

    /**
     * isset receiptLineReference
     *
     * ASBIE
     *  Debit Note Line. Receipt_ Line Reference. Line Reference
     *  An associative reference to Receipt Line.
     *  0..n
     *  Debit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReceiptLineReference($index)
    {
        return isset($this->receiptLineReference[$index]);
    }

    /**
     * unset receiptLineReference
     *
     * ASBIE
     *  Debit Note Line. Receipt_ Line Reference. Line Reference
     *  An associative reference to Receipt Line.
     *  0..n
     *  Debit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReceiptLineReference($index)
    {
        unset($this->receiptLineReference[$index]);
    }

    /**
     * Gets as receiptLineReference
     *
     * ASBIE
     *  Debit Note Line. Receipt_ Line Reference. Line Reference
     *  An associative reference to Receipt Line.
     *  0..n
     *  Debit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReceiptLineReference[]
     */
    public function getReceiptLineReference()
    {
        return $this->receiptLineReference;
    }

    /**
     * Sets a new receiptLineReference
     *
     * ASBIE
     *  Debit Note Line. Receipt_ Line Reference. Line Reference
     *  An associative reference to Receipt Line.
     *  0..n
     *  Debit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReceiptLineReference[] $receiptLineReference
     * @return self
     */
    public function setReceiptLineReference(array $receiptLineReference)
    {
        $this->receiptLineReference = $receiptLineReference;
        return $this;
    }

    /**
     * Adds as billingReference
     *
     * ASBIE
     *  Debit Note Line. Billing Reference
     *  An association to Billing Reference.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Billing Reference
     *  An association to Billing Reference.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Billing Reference
     *  An association to Billing Reference.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Billing Reference
     *  An association to Billing Reference.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Billing Reference
     *  An association to Billing Reference.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Debit Note Line
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
     * Gets as pricingReference
     *
     * ASBIE
     *  Debit Note Line. Pricing Reference
     *  An association to Pricing Reference.
     *  0..1
     *  Debit Note Line
     *  Pricing Reference
     *  Pricing Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\PricingReference
     */
    public function getPricingReference()
    {
        return $this->pricingReference;
    }

    /**
     * Sets a new pricingReference
     *
     * ASBIE
     *  Debit Note Line. Pricing Reference
     *  An association to Pricing Reference.
     *  0..1
     *  Debit Note Line
     *  Pricing Reference
     *  Pricing Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\PricingReference $pricingReference
     * @return self
     */
    public function setPricingReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\PricingReference $pricingReference)
    {
        $this->pricingReference = $pricingReference;
        return $this;
    }

    /**
     * Adds as delivery
     *
     * ASBIE
     *  Debit Note Line. Delivery
     *  An association to Delivery.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Delivery
     *  An association to Delivery.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Delivery
     *  An association to Delivery.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Delivery
     *  An association to Delivery.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Delivery
     *  An association to Delivery.
     *  0..n
     *  Debit Note Line
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
     * Adds as taxTotal
     *
     * ASBIE
     *  Debit Note Line. Tax Total
     *  An association to Tax Total.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Tax Total
     *  An association to Tax Total.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Tax Total
     *  An association to Tax Total.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Tax Total
     *  An association to Tax Total.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Tax Total
     *  An association to Tax Total.
     *  0..n
     *  Debit Note Line
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
     * Gets as item
     *
     * ASBIE
     *  Debit Note Line. Item
     *  An association to Item
     *  0..1
     *  Debit Note Line
     *  Item
     *  Item
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\Item
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * ASBIE
     *  Debit Note Line. Item
     *  An association to Item
     *  0..1
     *  Debit Note Line
     *  Item
     *  Item
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Item $item
     * @return self
     */
    public function setItem(\NOKA\PHPUBL\UBL\Common\AggregateComponents\Item $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Gets as price
     *
     * ASBIE
     *  Debit Note Line. Price
     *  An association to Price.
     *  0..1
     *  Debit Note Line
     *  Price
     *  Price
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\Price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * ASBIE
     *  Debit Note Line. Price
     *  An association to Price.
     *  0..1
     *  Debit Note Line
     *  Price
     *  Price
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Price $price
     * @return self
     */
    public function setPrice(\NOKA\PHPUBL\UBL\Common\AggregateComponents\Price $price)
    {
        $this->price = $price;
        return $this;
    }


}

