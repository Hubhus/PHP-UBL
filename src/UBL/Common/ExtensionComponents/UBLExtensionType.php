<?php

namespace NOKA\PHPUBL\UBL\Common\ExtensionComponents;

/**
 * Class representing UBLExtensionType
 *
 * A single extension for private use.
 * XSD Type: UBLExtensionType
 */
class UBLExtensionType
{

    /**
     * BBIE
     *  Extension. Identifier
     *  
     *  An identifier for the Extension assigned by the creator of the extension.
     *  0..1
     *  Extension
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Extension. Name
     *  
     *  A name for the Extension assigned by the creator of the extension.
     *  0..1
     *  Extension
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Name $name
     */
    private $name = null;

    /**
     * An agency that maintains one or more Extensions.
     *
     * @var \NOKA\PHPUBL\UBL\Common\ExtensionComponents\ExtensionAgencyID $extensionAgencyID
     */
    private $extensionAgencyID = null;

    /**
     * The name of the agency that maintains the Extension.
     *
     * @var \NOKA\PHPUBL\UBL\Common\ExtensionComponents\ExtensionAgencyName $extensionAgencyName
     */
    private $extensionAgencyName = null;

    /**
     * The version of the Extension.
     *
     * @var \NOKA\PHPUBL\UBL\Common\ExtensionComponents\ExtensionVersionID $extensionVersionID
     */
    private $extensionVersionID = null;

    /**
     * A URI for the Agency that maintains the Extension.
     *
     * @var \NOKA\PHPUBL\UBL\Common\ExtensionComponents\ExtensionAgencyURI $extensionAgencyURI
     */
    private $extensionAgencyURI = null;

    /**
     * A URI for the Extension.
     *
     * @var \NOKA\PHPUBL\UBL\Common\ExtensionComponents\ExtensionURI $extensionURI
     */
    private $extensionURI = null;

    /**
     * A code for reason the Extension is being included.
     *
     * @var \NOKA\PHPUBL\UBL\Common\ExtensionComponents\ExtensionReasonCode $extensionReasonCode
     */
    private $extensionReasonCode = null;

    /**
     * A description of the reason for the Extension.
     *
     * @var \NOKA\PHPUBL\UBL\Common\ExtensionComponents\ExtensionReason $extensionReason
     */
    private $extensionReason = null;

    /**
     * The definition of the extension content.
     *
     * @var \NOKA\PHPUBL\UBL\Common\ExtensionComponents\ExtensionContent $extensionContent
     */
    private $extensionContent = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Extension. Identifier
     *  
     *  An identifier for the Extension assigned by the creator of the extension.
     *  0..1
     *  Extension
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
     *  Extension. Identifier
     *  
     *  An identifier for the Extension assigned by the creator of the extension.
     *  0..1
     *  Extension
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
     *  Extension. Name
     *  
     *  A name for the Extension assigned by the creator of the extension.
     *  0..1
     *  Extension
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
     *  Extension. Name
     *  
     *  A name for the Extension assigned by the creator of the extension.
     *  0..1
     *  Extension
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
     * Gets as extensionAgencyID
     *
     * An agency that maintains one or more Extensions.
     *
     * @return \NOKA\PHPUBL\UBL\Common\ExtensionComponents\ExtensionAgencyID
     */
    public function getExtensionAgencyID()
    {
        return $this->extensionAgencyID;
    }

    /**
     * Sets a new extensionAgencyID
     *
     * An agency that maintains one or more Extensions.
     *
     * @param \NOKA\PHPUBL\UBL\Common\ExtensionComponents\ExtensionAgencyID $extensionAgencyID
     * @return self
     */
    public function setExtensionAgencyID(\NOKA\PHPUBL\UBL\Common\ExtensionComponents\ExtensionAgencyID $extensionAgencyID)
    {
        $this->extensionAgencyID = $extensionAgencyID;
        return $this;
    }

    /**
     * Gets as extensionAgencyName
     *
     * The name of the agency that maintains the Extension.
     *
     * @return \NOKA\PHPUBL\UBL\Common\ExtensionComponents\ExtensionAgencyName
     */
    public function getExtensionAgencyName()
    {
        return $this->extensionAgencyName;
    }

    /**
     * Sets a new extensionAgencyName
     *
     * The name of the agency that maintains the Extension.
     *
     * @param \NOKA\PHPUBL\UBL\Common\ExtensionComponents\ExtensionAgencyName $extensionAgencyName
     * @return self
     */
    public function setExtensionAgencyName(\NOKA\PHPUBL\UBL\Common\ExtensionComponents\ExtensionAgencyName $extensionAgencyName)
    {
        $this->extensionAgencyName = $extensionAgencyName;
        return $this;
    }

    /**
     * Gets as extensionVersionID
     *
     * The version of the Extension.
     *
     * @return \NOKA\PHPUBL\UBL\Common\ExtensionComponents\ExtensionVersionID
     */
    public function getExtensionVersionID()
    {
        return $this->extensionVersionID;
    }

    /**
     * Sets a new extensionVersionID
     *
     * The version of the Extension.
     *
     * @param \NOKA\PHPUBL\UBL\Common\ExtensionComponents\ExtensionVersionID $extensionVersionID
     * @return self
     */
    public function setExtensionVersionID(\NOKA\PHPUBL\UBL\Common\ExtensionComponents\ExtensionVersionID $extensionVersionID)
    {
        $this->extensionVersionID = $extensionVersionID;
        return $this;
    }

    /**
     * Gets as extensionAgencyURI
     *
     * A URI for the Agency that maintains the Extension.
     *
     * @return \NOKA\PHPUBL\UBL\Common\ExtensionComponents\ExtensionAgencyURI
     */
    public function getExtensionAgencyURI()
    {
        return $this->extensionAgencyURI;
    }

    /**
     * Sets a new extensionAgencyURI
     *
     * A URI for the Agency that maintains the Extension.
     *
     * @param \NOKA\PHPUBL\UBL\Common\ExtensionComponents\ExtensionAgencyURI $extensionAgencyURI
     * @return self
     */
    public function setExtensionAgencyURI(\NOKA\PHPUBL\UBL\Common\ExtensionComponents\ExtensionAgencyURI $extensionAgencyURI)
    {
        $this->extensionAgencyURI = $extensionAgencyURI;
        return $this;
    }

    /**
     * Gets as extensionURI
     *
     * A URI for the Extension.
     *
     * @return \NOKA\PHPUBL\UBL\Common\ExtensionComponents\ExtensionURI
     */
    public function getExtensionURI()
    {
        return $this->extensionURI;
    }

    /**
     * Sets a new extensionURI
     *
     * A URI for the Extension.
     *
     * @param \NOKA\PHPUBL\UBL\Common\ExtensionComponents\ExtensionURI $extensionURI
     * @return self
     */
    public function setExtensionURI(\NOKA\PHPUBL\UBL\Common\ExtensionComponents\ExtensionURI $extensionURI)
    {
        $this->extensionURI = $extensionURI;
        return $this;
    }

    /**
     * Gets as extensionReasonCode
     *
     * A code for reason the Extension is being included.
     *
     * @return \NOKA\PHPUBL\UBL\Common\ExtensionComponents\ExtensionReasonCode
     */
    public function getExtensionReasonCode()
    {
        return $this->extensionReasonCode;
    }

    /**
     * Sets a new extensionReasonCode
     *
     * A code for reason the Extension is being included.
     *
     * @param \NOKA\PHPUBL\UBL\Common\ExtensionComponents\ExtensionReasonCode $extensionReasonCode
     * @return self
     */
    public function setExtensionReasonCode(\NOKA\PHPUBL\UBL\Common\ExtensionComponents\ExtensionReasonCode $extensionReasonCode)
    {
        $this->extensionReasonCode = $extensionReasonCode;
        return $this;
    }

    /**
     * Gets as extensionReason
     *
     * A description of the reason for the Extension.
     *
     * @return \NOKA\PHPUBL\UBL\Common\ExtensionComponents\ExtensionReason
     */
    public function getExtensionReason()
    {
        return $this->extensionReason;
    }

    /**
     * Sets a new extensionReason
     *
     * A description of the reason for the Extension.
     *
     * @param \NOKA\PHPUBL\UBL\Common\ExtensionComponents\ExtensionReason $extensionReason
     * @return self
     */
    public function setExtensionReason(\NOKA\PHPUBL\UBL\Common\ExtensionComponents\ExtensionReason $extensionReason)
    {
        $this->extensionReason = $extensionReason;
        return $this;
    }

    /**
     * Gets as extensionContent
     *
     * The definition of the extension content.
     *
     * @return \NOKA\PHPUBL\UBL\Common\ExtensionComponents\ExtensionContent
     */
    public function getExtensionContent()
    {
        return $this->extensionContent;
    }

    /**
     * Sets a new extensionContent
     *
     * The definition of the extension content.
     *
     * @param \NOKA\PHPUBL\UBL\Common\ExtensionComponents\ExtensionContent $extensionContent
     * @return self
     */
    public function setExtensionContent(\NOKA\PHPUBL\UBL\Common\ExtensionComponents\ExtensionContent $extensionContent)
    {
        $this->extensionContent = $extensionContent;
        return $this;
    }


}

