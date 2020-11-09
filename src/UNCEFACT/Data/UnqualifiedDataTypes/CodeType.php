<?php

namespace NOKA\PHPUBL\UNCEFACT\Data\UnqualifiedDataTypes;

/**
 * Class representing CodeType
 *
 * UDT000007
 *  UDT
 *  Code. Type
 *  1.0
 *  A character string (letters, figures, or symbols) that for brevity and/or languange independence may be used to represent or replace a definitive value or text of an attribute together with relevant supplementary information.
 *  Code
 *  string
 *  normalizedString
 *  Other supplementary components in the CCT are captured as part of the token and name for the schema module containing the code list and thus, are not declared as attributes.
 * XSD Type: CodeType
 */
class CodeType
{

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * UDT000007-SC2
     *  SC
     *  Code List. Identifier
     *  The identification of a list of codes.
     *  Code List
     *  Identification
     *  Identifier
     *  string
     *
     * @var string $listID
     */
    private $listID = null;

    /**
     * UDT000007-SC3
     *  SC
     *  Code List. Agency. Identifier
     *  An agency that maintains one or more lists of codes.
     *  Code List
     *  Agency
     *  Identifier
     *  string
     *  Defaults to the UN/EDIFACT data element 3055 code list.
     *
     * @var string $listAgencyID
     */
    private $listAgencyID = null;

    /**
     * UDT000007-SC4
     *  SC
     *  Code List. Agency Name. Text
     *  The name of the agency that maintains the list of codes.
     *  Code List
     *  Agency Name
     *  Text
     *  string
     *
     * @var string $listAgencyName
     */
    private $listAgencyName = null;

    /**
     * UDT000007-SC5
     *  SC
     *  Code List. Name. Text
     *  The name of a list of codes.
     *  Code List
     *  Name
     *  Text
     *  string
     *
     * @var string $listName
     */
    private $listName = null;

    /**
     * UDT000007-SC6
     *  SC
     *  Code List. Identifier
     *  The identification of a list of codes.
     *  Code List
     *  Identification
     *  Identifier
     *  string
     *  string
     *
     * @var string $listVersionID
     */
    private $listVersionID = null;

    /**
     * UDT000007-SC7
     *  SC
     *  Code. Name. Text
     *  The textual equivalent of the code content component.
     *  Code
     *  Name
     *  Text
     *  string
     *  string
     *
     * @var string $name
     */
    private $name = null;

    /**
     * UDT000007-SC8
     *  SC
     *  Language. Identifier
     *  The identifier of the language used in the code name.
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
     * UDT000007-SC9
     *  SC
     *  Code List. Uniform Resource. Identifier
     *  The Uniform Resource Identifier that identifies where the code list is located.
     *  Code List
     *  Uniform Resource Identifier
     *  Identifier
     *  string
     *  anyURI
     *
     * @var string $listURI
     */
    private $listURI = null;

    /**
     * UDT000007-SC10
     *  SC
     *  Code List Scheme. Uniform Resource. Identifier
     *  The Uniform Resource Identifier that identifies where the code list scheme is located.
     *  Code List Scheme
     *  Uniform Resource Identifier
     *  Identifier
     *  string
     *  anyURI
     *
     * @var string $listSchemeURI
     */
    private $listSchemeURI = null;

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
     * Gets as listID
     *
     * UDT000007-SC2
     *  SC
     *  Code List. Identifier
     *  The identification of a list of codes.
     *  Code List
     *  Identification
     *  Identifier
     *  string
     *
     * @return string
     */
    public function getListID()
    {
        return $this->listID;
    }

    /**
     * Sets a new listID
     *
     * UDT000007-SC2
     *  SC
     *  Code List. Identifier
     *  The identification of a list of codes.
     *  Code List
     *  Identification
     *  Identifier
     *  string
     *
     * @param string $listID
     * @return self
     */
    public function setListID($listID)
    {
        $this->listID = $listID;
        return $this;
    }

    /**
     * Gets as listAgencyID
     *
     * UDT000007-SC3
     *  SC
     *  Code List. Agency. Identifier
     *  An agency that maintains one or more lists of codes.
     *  Code List
     *  Agency
     *  Identifier
     *  string
     *  Defaults to the UN/EDIFACT data element 3055 code list.
     *
     * @return string
     */
    public function getListAgencyID()
    {
        return $this->listAgencyID;
    }

    /**
     * Sets a new listAgencyID
     *
     * UDT000007-SC3
     *  SC
     *  Code List. Agency. Identifier
     *  An agency that maintains one or more lists of codes.
     *  Code List
     *  Agency
     *  Identifier
     *  string
     *  Defaults to the UN/EDIFACT data element 3055 code list.
     *
     * @param string $listAgencyID
     * @return self
     */
    public function setListAgencyID($listAgencyID)
    {
        $this->listAgencyID = $listAgencyID;
        return $this;
    }

    /**
     * Gets as listAgencyName
     *
     * UDT000007-SC4
     *  SC
     *  Code List. Agency Name. Text
     *  The name of the agency that maintains the list of codes.
     *  Code List
     *  Agency Name
     *  Text
     *  string
     *
     * @return string
     */
    public function getListAgencyName()
    {
        return $this->listAgencyName;
    }

    /**
     * Sets a new listAgencyName
     *
     * UDT000007-SC4
     *  SC
     *  Code List. Agency Name. Text
     *  The name of the agency that maintains the list of codes.
     *  Code List
     *  Agency Name
     *  Text
     *  string
     *
     * @param string $listAgencyName
     * @return self
     */
    public function setListAgencyName($listAgencyName)
    {
        $this->listAgencyName = $listAgencyName;
        return $this;
    }

    /**
     * Gets as listName
     *
     * UDT000007-SC5
     *  SC
     *  Code List. Name. Text
     *  The name of a list of codes.
     *  Code List
     *  Name
     *  Text
     *  string
     *
     * @return string
     */
    public function getListName()
    {
        return $this->listName;
    }

    /**
     * Sets a new listName
     *
     * UDT000007-SC5
     *  SC
     *  Code List. Name. Text
     *  The name of a list of codes.
     *  Code List
     *  Name
     *  Text
     *  string
     *
     * @param string $listName
     * @return self
     */
    public function setListName($listName)
    {
        $this->listName = $listName;
        return $this;
    }

    /**
     * Gets as listVersionID
     *
     * UDT000007-SC6
     *  SC
     *  Code List. Identifier
     *  The identification of a list of codes.
     *  Code List
     *  Identification
     *  Identifier
     *  string
     *  string
     *
     * @return string
     */
    public function getListVersionID()
    {
        return $this->listVersionID;
    }

    /**
     * Sets a new listVersionID
     *
     * UDT000007-SC6
     *  SC
     *  Code List. Identifier
     *  The identification of a list of codes.
     *  Code List
     *  Identification
     *  Identifier
     *  string
     *  string
     *
     * @param string $listVersionID
     * @return self
     */
    public function setListVersionID($listVersionID)
    {
        $this->listVersionID = $listVersionID;
        return $this;
    }

    /**
     * Gets as name
     *
     * UDT000007-SC7
     *  SC
     *  Code. Name. Text
     *  The textual equivalent of the code content component.
     *  Code
     *  Name
     *  Text
     *  string
     *  string
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * UDT000007-SC7
     *  SC
     *  Code. Name. Text
     *  The textual equivalent of the code content component.
     *  Code
     *  Name
     *  Text
     *  string
     *  string
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as languageID
     *
     * UDT000007-SC8
     *  SC
     *  Language. Identifier
     *  The identifier of the language used in the code name.
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
     * UDT000007-SC8
     *  SC
     *  Language. Identifier
     *  The identifier of the language used in the code name.
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

    /**
     * Gets as listURI
     *
     * UDT000007-SC9
     *  SC
     *  Code List. Uniform Resource. Identifier
     *  The Uniform Resource Identifier that identifies where the code list is located.
     *  Code List
     *  Uniform Resource Identifier
     *  Identifier
     *  string
     *  anyURI
     *
     * @return string
     */
    public function getListURI()
    {
        return $this->listURI;
    }

    /**
     * Sets a new listURI
     *
     * UDT000007-SC9
     *  SC
     *  Code List. Uniform Resource. Identifier
     *  The Uniform Resource Identifier that identifies where the code list is located.
     *  Code List
     *  Uniform Resource Identifier
     *  Identifier
     *  string
     *  anyURI
     *
     * @param string $listURI
     * @return self
     */
    public function setListURI($listURI)
    {
        $this->listURI = $listURI;
        return $this;
    }

    /**
     * Gets as listSchemeURI
     *
     * UDT000007-SC10
     *  SC
     *  Code List Scheme. Uniform Resource. Identifier
     *  The Uniform Resource Identifier that identifies where the code list scheme is located.
     *  Code List Scheme
     *  Uniform Resource Identifier
     *  Identifier
     *  string
     *  anyURI
     *
     * @return string
     */
    public function getListSchemeURI()
    {
        return $this->listSchemeURI;
    }

    /**
     * Sets a new listSchemeURI
     *
     * UDT000007-SC10
     *  SC
     *  Code List Scheme. Uniform Resource. Identifier
     *  The Uniform Resource Identifier that identifies where the code list scheme is located.
     *  Code List Scheme
     *  Uniform Resource Identifier
     *  Identifier
     *  string
     *  anyURI
     *
     * @param string $listSchemeURI
     * @return self
     */
    public function setListSchemeURI($listSchemeURI)
    {
        $this->listSchemeURI = $listSchemeURI;
        return $this;
    }


}

