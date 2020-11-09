<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing LocationCoordinateType
 *
 * ABIE
 *  Location Coordinate. Details
 *  Information about physical (geographical) location.
 *  Location Coordinate
 * XSD Type: LocationCoordinateType
 */
class LocationCoordinateType
{

    /**
     * BBIE
     *  Location Coordinate. Coordinate System Code. Code
     *  An identifier for the location system used.
     *  0..1
     *  Location Coordinate
     *  Coordinate System Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\CoordinateSystemCode $coordinateSystemCode
     */
    private $coordinateSystemCode = null;

    /**
     * BBIE
     *  Location Coordinate. Latitude_ Degrees. Measure
     *  The measure of latitude in degrees.
     *  0..1
     *  Location Coordinate
     *  Latitude
     *  Degrees
     *  Measure
     *  Measure. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\LatitudeDegreesMeasure $latitudeDegreesMeasure
     */
    private $latitudeDegreesMeasure = null;

    /**
     * BBIE
     *  Location Coordinate. Latitude_ Minutes. Measure
     *  The measure of latitude in minutes.
     *  0..1
     *  Location Coordinate
     *  Latitude
     *  Minutes
     *  Measure
     *  Measure. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\LatitudeMinutesMeasure $latitudeMinutesMeasure
     */
    private $latitudeMinutesMeasure = null;

    /**
     * BBIE
     *  Location Coordinate. Latitude Direction Code. Code
     *  The direction of latitude measurement from the equator.
     *  0..1
     *  Location Coordinate
     *  Latitude Direction Code
     *  Code
     *  Latitude Direction_ Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\LatitudeDirectionCode $latitudeDirectionCode
     */
    private $latitudeDirectionCode = null;

    /**
     * BBIE
     *  Location Coordinate. Longitude_ Degrees. Measure
     *  The measure of longitude in degrees.
     *  0..1
     *  Location Coordinate
     *  Longitude
     *  Degrees
     *  Measure
     *  Measure. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\LongitudeDegreesMeasure $longitudeDegreesMeasure
     */
    private $longitudeDegreesMeasure = null;

    /**
     * BBIE
     *  Location Coordinate. Longitude_ Minutes. Measure
     *  The measure of longitude in minutes.
     *  0..1
     *  Location Coordinate
     *  Longitude
     *  Minutes
     *  Measure
     *  Measure. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\LongitudeMinutesMeasure $longitudeMinutesMeasure
     */
    private $longitudeMinutesMeasure = null;

    /**
     * BBIE
     *  Location Coordinate. Longitude Direction Code. Code
     *  The direction of longitude measurement from the meridian.
     *  0..1
     *  Location Coordinate
     *  Longitude Direction Code
     *  Code
     *  Longitude Direction_ Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\LongitudeDirectionCode $longitudeDirectionCode
     */
    private $longitudeDirectionCode = null;

    /**
     * Gets as coordinateSystemCode
     *
     * BBIE
     *  Location Coordinate. Coordinate System Code. Code
     *  An identifier for the location system used.
     *  0..1
     *  Location Coordinate
     *  Coordinate System Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\CoordinateSystemCode
     */
    public function getCoordinateSystemCode()
    {
        return $this->coordinateSystemCode;
    }

    /**
     * Sets a new coordinateSystemCode
     *
     * BBIE
     *  Location Coordinate. Coordinate System Code. Code
     *  An identifier for the location system used.
     *  0..1
     *  Location Coordinate
     *  Coordinate System Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\CoordinateSystemCode $coordinateSystemCode
     * @return self
     */
    public function setCoordinateSystemCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\CoordinateSystemCode $coordinateSystemCode)
    {
        $this->coordinateSystemCode = $coordinateSystemCode;
        return $this;
    }

    /**
     * Gets as latitudeDegreesMeasure
     *
     * BBIE
     *  Location Coordinate. Latitude_ Degrees. Measure
     *  The measure of latitude in degrees.
     *  0..1
     *  Location Coordinate
     *  Latitude
     *  Degrees
     *  Measure
     *  Measure. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\LatitudeDegreesMeasure
     */
    public function getLatitudeDegreesMeasure()
    {
        return $this->latitudeDegreesMeasure;
    }

    /**
     * Sets a new latitudeDegreesMeasure
     *
     * BBIE
     *  Location Coordinate. Latitude_ Degrees. Measure
     *  The measure of latitude in degrees.
     *  0..1
     *  Location Coordinate
     *  Latitude
     *  Degrees
     *  Measure
     *  Measure. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\LatitudeDegreesMeasure $latitudeDegreesMeasure
     * @return self
     */
    public function setLatitudeDegreesMeasure(\NOKA\PHPUBL\UBL\Common\BasicComponents\LatitudeDegreesMeasure $latitudeDegreesMeasure)
    {
        $this->latitudeDegreesMeasure = $latitudeDegreesMeasure;
        return $this;
    }

    /**
     * Gets as latitudeMinutesMeasure
     *
     * BBIE
     *  Location Coordinate. Latitude_ Minutes. Measure
     *  The measure of latitude in minutes.
     *  0..1
     *  Location Coordinate
     *  Latitude
     *  Minutes
     *  Measure
     *  Measure. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\LatitudeMinutesMeasure
     */
    public function getLatitudeMinutesMeasure()
    {
        return $this->latitudeMinutesMeasure;
    }

    /**
     * Sets a new latitudeMinutesMeasure
     *
     * BBIE
     *  Location Coordinate. Latitude_ Minutes. Measure
     *  The measure of latitude in minutes.
     *  0..1
     *  Location Coordinate
     *  Latitude
     *  Minutes
     *  Measure
     *  Measure. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\LatitudeMinutesMeasure $latitudeMinutesMeasure
     * @return self
     */
    public function setLatitudeMinutesMeasure(\NOKA\PHPUBL\UBL\Common\BasicComponents\LatitudeMinutesMeasure $latitudeMinutesMeasure)
    {
        $this->latitudeMinutesMeasure = $latitudeMinutesMeasure;
        return $this;
    }

    /**
     * Gets as latitudeDirectionCode
     *
     * BBIE
     *  Location Coordinate. Latitude Direction Code. Code
     *  The direction of latitude measurement from the equator.
     *  0..1
     *  Location Coordinate
     *  Latitude Direction Code
     *  Code
     *  Latitude Direction_ Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\LatitudeDirectionCode
     */
    public function getLatitudeDirectionCode()
    {
        return $this->latitudeDirectionCode;
    }

    /**
     * Sets a new latitudeDirectionCode
     *
     * BBIE
     *  Location Coordinate. Latitude Direction Code. Code
     *  The direction of latitude measurement from the equator.
     *  0..1
     *  Location Coordinate
     *  Latitude Direction Code
     *  Code
     *  Latitude Direction_ Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\LatitudeDirectionCode $latitudeDirectionCode
     * @return self
     */
    public function setLatitudeDirectionCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\LatitudeDirectionCode $latitudeDirectionCode)
    {
        $this->latitudeDirectionCode = $latitudeDirectionCode;
        return $this;
    }

    /**
     * Gets as longitudeDegreesMeasure
     *
     * BBIE
     *  Location Coordinate. Longitude_ Degrees. Measure
     *  The measure of longitude in degrees.
     *  0..1
     *  Location Coordinate
     *  Longitude
     *  Degrees
     *  Measure
     *  Measure. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\LongitudeDegreesMeasure
     */
    public function getLongitudeDegreesMeasure()
    {
        return $this->longitudeDegreesMeasure;
    }

    /**
     * Sets a new longitudeDegreesMeasure
     *
     * BBIE
     *  Location Coordinate. Longitude_ Degrees. Measure
     *  The measure of longitude in degrees.
     *  0..1
     *  Location Coordinate
     *  Longitude
     *  Degrees
     *  Measure
     *  Measure. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\LongitudeDegreesMeasure $longitudeDegreesMeasure
     * @return self
     */
    public function setLongitudeDegreesMeasure(\NOKA\PHPUBL\UBL\Common\BasicComponents\LongitudeDegreesMeasure $longitudeDegreesMeasure)
    {
        $this->longitudeDegreesMeasure = $longitudeDegreesMeasure;
        return $this;
    }

    /**
     * Gets as longitudeMinutesMeasure
     *
     * BBIE
     *  Location Coordinate. Longitude_ Minutes. Measure
     *  The measure of longitude in minutes.
     *  0..1
     *  Location Coordinate
     *  Longitude
     *  Minutes
     *  Measure
     *  Measure. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\LongitudeMinutesMeasure
     */
    public function getLongitudeMinutesMeasure()
    {
        return $this->longitudeMinutesMeasure;
    }

    /**
     * Sets a new longitudeMinutesMeasure
     *
     * BBIE
     *  Location Coordinate. Longitude_ Minutes. Measure
     *  The measure of longitude in minutes.
     *  0..1
     *  Location Coordinate
     *  Longitude
     *  Minutes
     *  Measure
     *  Measure. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\LongitudeMinutesMeasure $longitudeMinutesMeasure
     * @return self
     */
    public function setLongitudeMinutesMeasure(\NOKA\PHPUBL\UBL\Common\BasicComponents\LongitudeMinutesMeasure $longitudeMinutesMeasure)
    {
        $this->longitudeMinutesMeasure = $longitudeMinutesMeasure;
        return $this;
    }

    /**
     * Gets as longitudeDirectionCode
     *
     * BBIE
     *  Location Coordinate. Longitude Direction Code. Code
     *  The direction of longitude measurement from the meridian.
     *  0..1
     *  Location Coordinate
     *  Longitude Direction Code
     *  Code
     *  Longitude Direction_ Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\LongitudeDirectionCode
     */
    public function getLongitudeDirectionCode()
    {
        return $this->longitudeDirectionCode;
    }

    /**
     * Sets a new longitudeDirectionCode
     *
     * BBIE
     *  Location Coordinate. Longitude Direction Code. Code
     *  The direction of longitude measurement from the meridian.
     *  0..1
     *  Location Coordinate
     *  Longitude Direction Code
     *  Code
     *  Longitude Direction_ Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\LongitudeDirectionCode $longitudeDirectionCode
     * @return self
     */
    public function setLongitudeDirectionCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\LongitudeDirectionCode $longitudeDirectionCode)
    {
        $this->longitudeDirectionCode = $longitudeDirectionCode;
        return $this;
    }


}

