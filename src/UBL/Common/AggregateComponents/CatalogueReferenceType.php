<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing CatalogueReferenceType
 *
 * ABIE
 *  Catalogue Reference. Details
 *  A reference to a Catalogue.
 *  Catalogue Reference
 * XSD Type: CatalogueReferenceType
 */
class CatalogueReferenceType
{

    /**
     * BBIE
     *  Catalogue Reference. Identifier
     *  An identifier for the Catalogue document.
     *  1
     *  Catalogue Reference
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Catalogue Reference. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Catalogue Reference
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Catalogue Reference. Issue Date. Date
     *  The date when the Catalogue was issued.
     *  0..1
     *  Catalogue Reference
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Catalogue Reference. Issue Time. Time
     *  The time when the Catalogue was issued.
     *  0..1
     *  Catalogue Reference
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Catalogue Reference. Revision Date. Date
     *  The date on which the information in the Catalogue was revised.
     *  0..1
     *  Catalogue Reference
     *  Revision Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $revisionDate
     */
    private $revisionDate = null;

    /**
     * BBIE
     *  Catalogue Reference. Revision Time. Time
     *  The time at which the information in the Catalogue was revised.
     *  0..1
     *  Catalogue Reference
     *  Revision Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $revisionTime
     */
    private $revisionTime = null;

    /**
     * BBIE
     *  Catalogue Reference. Note. Text
     *  A free-text note about the Catalogue. This is used for information which is only human readable.
     *  0..n
     *  Catalogue Reference
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
     *  Catalogue Reference. Description. Text
     *  A description of the Catalogue.
     *  0..n
     *  Catalogue Reference
     *  Description
     *  Text
     *  Text. Type
     *  "computer accessories for laptops"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Catalogue Reference. Version. Identifier
     *  Indicates the current version of the Catalogue.
     *  0..1
     *  Catalogue Reference
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
     *  Catalogue Reference. Previous_ Version. Identifier
     *  Indicates the previous version (the version superseded by this Catalogue).
     *  0..1
     *  Catalogue Reference
     *  Previous
     *  Version
     *  Identifier
     *  Identifier. Type
     *  "1.0"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\PreviousVersionID $previousVersionID
     */
    private $previousVersionID = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Catalogue Reference. Identifier
     *  An identifier for the Catalogue document.
     *  1
     *  Catalogue Reference
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
     *  Catalogue Reference. Identifier
     *  An identifier for the Catalogue document.
     *  1
     *  Catalogue Reference
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
     *  Catalogue Reference. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Catalogue Reference
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
     *  Catalogue Reference. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Catalogue Reference
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
     *  Catalogue Reference. Issue Date. Date
     *  The date when the Catalogue was issued.
     *  0..1
     *  Catalogue Reference
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
     *  Catalogue Reference. Issue Date. Date
     *  The date when the Catalogue was issued.
     *  0..1
     *  Catalogue Reference
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
     *  Catalogue Reference. Issue Time. Time
     *  The time when the Catalogue was issued.
     *  0..1
     *  Catalogue Reference
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
     *  Catalogue Reference. Issue Time. Time
     *  The time when the Catalogue was issued.
     *  0..1
     *  Catalogue Reference
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
     *  Catalogue Reference. Revision Date. Date
     *  The date on which the information in the Catalogue was revised.
     *  0..1
     *  Catalogue Reference
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
     *  Catalogue Reference. Revision Date. Date
     *  The date on which the information in the Catalogue was revised.
     *  0..1
     *  Catalogue Reference
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
     *  Catalogue Reference. Revision Time. Time
     *  The time at which the information in the Catalogue was revised.
     *  0..1
     *  Catalogue Reference
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
     *  Catalogue Reference. Revision Time. Time
     *  The time at which the information in the Catalogue was revised.
     *  0..1
     *  Catalogue Reference
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
     *  Catalogue Reference. Note. Text
     *  A free-text note about the Catalogue. This is used for information which is only human readable.
     *  0..n
     *  Catalogue Reference
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
     *  Catalogue Reference. Note. Text
     *  A free-text note about the Catalogue. This is used for information which is only human readable.
     *  0..n
     *  Catalogue Reference
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
     *  Catalogue Reference. Note. Text
     *  A free-text note about the Catalogue. This is used for information which is only human readable.
     *  0..n
     *  Catalogue Reference
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
     *  Catalogue Reference. Note. Text
     *  A free-text note about the Catalogue. This is used for information which is only human readable.
     *  0..n
     *  Catalogue Reference
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
     *  Catalogue Reference. Note. Text
     *  A free-text note about the Catalogue. This is used for information which is only human readable.
     *  0..n
     *  Catalogue Reference
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
     *  Catalogue Reference. Description. Text
     *  A description of the Catalogue.
     *  0..n
     *  Catalogue Reference
     *  Description
     *  Text
     *  Text. Type
     *  "computer accessories for laptops"
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
     *  Catalogue Reference. Description. Text
     *  A description of the Catalogue.
     *  0..n
     *  Catalogue Reference
     *  Description
     *  Text
     *  Text. Type
     *  "computer accessories for laptops"
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
     *  Catalogue Reference. Description. Text
     *  A description of the Catalogue.
     *  0..n
     *  Catalogue Reference
     *  Description
     *  Text
     *  Text. Type
     *  "computer accessories for laptops"
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
     *  Catalogue Reference. Description. Text
     *  A description of the Catalogue.
     *  0..n
     *  Catalogue Reference
     *  Description
     *  Text
     *  Text. Type
     *  "computer accessories for laptops"
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
     *  Catalogue Reference. Description. Text
     *  A description of the Catalogue.
     *  0..n
     *  Catalogue Reference
     *  Description
     *  Text
     *  Text. Type
     *  "computer accessories for laptops"
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
     *  Catalogue Reference. Version. Identifier
     *  Indicates the current version of the Catalogue.
     *  0..1
     *  Catalogue Reference
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
     *  Catalogue Reference. Version. Identifier
     *  Indicates the current version of the Catalogue.
     *  0..1
     *  Catalogue Reference
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
     * Gets as previousVersionID
     *
     * BBIE
     *  Catalogue Reference. Previous_ Version. Identifier
     *  Indicates the previous version (the version superseded by this Catalogue).
     *  0..1
     *  Catalogue Reference
     *  Previous
     *  Version
     *  Identifier
     *  Identifier. Type
     *  "1.0"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\PreviousVersionID
     */
    public function getPreviousVersionID()
    {
        return $this->previousVersionID;
    }

    /**
     * Sets a new previousVersionID
     *
     * BBIE
     *  Catalogue Reference. Previous_ Version. Identifier
     *  Indicates the previous version (the version superseded by this Catalogue).
     *  0..1
     *  Catalogue Reference
     *  Previous
     *  Version
     *  Identifier
     *  Identifier. Type
     *  "1.0"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\PreviousVersionID $previousVersionID
     * @return self
     */
    public function setPreviousVersionID(\NOKA\PHPUBL\UBL\Common\BasicComponents\PreviousVersionID $previousVersionID)
    {
        $this->previousVersionID = $previousVersionID;
        return $this;
    }


}

