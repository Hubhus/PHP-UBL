<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing LineReferenceType
 *
 * ABIE
 *  Line Reference. Details
 *  Reference to a Line on a document.
 *  Line Reference
 * XSD Type: LineReferenceType
 */
class LineReferenceType
{

    /**
     * BBIE
     *  Line Reference. Line Identifier. Identifier
     *  Identifies the Line on the referenced document.
     *  1
     *  Line Reference
     *  Line Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\LineID $lineID
     */
    private $lineID = null;

    /**
     * BBIE
     *  Line Reference. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Line Reference
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Line Reference. Line Status Code. Code
     *  Identifies the status of the referenced Line with respect to its original state.
     *  0..1
     *  Line Reference
     *  Line Status Code
     *  Code
     *  Line Status_ Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\LineStatusCode $lineStatusCode
     */
    private $lineStatusCode = null;

    /**
     * ASBIE
     *  Line Reference. Document Reference
     *  An association to Document Reference.
     *  0..1
     *  Line Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentReference $documentReference
     */
    private $documentReference = null;

    /**
     * Gets as lineID
     *
     * BBIE
     *  Line Reference. Line Identifier. Identifier
     *  Identifies the Line on the referenced document.
     *  1
     *  Line Reference
     *  Line Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\LineID
     */
    public function getLineID()
    {
        return $this->lineID;
    }

    /**
     * Sets a new lineID
     *
     * BBIE
     *  Line Reference. Line Identifier. Identifier
     *  Identifies the Line on the referenced document.
     *  1
     *  Line Reference
     *  Line Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\LineID $lineID
     * @return self
     */
    public function setLineID(\NOKA\PHPUBL\UBL\Common\BasicComponents\LineID $lineID)
    {
        $this->lineID = $lineID;
        return $this;
    }

    /**
     * Gets as uUID
     *
     * BBIE
     *  Line Reference. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Line Reference
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
     *  Line Reference. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Line Reference
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
     * Gets as lineStatusCode
     *
     * BBIE
     *  Line Reference. Line Status Code. Code
     *  Identifies the status of the referenced Line with respect to its original state.
     *  0..1
     *  Line Reference
     *  Line Status Code
     *  Code
     *  Line Status_ Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\LineStatusCode
     */
    public function getLineStatusCode()
    {
        return $this->lineStatusCode;
    }

    /**
     * Sets a new lineStatusCode
     *
     * BBIE
     *  Line Reference. Line Status Code. Code
     *  Identifies the status of the referenced Line with respect to its original state.
     *  0..1
     *  Line Reference
     *  Line Status Code
     *  Code
     *  Line Status_ Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\LineStatusCode $lineStatusCode
     * @return self
     */
    public function setLineStatusCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\LineStatusCode $lineStatusCode)
    {
        $this->lineStatusCode = $lineStatusCode;
        return $this;
    }

    /**
     * Gets as documentReference
     *
     * ASBIE
     *  Line Reference. Document Reference
     *  An association to Document Reference.
     *  0..1
     *  Line Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentReference
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * ASBIE
     *  Line Reference. Document Reference
     *  An association to Document Reference.
     *  0..1
     *  Line Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentReference $documentReference
     * @return self
     */
    public function setDocumentReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentReference $documentReference)
    {
        $this->documentReference = $documentReference;
        return $this;
    }


}

