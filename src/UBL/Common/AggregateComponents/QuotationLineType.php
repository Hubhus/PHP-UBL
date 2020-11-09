<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing QuotationLineType
 *
 * ABIE
 *  Quotation Line. Details
 *  Information about a Quotation Line.
 *  Quotation Line
 * XSD Type: QuotationLineType
 */
class QuotationLineType
{

    /**
     * BBIE
     *  Quotation Line. Identifier
     *  Identifies the Quotation Line Item.
     *  0..1
     *  Quotation Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Quotation Line. Note. Text
     *  Free-form text applying to the Quotation Line. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Quotation Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Note $note
     */
    private $note = null;

    /**
     * BBIE
     *  Quotation Line. Quantity
     *  The quantity of the item quoted.
     *  0..1
     *  Quotation Line
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Quantity $quantity
     */
    private $quantity = null;

    /**
     * BBIE
     *  Quotation Line. Line Extension Amount. Amount
     *  The total amount for the Quotation Line, including Allowance Charges but net of taxes.
     *  0..1
     *  Quotation Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\LineExtensionAmount $lineExtensionAmount
     */
    private $lineExtensionAmount = null;

    /**
     * BBIE
     *  Quotation Line. Total_ Tax Amount. Amount
     *  The total tax amount for the Quotation Line.
     *  0..1
     *  Quotation Line
     *  Total
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TotalTaxAmount $totalTaxAmount
     */
    private $totalTaxAmount = null;

    /**
     * ASBIE
     *  Quotation Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Quotation Line
     *  Document Reference
     *  Document Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * ASBIE
     *  Quotation Line. Line Item
     *  An association to Line Item.
     *  1
     *  Quotation Line
     *  Line Item
     *  Line Item
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\LineItem $lineItem
     */
    private $lineItem = null;

    /**
     * ASBIE
     *  Quotation Line. Seller Proposed Substitute_ Line Item. Line Item
     *  An association to a proposed substitute Line Item.
     *  0..n
     *  Quotation Line
     *  Seller Proposed Substitute
     *  Line Item
     *  Line Item
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\SellerProposedSubstituteLineItem[] $sellerProposedSubstituteLineItem
     */
    private $sellerProposedSubstituteLineItem = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Quotation Line. Identifier
     *  Identifies the Quotation Line Item.
     *  0..1
     *  Quotation Line
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
     *  Quotation Line. Identifier
     *  Identifies the Quotation Line Item.
     *  0..1
     *  Quotation Line
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
     *  Quotation Line. Note. Text
     *  Free-form text applying to the Quotation Line. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Quotation Line
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
     *  Quotation Line. Note. Text
     *  Free-form text applying to the Quotation Line. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Quotation Line
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
     * Gets as quantity
     *
     * BBIE
     *  Quotation Line. Quantity
     *  The quantity of the item quoted.
     *  0..1
     *  Quotation Line
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * BBIE
     *  Quotation Line. Quantity
     *  The quantity of the item quoted.
     *  0..1
     *  Quotation Line
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Quantity $quantity
     * @return self
     */
    public function setQuantity(\NOKA\PHPUBL\UBL\Common\BasicComponents\Quantity $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as lineExtensionAmount
     *
     * BBIE
     *  Quotation Line. Line Extension Amount. Amount
     *  The total amount for the Quotation Line, including Allowance Charges but net of taxes.
     *  0..1
     *  Quotation Line
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
     *  Quotation Line. Line Extension Amount. Amount
     *  The total amount for the Quotation Line, including Allowance Charges but net of taxes.
     *  0..1
     *  Quotation Line
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
     * Gets as totalTaxAmount
     *
     * BBIE
     *  Quotation Line. Total_ Tax Amount. Amount
     *  The total tax amount for the Quotation Line.
     *  0..1
     *  Quotation Line
     *  Total
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TotalTaxAmount
     */
    public function getTotalTaxAmount()
    {
        return $this->totalTaxAmount;
    }

    /**
     * Sets a new totalTaxAmount
     *
     * BBIE
     *  Quotation Line. Total_ Tax Amount. Amount
     *  The total tax amount for the Quotation Line.
     *  0..1
     *  Quotation Line
     *  Total
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TotalTaxAmount $totalTaxAmount
     * @return self
     */
    public function setTotalTaxAmount(\NOKA\PHPUBL\UBL\Common\BasicComponents\TotalTaxAmount $totalTaxAmount)
    {
        $this->totalTaxAmount = $totalTaxAmount;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Quotation Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Quotation Line
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
     *  Quotation Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Quotation Line
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
     *  Quotation Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Quotation Line
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
     *  Quotation Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Quotation Line
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
     *  Quotation Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Quotation Line
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
     * Gets as lineItem
     *
     * ASBIE
     *  Quotation Line. Line Item
     *  An association to Line Item.
     *  1
     *  Quotation Line
     *  Line Item
     *  Line Item
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\LineItem
     */
    public function getLineItem()
    {
        return $this->lineItem;
    }

    /**
     * Sets a new lineItem
     *
     * ASBIE
     *  Quotation Line. Line Item
     *  An association to Line Item.
     *  1
     *  Quotation Line
     *  Line Item
     *  Line Item
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\LineItem $lineItem
     * @return self
     */
    public function setLineItem(\NOKA\PHPUBL\UBL\Common\AggregateComponents\LineItem $lineItem)
    {
        $this->lineItem = $lineItem;
        return $this;
    }

    /**
     * Adds as sellerProposedSubstituteLineItem
     *
     * ASBIE
     *  Quotation Line. Seller Proposed Substitute_ Line Item. Line Item
     *  An association to a proposed substitute Line Item.
     *  0..n
     *  Quotation Line
     *  Seller Proposed Substitute
     *  Line Item
     *  Line Item
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\SellerProposedSubstituteLineItem $sellerProposedSubstituteLineItem
     */
    public function addToSellerProposedSubstituteLineItem(\NOKA\PHPUBL\UBL\Common\AggregateComponents\SellerProposedSubstituteLineItem $sellerProposedSubstituteLineItem)
    {
        $this->sellerProposedSubstituteLineItem[] = $sellerProposedSubstituteLineItem;
        return $this;
    }

    /**
     * isset sellerProposedSubstituteLineItem
     *
     * ASBIE
     *  Quotation Line. Seller Proposed Substitute_ Line Item. Line Item
     *  An association to a proposed substitute Line Item.
     *  0..n
     *  Quotation Line
     *  Seller Proposed Substitute
     *  Line Item
     *  Line Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSellerProposedSubstituteLineItem($index)
    {
        return isset($this->sellerProposedSubstituteLineItem[$index]);
    }

    /**
     * unset sellerProposedSubstituteLineItem
     *
     * ASBIE
     *  Quotation Line. Seller Proposed Substitute_ Line Item. Line Item
     *  An association to a proposed substitute Line Item.
     *  0..n
     *  Quotation Line
     *  Seller Proposed Substitute
     *  Line Item
     *  Line Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSellerProposedSubstituteLineItem($index)
    {
        unset($this->sellerProposedSubstituteLineItem[$index]);
    }

    /**
     * Gets as sellerProposedSubstituteLineItem
     *
     * ASBIE
     *  Quotation Line. Seller Proposed Substitute_ Line Item. Line Item
     *  An association to a proposed substitute Line Item.
     *  0..n
     *  Quotation Line
     *  Seller Proposed Substitute
     *  Line Item
     *  Line Item
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\SellerProposedSubstituteLineItem[]
     */
    public function getSellerProposedSubstituteLineItem()
    {
        return $this->sellerProposedSubstituteLineItem;
    }

    /**
     * Sets a new sellerProposedSubstituteLineItem
     *
     * ASBIE
     *  Quotation Line. Seller Proposed Substitute_ Line Item. Line Item
     *  An association to a proposed substitute Line Item.
     *  0..n
     *  Quotation Line
     *  Seller Proposed Substitute
     *  Line Item
     *  Line Item
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\SellerProposedSubstituteLineItem[] $sellerProposedSubstituteLineItem
     * @return self
     */
    public function setSellerProposedSubstituteLineItem(array $sellerProposedSubstituteLineItem)
    {
        $this->sellerProposedSubstituteLineItem = $sellerProposedSubstituteLineItem;
        return $this;
    }


}

