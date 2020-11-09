<?php

namespace NOKA\PHPUBL\UNCEFACT\Data\UnqualifiedDataTypes;

/**
 * Class representing MeasureType
 *
 * UDT0000013
 *  UDT
 *  Measure. Type
 *  1.0
 *  A numeric value determined by measuring an object along with the specified unit of measure.
 *  Measure
 *  Type
 *  decimal
 *  decimal
 * XSD Type: MeasureType
 */
class MeasureType
{

    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * UDT0000013-SC2
     *  SC
     *  Measure Unit. Code
     *  The type of unit of measure.
     *  Measure Unit
     *  Code
     *  Code
     *  string
     *  normalizedString
     *  Reference UN/ECE Rec 20 and X12 355.
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
     * UDT0000013-SC2
     *  SC
     *  Measure Unit. Code
     *  The type of unit of measure.
     *  Measure Unit
     *  Code
     *  Code
     *  string
     *  normalizedString
     *  Reference UN/ECE Rec 20 and X12 355.
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
     * UDT0000013-SC2
     *  SC
     *  Measure Unit. Code
     *  The type of unit of measure.
     *  Measure Unit
     *  Code
     *  Code
     *  string
     *  normalizedString
     *  Reference UN/ECE Rec 20 and X12 355.
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

