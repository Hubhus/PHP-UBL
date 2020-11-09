<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing CataloguePricingUpdateLineType
 *
 * ABIE
 *  Catalogue Pricing Update Line. Details
 *  Details of Catalogue Line Pricing.
 *  Catalogue Pricing Update Line
 * XSD Type: CataloguePricingUpdateLineType
 */
class CataloguePricingUpdateLineType
{

    /**
     * BBIE
     *  Catalogue Pricing Update Line. Identifier
     *  A unique instance identifier for the line in this Catalogue document.
     *  1
     *  Catalogue Pricing Update Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "1"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * ASBIE
     *  Catalogue Pricing Update Line. Contractor_ Customer Party. Customer Party
     *  The Customer Party responsible for the contract to which the Catalogue relates.
     *  0..1
     *  Catalogue Pricing Update Line
     *  Contractor
     *  Customer Party
     *  Customer Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ContractorCustomerParty $contractorCustomerParty
     */
    private $contractorCustomerParty = null;

    /**
     * ASBIE
     *  Catalogue Pricing Update Line. Seller_ Supplier Party. Supplier Party
     *  An association to the Seller of the Item.
     *  0..1
     *  Catalogue Pricing Update Line
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\SellerSupplierParty $sellerSupplierParty
     */
    private $sellerSupplierParty = null;

    /**
     * ASBIE
     *  Catalogue Pricing Update Line. Required_ Item Location Quantity. Item Location Quantity
     *  An association to the description of properties related to locations and quantities of the item.
     *  0..n
     *  Catalogue Pricing Update Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\RequiredItemLocationQuantity[] $requiredItemLocationQuantity
     */
    private $requiredItemLocationQuantity = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Catalogue Pricing Update Line. Identifier
     *  A unique instance identifier for the line in this Catalogue document.
     *  1
     *  Catalogue Pricing Update Line
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
     *  Catalogue Pricing Update Line. Identifier
     *  A unique instance identifier for the line in this Catalogue document.
     *  1
     *  Catalogue Pricing Update Line
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
     * Gets as contractorCustomerParty
     *
     * ASBIE
     *  Catalogue Pricing Update Line. Contractor_ Customer Party. Customer Party
     *  The Customer Party responsible for the contract to which the Catalogue relates.
     *  0..1
     *  Catalogue Pricing Update Line
     *  Contractor
     *  Customer Party
     *  Customer Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ContractorCustomerParty
     */
    public function getContractorCustomerParty()
    {
        return $this->contractorCustomerParty;
    }

    /**
     * Sets a new contractorCustomerParty
     *
     * ASBIE
     *  Catalogue Pricing Update Line. Contractor_ Customer Party. Customer Party
     *  The Customer Party responsible for the contract to which the Catalogue relates.
     *  0..1
     *  Catalogue Pricing Update Line
     *  Contractor
     *  Customer Party
     *  Customer Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ContractorCustomerParty $contractorCustomerParty
     * @return self
     */
    public function setContractorCustomerParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ContractorCustomerParty $contractorCustomerParty)
    {
        $this->contractorCustomerParty = $contractorCustomerParty;
        return $this;
    }

    /**
     * Gets as sellerSupplierParty
     *
     * ASBIE
     *  Catalogue Pricing Update Line. Seller_ Supplier Party. Supplier Party
     *  An association to the Seller of the Item.
     *  0..1
     *  Catalogue Pricing Update Line
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\SellerSupplierParty
     */
    public function getSellerSupplierParty()
    {
        return $this->sellerSupplierParty;
    }

    /**
     * Sets a new sellerSupplierParty
     *
     * ASBIE
     *  Catalogue Pricing Update Line. Seller_ Supplier Party. Supplier Party
     *  An association to the Seller of the Item.
     *  0..1
     *  Catalogue Pricing Update Line
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\SellerSupplierParty $sellerSupplierParty
     * @return self
     */
    public function setSellerSupplierParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\SellerSupplierParty $sellerSupplierParty)
    {
        $this->sellerSupplierParty = $sellerSupplierParty;
        return $this;
    }

    /**
     * Adds as requiredItemLocationQuantity
     *
     * ASBIE
     *  Catalogue Pricing Update Line. Required_ Item Location Quantity. Item Location Quantity
     *  An association to the description of properties related to locations and quantities of the item.
     *  0..n
     *  Catalogue Pricing Update Line
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
     *  Catalogue Pricing Update Line. Required_ Item Location Quantity. Item Location Quantity
     *  An association to the description of properties related to locations and quantities of the item.
     *  0..n
     *  Catalogue Pricing Update Line
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
     *  Catalogue Pricing Update Line. Required_ Item Location Quantity. Item Location Quantity
     *  An association to the description of properties related to locations and quantities of the item.
     *  0..n
     *  Catalogue Pricing Update Line
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
     *  Catalogue Pricing Update Line. Required_ Item Location Quantity. Item Location Quantity
     *  An association to the description of properties related to locations and quantities of the item.
     *  0..n
     *  Catalogue Pricing Update Line
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
     *  Catalogue Pricing Update Line. Required_ Item Location Quantity. Item Location Quantity
     *  An association to the description of properties related to locations and quantities of the item.
     *  0..n
     *  Catalogue Pricing Update Line
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


}

