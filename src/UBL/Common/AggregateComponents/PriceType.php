<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing PriceType
 *
 * ABIE
 *  Price. Details
 *  Information about the price.
 *  Price
 * XSD Type: PriceType
 */
class PriceType
{

    /**
     * BBIE
     *  Price. Price Amount. Amount
     *  The price amount.
     *  1
     *  Price
     *  Price Amount
     *  Amount
     *  Amount. Type
     *  unit price
     *  23.45
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\PriceAmount $priceAmount
     */
    private $priceAmount = null;

    /**
     * BBIE
     *  Price. Base_ Quantity. Quantity
     *  The actual quantity to which the price applies.
     *  0..1
     *  Price
     *  Base
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\BaseQuantity $baseQuantity
     */
    private $baseQuantity = null;

    /**
     * BBIE
     *  Price. Price Change_ Reason. Text
     *  The reason for the price change, expressed as text.
     *  0..n
     *  Price
     *  Price Change
     *  Reason
     *  Text
     *  Text. Type
     *  "Clearance of old stock", "New contract applies"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\PriceChangeReason[] $priceChangeReason
     */
    private $priceChangeReason = [
        
    ];

    /**
     * BBIE
     *  Price. Price Type Code. Code
     *  The price type, expressed as a code.
     *  0..1
     *  Price
     *  Price Type Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\PriceTypeCode $priceTypeCode
     */
    private $priceTypeCode = null;

    /**
     * BBIE
     *  Price. Price Type. Text
     *  The price type, expressed as text.
     *  0..1
     *  Price
     *  Price Type
     *  Text
     *  Text. Type
     *  retail, wholesale, discount, contract
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\PriceType $priceType
     */
    private $priceType = null;

    /**
     * BBIE
     *  Price. Orderable Unit Factor. Rate
     *  The factor by which the base price unit can be converted to the orderable unit.
     *  0..1
     *  Price
     *  Orderable Unit Factor
     *  Rate
     *  Rate. Type
     *  Nails are priced by weight but ordered by quantity. So this would say how many nails per kilo
     *
     * @var float $orderableUnitFactorRate
     */
    private $orderableUnitFactorRate = null;

    /**
     * ASBIE
     *  Price. Validity_ Period. Period
     *  An association to Validity Period.
     *  0..n
     *  Price
     *  Validity
     *  Period
     *  Period
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ValidityPeriod[] $validityPeriod
     */
    private $validityPeriod = [
        
    ];

    /**
     * ASBIE
     *  Price. Price List
     *  A reference to a Price List.
     *  0..1
     *  Price
     *  Price List
     *  Price List
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\PriceList $priceList
     */
    private $priceList = null;

    /**
     * ASBIE
     *  Price. Allowance Charge
     *  An association to Allowance Charge.
     *  0..n
     *  Price
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AllowanceCharge[] $allowanceCharge
     */
    private $allowanceCharge = [
        
    ];

    /**
     * Gets as priceAmount
     *
     * BBIE
     *  Price. Price Amount. Amount
     *  The price amount.
     *  1
     *  Price
     *  Price Amount
     *  Amount
     *  Amount. Type
     *  unit price
     *  23.45
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
     *  Price. Price Amount. Amount
     *  The price amount.
     *  1
     *  Price
     *  Price Amount
     *  Amount
     *  Amount. Type
     *  unit price
     *  23.45
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
     * Gets as baseQuantity
     *
     * BBIE
     *  Price. Base_ Quantity. Quantity
     *  The actual quantity to which the price applies.
     *  0..1
     *  Price
     *  Base
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\BaseQuantity
     */
    public function getBaseQuantity()
    {
        return $this->baseQuantity;
    }

    /**
     * Sets a new baseQuantity
     *
     * BBIE
     *  Price. Base_ Quantity. Quantity
     *  The actual quantity to which the price applies.
     *  0..1
     *  Price
     *  Base
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\BaseQuantity $baseQuantity
     * @return self
     */
    public function setBaseQuantity(\NOKA\PHPUBL\UBL\Common\BasicComponents\BaseQuantity $baseQuantity)
    {
        $this->baseQuantity = $baseQuantity;
        return $this;
    }

    /**
     * Adds as priceChangeReason
     *
     * BBIE
     *  Price. Price Change_ Reason. Text
     *  The reason for the price change, expressed as text.
     *  0..n
     *  Price
     *  Price Change
     *  Reason
     *  Text
     *  Text. Type
     *  "Clearance of old stock", "New contract applies"
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\PriceChangeReason $priceChangeReason
     */
    public function addToPriceChangeReason(\NOKA\PHPUBL\UBL\Common\BasicComponents\PriceChangeReason $priceChangeReason)
    {
        $this->priceChangeReason[] = $priceChangeReason;
        return $this;
    }

    /**
     * isset priceChangeReason
     *
     * BBIE
     *  Price. Price Change_ Reason. Text
     *  The reason for the price change, expressed as text.
     *  0..n
     *  Price
     *  Price Change
     *  Reason
     *  Text
     *  Text. Type
     *  "Clearance of old stock", "New contract applies"
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPriceChangeReason($index)
    {
        return isset($this->priceChangeReason[$index]);
    }

    /**
     * unset priceChangeReason
     *
     * BBIE
     *  Price. Price Change_ Reason. Text
     *  The reason for the price change, expressed as text.
     *  0..n
     *  Price
     *  Price Change
     *  Reason
     *  Text
     *  Text. Type
     *  "Clearance of old stock", "New contract applies"
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPriceChangeReason($index)
    {
        unset($this->priceChangeReason[$index]);
    }

    /**
     * Gets as priceChangeReason
     *
     * BBIE
     *  Price. Price Change_ Reason. Text
     *  The reason for the price change, expressed as text.
     *  0..n
     *  Price
     *  Price Change
     *  Reason
     *  Text
     *  Text. Type
     *  "Clearance of old stock", "New contract applies"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\PriceChangeReason[]
     */
    public function getPriceChangeReason()
    {
        return $this->priceChangeReason;
    }

    /**
     * Sets a new priceChangeReason
     *
     * BBIE
     *  Price. Price Change_ Reason. Text
     *  The reason for the price change, expressed as text.
     *  0..n
     *  Price
     *  Price Change
     *  Reason
     *  Text
     *  Text. Type
     *  "Clearance of old stock", "New contract applies"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\PriceChangeReason[] $priceChangeReason
     * @return self
     */
    public function setPriceChangeReason(array $priceChangeReason)
    {
        $this->priceChangeReason = $priceChangeReason;
        return $this;
    }

    /**
     * Gets as priceTypeCode
     *
     * BBIE
     *  Price. Price Type Code. Code
     *  The price type, expressed as a code.
     *  0..1
     *  Price
     *  Price Type Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\PriceTypeCode
     */
    public function getPriceTypeCode()
    {
        return $this->priceTypeCode;
    }

    /**
     * Sets a new priceTypeCode
     *
     * BBIE
     *  Price. Price Type Code. Code
     *  The price type, expressed as a code.
     *  0..1
     *  Price
     *  Price Type Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\PriceTypeCode $priceTypeCode
     * @return self
     */
    public function setPriceTypeCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\PriceTypeCode $priceTypeCode)
    {
        $this->priceTypeCode = $priceTypeCode;
        return $this;
    }

    /**
     * Gets as priceType
     *
     * BBIE
     *  Price. Price Type. Text
     *  The price type, expressed as text.
     *  0..1
     *  Price
     *  Price Type
     *  Text
     *  Text. Type
     *  retail, wholesale, discount, contract
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\PriceType
     */
    public function getPriceType()
    {
        return $this->priceType;
    }

    /**
     * Sets a new priceType
     *
     * BBIE
     *  Price. Price Type. Text
     *  The price type, expressed as text.
     *  0..1
     *  Price
     *  Price Type
     *  Text
     *  Text. Type
     *  retail, wholesale, discount, contract
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\PriceType $priceType
     * @return self
     */
    public function setPriceType(\NOKA\PHPUBL\UBL\Common\BasicComponents\PriceType $priceType)
    {
        $this->priceType = $priceType;
        return $this;
    }

    /**
     * Gets as orderableUnitFactorRate
     *
     * BBIE
     *  Price. Orderable Unit Factor. Rate
     *  The factor by which the base price unit can be converted to the orderable unit.
     *  0..1
     *  Price
     *  Orderable Unit Factor
     *  Rate
     *  Rate. Type
     *  Nails are priced by weight but ordered by quantity. So this would say how many nails per kilo
     *
     * @return float
     */
    public function getOrderableUnitFactorRate()
    {
        return $this->orderableUnitFactorRate;
    }

    /**
     * Sets a new orderableUnitFactorRate
     *
     * BBIE
     *  Price. Orderable Unit Factor. Rate
     *  The factor by which the base price unit can be converted to the orderable unit.
     *  0..1
     *  Price
     *  Orderable Unit Factor
     *  Rate
     *  Rate. Type
     *  Nails are priced by weight but ordered by quantity. So this would say how many nails per kilo
     *
     * @param float $orderableUnitFactorRate
     * @return self
     */
    public function setOrderableUnitFactorRate($orderableUnitFactorRate)
    {
        $this->orderableUnitFactorRate = $orderableUnitFactorRate;
        return $this;
    }

    /**
     * Adds as validityPeriod
     *
     * ASBIE
     *  Price. Validity_ Period. Period
     *  An association to Validity Period.
     *  0..n
     *  Price
     *  Validity
     *  Period
     *  Period
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ValidityPeriod $validityPeriod
     */
    public function addToValidityPeriod(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ValidityPeriod $validityPeriod)
    {
        $this->validityPeriod[] = $validityPeriod;
        return $this;
    }

    /**
     * isset validityPeriod
     *
     * ASBIE
     *  Price. Validity_ Period. Period
     *  An association to Validity Period.
     *  0..n
     *  Price
     *  Validity
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValidityPeriod($index)
    {
        return isset($this->validityPeriod[$index]);
    }

    /**
     * unset validityPeriod
     *
     * ASBIE
     *  Price. Validity_ Period. Period
     *  An association to Validity Period.
     *  0..n
     *  Price
     *  Validity
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValidityPeriod($index)
    {
        unset($this->validityPeriod[$index]);
    }

    /**
     * Gets as validityPeriod
     *
     * ASBIE
     *  Price. Validity_ Period. Period
     *  An association to Validity Period.
     *  0..n
     *  Price
     *  Validity
     *  Period
     *  Period
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ValidityPeriod[]
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * ASBIE
     *  Price. Validity_ Period. Period
     *  An association to Validity Period.
     *  0..n
     *  Price
     *  Validity
     *  Period
     *  Period
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ValidityPeriod[] $validityPeriod
     * @return self
     */
    public function setValidityPeriod(array $validityPeriod)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as priceList
     *
     * ASBIE
     *  Price. Price List
     *  A reference to a Price List.
     *  0..1
     *  Price
     *  Price List
     *  Price List
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\PriceList
     */
    public function getPriceList()
    {
        return $this->priceList;
    }

    /**
     * Sets a new priceList
     *
     * ASBIE
     *  Price. Price List
     *  A reference to a Price List.
     *  0..1
     *  Price
     *  Price List
     *  Price List
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\PriceList $priceList
     * @return self
     */
    public function setPriceList(\NOKA\PHPUBL\UBL\Common\AggregateComponents\PriceList $priceList)
    {
        $this->priceList = $priceList;
        return $this;
    }

    /**
     * Adds as allowanceCharge
     *
     * ASBIE
     *  Price. Allowance Charge
     *  An association to Allowance Charge.
     *  0..n
     *  Price
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\AllowanceCharge $allowanceCharge
     */
    public function addToAllowanceCharge(\NOKA\PHPUBL\UBL\Common\AggregateComponents\AllowanceCharge $allowanceCharge)
    {
        $this->allowanceCharge[] = $allowanceCharge;
        return $this;
    }

    /**
     * isset allowanceCharge
     *
     * ASBIE
     *  Price. Allowance Charge
     *  An association to Allowance Charge.
     *  0..n
     *  Price
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllowanceCharge($index)
    {
        return isset($this->allowanceCharge[$index]);
    }

    /**
     * unset allowanceCharge
     *
     * ASBIE
     *  Price. Allowance Charge
     *  An association to Allowance Charge.
     *  0..n
     *  Price
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllowanceCharge($index)
    {
        unset($this->allowanceCharge[$index]);
    }

    /**
     * Gets as allowanceCharge
     *
     * ASBIE
     *  Price. Allowance Charge
     *  An association to Allowance Charge.
     *  0..n
     *  Price
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\AllowanceCharge[]
     */
    public function getAllowanceCharge()
    {
        return $this->allowanceCharge;
    }

    /**
     * Sets a new allowanceCharge
     *
     * ASBIE
     *  Price. Allowance Charge
     *  An association to Allowance Charge.
     *  0..n
     *  Price
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\AllowanceCharge[] $allowanceCharge
     * @return self
     */
    public function setAllowanceCharge(array $allowanceCharge)
    {
        $this->allowanceCharge = $allowanceCharge;
        return $this;
    }


}

