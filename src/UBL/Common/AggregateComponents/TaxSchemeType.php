<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing TaxSchemeType
 *
 * ABIE
 *  Tax Scheme. Details
 *  Information about a tax scheme.
 *  Tax Scheme
 * XSD Type: TaxSchemeType
 */
class TaxSchemeType
{

    /**
     * BBIE
     *  Tax Scheme. Identifier
     *  Identifies the tax scheme.
     *  0..1
     *  Tax Scheme
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "VAT", "GST"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Tax Scheme. Name
     *  The name of the tax scheme.
     *  0..1
     *  Tax Scheme
     *  Name
     *  Name
     *  Name. Type
     *  "Value Added Tax", "Wholesale Tax", "Sales Tax", "State Tax"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Tax Scheme. Tax Type Code. Code
     *  An identifier for the tax type.
     *  0..1
     *  Tax Scheme
     *  Tax Type Code
     *  Code
     *  Code. Type
     *  "Consumption", "Sales"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TaxTypeCode $taxTypeCode
     */
    private $taxTypeCode = null;

    /**
     * BBIE
     *  Tax Scheme. Currency Code. Code
     *  The currency in which the tax is collected and reported, expressed as a code.
     *  0..1
     *  Tax Scheme
     *  Currency Code
     *  Code
     *  Currency_ Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\CurrencyCode $currencyCode
     */
    private $currencyCode = null;

    /**
     * ASBIE
     *  Tax Scheme. Jurisdiction Region_ Address. Address
     *  An association with Address (of taxation jurisdiction).
     *  0..n
     *  Tax Scheme
     *  Jurisdiction Region
     *  Address
     *  Address
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\JurisdictionRegionAddress[] $jurisdictionRegionAddress
     */
    private $jurisdictionRegionAddress = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Tax Scheme. Identifier
     *  Identifies the tax scheme.
     *  0..1
     *  Tax Scheme
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "VAT", "GST"
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
     *  Tax Scheme. Identifier
     *  Identifies the tax scheme.
     *  0..1
     *  Tax Scheme
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "VAT", "GST"
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
     *  Tax Scheme. Name
     *  The name of the tax scheme.
     *  0..1
     *  Tax Scheme
     *  Name
     *  Name
     *  Name. Type
     *  "Value Added Tax", "Wholesale Tax", "Sales Tax", "State Tax"
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
     *  Tax Scheme. Name
     *  The name of the tax scheme.
     *  0..1
     *  Tax Scheme
     *  Name
     *  Name
     *  Name. Type
     *  "Value Added Tax", "Wholesale Tax", "Sales Tax", "State Tax"
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
     * Gets as taxTypeCode
     *
     * BBIE
     *  Tax Scheme. Tax Type Code. Code
     *  An identifier for the tax type.
     *  0..1
     *  Tax Scheme
     *  Tax Type Code
     *  Code
     *  Code. Type
     *  "Consumption", "Sales"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TaxTypeCode
     */
    public function getTaxTypeCode()
    {
        return $this->taxTypeCode;
    }

    /**
     * Sets a new taxTypeCode
     *
     * BBIE
     *  Tax Scheme. Tax Type Code. Code
     *  An identifier for the tax type.
     *  0..1
     *  Tax Scheme
     *  Tax Type Code
     *  Code
     *  Code. Type
     *  "Consumption", "Sales"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TaxTypeCode $taxTypeCode
     * @return self
     */
    public function setTaxTypeCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\TaxTypeCode $taxTypeCode)
    {
        $this->taxTypeCode = $taxTypeCode;
        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * BBIE
     *  Tax Scheme. Currency Code. Code
     *  The currency in which the tax is collected and reported, expressed as a code.
     *  0..1
     *  Tax Scheme
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
     *  Tax Scheme. Currency Code. Code
     *  The currency in which the tax is collected and reported, expressed as a code.
     *  0..1
     *  Tax Scheme
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
     * Adds as jurisdictionRegionAddress
     *
     * ASBIE
     *  Tax Scheme. Jurisdiction Region_ Address. Address
     *  An association with Address (of taxation jurisdiction).
     *  0..n
     *  Tax Scheme
     *  Jurisdiction Region
     *  Address
     *  Address
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\JurisdictionRegionAddress $jurisdictionRegionAddress
     */
    public function addToJurisdictionRegionAddress(\NOKA\PHPUBL\UBL\Common\AggregateComponents\JurisdictionRegionAddress $jurisdictionRegionAddress)
    {
        $this->jurisdictionRegionAddress[] = $jurisdictionRegionAddress;
        return $this;
    }

    /**
     * isset jurisdictionRegionAddress
     *
     * ASBIE
     *  Tax Scheme. Jurisdiction Region_ Address. Address
     *  An association with Address (of taxation jurisdiction).
     *  0..n
     *  Tax Scheme
     *  Jurisdiction Region
     *  Address
     *  Address
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJurisdictionRegionAddress($index)
    {
        return isset($this->jurisdictionRegionAddress[$index]);
    }

    /**
     * unset jurisdictionRegionAddress
     *
     * ASBIE
     *  Tax Scheme. Jurisdiction Region_ Address. Address
     *  An association with Address (of taxation jurisdiction).
     *  0..n
     *  Tax Scheme
     *  Jurisdiction Region
     *  Address
     *  Address
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJurisdictionRegionAddress($index)
    {
        unset($this->jurisdictionRegionAddress[$index]);
    }

    /**
     * Gets as jurisdictionRegionAddress
     *
     * ASBIE
     *  Tax Scheme. Jurisdiction Region_ Address. Address
     *  An association with Address (of taxation jurisdiction).
     *  0..n
     *  Tax Scheme
     *  Jurisdiction Region
     *  Address
     *  Address
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\JurisdictionRegionAddress[]
     */
    public function getJurisdictionRegionAddress()
    {
        return $this->jurisdictionRegionAddress;
    }

    /**
     * Sets a new jurisdictionRegionAddress
     *
     * ASBIE
     *  Tax Scheme. Jurisdiction Region_ Address. Address
     *  An association with Address (of taxation jurisdiction).
     *  0..n
     *  Tax Scheme
     *  Jurisdiction Region
     *  Address
     *  Address
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\JurisdictionRegionAddress[] $jurisdictionRegionAddress
     * @return self
     */
    public function setJurisdictionRegionAddress(array $jurisdictionRegionAddress)
    {
        $this->jurisdictionRegionAddress = $jurisdictionRegionAddress;
        return $this;
    }


}

