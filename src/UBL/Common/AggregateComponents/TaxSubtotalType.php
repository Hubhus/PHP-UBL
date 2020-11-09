<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing TaxSubtotalType
 *
 * ABIE
 *  Tax Subtotal. Details
 *  Information about the subtotal for a particular tax category within a tax scheme, such as standard rate within VAT.
 *  Tax Subtotal
 * XSD Type: TaxSubtotalType
 */
class TaxSubtotalType
{

    /**
     * BBIE
     *  Tax Subtotal. Taxable_ Amount. Amount
     *  The net amount to which the tax percent (rate) is applied to calculate the tax amount.
     *  0..1
     *  Tax Subtotal
     *  Taxable
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TaxableAmount $taxableAmount
     */
    private $taxableAmount = null;

    /**
     * BBIE
     *  Tax Subtotal. Tax Amount. Amount
     *  The amount of tax stated explicitly.
     *  1
     *  Tax Subtotal
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TaxAmount $taxAmount
     */
    private $taxAmount = null;

    /**
     * BBIE
     *  Tax Subtotal. Calculation Sequence. Numeric
     *  Identifies the numerical order sequence in which taxes are applied when multiple taxes are attracted. If all taxes apply to the same taxable amount, CalculationSequenceNumeric will be '1' for all taxes.
     *  0..1
     *  Tax Subtotal
     *  Calculation Sequence
     *  Numeric
     *  Numeric. Type
     *
     * @var float $calculationSequenceNumeric
     */
    private $calculationSequenceNumeric = null;

    /**
     * BBIE
     *  Tax Subtotal. Transaction Currency_ Tax Amount. Amount
     *  The tax amount, expressed in the currency used for invoicing.
     *  0..1
     *  Tax Subtotal
     *  Transaction Currency
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TransactionCurrencyTaxAmount $transactionCurrencyTaxAmount
     */
    private $transactionCurrencyTaxAmount = null;

    /**
     * BBIE
     *  Tax Subtotal. Percent
     *  The tax rate for the category, expressed as a percentage.
     *  0..1
     *  Tax Subtotal
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @var float $percent
     */
    private $percent = null;

    /**
     * BBIE
     *  Tax Subtotal. Base Unit Measure. Measure
     *  Where a tax is applied at a certain rate per unit, the measure of units on which the tax calculation is based.
     *  0..1
     *  Tax Subtotal
     *  Base Unit Measure
     *  Measure
     *  Measure. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\BaseUnitMeasure $baseUnitMeasure
     */
    private $baseUnitMeasure = null;

    /**
     * BBIE
     *  Tax Subtotal. Per Unit_ Amount. Amount
     *  Where a tax is applied at a certain rate per unit, the rate per unit applied.
     *  0..1
     *  Tax Subtotal
     *  Per Unit
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\PerUnitAmount $perUnitAmount
     */
    private $perUnitAmount = null;

    /**
     * BBIE
     *  Tax Subtotal. Tier Range. Text
     *  Where a tax is tiered, the range of tiers applied in the calculation of the tax subtotal for the tax category.
     *  0..1
     *  Tax Subtotal
     *  Tier Range
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TierRange $tierRange
     */
    private $tierRange = null;

    /**
     * BBIE
     *  Tax Subtotal. Tier Rate. Percent
     *  Where a tax is tiered, the rate of tax applied to the range of tiers in the calculation of the tax subtotal for the tax category.
     *  0..1
     *  Tax Subtotal
     *  Tier Rate
     *  Percent
     *  Percent. Type
     *
     * @var float $tierRatePercent
     */
    private $tierRatePercent = null;

    /**
     * ASBIE
     *  Tax Subtotal. Tax Category
     *  An association to Tax Category.
     *  1
     *  Tax Subtotal
     *  Tax Category
     *  Tax Category
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxCategory $taxCategory
     */
    private $taxCategory = null;

    /**
     * Gets as taxableAmount
     *
     * BBIE
     *  Tax Subtotal. Taxable_ Amount. Amount
     *  The net amount to which the tax percent (rate) is applied to calculate the tax amount.
     *  0..1
     *  Tax Subtotal
     *  Taxable
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TaxableAmount
     */
    public function getTaxableAmount()
    {
        return $this->taxableAmount;
    }

    /**
     * Sets a new taxableAmount
     *
     * BBIE
     *  Tax Subtotal. Taxable_ Amount. Amount
     *  The net amount to which the tax percent (rate) is applied to calculate the tax amount.
     *  0..1
     *  Tax Subtotal
     *  Taxable
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TaxableAmount $taxableAmount
     * @return self
     */
    public function setTaxableAmount(\NOKA\PHPUBL\UBL\Common\BasicComponents\TaxableAmount $taxableAmount)
    {
        $this->taxableAmount = $taxableAmount;
        return $this;
    }

    /**
     * Gets as taxAmount
     *
     * BBIE
     *  Tax Subtotal. Tax Amount. Amount
     *  The amount of tax stated explicitly.
     *  1
     *  Tax Subtotal
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TaxAmount
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * Sets a new taxAmount
     *
     * BBIE
     *  Tax Subtotal. Tax Amount. Amount
     *  The amount of tax stated explicitly.
     *  1
     *  Tax Subtotal
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TaxAmount $taxAmount
     * @return self
     */
    public function setTaxAmount(\NOKA\PHPUBL\UBL\Common\BasicComponents\TaxAmount $taxAmount)
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }

    /**
     * Gets as calculationSequenceNumeric
     *
     * BBIE
     *  Tax Subtotal. Calculation Sequence. Numeric
     *  Identifies the numerical order sequence in which taxes are applied when multiple taxes are attracted. If all taxes apply to the same taxable amount, CalculationSequenceNumeric will be '1' for all taxes.
     *  0..1
     *  Tax Subtotal
     *  Calculation Sequence
     *  Numeric
     *  Numeric. Type
     *
     * @return float
     */
    public function getCalculationSequenceNumeric()
    {
        return $this->calculationSequenceNumeric;
    }

    /**
     * Sets a new calculationSequenceNumeric
     *
     * BBIE
     *  Tax Subtotal. Calculation Sequence. Numeric
     *  Identifies the numerical order sequence in which taxes are applied when multiple taxes are attracted. If all taxes apply to the same taxable amount, CalculationSequenceNumeric will be '1' for all taxes.
     *  0..1
     *  Tax Subtotal
     *  Calculation Sequence
     *  Numeric
     *  Numeric. Type
     *
     * @param float $calculationSequenceNumeric
     * @return self
     */
    public function setCalculationSequenceNumeric($calculationSequenceNumeric)
    {
        $this->calculationSequenceNumeric = $calculationSequenceNumeric;
        return $this;
    }

    /**
     * Gets as transactionCurrencyTaxAmount
     *
     * BBIE
     *  Tax Subtotal. Transaction Currency_ Tax Amount. Amount
     *  The tax amount, expressed in the currency used for invoicing.
     *  0..1
     *  Tax Subtotal
     *  Transaction Currency
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TransactionCurrencyTaxAmount
     */
    public function getTransactionCurrencyTaxAmount()
    {
        return $this->transactionCurrencyTaxAmount;
    }

    /**
     * Sets a new transactionCurrencyTaxAmount
     *
     * BBIE
     *  Tax Subtotal. Transaction Currency_ Tax Amount. Amount
     *  The tax amount, expressed in the currency used for invoicing.
     *  0..1
     *  Tax Subtotal
     *  Transaction Currency
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TransactionCurrencyTaxAmount $transactionCurrencyTaxAmount
     * @return self
     */
    public function setTransactionCurrencyTaxAmount(\NOKA\PHPUBL\UBL\Common\BasicComponents\TransactionCurrencyTaxAmount $transactionCurrencyTaxAmount)
    {
        $this->transactionCurrencyTaxAmount = $transactionCurrencyTaxAmount;
        return $this;
    }

    /**
     * Gets as percent
     *
     * BBIE
     *  Tax Subtotal. Percent
     *  The tax rate for the category, expressed as a percentage.
     *  0..1
     *  Tax Subtotal
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @return float
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Sets a new percent
     *
     * BBIE
     *  Tax Subtotal. Percent
     *  The tax rate for the category, expressed as a percentage.
     *  0..1
     *  Tax Subtotal
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @param float $percent
     * @return self
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;
        return $this;
    }

    /**
     * Gets as baseUnitMeasure
     *
     * BBIE
     *  Tax Subtotal. Base Unit Measure. Measure
     *  Where a tax is applied at a certain rate per unit, the measure of units on which the tax calculation is based.
     *  0..1
     *  Tax Subtotal
     *  Base Unit Measure
     *  Measure
     *  Measure. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\BaseUnitMeasure
     */
    public function getBaseUnitMeasure()
    {
        return $this->baseUnitMeasure;
    }

    /**
     * Sets a new baseUnitMeasure
     *
     * BBIE
     *  Tax Subtotal. Base Unit Measure. Measure
     *  Where a tax is applied at a certain rate per unit, the measure of units on which the tax calculation is based.
     *  0..1
     *  Tax Subtotal
     *  Base Unit Measure
     *  Measure
     *  Measure. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\BaseUnitMeasure $baseUnitMeasure
     * @return self
     */
    public function setBaseUnitMeasure(\NOKA\PHPUBL\UBL\Common\BasicComponents\BaseUnitMeasure $baseUnitMeasure)
    {
        $this->baseUnitMeasure = $baseUnitMeasure;
        return $this;
    }

    /**
     * Gets as perUnitAmount
     *
     * BBIE
     *  Tax Subtotal. Per Unit_ Amount. Amount
     *  Where a tax is applied at a certain rate per unit, the rate per unit applied.
     *  0..1
     *  Tax Subtotal
     *  Per Unit
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\PerUnitAmount
     */
    public function getPerUnitAmount()
    {
        return $this->perUnitAmount;
    }

    /**
     * Sets a new perUnitAmount
     *
     * BBIE
     *  Tax Subtotal. Per Unit_ Amount. Amount
     *  Where a tax is applied at a certain rate per unit, the rate per unit applied.
     *  0..1
     *  Tax Subtotal
     *  Per Unit
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\PerUnitAmount $perUnitAmount
     * @return self
     */
    public function setPerUnitAmount(\NOKA\PHPUBL\UBL\Common\BasicComponents\PerUnitAmount $perUnitAmount)
    {
        $this->perUnitAmount = $perUnitAmount;
        return $this;
    }

    /**
     * Gets as tierRange
     *
     * BBIE
     *  Tax Subtotal. Tier Range. Text
     *  Where a tax is tiered, the range of tiers applied in the calculation of the tax subtotal for the tax category.
     *  0..1
     *  Tax Subtotal
     *  Tier Range
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TierRange
     */
    public function getTierRange()
    {
        return $this->tierRange;
    }

    /**
     * Sets a new tierRange
     *
     * BBIE
     *  Tax Subtotal. Tier Range. Text
     *  Where a tax is tiered, the range of tiers applied in the calculation of the tax subtotal for the tax category.
     *  0..1
     *  Tax Subtotal
     *  Tier Range
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TierRange $tierRange
     * @return self
     */
    public function setTierRange(\NOKA\PHPUBL\UBL\Common\BasicComponents\TierRange $tierRange)
    {
        $this->tierRange = $tierRange;
        return $this;
    }

    /**
     * Gets as tierRatePercent
     *
     * BBIE
     *  Tax Subtotal. Tier Rate. Percent
     *  Where a tax is tiered, the rate of tax applied to the range of tiers in the calculation of the tax subtotal for the tax category.
     *  0..1
     *  Tax Subtotal
     *  Tier Rate
     *  Percent
     *  Percent. Type
     *
     * @return float
     */
    public function getTierRatePercent()
    {
        return $this->tierRatePercent;
    }

    /**
     * Sets a new tierRatePercent
     *
     * BBIE
     *  Tax Subtotal. Tier Rate. Percent
     *  Where a tax is tiered, the rate of tax applied to the range of tiers in the calculation of the tax subtotal for the tax category.
     *  0..1
     *  Tax Subtotal
     *  Tier Rate
     *  Percent
     *  Percent. Type
     *
     * @param float $tierRatePercent
     * @return self
     */
    public function setTierRatePercent($tierRatePercent)
    {
        $this->tierRatePercent = $tierRatePercent;
        return $this;
    }

    /**
     * Gets as taxCategory
     *
     * ASBIE
     *  Tax Subtotal. Tax Category
     *  An association to Tax Category.
     *  1
     *  Tax Subtotal
     *  Tax Category
     *  Tax Category
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxCategory
     */
    public function getTaxCategory()
    {
        return $this->taxCategory;
    }

    /**
     * Sets a new taxCategory
     *
     * ASBIE
     *  Tax Subtotal. Tax Category
     *  An association to Tax Category.
     *  1
     *  Tax Subtotal
     *  Tax Category
     *  Tax Category
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxCategory $taxCategory
     * @return self
     */
    public function setTaxCategory(\NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxCategory $taxCategory)
    {
        $this->taxCategory = $taxCategory;
        return $this;
    }


}

