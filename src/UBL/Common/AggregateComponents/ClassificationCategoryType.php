<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing ClassificationCategoryType
 *
 * ABIE
 *  Classification Category. Details
 *  Information about a Classification Category; a subdivision of a Classification Scheme.
 *  Classification Category
 * XSD Type: ClassificationCategoryType
 */
class ClassificationCategoryType
{

    /**
     * BBIE
     *  Classification Category. Name
     *  The name of the Classification Category.
     *  0..1
     *  Classification Category
     *  Name
     *  Name
     *  Name. Type
     *  Code List Name
     *  "UNSPSC Class", "UNSPSC Segment", "UNSPSC Family"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Classification Category. Code Value. Text
     *  The Classification Category value.
     *  0..1
     *  Classification Category
     *  Code Value
     *  Text
     *  Text. Type
     *  Code Value
     *  3420001, 3273666, HSJJD-213
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\CodeValue $codeValue
     */
    private $codeValue = null;

    /**
     * BBIE
     *  Classification Category. Description. Text
     *  The description of the Classification Category.
     *  0..n
     *  Classification Category
     *  Description
     *  Text
     *  Text. Type
     *  Code Name
     *  "Electrical Goods", "Wooden Toys"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * ASBIE
     *  Classification Category. Categorizes_ Classification Category. Classification Category
     *  An association to subcategories within the Category.
     *  0..n
     *  Classification Category
     *  Categorizes
     *  Classification Category
     *  Classification Category
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\CategorizesClassificationCategory[] $categorizesClassificationCategory
     */
    private $categorizesClassificationCategory = [
        
    ];

    /**
     * Gets as name
     *
     * BBIE
     *  Classification Category. Name
     *  The name of the Classification Category.
     *  0..1
     *  Classification Category
     *  Name
     *  Name
     *  Name. Type
     *  Code List Name
     *  "UNSPSC Class", "UNSPSC Segment", "UNSPSC Family"
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
     *  Classification Category. Name
     *  The name of the Classification Category.
     *  0..1
     *  Classification Category
     *  Name
     *  Name
     *  Name. Type
     *  Code List Name
     *  "UNSPSC Class", "UNSPSC Segment", "UNSPSC Family"
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
     * Gets as codeValue
     *
     * BBIE
     *  Classification Category. Code Value. Text
     *  The Classification Category value.
     *  0..1
     *  Classification Category
     *  Code Value
     *  Text
     *  Text. Type
     *  Code Value
     *  3420001, 3273666, HSJJD-213
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\CodeValue
     */
    public function getCodeValue()
    {
        return $this->codeValue;
    }

    /**
     * Sets a new codeValue
     *
     * BBIE
     *  Classification Category. Code Value. Text
     *  The Classification Category value.
     *  0..1
     *  Classification Category
     *  Code Value
     *  Text
     *  Text. Type
     *  Code Value
     *  3420001, 3273666, HSJJD-213
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\CodeValue $codeValue
     * @return self
     */
    public function setCodeValue(\NOKA\PHPUBL\UBL\Common\BasicComponents\CodeValue $codeValue)
    {
        $this->codeValue = $codeValue;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Classification Category. Description. Text
     *  The description of the Classification Category.
     *  0..n
     *  Classification Category
     *  Description
     *  Text
     *  Text. Type
     *  Code Name
     *  "Electrical Goods", "Wooden Toys"
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
     *  Classification Category. Description. Text
     *  The description of the Classification Category.
     *  0..n
     *  Classification Category
     *  Description
     *  Text
     *  Text. Type
     *  Code Name
     *  "Electrical Goods", "Wooden Toys"
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
     *  Classification Category. Description. Text
     *  The description of the Classification Category.
     *  0..n
     *  Classification Category
     *  Description
     *  Text
     *  Text. Type
     *  Code Name
     *  "Electrical Goods", "Wooden Toys"
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
     *  Classification Category. Description. Text
     *  The description of the Classification Category.
     *  0..n
     *  Classification Category
     *  Description
     *  Text
     *  Text. Type
     *  Code Name
     *  "Electrical Goods", "Wooden Toys"
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
     *  Classification Category. Description. Text
     *  The description of the Classification Category.
     *  0..n
     *  Classification Category
     *  Description
     *  Text
     *  Text. Type
     *  Code Name
     *  "Electrical Goods", "Wooden Toys"
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
     * Adds as categorizesClassificationCategory
     *
     * ASBIE
     *  Classification Category. Categorizes_ Classification Category. Classification Category
     *  An association to subcategories within the Category.
     *  0..n
     *  Classification Category
     *  Categorizes
     *  Classification Category
     *  Classification Category
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\CategorizesClassificationCategory $categorizesClassificationCategory
     */
    public function addToCategorizesClassificationCategory(\NOKA\PHPUBL\UBL\Common\AggregateComponents\CategorizesClassificationCategory $categorizesClassificationCategory)
    {
        $this->categorizesClassificationCategory[] = $categorizesClassificationCategory;
        return $this;
    }

    /**
     * isset categorizesClassificationCategory
     *
     * ASBIE
     *  Classification Category. Categorizes_ Classification Category. Classification Category
     *  An association to subcategories within the Category.
     *  0..n
     *  Classification Category
     *  Categorizes
     *  Classification Category
     *  Classification Category
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategorizesClassificationCategory($index)
    {
        return isset($this->categorizesClassificationCategory[$index]);
    }

    /**
     * unset categorizesClassificationCategory
     *
     * ASBIE
     *  Classification Category. Categorizes_ Classification Category. Classification Category
     *  An association to subcategories within the Category.
     *  0..n
     *  Classification Category
     *  Categorizes
     *  Classification Category
     *  Classification Category
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategorizesClassificationCategory($index)
    {
        unset($this->categorizesClassificationCategory[$index]);
    }

    /**
     * Gets as categorizesClassificationCategory
     *
     * ASBIE
     *  Classification Category. Categorizes_ Classification Category. Classification Category
     *  An association to subcategories within the Category.
     *  0..n
     *  Classification Category
     *  Categorizes
     *  Classification Category
     *  Classification Category
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\CategorizesClassificationCategory[]
     */
    public function getCategorizesClassificationCategory()
    {
        return $this->categorizesClassificationCategory;
    }

    /**
     * Sets a new categorizesClassificationCategory
     *
     * ASBIE
     *  Classification Category. Categorizes_ Classification Category. Classification Category
     *  An association to subcategories within the Category.
     *  0..n
     *  Classification Category
     *  Categorizes
     *  Classification Category
     *  Classification Category
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\CategorizesClassificationCategory[] $categorizesClassificationCategory
     * @return self
     */
    public function setCategorizesClassificationCategory(array $categorizesClassificationCategory)
    {
        $this->categorizesClassificationCategory = $categorizesClassificationCategory;
        return $this;
    }


}

