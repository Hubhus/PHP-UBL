<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing DeliveryUnitType
 *
 * ABIE
 *  Delivery Unit. Details
 *  Information about a Delivery Unit.
 *  Delivery Unit
 * XSD Type: DeliveryUnitType
 */
class DeliveryUnitType
{

    /**
     * BBIE
     *  Delivery Unit. Batch Quantity. Quantity
     *  The quantity of ordered Items that constitutes a batch for delivery purposes.
     *  1
     *  Delivery Unit
     *  Batch Quantity
     *  Quantity
     *  Quantity. Type
     *  "100 units", "by the dozen"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\BatchQuantity $batchQuantity
     */
    private $batchQuantity = null;

    /**
     * BBIE
     *  Delivery Unit. Consumer_ Unit. Quantity
     *  The quantity of consumer units in the Delivery Unit.
     *  0..1
     *  Delivery Unit
     *  Consumer
     *  Unit
     *  Quantity
     *  Quantity. Type
     *  "packs of 10"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ConsumerUnitQuantity $consumerUnitQuantity
     */
    private $consumerUnitQuantity = null;

    /**
     * BBIE
     *  Delivery Unit. Hazardous Risk_ Indicator. Indicator
     *  Indicates whether the Item as delivered is hazardous.
     *  0..1
     *  Delivery Unit
     *  Hazardous Risk
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Default is negative
     *
     * @var bool $hazardousRiskIndicator
     */
    private $hazardousRiskIndicator = null;

    /**
     * Gets as batchQuantity
     *
     * BBIE
     *  Delivery Unit. Batch Quantity. Quantity
     *  The quantity of ordered Items that constitutes a batch for delivery purposes.
     *  1
     *  Delivery Unit
     *  Batch Quantity
     *  Quantity
     *  Quantity. Type
     *  "100 units", "by the dozen"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\BatchQuantity
     */
    public function getBatchQuantity()
    {
        return $this->batchQuantity;
    }

    /**
     * Sets a new batchQuantity
     *
     * BBIE
     *  Delivery Unit. Batch Quantity. Quantity
     *  The quantity of ordered Items that constitutes a batch for delivery purposes.
     *  1
     *  Delivery Unit
     *  Batch Quantity
     *  Quantity
     *  Quantity. Type
     *  "100 units", "by the dozen"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\BatchQuantity $batchQuantity
     * @return self
     */
    public function setBatchQuantity(\NOKA\PHPUBL\UBL\Common\BasicComponents\BatchQuantity $batchQuantity)
    {
        $this->batchQuantity = $batchQuantity;
        return $this;
    }

    /**
     * Gets as consumerUnitQuantity
     *
     * BBIE
     *  Delivery Unit. Consumer_ Unit. Quantity
     *  The quantity of consumer units in the Delivery Unit.
     *  0..1
     *  Delivery Unit
     *  Consumer
     *  Unit
     *  Quantity
     *  Quantity. Type
     *  "packs of 10"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ConsumerUnitQuantity
     */
    public function getConsumerUnitQuantity()
    {
        return $this->consumerUnitQuantity;
    }

    /**
     * Sets a new consumerUnitQuantity
     *
     * BBIE
     *  Delivery Unit. Consumer_ Unit. Quantity
     *  The quantity of consumer units in the Delivery Unit.
     *  0..1
     *  Delivery Unit
     *  Consumer
     *  Unit
     *  Quantity
     *  Quantity. Type
     *  "packs of 10"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ConsumerUnitQuantity $consumerUnitQuantity
     * @return self
     */
    public function setConsumerUnitQuantity(\NOKA\PHPUBL\UBL\Common\BasicComponents\ConsumerUnitQuantity $consumerUnitQuantity)
    {
        $this->consumerUnitQuantity = $consumerUnitQuantity;
        return $this;
    }

    /**
     * Gets as hazardousRiskIndicator
     *
     * BBIE
     *  Delivery Unit. Hazardous Risk_ Indicator. Indicator
     *  Indicates whether the Item as delivered is hazardous.
     *  0..1
     *  Delivery Unit
     *  Hazardous Risk
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Default is negative
     *
     * @return bool
     */
    public function getHazardousRiskIndicator()
    {
        return $this->hazardousRiskIndicator;
    }

    /**
     * Sets a new hazardousRiskIndicator
     *
     * BBIE
     *  Delivery Unit. Hazardous Risk_ Indicator. Indicator
     *  Indicates whether the Item as delivered is hazardous.
     *  0..1
     *  Delivery Unit
     *  Hazardous Risk
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Default is negative
     *
     * @param bool $hazardousRiskIndicator
     * @return self
     */
    public function setHazardousRiskIndicator($hazardousRiskIndicator)
    {
        $this->hazardousRiskIndicator = $hazardousRiskIndicator;
        return $this;
    }


}

