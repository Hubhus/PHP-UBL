<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing AirTransportType
 *
 * ABIE
 *  Air Transport. Details
 *  Information related to an aircraft.
 *  Air Transport
 * XSD Type: AirTransportType
 */
class AirTransportType
{

    /**
     * BBIE
     *  Air Transport. Aircraft Identifier. Identifier
     *  Identifies a specific aircraft.
     *  1
     *  Air Transport
     *  Aircraft Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AircraftID $aircraftID
     */
    private $aircraftID = null;

    /**
     * Gets as aircraftID
     *
     * BBIE
     *  Air Transport. Aircraft Identifier. Identifier
     *  Identifies a specific aircraft.
     *  1
     *  Air Transport
     *  Aircraft Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\AircraftID
     */
    public function getAircraftID()
    {
        return $this->aircraftID;
    }

    /**
     * Sets a new aircraftID
     *
     * BBIE
     *  Air Transport. Aircraft Identifier. Identifier
     *  Identifies a specific aircraft.
     *  1
     *  Air Transport
     *  Aircraft Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\AircraftID $aircraftID
     * @return self
     */
    public function setAircraftID(\NOKA\PHPUBL\UBL\Common\BasicComponents\AircraftID $aircraftID)
    {
        $this->aircraftID = $aircraftID;
        return $this;
    }


}

