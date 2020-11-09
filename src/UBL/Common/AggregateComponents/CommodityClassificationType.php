<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing CommodityClassificationType
 *
 * ABIE
 *  Commodity Classification. Details
 *  Information about Commodity Classification.
 *  Commodity Classification
 * XSD Type: CommodityClassificationType
 */
class CommodityClassificationType
{

    /**
     * BBIE
     *  Commodity Classification. Nature Code. Code
     *  The high-level nature of the Classification issued by a specific maintenance agency, expressed as a code.
     *  0..1
     *  Commodity Classification
     *  Nature Code
     *  Code
     *  Code. Type
     *  "wooden products"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\NatureCode $natureCode
     */
    private $natureCode = null;

    /**
     * BBIE
     *  Commodity Classification. Cargo Type Code. Code
     *  The type of cargo, expressed as a code.
     *  0..1
     *  Commodity Classification
     *  Cargo Type Code
     *  Code
     *  Code. Type
     *  "Refrigerated"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\CargoTypeCode $cargoTypeCode
     */
    private $cargoTypeCode = null;

    /**
     * BBIE
     *  Commodity Classification. Commodity Code. Code
     *  The harmonized international commodity code for regulatory (customs and trade statistics) purposes.
     *  0..1
     *  Commodity Classification
     *  Commodity Code
     *  Code
     *  Code. Type
     *  Harmonized Code
     *  "1102222883"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\CommodityCode $commodityCode
     */
    private $commodityCode = null;

    /**
     * BBIE
     *  Commodity Classification. Item Classification Code. Code
     *  The trade commodity classification, expressed as a code.
     *  0..1
     *  Commodity Classification
     *  Item Classification Code
     *  Code
     *  Code. Type
     *  UN/SPSC Code
     *  "3440234"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ItemClassificationCode $itemClassificationCode
     */
    private $itemClassificationCode = null;

    /**
     * Gets as natureCode
     *
     * BBIE
     *  Commodity Classification. Nature Code. Code
     *  The high-level nature of the Classification issued by a specific maintenance agency, expressed as a code.
     *  0..1
     *  Commodity Classification
     *  Nature Code
     *  Code
     *  Code. Type
     *  "wooden products"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\NatureCode
     */
    public function getNatureCode()
    {
        return $this->natureCode;
    }

    /**
     * Sets a new natureCode
     *
     * BBIE
     *  Commodity Classification. Nature Code. Code
     *  The high-level nature of the Classification issued by a specific maintenance agency, expressed as a code.
     *  0..1
     *  Commodity Classification
     *  Nature Code
     *  Code
     *  Code. Type
     *  "wooden products"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\NatureCode $natureCode
     * @return self
     */
    public function setNatureCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\NatureCode $natureCode)
    {
        $this->natureCode = $natureCode;
        return $this;
    }

    /**
     * Gets as cargoTypeCode
     *
     * BBIE
     *  Commodity Classification. Cargo Type Code. Code
     *  The type of cargo, expressed as a code.
     *  0..1
     *  Commodity Classification
     *  Cargo Type Code
     *  Code
     *  Code. Type
     *  "Refrigerated"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\CargoTypeCode
     */
    public function getCargoTypeCode()
    {
        return $this->cargoTypeCode;
    }

    /**
     * Sets a new cargoTypeCode
     *
     * BBIE
     *  Commodity Classification. Cargo Type Code. Code
     *  The type of cargo, expressed as a code.
     *  0..1
     *  Commodity Classification
     *  Cargo Type Code
     *  Code
     *  Code. Type
     *  "Refrigerated"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\CargoTypeCode $cargoTypeCode
     * @return self
     */
    public function setCargoTypeCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\CargoTypeCode $cargoTypeCode)
    {
        $this->cargoTypeCode = $cargoTypeCode;
        return $this;
    }

    /**
     * Gets as commodityCode
     *
     * BBIE
     *  Commodity Classification. Commodity Code. Code
     *  The harmonized international commodity code for regulatory (customs and trade statistics) purposes.
     *  0..1
     *  Commodity Classification
     *  Commodity Code
     *  Code
     *  Code. Type
     *  Harmonized Code
     *  "1102222883"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\CommodityCode
     */
    public function getCommodityCode()
    {
        return $this->commodityCode;
    }

    /**
     * Sets a new commodityCode
     *
     * BBIE
     *  Commodity Classification. Commodity Code. Code
     *  The harmonized international commodity code for regulatory (customs and trade statistics) purposes.
     *  0..1
     *  Commodity Classification
     *  Commodity Code
     *  Code
     *  Code. Type
     *  Harmonized Code
     *  "1102222883"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\CommodityCode $commodityCode
     * @return self
     */
    public function setCommodityCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\CommodityCode $commodityCode)
    {
        $this->commodityCode = $commodityCode;
        return $this;
    }

    /**
     * Gets as itemClassificationCode
     *
     * BBIE
     *  Commodity Classification. Item Classification Code. Code
     *  The trade commodity classification, expressed as a code.
     *  0..1
     *  Commodity Classification
     *  Item Classification Code
     *  Code
     *  Code. Type
     *  UN/SPSC Code
     *  "3440234"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ItemClassificationCode
     */
    public function getItemClassificationCode()
    {
        return $this->itemClassificationCode;
    }

    /**
     * Sets a new itemClassificationCode
     *
     * BBIE
     *  Commodity Classification. Item Classification Code. Code
     *  The trade commodity classification, expressed as a code.
     *  0..1
     *  Commodity Classification
     *  Item Classification Code
     *  Code
     *  Code. Type
     *  UN/SPSC Code
     *  "3440234"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ItemClassificationCode $itemClassificationCode
     * @return self
     */
    public function setItemClassificationCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\ItemClassificationCode $itemClassificationCode)
    {
        $this->itemClassificationCode = $itemClassificationCode;
        return $this;
    }


}

