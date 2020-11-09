<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing ItemIdentificationType
 *
 * ABIE
 *  Item Identification. Details
 *  Information about item identification.
 *  Item Identification
 * XSD Type: ItemIdentificationType
 */
class ItemIdentificationType
{

    /**
     * BBIE
     *  Item Identification. Identifier
     *  An identifier for an item.
     *  1
     *  Item Identification
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "CUST001" "3333-44-123"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Item Identification. Extended_ Identifier. Identifier
     *  An extended identifier for the item that identifies the item with specific properties, e.g., Item 123 = Chair / Item 123 Ext 45 = brown chair.
     *  0..1
     *  Item Identification
     *  Extended
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ExtendedID $extendedID
     */
    private $extendedID = null;

    /**
     * ASBIE
     *  Item Identification. Physical Attribute
     *  An association to Physical Attribute.
     *  0..n
     *  Item Identification
     *  Physical Attribute
     *  Physical Attribute
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\PhysicalAttribute[] $physicalAttribute
     */
    private $physicalAttribute = [
        
    ];

    /**
     * ASBIE
     *  Item Identification. Measurement_ Dimension. Dimension
     *  An association to Measurement Dimension.
     *  0..n
     *  Item Identification
     *  Measurement
     *  Dimension
     *  Dimension
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\MeasurementDimension[] $measurementDimension
     */
    private $measurementDimension = [
        
    ];

    /**
     * ASBIE
     *  Item Identification. Issuer_ Party. Party
     *  An association to Issuer Party i.e. the Party that issued the Item Identification.
     *  0..1
     *  Item Identification
     *  Issuer
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\IssuerParty $issuerParty
     */
    private $issuerParty = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Item Identification. Identifier
     *  An identifier for an item.
     *  1
     *  Item Identification
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "CUST001" "3333-44-123"
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
     *  Item Identification. Identifier
     *  An identifier for an item.
     *  1
     *  Item Identification
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "CUST001" "3333-44-123"
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
     * Gets as extendedID
     *
     * BBIE
     *  Item Identification. Extended_ Identifier. Identifier
     *  An extended identifier for the item that identifies the item with specific properties, e.g., Item 123 = Chair / Item 123 Ext 45 = brown chair.
     *  0..1
     *  Item Identification
     *  Extended
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ExtendedID
     */
    public function getExtendedID()
    {
        return $this->extendedID;
    }

    /**
     * Sets a new extendedID
     *
     * BBIE
     *  Item Identification. Extended_ Identifier. Identifier
     *  An extended identifier for the item that identifies the item with specific properties, e.g., Item 123 = Chair / Item 123 Ext 45 = brown chair.
     *  0..1
     *  Item Identification
     *  Extended
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ExtendedID $extendedID
     * @return self
     */
    public function setExtendedID(\NOKA\PHPUBL\UBL\Common\BasicComponents\ExtendedID $extendedID)
    {
        $this->extendedID = $extendedID;
        return $this;
    }

    /**
     * Adds as physicalAttribute
     *
     * ASBIE
     *  Item Identification. Physical Attribute
     *  An association to Physical Attribute.
     *  0..n
     *  Item Identification
     *  Physical Attribute
     *  Physical Attribute
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\PhysicalAttribute $physicalAttribute
     */
    public function addToPhysicalAttribute(\NOKA\PHPUBL\UBL\Common\AggregateComponents\PhysicalAttribute $physicalAttribute)
    {
        $this->physicalAttribute[] = $physicalAttribute;
        return $this;
    }

    /**
     * isset physicalAttribute
     *
     * ASBIE
     *  Item Identification. Physical Attribute
     *  An association to Physical Attribute.
     *  0..n
     *  Item Identification
     *  Physical Attribute
     *  Physical Attribute
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPhysicalAttribute($index)
    {
        return isset($this->physicalAttribute[$index]);
    }

    /**
     * unset physicalAttribute
     *
     * ASBIE
     *  Item Identification. Physical Attribute
     *  An association to Physical Attribute.
     *  0..n
     *  Item Identification
     *  Physical Attribute
     *  Physical Attribute
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPhysicalAttribute($index)
    {
        unset($this->physicalAttribute[$index]);
    }

    /**
     * Gets as physicalAttribute
     *
     * ASBIE
     *  Item Identification. Physical Attribute
     *  An association to Physical Attribute.
     *  0..n
     *  Item Identification
     *  Physical Attribute
     *  Physical Attribute
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\PhysicalAttribute[]
     */
    public function getPhysicalAttribute()
    {
        return $this->physicalAttribute;
    }

    /**
     * Sets a new physicalAttribute
     *
     * ASBIE
     *  Item Identification. Physical Attribute
     *  An association to Physical Attribute.
     *  0..n
     *  Item Identification
     *  Physical Attribute
     *  Physical Attribute
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\PhysicalAttribute[] $physicalAttribute
     * @return self
     */
    public function setPhysicalAttribute(array $physicalAttribute)
    {
        $this->physicalAttribute = $physicalAttribute;
        return $this;
    }

    /**
     * Adds as measurementDimension
     *
     * ASBIE
     *  Item Identification. Measurement_ Dimension. Dimension
     *  An association to Measurement Dimension.
     *  0..n
     *  Item Identification
     *  Measurement
     *  Dimension
     *  Dimension
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\MeasurementDimension $measurementDimension
     */
    public function addToMeasurementDimension(\NOKA\PHPUBL\UBL\Common\AggregateComponents\MeasurementDimension $measurementDimension)
    {
        $this->measurementDimension[] = $measurementDimension;
        return $this;
    }

    /**
     * isset measurementDimension
     *
     * ASBIE
     *  Item Identification. Measurement_ Dimension. Dimension
     *  An association to Measurement Dimension.
     *  0..n
     *  Item Identification
     *  Measurement
     *  Dimension
     *  Dimension
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMeasurementDimension($index)
    {
        return isset($this->measurementDimension[$index]);
    }

    /**
     * unset measurementDimension
     *
     * ASBIE
     *  Item Identification. Measurement_ Dimension. Dimension
     *  An association to Measurement Dimension.
     *  0..n
     *  Item Identification
     *  Measurement
     *  Dimension
     *  Dimension
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMeasurementDimension($index)
    {
        unset($this->measurementDimension[$index]);
    }

    /**
     * Gets as measurementDimension
     *
     * ASBIE
     *  Item Identification. Measurement_ Dimension. Dimension
     *  An association to Measurement Dimension.
     *  0..n
     *  Item Identification
     *  Measurement
     *  Dimension
     *  Dimension
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\MeasurementDimension[]
     */
    public function getMeasurementDimension()
    {
        return $this->measurementDimension;
    }

    /**
     * Sets a new measurementDimension
     *
     * ASBIE
     *  Item Identification. Measurement_ Dimension. Dimension
     *  An association to Measurement Dimension.
     *  0..n
     *  Item Identification
     *  Measurement
     *  Dimension
     *  Dimension
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\MeasurementDimension[] $measurementDimension
     * @return self
     */
    public function setMeasurementDimension(array $measurementDimension)
    {
        $this->measurementDimension = $measurementDimension;
        return $this;
    }

    /**
     * Gets as issuerParty
     *
     * ASBIE
     *  Item Identification. Issuer_ Party. Party
     *  An association to Issuer Party i.e. the Party that issued the Item Identification.
     *  0..1
     *  Item Identification
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
     *  Item Identification. Issuer_ Party. Party
     *  An association to Issuer Party i.e. the Party that issued the Item Identification.
     *  0..1
     *  Item Identification
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


}

