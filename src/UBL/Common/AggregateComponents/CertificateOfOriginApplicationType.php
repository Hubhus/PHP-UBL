<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing CertificateOfOriginApplicationType
 *
 * ABIE
 *  Certificate Of Origin Application. Details
 *  A document that contains information of CO application.
 *  Certificate Of Origin Application
 * XSD Type: CertificateOfOriginApplicationType
 */
class CertificateOfOriginApplicationType
{

    /**
     * BBIE
     *  Certificate Of Origin Application. Reference. Identifier
     *  Holds the unique number that identifies the Despatch Advice, typically according to the seller's system that generated the Despatch Advice.
     *  1
     *  Certificate Of Origin Application
     *  Reference
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ReferenceID $referenceID
     */
    private $referenceID = null;

    /**
     * BBIE
     *  Certificate Of Origin Application. Certificate Type. Text
     *  Type of CO. Type could be Ordinary, Re-export, Commonwealth Preferential etc.
     *  1
     *  Certificate Of Origin Application
     *  Certificate Type
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\CertificateType $certificateType
     */
    private $certificateType = null;

    /**
     * BBIE
     *  Certificate Of Origin Application. Application Status Code. Code
     *  Indicates the status of the application (revision, replacement, etc.).
     *  0..1
     *  Certificate Of Origin Application
     *  Application Status Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ApplicationStatusCode $applicationStatusCode
     */
    private $applicationStatusCode = null;

    /**
     * BBIE
     *  Certificate Of Origin Application. Original_ Job Identifier. Identifier
     *  The latest Job Number given to the Origin application. This is used by the system to keep track of the amendments or cancellation of the origin application applied earlier.
     *  1
     *  Certificate Of Origin Application
     *  Original
     *  Job Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\OriginalJobID $originalJobID
     */
    private $originalJobID = null;

    /**
     * BBIE
     *  Certificate Of Origin Application. Previous_ Job Identifier. Identifier
     *  The previous Job Number assigned in case the application undergoes query or change. This is used by the system to keep track of the amendments or cancellation of the origin application applied earlier.
     *  0..1
     *  Certificate Of Origin Application
     *  Previous
     *  Job Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\PreviousJobID $previousJobID
     */
    private $previousJobID = null;

    /**
     * BBIE
     *  Certificate Of Origin Application. Remarks. Text
     *  Remarks by the applicant for the Certificate of Origin Application.
     *  0..1
     *  Certificate Of Origin Application
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Remarks $remarks
     */
    private $remarks = null;

    /**
     * ASBIE
     *  Certificate Of Origin Application. Shipment
     *  Information about the separately identifiable collection of goods items (available to be) transported from one consignor to one consignee via one or more modes of transport.
     *  1
     *  Certificate Of Origin Application
     *  Shipment
     *  Shipment
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Shipment $shipment
     */
    private $shipment = null;

    /**
     * ASBIE
     *  Certificate Of Origin Application. Endorser Party
     *  The party providing the endorsement.
     *  1..n
     *  Certificate Of Origin Application
     *  Endorser Party
     *  Endorser Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\EndorserParty[] $endorserParty
     */
    private $endorserParty = [
        
    ];

    /**
     * ASBIE
     *  Certificate Of Origin Application. Preparation_ Party. Party
     *  Details of an individual, a group, or a body that prepares the Certificate of Origin application.
     *  1
     *  Certificate Of Origin Application
     *  Preparation
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\PreparationParty $preparationParty
     */
    private $preparationParty = null;

    /**
     * ASBIE
     *  Certificate Of Origin Application. Issuer_ Party. Party
     *  Details of the authorized organization that issued the Certificate of Origin.
     *  1
     *  Certificate Of Origin Application
     *  Issuer
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\IssuerParty $issuerParty
     */
    private $issuerParty = null;

    /**
     * ASBIE
     *  Certificate Of Origin Application. Issuing_ Country. Country
     *  The country for which the Certificate of Origin is issued.
     *  1
     *  Certificate Of Origin Application
     *  Issuing
     *  Country
     *  Country
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\IssuingCountry $issuingCountry
     */
    private $issuingCountry = null;

    /**
     * ASBIE
     *  Certificate Of Origin Application. Document Distribution
     *  The distribution of the Certificate of Origin to interested parties.
     *  0..n
     *  Certificate Of Origin Application
     *  Document Distribution
     *  Document Distribution
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentDistribution[] $documentDistribution
     */
    private $documentDistribution = [
        
    ];

    /**
     * ASBIE
     *  Certificate Of Origin Application. Supporting_ Document Reference. Document Reference
     *  An associative reference to a supporting document.
     *  0..n
     *  Certificate Of Origin Application
     *  Supporting
     *  Document Reference
     *  Document Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\SupportingDocumentReference[] $supportingDocumentReference
     */
    private $supportingDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Certificate Of Origin Application. Signature
     *  One or more signatures applied to the document instance.
     *  0..n
     *  Certificate Of Origin Application
     *  Signature
     *  Signature
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Signature[] $signature
     */
    private $signature = [
        
    ];

    /**
     * Gets as referenceID
     *
     * BBIE
     *  Certificate Of Origin Application. Reference. Identifier
     *  Holds the unique number that identifies the Despatch Advice, typically according to the seller's system that generated the Despatch Advice.
     *  1
     *  Certificate Of Origin Application
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
     *  Certificate Of Origin Application. Reference. Identifier
     *  Holds the unique number that identifies the Despatch Advice, typically according to the seller's system that generated the Despatch Advice.
     *  1
     *  Certificate Of Origin Application
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
     * Gets as certificateType
     *
     * BBIE
     *  Certificate Of Origin Application. Certificate Type. Text
     *  Type of CO. Type could be Ordinary, Re-export, Commonwealth Preferential etc.
     *  1
     *  Certificate Of Origin Application
     *  Certificate Type
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\CertificateType
     */
    public function getCertificateType()
    {
        return $this->certificateType;
    }

    /**
     * Sets a new certificateType
     *
     * BBIE
     *  Certificate Of Origin Application. Certificate Type. Text
     *  Type of CO. Type could be Ordinary, Re-export, Commonwealth Preferential etc.
     *  1
     *  Certificate Of Origin Application
     *  Certificate Type
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\CertificateType $certificateType
     * @return self
     */
    public function setCertificateType(\NOKA\PHPUBL\UBL\Common\BasicComponents\CertificateType $certificateType)
    {
        $this->certificateType = $certificateType;
        return $this;
    }

    /**
     * Gets as applicationStatusCode
     *
     * BBIE
     *  Certificate Of Origin Application. Application Status Code. Code
     *  Indicates the status of the application (revision, replacement, etc.).
     *  0..1
     *  Certificate Of Origin Application
     *  Application Status Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ApplicationStatusCode
     */
    public function getApplicationStatusCode()
    {
        return $this->applicationStatusCode;
    }

    /**
     * Sets a new applicationStatusCode
     *
     * BBIE
     *  Certificate Of Origin Application. Application Status Code. Code
     *  Indicates the status of the application (revision, replacement, etc.).
     *  0..1
     *  Certificate Of Origin Application
     *  Application Status Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ApplicationStatusCode $applicationStatusCode
     * @return self
     */
    public function setApplicationStatusCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\ApplicationStatusCode $applicationStatusCode)
    {
        $this->applicationStatusCode = $applicationStatusCode;
        return $this;
    }

    /**
     * Gets as originalJobID
     *
     * BBIE
     *  Certificate Of Origin Application. Original_ Job Identifier. Identifier
     *  The latest Job Number given to the Origin application. This is used by the system to keep track of the amendments or cancellation of the origin application applied earlier.
     *  1
     *  Certificate Of Origin Application
     *  Original
     *  Job Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\OriginalJobID
     */
    public function getOriginalJobID()
    {
        return $this->originalJobID;
    }

    /**
     * Sets a new originalJobID
     *
     * BBIE
     *  Certificate Of Origin Application. Original_ Job Identifier. Identifier
     *  The latest Job Number given to the Origin application. This is used by the system to keep track of the amendments or cancellation of the origin application applied earlier.
     *  1
     *  Certificate Of Origin Application
     *  Original
     *  Job Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\OriginalJobID $originalJobID
     * @return self
     */
    public function setOriginalJobID(\NOKA\PHPUBL\UBL\Common\BasicComponents\OriginalJobID $originalJobID)
    {
        $this->originalJobID = $originalJobID;
        return $this;
    }

    /**
     * Gets as previousJobID
     *
     * BBIE
     *  Certificate Of Origin Application. Previous_ Job Identifier. Identifier
     *  The previous Job Number assigned in case the application undergoes query or change. This is used by the system to keep track of the amendments or cancellation of the origin application applied earlier.
     *  0..1
     *  Certificate Of Origin Application
     *  Previous
     *  Job Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\PreviousJobID
     */
    public function getPreviousJobID()
    {
        return $this->previousJobID;
    }

    /**
     * Sets a new previousJobID
     *
     * BBIE
     *  Certificate Of Origin Application. Previous_ Job Identifier. Identifier
     *  The previous Job Number assigned in case the application undergoes query or change. This is used by the system to keep track of the amendments or cancellation of the origin application applied earlier.
     *  0..1
     *  Certificate Of Origin Application
     *  Previous
     *  Job Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\PreviousJobID $previousJobID
     * @return self
     */
    public function setPreviousJobID(\NOKA\PHPUBL\UBL\Common\BasicComponents\PreviousJobID $previousJobID)
    {
        $this->previousJobID = $previousJobID;
        return $this;
    }

    /**
     * Gets as remarks
     *
     * BBIE
     *  Certificate Of Origin Application. Remarks. Text
     *  Remarks by the applicant for the Certificate of Origin Application.
     *  0..1
     *  Certificate Of Origin Application
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Remarks
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Sets a new remarks
     *
     * BBIE
     *  Certificate Of Origin Application. Remarks. Text
     *  Remarks by the applicant for the Certificate of Origin Application.
     *  0..1
     *  Certificate Of Origin Application
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Remarks $remarks
     * @return self
     */
    public function setRemarks(\NOKA\PHPUBL\UBL\Common\BasicComponents\Remarks $remarks)
    {
        $this->remarks = $remarks;
        return $this;
    }

    /**
     * Gets as shipment
     *
     * ASBIE
     *  Certificate Of Origin Application. Shipment
     *  Information about the separately identifiable collection of goods items (available to be) transported from one consignor to one consignee via one or more modes of transport.
     *  1
     *  Certificate Of Origin Application
     *  Shipment
     *  Shipment
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\Shipment
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * Sets a new shipment
     *
     * ASBIE
     *  Certificate Of Origin Application. Shipment
     *  Information about the separately identifiable collection of goods items (available to be) transported from one consignor to one consignee via one or more modes of transport.
     *  1
     *  Certificate Of Origin Application
     *  Shipment
     *  Shipment
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Shipment $shipment
     * @return self
     */
    public function setShipment(\NOKA\PHPUBL\UBL\Common\AggregateComponents\Shipment $shipment)
    {
        $this->shipment = $shipment;
        return $this;
    }

    /**
     * Adds as endorserParty
     *
     * ASBIE
     *  Certificate Of Origin Application. Endorser Party
     *  The party providing the endorsement.
     *  1..n
     *  Certificate Of Origin Application
     *  Endorser Party
     *  Endorser Party
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\EndorserParty $endorserParty
     */
    public function addToEndorserParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\EndorserParty $endorserParty)
    {
        $this->endorserParty[] = $endorserParty;
        return $this;
    }

    /**
     * isset endorserParty
     *
     * ASBIE
     *  Certificate Of Origin Application. Endorser Party
     *  The party providing the endorsement.
     *  1..n
     *  Certificate Of Origin Application
     *  Endorser Party
     *  Endorser Party
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEndorserParty($index)
    {
        return isset($this->endorserParty[$index]);
    }

    /**
     * unset endorserParty
     *
     * ASBIE
     *  Certificate Of Origin Application. Endorser Party
     *  The party providing the endorsement.
     *  1..n
     *  Certificate Of Origin Application
     *  Endorser Party
     *  Endorser Party
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEndorserParty($index)
    {
        unset($this->endorserParty[$index]);
    }

    /**
     * Gets as endorserParty
     *
     * ASBIE
     *  Certificate Of Origin Application. Endorser Party
     *  The party providing the endorsement.
     *  1..n
     *  Certificate Of Origin Application
     *  Endorser Party
     *  Endorser Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\EndorserParty[]
     */
    public function getEndorserParty()
    {
        return $this->endorserParty;
    }

    /**
     * Sets a new endorserParty
     *
     * ASBIE
     *  Certificate Of Origin Application. Endorser Party
     *  The party providing the endorsement.
     *  1..n
     *  Certificate Of Origin Application
     *  Endorser Party
     *  Endorser Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\EndorserParty[] $endorserParty
     * @return self
     */
    public function setEndorserParty(array $endorserParty)
    {
        $this->endorserParty = $endorserParty;
        return $this;
    }

    /**
     * Gets as preparationParty
     *
     * ASBIE
     *  Certificate Of Origin Application. Preparation_ Party. Party
     *  Details of an individual, a group, or a body that prepares the Certificate of Origin application.
     *  1
     *  Certificate Of Origin Application
     *  Preparation
     *  Party
     *  Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\PreparationParty
     */
    public function getPreparationParty()
    {
        return $this->preparationParty;
    }

    /**
     * Sets a new preparationParty
     *
     * ASBIE
     *  Certificate Of Origin Application. Preparation_ Party. Party
     *  Details of an individual, a group, or a body that prepares the Certificate of Origin application.
     *  1
     *  Certificate Of Origin Application
     *  Preparation
     *  Party
     *  Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\PreparationParty $preparationParty
     * @return self
     */
    public function setPreparationParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\PreparationParty $preparationParty)
    {
        $this->preparationParty = $preparationParty;
        return $this;
    }

    /**
     * Gets as issuerParty
     *
     * ASBIE
     *  Certificate Of Origin Application. Issuer_ Party. Party
     *  Details of the authorized organization that issued the Certificate of Origin.
     *  1
     *  Certificate Of Origin Application
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
     *  Certificate Of Origin Application. Issuer_ Party. Party
     *  Details of the authorized organization that issued the Certificate of Origin.
     *  1
     *  Certificate Of Origin Application
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
     * Gets as issuingCountry
     *
     * ASBIE
     *  Certificate Of Origin Application. Issuing_ Country. Country
     *  The country for which the Certificate of Origin is issued.
     *  1
     *  Certificate Of Origin Application
     *  Issuing
     *  Country
     *  Country
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\IssuingCountry
     */
    public function getIssuingCountry()
    {
        return $this->issuingCountry;
    }

    /**
     * Sets a new issuingCountry
     *
     * ASBIE
     *  Certificate Of Origin Application. Issuing_ Country. Country
     *  The country for which the Certificate of Origin is issued.
     *  1
     *  Certificate Of Origin Application
     *  Issuing
     *  Country
     *  Country
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\IssuingCountry $issuingCountry
     * @return self
     */
    public function setIssuingCountry(\NOKA\PHPUBL\UBL\Common\AggregateComponents\IssuingCountry $issuingCountry)
    {
        $this->issuingCountry = $issuingCountry;
        return $this;
    }

    /**
     * Adds as documentDistribution
     *
     * ASBIE
     *  Certificate Of Origin Application. Document Distribution
     *  The distribution of the Certificate of Origin to interested parties.
     *  0..n
     *  Certificate Of Origin Application
     *  Document Distribution
     *  Document Distribution
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentDistribution $documentDistribution
     */
    public function addToDocumentDistribution(\NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentDistribution $documentDistribution)
    {
        $this->documentDistribution[] = $documentDistribution;
        return $this;
    }

    /**
     * isset documentDistribution
     *
     * ASBIE
     *  Certificate Of Origin Application. Document Distribution
     *  The distribution of the Certificate of Origin to interested parties.
     *  0..n
     *  Certificate Of Origin Application
     *  Document Distribution
     *  Document Distribution
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentDistribution($index)
    {
        return isset($this->documentDistribution[$index]);
    }

    /**
     * unset documentDistribution
     *
     * ASBIE
     *  Certificate Of Origin Application. Document Distribution
     *  The distribution of the Certificate of Origin to interested parties.
     *  0..n
     *  Certificate Of Origin Application
     *  Document Distribution
     *  Document Distribution
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentDistribution($index)
    {
        unset($this->documentDistribution[$index]);
    }

    /**
     * Gets as documentDistribution
     *
     * ASBIE
     *  Certificate Of Origin Application. Document Distribution
     *  The distribution of the Certificate of Origin to interested parties.
     *  0..n
     *  Certificate Of Origin Application
     *  Document Distribution
     *  Document Distribution
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentDistribution[]
     */
    public function getDocumentDistribution()
    {
        return $this->documentDistribution;
    }

    /**
     * Sets a new documentDistribution
     *
     * ASBIE
     *  Certificate Of Origin Application. Document Distribution
     *  The distribution of the Certificate of Origin to interested parties.
     *  0..n
     *  Certificate Of Origin Application
     *  Document Distribution
     *  Document Distribution
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentDistribution[] $documentDistribution
     * @return self
     */
    public function setDocumentDistribution(array $documentDistribution)
    {
        $this->documentDistribution = $documentDistribution;
        return $this;
    }

    /**
     * Adds as supportingDocumentReference
     *
     * ASBIE
     *  Certificate Of Origin Application. Supporting_ Document Reference. Document Reference
     *  An associative reference to a supporting document.
     *  0..n
     *  Certificate Of Origin Application
     *  Supporting
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\SupportingDocumentReference $supportingDocumentReference
     */
    public function addToSupportingDocumentReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\SupportingDocumentReference $supportingDocumentReference)
    {
        $this->supportingDocumentReference[] = $supportingDocumentReference;
        return $this;
    }

    /**
     * isset supportingDocumentReference
     *
     * ASBIE
     *  Certificate Of Origin Application. Supporting_ Document Reference. Document Reference
     *  An associative reference to a supporting document.
     *  0..n
     *  Certificate Of Origin Application
     *  Supporting
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupportingDocumentReference($index)
    {
        return isset($this->supportingDocumentReference[$index]);
    }

    /**
     * unset supportingDocumentReference
     *
     * ASBIE
     *  Certificate Of Origin Application. Supporting_ Document Reference. Document Reference
     *  An associative reference to a supporting document.
     *  0..n
     *  Certificate Of Origin Application
     *  Supporting
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupportingDocumentReference($index)
    {
        unset($this->supportingDocumentReference[$index]);
    }

    /**
     * Gets as supportingDocumentReference
     *
     * ASBIE
     *  Certificate Of Origin Application. Supporting_ Document Reference. Document Reference
     *  An associative reference to a supporting document.
     *  0..n
     *  Certificate Of Origin Application
     *  Supporting
     *  Document Reference
     *  Document Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\SupportingDocumentReference[]
     */
    public function getSupportingDocumentReference()
    {
        return $this->supportingDocumentReference;
    }

    /**
     * Sets a new supportingDocumentReference
     *
     * ASBIE
     *  Certificate Of Origin Application. Supporting_ Document Reference. Document Reference
     *  An associative reference to a supporting document.
     *  0..n
     *  Certificate Of Origin Application
     *  Supporting
     *  Document Reference
     *  Document Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\SupportingDocumentReference[] $supportingDocumentReference
     * @return self
     */
    public function setSupportingDocumentReference(array $supportingDocumentReference)
    {
        $this->supportingDocumentReference = $supportingDocumentReference;
        return $this;
    }

    /**
     * Adds as signature
     *
     * ASBIE
     *  Certificate Of Origin Application. Signature
     *  One or more signatures applied to the document instance.
     *  0..n
     *  Certificate Of Origin Application
     *  Signature
     *  Signature
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Signature $signature
     */
    public function addToSignature(\NOKA\PHPUBL\UBL\Common\AggregateComponents\Signature $signature)
    {
        $this->signature[] = $signature;
        return $this;
    }

    /**
     * isset signature
     *
     * ASBIE
     *  Certificate Of Origin Application. Signature
     *  One or more signatures applied to the document instance.
     *  0..n
     *  Certificate Of Origin Application
     *  Signature
     *  Signature
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSignature($index)
    {
        return isset($this->signature[$index]);
    }

    /**
     * unset signature
     *
     * ASBIE
     *  Certificate Of Origin Application. Signature
     *  One or more signatures applied to the document instance.
     *  0..n
     *  Certificate Of Origin Application
     *  Signature
     *  Signature
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSignature($index)
    {
        unset($this->signature[$index]);
    }

    /**
     * Gets as signature
     *
     * ASBIE
     *  Certificate Of Origin Application. Signature
     *  One or more signatures applied to the document instance.
     *  0..n
     *  Certificate Of Origin Application
     *  Signature
     *  Signature
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\Signature[]
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * ASBIE
     *  Certificate Of Origin Application. Signature
     *  One or more signatures applied to the document instance.
     *  0..n
     *  Certificate Of Origin Application
     *  Signature
     *  Signature
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Signature[] $signature
     * @return self
     */
    public function setSignature(array $signature)
    {
        $this->signature = $signature;
        return $this;
    }


}

