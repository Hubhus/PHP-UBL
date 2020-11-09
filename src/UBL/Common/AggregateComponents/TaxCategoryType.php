<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing TaxCategoryType
 *
 * ABIE
 *  Tax Category. Details
 *  Information about a tax category.
 *  Tax Category
 * XSD Type: TaxCategoryType
 */
class TaxCategoryType
{

    /**
     * BBIE
     *  Tax Category. Identifier
     *  Identifies the tax category.
     *  0..1
     *  Tax Category
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "ZeroRatedGoods" "NotTaxable" "Standard Rate"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Tax Category. Name
     *  The name of the tax category.
     *  0..1
     *  Tax Category
     *  Name
     *  Name
     *  Name. Type
     *  "Luxury Goods","Wine Equalization", "Exempt"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Tax Category. Percent
     *  The tax rate for the category, expressed as a percentage.
     *  0..1
     *  Tax Category
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @var float $percent
     */
    private $percent = null;

    /**
     * BBIE
     *  Tax Category. Base Unit Measure. Measure
     *  Where a tax is applied at a certain rate per unit, the measure of units on which the tax calculation is based.
     *  0..1
     *  Tax Category
     *  Base Unit Measure
     *  Measure
     *  Measure. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\BaseUnitMeasure $baseUnitMeasure
     */
    private $baseUnitMeasure = null;

    /**
     * BBIE
     *  Tax Category. Per Unit_ Amount. Amount
     *  Where a tax is applied at a certain rate per unit, the rate per unit applied.
     *  0..1
     *  Tax Category
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
     *  Tax Category. Tax Exemption Reason Code. Code
     *  The reason for tax being exempted expressed as a code.
     *  0..1
     *  Tax Category
     *  Tax Exemption Reason Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TaxExemptionReasonCode $taxExemptionReasonCode
     */
    private $taxExemptionReasonCode = null;

    /**
     * BBIE
     *  Tax Category. Tax Exemption Reason. Text
     *  The reason for tax being exempted.
     *  0..1
     *  Tax Category
     *  Tax Exemption Reason
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TaxExemptionReason $taxExemptionReason
     */
    private $taxExemptionReason = null;

    /**
     * BBIE
     *  Tax Category. Tier Range. Text
     *  Where a tax is tiered, the range of tiers applied in the calculation of the tax subtotal for the tax category.
     *  0..1
     *  Tax Category
     *  Tier Range
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TierRange $tierRange
     */
    private $tierRange = null;

    /**
     * BBIE
     *  Tax Category. Tier Rate. Percent
     *  Where a tax is tiered, the rate of tax applied to the range of tiers in the calculation of the tax subtotal for the tax category.
     *  0..1
     *  Tax Category
     *  Tier Rate
     *  Percent
     *  Percent. Type
     *
     * @var float $tierRatePercent
     */
    private $tierRatePercent = null;

    /**
     * ASBIE
     *  Tax Category. Tax Scheme
     *  An association to Tax Scheme.
     *  1
     *  Tax Category
     *  Tax Scheme
     *  Tax Scheme
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxScheme $taxScheme
     */
    private $taxScheme = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Tax Category. Identifier
     *  Identifies the tax category.
     *  0..1
     *  Tax Category
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "ZeroRatedGoods" "NotTaxable" "Standard Rate"
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
     *  Tax Category. Identifier
     *  Identifies the tax category.
     *  0..1
     *  Tax Category
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "ZeroRatedGoods" "NotTaxable" "Standard Rate"
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
     * Gets as name
     *
     * BBIE
     *  Tax Category. Name
     *  The name of the tax category.
     *  0..1
     *  Tax Category
     *  Name
     *  Name
     *  Name. Type
     *  "Luxury Goods","Wine Equalization", "Exempt"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Tax Category. Name
     *  The name of the tax category.
     *  0..1
     *  Tax Category
     *  Name
     *  Name
     *  Name. Type
     *  "Luxury Goods","Wine Equalization", "Exempt"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Name $name
     * @return self
     */
    public function setName(\NOKA\PHPUBL\UBL\Common\BasicComponents\Name $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as percent
     *
     * BBIE
     *  Tax Category. Percent
     *  The tax rate for the category, expressed as a percentage.
     *  0..1
     *  Tax Category
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
     *  Tax Category. Percent
     *  The tax rate for the category, expressed as a percentage.
     *  0..1
     *  Tax Category
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
     *  Tax Category. Base Unit Measure. Measure
     *  Where a tax is applied at a certain rate per unit, the measure of units on which the tax calculation is based.
     *  0..1
     *  Tax Category
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
     *  Tax Category. Base Unit Measure. Measure
     *  Where a tax is applied at a certain rate per unit, the measure of units on which the tax calculation is based.
     *  0..1
     *  Tax Category
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
     *  Tax Category. Per Unit_ Amount. Amount
     *  Where a tax is applied at a certain rate per unit, the rate per unit applied.
     *  0..1
     *  Tax Category
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
     *  Tax Category. Per Unit_ Amount. Amount
     *  Where a tax is applied at a certain rate per unit, the rate per unit applied.
     *  0..1
     *  Tax Category
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
     * Gets as taxExemptionReasonCode
     *
     * BBIE
     *  Tax Category. Tax Exemption Reason Code. Code
     *  The reason for tax being exempted expressed as a code.
     *  0..1
     *  Tax Category
     *  Tax Exemption Reason Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TaxExemptionReasonCode
     */
    public function getTaxExemptionReasonCode()
    {
        return $this->taxExemptionReasonCode;
    }

    /**
     * Sets a new taxExemptionReasonCode
     *
     * BBIE
     *  Tax Category. Tax Exemption Reason Code. Code
     *  The reason for tax being exempted expressed as a code.
     *  0..1
     *  Tax Category
     *  Tax Exemption Reason Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TaxExemptionReasonCode $taxExemptionReasonCode
     * @return self
     */
    public function setTaxExemptionReasonCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\TaxExemptionReasonCode $taxExemptionReasonCode)
    {
        $this->taxExemptionReasonCode = $taxExemptionReasonCode;
        return $this;
    }

    /**
     * Gets as taxExemptionReason
     *
     * BBIE
     *  Tax Category. Tax Exemption Reason. Text
     *  The reason for tax being exempted.
     *  0..1
     *  Tax Category
     *  Tax Exemption Reason
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TaxExemptionReason
     */
    public function getTaxExemptionReason()
    {
        return $this->taxExemptionReason;
    }

    /**
     * Sets a new taxExemptionReason
     *
     * BBIE
     *  Tax Category. Tax Exemption Reason. Text
     *  The reason for tax being exempted.
     *  0..1
     *  Tax Category
     *  Tax Exemption Reason
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TaxExemptionReason $taxExemptionReason
     * @return self
     */
    public function setTaxExemptionReason(\NOKA\PHPUBL\UBL\Common\BasicComponents\TaxExemptionReason $taxExemptionReason)
    {
        $this->taxExemptionReason = $taxExemptionReason;
        return $this;
    }

    /**
     * Gets as tierRange
     *
     * BBIE
     *  Tax Category. Tier Range. Text
     *  Where a tax is tiered, the range of tiers applied in the calculation of the tax subtotal for the tax category.
     *  0..1
     *  Tax Category
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
     *  Tax Category. Tier Range. Text
     *  Where a tax is tiered, the range of tiers applied in the calculation of the tax subtotal for the tax category.
     *  0..1
     *  Tax Category
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
     *  Tax Category. Tier Rate. Percent
     *  Where a tax is tiered, the rate of tax applied to the range of tiers in the calculation of the tax subtotal for the tax category.
     *  0..1
     *  Tax Category
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
     *  Tax Category. Tier Rate. Percent
     *  Where a tax is tiered, the rate of tax applied to the range of tiers in the calculation of the tax subtotal for the tax category.
     *  0..1
     *  Tax Category
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
     * Gets as taxScheme
     *
     * ASBIE
     *  Tax Category. Tax Scheme
     *  An association to Tax Scheme.
     *  1
     *  Tax Category
     *  Tax Scheme
     *  Tax Scheme
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxScheme
     */
    public function getTaxScheme()
    {
        return $this->taxScheme;
    }

    /**
     * Sets a new taxScheme
     *
     * ASBIE
     *  Tax Category. Tax Scheme
     *  An association to Tax Scheme.
     *  1
     *  Tax Category
     *  Tax Scheme
     *  Tax Scheme
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxScheme $taxScheme
     * @return self
     */
    public function setTaxScheme(\NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxScheme $taxScheme)
    {
        $this->taxScheme = $taxScheme;
        return $this;
    }


}

