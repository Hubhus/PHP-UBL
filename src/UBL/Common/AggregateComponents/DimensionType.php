<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing DimensionType
 *
 * ABIE
 *  Dimension. Details
 *  Information about a measurable dimension of an item.
 *  Dimension
 * XSD Type: DimensionType
 */
class DimensionType
{

    /**
     * BBIE
     *  Dimension. Attribute Identifier. Identifier
     *  An identifier for the attribute to which the measure applies.
     *  1
     *  Dimension
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AttributeID $attributeID
     */
    private $attributeID = null;

    /**
     * BBIE
     *  Dimension. Measure
     *  The measurement value.
     *  0..1
     *  Dimension
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Measure $measure
     */
    private $measure = null;

    /**
     * BBIE
     *  Dimension. Description. Text
     *  A description of the attribute or measurement of the attribute.
     *  0..n
     *  Dimension
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Dimension. Minimum_ Measure. Measure
     *  The minimum value in a range of measurement.
     *  0..1
     *  Dimension
     *  Minimum
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\MinimumMeasure $minimumMeasure
     */
    private $minimumMeasure = null;

    /**
     * BBIE
     *  Dimension. Maximum_ Measure. Measure
     *  The maximum value in a range of measurement.
     *  0..1
     *  Dimension
     *  Maximum
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\MaximumMeasure $maximumMeasure
     */
    private $maximumMeasure = null;

    /**
     * Gets as attributeID
     *
     * BBIE
     *  Dimension. Attribute Identifier. Identifier
     *  An identifier for the attribute to which the measure applies.
     *  1
     *  Dimension
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
     *  Dimension. Attribute Identifier. Identifier
     *  An identifier for the attribute to which the measure applies.
     *  1
     *  Dimension
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
     *  Dimension. Measure
     *  The measurement value.
     *  0..1
     *  Dimension
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
     *  Dimension. Measure
     *  The measurement value.
     *  0..1
     *  Dimension
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
     *  Dimension. Description. Text
     *  A description of the attribute or measurement of the attribute.
     *  0..n
     *  Dimension
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
     *  Dimension. Description. Text
     *  A description of the attribute or measurement of the attribute.
     *  0..n
     *  Dimension
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
     *  Dimension. Description. Text
     *  A description of the attribute or measurement of the attribute.
     *  0..n
     *  Dimension
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
     *  Dimension. Description. Text
     *  A description of the attribute or measurement of the attribute.
     *  0..n
     *  Dimension
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
     *  Dimension. Description. Text
     *  A description of the attribute or measurement of the attribute.
     *  0..n
     *  Dimension
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

    /**
     * Gets as minimumMeasure
     *
     * BBIE
     *  Dimension. Minimum_ Measure. Measure
     *  The minimum value in a range of measurement.
     *  0..1
     *  Dimension
     *  Minimum
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\MinimumMeasure
     */
    public function getMinimumMeasure()
    {
        return $this->minimumMeasure;
    }

    /**
     * Sets a new minimumMeasure
     *
     * BBIE
     *  Dimension. Minimum_ Measure. Measure
     *  The minimum value in a range of measurement.
     *  0..1
     *  Dimension
     *  Minimum
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\MinimumMeasure $minimumMeasure
     * @return self
     */
    public function setMinimumMeasure(\NOKA\PHPUBL\UBL\Common\BasicComponents\MinimumMeasure $minimumMeasure)
    {
        $this->minimumMeasure = $minimumMeasure;
        return $this;
    }

    /**
     * Gets as maximumMeasure
     *
     * BBIE
     *  Dimension. Maximum_ Measure. Measure
     *  The maximum value in a range of measurement.
     *  0..1
     *  Dimension
     *  Maximum
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\MaximumMeasure
     */
    public function getMaximumMeasure()
    {
        return $this->maximumMeasure;
    }

    /**
     * Sets a new maximumMeasure
     *
     * BBIE
     *  Dimension. Maximum_ Measure. Measure
     *  The maximum value in a range of measurement.
     *  0..1
     *  Dimension
     *  Maximum
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\MaximumMeasure $maximumMeasure
     * @return self
     */
    public function setMaximumMeasure(\NOKA\PHPUBL\UBL\Common\BasicComponents\MaximumMeasure $maximumMeasure)
    {
        $this->maximumMeasure = $maximumMeasure;
        return $this;
    }


}

