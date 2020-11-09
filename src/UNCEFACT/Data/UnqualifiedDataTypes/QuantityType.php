<?php

namespace NOKA\PHPUBL\UNCEFACT\Data\UnqualifiedDataTypes;

/**
 * Class representing QuantityType
 *
 * UDT0000018
 *  UDT
 *  Quantity. Type
 *  1.0
 *  A counted number of non-monetary units possibly including fractions.
 *  Quantity
 *  decimal
 *  decimal
 * XSD Type: QuantityType
 */
class QuantityType
{

    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * UDT0000018-SC2
     *  SC
     *  Quantity. Unit. Code
     *  The unit of the quantity
     *  Quantity
     *  Unit Code
     *  Code
     *  string
     *  normalizedString
     *
     * @var string $unitCode
     */
    private $unitCode = null;

    /**
     * Construct
     *
     * @param float $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param float $value
     * @return float
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as unitCode
     *
     * UDT0000018-SC2
     *  SC
     *  Quantity. Unit. Code
     *  The unit of the quantity
     *  Quantity
     *  Unit Code
     *  Code
     *  string
     *  normalizedString
     *
     * @return string
     */
    public function getUnitCode()
    {
        return $this->unitCode;
    }

    /**
     * Sets a new unitCode
     *
     * UDT0000018-SC2
     *  SC
     *  Quantity. Unit. Code
     *  The unit of the quantity
     *  Quantity
     *  Unit Code
     *  Code
     *  string
     *  normalizedString
     *
     * @param string $unitCode
     * @return self
     */
    public function setUnitCode($unitCode)
    {
        $this->unitCode = $unitCode;
        return $this;
    }


}

