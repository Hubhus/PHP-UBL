<?php

namespace NOKA\PHPUBL\UBL;

/**
 * Class representing CatalogueRequestType
 *
 * ABIE
 *  Catalogue Request. Details
 *  The document used to request a Catalogue.
 *  Catalogue Request
 * XSD Type: CatalogueRequestType
 */
class CatalogueRequestType
{

    /**
     * A container for all extensions present in the document.
     *
     * @var \NOKA\PHPUBL\UBL\Common\ExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Catalogue Request. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Catalogue Request
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
     *  Catalogue Request. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Catalogue Request
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
     *  Catalogue Request. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the subset of UBL being used.
     *  0..1
     *  Catalogue Request
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
     *  Catalogue Request. Identifier
     *  An identifier for the Catalogue Request assigned by the Catalogue Managing Party.
     *  1
     *  Catalogue Request
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Catalogue Request. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Catalogue Request
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Catalogue Request. Name
     *  A name given to the Catalogue Request.
     *  0..1
     *  Catalogue Request
     *  Name
     *  Name
     *  Name. Type
     *  "winter 2005 collection"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Catalogue Request. Issue Date. Date
     *  The date assigned by the Catalogue Managing Party on which the Catalogue was requested.
     *  1
     *  Catalogue Request
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Catalogue Request. Issue Time. Time
     *  The time assigned by the Catalogue Managing Party at which the Catalogue was requested.
     *  0..1
     *  Catalogue Request
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Catalogue Request. Note. Text
     *  Free-form text applying to the Catalogue Request. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Catalogue Request
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
     *  Catalogue Request. Description. Text
     *  Describes the Catalogue Request.
     *  0..n
     *  Catalogue Request
     *  Description
     *  Text
     *  Text. Type
     *  "latest computer accessories for laptops"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Catalogue Request. Pricing Update Request_ Indicator. Indicator
     *  The indicator requesting a pricing update.
     *  0..1
     *  Catalogue Request
     *  Pricing Update Request
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is true
     *
     * @var bool $pricingUpdateRequestIndicator
     */
    private $pricingUpdateRequestIndicator = null;

    /**
     * BBIE
     *  Catalogue Request. Item Update Request_ Indicator. Indicator
     *  The indicator requesting an update of the item specifications.
     *  0..1
     *  Catalogue Request
     *  Item Update Request
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is true
     *
     * @var bool $itemUpdateRequestIndicator
     */
    private $itemUpdateRequestIndicator = null;

    /**
     * BBIE
     *  Catalogue Request. Line Count. Numeric
     *  The number of lines in the document.
     *  0..1
     *  Catalogue Request
     *  Line Count
     *  Numeric
     *  Numeric. Type
     *
     * @var float $lineCountNumeric
     */
    private $lineCountNumeric = null;

    /**
     * ASBIE
     *  Catalogue Request. Validity_ Period. Period
     *  The period assigned by the Catalogue Managing Party during which the information in the Catalogue requested is to be effective. This may be given as start and end dates or a duration.
     *  0..n
     *  Catalogue Request
     *  Validity
     *  Period
     *  Period
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ValidityPeriod[] $validityPeriod
     */
    private $validityPeriod = [
        
    ];

    /**
     * ASBIE
     *  Catalogue Request. Receiver_ Party. Party
     *  An association to the Catalogue Receiver Party.
     *  1
     *  Catalogue Request
     *  Receiver
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReceiverParty $receiverParty
     */
    private $receiverParty = null;

    /**
     * ASBIE
     *  Catalogue Request. Provider_ Party. Party
     *  An association to the Catalogue Provider Party.
     *  1
     *  Catalogue Request
     *  Provider
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ProviderParty $providerParty
     */
    private $providerParty = null;

    /**
     * ASBIE
     *  Catalogue Request. Seller_ Supplier Party. Supplier Party
     *  The Supplier Party responsible for the contract to which the Catalogue relates.
     *  0..1
     *  Catalogue Request
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\SellerSupplierParty $sellerSupplierParty
     */
    private $sellerSupplierParty = null;

    /**
     * ASBIE
     *  Catalogue Request. Contractor_ Customer Party. Customer Party
     *  The Customer Party responsible for the contract to which the Catalogue relates.
     *  0..1
     *  Catalogue Request
     *  Contractor
     *  Customer Party
     *  Customer Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ContractorCustomerParty $contractorCustomerParty
     */
    private $contractorCustomerParty = null;

    /**
     * ASBIE
     *  Catalogue Request. Requested_ Catalogue Reference. Catalogue Reference
     *  An association to a specific Catalogue; used if the Catalogue Request is for an update.
     *  0..1
     *  Catalogue Request
     *  Requested
     *  Catalogue Reference
     *  Catalogue Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\RequestedCatalogueReference $requestedCatalogueReference
     */
    private $requestedCatalogueReference = null;

    /**
     * ASBIE
     *  Catalogue Request. Referenced_ Contract. Contract
     *  An association to a framework agreement or contract.
     *  0..n
     *  Catalogue Request
     *  Referenced
     *  Contract
     *  Contract
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReferencedContract[] $referencedContract
     */
    private $referencedContract = [
        
    ];

    /**
     * ASBIE
     *  Catalogue Request. Trading Terms
     *  An association to trading terms.
     *  0..1
     *  Catalogue Request
     *  Trading Terms
     *  Trading Terms
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\TradingTerms $tradingTerms
     */
    private $tradingTerms = null;

    /**
     * ASBIE
     *  Catalogue Request. Document Reference
     *  An association to other documents.
     *  0..n
     *  Catalogue Request
     *  Document Reference
     *  Document Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * ASBIE
     *  Catalogue Request. Applicable Territory_ Address. Address
     *  An association to the territory (regions, country, city, etc.) to which the requested Catalogue will apply. Expressed as an Address.
     *  0..n
     *  Catalogue Request
     *  Applicable Territory
     *  Address
     *  Address
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ApplicableTerritoryAddress[] $applicableTerritoryAddress
     */
    private $applicableTerritoryAddress = [
        
    ];

    /**
     * ASBIE
     *  Catalogue Request. Requested_ Language. Language
     *  The language in which the Catalogue is requested to be provided.
     *  0..1
     *  Catalogue Request
     *  Requested
     *  Language
     *  Language
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\RequestedLanguage $requestedLanguage
     */
    private $requestedLanguage = null;

    /**
     * ASBIE
     *  Catalogue Request. Requested_ Classification Scheme. Classification Scheme
     *  An association to classification categories for the Catalogue requested.
     *  0..n
     *  Catalogue Request
     *  Requested
     *  Classification Scheme
     *  Classification Scheme
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\RequestedClassificationScheme[] $requestedClassificationScheme
     */
    private $requestedClassificationScheme = [
        
    ];

    /**
     * ASBIE
     *  Catalogue Request. Catalogue Request Line
     *  An association to specific Catalogue Lines for the catalogue requested.
     *  0..n
     *  Catalogue Request
     *  Catalogue Request Line
     *  Catalogue Request Line
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\CatalogueRequestLine[] $catalogueRequestLine
     */
    private $catalogueRequestLine = [
        
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
     *  Catalogue Request. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Catalogue Request
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
     *  Catalogue Request. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Catalogue Request
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
     *  Catalogue Request. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Catalogue Request
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
     *  Catalogue Request. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Catalogue Request
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
     *  Catalogue Request. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the subset of UBL being used.
     *  0..1
     *  Catalogue Request
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
     *  Catalogue Request. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the subset of UBL being used.
     *  0..1
     *  Catalogue Request
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
     *  Catalogue Request. Identifier
     *  An identifier for the Catalogue Request assigned by the Catalogue Managing Party.
     *  1
     *  Catalogue Request
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
     *  Catalogue Request. Identifier
     *  An identifier for the Catalogue Request assigned by the Catalogue Managing Party.
     *  1
     *  Catalogue Request
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
     *  Catalogue Request. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Catalogue Request
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
     *  Catalogue Request. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Catalogue Request
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
     * Gets as name
     *
     * BBIE
     *  Catalogue Request. Name
     *  A name given to the Catalogue Request.
     *  0..1
     *  Catalogue Request
     *  Name
     *  Name
     *  Name. Type
     *  "winter 2005 collection"
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
     *  Catalogue Request. Name
     *  A name given to the Catalogue Request.
     *  0..1
     *  Catalogue Request
     *  Name
     *  Name
     *  Name. Type
     *  "winter 2005 collection"
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
     * Gets as issueDate
     *
     * BBIE
     *  Catalogue Request. Issue Date. Date
     *  The date assigned by the Catalogue Managing Party on which the Catalogue was requested.
     *  1
     *  Catalogue Request
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
     *  Catalogue Request. Issue Date. Date
     *  The date assigned by the Catalogue Managing Party on which the Catalogue was requested.
     *  1
     *  Catalogue Request
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
     *  Catalogue Request. Issue Time. Time
     *  The time assigned by the Catalogue Managing Party at which the Catalogue was requested.
     *  0..1
     *  Catalogue Request
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
     *  Catalogue Request. Issue Time. Time
     *  The time assigned by the Catalogue Managing Party at which the Catalogue was requested.
     *  0..1
     *  Catalogue Request
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
     * Adds as note
     *
     * BBIE
     *  Catalogue Request. Note. Text
     *  Free-form text applying to the Catalogue Request. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Catalogue Request
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
     *  Catalogue Request. Note. Text
     *  Free-form text applying to the Catalogue Request. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Catalogue Request
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
     *  Catalogue Request. Note. Text
     *  Free-form text applying to the Catalogue Request. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Catalogue Request
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
     *  Catalogue Request. Note. Text
     *  Free-form text applying to the Catalogue Request. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Catalogue Request
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
     *  Catalogue Request. Note. Text
     *  Free-form text applying to the Catalogue Request. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Catalogue Request
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
     * Adds as description
     *
     * BBIE
     *  Catalogue Request. Description. Text
     *  Describes the Catalogue Request.
     *  0..n
     *  Catalogue Request
     *  Description
     *  Text
     *  Text. Type
     *  "latest computer accessories for laptops"
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
     *  Catalogue Request. Description. Text
     *  Describes the Catalogue Request.
     *  0..n
     *  Catalogue Request
     *  Description
     *  Text
     *  Text. Type
     *  "latest computer accessories for laptops"
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
     *  Catalogue Request. Description. Text
     *  Describes the Catalogue Request.
     *  0..n
     *  Catalogue Request
     *  Description
     *  Text
     *  Text. Type
     *  "latest computer accessories for laptops"
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
     *  Catalogue Request. Description. Text
     *  Describes the Catalogue Request.
     *  0..n
     *  Catalogue Request
     *  Description
     *  Text
     *  Text. Type
     *  "latest computer accessories for laptops"
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
     *  Catalogue Request. Description. Text
     *  Describes the Catalogue Request.
     *  0..n
     *  Catalogue Request
     *  Description
     *  Text
     *  Text. Type
     *  "latest computer accessories for laptops"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Description[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as pricingUpdateRequestIndicator
     *
     * BBIE
     *  Catalogue Request. Pricing Update Request_ Indicator. Indicator
     *  The indicator requesting a pricing update.
     *  0..1
     *  Catalogue Request
     *  Pricing Update Request
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is true
     *
     * @return bool
     */
    public function getPricingUpdateRequestIndicator()
    {
        return $this->pricingUpdateRequestIndicator;
    }

    /**
     * Sets a new pricingUpdateRequestIndicator
     *
     * BBIE
     *  Catalogue Request. Pricing Update Request_ Indicator. Indicator
     *  The indicator requesting a pricing update.
     *  0..1
     *  Catalogue Request
     *  Pricing Update Request
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is true
     *
     * @param bool $pricingUpdateRequestIndicator
     * @return self
     */
    public function setPricingUpdateRequestIndicator($pricingUpdateRequestIndicator)
    {
        $this->pricingUpdateRequestIndicator = $pricingUpdateRequestIndicator;
        return $this;
    }

    /**
     * Gets as itemUpdateRequestIndicator
     *
     * BBIE
     *  Catalogue Request. Item Update Request_ Indicator. Indicator
     *  The indicator requesting an update of the item specifications.
     *  0..1
     *  Catalogue Request
     *  Item Update Request
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is true
     *
     * @return bool
     */
    public function getItemUpdateRequestIndicator()
    {
        return $this->itemUpdateRequestIndicator;
    }

    /**
     * Sets a new itemUpdateRequestIndicator
     *
     * BBIE
     *  Catalogue Request. Item Update Request_ Indicator. Indicator
     *  The indicator requesting an update of the item specifications.
     *  0..1
     *  Catalogue Request
     *  Item Update Request
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is true
     *
     * @param bool $itemUpdateRequestIndicator
     * @return self
     */
    public function setItemUpdateRequestIndicator($itemUpdateRequestIndicator)
    {
        $this->itemUpdateRequestIndicator = $itemUpdateRequestIndicator;
        return $this;
    }

    /**
     * Gets as lineCountNumeric
     *
     * BBIE
     *  Catalogue Request. Line Count. Numeric
     *  The number of lines in the document.
     *  0..1
     *  Catalogue Request
     *  Line Count
     *  Numeric
     *  Numeric. Type
     *
     * @return float
     */
    public function getLineCountNumeric()
    {
        return $this->lineCountNumeric;
    }

    /**
     * Sets a new lineCountNumeric
     *
     * BBIE
     *  Catalogue Request. Line Count. Numeric
     *  The number of lines in the document.
     *  0..1
     *  Catalogue Request
     *  Line Count
     *  Numeric
     *  Numeric. Type
     *
     * @param float $lineCountNumeric
     * @return self
     */
    public function setLineCountNumeric($lineCountNumeric)
    {
        $this->lineCountNumeric = $lineCountNumeric;
        return $this;
    }

    /**
     * Adds as validityPeriod
     *
     * ASBIE
     *  Catalogue Request. Validity_ Period. Period
     *  The period assigned by the Catalogue Managing Party during which the information in the Catalogue requested is to be effective. This may be given as start and end dates or a duration.
     *  0..n
     *  Catalogue Request
     *  Validity
     *  Period
     *  Period
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ValidityPeriod $validityPeriod
     */
    public function addToValidityPeriod(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ValidityPeriod $validityPeriod)
    {
        $this->validityPeriod[] = $validityPeriod;
        return $this;
    }

    /**
     * isset validityPeriod
     *
     * ASBIE
     *  Catalogue Request. Validity_ Period. Period
     *  The period assigned by the Catalogue Managing Party during which the information in the Catalogue requested is to be effective. This may be given as start and end dates or a duration.
     *  0..n
     *  Catalogue Request
     *  Validity
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValidityPeriod($index)
    {
        return isset($this->validityPeriod[$index]);
    }

    /**
     * unset validityPeriod
     *
     * ASBIE
     *  Catalogue Request. Validity_ Period. Period
     *  The period assigned by the Catalogue Managing Party during which the information in the Catalogue requested is to be effective. This may be given as start and end dates or a duration.
     *  0..n
     *  Catalogue Request
     *  Validity
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValidityPeriod($index)
    {
        unset($this->validityPeriod[$index]);
    }

    /**
     * Gets as validityPeriod
     *
     * ASBIE
     *  Catalogue Request. Validity_ Period. Period
     *  The period assigned by the Catalogue Managing Party during which the information in the Catalogue requested is to be effective. This may be given as start and end dates or a duration.
     *  0..n
     *  Catalogue Request
     *  Validity
     *  Period
     *  Period
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ValidityPeriod[]
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * ASBIE
     *  Catalogue Request. Validity_ Period. Period
     *  The period assigned by the Catalogue Managing Party during which the information in the Catalogue requested is to be effective. This may be given as start and end dates or a duration.
     *  0..n
     *  Catalogue Request
     *  Validity
     *  Period
     *  Period
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ValidityPeriod[] $validityPeriod
     * @return self
     */
    public function setValidityPeriod(array $validityPeriod)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as receiverParty
     *
     * ASBIE
     *  Catalogue Request. Receiver_ Party. Party
     *  An association to the Catalogue Receiver Party.
     *  1
     *  Catalogue Request
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
     *  Catalogue Request. Receiver_ Party. Party
     *  An association to the Catalogue Receiver Party.
     *  1
     *  Catalogue Request
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
     * Gets as providerParty
     *
     * ASBIE
     *  Catalogue Request. Provider_ Party. Party
     *  An association to the Catalogue Provider Party.
     *  1
     *  Catalogue Request
     *  Provider
     *  Party
     *  Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ProviderParty
     */
    public function getProviderParty()
    {
        return $this->providerParty;
    }

    /**
     * Sets a new providerParty
     *
     * ASBIE
     *  Catalogue Request. Provider_ Party. Party
     *  An association to the Catalogue Provider Party.
     *  1
     *  Catalogue Request
     *  Provider
     *  Party
     *  Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ProviderParty $providerParty
     * @return self
     */
    public function setProviderParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ProviderParty $providerParty)
    {
        $this->providerParty = $providerParty;
        return $this;
    }

    /**
     * Gets as sellerSupplierParty
     *
     * ASBIE
     *  Catalogue Request. Seller_ Supplier Party. Supplier Party
     *  The Supplier Party responsible for the contract to which the Catalogue relates.
     *  0..1
     *  Catalogue Request
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\SellerSupplierParty
     */
    public function getSellerSupplierParty()
    {
        return $this->sellerSupplierParty;
    }

    /**
     * Sets a new sellerSupplierParty
     *
     * ASBIE
     *  Catalogue Request. Seller_ Supplier Party. Supplier Party
     *  The Supplier Party responsible for the contract to which the Catalogue relates.
     *  0..1
     *  Catalogue Request
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\SellerSupplierParty $sellerSupplierParty
     * @return self
     */
    public function setSellerSupplierParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\SellerSupplierParty $sellerSupplierParty)
    {
        $this->sellerSupplierParty = $sellerSupplierParty;
        return $this;
    }

    /**
     * Gets as contractorCustomerParty
     *
     * ASBIE
     *  Catalogue Request. Contractor_ Customer Party. Customer Party
     *  The Customer Party responsible for the contract to which the Catalogue relates.
     *  0..1
     *  Catalogue Request
     *  Contractor
     *  Customer Party
     *  Customer Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ContractorCustomerParty
     */
    public function getContractorCustomerParty()
    {
        return $this->contractorCustomerParty;
    }

    /**
     * Sets a new contractorCustomerParty
     *
     * ASBIE
     *  Catalogue Request. Contractor_ Customer Party. Customer Party
     *  The Customer Party responsible for the contract to which the Catalogue relates.
     *  0..1
     *  Catalogue Request
     *  Contractor
     *  Customer Party
     *  Customer Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ContractorCustomerParty $contractorCustomerParty
     * @return self
     */
    public function setContractorCustomerParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ContractorCustomerParty $contractorCustomerParty)
    {
        $this->contractorCustomerParty = $contractorCustomerParty;
        return $this;
    }

    /**
     * Gets as requestedCatalogueReference
     *
     * ASBIE
     *  Catalogue Request. Requested_ Catalogue Reference. Catalogue Reference
     *  An association to a specific Catalogue; used if the Catalogue Request is for an update.
     *  0..1
     *  Catalogue Request
     *  Requested
     *  Catalogue Reference
     *  Catalogue Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\RequestedCatalogueReference
     */
    public function getRequestedCatalogueReference()
    {
        return $this->requestedCatalogueReference;
    }

    /**
     * Sets a new requestedCatalogueReference
     *
     * ASBIE
     *  Catalogue Request. Requested_ Catalogue Reference. Catalogue Reference
     *  An association to a specific Catalogue; used if the Catalogue Request is for an update.
     *  0..1
     *  Catalogue Request
     *  Requested
     *  Catalogue Reference
     *  Catalogue Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\RequestedCatalogueReference $requestedCatalogueReference
     * @return self
     */
    public function setRequestedCatalogueReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\RequestedCatalogueReference $requestedCatalogueReference)
    {
        $this->requestedCatalogueReference = $requestedCatalogueReference;
        return $this;
    }

    /**
     * Adds as referencedContract
     *
     * ASBIE
     *  Catalogue Request. Referenced_ Contract. Contract
     *  An association to a framework agreement or contract.
     *  0..n
     *  Catalogue Request
     *  Referenced
     *  Contract
     *  Contract
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReferencedContract $referencedContract
     */
    public function addToReferencedContract(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ReferencedContract $referencedContract)
    {
        $this->referencedContract[] = $referencedContract;
        return $this;
    }

    /**
     * isset referencedContract
     *
     * ASBIE
     *  Catalogue Request. Referenced_ Contract. Contract
     *  An association to a framework agreement or contract.
     *  0..n
     *  Catalogue Request
     *  Referenced
     *  Contract
     *  Contract
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferencedContract($index)
    {
        return isset($this->referencedContract[$index]);
    }

    /**
     * unset referencedContract
     *
     * ASBIE
     *  Catalogue Request. Referenced_ Contract. Contract
     *  An association to a framework agreement or contract.
     *  0..n
     *  Catalogue Request
     *  Referenced
     *  Contract
     *  Contract
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferencedContract($index)
    {
        unset($this->referencedContract[$index]);
    }

    /**
     * Gets as referencedContract
     *
     * ASBIE
     *  Catalogue Request. Referenced_ Contract. Contract
     *  An association to a framework agreement or contract.
     *  0..n
     *  Catalogue Request
     *  Referenced
     *  Contract
     *  Contract
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReferencedContract[]
     */
    public function getReferencedContract()
    {
        return $this->referencedContract;
    }

    /**
     * Sets a new referencedContract
     *
     * ASBIE
     *  Catalogue Request. Referenced_ Contract. Contract
     *  An association to a framework agreement or contract.
     *  0..n
     *  Catalogue Request
     *  Referenced
     *  Contract
     *  Contract
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReferencedContract[] $referencedContract
     * @return self
     */
    public function setReferencedContract(array $referencedContract)
    {
        $this->referencedContract = $referencedContract;
        return $this;
    }

    /**
     * Gets as tradingTerms
     *
     * ASBIE
     *  Catalogue Request. Trading Terms
     *  An association to trading terms.
     *  0..1
     *  Catalogue Request
     *  Trading Terms
     *  Trading Terms
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\TradingTerms
     */
    public function getTradingTerms()
    {
        return $this->tradingTerms;
    }

    /**
     * Sets a new tradingTerms
     *
     * ASBIE
     *  Catalogue Request. Trading Terms
     *  An association to trading terms.
     *  0..1
     *  Catalogue Request
     *  Trading Terms
     *  Trading Terms
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\TradingTerms $tradingTerms
     * @return self
     */
    public function setTradingTerms(\NOKA\PHPUBL\UBL\Common\AggregateComponents\TradingTerms $tradingTerms)
    {
        $this->tradingTerms = $tradingTerms;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Catalogue Request. Document Reference
     *  An association to other documents.
     *  0..n
     *  Catalogue Request
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentReference $documentReference
     */
    public function addToDocumentReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentReference $documentReference)
    {
        $this->documentReference[] = $documentReference;
        return $this;
    }

    /**
     * isset documentReference
     *
     * ASBIE
     *  Catalogue Request. Document Reference
     *  An association to other documents.
     *  0..n
     *  Catalogue Request
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentReference($index)
    {
        return isset($this->documentReference[$index]);
    }

    /**
     * unset documentReference
     *
     * ASBIE
     *  Catalogue Request. Document Reference
     *  An association to other documents.
     *  0..n
     *  Catalogue Request
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentReference($index)
    {
        unset($this->documentReference[$index]);
    }

    /**
     * Gets as documentReference
     *
     * ASBIE
     *  Catalogue Request. Document Reference
     *  An association to other documents.
     *  0..n
     *  Catalogue Request
     *  Document Reference
     *  Document Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentReference[]
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * ASBIE
     *  Catalogue Request. Document Reference
     *  An association to other documents.
     *  0..n
     *  Catalogue Request
     *  Document Reference
     *  Document Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DocumentReference[] $documentReference
     * @return self
     */
    public function setDocumentReference(array $documentReference)
    {
        $this->documentReference = $documentReference;
        return $this;
    }

    /**
     * Adds as applicableTerritoryAddress
     *
     * ASBIE
     *  Catalogue Request. Applicable Territory_ Address. Address
     *  An association to the territory (regions, country, city, etc.) to which the requested Catalogue will apply. Expressed as an Address.
     *  0..n
     *  Catalogue Request
     *  Applicable Territory
     *  Address
     *  Address
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ApplicableTerritoryAddress $applicableTerritoryAddress
     */
    public function addToApplicableTerritoryAddress(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ApplicableTerritoryAddress $applicableTerritoryAddress)
    {
        $this->applicableTerritoryAddress[] = $applicableTerritoryAddress;
        return $this;
    }

    /**
     * isset applicableTerritoryAddress
     *
     * ASBIE
     *  Catalogue Request. Applicable Territory_ Address. Address
     *  An association to the territory (regions, country, city, etc.) to which the requested Catalogue will apply. Expressed as an Address.
     *  0..n
     *  Catalogue Request
     *  Applicable Territory
     *  Address
     *  Address
     *
     * @param int|string $index
     * @return bool
     */
    public function issetApplicableTerritoryAddress($index)
    {
        return isset($this->applicableTerritoryAddress[$index]);
    }

    /**
     * unset applicableTerritoryAddress
     *
     * ASBIE
     *  Catalogue Request. Applicable Territory_ Address. Address
     *  An association to the territory (regions, country, city, etc.) to which the requested Catalogue will apply. Expressed as an Address.
     *  0..n
     *  Catalogue Request
     *  Applicable Territory
     *  Address
     *  Address
     *
     * @param int|string $index
     * @return void
     */
    public function unsetApplicableTerritoryAddress($index)
    {
        unset($this->applicableTerritoryAddress[$index]);
    }

    /**
     * Gets as applicableTerritoryAddress
     *
     * ASBIE
     *  Catalogue Request. Applicable Territory_ Address. Address
     *  An association to the territory (regions, country, city, etc.) to which the requested Catalogue will apply. Expressed as an Address.
     *  0..n
     *  Catalogue Request
     *  Applicable Territory
     *  Address
     *  Address
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ApplicableTerritoryAddress[]
     */
    public function getApplicableTerritoryAddress()
    {
        return $this->applicableTerritoryAddress;
    }

    /**
     * Sets a new applicableTerritoryAddress
     *
     * ASBIE
     *  Catalogue Request. Applicable Territory_ Address. Address
     *  An association to the territory (regions, country, city, etc.) to which the requested Catalogue will apply. Expressed as an Address.
     *  0..n
     *  Catalogue Request
     *  Applicable Territory
     *  Address
     *  Address
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ApplicableTerritoryAddress[] $applicableTerritoryAddress
     * @return self
     */
    public function setApplicableTerritoryAddress(array $applicableTerritoryAddress)
    {
        $this->applicableTerritoryAddress = $applicableTerritoryAddress;
        return $this;
    }

    /**
     * Gets as requestedLanguage
     *
     * ASBIE
     *  Catalogue Request. Requested_ Language. Language
     *  The language in which the Catalogue is requested to be provided.
     *  0..1
     *  Catalogue Request
     *  Requested
     *  Language
     *  Language
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\RequestedLanguage
     */
    public function getRequestedLanguage()
    {
        return $this->requestedLanguage;
    }

    /**
     * Sets a new requestedLanguage
     *
     * ASBIE
     *  Catalogue Request. Requested_ Language. Language
     *  The language in which the Catalogue is requested to be provided.
     *  0..1
     *  Catalogue Request
     *  Requested
     *  Language
     *  Language
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\RequestedLanguage $requestedLanguage
     * @return self
     */
    public function setRequestedLanguage(\NOKA\PHPUBL\UBL\Common\AggregateComponents\RequestedLanguage $requestedLanguage)
    {
        $this->requestedLanguage = $requestedLanguage;
        return $this;
    }

    /**
     * Adds as requestedClassificationScheme
     *
     * ASBIE
     *  Catalogue Request. Requested_ Classification Scheme. Classification Scheme
     *  An association to classification categories for the Catalogue requested.
     *  0..n
     *  Catalogue Request
     *  Requested
     *  Classification Scheme
     *  Classification Scheme
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\RequestedClassificationScheme $requestedClassificationScheme
     */
    public function addToRequestedClassificationScheme(\NOKA\PHPUBL\UBL\Common\AggregateComponents\RequestedClassificationScheme $requestedClassificationScheme)
    {
        $this->requestedClassificationScheme[] = $requestedClassificationScheme;
        return $this;
    }

    /**
     * isset requestedClassificationScheme
     *
     * ASBIE
     *  Catalogue Request. Requested_ Classification Scheme. Classification Scheme
     *  An association to classification categories for the Catalogue requested.
     *  0..n
     *  Catalogue Request
     *  Requested
     *  Classification Scheme
     *  Classification Scheme
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestedClassificationScheme($index)
    {
        return isset($this->requestedClassificationScheme[$index]);
    }

    /**
     * unset requestedClassificationScheme
     *
     * ASBIE
     *  Catalogue Request. Requested_ Classification Scheme. Classification Scheme
     *  An association to classification categories for the Catalogue requested.
     *  0..n
     *  Catalogue Request
     *  Requested
     *  Classification Scheme
     *  Classification Scheme
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestedClassificationScheme($index)
    {
        unset($this->requestedClassificationScheme[$index]);
    }

    /**
     * Gets as requestedClassificationScheme
     *
     * ASBIE
     *  Catalogue Request. Requested_ Classification Scheme. Classification Scheme
     *  An association to classification categories for the Catalogue requested.
     *  0..n
     *  Catalogue Request
     *  Requested
     *  Classification Scheme
     *  Classification Scheme
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\RequestedClassificationScheme[]
     */
    public function getRequestedClassificationScheme()
    {
        return $this->requestedClassificationScheme;
    }

    /**
     * Sets a new requestedClassificationScheme
     *
     * ASBIE
     *  Catalogue Request. Requested_ Classification Scheme. Classification Scheme
     *  An association to classification categories for the Catalogue requested.
     *  0..n
     *  Catalogue Request
     *  Requested
     *  Classification Scheme
     *  Classification Scheme
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\RequestedClassificationScheme[] $requestedClassificationScheme
     * @return self
     */
    public function setRequestedClassificationScheme(array $requestedClassificationScheme)
    {
        $this->requestedClassificationScheme = $requestedClassificationScheme;
        return $this;
    }

    /**
     * Adds as catalogueRequestLine
     *
     * ASBIE
     *  Catalogue Request. Catalogue Request Line
     *  An association to specific Catalogue Lines for the catalogue requested.
     *  0..n
     *  Catalogue Request
     *  Catalogue Request Line
     *  Catalogue Request Line
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\CatalogueRequestLine $catalogueRequestLine
     */
    public function addToCatalogueRequestLine(\NOKA\PHPUBL\UBL\Common\AggregateComponents\CatalogueRequestLine $catalogueRequestLine)
    {
        $this->catalogueRequestLine[] = $catalogueRequestLine;
        return $this;
    }

    /**
     * isset catalogueRequestLine
     *
     * ASBIE
     *  Catalogue Request. Catalogue Request Line
     *  An association to specific Catalogue Lines for the catalogue requested.
     *  0..n
     *  Catalogue Request
     *  Catalogue Request Line
     *  Catalogue Request Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCatalogueRequestLine($index)
    {
        return isset($this->catalogueRequestLine[$index]);
    }

    /**
     * unset catalogueRequestLine
     *
     * ASBIE
     *  Catalogue Request. Catalogue Request Line
     *  An association to specific Catalogue Lines for the catalogue requested.
     *  0..n
     *  Catalogue Request
     *  Catalogue Request Line
     *  Catalogue Request Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCatalogueRequestLine($index)
    {
        unset($this->catalogueRequestLine[$index]);
    }

    /**
     * Gets as catalogueRequestLine
     *
     * ASBIE
     *  Catalogue Request. Catalogue Request Line
     *  An association to specific Catalogue Lines for the catalogue requested.
     *  0..n
     *  Catalogue Request
     *  Catalogue Request Line
     *  Catalogue Request Line
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\CatalogueRequestLine[]
     */
    public function getCatalogueRequestLine()
    {
        return $this->catalogueRequestLine;
    }

    /**
     * Sets a new catalogueRequestLine
     *
     * ASBIE
     *  Catalogue Request. Catalogue Request Line
     *  An association to specific Catalogue Lines for the catalogue requested.
     *  0..n
     *  Catalogue Request
     *  Catalogue Request Line
     *  Catalogue Request Line
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\CatalogueRequestLine[] $catalogueRequestLine
     * @return self
     */
    public function setCatalogueRequestLine(array $catalogueRequestLine)
    {
        $this->catalogueRequestLine = $catalogueRequestLine;
        return $this;
    }


}

