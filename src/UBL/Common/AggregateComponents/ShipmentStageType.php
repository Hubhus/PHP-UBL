<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing ShipmentStageType
 *
 * ABIE
 *  Shipment Stage. Details
 *  Information about a shipment stage.
 *  Shipment Stage
 * XSD Type: ShipmentStageType
 */
class ShipmentStageType
{

    /**
     * BBIE
     *  Shipment Stage. Identifier
     *  Identifies a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "1","2", etc..
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Shipment Stage. Transport Mode Code. Code
     *  The method of transport used for a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transport Mode Code
     *  Code
     *  Transport Mode_ Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TransportModeCode $transportModeCode
     */
    private $transportModeCode = null;

    /**
     * BBIE
     *  Shipment Stage. Transport Means Type Code. Code
     *  The type of vehicle used for a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transport Means Type Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TransportMeansTypeCode $transportMeansTypeCode
     */
    private $transportMeansTypeCode = null;

    /**
     * BBIE
     *  Shipment Stage. Transit_ Direction Code. Code
     *  The direction of transit for a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transit
     *  Direction Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TransitDirectionCode $transitDirectionCode
     */
    private $transitDirectionCode = null;

    /**
     * BBIE
     *  Shipment Stage. Pre Carriage_ Indicator. Indicator
     *  Indicates whether the stage is before the main carriage of the shipment.
     *  1
     *  Shipment Stage
     *  Pre Carriage
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Truck delivery to wharf
     *
     * @var bool $preCarriageIndicator
     */
    private $preCarriageIndicator = null;

    /**
     * BBIE
     *  Shipment Stage. On Carriage_ Indicator. Indicator
     *  Indicates whether the stage is after the main carriage of the shipment.
     *  1
     *  Shipment Stage
     *  On Carriage
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Truck delivery from wharf
     *
     * @var bool $onCarriageIndicator
     */
    private $onCarriageIndicator = null;

    /**
     * ASBIE
     *  Shipment Stage. Transit_ Period. Period
     *  An association to Transit Period.
     *  0..1
     *  Shipment Stage
     *  Transit
     *  Period
     *  Period
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransitPeriod $transitPeriod
     */
    private $transitPeriod = null;

    /**
     * ASBIE
     *  Shipment Stage. Carrier_ Party. Party
     *  An association to Carrier.
     *  0..n
     *  Shipment Stage
     *  Carrier
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\CarrierParty[] $carrierParty
     */
    private $carrierParty = [
        
    ];

    /**
     * ASBIE
     *  Shipment Stage. Transport Means
     *  An association to the means of transport.
     *  0..1
     *  Shipment Stage
     *  Transport Means
     *  Transport Means
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransportMeans $transportMeans
     */
    private $transportMeans = null;

    /**
     * ASBIE
     *  Shipment Stage. Loading Port_ Location. Location
     *  An association to the port location of loading.
     *  0..1
     *  Shipment Stage
     *  Loading Port
     *  Location
     *  Location
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\LoadingPortLocation $loadingPortLocation
     */
    private $loadingPortLocation = null;

    /**
     * ASBIE
     *  Shipment Stage. Unloading Port_ Location. Location
     *  An association to the port location of unloading.
     *  0..1
     *  Shipment Stage
     *  Unloading Port
     *  Location
     *  Location
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\UnloadingPortLocation $unloadingPortLocation
     */
    private $unloadingPortLocation = null;

    /**
     * ASBIE
     *  Shipment Stage. Transship Port_ Location. Location
     *  An association to the port location of transshipment.
     *  0..1
     *  Shipment Stage
     *  Transship Port
     *  Location
     *  Location
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransshipPortLocation $transshipPortLocation
     */
    private $transshipPortLocation = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Shipment Stage. Identifier
     *  Identifies a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "1","2", etc..
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
     *  Shipment Stage. Identifier
     *  Identifies a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "1","2", etc..
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
     * Gets as transportModeCode
     *
     * BBIE
     *  Shipment Stage. Transport Mode Code. Code
     *  The method of transport used for a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transport Mode Code
     *  Code
     *  Transport Mode_ Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TransportModeCode
     */
    public function getTransportModeCode()
    {
        return $this->transportModeCode;
    }

    /**
     * Sets a new transportModeCode
     *
     * BBIE
     *  Shipment Stage. Transport Mode Code. Code
     *  The method of transport used for a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transport Mode Code
     *  Code
     *  Transport Mode_ Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TransportModeCode $transportModeCode
     * @return self
     */
    public function setTransportModeCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\TransportModeCode $transportModeCode)
    {
        $this->transportModeCode = $transportModeCode;
        return $this;
    }

    /**
     * Gets as transportMeansTypeCode
     *
     * BBIE
     *  Shipment Stage. Transport Means Type Code. Code
     *  The type of vehicle used for a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transport Means Type Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TransportMeansTypeCode
     */
    public function getTransportMeansTypeCode()
    {
        return $this->transportMeansTypeCode;
    }

    /**
     * Sets a new transportMeansTypeCode
     *
     * BBIE
     *  Shipment Stage. Transport Means Type Code. Code
     *  The type of vehicle used for a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transport Means Type Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TransportMeansTypeCode $transportMeansTypeCode
     * @return self
     */
    public function setTransportMeansTypeCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\TransportMeansTypeCode $transportMeansTypeCode)
    {
        $this->transportMeansTypeCode = $transportMeansTypeCode;
        return $this;
    }

    /**
     * Gets as transitDirectionCode
     *
     * BBIE
     *  Shipment Stage. Transit_ Direction Code. Code
     *  The direction of transit for a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transit
     *  Direction Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TransitDirectionCode
     */
    public function getTransitDirectionCode()
    {
        return $this->transitDirectionCode;
    }

    /**
     * Sets a new transitDirectionCode
     *
     * BBIE
     *  Shipment Stage. Transit_ Direction Code. Code
     *  The direction of transit for a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transit
     *  Direction Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TransitDirectionCode $transitDirectionCode
     * @return self
     */
    public function setTransitDirectionCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\TransitDirectionCode $transitDirectionCode)
    {
        $this->transitDirectionCode = $transitDirectionCode;
        return $this;
    }

    /**
     * Gets as preCarriageIndicator
     *
     * BBIE
     *  Shipment Stage. Pre Carriage_ Indicator. Indicator
     *  Indicates whether the stage is before the main carriage of the shipment.
     *  1
     *  Shipment Stage
     *  Pre Carriage
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Truck delivery to wharf
     *
     * @return bool
     */
    public function getPreCarriageIndicator()
    {
        return $this->preCarriageIndicator;
    }

    /**
     * Sets a new preCarriageIndicator
     *
     * BBIE
     *  Shipment Stage. Pre Carriage_ Indicator. Indicator
     *  Indicates whether the stage is before the main carriage of the shipment.
     *  1
     *  Shipment Stage
     *  Pre Carriage
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Truck delivery to wharf
     *
     * @param bool $preCarriageIndicator
     * @return self
     */
    public function setPreCarriageIndicator($preCarriageIndicator)
    {
        $this->preCarriageIndicator = $preCarriageIndicator;
        return $this;
    }

    /**
     * Gets as onCarriageIndicator
     *
     * BBIE
     *  Shipment Stage. On Carriage_ Indicator. Indicator
     *  Indicates whether the stage is after the main carriage of the shipment.
     *  1
     *  Shipment Stage
     *  On Carriage
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Truck delivery from wharf
     *
     * @return bool
     */
    public function getOnCarriageIndicator()
    {
        return $this->onCarriageIndicator;
    }

    /**
     * Sets a new onCarriageIndicator
     *
     * BBIE
     *  Shipment Stage. On Carriage_ Indicator. Indicator
     *  Indicates whether the stage is after the main carriage of the shipment.
     *  1
     *  Shipment Stage
     *  On Carriage
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Truck delivery from wharf
     *
     * @param bool $onCarriageIndicator
     * @return self
     */
    public function setOnCarriageIndicator($onCarriageIndicator)
    {
        $this->onCarriageIndicator = $onCarriageIndicator;
        return $this;
    }

    /**
     * Gets as transitPeriod
     *
     * ASBIE
     *  Shipment Stage. Transit_ Period. Period
     *  An association to Transit Period.
     *  0..1
     *  Shipment Stage
     *  Transit
     *  Period
     *  Period
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransitPeriod
     */
    public function getTransitPeriod()
    {
        return $this->transitPeriod;
    }

    /**
     * Sets a new transitPeriod
     *
     * ASBIE
     *  Shipment Stage. Transit_ Period. Period
     *  An association to Transit Period.
     *  0..1
     *  Shipment Stage
     *  Transit
     *  Period
     *  Period
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransitPeriod $transitPeriod
     * @return self
     */
    public function setTransitPeriod(\NOKA\PHPUBL\UBL\Common\AggregateComponents\TransitPeriod $transitPeriod)
    {
        $this->transitPeriod = $transitPeriod;
        return $this;
    }

    /**
     * Adds as carrierParty
     *
     * ASBIE
     *  Shipment Stage. Carrier_ Party. Party
     *  An association to Carrier.
     *  0..n
     *  Shipment Stage
     *  Carrier
     *  Party
     *  Party
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\CarrierParty $carrierParty
     */
    public function addToCarrierParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\CarrierParty $carrierParty)
    {
        $this->carrierParty[] = $carrierParty;
        return $this;
    }

    /**
     * isset carrierParty
     *
     * ASBIE
     *  Shipment Stage. Carrier_ Party. Party
     *  An association to Carrier.
     *  0..n
     *  Shipment Stage
     *  Carrier
     *  Party
     *  Party
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCarrierParty($index)
    {
        return isset($this->carrierParty[$index]);
    }

    /**
     * unset carrierParty
     *
     * ASBIE
     *  Shipment Stage. Carrier_ Party. Party
     *  An association to Carrier.
     *  0..n
     *  Shipment Stage
     *  Carrier
     *  Party
     *  Party
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCarrierParty($index)
    {
        unset($this->carrierParty[$index]);
    }

    /**
     * Gets as carrierParty
     *
     * ASBIE
     *  Shipment Stage. Carrier_ Party. Party
     *  An association to Carrier.
     *  0..n
     *  Shipment Stage
     *  Carrier
     *  Party
     *  Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\CarrierParty[]
     */
    public function getCarrierParty()
    {
        return $this->carrierParty;
    }

    /**
     * Sets a new carrierParty
     *
     * ASBIE
     *  Shipment Stage. Carrier_ Party. Party
     *  An association to Carrier.
     *  0..n
     *  Shipment Stage
     *  Carrier
     *  Party
     *  Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\CarrierParty[] $carrierParty
     * @return self
     */
    public function setCarrierParty(array $carrierParty)
    {
        $this->carrierParty = $carrierParty;
        return $this;
    }

    /**
     * Gets as transportMeans
     *
     * ASBIE
     *  Shipment Stage. Transport Means
     *  An association to the means of transport.
     *  0..1
     *  Shipment Stage
     *  Transport Means
     *  Transport Means
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransportMeans
     */
    public function getTransportMeans()
    {
        return $this->transportMeans;
    }

    /**
     * Sets a new transportMeans
     *
     * ASBIE
     *  Shipment Stage. Transport Means
     *  An association to the means of transport.
     *  0..1
     *  Shipment Stage
     *  Transport Means
     *  Transport Means
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransportMeans $transportMeans
     * @return self
     */
    public function setTransportMeans(\NOKA\PHPUBL\UBL\Common\AggregateComponents\TransportMeans $transportMeans)
    {
        $this->transportMeans = $transportMeans;
        return $this;
    }

    /**
     * Gets as loadingPortLocation
     *
     * ASBIE
     *  Shipment Stage. Loading Port_ Location. Location
     *  An association to the port location of loading.
     *  0..1
     *  Shipment Stage
     *  Loading Port
     *  Location
     *  Location
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\LoadingPortLocation
     */
    public function getLoadingPortLocation()
    {
        return $this->loadingPortLocation;
    }

    /**
     * Sets a new loadingPortLocation
     *
     * ASBIE
     *  Shipment Stage. Loading Port_ Location. Location
     *  An association to the port location of loading.
     *  0..1
     *  Shipment Stage
     *  Loading Port
     *  Location
     *  Location
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\LoadingPortLocation $loadingPortLocation
     * @return self
     */
    public function setLoadingPortLocation(\NOKA\PHPUBL\UBL\Common\AggregateComponents\LoadingPortLocation $loadingPortLocation)
    {
        $this->loadingPortLocation = $loadingPortLocation;
        return $this;
    }

    /**
     * Gets as unloadingPortLocation
     *
     * ASBIE
     *  Shipment Stage. Unloading Port_ Location. Location
     *  An association to the port location of unloading.
     *  0..1
     *  Shipment Stage
     *  Unloading Port
     *  Location
     *  Location
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\UnloadingPortLocation
     */
    public function getUnloadingPortLocation()
    {
        return $this->unloadingPortLocation;
    }

    /**
     * Sets a new unloadingPortLocation
     *
     * ASBIE
     *  Shipment Stage. Unloading Port_ Location. Location
     *  An association to the port location of unloading.
     *  0..1
     *  Shipment Stage
     *  Unloading Port
     *  Location
     *  Location
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\UnloadingPortLocation $unloadingPortLocation
     * @return self
     */
    public function setUnloadingPortLocation(\NOKA\PHPUBL\UBL\Common\AggregateComponents\UnloadingPortLocation $unloadingPortLocation)
    {
        $this->unloadingPortLocation = $unloadingPortLocation;
        return $this;
    }

    /**
     * Gets as transshipPortLocation
     *
     * ASBIE
     *  Shipment Stage. Transship Port_ Location. Location
     *  An association to the port location of transshipment.
     *  0..1
     *  Shipment Stage
     *  Transship Port
     *  Location
     *  Location
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransshipPortLocation
     */
    public function getTransshipPortLocation()
    {
        return $this->transshipPortLocation;
    }

    /**
     * Sets a new transshipPortLocation
     *
     * ASBIE
     *  Shipment Stage. Transship Port_ Location. Location
     *  An association to the port location of transshipment.
     *  0..1
     *  Shipment Stage
     *  Transship Port
     *  Location
     *  Location
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransshipPortLocation $transshipPortLocation
     * @return self
     */
    public function setTransshipPortLocation(\NOKA\PHPUBL\UBL\Common\AggregateComponents\TransshipPortLocation $transshipPortLocation)
    {
        $this->transshipPortLocation = $transshipPortLocation;
        return $this;
    }


}

