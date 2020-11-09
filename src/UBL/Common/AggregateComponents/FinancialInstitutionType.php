<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing FinancialInstitutionType
 *
 * ABIE
 *  Financial Institution. Details
 *  Information about a Financial Institution.
 *  Financial Institution
 * XSD Type: FinancialInstitutionType
 */
class FinancialInstitutionType
{

    /**
     * BBIE
     *  Financial Institution. Identifier
     *  The identifier for the Financial Institution expressed as a code; ISO 9362 BIC (Bank Identification Code) is recommended.
     *  0..1
     *  Financial Institution
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Financial Institution. Name
     *  The name of the Financial Institution.
     *  0..1
     *  Financial Institution
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Name $name
     */
    private $name = null;

    /**
     * ASBIE
     *  Financial Institution. Address
     *  An association to Address.
     *  0..1
     *  Financial Institution
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
     *  Financial Institution. Identifier
     *  The identifier for the Financial Institution expressed as a code; ISO 9362 BIC (Bank Identification Code) is recommended.
     *  0..1
     *  Financial Institution
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
     *  Financial Institution. Identifier
     *  The identifier for the Financial Institution expressed as a code; ISO 9362 BIC (Bank Identification Code) is recommended.
     *  0..1
     *  Financial Institution
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
     *  Financial Institution. Name
     *  The name of the Financial Institution.
     *  0..1
     *  Financial Institution
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
     *  Financial Institution. Name
     *  The name of the Financial Institution.
     *  0..1
     *  Financial Institution
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
     * Gets as address
     *
     * ASBIE
     *  Financial Institution. Address
     *  An association to Address.
     *  0..1
     *  Financial Institution
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
     *  Financial Institution. Address
     *  An association to Address.
     *  0..1
     *  Financial Institution
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

