<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing LotIdentificationType
 *
 * ABIE
 *  Lot Identification. Details
 *  Information about a lot (of Item Instances).
 *  Lot Identification
 * XSD Type: LotIdentificationType
 */
class LotIdentificationType
{

    /**
     * BBIE
     *  Lot Identification. Lot Number. Identifier
     *  Identifies the lot.
     *  0..1
     *  Lot Identification
     *  Lot Number
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\LotNumberID $lotNumberID
     */
    private $lotNumberID = null;

    /**
     * BBIE
     *  Lot Identification. Expiry Date. Date
     *  The expiry date of the lot.
     *  0..1
     *  Lot Identification
     *  Expiry Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $expiryDate
     */
    private $expiryDate = null;

    /**
     * ASBIE
     *  Lot Identification. Additional_ Item Property. Item Property
     *  An association to Additional Item Property.
     *  0..n
     *  Lot Identification
     *  Additional
     *  Item Property
     *  Item Property
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AdditionalItemProperty[] $additionalItemProperty
     */
    private $additionalItemProperty = [
        
    ];

    /**
     * Gets as lotNumberID
     *
     * BBIE
     *  Lot Identification. Lot Number. Identifier
     *  Identifies the lot.
     *  0..1
     *  Lot Identification
     *  Lot Number
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\LotNumberID
     */
    public function getLotNumberID()
    {
        return $this->lotNumberID;
    }

    /**
     * Sets a new lotNumberID
     *
     * BBIE
     *  Lot Identification. Lot Number. Identifier
     *  Identifies the lot.
     *  0..1
     *  Lot Identification
     *  Lot Number
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\LotNumberID $lotNumberID
     * @return self
     */
    public function setLotNumberID(\NOKA\PHPUBL\UBL\Common\BasicComponents\LotNumberID $lotNumberID)
    {
        $this->lotNumberID = $lotNumberID;
        return $this;
    }

    /**
     * Gets as expiryDate
     *
     * BBIE
     *  Lot Identification. Expiry Date. Date
     *  The expiry date of the lot.
     *  0..1
     *  Lot Identification
     *  Expiry Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * Sets a new expiryDate
     *
     * BBIE
     *  Lot Identification. Expiry Date. Date
     *  The expiry date of the lot.
     *  0..1
     *  Lot Identification
     *  Expiry Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $expiryDate
     * @return self
     */
    public function setExpiryDate(\DateTime $expiryDate)
    {
        $this->expiryDate = $expiryDate;
        return $this;
    }

    /**
     * Adds as additionalItemProperty
     *
     * ASBIE
     *  Lot Identification. Additional_ Item Property. Item Property
     *  An association to Additional Item Property.
     *  0..n
     *  Lot Identification
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
     *  Lot Identification. Additional_ Item Property. Item Property
     *  An association to Additional Item Property.
     *  0..n
     *  Lot Identification
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
     *  Lot Identification. Additional_ Item Property. Item Property
     *  An association to Additional Item Property.
     *  0..n
     *  Lot Identification
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
     *  Lot Identification. Additional_ Item Property. Item Property
     *  An association to Additional Item Property.
     *  0..n
     *  Lot Identification
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
     *  Lot Identification. Additional_ Item Property. Item Property
     *  An association to Additional Item Property.
     *  0..n
     *  Lot Identification
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


}

