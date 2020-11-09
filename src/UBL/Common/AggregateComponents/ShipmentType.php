<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing ShipmentType
 *
 * ABIE
 *  Shipment. Details
 *  Information about a shipment.
 *  Shipment
 *  Consignment
 * XSD Type: ShipmentType
 */
class ShipmentType
{

    /**
     * BBIE
     *  Shipment. Identifier
     *  Identifies a shipment.
     *  1
     *  Shipment
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Waybill Number
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Shipment. Shipping Priority Level. Code
     *  The priority or level of service required for a shipment, expressed as a code.
     *  0..1
     *  Shipment
     *  Shipping Priority Level
     *  Code
     *  Code. Type
     *  Service Level, Service Priority
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ShippingPriorityLevelCode $shippingPriorityLevelCode
     */
    private $shippingPriorityLevelCode = null;

    /**
     * BBIE
     *  Shipment. Handling Code. Code
     *  The handling required for a shipment, expressed as a code.
     *  0..1
     *  Shipment
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
     *  Shipment. Handling_ Instructions. Text
     *  Free-form text describing Handling Instructions for a shipment.
     *  0..1
     *  Shipment
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
     *  Shipment. Information. Text
     *  Free-form text applying to a shipment. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Shipment
     *  Information
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Information $information
     */
    private $information = null;

    /**
     * BBIE
     *  Shipment. Gross_ Weight. Measure
     *  The total gross weight of a shipment; the weight of the goods plus packaging plus transport equipment.
     *  0..1
     *  Shipment
     *  Gross
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\GrossWeightMeasure $grossWeightMeasure
     */
    private $grossWeightMeasure = null;

    /**
     * BBIE
     *  Shipment. Net_ Weight. Measure
     *  The total net weight of a shipment; the weight of the goods plus packaging.
     *  0..1
     *  Shipment
     *  Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\NetWeightMeasure $netWeightMeasure
     */
    private $netWeightMeasure = null;

    /**
     * BBIE
     *  Shipment. Net Net_ Weight. Measure
     *  The weight of the goods net of packaging and transport equipment.
     *  0..1
     *  Shipment
     *  Net Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\NetNetWeightMeasure $netNetWeightMeasure
     */
    private $netNetWeightMeasure = null;

    /**
     * BBIE
     *  Shipment. Gross_ Volume. Measure
     *  The total volume of the goods in a shipment plus packaging.
     *  0..1
     *  Shipment
     *  Gross
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\GrossVolumeMeasure $grossVolumeMeasure
     */
    private $grossVolumeMeasure = null;

    /**
     * BBIE
     *  Shipment. Net_ Volume. Measure
     *  The volume of a shipment net of packaging and transport equipment.
     *  0..1
     *  Shipment
     *  Net
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\NetVolumeMeasure $netVolumeMeasure
     */
    private $netVolumeMeasure = null;

    /**
     * BBIE
     *  Shipment. Total_ Goods Item Quantity. Quantity
     *  Count of the total number of goods items within a shipment.
     *  0..1
     *  Shipment
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
     *  Shipment. Total_ Transport Handling Unit Quantity. Quantity
     *  Count of the number of pieces of transport handling equipment in a shipment, such as pallets, boxes, and cases.
     *  0..1
     *  Shipment
     *  Total
     *  Transport Handling Unit Quantity
     *  Quantity
     *  Quantity. Type
     *  Number of THUs
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TotalTransportHandlingUnitQuantity $totalTransportHandlingUnitQuantity
     */
    private $totalTransportHandlingUnitQuantity = null;

    /**
     * BBIE
     *  Shipment. Insurance_ Value. Amount
     *  The total sum covered by an insurance for the shipment.
     *  0..1
     *  Shipment
     *  Insurance
     *  Value
     *  Amount
     *  Amount. Type
     *  Value Insured
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\InsuranceValueAmount $insuranceValueAmount
     */
    private $insuranceValueAmount = null;

    /**
     * BBIE
     *  Shipment. Declared Customs_ Value. Amount
     *  Amount declared for customs purposes of those goods in a shipment which are subject to the same customs procedure, and have the same tariff/statistical heading, country information, and duty regime.
     *  0..1
     *  Shipment
     *  Declared Customs
     *  Value
     *  Amount
     *  Amount. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\DeclaredCustomsValueAmount $declaredCustomsValueAmount
     */
    private $declaredCustomsValueAmount = null;

    /**
     * BBIE
     *  Shipment. Declared For Carriage_ Value. Amount
     *  Value, declared by the shipper or his agent solely for the purpose of varying the carrier's level of liability from that provided in the contract of carriage, in case of loss or damage to goods or delayed delivery.
     *  0..1
     *  Shipment
     *  Declared For Carriage
     *  Value
     *  Amount
     *  Amount. Type
     *  Declared value for carriage, Interest in delivery
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\DeclaredForCarriageValueAmount $declaredForCarriageValueAmount
     */
    private $declaredForCarriageValueAmount = null;

    /**
     * BBIE
     *  Shipment. Declared Statistics_ Value. Amount
     *  Value declared for statistical purposes of those goods in a consignment which have the same statistical heading.
     *  0..1
     *  Shipment
     *  Declared Statistics
     *  Value
     *  Amount
     *  Amount. Type
     *  Statistical Value
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\DeclaredStatisticsValueAmount $declaredStatisticsValueAmount
     */
    private $declaredStatisticsValueAmount = null;

    /**
     * BBIE
     *  Shipment. Free On Board_ Value. Amount
     *  Monetary amount that has to be or has been paid as calculated under the applicable trade delivery.
     *  0..1
     *  Shipment
     *  Free On Board
     *  Value
     *  Amount
     *  Amount. Type
     *  FOB Value
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\FreeOnBoardValueAmount $freeOnBoardValueAmount
     */
    private $freeOnBoardValueAmount = null;

    /**
     * BBIE
     *  Shipment. Special_ Instructions. Text
     *  Special instructions relating to a shipment.
     *  0..n
     *  Shipment
     *  Special
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\SpecialInstructions[] $specialInstructions
     */
    private $specialInstructions = [
        
    ];

    /**
     * BBIE
     *  Shipment. Delivery_ Instructions. Text
     *  Delivery instructions relating to a shipment.
     *  0..n
     *  Shipment
     *  Delivery
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\DeliveryInstructions[] $deliveryInstructions
     */
    private $deliveryInstructions = [
        
    ];

    /**
     * BBIE
     *  Shipment. Split Consignment_ Indicator. Indicator
     *  Indicates whether the consignment has been split in transit.
     *  0..1
     *  Shipment
     *  Split Consignment
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $splitConsignmentIndicator
     */
    private $splitConsignmentIndicator = null;

    /**
     * ASBIE
     *  Shipment. Consignment
     *  An association to Consignment covering the shipment.
     *  1
     *  Shipment
     *  Consignment
     *  Consignment
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Consignment $consignment
     */
    private $consignment = null;

    /**
     * ASBIE
     *  Shipment. Goods Item
     *  An association to Goods Item (for Bulk Goods).
     *  0..n
     *  Shipment
     *  Goods Item
     *  Goods Item
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\GoodsItem[] $goodsItem
     */
    private $goodsItem = [
        
    ];

    /**
     * ASBIE
     *  Shipment. Shipment Stage
     *  An association to Shipment Stage.
     *  0..n
     *  Shipment
     *  Shipment Stage
     *  Shipment Stage
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ShipmentStage[] $shipmentStage
     */
    private $shipmentStage = [
        
    ];

    /**
     * ASBIE
     *  Shipment. Delivery
     *  An association to Delivery.
     *  0..1
     *  Shipment
     *  Delivery
     *  Delivery
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Delivery $delivery
     */
    private $delivery = null;

    /**
     * ASBIE
     *  Shipment. Transport Handling Unit
     *  An association to Transport Handling Unit used for loose and containerized goods.
     *  0..n
     *  Shipment
     *  Transport Handling Unit
     *  Transport Handling Unit
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransportHandlingUnit[] $transportHandlingUnit
     */
    private $transportHandlingUnit = [
        
    ];

    /**
     * ASBIE
     *  Shipment. Origin_ Address. Address
     *  An association to the region in which the goods have been produced or manufactured, according to criteria laid down for the purposes of application of the Customs tariff, or quantitative restrictions, or of any other measure related to trade.
     *  0..1
     *  Shipment
     *  Origin
     *  Address
     *  Address
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginAddress $originAddress
     */
    private $originAddress = null;

    /**
     * ASBIE
     *  Shipment. First Arrival Port_ Location. Location
     *  Identifies the first arrival location. This would be a port for sea, airport for air, and border post for land crossing.
     *  0..1
     *  Shipment
     *  First Arrival Port
     *  Location
     *  Location
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\FirstArrivalPortLocation $firstArrivalPortLocation
     */
    private $firstArrivalPortLocation = null;

    /**
     * ASBIE
     *  Shipment. Last Exit Port_ Location. Location
     *  Identifies the final exporting location. This would be a port for sea, airport for air, and border post for land crossing.
     *  0..1
     *  Shipment
     *  Last Exit Port
     *  Location
     *  Location
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\LastExitPortLocation $lastExitPortLocation
     */
    private $lastExitPortLocation = null;

    /**
     * ASBIE
     *  Shipment. Export_ Country. Country
     *  Identifies the country from which the goods are originally exported without any commercial transaction taking place in intermediate countries.
     *  0..1
     *  Shipment
     *  Export
     *  Country
     *  Country
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ExportCountry $exportCountry
     */
    private $exportCountry = null;

    /**
     * ASBIE
     *  Shipment. Freight_ Allowance Charge. Allowance Charge
     *  Costs incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance (to the extent that they relate to the freight costs).
     *  0..n
     *  Shipment
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\FreightAllowanceCharge[] $freightAllowanceCharge
     */
    private $freightAllowanceCharge = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Shipment. Identifier
     *  Identifies a shipment.
     *  1
     *  Shipment
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Waybill Number
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
     *  Shipment. Identifier
     *  Identifies a shipment.
     *  1
     *  Shipment
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Waybill Number
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
     * Gets as shippingPriorityLevelCode
     *
     * BBIE
     *  Shipment. Shipping Priority Level. Code
     *  The priority or level of service required for a shipment, expressed as a code.
     *  0..1
     *  Shipment
     *  Shipping Priority Level
     *  Code
     *  Code. Type
     *  Service Level, Service Priority
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ShippingPriorityLevelCode
     */
    public function getShippingPriorityLevelCode()
    {
        return $this->shippingPriorityLevelCode;
    }

    /**
     * Sets a new shippingPriorityLevelCode
     *
     * BBIE
     *  Shipment. Shipping Priority Level. Code
     *  The priority or level of service required for a shipment, expressed as a code.
     *  0..1
     *  Shipment
     *  Shipping Priority Level
     *  Code
     *  Code. Type
     *  Service Level, Service Priority
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ShippingPriorityLevelCode $shippingPriorityLevelCode
     * @return self
     */
    public function setShippingPriorityLevelCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\ShippingPriorityLevelCode $shippingPriorityLevelCode)
    {
        $this->shippingPriorityLevelCode = $shippingPriorityLevelCode;
        return $this;
    }

    /**
     * Gets as handlingCode
     *
     * BBIE
     *  Shipment. Handling Code. Code
     *  The handling required for a shipment, expressed as a code.
     *  0..1
     *  Shipment
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
     *  Shipment. Handling Code. Code
     *  The handling required for a shipment, expressed as a code.
     *  0..1
     *  Shipment
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
     *  Shipment. Handling_ Instructions. Text
     *  Free-form text describing Handling Instructions for a shipment.
     *  0..1
     *  Shipment
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
     *  Shipment. Handling_ Instructions. Text
     *  Free-form text describing Handling Instructions for a shipment.
     *  0..1
     *  Shipment
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
     * Gets as information
     *
     * BBIE
     *  Shipment. Information. Text
     *  Free-form text applying to a shipment. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Shipment
     *  Information
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Information
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Sets a new information
     *
     * BBIE
     *  Shipment. Information. Text
     *  Free-form text applying to a shipment. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Shipment
     *  Information
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Information $information
     * @return self
     */
    public function setInformation(\NOKA\PHPUBL\UBL\Common\BasicComponents\Information $information)
    {
        $this->information = $information;
        return $this;
    }

    /**
     * Gets as grossWeightMeasure
     *
     * BBIE
     *  Shipment. Gross_ Weight. Measure
     *  The total gross weight of a shipment; the weight of the goods plus packaging plus transport equipment.
     *  0..1
     *  Shipment
     *  Gross
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\GrossWeightMeasure
     */
    public function getGrossWeightMeasure()
    {
        return $this->grossWeightMeasure;
    }

    /**
     * Sets a new grossWeightMeasure
     *
     * BBIE
     *  Shipment. Gross_ Weight. Measure
     *  The total gross weight of a shipment; the weight of the goods plus packaging plus transport equipment.
     *  0..1
     *  Shipment
     *  Gross
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\GrossWeightMeasure $grossWeightMeasure
     * @return self
     */
    public function setGrossWeightMeasure(\NOKA\PHPUBL\UBL\Common\BasicComponents\GrossWeightMeasure $grossWeightMeasure)
    {
        $this->grossWeightMeasure = $grossWeightMeasure;
        return $this;
    }

    /**
     * Gets as netWeightMeasure
     *
     * BBIE
     *  Shipment. Net_ Weight. Measure
     *  The total net weight of a shipment; the weight of the goods plus packaging.
     *  0..1
     *  Shipment
     *  Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\NetWeightMeasure
     */
    public function getNetWeightMeasure()
    {
        return $this->netWeightMeasure;
    }

    /**
     * Sets a new netWeightMeasure
     *
     * BBIE
     *  Shipment. Net_ Weight. Measure
     *  The total net weight of a shipment; the weight of the goods plus packaging.
     *  0..1
     *  Shipment
     *  Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\NetWeightMeasure $netWeightMeasure
     * @return self
     */
    public function setNetWeightMeasure(\NOKA\PHPUBL\UBL\Common\BasicComponents\NetWeightMeasure $netWeightMeasure)
    {
        $this->netWeightMeasure = $netWeightMeasure;
        return $this;
    }

    /**
     * Gets as netNetWeightMeasure
     *
     * BBIE
     *  Shipment. Net Net_ Weight. Measure
     *  The weight of the goods net of packaging and transport equipment.
     *  0..1
     *  Shipment
     *  Net Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\NetNetWeightMeasure
     */
    public function getNetNetWeightMeasure()
    {
        return $this->netNetWeightMeasure;
    }

    /**
     * Sets a new netNetWeightMeasure
     *
     * BBIE
     *  Shipment. Net Net_ Weight. Measure
     *  The weight of the goods net of packaging and transport equipment.
     *  0..1
     *  Shipment
     *  Net Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\NetNetWeightMeasure $netNetWeightMeasure
     * @return self
     */
    public function setNetNetWeightMeasure(\NOKA\PHPUBL\UBL\Common\BasicComponents\NetNetWeightMeasure $netNetWeightMeasure)
    {
        $this->netNetWeightMeasure = $netNetWeightMeasure;
        return $this;
    }

    /**
     * Gets as grossVolumeMeasure
     *
     * BBIE
     *  Shipment. Gross_ Volume. Measure
     *  The total volume of the goods in a shipment plus packaging.
     *  0..1
     *  Shipment
     *  Gross
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\GrossVolumeMeasure
     */
    public function getGrossVolumeMeasure()
    {
        return $this->grossVolumeMeasure;
    }

    /**
     * Sets a new grossVolumeMeasure
     *
     * BBIE
     *  Shipment. Gross_ Volume. Measure
     *  The total volume of the goods in a shipment plus packaging.
     *  0..1
     *  Shipment
     *  Gross
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\GrossVolumeMeasure $grossVolumeMeasure
     * @return self
     */
    public function setGrossVolumeMeasure(\NOKA\PHPUBL\UBL\Common\BasicComponents\GrossVolumeMeasure $grossVolumeMeasure)
    {
        $this->grossVolumeMeasure = $grossVolumeMeasure;
        return $this;
    }

    /**
     * Gets as netVolumeMeasure
     *
     * BBIE
     *  Shipment. Net_ Volume. Measure
     *  The volume of a shipment net of packaging and transport equipment.
     *  0..1
     *  Shipment
     *  Net
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\NetVolumeMeasure
     */
    public function getNetVolumeMeasure()
    {
        return $this->netVolumeMeasure;
    }

    /**
     * Sets a new netVolumeMeasure
     *
     * BBIE
     *  Shipment. Net_ Volume. Measure
     *  The volume of a shipment net of packaging and transport equipment.
     *  0..1
     *  Shipment
     *  Net
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\NetVolumeMeasure $netVolumeMeasure
     * @return self
     */
    public function setNetVolumeMeasure(\NOKA\PHPUBL\UBL\Common\BasicComponents\NetVolumeMeasure $netVolumeMeasure)
    {
        $this->netVolumeMeasure = $netVolumeMeasure;
        return $this;
    }

    /**
     * Gets as totalGoodsItemQuantity
     *
     * BBIE
     *  Shipment. Total_ Goods Item Quantity. Quantity
     *  Count of the total number of goods items within a shipment.
     *  0..1
     *  Shipment
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
     *  Shipment. Total_ Goods Item Quantity. Quantity
     *  Count of the total number of goods items within a shipment.
     *  0..1
     *  Shipment
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
     * Gets as totalTransportHandlingUnitQuantity
     *
     * BBIE
     *  Shipment. Total_ Transport Handling Unit Quantity. Quantity
     *  Count of the number of pieces of transport handling equipment in a shipment, such as pallets, boxes, and cases.
     *  0..1
     *  Shipment
     *  Total
     *  Transport Handling Unit Quantity
     *  Quantity
     *  Quantity. Type
     *  Number of THUs
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TotalTransportHandlingUnitQuantity
     */
    public function getTotalTransportHandlingUnitQuantity()
    {
        return $this->totalTransportHandlingUnitQuantity;
    }

    /**
     * Sets a new totalTransportHandlingUnitQuantity
     *
     * BBIE
     *  Shipment. Total_ Transport Handling Unit Quantity. Quantity
     *  Count of the number of pieces of transport handling equipment in a shipment, such as pallets, boxes, and cases.
     *  0..1
     *  Shipment
     *  Total
     *  Transport Handling Unit Quantity
     *  Quantity
     *  Quantity. Type
     *  Number of THUs
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TotalTransportHandlingUnitQuantity $totalTransportHandlingUnitQuantity
     * @return self
     */
    public function setTotalTransportHandlingUnitQuantity(\NOKA\PHPUBL\UBL\Common\BasicComponents\TotalTransportHandlingUnitQuantity $totalTransportHandlingUnitQuantity)
    {
        $this->totalTransportHandlingUnitQuantity = $totalTransportHandlingUnitQuantity;
        return $this;
    }

    /**
     * Gets as insuranceValueAmount
     *
     * BBIE
     *  Shipment. Insurance_ Value. Amount
     *  The total sum covered by an insurance for the shipment.
     *  0..1
     *  Shipment
     *  Insurance
     *  Value
     *  Amount
     *  Amount. Type
     *  Value Insured
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\InsuranceValueAmount
     */
    public function getInsuranceValueAmount()
    {
        return $this->insuranceValueAmount;
    }

    /**
     * Sets a new insuranceValueAmount
     *
     * BBIE
     *  Shipment. Insurance_ Value. Amount
     *  The total sum covered by an insurance for the shipment.
     *  0..1
     *  Shipment
     *  Insurance
     *  Value
     *  Amount
     *  Amount. Type
     *  Value Insured
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\InsuranceValueAmount $insuranceValueAmount
     * @return self
     */
    public function setInsuranceValueAmount(\NOKA\PHPUBL\UBL\Common\BasicComponents\InsuranceValueAmount $insuranceValueAmount)
    {
        $this->insuranceValueAmount = $insuranceValueAmount;
        return $this;
    }

    /**
     * Gets as declaredCustomsValueAmount
     *
     * BBIE
     *  Shipment. Declared Customs_ Value. Amount
     *  Amount declared for customs purposes of those goods in a shipment which are subject to the same customs procedure, and have the same tariff/statistical heading, country information, and duty regime.
     *  0..1
     *  Shipment
     *  Declared Customs
     *  Value
     *  Amount
     *  Amount. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\DeclaredCustomsValueAmount
     */
    public function getDeclaredCustomsValueAmount()
    {
        return $this->declaredCustomsValueAmount;
    }

    /**
     * Sets a new declaredCustomsValueAmount
     *
     * BBIE
     *  Shipment. Declared Customs_ Value. Amount
     *  Amount declared for customs purposes of those goods in a shipment which are subject to the same customs procedure, and have the same tariff/statistical heading, country information, and duty regime.
     *  0..1
     *  Shipment
     *  Declared Customs
     *  Value
     *  Amount
     *  Amount. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\DeclaredCustomsValueAmount $declaredCustomsValueAmount
     * @return self
     */
    public function setDeclaredCustomsValueAmount(\NOKA\PHPUBL\UBL\Common\BasicComponents\DeclaredCustomsValueAmount $declaredCustomsValueAmount)
    {
        $this->declaredCustomsValueAmount = $declaredCustomsValueAmount;
        return $this;
    }

    /**
     * Gets as declaredForCarriageValueAmount
     *
     * BBIE
     *  Shipment. Declared For Carriage_ Value. Amount
     *  Value, declared by the shipper or his agent solely for the purpose of varying the carrier's level of liability from that provided in the contract of carriage, in case of loss or damage to goods or delayed delivery.
     *  0..1
     *  Shipment
     *  Declared For Carriage
     *  Value
     *  Amount
     *  Amount. Type
     *  Declared value for carriage, Interest in delivery
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\DeclaredForCarriageValueAmount
     */
    public function getDeclaredForCarriageValueAmount()
    {
        return $this->declaredForCarriageValueAmount;
    }

    /**
     * Sets a new declaredForCarriageValueAmount
     *
     * BBIE
     *  Shipment. Declared For Carriage_ Value. Amount
     *  Value, declared by the shipper or his agent solely for the purpose of varying the carrier's level of liability from that provided in the contract of carriage, in case of loss or damage to goods or delayed delivery.
     *  0..1
     *  Shipment
     *  Declared For Carriage
     *  Value
     *  Amount
     *  Amount. Type
     *  Declared value for carriage, Interest in delivery
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\DeclaredForCarriageValueAmount $declaredForCarriageValueAmount
     * @return self
     */
    public function setDeclaredForCarriageValueAmount(\NOKA\PHPUBL\UBL\Common\BasicComponents\DeclaredForCarriageValueAmount $declaredForCarriageValueAmount)
    {
        $this->declaredForCarriageValueAmount = $declaredForCarriageValueAmount;
        return $this;
    }

    /**
     * Gets as declaredStatisticsValueAmount
     *
     * BBIE
     *  Shipment. Declared Statistics_ Value. Amount
     *  Value declared for statistical purposes of those goods in a consignment which have the same statistical heading.
     *  0..1
     *  Shipment
     *  Declared Statistics
     *  Value
     *  Amount
     *  Amount. Type
     *  Statistical Value
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\DeclaredStatisticsValueAmount
     */
    public function getDeclaredStatisticsValueAmount()
    {
        return $this->declaredStatisticsValueAmount;
    }

    /**
     * Sets a new declaredStatisticsValueAmount
     *
     * BBIE
     *  Shipment. Declared Statistics_ Value. Amount
     *  Value declared for statistical purposes of those goods in a consignment which have the same statistical heading.
     *  0..1
     *  Shipment
     *  Declared Statistics
     *  Value
     *  Amount
     *  Amount. Type
     *  Statistical Value
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\DeclaredStatisticsValueAmount $declaredStatisticsValueAmount
     * @return self
     */
    public function setDeclaredStatisticsValueAmount(\NOKA\PHPUBL\UBL\Common\BasicComponents\DeclaredStatisticsValueAmount $declaredStatisticsValueAmount)
    {
        $this->declaredStatisticsValueAmount = $declaredStatisticsValueAmount;
        return $this;
    }

    /**
     * Gets as freeOnBoardValueAmount
     *
     * BBIE
     *  Shipment. Free On Board_ Value. Amount
     *  Monetary amount that has to be or has been paid as calculated under the applicable trade delivery.
     *  0..1
     *  Shipment
     *  Free On Board
     *  Value
     *  Amount
     *  Amount. Type
     *  FOB Value
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\FreeOnBoardValueAmount
     */
    public function getFreeOnBoardValueAmount()
    {
        return $this->freeOnBoardValueAmount;
    }

    /**
     * Sets a new freeOnBoardValueAmount
     *
     * BBIE
     *  Shipment. Free On Board_ Value. Amount
     *  Monetary amount that has to be or has been paid as calculated under the applicable trade delivery.
     *  0..1
     *  Shipment
     *  Free On Board
     *  Value
     *  Amount
     *  Amount. Type
     *  FOB Value
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\FreeOnBoardValueAmount $freeOnBoardValueAmount
     * @return self
     */
    public function setFreeOnBoardValueAmount(\NOKA\PHPUBL\UBL\Common\BasicComponents\FreeOnBoardValueAmount $freeOnBoardValueAmount)
    {
        $this->freeOnBoardValueAmount = $freeOnBoardValueAmount;
        return $this;
    }

    /**
     * Adds as specialInstructions
     *
     * BBIE
     *  Shipment. Special_ Instructions. Text
     *  Special instructions relating to a shipment.
     *  0..n
     *  Shipment
     *  Special
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\SpecialInstructions $specialInstructions
     */
    public function addToSpecialInstructions(\NOKA\PHPUBL\UBL\Common\BasicComponents\SpecialInstructions $specialInstructions)
    {
        $this->specialInstructions[] = $specialInstructions;
        return $this;
    }

    /**
     * isset specialInstructions
     *
     * BBIE
     *  Shipment. Special_ Instructions. Text
     *  Special instructions relating to a shipment.
     *  0..n
     *  Shipment
     *  Special
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialInstructions($index)
    {
        return isset($this->specialInstructions[$index]);
    }

    /**
     * unset specialInstructions
     *
     * BBIE
     *  Shipment. Special_ Instructions. Text
     *  Special instructions relating to a shipment.
     *  0..n
     *  Shipment
     *  Special
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialInstructions($index)
    {
        unset($this->specialInstructions[$index]);
    }

    /**
     * Gets as specialInstructions
     *
     * BBIE
     *  Shipment. Special_ Instructions. Text
     *  Special instructions relating to a shipment.
     *  0..n
     *  Shipment
     *  Special
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\SpecialInstructions[]
     */
    public function getSpecialInstructions()
    {
        return $this->specialInstructions;
    }

    /**
     * Sets a new specialInstructions
     *
     * BBIE
     *  Shipment. Special_ Instructions. Text
     *  Special instructions relating to a shipment.
     *  0..n
     *  Shipment
     *  Special
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\SpecialInstructions[] $specialInstructions
     * @return self
     */
    public function setSpecialInstructions(array $specialInstructions)
    {
        $this->specialInstructions = $specialInstructions;
        return $this;
    }

    /**
     * Adds as deliveryInstructions
     *
     * BBIE
     *  Shipment. Delivery_ Instructions. Text
     *  Delivery instructions relating to a shipment.
     *  0..n
     *  Shipment
     *  Delivery
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\DeliveryInstructions $deliveryInstructions
     */
    public function addToDeliveryInstructions(\NOKA\PHPUBL\UBL\Common\BasicComponents\DeliveryInstructions $deliveryInstructions)
    {
        $this->deliveryInstructions[] = $deliveryInstructions;
        return $this;
    }

    /**
     * isset deliveryInstructions
     *
     * BBIE
     *  Shipment. Delivery_ Instructions. Text
     *  Delivery instructions relating to a shipment.
     *  0..n
     *  Shipment
     *  Delivery
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeliveryInstructions($index)
    {
        return isset($this->deliveryInstructions[$index]);
    }

    /**
     * unset deliveryInstructions
     *
     * BBIE
     *  Shipment. Delivery_ Instructions. Text
     *  Delivery instructions relating to a shipment.
     *  0..n
     *  Shipment
     *  Delivery
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeliveryInstructions($index)
    {
        unset($this->deliveryInstructions[$index]);
    }

    /**
     * Gets as deliveryInstructions
     *
     * BBIE
     *  Shipment. Delivery_ Instructions. Text
     *  Delivery instructions relating to a shipment.
     *  0..n
     *  Shipment
     *  Delivery
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\DeliveryInstructions[]
     */
    public function getDeliveryInstructions()
    {
        return $this->deliveryInstructions;
    }

    /**
     * Sets a new deliveryInstructions
     *
     * BBIE
     *  Shipment. Delivery_ Instructions. Text
     *  Delivery instructions relating to a shipment.
     *  0..n
     *  Shipment
     *  Delivery
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\DeliveryInstructions[] $deliveryInstructions
     * @return self
     */
    public function setDeliveryInstructions(array $deliveryInstructions)
    {
        $this->deliveryInstructions = $deliveryInstructions;
        return $this;
    }

    /**
     * Gets as splitConsignmentIndicator
     *
     * BBIE
     *  Shipment. Split Consignment_ Indicator. Indicator
     *  Indicates whether the consignment has been split in transit.
     *  0..1
     *  Shipment
     *  Split Consignment
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getSplitConsignmentIndicator()
    {
        return $this->splitConsignmentIndicator;
    }

    /**
     * Sets a new splitConsignmentIndicator
     *
     * BBIE
     *  Shipment. Split Consignment_ Indicator. Indicator
     *  Indicates whether the consignment has been split in transit.
     *  0..1
     *  Shipment
     *  Split Consignment
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $splitConsignmentIndicator
     * @return self
     */
    public function setSplitConsignmentIndicator($splitConsignmentIndicator)
    {
        $this->splitConsignmentIndicator = $splitConsignmentIndicator;
        return $this;
    }

    /**
     * Gets as consignment
     *
     * ASBIE
     *  Shipment. Consignment
     *  An association to Consignment covering the shipment.
     *  1
     *  Shipment
     *  Consignment
     *  Consignment
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\Consignment
     */
    public function getConsignment()
    {
        return $this->consignment;
    }

    /**
     * Sets a new consignment
     *
     * ASBIE
     *  Shipment. Consignment
     *  An association to Consignment covering the shipment.
     *  1
     *  Shipment
     *  Consignment
     *  Consignment
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Consignment $consignment
     * @return self
     */
    public function setConsignment(\NOKA\PHPUBL\UBL\Common\AggregateComponents\Consignment $consignment)
    {
        $this->consignment = $consignment;
        return $this;
    }

    /**
     * Adds as goodsItem
     *
     * ASBIE
     *  Shipment. Goods Item
     *  An association to Goods Item (for Bulk Goods).
     *  0..n
     *  Shipment
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
     *  Shipment. Goods Item
     *  An association to Goods Item (for Bulk Goods).
     *  0..n
     *  Shipment
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
     *  Shipment. Goods Item
     *  An association to Goods Item (for Bulk Goods).
     *  0..n
     *  Shipment
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
     *  Shipment. Goods Item
     *  An association to Goods Item (for Bulk Goods).
     *  0..n
     *  Shipment
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
     *  Shipment. Goods Item
     *  An association to Goods Item (for Bulk Goods).
     *  0..n
     *  Shipment
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
     * Adds as shipmentStage
     *
     * ASBIE
     *  Shipment. Shipment Stage
     *  An association to Shipment Stage.
     *  0..n
     *  Shipment
     *  Shipment Stage
     *  Shipment Stage
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ShipmentStage $shipmentStage
     */
    public function addToShipmentStage(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ShipmentStage $shipmentStage)
    {
        $this->shipmentStage[] = $shipmentStage;
        return $this;
    }

    /**
     * isset shipmentStage
     *
     * ASBIE
     *  Shipment. Shipment Stage
     *  An association to Shipment Stage.
     *  0..n
     *  Shipment
     *  Shipment Stage
     *  Shipment Stage
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipmentStage($index)
    {
        return isset($this->shipmentStage[$index]);
    }

    /**
     * unset shipmentStage
     *
     * ASBIE
     *  Shipment. Shipment Stage
     *  An association to Shipment Stage.
     *  0..n
     *  Shipment
     *  Shipment Stage
     *  Shipment Stage
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipmentStage($index)
    {
        unset($this->shipmentStage[$index]);
    }

    /**
     * Gets as shipmentStage
     *
     * ASBIE
     *  Shipment. Shipment Stage
     *  An association to Shipment Stage.
     *  0..n
     *  Shipment
     *  Shipment Stage
     *  Shipment Stage
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ShipmentStage[]
     */
    public function getShipmentStage()
    {
        return $this->shipmentStage;
    }

    /**
     * Sets a new shipmentStage
     *
     * ASBIE
     *  Shipment. Shipment Stage
     *  An association to Shipment Stage.
     *  0..n
     *  Shipment
     *  Shipment Stage
     *  Shipment Stage
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ShipmentStage[] $shipmentStage
     * @return self
     */
    public function setShipmentStage(array $shipmentStage)
    {
        $this->shipmentStage = $shipmentStage;
        return $this;
    }

    /**
     * Gets as delivery
     *
     * ASBIE
     *  Shipment. Delivery
     *  An association to Delivery.
     *  0..1
     *  Shipment
     *  Delivery
     *  Delivery
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\Delivery
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Sets a new delivery
     *
     * ASBIE
     *  Shipment. Delivery
     *  An association to Delivery.
     *  0..1
     *  Shipment
     *  Delivery
     *  Delivery
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Delivery $delivery
     * @return self
     */
    public function setDelivery(\NOKA\PHPUBL\UBL\Common\AggregateComponents\Delivery $delivery)
    {
        $this->delivery = $delivery;
        return $this;
    }

    /**
     * Adds as transportHandlingUnit
     *
     * ASBIE
     *  Shipment. Transport Handling Unit
     *  An association to Transport Handling Unit used for loose and containerized goods.
     *  0..n
     *  Shipment
     *  Transport Handling Unit
     *  Transport Handling Unit
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransportHandlingUnit $transportHandlingUnit
     */
    public function addToTransportHandlingUnit(\NOKA\PHPUBL\UBL\Common\AggregateComponents\TransportHandlingUnit $transportHandlingUnit)
    {
        $this->transportHandlingUnit[] = $transportHandlingUnit;
        return $this;
    }

    /**
     * isset transportHandlingUnit
     *
     * ASBIE
     *  Shipment. Transport Handling Unit
     *  An association to Transport Handling Unit used for loose and containerized goods.
     *  0..n
     *  Shipment
     *  Transport Handling Unit
     *  Transport Handling Unit
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportHandlingUnit($index)
    {
        return isset($this->transportHandlingUnit[$index]);
    }

    /**
     * unset transportHandlingUnit
     *
     * ASBIE
     *  Shipment. Transport Handling Unit
     *  An association to Transport Handling Unit used for loose and containerized goods.
     *  0..n
     *  Shipment
     *  Transport Handling Unit
     *  Transport Handling Unit
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportHandlingUnit($index)
    {
        unset($this->transportHandlingUnit[$index]);
    }

    /**
     * Gets as transportHandlingUnit
     *
     * ASBIE
     *  Shipment. Transport Handling Unit
     *  An association to Transport Handling Unit used for loose and containerized goods.
     *  0..n
     *  Shipment
     *  Transport Handling Unit
     *  Transport Handling Unit
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransportHandlingUnit[]
     */
    public function getTransportHandlingUnit()
    {
        return $this->transportHandlingUnit;
    }

    /**
     * Sets a new transportHandlingUnit
     *
     * ASBIE
     *  Shipment. Transport Handling Unit
     *  An association to Transport Handling Unit used for loose and containerized goods.
     *  0..n
     *  Shipment
     *  Transport Handling Unit
     *  Transport Handling Unit
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransportHandlingUnit[] $transportHandlingUnit
     * @return self
     */
    public function setTransportHandlingUnit(array $transportHandlingUnit)
    {
        $this->transportHandlingUnit = $transportHandlingUnit;
        return $this;
    }

    /**
     * Gets as originAddress
     *
     * ASBIE
     *  Shipment. Origin_ Address. Address
     *  An association to the region in which the goods have been produced or manufactured, according to criteria laid down for the purposes of application of the Customs tariff, or quantitative restrictions, or of any other measure related to trade.
     *  0..1
     *  Shipment
     *  Origin
     *  Address
     *  Address
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginAddress
     */
    public function getOriginAddress()
    {
        return $this->originAddress;
    }

    /**
     * Sets a new originAddress
     *
     * ASBIE
     *  Shipment. Origin_ Address. Address
     *  An association to the region in which the goods have been produced or manufactured, according to criteria laid down for the purposes of application of the Customs tariff, or quantitative restrictions, or of any other measure related to trade.
     *  0..1
     *  Shipment
     *  Origin
     *  Address
     *  Address
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginAddress $originAddress
     * @return self
     */
    public function setOriginAddress(\NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginAddress $originAddress)
    {
        $this->originAddress = $originAddress;
        return $this;
    }

    /**
     * Gets as firstArrivalPortLocation
     *
     * ASBIE
     *  Shipment. First Arrival Port_ Location. Location
     *  Identifies the first arrival location. This would be a port for sea, airport for air, and border post for land crossing.
     *  0..1
     *  Shipment
     *  First Arrival Port
     *  Location
     *  Location
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\FirstArrivalPortLocation
     */
    public function getFirstArrivalPortLocation()
    {
        return $this->firstArrivalPortLocation;
    }

    /**
     * Sets a new firstArrivalPortLocation
     *
     * ASBIE
     *  Shipment. First Arrival Port_ Location. Location
     *  Identifies the first arrival location. This would be a port for sea, airport for air, and border post for land crossing.
     *  0..1
     *  Shipment
     *  First Arrival Port
     *  Location
     *  Location
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\FirstArrivalPortLocation $firstArrivalPortLocation
     * @return self
     */
    public function setFirstArrivalPortLocation(\NOKA\PHPUBL\UBL\Common\AggregateComponents\FirstArrivalPortLocation $firstArrivalPortLocation)
    {
        $this->firstArrivalPortLocation = $firstArrivalPortLocation;
        return $this;
    }

    /**
     * Gets as lastExitPortLocation
     *
     * ASBIE
     *  Shipment. Last Exit Port_ Location. Location
     *  Identifies the final exporting location. This would be a port for sea, airport for air, and border post for land crossing.
     *  0..1
     *  Shipment
     *  Last Exit Port
     *  Location
     *  Location
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\LastExitPortLocation
     */
    public function getLastExitPortLocation()
    {
        return $this->lastExitPortLocation;
    }

    /**
     * Sets a new lastExitPortLocation
     *
     * ASBIE
     *  Shipment. Last Exit Port_ Location. Location
     *  Identifies the final exporting location. This would be a port for sea, airport for air, and border post for land crossing.
     *  0..1
     *  Shipment
     *  Last Exit Port
     *  Location
     *  Location
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\LastExitPortLocation $lastExitPortLocation
     * @return self
     */
    public function setLastExitPortLocation(\NOKA\PHPUBL\UBL\Common\AggregateComponents\LastExitPortLocation $lastExitPortLocation)
    {
        $this->lastExitPortLocation = $lastExitPortLocation;
        return $this;
    }

    /**
     * Gets as exportCountry
     *
     * ASBIE
     *  Shipment. Export_ Country. Country
     *  Identifies the country from which the goods are originally exported without any commercial transaction taking place in intermediate countries.
     *  0..1
     *  Shipment
     *  Export
     *  Country
     *  Country
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ExportCountry
     */
    public function getExportCountry()
    {
        return $this->exportCountry;
    }

    /**
     * Sets a new exportCountry
     *
     * ASBIE
     *  Shipment. Export_ Country. Country
     *  Identifies the country from which the goods are originally exported without any commercial transaction taking place in intermediate countries.
     *  0..1
     *  Shipment
     *  Export
     *  Country
     *  Country
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ExportCountry $exportCountry
     * @return self
     */
    public function setExportCountry(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ExportCountry $exportCountry)
    {
        $this->exportCountry = $exportCountry;
        return $this;
    }

    /**
     * Adds as freightAllowanceCharge
     *
     * ASBIE
     *  Shipment. Freight_ Allowance Charge. Allowance Charge
     *  Costs incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance (to the extent that they relate to the freight costs).
     *  0..n
     *  Shipment
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\FreightAllowanceCharge $freightAllowanceCharge
     */
    public function addToFreightAllowanceCharge(\NOKA\PHPUBL\UBL\Common\AggregateComponents\FreightAllowanceCharge $freightAllowanceCharge)
    {
        $this->freightAllowanceCharge[] = $freightAllowanceCharge;
        return $this;
    }

    /**
     * isset freightAllowanceCharge
     *
     * ASBIE
     *  Shipment. Freight_ Allowance Charge. Allowance Charge
     *  Costs incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance (to the extent that they relate to the freight costs).
     *  0..n
     *  Shipment
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFreightAllowanceCharge($index)
    {
        return isset($this->freightAllowanceCharge[$index]);
    }

    /**
     * unset freightAllowanceCharge
     *
     * ASBIE
     *  Shipment. Freight_ Allowance Charge. Allowance Charge
     *  Costs incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance (to the extent that they relate to the freight costs).
     *  0..n
     *  Shipment
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFreightAllowanceCharge($index)
    {
        unset($this->freightAllowanceCharge[$index]);
    }

    /**
     * Gets as freightAllowanceCharge
     *
     * ASBIE
     *  Shipment. Freight_ Allowance Charge. Allowance Charge
     *  Costs incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance (to the extent that they relate to the freight costs).
     *  0..n
     *  Shipment
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\FreightAllowanceCharge[]
     */
    public function getFreightAllowanceCharge()
    {
        return $this->freightAllowanceCharge;
    }

    /**
     * Sets a new freightAllowanceCharge
     *
     * ASBIE
     *  Shipment. Freight_ Allowance Charge. Allowance Charge
     *  Costs incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance (to the extent that they relate to the freight costs).
     *  0..n
     *  Shipment
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\FreightAllowanceCharge[] $freightAllowanceCharge
     * @return self
     */
    public function setFreightAllowanceCharge(array $freightAllowanceCharge)
    {
        $this->freightAllowanceCharge = $freightAllowanceCharge;
        return $this;
    }


}

