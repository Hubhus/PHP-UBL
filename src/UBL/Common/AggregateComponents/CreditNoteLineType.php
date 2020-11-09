<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing CreditNoteLineType
 *
 * ABIE
 *  Credit Note Line. Details
 *  Information about a Credit Note Line.
 *  Credit Note Line
 * XSD Type: CreditNoteLineType
 */
class CreditNoteLineType
{

    /**
     * BBIE
     *  Credit Note Line. Identifier
     *  Identifies the Credit Note Line.
     *  1
     *  Credit Note Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Credit Note Line. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Credit Note Line
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Credit Note Line. Note. Text
     *  Free-form text applying to the Credit Note Line. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Credit Note Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Note $note
     */
    private $note = null;

    /**
     * BBIE
     *  Credit Note Line. Credited_ Quantity. Quantity
     *  The quantity of Items credited.
     *  0..1
     *  Credit Note Line
     *  Credited
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\CreditedQuantity $creditedQuantity
     */
    private $creditedQuantity = null;

    /**
     * BBIE
     *  Credit Note Line. Line Extension Amount. Amount
     *  The total amount for the Credit Note Line, including Allowance Charges but net of taxes.
     *  0..1
     *  Credit Note Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\LineExtensionAmount $lineExtensionAmount
     */
    private $lineExtensionAmount = null;

    /**
     * BBIE
     *  Credit Note Line. Tax Point Date. Date
     *  The date of the Credit Note Line, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Credit Note Line
     *  Tax Point Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $taxPointDate
     */
    private $taxPointDate = null;

    /**
     * BBIE
     *  Credit Note Line. Accounting Cost Code. Code
     *  The buyer's accounting code applied to the Credit Note Line.
     *  0..1
     *  Credit Note Line
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AccountingCostCode $accountingCostCode
     */
    private $accountingCostCode = null;

    /**
     * BBIE
     *  Credit Note Line. Accounting Cost. Text
     *  The buyer's accounting code applied to the Credit Note Line, expressed as text.
     *  0..1
     *  Credit Note Line
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AccountingCost $accountingCost
     */
    private $accountingCost = null;

    /**
     * ASBIE
     *  Credit Note Line. Discrepancy_ Response. Response
     *  An association to Discrepancy Response; the reason for the Credit.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Despatch_ Line Reference. Line Reference
     *  An associative reference to Despatch Line.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Receipt_ Line Reference. Line Reference
     *  An associative reference to Receipt Line.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Billing Reference
     *  An association to Billing Reference.
     *  0..n
     *  Credit Note Line
     *  Billing Reference
     *  Billing Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\BillingReference[] $billingReference
     */
    private $billingReference = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Credit Note Line
     *  Document Reference
     *  Document Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Pricing Reference
     *  An association to Pricing Reference.
     *  0..1
     *  Credit Note Line
     *  Pricing Reference
     *  Pricing Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\PricingReference $pricingReference
     */
    private $pricingReference = null;

    /**
     * ASBIE
     *  Credit Note Line. Delivery
     *  An association to Delivery.
     *  0..n
     *  Credit Note Line
     *  Delivery
     *  Delivery
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Delivery[] $delivery
     */
    private $delivery = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Tax Total
     *  An association to Tax Total.
     *  0..n
     *  Credit Note Line
     *  Tax Total
     *  Tax Total
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxTotal[] $taxTotal
     */
    private $taxTotal = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Item
     *  An association to Item
     *  0..1
     *  Credit Note Line
     *  Item
     *  Item
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Item $item
     */
    private $item = null;

    /**
     * ASBIE
     *  Credit Note Line. Price
     *  An association to Price.
     *  0..1
     *  Credit Note Line
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
     *  Credit Note Line. Identifier
     *  Identifies the Credit Note Line.
     *  1
     *  Credit Note Line
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
     *  Credit Note Line. Identifier
     *  Identifies the Credit Note Line.
     *  1
     *  Credit Note Line
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
     *  Credit Note Line. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Credit Note Line
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
     *  Credit Note Line. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Credit Note Line
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
     *  Credit Note Line. Note. Text
     *  Free-form text applying to the Credit Note Line. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Credit Note Line
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
     *  Credit Note Line. Note. Text
     *  Free-form text applying to the Credit Note Line. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Credit Note Line
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
     * Gets as creditedQuantity
     *
     * BBIE
     *  Credit Note Line. Credited_ Quantity. Quantity
     *  The quantity of Items credited.
     *  0..1
     *  Credit Note Line
     *  Credited
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\CreditedQuantity
     */
    public function getCreditedQuantity()
    {
        return $this->creditedQuantity;
    }

    /**
     * Sets a new creditedQuantity
     *
     * BBIE
     *  Credit Note Line. Credited_ Quantity. Quantity
     *  The quantity of Items credited.
     *  0..1
     *  Credit Note Line
     *  Credited
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\CreditedQuantity $creditedQuantity
     * @return self
     */
    public function setCreditedQuantity(\NOKA\PHPUBL\UBL\Common\BasicComponents\CreditedQuantity $creditedQuantity)
    {
        $this->creditedQuantity = $creditedQuantity;
        return $this;
    }

    /**
     * Gets as lineExtensionAmount
     *
     * BBIE
     *  Credit Note Line. Line Extension Amount. Amount
     *  The total amount for the Credit Note Line, including Allowance Charges but net of taxes.
     *  0..1
     *  Credit Note Line
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
     *  Credit Note Line. Line Extension Amount. Amount
     *  The total amount for the Credit Note Line, including Allowance Charges but net of taxes.
     *  0..1
     *  Credit Note Line
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
     *  Credit Note Line. Tax Point Date. Date
     *  The date of the Credit Note Line, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Credit Note Line
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
     *  Credit Note Line. Tax Point Date. Date
     *  The date of the Credit Note Line, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Credit Note Line
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
     *  Credit Note Line. Accounting Cost Code. Code
     *  The buyer's accounting code applied to the Credit Note Line.
     *  0..1
     *  Credit Note Line
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
     *  Credit Note Line. Accounting Cost Code. Code
     *  The buyer's accounting code applied to the Credit Note Line.
     *  0..1
     *  Credit Note Line
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
     *  Credit Note Line. Accounting Cost. Text
     *  The buyer's accounting code applied to the Credit Note Line, expressed as text.
     *  0..1
     *  Credit Note Line
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
     *  Credit Note Line. Accounting Cost. Text
     *  The buyer's accounting code applied to the Credit Note Line, expressed as text.
     *  0..1
     *  Credit Note Line
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
     *  Credit Note Line. Discrepancy_ Response. Response
     *  An association to Discrepancy Response; the reason for the Credit.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Discrepancy_ Response. Response
     *  An association to Discrepancy Response; the reason for the Credit.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Discrepancy_ Response. Response
     *  An association to Discrepancy Response; the reason for the Credit.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Discrepancy_ Response. Response
     *  An association to Discrepancy Response; the reason for the Credit.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Discrepancy_ Response. Response
     *  An association to Discrepancy Response; the reason for the Credit.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Despatch_ Line Reference. Line Reference
     *  An associative reference to Despatch Line.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Despatch_ Line Reference. Line Reference
     *  An associative reference to Despatch Line.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Despatch_ Line Reference. Line Reference
     *  An associative reference to Despatch Line.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Despatch_ Line Reference. Line Reference
     *  An associative reference to Despatch Line.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Despatch_ Line Reference. Line Reference
     *  An associative reference to Despatch Line.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Receipt_ Line Reference. Line Reference
     *  An associative reference to Receipt Line.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Receipt_ Line Reference. Line Reference
     *  An associative reference to Receipt Line.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Receipt_ Line Reference. Line Reference
     *  An associative reference to Receipt Line.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Receipt_ Line Reference. Line Reference
     *  An associative reference to Receipt Line.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Receipt_ Line Reference. Line Reference
     *  An associative reference to Receipt Line.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Billing Reference
     *  An association to Billing Reference.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Billing Reference
     *  An association to Billing Reference.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Billing Reference
     *  An association to Billing Reference.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Billing Reference
     *  An association to Billing Reference.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Billing Reference
     *  An association to Billing Reference.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Pricing Reference
     *  An association to Pricing Reference.
     *  0..1
     *  Credit Note Line
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
     *  Credit Note Line. Pricing Reference
     *  An association to Pricing Reference.
     *  0..1
     *  Credit Note Line
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
     *  Credit Note Line. Delivery
     *  An association to Delivery.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Delivery
     *  An association to Delivery.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Delivery
     *  An association to Delivery.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Delivery
     *  An association to Delivery.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Delivery
     *  An association to Delivery.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Tax Total
     *  An association to Tax Total.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Tax Total
     *  An association to Tax Total.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Tax Total
     *  An association to Tax Total.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Tax Total
     *  An association to Tax Total.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Tax Total
     *  An association to Tax Total.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Item
     *  An association to Item
     *  0..1
     *  Credit Note Line
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
     *  Credit Note Line. Item
     *  An association to Item
     *  0..1
     *  Credit Note Line
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
     *  Credit Note Line. Price
     *  An association to Price.
     *  0..1
     *  Credit Note Line
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
     *  Credit Note Line. Price
     *  An association to Price.
     *  0..1
     *  Credit Note Line
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

