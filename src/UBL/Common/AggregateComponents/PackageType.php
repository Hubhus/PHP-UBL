<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing PackageType
 *
 * ABIE
 *  Package. Details
 *  Information about a package.
 *  Package
 * XSD Type: PackageType
 */
class PackageType
{

    /**
     * BBIE
     *  Package. Identifier
     *  Identifies the package.
     *  0..1
     *  Package
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Package. Quantity
     *  The quantity (of items) contained in the package.
     *  0..1
     *  Package
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Quantity $quantity
     */
    private $quantity = null;

    /**
     * BBIE
     *  Package. Returnable Material_ Indicator. Indicator
     *  Indicates whether the packaging material is returnable (true) or not (false).
     *  0..1
     *  Package
     *  Returnable Material
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $returnableMaterialIndicator
     */
    private $returnableMaterialIndicator = null;

    /**
     * BBIE
     *  Package. Package Level Code. Code
     *  Code specifying a level of packaging.
     *  0..1
     *  Package
     *  Package Level Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\PackageLevelCode $packageLevelCode
     */
    private $packageLevelCode = null;

    /**
     * BBIE
     *  Package. Packaging Type Code. Code
     *  Code specifying the type of packaging of an item.
     *  0..1
     *  Package
     *  Packaging Type Code
     *  Code
     *  Packaging Type_ Code. Type
     *  Package classification code
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\PackagingTypeCode $packagingTypeCode
     */
    private $packagingTypeCode = null;

    /**
     * BBIE
     *  Package. Packing Material. Text
     *  Description of the type of packaging of an item.
     *  0..n
     *  Package
     *  Packing Material
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\PackingMaterial[] $packingMaterial
     */
    private $packingMaterial = [
        
    ];

    /**
     * ASBIE
     *  Package. Contained_ Package. Package
     *  An association to Contained Package; used to describe a package within a package.
     *  0..n
     *  Package
     *  Contained
     *  Package
     *  Package
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ContainedPackage[] $containedPackage
     */
    private $containedPackage = [
        
    ];

    /**
     * ASBIE
     *  Package. Goods Item
     *  An association to Goods Item.
     *  0..n
     *  Package
     *  Goods Item
     *  Goods Item
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\GoodsItem[] $goodsItem
     */
    private $goodsItem = [
        
    ];

    /**
     * ASBIE
     *  Package. Measurement_ Dimension. Dimension
     *  An association to describe the measurement dimensions of the package.
     *  0..n
     *  Package
     *  Measurement
     *  Dimension
     *  Dimension
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\MeasurementDimension[] $measurementDimension
     */
    private $measurementDimension = [
        
    ];

    /**
     * ASBIE
     *  Package. Delivery Unit
     *  An association to Delivery Units in the package.
     *  0..n
     *  Package
     *  Delivery Unit
     *  Delivery Unit
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryUnit[] $deliveryUnit
     */
    private $deliveryUnit = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Package. Identifier
     *  Identifies the package.
     *  0..1
     *  Package
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
     *  Package. Identifier
     *  Identifies the package.
     *  0..1
     *  Package
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
     * Gets as quantity
     *
     * BBIE
     *  Package. Quantity
     *  The quantity (of items) contained in the package.
     *  0..1
     *  Package
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
     *  Package. Quantity
     *  The quantity (of items) contained in the package.
     *  0..1
     *  Package
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
     * Gets as returnableMaterialIndicator
     *
     * BBIE
     *  Package. Returnable Material_ Indicator. Indicator
     *  Indicates whether the packaging material is returnable (true) or not (false).
     *  0..1
     *  Package
     *  Returnable Material
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getReturnableMaterialIndicator()
    {
        return $this->returnableMaterialIndicator;
    }

    /**
     * Sets a new returnableMaterialIndicator
     *
     * BBIE
     *  Package. Returnable Material_ Indicator. Indicator
     *  Indicates whether the packaging material is returnable (true) or not (false).
     *  0..1
     *  Package
     *  Returnable Material
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $returnableMaterialIndicator
     * @return self
     */
    public function setReturnableMaterialIndicator($returnableMaterialIndicator)
    {
        $this->returnableMaterialIndicator = $returnableMaterialIndicator;
        return $this;
    }

    /**
     * Gets as packageLevelCode
     *
     * BBIE
     *  Package. Package Level Code. Code
     *  Code specifying a level of packaging.
     *  0..1
     *  Package
     *  Package Level Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\PackageLevelCode
     */
    public function getPackageLevelCode()
    {
        return $this->packageLevelCode;
    }

    /**
     * Sets a new packageLevelCode
     *
     * BBIE
     *  Package. Package Level Code. Code
     *  Code specifying a level of packaging.
     *  0..1
     *  Package
     *  Package Level Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\PackageLevelCode $packageLevelCode
     * @return self
     */
    public function setPackageLevelCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\PackageLevelCode $packageLevelCode)
    {
        $this->packageLevelCode = $packageLevelCode;
        return $this;
    }

    /**
     * Gets as packagingTypeCode
     *
     * BBIE
     *  Package. Packaging Type Code. Code
     *  Code specifying the type of packaging of an item.
     *  0..1
     *  Package
     *  Packaging Type Code
     *  Code
     *  Packaging Type_ Code. Type
     *  Package classification code
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\PackagingTypeCode
     */
    public function getPackagingTypeCode()
    {
        return $this->packagingTypeCode;
    }

    /**
     * Sets a new packagingTypeCode
     *
     * BBIE
     *  Package. Packaging Type Code. Code
     *  Code specifying the type of packaging of an item.
     *  0..1
     *  Package
     *  Packaging Type Code
     *  Code
     *  Packaging Type_ Code. Type
     *  Package classification code
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\PackagingTypeCode $packagingTypeCode
     * @return self
     */
    public function setPackagingTypeCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\PackagingTypeCode $packagingTypeCode)
    {
        $this->packagingTypeCode = $packagingTypeCode;
        return $this;
    }

    /**
     * Adds as packingMaterial
     *
     * BBIE
     *  Package. Packing Material. Text
     *  Description of the type of packaging of an item.
     *  0..n
     *  Package
     *  Packing Material
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\PackingMaterial $packingMaterial
     */
    public function addToPackingMaterial(\NOKA\PHPUBL\UBL\Common\BasicComponents\PackingMaterial $packingMaterial)
    {
        $this->packingMaterial[] = $packingMaterial;
        return $this;
    }

    /**
     * isset packingMaterial
     *
     * BBIE
     *  Package. Packing Material. Text
     *  Description of the type of packaging of an item.
     *  0..n
     *  Package
     *  Packing Material
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackingMaterial($index)
    {
        return isset($this->packingMaterial[$index]);
    }

    /**
     * unset packingMaterial
     *
     * BBIE
     *  Package. Packing Material. Text
     *  Description of the type of packaging of an item.
     *  0..n
     *  Package
     *  Packing Material
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackingMaterial($index)
    {
        unset($this->packingMaterial[$index]);
    }

    /**
     * Gets as packingMaterial
     *
     * BBIE
     *  Package. Packing Material. Text
     *  Description of the type of packaging of an item.
     *  0..n
     *  Package
     *  Packing Material
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\PackingMaterial[]
     */
    public function getPackingMaterial()
    {
        return $this->packingMaterial;
    }

    /**
     * Sets a new packingMaterial
     *
     * BBIE
     *  Package. Packing Material. Text
     *  Description of the type of packaging of an item.
     *  0..n
     *  Package
     *  Packing Material
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\PackingMaterial[] $packingMaterial
     * @return self
     */
    public function setPackingMaterial(array $packingMaterial)
    {
        $this->packingMaterial = $packingMaterial;
        return $this;
    }

    /**
     * Adds as containedPackage
     *
     * ASBIE
     *  Package. Contained_ Package. Package
     *  An association to Contained Package; used to describe a package within a package.
     *  0..n
     *  Package
     *  Contained
     *  Package
     *  Package
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ContainedPackage $containedPackage
     */
    public function addToContainedPackage(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ContainedPackage $containedPackage)
    {
        $this->containedPackage[] = $containedPackage;
        return $this;
    }

    /**
     * isset containedPackage
     *
     * ASBIE
     *  Package. Contained_ Package. Package
     *  An association to Contained Package; used to describe a package within a package.
     *  0..n
     *  Package
     *  Contained
     *  Package
     *  Package
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContainedPackage($index)
    {
        return isset($this->containedPackage[$index]);
    }

    /**
     * unset containedPackage
     *
     * ASBIE
     *  Package. Contained_ Package. Package
     *  An association to Contained Package; used to describe a package within a package.
     *  0..n
     *  Package
     *  Contained
     *  Package
     *  Package
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContainedPackage($index)
    {
        unset($this->containedPackage[$index]);
    }

    /**
     * Gets as containedPackage
     *
     * ASBIE
     *  Package. Contained_ Package. Package
     *  An association to Contained Package; used to describe a package within a package.
     *  0..n
     *  Package
     *  Contained
     *  Package
     *  Package
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ContainedPackage[]
     */
    public function getContainedPackage()
    {
        return $this->containedPackage;
    }

    /**
     * Sets a new containedPackage
     *
     * ASBIE
     *  Package. Contained_ Package. Package
     *  An association to Contained Package; used to describe a package within a package.
     *  0..n
     *  Package
     *  Contained
     *  Package
     *  Package
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ContainedPackage[] $containedPackage
     * @return self
     */
    public function setContainedPackage(array $containedPackage)
    {
        $this->containedPackage = $containedPackage;
        return $this;
    }

    /**
     * Adds as goodsItem
     *
     * ASBIE
     *  Package. Goods Item
     *  An association to Goods Item.
     *  0..n
     *  Package
     *  Goods Item
     *  Goods Item
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\GoodsItem $goodsItem
     */
    public function addToGoodsItem(\NOKA\PHPUBL\UBL\Common\AggregateComponents\GoodsItem $goodsItem)
    {
        $this->goodsItem[] = $goodsItem;
        return $this;
    }

    /**
     * isset goodsItem
     *
     * ASBIE
     *  Package. Goods Item
     *  An association to Goods Item.
     *  0..n
     *  Package
     *  Goods Item
     *  Goods Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGoodsItem($index)
    {
        return isset($this->goodsItem[$index]);
    }

    /**
     * unset goodsItem
     *
     * ASBIE
     *  Package. Goods Item
     *  An association to Goods Item.
     *  0..n
     *  Package
     *  Goods Item
     *  Goods Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGoodsItem($index)
    {
        unset($this->goodsItem[$index]);
    }

    /**
     * Gets as goodsItem
     *
     * ASBIE
     *  Package. Goods Item
     *  An association to Goods Item.
     *  0..n
     *  Package
     *  Goods Item
     *  Goods Item
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\GoodsItem[]
     */
    public function getGoodsItem()
    {
        return $this->goodsItem;
    }

    /**
     * Sets a new goodsItem
     *
     * ASBIE
     *  Package. Goods Item
     *  An association to Goods Item.
     *  0..n
     *  Package
     *  Goods Item
     *  Goods Item
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\GoodsItem[] $goodsItem
     * @return self
     */
    public function setGoodsItem(array $goodsItem)
    {
        $this->goodsItem = $goodsItem;
        return $this;
    }

    /**
     * Adds as measurementDimension
     *
     * ASBIE
     *  Package. Measurement_ Dimension. Dimension
     *  An association to describe the measurement dimensions of the package.
     *  0..n
     *  Package
     *  Measurement
     *  Dimension
     *  Dimension
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\MeasurementDimension $measurementDimension
     */
    public function addToMeasurementDimension(\NOKA\PHPUBL\UBL\Common\AggregateComponents\MeasurementDimension $measurementDimension)
    {
        $this->measurementDimension[] = $measurementDimension;
        return $this;
    }

    /**
     * isset measurementDimension
     *
     * ASBIE
     *  Package. Measurement_ Dimension. Dimension
     *  An association to describe the measurement dimensions of the package.
     *  0..n
     *  Package
     *  Measurement
     *  Dimension
     *  Dimension
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMeasurementDimension($index)
    {
        return isset($this->measurementDimension[$index]);
    }

    /**
     * unset measurementDimension
     *
     * ASBIE
     *  Package. Measurement_ Dimension. Dimension
     *  An association to describe the measurement dimensions of the package.
     *  0..n
     *  Package
     *  Measurement
     *  Dimension
     *  Dimension
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMeasurementDimension($index)
    {
        unset($this->measurementDimension[$index]);
    }

    /**
     * Gets as measurementDimension
     *
     * ASBIE
     *  Package. Measurement_ Dimension. Dimension
     *  An association to describe the measurement dimensions of the package.
     *  0..n
     *  Package
     *  Measurement
     *  Dimension
     *  Dimension
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\MeasurementDimension[]
     */
    public function getMeasurementDimension()
    {
        return $this->measurementDimension;
    }

    /**
     * Sets a new measurementDimension
     *
     * ASBIE
     *  Package. Measurement_ Dimension. Dimension
     *  An association to describe the measurement dimensions of the package.
     *  0..n
     *  Package
     *  Measurement
     *  Dimension
     *  Dimension
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\MeasurementDimension[] $measurementDimension
     * @return self
     */
    public function setMeasurementDimension(array $measurementDimension)
    {
        $this->measurementDimension = $measurementDimension;
        return $this;
    }

    /**
     * Adds as deliveryUnit
     *
     * ASBIE
     *  Package. Delivery Unit
     *  An association to Delivery Units in the package.
     *  0..n
     *  Package
     *  Delivery Unit
     *  Delivery Unit
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryUnit $deliveryUnit
     */
    public function addToDeliveryUnit(\NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryUnit $deliveryUnit)
    {
        $this->deliveryUnit[] = $deliveryUnit;
        return $this;
    }

    /**
     * isset deliveryUnit
     *
     * ASBIE
     *  Package. Delivery Unit
     *  An association to Delivery Units in the package.
     *  0..n
     *  Package
     *  Delivery Unit
     *  Delivery Unit
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeliveryUnit($index)
    {
        return isset($this->deliveryUnit[$index]);
    }

    /**
     * unset deliveryUnit
     *
     * ASBIE
     *  Package. Delivery Unit
     *  An association to Delivery Units in the package.
     *  0..n
     *  Package
     *  Delivery Unit
     *  Delivery Unit
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeliveryUnit($index)
    {
        unset($this->deliveryUnit[$index]);
    }

    /**
     * Gets as deliveryUnit
     *
     * ASBIE
     *  Package. Delivery Unit
     *  An association to Delivery Units in the package.
     *  0..n
     *  Package
     *  Delivery Unit
     *  Delivery Unit
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryUnit[]
     */
    public function getDeliveryUnit()
    {
        return $this->deliveryUnit;
    }

    /**
     * Sets a new deliveryUnit
     *
     * ASBIE
     *  Package. Delivery Unit
     *  An association to Delivery Units in the package.
     *  0..n
     *  Package
     *  Delivery Unit
     *  Delivery Unit
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryUnit[] $deliveryUnit
     * @return self
     */
    public function setDeliveryUnit(array $deliveryUnit)
    {
        $this->deliveryUnit = $deliveryUnit;
        return $this;
    }


}

