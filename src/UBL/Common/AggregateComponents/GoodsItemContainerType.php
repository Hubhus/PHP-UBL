<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing GoodsItemContainerType
 *
 * ABIE
 *  Goods Item Container. Details
 *  How goods items are split across transport equipment.
 *  Goods Item Container
 * XSD Type: GoodsItemContainerType
 */
class GoodsItemContainerType
{

    /**
     * BBIE
     *  Goods Item Container. Identifier
     *  Identifies goods items split across transport equipment.
     *  1
     *  Goods Item Container
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Goods Item Container. Quantity
     *  Number of goods items loaded into or onto one piece of transport equipment as a total consignment or part of a consignment.
     *  0..1
     *  Goods Item Container
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  Number of packages stuffed
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Quantity $quantity
     */
    private $quantity = null;

    /**
     * ASBIE
     *  Goods Item Container. Transport Equipment
     *  Associates the containers for a single goods item.
     *  0..n
     *  Goods Item Container
     *  Transport Equipment
     *  Transport Equipment
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransportEquipment[] $transportEquipment
     */
    private $transportEquipment = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Goods Item Container. Identifier
     *  Identifies goods items split across transport equipment.
     *  1
     *  Goods Item Container
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
     *  Goods Item Container. Identifier
     *  Identifies goods items split across transport equipment.
     *  1
     *  Goods Item Container
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
     *  Goods Item Container. Quantity
     *  Number of goods items loaded into or onto one piece of transport equipment as a total consignment or part of a consignment.
     *  0..1
     *  Goods Item Container
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  Number of packages stuffed
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
     *  Goods Item Container. Quantity
     *  Number of goods items loaded into or onto one piece of transport equipment as a total consignment or part of a consignment.
     *  0..1
     *  Goods Item Container
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  Number of packages stuffed
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
     * Adds as transportEquipment
     *
     * ASBIE
     *  Goods Item Container. Transport Equipment
     *  Associates the containers for a single goods item.
     *  0..n
     *  Goods Item Container
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
     *  Goods Item Container. Transport Equipment
     *  Associates the containers for a single goods item.
     *  0..n
     *  Goods Item Container
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
     *  Goods Item Container. Transport Equipment
     *  Associates the containers for a single goods item.
     *  0..n
     *  Goods Item Container
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
     *  Goods Item Container. Transport Equipment
     *  Associates the containers for a single goods item.
     *  0..n
     *  Goods Item Container
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
     *  Goods Item Container. Transport Equipment
     *  Associates the containers for a single goods item.
     *  0..n
     *  Goods Item Container
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


}

