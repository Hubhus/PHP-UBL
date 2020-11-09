<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing TemperatureType
 *
 * ABIE
 *  Temperature. Details
 *  Information about temperature.
 *  Temperature
 * XSD Type: TemperatureType
 */
class TemperatureType
{

    /**
     * BBIE
     *  Temperature. Attribute Identifier. Identifier
     *  An identifier for temperature.
     *  1
     *  Temperature
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AttributeID $attributeID
     */
    private $attributeID = null;

    /**
     * BBIE
     *  Temperature. Measure
     *  The temperature measurement value.
     *  1
     *  Temperature
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Measure $measure
     */
    private $measure = null;

    /**
     * BBIE
     *  Temperature. Description. Text
     *  A description of the temperature measurement.
     *  0..n
     *  Temperature
     *  Description
     *  Text
     *  Text. Type
     *  "at sea level"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * Gets as attributeID
     *
     * BBIE
     *  Temperature. Attribute Identifier. Identifier
     *  An identifier for temperature.
     *  1
     *  Temperature
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Temperature. Attribute Identifier. Identifier
     *  An identifier for temperature.
     *  1
     *  Temperature
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
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
     * Gets as measure
     *
     * BBIE
     *  Temperature. Measure
     *  The temperature measurement value.
     *  1
     *  Temperature
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Measure
     */
    public function getMeasure()
    {
        return $this->measure;
    }

    /**
     * Sets a new measure
     *
     * BBIE
     *  Temperature. Measure
     *  The temperature measurement value.
     *  1
     *  Temperature
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Measure $measure
     * @return self
     */
    public function setMeasure(\NOKA\PHPUBL\UBL\Common\BasicComponents\Measure $measure)
    {
        $this->measure = $measure;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Temperature. Description. Text
     *  A description of the temperature measurement.
     *  0..n
     *  Temperature
     *  Description
     *  Text
     *  Text. Type
     *  "at sea level"
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
     *  Temperature. Description. Text
     *  A description of the temperature measurement.
     *  0..n
     *  Temperature
     *  Description
     *  Text
     *  Text. Type
     *  "at sea level"
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
     *  Temperature. Description. Text
     *  A description of the temperature measurement.
     *  0..n
     *  Temperature
     *  Description
     *  Text
     *  Text. Type
     *  "at sea level"
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
     *  Temperature. Description. Text
     *  A description of the temperature measurement.
     *  0..n
     *  Temperature
     *  Description
     *  Text
     *  Text. Type
     *  "at sea level"
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
     *  Temperature. Description. Text
     *  A description of the temperature measurement.
     *  0..n
     *  Temperature
     *  Description
     *  Text
     *  Text. Type
     *  "at sea level"
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

