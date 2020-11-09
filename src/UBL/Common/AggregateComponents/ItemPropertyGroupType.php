<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing ItemPropertyGroupType
 *
 * ABIE
 *  Item Property Group. Details
 *  Information about sets of classifications (or groups) of Item Properties.
 *  Item Property Group
 * XSD Type: ItemPropertyGroupType
 */
class ItemPropertyGroupType
{

    /**
     * BBIE
     *  Item Property Group. Identifier
     *  An identifier for the Item Property Group.
     *  1
     *  Item Property Group
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "233-004"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Item Property Group. Name
     *  The name of the Item Property Group.
     *  0..1
     *  Item Property Group
     *  Name
     *  Name
     *  Name. Type
     *  "Electrical Specifications", "Dietary Content"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Name $name
     */
    private $name = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Item Property Group. Identifier
     *  An identifier for the Item Property Group.
     *  1
     *  Item Property Group
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "233-004"
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
     *  Item Property Group. Identifier
     *  An identifier for the Item Property Group.
     *  1
     *  Item Property Group
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "233-004"
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
     * Gets as name
     *
     * BBIE
     *  Item Property Group. Name
     *  The name of the Item Property Group.
     *  0..1
     *  Item Property Group
     *  Name
     *  Name
     *  Name. Type
     *  "Electrical Specifications", "Dietary Content"
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
     *  Item Property Group. Name
     *  The name of the Item Property Group.
     *  0..1
     *  Item Property Group
     *  Name
     *  Name
     *  Name. Type
     *  "Electrical Specifications", "Dietary Content"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Name $name
     * @return self
     */
    public function setName(\NOKA\PHPUBL\UBL\Common\BasicComponents\Name $name)
    {
        $this->name = $name;
        return $this;
    }


}

