<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing PartyTaxSchemeType
 *
 * ABIE
 *  Party Tax Scheme. Details
 *  Information about a party's Tax Scheme.
 *  Party Tax Scheme
 * XSD Type: PartyTaxSchemeType
 */
class PartyTaxSchemeType
{

    /**
     * BBIE
     *  Party Tax Scheme. Registration_ Name. Name
     *  The official name of the party as registered with the relevant fiscal authority.
     *  0..1
     *  Party Tax Scheme
     *  Registration
     *  Name
     *  Name
     *  Name. Type
     *  "Microsoft Corporation"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\RegistrationName $registrationName
     */
    private $registrationName = null;

    /**
     * BBIE
     *  Party Tax Scheme. Company Identifier. Identifier
     *  The identifier assigned for tax purposes to a party by the taxation authority.
     *  0..1
     *  Party Tax Scheme
     *  Company Identifier
     *  Identifier
     *  Identifier. Type
     *  VAT Number
     *  "3556625"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\CompanyID $companyID
     */
    private $companyID = null;

    /**
     * BBIE
     *  Party Tax Scheme. Tax Level Code. Code
     *  The section or role within the tax scheme that applies to the party.
     *  0..1
     *  Party Tax Scheme
     *  Tax Level Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TaxLevelCode $taxLevelCode
     */
    private $taxLevelCode = null;

    /**
     * BBIE
     *  Party Tax Scheme. Exemption Reason Code. Code
     *  A reason for a party's exemption from tax, expressed as a code.
     *  0..1
     *  Party Tax Scheme
     *  Exemption Reason Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ExemptionReasonCode $exemptionReasonCode
     */
    private $exemptionReasonCode = null;

    /**
     * BBIE
     *  Party Tax Scheme. Exemption_ Reason. Text
     *  A reason for a party's exemption from tax, expressed as text.
     *  0..1
     *  Party Tax Scheme
     *  Exemption
     *  Reason
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ExemptionReason $exemptionReason
     */
    private $exemptionReason = null;

    /**
     * ASBIE
     *  Party Tax Scheme. Registration_ Address. Address
     *  An association to Registered Address (for tax purposes).
     *  0..1
     *  Party Tax Scheme
     *  Registration
     *  Address
     *  Address
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\RegistrationAddress $registrationAddress
     */
    private $registrationAddress = null;

    /**
     * ASBIE
     *  Party Tax Scheme. Tax Scheme
     *  An association to Tax Scheme.
     *  1
     *  Party Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\TaxScheme $taxScheme
     */
    private $taxScheme = null;

    /**
     * Gets as registrationName
     *
     * BBIE
     *  Party Tax Scheme. Registration_ Name. Name
     *  The official name of the party as registered with the relevant fiscal authority.
     *  0..1
     *  Party Tax Scheme
     *  Registration
     *  Name
     *  Name
     *  Name. Type
     *  "Microsoft Corporation"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\RegistrationName
     */
    public function getRegistrationName()
    {
        return $this->registrationName;
    }

    /**
     * Sets a new registrationName
     *
     * BBIE
     *  Party Tax Scheme. Registration_ Name. Name
     *  The official name of the party as registered with the relevant fiscal authority.
     *  0..1
     *  Party Tax Scheme
     *  Registration
     *  Name
     *  Name
     *  Name. Type
     *  "Microsoft Corporation"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\RegistrationName $registrationName
     * @return self
     */
    public function setRegistrationName(\NOKA\PHPUBL\UBL\Common\BasicComponents\RegistrationName $registrationName)
    {
        $this->registrationName = $registrationName;
        return $this;
    }

    /**
     * Gets as companyID
     *
     * BBIE
     *  Party Tax Scheme. Company Identifier. Identifier
     *  The identifier assigned for tax purposes to a party by the taxation authority.
     *  0..1
     *  Party Tax Scheme
     *  Company Identifier
     *  Identifier
     *  Identifier. Type
     *  VAT Number
     *  "3556625"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\CompanyID
     */
    public function getCompanyID()
    {
        return $this->companyID;
    }

    /**
     * Sets a new companyID
     *
     * BBIE
     *  Party Tax Scheme. Company Identifier. Identifier
     *  The identifier assigned for tax purposes to a party by the taxation authority.
     *  0..1
     *  Party Tax Scheme
     *  Company Identifier
     *  Identifier
     *  Identifier. Type
     *  VAT Number
     *  "3556625"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\CompanyID $companyID
     * @return self
     */
    public function setCompanyID(\NOKA\PHPUBL\UBL\Common\BasicComponents\CompanyID $companyID)
    {
        $this->companyID = $companyID;
        return $this;
    }

    /**
     * Gets as taxLevelCode
     *
     * BBIE
     *  Party Tax Scheme. Tax Level Code. Code
     *  The section or role within the tax scheme that applies to the party.
     *  0..1
     *  Party Tax Scheme
     *  Tax Level Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TaxLevelCode
     */
    public function getTaxLevelCode()
    {
        return $this->taxLevelCode;
    }

    /**
     * Sets a new taxLevelCode
     *
     * BBIE
     *  Party Tax Scheme. Tax Level Code. Code
     *  The section or role within the tax scheme that applies to the party.
     *  0..1
     *  Party Tax Scheme
     *  Tax Level Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TaxLevelCode $taxLevelCode
     * @return self
     */
    public function setTaxLevelCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\TaxLevelCode $taxLevelCode)
    {
        $this->taxLevelCode = $taxLevelCode;
        return $this;
    }

    /**
     * Gets as exemptionReasonCode
     *
     * BBIE
     *  Party Tax Scheme. Exemption Reason Code. Code
     *  A reason for a party's exemption from tax, expressed as a code.
     *  0..1
     *  Party Tax Scheme
     *  Exemption Reason Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ExemptionReasonCode
     */
    public function getExemptionReasonCode()
    {
        return $this->exemptionReasonCode;
    }

    /**
     * Sets a new exemptionReasonCode
     *
     * BBIE
     *  Party Tax Scheme. Exemption Reason Code. Code
     *  A reason for a party's exemption from tax, expressed as a code.
     *  0..1
     *  Party Tax Scheme
     *  Exemption Reason Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ExemptionReasonCode $exemptionReasonCode
     * @return self
     */
    public function setExemptionReasonCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\ExemptionReasonCode $exemptionReasonCode)
    {
        $this->exemptionReasonCode = $exemptionReasonCode;
        return $this;
    }

    /**
     * Gets as exemptionReason
     *
     * BBIE
     *  Party Tax Scheme. Exemption_ Reason. Text
     *  A reason for a party's exemption from tax, expressed as text.
     *  0..1
     *  Party Tax Scheme
     *  Exemption
     *  Reason
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ExemptionReason
     */
    public function getExemptionReason()
    {
        return $this->exemptionReason;
    }

    /**
     * Sets a new exemptionReason
     *
     * BBIE
     *  Party Tax Scheme. Exemption_ Reason. Text
     *  A reason for a party's exemption from tax, expressed as text.
     *  0..1
     *  Party Tax Scheme
     *  Exemption
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ExemptionReason $exemptionReason
     * @return self
     */
    public function setExemptionReason(\NOKA\PHPUBL\UBL\Common\BasicComponents\ExemptionReason $exemptionReason)
    {
        $this->exemptionReason = $exemptionReason;
        return $this;
    }

    /**
     * Gets as registrationAddress
     *
     * ASBIE
     *  Party Tax Scheme. Registration_ Address. Address
     *  An association to Registered Address (for tax purposes).
     *  0..1
     *  Party Tax Scheme
     *  Registration
     *  Address
     *  Address
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\RegistrationAddress
     */
    public function getRegistrationAddress()
    {
        return $this->registrationAddress;
    }

    /**
     * Sets a new registrationAddress
     *
     * ASBIE
     *  Party Tax Scheme. Registration_ Address. Address
     *  An association to Registered Address (for tax purposes).
     *  0..1
     *  Party Tax Scheme
     *  Registration
     *  Address
     *  Address
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\RegistrationAddress $registrationAddress
     * @return self
     */
    public function setRegistrationAddress(\NOKA\PHPUBL\UBL\Common\AggregateComponents\RegistrationAddress $registrationAddress)
    {
        $this->registrationAddress = $registrationAddress;
        return $this;
    }

    /**
     * Gets as taxScheme
     *
     * ASBIE
     *  Party Tax Scheme. Tax Scheme
     *  An association to Tax Scheme.
     *  1
     *  Party Tax Scheme
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
     *  Party Tax Scheme. Tax Scheme
     *  An association to Tax Scheme.
     *  1
     *  Party Tax Scheme
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

