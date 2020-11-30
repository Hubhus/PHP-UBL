<?php

namespace NOKA\PHPUBL\UBL;

/**
 * Class representing CatalogueItemSpecificationUpdateType
 *
 * ABIE
 *  Catalogue Item Specification Update. Details
 *  The document used to update information about Items (e.g., technical descriptions and properties) on an existing Catalogue.
 *  Catalogue Item Specification Update
 * XSD Type: CatalogueItemSpecificationUpdateType
 */
class CatalogueItemSpecificationUpdateType
{

    /**
     * A container for all extensions present in the document.
     *
     * @var \NOKA\PHPUBL\UBL\Common\ExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Catalogue Item Specification Update. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the subset of UBL being used.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Identifier
     *  An identifier for the Catalogue Revision assigned by the Seller.
     *  1
     *  Catalogue Item Specification Update
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Catalogue Item Specification Update. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Catalogue Item Specification Update
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Catalogue Item Specification Update. Name
     *  A name given to the Catalogue Revision.
     *  0..1
     *  Catalogue Item Specification Update
     *  Name
     *  Name
     *  Name. Type
     *  "electrical goods - new energy ratings."
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Catalogue Item Specification Update. Issue Date. Date
     *  The date when the Catalogue Revision was issued.
     *  1
     *  Catalogue Item Specification Update
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Catalogue Item Specification Update. Issue Time. Time
     *  The time when the Catalogue Revision was issued.
     *  0..1
     *  Catalogue Item Specification Update
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Catalogue Item Specification Update. Revision Date. Date
     *  The date assigned by the Seller on which the Catalogue was revised.
     *  0..1
     *  Catalogue Item Specification Update
     *  Revision Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $revisionDate
     */
    private $revisionDate = null;

    /**
     * BBIE
     *  Catalogue Item Specification Update. Revision Time. Time
     *  The time assigned by the Seller at which the Catalogue was revised.
     *  0..1
     *  Catalogue Item Specification Update
     *  Revision Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $revisionTime
     */
    private $revisionTime = null;

    /**
     * BBIE
     *  Catalogue Item Specification Update. Note. Text
     *  Free-form text applying to the Catalogue Revision. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Description. Text
     *  A description of the Catalogue Revision.
     *  0..n
     *  Catalogue Item Specification Update
     *  Description
     *  Text
     *  Text. Type
     *  "ratings based on new environmental standards for EU"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Catalogue Item Specification Update. Version. Identifier
     *  Indicates the current version of the Catalogue.
     *  0..1
     *  Catalogue Item Specification Update
     *  Version
     *  Identifier
     *  Identifier. Type
     *  "1.1"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\VersionID $versionID
     */
    private $versionID = null;

    /**
     * BBIE
     *  Catalogue Item Specification Update. Line Count. Numeric
     *  The number of lines in the document.
     *  0..1
     *  Catalogue Item Specification Update
     *  Line Count
     *  Numeric
     *  Numeric. Type
     *
     * @var float $lineCountNumeric
     */
    private $lineCountNumeric = null;

    /**
     * ASBIE
     *  Catalogue Item Specification Update. Validity_ Period. Period
     *  The period assigned by the Seller during which the information in the Catalogue Revision is effective. This may be given as start and end dates or a duration.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Related_ Catalogue Reference. Catalogue Reference
     *  An association to the Catalogue containing the revised Items.
     *  1
     *  Catalogue Item Specification Update
     *  Related
     *  Catalogue Reference
     *  Catalogue Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\RelatedCatalogueReference $relatedCatalogueReference
     */
    private $relatedCatalogueReference = null;

    /**
     * ASBIE
     *  Catalogue Item Specification Update. Referenced_ Contract. Contract
     *  An association to a framework agreement or contract.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Signature
     *  One or more signatures applied to the document.
     *  0..n
     *  Catalogue Item Specification Update
     *  Signature
     *  Signature
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Signature[] $signature
     */
    private $signature = [
        
    ];

    /**
     * ASBIE
     *  Catalogue Item Specification Update. Provider_ Party. Party
     *  An association to the Catalogue Provider Party.
     *  1
     *  Catalogue Item Specification Update
     *  Provider
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ProviderParty $providerParty
     */
    private $providerParty = null;

    /**
     * ASBIE
     *  Catalogue Item Specification Update. Receiver_ Party. Party
     *  An association to the Catalogue Receiver Party.
     *  1
     *  Catalogue Item Specification Update
     *  Receiver
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReceiverParty $receiverParty
     */
    private $receiverParty = null;

    /**
     * ASBIE
     *  Catalogue Item Specification Update. Seller_ Supplier Party. Supplier Party
     *  The Supplier Party responsible for the contract to which the Catalogue relates.
     *  0..1
     *  Catalogue Item Specification Update
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\SellerSupplierParty $sellerSupplierParty
     */
    private $sellerSupplierParty = null;

    /**
     * ASBIE
     *  Catalogue Item Specification Update. Contractor_ Customer Party. Customer Party
     *  The Customer Party responsible for the contract to which the Catalogue relates.
     *  0..1
     *  Catalogue Item Specification Update
     *  Contractor
     *  Customer Party
     *  Customer Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ContractorCustomerParty $contractorCustomerParty
     */
    private $contractorCustomerParty = null;

    /**
     * ASBIE
     *  Catalogue Item Specification Update. Trading Terms
     *  An association to trading terms.
     *  0..1
     *  Catalogue Item Specification Update
     *  Trading Terms
     *  Trading Terms
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\TradingTerms $tradingTerms
     */
    private $tradingTerms = null;

    /**
     * ASBIE
     *  Catalogue Item Specification Update. Default_ Language. Language
     *  The default language for the item specifications.
     *  0..1
     *  Catalogue Item Specification Update
     *  Default
     *  Language
     *  Language
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DefaultLanguage $defaultLanguage
     */
    private $defaultLanguage = null;

    /**
     * ASBIE
     *  Catalogue Item Specification Update. Catalogue Item Specification Update Line
     *  An association to one or more Catalogue Item Specification Update Lines.
     *  1..n
     *  Catalogue Item Specification Update
     *  Catalogue Item Specification Update Line
     *  Catalogue Item Specification Update Line
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\CatalogueItemSpecificationUpdateLine[] $catalogueItemSpecificationUpdateLine
     */
    private $catalogueItemSpecificationUpdateLine = [
        
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
     *  Catalogue Item Specification Update. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the subset of UBL being used.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the subset of UBL being used.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Identifier
     *  An identifier for the Catalogue Revision assigned by the Seller.
     *  1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Identifier
     *  An identifier for the Catalogue Revision assigned by the Seller.
     *  1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Name
     *  A name given to the Catalogue Revision.
     *  0..1
     *  Catalogue Item Specification Update
     *  Name
     *  Name
     *  Name. Type
     *  "electrical goods - new energy ratings."
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
     *  Catalogue Item Specification Update. Name
     *  A name given to the Catalogue Revision.
     *  0..1
     *  Catalogue Item Specification Update
     *  Name
     *  Name
     *  Name. Type
     *  "electrical goods - new energy ratings."
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
     *  Catalogue Item Specification Update. Issue Date. Date
     *  The date when the Catalogue Revision was issued.
     *  1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Issue Date. Date
     *  The date when the Catalogue Revision was issued.
     *  1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Issue Time. Time
     *  The time when the Catalogue Revision was issued.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Issue Time. Time
     *  The time when the Catalogue Revision was issued.
     *  0..1
     *  Catalogue Item Specification Update
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
     * Gets as revisionDate
     *
     * BBIE
     *  Catalogue Item Specification Update. Revision Date. Date
     *  The date assigned by the Seller on which the Catalogue was revised.
     *  0..1
     *  Catalogue Item Specification Update
     *  Revision Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getRevisionDate()
    {
        return $this->revisionDate;
    }

    /**
     * Sets a new revisionDate
     *
     * BBIE
     *  Catalogue Item Specification Update. Revision Date. Date
     *  The date assigned by the Seller on which the Catalogue was revised.
     *  0..1
     *  Catalogue Item Specification Update
     *  Revision Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $revisionDate
     * @return self
     */
    public function setRevisionDate(\DateTime $revisionDate)
    {
        $this->revisionDate = $revisionDate;
        return $this;
    }

    /**
     * Gets as revisionTime
     *
     * BBIE
     *  Catalogue Item Specification Update. Revision Time. Time
     *  The time assigned by the Seller at which the Catalogue was revised.
     *  0..1
     *  Catalogue Item Specification Update
     *  Revision Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getRevisionTime()
    {
        return $this->revisionTime;
    }

    /**
     * Sets a new revisionTime
     *
     * BBIE
     *  Catalogue Item Specification Update. Revision Time. Time
     *  The time assigned by the Seller at which the Catalogue was revised.
     *  0..1
     *  Catalogue Item Specification Update
     *  Revision Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $revisionTime
     * @return self
     */
    public function setRevisionTime(\DateTime $revisionTime)
    {
        $this->revisionTime = $revisionTime;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Catalogue Item Specification Update. Note. Text
     *  Free-form text applying to the Catalogue Revision. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Note. Text
     *  Free-form text applying to the Catalogue Revision. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Note. Text
     *  Free-form text applying to the Catalogue Revision. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Note. Text
     *  Free-form text applying to the Catalogue Revision. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Note. Text
     *  Free-form text applying to the Catalogue Revision. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Description. Text
     *  A description of the Catalogue Revision.
     *  0..n
     *  Catalogue Item Specification Update
     *  Description
     *  Text
     *  Text. Type
     *  "ratings based on new environmental standards for EU"
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
     *  Catalogue Item Specification Update. Description. Text
     *  A description of the Catalogue Revision.
     *  0..n
     *  Catalogue Item Specification Update
     *  Description
     *  Text
     *  Text. Type
     *  "ratings based on new environmental standards for EU"
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
     *  Catalogue Item Specification Update. Description. Text
     *  A description of the Catalogue Revision.
     *  0..n
     *  Catalogue Item Specification Update
     *  Description
     *  Text
     *  Text. Type
     *  "ratings based on new environmental standards for EU"
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
     *  Catalogue Item Specification Update. Description. Text
     *  A description of the Catalogue Revision.
     *  0..n
     *  Catalogue Item Specification Update
     *  Description
     *  Text
     *  Text. Type
     *  "ratings based on new environmental standards for EU"
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
     *  Catalogue Item Specification Update. Description. Text
     *  A description of the Catalogue Revision.
     *  0..n
     *  Catalogue Item Specification Update
     *  Description
     *  Text
     *  Text. Type
     *  "ratings based on new environmental standards for EU"
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
     * Gets as versionID
     *
     * BBIE
     *  Catalogue Item Specification Update. Version. Identifier
     *  Indicates the current version of the Catalogue.
     *  0..1
     *  Catalogue Item Specification Update
     *  Version
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
     *  Catalogue Item Specification Update. Version. Identifier
     *  Indicates the current version of the Catalogue.
     *  0..1
     *  Catalogue Item Specification Update
     *  Version
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
     * Gets as lineCountNumeric
     *
     * BBIE
     *  Catalogue Item Specification Update. Line Count. Numeric
     *  The number of lines in the document.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Line Count. Numeric
     *  The number of lines in the document.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Validity_ Period. Period
     *  The period assigned by the Seller during which the information in the Catalogue Revision is effective. This may be given as start and end dates or a duration.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Validity_ Period. Period
     *  The period assigned by the Seller during which the information in the Catalogue Revision is effective. This may be given as start and end dates or a duration.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Validity_ Period. Period
     *  The period assigned by the Seller during which the information in the Catalogue Revision is effective. This may be given as start and end dates or a duration.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Validity_ Period. Period
     *  The period assigned by the Seller during which the information in the Catalogue Revision is effective. This may be given as start and end dates or a duration.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Validity_ Period. Period
     *  The period assigned by the Seller during which the information in the Catalogue Revision is effective. This may be given as start and end dates or a duration.
     *  0..n
     *  Catalogue Item Specification Update
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
     * Gets as relatedCatalogueReference
     *
     * ASBIE
     *  Catalogue Item Specification Update. Related_ Catalogue Reference. Catalogue Reference
     *  An association to the Catalogue containing the revised Items.
     *  1
     *  Catalogue Item Specification Update
     *  Related
     *  Catalogue Reference
     *  Catalogue Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\RelatedCatalogueReference
     */
    public function getRelatedCatalogueReference()
    {
        return $this->relatedCatalogueReference;
    }

    /**
     * Sets a new relatedCatalogueReference
     *
     * ASBIE
     *  Catalogue Item Specification Update. Related_ Catalogue Reference. Catalogue Reference
     *  An association to the Catalogue containing the revised Items.
     *  1
     *  Catalogue Item Specification Update
     *  Related
     *  Catalogue Reference
     *  Catalogue Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\RelatedCatalogueReference $relatedCatalogueReference
     * @return self
     */
    public function setRelatedCatalogueReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\RelatedCatalogueReference $relatedCatalogueReference)
    {
        $this->relatedCatalogueReference = $relatedCatalogueReference;
        return $this;
    }

    /**
     * Adds as referencedContract
     *
     * ASBIE
     *  Catalogue Item Specification Update. Referenced_ Contract. Contract
     *  An association to a framework agreement or contract.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Referenced_ Contract. Contract
     *  An association to a framework agreement or contract.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Referenced_ Contract. Contract
     *  An association to a framework agreement or contract.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Referenced_ Contract. Contract
     *  An association to a framework agreement or contract.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Referenced_ Contract. Contract
     *  An association to a framework agreement or contract.
     *  0..n
     *  Catalogue Item Specification Update
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
     * Adds as signature
     *
     * ASBIE
     *  Catalogue Item Specification Update. Signature
     *  One or more signatures applied to the document.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Signature
     *  One or more signatures applied to the document.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Signature
     *  One or more signatures applied to the document.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Signature
     *  One or more signatures applied to the document.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Signature
     *  One or more signatures applied to the document.
     *  0..n
     *  Catalogue Item Specification Update
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
     * Gets as providerParty
     *
     * ASBIE
     *  Catalogue Item Specification Update. Provider_ Party. Party
     *  An association to the Catalogue Provider Party.
     *  1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Provider_ Party. Party
     *  An association to the Catalogue Provider Party.
     *  1
     *  Catalogue Item Specification Update
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
     * Gets as receiverParty
     *
     * ASBIE
     *  Catalogue Item Specification Update. Receiver_ Party. Party
     *  An association to the Catalogue Receiver Party.
     *  1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Receiver_ Party. Party
     *  An association to the Catalogue Receiver Party.
     *  1
     *  Catalogue Item Specification Update
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
     * Gets as sellerSupplierParty
     *
     * ASBIE
     *  Catalogue Item Specification Update. Seller_ Supplier Party. Supplier Party
     *  The Supplier Party responsible for the contract to which the Catalogue relates.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Seller_ Supplier Party. Supplier Party
     *  The Supplier Party responsible for the contract to which the Catalogue relates.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Contractor_ Customer Party. Customer Party
     *  The Customer Party responsible for the contract to which the Catalogue relates.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Contractor_ Customer Party. Customer Party
     *  The Customer Party responsible for the contract to which the Catalogue relates.
     *  0..1
     *  Catalogue Item Specification Update
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
     * Gets as tradingTerms
     *
     * ASBIE
     *  Catalogue Item Specification Update. Trading Terms
     *  An association to trading terms.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Trading Terms
     *  An association to trading terms.
     *  0..1
     *  Catalogue Item Specification Update
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
     * Gets as defaultLanguage
     *
     * ASBIE
     *  Catalogue Item Specification Update. Default_ Language. Language
     *  The default language for the item specifications.
     *  0..1
     *  Catalogue Item Specification Update
     *  Default
     *  Language
     *  Language
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\DefaultLanguage
     */
    public function getDefaultLanguage()
    {
        return $this->defaultLanguage;
    }

    /**
     * Sets a new defaultLanguage
     *
     * ASBIE
     *  Catalogue Item Specification Update. Default_ Language. Language
     *  The default language for the item specifications.
     *  0..1
     *  Catalogue Item Specification Update
     *  Default
     *  Language
     *  Language
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DefaultLanguage $defaultLanguage
     * @return self
     */
    public function setDefaultLanguage(\NOKA\PHPUBL\UBL\Common\AggregateComponents\DefaultLanguage $defaultLanguage)
    {
        $this->defaultLanguage = $defaultLanguage;
        return $this;
    }

    /**
     * Adds as catalogueItemSpecificationUpdateLine
     *
     * ASBIE
     *  Catalogue Item Specification Update. Catalogue Item Specification Update Line
     *  An association to one or more Catalogue Item Specification Update Lines.
     *  1..n
     *  Catalogue Item Specification Update
     *  Catalogue Item Specification Update Line
     *  Catalogue Item Specification Update Line
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\CatalogueItemSpecificationUpdateLine $catalogueItemSpecificationUpdateLine
     */
    public function addToCatalogueItemSpecificationUpdateLine(\NOKA\PHPUBL\UBL\Common\AggregateComponents\CatalogueItemSpecificationUpdateLine $catalogueItemSpecificationUpdateLine)
    {
        $this->catalogueItemSpecificationUpdateLine[] = $catalogueItemSpecificationUpdateLine;
        return $this;
    }

    /**
     * isset catalogueItemSpecificationUpdateLine
     *
     * ASBIE
     *  Catalogue Item Specification Update. Catalogue Item Specification Update Line
     *  An association to one or more Catalogue Item Specification Update Lines.
     *  1..n
     *  Catalogue Item Specification Update
     *  Catalogue Item Specification Update Line
     *  Catalogue Item Specification Update Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCatalogueItemSpecificationUpdateLine($index)
    {
        return isset($this->catalogueItemSpecificationUpdateLine[$index]);
    }

    /**
     * unset catalogueItemSpecificationUpdateLine
     *
     * ASBIE
     *  Catalogue Item Specification Update. Catalogue Item Specification Update Line
     *  An association to one or more Catalogue Item Specification Update Lines.
     *  1..n
     *  Catalogue Item Specification Update
     *  Catalogue Item Specification Update Line
     *  Catalogue Item Specification Update Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCatalogueItemSpecificationUpdateLine($index)
    {
        unset($this->catalogueItemSpecificationUpdateLine[$index]);
    }

    /**
     * Gets as catalogueItemSpecificationUpdateLine
     *
     * ASBIE
     *  Catalogue Item Specification Update. Catalogue Item Specification Update Line
     *  An association to one or more Catalogue Item Specification Update Lines.
     *  1..n
     *  Catalogue Item Specification Update
     *  Catalogue Item Specification Update Line
     *  Catalogue Item Specification Update Line
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\CatalogueItemSpecificationUpdateLine[]
     */
    public function getCatalogueItemSpecificationUpdateLine()
    {
        return $this->catalogueItemSpecificationUpdateLine;
    }

    /**
     * Sets a new catalogueItemSpecificationUpdateLine
     *
     * ASBIE
     *  Catalogue Item Specification Update. Catalogue Item Specification Update Line
     *  An association to one or more Catalogue Item Specification Update Lines.
     *  1..n
     *  Catalogue Item Specification Update
     *  Catalogue Item Specification Update Line
     *  Catalogue Item Specification Update Line
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\CatalogueItemSpecificationUpdateLine[] $catalogueItemSpecificationUpdateLine
     * @return self
     */
    public function setCatalogueItemSpecificationUpdateLine(array $catalogueItemSpecificationUpdateLine)
    {
        $this->catalogueItemSpecificationUpdateLine = $catalogueItemSpecificationUpdateLine;
        return $this;
    }


}

