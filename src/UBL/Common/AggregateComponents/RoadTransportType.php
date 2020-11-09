<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing RoadTransportType
 *
 * ABIE
 *  Road Transport. Details
 *  Describes a road transport vehicle.
 *  Road Transport
 * XSD Type: RoadTransportType
 */
class RoadTransportType
{

    /**
     * BBIE
     *  Road Transport. License Plate Identifier. Identifier
     *  Identifies a specific vehicle.
     *  1
     *  Road Transport
     *  License Plate Identifier
     *  Identifier
     *  Identifier. Type
     *  Vehicle registration number (WCO ID 167)
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\LicensePlateID $licensePlateID
     */
    private $licensePlateID = null;

    /**
     * Gets as licensePlateID
     *
     * BBIE
     *  Road Transport. License Plate Identifier. Identifier
     *  Identifies a specific vehicle.
     *  1
     *  Road Transport
     *  License Plate Identifier
     *  Identifier
     *  Identifier. Type
     *  Vehicle registration number (WCO ID 167)
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\LicensePlateID
     */
    public function getLicensePlateID()
    {
        return $this->licensePlateID;
    }

    /**
     * Sets a new licensePlateID
     *
     * BBIE
     *  Road Transport. License Plate Identifier. Identifier
     *  Identifies a specific vehicle.
     *  1
     *  Road Transport
     *  License Plate Identifier
     *  Identifier
     *  Identifier. Type
     *  Vehicle registration number (WCO ID 167)
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\LicensePlateID $licensePlateID
     * @return self
     */
    public function setLicensePlateID(\NOKA\PHPUBL\UBL\Common\BasicComponents\LicensePlateID $licensePlateID)
    {
        $this->licensePlateID = $licensePlateID;
        return $this;
    }


}

