<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing CustomerPartyType
 *
 * ABIE
 *  Customer Party. Details
 *  Information about the Customer Party.
 *  Customer Party
 * XSD Type: CustomerPartyType
 */
class CustomerPartyType
{

    /**
     * BBIE
     *  Customer Party. Customer Assigned_ Account Identifier. Identifier
     *  An identifier for the Customer's account, assigned by the Customer itself.
     *  0..1
     *  Customer Party
     *  Customer Assigned
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\CustomerAssignedAccountID $customerAssignedAccountID
     */
    private $customerAssignedAccountID = null;

    /**
     * BBIE
     *  Customer Party. Supplier Assigned_ Account Identifier. Identifier
     *  An identifier for the Customer's account, assigned by the Supplier.
     *  0..1
     *  Customer Party
     *  Supplier Assigned
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\SupplierAssignedAccountID $supplierAssignedAccountID
     */
    private $supplierAssignedAccountID = null;

    /**
     * BBIE
     *  Customer Party. Additional_ Account Identifier. Identifier
     *  An identifier for the Customer's account, assigned by a third party.
     *  0..n
     *  Customer Party
     *  Additional
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AdditionalAccountID[] $additionalAccountID
     */
    private $additionalAccountID = [
        
    ];

    /**
     * ASBIE
     *  Customer Party. Party
     *  An association to Party.
     *  0..1
     *  Customer Party
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Party $party
     */
    private $party = null;

    /**
     * ASBIE
     *  Customer Party. Delivery_ Contact. Contact
     *  An association to Delivery Contact.
     *  0..1
     *  Customer Party
     *  Delivery
     *  Contact
     *  Contact
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryContact $deliveryContact
     */
    private $deliveryContact = null;

    /**
     * ASBIE
     *  Customer Party. Accounting_ Contact. Contact
     *  An association to Accounting Contact (Customer).
     *  0..1
     *  Customer Party
     *  Accounting
     *  Contact
     *  Contact
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AccountingContact $accountingContact
     */
    private $accountingContact = null;

    /**
     * ASBIE
     *  Customer Party. Buyer_ Contact. Contact
     *  An association to Buyer Contact.
     *  0..1
     *  Customer Party
     *  Buyer
     *  Contact
     *  Contact
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\BuyerContact $buyerContact
     */
    private $buyerContact = null;

    /**
     * Gets as customerAssignedAccountID
     *
     * BBIE
     *  Customer Party. Customer Assigned_ Account Identifier. Identifier
     *  An identifier for the Customer's account, assigned by the Customer itself.
     *  0..1
     *  Customer Party
     *  Customer Assigned
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\CustomerAssignedAccountID
     */
    public function getCustomerAssignedAccountID()
    {
        return $this->customerAssignedAccountID;
    }

    /**
     * Sets a new customerAssignedAccountID
     *
     * BBIE
     *  Customer Party. Customer Assigned_ Account Identifier. Identifier
     *  An identifier for the Customer's account, assigned by the Customer itself.
     *  0..1
     *  Customer Party
     *  Customer Assigned
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\CustomerAssignedAccountID $customerAssignedAccountID
     * @return self
     */
    public function setCustomerAssignedAccountID(\NOKA\PHPUBL\UBL\Common\BasicComponents\CustomerAssignedAccountID $customerAssignedAccountID)
    {
        $this->customerAssignedAccountID = $customerAssignedAccountID;
        return $this;
    }

    /**
     * Gets as supplierAssignedAccountID
     *
     * BBIE
     *  Customer Party. Supplier Assigned_ Account Identifier. Identifier
     *  An identifier for the Customer's account, assigned by the Supplier.
     *  0..1
     *  Customer Party
     *  Supplier Assigned
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\SupplierAssignedAccountID
     */
    public function getSupplierAssignedAccountID()
    {
        return $this->supplierAssignedAccountID;
    }

    /**
     * Sets a new supplierAssignedAccountID
     *
     * BBIE
     *  Customer Party. Supplier Assigned_ Account Identifier. Identifier
     *  An identifier for the Customer's account, assigned by the Supplier.
     *  0..1
     *  Customer Party
     *  Supplier Assigned
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\SupplierAssignedAccountID $supplierAssignedAccountID
     * @return self
     */
    public function setSupplierAssignedAccountID(\NOKA\PHPUBL\UBL\Common\BasicComponents\SupplierAssignedAccountID $supplierAssignedAccountID)
    {
        $this->supplierAssignedAccountID = $supplierAssignedAccountID;
        return $this;
    }

    /**
     * Adds as additionalAccountID
     *
     * BBIE
     *  Customer Party. Additional_ Account Identifier. Identifier
     *  An identifier for the Customer's account, assigned by a third party.
     *  0..n
     *  Customer Party
     *  Additional
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\AdditionalAccountID $additionalAccountID
     */
    public function addToAdditionalAccountID(\NOKA\PHPUBL\UBL\Common\BasicComponents\AdditionalAccountID $additionalAccountID)
    {
        $this->additionalAccountID[] = $additionalAccountID;
        return $this;
    }

    /**
     * isset additionalAccountID
     *
     * BBIE
     *  Customer Party. Additional_ Account Identifier. Identifier
     *  An identifier for the Customer's account, assigned by a third party.
     *  0..n
     *  Customer Party
     *  Additional
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalAccountID($index)
    {
        return isset($this->additionalAccountID[$index]);
    }

    /**
     * unset additionalAccountID
     *
     * BBIE
     *  Customer Party. Additional_ Account Identifier. Identifier
     *  An identifier for the Customer's account, assigned by a third party.
     *  0..n
     *  Customer Party
     *  Additional
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalAccountID($index)
    {
        unset($this->additionalAccountID[$index]);
    }

    /**
     * Gets as additionalAccountID
     *
     * BBIE
     *  Customer Party. Additional_ Account Identifier. Identifier
     *  An identifier for the Customer's account, assigned by a third party.
     *  0..n
     *  Customer Party
     *  Additional
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\AdditionalAccountID[]
     */
    public function getAdditionalAccountID()
    {
        return $this->additionalAccountID;
    }

    /**
     * Sets a new additionalAccountID
     *
     * BBIE
     *  Customer Party. Additional_ Account Identifier. Identifier
     *  An identifier for the Customer's account, assigned by a third party.
     *  0..n
     *  Customer Party
     *  Additional
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\AdditionalAccountID[] $additionalAccountID
     * @return self
     */
    public function setAdditionalAccountID(array $additionalAccountID)
    {
        $this->additionalAccountID = $additionalAccountID;
        return $this;
    }

    /**
     * Gets as party
     *
     * ASBIE
     *  Customer Party. Party
     *  An association to Party.
     *  0..1
     *  Customer Party
     *  Party
     *  Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\Party
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Sets a new party
     *
     * ASBIE
     *  Customer Party. Party
     *  An association to Party.
     *  0..1
     *  Customer Party
     *  Party
     *  Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Party $party
     * @return self
     */
    public function setParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\Party $party)
    {
        $this->party = $party;
        return $this;
    }

    /**
     * Gets as deliveryContact
     *
     * ASBIE
     *  Customer Party. Delivery_ Contact. Contact
     *  An association to Delivery Contact.
     *  0..1
     *  Customer Party
     *  Delivery
     *  Contact
     *  Contact
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryContact
     */
    public function getDeliveryContact()
    {
        return $this->deliveryContact;
    }

    /**
     * Sets a new deliveryContact
     *
     * ASBIE
     *  Customer Party. Delivery_ Contact. Contact
     *  An association to Delivery Contact.
     *  0..1
     *  Customer Party
     *  Delivery
     *  Contact
     *  Contact
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryContact $deliveryContact
     * @return self
     */
    public function setDeliveryContact(\NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryContact $deliveryContact)
    {
        $this->deliveryContact = $deliveryContact;
        return $this;
    }

    /**
     * Gets as accountingContact
     *
     * ASBIE
     *  Customer Party. Accounting_ Contact. Contact
     *  An association to Accounting Contact (Customer).
     *  0..1
     *  Customer Party
     *  Accounting
     *  Contact
     *  Contact
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\AccountingContact
     */
    public function getAccountingContact()
    {
        return $this->accountingContact;
    }

    /**
     * Sets a new accountingContact
     *
     * ASBIE
     *  Customer Party. Accounting_ Contact. Contact
     *  An association to Accounting Contact (Customer).
     *  0..1
     *  Customer Party
     *  Accounting
     *  Contact
     *  Contact
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\AccountingContact $accountingContact
     * @return self
     */
    public function setAccountingContact(\NOKA\PHPUBL\UBL\Common\AggregateComponents\AccountingContact $accountingContact)
    {
        $this->accountingContact = $accountingContact;
        return $this;
    }

    /**
     * Gets as buyerContact
     *
     * ASBIE
     *  Customer Party. Buyer_ Contact. Contact
     *  An association to Buyer Contact.
     *  0..1
     *  Customer Party
     *  Buyer
     *  Contact
     *  Contact
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\BuyerContact
     */
    public function getBuyerContact()
    {
        return $this->buyerContact;
    }

    /**
     * Sets a new buyerContact
     *
     * ASBIE
     *  Customer Party. Buyer_ Contact. Contact
     *  An association to Buyer Contact.
     *  0..1
     *  Customer Party
     *  Buyer
     *  Contact
     *  Contact
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\BuyerContact $buyerContact
     * @return self
     */
    public function setBuyerContact(\NOKA\PHPUBL\UBL\Common\AggregateComponents\BuyerContact $buyerContact)
    {
        $this->buyerContact = $buyerContact;
        return $this;
    }


}

