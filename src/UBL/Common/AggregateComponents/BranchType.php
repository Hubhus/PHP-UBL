<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing BranchType
 *
 * ABIE
 *  Branch. Details
 *  Information about a branch or division of an organization.
 *  Branch
 * XSD Type: BranchType
 */
class BranchType
{

    /**
     * BBIE
     *  Branch. Identifier
     *  An identifier for a branch or division of an organization.
     *  0..1
     *  Branch
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Branch. Name
     *  The name of a branch or division of an organization.
     *  0..1
     *  Branch
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Name $name
     */
    private $name = null;

    /**
     * ASBIE
     *  Branch. Financial Institution
     *  An association to Financial Institution.
     *  0..1
     *  Branch
     *  Financial Institution
     *  Financial Institution
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\FinancialInstitution $financialInstitution
     */
    private $financialInstitution = null;

    /**
     * ASBIE
     *  Branch. Address
     *  An association to Address.
     *  0..1
     *  Branch
     *  Address
     *  Address
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Address $address
     */
    private $address = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Branch. Identifier
     *  An identifier for a branch or division of an organization.
     *  0..1
     *  Branch
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
     *  Branch. Identifier
     *  An identifier for a branch or division of an organization.
     *  0..1
     *  Branch
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
     * Gets as name
     *
     * BBIE
     *  Branch. Name
     *  The name of a branch or division of an organization.
     *  0..1
     *  Branch
     *  Name
     *  Name
     *  Name. Type
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
     *  Branch. Name
     *  The name of a branch or division of an organization.
     *  0..1
     *  Branch
     *  Name
     *  Name
     *  Name. Type
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
     * Gets as financialInstitution
     *
     * ASBIE
     *  Branch. Financial Institution
     *  An association to Financial Institution.
     *  0..1
     *  Branch
     *  Financial Institution
     *  Financial Institution
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\FinancialInstitution
     */
    public function getFinancialInstitution()
    {
        return $this->financialInstitution;
    }

    /**
     * Sets a new financialInstitution
     *
     * ASBIE
     *  Branch. Financial Institution
     *  An association to Financial Institution.
     *  0..1
     *  Branch
     *  Financial Institution
     *  Financial Institution
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\FinancialInstitution $financialInstitution
     * @return self
     */
    public function setFinancialInstitution(\NOKA\PHPUBL\UBL\Common\AggregateComponents\FinancialInstitution $financialInstitution)
    {
        $this->financialInstitution = $financialInstitution;
        return $this;
    }

    /**
     * Gets as address
     *
     * ASBIE
     *  Branch. Address
     *  An association to Address.
     *  0..1
     *  Branch
     *  Address
     *  Address
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * ASBIE
     *  Branch. Address
     *  An association to Address.
     *  0..1
     *  Branch
     *  Address
     *  Address
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Address $address
     * @return self
     */
    public function setAddress(\NOKA\PHPUBL\UBL\Common\AggregateComponents\Address $address)
    {
        $this->address = $address;
        return $this;
    }


}

