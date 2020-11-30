<?php

namespace NOKA\PHPUBL\UBL;

/**
 * Class representing ApplicationResponseType
 *
 * ABIE
 *  Application Response. Details
 *  A document to indicate the application's response to a transaction. This may be a business response and/or a technical response, sent automatically by an application or initiated by a user.
 *  Application Response
 * XSD Type: ApplicationResponseType
 */
class ApplicationResponseType
{

    /**
     * A container for all extensions present in the document.
     *
     * @var \NOKA\PHPUBL\UBL\Common\ExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Application Response. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Application Response
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.0.5
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\UBLVersionID $uBLVersionID
     */
    private $uBLVersionID = null;

    /**
     * BBIE
     *  Application Response. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Application Response
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *  NES
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\CustomizationID $customizationID
     */
    private $customizationID = null;

    /**
     * BBIE
     *  Application Response. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Application Response
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *  BasicProcurementProcess
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ProfileID $profileID
     */
    private $profileID = null;

    /**
     * BBIE
     *  Application Response. Identifier
     *  An identifier for the Application Response assigned by the sender.
     *  1
     *  Application Response
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Application Response. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Application Response
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Application Response. Issue Date. Date
     *  The date assigned by the sender's application on which the Application Response was created.
     *  1
     *  Application Response
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Application Response. Issue Time. Time
     *  The time assigned by the sender's application at which the Application Response was created.
     *  0..1
     *  Application Response
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Application Response. Response Date. Date
     *  The date at which the information in the response was created.
     *  0..1
     *  Application Response
     *  Response Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $responseDate
     */
    private $responseDate = null;

    /**
     * BBIE
     *  Application Response. Response Time. Time
     *  The time at which the information in the response was created.
     *  0..1
     *  Application Response
     *  Response Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $responseTime
     */
    private $responseTime = null;

    /**
     * BBIE
     *  Application Response. Note. Text
     *  Free-form text applying to the Application Response. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Application Response
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * BBIE
     *  Application Response. Version Identifier. Identifier
     *  Identifies the current version of this document.
     *  0..1
     *  Application Response
     *  Version Identifier
     *  Identifier
     *  Identifier. Type
     *  "1.1"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\VersionID $versionID
     */
    private $versionID = null;

    /**
     * ASBIE
     *  Application Response. Signature
     *  An association to Signature.
     *  0..n
     *  Application Response
     *  Signature
     *  Signature
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Signature[] $signature
     */
    private $signature = [
        
    ];

    /**
     * ASBIE
     *  Application Response. Sender_ Party. Party
     *  An association to the Party sending this document.
     *  1
     *  Application Response
     *  Sender
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\SenderParty $senderParty
     */
    private $senderParty = null;

    /**
     * ASBIE
     *  Application Response. Receiver_ Party. Party
     *  An association to the Party receiving this document.
     *  1
     *  Application Response
     *  Receiver
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReceiverParty $receiverParty
     */
    private $receiverParty = null;

    /**
     * ASBIE
     *  Application Response. Document Response
     *  A response to one or more documents.
     *  1..n
     *  Application Response
     *  Document Response
     *  Document Response
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentResponse[] $documentResponse
     */
    private $documentResponse = [
        
    ];

    /**
     * Adds as uBLExtension
     *
     * A container for all extensions present in the document.
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\ExtensionComponents\UBLExtension $uBLExtension
     */
    public function addToUBLExtensions(\NOKA\PHPUBL\UBL\Common\ExtensionComponents\UBLExtension $uBLExtension)
    {
        $this->uBLExtensions[] = $uBLExtension;
        return $this;
    }

    /**
     * isset uBLExtensions
     *
     * A container for all extensions present in the document.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUBLExtensions($index)
    {
        return isset($this->uBLExtensions[$index]);
    }

    /**
     * unset uBLExtensions
     *
     * A container for all extensions present in the document.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUBLExtensions($index)
    {
        unset($this->uBLExtensions[$index]);
    }

    /**
     * Gets as uBLExtensions
     *
     * A container for all extensions present in the document.
     *
     * @return \NOKA\PHPUBL\UBL\Common\ExtensionComponents\UBLExtension[]
     */
    public function getUBLExtensions()
    {
        return $this->uBLExtensions;
    }

    /**
     * Sets a new uBLExtensions
     *
     * A container for all extensions present in the document.
     *
     * @param \NOKA\PHPUBL\UBL\Common\ExtensionComponents\UBLExtension[] $uBLExtensions
     * @return self
     */
    public function setUBLExtensions(array $uBLExtensions)
    {
        $this->uBLExtensions = $uBLExtensions;
        return $this;
    }

    /**
     * Gets as uBLVersionID
     *
     * BBIE
     *  Application Response. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Application Response
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.0.5
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\UBLVersionID
     */
    public function getUBLVersionID()
    {
        return $this->uBLVersionID;
    }

    /**
     * Sets a new uBLVersionID
     *
     * BBIE
     *  Application Response. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Application Response
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.0.5
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\UBLVersionID $uBLVersionID
     * @return self
     */
    public function setUBLVersionID(\NOKA\PHPUBL\UBL\Common\BasicComponents\UBLVersionID $uBLVersionID)
    {
        $this->uBLVersionID = $uBLVersionID;
        return $this;
    }

    /**
     * Gets as customizationID
     *
     * BBIE
     *  Application Response. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Application Response
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *  NES
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\CustomizationID
     */
    public function getCustomizationID()
    {
        return $this->customizationID;
    }

    /**
     * Sets a new customizationID
     *
     * BBIE
     *  Application Response. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Application Response
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *  NES
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\CustomizationID $customizationID
     * @return self
     */
    public function setCustomizationID(\NOKA\PHPUBL\UBL\Common\BasicComponents\CustomizationID $customizationID)
    {
        $this->customizationID = $customizationID;
        return $this;
    }

    /**
     * Gets as profileID
     *
     * BBIE
     *  Application Response. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Application Response
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *  BasicProcurementProcess
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ProfileID
     */
    public function getProfileID()
    {
        return $this->profileID;
    }

    /**
     * Sets a new profileID
     *
     * BBIE
     *  Application Response. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Application Response
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *  BasicProcurementProcess
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ProfileID $profileID
     * @return self
     */
    public function setProfileID(\NOKA\PHPUBL\UBL\Common\BasicComponents\ProfileID $profileID)
    {
        $this->profileID = $profileID;
        return $this;
    }

    /**
     * Gets as iD
     *
     * BBIE
     *  Application Response. Identifier
     *  An identifier for the Application Response assigned by the sender.
     *  1
     *  Application Response
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
     *  Application Response. Identifier
     *  An identifier for the Application Response assigned by the sender.
     *  1
     *  Application Response
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
     * Gets as uUID
     *
     * BBIE
     *  Application Response. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Application Response
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
     *  Application Response. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Application Response
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
     *  Application Response. Issue Date. Date
     *  The date assigned by the sender's application on which the Application Response was created.
     *  1
     *  Application Response
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
     *  Application Response. Issue Date. Date
     *  The date assigned by the sender's application on which the Application Response was created.
     *  1
     *  Application Response
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
     * Gets as issueTime
     *
     * BBIE
     *  Application Response. Issue Time. Time
     *  The time assigned by the sender's application at which the Application Response was created.
     *  0..1
     *  Application Response
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getIssueTime()
    {
        return $this->issueTime;
    }

    /**
     * Sets a new issueTime
     *
     * BBIE
     *  Application Response. Issue Time. Time
     *  The time assigned by the sender's application at which the Application Response was created.
     *  0..1
     *  Application Response
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $issueTime
     * @return self
     */
    public function setIssueTime(\DateTime $issueTime)
    {
        $this->issueTime = $issueTime;
        return $this;
    }

    /**
     * Gets as responseDate
     *
     * BBIE
     *  Application Response. Response Date. Date
     *  The date at which the information in the response was created.
     *  0..1
     *  Application Response
     *  Response Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getResponseDate()
    {
        return $this->responseDate;
    }

    /**
     * Sets a new responseDate
     *
     * BBIE
     *  Application Response. Response Date. Date
     *  The date at which the information in the response was created.
     *  0..1
     *  Application Response
     *  Response Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $responseDate
     * @return self
     */
    public function setResponseDate(\DateTime $responseDate)
    {
        $this->responseDate = $responseDate;
        return $this;
    }

    /**
     * Gets as responseTime
     *
     * BBIE
     *  Application Response. Response Time. Time
     *  The time at which the information in the response was created.
     *  0..1
     *  Application Response
     *  Response Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getResponseTime()
    {
        return $this->responseTime;
    }

    /**
     * Sets a new responseTime
     *
     * BBIE
     *  Application Response. Response Time. Time
     *  The time at which the information in the response was created.
     *  0..1
     *  Application Response
     *  Response Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $responseTime
     * @return self
     */
    public function setResponseTime(\DateTime $responseTime)
    {
        $this->responseTime = $responseTime;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Application Response. Note. Text
     *  Free-form text applying to the Application Response. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Application Response
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Note $note
     */
    public function addToNote(\NOKA\PHPUBL\UBL\Common\BasicComponents\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * BBIE
     *  Application Response. Note. Text
     *  Free-form text applying to the Application Response. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Application Response
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * BBIE
     *  Application Response. Note. Text
     *  Free-form text applying to the Application Response. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Application Response
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * BBIE
     *  Application Response. Note. Text
     *  Free-form text applying to the Application Response. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Application Response
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Application Response. Note. Text
     *  Free-form text applying to the Application Response. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Application Response
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Note[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as versionID
     *
     * BBIE
     *  Application Response. Version Identifier. Identifier
     *  Identifies the current version of this document.
     *  0..1
     *  Application Response
     *  Version Identifier
     *  Identifier
     *  Identifier. Type
     *  "1.1"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\VersionID
     */
    public function getVersionID()
    {
        return $this->versionID;
    }

    /**
     * Sets a new versionID
     *
     * BBIE
     *  Application Response. Version Identifier. Identifier
     *  Identifies the current version of this document.
     *  0..1
     *  Application Response
     *  Version Identifier
     *  Identifier
     *  Identifier. Type
     *  "1.1"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\VersionID $versionID
     * @return self
     */
    public function setVersionID(\NOKA\PHPUBL\UBL\Common\BasicComponents\VersionID $versionID)
    {
        $this->versionID = $versionID;
        return $this;
    }

    /**
     * Adds as signature
     *
     * ASBIE
     *  Application Response. Signature
     *  An association to Signature.
     *  0..n
     *  Application Response
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
     *  Application Response. Signature
     *  An association to Signature.
     *  0..n
     *  Application Response
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
     *  Application Response. Signature
     *  An association to Signature.
     *  0..n
     *  Application Response
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
     *  Application Response. Signature
     *  An association to Signature.
     *  0..n
     *  Application Response
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
     *  Application Response. Signature
     *  An association to Signature.
     *  0..n
     *  Application Response
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

    /**
     * Gets as senderParty
     *
     * ASBIE
     *  Application Response. Sender_ Party. Party
     *  An association to the Party sending this document.
     *  1
     *  Application Response
     *  Sender
     *  Party
     *  Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\SenderParty
     */
    public function getSenderParty()
    {
        return $this->senderParty;
    }

    /**
     * Sets a new senderParty
     *
     * ASBIE
     *  Application Response. Sender_ Party. Party
     *  An association to the Party sending this document.
     *  1
     *  Application Response
     *  Sender
     *  Party
     *  Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\SenderParty $senderParty
     * @return self
     */
    public function setSenderParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\SenderParty $senderParty)
    {
        $this->senderParty = $senderParty;
        return $this;
    }

    /**
     * Gets as receiverParty
     *
     * ASBIE
     *  Application Response. Receiver_ Party. Party
     *  An association to the Party receiving this document.
     *  1
     *  Application Response
     *  Receiver
     *  Party
     *  Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReceiverParty
     */
    public function getReceiverParty()
    {
        return $this->receiverParty;
    }

    /**
     * Sets a new receiverParty
     *
     * ASBIE
     *  Application Response. Receiver_ Party. Party
     *  An association to the Party receiving this document.
     *  1
     *  Application Response
     *  Receiver
     *  Party
     *  Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReceiverParty $receiverParty
     * @return self
     */
    public function setReceiverParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ReceiverParty $receiverParty)
    {
        $this->receiverParty = $receiverParty;
        return $this;
    }

    /**
     * Adds as documentResponse
     *
     * ASBIE
     *  Application Response. Document Response
     *  A response to one or more documents.
     *  1..n
     *  Application Response
     *  Document Response
     *  Document Response
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentResponse $documentResponse
     */
    public function addToDocumentResponse(\NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentResponse $documentResponse)
    {
        $this->documentResponse[] = $documentResponse;
        return $this;
    }

    /**
     * isset documentResponse
     *
     * ASBIE
     *  Application Response. Document Response
     *  A response to one or more documents.
     *  1..n
     *  Application Response
     *  Document Response
     *  Document Response
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentResponse($index)
    {
        return isset($this->documentResponse[$index]);
    }

    /**
     * unset documentResponse
     *
     * ASBIE
     *  Application Response. Document Response
     *  A response to one or more documents.
     *  1..n
     *  Application Response
     *  Document Response
     *  Document Response
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentResponse($index)
    {
        unset($this->documentResponse[$index]);
    }

    /**
     * Gets as documentResponse
     *
     * ASBIE
     *  Application Response. Document Response
     *  A response to one or more documents.
     *  1..n
     *  Application Response
     *  Document Response
     *  Document Response
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentResponse[]
     */
    public function getDocumentResponse()
    {
        return $this->documentResponse;
    }

    /**
     * Sets a new documentResponse
     *
     * ASBIE
     *  Application Response. Document Response
     *  A response to one or more documents.
     *  1..n
     *  Application Response
     *  Document Response
     *  Document Response
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentResponse[] $documentResponse
     * @return self
     */
    public function setDocumentResponse(array $documentResponse)
    {
        $this->documentResponse = $documentResponse;
        return $this;
    }


}

