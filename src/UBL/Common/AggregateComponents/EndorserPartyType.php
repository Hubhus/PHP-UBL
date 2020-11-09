<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing EndorserPartyType
 *
 * ABIE
 *  Endorser Party. Details
 *  The party endorsing a document.
 *  Endorser Party
 * XSD Type: EndorserPartyType
 */
class EndorserPartyType
{

    /**
     * BBIE
     *  Endorser Party. Role Code. Code
     *  The role of the party providing the endorsement, e.g., Issuer, Embassy, Insurance, etc.
     *  1
     *  Endorser Party
     *  Role Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\RoleCode $roleCode
     */
    private $roleCode = null;

    /**
     * BBIE
     *  Endorser Party. Sequence. Numeric
     *  The sequence in which the endorsements are to be applied.
     *  1
     *  Endorser Party
     *  Sequence
     *  Numeric
     *  Numeric. Type
     *
     * @var float $sequenceNumeric
     */
    private $sequenceNumeric = null;

    /**
     * ASBIE
     *  Endorser Party. Party
     *  Details of the party endorsing the application.
     *  1
     *  Endorser Party
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Party $party
     */
    private $party = null;

    /**
     * ASBIE
     *  Endorser Party. Signatory_ Contact. Contact
     *  Details of the individual representing the exporter who signs the Certificate of Origin application before submitting it to the Issuer Party.
     *  1
     *  Endorser Party
     *  Signatory
     *  Contact
     *  Contact
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\SignatoryContact $signatoryContact
     */
    private $signatoryContact = null;

    /**
     * Gets as roleCode
     *
     * BBIE
     *  Endorser Party. Role Code. Code
     *  The role of the party providing the endorsement, e.g., Issuer, Embassy, Insurance, etc.
     *  1
     *  Endorser Party
     *  Role Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\RoleCode
     */
    public function getRoleCode()
    {
        return $this->roleCode;
    }

    /**
     * Sets a new roleCode
     *
     * BBIE
     *  Endorser Party. Role Code. Code
     *  The role of the party providing the endorsement, e.g., Issuer, Embassy, Insurance, etc.
     *  1
     *  Endorser Party
     *  Role Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\RoleCode $roleCode
     * @return self
     */
    public function setRoleCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\RoleCode $roleCode)
    {
        $this->roleCode = $roleCode;
        return $this;
    }

    /**
     * Gets as sequenceNumeric
     *
     * BBIE
     *  Endorser Party. Sequence. Numeric
     *  The sequence in which the endorsements are to be applied.
     *  1
     *  Endorser Party
     *  Sequence
     *  Numeric
     *  Numeric. Type
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
     *  Endorser Party. Sequence. Numeric
     *  The sequence in which the endorsements are to be applied.
     *  1
     *  Endorser Party
     *  Sequence
     *  Numeric
     *  Numeric. Type
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
     * Gets as party
     *
     * ASBIE
     *  Endorser Party. Party
     *  Details of the party endorsing the application.
     *  1
     *  Endorser Party
     *  Party
     *  Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\Party
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Sets a new party
     *
     * ASBIE
     *  Endorser Party. Party
     *  Details of the party endorsing the application.
     *  1
     *  Endorser Party
     *  Party
     *  Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Party $party
     * @return self
     */
    public function setParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\Party $party)
    {
        $this->party = $party;
        return $this;
    }

    /**
     * Gets as signatoryContact
     *
     * ASBIE
     *  Endorser Party. Signatory_ Contact. Contact
     *  Details of the individual representing the exporter who signs the Certificate of Origin application before submitting it to the Issuer Party.
     *  1
     *  Endorser Party
     *  Signatory
     *  Contact
     *  Contact
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\SignatoryContact
     */
    public function getSignatoryContact()
    {
        return $this->signatoryContact;
    }

    /**
     * Sets a new signatoryContact
     *
     * ASBIE
     *  Endorser Party. Signatory_ Contact. Contact
     *  Details of the individual representing the exporter who signs the Certificate of Origin application before submitting it to the Issuer Party.
     *  1
     *  Endorser Party
     *  Signatory
     *  Contact
     *  Contact
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\SignatoryContact $signatoryContact
     * @return self
     */
    public function setSignatoryContact(\NOKA\PHPUBL\UBL\Common\AggregateComponents\SignatoryContact $signatoryContact)
    {
        $this->signatoryContact = $signatoryContact;
        return $this;
    }


}

