<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing TransportHandlingUnitType
 *
 * ABIE
 *  Transport Handling Unit. Details
 *  A uniquely identifiable physical unit consisting of one or more packages (not necessarily containing the same articles) for enabling physical handling during the transport process.
 *  Transport Handling Unit
 *  Logistics Unit, Handling Unit, THU
 * XSD Type: TransportHandlingUnitType
 */
class TransportHandlingUnitType
{

    /**
     * BBIE
     *  Transport Handling Unit. Identifier
     *  Identifies the transport handling unit.
     *  0..1
     *  Transport Handling Unit
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Transport Handling Unit. Transport Handling Unit Type Code. Code
     *  The type of transport handling unit, expressed as a code.
     *  0..1
     *  Transport Handling Unit
     *  Transport Handling Unit Type Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TransportHandlingUnitTypeCode $transportHandlingUnitTypeCode
     */
    private $transportHandlingUnitTypeCode = null;

    /**
     * BBIE
     *  Transport Handling Unit. Handling Code. Code
     *  The handling required for a shipment, expressed as a code.
     *  0..1
     *  Transport Handling Unit
     *  Handling Code
     *  Code
     *  Code. Type
     *  Special Handling
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\HandlingCode $handlingCode
     */
    private $handlingCode = null;

    /**
     * BBIE
     *  Transport Handling Unit. Handling_ Instructions. Text
     *  Free-form text describing handling instructions for a shipment.
     *  0..1
     *  Transport Handling Unit
     *  Handling
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\HandlingInstructions $handlingInstructions
     */
    private $handlingInstructions = null;

    /**
     * BBIE
     *  Transport Handling Unit. Hazardous Risk_ Indicator. Indicator
     *  Indicates whether the shipment contains hazardous materials.
     *  0..1
     *  Transport Handling Unit
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
     *  Transport Handling Unit. Total_ Goods Item Quantity. Quantity
     *  The total number of goods items in the transport handling unit.
     *  0..1
     *  Transport Handling Unit
     *  Total
     *  Goods Item Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TotalGoodsItemQuantity $totalGoodsItemQuantity
     */
    private $totalGoodsItemQuantity = null;

    /**
     * BBIE
     *  Transport Handling Unit. Total_ Package Quantity. Quantity
     *  The total number of packages in the transport handling unit.
     *  0..1
     *  Transport Handling Unit
     *  Total
     *  Package Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TotalPackageQuantity $totalPackageQuantity
     */
    private $totalPackageQuantity = null;

    /**
     * BBIE
     *  Transport Handling Unit. Damage_ Remarks. Text
     *  Description of a type of damage.
     *  0..n
     *  Transport Handling Unit
     *  Damage
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\DamageRemarks[] $damageRemarks
     */
    private $damageRemarks = [
        
    ];

    /**
     * BBIE
     *  Transport Handling Unit. Shipping_ Marks. Text
     *  Free-form description of the marks and numbers on a transport unit or package.
     *  0..n
     *  Transport Handling Unit
     *  Shipping
     *  Marks
     *  Text
     *  Text. Type
     *  Marks and Numbers, Shipping Marks
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ShippingMarks[] $shippingMarks
     */
    private $shippingMarks = [
        
    ];

    /**
     * ASBIE
     *  Transport Handling Unit. Handling Unit_ Despatch Line. Despatch Line
     *  An association to Handling Unit Despatch Line.
     *  0..n
     *  Transport Handling Unit
     *  Handling Unit
     *  Despatch Line
     *  Despatch Line
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\HandlingUnitDespatchLine[] $handlingUnitDespatchLine
     */
    private $handlingUnitDespatchLine = [
        
    ];

    /**
     * ASBIE
     *  Transport Handling Unit. Actual_ Package. Package
     *  An association to Actual Package.
     *  0..n
     *  Transport Handling Unit
     *  Actual
     *  Package
     *  Package
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ActualPackage[] $actualPackage
     */
    private $actualPackage = [
        
    ];

    /**
     * ASBIE
     *  Transport Handling Unit. Received Handling Unit_ Receipt Line. Receipt Line
     *  An association to Receipt Line.
     *  0..n
     *  Transport Handling Unit
     *  Received Handling Unit
     *  Receipt Line
     *  Receipt Line
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReceivedHandlingUnitReceiptLine[] $receivedHandlingUnitReceiptLine
     */
    private $receivedHandlingUnitReceiptLine = [
        
    ];

    /**
     * ASBIE
     *  Transport Handling Unit. Transport Equipment
     *  An association to Transport Equipment.
     *  0..n
     *  Transport Handling Unit
     *  Transport Equipment
     *  Transport Equipment
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransportEquipment[] $transportEquipment
     */
    private $transportEquipment = [
        
    ];

    /**
     * ASBIE
     *  Transport Handling Unit. Hazardous Goods Transit
     *  An association to information about the transportation of hazardous goods.
     *  0..n
     *  Transport Handling Unit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\HazardousGoodsTransit[] $hazardousGoodsTransit
     */
    private $hazardousGoodsTransit = [
        
    ];

    /**
     * ASBIE
     *  Transport Handling Unit. Measurement_ Dimension. Dimension
     *  An association to Dimension.
     *  0..n
     *  Transport Handling Unit
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
     *  Transport Handling Unit. Minimum_ Temperature. Temperature
     *  The minimum required operating temperature.
     *  0..1
     *  Transport Handling Unit
     *  Minimum
     *  Temperature
     *  Temperature
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\MinimumTemperature $minimumTemperature
     */
    private $minimumTemperature = null;

    /**
     * ASBIE
     *  Transport Handling Unit. Maximum_ Temperature. Temperature
     *  The maximum required operating temperature.
     *  0..1
     *  Transport Handling Unit
     *  Maximum
     *  Temperature
     *  Temperature
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\MaximumTemperature $maximumTemperature
     */
    private $maximumTemperature = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Transport Handling Unit. Identifier
     *  Identifies the transport handling unit.
     *  0..1
     *  Transport Handling Unit
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
     *  Transport Handling Unit. Identifier
     *  Identifies the transport handling unit.
     *  0..1
     *  Transport Handling Unit
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
     * Gets as transportHandlingUnitTypeCode
     *
     * BBIE
     *  Transport Handling Unit. Transport Handling Unit Type Code. Code
     *  The type of transport handling unit, expressed as a code.
     *  0..1
     *  Transport Handling Unit
     *  Transport Handling Unit Type Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TransportHandlingUnitTypeCode
     */
    public function getTransportHandlingUnitTypeCode()
    {
        return $this->transportHandlingUnitTypeCode;
    }

    /**
     * Sets a new transportHandlingUnitTypeCode
     *
     * BBIE
     *  Transport Handling Unit. Transport Handling Unit Type Code. Code
     *  The type of transport handling unit, expressed as a code.
     *  0..1
     *  Transport Handling Unit
     *  Transport Handling Unit Type Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TransportHandlingUnitTypeCode $transportHandlingUnitTypeCode
     * @return self
     */
    public function setTransportHandlingUnitTypeCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\TransportHandlingUnitTypeCode $transportHandlingUnitTypeCode)
    {
        $this->transportHandlingUnitTypeCode = $transportHandlingUnitTypeCode;
        return $this;
    }

    /**
     * Gets as handlingCode
     *
     * BBIE
     *  Transport Handling Unit. Handling Code. Code
     *  The handling required for a shipment, expressed as a code.
     *  0..1
     *  Transport Handling Unit
     *  Handling Code
     *  Code
     *  Code. Type
     *  Special Handling
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\HandlingCode
     */
    public function getHandlingCode()
    {
        return $this->handlingCode;
    }

    /**
     * Sets a new handlingCode
     *
     * BBIE
     *  Transport Handling Unit. Handling Code. Code
     *  The handling required for a shipment, expressed as a code.
     *  0..1
     *  Transport Handling Unit
     *  Handling Code
     *  Code
     *  Code. Type
     *  Special Handling
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\HandlingCode $handlingCode
     * @return self
     */
    public function setHandlingCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\HandlingCode $handlingCode)
    {
        $this->handlingCode = $handlingCode;
        return $this;
    }

    /**
     * Gets as handlingInstructions
     *
     * BBIE
     *  Transport Handling Unit. Handling_ Instructions. Text
     *  Free-form text describing handling instructions for a shipment.
     *  0..1
     *  Transport Handling Unit
     *  Handling
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\HandlingInstructions
     */
    public function getHandlingInstructions()
    {
        return $this->handlingInstructions;
    }

    /**
     * Sets a new handlingInstructions
     *
     * BBIE
     *  Transport Handling Unit. Handling_ Instructions. Text
     *  Free-form text describing handling instructions for a shipment.
     *  0..1
     *  Transport Handling Unit
     *  Handling
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\HandlingInstructions $handlingInstructions
     * @return self
     */
    public function setHandlingInstructions(\NOKA\PHPUBL\UBL\Common\BasicComponents\HandlingInstructions $handlingInstructions)
    {
        $this->handlingInstructions = $handlingInstructions;
        return $this;
    }

    /**
     * Gets as hazardousRiskIndicator
     *
     * BBIE
     *  Transport Handling Unit. Hazardous Risk_ Indicator. Indicator
     *  Indicates whether the shipment contains hazardous materials.
     *  0..1
     *  Transport Handling Unit
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
     *  Transport Handling Unit. Hazardous Risk_ Indicator. Indicator
     *  Indicates whether the shipment contains hazardous materials.
     *  0..1
     *  Transport Handling Unit
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
     * Gets as totalGoodsItemQuantity
     *
     * BBIE
     *  Transport Handling Unit. Total_ Goods Item Quantity. Quantity
     *  The total number of goods items in the transport handling unit.
     *  0..1
     *  Transport Handling Unit
     *  Total
     *  Goods Item Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TotalGoodsItemQuantity
     */
    public function getTotalGoodsItemQuantity()
    {
        return $this->totalGoodsItemQuantity;
    }

    /**
     * Sets a new totalGoodsItemQuantity
     *
     * BBIE
     *  Transport Handling Unit. Total_ Goods Item Quantity. Quantity
     *  The total number of goods items in the transport handling unit.
     *  0..1
     *  Transport Handling Unit
     *  Total
     *  Goods Item Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TotalGoodsItemQuantity $totalGoodsItemQuantity
     * @return self
     */
    public function setTotalGoodsItemQuantity(\NOKA\PHPUBL\UBL\Common\BasicComponents\TotalGoodsItemQuantity $totalGoodsItemQuantity)
    {
        $this->totalGoodsItemQuantity = $totalGoodsItemQuantity;
        return $this;
    }

    /**
     * Gets as totalPackageQuantity
     *
     * BBIE
     *  Transport Handling Unit. Total_ Package Quantity. Quantity
     *  The total number of packages in the transport handling unit.
     *  0..1
     *  Transport Handling Unit
     *  Total
     *  Package Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TotalPackageQuantity
     */
    public function getTotalPackageQuantity()
    {
        return $this->totalPackageQuantity;
    }

    /**
     * Sets a new totalPackageQuantity
     *
     * BBIE
     *  Transport Handling Unit. Total_ Package Quantity. Quantity
     *  The total number of packages in the transport handling unit.
     *  0..1
     *  Transport Handling Unit
     *  Total
     *  Package Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TotalPackageQuantity $totalPackageQuantity
     * @return self
     */
    public function setTotalPackageQuantity(\NOKA\PHPUBL\UBL\Common\BasicComponents\TotalPackageQuantity $totalPackageQuantity)
    {
        $this->totalPackageQuantity = $totalPackageQuantity;
        return $this;
    }

    /**
     * Adds as damageRemarks
     *
     * BBIE
     *  Transport Handling Unit. Damage_ Remarks. Text
     *  Description of a type of damage.
     *  0..n
     *  Transport Handling Unit
     *  Damage
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\DamageRemarks $damageRemarks
     */
    public function addToDamageRemarks(\NOKA\PHPUBL\UBL\Common\BasicComponents\DamageRemarks $damageRemarks)
    {
        $this->damageRemarks[] = $damageRemarks;
        return $this;
    }

    /**
     * isset damageRemarks
     *
     * BBIE
     *  Transport Handling Unit. Damage_ Remarks. Text
     *  Description of a type of damage.
     *  0..n
     *  Transport Handling Unit
     *  Damage
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDamageRemarks($index)
    {
        return isset($this->damageRemarks[$index]);
    }

    /**
     * unset damageRemarks
     *
     * BBIE
     *  Transport Handling Unit. Damage_ Remarks. Text
     *  Description of a type of damage.
     *  0..n
     *  Transport Handling Unit
     *  Damage
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDamageRemarks($index)
    {
        unset($this->damageRemarks[$index]);
    }

    /**
     * Gets as damageRemarks
     *
     * BBIE
     *  Transport Handling Unit. Damage_ Remarks. Text
     *  Description of a type of damage.
     *  0..n
     *  Transport Handling Unit
     *  Damage
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\DamageRemarks[]
     */
    public function getDamageRemarks()
    {
        return $this->damageRemarks;
    }

    /**
     * Sets a new damageRemarks
     *
     * BBIE
     *  Transport Handling Unit. Damage_ Remarks. Text
     *  Description of a type of damage.
     *  0..n
     *  Transport Handling Unit
     *  Damage
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\DamageRemarks[] $damageRemarks
     * @return self
     */
    public function setDamageRemarks(array $damageRemarks)
    {
        $this->damageRemarks = $damageRemarks;
        return $this;
    }

    /**
     * Adds as shippingMarks
     *
     * BBIE
     *  Transport Handling Unit. Shipping_ Marks. Text
     *  Free-form description of the marks and numbers on a transport unit or package.
     *  0..n
     *  Transport Handling Unit
     *  Shipping
     *  Marks
     *  Text
     *  Text. Type
     *  Marks and Numbers, Shipping Marks
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ShippingMarks $shippingMarks
     */
    public function addToShippingMarks(\NOKA\PHPUBL\UBL\Common\BasicComponents\ShippingMarks $shippingMarks)
    {
        $this->shippingMarks[] = $shippingMarks;
        return $this;
    }

    /**
     * isset shippingMarks
     *
     * BBIE
     *  Transport Handling Unit. Shipping_ Marks. Text
     *  Free-form description of the marks and numbers on a transport unit or package.
     *  0..n
     *  Transport Handling Unit
     *  Shipping
     *  Marks
     *  Text
     *  Text. Type
     *  Marks and Numbers, Shipping Marks
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShippingMarks($index)
    {
        return isset($this->shippingMarks[$index]);
    }

    /**
     * unset shippingMarks
     *
     * BBIE
     *  Transport Handling Unit. Shipping_ Marks. Text
     *  Free-form description of the marks and numbers on a transport unit or package.
     *  0..n
     *  Transport Handling Unit
     *  Shipping
     *  Marks
     *  Text
     *  Text. Type
     *  Marks and Numbers, Shipping Marks
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShippingMarks($index)
    {
        unset($this->shippingMarks[$index]);
    }

    /**
     * Gets as shippingMarks
     *
     * BBIE
     *  Transport Handling Unit. Shipping_ Marks. Text
     *  Free-form description of the marks and numbers on a transport unit or package.
     *  0..n
     *  Transport Handling Unit
     *  Shipping
     *  Marks
     *  Text
     *  Text. Type
     *  Marks and Numbers, Shipping Marks
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ShippingMarks[]
     */
    public function getShippingMarks()
    {
        return $this->shippingMarks;
    }

    /**
     * Sets a new shippingMarks
     *
     * BBIE
     *  Transport Handling Unit. Shipping_ Marks. Text
     *  Free-form description of the marks and numbers on a transport unit or package.
     *  0..n
     *  Transport Handling Unit
     *  Shipping
     *  Marks
     *  Text
     *  Text. Type
     *  Marks and Numbers, Shipping Marks
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ShippingMarks[] $shippingMarks
     * @return self
     */
    public function setShippingMarks(array $shippingMarks)
    {
        $this->shippingMarks = $shippingMarks;
        return $this;
    }

    /**
     * Adds as handlingUnitDespatchLine
     *
     * ASBIE
     *  Transport Handling Unit. Handling Unit_ Despatch Line. Despatch Line
     *  An association to Handling Unit Despatch Line.
     *  0..n
     *  Transport Handling Unit
     *  Handling Unit
     *  Despatch Line
     *  Despatch Line
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\HandlingUnitDespatchLine $handlingUnitDespatchLine
     */
    public function addToHandlingUnitDespatchLine(\NOKA\PHPUBL\UBL\Common\AggregateComponents\HandlingUnitDespatchLine $handlingUnitDespatchLine)
    {
        $this->handlingUnitDespatchLine[] = $handlingUnitDespatchLine;
        return $this;
    }

    /**
     * isset handlingUnitDespatchLine
     *
     * ASBIE
     *  Transport Handling Unit. Handling Unit_ Despatch Line. Despatch Line
     *  An association to Handling Unit Despatch Line.
     *  0..n
     *  Transport Handling Unit
     *  Handling Unit
     *  Despatch Line
     *  Despatch Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHandlingUnitDespatchLine($index)
    {
        return isset($this->handlingUnitDespatchLine[$index]);
    }

    /**
     * unset handlingUnitDespatchLine
     *
     * ASBIE
     *  Transport Handling Unit. Handling Unit_ Despatch Line. Despatch Line
     *  An association to Handling Unit Despatch Line.
     *  0..n
     *  Transport Handling Unit
     *  Handling Unit
     *  Despatch Line
     *  Despatch Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHandlingUnitDespatchLine($index)
    {
        unset($this->handlingUnitDespatchLine[$index]);
    }

    /**
     * Gets as handlingUnitDespatchLine
     *
     * ASBIE
     *  Transport Handling Unit. Handling Unit_ Despatch Line. Despatch Line
     *  An association to Handling Unit Despatch Line.
     *  0..n
     *  Transport Handling Unit
     *  Handling Unit
     *  Despatch Line
     *  Despatch Line
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\HandlingUnitDespatchLine[]
     */
    public function getHandlingUnitDespatchLine()
    {
        return $this->handlingUnitDespatchLine;
    }

    /**
     * Sets a new handlingUnitDespatchLine
     *
     * ASBIE
     *  Transport Handling Unit. Handling Unit_ Despatch Line. Despatch Line
     *  An association to Handling Unit Despatch Line.
     *  0..n
     *  Transport Handling Unit
     *  Handling Unit
     *  Despatch Line
     *  Despatch Line
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\HandlingUnitDespatchLine[] $handlingUnitDespatchLine
     * @return self
     */
    public function setHandlingUnitDespatchLine(array $handlingUnitDespatchLine)
    {
        $this->handlingUnitDespatchLine = $handlingUnitDespatchLine;
        return $this;
    }

    /**
     * Adds as actualPackage
     *
     * ASBIE
     *  Transport Handling Unit. Actual_ Package. Package
     *  An association to Actual Package.
     *  0..n
     *  Transport Handling Unit
     *  Actual
     *  Package
     *  Package
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ActualPackage $actualPackage
     */
    public function addToActualPackage(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ActualPackage $actualPackage)
    {
        $this->actualPackage[] = $actualPackage;
        return $this;
    }

    /**
     * isset actualPackage
     *
     * ASBIE
     *  Transport Handling Unit. Actual_ Package. Package
     *  An association to Actual Package.
     *  0..n
     *  Transport Handling Unit
     *  Actual
     *  Package
     *  Package
     *
     * @param int|string $index
     * @return bool
     */
    public function issetActualPackage($index)
    {
        return isset($this->actualPackage[$index]);
    }

    /**
     * unset actualPackage
     *
     * ASBIE
     *  Transport Handling Unit. Actual_ Package. Package
     *  An association to Actual Package.
     *  0..n
     *  Transport Handling Unit
     *  Actual
     *  Package
     *  Package
     *
     * @param int|string $index
     * @return void
     */
    public function unsetActualPackage($index)
    {
        unset($this->actualPackage[$index]);
    }

    /**
     * Gets as actualPackage
     *
     * ASBIE
     *  Transport Handling Unit. Actual_ Package. Package
     *  An association to Actual Package.
     *  0..n
     *  Transport Handling Unit
     *  Actual
     *  Package
     *  Package
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ActualPackage[]
     */
    public function getActualPackage()
    {
        return $this->actualPackage;
    }

    /**
     * Sets a new actualPackage
     *
     * ASBIE
     *  Transport Handling Unit. Actual_ Package. Package
     *  An association to Actual Package.
     *  0..n
     *  Transport Handling Unit
     *  Actual
     *  Package
     *  Package
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ActualPackage[] $actualPackage
     * @return self
     */
    public function setActualPackage(array $actualPackage)
    {
        $this->actualPackage = $actualPackage;
        return $this;
    }

    /**
     * Adds as receivedHandlingUnitReceiptLine
     *
     * ASBIE
     *  Transport Handling Unit. Received Handling Unit_ Receipt Line. Receipt Line
     *  An association to Receipt Line.
     *  0..n
     *  Transport Handling Unit
     *  Received Handling Unit
     *  Receipt Line
     *  Receipt Line
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReceivedHandlingUnitReceiptLine $receivedHandlingUnitReceiptLine
     */
    public function addToReceivedHandlingUnitReceiptLine(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ReceivedHandlingUnitReceiptLine $receivedHandlingUnitReceiptLine)
    {
        $this->receivedHandlingUnitReceiptLine[] = $receivedHandlingUnitReceiptLine;
        return $this;
    }

    /**
     * isset receivedHandlingUnitReceiptLine
     *
     * ASBIE
     *  Transport Handling Unit. Received Handling Unit_ Receipt Line. Receipt Line
     *  An association to Receipt Line.
     *  0..n
     *  Transport Handling Unit
     *  Received Handling Unit
     *  Receipt Line
     *  Receipt Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReceivedHandlingUnitReceiptLine($index)
    {
        return isset($this->receivedHandlingUnitReceiptLine[$index]);
    }

    /**
     * unset receivedHandlingUnitReceiptLine
     *
     * ASBIE
     *  Transport Handling Unit. Received Handling Unit_ Receipt Line. Receipt Line
     *  An association to Receipt Line.
     *  0..n
     *  Transport Handling Unit
     *  Received Handling Unit
     *  Receipt Line
     *  Receipt Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReceivedHandlingUnitReceiptLine($index)
    {
        unset($this->receivedHandlingUnitReceiptLine[$index]);
    }

    /**
     * Gets as receivedHandlingUnitReceiptLine
     *
     * ASBIE
     *  Transport Handling Unit. Received Handling Unit_ Receipt Line. Receipt Line
     *  An association to Receipt Line.
     *  0..n
     *  Transport Handling Unit
     *  Received Handling Unit
     *  Receipt Line
     *  Receipt Line
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReceivedHandlingUnitReceiptLine[]
     */
    public function getReceivedHandlingUnitReceiptLine()
    {
        return $this->receivedHandlingUnitReceiptLine;
    }

    /**
     * Sets a new receivedHandlingUnitReceiptLine
     *
     * ASBIE
     *  Transport Handling Unit. Received Handling Unit_ Receipt Line. Receipt Line
     *  An association to Receipt Line.
     *  0..n
     *  Transport Handling Unit
     *  Received Handling Unit
     *  Receipt Line
     *  Receipt Line
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReceivedHandlingUnitReceiptLine[] $receivedHandlingUnitReceiptLine
     * @return self
     */
    public function setReceivedHandlingUnitReceiptLine(array $receivedHandlingUnitReceiptLine)
    {
        $this->receivedHandlingUnitReceiptLine = $receivedHandlingUnitReceiptLine;
        return $this;
    }

    /**
     * Adds as transportEquipment
     *
     * ASBIE
     *  Transport Handling Unit. Transport Equipment
     *  An association to Transport Equipment.
     *  0..n
     *  Transport Handling Unit
     *  Transport Equipment
     *  Transport Equipment
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransportEquipment $transportEquipment
     */
    public function addToTransportEquipment(\NOKA\PHPUBL\UBL\Common\AggregateComponents\TransportEquipment $transportEquipment)
    {
        $this->transportEquipment[] = $transportEquipment;
        return $this;
    }

    /**
     * isset transportEquipment
     *
     * ASBIE
     *  Transport Handling Unit. Transport Equipment
     *  An association to Transport Equipment.
     *  0..n
     *  Transport Handling Unit
     *  Transport Equipment
     *  Transport Equipment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportEquipment($index)
    {
        return isset($this->transportEquipment[$index]);
    }

    /**
     * unset transportEquipment
     *
     * ASBIE
     *  Transport Handling Unit. Transport Equipment
     *  An association to Transport Equipment.
     *  0..n
     *  Transport Handling Unit
     *  Transport Equipment
     *  Transport Equipment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportEquipment($index)
    {
        unset($this->transportEquipment[$index]);
    }

    /**
     * Gets as transportEquipment
     *
     * ASBIE
     *  Transport Handling Unit. Transport Equipment
     *  An association to Transport Equipment.
     *  0..n
     *  Transport Handling Unit
     *  Transport Equipment
     *  Transport Equipment
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransportEquipment[]
     */
    public function getTransportEquipment()
    {
        return $this->transportEquipment;
    }

    /**
     * Sets a new transportEquipment
     *
     * ASBIE
     *  Transport Handling Unit. Transport Equipment
     *  An association to Transport Equipment.
     *  0..n
     *  Transport Handling Unit
     *  Transport Equipment
     *  Transport Equipment
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransportEquipment[] $transportEquipment
     * @return self
     */
    public function setTransportEquipment(array $transportEquipment)
    {
        $this->transportEquipment = $transportEquipment;
        return $this;
    }

    /**
     * Adds as hazardousGoodsTransit
     *
     * ASBIE
     *  Transport Handling Unit. Hazardous Goods Transit
     *  An association to information about the transportation of hazardous goods.
     *  0..n
     *  Transport Handling Unit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\HazardousGoodsTransit $hazardousGoodsTransit
     */
    public function addToHazardousGoodsTransit(\NOKA\PHPUBL\UBL\Common\AggregateComponents\HazardousGoodsTransit $hazardousGoodsTransit)
    {
        $this->hazardousGoodsTransit[] = $hazardousGoodsTransit;
        return $this;
    }

    /**
     * isset hazardousGoodsTransit
     *
     * ASBIE
     *  Transport Handling Unit. Hazardous Goods Transit
     *  An association to information about the transportation of hazardous goods.
     *  0..n
     *  Transport Handling Unit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHazardousGoodsTransit($index)
    {
        return isset($this->hazardousGoodsTransit[$index]);
    }

    /**
     * unset hazardousGoodsTransit
     *
     * ASBIE
     *  Transport Handling Unit. Hazardous Goods Transit
     *  An association to information about the transportation of hazardous goods.
     *  0..n
     *  Transport Handling Unit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHazardousGoodsTransit($index)
    {
        unset($this->hazardousGoodsTransit[$index]);
    }

    /**
     * Gets as hazardousGoodsTransit
     *
     * ASBIE
     *  Transport Handling Unit. Hazardous Goods Transit
     *  An association to information about the transportation of hazardous goods.
     *  0..n
     *  Transport Handling Unit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\HazardousGoodsTransit[]
     */
    public function getHazardousGoodsTransit()
    {
        return $this->hazardousGoodsTransit;
    }

    /**
     * Sets a new hazardousGoodsTransit
     *
     * ASBIE
     *  Transport Handling Unit. Hazardous Goods Transit
     *  An association to information about the transportation of hazardous goods.
     *  0..n
     *  Transport Handling Unit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\HazardousGoodsTransit[] $hazardousGoodsTransit
     * @return self
     */
    public function setHazardousGoodsTransit(array $hazardousGoodsTransit)
    {
        $this->hazardousGoodsTransit = $hazardousGoodsTransit;
        return $this;
    }

    /**
     * Adds as measurementDimension
     *
     * ASBIE
     *  Transport Handling Unit. Measurement_ Dimension. Dimension
     *  An association to Dimension.
     *  0..n
     *  Transport Handling Unit
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
     *  Transport Handling Unit. Measurement_ Dimension. Dimension
     *  An association to Dimension.
     *  0..n
     *  Transport Handling Unit
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
     *  Transport Handling Unit. Measurement_ Dimension. Dimension
     *  An association to Dimension.
     *  0..n
     *  Transport Handling Unit
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
     *  Transport Handling Unit. Measurement_ Dimension. Dimension
     *  An association to Dimension.
     *  0..n
     *  Transport Handling Unit
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
     *  Transport Handling Unit. Measurement_ Dimension. Dimension
     *  An association to Dimension.
     *  0..n
     *  Transport Handling Unit
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
     * Gets as minimumTemperature
     *
     * ASBIE
     *  Transport Handling Unit. Minimum_ Temperature. Temperature
     *  The minimum required operating temperature.
     *  0..1
     *  Transport Handling Unit
     *  Minimum
     *  Temperature
     *  Temperature
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\MinimumTemperature
     */
    public function getMinimumTemperature()
    {
        return $this->minimumTemperature;
    }

    /**
     * Sets a new minimumTemperature
     *
     * ASBIE
     *  Transport Handling Unit. Minimum_ Temperature. Temperature
     *  The minimum required operating temperature.
     *  0..1
     *  Transport Handling Unit
     *  Minimum
     *  Temperature
     *  Temperature
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\MinimumTemperature $minimumTemperature
     * @return self
     */
    public function setMinimumTemperature(\NOKA\PHPUBL\UBL\Common\AggregateComponents\MinimumTemperature $minimumTemperature)
    {
        $this->minimumTemperature = $minimumTemperature;
        return $this;
    }

    /**
     * Gets as maximumTemperature
     *
     * ASBIE
     *  Transport Handling Unit. Maximum_ Temperature. Temperature
     *  The maximum required operating temperature.
     *  0..1
     *  Transport Handling Unit
     *  Maximum
     *  Temperature
     *  Temperature
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\MaximumTemperature
     */
    public function getMaximumTemperature()
    {
        return $this->maximumTemperature;
    }

    /**
     * Sets a new maximumTemperature
     *
     * ASBIE
     *  Transport Handling Unit. Maximum_ Temperature. Temperature
     *  The maximum required operating temperature.
     *  0..1
     *  Transport Handling Unit
     *  Maximum
     *  Temperature
     *  Temperature
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\MaximumTemperature $maximumTemperature
     * @return self
     */
    public function setMaximumTemperature(\NOKA\PHPUBL\UBL\Common\AggregateComponents\MaximumTemperature $maximumTemperature)
    {
        $this->maximumTemperature = $maximumTemperature;
        return $this;
    }


}

