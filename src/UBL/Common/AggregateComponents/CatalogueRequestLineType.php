<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing CatalogueRequestLineType
 *
 * ABIE
 *  Catalogue Request Line. Details
 *  The basic element of Catalogue; something that can be bought.
 *  Catalogue Request Line
 * XSD Type: CatalogueRequestLineType
 */
class CatalogueRequestLineType
{

    /**
     * BBIE
     *  Catalogue Request Line. Identifier
     *  A unique instance identifier for the line in this Catalogue document.
     *  1
     *  Catalogue Request Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "1"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Catalogue Request Line. Contract Subdivision. Text
     *  Identifies a subdivision of a contract or tender.
     *  0..1
     *  Catalogue Request Line
     *  Contract Subdivision
     *  Text
     *  Text. Type
     *  "Installation", "Phase One", Support and Maintenance"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ContractSubdivision $contractSubdivision
     */
    private $contractSubdivision = null;

    /**
     * BBIE
     *  Catalogue Request Line. Note. Text
     *  Free-text note used for non-structured information about the line in the specific Catalogue document (intended to be human readable).
     *  0..n
     *  Catalogue Request Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * ASBIE
     *  Catalogue Request Line. Line Validity_ Period. Period
     *  The period for which the Catalogue Line is valid.
     *  0..1
     *  Catalogue Request Line
     *  Line Validity
     *  Period
     *  Period
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\LineValidityPeriod $lineValidityPeriod
     */
    private $lineValidityPeriod = null;

    /**
     * ASBIE
     *  Catalogue Request Line. Required_ Item Location Quantity. Item Location Quantity
     *  An association to the description of properties related to locations and quantities of the item.
     *  0..n
     *  Catalogue Request Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\RequiredItemLocationQuantity[] $requiredItemLocationQuantity
     */
    private $requiredItemLocationQuantity = [
        
    ];

    /**
     * ASBIE
     *  Catalogue Request Line. Item
     *  An association to the Item itself.
     *  1
     *  Catalogue Request Line
     *  Item
     *  Item
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Item $item
     */
    private $item = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Catalogue Request Line. Identifier
     *  A unique instance identifier for the line in this Catalogue document.
     *  1
     *  Catalogue Request Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "1"
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
     *  Catalogue Request Line. Identifier
     *  A unique instance identifier for the line in this Catalogue document.
     *  1
     *  Catalogue Request Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "1"
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
     * Gets as contractSubdivision
     *
     * BBIE
     *  Catalogue Request Line. Contract Subdivision. Text
     *  Identifies a subdivision of a contract or tender.
     *  0..1
     *  Catalogue Request Line
     *  Contract Subdivision
     *  Text
     *  Text. Type
     *  "Installation", "Phase One", Support and Maintenance"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ContractSubdivision
     */
    public function getContractSubdivision()
    {
        return $this->contractSubdivision;
    }

    /**
     * Sets a new contractSubdivision
     *
     * BBIE
     *  Catalogue Request Line. Contract Subdivision. Text
     *  Identifies a subdivision of a contract or tender.
     *  0..1
     *  Catalogue Request Line
     *  Contract Subdivision
     *  Text
     *  Text. Type
     *  "Installation", "Phase One", Support and Maintenance"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ContractSubdivision $contractSubdivision
     * @return self
     */
    public function setContractSubdivision(\NOKA\PHPUBL\UBL\Common\BasicComponents\ContractSubdivision $contractSubdivision)
    {
        $this->contractSubdivision = $contractSubdivision;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Catalogue Request Line. Note. Text
     *  Free-text note used for non-structured information about the line in the specific Catalogue document (intended to be human readable).
     *  0..n
     *  Catalogue Request Line
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
     *  Catalogue Request Line. Note. Text
     *  Free-text note used for non-structured information about the line in the specific Catalogue document (intended to be human readable).
     *  0..n
     *  Catalogue Request Line
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
     *  Catalogue Request Line. Note. Text
     *  Free-text note used for non-structured information about the line in the specific Catalogue document (intended to be human readable).
     *  0..n
     *  Catalogue Request Line
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
     *  Catalogue Request Line. Note. Text
     *  Free-text note used for non-structured information about the line in the specific Catalogue document (intended to be human readable).
     *  0..n
     *  Catalogue Request Line
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
     *  Catalogue Request Line. Note. Text
     *  Free-text note used for non-structured information about the line in the specific Catalogue document (intended to be human readable).
     *  0..n
     *  Catalogue Request Line
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
     * Gets as lineValidityPeriod
     *
     * ASBIE
     *  Catalogue Request Line. Line Validity_ Period. Period
     *  The period for which the Catalogue Line is valid.
     *  0..1
     *  Catalogue Request Line
     *  Line Validity
     *  Period
     *  Period
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\LineValidityPeriod
     */
    public function getLineValidityPeriod()
    {
        return $this->lineValidityPeriod;
    }

    /**
     * Sets a new lineValidityPeriod
     *
     * ASBIE
     *  Catalogue Request Line. Line Validity_ Period. Period
     *  The period for which the Catalogue Line is valid.
     *  0..1
     *  Catalogue Request Line
     *  Line Validity
     *  Period
     *  Period
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\LineValidityPeriod $lineValidityPeriod
     * @return self
     */
    public function setLineValidityPeriod(\NOKA\PHPUBL\UBL\Common\AggregateComponents\LineValidityPeriod $lineValidityPeriod)
    {
        $this->lineValidityPeriod = $lineValidityPeriod;
        return $this;
    }

    /**
     * Adds as requiredItemLocationQuantity
     *
     * ASBIE
     *  Catalogue Request Line. Required_ Item Location Quantity. Item Location Quantity
     *  An association to the description of properties related to locations and quantities of the item.
     *  0..n
     *  Catalogue Request Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\RequiredItemLocationQuantity $requiredItemLocationQuantity
     */
    public function addToRequiredItemLocationQuantity(\NOKA\PHPUBL\UBL\Common\AggregateComponents\RequiredItemLocationQuantity $requiredItemLocationQuantity)
    {
        $this->requiredItemLocationQuantity[] = $requiredItemLocationQuantity;
        return $this;
    }

    /**
     * isset requiredItemLocationQuantity
     *
     * ASBIE
     *  Catalogue Request Line. Required_ Item Location Quantity. Item Location Quantity
     *  An association to the description of properties related to locations and quantities of the item.
     *  0..n
     *  Catalogue Request Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequiredItemLocationQuantity($index)
    {
        return isset($this->requiredItemLocationQuantity[$index]);
    }

    /**
     * unset requiredItemLocationQuantity
     *
     * ASBIE
     *  Catalogue Request Line. Required_ Item Location Quantity. Item Location Quantity
     *  An association to the description of properties related to locations and quantities of the item.
     *  0..n
     *  Catalogue Request Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequiredItemLocationQuantity($index)
    {
        unset($this->requiredItemLocationQuantity[$index]);
    }

    /**
     * Gets as requiredItemLocationQuantity
     *
     * ASBIE
     *  Catalogue Request Line. Required_ Item Location Quantity. Item Location Quantity
     *  An association to the description of properties related to locations and quantities of the item.
     *  0..n
     *  Catalogue Request Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\RequiredItemLocationQuantity[]
     */
    public function getRequiredItemLocationQuantity()
    {
        return $this->requiredItemLocationQuantity;
    }

    /**
     * Sets a new requiredItemLocationQuantity
     *
     * ASBIE
     *  Catalogue Request Line. Required_ Item Location Quantity. Item Location Quantity
     *  An association to the description of properties related to locations and quantities of the item.
     *  0..n
     *  Catalogue Request Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\RequiredItemLocationQuantity[] $requiredItemLocationQuantity
     * @return self
     */
    public function setRequiredItemLocationQuantity(array $requiredItemLocationQuantity)
    {
        $this->requiredItemLocationQuantity = $requiredItemLocationQuantity;
        return $this;
    }

    /**
     * Gets as item
     *
     * ASBIE
     *  Catalogue Request Line. Item
     *  An association to the Item itself.
     *  1
     *  Catalogue Request Line
     *  Item
     *  Item
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\Item
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * ASBIE
     *  Catalogue Request Line. Item
     *  An association to the Item itself.
     *  1
     *  Catalogue Request Line
     *  Item
     *  Item
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Item $item
     * @return self
     */
    public function setItem(\NOKA\PHPUBL\UBL\Common\AggregateComponents\Item $item)
    {
        $this->item = $item;
        return $this;
    }


}

