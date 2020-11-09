<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing CatalogueItemSpecificationUpdateLineType
 *
 * ABIE
 *  Catalogue Item Specification Update Line. Details
 *  Details of Catalogue Line Item Specification.
 *  Catalogue Item Specification Update Line
 * XSD Type: CatalogueItemSpecificationUpdateLineType
 */
class CatalogueItemSpecificationUpdateLineType
{

    /**
     * BBIE
     *  Catalogue Item Specification Update Line. Identifier
     *  A unique instance identifier for the line in this Catalogue document.
     *  1
     *  Catalogue Item Specification Update Line
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
     *  Catalogue Item Specification Update Line. Contractor_ Customer Party. Customer Party
     *  The Customer Party responsible for the contract to which the Catalogue relates.
     *  0..1
     *  Catalogue Item Specification Update Line
     *  Contractor
     *  Customer Party
     *  Customer Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ContractorCustomerParty $contractorCustomerParty
     */
    private $contractorCustomerParty = null;

    /**
     * ASBIE
     *  Catalogue Item Specification Update Line. Seller_ Supplier Party. Supplier Party
     *  An association to the Seller of the item.
     *  0..1
     *  Catalogue Item Specification Update Line
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\SellerSupplierParty $sellerSupplierParty
     */
    private $sellerSupplierParty = null;

    /**
     * ASBIE
     *  Catalogue Item Specification Update Line. Item
     *  An association to Item itself.
     *  1
     *  Catalogue Item Specification Update Line
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
     *  Catalogue Item Specification Update Line. Identifier
     *  A unique instance identifier for the line in this Catalogue document.
     *  1
     *  Catalogue Item Specification Update Line
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
     *  Catalogue Item Specification Update Line. Identifier
     *  A unique instance identifier for the line in this Catalogue document.
     *  1
     *  Catalogue Item Specification Update Line
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
     *  Catalogue Item Specification Update Line. Contractor_ Customer Party. Customer Party
     *  The Customer Party responsible for the contract to which the Catalogue relates.
     *  0..1
     *  Catalogue Item Specification Update Line
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
     *  Catalogue Item Specification Update Line. Contractor_ Customer Party. Customer Party
     *  The Customer Party responsible for the contract to which the Catalogue relates.
     *  0..1
     *  Catalogue Item Specification Update Line
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
     *  Catalogue Item Specification Update Line. Seller_ Supplier Party. Supplier Party
     *  An association to the Seller of the item.
     *  0..1
     *  Catalogue Item Specification Update Line
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
     *  Catalogue Item Specification Update Line. Seller_ Supplier Party. Supplier Party
     *  An association to the Seller of the item.
     *  0..1
     *  Catalogue Item Specification Update Line
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
     * Gets as item
     *
     * ASBIE
     *  Catalogue Item Specification Update Line. Item
     *  An association to Item itself.
     *  1
     *  Catalogue Item Specification Update Line
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
     *  Catalogue Item Specification Update Line. Item
     *  An association to Item itself.
     *  1
     *  Catalogue Item Specification Update Line
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

