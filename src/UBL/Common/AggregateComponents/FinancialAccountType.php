<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing FinancialAccountType
 *
 * ABIE
 *  Financial Account. Details
 *  Information about a Financial Account.
 *  Financial Account
 * XSD Type: FinancialAccountType
 */
class FinancialAccountType
{

    /**
     * BBIE
     *  Financial Account. Identifier
     *  The identifier for the Financial Account; the Bank Account Number.
     *  0..1
     *  Financial Account
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  SWIFT(BIC) and IBAN are defined in ISO 9362 and ISO 13616.
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Financial Account. Name
     *  The name of the Financial Account.
     *  0..1
     *  Financial Account
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Financial Account. Account Type Code. Code
     *  The type of Financial Account, expressed as a code.
     *  0..1
     *  Financial Account
     *  Account Type Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AccountTypeCode $accountTypeCode
     */
    private $accountTypeCode = null;

    /**
     * BBIE
     *  Financial Account. Currency Code. Code
     *  The currency in which the Financial Account is held, expressed as a code.
     *  0..1
     *  Financial Account
     *  Currency Code
     *  Code
     *  Currency_ Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\CurrencyCode $currencyCode
     */
    private $currencyCode = null;

    /**
     * BBIE
     *  Financial Account. Payment_ Note. Text
     *  Free-form text applying to the Payment to the owner of this account.
     *  0..n
     *  Financial Account
     *  Payment
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\PaymentNote[] $paymentNote
     */
    private $paymentNote = [
        
    ];

    /**
     * ASBIE
     *  Financial Account. Financial Institution_ Branch. Branch
     *  An association to Financial Institution Branch.
     *  0..1
     *  Financial Account
     *  Financial Institution
     *  Branch
     *  Branch
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\FinancialInstitutionBranch $financialInstitutionBranch
     */
    private $financialInstitutionBranch = null;

    /**
     * ASBIE
     *  Financial Account. Country
     *  An association to Country.
     *  0..1
     *  Financial Account
     *  Country
     *  Country
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Country $country
     */
    private $country = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Financial Account. Identifier
     *  The identifier for the Financial Account; the Bank Account Number.
     *  0..1
     *  Financial Account
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  SWIFT(BIC) and IBAN are defined in ISO 9362 and ISO 13616.
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
     *  Financial Account. Identifier
     *  The identifier for the Financial Account; the Bank Account Number.
     *  0..1
     *  Financial Account
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  SWIFT(BIC) and IBAN are defined in ISO 9362 and ISO 13616.
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
     *  Financial Account. Name
     *  The name of the Financial Account.
     *  0..1
     *  Financial Account
     *  Name
     *  Name
     *  Name. Type
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
     *  Financial Account. Name
     *  The name of the Financial Account.
     *  0..1
     *  Financial Account
     *  Name
     *  Name
     *  Name. Type
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
     * Gets as accountTypeCode
     *
     * BBIE
     *  Financial Account. Account Type Code. Code
     *  The type of Financial Account, expressed as a code.
     *  0..1
     *  Financial Account
     *  Account Type Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\AccountTypeCode
     */
    public function getAccountTypeCode()
    {
        return $this->accountTypeCode;
    }

    /**
     * Sets a new accountTypeCode
     *
     * BBIE
     *  Financial Account. Account Type Code. Code
     *  The type of Financial Account, expressed as a code.
     *  0..1
     *  Financial Account
     *  Account Type Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\AccountTypeCode $accountTypeCode
     * @return self
     */
    public function setAccountTypeCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\AccountTypeCode $accountTypeCode)
    {
        $this->accountTypeCode = $accountTypeCode;
        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * BBIE
     *  Financial Account. Currency Code. Code
     *  The currency in which the Financial Account is held, expressed as a code.
     *  0..1
     *  Financial Account
     *  Currency Code
     *  Code
     *  Currency_ Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\CurrencyCode
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * BBIE
     *  Financial Account. Currency Code. Code
     *  The currency in which the Financial Account is held, expressed as a code.
     *  0..1
     *  Financial Account
     *  Currency Code
     *  Code
     *  Currency_ Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\CurrencyCode $currencyCode
     * @return self
     */
    public function setCurrencyCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\CurrencyCode $currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Adds as paymentNote
     *
     * BBIE
     *  Financial Account. Payment_ Note. Text
     *  Free-form text applying to the Payment to the owner of this account.
     *  0..n
     *  Financial Account
     *  Payment
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\PaymentNote $paymentNote
     */
    public function addToPaymentNote(\NOKA\PHPUBL\UBL\Common\BasicComponents\PaymentNote $paymentNote)
    {
        $this->paymentNote[] = $paymentNote;
        return $this;
    }

    /**
     * isset paymentNote
     *
     * BBIE
     *  Financial Account. Payment_ Note. Text
     *  Free-form text applying to the Payment to the owner of this account.
     *  0..n
     *  Financial Account
     *  Payment
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentNote($index)
    {
        return isset($this->paymentNote[$index]);
    }

    /**
     * unset paymentNote
     *
     * BBIE
     *  Financial Account. Payment_ Note. Text
     *  Free-form text applying to the Payment to the owner of this account.
     *  0..n
     *  Financial Account
     *  Payment
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentNote($index)
    {
        unset($this->paymentNote[$index]);
    }

    /**
     * Gets as paymentNote
     *
     * BBIE
     *  Financial Account. Payment_ Note. Text
     *  Free-form text applying to the Payment to the owner of this account.
     *  0..n
     *  Financial Account
     *  Payment
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\PaymentNote[]
     */
    public function getPaymentNote()
    {
        return $this->paymentNote;
    }

    /**
     * Sets a new paymentNote
     *
     * BBIE
     *  Financial Account. Payment_ Note. Text
     *  Free-form text applying to the Payment to the owner of this account.
     *  0..n
     *  Financial Account
     *  Payment
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\PaymentNote[] $paymentNote
     * @return self
     */
    public function setPaymentNote(array $paymentNote)
    {
        $this->paymentNote = $paymentNote;
        return $this;
    }

    /**
     * Gets as financialInstitutionBranch
     *
     * ASBIE
     *  Financial Account. Financial Institution_ Branch. Branch
     *  An association to Financial Institution Branch.
     *  0..1
     *  Financial Account
     *  Financial Institution
     *  Branch
     *  Branch
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\FinancialInstitutionBranch
     */
    public function getFinancialInstitutionBranch()
    {
        return $this->financialInstitutionBranch;
    }

    /**
     * Sets a new financialInstitutionBranch
     *
     * ASBIE
     *  Financial Account. Financial Institution_ Branch. Branch
     *  An association to Financial Institution Branch.
     *  0..1
     *  Financial Account
     *  Financial Institution
     *  Branch
     *  Branch
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\FinancialInstitutionBranch $financialInstitutionBranch
     * @return self
     */
    public function setFinancialInstitutionBranch(\NOKA\PHPUBL\UBL\Common\AggregateComponents\FinancialInstitutionBranch $financialInstitutionBranch)
    {
        $this->financialInstitutionBranch = $financialInstitutionBranch;
        return $this;
    }

    /**
     * Gets as country
     *
     * ASBIE
     *  Financial Account. Country
     *  An association to Country.
     *  0..1
     *  Financial Account
     *  Country
     *  Country
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * ASBIE
     *  Financial Account. Country
     *  An association to Country.
     *  0..1
     *  Financial Account
     *  Country
     *  Country
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Country $country
     * @return self
     */
    public function setCountry(\NOKA\PHPUBL\UBL\Common\AggregateComponents\Country $country)
    {
        $this->country = $country;
        return $this;
    }


}

