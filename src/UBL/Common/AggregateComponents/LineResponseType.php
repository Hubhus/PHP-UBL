<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing LineResponseType
 *
 * ABIE
 *  Line Response. Details
 *  A response to a Line in a Document.
 *  Line Response
 * XSD Type: LineResponseType
 */
class LineResponseType
{

    /**
     * ASBIE
     *  Line Response. Line Reference
     *  An association to Line Reference.
     *  1
     *  Line Response
     *  Line Reference
     *  Line Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\LineReference $lineReference
     */
    private $lineReference = null;

    /**
     * ASBIE
     *  Line Response. Response
     *  An association to Response.
     *  1..n
     *  Line Response
     *  Response
     *  Response
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Response[] $response
     */
    private $response = [
        
    ];

    /**
     * Gets as lineReference
     *
     * ASBIE
     *  Line Response. Line Reference
     *  An association to Line Reference.
     *  1
     *  Line Response
     *  Line Reference
     *  Line Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\LineReference
     */
    public function getLineReference()
    {
        return $this->lineReference;
    }

    /**
     * Sets a new lineReference
     *
     * ASBIE
     *  Line Response. Line Reference
     *  An association to Line Reference.
     *  1
     *  Line Response
     *  Line Reference
     *  Line Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\LineReference $lineReference
     * @return self
     */
    public function setLineReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\LineReference $lineReference)
    {
        $this->lineReference = $lineReference;
        return $this;
    }

    /**
     * Adds as response
     *
     * ASBIE
     *  Line Response. Response
     *  An association to Response.
     *  1..n
     *  Line Response
     *  Response
     *  Response
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Response $response
     */
    public function addToResponse(\NOKA\PHPUBL\UBL\Common\AggregateComponents\Response $response)
    {
        $this->response[] = $response;
        return $this;
    }

    /**
     * isset response
     *
     * ASBIE
     *  Line Response. Response
     *  An association to Response.
     *  1..n
     *  Line Response
     *  Response
     *  Response
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResponse($index)
    {
        return isset($this->response[$index]);
    }

    /**
     * unset response
     *
     * ASBIE
     *  Line Response. Response
     *  An association to Response.
     *  1..n
     *  Line Response
     *  Response
     *  Response
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResponse($index)
    {
        unset($this->response[$index]);
    }

    /**
     * Gets as response
     *
     * ASBIE
     *  Line Response. Response
     *  An association to Response.
     *  1..n
     *  Line Response
     *  Response
     *  Response
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\Response[]
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Sets a new response
     *
     * ASBIE
     *  Line Response. Response
     *  An association to Response.
     *  1..n
     *  Line Response
     *  Response
     *  Response
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Response[] $response
     * @return self
     */
    public function setResponse(array $response)
    {
        $this->response = $response;
        return $this;
    }


}

