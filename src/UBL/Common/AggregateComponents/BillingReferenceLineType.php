<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing BillingReferenceLineType
 *
 * ABIE
 *  Billing Reference Line. Details
 *  Information about a Billing Line.
 *  Billing Reference Line
 * XSD Type: BillingReferenceLineType
 */
class BillingReferenceLineType
{

    /**
     * BBIE
     *  Billing Reference Line. Identifier
     *  An identifier for the Billing Line.
     *  1
     *  Billing Reference Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Billing Reference Line. Amount
     *  The amount of the Billing Line, including Allowance Charges but net of taxes.
     *  0..1
     *  Billing Reference Line
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Amount $amount
     */
    private $amount = null;

    /**
     * ASBIE
     *  Billing Reference Line. Allowance Charge
     *  An association to Allowance Charge.
     *  0..n
     *  Billing Reference Line
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AllowanceCharge[] $allowanceCharge
     */
    private $allowanceCharge = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Billing Reference Line. Identifier
     *  An identifier for the Billing Line.
     *  1
     *  Billing Reference Line
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
     *  Billing Reference Line. Identifier
     *  An identifier for the Billing Line.
     *  1
     *  Billing Reference Line
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
     * Gets as amount
     *
     * BBIE
     *  Billing Reference Line. Amount
     *  The amount of the Billing Line, including Allowance Charges but net of taxes.
     *  0..1
     *  Billing Reference Line
     *  Amount
     *  Amount
     *  Amount. Type
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
     *  Billing Reference Line. Amount
     *  The amount of the Billing Line, including Allowance Charges but net of taxes.
     *  0..1
     *  Billing Reference Line
     *  Amount
     *  Amount
     *  Amount. Type
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
     * Adds as allowanceCharge
     *
     * ASBIE
     *  Billing Reference Line. Allowance Charge
     *  An association to Allowance Charge.
     *  0..n
     *  Billing Reference Line
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
     *  Billing Reference Line. Allowance Charge
     *  An association to Allowance Charge.
     *  0..n
     *  Billing Reference Line
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
     *  Billing Reference Line. Allowance Charge
     *  An association to Allowance Charge.
     *  0..n
     *  Billing Reference Line
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
     *  Billing Reference Line. Allowance Charge
     *  An association to Allowance Charge.
     *  0..n
     *  Billing Reference Line
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
     *  Billing Reference Line. Allowance Charge
     *  An association to Allowance Charge.
     *  0..n
     *  Billing Reference Line
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

