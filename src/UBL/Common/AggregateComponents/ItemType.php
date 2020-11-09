<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing ItemType
 *
 * ABIE
 *  Item. Details
 *  Information directly relating to an item.
 *  Item
 *  article, product, goods item
 * XSD Type: ItemType
 */
class ItemType
{

    /**
     * BBIE
     *  Item. Description. Text
     *  Free-form field that can be used to give a text description of the item.
     *  0..n
     *  Item
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Item. Pack Quantity. Quantity
     *  The unit packaging quantity.
     *  0..1
     *  Item
     *  Pack Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\PackQuantity $packQuantity
     */
    private $packQuantity = null;

    /**
     * BBIE
     *  Item. Pack Size. Numeric
     *  The number of items in a pack.
     *  0..1
     *  Item
     *  Pack Size
     *  Numeric
     *  Numeric. Type
     *
     * @var float $packSizeNumeric
     */
    private $packSizeNumeric = null;

    /**
     * BBIE
     *  Item. Catalogue_ Indicator. Indicator
     *  Indicates whether the item was ordered from a Catalogue (true) or not (false).
     *  0..1
     *  Item
     *  Catalogue
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $catalogueIndicator
     */
    private $catalogueIndicator = null;

    /**
     * BBIE
     *  Item. Name
     *  A short name optionally given to an item, such as a name from a Catalogue, as distinct from a description.
     *  0..1
     *  Item
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Item. Hazardous Risk_ Indicator. Indicator
     *  Indicates whether the item as delivered is hazardous.
     *  0..1
     *  Item
     *  Hazardous Risk
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Default is negative
     *
     * @var bool $hazardousRiskIndicator
     */
    private $hazardousRiskIndicator = null;

    /**
     * BBIE
     *  Item. Additional_ Information. Text
     *  Provides more details of the item (e.g., the URL of a relevant web page).
     *  0..1
     *  Item
     *  Additional
     *  Information
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AdditionalInformation $additionalInformation
     */
    private $additionalInformation = null;

    /**
     * BBIE
     *  Item. Keyword. Text
     *  A Seller Party-defined search string for the item. Also could be synonyms for identifying the item.
     *  0..n
     *  Item
     *  Keyword
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Keyword[] $keyword
     */
    private $keyword = [
        
    ];

    /**
     * BBIE
     *  Item. Brand Name. Name
     *  Brand name for the item.
     *  0..n
     *  Item
     *  Brand Name
     *  Name
     *  Name. Type
     *  Coca-Cola
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\BrandName[] $brandName
     */
    private $brandName = [
        
    ];

    /**
     * BBIE
     *  Item. Model Name. Name
     *  Model name for the item.
     *  0..n
     *  Item
     *  Model Name
     *  Name
     *  Name. Type
     *  "VW Beetle"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ModelName[] $modelName
     */
    private $modelName = [
        
    ];

    /**
     * ASBIE
     *  Item. Buyers_ Item Identification. Item Identification
     *  Associates the item with its identification according to the buyer's system.
     *  0..1
     *  Item
     *  Buyers
     *  Item Identification
     *  Item Identification
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\BuyersItemIdentification $buyersItemIdentification
     */
    private $buyersItemIdentification = null;

    /**
     * ASBIE
     *  Item. Sellers_ Item Identification. Item Identification
     *  Associates the item with its identification according to the seller's system.
     *  0..1
     *  Item
     *  Sellers
     *  Item Identification
     *  Item Identification
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\SellersItemIdentification $sellersItemIdentification
     */
    private $sellersItemIdentification = null;

    /**
     * ASBIE
     *  Item. Manufacturers_ Item Identification. Item Identification
     *  Associates the item with its identification according to the manufacturer's system.
     *  0..n
     *  Item
     *  Manufacturers
     *  Item Identification
     *  Item Identification
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ManufacturersItemIdentification[] $manufacturersItemIdentification
     */
    private $manufacturersItemIdentification = [
        
    ];

    /**
     * ASBIE
     *  Item. Standard_ Item Identification. Item Identification
     *  Associates the item with its identification according to a standard system.
     *  0..1
     *  Item
     *  Standard
     *  Item Identification
     *  Item Identification
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\StandardItemIdentification $standardItemIdentification
     */
    private $standardItemIdentification = null;

    /**
     * ASBIE
     *  Item. Catalogue_ Item Identification. Item Identification
     *  Associates the item with its identification according to a cataloguing system.
     *  0..1
     *  Item
     *  Catalogue
     *  Item Identification
     *  Item Identification
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\CatalogueItemIdentification $catalogueItemIdentification
     */
    private $catalogueItemIdentification = null;

    /**
     * ASBIE
     *  Item. Additional_ Item Identification. Item Identification
     *  Associates the item with other identification means.
     *  0..n
     *  Item
     *  Additional
     *  Item Identification
     *  Item Identification
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AdditionalItemIdentification[] $additionalItemIdentification
     */
    private $additionalItemIdentification = [
        
    ];

    /**
     * ASBIE
     *  Item. Catalogue_ Document Reference. Document Reference
     *  An associative reference to Catalogue.
     *  0..1
     *  Item
     *  Catalogue
     *  Document Reference
     *  Document Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\CatalogueDocumentReference $catalogueDocumentReference
     */
    private $catalogueDocumentReference = null;

    /**
     * ASBIE
     *  Item. Item Specification_ Document Reference. Document Reference
     *  An associative reference to a document providing Item specification.
     *  0..n
     *  Item
     *  Item Specification
     *  Document Reference
     *  Document Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ItemSpecificationDocumentReference[] $itemSpecificationDocumentReference
     */
    private $itemSpecificationDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Item. Origin_ Country. Country
     *  Associates the item with its country of origin.
     *  0..1
     *  Item
     *  Origin
     *  Country
     *  Country
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginCountry $originCountry
     */
    private $originCountry = null;

    /**
     * ASBIE
     *  Item. Commodity Classification
     *  Associates the item with its classification(s) according to a commodity classifying system.
     *  0..n
     *  Item
     *  Commodity Classification
     *  Commodity Classification
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\CommodityClassification[] $commodityClassification
     */
    private $commodityClassification = [
        
    ];

    /**
     * ASBIE
     *  Item. Transaction Conditions
     *  Associates the item with sales conditions appertaining to it.
     *  0..n
     *  Item
     *  Transaction Conditions
     *  Transaction Conditions
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransactionConditions[] $transactionConditions
     */
    private $transactionConditions = [
        
    ];

    /**
     * ASBIE
     *  Item. Hazardous Item
     *  Associates the item with its hazardous item information.
     *  0..n
     *  Item
     *  Hazardous Item
     *  Hazardous Item
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\HazardousItem[] $hazardousItem
     */
    private $hazardousItem = [
        
    ];

    /**
     * ASBIE
     *  Item. Classified_ Tax Category. Tax Category
     *  Classifies the item using one or more categories of taxes.
     *  0..n
     *  Item
     *  Classified
     *  Tax Category
     *  Tax Category
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ClassifiedTaxCategory[] $classifiedTaxCategory
     */
    private $classifiedTaxCategory = [
        
    ];

    /**
     * ASBIE
     *  Item. Additional_ Item Property. Item Property
     *  Associates the item with a set of additional properties.
     *  0..n
     *  Item
     *  Additional
     *  Item Property
     *  Item Property
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AdditionalItemProperty[] $additionalItemProperty
     */
    private $additionalItemProperty = [
        
    ];

    /**
     * ASBIE
     *  Item. Manufacturer_ Party. Party
     *  Associates the item with its manufacturer.
     *  0..n
     *  Item
     *  Manufacturer
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ManufacturerParty[] $manufacturerParty
     */
    private $manufacturerParty = [
        
    ];

    /**
     * ASBIE
     *  Item. Information Content Provider_ Party. Party
     *  Associates the item with the party responsible for the its specification.
     *  0..1
     *  Item
     *  Information Content Provider
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\InformationContentProviderParty $informationContentProviderParty
     */
    private $informationContentProviderParty = null;

    /**
     * ASBIE
     *  Item. Origin_ Address. Address
     *  Associates the item with the region of origin (not the country).
     *  0..n
     *  Item
     *  Origin
     *  Address
     *  Address
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginAddress[] $originAddress
     */
    private $originAddress = [
        
    ];

    /**
     * ASBIE
     *  Item. Item Instance
     *  An association to Item Instance.
     *  0..n
     *  Item
     *  Item Instance
     *  Item Instance
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ItemInstance[] $itemInstance
     */
    private $itemInstance = [
        
    ];

    /**
     * Adds as description
     *
     * BBIE
     *  Item. Description. Text
     *  Free-form field that can be used to give a text description of the item.
     *  0..n
     *  Item
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Description $description
     */
    public function addToDescription(\NOKA\PHPUBL\UBL\Common\BasicComponents\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Item. Description. Text
     *  Free-form field that can be used to give a text description of the item.
     *  0..n
     *  Item
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * BBIE
     *  Item. Description. Text
     *  Free-form field that can be used to give a text description of the item.
     *  0..n
     *  Item
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Item. Description. Text
     *  Free-form field that can be used to give a text description of the item.
     *  0..n
     *  Item
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Item. Description. Text
     *  Free-form field that can be used to give a text description of the item.
     *  0..n
     *  Item
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Description[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as packQuantity
     *
     * BBIE
     *  Item. Pack Quantity. Quantity
     *  The unit packaging quantity.
     *  0..1
     *  Item
     *  Pack Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\PackQuantity
     */
    public function getPackQuantity()
    {
        return $this->packQuantity;
    }

    /**
     * Sets a new packQuantity
     *
     * BBIE
     *  Item. Pack Quantity. Quantity
     *  The unit packaging quantity.
     *  0..1
     *  Item
     *  Pack Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\PackQuantity $packQuantity
     * @return self
     */
    public function setPackQuantity(\NOKA\PHPUBL\UBL\Common\BasicComponents\PackQuantity $packQuantity)
    {
        $this->packQuantity = $packQuantity;
        return $this;
    }

    /**
     * Gets as packSizeNumeric
     *
     * BBIE
     *  Item. Pack Size. Numeric
     *  The number of items in a pack.
     *  0..1
     *  Item
     *  Pack Size
     *  Numeric
     *  Numeric. Type
     *
     * @return float
     */
    public function getPackSizeNumeric()
    {
        return $this->packSizeNumeric;
    }

    /**
     * Sets a new packSizeNumeric
     *
     * BBIE
     *  Item. Pack Size. Numeric
     *  The number of items in a pack.
     *  0..1
     *  Item
     *  Pack Size
     *  Numeric
     *  Numeric. Type
     *
     * @param float $packSizeNumeric
     * @return self
     */
    public function setPackSizeNumeric($packSizeNumeric)
    {
        $this->packSizeNumeric = $packSizeNumeric;
        return $this;
    }

    /**
     * Gets as catalogueIndicator
     *
     * BBIE
     *  Item. Catalogue_ Indicator. Indicator
     *  Indicates whether the item was ordered from a Catalogue (true) or not (false).
     *  0..1
     *  Item
     *  Catalogue
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getCatalogueIndicator()
    {
        return $this->catalogueIndicator;
    }

    /**
     * Sets a new catalogueIndicator
     *
     * BBIE
     *  Item. Catalogue_ Indicator. Indicator
     *  Indicates whether the item was ordered from a Catalogue (true) or not (false).
     *  0..1
     *  Item
     *  Catalogue
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $catalogueIndicator
     * @return self
     */
    public function setCatalogueIndicator($catalogueIndicator)
    {
        $this->catalogueIndicator = $catalogueIndicator;
        return $this;
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Item. Name
     *  A short name optionally given to an item, such as a name from a Catalogue, as distinct from a description.
     *  0..1
     *  Item
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Item. Name
     *  A short name optionally given to an item, such as a name from a Catalogue, as distinct from a description.
     *  0..1
     *  Item
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Name $name
     * @return self
     */
    public function setName(\NOKA\PHPUBL\UBL\Common\BasicComponents\Name $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as hazardousRiskIndicator
     *
     * BBIE
     *  Item. Hazardous Risk_ Indicator. Indicator
     *  Indicates whether the item as delivered is hazardous.
     *  0..1
     *  Item
     *  Hazardous Risk
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Default is negative
     *
     * @return bool
     */
    public function getHazardousRiskIndicator()
    {
        return $this->hazardousRiskIndicator;
    }

    /**
     * Sets a new hazardousRiskIndicator
     *
     * BBIE
     *  Item. Hazardous Risk_ Indicator. Indicator
     *  Indicates whether the item as delivered is hazardous.
     *  0..1
     *  Item
     *  Hazardous Risk
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Default is negative
     *
     * @param bool $hazardousRiskIndicator
     * @return self
     */
    public function setHazardousRiskIndicator($hazardousRiskIndicator)
    {
        $this->hazardousRiskIndicator = $hazardousRiskIndicator;
        return $this;
    }

    /**
     * Gets as additionalInformation
     *
     * BBIE
     *  Item. Additional_ Information. Text
     *  Provides more details of the item (e.g., the URL of a relevant web page).
     *  0..1
     *  Item
     *  Additional
     *  Information
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\AdditionalInformation
     */
    public function getAdditionalInformation()
    {
        return $this->additionalInformation;
    }

    /**
     * Sets a new additionalInformation
     *
     * BBIE
     *  Item. Additional_ Information. Text
     *  Provides more details of the item (e.g., the URL of a relevant web page).
     *  0..1
     *  Item
     *  Additional
     *  Information
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\AdditionalInformation $additionalInformation
     * @return self
     */
    public function setAdditionalInformation(\NOKA\PHPUBL\UBL\Common\BasicComponents\AdditionalInformation $additionalInformation)
    {
        $this->additionalInformation = $additionalInformation;
        return $this;
    }

    /**
     * Adds as keyword
     *
     * BBIE
     *  Item. Keyword. Text
     *  A Seller Party-defined search string for the item. Also could be synonyms for identifying the item.
     *  0..n
     *  Item
     *  Keyword
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Keyword $keyword
     */
    public function addToKeyword(\NOKA\PHPUBL\UBL\Common\BasicComponents\Keyword $keyword)
    {
        $this->keyword[] = $keyword;
        return $this;
    }

    /**
     * isset keyword
     *
     * BBIE
     *  Item. Keyword. Text
     *  A Seller Party-defined search string for the item. Also could be synonyms for identifying the item.
     *  0..n
     *  Item
     *  Keyword
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKeyword($index)
    {
        return isset($this->keyword[$index]);
    }

    /**
     * unset keyword
     *
     * BBIE
     *  Item. Keyword. Text
     *  A Seller Party-defined search string for the item. Also could be synonyms for identifying the item.
     *  0..n
     *  Item
     *  Keyword
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKeyword($index)
    {
        unset($this->keyword[$index]);
    }

    /**
     * Gets as keyword
     *
     * BBIE
     *  Item. Keyword. Text
     *  A Seller Party-defined search string for the item. Also could be synonyms for identifying the item.
     *  0..n
     *  Item
     *  Keyword
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Keyword[]
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Sets a new keyword
     *
     * BBIE
     *  Item. Keyword. Text
     *  A Seller Party-defined search string for the item. Also could be synonyms for identifying the item.
     *  0..n
     *  Item
     *  Keyword
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Keyword[] $keyword
     * @return self
     */
    public function setKeyword(array $keyword)
    {
        $this->keyword = $keyword;
        return $this;
    }

    /**
     * Adds as brandName
     *
     * BBIE
     *  Item. Brand Name. Name
     *  Brand name for the item.
     *  0..n
     *  Item
     *  Brand Name
     *  Name
     *  Name. Type
     *  Coca-Cola
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\BrandName $brandName
     */
    public function addToBrandName(\NOKA\PHPUBL\UBL\Common\BasicComponents\BrandName $brandName)
    {
        $this->brandName[] = $brandName;
        return $this;
    }

    /**
     * isset brandName
     *
     * BBIE
     *  Item. Brand Name. Name
     *  Brand name for the item.
     *  0..n
     *  Item
     *  Brand Name
     *  Name
     *  Name. Type
     *  Coca-Cola
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBrandName($index)
    {
        return isset($this->brandName[$index]);
    }

    /**
     * unset brandName
     *
     * BBIE
     *  Item. Brand Name. Name
     *  Brand name for the item.
     *  0..n
     *  Item
     *  Brand Name
     *  Name
     *  Name. Type
     *  Coca-Cola
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBrandName($index)
    {
        unset($this->brandName[$index]);
    }

    /**
     * Gets as brandName
     *
     * BBIE
     *  Item. Brand Name. Name
     *  Brand name for the item.
     *  0..n
     *  Item
     *  Brand Name
     *  Name
     *  Name. Type
     *  Coca-Cola
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\BrandName[]
     */
    public function getBrandName()
    {
        return $this->brandName;
    }

    /**
     * Sets a new brandName
     *
     * BBIE
     *  Item. Brand Name. Name
     *  Brand name for the item.
     *  0..n
     *  Item
     *  Brand Name
     *  Name
     *  Name. Type
     *  Coca-Cola
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\BrandName[] $brandName
     * @return self
     */
    public function setBrandName(array $brandName)
    {
        $this->brandName = $brandName;
        return $this;
    }

    /**
     * Adds as modelName
     *
     * BBIE
     *  Item. Model Name. Name
     *  Model name for the item.
     *  0..n
     *  Item
     *  Model Name
     *  Name
     *  Name. Type
     *  "VW Beetle"
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ModelName $modelName
     */
    public function addToModelName(\NOKA\PHPUBL\UBL\Common\BasicComponents\ModelName $modelName)
    {
        $this->modelName[] = $modelName;
        return $this;
    }

    /**
     * isset modelName
     *
     * BBIE
     *  Item. Model Name. Name
     *  Model name for the item.
     *  0..n
     *  Item
     *  Model Name
     *  Name
     *  Name. Type
     *  "VW Beetle"
     *
     * @param int|string $index
     * @return bool
     */
    public function issetModelName($index)
    {
        return isset($this->modelName[$index]);
    }

    /**
     * unset modelName
     *
     * BBIE
     *  Item. Model Name. Name
     *  Model name for the item.
     *  0..n
     *  Item
     *  Model Name
     *  Name
     *  Name. Type
     *  "VW Beetle"
     *
     * @param int|string $index
     * @return void
     */
    public function unsetModelName($index)
    {
        unset($this->modelName[$index]);
    }

    /**
     * Gets as modelName
     *
     * BBIE
     *  Item. Model Name. Name
     *  Model name for the item.
     *  0..n
     *  Item
     *  Model Name
     *  Name
     *  Name. Type
     *  "VW Beetle"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ModelName[]
     */
    public function getModelName()
    {
        return $this->modelName;
    }

    /**
     * Sets a new modelName
     *
     * BBIE
     *  Item. Model Name. Name
     *  Model name for the item.
     *  0..n
     *  Item
     *  Model Name
     *  Name
     *  Name. Type
     *  "VW Beetle"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ModelName[] $modelName
     * @return self
     */
    public function setModelName(array $modelName)
    {
        $this->modelName = $modelName;
        return $this;
    }

    /**
     * Gets as buyersItemIdentification
     *
     * ASBIE
     *  Item. Buyers_ Item Identification. Item Identification
     *  Associates the item with its identification according to the buyer's system.
     *  0..1
     *  Item
     *  Buyers
     *  Item Identification
     *  Item Identification
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\BuyersItemIdentification
     */
    public function getBuyersItemIdentification()
    {
        return $this->buyersItemIdentification;
    }

    /**
     * Sets a new buyersItemIdentification
     *
     * ASBIE
     *  Item. Buyers_ Item Identification. Item Identification
     *  Associates the item with its identification according to the buyer's system.
     *  0..1
     *  Item
     *  Buyers
     *  Item Identification
     *  Item Identification
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\BuyersItemIdentification $buyersItemIdentification
     * @return self
     */
    public function setBuyersItemIdentification(\NOKA\PHPUBL\UBL\Common\AggregateComponents\BuyersItemIdentification $buyersItemIdentification)
    {
        $this->buyersItemIdentification = $buyersItemIdentification;
        return $this;
    }

    /**
     * Gets as sellersItemIdentification
     *
     * ASBIE
     *  Item. Sellers_ Item Identification. Item Identification
     *  Associates the item with its identification according to the seller's system.
     *  0..1
     *  Item
     *  Sellers
     *  Item Identification
     *  Item Identification
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\SellersItemIdentification
     */
    public function getSellersItemIdentification()
    {
        return $this->sellersItemIdentification;
    }

    /**
     * Sets a new sellersItemIdentification
     *
     * ASBIE
     *  Item. Sellers_ Item Identification. Item Identification
     *  Associates the item with its identification according to the seller's system.
     *  0..1
     *  Item
     *  Sellers
     *  Item Identification
     *  Item Identification
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\SellersItemIdentification $sellersItemIdentification
     * @return self
     */
    public function setSellersItemIdentification(\NOKA\PHPUBL\UBL\Common\AggregateComponents\SellersItemIdentification $sellersItemIdentification)
    {
        $this->sellersItemIdentification = $sellersItemIdentification;
        return $this;
    }

    /**
     * Adds as manufacturersItemIdentification
     *
     * ASBIE
     *  Item. Manufacturers_ Item Identification. Item Identification
     *  Associates the item with its identification according to the manufacturer's system.
     *  0..n
     *  Item
     *  Manufacturers
     *  Item Identification
     *  Item Identification
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ManufacturersItemIdentification $manufacturersItemIdentification
     */
    public function addToManufacturersItemIdentification(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ManufacturersItemIdentification $manufacturersItemIdentification)
    {
        $this->manufacturersItemIdentification[] = $manufacturersItemIdentification;
        return $this;
    }

    /**
     * isset manufacturersItemIdentification
     *
     * ASBIE
     *  Item. Manufacturers_ Item Identification. Item Identification
     *  Associates the item with its identification according to the manufacturer's system.
     *  0..n
     *  Item
     *  Manufacturers
     *  Item Identification
     *  Item Identification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetManufacturersItemIdentification($index)
    {
        return isset($this->manufacturersItemIdentification[$index]);
    }

    /**
     * unset manufacturersItemIdentification
     *
     * ASBIE
     *  Item. Manufacturers_ Item Identification. Item Identification
     *  Associates the item with its identification according to the manufacturer's system.
     *  0..n
     *  Item
     *  Manufacturers
     *  Item Identification
     *  Item Identification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetManufacturersItemIdentification($index)
    {
        unset($this->manufacturersItemIdentification[$index]);
    }

    /**
     * Gets as manufacturersItemIdentification
     *
     * ASBIE
     *  Item. Manufacturers_ Item Identification. Item Identification
     *  Associates the item with its identification according to the manufacturer's system.
     *  0..n
     *  Item
     *  Manufacturers
     *  Item Identification
     *  Item Identification
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ManufacturersItemIdentification[]
     */
    public function getManufacturersItemIdentification()
    {
        return $this->manufacturersItemIdentification;
    }

    /**
     * Sets a new manufacturersItemIdentification
     *
     * ASBIE
     *  Item. Manufacturers_ Item Identification. Item Identification
     *  Associates the item with its identification according to the manufacturer's system.
     *  0..n
     *  Item
     *  Manufacturers
     *  Item Identification
     *  Item Identification
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ManufacturersItemIdentification[] $manufacturersItemIdentification
     * @return self
     */
    public function setManufacturersItemIdentification(array $manufacturersItemIdentification)
    {
        $this->manufacturersItemIdentification = $manufacturersItemIdentification;
        return $this;
    }

    /**
     * Gets as standardItemIdentification
     *
     * ASBIE
     *  Item. Standard_ Item Identification. Item Identification
     *  Associates the item with its identification according to a standard system.
     *  0..1
     *  Item
     *  Standard
     *  Item Identification
     *  Item Identification
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\StandardItemIdentification
     */
    public function getStandardItemIdentification()
    {
        return $this->standardItemIdentification;
    }

    /**
     * Sets a new standardItemIdentification
     *
     * ASBIE
     *  Item. Standard_ Item Identification. Item Identification
     *  Associates the item with its identification according to a standard system.
     *  0..1
     *  Item
     *  Standard
     *  Item Identification
     *  Item Identification
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\StandardItemIdentification $standardItemIdentification
     * @return self
     */
    public function setStandardItemIdentification(\NOKA\PHPUBL\UBL\Common\AggregateComponents\StandardItemIdentification $standardItemIdentification)
    {
        $this->standardItemIdentification = $standardItemIdentification;
        return $this;
    }

    /**
     * Gets as catalogueItemIdentification
     *
     * ASBIE
     *  Item. Catalogue_ Item Identification. Item Identification
     *  Associates the item with its identification according to a cataloguing system.
     *  0..1
     *  Item
     *  Catalogue
     *  Item Identification
     *  Item Identification
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\CatalogueItemIdentification
     */
    public function getCatalogueItemIdentification()
    {
        return $this->catalogueItemIdentification;
    }

    /**
     * Sets a new catalogueItemIdentification
     *
     * ASBIE
     *  Item. Catalogue_ Item Identification. Item Identification
     *  Associates the item with its identification according to a cataloguing system.
     *  0..1
     *  Item
     *  Catalogue
     *  Item Identification
     *  Item Identification
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\CatalogueItemIdentification $catalogueItemIdentification
     * @return self
     */
    public function setCatalogueItemIdentification(\NOKA\PHPUBL\UBL\Common\AggregateComponents\CatalogueItemIdentification $catalogueItemIdentification)
    {
        $this->catalogueItemIdentification = $catalogueItemIdentification;
        return $this;
    }

    /**
     * Adds as additionalItemIdentification
     *
     * ASBIE
     *  Item. Additional_ Item Identification. Item Identification
     *  Associates the item with other identification means.
     *  0..n
     *  Item
     *  Additional
     *  Item Identification
     *  Item Identification
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\AdditionalItemIdentification $additionalItemIdentification
     */
    public function addToAdditionalItemIdentification(\NOKA\PHPUBL\UBL\Common\AggregateComponents\AdditionalItemIdentification $additionalItemIdentification)
    {
        $this->additionalItemIdentification[] = $additionalItemIdentification;
        return $this;
    }

    /**
     * isset additionalItemIdentification
     *
     * ASBIE
     *  Item. Additional_ Item Identification. Item Identification
     *  Associates the item with other identification means.
     *  0..n
     *  Item
     *  Additional
     *  Item Identification
     *  Item Identification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalItemIdentification($index)
    {
        return isset($this->additionalItemIdentification[$index]);
    }

    /**
     * unset additionalItemIdentification
     *
     * ASBIE
     *  Item. Additional_ Item Identification. Item Identification
     *  Associates the item with other identification means.
     *  0..n
     *  Item
     *  Additional
     *  Item Identification
     *  Item Identification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalItemIdentification($index)
    {
        unset($this->additionalItemIdentification[$index]);
    }

    /**
     * Gets as additionalItemIdentification
     *
     * ASBIE
     *  Item. Additional_ Item Identification. Item Identification
     *  Associates the item with other identification means.
     *  0..n
     *  Item
     *  Additional
     *  Item Identification
     *  Item Identification
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\AdditionalItemIdentification[]
     */
    public function getAdditionalItemIdentification()
    {
        return $this->additionalItemIdentification;
    }

    /**
     * Sets a new additionalItemIdentification
     *
     * ASBIE
     *  Item. Additional_ Item Identification. Item Identification
     *  Associates the item with other identification means.
     *  0..n
     *  Item
     *  Additional
     *  Item Identification
     *  Item Identification
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\AdditionalItemIdentification[] $additionalItemIdentification
     * @return self
     */
    public function setAdditionalItemIdentification(array $additionalItemIdentification)
    {
        $this->additionalItemIdentification = $additionalItemIdentification;
        return $this;
    }

    /**
     * Gets as catalogueDocumentReference
     *
     * ASBIE
     *  Item. Catalogue_ Document Reference. Document Reference
     *  An associative reference to Catalogue.
     *  0..1
     *  Item
     *  Catalogue
     *  Document Reference
     *  Document Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\CatalogueDocumentReference
     */
    public function getCatalogueDocumentReference()
    {
        return $this->catalogueDocumentReference;
    }

    /**
     * Sets a new catalogueDocumentReference
     *
     * ASBIE
     *  Item. Catalogue_ Document Reference. Document Reference
     *  An associative reference to Catalogue.
     *  0..1
     *  Item
     *  Catalogue
     *  Document Reference
     *  Document Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\CatalogueDocumentReference $catalogueDocumentReference
     * @return self
     */
    public function setCatalogueDocumentReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\CatalogueDocumentReference $catalogueDocumentReference)
    {
        $this->catalogueDocumentReference = $catalogueDocumentReference;
        return $this;
    }

    /**
     * Adds as itemSpecificationDocumentReference
     *
     * ASBIE
     *  Item. Item Specification_ Document Reference. Document Reference
     *  An associative reference to a document providing Item specification.
     *  0..n
     *  Item
     *  Item Specification
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ItemSpecificationDocumentReference $itemSpecificationDocumentReference
     */
    public function addToItemSpecificationDocumentReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ItemSpecificationDocumentReference $itemSpecificationDocumentReference)
    {
        $this->itemSpecificationDocumentReference[] = $itemSpecificationDocumentReference;
        return $this;
    }

    /**
     * isset itemSpecificationDocumentReference
     *
     * ASBIE
     *  Item. Item Specification_ Document Reference. Document Reference
     *  An associative reference to a document providing Item specification.
     *  0..n
     *  Item
     *  Item Specification
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemSpecificationDocumentReference($index)
    {
        return isset($this->itemSpecificationDocumentReference[$index]);
    }

    /**
     * unset itemSpecificationDocumentReference
     *
     * ASBIE
     *  Item. Item Specification_ Document Reference. Document Reference
     *  An associative reference to a document providing Item specification.
     *  0..n
     *  Item
     *  Item Specification
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemSpecificationDocumentReference($index)
    {
        unset($this->itemSpecificationDocumentReference[$index]);
    }

    /**
     * Gets as itemSpecificationDocumentReference
     *
     * ASBIE
     *  Item. Item Specification_ Document Reference. Document Reference
     *  An associative reference to a document providing Item specification.
     *  0..n
     *  Item
     *  Item Specification
     *  Document Reference
     *  Document Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ItemSpecificationDocumentReference[]
     */
    public function getItemSpecificationDocumentReference()
    {
        return $this->itemSpecificationDocumentReference;
    }

    /**
     * Sets a new itemSpecificationDocumentReference
     *
     * ASBIE
     *  Item. Item Specification_ Document Reference. Document Reference
     *  An associative reference to a document providing Item specification.
     *  0..n
     *  Item
     *  Item Specification
     *  Document Reference
     *  Document Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ItemSpecificationDocumentReference[] $itemSpecificationDocumentReference
     * @return self
     */
    public function setItemSpecificationDocumentReference(array $itemSpecificationDocumentReference)
    {
        $this->itemSpecificationDocumentReference = $itemSpecificationDocumentReference;
        return $this;
    }

    /**
     * Gets as originCountry
     *
     * ASBIE
     *  Item. Origin_ Country. Country
     *  Associates the item with its country of origin.
     *  0..1
     *  Item
     *  Origin
     *  Country
     *  Country
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginCountry
     */
    public function getOriginCountry()
    {
        return $this->originCountry;
    }

    /**
     * Sets a new originCountry
     *
     * ASBIE
     *  Item. Origin_ Country. Country
     *  Associates the item with its country of origin.
     *  0..1
     *  Item
     *  Origin
     *  Country
     *  Country
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginCountry $originCountry
     * @return self
     */
    public function setOriginCountry(\NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginCountry $originCountry)
    {
        $this->originCountry = $originCountry;
        return $this;
    }

    /**
     * Adds as commodityClassification
     *
     * ASBIE
     *  Item. Commodity Classification
     *  Associates the item with its classification(s) according to a commodity classifying system.
     *  0..n
     *  Item
     *  Commodity Classification
     *  Commodity Classification
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\CommodityClassification $commodityClassification
     */
    public function addToCommodityClassification(\NOKA\PHPUBL\UBL\Common\AggregateComponents\CommodityClassification $commodityClassification)
    {
        $this->commodityClassification[] = $commodityClassification;
        return $this;
    }

    /**
     * isset commodityClassification
     *
     * ASBIE
     *  Item. Commodity Classification
     *  Associates the item with its classification(s) according to a commodity classifying system.
     *  0..n
     *  Item
     *  Commodity Classification
     *  Commodity Classification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCommodityClassification($index)
    {
        return isset($this->commodityClassification[$index]);
    }

    /**
     * unset commodityClassification
     *
     * ASBIE
     *  Item. Commodity Classification
     *  Associates the item with its classification(s) according to a commodity classifying system.
     *  0..n
     *  Item
     *  Commodity Classification
     *  Commodity Classification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCommodityClassification($index)
    {
        unset($this->commodityClassification[$index]);
    }

    /**
     * Gets as commodityClassification
     *
     * ASBIE
     *  Item. Commodity Classification
     *  Associates the item with its classification(s) according to a commodity classifying system.
     *  0..n
     *  Item
     *  Commodity Classification
     *  Commodity Classification
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\CommodityClassification[]
     */
    public function getCommodityClassification()
    {
        return $this->commodityClassification;
    }

    /**
     * Sets a new commodityClassification
     *
     * ASBIE
     *  Item. Commodity Classification
     *  Associates the item with its classification(s) according to a commodity classifying system.
     *  0..n
     *  Item
     *  Commodity Classification
     *  Commodity Classification
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\CommodityClassification[] $commodityClassification
     * @return self
     */
    public function setCommodityClassification(array $commodityClassification)
    {
        $this->commodityClassification = $commodityClassification;
        return $this;
    }

    /**
     * Adds as transactionConditions
     *
     * ASBIE
     *  Item. Transaction Conditions
     *  Associates the item with sales conditions appertaining to it.
     *  0..n
     *  Item
     *  Transaction Conditions
     *  Transaction Conditions
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransactionConditions $transactionConditions
     */
    public function addToTransactionConditions(\NOKA\PHPUBL\UBL\Common\AggregateComponents\TransactionConditions $transactionConditions)
    {
        $this->transactionConditions[] = $transactionConditions;
        return $this;
    }

    /**
     * isset transactionConditions
     *
     * ASBIE
     *  Item. Transaction Conditions
     *  Associates the item with sales conditions appertaining to it.
     *  0..n
     *  Item
     *  Transaction Conditions
     *  Transaction Conditions
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransactionConditions($index)
    {
        return isset($this->transactionConditions[$index]);
    }

    /**
     * unset transactionConditions
     *
     * ASBIE
     *  Item. Transaction Conditions
     *  Associates the item with sales conditions appertaining to it.
     *  0..n
     *  Item
     *  Transaction Conditions
     *  Transaction Conditions
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransactionConditions($index)
    {
        unset($this->transactionConditions[$index]);
    }

    /**
     * Gets as transactionConditions
     *
     * ASBIE
     *  Item. Transaction Conditions
     *  Associates the item with sales conditions appertaining to it.
     *  0..n
     *  Item
     *  Transaction Conditions
     *  Transaction Conditions
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransactionConditions[]
     */
    public function getTransactionConditions()
    {
        return $this->transactionConditions;
    }

    /**
     * Sets a new transactionConditions
     *
     * ASBIE
     *  Item. Transaction Conditions
     *  Associates the item with sales conditions appertaining to it.
     *  0..n
     *  Item
     *  Transaction Conditions
     *  Transaction Conditions
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransactionConditions[] $transactionConditions
     * @return self
     */
    public function setTransactionConditions(array $transactionConditions)
    {
        $this->transactionConditions = $transactionConditions;
        return $this;
    }

    /**
     * Adds as hazardousItem
     *
     * ASBIE
     *  Item. Hazardous Item
     *  Associates the item with its hazardous item information.
     *  0..n
     *  Item
     *  Hazardous Item
     *  Hazardous Item
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\HazardousItem $hazardousItem
     */
    public function addToHazardousItem(\NOKA\PHPUBL\UBL\Common\AggregateComponents\HazardousItem $hazardousItem)
    {
        $this->hazardousItem[] = $hazardousItem;
        return $this;
    }

    /**
     * isset hazardousItem
     *
     * ASBIE
     *  Item. Hazardous Item
     *  Associates the item with its hazardous item information.
     *  0..n
     *  Item
     *  Hazardous Item
     *  Hazardous Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHazardousItem($index)
    {
        return isset($this->hazardousItem[$index]);
    }

    /**
     * unset hazardousItem
     *
     * ASBIE
     *  Item. Hazardous Item
     *  Associates the item with its hazardous item information.
     *  0..n
     *  Item
     *  Hazardous Item
     *  Hazardous Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHazardousItem($index)
    {
        unset($this->hazardousItem[$index]);
    }

    /**
     * Gets as hazardousItem
     *
     * ASBIE
     *  Item. Hazardous Item
     *  Associates the item with its hazardous item information.
     *  0..n
     *  Item
     *  Hazardous Item
     *  Hazardous Item
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\HazardousItem[]
     */
    public function getHazardousItem()
    {
        return $this->hazardousItem;
    }

    /**
     * Sets a new hazardousItem
     *
     * ASBIE
     *  Item. Hazardous Item
     *  Associates the item with its hazardous item information.
     *  0..n
     *  Item
     *  Hazardous Item
     *  Hazardous Item
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\HazardousItem[] $hazardousItem
     * @return self
     */
    public function setHazardousItem(array $hazardousItem)
    {
        $this->hazardousItem = $hazardousItem;
        return $this;
    }

    /**
     * Adds as classifiedTaxCategory
     *
     * ASBIE
     *  Item. Classified_ Tax Category. Tax Category
     *  Classifies the item using one or more categories of taxes.
     *  0..n
     *  Item
     *  Classified
     *  Tax Category
     *  Tax Category
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ClassifiedTaxCategory $classifiedTaxCategory
     */
    public function addToClassifiedTaxCategory(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ClassifiedTaxCategory $classifiedTaxCategory)
    {
        $this->classifiedTaxCategory[] = $classifiedTaxCategory;
        return $this;
    }

    /**
     * isset classifiedTaxCategory
     *
     * ASBIE
     *  Item. Classified_ Tax Category. Tax Category
     *  Classifies the item using one or more categories of taxes.
     *  0..n
     *  Item
     *  Classified
     *  Tax Category
     *  Tax Category
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClassifiedTaxCategory($index)
    {
        return isset($this->classifiedTaxCategory[$index]);
    }

    /**
     * unset classifiedTaxCategory
     *
     * ASBIE
     *  Item. Classified_ Tax Category. Tax Category
     *  Classifies the item using one or more categories of taxes.
     *  0..n
     *  Item
     *  Classified
     *  Tax Category
     *  Tax Category
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClassifiedTaxCategory($index)
    {
        unset($this->classifiedTaxCategory[$index]);
    }

    /**
     * Gets as classifiedTaxCategory
     *
     * ASBIE
     *  Item. Classified_ Tax Category. Tax Category
     *  Classifies the item using one or more categories of taxes.
     *  0..n
     *  Item
     *  Classified
     *  Tax Category
     *  Tax Category
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ClassifiedTaxCategory[]
     */
    public function getClassifiedTaxCategory()
    {
        return $this->classifiedTaxCategory;
    }

    /**
     * Sets a new classifiedTaxCategory
     *
     * ASBIE
     *  Item. Classified_ Tax Category. Tax Category
     *  Classifies the item using one or more categories of taxes.
     *  0..n
     *  Item
     *  Classified
     *  Tax Category
     *  Tax Category
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ClassifiedTaxCategory[] $classifiedTaxCategory
     * @return self
     */
    public function setClassifiedTaxCategory(array $classifiedTaxCategory)
    {
        $this->classifiedTaxCategory = $classifiedTaxCategory;
        return $this;
    }

    /**
     * Adds as additionalItemProperty
     *
     * ASBIE
     *  Item. Additional_ Item Property. Item Property
     *  Associates the item with a set of additional properties.
     *  0..n
     *  Item
     *  Additional
     *  Item Property
     *  Item Property
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\AdditionalItemProperty $additionalItemProperty
     */
    public function addToAdditionalItemProperty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\AdditionalItemProperty $additionalItemProperty)
    {
        $this->additionalItemProperty[] = $additionalItemProperty;
        return $this;
    }

    /**
     * isset additionalItemProperty
     *
     * ASBIE
     *  Item. Additional_ Item Property. Item Property
     *  Associates the item with a set of additional properties.
     *  0..n
     *  Item
     *  Additional
     *  Item Property
     *  Item Property
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalItemProperty($index)
    {
        return isset($this->additionalItemProperty[$index]);
    }

    /**
     * unset additionalItemProperty
     *
     * ASBIE
     *  Item. Additional_ Item Property. Item Property
     *  Associates the item with a set of additional properties.
     *  0..n
     *  Item
     *  Additional
     *  Item Property
     *  Item Property
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalItemProperty($index)
    {
        unset($this->additionalItemProperty[$index]);
    }

    /**
     * Gets as additionalItemProperty
     *
     * ASBIE
     *  Item. Additional_ Item Property. Item Property
     *  Associates the item with a set of additional properties.
     *  0..n
     *  Item
     *  Additional
     *  Item Property
     *  Item Property
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\AdditionalItemProperty[]
     */
    public function getAdditionalItemProperty()
    {
        return $this->additionalItemProperty;
    }

    /**
     * Sets a new additionalItemProperty
     *
     * ASBIE
     *  Item. Additional_ Item Property. Item Property
     *  Associates the item with a set of additional properties.
     *  0..n
     *  Item
     *  Additional
     *  Item Property
     *  Item Property
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\AdditionalItemProperty[] $additionalItemProperty
     * @return self
     */
    public function setAdditionalItemProperty(array $additionalItemProperty)
    {
        $this->additionalItemProperty = $additionalItemProperty;
        return $this;
    }

    /**
     * Adds as manufacturerParty
     *
     * ASBIE
     *  Item. Manufacturer_ Party. Party
     *  Associates the item with its manufacturer.
     *  0..n
     *  Item
     *  Manufacturer
     *  Party
     *  Party
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ManufacturerParty $manufacturerParty
     */
    public function addToManufacturerParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ManufacturerParty $manufacturerParty)
    {
        $this->manufacturerParty[] = $manufacturerParty;
        return $this;
    }

    /**
     * isset manufacturerParty
     *
     * ASBIE
     *  Item. Manufacturer_ Party. Party
     *  Associates the item with its manufacturer.
     *  0..n
     *  Item
     *  Manufacturer
     *  Party
     *  Party
     *
     * @param int|string $index
     * @return bool
     */
    public function issetManufacturerParty($index)
    {
        return isset($this->manufacturerParty[$index]);
    }

    /**
     * unset manufacturerParty
     *
     * ASBIE
     *  Item. Manufacturer_ Party. Party
     *  Associates the item with its manufacturer.
     *  0..n
     *  Item
     *  Manufacturer
     *  Party
     *  Party
     *
     * @param int|string $index
     * @return void
     */
    public function unsetManufacturerParty($index)
    {
        unset($this->manufacturerParty[$index]);
    }

    /**
     * Gets as manufacturerParty
     *
     * ASBIE
     *  Item. Manufacturer_ Party. Party
     *  Associates the item with its manufacturer.
     *  0..n
     *  Item
     *  Manufacturer
     *  Party
     *  Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ManufacturerParty[]
     */
    public function getManufacturerParty()
    {
        return $this->manufacturerParty;
    }

    /**
     * Sets a new manufacturerParty
     *
     * ASBIE
     *  Item. Manufacturer_ Party. Party
     *  Associates the item with its manufacturer.
     *  0..n
     *  Item
     *  Manufacturer
     *  Party
     *  Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ManufacturerParty[] $manufacturerParty
     * @return self
     */
    public function setManufacturerParty(array $manufacturerParty)
    {
        $this->manufacturerParty = $manufacturerParty;
        return $this;
    }

    /**
     * Gets as informationContentProviderParty
     *
     * ASBIE
     *  Item. Information Content Provider_ Party. Party
     *  Associates the item with the party responsible for the its specification.
     *  0..1
     *  Item
     *  Information Content Provider
     *  Party
     *  Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\InformationContentProviderParty
     */
    public function getInformationContentProviderParty()
    {
        return $this->informationContentProviderParty;
    }

    /**
     * Sets a new informationContentProviderParty
     *
     * ASBIE
     *  Item. Information Content Provider_ Party. Party
     *  Associates the item with the party responsible for the its specification.
     *  0..1
     *  Item
     *  Information Content Provider
     *  Party
     *  Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\InformationContentProviderParty $informationContentProviderParty
     * @return self
     */
    public function setInformationContentProviderParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\InformationContentProviderParty $informationContentProviderParty)
    {
        $this->informationContentProviderParty = $informationContentProviderParty;
        return $this;
    }

    /**
     * Adds as originAddress
     *
     * ASBIE
     *  Item. Origin_ Address. Address
     *  Associates the item with the region of origin (not the country).
     *  0..n
     *  Item
     *  Origin
     *  Address
     *  Address
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginAddress $originAddress
     */
    public function addToOriginAddress(\NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginAddress $originAddress)
    {
        $this->originAddress[] = $originAddress;
        return $this;
    }

    /**
     * isset originAddress
     *
     * ASBIE
     *  Item. Origin_ Address. Address
     *  Associates the item with the region of origin (not the country).
     *  0..n
     *  Item
     *  Origin
     *  Address
     *  Address
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOriginAddress($index)
    {
        return isset($this->originAddress[$index]);
    }

    /**
     * unset originAddress
     *
     * ASBIE
     *  Item. Origin_ Address. Address
     *  Associates the item with the region of origin (not the country).
     *  0..n
     *  Item
     *  Origin
     *  Address
     *  Address
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOriginAddress($index)
    {
        unset($this->originAddress[$index]);
    }

    /**
     * Gets as originAddress
     *
     * ASBIE
     *  Item. Origin_ Address. Address
     *  Associates the item with the region of origin (not the country).
     *  0..n
     *  Item
     *  Origin
     *  Address
     *  Address
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginAddress[]
     */
    public function getOriginAddress()
    {
        return $this->originAddress;
    }

    /**
     * Sets a new originAddress
     *
     * ASBIE
     *  Item. Origin_ Address. Address
     *  Associates the item with the region of origin (not the country).
     *  0..n
     *  Item
     *  Origin
     *  Address
     *  Address
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginAddress[] $originAddress
     * @return self
     */
    public function setOriginAddress(array $originAddress)
    {
        $this->originAddress = $originAddress;
        return $this;
    }

    /**
     * Adds as itemInstance
     *
     * ASBIE
     *  Item. Item Instance
     *  An association to Item Instance.
     *  0..n
     *  Item
     *  Item Instance
     *  Item Instance
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ItemInstance $itemInstance
     */
    public function addToItemInstance(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ItemInstance $itemInstance)
    {
        $this->itemInstance[] = $itemInstance;
        return $this;
    }

    /**
     * isset itemInstance
     *
     * ASBIE
     *  Item. Item Instance
     *  An association to Item Instance.
     *  0..n
     *  Item
     *  Item Instance
     *  Item Instance
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemInstance($index)
    {
        return isset($this->itemInstance[$index]);
    }

    /**
     * unset itemInstance
     *
     * ASBIE
     *  Item. Item Instance
     *  An association to Item Instance.
     *  0..n
     *  Item
     *  Item Instance
     *  Item Instance
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemInstance($index)
    {
        unset($this->itemInstance[$index]);
    }

    /**
     * Gets as itemInstance
     *
     * ASBIE
     *  Item. Item Instance
     *  An association to Item Instance.
     *  0..n
     *  Item
     *  Item Instance
     *  Item Instance
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ItemInstance[]
     */
    public function getItemInstance()
    {
        return $this->itemInstance;
    }

    /**
     * Sets a new itemInstance
     *
     * ASBIE
     *  Item. Item Instance
     *  An association to Item Instance.
     *  0..n
     *  Item
     *  Item Instance
     *  Item Instance
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ItemInstance[] $itemInstance
     * @return self
     */
    public function setItemInstance(array $itemInstance)
    {
        $this->itemInstance = $itemInstance;
        return $this;
    }


}

