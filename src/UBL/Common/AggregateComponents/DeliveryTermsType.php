<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing DeliveryTermsType
 *
 * ABIE
 *  Delivery Terms. Details
 *  Information about Delivery Terms.
 *  Delivery Terms
 * XSD Type: DeliveryTermsType
 */
class DeliveryTermsType
{

    /**
     * BBIE
     *  Delivery Terms. Identifier
     *  Identifies the Delivery Terms.
     *  0..1
     *  Delivery Terms
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  CIF, FOB, or EXW from the INCOTERMS Terms of Delivery. (2000 version preferred.)
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Delivery Terms. Special_ Terms. Text
     *  A description of special conditions relating to the Delivery Terms.
     *  0..1
     *  Delivery Terms
     *  Special
     *  Terms
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\SpecialTerms $specialTerms
     */
    private $specialTerms = null;

    /**
     * BBIE
     *  Delivery Terms. Loss Risk Responsibility Code. Code
     *  An identifier for the responsibility for loss risk in the context of the Delivery Terms, expressed as a code.
     *  0..1
     *  Delivery Terms
     *  Loss Risk Responsibility Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\LossRiskResponsibilityCode $lossRiskResponsibilityCode
     */
    private $lossRiskResponsibilityCode = null;

    /**
     * BBIE
     *  Delivery Terms. Loss Risk. Text
     *  A description of the loss risk in the context of the Delivery Terms.
     *  0..1
     *  Delivery Terms
     *  Loss Risk
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\LossRisk $lossRisk
     */
    private $lossRisk = null;

    /**
     * ASBIE
     *  Delivery Terms. Delivery_ Location. Location
     *  An association to Location, e.g., a port.
     *  0..1
     *  Delivery Terms
     *  Delivery
     *  Location
     *  Location
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryLocation $deliveryLocation
     */
    private $deliveryLocation = null;

    /**
     * ASBIE
     *  Delivery Terms. Allowance Charge
     *  An association to Allowance Charge.
     *  0..1
     *  Delivery Terms
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AllowanceCharge $allowanceCharge
     */
    private $allowanceCharge = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Delivery Terms. Identifier
     *  Identifies the Delivery Terms.
     *  0..1
     *  Delivery Terms
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  CIF, FOB, or EXW from the INCOTERMS Terms of Delivery. (2000 version preferred.)
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
     *  Delivery Terms. Identifier
     *  Identifies the Delivery Terms.
     *  0..1
     *  Delivery Terms
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  CIF, FOB, or EXW from the INCOTERMS Terms of Delivery. (2000 version preferred.)
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
     * Gets as specialTerms
     *
     * BBIE
     *  Delivery Terms. Special_ Terms. Text
     *  A description of special conditions relating to the Delivery Terms.
     *  0..1
     *  Delivery Terms
     *  Special
     *  Terms
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\SpecialTerms
     */
    public function getSpecialTerms()
    {
        return $this->specialTerms;
    }

    /**
     * Sets a new specialTerms
     *
     * BBIE
     *  Delivery Terms. Special_ Terms. Text
     *  A description of special conditions relating to the Delivery Terms.
     *  0..1
     *  Delivery Terms
     *  Special
     *  Terms
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\SpecialTerms $specialTerms
     * @return self
     */
    public function setSpecialTerms(\NOKA\PHPUBL\UBL\Common\BasicComponents\SpecialTerms $specialTerms)
    {
        $this->specialTerms = $specialTerms;
        return $this;
    }

    /**
     * Gets as lossRiskResponsibilityCode
     *
     * BBIE
     *  Delivery Terms. Loss Risk Responsibility Code. Code
     *  An identifier for the responsibility for loss risk in the context of the Delivery Terms, expressed as a code.
     *  0..1
     *  Delivery Terms
     *  Loss Risk Responsibility Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\LossRiskResponsibilityCode
     */
    public function getLossRiskResponsibilityCode()
    {
        return $this->lossRiskResponsibilityCode;
    }

    /**
     * Sets a new lossRiskResponsibilityCode
     *
     * BBIE
     *  Delivery Terms. Loss Risk Responsibility Code. Code
     *  An identifier for the responsibility for loss risk in the context of the Delivery Terms, expressed as a code.
     *  0..1
     *  Delivery Terms
     *  Loss Risk Responsibility Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\LossRiskResponsibilityCode $lossRiskResponsibilityCode
     * @return self
     */
    public function setLossRiskResponsibilityCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\LossRiskResponsibilityCode $lossRiskResponsibilityCode)
    {
        $this->lossRiskResponsibilityCode = $lossRiskResponsibilityCode;
        return $this;
    }

    /**
     * Gets as lossRisk
     *
     * BBIE
     *  Delivery Terms. Loss Risk. Text
     *  A description of the loss risk in the context of the Delivery Terms.
     *  0..1
     *  Delivery Terms
     *  Loss Risk
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\LossRisk
     */
    public function getLossRisk()
    {
        return $this->lossRisk;
    }

    /**
     * Sets a new lossRisk
     *
     * BBIE
     *  Delivery Terms. Loss Risk. Text
     *  A description of the loss risk in the context of the Delivery Terms.
     *  0..1
     *  Delivery Terms
     *  Loss Risk
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\LossRisk $lossRisk
     * @return self
     */
    public function setLossRisk(\NOKA\PHPUBL\UBL\Common\BasicComponents\LossRisk $lossRisk)
    {
        $this->lossRisk = $lossRisk;
        return $this;
    }

    /**
     * Gets as deliveryLocation
     *
     * ASBIE
     *  Delivery Terms. Delivery_ Location. Location
     *  An association to Location, e.g., a port.
     *  0..1
     *  Delivery Terms
     *  Delivery
     *  Location
     *  Location
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryLocation
     */
    public function getDeliveryLocation()
    {
        return $this->deliveryLocation;
    }

    /**
     * Sets a new deliveryLocation
     *
     * ASBIE
     *  Delivery Terms. Delivery_ Location. Location
     *  An association to Location, e.g., a port.
     *  0..1
     *  Delivery Terms
     *  Delivery
     *  Location
     *  Location
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryLocation $deliveryLocation
     * @return self
     */
    public function setDeliveryLocation(\NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryLocation $deliveryLocation)
    {
        $this->deliveryLocation = $deliveryLocation;
        return $this;
    }

    /**
     * Gets as allowanceCharge
     *
     * ASBIE
     *  Delivery Terms. Allowance Charge
     *  An association to Allowance Charge.
     *  0..1
     *  Delivery Terms
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\AllowanceCharge
     */
    public function getAllowanceCharge()
    {
        return $this->allowanceCharge;
    }

    /**
     * Sets a new allowanceCharge
     *
     * ASBIE
     *  Delivery Terms. Allowance Charge
     *  An association to Allowance Charge.
     *  0..1
     *  Delivery Terms
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\AllowanceCharge $allowanceCharge
     * @return self
     */
    public function setAllowanceCharge(\NOKA\PHPUBL\UBL\Common\AggregateComponents\AllowanceCharge $allowanceCharge)
    {
        $this->allowanceCharge = $allowanceCharge;
        return $this;
    }


}

