<?php

namespace NOKA\PHPUBL\UNCEFACT\Data\UnqualifiedDataTypes;

/**
 * Class representing TextType
 *
 * UDT0000019
 *  UDT
 *  Text. Type
 *  1.0
 *  A character string (i.e. a finite set of characters) generally in the form of words of a language.
 *  Text
 *  string
 *  string
 * XSD Type: TextType
 */
class TextType
{

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * UDT0000019-SC2
     *  SC
     *  Language. Identifier
     *  The identifier of the language used in the content component.
     *  Language
     *  Identification
     *  Identifier
     *  string
     *  language
     *
     * @var string $languageID
     */
    private $languageID = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as languageID
     *
     * UDT0000019-SC2
     *  SC
     *  Language. Identifier
     *  The identifier of the language used in the content component.
     *  Language
     *  Identification
     *  Identifier
     *  string
     *  language
     *
     * @return string
     */
    public function getLanguageID()
    {
        return $this->languageID;
    }

    /**
     * Sets a new languageID
     *
     * UDT0000019-SC2
     *  SC
     *  Language. Identifier
     *  The identifier of the language used in the content component.
     *  Language
     *  Identification
     *  Identifier
     *  string
     *  language
     *
     * @param string $languageID
     * @return self
     */
    public function setLanguageID($languageID)
    {
        $this->languageID = $languageID;
        return $this;
    }


}

