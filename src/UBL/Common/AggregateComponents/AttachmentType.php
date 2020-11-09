<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing AttachmentType
 *
 * ABIE
 *  Attachment. Details
 *  Information about an attached document. An attachment can be referred to externally (with the URI element) or internally (with the MIME reference element) or contained within the document itself (with the EmbeddedDocument element).
 *  Attachment
 * XSD Type: AttachmentType
 */
class AttachmentType
{

    /**
     * BBIE
     *  Attachment. Embedded_ Document. Binary Object
     *  Contains an embedded document as a BLOB (binary large object).
     *  0..1
     *  Attachment
     *  Embedded
     *  Document
     *  Binary Object
     *  Binary Object. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\EmbeddedDocumentBinaryObject $embeddedDocumentBinaryObject
     */
    private $embeddedDocumentBinaryObject = null;

    /**
     * ASBIE
     *  Attachment. External Reference
     *  An attached document, externally referred to, referred to in the MIME location, or embedded.
     *  0..1
     *  Attachment
     *  External Reference
     *  External Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ExternalReference $externalReference
     */
    private $externalReference = null;

    /**
     * Gets as embeddedDocumentBinaryObject
     *
     * BBIE
     *  Attachment. Embedded_ Document. Binary Object
     *  Contains an embedded document as a BLOB (binary large object).
     *  0..1
     *  Attachment
     *  Embedded
     *  Document
     *  Binary Object
     *  Binary Object. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\EmbeddedDocumentBinaryObject
     */
    public function getEmbeddedDocumentBinaryObject()
    {
        return $this->embeddedDocumentBinaryObject;
    }

    /**
     * Sets a new embeddedDocumentBinaryObject
     *
     * BBIE
     *  Attachment. Embedded_ Document. Binary Object
     *  Contains an embedded document as a BLOB (binary large object).
     *  0..1
     *  Attachment
     *  Embedded
     *  Document
     *  Binary Object
     *  Binary Object. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\EmbeddedDocumentBinaryObject $embeddedDocumentBinaryObject
     * @return self
     */
    public function setEmbeddedDocumentBinaryObject(\NOKA\PHPUBL\UBL\Common\BasicComponents\EmbeddedDocumentBinaryObject $embeddedDocumentBinaryObject)
    {
        $this->embeddedDocumentBinaryObject = $embeddedDocumentBinaryObject;
        return $this;
    }

    /**
     * Gets as externalReference
     *
     * ASBIE
     *  Attachment. External Reference
     *  An attached document, externally referred to, referred to in the MIME location, or embedded.
     *  0..1
     *  Attachment
     *  External Reference
     *  External Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ExternalReference
     */
    public function getExternalReference()
    {
        return $this->externalReference;
    }

    /**
     * Sets a new externalReference
     *
     * ASBIE
     *  Attachment. External Reference
     *  An attached document, externally referred to, referred to in the MIME location, or embedded.
     *  0..1
     *  Attachment
     *  External Reference
     *  External Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ExternalReference $externalReference
     * @return self
     */
    public function setExternalReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ExternalReference $externalReference)
    {
        $this->externalReference = $externalReference;
        return $this;
    }


}

