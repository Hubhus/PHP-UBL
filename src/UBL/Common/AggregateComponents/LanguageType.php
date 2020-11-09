<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing LanguageType
 *
 * ABIE
 *  Language. Details
 *  Information about Language.
 *  Language
 * XSD Type: LanguageType
 */
class LanguageType
{

    /**
     * BBIE
     *  Language. Identifier
     *  An identifier for a language, expressed as a code.
     *  0..1
     *  Language
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Language. Name
     *  The name of the language.
     *  0..1
     *  Language
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Language. Locale Code. Code
     *  The locale where the language is used, expressed as a code.
     *  0..1
     *  Language
     *  Locale Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\LocaleCode $localeCode
     */
    private $localeCode = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Language. Identifier
     *  An identifier for a language, expressed as a code.
     *  0..1
     *  Language
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
     *  Language. Identifier
     *  An identifier for a language, expressed as a code.
     *  0..1
     *  Language
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
     *  Language. Name
     *  The name of the language.
     *  0..1
     *  Language
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
     *  Language. Name
     *  The name of the language.
     *  0..1
     *  Language
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
     * Gets as localeCode
     *
     * BBIE
     *  Language. Locale Code. Code
     *  The locale where the language is used, expressed as a code.
     *  0..1
     *  Language
     *  Locale Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\LocaleCode
     */
    public function getLocaleCode()
    {
        return $this->localeCode;
    }

    /**
     * Sets a new localeCode
     *
     * BBIE
     *  Language. Locale Code. Code
     *  The locale where the language is used, expressed as a code.
     *  0..1
     *  Language
     *  Locale Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\LocaleCode $localeCode
     * @return self
     */
    public function setLocaleCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\LocaleCode $localeCode)
    {
        $this->localeCode = $localeCode;
        return $this;
    }


}

