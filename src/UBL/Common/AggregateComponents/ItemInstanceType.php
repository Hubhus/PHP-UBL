<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing ItemInstanceType
 *
 * ABIE
 *  Item Instance. Details
 *  Information about a specific instance of an item.
 *  Item Instance
 * XSD Type: ItemInstanceType
 */
class ItemInstanceType
{

    /**
     * BBIE
     *  Item Instance. Product Trace_ Identifier. Identifier
     *  An identifier used for tracing the item, such as the EPC number used in RFID.
     *  0..1
     *  Item Instance
     *  Product Trace
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ProductTraceID $productTraceID
     */
    private $productTraceID = null;

    /**
     * BBIE
     *  Item Instance. Manufacture Date. Date
     *  The date of manufacture of the Item Instance.
     *  0..1
     *  Item Instance
     *  Manufacture Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $manufactureDate
     */
    private $manufactureDate = null;

    /**
     * BBIE
     *  Item Instance. Manufacture Time. Time
     *  The time of manufacture of the Item Instance.
     *  0..1
     *  Item Instance
     *  Manufacture Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $manufactureTime
     */
    private $manufactureTime = null;

    /**
     * BBIE
     *  Item Instance. Registration Identifier. Identifier
     *  The registration identifier of the Item Instance.
     *  0..1
     *  Item Instance
     *  Registration Identifier
     *  Identifier
     *  Identifier. Type
     *  car registration or licensing number
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\RegistrationID $registrationID
     */
    private $registrationID = null;

    /**
     * BBIE
     *  Item Instance. Serial Identifier. Identifier
     *  The serial number of the Item Instance.
     *  0..1
     *  Item Instance
     *  Serial Identifier
     *  Identifier
     *  Identifier. Type
     *  chassis number of a car
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\SerialID $serialID
     */
    private $serialID = null;

    /**
     * ASBIE
     *  Item Instance. Additional_ Item Property. Item Property
     *  An association to Additional Item Property.
     *  0..n
     *  Item Instance
     *  Additional
     *  Item Property
     *  Item Property
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AdditionalItemProperty[] $additionalItemProperty
     */
    private $additionalItemProperty = [
        
    ];

    /**
     * ASBIE
     *  Item Instance. Lot Identification
     *  Associates the item instance with its lot identification (the identification that allows recall of the item if necessary).
     *  0..1
     *  Item Instance
     *  Lot Identification
     *  Lot Identification
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\LotIdentification $lotIdentification
     */
    private $lotIdentification = null;

    /**
     * Gets as productTraceID
     *
     * BBIE
     *  Item Instance. Product Trace_ Identifier. Identifier
     *  An identifier used for tracing the item, such as the EPC number used in RFID.
     *  0..1
     *  Item Instance
     *  Product Trace
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ProductTraceID
     */
    public function getProductTraceID()
    {
        return $this->productTraceID;
    }

    /**
     * Sets a new productTraceID
     *
     * BBIE
     *  Item Instance. Product Trace_ Identifier. Identifier
     *  An identifier used for tracing the item, such as the EPC number used in RFID.
     *  0..1
     *  Item Instance
     *  Product Trace
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ProductTraceID $productTraceID
     * @return self
     */
    public function setProductTraceID(\NOKA\PHPUBL\UBL\Common\BasicComponents\ProductTraceID $productTraceID)
    {
        $this->productTraceID = $productTraceID;
        return $this;
    }

    /**
     * Gets as manufactureDate
     *
     * BBIE
     *  Item Instance. Manufacture Date. Date
     *  The date of manufacture of the Item Instance.
     *  0..1
     *  Item Instance
     *  Manufacture Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getManufactureDate()
    {
        return $this->manufactureDate;
    }

    /**
     * Sets a new manufactureDate
     *
     * BBIE
     *  Item Instance. Manufacture Date. Date
     *  The date of manufacture of the Item Instance.
     *  0..1
     *  Item Instance
     *  Manufacture Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $manufactureDate
     * @return self
     */
    public function setManufactureDate(\DateTime $manufactureDate)
    {
        $this->manufactureDate = $manufactureDate;
        return $this;
    }

    /**
     * Gets as manufactureTime
     *
     * BBIE
     *  Item Instance. Manufacture Time. Time
     *  The time of manufacture of the Item Instance.
     *  0..1
     *  Item Instance
     *  Manufacture Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getManufactureTime()
    {
        return $this->manufactureTime;
    }

    /**
     * Sets a new manufactureTime
     *
     * BBIE
     *  Item Instance. Manufacture Time. Time
     *  The time of manufacture of the Item Instance.
     *  0..1
     *  Item Instance
     *  Manufacture Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $manufactureTime
     * @return self
     */
    public function setManufactureTime(\DateTime $manufactureTime)
    {
        $this->manufactureTime = $manufactureTime;
        return $this;
    }

    /**
     * Gets as registrationID
     *
     * BBIE
     *  Item Instance. Registration Identifier. Identifier
     *  The registration identifier of the Item Instance.
     *  0..1
     *  Item Instance
     *  Registration Identifier
     *  Identifier
     *  Identifier. Type
     *  car registration or licensing number
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\RegistrationID
     */
    public function getRegistrationID()
    {
        return $this->registrationID;
    }

    /**
     * Sets a new registrationID
     *
     * BBIE
     *  Item Instance. Registration Identifier. Identifier
     *  The registration identifier of the Item Instance.
     *  0..1
     *  Item Instance
     *  Registration Identifier
     *  Identifier
     *  Identifier. Type
     *  car registration or licensing number
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\RegistrationID $registrationID
     * @return self
     */
    public function setRegistrationID(\NOKA\PHPUBL\UBL\Common\BasicComponents\RegistrationID $registrationID)
    {
        $this->registrationID = $registrationID;
        return $this;
    }

    /**
     * Gets as serialID
     *
     * BBIE
     *  Item Instance. Serial Identifier. Identifier
     *  The serial number of the Item Instance.
     *  0..1
     *  Item Instance
     *  Serial Identifier
     *  Identifier
     *  Identifier. Type
     *  chassis number of a car
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\SerialID
     */
    public function getSerialID()
    {
        return $this->serialID;
    }

    /**
     * Sets a new serialID
     *
     * BBIE
     *  Item Instance. Serial Identifier. Identifier
     *  The serial number of the Item Instance.
     *  0..1
     *  Item Instance
     *  Serial Identifier
     *  Identifier
     *  Identifier. Type
     *  chassis number of a car
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\SerialID $serialID
     * @return self
     */
    public function setSerialID(\NOKA\PHPUBL\UBL\Common\BasicComponents\SerialID $serialID)
    {
        $this->serialID = $serialID;
        return $this;
    }

    /**
     * Adds as additionalItemProperty
     *
     * ASBIE
     *  Item Instance. Additional_ Item Property. Item Property
     *  An association to Additional Item Property.
     *  0..n
     *  Item Instance
     *  Additional
     *  Item Property
     *  Item Property
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\AdditionalItemProperty $additionalItemProperty
     */
    public function addToAdditionalItemProperty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\AdditionalItemProperty $additionalItemProperty)
    {
        $this->additionalItemProperty[] = $additionalItemProperty;
        return $this;
    }

    /**
     * isset additionalItemProperty
     *
     * ASBIE
     *  Item Instance. Additional_ Item Property. Item Property
     *  An association to Additional Item Property.
     *  0..n
     *  Item Instance
     *  Additional
     *  Item Property
     *  Item Property
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalItemProperty($index)
    {
        return isset($this->additionalItemProperty[$index]);
    }

    /**
     * unset additionalItemProperty
     *
     * ASBIE
     *  Item Instance. Additional_ Item Property. Item Property
     *  An association to Additional Item Property.
     *  0..n
     *  Item Instance
     *  Additional
     *  Item Property
     *  Item Property
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalItemProperty($index)
    {
        unset($this->additionalItemProperty[$index]);
    }

    /**
     * Gets as additionalItemProperty
     *
     * ASBIE
     *  Item Instance. Additional_ Item Property. Item Property
     *  An association to Additional Item Property.
     *  0..n
     *  Item Instance
     *  Additional
     *  Item Property
     *  Item Property
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\AdditionalItemProperty[]
     */
    public function getAdditionalItemProperty()
    {
        return $this->additionalItemProperty;
    }

    /**
     * Sets a new additionalItemProperty
     *
     * ASBIE
     *  Item Instance. Additional_ Item Property. Item Property
     *  An association to Additional Item Property.
     *  0..n
     *  Item Instance
     *  Additional
     *  Item Property
     *  Item Property
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\AdditionalItemProperty[] $additionalItemProperty
     * @return self
     */
    public function setAdditionalItemProperty(array $additionalItemProperty)
    {
        $this->additionalItemProperty = $additionalItemProperty;
        return $this;
    }

    /**
     * Gets as lotIdentification
     *
     * ASBIE
     *  Item Instance. Lot Identification
     *  Associates the item instance with its lot identification (the identification that allows recall of the item if necessary).
     *  0..1
     *  Item Instance
     *  Lot Identification
     *  Lot Identification
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\LotIdentification
     */
    public function getLotIdentification()
    {
        return $this->lotIdentification;
    }

    /**
     * Sets a new lotIdentification
     *
     * ASBIE
     *  Item Instance. Lot Identification
     *  Associates the item instance with its lot identification (the identification that allows recall of the item if necessary).
     *  0..1
     *  Item Instance
     *  Lot Identification
     *  Lot Identification
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\LotIdentification $lotIdentification
     * @return self
     */
    public function setLotIdentification(\NOKA\PHPUBL\UBL\Common\AggregateComponents\LotIdentification $lotIdentification)
    {
        $this->lotIdentification = $lotIdentification;
        return $this;
    }


}

