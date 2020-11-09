<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing CatalogueLineType
 *
 * ABIE
 *  Catalogue Line. Details
 *  The basic element of Catalogue; something that can be bought.
 *  Catalogue Line
 * XSD Type: CatalogueLineType
 */
class CatalogueLineType
{

    /**
     * BBIE
     *  Catalogue Line. Identifier
     *  A unique instance identifier for the line in this Catalogue document.
     *  1
     *  Catalogue Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "1"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Catalogue Line. Action Code. Code
     *  Code indicating the action required for this item to synchronize with external repositories.
     *  0..1
     *  Catalogue Line
     *  Action Code
     *  Code
     *  Code. Type
     *  "Replace", "Update", "Delete","Add"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ActionCode $actionCode
     */
    private $actionCode = null;

    /**
     * BBIE
     *  Catalogue Line. Life Cycle Status Code. Code
     *  Code indicating availability of this line.
     *  0..1
     *  Catalogue Line
     *  Life Cycle Status Code
     *  Code
     *  Code. Type
     *  "new - announcement only", "new and available", "deleted - announcement only"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\LifeCycleStatusCode $lifeCycleStatusCode
     */
    private $lifeCycleStatusCode = null;

    /**
     * BBIE
     *  Catalogue Line. Contract Subdivision. Text
     *  Identifies a subdivision of a contract or tender.
     *  0..1
     *  Catalogue Line
     *  Contract Subdivision
     *  Text
     *  Text. Type
     *  "Installation", "Phase One", Support and Maintenance"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ContractSubdivision $contractSubdivision
     */
    private $contractSubdivision = null;

    /**
     * BBIE
     *  Catalogue Line. Note. Text
     *  Free-text note used for non-structured information about the line in the specific Catalogue document (intended to be human readable).
     *  0..n
     *  Catalogue Line
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
     *  Catalogue Line. Orderable_ Indicator. Indicator
     *  Indicates whether the line is orderable (that is, not just for information only).
     *  0..1
     *  Catalogue Line
     *  Orderable
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  TRUE means orderable, FALSE means not orderable
     *
     * @var bool $orderableIndicator
     */
    private $orderableIndicator = null;

    /**
     * BBIE
     *  Catalogue Line. Orderable_ Unit. Text
     *  The unit that can be ordered.
     *  0..1
     *  Catalogue Line
     *  Orderable
     *  Unit
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\OrderableUnit $orderableUnit
     */
    private $orderableUnit = null;

    /**
     * BBIE
     *  Catalogue Line. Content Unit. Quantity
     *  The quantity of the order unit of measure of the line.
     *  0..1
     *  Catalogue Line
     *  Content Unit
     *  Quantity
     *  Quantity. Type
     *  If order unit measure identifier is "each", then content unit quantity is "1".
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ContentUnitQuantity $contentUnitQuantity
     */
    private $contentUnitQuantity = null;

    /**
     * BBIE
     *  Catalogue Line. Order Quantity Increment. Numeric
     *  The number of items that can set the order quantity increments.
     *  0..1
     *  Catalogue Line
     *  Order Quantity Increment
     *  Numeric
     *  Numeric. Type
     *
     * @var float $orderQuantityIncrementNumeric
     */
    private $orderQuantityIncrementNumeric = null;

    /**
     * BBIE
     *  Catalogue Line. Minimum_ Order Quantity. Quantity
     *  The minimum amount of items that can be ordered.
     *  0..1
     *  Catalogue Line
     *  Minimum
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *  "10 boxes"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\MinimumOrderQuantity $minimumOrderQuantity
     */
    private $minimumOrderQuantity = null;

    /**
     * BBIE
     *  Catalogue Line. Maximum_ Order Quantity. Quantity
     *  The maximum amount of items that can be ordered.
     *  0..1
     *  Catalogue Line
     *  Maximum
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *  "1 tonne"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\MaximumOrderQuantity $maximumOrderQuantity
     */
    private $maximumOrderQuantity = null;

    /**
     * BBIE
     *  Catalogue Line. Warranty_ Information. Text
     *  Information regarding the warranty for the good or service. Warranty may be provided by any Party (can be described in the assiciation to Warranty Party).
     *  0..n
     *  Catalogue Line
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  "Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ('Standard Warranty')."
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\WarrantyInformation[] $warrantyInformation
     */
    private $warrantyInformation = [
        
    ];

    /**
     * BBIE
     *  Catalogue Line. Pack Level Code. Code
     *  The level of packaging involved.
     *  0..1
     *  Catalogue Line
     *  Pack Level Code
     *  Code
     *  Code. Type
     *  Consumer Unit, Trading Unit
     *  "level 2", "Group 4"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\PackLevelCode $packLevelCode
     */
    private $packLevelCode = null;

    /**
     * ASBIE
     *  Catalogue Line. Contractor_ Customer Party. Customer Party
     *  The Customer Party responsible for the contract to which the Catalogue relates.
     *  0..1
     *  Catalogue Line
     *  Contractor
     *  Customer Party
     *  Customer Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ContractorCustomerParty $contractorCustomerParty
     */
    private $contractorCustomerParty = null;

    /**
     * ASBIE
     *  Catalogue Line. Seller_ Supplier Party. Supplier Party
     *  An association to Seller of the item.
     *  0..1
     *  Catalogue Line
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\SellerSupplierParty $sellerSupplierParty
     */
    private $sellerSupplierParty = null;

    /**
     * ASBIE
     *  Catalogue Line. Warranty_ Party. Party
     *  The party responsible for the Warranty.
     *  0..1
     *  Catalogue Line
     *  Warranty
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\WarrantyParty $warrantyParty
     */
    private $warrantyParty = null;

    /**
     * ASBIE
     *  Catalogue Line. Warranty Validity_ Period. Period
     *  The period for which the Warranty is valid.
     *  0..1
     *  Catalogue Line
     *  Warranty Validity
     *  Period
     *  Period
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\WarrantyValidityPeriod $warrantyValidityPeriod
     */
    private $warrantyValidityPeriod = null;

    /**
     * ASBIE
     *  Catalogue Line. Line Validity_ Period. Period
     *  The period for which the Catalogue Line is valid.
     *  0..1
     *  Catalogue Line
     *  Line Validity
     *  Period
     *  Period
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\LineValidityPeriod $lineValidityPeriod
     */
    private $lineValidityPeriod = null;

    /**
     * ASBIE
     *  Catalogue Line. Item Comparison
     *  An association to comparative details for this Item.
     *  0..n
     *  Catalogue Line
     *  Item Comparison
     *  Item Comparison
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ItemComparison[] $itemComparison
     */
    private $itemComparison = [
        
    ];

    /**
     * ASBIE
     *  Catalogue Line. Component_ Related Item. Related Item
     *  An association that describes any catalogue items that may be components of this Item.
     *  0..n
     *  Catalogue Line
     *  Component
     *  Related Item
     *  Related Item
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ComponentRelatedItem[] $componentRelatedItem
     */
    private $componentRelatedItem = [
        
    ];

    /**
     * ASBIE
     *  Catalogue Line. Accessory_ Related Item. Related Item
     *  An association that describes any catalogue items that may be optional accessories to this Item.
     *  0..n
     *  Catalogue Line
     *  Accessory
     *  Related Item
     *  Related Item
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AccessoryRelatedItem[] $accessoryRelatedItem
     */
    private $accessoryRelatedItem = [
        
    ];

    /**
     * ASBIE
     *  Catalogue Line. Required_ Related Item. Related Item
     *  An association that describes any catalogue items that may be required for this Item.
     *  0..n
     *  Catalogue Line
     *  Required
     *  Related Item
     *  Related Item
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\RequiredRelatedItem[] $requiredRelatedItem
     */
    private $requiredRelatedItem = [
        
    ];

    /**
     * ASBIE
     *  Catalogue Line. Replacement_ Related Item. Related Item
     *  An association that describes any catalogue items that may be replacements for this Item.
     *  0..n
     *  Catalogue Line
     *  Replacement
     *  Related Item
     *  Related Item
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReplacementRelatedItem[] $replacementRelatedItem
     */
    private $replacementRelatedItem = [
        
    ];

    /**
     * ASBIE
     *  Catalogue Line. Complementary_ Related Item. Related Item
     *  An association that describes any catalogue items that may complement this Item.
     *  0..n
     *  Catalogue Line
     *  Complementary
     *  Related Item
     *  Related Item
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ComplementaryRelatedItem[] $complementaryRelatedItem
     */
    private $complementaryRelatedItem = [
        
    ];

    /**
     * ASBIE
     *  Catalogue Line. Required_ Item Location Quantity. Item Location Quantity
     *  An association to the description of properties related to locations and quantities of the Item.
     *  0..n
     *  Catalogue Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\RequiredItemLocationQuantity[] $requiredItemLocationQuantity
     */
    private $requiredItemLocationQuantity = [
        
    ];

    /**
     * ASBIE
     *  Catalogue Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Catalogue Line
     *  Document Reference
     *  Document Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * ASBIE
     *  Catalogue Line. Item
     *  An association to the Item itself.
     *  1
     *  Catalogue Line
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
     *  Catalogue Line. Identifier
     *  A unique instance identifier for the line in this Catalogue document.
     *  1
     *  Catalogue Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "1"
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
     *  Catalogue Line. Identifier
     *  A unique instance identifier for the line in this Catalogue document.
     *  1
     *  Catalogue Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "1"
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
     * Gets as actionCode
     *
     * BBIE
     *  Catalogue Line. Action Code. Code
     *  Code indicating the action required for this item to synchronize with external repositories.
     *  0..1
     *  Catalogue Line
     *  Action Code
     *  Code
     *  Code. Type
     *  "Replace", "Update", "Delete","Add"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ActionCode
     */
    public function getActionCode()
    {
        return $this->actionCode;
    }

    /**
     * Sets a new actionCode
     *
     * BBIE
     *  Catalogue Line. Action Code. Code
     *  Code indicating the action required for this item to synchronize with external repositories.
     *  0..1
     *  Catalogue Line
     *  Action Code
     *  Code
     *  Code. Type
     *  "Replace", "Update", "Delete","Add"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ActionCode $actionCode
     * @return self
     */
    public function setActionCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\ActionCode $actionCode)
    {
        $this->actionCode = $actionCode;
        return $this;
    }

    /**
     * Gets as lifeCycleStatusCode
     *
     * BBIE
     *  Catalogue Line. Life Cycle Status Code. Code
     *  Code indicating availability of this line.
     *  0..1
     *  Catalogue Line
     *  Life Cycle Status Code
     *  Code
     *  Code. Type
     *  "new - announcement only", "new and available", "deleted - announcement only"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\LifeCycleStatusCode
     */
    public function getLifeCycleStatusCode()
    {
        return $this->lifeCycleStatusCode;
    }

    /**
     * Sets a new lifeCycleStatusCode
     *
     * BBIE
     *  Catalogue Line. Life Cycle Status Code. Code
     *  Code indicating availability of this line.
     *  0..1
     *  Catalogue Line
     *  Life Cycle Status Code
     *  Code
     *  Code. Type
     *  "new - announcement only", "new and available", "deleted - announcement only"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\LifeCycleStatusCode $lifeCycleStatusCode
     * @return self
     */
    public function setLifeCycleStatusCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\LifeCycleStatusCode $lifeCycleStatusCode)
    {
        $this->lifeCycleStatusCode = $lifeCycleStatusCode;
        return $this;
    }

    /**
     * Gets as contractSubdivision
     *
     * BBIE
     *  Catalogue Line. Contract Subdivision. Text
     *  Identifies a subdivision of a contract or tender.
     *  0..1
     *  Catalogue Line
     *  Contract Subdivision
     *  Text
     *  Text. Type
     *  "Installation", "Phase One", Support and Maintenance"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ContractSubdivision
     */
    public function getContractSubdivision()
    {
        return $this->contractSubdivision;
    }

    /**
     * Sets a new contractSubdivision
     *
     * BBIE
     *  Catalogue Line. Contract Subdivision. Text
     *  Identifies a subdivision of a contract or tender.
     *  0..1
     *  Catalogue Line
     *  Contract Subdivision
     *  Text
     *  Text. Type
     *  "Installation", "Phase One", Support and Maintenance"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ContractSubdivision $contractSubdivision
     * @return self
     */
    public function setContractSubdivision(\NOKA\PHPUBL\UBL\Common\BasicComponents\ContractSubdivision $contractSubdivision)
    {
        $this->contractSubdivision = $contractSubdivision;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Catalogue Line. Note. Text
     *  Free-text note used for non-structured information about the line in the specific Catalogue document (intended to be human readable).
     *  0..n
     *  Catalogue Line
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
     *  Catalogue Line. Note. Text
     *  Free-text note used for non-structured information about the line in the specific Catalogue document (intended to be human readable).
     *  0..n
     *  Catalogue Line
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
     *  Catalogue Line. Note. Text
     *  Free-text note used for non-structured information about the line in the specific Catalogue document (intended to be human readable).
     *  0..n
     *  Catalogue Line
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
     *  Catalogue Line. Note. Text
     *  Free-text note used for non-structured information about the line in the specific Catalogue document (intended to be human readable).
     *  0..n
     *  Catalogue Line
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
     *  Catalogue Line. Note. Text
     *  Free-text note used for non-structured information about the line in the specific Catalogue document (intended to be human readable).
     *  0..n
     *  Catalogue Line
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
     * Gets as orderableIndicator
     *
     * BBIE
     *  Catalogue Line. Orderable_ Indicator. Indicator
     *  Indicates whether the line is orderable (that is, not just for information only).
     *  0..1
     *  Catalogue Line
     *  Orderable
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  TRUE means orderable, FALSE means not orderable
     *
     * @return bool
     */
    public function getOrderableIndicator()
    {
        return $this->orderableIndicator;
    }

    /**
     * Sets a new orderableIndicator
     *
     * BBIE
     *  Catalogue Line. Orderable_ Indicator. Indicator
     *  Indicates whether the line is orderable (that is, not just for information only).
     *  0..1
     *  Catalogue Line
     *  Orderable
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  TRUE means orderable, FALSE means not orderable
     *
     * @param bool $orderableIndicator
     * @return self
     */
    public function setOrderableIndicator($orderableIndicator)
    {
        $this->orderableIndicator = $orderableIndicator;
        return $this;
    }

    /**
     * Gets as orderableUnit
     *
     * BBIE
     *  Catalogue Line. Orderable_ Unit. Text
     *  The unit that can be ordered.
     *  0..1
     *  Catalogue Line
     *  Orderable
     *  Unit
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\OrderableUnit
     */
    public function getOrderableUnit()
    {
        return $this->orderableUnit;
    }

    /**
     * Sets a new orderableUnit
     *
     * BBIE
     *  Catalogue Line. Orderable_ Unit. Text
     *  The unit that can be ordered.
     *  0..1
     *  Catalogue Line
     *  Orderable
     *  Unit
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\OrderableUnit $orderableUnit
     * @return self
     */
    public function setOrderableUnit(\NOKA\PHPUBL\UBL\Common\BasicComponents\OrderableUnit $orderableUnit)
    {
        $this->orderableUnit = $orderableUnit;
        return $this;
    }

    /**
     * Gets as contentUnitQuantity
     *
     * BBIE
     *  Catalogue Line. Content Unit. Quantity
     *  The quantity of the order unit of measure of the line.
     *  0..1
     *  Catalogue Line
     *  Content Unit
     *  Quantity
     *  Quantity. Type
     *  If order unit measure identifier is "each", then content unit quantity is "1".
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ContentUnitQuantity
     */
    public function getContentUnitQuantity()
    {
        return $this->contentUnitQuantity;
    }

    /**
     * Sets a new contentUnitQuantity
     *
     * BBIE
     *  Catalogue Line. Content Unit. Quantity
     *  The quantity of the order unit of measure of the line.
     *  0..1
     *  Catalogue Line
     *  Content Unit
     *  Quantity
     *  Quantity. Type
     *  If order unit measure identifier is "each", then content unit quantity is "1".
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ContentUnitQuantity $contentUnitQuantity
     * @return self
     */
    public function setContentUnitQuantity(\NOKA\PHPUBL\UBL\Common\BasicComponents\ContentUnitQuantity $contentUnitQuantity)
    {
        $this->contentUnitQuantity = $contentUnitQuantity;
        return $this;
    }

    /**
     * Gets as orderQuantityIncrementNumeric
     *
     * BBIE
     *  Catalogue Line. Order Quantity Increment. Numeric
     *  The number of items that can set the order quantity increments.
     *  0..1
     *  Catalogue Line
     *  Order Quantity Increment
     *  Numeric
     *  Numeric. Type
     *
     * @return float
     */
    public function getOrderQuantityIncrementNumeric()
    {
        return $this->orderQuantityIncrementNumeric;
    }

    /**
     * Sets a new orderQuantityIncrementNumeric
     *
     * BBIE
     *  Catalogue Line. Order Quantity Increment. Numeric
     *  The number of items that can set the order quantity increments.
     *  0..1
     *  Catalogue Line
     *  Order Quantity Increment
     *  Numeric
     *  Numeric. Type
     *
     * @param float $orderQuantityIncrementNumeric
     * @return self
     */
    public function setOrderQuantityIncrementNumeric($orderQuantityIncrementNumeric)
    {
        $this->orderQuantityIncrementNumeric = $orderQuantityIncrementNumeric;
        return $this;
    }

    /**
     * Gets as minimumOrderQuantity
     *
     * BBIE
     *  Catalogue Line. Minimum_ Order Quantity. Quantity
     *  The minimum amount of items that can be ordered.
     *  0..1
     *  Catalogue Line
     *  Minimum
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *  "10 boxes"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\MinimumOrderQuantity
     */
    public function getMinimumOrderQuantity()
    {
        return $this->minimumOrderQuantity;
    }

    /**
     * Sets a new minimumOrderQuantity
     *
     * BBIE
     *  Catalogue Line. Minimum_ Order Quantity. Quantity
     *  The minimum amount of items that can be ordered.
     *  0..1
     *  Catalogue Line
     *  Minimum
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *  "10 boxes"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\MinimumOrderQuantity $minimumOrderQuantity
     * @return self
     */
    public function setMinimumOrderQuantity(\NOKA\PHPUBL\UBL\Common\BasicComponents\MinimumOrderQuantity $minimumOrderQuantity)
    {
        $this->minimumOrderQuantity = $minimumOrderQuantity;
        return $this;
    }

    /**
     * Gets as maximumOrderQuantity
     *
     * BBIE
     *  Catalogue Line. Maximum_ Order Quantity. Quantity
     *  The maximum amount of items that can be ordered.
     *  0..1
     *  Catalogue Line
     *  Maximum
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *  "1 tonne"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\MaximumOrderQuantity
     */
    public function getMaximumOrderQuantity()
    {
        return $this->maximumOrderQuantity;
    }

    /**
     * Sets a new maximumOrderQuantity
     *
     * BBIE
     *  Catalogue Line. Maximum_ Order Quantity. Quantity
     *  The maximum amount of items that can be ordered.
     *  0..1
     *  Catalogue Line
     *  Maximum
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *  "1 tonne"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\MaximumOrderQuantity $maximumOrderQuantity
     * @return self
     */
    public function setMaximumOrderQuantity(\NOKA\PHPUBL\UBL\Common\BasicComponents\MaximumOrderQuantity $maximumOrderQuantity)
    {
        $this->maximumOrderQuantity = $maximumOrderQuantity;
        return $this;
    }

    /**
     * Adds as warrantyInformation
     *
     * BBIE
     *  Catalogue Line. Warranty_ Information. Text
     *  Information regarding the warranty for the good or service. Warranty may be provided by any Party (can be described in the assiciation to Warranty Party).
     *  0..n
     *  Catalogue Line
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  "Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ('Standard Warranty')."
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\WarrantyInformation $warrantyInformation
     */
    public function addToWarrantyInformation(\NOKA\PHPUBL\UBL\Common\BasicComponents\WarrantyInformation $warrantyInformation)
    {
        $this->warrantyInformation[] = $warrantyInformation;
        return $this;
    }

    /**
     * isset warrantyInformation
     *
     * BBIE
     *  Catalogue Line. Warranty_ Information. Text
     *  Information regarding the warranty for the good or service. Warranty may be provided by any Party (can be described in the assiciation to Warranty Party).
     *  0..n
     *  Catalogue Line
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  "Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ('Standard Warranty')."
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWarrantyInformation($index)
    {
        return isset($this->warrantyInformation[$index]);
    }

    /**
     * unset warrantyInformation
     *
     * BBIE
     *  Catalogue Line. Warranty_ Information. Text
     *  Information regarding the warranty for the good or service. Warranty may be provided by any Party (can be described in the assiciation to Warranty Party).
     *  0..n
     *  Catalogue Line
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  "Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ('Standard Warranty')."
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWarrantyInformation($index)
    {
        unset($this->warrantyInformation[$index]);
    }

    /**
     * Gets as warrantyInformation
     *
     * BBIE
     *  Catalogue Line. Warranty_ Information. Text
     *  Information regarding the warranty for the good or service. Warranty may be provided by any Party (can be described in the assiciation to Warranty Party).
     *  0..n
     *  Catalogue Line
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  "Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ('Standard Warranty')."
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\WarrantyInformation[]
     */
    public function getWarrantyInformation()
    {
        return $this->warrantyInformation;
    }

    /**
     * Sets a new warrantyInformation
     *
     * BBIE
     *  Catalogue Line. Warranty_ Information. Text
     *  Information regarding the warranty for the good or service. Warranty may be provided by any Party (can be described in the assiciation to Warranty Party).
     *  0..n
     *  Catalogue Line
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  "Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ('Standard Warranty')."
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\WarrantyInformation[] $warrantyInformation
     * @return self
     */
    public function setWarrantyInformation(array $warrantyInformation)
    {
        $this->warrantyInformation = $warrantyInformation;
        return $this;
    }

    /**
     * Gets as packLevelCode
     *
     * BBIE
     *  Catalogue Line. Pack Level Code. Code
     *  The level of packaging involved.
     *  0..1
     *  Catalogue Line
     *  Pack Level Code
     *  Code
     *  Code. Type
     *  Consumer Unit, Trading Unit
     *  "level 2", "Group 4"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\PackLevelCode
     */
    public function getPackLevelCode()
    {
        return $this->packLevelCode;
    }

    /**
     * Sets a new packLevelCode
     *
     * BBIE
     *  Catalogue Line. Pack Level Code. Code
     *  The level of packaging involved.
     *  0..1
     *  Catalogue Line
     *  Pack Level Code
     *  Code
     *  Code. Type
     *  Consumer Unit, Trading Unit
     *  "level 2", "Group 4"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\PackLevelCode $packLevelCode
     * @return self
     */
    public function setPackLevelCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\PackLevelCode $packLevelCode)
    {
        $this->packLevelCode = $packLevelCode;
        return $this;
    }

    /**
     * Gets as contractorCustomerParty
     *
     * ASBIE
     *  Catalogue Line. Contractor_ Customer Party. Customer Party
     *  The Customer Party responsible for the contract to which the Catalogue relates.
     *  0..1
     *  Catalogue Line
     *  Contractor
     *  Customer Party
     *  Customer Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ContractorCustomerParty
     */
    public function getContractorCustomerParty()
    {
        return $this->contractorCustomerParty;
    }

    /**
     * Sets a new contractorCustomerParty
     *
     * ASBIE
     *  Catalogue Line. Contractor_ Customer Party. Customer Party
     *  The Customer Party responsible for the contract to which the Catalogue relates.
     *  0..1
     *  Catalogue Line
     *  Contractor
     *  Customer Party
     *  Customer Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ContractorCustomerParty $contractorCustomerParty
     * @return self
     */
    public function setContractorCustomerParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ContractorCustomerParty $contractorCustomerParty)
    {
        $this->contractorCustomerParty = $contractorCustomerParty;
        return $this;
    }

    /**
     * Gets as sellerSupplierParty
     *
     * ASBIE
     *  Catalogue Line. Seller_ Supplier Party. Supplier Party
     *  An association to Seller of the item.
     *  0..1
     *  Catalogue Line
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
     *  Catalogue Line. Seller_ Supplier Party. Supplier Party
     *  An association to Seller of the item.
     *  0..1
     *  Catalogue Line
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
     * Gets as warrantyParty
     *
     * ASBIE
     *  Catalogue Line. Warranty_ Party. Party
     *  The party responsible for the Warranty.
     *  0..1
     *  Catalogue Line
     *  Warranty
     *  Party
     *  Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\WarrantyParty
     */
    public function getWarrantyParty()
    {
        return $this->warrantyParty;
    }

    /**
     * Sets a new warrantyParty
     *
     * ASBIE
     *  Catalogue Line. Warranty_ Party. Party
     *  The party responsible for the Warranty.
     *  0..1
     *  Catalogue Line
     *  Warranty
     *  Party
     *  Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\WarrantyParty $warrantyParty
     * @return self
     */
    public function setWarrantyParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\WarrantyParty $warrantyParty)
    {
        $this->warrantyParty = $warrantyParty;
        return $this;
    }

    /**
     * Gets as warrantyValidityPeriod
     *
     * ASBIE
     *  Catalogue Line. Warranty Validity_ Period. Period
     *  The period for which the Warranty is valid.
     *  0..1
     *  Catalogue Line
     *  Warranty Validity
     *  Period
     *  Period
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\WarrantyValidityPeriod
     */
    public function getWarrantyValidityPeriod()
    {
        return $this->warrantyValidityPeriod;
    }

    /**
     * Sets a new warrantyValidityPeriod
     *
     * ASBIE
     *  Catalogue Line. Warranty Validity_ Period. Period
     *  The period for which the Warranty is valid.
     *  0..1
     *  Catalogue Line
     *  Warranty Validity
     *  Period
     *  Period
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\WarrantyValidityPeriod $warrantyValidityPeriod
     * @return self
     */
    public function setWarrantyValidityPeriod(\NOKA\PHPUBL\UBL\Common\AggregateComponents\WarrantyValidityPeriod $warrantyValidityPeriod)
    {
        $this->warrantyValidityPeriod = $warrantyValidityPeriod;
        return $this;
    }

    /**
     * Gets as lineValidityPeriod
     *
     * ASBIE
     *  Catalogue Line. Line Validity_ Period. Period
     *  The period for which the Catalogue Line is valid.
     *  0..1
     *  Catalogue Line
     *  Line Validity
     *  Period
     *  Period
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\LineValidityPeriod
     */
    public function getLineValidityPeriod()
    {
        return $this->lineValidityPeriod;
    }

    /**
     * Sets a new lineValidityPeriod
     *
     * ASBIE
     *  Catalogue Line. Line Validity_ Period. Period
     *  The period for which the Catalogue Line is valid.
     *  0..1
     *  Catalogue Line
     *  Line Validity
     *  Period
     *  Period
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\LineValidityPeriod $lineValidityPeriod
     * @return self
     */
    public function setLineValidityPeriod(\NOKA\PHPUBL\UBL\Common\AggregateComponents\LineValidityPeriod $lineValidityPeriod)
    {
        $this->lineValidityPeriod = $lineValidityPeriod;
        return $this;
    }

    /**
     * Adds as itemComparison
     *
     * ASBIE
     *  Catalogue Line. Item Comparison
     *  An association to comparative details for this Item.
     *  0..n
     *  Catalogue Line
     *  Item Comparison
     *  Item Comparison
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ItemComparison $itemComparison
     */
    public function addToItemComparison(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ItemComparison $itemComparison)
    {
        $this->itemComparison[] = $itemComparison;
        return $this;
    }

    /**
     * isset itemComparison
     *
     * ASBIE
     *  Catalogue Line. Item Comparison
     *  An association to comparative details for this Item.
     *  0..n
     *  Catalogue Line
     *  Item Comparison
     *  Item Comparison
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemComparison($index)
    {
        return isset($this->itemComparison[$index]);
    }

    /**
     * unset itemComparison
     *
     * ASBIE
     *  Catalogue Line. Item Comparison
     *  An association to comparative details for this Item.
     *  0..n
     *  Catalogue Line
     *  Item Comparison
     *  Item Comparison
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemComparison($index)
    {
        unset($this->itemComparison[$index]);
    }

    /**
     * Gets as itemComparison
     *
     * ASBIE
     *  Catalogue Line. Item Comparison
     *  An association to comparative details for this Item.
     *  0..n
     *  Catalogue Line
     *  Item Comparison
     *  Item Comparison
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ItemComparison[]
     */
    public function getItemComparison()
    {
        return $this->itemComparison;
    }

    /**
     * Sets a new itemComparison
     *
     * ASBIE
     *  Catalogue Line. Item Comparison
     *  An association to comparative details for this Item.
     *  0..n
     *  Catalogue Line
     *  Item Comparison
     *  Item Comparison
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ItemComparison[] $itemComparison
     * @return self
     */
    public function setItemComparison(array $itemComparison)
    {
        $this->itemComparison = $itemComparison;
        return $this;
    }

    /**
     * Adds as componentRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Component_ Related Item. Related Item
     *  An association that describes any catalogue items that may be components of this Item.
     *  0..n
     *  Catalogue Line
     *  Component
     *  Related Item
     *  Related Item
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ComponentRelatedItem $componentRelatedItem
     */
    public function addToComponentRelatedItem(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ComponentRelatedItem $componentRelatedItem)
    {
        $this->componentRelatedItem[] = $componentRelatedItem;
        return $this;
    }

    /**
     * isset componentRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Component_ Related Item. Related Item
     *  An association that describes any catalogue items that may be components of this Item.
     *  0..n
     *  Catalogue Line
     *  Component
     *  Related Item
     *  Related Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComponentRelatedItem($index)
    {
        return isset($this->componentRelatedItem[$index]);
    }

    /**
     * unset componentRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Component_ Related Item. Related Item
     *  An association that describes any catalogue items that may be components of this Item.
     *  0..n
     *  Catalogue Line
     *  Component
     *  Related Item
     *  Related Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComponentRelatedItem($index)
    {
        unset($this->componentRelatedItem[$index]);
    }

    /**
     * Gets as componentRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Component_ Related Item. Related Item
     *  An association that describes any catalogue items that may be components of this Item.
     *  0..n
     *  Catalogue Line
     *  Component
     *  Related Item
     *  Related Item
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ComponentRelatedItem[]
     */
    public function getComponentRelatedItem()
    {
        return $this->componentRelatedItem;
    }

    /**
     * Sets a new componentRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Component_ Related Item. Related Item
     *  An association that describes any catalogue items that may be components of this Item.
     *  0..n
     *  Catalogue Line
     *  Component
     *  Related Item
     *  Related Item
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ComponentRelatedItem[] $componentRelatedItem
     * @return self
     */
    public function setComponentRelatedItem(array $componentRelatedItem)
    {
        $this->componentRelatedItem = $componentRelatedItem;
        return $this;
    }

    /**
     * Adds as accessoryRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Accessory_ Related Item. Related Item
     *  An association that describes any catalogue items that may be optional accessories to this Item.
     *  0..n
     *  Catalogue Line
     *  Accessory
     *  Related Item
     *  Related Item
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\AccessoryRelatedItem $accessoryRelatedItem
     */
    public function addToAccessoryRelatedItem(\NOKA\PHPUBL\UBL\Common\AggregateComponents\AccessoryRelatedItem $accessoryRelatedItem)
    {
        $this->accessoryRelatedItem[] = $accessoryRelatedItem;
        return $this;
    }

    /**
     * isset accessoryRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Accessory_ Related Item. Related Item
     *  An association that describes any catalogue items that may be optional accessories to this Item.
     *  0..n
     *  Catalogue Line
     *  Accessory
     *  Related Item
     *  Related Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccessoryRelatedItem($index)
    {
        return isset($this->accessoryRelatedItem[$index]);
    }

    /**
     * unset accessoryRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Accessory_ Related Item. Related Item
     *  An association that describes any catalogue items that may be optional accessories to this Item.
     *  0..n
     *  Catalogue Line
     *  Accessory
     *  Related Item
     *  Related Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccessoryRelatedItem($index)
    {
        unset($this->accessoryRelatedItem[$index]);
    }

    /**
     * Gets as accessoryRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Accessory_ Related Item. Related Item
     *  An association that describes any catalogue items that may be optional accessories to this Item.
     *  0..n
     *  Catalogue Line
     *  Accessory
     *  Related Item
     *  Related Item
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\AccessoryRelatedItem[]
     */
    public function getAccessoryRelatedItem()
    {
        return $this->accessoryRelatedItem;
    }

    /**
     * Sets a new accessoryRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Accessory_ Related Item. Related Item
     *  An association that describes any catalogue items that may be optional accessories to this Item.
     *  0..n
     *  Catalogue Line
     *  Accessory
     *  Related Item
     *  Related Item
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\AccessoryRelatedItem[] $accessoryRelatedItem
     * @return self
     */
    public function setAccessoryRelatedItem(array $accessoryRelatedItem)
    {
        $this->accessoryRelatedItem = $accessoryRelatedItem;
        return $this;
    }

    /**
     * Adds as requiredRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Required_ Related Item. Related Item
     *  An association that describes any catalogue items that may be required for this Item.
     *  0..n
     *  Catalogue Line
     *  Required
     *  Related Item
     *  Related Item
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\RequiredRelatedItem $requiredRelatedItem
     */
    public function addToRequiredRelatedItem(\NOKA\PHPUBL\UBL\Common\AggregateComponents\RequiredRelatedItem $requiredRelatedItem)
    {
        $this->requiredRelatedItem[] = $requiredRelatedItem;
        return $this;
    }

    /**
     * isset requiredRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Required_ Related Item. Related Item
     *  An association that describes any catalogue items that may be required for this Item.
     *  0..n
     *  Catalogue Line
     *  Required
     *  Related Item
     *  Related Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequiredRelatedItem($index)
    {
        return isset($this->requiredRelatedItem[$index]);
    }

    /**
     * unset requiredRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Required_ Related Item. Related Item
     *  An association that describes any catalogue items that may be required for this Item.
     *  0..n
     *  Catalogue Line
     *  Required
     *  Related Item
     *  Related Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequiredRelatedItem($index)
    {
        unset($this->requiredRelatedItem[$index]);
    }

    /**
     * Gets as requiredRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Required_ Related Item. Related Item
     *  An association that describes any catalogue items that may be required for this Item.
     *  0..n
     *  Catalogue Line
     *  Required
     *  Related Item
     *  Related Item
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\RequiredRelatedItem[]
     */
    public function getRequiredRelatedItem()
    {
        return $this->requiredRelatedItem;
    }

    /**
     * Sets a new requiredRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Required_ Related Item. Related Item
     *  An association that describes any catalogue items that may be required for this Item.
     *  0..n
     *  Catalogue Line
     *  Required
     *  Related Item
     *  Related Item
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\RequiredRelatedItem[] $requiredRelatedItem
     * @return self
     */
    public function setRequiredRelatedItem(array $requiredRelatedItem)
    {
        $this->requiredRelatedItem = $requiredRelatedItem;
        return $this;
    }

    /**
     * Adds as replacementRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Replacement_ Related Item. Related Item
     *  An association that describes any catalogue items that may be replacements for this Item.
     *  0..n
     *  Catalogue Line
     *  Replacement
     *  Related Item
     *  Related Item
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReplacementRelatedItem $replacementRelatedItem
     */
    public function addToReplacementRelatedItem(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ReplacementRelatedItem $replacementRelatedItem)
    {
        $this->replacementRelatedItem[] = $replacementRelatedItem;
        return $this;
    }

    /**
     * isset replacementRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Replacement_ Related Item. Related Item
     *  An association that describes any catalogue items that may be replacements for this Item.
     *  0..n
     *  Catalogue Line
     *  Replacement
     *  Related Item
     *  Related Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReplacementRelatedItem($index)
    {
        return isset($this->replacementRelatedItem[$index]);
    }

    /**
     * unset replacementRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Replacement_ Related Item. Related Item
     *  An association that describes any catalogue items that may be replacements for this Item.
     *  0..n
     *  Catalogue Line
     *  Replacement
     *  Related Item
     *  Related Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReplacementRelatedItem($index)
    {
        unset($this->replacementRelatedItem[$index]);
    }

    /**
     * Gets as replacementRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Replacement_ Related Item. Related Item
     *  An association that describes any catalogue items that may be replacements for this Item.
     *  0..n
     *  Catalogue Line
     *  Replacement
     *  Related Item
     *  Related Item
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReplacementRelatedItem[]
     */
    public function getReplacementRelatedItem()
    {
        return $this->replacementRelatedItem;
    }

    /**
     * Sets a new replacementRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Replacement_ Related Item. Related Item
     *  An association that describes any catalogue items that may be replacements for this Item.
     *  0..n
     *  Catalogue Line
     *  Replacement
     *  Related Item
     *  Related Item
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReplacementRelatedItem[] $replacementRelatedItem
     * @return self
     */
    public function setReplacementRelatedItem(array $replacementRelatedItem)
    {
        $this->replacementRelatedItem = $replacementRelatedItem;
        return $this;
    }

    /**
     * Adds as complementaryRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Complementary_ Related Item. Related Item
     *  An association that describes any catalogue items that may complement this Item.
     *  0..n
     *  Catalogue Line
     *  Complementary
     *  Related Item
     *  Related Item
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ComplementaryRelatedItem $complementaryRelatedItem
     */
    public function addToComplementaryRelatedItem(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ComplementaryRelatedItem $complementaryRelatedItem)
    {
        $this->complementaryRelatedItem[] = $complementaryRelatedItem;
        return $this;
    }

    /**
     * isset complementaryRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Complementary_ Related Item. Related Item
     *  An association that describes any catalogue items that may complement this Item.
     *  0..n
     *  Catalogue Line
     *  Complementary
     *  Related Item
     *  Related Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComplementaryRelatedItem($index)
    {
        return isset($this->complementaryRelatedItem[$index]);
    }

    /**
     * unset complementaryRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Complementary_ Related Item. Related Item
     *  An association that describes any catalogue items that may complement this Item.
     *  0..n
     *  Catalogue Line
     *  Complementary
     *  Related Item
     *  Related Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComplementaryRelatedItem($index)
    {
        unset($this->complementaryRelatedItem[$index]);
    }

    /**
     * Gets as complementaryRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Complementary_ Related Item. Related Item
     *  An association that describes any catalogue items that may complement this Item.
     *  0..n
     *  Catalogue Line
     *  Complementary
     *  Related Item
     *  Related Item
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ComplementaryRelatedItem[]
     */
    public function getComplementaryRelatedItem()
    {
        return $this->complementaryRelatedItem;
    }

    /**
     * Sets a new complementaryRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Complementary_ Related Item. Related Item
     *  An association that describes any catalogue items that may complement this Item.
     *  0..n
     *  Catalogue Line
     *  Complementary
     *  Related Item
     *  Related Item
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ComplementaryRelatedItem[] $complementaryRelatedItem
     * @return self
     */
    public function setComplementaryRelatedItem(array $complementaryRelatedItem)
    {
        $this->complementaryRelatedItem = $complementaryRelatedItem;
        return $this;
    }

    /**
     * Adds as requiredItemLocationQuantity
     *
     * ASBIE
     *  Catalogue Line. Required_ Item Location Quantity. Item Location Quantity
     *  An association to the description of properties related to locations and quantities of the Item.
     *  0..n
     *  Catalogue Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\RequiredItemLocationQuantity $requiredItemLocationQuantity
     */
    public function addToRequiredItemLocationQuantity(\NOKA\PHPUBL\UBL\Common\AggregateComponents\RequiredItemLocationQuantity $requiredItemLocationQuantity)
    {
        $this->requiredItemLocationQuantity[] = $requiredItemLocationQuantity;
        return $this;
    }

    /**
     * isset requiredItemLocationQuantity
     *
     * ASBIE
     *  Catalogue Line. Required_ Item Location Quantity. Item Location Quantity
     *  An association to the description of properties related to locations and quantities of the Item.
     *  0..n
     *  Catalogue Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequiredItemLocationQuantity($index)
    {
        return isset($this->requiredItemLocationQuantity[$index]);
    }

    /**
     * unset requiredItemLocationQuantity
     *
     * ASBIE
     *  Catalogue Line. Required_ Item Location Quantity. Item Location Quantity
     *  An association to the description of properties related to locations and quantities of the Item.
     *  0..n
     *  Catalogue Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequiredItemLocationQuantity($index)
    {
        unset($this->requiredItemLocationQuantity[$index]);
    }

    /**
     * Gets as requiredItemLocationQuantity
     *
     * ASBIE
     *  Catalogue Line. Required_ Item Location Quantity. Item Location Quantity
     *  An association to the description of properties related to locations and quantities of the Item.
     *  0..n
     *  Catalogue Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\RequiredItemLocationQuantity[]
     */
    public function getRequiredItemLocationQuantity()
    {
        return $this->requiredItemLocationQuantity;
    }

    /**
     * Sets a new requiredItemLocationQuantity
     *
     * ASBIE
     *  Catalogue Line. Required_ Item Location Quantity. Item Location Quantity
     *  An association to the description of properties related to locations and quantities of the Item.
     *  0..n
     *  Catalogue Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\RequiredItemLocationQuantity[] $requiredItemLocationQuantity
     * @return self
     */
    public function setRequiredItemLocationQuantity(array $requiredItemLocationQuantity)
    {
        $this->requiredItemLocationQuantity = $requiredItemLocationQuantity;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Catalogue Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Catalogue Line
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
     *  Catalogue Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Catalogue Line
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
     *  Catalogue Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Catalogue Line
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
     *  Catalogue Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Catalogue Line
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
     *  Catalogue Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Catalogue Line
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
     * Gets as item
     *
     * ASBIE
     *  Catalogue Line. Item
     *  An association to the Item itself.
     *  1
     *  Catalogue Line
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
     *  Catalogue Line. Item
     *  An association to the Item itself.
     *  1
     *  Catalogue Line
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

