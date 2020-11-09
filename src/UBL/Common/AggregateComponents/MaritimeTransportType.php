<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing MaritimeTransportType
 *
 * ABIE
 *  Maritime Transport. Details
 *  Describes a water (including sea, river, and canal) transport vessel.
 *  Maritime Transport
 * XSD Type: MaritimeTransportType
 */
class MaritimeTransportType
{

    /**
     * BBIE
     *  Maritime Transport. Vessel Identifier. Identifier
     *  Identifies a specific vessel.
     *  0..1
     *  Maritime Transport
     *  Vessel Identifier
     *  Identifier
     *  Identifier. Type
     *  Lloyds Number, Registration Number (WCO ID 167)
     *  International Maritime Organisation number of a vessel
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\VesselID $vesselID
     */
    private $vesselID = null;

    /**
     * BBIE
     *  Maritime Transport. Vessel Name. Name
     *  The name of the vessel.
     *  0..1
     *  Maritime Transport
     *  Vessel Name
     *  Name
     *  Name. Type
     *  Ships Name
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\VesselName $vesselName
     */
    private $vesselName = null;

    /**
     * Gets as vesselID
     *
     * BBIE
     *  Maritime Transport. Vessel Identifier. Identifier
     *  Identifies a specific vessel.
     *  0..1
     *  Maritime Transport
     *  Vessel Identifier
     *  Identifier
     *  Identifier. Type
     *  Lloyds Number, Registration Number (WCO ID 167)
     *  International Maritime Organisation number of a vessel
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\VesselID
     */
    public function getVesselID()
    {
        return $this->vesselID;
    }

    /**
     * Sets a new vesselID
     *
     * BBIE
     *  Maritime Transport. Vessel Identifier. Identifier
     *  Identifies a specific vessel.
     *  0..1
     *  Maritime Transport
     *  Vessel Identifier
     *  Identifier
     *  Identifier. Type
     *  Lloyds Number, Registration Number (WCO ID 167)
     *  International Maritime Organisation number of a vessel
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\VesselID $vesselID
     * @return self
     */
    public function setVesselID(\NOKA\PHPUBL\UBL\Common\BasicComponents\VesselID $vesselID)
    {
        $this->vesselID = $vesselID;
        return $this;
    }

    /**
     * Gets as vesselName
     *
     * BBIE
     *  Maritime Transport. Vessel Name. Name
     *  The name of the vessel.
     *  0..1
     *  Maritime Transport
     *  Vessel Name
     *  Name
     *  Name. Type
     *  Ships Name
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\VesselName
     */
    public function getVesselName()
    {
        return $this->vesselName;
    }

    /**
     * Sets a new vesselName
     *
     * BBIE
     *  Maritime Transport. Vessel Name. Name
     *  The name of the vessel.
     *  0..1
     *  Maritime Transport
     *  Vessel Name
     *  Name
     *  Name. Type
     *  Ships Name
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\VesselName $vesselName
     * @return self
     */
    public function setVesselName(\NOKA\PHPUBL\UBL\Common\BasicComponents\VesselName $vesselName)
    {
        $this->vesselName = $vesselName;
        return $this;
    }


}

