<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing ExternalReferenceType
 *
 * ABIE
 *  External Reference. Details
 *  Information directly relating to an external reference i.e. a document stored at a remote location.
 *  External Reference
 * XSD Type: ExternalReferenceType
 */
class ExternalReferenceType
{

    /**
     * BBIE
     *  External Reference. URI. Identifier
     *  The Uniform Resource Identifier (URI) that identifies where the external document is located.
     *  0..1
     *  External Reference
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\URI $uRI
     */
    private $uRI = null;

    /**
     * BBIE
     *  External Reference. Document Hash. Text
     *  Specifies the hash code for the externally stored document.
     *  0..1
     *  External Reference
     *  Document Hash
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\DocumentHash $documentHash
     */
    private $documentHash = null;

    /**
     * BBIE
     *  External Reference. Expiry Date. Date
     *  The date on which the document can no longer be found on the URI.
     *  0..1
     *  External Reference
     *  Expiry Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $expiryDate
     */
    private $expiryDate = null;

    /**
     * BBIE
     *  External Reference. Expiry Time. Time
     *  The time on which the document can no longer be found on the URI.
     *  0..1
     *  External Reference
     *  Expiry Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $expiryTime
     */
    private $expiryTime = null;

    /**
     * Gets as uRI
     *
     * BBIE
     *  External Reference. URI. Identifier
     *  The Uniform Resource Identifier (URI) that identifies where the external document is located.
     *  0..1
     *  External Reference
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\URI
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * BBIE
     *  External Reference. URI. Identifier
     *  The Uniform Resource Identifier (URI) that identifies where the external document is located.
     *  0..1
     *  External Reference
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\URI $uRI
     * @return self
     */
    public function setURI(\NOKA\PHPUBL\UBL\Common\BasicComponents\URI $uRI)
    {
        $this->uRI = $uRI;
        return $this;
    }

    /**
     * Gets as documentHash
     *
     * BBIE
     *  External Reference. Document Hash. Text
     *  Specifies the hash code for the externally stored document.
     *  0..1
     *  External Reference
     *  Document Hash
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\DocumentHash
     */
    public function getDocumentHash()
    {
        return $this->documentHash;
    }

    /**
     * Sets a new documentHash
     *
     * BBIE
     *  External Reference. Document Hash. Text
     *  Specifies the hash code for the externally stored document.
     *  0..1
     *  External Reference
     *  Document Hash
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\DocumentHash $documentHash
     * @return self
     */
    public function setDocumentHash(\NOKA\PHPUBL\UBL\Common\BasicComponents\DocumentHash $documentHash)
    {
        $this->documentHash = $documentHash;
        return $this;
    }

    /**
     * Gets as expiryDate
     *
     * BBIE
     *  External Reference. Expiry Date. Date
     *  The date on which the document can no longer be found on the URI.
     *  0..1
     *  External Reference
     *  Expiry Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * Sets a new expiryDate
     *
     * BBIE
     *  External Reference. Expiry Date. Date
     *  The date on which the document can no longer be found on the URI.
     *  0..1
     *  External Reference
     *  Expiry Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $expiryDate
     * @return self
     */
    public function setExpiryDate(\DateTime $expiryDate)
    {
        $this->expiryDate = $expiryDate;
        return $this;
    }

    /**
     * Gets as expiryTime
     *
     * BBIE
     *  External Reference. Expiry Time. Time
     *  The time on which the document can no longer be found on the URI.
     *  0..1
     *  External Reference
     *  Expiry Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getExpiryTime()
    {
        return $this->expiryTime;
    }

    /**
     * Sets a new expiryTime
     *
     * BBIE
     *  External Reference. Expiry Time. Time
     *  The time on which the document can no longer be found on the URI.
     *  0..1
     *  External Reference
     *  Expiry Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $expiryTime
     * @return self
     */
    public function setExpiryTime(\DateTime $expiryTime)
    {
        $this->expiryTime = $expiryTime;
        return $this;
    }


}

