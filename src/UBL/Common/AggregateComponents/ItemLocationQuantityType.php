<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing ItemLocationQuantityType
 *
 * ABIE
 *  Item Location Quantity. Details
 *  Information about the properties of an item as they relate to specific quantities and/or specific locations.
 *  Item Location Quantity
 * XSD Type: ItemLocationQuantityType
 */
class ItemLocationQuantityType
{

    /**
     * BBIE
     *  Item Location Quantity. Lead Time. Measure
     *  The time taken from the time of order to the time of delivery for an item.
     *  0..1
     *  Item Location Quantity
     *  Lead Time
     *  Measure
     *  Measure. Type
     *  "2 days", "24 hours"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\LeadTimeMeasure $leadTimeMeasure
     */
    private $leadTimeMeasure = null;

    /**
     * BBIE
     *  Item Location Quantity. Minimum_ Quantity. Quantity
     *  The minimum quantity that can be ordered to qualify for a specific price.
     *  0..1
     *  Item Location Quantity
     *  Minimum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  "10 boxes", "1 carton", "1000 sheets"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\MinimumQuantity $minimumQuantity
     */
    private $minimumQuantity = null;

    /**
     * BBIE
     *  Item Location Quantity. Maximum_ Quantity. Quantity
     *  The maximum quantity that can be ordered to qualify for a specific price.
     *  0..1
     *  Item Location Quantity
     *  Maximum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  "10 boxes", "1 carton", "1000 sheets"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\MaximumQuantity $maximumQuantity
     */
    private $maximumQuantity = null;

    /**
     * BBIE
     *  Item Location Quantity. Hazardous Risk_ Indicator. Indicator
     *  Indicates whether the item as delivered, in the stated quantity to the stated location, is hazardous.
     *  0..1
     *  Item Location Quantity
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
     * BBIE
     *  Item Location Quantity. Trading Restrictions. Text
     *  A description of trade restrictions that apply to the item or quantities of the item.
     *  0..n
     *  Item Location Quantity
     *  Trading Restrictions
     *  Text
     *  Text. Type
     *  "not for export"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TradingRestrictions[] $tradingRestrictions
     */
    private $tradingRestrictions = [
        
    ];

    /**
     * ASBIE
     *  Item Location Quantity. Applicable Territory_ Address. Address
     *  An association to Territory (Address).
     *  0..n
     *  Item Location Quantity
     *  Applicable Territory
     *  Address
     *  Address
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ApplicableTerritoryAddress[] $applicableTerritoryAddress
     */
    private $applicableTerritoryAddress = [
        
    ];

    /**
     * ASBIE
     *  Item Location Quantity. Price
     *  An association to Price.
     *  0..1
     *  Item Location Quantity
     *  Price
     *  Price
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Price $price
     */
    private $price = null;

    /**
     * ASBIE
     *  Item Location Quantity. Delivery Unit
     *  An association to Delivery Unit.
     *  0..n
     *  Item Location Quantity
     *  Delivery Unit
     *  Delivery Unit
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryUnit[] $deliveryUnit
     */
    private $deliveryUnit = [
        
    ];

    /**
     * ASBIE
     *  Item Location Quantity. Applicable_ Tax Category. Tax Category
     *  An association to Tax Category.
     *  0..n
     *  Item Location Quantity
     *  Applicable
     *  Tax Category
     *  Tax Category
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ApplicableTaxCategory[] $applicableTaxCategory
     */
    private $applicableTaxCategory = [
        
    ];

    /**
     * Gets as leadTimeMeasure
     *
     * BBIE
     *  Item Location Quantity. Lead Time. Measure
     *  The time taken from the time of order to the time of delivery for an item.
     *  0..1
     *  Item Location Quantity
     *  Lead Time
     *  Measure
     *  Measure. Type
     *  "2 days", "24 hours"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\LeadTimeMeasure
     */
    public function getLeadTimeMeasure()
    {
        return $this->leadTimeMeasure;
    }

    /**
     * Sets a new leadTimeMeasure
     *
     * BBIE
     *  Item Location Quantity. Lead Time. Measure
     *  The time taken from the time of order to the time of delivery for an item.
     *  0..1
     *  Item Location Quantity
     *  Lead Time
     *  Measure
     *  Measure. Type
     *  "2 days", "24 hours"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\LeadTimeMeasure $leadTimeMeasure
     * @return self
     */
    public function setLeadTimeMeasure(\NOKA\PHPUBL\UBL\Common\BasicComponents\LeadTimeMeasure $leadTimeMeasure)
    {
        $this->leadTimeMeasure = $leadTimeMeasure;
        return $this;
    }

    /**
     * Gets as minimumQuantity
     *
     * BBIE
     *  Item Location Quantity. Minimum_ Quantity. Quantity
     *  The minimum quantity that can be ordered to qualify for a specific price.
     *  0..1
     *  Item Location Quantity
     *  Minimum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  "10 boxes", "1 carton", "1000 sheets"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\MinimumQuantity
     */
    public function getMinimumQuantity()
    {
        return $this->minimumQuantity;
    }

    /**
     * Sets a new minimumQuantity
     *
     * BBIE
     *  Item Location Quantity. Minimum_ Quantity. Quantity
     *  The minimum quantity that can be ordered to qualify for a specific price.
     *  0..1
     *  Item Location Quantity
     *  Minimum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  "10 boxes", "1 carton", "1000 sheets"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\MinimumQuantity $minimumQuantity
     * @return self
     */
    public function setMinimumQuantity(\NOKA\PHPUBL\UBL\Common\BasicComponents\MinimumQuantity $minimumQuantity)
    {
        $this->minimumQuantity = $minimumQuantity;
        return $this;
    }

    /**
     * Gets as maximumQuantity
     *
     * BBIE
     *  Item Location Quantity. Maximum_ Quantity. Quantity
     *  The maximum quantity that can be ordered to qualify for a specific price.
     *  0..1
     *  Item Location Quantity
     *  Maximum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  "10 boxes", "1 carton", "1000 sheets"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\MaximumQuantity
     */
    public function getMaximumQuantity()
    {
        return $this->maximumQuantity;
    }

    /**
     * Sets a new maximumQuantity
     *
     * BBIE
     *  Item Location Quantity. Maximum_ Quantity. Quantity
     *  The maximum quantity that can be ordered to qualify for a specific price.
     *  0..1
     *  Item Location Quantity
     *  Maximum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  "10 boxes", "1 carton", "1000 sheets"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\MaximumQuantity $maximumQuantity
     * @return self
     */
    public function setMaximumQuantity(\NOKA\PHPUBL\UBL\Common\BasicComponents\MaximumQuantity $maximumQuantity)
    {
        $this->maximumQuantity = $maximumQuantity;
        return $this;
    }

    /**
     * Gets as hazardousRiskIndicator
     *
     * BBIE
     *  Item Location Quantity. Hazardous Risk_ Indicator. Indicator
     *  Indicates whether the item as delivered, in the stated quantity to the stated location, is hazardous.
     *  0..1
     *  Item Location Quantity
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
     *  Item Location Quantity. Hazardous Risk_ Indicator. Indicator
     *  Indicates whether the item as delivered, in the stated quantity to the stated location, is hazardous.
     *  0..1
     *  Item Location Quantity
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

    /**
     * Adds as tradingRestrictions
     *
     * BBIE
     *  Item Location Quantity. Trading Restrictions. Text
     *  A description of trade restrictions that apply to the item or quantities of the item.
     *  0..n
     *  Item Location Quantity
     *  Trading Restrictions
     *  Text
     *  Text. Type
     *  "not for export"
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TradingRestrictions $tradingRestrictions
     */
    public function addToTradingRestrictions(\NOKA\PHPUBL\UBL\Common\BasicComponents\TradingRestrictions $tradingRestrictions)
    {
        $this->tradingRestrictions[] = $tradingRestrictions;
        return $this;
    }

    /**
     * isset tradingRestrictions
     *
     * BBIE
     *  Item Location Quantity. Trading Restrictions. Text
     *  A description of trade restrictions that apply to the item or quantities of the item.
     *  0..n
     *  Item Location Quantity
     *  Trading Restrictions
     *  Text
     *  Text. Type
     *  "not for export"
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTradingRestrictions($index)
    {
        return isset($this->tradingRestrictions[$index]);
    }

    /**
     * unset tradingRestrictions
     *
     * BBIE
     *  Item Location Quantity. Trading Restrictions. Text
     *  A description of trade restrictions that apply to the item or quantities of the item.
     *  0..n
     *  Item Location Quantity
     *  Trading Restrictions
     *  Text
     *  Text. Type
     *  "not for export"
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTradingRestrictions($index)
    {
        unset($this->tradingRestrictions[$index]);
    }

    /**
     * Gets as tradingRestrictions
     *
     * BBIE
     *  Item Location Quantity. Trading Restrictions. Text
     *  A description of trade restrictions that apply to the item or quantities of the item.
     *  0..n
     *  Item Location Quantity
     *  Trading Restrictions
     *  Text
     *  Text. Type
     *  "not for export"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TradingRestrictions[]
     */
    public function getTradingRestrictions()
    {
        return $this->tradingRestrictions;
    }

    /**
     * Sets a new tradingRestrictions
     *
     * BBIE
     *  Item Location Quantity. Trading Restrictions. Text
     *  A description of trade restrictions that apply to the item or quantities of the item.
     *  0..n
     *  Item Location Quantity
     *  Trading Restrictions
     *  Text
     *  Text. Type
     *  "not for export"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TradingRestrictions[] $tradingRestrictions
     * @return self
     */
    public function setTradingRestrictions(array $tradingRestrictions)
    {
        $this->tradingRestrictions = $tradingRestrictions;
        return $this;
    }

    /**
     * Adds as applicableTerritoryAddress
     *
     * ASBIE
     *  Item Location Quantity. Applicable Territory_ Address. Address
     *  An association to Territory (Address).
     *  0..n
     *  Item Location Quantity
     *  Applicable Territory
     *  Address
     *  Address
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ApplicableTerritoryAddress $applicableTerritoryAddress
     */
    public function addToApplicableTerritoryAddress(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ApplicableTerritoryAddress $applicableTerritoryAddress)
    {
        $this->applicableTerritoryAddress[] = $applicableTerritoryAddress;
        return $this;
    }

    /**
     * isset applicableTerritoryAddress
     *
     * ASBIE
     *  Item Location Quantity. Applicable Territory_ Address. Address
     *  An association to Territory (Address).
     *  0..n
     *  Item Location Quantity
     *  Applicable Territory
     *  Address
     *  Address
     *
     * @param int|string $index
     * @return bool
     */
    public function issetApplicableTerritoryAddress($index)
    {
        return isset($this->applicableTerritoryAddress[$index]);
    }

    /**
     * unset applicableTerritoryAddress
     *
     * ASBIE
     *  Item Location Quantity. Applicable Territory_ Address. Address
     *  An association to Territory (Address).
     *  0..n
     *  Item Location Quantity
     *  Applicable Territory
     *  Address
     *  Address
     *
     * @param int|string $index
     * @return void
     */
    public function unsetApplicableTerritoryAddress($index)
    {
        unset($this->applicableTerritoryAddress[$index]);
    }

    /**
     * Gets as applicableTerritoryAddress
     *
     * ASBIE
     *  Item Location Quantity. Applicable Territory_ Address. Address
     *  An association to Territory (Address).
     *  0..n
     *  Item Location Quantity
     *  Applicable Territory
     *  Address
     *  Address
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ApplicableTerritoryAddress[]
     */
    public function getApplicableTerritoryAddress()
    {
        return $this->applicableTerritoryAddress;
    }

    /**
     * Sets a new applicableTerritoryAddress
     *
     * ASBIE
     *  Item Location Quantity. Applicable Territory_ Address. Address
     *  An association to Territory (Address).
     *  0..n
     *  Item Location Quantity
     *  Applicable Territory
     *  Address
     *  Address
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ApplicableTerritoryAddress[] $applicableTerritoryAddress
     * @return self
     */
    public function setApplicableTerritoryAddress(array $applicableTerritoryAddress)
    {
        $this->applicableTerritoryAddress = $applicableTerritoryAddress;
        return $this;
    }

    /**
     * Gets as price
     *
     * ASBIE
     *  Item Location Quantity. Price
     *  An association to Price.
     *  0..1
     *  Item Location Quantity
     *  Price
     *  Price
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\Price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * ASBIE
     *  Item Location Quantity. Price
     *  An association to Price.
     *  0..1
     *  Item Location Quantity
     *  Price
     *  Price
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Price $price
     * @return self
     */
    public function setPrice(\NOKA\PHPUBL\UBL\Common\AggregateComponents\Price $price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Adds as deliveryUnit
     *
     * ASBIE
     *  Item Location Quantity. Delivery Unit
     *  An association to Delivery Unit.
     *  0..n
     *  Item Location Quantity
     *  Delivery Unit
     *  Delivery Unit
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryUnit $deliveryUnit
     */
    public function addToDeliveryUnit(\NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryUnit $deliveryUnit)
    {
        $this->deliveryUnit[] = $deliveryUnit;
        return $this;
    }

    /**
     * isset deliveryUnit
     *
     * ASBIE
     *  Item Location Quantity. Delivery Unit
     *  An association to Delivery Unit.
     *  0..n
     *  Item Location Quantity
     *  Delivery Unit
     *  Delivery Unit
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeliveryUnit($index)
    {
        return isset($this->deliveryUnit[$index]);
    }

    /**
     * unset deliveryUnit
     *
     * ASBIE
     *  Item Location Quantity. Delivery Unit
     *  An association to Delivery Unit.
     *  0..n
     *  Item Location Quantity
     *  Delivery Unit
     *  Delivery Unit
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeliveryUnit($index)
    {
        unset($this->deliveryUnit[$index]);
    }

    /**
     * Gets as deliveryUnit
     *
     * ASBIE
     *  Item Location Quantity. Delivery Unit
     *  An association to Delivery Unit.
     *  0..n
     *  Item Location Quantity
     *  Delivery Unit
     *  Delivery Unit
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryUnit[]
     */
    public function getDeliveryUnit()
    {
        return $this->deliveryUnit;
    }

    /**
     * Sets a new deliveryUnit
     *
     * ASBIE
     *  Item Location Quantity. Delivery Unit
     *  An association to Delivery Unit.
     *  0..n
     *  Item Location Quantity
     *  Delivery Unit
     *  Delivery Unit
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryUnit[] $deliveryUnit
     * @return self
     */
    public function setDeliveryUnit(array $deliveryUnit)
    {
        $this->deliveryUnit = $deliveryUnit;
        return $this;
    }

    /**
     * Adds as applicableTaxCategory
     *
     * ASBIE
     *  Item Location Quantity. Applicable_ Tax Category. Tax Category
     *  An association to Tax Category.
     *  0..n
     *  Item Location Quantity
     *  Applicable
     *  Tax Category
     *  Tax Category
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ApplicableTaxCategory $applicableTaxCategory
     */
    public function addToApplicableTaxCategory(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ApplicableTaxCategory $applicableTaxCategory)
    {
        $this->applicableTaxCategory[] = $applicableTaxCategory;
        return $this;
    }

    /**
     * isset applicableTaxCategory
     *
     * ASBIE
     *  Item Location Quantity. Applicable_ Tax Category. Tax Category
     *  An association to Tax Category.
     *  0..n
     *  Item Location Quantity
     *  Applicable
     *  Tax Category
     *  Tax Category
     *
     * @param int|string $index
     * @return bool
     */
    public function issetApplicableTaxCategory($index)
    {
        return isset($this->applicableTaxCategory[$index]);
    }

    /**
     * unset applicableTaxCategory
     *
     * ASBIE
     *  Item Location Quantity. Applicable_ Tax Category. Tax Category
     *  An association to Tax Category.
     *  0..n
     *  Item Location Quantity
     *  Applicable
     *  Tax Category
     *  Tax Category
     *
     * @param int|string $index
     * @return void
     */
    public function unsetApplicableTaxCategory($index)
    {
        unset($this->applicableTaxCategory[$index]);
    }

    /**
     * Gets as applicableTaxCategory
     *
     * ASBIE
     *  Item Location Quantity. Applicable_ Tax Category. Tax Category
     *  An association to Tax Category.
     *  0..n
     *  Item Location Quantity
     *  Applicable
     *  Tax Category
     *  Tax Category
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ApplicableTaxCategory[]
     */
    public function getApplicableTaxCategory()
    {
        return $this->applicableTaxCategory;
    }

    /**
     * Sets a new applicableTaxCategory
     *
     * ASBIE
     *  Item Location Quantity. Applicable_ Tax Category. Tax Category
     *  An association to Tax Category.
     *  0..n
     *  Item Location Quantity
     *  Applicable
     *  Tax Category
     *  Tax Category
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ApplicableTaxCategory[] $applicableTaxCategory
     * @return self
     */
    public function setApplicableTaxCategory(array $applicableTaxCategory)
    {
        $this->applicableTaxCategory = $applicableTaxCategory;
        return $this;
    }


}

