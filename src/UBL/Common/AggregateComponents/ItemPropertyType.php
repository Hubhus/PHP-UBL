<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing ItemPropertyType
 *
 * ABIE
 *  Item Property. Details
 *  Information about specific Item Properties.
 *  Item Property
 * XSD Type: ItemPropertyType
 */
class ItemPropertyType
{

    /**
     * BBIE
     *  Item Property. Name
     *  The name of the Item Property.
     *  1
     *  Item Property
     *  Name
     *  Name
     *  Name. Type
     *  "Energy Rating", "Collar Size", "Fat Content"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Item Property. Value. Text
     *  The Item Property value.
     *  1
     *  Item Property
     *  Value
     *  Text
     *  Text. Type
     *  "100 watts", "15 European", "20% +/- 5%"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Value $value
     */
    private $value = null;

    /**
     * ASBIE
     *  Item Property. Usability_ Period. Period
     *  The period for which the Item Property is valid.
     *  0..1
     *  Item Property
     *  Usability
     *  Period
     *  Period
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\UsabilityPeriod $usabilityPeriod
     */
    private $usabilityPeriod = null;

    /**
     * ASBIE
     *  Item Property. Item Property Group
     *  An association to Item Property Group.
     *  0..n
     *  Item Property
     *  Item Property Group
     *  Item Property Group
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ItemPropertyGroup[] $itemPropertyGroup
     */
    private $itemPropertyGroup = [
        
    ];

    /**
     * Gets as name
     *
     * BBIE
     *  Item Property. Name
     *  The name of the Item Property.
     *  1
     *  Item Property
     *  Name
     *  Name
     *  Name. Type
     *  "Energy Rating", "Collar Size", "Fat Content"
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
     *  Item Property. Name
     *  The name of the Item Property.
     *  1
     *  Item Property
     *  Name
     *  Name
     *  Name. Type
     *  "Energy Rating", "Collar Size", "Fat Content"
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
     * Gets as value
     *
     * BBIE
     *  Item Property. Value. Text
     *  The Item Property value.
     *  1
     *  Item Property
     *  Value
     *  Text
     *  Text. Type
     *  "100 watts", "15 European", "20% +/- 5%"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * BBIE
     *  Item Property. Value. Text
     *  The Item Property value.
     *  1
     *  Item Property
     *  Value
     *  Text
     *  Text. Type
     *  "100 watts", "15 European", "20% +/- 5%"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Value $value
     * @return self
     */
    public function setValue(\NOKA\PHPUBL\UBL\Common\BasicComponents\Value $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as usabilityPeriod
     *
     * ASBIE
     *  Item Property. Usability_ Period. Period
     *  The period for which the Item Property is valid.
     *  0..1
     *  Item Property
     *  Usability
     *  Period
     *  Period
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\UsabilityPeriod
     */
    public function getUsabilityPeriod()
    {
        return $this->usabilityPeriod;
    }

    /**
     * Sets a new usabilityPeriod
     *
     * ASBIE
     *  Item Property. Usability_ Period. Period
     *  The period for which the Item Property is valid.
     *  0..1
     *  Item Property
     *  Usability
     *  Period
     *  Period
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\UsabilityPeriod $usabilityPeriod
     * @return self
     */
    public function setUsabilityPeriod(\NOKA\PHPUBL\UBL\Common\AggregateComponents\UsabilityPeriod $usabilityPeriod)
    {
        $this->usabilityPeriod = $usabilityPeriod;
        return $this;
    }

    /**
     * Adds as itemPropertyGroup
     *
     * ASBIE
     *  Item Property. Item Property Group
     *  An association to Item Property Group.
     *  0..n
     *  Item Property
     *  Item Property Group
     *  Item Property Group
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ItemPropertyGroup $itemPropertyGroup
     */
    public function addToItemPropertyGroup(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ItemPropertyGroup $itemPropertyGroup)
    {
        $this->itemPropertyGroup[] = $itemPropertyGroup;
        return $this;
    }

    /**
     * isset itemPropertyGroup
     *
     * ASBIE
     *  Item Property. Item Property Group
     *  An association to Item Property Group.
     *  0..n
     *  Item Property
     *  Item Property Group
     *  Item Property Group
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemPropertyGroup($index)
    {
        return isset($this->itemPropertyGroup[$index]);
    }

    /**
     * unset itemPropertyGroup
     *
     * ASBIE
     *  Item Property. Item Property Group
     *  An association to Item Property Group.
     *  0..n
     *  Item Property
     *  Item Property Group
     *  Item Property Group
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemPropertyGroup($index)
    {
        unset($this->itemPropertyGroup[$index]);
    }

    /**
     * Gets as itemPropertyGroup
     *
     * ASBIE
     *  Item Property. Item Property Group
     *  An association to Item Property Group.
     *  0..n
     *  Item Property
     *  Item Property Group
     *  Item Property Group
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ItemPropertyGroup[]
     */
    public function getItemPropertyGroup()
    {
        return $this->itemPropertyGroup;
    }

    /**
     * Sets a new itemPropertyGroup
     *
     * ASBIE
     *  Item Property. Item Property Group
     *  An association to Item Property Group.
     *  0..n
     *  Item Property
     *  Item Property Group
     *  Item Property Group
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ItemPropertyGroup[] $itemPropertyGroup
     * @return self
     */
    public function setItemPropertyGroup(array $itemPropertyGroup)
    {
        $this->itemPropertyGroup = $itemPropertyGroup;
        return $this;
    }


}

