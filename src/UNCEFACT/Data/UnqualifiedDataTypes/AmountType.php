<?php

namespace NOKA\PHPUBL\UNCEFACT\Data\UnqualifiedDataTypes;

/**
 * Class representing AmountType
 *
 * UDT000001
 *  UDT
 *  Amount. Type
 *  1.0
 *  A number of monetary units specified in a currency where the unit of the currency is explicit or implied.
 *  Amount
 *  decimal
 *  decimal
 * XSD Type: AmountType
 */
class AmountType
{

    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * UDT000001-SC2
     *  SC
     *  Amount Currency. Identifier
     *  The currency of the amount.
     *  Amount Currency
     *  Identification
     *  Identifier
     *  string
     *  normalisedString
     *
     * @var string $currencyID
     */
    private $currencyID = null;

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
     * Gets as currencyID
     *
     * UDT000001-SC2
     *  SC
     *  Amount Currency. Identifier
     *  The currency of the amount.
     *  Amount Currency
     *  Identification
     *  Identifier
     *  string
     *  normalisedString
     *
     * @return string
     */
    public function getCurrencyID()
    {
        return $this->currencyID;
    }

    /**
     * Sets a new currencyID
     *
     * UDT000001-SC2
     *  SC
     *  Amount Currency. Identifier
     *  The currency of the amount.
     *  Amount Currency
     *  Identification
     *  Identifier
     *  string
     *  normalisedString
     *
     * @param string $currencyID
     * @return self
     */
    public function setCurrencyID($currencyID)
    {
        $this->currencyID = $currencyID;
        return $this;
    }


}

