<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing DocumentResponseType
 *
 * ABIE
 *  Document Response. Details
 *  Information about responses to a document (at the application level).
 *  Document Response
 * XSD Type: DocumentResponseType
 */
class DocumentResponseType
{

    /**
     * ASBIE
     *  Document Response. Response
     *  The response to the document.
     *  1
     *  Document Response
     *  Response
     *  Response
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Response $response
     */
    private $response = null;

    /**
     * ASBIE
     *  Document Response. Document Reference
     *  An association to Document Reference.
     *  1
     *  Document Response
     *  Document Reference
     *  Document Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentReference $documentReference
     */
    private $documentReference = null;

    /**
     * ASBIE
     *  Document Response. Issuer_ Party. Party
     *  The party who issued a document.
     *  0..1
     *  Document Response
     *  Issuer
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\IssuerParty $issuerParty
     */
    private $issuerParty = null;

    /**
     * ASBIE
     *  Document Response. Recipient_ Party. Party
     *  The party for whom the document is intended.
     *  0..1
     *  Document Response
     *  Recipient
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\RecipientParty $recipientParty
     */
    private $recipientParty = null;

    /**
     * ASBIE
     *  Document Response. Line Response
     *  Response to various lines in the document.
     *  0..n
     *  Document Response
     *  Line Response
     *  Line Response
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\LineResponse[] $lineResponse
     */
    private $lineResponse = [
        
    ];

    /**
     * Gets as response
     *
     * ASBIE
     *  Document Response. Response
     *  The response to the document.
     *  1
     *  Document Response
     *  Response
     *  Response
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\Response
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Sets a new response
     *
     * ASBIE
     *  Document Response. Response
     *  The response to the document.
     *  1
     *  Document Response
     *  Response
     *  Response
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Response $response
     * @return self
     */
    public function setResponse(\NOKA\PHPUBL\UBL\Common\AggregateComponents\Response $response)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * Gets as documentReference
     *
     * ASBIE
     *  Document Response. Document Reference
     *  An association to Document Reference.
     *  1
     *  Document Response
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
     *  Document Response. Document Reference
     *  An association to Document Reference.
     *  1
     *  Document Response
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

    /**
     * Gets as issuerParty
     *
     * ASBIE
     *  Document Response. Issuer_ Party. Party
     *  The party who issued a document.
     *  0..1
     *  Document Response
     *  Issuer
     *  Party
     *  Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\IssuerParty
     */
    public function getIssuerParty()
    {
        return $this->issuerParty;
    }

    /**
     * Sets a new issuerParty
     *
     * ASBIE
     *  Document Response. Issuer_ Party. Party
     *  The party who issued a document.
     *  0..1
     *  Document Response
     *  Issuer
     *  Party
     *  Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\IssuerParty $issuerParty
     * @return self
     */
    public function setIssuerParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\IssuerParty $issuerParty)
    {
        $this->issuerParty = $issuerParty;
        return $this;
    }

    /**
     * Gets as recipientParty
     *
     * ASBIE
     *  Document Response. Recipient_ Party. Party
     *  The party for whom the document is intended.
     *  0..1
     *  Document Response
     *  Recipient
     *  Party
     *  Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\RecipientParty
     */
    public function getRecipientParty()
    {
        return $this->recipientParty;
    }

    /**
     * Sets a new recipientParty
     *
     * ASBIE
     *  Document Response. Recipient_ Party. Party
     *  The party for whom the document is intended.
     *  0..1
     *  Document Response
     *  Recipient
     *  Party
     *  Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\RecipientParty $recipientParty
     * @return self
     */
    public function setRecipientParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\RecipientParty $recipientParty)
    {
        $this->recipientParty = $recipientParty;
        return $this;
    }

    /**
     * Adds as lineResponse
     *
     * ASBIE
     *  Document Response. Line Response
     *  Response to various lines in the document.
     *  0..n
     *  Document Response
     *  Line Response
     *  Line Response
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\LineResponse $lineResponse
     */
    public function addToLineResponse(\NOKA\PHPUBL\UBL\Common\AggregateComponents\LineResponse $lineResponse)
    {
        $this->lineResponse[] = $lineResponse;
        return $this;
    }

    /**
     * isset lineResponse
     *
     * ASBIE
     *  Document Response. Line Response
     *  Response to various lines in the document.
     *  0..n
     *  Document Response
     *  Line Response
     *  Line Response
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLineResponse($index)
    {
        return isset($this->lineResponse[$index]);
    }

    /**
     * unset lineResponse
     *
     * ASBIE
     *  Document Response. Line Response
     *  Response to various lines in the document.
     *  0..n
     *  Document Response
     *  Line Response
     *  Line Response
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLineResponse($index)
    {
        unset($this->lineResponse[$index]);
    }

    /**
     * Gets as lineResponse
     *
     * ASBIE
     *  Document Response. Line Response
     *  Response to various lines in the document.
     *  0..n
     *  Document Response
     *  Line Response
     *  Line Response
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\LineResponse[]
     */
    public function getLineResponse()
    {
        return $this->lineResponse;
    }

    /**
     * Sets a new lineResponse
     *
     * ASBIE
     *  Document Response. Line Response
     *  Response to various lines in the document.
     *  0..n
     *  Document Response
     *  Line Response
     *  Line Response
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\LineResponse[] $lineResponse
     * @return self
     */
    public function setLineResponse(array $lineResponse)
    {
        $this->lineResponse = $lineResponse;
        return $this;
    }


}

