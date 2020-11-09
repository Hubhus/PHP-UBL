<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing PricingReferenceType
 *
 * ABIE
 *  Pricing Reference. Details
 *  A reference to Pricing Information.
 *  Pricing Reference
 * XSD Type: PricingReferenceType
 */
class PricingReferenceType
{

    /**
     * ASBIE
     *  Pricing Reference. Original_ Item Location Quantity. Item Location Quantity
     *  An association to the original Item Location Quantity.
     *  0..1
     *  Pricing Reference
     *  Original
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginalItemLocationQuantity $originalItemLocationQuantity
     */
    private $originalItemLocationQuantity = null;

    /**
     * ASBIE
     *  Pricing Reference. Alternative Condition_ Price. Price
     *  The price expressed in terms other than the actual price, e.g., the list price v. the contracted price, or the price in bags v. the price in kilos, or the list price in bags v. the contracted price in kilos.
     *  0..n
     *  Pricing Reference
     *  Alternative Condition
     *  Price
     *  Price
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AlternativeConditionPrice[] $alternativeConditionPrice
     */
    private $alternativeConditionPrice = [
        
    ];

    /**
     * Gets as originalItemLocationQuantity
     *
     * ASBIE
     *  Pricing Reference. Original_ Item Location Quantity. Item Location Quantity
     *  An association to the original Item Location Quantity.
     *  0..1
     *  Pricing Reference
     *  Original
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginalItemLocationQuantity
     */
    public function getOriginalItemLocationQuantity()
    {
        return $this->originalItemLocationQuantity;
    }

    /**
     * Sets a new originalItemLocationQuantity
     *
     * ASBIE
     *  Pricing Reference. Original_ Item Location Quantity. Item Location Quantity
     *  An association to the original Item Location Quantity.
     *  0..1
     *  Pricing Reference
     *  Original
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginalItemLocationQuantity $originalItemLocationQuantity
     * @return self
     */
    public function setOriginalItemLocationQuantity(\NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginalItemLocationQuantity $originalItemLocationQuantity)
    {
        $this->originalItemLocationQuantity = $originalItemLocationQuantity;
        return $this;
    }

    /**
     * Adds as alternativeConditionPrice
     *
     * ASBIE
     *  Pricing Reference. Alternative Condition_ Price. Price
     *  The price expressed in terms other than the actual price, e.g., the list price v. the contracted price, or the price in bags v. the price in kilos, or the list price in bags v. the contracted price in kilos.
     *  0..n
     *  Pricing Reference
     *  Alternative Condition
     *  Price
     *  Price
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\AlternativeConditionPrice $alternativeConditionPrice
     */
    public function addToAlternativeConditionPrice(\NOKA\PHPUBL\UBL\Common\AggregateComponents\AlternativeConditionPrice $alternativeConditionPrice)
    {
        $this->alternativeConditionPrice[] = $alternativeConditionPrice;
        return $this;
    }

    /**
     * isset alternativeConditionPrice
     *
     * ASBIE
     *  Pricing Reference. Alternative Condition_ Price. Price
     *  The price expressed in terms other than the actual price, e.g., the list price v. the contracted price, or the price in bags v. the price in kilos, or the list price in bags v. the contracted price in kilos.
     *  0..n
     *  Pricing Reference
     *  Alternative Condition
     *  Price
     *  Price
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAlternativeConditionPrice($index)
    {
        return isset($this->alternativeConditionPrice[$index]);
    }

    /**
     * unset alternativeConditionPrice
     *
     * ASBIE
     *  Pricing Reference. Alternative Condition_ Price. Price
     *  The price expressed in terms other than the actual price, e.g., the list price v. the contracted price, or the price in bags v. the price in kilos, or the list price in bags v. the contracted price in kilos.
     *  0..n
     *  Pricing Reference
     *  Alternative Condition
     *  Price
     *  Price
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAlternativeConditionPrice($index)
    {
        unset($this->alternativeConditionPrice[$index]);
    }

    /**
     * Gets as alternativeConditionPrice
     *
     * ASBIE
     *  Pricing Reference. Alternative Condition_ Price. Price
     *  The price expressed in terms other than the actual price, e.g., the list price v. the contracted price, or the price in bags v. the price in kilos, or the list price in bags v. the contracted price in kilos.
     *  0..n
     *  Pricing Reference
     *  Alternative Condition
     *  Price
     *  Price
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\AlternativeConditionPrice[]
     */
    public function getAlternativeConditionPrice()
    {
        return $this->alternativeConditionPrice;
    }

    /**
     * Sets a new alternativeConditionPrice
     *
     * ASBIE
     *  Pricing Reference. Alternative Condition_ Price. Price
     *  The price expressed in terms other than the actual price, e.g., the list price v. the contracted price, or the price in bags v. the price in kilos, or the list price in bags v. the contracted price in kilos.
     *  0..n
     *  Pricing Reference
     *  Alternative Condition
     *  Price
     *  Price
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\AlternativeConditionPrice[] $alternativeConditionPrice
     * @return self
     */
    public function setAlternativeConditionPrice(array $alternativeConditionPrice)
    {
        $this->alternativeConditionPrice = $alternativeConditionPrice;
        return $this;
    }


}

