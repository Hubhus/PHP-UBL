<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing TransportationServiceType
 *
 * ABIE
 *  Transportation Service. Details
 *  Transport service details.
 *  Transportation Service
 * XSD Type: TransportationServiceType
 */
class TransportationServiceType
{

    /**
     * BBIE
     *  Transportation Service. Transport Service Code. Code
     *  A code which describes the general type of service required for the transportation of goods. Specifically, it identifies the extent of the transportation service, e.g., door-to-door, port-to-port.
     *  1
     *  Transportation Service
     *  Transport Service Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TransportServiceCode $transportServiceCode
     */
    private $transportServiceCode = null;

    /**
     * BBIE
     *  Transportation Service. Tariff Class Code. Code
     *  Specification of a tariff class applicable to a transportation service.
     *  0..1
     *  Transportation Service
     *  Tariff Class Code
     *  Code
     *  Code. Type
     *  Tariff Class Specifier
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TariffClassCode $tariffClassCode
     */
    private $tariffClassCode = null;

    /**
     * BBIE
     *  Transportation Service. Priority. Text
     *  Statement indicating priority of requested transportation service.
     *  0..1
     *  Transportation Service
     *  Priority
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Priority $priority
     */
    private $priority = null;

    /**
     * BBIE
     *  Transportation Service. Freight Rate Class Code. Code
     *  Code to indicate applicable rate class for freight.
     *  0..1
     *  Transportation Service
     *  Freight Rate Class Code
     *  Code
     *  Code. Type
     *  Charge Basis
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\FreightRateClassCode $freightRateClassCode
     */
    private $freightRateClassCode = null;

    /**
     * Gets as transportServiceCode
     *
     * BBIE
     *  Transportation Service. Transport Service Code. Code
     *  A code which describes the general type of service required for the transportation of goods. Specifically, it identifies the extent of the transportation service, e.g., door-to-door, port-to-port.
     *  1
     *  Transportation Service
     *  Transport Service Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TransportServiceCode
     */
    public function getTransportServiceCode()
    {
        return $this->transportServiceCode;
    }

    /**
     * Sets a new transportServiceCode
     *
     * BBIE
     *  Transportation Service. Transport Service Code. Code
     *  A code which describes the general type of service required for the transportation of goods. Specifically, it identifies the extent of the transportation service, e.g., door-to-door, port-to-port.
     *  1
     *  Transportation Service
     *  Transport Service Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TransportServiceCode $transportServiceCode
     * @return self
     */
    public function setTransportServiceCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\TransportServiceCode $transportServiceCode)
    {
        $this->transportServiceCode = $transportServiceCode;
        return $this;
    }

    /**
     * Gets as tariffClassCode
     *
     * BBIE
     *  Transportation Service. Tariff Class Code. Code
     *  Specification of a tariff class applicable to a transportation service.
     *  0..1
     *  Transportation Service
     *  Tariff Class Code
     *  Code
     *  Code. Type
     *  Tariff Class Specifier
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TariffClassCode
     */
    public function getTariffClassCode()
    {
        return $this->tariffClassCode;
    }

    /**
     * Sets a new tariffClassCode
     *
     * BBIE
     *  Transportation Service. Tariff Class Code. Code
     *  Specification of a tariff class applicable to a transportation service.
     *  0..1
     *  Transportation Service
     *  Tariff Class Code
     *  Code
     *  Code. Type
     *  Tariff Class Specifier
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TariffClassCode $tariffClassCode
     * @return self
     */
    public function setTariffClassCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\TariffClassCode $tariffClassCode)
    {
        $this->tariffClassCode = $tariffClassCode;
        return $this;
    }

    /**
     * Gets as priority
     *
     * BBIE
     *  Transportation Service. Priority. Text
     *  Statement indicating priority of requested transportation service.
     *  0..1
     *  Transportation Service
     *  Priority
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Priority
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Sets a new priority
     *
     * BBIE
     *  Transportation Service. Priority. Text
     *  Statement indicating priority of requested transportation service.
     *  0..1
     *  Transportation Service
     *  Priority
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Priority $priority
     * @return self
     */
    public function setPriority(\NOKA\PHPUBL\UBL\Common\BasicComponents\Priority $priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Gets as freightRateClassCode
     *
     * BBIE
     *  Transportation Service. Freight Rate Class Code. Code
     *  Code to indicate applicable rate class for freight.
     *  0..1
     *  Transportation Service
     *  Freight Rate Class Code
     *  Code
     *  Code. Type
     *  Charge Basis
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\FreightRateClassCode
     */
    public function getFreightRateClassCode()
    {
        return $this->freightRateClassCode;
    }

    /**
     * Sets a new freightRateClassCode
     *
     * BBIE
     *  Transportation Service. Freight Rate Class Code. Code
     *  Code to indicate applicable rate class for freight.
     *  0..1
     *  Transportation Service
     *  Freight Rate Class Code
     *  Code
     *  Code. Type
     *  Charge Basis
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\FreightRateClassCode $freightRateClassCode
     * @return self
     */
    public function setFreightRateClassCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\FreightRateClassCode $freightRateClassCode)
    {
        $this->freightRateClassCode = $freightRateClassCode;
        return $this;
    }


}

