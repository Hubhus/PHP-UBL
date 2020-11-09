<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing OrderedShipmentType
 *
 * ABIE
 *  Ordered Shipment. Details
 *  Information about an Ordered Shipment.
 *  Ordered Shipment
 * XSD Type: OrderedShipmentType
 */
class OrderedShipmentType
{

    /**
     * ASBIE
     *  Ordered Shipment. Shipment
     *  An association to Shipment.
     *  1
     *  Ordered Shipment
     *  Shipment
     *  Shipment
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Shipment $shipment
     */
    private $shipment = null;

    /**
     * ASBIE
     *  Ordered Shipment. Package
     *  An association to Package.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Package[] $package
     */
    private $package = [
        
    ];

    /**
     * Gets as shipment
     *
     * ASBIE
     *  Ordered Shipment. Shipment
     *  An association to Shipment.
     *  1
     *  Ordered Shipment
     *  Shipment
     *  Shipment
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\Shipment
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * Sets a new shipment
     *
     * ASBIE
     *  Ordered Shipment. Shipment
     *  An association to Shipment.
     *  1
     *  Ordered Shipment
     *  Shipment
     *  Shipment
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Shipment $shipment
     * @return self
     */
    public function setShipment(\NOKA\PHPUBL\UBL\Common\AggregateComponents\Shipment $shipment)
    {
        $this->shipment = $shipment;
        return $this;
    }

    /**
     * Adds as package
     *
     * ASBIE
     *  Ordered Shipment. Package
     *  An association to Package.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Package $package
     */
    public function addToPackage(\NOKA\PHPUBL\UBL\Common\AggregateComponents\Package $package)
    {
        $this->package[] = $package;
        return $this;
    }

    /**
     * isset package
     *
     * ASBIE
     *  Ordered Shipment. Package
     *  An association to Package.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackage($index)
    {
        return isset($this->package[$index]);
    }

    /**
     * unset package
     *
     * ASBIE
     *  Ordered Shipment. Package
     *  An association to Package.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackage($index)
    {
        unset($this->package[$index]);
    }

    /**
     * Gets as package
     *
     * ASBIE
     *  Ordered Shipment. Package
     *  An association to Package.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\Package[]
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * Sets a new package
     *
     * ASBIE
     *  Ordered Shipment. Package
     *  An association to Package.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Package[] $package
     * @return self
     */
    public function setPackage(array $package)
    {
        $this->package = $package;
        return $this;
    }


}

