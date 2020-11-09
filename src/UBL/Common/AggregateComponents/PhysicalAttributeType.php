<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing PhysicalAttributeType
 *
 * ABIE
 *  Physical Attribute. Details
 *  Information about physical attributes.
 *  Physical Attribute
 * XSD Type: PhysicalAttributeType
 */
class PhysicalAttributeType
{

    /**
     * BBIE
     *  Physical Attribute. Attribute Identifier. Identifier
     *  Identifies the physical attribute.
     *  1
     *  Physical Attribute
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *  "colour" "style"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AttributeID $attributeID
     */
    private $attributeID = null;

    /**
     * BBIE
     *  Physical Attribute. Position Code. Code
     *  The position of the physical attribute, expressed as a code.
     *  0..1
     *  Physical Attribute
     *  Position Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\PositionCode $positionCode
     */
    private $positionCode = null;

    /**
     * BBIE
     *  Physical Attribute. Description Code. Code
     *  The description of the physical attribute, expressed as a code.
     *  0..1
     *  Physical Attribute
     *  Description Code
     *  Code
     *  Code. Type
     *  "XXL","Small"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\DescriptionCode $descriptionCode
     */
    private $descriptionCode = null;

    /**
     * BBIE
     *  Physical Attribute. Description. Text
     *  The description of the physical attribute, expressed as text.
     *  0..n
     *  Physical Attribute
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * Gets as attributeID
     *
     * BBIE
     *  Physical Attribute. Attribute Identifier. Identifier
     *  Identifies the physical attribute.
     *  1
     *  Physical Attribute
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *  "colour" "style"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\AttributeID
     */
    public function getAttributeID()
    {
        return $this->attributeID;
    }

    /**
     * Sets a new attributeID
     *
     * BBIE
     *  Physical Attribute. Attribute Identifier. Identifier
     *  Identifies the physical attribute.
     *  1
     *  Physical Attribute
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *  "colour" "style"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\AttributeID $attributeID
     * @return self
     */
    public function setAttributeID(\NOKA\PHPUBL\UBL\Common\BasicComponents\AttributeID $attributeID)
    {
        $this->attributeID = $attributeID;
        return $this;
    }

    /**
     * Gets as positionCode
     *
     * BBIE
     *  Physical Attribute. Position Code. Code
     *  The position of the physical attribute, expressed as a code.
     *  0..1
     *  Physical Attribute
     *  Position Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\PositionCode
     */
    public function getPositionCode()
    {
        return $this->positionCode;
    }

    /**
     * Sets a new positionCode
     *
     * BBIE
     *  Physical Attribute. Position Code. Code
     *  The position of the physical attribute, expressed as a code.
     *  0..1
     *  Physical Attribute
     *  Position Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\PositionCode $positionCode
     * @return self
     */
    public function setPositionCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\PositionCode $positionCode)
    {
        $this->positionCode = $positionCode;
        return $this;
    }

    /**
     * Gets as descriptionCode
     *
     * BBIE
     *  Physical Attribute. Description Code. Code
     *  The description of the physical attribute, expressed as a code.
     *  0..1
     *  Physical Attribute
     *  Description Code
     *  Code
     *  Code. Type
     *  "XXL","Small"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\DescriptionCode
     */
    public function getDescriptionCode()
    {
        return $this->descriptionCode;
    }

    /**
     * Sets a new descriptionCode
     *
     * BBIE
     *  Physical Attribute. Description Code. Code
     *  The description of the physical attribute, expressed as a code.
     *  0..1
     *  Physical Attribute
     *  Description Code
     *  Code
     *  Code. Type
     *  "XXL","Small"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\DescriptionCode $descriptionCode
     * @return self
     */
    public function setDescriptionCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\DescriptionCode $descriptionCode)
    {
        $this->descriptionCode = $descriptionCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Physical Attribute. Description. Text
     *  The description of the physical attribute, expressed as text.
     *  0..n
     *  Physical Attribute
     *  Description
     *  Text
     *  Text. Type
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
     *  Physical Attribute. Description. Text
     *  The description of the physical attribute, expressed as text.
     *  0..n
     *  Physical Attribute
     *  Description
     *  Text
     *  Text. Type
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
     *  Physical Attribute. Description. Text
     *  The description of the physical attribute, expressed as text.
     *  0..n
     *  Physical Attribute
     *  Description
     *  Text
     *  Text. Type
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
     *  Physical Attribute. Description. Text
     *  The description of the physical attribute, expressed as text.
     *  0..n
     *  Physical Attribute
     *  Description
     *  Text
     *  Text. Type
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
     *  Physical Attribute. Description. Text
     *  The description of the physical attribute, expressed as text.
     *  0..n
     *  Physical Attribute
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Description[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }


}

