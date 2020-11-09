<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing SecondaryHazardType
 *
 * ABIE
 *  Secondary Hazard. Details
 *  Information about Secondary Hazard (related to a Hazardous Item).
 *  Secondary Hazard
 * XSD Type: SecondaryHazardType
 */
class SecondaryHazardType
{

    /**
     * BBIE
     *  Secondary Hazard. Identifier
     *  Identifies the Secondary Hazard.
     *  0..1
     *  Secondary Hazard
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Secondary Hazard. Placard Notation. Text
     *  The placard notation corresponding to the hazard class of the hazardous commodity. Can also be the hazard identification number of the orange placard (upper part) required on the means of transport.
     *  0..1
     *  Secondary Hazard
     *  Placard Notation
     *  Text
     *  Text. Type
     *  "5.1"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\PlacardNotation $placardNotation
     */
    private $placardNotation = null;

    /**
     * BBIE
     *  Secondary Hazard. Placard Endorsement. Text
     *  The placard endorsement that is to be shown on the shipping papers for the hazardous commodity. Can also be used for the number of the orange placard (lower part) required on the means of transport.
     *  0..1
     *  Secondary Hazard
     *  Placard Endorsement
     *  Text
     *  Text. Type
     *  "2"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\PlacardEndorsement $placardEndorsement
     */
    private $placardEndorsement = null;

    /**
     * BBIE
     *  Secondary Hazard. Emergency Procedures Code. Code
     *  Emergency procedures for hazardous goods, expressed as a code.
     *  0..1
     *  Secondary Hazard
     *  Emergency Procedures Code
     *  Code
     *  Code. Type
     *  EMG code, EMS Page Number
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\EmergencyProceduresCode $emergencyProceduresCode
     */
    private $emergencyProceduresCode = null;

    /**
     * BBIE
     *  Secondary Hazard. Extension. Text
     *  Additional information about the hazardous substance. Can be used to specify information such as the type of regulatory requirements that apply to a description.
     *  0..1
     *  Secondary Hazard
     *  Extension
     *  Text
     *  Text. Type
     *  "N.O.S. or a Waste Characteristics Code in conjunction with an EPA Waste Stream code"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Extension $extension
     */
    private $extension = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Secondary Hazard. Identifier
     *  Identifies the Secondary Hazard.
     *  0..1
     *  Secondary Hazard
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
     *  Secondary Hazard. Identifier
     *  Identifies the Secondary Hazard.
     *  0..1
     *  Secondary Hazard
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
     * Gets as placardNotation
     *
     * BBIE
     *  Secondary Hazard. Placard Notation. Text
     *  The placard notation corresponding to the hazard class of the hazardous commodity. Can also be the hazard identification number of the orange placard (upper part) required on the means of transport.
     *  0..1
     *  Secondary Hazard
     *  Placard Notation
     *  Text
     *  Text. Type
     *  "5.1"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\PlacardNotation
     */
    public function getPlacardNotation()
    {
        return $this->placardNotation;
    }

    /**
     * Sets a new placardNotation
     *
     * BBIE
     *  Secondary Hazard. Placard Notation. Text
     *  The placard notation corresponding to the hazard class of the hazardous commodity. Can also be the hazard identification number of the orange placard (upper part) required on the means of transport.
     *  0..1
     *  Secondary Hazard
     *  Placard Notation
     *  Text
     *  Text. Type
     *  "5.1"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\PlacardNotation $placardNotation
     * @return self
     */
    public function setPlacardNotation(\NOKA\PHPUBL\UBL\Common\BasicComponents\PlacardNotation $placardNotation)
    {
        $this->placardNotation = $placardNotation;
        return $this;
    }

    /**
     * Gets as placardEndorsement
     *
     * BBIE
     *  Secondary Hazard. Placard Endorsement. Text
     *  The placard endorsement that is to be shown on the shipping papers for the hazardous commodity. Can also be used for the number of the orange placard (lower part) required on the means of transport.
     *  0..1
     *  Secondary Hazard
     *  Placard Endorsement
     *  Text
     *  Text. Type
     *  "2"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\PlacardEndorsement
     */
    public function getPlacardEndorsement()
    {
        return $this->placardEndorsement;
    }

    /**
     * Sets a new placardEndorsement
     *
     * BBIE
     *  Secondary Hazard. Placard Endorsement. Text
     *  The placard endorsement that is to be shown on the shipping papers for the hazardous commodity. Can also be used for the number of the orange placard (lower part) required on the means of transport.
     *  0..1
     *  Secondary Hazard
     *  Placard Endorsement
     *  Text
     *  Text. Type
     *  "2"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\PlacardEndorsement $placardEndorsement
     * @return self
     */
    public function setPlacardEndorsement(\NOKA\PHPUBL\UBL\Common\BasicComponents\PlacardEndorsement $placardEndorsement)
    {
        $this->placardEndorsement = $placardEndorsement;
        return $this;
    }

    /**
     * Gets as emergencyProceduresCode
     *
     * BBIE
     *  Secondary Hazard. Emergency Procedures Code. Code
     *  Emergency procedures for hazardous goods, expressed as a code.
     *  0..1
     *  Secondary Hazard
     *  Emergency Procedures Code
     *  Code
     *  Code. Type
     *  EMG code, EMS Page Number
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\EmergencyProceduresCode
     */
    public function getEmergencyProceduresCode()
    {
        return $this->emergencyProceduresCode;
    }

    /**
     * Sets a new emergencyProceduresCode
     *
     * BBIE
     *  Secondary Hazard. Emergency Procedures Code. Code
     *  Emergency procedures for hazardous goods, expressed as a code.
     *  0..1
     *  Secondary Hazard
     *  Emergency Procedures Code
     *  Code
     *  Code. Type
     *  EMG code, EMS Page Number
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\EmergencyProceduresCode $emergencyProceduresCode
     * @return self
     */
    public function setEmergencyProceduresCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\EmergencyProceduresCode $emergencyProceduresCode)
    {
        $this->emergencyProceduresCode = $emergencyProceduresCode;
        return $this;
    }

    /**
     * Gets as extension
     *
     * BBIE
     *  Secondary Hazard. Extension. Text
     *  Additional information about the hazardous substance. Can be used to specify information such as the type of regulatory requirements that apply to a description.
     *  0..1
     *  Secondary Hazard
     *  Extension
     *  Text
     *  Text. Type
     *  "N.O.S. or a Waste Characteristics Code in conjunction with an EPA Waste Stream code"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Extension
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Sets a new extension
     *
     * BBIE
     *  Secondary Hazard. Extension. Text
     *  Additional information about the hazardous substance. Can be used to specify information such as the type of regulatory requirements that apply to a description.
     *  0..1
     *  Secondary Hazard
     *  Extension
     *  Text
     *  Text. Type
     *  "N.O.S. or a Waste Characteristics Code in conjunction with an EPA Waste Stream code"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Extension $extension
     * @return self
     */
    public function setExtension(\NOKA\PHPUBL\UBL\Common\BasicComponents\Extension $extension)
    {
        $this->extension = $extension;
        return $this;
    }


}

