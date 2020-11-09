<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing PartyLegalEntityType
 *
 * ABIE
 *  Party Legal Entity. Details
 *  Information directly relating to the legal registration that is applicable to a party.
 *  Party Legal Entity
 * XSD Type: PartyLegalEntityType
 */
class PartyLegalEntityType
{

    /**
     * BBIE
     *  Party Legal Entity. Registration_ Name. Name
     *  The name of a party as registered with the legal authority.
     *  0..1
     *  Party Legal Entity
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
     *  Party Legal Entity. Company Identifier. Identifier
     *  Identifies a company as registered with the company registration scheme.
     *  0..1
     *  Party Legal Entity
     *  Company Identifier
     *  Identifier
     *  Identifier. Type
     *  Business Registration Number, Company Number
     *  "3556625"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\CompanyID $companyID
     */
    private $companyID = null;

    /**
     * ASBIE
     *  Party Legal Entity. Registration_ Address. Address
     *  Associates with the registered address of the party within a Corporate Registration Scheme.
     *  0..1
     *  Party Legal Entity
     *  Registration
     *  Address
     *  Address
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\RegistrationAddress $registrationAddress
     */
    private $registrationAddress = null;

    /**
     * ASBIE
     *  Party Legal Entity. Corporate Registration Scheme
     *  Associates the party with a Corporate Registration Scheme.
     *  0..1
     *  Party Legal Entity
     *  Corporate Registration Scheme
     *  Corporate Registration Scheme
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\CorporateRegistrationScheme $corporateRegistrationScheme
     */
    private $corporateRegistrationScheme = null;

    /**
     * Gets as registrationName
     *
     * BBIE
     *  Party Legal Entity. Registration_ Name. Name
     *  The name of a party as registered with the legal authority.
     *  0..1
     *  Party Legal Entity
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
     *  Party Legal Entity. Registration_ Name. Name
     *  The name of a party as registered with the legal authority.
     *  0..1
     *  Party Legal Entity
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
     *  Party Legal Entity. Company Identifier. Identifier
     *  Identifies a company as registered with the company registration scheme.
     *  0..1
     *  Party Legal Entity
     *  Company Identifier
     *  Identifier
     *  Identifier. Type
     *  Business Registration Number, Company Number
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
     *  Party Legal Entity. Company Identifier. Identifier
     *  Identifies a company as registered with the company registration scheme.
     *  0..1
     *  Party Legal Entity
     *  Company Identifier
     *  Identifier
     *  Identifier. Type
     *  Business Registration Number, Company Number
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
     * Gets as registrationAddress
     *
     * ASBIE
     *  Party Legal Entity. Registration_ Address. Address
     *  Associates with the registered address of the party within a Corporate Registration Scheme.
     *  0..1
     *  Party Legal Entity
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
     *  Party Legal Entity. Registration_ Address. Address
     *  Associates with the registered address of the party within a Corporate Registration Scheme.
     *  0..1
     *  Party Legal Entity
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
     * Gets as corporateRegistrationScheme
     *
     * ASBIE
     *  Party Legal Entity. Corporate Registration Scheme
     *  Associates the party with a Corporate Registration Scheme.
     *  0..1
     *  Party Legal Entity
     *  Corporate Registration Scheme
     *  Corporate Registration Scheme
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\CorporateRegistrationScheme
     */
    public function getCorporateRegistrationScheme()
    {
        return $this->corporateRegistrationScheme;
    }

    /**
     * Sets a new corporateRegistrationScheme
     *
     * ASBIE
     *  Party Legal Entity. Corporate Registration Scheme
     *  Associates the party with a Corporate Registration Scheme.
     *  0..1
     *  Party Legal Entity
     *  Corporate Registration Scheme
     *  Corporate Registration Scheme
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\CorporateRegistrationScheme $corporateRegistrationScheme
     * @return self
     */
    public function setCorporateRegistrationScheme(\NOKA\PHPUBL\UBL\Common\AggregateComponents\CorporateRegistrationScheme $corporateRegistrationScheme)
    {
        $this->corporateRegistrationScheme = $corporateRegistrationScheme;
        return $this;
    }


}

