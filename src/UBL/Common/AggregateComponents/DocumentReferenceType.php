<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing DocumentReferenceType
 *
 * ABIE
 *  Document Reference. Details
 *  Information about a document referred to in another document.
 *  Document Reference
 * XSD Type: DocumentReferenceType
 */
class DocumentReferenceType
{

    /**
     * BBIE
     *  Document Reference. Identifier
     *  Identifies the document being referred to.
     *  1
     *  Document Reference
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "PO-001" "3333-44-123"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Document Reference. Copy_ Indicator. Indicator
     *  Indicates whether the referenced document is a copy (true) or the original (false).
     *  0..1
     *  Document Reference
     *  Copy
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $copyIndicator
     */
    private $copyIndicator = null;

    /**
     * BBIE
     *  Document Reference. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Document Reference
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Document Reference. Issue Date. Date
     *  The date, assigned by the sender of the referenced document, on which the referenced document was issued.
     *  0..1
     *  Document Reference
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Document Reference. Document Type Code. Code
     *  The document type, expressed as a code.
     *  0..1
     *  Document Reference
     *  Document Type Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\DocumentTypeCode $documentTypeCode
     */
    private $documentTypeCode = null;

    /**
     * BBIE
     *  Document Reference. Document Type. Text
     *  The document type, expressed as text.
     *  0..1
     *  Document Reference
     *  Document Type
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\DocumentType $documentType
     */
    private $documentType = null;

    /**
     * BBIE
     *  Document Reference. XPath. Text
     *  Refers to another part of the same document instance.
     *  0..n
     *  Document Reference
     *  XPath
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\XPath[] $xPath
     */
    private $xPath = [
        
    ];

    /**
     * ASBIE
     *  Document Reference. Attachment
     *  An attached document, externally referred to, referred to in the MIME location, or embedded.
     *  0..1
     *  Document Reference
     *  Attachment
     *  Attachment
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Attachment $attachment
     */
    private $attachment = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Document Reference. Identifier
     *  Identifies the document being referred to.
     *  1
     *  Document Reference
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "PO-001" "3333-44-123"
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
     *  Document Reference. Identifier
     *  Identifies the document being referred to.
     *  1
     *  Document Reference
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "PO-001" "3333-44-123"
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
     * Gets as copyIndicator
     *
     * BBIE
     *  Document Reference. Copy_ Indicator. Indicator
     *  Indicates whether the referenced document is a copy (true) or the original (false).
     *  0..1
     *  Document Reference
     *  Copy
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getCopyIndicator()
    {
        return $this->copyIndicator;
    }

    /**
     * Sets a new copyIndicator
     *
     * BBIE
     *  Document Reference. Copy_ Indicator. Indicator
     *  Indicates whether the referenced document is a copy (true) or the original (false).
     *  0..1
     *  Document Reference
     *  Copy
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $copyIndicator
     * @return self
     */
    public function setCopyIndicator($copyIndicator)
    {
        $this->copyIndicator = $copyIndicator;
        return $this;
    }

    /**
     * Gets as uUID
     *
     * BBIE
     *  Document Reference. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Document Reference
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\UUID
     */
    public function getUUID()
    {
        return $this->uUID;
    }

    /**
     * Sets a new uUID
     *
     * BBIE
     *  Document Reference. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Document Reference
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\UUID $uUID
     * @return self
     */
    public function setUUID(\NOKA\PHPUBL\UBL\Common\BasicComponents\UUID $uUID)
    {
        $this->uUID = $uUID;
        return $this;
    }

    /**
     * Gets as issueDate
     *
     * BBIE
     *  Document Reference. Issue Date. Date
     *  The date, assigned by the sender of the referenced document, on which the referenced document was issued.
     *  0..1
     *  Document Reference
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * Sets a new issueDate
     *
     * BBIE
     *  Document Reference. Issue Date. Date
     *  The date, assigned by the sender of the referenced document, on which the referenced document was issued.
     *  0..1
     *  Document Reference
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $issueDate
     * @return self
     */
    public function setIssueDate(\DateTime $issueDate)
    {
        $this->issueDate = $issueDate;
        return $this;
    }

    /**
     * Gets as documentTypeCode
     *
     * BBIE
     *  Document Reference. Document Type Code. Code
     *  The document type, expressed as a code.
     *  0..1
     *  Document Reference
     *  Document Type Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\DocumentTypeCode
     */
    public function getDocumentTypeCode()
    {
        return $this->documentTypeCode;
    }

    /**
     * Sets a new documentTypeCode
     *
     * BBIE
     *  Document Reference. Document Type Code. Code
     *  The document type, expressed as a code.
     *  0..1
     *  Document Reference
     *  Document Type Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\DocumentTypeCode $documentTypeCode
     * @return self
     */
    public function setDocumentTypeCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\DocumentTypeCode $documentTypeCode)
    {
        $this->documentTypeCode = $documentTypeCode;
        return $this;
    }

    /**
     * Gets as documentType
     *
     * BBIE
     *  Document Reference. Document Type. Text
     *  The document type, expressed as text.
     *  0..1
     *  Document Reference
     *  Document Type
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\DocumentType
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * Sets a new documentType
     *
     * BBIE
     *  Document Reference. Document Type. Text
     *  The document type, expressed as text.
     *  0..1
     *  Document Reference
     *  Document Type
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\DocumentType $documentType
     * @return self
     */
    public function setDocumentType(\NOKA\PHPUBL\UBL\Common\BasicComponents\DocumentType $documentType)
    {
        $this->documentType = $documentType;
        return $this;
    }

    /**
     * Adds as xPath
     *
     * BBIE
     *  Document Reference. XPath. Text
     *  Refers to another part of the same document instance.
     *  0..n
     *  Document Reference
     *  XPath
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\XPath $xPath
     */
    public function addToXPath(\NOKA\PHPUBL\UBL\Common\BasicComponents\XPath $xPath)
    {
        $this->xPath[] = $xPath;
        return $this;
    }

    /**
     * isset xPath
     *
     * BBIE
     *  Document Reference. XPath. Text
     *  Refers to another part of the same document instance.
     *  0..n
     *  Document Reference
     *  XPath
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetXPath($index)
    {
        return isset($this->xPath[$index]);
    }

    /**
     * unset xPath
     *
     * BBIE
     *  Document Reference. XPath. Text
     *  Refers to another part of the same document instance.
     *  0..n
     *  Document Reference
     *  XPath
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetXPath($index)
    {
        unset($this->xPath[$index]);
    }

    /**
     * Gets as xPath
     *
     * BBIE
     *  Document Reference. XPath. Text
     *  Refers to another part of the same document instance.
     *  0..n
     *  Document Reference
     *  XPath
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\XPath[]
     */
    public function getXPath()
    {
        return $this->xPath;
    }

    /**
     * Sets a new xPath
     *
     * BBIE
     *  Document Reference. XPath. Text
     *  Refers to another part of the same document instance.
     *  0..n
     *  Document Reference
     *  XPath
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\XPath[] $xPath
     * @return self
     */
    public function setXPath(array $xPath)
    {
        $this->xPath = $xPath;
        return $this;
    }

    /**
     * Gets as attachment
     *
     * ASBIE
     *  Document Reference. Attachment
     *  An attached document, externally referred to, referred to in the MIME location, or embedded.
     *  0..1
     *  Document Reference
     *  Attachment
     *  Attachment
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\Attachment
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Sets a new attachment
     *
     * ASBIE
     *  Document Reference. Attachment
     *  An attached document, externally referred to, referred to in the MIME location, or embedded.
     *  0..1
     *  Document Reference
     *  Attachment
     *  Attachment
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Attachment $attachment
     * @return self
     */
    public function setAttachment(\NOKA\PHPUBL\UBL\Common\AggregateComponents\Attachment $attachment)
    {
        $this->attachment = $attachment;
        return $this;
    }


}

