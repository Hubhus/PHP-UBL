<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing ItemComparisonType
 *
 * ABIE
 *  Item Comparison. Details
 *  Used to compare different items based on cost, quantity, or measurements.
 *  Item Comparison
 * XSD Type: ItemComparisonType
 */
class ItemComparisonType
{

    /**
     * BBIE
     *  Item Comparison. Price. Amount
     *  The price for the comparison quantity of the item.
     *  0..1
     *  Item Comparison
     *  Price
     *  Amount
     *  Amount. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\PriceAmount $priceAmount
     */
    private $priceAmount = null;

    /**
     * BBIE
     *  Item Comparison. Quantity
     *  The quantity used for price comparison with other items.
     *  0..1
     *  Item Comparison
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  "per unit"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Quantity $quantity
     */
    private $quantity = null;

    /**
     * Gets as priceAmount
     *
     * BBIE
     *  Item Comparison. Price. Amount
     *  The price for the comparison quantity of the item.
     *  0..1
     *  Item Comparison
     *  Price
     *  Amount
     *  Amount. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\PriceAmount
     */
    public function getPriceAmount()
    {
        return $this->priceAmount;
    }

    /**
     * Sets a new priceAmount
     *
     * BBIE
     *  Item Comparison. Price. Amount
     *  The price for the comparison quantity of the item.
     *  0..1
     *  Item Comparison
     *  Price
     *  Amount
     *  Amount. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\PriceAmount $priceAmount
     * @return self
     */
    public function setPriceAmount(\NOKA\PHPUBL\UBL\Common\BasicComponents\PriceAmount $priceAmount)
    {
        $this->priceAmount = $priceAmount;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * BBIE
     *  Item Comparison. Quantity
     *  The quantity used for price comparison with other items.
     *  0..1
     *  Item Comparison
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  "per unit"
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
     *  Item Comparison. Quantity
     *  The quantity used for price comparison with other items.
     *  0..1
     *  Item Comparison
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  "per unit"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Quantity $quantity
     * @return self
     */
    public function setQuantity(\NOKA\PHPUBL\UBL\Common\BasicComponents\Quantity $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }


}

