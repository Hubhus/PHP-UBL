<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing CountryType
 *
 * ABIE
 *  Country. Details
 *  Information about a geopolitical country.
 *  Country
 * XSD Type: CountryType
 */
class CountryType
{

    /**
     * BBIE
     *  Country. Identification Code. Code
     *  An identifier for the Country.
     *  0..1
     *  Country
     *  Identification Code
     *  Code
     *  Country Identification_ Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\IdentificationCode $identificationCode
     */
    private $identificationCode = null;

    /**
     * BBIE
     *  Country. Name
     *  The name of the Country.
     *  0..1
     *  Country
     *  Name
     *  Name
     *  Name. Type
     *  “SOUTH AFRICA”
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Name $name
     */
    private $name = null;

    /**
     * Gets as identificationCode
     *
     * BBIE
     *  Country. Identification Code. Code
     *  An identifier for the Country.
     *  0..1
     *  Country
     *  Identification Code
     *  Code
     *  Country Identification_ Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\IdentificationCode
     */
    public function getIdentificationCode()
    {
        return $this->identificationCode;
    }

    /**
     * Sets a new identificationCode
     *
     * BBIE
     *  Country. Identification Code. Code
     *  An identifier for the Country.
     *  0..1
     *  Country
     *  Identification Code
     *  Code
     *  Country Identification_ Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\IdentificationCode $identificationCode
     * @return self
     */
    public function setIdentificationCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\IdentificationCode $identificationCode)
    {
        $this->identificationCode = $identificationCode;
        return $this;
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Country. Name
     *  The name of the Country.
     *  0..1
     *  Country
     *  Name
     *  Name
     *  Name. Type
     *  “SOUTH AFRICA”
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
     *  Country. Name
     *  The name of the Country.
     *  0..1
     *  Country
     *  Name
     *  Name
     *  Name. Type
     *  “SOUTH AFRICA”
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Name $name
     * @return self
     */
    public function setName(\NOKA\PHPUBL\UBL\Common\BasicComponents\Name $name)
    {
        $this->name = $name;
        return $this;
    }


}

