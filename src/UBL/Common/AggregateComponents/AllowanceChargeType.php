<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing AllowanceChargeType
 *
 * ABIE
 *  Allowance Charge. Details
 *  Information about a charge or discount price component.
 *  Allowance Charge
 * XSD Type: AllowanceChargeType
 */
class AllowanceChargeType
{

    /**
     * BBIE
     *  Allowance Charge. Identifier
     *  Identifies an Allowance Charge.
     *  0..1
     *  Allowance Charge
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Allowance Charge. Charge_ Indicator. Indicator
     *  Indicates whether the Allowance Charge is a charge (true) or a discount (false).
     *  1
     *  Allowance Charge
     *  Charge
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $chargeIndicator
     */
    private $chargeIndicator = null;

    /**
     * BBIE
     *  Allowance Charge. Allowance Charge Reason Code. Code
     *  The reason for the Allowance Charge, expressed as a code.
     *  0..1
     *  Allowance Charge
     *  Allowance Charge Reason Code
     *  Code
     *  Allowance Charge Reason_ Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AllowanceChargeReasonCode $allowanceChargeReasonCode
     */
    private $allowanceChargeReasonCode = null;

    /**
     * BBIE
     *  Allowance Charge. Allowance Charge_ Reason. Text
     *  The reason for the Allowance Charge, expressed as text.
     *  0..1
     *  Allowance Charge
     *  Allowance Charge
     *  Reason
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AllowanceChargeReason $allowanceChargeReason
     */
    private $allowanceChargeReason = null;

    /**
     * BBIE
     *  Allowance Charge. Multiplier_ Factor. Numeric
     *  The factor applied to the Base Amount to calculate the Allowance Charge.
     *  0..1
     *  Allowance Charge
     *  Multiplier
     *  Factor
     *  Numeric
     *  Numeric. Type
     *  0.20
     *
     * @var float $multiplierFactorNumeric
     */
    private $multiplierFactorNumeric = null;

    /**
     * BBIE
     *  Allowance Charge. Prepaid_ Indicator. Indicator
     *  Indicates whether the Allowance Charge is prepaid (true) or not (false).
     *  0..1
     *  Allowance Charge
     *  Prepaid
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $prepaidIndicator
     */
    private $prepaidIndicator = null;

    /**
     * BBIE
     *  Allowance Charge. Sequence. Numeric
     *  Identifies the numerical order sequence in which Allowance Charges are calculated when multiple Allowance Charges apply. If all Allowance Charges apply to the same Base Amount, SequenceNumeric will be '1' for all Allowance Charges.
     *  0..1
     *  Allowance Charge
     *  Sequence
     *  Numeric
     *  Numeric. Type
     *  1, 2, 3, 4, etc.
     *
     * @var float $sequenceNumeric
     */
    private $sequenceNumeric = null;

    /**
     * BBIE
     *  Allowance Charge. Amount
     *  The Allowance Charge amount.
     *  1
     *  Allowance Charge
     *  Amount
     *  Amount
     *  Amount. Type
     *  35,23
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Amount $amount
     */
    private $amount = null;

    /**
     * BBIE
     *  Allowance Charge. Base_ Amount. Amount
     *  The amount to which the MultiplierFactorNumeric is applied to calculate the Allowance Charge.
     *  0..1
     *  Allowance Charge
     *  Base
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\BaseAmount $baseAmount
     */
    private $baseAmount = null;

    /**
     * BBIE
     *  Allowance Charge. Accounting Cost Code. Code
     *  The buyer's accounting code as applied to the Allowance Charge.
     *  0..1
     *  Allowance Charge
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AccountingCostCode $accountingCostCode
     */
    private $accountingCostCode = null;

    /**
     * BBIE
     *  Allowance Charge. Accounting Cost. Text
     *  The buyer's accounting code as applied to the Allowance Charge expressed as text.
     *  0..1
     *  Allowance Charge
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AccountingCost $accountingCost
     */
    private $accountingCost = null;

    /**
     * ASBIE
     *  Allowance Charge. Tax Category
     *  An association to Tax Category.
     *  0..n
     *  Allowance Charge
     *  Tax Category
     *  Tax Category
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxCategory[] $taxCategory
     */
    private $taxCategory = [
        
    ];

    /**
     * ASBIE
     *  Allowance Charge. Tax Total
     *  An association to Tax Total.
     *  0..1
     *  Allowance Charge
     *  Tax Total
     *  Tax Total
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxTotal $taxTotal
     */
    private $taxTotal = null;

    /**
     * ASBIE
     *  Allowance Charge. Payment Means
     *  An association to Payment Means.
     *  0..n
     *  Allowance Charge
     *  Payment Means
     *  Payment Means
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentMeans[] $paymentMeans
     */
    private $paymentMeans = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Allowance Charge. Identifier
     *  Identifies an Allowance Charge.
     *  0..1
     *  Allowance Charge
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
     *  Allowance Charge. Identifier
     *  Identifies an Allowance Charge.
     *  0..1
     *  Allowance Charge
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
     * Gets as chargeIndicator
     *
     * BBIE
     *  Allowance Charge. Charge_ Indicator. Indicator
     *  Indicates whether the Allowance Charge is a charge (true) or a discount (false).
     *  1
     *  Allowance Charge
     *  Charge
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getChargeIndicator()
    {
        return $this->chargeIndicator;
    }

    /**
     * Sets a new chargeIndicator
     *
     * BBIE
     *  Allowance Charge. Charge_ Indicator. Indicator
     *  Indicates whether the Allowance Charge is a charge (true) or a discount (false).
     *  1
     *  Allowance Charge
     *  Charge
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $chargeIndicator
     * @return self
     */
    public function setChargeIndicator($chargeIndicator)
    {
        $this->chargeIndicator = $chargeIndicator;
        return $this;
    }

    /**
     * Gets as allowanceChargeReasonCode
     *
     * BBIE
     *  Allowance Charge. Allowance Charge Reason Code. Code
     *  The reason for the Allowance Charge, expressed as a code.
     *  0..1
     *  Allowance Charge
     *  Allowance Charge Reason Code
     *  Code
     *  Allowance Charge Reason_ Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\AllowanceChargeReasonCode
     */
    public function getAllowanceChargeReasonCode()
    {
        return $this->allowanceChargeReasonCode;
    }

    /**
     * Sets a new allowanceChargeReasonCode
     *
     * BBIE
     *  Allowance Charge. Allowance Charge Reason Code. Code
     *  The reason for the Allowance Charge, expressed as a code.
     *  0..1
     *  Allowance Charge
     *  Allowance Charge Reason Code
     *  Code
     *  Allowance Charge Reason_ Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\AllowanceChargeReasonCode $allowanceChargeReasonCode
     * @return self
     */
    public function setAllowanceChargeReasonCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\AllowanceChargeReasonCode $allowanceChargeReasonCode)
    {
        $this->allowanceChargeReasonCode = $allowanceChargeReasonCode;
        return $this;
    }

    /**
     * Gets as allowanceChargeReason
     *
     * BBIE
     *  Allowance Charge. Allowance Charge_ Reason. Text
     *  The reason for the Allowance Charge, expressed as text.
     *  0..1
     *  Allowance Charge
     *  Allowance Charge
     *  Reason
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\AllowanceChargeReason
     */
    public function getAllowanceChargeReason()
    {
        return $this->allowanceChargeReason;
    }

    /**
     * Sets a new allowanceChargeReason
     *
     * BBIE
     *  Allowance Charge. Allowance Charge_ Reason. Text
     *  The reason for the Allowance Charge, expressed as text.
     *  0..1
     *  Allowance Charge
     *  Allowance Charge
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\AllowanceChargeReason $allowanceChargeReason
     * @return self
     */
    public function setAllowanceChargeReason(\NOKA\PHPUBL\UBL\Common\BasicComponents\AllowanceChargeReason $allowanceChargeReason)
    {
        $this->allowanceChargeReason = $allowanceChargeReason;
        return $this;
    }

    /**
     * Gets as multiplierFactorNumeric
     *
     * BBIE
     *  Allowance Charge. Multiplier_ Factor. Numeric
     *  The factor applied to the Base Amount to calculate the Allowance Charge.
     *  0..1
     *  Allowance Charge
     *  Multiplier
     *  Factor
     *  Numeric
     *  Numeric. Type
     *  0.20
     *
     * @return float
     */
    public function getMultiplierFactorNumeric()
    {
        return $this->multiplierFactorNumeric;
    }

    /**
     * Sets a new multiplierFactorNumeric
     *
     * BBIE
     *  Allowance Charge. Multiplier_ Factor. Numeric
     *  The factor applied to the Base Amount to calculate the Allowance Charge.
     *  0..1
     *  Allowance Charge
     *  Multiplier
     *  Factor
     *  Numeric
     *  Numeric. Type
     *  0.20
     *
     * @param float $multiplierFactorNumeric
     * @return self
     */
    public function setMultiplierFactorNumeric($multiplierFactorNumeric)
    {
        $this->multiplierFactorNumeric = $multiplierFactorNumeric;
        return $this;
    }

    /**
     * Gets as prepaidIndicator
     *
     * BBIE
     *  Allowance Charge. Prepaid_ Indicator. Indicator
     *  Indicates whether the Allowance Charge is prepaid (true) or not (false).
     *  0..1
     *  Allowance Charge
     *  Prepaid
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getPrepaidIndicator()
    {
        return $this->prepaidIndicator;
    }

    /**
     * Sets a new prepaidIndicator
     *
     * BBIE
     *  Allowance Charge. Prepaid_ Indicator. Indicator
     *  Indicates whether the Allowance Charge is prepaid (true) or not (false).
     *  0..1
     *  Allowance Charge
     *  Prepaid
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $prepaidIndicator
     * @return self
     */
    public function setPrepaidIndicator($prepaidIndicator)
    {
        $this->prepaidIndicator = $prepaidIndicator;
        return $this;
    }

    /**
     * Gets as sequenceNumeric
     *
     * BBIE
     *  Allowance Charge. Sequence. Numeric
     *  Identifies the numerical order sequence in which Allowance Charges are calculated when multiple Allowance Charges apply. If all Allowance Charges apply to the same Base Amount, SequenceNumeric will be '1' for all Allowance Charges.
     *  0..1
     *  Allowance Charge
     *  Sequence
     *  Numeric
     *  Numeric. Type
     *  1, 2, 3, 4, etc.
     *
     * @return float
     */
    public function getSequenceNumeric()
    {
        return $this->sequenceNumeric;
    }

    /**
     * Sets a new sequenceNumeric
     *
     * BBIE
     *  Allowance Charge. Sequence. Numeric
     *  Identifies the numerical order sequence in which Allowance Charges are calculated when multiple Allowance Charges apply. If all Allowance Charges apply to the same Base Amount, SequenceNumeric will be '1' for all Allowance Charges.
     *  0..1
     *  Allowance Charge
     *  Sequence
     *  Numeric
     *  Numeric. Type
     *  1, 2, 3, 4, etc.
     *
     * @param float $sequenceNumeric
     * @return self
     */
    public function setSequenceNumeric($sequenceNumeric)
    {
        $this->sequenceNumeric = $sequenceNumeric;
        return $this;
    }

    /**
     * Gets as amount
     *
     * BBIE
     *  Allowance Charge. Amount
     *  The Allowance Charge amount.
     *  1
     *  Allowance Charge
     *  Amount
     *  Amount
     *  Amount. Type
     *  35,23
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * BBIE
     *  Allowance Charge. Amount
     *  The Allowance Charge amount.
     *  1
     *  Allowance Charge
     *  Amount
     *  Amount
     *  Amount. Type
     *  35,23
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Amount $amount
     * @return self
     */
    public function setAmount(\NOKA\PHPUBL\UBL\Common\BasicComponents\Amount $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as baseAmount
     *
     * BBIE
     *  Allowance Charge. Base_ Amount. Amount
     *  The amount to which the MultiplierFactorNumeric is applied to calculate the Allowance Charge.
     *  0..1
     *  Allowance Charge
     *  Base
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\BaseAmount
     */
    public function getBaseAmount()
    {
        return $this->baseAmount;
    }

    /**
     * Sets a new baseAmount
     *
     * BBIE
     *  Allowance Charge. Base_ Amount. Amount
     *  The amount to which the MultiplierFactorNumeric is applied to calculate the Allowance Charge.
     *  0..1
     *  Allowance Charge
     *  Base
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\BaseAmount $baseAmount
     * @return self
     */
    public function setBaseAmount(\NOKA\PHPUBL\UBL\Common\BasicComponents\BaseAmount $baseAmount)
    {
        $this->baseAmount = $baseAmount;
        return $this;
    }

    /**
     * Gets as accountingCostCode
     *
     * BBIE
     *  Allowance Charge. Accounting Cost Code. Code
     *  The buyer's accounting code as applied to the Allowance Charge.
     *  0..1
     *  Allowance Charge
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\AccountingCostCode
     */
    public function getAccountingCostCode()
    {
        return $this->accountingCostCode;
    }

    /**
     * Sets a new accountingCostCode
     *
     * BBIE
     *  Allowance Charge. Accounting Cost Code. Code
     *  The buyer's accounting code as applied to the Allowance Charge.
     *  0..1
     *  Allowance Charge
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\AccountingCostCode $accountingCostCode
     * @return self
     */
    public function setAccountingCostCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\AccountingCostCode $accountingCostCode)
    {
        $this->accountingCostCode = $accountingCostCode;
        return $this;
    }

    /**
     * Gets as accountingCost
     *
     * BBIE
     *  Allowance Charge. Accounting Cost. Text
     *  The buyer's accounting code as applied to the Allowance Charge expressed as text.
     *  0..1
     *  Allowance Charge
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\AccountingCost
     */
    public function getAccountingCost()
    {
        return $this->accountingCost;
    }

    /**
     * Sets a new accountingCost
     *
     * BBIE
     *  Allowance Charge. Accounting Cost. Text
     *  The buyer's accounting code as applied to the Allowance Charge expressed as text.
     *  0..1
     *  Allowance Charge
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\AccountingCost $accountingCost
     * @return self
     */
    public function setAccountingCost(\NOKA\PHPUBL\UBL\Common\BasicComponents\AccountingCost $accountingCost)
    {
        $this->accountingCost = $accountingCost;
        return $this;
    }

    /**
     * Adds as taxCategory
     *
     * ASBIE
     *  Allowance Charge. Tax Category
     *  An association to Tax Category.
     *  0..n
     *  Allowance Charge
     *  Tax Category
     *  Tax Category
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxCategory $taxCategory
     */
    public function addToTaxCategory(\NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxCategory $taxCategory)
    {
        $this->taxCategory[] = $taxCategory;
        return $this;
    }

    /**
     * isset taxCategory
     *
     * ASBIE
     *  Allowance Charge. Tax Category
     *  An association to Tax Category.
     *  0..n
     *  Allowance Charge
     *  Tax Category
     *  Tax Category
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxCategory($index)
    {
        return isset($this->taxCategory[$index]);
    }

    /**
     * unset taxCategory
     *
     * ASBIE
     *  Allowance Charge. Tax Category
     *  An association to Tax Category.
     *  0..n
     *  Allowance Charge
     *  Tax Category
     *  Tax Category
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxCategory($index)
    {
        unset($this->taxCategory[$index]);
    }

    /**
     * Gets as taxCategory
     *
     * ASBIE
     *  Allowance Charge. Tax Category
     *  An association to Tax Category.
     *  0..n
     *  Allowance Charge
     *  Tax Category
     *  Tax Category
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxCategory[]
     */
    public function getTaxCategory()
    {
        return $this->taxCategory;
    }

    /**
     * Sets a new taxCategory
     *
     * ASBIE
     *  Allowance Charge. Tax Category
     *  An association to Tax Category.
     *  0..n
     *  Allowance Charge
     *  Tax Category
     *  Tax Category
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxCategory[] $taxCategory
     * @return self
     */
    public function setTaxCategory(array $taxCategory)
    {
        $this->taxCategory = $taxCategory;
        return $this;
    }

    /**
     * Gets as taxTotal
     *
     * ASBIE
     *  Allowance Charge. Tax Total
     *  An association to Tax Total.
     *  0..1
     *  Allowance Charge
     *  Tax Total
     *  Tax Total
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxTotal
     */
    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    /**
     * Sets a new taxTotal
     *
     * ASBIE
     *  Allowance Charge. Tax Total
     *  An association to Tax Total.
     *  0..1
     *  Allowance Charge
     *  Tax Total
     *  Tax Total
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxTotal $taxTotal
     * @return self
     */
    public function setTaxTotal(\NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxTotal $taxTotal)
    {
        $this->taxTotal = $taxTotal;
        return $this;
    }

    /**
     * Adds as paymentMeans
     *
     * ASBIE
     *  Allowance Charge. Payment Means
     *  An association to Payment Means.
     *  0..n
     *  Allowance Charge
     *  Payment Means
     *  Payment Means
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentMeans $paymentMeans
     */
    public function addToPaymentMeans(\NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentMeans $paymentMeans)
    {
        $this->paymentMeans[] = $paymentMeans;
        return $this;
    }

    /**
     * isset paymentMeans
     *
     * ASBIE
     *  Allowance Charge. Payment Means
     *  An association to Payment Means.
     *  0..n
     *  Allowance Charge
     *  Payment Means
     *  Payment Means
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentMeans($index)
    {
        return isset($this->paymentMeans[$index]);
    }

    /**
     * unset paymentMeans
     *
     * ASBIE
     *  Allowance Charge. Payment Means
     *  An association to Payment Means.
     *  0..n
     *  Allowance Charge
     *  Payment Means
     *  Payment Means
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentMeans($index)
    {
        unset($this->paymentMeans[$index]);
    }

    /**
     * Gets as paymentMeans
     *
     * ASBIE
     *  Allowance Charge. Payment Means
     *  An association to Payment Means.
     *  0..n
     *  Allowance Charge
     *  Payment Means
     *  Payment Means
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentMeans[]
     */
    public function getPaymentMeans()
    {
        return $this->paymentMeans;
    }

    /**
     * Sets a new paymentMeans
     *
     * ASBIE
     *  Allowance Charge. Payment Means
     *  An association to Payment Means.
     *  0..n
     *  Allowance Charge
     *  Payment Means
     *  Payment Means
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentMeans[] $paymentMeans
     * @return self
     */
    public function setPaymentMeans(array $paymentMeans)
    {
        $this->paymentMeans = $paymentMeans;
        return $this;
    }


}

