<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing PartyIdentificationType
 *
 * ABIE
 *  Party Identification. Details
 *  Information about a party's identification.
 *  Party Identification
 * XSD Type: PartyIdentificationType
 */
class PartyIdentificationType
{

    /**
     * BBIE
     *  Party Identification. Identifier
     *  Identifies a party.
     *  1
     *  Party Identification
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Party Identification. Identifier
     *  Identifies a party.
     *  1
     *  Party Identification
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
     *  Party Identification. Identifier
     *  Identifies a party.
     *  1
     *  Party Identification
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


}

