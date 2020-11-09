<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing DeliveryType
 *
 * ABIE
 *  Delivery. Details
 *  Information about Delivery.
 *  Delivery
 * XSD Type: DeliveryType
 */
class DeliveryType
{

    /**
     * BBIE
     *  Delivery. Identifier
     *  Identifies the Delivery.
     *  0..1
     *  Delivery
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Delivery. Quantity
     *  The quantity in a Delivery.
     *  0..1
     *  Delivery
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Quantity $quantity
     */
    private $quantity = null;

    /**
     * BBIE
     *  Delivery. Minimum_ Quantity. Quantity
     *  The minimum quantity in a Delivery.
     *  0..1
     *  Delivery
     *  Minimum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\MinimumQuantity $minimumQuantity
     */
    private $minimumQuantity = null;

    /**
     * BBIE
     *  Delivery. Maximum_ Quantity. Quantity
     *  The maximum quantity in a Delivery.
     *  0..1
     *  Delivery
     *  Maximum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\MaximumQuantity $maximumQuantity
     */
    private $maximumQuantity = null;

    /**
     * BBIE
     *  Delivery. Actual_ Delivery Date. Date
     *  The actual Delivery date.
     *  0..1
     *  Delivery
     *  Actual
     *  Delivery Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $actualDeliveryDate
     */
    private $actualDeliveryDate = null;

    /**
     * BBIE
     *  Delivery. Actual_ Delivery Time. Time
     *  The actual Delivery time.
     *  0..1
     *  Delivery
     *  Actual
     *  Delivery Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $actualDeliveryTime
     */
    private $actualDeliveryTime = null;

    /**
     * BBIE
     *  Delivery. Latest_ Delivery Date. Date
     *  The latest delivery date allowed by the buyer.
     *  0..1
     *  Delivery
     *  Latest
     *  Delivery Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $latestDeliveryDate
     */
    private $latestDeliveryDate = null;

    /**
     * BBIE
     *  Delivery. Latest_ Delivery Time. Time
     *  The latest delivery time allowed by the buyer.
     *  0..1
     *  Delivery
     *  Latest
     *  Delivery Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $latestDeliveryTime
     */
    private $latestDeliveryTime = null;

    /**
     * BBIE
     *  Delivery. Tracking Identifier. Identifier
     *  The delivery Tracking ID (for transport tracking).
     *  0..1
     *  Delivery
     *  Tracking Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TrackingID $trackingID
     */
    private $trackingID = null;

    /**
     * ASBIE
     *  Delivery. Delivery_ Address. Address
     *  An association to Delivery Address.
     *  0..1
     *  Delivery
     *  Delivery
     *  Address
     *  Address
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryAddress $deliveryAddress
     */
    private $deliveryAddress = null;

    /**
     * ASBIE
     *  Delivery. Delivery_ Location. Location
     *  An association to Location.
     *  0..1
     *  Delivery
     *  Delivery
     *  Location
     *  Location
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryLocation $deliveryLocation
     */
    private $deliveryLocation = null;

    /**
     * ASBIE
     *  Delivery. Requested Delivery_ Period. Period
     *  The requested Period for Delivery.
     *  0..1
     *  Delivery
     *  Requested Delivery
     *  Period
     *  Period
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\RequestedDeliveryPeriod $requestedDeliveryPeriod
     */
    private $requestedDeliveryPeriod = null;

    /**
     * ASBIE
     *  Delivery. Promised Delivery_ Period. Period
     *  The promised Period for Delivery.
     *  0..1
     *  Delivery
     *  Promised Delivery
     *  Period
     *  Period
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\PromisedDeliveryPeriod $promisedDeliveryPeriod
     */
    private $promisedDeliveryPeriod = null;

    /**
     * ASBIE
     *  Delivery. Estimated Delivery_ Period. Period
     *  The estimated Period for Delivery.
     *  0..1
     *  Delivery
     *  Estimated Delivery
     *  Period
     *  Period
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\EstimatedDeliveryPeriod $estimatedDeliveryPeriod
     */
    private $estimatedDeliveryPeriod = null;

    /**
     * ASBIE
     *  Delivery. Delivery_ Party. Party
     *  The party to whom the goods/services are delivered.
     *  0..1
     *  Delivery
     *  Delivery
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryParty $deliveryParty
     */
    private $deliveryParty = null;

    /**
     * ASBIE
     *  Delivery. Despatch
     *  An association to the Despatch.
     *  0..1
     *  Delivery
     *  Despatch
     *  Despatch
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Despatch $despatch
     */
    private $despatch = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Delivery. Identifier
     *  Identifies the Delivery.
     *  0..1
     *  Delivery
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
     *  Delivery. Identifier
     *  Identifies the Delivery.
     *  0..1
     *  Delivery
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
     * Gets as quantity
     *
     * BBIE
     *  Delivery. Quantity
     *  The quantity in a Delivery.
     *  0..1
     *  Delivery
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * BBIE
     *  Delivery. Quantity
     *  The quantity in a Delivery.
     *  0..1
     *  Delivery
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Quantity $quantity
     * @return self
     */
    public function setQuantity(\NOKA\PHPUBL\UBL\Common\BasicComponents\Quantity $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as minimumQuantity
     *
     * BBIE
     *  Delivery. Minimum_ Quantity. Quantity
     *  The minimum quantity in a Delivery.
     *  0..1
     *  Delivery
     *  Minimum
     *  Quantity
     *  Quantity
     *  Quantity. Type
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
     *  Delivery. Minimum_ Quantity. Quantity
     *  The minimum quantity in a Delivery.
     *  0..1
     *  Delivery
     *  Minimum
     *  Quantity
     *  Quantity
     *  Quantity. Type
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
     *  Delivery. Maximum_ Quantity. Quantity
     *  The maximum quantity in a Delivery.
     *  0..1
     *  Delivery
     *  Maximum
     *  Quantity
     *  Quantity
     *  Quantity. Type
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
     *  Delivery. Maximum_ Quantity. Quantity
     *  The maximum quantity in a Delivery.
     *  0..1
     *  Delivery
     *  Maximum
     *  Quantity
     *  Quantity
     *  Quantity. Type
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
     * Gets as actualDeliveryDate
     *
     * BBIE
     *  Delivery. Actual_ Delivery Date. Date
     *  The actual Delivery date.
     *  0..1
     *  Delivery
     *  Actual
     *  Delivery Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getActualDeliveryDate()
    {
        return $this->actualDeliveryDate;
    }

    /**
     * Sets a new actualDeliveryDate
     *
     * BBIE
     *  Delivery. Actual_ Delivery Date. Date
     *  The actual Delivery date.
     *  0..1
     *  Delivery
     *  Actual
     *  Delivery Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $actualDeliveryDate
     * @return self
     */
    public function setActualDeliveryDate(\DateTime $actualDeliveryDate)
    {
        $this->actualDeliveryDate = $actualDeliveryDate;
        return $this;
    }

    /**
     * Gets as actualDeliveryTime
     *
     * BBIE
     *  Delivery. Actual_ Delivery Time. Time
     *  The actual Delivery time.
     *  0..1
     *  Delivery
     *  Actual
     *  Delivery Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getActualDeliveryTime()
    {
        return $this->actualDeliveryTime;
    }

    /**
     * Sets a new actualDeliveryTime
     *
     * BBIE
     *  Delivery. Actual_ Delivery Time. Time
     *  The actual Delivery time.
     *  0..1
     *  Delivery
     *  Actual
     *  Delivery Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $actualDeliveryTime
     * @return self
     */
    public function setActualDeliveryTime(\DateTime $actualDeliveryTime)
    {
        $this->actualDeliveryTime = $actualDeliveryTime;
        return $this;
    }

    /**
     * Gets as latestDeliveryDate
     *
     * BBIE
     *  Delivery. Latest_ Delivery Date. Date
     *  The latest delivery date allowed by the buyer.
     *  0..1
     *  Delivery
     *  Latest
     *  Delivery Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getLatestDeliveryDate()
    {
        return $this->latestDeliveryDate;
    }

    /**
     * Sets a new latestDeliveryDate
     *
     * BBIE
     *  Delivery. Latest_ Delivery Date. Date
     *  The latest delivery date allowed by the buyer.
     *  0..1
     *  Delivery
     *  Latest
     *  Delivery Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $latestDeliveryDate
     * @return self
     */
    public function setLatestDeliveryDate(\DateTime $latestDeliveryDate)
    {
        $this->latestDeliveryDate = $latestDeliveryDate;
        return $this;
    }

    /**
     * Gets as latestDeliveryTime
     *
     * BBIE
     *  Delivery. Latest_ Delivery Time. Time
     *  The latest delivery time allowed by the buyer.
     *  0..1
     *  Delivery
     *  Latest
     *  Delivery Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getLatestDeliveryTime()
    {
        return $this->latestDeliveryTime;
    }

    /**
     * Sets a new latestDeliveryTime
     *
     * BBIE
     *  Delivery. Latest_ Delivery Time. Time
     *  The latest delivery time allowed by the buyer.
     *  0..1
     *  Delivery
     *  Latest
     *  Delivery Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $latestDeliveryTime
     * @return self
     */
    public function setLatestDeliveryTime(\DateTime $latestDeliveryTime)
    {
        $this->latestDeliveryTime = $latestDeliveryTime;
        return $this;
    }

    /**
     * Gets as trackingID
     *
     * BBIE
     *  Delivery. Tracking Identifier. Identifier
     *  The delivery Tracking ID (for transport tracking).
     *  0..1
     *  Delivery
     *  Tracking Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TrackingID
     */
    public function getTrackingID()
    {
        return $this->trackingID;
    }

    /**
     * Sets a new trackingID
     *
     * BBIE
     *  Delivery. Tracking Identifier. Identifier
     *  The delivery Tracking ID (for transport tracking).
     *  0..1
     *  Delivery
     *  Tracking Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TrackingID $trackingID
     * @return self
     */
    public function setTrackingID(\NOKA\PHPUBL\UBL\Common\BasicComponents\TrackingID $trackingID)
    {
        $this->trackingID = $trackingID;
        return $this;
    }

    /**
     * Gets as deliveryAddress
     *
     * ASBIE
     *  Delivery. Delivery_ Address. Address
     *  An association to Delivery Address.
     *  0..1
     *  Delivery
     *  Delivery
     *  Address
     *  Address
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryAddress
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * Sets a new deliveryAddress
     *
     * ASBIE
     *  Delivery. Delivery_ Address. Address
     *  An association to Delivery Address.
     *  0..1
     *  Delivery
     *  Delivery
     *  Address
     *  Address
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryAddress $deliveryAddress
     * @return self
     */
    public function setDeliveryAddress(\NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryAddress $deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }

    /**
     * Gets as deliveryLocation
     *
     * ASBIE
     *  Delivery. Delivery_ Location. Location
     *  An association to Location.
     *  0..1
     *  Delivery
     *  Delivery
     *  Location
     *  Location
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryLocation
     */
    public function getDeliveryLocation()
    {
        return $this->deliveryLocation;
    }

    /**
     * Sets a new deliveryLocation
     *
     * ASBIE
     *  Delivery. Delivery_ Location. Location
     *  An association to Location.
     *  0..1
     *  Delivery
     *  Delivery
     *  Location
     *  Location
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryLocation $deliveryLocation
     * @return self
     */
    public function setDeliveryLocation(\NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryLocation $deliveryLocation)
    {
        $this->deliveryLocation = $deliveryLocation;
        return $this;
    }

    /**
     * Gets as requestedDeliveryPeriod
     *
     * ASBIE
     *  Delivery. Requested Delivery_ Period. Period
     *  The requested Period for Delivery.
     *  0..1
     *  Delivery
     *  Requested Delivery
     *  Period
     *  Period
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\RequestedDeliveryPeriod
     */
    public function getRequestedDeliveryPeriod()
    {
        return $this->requestedDeliveryPeriod;
    }

    /**
     * Sets a new requestedDeliveryPeriod
     *
     * ASBIE
     *  Delivery. Requested Delivery_ Period. Period
     *  The requested Period for Delivery.
     *  0..1
     *  Delivery
     *  Requested Delivery
     *  Period
     *  Period
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\RequestedDeliveryPeriod $requestedDeliveryPeriod
     * @return self
     */
    public function setRequestedDeliveryPeriod(\NOKA\PHPUBL\UBL\Common\AggregateComponents\RequestedDeliveryPeriod $requestedDeliveryPeriod)
    {
        $this->requestedDeliveryPeriod = $requestedDeliveryPeriod;
        return $this;
    }

    /**
     * Gets as promisedDeliveryPeriod
     *
     * ASBIE
     *  Delivery. Promised Delivery_ Period. Period
     *  The promised Period for Delivery.
     *  0..1
     *  Delivery
     *  Promised Delivery
     *  Period
     *  Period
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\PromisedDeliveryPeriod
     */
    public function getPromisedDeliveryPeriod()
    {
        return $this->promisedDeliveryPeriod;
    }

    /**
     * Sets a new promisedDeliveryPeriod
     *
     * ASBIE
     *  Delivery. Promised Delivery_ Period. Period
     *  The promised Period for Delivery.
     *  0..1
     *  Delivery
     *  Promised Delivery
     *  Period
     *  Period
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\PromisedDeliveryPeriod $promisedDeliveryPeriod
     * @return self
     */
    public function setPromisedDeliveryPeriod(\NOKA\PHPUBL\UBL\Common\AggregateComponents\PromisedDeliveryPeriod $promisedDeliveryPeriod)
    {
        $this->promisedDeliveryPeriod = $promisedDeliveryPeriod;
        return $this;
    }

    /**
     * Gets as estimatedDeliveryPeriod
     *
     * ASBIE
     *  Delivery. Estimated Delivery_ Period. Period
     *  The estimated Period for Delivery.
     *  0..1
     *  Delivery
     *  Estimated Delivery
     *  Period
     *  Period
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\EstimatedDeliveryPeriod
     */
    public function getEstimatedDeliveryPeriod()
    {
        return $this->estimatedDeliveryPeriod;
    }

    /**
     * Sets a new estimatedDeliveryPeriod
     *
     * ASBIE
     *  Delivery. Estimated Delivery_ Period. Period
     *  The estimated Period for Delivery.
     *  0..1
     *  Delivery
     *  Estimated Delivery
     *  Period
     *  Period
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\EstimatedDeliveryPeriod $estimatedDeliveryPeriod
     * @return self
     */
    public function setEstimatedDeliveryPeriod(\NOKA\PHPUBL\UBL\Common\AggregateComponents\EstimatedDeliveryPeriod $estimatedDeliveryPeriod)
    {
        $this->estimatedDeliveryPeriod = $estimatedDeliveryPeriod;
        return $this;
    }

    /**
     * Gets as deliveryParty
     *
     * ASBIE
     *  Delivery. Delivery_ Party. Party
     *  The party to whom the goods/services are delivered.
     *  0..1
     *  Delivery
     *  Delivery
     *  Party
     *  Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryParty
     */
    public function getDeliveryParty()
    {
        return $this->deliveryParty;
    }

    /**
     * Sets a new deliveryParty
     *
     * ASBIE
     *  Delivery. Delivery_ Party. Party
     *  The party to whom the goods/services are delivered.
     *  0..1
     *  Delivery
     *  Delivery
     *  Party
     *  Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryParty $deliveryParty
     * @return self
     */
    public function setDeliveryParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryParty $deliveryParty)
    {
        $this->deliveryParty = $deliveryParty;
        return $this;
    }

    /**
     * Gets as despatch
     *
     * ASBIE
     *  Delivery. Despatch
     *  An association to the Despatch.
     *  0..1
     *  Delivery
     *  Despatch
     *  Despatch
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\Despatch
     */
    public function getDespatch()
    {
        return $this->despatch;
    }

    /**
     * Sets a new despatch
     *
     * ASBIE
     *  Delivery. Despatch
     *  An association to the Despatch.
     *  0..1
     *  Delivery
     *  Despatch
     *  Despatch
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Despatch $despatch
     * @return self
     */
    public function setDespatch(\NOKA\PHPUBL\UBL\Common\AggregateComponents\Despatch $despatch)
    {
        $this->despatch = $despatch;
        return $this;
    }


}

