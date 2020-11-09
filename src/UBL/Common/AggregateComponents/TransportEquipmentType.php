<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing TransportEquipmentType
 *
 * ABIE
 *  Transport Equipment. Details
 *  Information about Transport Equipment; a piece of equipment used to transport goods.
 *  Transport Equipment
 *  Shipping Container, Sea Container, Rail Wagon, Pallet, Trailer, Unit Load Device, ULD
 * XSD Type: TransportEquipmentType
 */
class TransportEquipmentType
{

    /**
     * BBIE
     *  Transport Equipment. Identifier
     *  Identifies the transport equipment.
     *  0..1
     *  Transport Equipment
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "OCLU 1234567"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Transport Equipment. Transport Equipment Type Code. Code
     *  Identifies the type of provider of the transport equipment.
     *  0..1
     *  Transport Equipment
     *  Transport Equipment Type Code
     *  Code
     *  Transport Equipment Type_ Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TransportEquipmentTypeCode $transportEquipmentTypeCode
     */
    private $transportEquipmentTypeCode = null;

    /**
     * BBIE
     *  Transport Equipment. Provider Type Code. Code
     *  Identifies the type of provider of the transport equipment.
     *  0..1
     *  Transport Equipment
     *  Provider Type Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ProviderTypeCode $providerTypeCode
     */
    private $providerTypeCode = null;

    /**
     * BBIE
     *  Transport Equipment. Owner Type Code. Code
     *  Identifies the type of owner of a piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Owner Type Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\OwnerTypeCode $ownerTypeCode
     */
    private $ownerTypeCode = null;

    /**
     * BBIE
     *  Transport Equipment. Size Type Code. Code
     *  The size and type of a piece of transport equipment, expressed as a code. When the transport equipment is a shipping container, it is recommended to use ContainerSizeTypeCode for validation.
     *  0..1
     *  Transport Equipment
     *  Size Type Code
     *  Code
     *  Code. Type
     *  Container Size Type Code
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\SizeTypeCode $sizeTypeCode
     */
    private $sizeTypeCode = null;

    /**
     * BBIE
     *  Transport Equipment. Disposition Code. Code
     *  The current disposition of the transport equipment, expressed as a code.
     *  0..1
     *  Transport Equipment
     *  Disposition Code
     *  Code
     *  Code. Type
     *  Status
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\DispositionCode $dispositionCode
     */
    private $dispositionCode = null;

    /**
     * BBIE
     *  Transport Equipment. Fullness Indication Code. Code
     *  A code indicating whether a piece of transport equipment is full, partially full, or empty.
     *  0..1
     *  Transport Equipment
     *  Fullness Indication Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\FullnessIndicationCode $fullnessIndicationCode
     */
    private $fullnessIndicationCode = null;

    /**
     * BBIE
     *  Transport Equipment. Refrigeration On_ Indicator. Indicator
     *  Indicates whether the transport equipment's refrigeration is on (true) or off (false).
     *  0..1
     *  Transport Equipment
     *  Refrigeration On
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $refrigerationOnIndicator
     */
    private $refrigerationOnIndicator = null;

    /**
     * BBIE
     *  Transport Equipment. Information. Text
     *  Additional information about the transport equipment.
     *  0..1
     *  Transport Equipment
     *  Information
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Information $information
     */
    private $information = null;

    /**
     * BBIE
     *  Transport Equipment. Returnability_ Indicator. Indicator
     *  Indicates whether a particular item of transport equipment is returnable.
     *  0..1
     *  Transport Equipment
     *  Returnability
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $returnabilityIndicator
     */
    private $returnabilityIndicator = null;

    /**
     * BBIE
     *  Transport Equipment. Legal Status_ Indicator. Indicator
     *  Legal status of the transport equipment with respect to the Container Convention code.
     *  0..1
     *  Transport Equipment
     *  Legal Status
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $legalStatusIndicator
     */
    private $legalStatusIndicator = null;

    /**
     * ASBIE
     *  Transport Equipment. Measurement_ Dimension. Dimension
     *  An association to Dimension.
     *  0..n
     *  Transport Equipment
     *  Measurement
     *  Dimension
     *  Dimension
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\MeasurementDimension[] $measurementDimension
     */
    private $measurementDimension = [
        
    ];

    /**
     * ASBIE
     *  Transport Equipment. Transport Equipment Seal
     *  An association to Transport Equipment Seal.
     *  0..n
     *  Transport Equipment
     *  Transport Equipment Seal
     *  Transport Equipment Seal
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransportEquipmentSeal[] $transportEquipmentSeal
     */
    private $transportEquipmentSeal = [
        
    ];

    /**
     * ASBIE
     *  Transport Equipment. Minimum_ Temperature. Temperature
     *  The minimum required operating temperature for the container (reefer).
     *  0..1
     *  Transport Equipment
     *  Minimum
     *  Temperature
     *  Temperature
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\MinimumTemperature $minimumTemperature
     */
    private $minimumTemperature = null;

    /**
     * ASBIE
     *  Transport Equipment. Maximum_ Temperature. Temperature
     *  The maximum required operating temperature for the container (reefer).
     *  0..1
     *  Transport Equipment
     *  Maximum
     *  Temperature
     *  Temperature
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\MaximumTemperature $maximumTemperature
     */
    private $maximumTemperature = null;

    /**
     * ASBIE
     *  Transport Equipment. Provider_ Party. Party
     *  The party that provides the transport equipment.
     *  0..1
     *  Transport Equipment
     *  Provider
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ProviderParty $providerParty
     */
    private $providerParty = null;

    /**
     * ASBIE
     *  Transport Equipment. Loading Proof_ Party. Party
     *  The authorized party responsible for certifying that the goods were loaded into the transport equipment.
     *  0..1
     *  Transport Equipment
     *  Loading Proof
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\LoadingProofParty $loadingProofParty
     */
    private $loadingProofParty = null;

    /**
     * ASBIE
     *  Transport Equipment. Loading_ Location. Location
     *  Identifies the location where the goods are loaded into the transport equipment.
     *  0..1
     *  Transport Equipment
     *  Loading
     *  Location
     *  Location
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\LoadingLocation $loadingLocation
     */
    private $loadingLocation = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Transport Equipment. Identifier
     *  Identifies the transport equipment.
     *  0..1
     *  Transport Equipment
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "OCLU 1234567"
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
     *  Transport Equipment. Identifier
     *  Identifies the transport equipment.
     *  0..1
     *  Transport Equipment
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "OCLU 1234567"
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
     * Gets as transportEquipmentTypeCode
     *
     * BBIE
     *  Transport Equipment. Transport Equipment Type Code. Code
     *  Identifies the type of provider of the transport equipment.
     *  0..1
     *  Transport Equipment
     *  Transport Equipment Type Code
     *  Code
     *  Transport Equipment Type_ Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TransportEquipmentTypeCode
     */
    public function getTransportEquipmentTypeCode()
    {
        return $this->transportEquipmentTypeCode;
    }

    /**
     * Sets a new transportEquipmentTypeCode
     *
     * BBIE
     *  Transport Equipment. Transport Equipment Type Code. Code
     *  Identifies the type of provider of the transport equipment.
     *  0..1
     *  Transport Equipment
     *  Transport Equipment Type Code
     *  Code
     *  Transport Equipment Type_ Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TransportEquipmentTypeCode $transportEquipmentTypeCode
     * @return self
     */
    public function setTransportEquipmentTypeCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\TransportEquipmentTypeCode $transportEquipmentTypeCode)
    {
        $this->transportEquipmentTypeCode = $transportEquipmentTypeCode;
        return $this;
    }

    /**
     * Gets as providerTypeCode
     *
     * BBIE
     *  Transport Equipment. Provider Type Code. Code
     *  Identifies the type of provider of the transport equipment.
     *  0..1
     *  Transport Equipment
     *  Provider Type Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ProviderTypeCode
     */
    public function getProviderTypeCode()
    {
        return $this->providerTypeCode;
    }

    /**
     * Sets a new providerTypeCode
     *
     * BBIE
     *  Transport Equipment. Provider Type Code. Code
     *  Identifies the type of provider of the transport equipment.
     *  0..1
     *  Transport Equipment
     *  Provider Type Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ProviderTypeCode $providerTypeCode
     * @return self
     */
    public function setProviderTypeCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\ProviderTypeCode $providerTypeCode)
    {
        $this->providerTypeCode = $providerTypeCode;
        return $this;
    }

    /**
     * Gets as ownerTypeCode
     *
     * BBIE
     *  Transport Equipment. Owner Type Code. Code
     *  Identifies the type of owner of a piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Owner Type Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\OwnerTypeCode
     */
    public function getOwnerTypeCode()
    {
        return $this->ownerTypeCode;
    }

    /**
     * Sets a new ownerTypeCode
     *
     * BBIE
     *  Transport Equipment. Owner Type Code. Code
     *  Identifies the type of owner of a piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Owner Type Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\OwnerTypeCode $ownerTypeCode
     * @return self
     */
    public function setOwnerTypeCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\OwnerTypeCode $ownerTypeCode)
    {
        $this->ownerTypeCode = $ownerTypeCode;
        return $this;
    }

    /**
     * Gets as sizeTypeCode
     *
     * BBIE
     *  Transport Equipment. Size Type Code. Code
     *  The size and type of a piece of transport equipment, expressed as a code. When the transport equipment is a shipping container, it is recommended to use ContainerSizeTypeCode for validation.
     *  0..1
     *  Transport Equipment
     *  Size Type Code
     *  Code
     *  Code. Type
     *  Container Size Type Code
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\SizeTypeCode
     */
    public function getSizeTypeCode()
    {
        return $this->sizeTypeCode;
    }

    /**
     * Sets a new sizeTypeCode
     *
     * BBIE
     *  Transport Equipment. Size Type Code. Code
     *  The size and type of a piece of transport equipment, expressed as a code. When the transport equipment is a shipping container, it is recommended to use ContainerSizeTypeCode for validation.
     *  0..1
     *  Transport Equipment
     *  Size Type Code
     *  Code
     *  Code. Type
     *  Container Size Type Code
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\SizeTypeCode $sizeTypeCode
     * @return self
     */
    public function setSizeTypeCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\SizeTypeCode $sizeTypeCode)
    {
        $this->sizeTypeCode = $sizeTypeCode;
        return $this;
    }

    /**
     * Gets as dispositionCode
     *
     * BBIE
     *  Transport Equipment. Disposition Code. Code
     *  The current disposition of the transport equipment, expressed as a code.
     *  0..1
     *  Transport Equipment
     *  Disposition Code
     *  Code
     *  Code. Type
     *  Status
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\DispositionCode
     */
    public function getDispositionCode()
    {
        return $this->dispositionCode;
    }

    /**
     * Sets a new dispositionCode
     *
     * BBIE
     *  Transport Equipment. Disposition Code. Code
     *  The current disposition of the transport equipment, expressed as a code.
     *  0..1
     *  Transport Equipment
     *  Disposition Code
     *  Code
     *  Code. Type
     *  Status
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\DispositionCode $dispositionCode
     * @return self
     */
    public function setDispositionCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\DispositionCode $dispositionCode)
    {
        $this->dispositionCode = $dispositionCode;
        return $this;
    }

    /**
     * Gets as fullnessIndicationCode
     *
     * BBIE
     *  Transport Equipment. Fullness Indication Code. Code
     *  A code indicating whether a piece of transport equipment is full, partially full, or empty.
     *  0..1
     *  Transport Equipment
     *  Fullness Indication Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\FullnessIndicationCode
     */
    public function getFullnessIndicationCode()
    {
        return $this->fullnessIndicationCode;
    }

    /**
     * Sets a new fullnessIndicationCode
     *
     * BBIE
     *  Transport Equipment. Fullness Indication Code. Code
     *  A code indicating whether a piece of transport equipment is full, partially full, or empty.
     *  0..1
     *  Transport Equipment
     *  Fullness Indication Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\FullnessIndicationCode $fullnessIndicationCode
     * @return self
     */
    public function setFullnessIndicationCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\FullnessIndicationCode $fullnessIndicationCode)
    {
        $this->fullnessIndicationCode = $fullnessIndicationCode;
        return $this;
    }

    /**
     * Gets as refrigerationOnIndicator
     *
     * BBIE
     *  Transport Equipment. Refrigeration On_ Indicator. Indicator
     *  Indicates whether the transport equipment's refrigeration is on (true) or off (false).
     *  0..1
     *  Transport Equipment
     *  Refrigeration On
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getRefrigerationOnIndicator()
    {
        return $this->refrigerationOnIndicator;
    }

    /**
     * Sets a new refrigerationOnIndicator
     *
     * BBIE
     *  Transport Equipment. Refrigeration On_ Indicator. Indicator
     *  Indicates whether the transport equipment's refrigeration is on (true) or off (false).
     *  0..1
     *  Transport Equipment
     *  Refrigeration On
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $refrigerationOnIndicator
     * @return self
     */
    public function setRefrigerationOnIndicator($refrigerationOnIndicator)
    {
        $this->refrigerationOnIndicator = $refrigerationOnIndicator;
        return $this;
    }

    /**
     * Gets as information
     *
     * BBIE
     *  Transport Equipment. Information. Text
     *  Additional information about the transport equipment.
     *  0..1
     *  Transport Equipment
     *  Information
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Information
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Sets a new information
     *
     * BBIE
     *  Transport Equipment. Information. Text
     *  Additional information about the transport equipment.
     *  0..1
     *  Transport Equipment
     *  Information
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Information $information
     * @return self
     */
    public function setInformation(\NOKA\PHPUBL\UBL\Common\BasicComponents\Information $information)
    {
        $this->information = $information;
        return $this;
    }

    /**
     * Gets as returnabilityIndicator
     *
     * BBIE
     *  Transport Equipment. Returnability_ Indicator. Indicator
     *  Indicates whether a particular item of transport equipment is returnable.
     *  0..1
     *  Transport Equipment
     *  Returnability
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getReturnabilityIndicator()
    {
        return $this->returnabilityIndicator;
    }

    /**
     * Sets a new returnabilityIndicator
     *
     * BBIE
     *  Transport Equipment. Returnability_ Indicator. Indicator
     *  Indicates whether a particular item of transport equipment is returnable.
     *  0..1
     *  Transport Equipment
     *  Returnability
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $returnabilityIndicator
     * @return self
     */
    public function setReturnabilityIndicator($returnabilityIndicator)
    {
        $this->returnabilityIndicator = $returnabilityIndicator;
        return $this;
    }

    /**
     * Gets as legalStatusIndicator
     *
     * BBIE
     *  Transport Equipment. Legal Status_ Indicator. Indicator
     *  Legal status of the transport equipment with respect to the Container Convention code.
     *  0..1
     *  Transport Equipment
     *  Legal Status
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getLegalStatusIndicator()
    {
        return $this->legalStatusIndicator;
    }

    /**
     * Sets a new legalStatusIndicator
     *
     * BBIE
     *  Transport Equipment. Legal Status_ Indicator. Indicator
     *  Legal status of the transport equipment with respect to the Container Convention code.
     *  0..1
     *  Transport Equipment
     *  Legal Status
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $legalStatusIndicator
     * @return self
     */
    public function setLegalStatusIndicator($legalStatusIndicator)
    {
        $this->legalStatusIndicator = $legalStatusIndicator;
        return $this;
    }

    /**
     * Adds as measurementDimension
     *
     * ASBIE
     *  Transport Equipment. Measurement_ Dimension. Dimension
     *  An association to Dimension.
     *  0..n
     *  Transport Equipment
     *  Measurement
     *  Dimension
     *  Dimension
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\MeasurementDimension $measurementDimension
     */
    public function addToMeasurementDimension(\NOKA\PHPUBL\UBL\Common\AggregateComponents\MeasurementDimension $measurementDimension)
    {
        $this->measurementDimension[] = $measurementDimension;
        return $this;
    }

    /**
     * isset measurementDimension
     *
     * ASBIE
     *  Transport Equipment. Measurement_ Dimension. Dimension
     *  An association to Dimension.
     *  0..n
     *  Transport Equipment
     *  Measurement
     *  Dimension
     *  Dimension
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMeasurementDimension($index)
    {
        return isset($this->measurementDimension[$index]);
    }

    /**
     * unset measurementDimension
     *
     * ASBIE
     *  Transport Equipment. Measurement_ Dimension. Dimension
     *  An association to Dimension.
     *  0..n
     *  Transport Equipment
     *  Measurement
     *  Dimension
     *  Dimension
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMeasurementDimension($index)
    {
        unset($this->measurementDimension[$index]);
    }

    /**
     * Gets as measurementDimension
     *
     * ASBIE
     *  Transport Equipment. Measurement_ Dimension. Dimension
     *  An association to Dimension.
     *  0..n
     *  Transport Equipment
     *  Measurement
     *  Dimension
     *  Dimension
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\MeasurementDimension[]
     */
    public function getMeasurementDimension()
    {
        return $this->measurementDimension;
    }

    /**
     * Sets a new measurementDimension
     *
     * ASBIE
     *  Transport Equipment. Measurement_ Dimension. Dimension
     *  An association to Dimension.
     *  0..n
     *  Transport Equipment
     *  Measurement
     *  Dimension
     *  Dimension
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\MeasurementDimension[] $measurementDimension
     * @return self
     */
    public function setMeasurementDimension(array $measurementDimension)
    {
        $this->measurementDimension = $measurementDimension;
        return $this;
    }

    /**
     * Adds as transportEquipmentSeal
     *
     * ASBIE
     *  Transport Equipment. Transport Equipment Seal
     *  An association to Transport Equipment Seal.
     *  0..n
     *  Transport Equipment
     *  Transport Equipment Seal
     *  Transport Equipment Seal
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransportEquipmentSeal $transportEquipmentSeal
     */
    public function addToTransportEquipmentSeal(\NOKA\PHPUBL\UBL\Common\AggregateComponents\TransportEquipmentSeal $transportEquipmentSeal)
    {
        $this->transportEquipmentSeal[] = $transportEquipmentSeal;
        return $this;
    }

    /**
     * isset transportEquipmentSeal
     *
     * ASBIE
     *  Transport Equipment. Transport Equipment Seal
     *  An association to Transport Equipment Seal.
     *  0..n
     *  Transport Equipment
     *  Transport Equipment Seal
     *  Transport Equipment Seal
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportEquipmentSeal($index)
    {
        return isset($this->transportEquipmentSeal[$index]);
    }

    /**
     * unset transportEquipmentSeal
     *
     * ASBIE
     *  Transport Equipment. Transport Equipment Seal
     *  An association to Transport Equipment Seal.
     *  0..n
     *  Transport Equipment
     *  Transport Equipment Seal
     *  Transport Equipment Seal
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportEquipmentSeal($index)
    {
        unset($this->transportEquipmentSeal[$index]);
    }

    /**
     * Gets as transportEquipmentSeal
     *
     * ASBIE
     *  Transport Equipment. Transport Equipment Seal
     *  An association to Transport Equipment Seal.
     *  0..n
     *  Transport Equipment
     *  Transport Equipment Seal
     *  Transport Equipment Seal
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransportEquipmentSeal[]
     */
    public function getTransportEquipmentSeal()
    {
        return $this->transportEquipmentSeal;
    }

    /**
     * Sets a new transportEquipmentSeal
     *
     * ASBIE
     *  Transport Equipment. Transport Equipment Seal
     *  An association to Transport Equipment Seal.
     *  0..n
     *  Transport Equipment
     *  Transport Equipment Seal
     *  Transport Equipment Seal
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransportEquipmentSeal[] $transportEquipmentSeal
     * @return self
     */
    public function setTransportEquipmentSeal(array $transportEquipmentSeal)
    {
        $this->transportEquipmentSeal = $transportEquipmentSeal;
        return $this;
    }

    /**
     * Gets as minimumTemperature
     *
     * ASBIE
     *  Transport Equipment. Minimum_ Temperature. Temperature
     *  The minimum required operating temperature for the container (reefer).
     *  0..1
     *  Transport Equipment
     *  Minimum
     *  Temperature
     *  Temperature
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\MinimumTemperature
     */
    public function getMinimumTemperature()
    {
        return $this->minimumTemperature;
    }

    /**
     * Sets a new minimumTemperature
     *
     * ASBIE
     *  Transport Equipment. Minimum_ Temperature. Temperature
     *  The minimum required operating temperature for the container (reefer).
     *  0..1
     *  Transport Equipment
     *  Minimum
     *  Temperature
     *  Temperature
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\MinimumTemperature $minimumTemperature
     * @return self
     */
    public function setMinimumTemperature(\NOKA\PHPUBL\UBL\Common\AggregateComponents\MinimumTemperature $minimumTemperature)
    {
        $this->minimumTemperature = $minimumTemperature;
        return $this;
    }

    /**
     * Gets as maximumTemperature
     *
     * ASBIE
     *  Transport Equipment. Maximum_ Temperature. Temperature
     *  The maximum required operating temperature for the container (reefer).
     *  0..1
     *  Transport Equipment
     *  Maximum
     *  Temperature
     *  Temperature
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\MaximumTemperature
     */
    public function getMaximumTemperature()
    {
        return $this->maximumTemperature;
    }

    /**
     * Sets a new maximumTemperature
     *
     * ASBIE
     *  Transport Equipment. Maximum_ Temperature. Temperature
     *  The maximum required operating temperature for the container (reefer).
     *  0..1
     *  Transport Equipment
     *  Maximum
     *  Temperature
     *  Temperature
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\MaximumTemperature $maximumTemperature
     * @return self
     */
    public function setMaximumTemperature(\NOKA\PHPUBL\UBL\Common\AggregateComponents\MaximumTemperature $maximumTemperature)
    {
        $this->maximumTemperature = $maximumTemperature;
        return $this;
    }

    /**
     * Gets as providerParty
     *
     * ASBIE
     *  Transport Equipment. Provider_ Party. Party
     *  The party that provides the transport equipment.
     *  0..1
     *  Transport Equipment
     *  Provider
     *  Party
     *  Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ProviderParty
     */
    public function getProviderParty()
    {
        return $this->providerParty;
    }

    /**
     * Sets a new providerParty
     *
     * ASBIE
     *  Transport Equipment. Provider_ Party. Party
     *  The party that provides the transport equipment.
     *  0..1
     *  Transport Equipment
     *  Provider
     *  Party
     *  Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ProviderParty $providerParty
     * @return self
     */
    public function setProviderParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ProviderParty $providerParty)
    {
        $this->providerParty = $providerParty;
        return $this;
    }

    /**
     * Gets as loadingProofParty
     *
     * ASBIE
     *  Transport Equipment. Loading Proof_ Party. Party
     *  The authorized party responsible for certifying that the goods were loaded into the transport equipment.
     *  0..1
     *  Transport Equipment
     *  Loading Proof
     *  Party
     *  Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\LoadingProofParty
     */
    public function getLoadingProofParty()
    {
        return $this->loadingProofParty;
    }

    /**
     * Sets a new loadingProofParty
     *
     * ASBIE
     *  Transport Equipment. Loading Proof_ Party. Party
     *  The authorized party responsible for certifying that the goods were loaded into the transport equipment.
     *  0..1
     *  Transport Equipment
     *  Loading Proof
     *  Party
     *  Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\LoadingProofParty $loadingProofParty
     * @return self
     */
    public function setLoadingProofParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\LoadingProofParty $loadingProofParty)
    {
        $this->loadingProofParty = $loadingProofParty;
        return $this;
    }

    /**
     * Gets as loadingLocation
     *
     * ASBIE
     *  Transport Equipment. Loading_ Location. Location
     *  Identifies the location where the goods are loaded into the transport equipment.
     *  0..1
     *  Transport Equipment
     *  Loading
     *  Location
     *  Location
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\LoadingLocation
     */
    public function getLoadingLocation()
    {
        return $this->loadingLocation;
    }

    /**
     * Sets a new loadingLocation
     *
     * ASBIE
     *  Transport Equipment. Loading_ Location. Location
     *  Identifies the location where the goods are loaded into the transport equipment.
     *  0..1
     *  Transport Equipment
     *  Loading
     *  Location
     *  Location
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\LoadingLocation $loadingLocation
     * @return self
     */
    public function setLoadingLocation(\NOKA\PHPUBL\UBL\Common\AggregateComponents\LoadingLocation $loadingLocation)
    {
        $this->loadingLocation = $loadingLocation;
        return $this;
    }


}

