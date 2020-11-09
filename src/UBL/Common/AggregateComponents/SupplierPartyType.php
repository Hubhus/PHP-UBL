<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing SupplierPartyType
 *
 * ABIE
 *  Supplier Party. Details
 *  Information about the Supplier Party.
 *  Supplier Party
 * XSD Type: SupplierPartyType
 */
class SupplierPartyType
{

    /**
     * BBIE
     *  Supplier Party. Customer Assigned_ Account Identifier. Identifier
     *  The customer's internal identifier for the supplier.
     *  0..1
     *  Supplier Party
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
     *  Supplier Party. Additional_ Account Identifier. Identifier
     *  The customer's internal identifier for the supplier.
     *  0..n
     *  Supplier Party
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
     * BBIE
     *  Supplier Party. Data Sending Capability. Text
     *  Capability to send invoice data via the purchase card provider (VISA/MasterCard/American Express).
     *  0..1
     *  Supplier Party
     *  Data Sending Capability
     *  Text
     *  Text. Type
     *  The customer's internal identifier for the supplier.
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\DataSendingCapability $dataSendingCapability
     */
    private $dataSendingCapability = null;

    /**
     * ASBIE
     *  Supplier Party. Party
     *  An association to Party.
     *  0..1
     *  Supplier Party
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Party $party
     */
    private $party = null;

    /**
     * ASBIE
     *  Supplier Party. Despatch_ Contact. Contact
     *  An association to Despatch Contact.
     *  0..1
     *  Supplier Party
     *  Despatch
     *  Contact
     *  Contact
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DespatchContact $despatchContact
     */
    private $despatchContact = null;

    /**
     * ASBIE
     *  Supplier Party. Accounting_ Contact. Contact
     *  An association to Supplier Accounting Contact.
     *  0..1
     *  Supplier Party
     *  Accounting
     *  Contact
     *  Contact
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AccountingContact $accountingContact
     */
    private $accountingContact = null;

    /**
     * ASBIE
     *  Supplier Party. Seller_ Contact. Contact
     *  An association to Seller.
     *  0..1
     *  Supplier Party
     *  Seller
     *  Contact
     *  Contact
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\SellerContact $sellerContact
     */
    private $sellerContact = null;

    /**
     * Gets as customerAssignedAccountID
     *
     * BBIE
     *  Supplier Party. Customer Assigned_ Account Identifier. Identifier
     *  The customer's internal identifier for the supplier.
     *  0..1
     *  Supplier Party
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
     *  Supplier Party. Customer Assigned_ Account Identifier. Identifier
     *  The customer's internal identifier for the supplier.
     *  0..1
     *  Supplier Party
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
     * Adds as additionalAccountID
     *
     * BBIE
     *  Supplier Party. Additional_ Account Identifier. Identifier
     *  The customer's internal identifier for the supplier.
     *  0..n
     *  Supplier Party
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
     *  Supplier Party. Additional_ Account Identifier. Identifier
     *  The customer's internal identifier for the supplier.
     *  0..n
     *  Supplier Party
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
     *  Supplier Party. Additional_ Account Identifier. Identifier
     *  The customer's internal identifier for the supplier.
     *  0..n
     *  Supplier Party
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
     *  Supplier Party. Additional_ Account Identifier. Identifier
     *  The customer's internal identifier for the supplier.
     *  0..n
     *  Supplier Party
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
     *  Supplier Party. Additional_ Account Identifier. Identifier
     *  The customer's internal identifier for the supplier.
     *  0..n
     *  Supplier Party
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
     * Gets as dataSendingCapability
     *
     * BBIE
     *  Supplier Party. Data Sending Capability. Text
     *  Capability to send invoice data via the purchase card provider (VISA/MasterCard/American Express).
     *  0..1
     *  Supplier Party
     *  Data Sending Capability
     *  Text
     *  Text. Type
     *  The customer's internal identifier for the supplier.
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\DataSendingCapability
     */
    public function getDataSendingCapability()
    {
        return $this->dataSendingCapability;
    }

    /**
     * Sets a new dataSendingCapability
     *
     * BBIE
     *  Supplier Party. Data Sending Capability. Text
     *  Capability to send invoice data via the purchase card provider (VISA/MasterCard/American Express).
     *  0..1
     *  Supplier Party
     *  Data Sending Capability
     *  Text
     *  Text. Type
     *  The customer's internal identifier for the supplier.
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\DataSendingCapability $dataSendingCapability
     * @return self
     */
    public function setDataSendingCapability(\NOKA\PHPUBL\UBL\Common\BasicComponents\DataSendingCapability $dataSendingCapability)
    {
        $this->dataSendingCapability = $dataSendingCapability;
        return $this;
    }

    /**
     * Gets as party
     *
     * ASBIE
     *  Supplier Party. Party
     *  An association to Party.
     *  0..1
     *  Supplier Party
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
     *  Supplier Party. Party
     *  An association to Party.
     *  0..1
     *  Supplier Party
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
     * Gets as despatchContact
     *
     * ASBIE
     *  Supplier Party. Despatch_ Contact. Contact
     *  An association to Despatch Contact.
     *  0..1
     *  Supplier Party
     *  Despatch
     *  Contact
     *  Contact
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\DespatchContact
     */
    public function getDespatchContact()
    {
        return $this->despatchContact;
    }

    /**
     * Sets a new despatchContact
     *
     * ASBIE
     *  Supplier Party. Despatch_ Contact. Contact
     *  An association to Despatch Contact.
     *  0..1
     *  Supplier Party
     *  Despatch
     *  Contact
     *  Contact
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DespatchContact $despatchContact
     * @return self
     */
    public function setDespatchContact(\NOKA\PHPUBL\UBL\Common\AggregateComponents\DespatchContact $despatchContact)
    {
        $this->despatchContact = $despatchContact;
        return $this;
    }

    /**
     * Gets as accountingContact
     *
     * ASBIE
     *  Supplier Party. Accounting_ Contact. Contact
     *  An association to Supplier Accounting Contact.
     *  0..1
     *  Supplier Party
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
     *  Supplier Party. Accounting_ Contact. Contact
     *  An association to Supplier Accounting Contact.
     *  0..1
     *  Supplier Party
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
     * Gets as sellerContact
     *
     * ASBIE
     *  Supplier Party. Seller_ Contact. Contact
     *  An association to Seller.
     *  0..1
     *  Supplier Party
     *  Seller
     *  Contact
     *  Contact
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\SellerContact
     */
    public function getSellerContact()
    {
        return $this->sellerContact;
    }

    /**
     * Sets a new sellerContact
     *
     * ASBIE
     *  Supplier Party. Seller_ Contact. Contact
     *  An association to Seller.
     *  0..1
     *  Supplier Party
     *  Seller
     *  Contact
     *  Contact
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\SellerContact $sellerContact
     * @return self
     */
    public function setSellerContact(\NOKA\PHPUBL\UBL\Common\AggregateComponents\SellerContact $sellerContact)
    {
        $this->sellerContact = $sellerContact;
        return $this;
    }


}

