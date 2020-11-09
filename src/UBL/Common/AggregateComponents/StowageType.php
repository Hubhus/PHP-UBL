<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing StowageType
 *
 * ABIE
 *  Stowage. Details
 *  A location on board a means of transport where specified goods or transport equipment have been or are to be stowed.
 *  Stowage
 * XSD Type: StowageType
 */
class StowageType
{

    /**
     * BBIE
     *  Stowage. Location Identifier. Identifier
     *  Identifies a location on board a means of transport where specified goods or transport equipment have been or are to be stowed.
     *  0..1
     *  Stowage
     *  Location Identifier
     *  Identifier
     *  Identifier. Type
     *  Cell Location, coded
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\LocationID $locationID
     */
    private $locationID = null;

    /**
     * BBIE
     *  Stowage. Location. Text
     *  Describes a location on board a means of transport where specified goods or transport equipment have been or are to be stowed.
     *  0..n
     *  Stowage
     *  Location
     *  Text
     *  Text. Type
     *  Cell Location
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Location[] $location
     */
    private $location = [
        
    ];

    /**
     * ASBIE
     *  Stowage. Measurement_ Dimension. Dimension
     *  Associates any measurements (including lengths, mass, and volume) for this stowage.
     *  0..n
     *  Stowage
     *  Measurement
     *  Dimension
     *  Dimension
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\MeasurementDimension[] $measurementDimension
     */
    private $measurementDimension = [
        
    ];

    /**
     * Gets as locationID
     *
     * BBIE
     *  Stowage. Location Identifier. Identifier
     *  Identifies a location on board a means of transport where specified goods or transport equipment have been or are to be stowed.
     *  0..1
     *  Stowage
     *  Location Identifier
     *  Identifier
     *  Identifier. Type
     *  Cell Location, coded
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\LocationID
     */
    public function getLocationID()
    {
        return $this->locationID;
    }

    /**
     * Sets a new locationID
     *
     * BBIE
     *  Stowage. Location Identifier. Identifier
     *  Identifies a location on board a means of transport where specified goods or transport equipment have been or are to be stowed.
     *  0..1
     *  Stowage
     *  Location Identifier
     *  Identifier
     *  Identifier. Type
     *  Cell Location, coded
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\LocationID $locationID
     * @return self
     */
    public function setLocationID(\NOKA\PHPUBL\UBL\Common\BasicComponents\LocationID $locationID)
    {
        $this->locationID = $locationID;
        return $this;
    }

    /**
     * Adds as location
     *
     * BBIE
     *  Stowage. Location. Text
     *  Describes a location on board a means of transport where specified goods or transport equipment have been or are to be stowed.
     *  0..n
     *  Stowage
     *  Location
     *  Text
     *  Text. Type
     *  Cell Location
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Location $location
     */
    public function addToLocation(\NOKA\PHPUBL\UBL\Common\BasicComponents\Location $location)
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * isset location
     *
     * BBIE
     *  Stowage. Location. Text
     *  Describes a location on board a means of transport where specified goods or transport equipment have been or are to be stowed.
     *  0..n
     *  Stowage
     *  Location
     *  Text
     *  Text. Type
     *  Cell Location
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLocation($index)
    {
        return isset($this->location[$index]);
    }

    /**
     * unset location
     *
     * BBIE
     *  Stowage. Location. Text
     *  Describes a location on board a means of transport where specified goods or transport equipment have been or are to be stowed.
     *  0..n
     *  Stowage
     *  Location
     *  Text
     *  Text. Type
     *  Cell Location
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLocation($index)
    {
        unset($this->location[$index]);
    }

    /**
     * Gets as location
     *
     * BBIE
     *  Stowage. Location. Text
     *  Describes a location on board a means of transport where specified goods or transport equipment have been or are to be stowed.
     *  0..n
     *  Stowage
     *  Location
     *  Text
     *  Text. Type
     *  Cell Location
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Location[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * BBIE
     *  Stowage. Location. Text
     *  Describes a location on board a means of transport where specified goods or transport equipment have been or are to be stowed.
     *  0..n
     *  Stowage
     *  Location
     *  Text
     *  Text. Type
     *  Cell Location
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Location[] $location
     * @return self
     */
    public function setLocation(array $location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Adds as measurementDimension
     *
     * ASBIE
     *  Stowage. Measurement_ Dimension. Dimension
     *  Associates any measurements (including lengths, mass, and volume) for this stowage.
     *  0..n
     *  Stowage
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
     *  Stowage. Measurement_ Dimension. Dimension
     *  Associates any measurements (including lengths, mass, and volume) for this stowage.
     *  0..n
     *  Stowage
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
     *  Stowage. Measurement_ Dimension. Dimension
     *  Associates any measurements (including lengths, mass, and volume) for this stowage.
     *  0..n
     *  Stowage
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
     *  Stowage. Measurement_ Dimension. Dimension
     *  Associates any measurements (including lengths, mass, and volume) for this stowage.
     *  0..n
     *  Stowage
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
     *  Stowage. Measurement_ Dimension. Dimension
     *  Associates any measurements (including lengths, mass, and volume) for this stowage.
     *  0..n
     *  Stowage
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


}

