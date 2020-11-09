<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing PriceListType
 *
 * ABIE
 *  Price List. Details
 *  Information about a Price List.
 *  Price List
 * XSD Type: PriceListType
 */
class PriceListType
{

    /**
     * BBIE
     *  Price List. Identifier
     *  Identifies the Price List.
     *  0..1
     *  Price List
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Price List. Status Code. Code
     *  Identifies whether the price list is an 'original', 'copy', 'revision', or 'cancellation'.
     *  0..1
     *  Price List
     *  Status Code
     *  Code
     *  Code. Type
     *  "new - announcement only", "new and available", "deleted - announcement only"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\StatusCode $statusCode
     */
    private $statusCode = null;

    /**
     * ASBIE
     *  Price List. Validity_ Period. Period
     *  An association to Validity Period.
     *  0..n
     *  Price List
     *  Validity
     *  Period
     *  Period
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ValidityPeriod[] $validityPeriod
     */
    private $validityPeriod = [
        
    ];

    /**
     * ASBIE
     *  Price List. Previous_ Price List. Price List
     *  An association to Previous Price List.
     *  0..1
     *  Price List
     *  Previous
     *  Price List
     *  Price List
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\PreviousPriceList $previousPriceList
     */
    private $previousPriceList = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Price List. Identifier
     *  Identifies the Price List.
     *  0..1
     *  Price List
     *  Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Price List. Identifier
     *  Identifies the Price List.
     *  0..1
     *  Price List
     *  Identifier
     *  Identifier
     *  Identifier. Type
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
     * Gets as statusCode
     *
     * BBIE
     *  Price List. Status Code. Code
     *  Identifies whether the price list is an 'original', 'copy', 'revision', or 'cancellation'.
     *  0..1
     *  Price List
     *  Status Code
     *  Code
     *  Code. Type
     *  "new - announcement only", "new and available", "deleted - announcement only"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\StatusCode
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Sets a new statusCode
     *
     * BBIE
     *  Price List. Status Code. Code
     *  Identifies whether the price list is an 'original', 'copy', 'revision', or 'cancellation'.
     *  0..1
     *  Price List
     *  Status Code
     *  Code
     *  Code. Type
     *  "new - announcement only", "new and available", "deleted - announcement only"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\StatusCode $statusCode
     * @return self
     */
    public function setStatusCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\StatusCode $statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * Adds as validityPeriod
     *
     * ASBIE
     *  Price List. Validity_ Period. Period
     *  An association to Validity Period.
     *  0..n
     *  Price List
     *  Validity
     *  Period
     *  Period
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ValidityPeriod $validityPeriod
     */
    public function addToValidityPeriod(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ValidityPeriod $validityPeriod)
    {
        $this->validityPeriod[] = $validityPeriod;
        return $this;
    }

    /**
     * isset validityPeriod
     *
     * ASBIE
     *  Price List. Validity_ Period. Period
     *  An association to Validity Period.
     *  0..n
     *  Price List
     *  Validity
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValidityPeriod($index)
    {
        return isset($this->validityPeriod[$index]);
    }

    /**
     * unset validityPeriod
     *
     * ASBIE
     *  Price List. Validity_ Period. Period
     *  An association to Validity Period.
     *  0..n
     *  Price List
     *  Validity
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValidityPeriod($index)
    {
        unset($this->validityPeriod[$index]);
    }

    /**
     * Gets as validityPeriod
     *
     * ASBIE
     *  Price List. Validity_ Period. Period
     *  An association to Validity Period.
     *  0..n
     *  Price List
     *  Validity
     *  Period
     *  Period
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ValidityPeriod[]
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * ASBIE
     *  Price List. Validity_ Period. Period
     *  An association to Validity Period.
     *  0..n
     *  Price List
     *  Validity
     *  Period
     *  Period
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ValidityPeriod[] $validityPeriod
     * @return self
     */
    public function setValidityPeriod(array $validityPeriod)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as previousPriceList
     *
     * ASBIE
     *  Price List. Previous_ Price List. Price List
     *  An association to Previous Price List.
     *  0..1
     *  Price List
     *  Previous
     *  Price List
     *  Price List
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\PreviousPriceList
     */
    public function getPreviousPriceList()
    {
        return $this->previousPriceList;
    }

    /**
     * Sets a new previousPriceList
     *
     * ASBIE
     *  Price List. Previous_ Price List. Price List
     *  An association to Previous Price List.
     *  0..1
     *  Price List
     *  Previous
     *  Price List
     *  Price List
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\PreviousPriceList $previousPriceList
     * @return self
     */
    public function setPreviousPriceList(\NOKA\PHPUBL\UBL\Common\AggregateComponents\PreviousPriceList $previousPriceList)
    {
        $this->previousPriceList = $previousPriceList;
        return $this;
    }


}

