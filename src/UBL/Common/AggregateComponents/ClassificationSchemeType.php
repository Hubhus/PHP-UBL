<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing ClassificationSchemeType
 *
 * ABIE
 *  Classification Scheme. Details
 *  Information about Classification Scheme; a scheme that defines a taxonomy for classifying goods or services.
 *  Classification Scheme
 * XSD Type: ClassificationSchemeType
 */
class ClassificationSchemeType
{

    /**
     * BBIE
     *  Classification Scheme. Identifier
     *  An identifier for the classification scheme.
     *  1
     *  Classification Scheme
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Classification Scheme. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Classification Scheme
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Classification Scheme. Last_ Revision Date. Date
     *  The date at which the classification scheme was last revised.
     *  0..1
     *  Classification Scheme
     *  Last
     *  Revision Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $lastRevisionDate
     */
    private $lastRevisionDate = null;

    /**
     * BBIE
     *  Classification Scheme. Last_ Revision Time. Time
     *  The time at which the classification scheme was last revised.
     *  0..1
     *  Classification Scheme
     *  Last
     *  Revision Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $lastRevisionTime
     */
    private $lastRevisionTime = null;

    /**
     * BBIE
     *  Classification Scheme. Note. Text
     *  Free-form text applying to the Classification Scheme. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Classification Scheme
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Note $note
     */
    private $note = null;

    /**
     * BBIE
     *  Classification Scheme. Name
     *  The name of the Classification Scheme.
     *  0..1
     *  Classification Scheme
     *  Name
     *  Name
     *  Name. Type
     *  "UNSPSC"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Classification Scheme. Description. Text
     *  A description of the Classification Scheme.
     *  0..n
     *  Classification Scheme
     *  Description
     *  Text
     *  Text. Type
     *  "an open, global multi-sector standard for classification of products and services"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Classification Scheme. Agency Identifier. Identifier
     *  Identifies the agency that maintains the Classification Scheme.
     *  0..1
     *  Classification Scheme
     *  Agency Identifier
     *  Identifier
     *  Identifier. Type
     *  Defaults to the UN/EDIFACT data element 3055 code list.
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AgencyID $agencyID
     */
    private $agencyID = null;

    /**
     * BBIE
     *  Classification Scheme. Agency Name. Text
     *  The name of the agency that maintains the Classification Scheme.
     *  0..1
     *  Classification Scheme
     *  Agency Name
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AgencyName $agencyName
     */
    private $agencyName = null;

    /**
     * BBIE
     *  Classification Scheme. Version. Identifier
     *  Identifies the version of the Classification Scheme.
     *  0..1
     *  Classification Scheme
     *  Version
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\VersionID $versionID
     */
    private $versionID = null;

    /**
     * BBIE
     *  Classification Scheme. URI. Identifier
     *  The Uniform Resource Identifier (URI) that identifies where the Classification is located.
     *  0..1
     *  Classification Scheme
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\URI $uRI
     */
    private $uRI = null;

    /**
     * BBIE
     *  Classification Scheme. Scheme_ URI. Identifier
     *  The Uniform Resource Identifier (URI) that identifies where the Classification Scheme is located.
     *  0..1
     *  Classification Scheme
     *  Scheme
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\SchemeURI $schemeURI
     */
    private $schemeURI = null;

    /**
     * BBIE
     *  Classification Scheme. Language. Identifier
     *  Identifies the language of the Classification Scheme.
     *  0..1
     *  Classification Scheme
     *  Language
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\LanguageID $languageID
     */
    private $languageID = null;

    /**
     * ASBIE
     *  Classification Scheme. Classification Category
     *  An association to Classification Category.
     *  1..n
     *  Classification Scheme
     *  Classification Category
     *  Classification Category
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ClassificationCategory[] $classificationCategory
     */
    private $classificationCategory = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Classification Scheme. Identifier
     *  An identifier for the classification scheme.
     *  1
     *  Classification Scheme
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
     *  Classification Scheme. Identifier
     *  An identifier for the classification scheme.
     *  1
     *  Classification Scheme
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
     *  Classification Scheme. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Classification Scheme
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
     *  Classification Scheme. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Classification Scheme
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
     * Gets as lastRevisionDate
     *
     * BBIE
     *  Classification Scheme. Last_ Revision Date. Date
     *  The date at which the classification scheme was last revised.
     *  0..1
     *  Classification Scheme
     *  Last
     *  Revision Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getLastRevisionDate()
    {
        return $this->lastRevisionDate;
    }

    /**
     * Sets a new lastRevisionDate
     *
     * BBIE
     *  Classification Scheme. Last_ Revision Date. Date
     *  The date at which the classification scheme was last revised.
     *  0..1
     *  Classification Scheme
     *  Last
     *  Revision Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $lastRevisionDate
     * @return self
     */
    public function setLastRevisionDate(\DateTime $lastRevisionDate)
    {
        $this->lastRevisionDate = $lastRevisionDate;
        return $this;
    }

    /**
     * Gets as lastRevisionTime
     *
     * BBIE
     *  Classification Scheme. Last_ Revision Time. Time
     *  The time at which the classification scheme was last revised.
     *  0..1
     *  Classification Scheme
     *  Last
     *  Revision Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getLastRevisionTime()
    {
        return $this->lastRevisionTime;
    }

    /**
     * Sets a new lastRevisionTime
     *
     * BBIE
     *  Classification Scheme. Last_ Revision Time. Time
     *  The time at which the classification scheme was last revised.
     *  0..1
     *  Classification Scheme
     *  Last
     *  Revision Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $lastRevisionTime
     * @return self
     */
    public function setLastRevisionTime(\DateTime $lastRevisionTime)
    {
        $this->lastRevisionTime = $lastRevisionTime;
        return $this;
    }

    /**
     * Gets as note
     *
     * BBIE
     *  Classification Scheme. Note. Text
     *  Free-form text applying to the Classification Scheme. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Classification Scheme
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Note
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Classification Scheme. Note. Text
     *  Free-form text applying to the Classification Scheme. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Classification Scheme
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Note $note
     * @return self
     */
    public function setNote(\NOKA\PHPUBL\UBL\Common\BasicComponents\Note $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Classification Scheme. Name
     *  The name of the Classification Scheme.
     *  0..1
     *  Classification Scheme
     *  Name
     *  Name
     *  Name. Type
     *  "UNSPSC"
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
     *  Classification Scheme. Name
     *  The name of the Classification Scheme.
     *  0..1
     *  Classification Scheme
     *  Name
     *  Name
     *  Name. Type
     *  "UNSPSC"
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
     * Adds as description
     *
     * BBIE
     *  Classification Scheme. Description. Text
     *  A description of the Classification Scheme.
     *  0..n
     *  Classification Scheme
     *  Description
     *  Text
     *  Text. Type
     *  "an open, global multi-sector standard for classification of products and services"
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
     *  Classification Scheme. Description. Text
     *  A description of the Classification Scheme.
     *  0..n
     *  Classification Scheme
     *  Description
     *  Text
     *  Text. Type
     *  "an open, global multi-sector standard for classification of products and services"
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
     *  Classification Scheme. Description. Text
     *  A description of the Classification Scheme.
     *  0..n
     *  Classification Scheme
     *  Description
     *  Text
     *  Text. Type
     *  "an open, global multi-sector standard for classification of products and services"
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
     *  Classification Scheme. Description. Text
     *  A description of the Classification Scheme.
     *  0..n
     *  Classification Scheme
     *  Description
     *  Text
     *  Text. Type
     *  "an open, global multi-sector standard for classification of products and services"
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
     *  Classification Scheme. Description. Text
     *  A description of the Classification Scheme.
     *  0..n
     *  Classification Scheme
     *  Description
     *  Text
     *  Text. Type
     *  "an open, global multi-sector standard for classification of products and services"
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
     * Gets as agencyID
     *
     * BBIE
     *  Classification Scheme. Agency Identifier. Identifier
     *  Identifies the agency that maintains the Classification Scheme.
     *  0..1
     *  Classification Scheme
     *  Agency Identifier
     *  Identifier
     *  Identifier. Type
     *  Defaults to the UN/EDIFACT data element 3055 code list.
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\AgencyID
     */
    public function getAgencyID()
    {
        return $this->agencyID;
    }

    /**
     * Sets a new agencyID
     *
     * BBIE
     *  Classification Scheme. Agency Identifier. Identifier
     *  Identifies the agency that maintains the Classification Scheme.
     *  0..1
     *  Classification Scheme
     *  Agency Identifier
     *  Identifier
     *  Identifier. Type
     *  Defaults to the UN/EDIFACT data element 3055 code list.
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\AgencyID $agencyID
     * @return self
     */
    public function setAgencyID(\NOKA\PHPUBL\UBL\Common\BasicComponents\AgencyID $agencyID)
    {
        $this->agencyID = $agencyID;
        return $this;
    }

    /**
     * Gets as agencyName
     *
     * BBIE
     *  Classification Scheme. Agency Name. Text
     *  The name of the agency that maintains the Classification Scheme.
     *  0..1
     *  Classification Scheme
     *  Agency Name
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\AgencyName
     */
    public function getAgencyName()
    {
        return $this->agencyName;
    }

    /**
     * Sets a new agencyName
     *
     * BBIE
     *  Classification Scheme. Agency Name. Text
     *  The name of the agency that maintains the Classification Scheme.
     *  0..1
     *  Classification Scheme
     *  Agency Name
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\AgencyName $agencyName
     * @return self
     */
    public function setAgencyName(\NOKA\PHPUBL\UBL\Common\BasicComponents\AgencyName $agencyName)
    {
        $this->agencyName = $agencyName;
        return $this;
    }

    /**
     * Gets as versionID
     *
     * BBIE
     *  Classification Scheme. Version. Identifier
     *  Identifies the version of the Classification Scheme.
     *  0..1
     *  Classification Scheme
     *  Version
     *  Identifier
     *  Identifier. Type
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
     *  Classification Scheme. Version. Identifier
     *  Identifies the version of the Classification Scheme.
     *  0..1
     *  Classification Scheme
     *  Version
     *  Identifier
     *  Identifier. Type
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
     * Gets as uRI
     *
     * BBIE
     *  Classification Scheme. URI. Identifier
     *  The Uniform Resource Identifier (URI) that identifies where the Classification is located.
     *  0..1
     *  Classification Scheme
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\URI
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * BBIE
     *  Classification Scheme. URI. Identifier
     *  The Uniform Resource Identifier (URI) that identifies where the Classification is located.
     *  0..1
     *  Classification Scheme
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\URI $uRI
     * @return self
     */
    public function setURI(\NOKA\PHPUBL\UBL\Common\BasicComponents\URI $uRI)
    {
        $this->uRI = $uRI;
        return $this;
    }

    /**
     * Gets as schemeURI
     *
     * BBIE
     *  Classification Scheme. Scheme_ URI. Identifier
     *  The Uniform Resource Identifier (URI) that identifies where the Classification Scheme is located.
     *  0..1
     *  Classification Scheme
     *  Scheme
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\SchemeURI
     */
    public function getSchemeURI()
    {
        return $this->schemeURI;
    }

    /**
     * Sets a new schemeURI
     *
     * BBIE
     *  Classification Scheme. Scheme_ URI. Identifier
     *  The Uniform Resource Identifier (URI) that identifies where the Classification Scheme is located.
     *  0..1
     *  Classification Scheme
     *  Scheme
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\SchemeURI $schemeURI
     * @return self
     */
    public function setSchemeURI(\NOKA\PHPUBL\UBL\Common\BasicComponents\SchemeURI $schemeURI)
    {
        $this->schemeURI = $schemeURI;
        return $this;
    }

    /**
     * Gets as languageID
     *
     * BBIE
     *  Classification Scheme. Language. Identifier
     *  Identifies the language of the Classification Scheme.
     *  0..1
     *  Classification Scheme
     *  Language
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\LanguageID
     */
    public function getLanguageID()
    {
        return $this->languageID;
    }

    /**
     * Sets a new languageID
     *
     * BBIE
     *  Classification Scheme. Language. Identifier
     *  Identifies the language of the Classification Scheme.
     *  0..1
     *  Classification Scheme
     *  Language
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\LanguageID $languageID
     * @return self
     */
    public function setLanguageID(\NOKA\PHPUBL\UBL\Common\BasicComponents\LanguageID $languageID)
    {
        $this->languageID = $languageID;
        return $this;
    }

    /**
     * Adds as classificationCategory
     *
     * ASBIE
     *  Classification Scheme. Classification Category
     *  An association to Classification Category.
     *  1..n
     *  Classification Scheme
     *  Classification Category
     *  Classification Category
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ClassificationCategory $classificationCategory
     */
    public function addToClassificationCategory(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ClassificationCategory $classificationCategory)
    {
        $this->classificationCategory[] = $classificationCategory;
        return $this;
    }

    /**
     * isset classificationCategory
     *
     * ASBIE
     *  Classification Scheme. Classification Category
     *  An association to Classification Category.
     *  1..n
     *  Classification Scheme
     *  Classification Category
     *  Classification Category
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClassificationCategory($index)
    {
        return isset($this->classificationCategory[$index]);
    }

    /**
     * unset classificationCategory
     *
     * ASBIE
     *  Classification Scheme. Classification Category
     *  An association to Classification Category.
     *  1..n
     *  Classification Scheme
     *  Classification Category
     *  Classification Category
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClassificationCategory($index)
    {
        unset($this->classificationCategory[$index]);
    }

    /**
     * Gets as classificationCategory
     *
     * ASBIE
     *  Classification Scheme. Classification Category
     *  An association to Classification Category.
     *  1..n
     *  Classification Scheme
     *  Classification Category
     *  Classification Category
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ClassificationCategory[]
     */
    public function getClassificationCategory()
    {
        return $this->classificationCategory;
    }

    /**
     * Sets a new classificationCategory
     *
     * ASBIE
     *  Classification Scheme. Classification Category
     *  An association to Classification Category.
     *  1..n
     *  Classification Scheme
     *  Classification Category
     *  Classification Category
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ClassificationCategory[] $classificationCategory
     * @return self
     */
    public function setClassificationCategory(array $classificationCategory)
    {
        $this->classificationCategory = $classificationCategory;
        return $this;
    }


}

