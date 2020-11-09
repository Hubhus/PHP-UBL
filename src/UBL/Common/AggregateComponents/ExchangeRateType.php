<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing ExchangeRateType
 *
 * ABIE
 *  Exchange Rate. Details
 *  Information about Exchange Rate.
 *  Exchange Rate
 * XSD Type: ExchangeRateType
 */
class ExchangeRateType
{

    /**
     * BBIE
     *  Exchange Rate. Source_ Currency Code. Code
     *  The reference currency for the Exchange Rate; the currency from which the exchange is being made (CC Definition).
     *  1
     *  Exchange Rate
     *  Source
     *  Currency Code
     *  Code
     *  Currency_ Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\SourceCurrencyCode $sourceCurrencyCode
     */
    private $sourceCurrencyCode = null;

    /**
     * BBIE
     *  Exchange Rate. Source_ Currency Base Rate. Rate
     *  The unit base of the source currency for currencies with small denominations.
     *  0..1
     *  Exchange Rate
     *  Source
     *  Currency Base Rate
     *  Rate
     *  Rate. Type
     *
     * @var float $sourceCurrencyBaseRate
     */
    private $sourceCurrencyBaseRate = null;

    /**
     * BBIE
     *  Exchange Rate. Target_ Currency Code. Code
     *  The target currency for the Exchange Rate; the currency to which the exchange is being made (CC Definition).
     *  1
     *  Exchange Rate
     *  Target
     *  Currency Code
     *  Code
     *  Currency_ Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TargetCurrencyCode $targetCurrencyCode
     */
    private $targetCurrencyCode = null;

    /**
     * BBIE
     *  Exchange Rate. Target_ Currency Base Rate. Rate
     *  The unit base of the target currency for currencies with small denominations.
     *  0..1
     *  Exchange Rate
     *  Target
     *  Currency Base Rate
     *  Rate
     *  Rate. Type
     *
     * @var float $targetCurrencyBaseRate
     */
    private $targetCurrencyBaseRate = null;

    /**
     * BBIE
     *  Exchange Rate. Exchange Market Identifier. Identifier
     *  Identifies the currency exchange market used as the source of the Exchange Rate.
     *  0..1
     *  Exchange Rate
     *  Exchange Market Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ExchangeMarketID $exchangeMarketID
     */
    private $exchangeMarketID = null;

    /**
     * BBIE
     *  Exchange Rate. Calculation Rate. Rate
     *  The factor applied to the source currency to calculate the target currency.
     *  0..1
     *  Exchange Rate
     *  Calculation Rate
     *  Rate
     *  Rate. Type
     *
     * @var float $calculationRate
     */
    private $calculationRate = null;

    /**
     * BBIE
     *  Exchange Rate. Mathematic Operator Code. Code
     *  An identifier for whether the Calculation Rate should be used to multiply or to divide, expressed as a code.
     *  0..1
     *  Exchange Rate
     *  Mathematic Operator Code
     *  Code
     *  Operator_ Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\MathematicOperatorCode $mathematicOperatorCode
     */
    private $mathematicOperatorCode = null;

    /**
     * BBIE
     *  Exchange Rate. Date
     *  The date of the Exchange.
     *  0..1
     *  Exchange Rate
     *  Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * ASBIE
     *  Exchange Rate. Foreign Exchange_ Contract. Contract
     *  An association to Foreign Exchange Contract.
     *  0..1
     *  Exchange Rate
     *  Foreign Exchange
     *  Contract
     *  Contract
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ForeignExchangeContract $foreignExchangeContract
     */
    private $foreignExchangeContract = null;

    /**
     * Gets as sourceCurrencyCode
     *
     * BBIE
     *  Exchange Rate. Source_ Currency Code. Code
     *  The reference currency for the Exchange Rate; the currency from which the exchange is being made (CC Definition).
     *  1
     *  Exchange Rate
     *  Source
     *  Currency Code
     *  Code
     *  Currency_ Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\SourceCurrencyCode
     */
    public function getSourceCurrencyCode()
    {
        return $this->sourceCurrencyCode;
    }

    /**
     * Sets a new sourceCurrencyCode
     *
     * BBIE
     *  Exchange Rate. Source_ Currency Code. Code
     *  The reference currency for the Exchange Rate; the currency from which the exchange is being made (CC Definition).
     *  1
     *  Exchange Rate
     *  Source
     *  Currency Code
     *  Code
     *  Currency_ Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\SourceCurrencyCode $sourceCurrencyCode
     * @return self
     */
    public function setSourceCurrencyCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\SourceCurrencyCode $sourceCurrencyCode)
    {
        $this->sourceCurrencyCode = $sourceCurrencyCode;
        return $this;
    }

    /**
     * Gets as sourceCurrencyBaseRate
     *
     * BBIE
     *  Exchange Rate. Source_ Currency Base Rate. Rate
     *  The unit base of the source currency for currencies with small denominations.
     *  0..1
     *  Exchange Rate
     *  Source
     *  Currency Base Rate
     *  Rate
     *  Rate. Type
     *
     * @return float
     */
    public function getSourceCurrencyBaseRate()
    {
        return $this->sourceCurrencyBaseRate;
    }

    /**
     * Sets a new sourceCurrencyBaseRate
     *
     * BBIE
     *  Exchange Rate. Source_ Currency Base Rate. Rate
     *  The unit base of the source currency for currencies with small denominations.
     *  0..1
     *  Exchange Rate
     *  Source
     *  Currency Base Rate
     *  Rate
     *  Rate. Type
     *
     * @param float $sourceCurrencyBaseRate
     * @return self
     */
    public function setSourceCurrencyBaseRate($sourceCurrencyBaseRate)
    {
        $this->sourceCurrencyBaseRate = $sourceCurrencyBaseRate;
        return $this;
    }

    /**
     * Gets as targetCurrencyCode
     *
     * BBIE
     *  Exchange Rate. Target_ Currency Code. Code
     *  The target currency for the Exchange Rate; the currency to which the exchange is being made (CC Definition).
     *  1
     *  Exchange Rate
     *  Target
     *  Currency Code
     *  Code
     *  Currency_ Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TargetCurrencyCode
     */
    public function getTargetCurrencyCode()
    {
        return $this->targetCurrencyCode;
    }

    /**
     * Sets a new targetCurrencyCode
     *
     * BBIE
     *  Exchange Rate. Target_ Currency Code. Code
     *  The target currency for the Exchange Rate; the currency to which the exchange is being made (CC Definition).
     *  1
     *  Exchange Rate
     *  Target
     *  Currency Code
     *  Code
     *  Currency_ Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TargetCurrencyCode $targetCurrencyCode
     * @return self
     */
    public function setTargetCurrencyCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\TargetCurrencyCode $targetCurrencyCode)
    {
        $this->targetCurrencyCode = $targetCurrencyCode;
        return $this;
    }

    /**
     * Gets as targetCurrencyBaseRate
     *
     * BBIE
     *  Exchange Rate. Target_ Currency Base Rate. Rate
     *  The unit base of the target currency for currencies with small denominations.
     *  0..1
     *  Exchange Rate
     *  Target
     *  Currency Base Rate
     *  Rate
     *  Rate. Type
     *
     * @return float
     */
    public function getTargetCurrencyBaseRate()
    {
        return $this->targetCurrencyBaseRate;
    }

    /**
     * Sets a new targetCurrencyBaseRate
     *
     * BBIE
     *  Exchange Rate. Target_ Currency Base Rate. Rate
     *  The unit base of the target currency for currencies with small denominations.
     *  0..1
     *  Exchange Rate
     *  Target
     *  Currency Base Rate
     *  Rate
     *  Rate. Type
     *
     * @param float $targetCurrencyBaseRate
     * @return self
     */
    public function setTargetCurrencyBaseRate($targetCurrencyBaseRate)
    {
        $this->targetCurrencyBaseRate = $targetCurrencyBaseRate;
        return $this;
    }

    /**
     * Gets as exchangeMarketID
     *
     * BBIE
     *  Exchange Rate. Exchange Market Identifier. Identifier
     *  Identifies the currency exchange market used as the source of the Exchange Rate.
     *  0..1
     *  Exchange Rate
     *  Exchange Market Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ExchangeMarketID
     */
    public function getExchangeMarketID()
    {
        return $this->exchangeMarketID;
    }

    /**
     * Sets a new exchangeMarketID
     *
     * BBIE
     *  Exchange Rate. Exchange Market Identifier. Identifier
     *  Identifies the currency exchange market used as the source of the Exchange Rate.
     *  0..1
     *  Exchange Rate
     *  Exchange Market Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ExchangeMarketID $exchangeMarketID
     * @return self
     */
    public function setExchangeMarketID(\NOKA\PHPUBL\UBL\Common\BasicComponents\ExchangeMarketID $exchangeMarketID)
    {
        $this->exchangeMarketID = $exchangeMarketID;
        return $this;
    }

    /**
     * Gets as calculationRate
     *
     * BBIE
     *  Exchange Rate. Calculation Rate. Rate
     *  The factor applied to the source currency to calculate the target currency.
     *  0..1
     *  Exchange Rate
     *  Calculation Rate
     *  Rate
     *  Rate. Type
     *
     * @return float
     */
    public function getCalculationRate()
    {
        return $this->calculationRate;
    }

    /**
     * Sets a new calculationRate
     *
     * BBIE
     *  Exchange Rate. Calculation Rate. Rate
     *  The factor applied to the source currency to calculate the target currency.
     *  0..1
     *  Exchange Rate
     *  Calculation Rate
     *  Rate
     *  Rate. Type
     *
     * @param float $calculationRate
     * @return self
     */
    public function setCalculationRate($calculationRate)
    {
        $this->calculationRate = $calculationRate;
        return $this;
    }

    /**
     * Gets as mathematicOperatorCode
     *
     * BBIE
     *  Exchange Rate. Mathematic Operator Code. Code
     *  An identifier for whether the Calculation Rate should be used to multiply or to divide, expressed as a code.
     *  0..1
     *  Exchange Rate
     *  Mathematic Operator Code
     *  Code
     *  Operator_ Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\MathematicOperatorCode
     */
    public function getMathematicOperatorCode()
    {
        return $this->mathematicOperatorCode;
    }

    /**
     * Sets a new mathematicOperatorCode
     *
     * BBIE
     *  Exchange Rate. Mathematic Operator Code. Code
     *  An identifier for whether the Calculation Rate should be used to multiply or to divide, expressed as a code.
     *  0..1
     *  Exchange Rate
     *  Mathematic Operator Code
     *  Code
     *  Operator_ Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\MathematicOperatorCode $mathematicOperatorCode
     * @return self
     */
    public function setMathematicOperatorCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\MathematicOperatorCode $mathematicOperatorCode)
    {
        $this->mathematicOperatorCode = $mathematicOperatorCode;
        return $this;
    }

    /**
     * Gets as date
     *
     * BBIE
     *  Exchange Rate. Date
     *  The date of the Exchange.
     *  0..1
     *  Exchange Rate
     *  Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * BBIE
     *  Exchange Rate. Date
     *  The date of the Exchange.
     *  0..1
     *  Exchange Rate
     *  Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as foreignExchangeContract
     *
     * ASBIE
     *  Exchange Rate. Foreign Exchange_ Contract. Contract
     *  An association to Foreign Exchange Contract.
     *  0..1
     *  Exchange Rate
     *  Foreign Exchange
     *  Contract
     *  Contract
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ForeignExchangeContract
     */
    public function getForeignExchangeContract()
    {
        return $this->foreignExchangeContract;
    }

    /**
     * Sets a new foreignExchangeContract
     *
     * ASBIE
     *  Exchange Rate. Foreign Exchange_ Contract. Contract
     *  An association to Foreign Exchange Contract.
     *  0..1
     *  Exchange Rate
     *  Foreign Exchange
     *  Contract
     *  Contract
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ForeignExchangeContract $foreignExchangeContract
     * @return self
     */
    public function setForeignExchangeContract(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ForeignExchangeContract $foreignExchangeContract)
    {
        $this->foreignExchangeContract = $foreignExchangeContract;
        return $this;
    }


}

