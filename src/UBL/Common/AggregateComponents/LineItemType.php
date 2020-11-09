<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing LineItemType
 *
 * ABIE
 *  Line Item. Details
 *  Information about a Line Item.
 *  Line Item
 * XSD Type: LineItemType
 */
class LineItemType
{

    /**
     * BBIE
     *  Line Item. Identifier
     *  Identifies the Line Item assigned by the buyer.
     *  1
     *  Line Item
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Line Item. Sales_ Order Identifier. Identifier
     *  The identification given to a Line by the seller.
     *  0..1
     *  Line Item
     *  Sales
     *  Order Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\SalesOrderID $salesOrderID
     */
    private $salesOrderID = null;

    /**
     * BBIE
     *  Line Item. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Line Item
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Line Item. Note. Text
     *  Free-form text applying to the Line Item. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Line Item
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Note $note
     */
    private $note = null;

    /**
     * BBIE
     *  Line Item. Line Status Code. Code
     *  Identifies the status of the Line with respect to its original state.
     *  0..1
     *  Line Item
     *  Line Status Code
     *  Code
     *  Line Status_ Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\LineStatusCode $lineStatusCode
     */
    private $lineStatusCode = null;

    /**
     * BBIE
     *  Line Item. Quantity
     *  The quantity of Items for the Line Item.
     *  0..1
     *  Line Item
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Quantity $quantity
     */
    private $quantity = null;

    /**
     * BBIE
     *  Line Item. Line Extension Amount. Amount
     *  The total amount for the Line Item, including Allowance Charges but net of taxes.
     *  0..1
     *  Line Item
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\LineExtensionAmount $lineExtensionAmount
     */
    private $lineExtensionAmount = null;

    /**
     * BBIE
     *  Line Item. Total_ Tax Amount. Amount
     *  The total tax amount for the Line Item.
     *  0..1
     *  Line Item
     *  Total
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TotalTaxAmount $totalTaxAmount
     */
    private $totalTaxAmount = null;

    /**
     * BBIE
     *  Line Item. Minimum_ Quantity. Quantity
     *  The minimum quantity for the Item on the Line.
     *  0..1
     *  Line Item
     *  Minimum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\MinimumQuantity $minimumQuantity
     */
    private $minimumQuantity = null;

    /**
     * BBIE
     *  Line Item. Maximum_ Quantity. Quantity
     *  The maximum quantity for the Item on the Line.
     *  0..1
     *  Line Item
     *  Maximum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\MaximumQuantity $maximumQuantity
     */
    private $maximumQuantity = null;

    /**
     * BBIE
     *  Line Item. Minimum_ Backorder. Quantity
     *  The minimum back order quantity (where back order is allowed).
     *  0..1
     *  Line Item
     *  Minimum
     *  Backorder
     *  Quantity
     *  Quantity. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\MinimumBackorderQuantity $minimumBackorderQuantity
     */
    private $minimumBackorderQuantity = null;

    /**
     * BBIE
     *  Line Item. Maximum_ Backorder. Quantity
     *  The maximum back order quantity (where back order is allowed).
     *  0..1
     *  Line Item
     *  Maximum
     *  Backorder
     *  Quantity
     *  Quantity. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\MaximumBackorderQuantity $maximumBackorderQuantity
     */
    private $maximumBackorderQuantity = null;

    /**
     * BBIE
     *  Line Item. Inspection Method. Code
     *  Inspection requirements for a Line Item, expressed as a code.
     *  0..1
     *  Line Item
     *  Inspection Method
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\InspectionMethodCode $inspectionMethodCode
     */
    private $inspectionMethodCode = null;

    /**
     * BBIE
     *  Line Item. Partial Delivery Indicator. Indicator
     *  Indicates whether a partial delivery is allowed.
     *  0..1
     *  Line Item
     *  Partial Delivery Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $partialDeliveryIndicator
     */
    private $partialDeliveryIndicator = null;

    /**
     * BBIE
     *  Line Item. Back Order Allowed Indicator. Indicator
     *  Indicates whether back order is allowed.
     *  0..1
     *  Line Item
     *  Back Order Allowed Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $backOrderAllowedIndicator
     */
    private $backOrderAllowedIndicator = null;

    /**
     * BBIE
     *  Line Item. Accounting Cost Code. Code
     *  The buyer's accounting code applied to the Line Item.
     *  0..1
     *  Line Item
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AccountingCostCode $accountingCostCode
     */
    private $accountingCostCode = null;

    /**
     * BBIE
     *  Line Item. Accounting Cost. Text
     *  The buyer's accounting code applied to the Line Item, expressed as text.
     *  0..1
     *  Line Item
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AccountingCost $accountingCost
     */
    private $accountingCost = null;

    /**
     * ASBIE
     *  Line Item. Delivery
     *  An association to Delivery.
     *  0..n
     *  Line Item
     *  Delivery
     *  Delivery
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Delivery[] $delivery
     */
    private $delivery = [
        
    ];

    /**
     * ASBIE
     *  Line Item. Delivery Terms
     *  An association to Delivery Terms.
     *  0..1
     *  Line Item
     *  Delivery Terms
     *  Delivery Terms
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryTerms $deliveryTerms
     */
    private $deliveryTerms = null;

    /**
     * ASBIE
     *  Line Item. Originator_ Party. Party
     *  The party who originated Order.
     *  0..1
     *  Line Item
     *  Originator
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginatorParty $originatorParty
     */
    private $originatorParty = null;

    /**
     * ASBIE
     *  Line Item. Ordered Shipment
     *  An association to Ordered Shipment.
     *  0..n
     *  Line Item
     *  Ordered Shipment
     *  Ordered Shipment
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderedShipment[] $orderedShipment
     */
    private $orderedShipment = [
        
    ];

    /**
     * ASBIE
     *  Line Item. Pricing Reference
     *  An association to Pricing Reference.
     *  0..1
     *  Line Item
     *  Pricing Reference
     *  Pricing Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\PricingReference $pricingReference
     */
    private $pricingReference = null;

    /**
     * ASBIE
     *  Line Item. Allowance Charge
     *  An association to Allowance Charge.
     *  0..n
     *  Line Item
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AllowanceCharge[] $allowanceCharge
     */
    private $allowanceCharge = [
        
    ];

    /**
     * ASBIE
     *  Line Item. Price
     *  An association to Price.
     *  0..1
     *  Line Item
     *  Price
     *  Price
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Price $price
     */
    private $price = null;

    /**
     * ASBIE
     *  Line Item. Item
     *  An association to Item.
     *  1
     *  Line Item
     *  Item
     *  Item
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Item $item
     */
    private $item = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Line Item. Identifier
     *  Identifies the Line Item assigned by the buyer.
     *  1
     *  Line Item
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
     *  Line Item. Identifier
     *  Identifies the Line Item assigned by the buyer.
     *  1
     *  Line Item
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
     * Gets as salesOrderID
     *
     * BBIE
     *  Line Item. Sales_ Order Identifier. Identifier
     *  The identification given to a Line by the seller.
     *  0..1
     *  Line Item
     *  Sales
     *  Order Identifier
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
     *  Line Item. Sales_ Order Identifier. Identifier
     *  The identification given to a Line by the seller.
     *  0..1
     *  Line Item
     *  Sales
     *  Order Identifier
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
     * Gets as uUID
     *
     * BBIE
     *  Line Item. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Line Item
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
     *  Line Item. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Line Item
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
     *  Line Item. Note. Text
     *  Free-form text applying to the Line Item. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Line Item
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
     *  Line Item. Note. Text
     *  Free-form text applying to the Line Item. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Line Item
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
     * Gets as lineStatusCode
     *
     * BBIE
     *  Line Item. Line Status Code. Code
     *  Identifies the status of the Line with respect to its original state.
     *  0..1
     *  Line Item
     *  Line Status Code
     *  Code
     *  Line Status_ Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\LineStatusCode
     */
    public function getLineStatusCode()
    {
        return $this->lineStatusCode;
    }

    /**
     * Sets a new lineStatusCode
     *
     * BBIE
     *  Line Item. Line Status Code. Code
     *  Identifies the status of the Line with respect to its original state.
     *  0..1
     *  Line Item
     *  Line Status Code
     *  Code
     *  Line Status_ Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\LineStatusCode $lineStatusCode
     * @return self
     */
    public function setLineStatusCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\LineStatusCode $lineStatusCode)
    {
        $this->lineStatusCode = $lineStatusCode;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * BBIE
     *  Line Item. Quantity
     *  The quantity of Items for the Line Item.
     *  0..1
     *  Line Item
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
     *  Line Item. Quantity
     *  The quantity of Items for the Line Item.
     *  0..1
     *  Line Item
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
     *  Line Item. Line Extension Amount. Amount
     *  The total amount for the Line Item, including Allowance Charges but net of taxes.
     *  0..1
     *  Line Item
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
     *  Line Item. Line Extension Amount. Amount
     *  The total amount for the Line Item, including Allowance Charges but net of taxes.
     *  0..1
     *  Line Item
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
     *  Line Item. Total_ Tax Amount. Amount
     *  The total tax amount for the Line Item.
     *  0..1
     *  Line Item
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
     *  Line Item. Total_ Tax Amount. Amount
     *  The total tax amount for the Line Item.
     *  0..1
     *  Line Item
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
     * Gets as minimumQuantity
     *
     * BBIE
     *  Line Item. Minimum_ Quantity. Quantity
     *  The minimum quantity for the Item on the Line.
     *  0..1
     *  Line Item
     *  Minimum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\MinimumQuantity
     */
    public function getMinimumQuantity()
    {
        return $this->minimumQuantity;
    }

    /**
     * Sets a new minimumQuantity
     *
     * BBIE
     *  Line Item. Minimum_ Quantity. Quantity
     *  The minimum quantity for the Item on the Line.
     *  0..1
     *  Line Item
     *  Minimum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\MinimumQuantity $minimumQuantity
     * @return self
     */
    public function setMinimumQuantity(\NOKA\PHPUBL\UBL\Common\BasicComponents\MinimumQuantity $minimumQuantity)
    {
        $this->minimumQuantity = $minimumQuantity;
        return $this;
    }

    /**
     * Gets as maximumQuantity
     *
     * BBIE
     *  Line Item. Maximum_ Quantity. Quantity
     *  The maximum quantity for the Item on the Line.
     *  0..1
     *  Line Item
     *  Maximum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\MaximumQuantity
     */
    public function getMaximumQuantity()
    {
        return $this->maximumQuantity;
    }

    /**
     * Sets a new maximumQuantity
     *
     * BBIE
     *  Line Item. Maximum_ Quantity. Quantity
     *  The maximum quantity for the Item on the Line.
     *  0..1
     *  Line Item
     *  Maximum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\MaximumQuantity $maximumQuantity
     * @return self
     */
    public function setMaximumQuantity(\NOKA\PHPUBL\UBL\Common\BasicComponents\MaximumQuantity $maximumQuantity)
    {
        $this->maximumQuantity = $maximumQuantity;
        return $this;
    }

    /**
     * Gets as minimumBackorderQuantity
     *
     * BBIE
     *  Line Item. Minimum_ Backorder. Quantity
     *  The minimum back order quantity (where back order is allowed).
     *  0..1
     *  Line Item
     *  Minimum
     *  Backorder
     *  Quantity
     *  Quantity. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\MinimumBackorderQuantity
     */
    public function getMinimumBackorderQuantity()
    {
        return $this->minimumBackorderQuantity;
    }

    /**
     * Sets a new minimumBackorderQuantity
     *
     * BBIE
     *  Line Item. Minimum_ Backorder. Quantity
     *  The minimum back order quantity (where back order is allowed).
     *  0..1
     *  Line Item
     *  Minimum
     *  Backorder
     *  Quantity
     *  Quantity. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\MinimumBackorderQuantity $minimumBackorderQuantity
     * @return self
     */
    public function setMinimumBackorderQuantity(\NOKA\PHPUBL\UBL\Common\BasicComponents\MinimumBackorderQuantity $minimumBackorderQuantity)
    {
        $this->minimumBackorderQuantity = $minimumBackorderQuantity;
        return $this;
    }

    /**
     * Gets as maximumBackorderQuantity
     *
     * BBIE
     *  Line Item. Maximum_ Backorder. Quantity
     *  The maximum back order quantity (where back order is allowed).
     *  0..1
     *  Line Item
     *  Maximum
     *  Backorder
     *  Quantity
     *  Quantity. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\MaximumBackorderQuantity
     */
    public function getMaximumBackorderQuantity()
    {
        return $this->maximumBackorderQuantity;
    }

    /**
     * Sets a new maximumBackorderQuantity
     *
     * BBIE
     *  Line Item. Maximum_ Backorder. Quantity
     *  The maximum back order quantity (where back order is allowed).
     *  0..1
     *  Line Item
     *  Maximum
     *  Backorder
     *  Quantity
     *  Quantity. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\MaximumBackorderQuantity $maximumBackorderQuantity
     * @return self
     */
    public function setMaximumBackorderQuantity(\NOKA\PHPUBL\UBL\Common\BasicComponents\MaximumBackorderQuantity $maximumBackorderQuantity)
    {
        $this->maximumBackorderQuantity = $maximumBackorderQuantity;
        return $this;
    }

    /**
     * Gets as inspectionMethodCode
     *
     * BBIE
     *  Line Item. Inspection Method. Code
     *  Inspection requirements for a Line Item, expressed as a code.
     *  0..1
     *  Line Item
     *  Inspection Method
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\InspectionMethodCode
     */
    public function getInspectionMethodCode()
    {
        return $this->inspectionMethodCode;
    }

    /**
     * Sets a new inspectionMethodCode
     *
     * BBIE
     *  Line Item. Inspection Method. Code
     *  Inspection requirements for a Line Item, expressed as a code.
     *  0..1
     *  Line Item
     *  Inspection Method
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\InspectionMethodCode $inspectionMethodCode
     * @return self
     */
    public function setInspectionMethodCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\InspectionMethodCode $inspectionMethodCode)
    {
        $this->inspectionMethodCode = $inspectionMethodCode;
        return $this;
    }

    /**
     * Gets as partialDeliveryIndicator
     *
     * BBIE
     *  Line Item. Partial Delivery Indicator. Indicator
     *  Indicates whether a partial delivery is allowed.
     *  0..1
     *  Line Item
     *  Partial Delivery Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getPartialDeliveryIndicator()
    {
        return $this->partialDeliveryIndicator;
    }

    /**
     * Sets a new partialDeliveryIndicator
     *
     * BBIE
     *  Line Item. Partial Delivery Indicator. Indicator
     *  Indicates whether a partial delivery is allowed.
     *  0..1
     *  Line Item
     *  Partial Delivery Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $partialDeliveryIndicator
     * @return self
     */
    public function setPartialDeliveryIndicator($partialDeliveryIndicator)
    {
        $this->partialDeliveryIndicator = $partialDeliveryIndicator;
        return $this;
    }

    /**
     * Gets as backOrderAllowedIndicator
     *
     * BBIE
     *  Line Item. Back Order Allowed Indicator. Indicator
     *  Indicates whether back order is allowed.
     *  0..1
     *  Line Item
     *  Back Order Allowed Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getBackOrderAllowedIndicator()
    {
        return $this->backOrderAllowedIndicator;
    }

    /**
     * Sets a new backOrderAllowedIndicator
     *
     * BBIE
     *  Line Item. Back Order Allowed Indicator. Indicator
     *  Indicates whether back order is allowed.
     *  0..1
     *  Line Item
     *  Back Order Allowed Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $backOrderAllowedIndicator
     * @return self
     */
    public function setBackOrderAllowedIndicator($backOrderAllowedIndicator)
    {
        $this->backOrderAllowedIndicator = $backOrderAllowedIndicator;
        return $this;
    }

    /**
     * Gets as accountingCostCode
     *
     * BBIE
     *  Line Item. Accounting Cost Code. Code
     *  The buyer's accounting code applied to the Line Item.
     *  0..1
     *  Line Item
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
     *  Line Item. Accounting Cost Code. Code
     *  The buyer's accounting code applied to the Line Item.
     *  0..1
     *  Line Item
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
     *  Line Item. Accounting Cost. Text
     *  The buyer's accounting code applied to the Line Item, expressed as text.
     *  0..1
     *  Line Item
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
     *  Line Item. Accounting Cost. Text
     *  The buyer's accounting code applied to the Line Item, expressed as text.
     *  0..1
     *  Line Item
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
     * Adds as delivery
     *
     * ASBIE
     *  Line Item. Delivery
     *  An association to Delivery.
     *  0..n
     *  Line Item
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
     *  Line Item. Delivery
     *  An association to Delivery.
     *  0..n
     *  Line Item
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
     *  Line Item. Delivery
     *  An association to Delivery.
     *  0..n
     *  Line Item
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
     *  Line Item. Delivery
     *  An association to Delivery.
     *  0..n
     *  Line Item
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
     *  Line Item. Delivery
     *  An association to Delivery.
     *  0..n
     *  Line Item
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
     *  Line Item. Delivery Terms
     *  An association to Delivery Terms.
     *  0..1
     *  Line Item
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
     *  Line Item. Delivery Terms
     *  An association to Delivery Terms.
     *  0..1
     *  Line Item
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
     * Gets as originatorParty
     *
     * ASBIE
     *  Line Item. Originator_ Party. Party
     *  The party who originated Order.
     *  0..1
     *  Line Item
     *  Originator
     *  Party
     *  Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginatorParty
     */
    public function getOriginatorParty()
    {
        return $this->originatorParty;
    }

    /**
     * Sets a new originatorParty
     *
     * ASBIE
     *  Line Item. Originator_ Party. Party
     *  The party who originated Order.
     *  0..1
     *  Line Item
     *  Originator
     *  Party
     *  Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginatorParty $originatorParty
     * @return self
     */
    public function setOriginatorParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginatorParty $originatorParty)
    {
        $this->originatorParty = $originatorParty;
        return $this;
    }

    /**
     * Adds as orderedShipment
     *
     * ASBIE
     *  Line Item. Ordered Shipment
     *  An association to Ordered Shipment.
     *  0..n
     *  Line Item
     *  Ordered Shipment
     *  Ordered Shipment
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderedShipment $orderedShipment
     */
    public function addToOrderedShipment(\NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderedShipment $orderedShipment)
    {
        $this->orderedShipment[] = $orderedShipment;
        return $this;
    }

    /**
     * isset orderedShipment
     *
     * ASBIE
     *  Line Item. Ordered Shipment
     *  An association to Ordered Shipment.
     *  0..n
     *  Line Item
     *  Ordered Shipment
     *  Ordered Shipment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderedShipment($index)
    {
        return isset($this->orderedShipment[$index]);
    }

    /**
     * unset orderedShipment
     *
     * ASBIE
     *  Line Item. Ordered Shipment
     *  An association to Ordered Shipment.
     *  0..n
     *  Line Item
     *  Ordered Shipment
     *  Ordered Shipment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderedShipment($index)
    {
        unset($this->orderedShipment[$index]);
    }

    /**
     * Gets as orderedShipment
     *
     * ASBIE
     *  Line Item. Ordered Shipment
     *  An association to Ordered Shipment.
     *  0..n
     *  Line Item
     *  Ordered Shipment
     *  Ordered Shipment
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderedShipment[]
     */
    public function getOrderedShipment()
    {
        return $this->orderedShipment;
    }

    /**
     * Sets a new orderedShipment
     *
     * ASBIE
     *  Line Item. Ordered Shipment
     *  An association to Ordered Shipment.
     *  0..n
     *  Line Item
     *  Ordered Shipment
     *  Ordered Shipment
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\OrderedShipment[] $orderedShipment
     * @return self
     */
    public function setOrderedShipment(array $orderedShipment)
    {
        $this->orderedShipment = $orderedShipment;
        return $this;
    }

    /**
     * Gets as pricingReference
     *
     * ASBIE
     *  Line Item. Pricing Reference
     *  An association to Pricing Reference.
     *  0..1
     *  Line Item
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
     *  Line Item. Pricing Reference
     *  An association to Pricing Reference.
     *  0..1
     *  Line Item
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
     * Adds as allowanceCharge
     *
     * ASBIE
     *  Line Item. Allowance Charge
     *  An association to Allowance Charge.
     *  0..n
     *  Line Item
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
     *  Line Item. Allowance Charge
     *  An association to Allowance Charge.
     *  0..n
     *  Line Item
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
     *  Line Item. Allowance Charge
     *  An association to Allowance Charge.
     *  0..n
     *  Line Item
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
     *  Line Item. Allowance Charge
     *  An association to Allowance Charge.
     *  0..n
     *  Line Item
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
     *  Line Item. Allowance Charge
     *  An association to Allowance Charge.
     *  0..n
     *  Line Item
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
     * Gets as price
     *
     * ASBIE
     *  Line Item. Price
     *  An association to Price.
     *  0..1
     *  Line Item
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
     *  Line Item. Price
     *  An association to Price.
     *  0..1
     *  Line Item
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

    /**
     * Gets as item
     *
     * ASBIE
     *  Line Item. Item
     *  An association to Item.
     *  1
     *  Line Item
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
     *  Line Item. Item
     *  An association to Item.
     *  1
     *  Line Item
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


}

