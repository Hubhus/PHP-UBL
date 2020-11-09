<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing ResponseType
 *
 * ABIE
 *  Response. Details
 *  Information about responses to a document (at the application level).
 *  Response
 * XSD Type: ResponseType
 */
class ResponseType
{

    /**
     * BBIE
     *  Response. Reference. Identifier
     *  Identifies the section (or line) of the document to which the response applies.
     *  1
     *  Response
     *  Reference
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ReferenceID $referenceID
     */
    private $referenceID = null;

    /**
     * BBIE
     *  Response. Response Code. Code
     *  A code for the description of the response to the transaction document.
     *  0..1
     *  Response
     *  Response Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ResponseCode $responseCode
     */
    private $responseCode = null;

    /**
     * BBIE
     *  Response. Description. Text
     *  The description of the response to the transaction document.
     *  0..n
     *  Response
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * Gets as referenceID
     *
     * BBIE
     *  Response. Reference. Identifier
     *  Identifies the section (or line) of the document to which the response applies.
     *  1
     *  Response
     *  Reference
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ReferenceID
     */
    public function getReferenceID()
    {
        return $this->referenceID;
    }

    /**
     * Sets a new referenceID
     *
     * BBIE
     *  Response. Reference. Identifier
     *  Identifies the section (or line) of the document to which the response applies.
     *  1
     *  Response
     *  Reference
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ReferenceID $referenceID
     * @return self
     */
    public function setReferenceID(\NOKA\PHPUBL\UBL\Common\BasicComponents\ReferenceID $referenceID)
    {
        $this->referenceID = $referenceID;
        return $this;
    }

    /**
     * Gets as responseCode
     *
     * BBIE
     *  Response. Response Code. Code
     *  A code for the description of the response to the transaction document.
     *  0..1
     *  Response
     *  Response Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ResponseCode
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * Sets a new responseCode
     *
     * BBIE
     *  Response. Response Code. Code
     *  A code for the description of the response to the transaction document.
     *  0..1
     *  Response
     *  Response Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ResponseCode $responseCode
     * @return self
     */
    public function setResponseCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\ResponseCode $responseCode)
    {
        $this->responseCode = $responseCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Response. Description. Text
     *  The description of the response to the transaction document.
     *  0..n
     *  Response
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Description $description
     */
    public function addToDescription(\NOKA\PHPUBL\UBL\Common\BasicComponents\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Response. Description. Text
     *  The description of the response to the transaction document.
     *  0..n
     *  Response
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * BBIE
     *  Response. Description. Text
     *  The description of the response to the transaction document.
     *  0..n
     *  Response
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Response. Description. Text
     *  The description of the response to the transaction document.
     *  0..n
     *  Response
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Response. Description. Text
     *  The description of the response to the transaction document.
     *  0..n
     *  Response
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Description[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }


}

