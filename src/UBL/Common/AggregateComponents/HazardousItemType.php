<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing HazardousItemType
 *
 * ABIE
 *  Hazardous Item. Details
 *  Information about a Hazardous Item.
 *  Hazardous Item
 * XSD Type: HazardousItemType
 */
class HazardousItemType
{

    /**
     * BBIE
     *  Hazardous Item. Identifier
     *  The identifier for a Hazardous Item.
     *  0..1
     *  Hazardous Item
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "Round Up"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Hazardous Item. Placard Notation. Text
     *  The placard notation corresponding to the hazard class of the hazardous commodity. Can also be the hazard identification number of the orange placard (upper part) required on the means of transport.
     *  0..1
     *  Hazardous Item
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
     *  Hazardous Item. Placard Endorsement. Text
     *  The placard endorsement that is to be shown on the shipping papers for the hazardous commodity. Can also be used for the number of the orange placard (lower part) required on the means of transport.
     *  0..1
     *  Hazardous Item
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
     *  Hazardous Item. Additional_ Information. Text
     *  Additional information about the hazardous substance. Can be used to specify information such as the type of regulatory requirements that apply to a description.
     *  0..1
     *  Hazardous Item
     *  Additional
     *  Information
     *  Text
     *  Text. Type
     *  "Must be stored away from flammable materials" "N.O.S. or a Waste Characteristics Code in conjunction with an EPA Waste Stream code"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AdditionalInformation $additionalInformation
     */
    private $additionalInformation = null;

    /**
     * BBIE
     *  Hazardous Item. UNDG Code. Code
     *  The identifier assigned to transportable hazardous goods by the United Nations, expressed as a code.
     *  0..1
     *  Hazardous Item
     *  UNDG Code
     *  Code
     *  Code. Type
     *  UN Code
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\UNDGCode $uNDGCode
     */
    private $uNDGCode = null;

    /**
     * BBIE
     *  Hazardous Item. Emergency Procedures Code. Code
     *  The emergency procedures for the Hazardous Item, expressed as a code.
     *  0..1
     *  Hazardous Item
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
     *  Hazardous Item. Medical First Aid Guide Code. Code
     *  The identifier of a medical first aid guide that is relevant to specific hazardous goods, expressed as a code.
     *  0..1
     *  Hazardous Item
     *  Medical First Aid Guide Code
     *  Code
     *  Code. Type
     *  MFAG page number
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\MedicalFirstAidGuideCode $medicalFirstAidGuideCode
     */
    private $medicalFirstAidGuideCode = null;

    /**
     * BBIE
     *  Hazardous Item. Technical_ Name. Name
     *  The full technical name of the specific hazardous substance.
     *  0..1
     *  Hazardous Item
     *  Technical
     *  Name
     *  Name
     *  Name. Type
     *  "Granular Sodium Chlorate WeedKiller"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TechnicalName $technicalName
     */
    private $technicalName = null;

    /**
     * BBIE
     *  Hazardous Item. Category. Name
     *  The name of the category of hazard that applies to the Item.
     *  0..1
     *  Hazardous Item
     *  Category
     *  Name
     *  Name. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\CategoryName $categoryName
     */
    private $categoryName = null;

    /**
     * BBIE
     *  Hazardous Item. Hazardous Category Code. Code
     *  Code specifying a kind of hazard for a material.
     *  0..1
     *  Hazardous Item
     *  Hazardous Category Code
     *  Code
     *  Code. Type
     *  Hazardous material class code
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\HazardousCategoryCode $hazardousCategoryCode
     */
    private $hazardousCategoryCode = null;

    /**
     * BBIE
     *  Hazardous Item. Upper_ Orange Hazard Placard Identifier. Identifier
     *  Specifies the identity number for the upper part of the orange hazard placard required on the means of transport.
     *  0..1
     *  Hazardous Item
     *  Upper
     *  Orange Hazard Placard Identifier
     *  Identifier
     *  Identifier. Type
     *  Hazard identification number (upper part)
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\UpperOrangeHazardPlacardID $upperOrangeHazardPlacardID
     */
    private $upperOrangeHazardPlacardID = null;

    /**
     * BBIE
     *  Hazardous Item. Lower_ Orange Hazard Placard Identifier. Identifier
     *  Specifies the identity number for the lower part of the orange hazard placard required on the means of transport.
     *  0..1
     *  Hazardous Item
     *  Lower
     *  Orange Hazard Placard Identifier
     *  Identifier
     *  Identifier. Type
     *  Substance identification number (lower part)
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\LowerOrangeHazardPlacardID $lowerOrangeHazardPlacardID
     */
    private $lowerOrangeHazardPlacardID = null;

    /**
     * BBIE
     *  Hazardous Item. Marking Identifier. Identifier
     *  Identifies the marking of dangerous goods.
     *  0..1
     *  Hazardous Item
     *  Marking Identifier
     *  Identifier
     *  Identifier. Type
     *  Dangerous goods label marking
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\MarkingID $markingID
     */
    private $markingID = null;

    /**
     * BBIE
     *  Hazardous Item. Hazard Class Identifier. Identifier
     *  Identifies a hazard class applicable to dangerous goods as defined by the relevant regulation authority, such as the IMDG Class Number of the SOLAS Convention of IMO and the ADR/RID Class Number for the road/rail environment.
     *  0..1
     *  Hazardous Item
     *  Hazard Class Identifier
     *  Identifier
     *  Identifier. Type
     *  IMDG Class Number, ADR/RID Class Number
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\HazardClassID $hazardClassID
     */
    private $hazardClassID = null;

    /**
     * BBIE
     *  Hazardous Item. Net_ Weight. Measure
     *  The total net weight of hazardous goods; the weight of the goods plus packaging.
     *  0..1
     *  Hazardous Item
     *  Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\NetWeightMeasure $netWeightMeasure
     */
    private $netWeightMeasure = null;

    /**
     * BBIE
     *  Hazardous Item. Net_ Volume. Measure
     *  The volume of hazardous goods net of packaging and transport equipment.
     *  0..1
     *  Hazardous Item
     *  Net
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\NetVolumeMeasure $netVolumeMeasure
     */
    private $netVolumeMeasure = null;

    /**
     * BBIE
     *  Hazardous Item. Quantity
     *  The quantity of goods that are hazardous.
     *  0..1
     *  Hazardous Item
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Quantity $quantity
     */
    private $quantity = null;

    /**
     * ASBIE
     *  Hazardous Item. Contact_ Party. Party
     *  Associates the Hazardous Item with details of an individual, group, or body that is the contact in case of hazard incident.
     *  0..1
     *  Hazardous Item
     *  Contact
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ContactParty $contactParty
     */
    private $contactParty = null;

    /**
     * ASBIE
     *  Hazardous Item. Secondary Hazard
     *  Associates the Hazardous Item with information about secondary hazards.
     *  0..n
     *  Hazardous Item
     *  Secondary Hazard
     *  Secondary Hazard
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\SecondaryHazard[] $secondaryHazard
     */
    private $secondaryHazard = [
        
    ];

    /**
     * ASBIE
     *  Hazardous Item. Hazardous Goods Transit
     *  Associates the Hazardous Item with information about the transportation of hazardous goods.
     *  0..n
     *  Hazardous Item
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\HazardousGoodsTransit[] $hazardousGoodsTransit
     */
    private $hazardousGoodsTransit = [
        
    ];

    /**
     * ASBIE
     *  Hazardous Item. Emergency_ Temperature. Temperature
     *  Associates the Hazardous Item with the temperature at which emergency procedures apply during the handling of temperature-controlled hazardous goods.
     *  0..1
     *  Hazardous Item
     *  Emergency
     *  Temperature
     *  Temperature
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\EmergencyTemperature $emergencyTemperature
     */
    private $emergencyTemperature = null;

    /**
     * ASBIE
     *  Hazardous Item. Flashpoint_ Temperature. Temperature
     *  Associates the Hazardous Item with the lowest temperature at which the vapor of a combustible liquid can be made to ignite momentarily in air, known in hazardous goods procedures as the flashpoint.
     *  0..1
     *  Hazardous Item
     *  Flashpoint
     *  Temperature
     *  Temperature
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\FlashpointTemperature $flashpointTemperature
     */
    private $flashpointTemperature = null;

    /**
     * ASBIE
     *  Hazardous Item. Additional_ Temperature. Temperature
     *  Information providing details of temperatures relevant to the handling of hazardous goods.
     *  0..n
     *  Hazardous Item
     *  Additional
     *  Temperature
     *  Temperature
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AdditionalTemperature[] $additionalTemperature
     */
    private $additionalTemperature = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Hazardous Item. Identifier
     *  The identifier for a Hazardous Item.
     *  0..1
     *  Hazardous Item
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "Round Up"
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
     *  Hazardous Item. Identifier
     *  The identifier for a Hazardous Item.
     *  0..1
     *  Hazardous Item
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "Round Up"
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
     *  Hazardous Item. Placard Notation. Text
     *  The placard notation corresponding to the hazard class of the hazardous commodity. Can also be the hazard identification number of the orange placard (upper part) required on the means of transport.
     *  0..1
     *  Hazardous Item
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
     *  Hazardous Item. Placard Notation. Text
     *  The placard notation corresponding to the hazard class of the hazardous commodity. Can also be the hazard identification number of the orange placard (upper part) required on the means of transport.
     *  0..1
     *  Hazardous Item
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
     *  Hazardous Item. Placard Endorsement. Text
     *  The placard endorsement that is to be shown on the shipping papers for the hazardous commodity. Can also be used for the number of the orange placard (lower part) required on the means of transport.
     *  0..1
     *  Hazardous Item
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
     *  Hazardous Item. Placard Endorsement. Text
     *  The placard endorsement that is to be shown on the shipping papers for the hazardous commodity. Can also be used for the number of the orange placard (lower part) required on the means of transport.
     *  0..1
     *  Hazardous Item
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
     * Gets as additionalInformation
     *
     * BBIE
     *  Hazardous Item. Additional_ Information. Text
     *  Additional information about the hazardous substance. Can be used to specify information such as the type of regulatory requirements that apply to a description.
     *  0..1
     *  Hazardous Item
     *  Additional
     *  Information
     *  Text
     *  Text. Type
     *  "Must be stored away from flammable materials" "N.O.S. or a Waste Characteristics Code in conjunction with an EPA Waste Stream code"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\AdditionalInformation
     */
    public function getAdditionalInformation()
    {
        return $this->additionalInformation;
    }

    /**
     * Sets a new additionalInformation
     *
     * BBIE
     *  Hazardous Item. Additional_ Information. Text
     *  Additional information about the hazardous substance. Can be used to specify information such as the type of regulatory requirements that apply to a description.
     *  0..1
     *  Hazardous Item
     *  Additional
     *  Information
     *  Text
     *  Text. Type
     *  "Must be stored away from flammable materials" "N.O.S. or a Waste Characteristics Code in conjunction with an EPA Waste Stream code"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\AdditionalInformation $additionalInformation
     * @return self
     */
    public function setAdditionalInformation(\NOKA\PHPUBL\UBL\Common\BasicComponents\AdditionalInformation $additionalInformation)
    {
        $this->additionalInformation = $additionalInformation;
        return $this;
    }

    /**
     * Gets as uNDGCode
     *
     * BBIE
     *  Hazardous Item. UNDG Code. Code
     *  The identifier assigned to transportable hazardous goods by the United Nations, expressed as a code.
     *  0..1
     *  Hazardous Item
     *  UNDG Code
     *  Code
     *  Code. Type
     *  UN Code
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\UNDGCode
     */
    public function getUNDGCode()
    {
        return $this->uNDGCode;
    }

    /**
     * Sets a new uNDGCode
     *
     * BBIE
     *  Hazardous Item. UNDG Code. Code
     *  The identifier assigned to transportable hazardous goods by the United Nations, expressed as a code.
     *  0..1
     *  Hazardous Item
     *  UNDG Code
     *  Code
     *  Code. Type
     *  UN Code
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\UNDGCode $uNDGCode
     * @return self
     */
    public function setUNDGCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\UNDGCode $uNDGCode)
    {
        $this->uNDGCode = $uNDGCode;
        return $this;
    }

    /**
     * Gets as emergencyProceduresCode
     *
     * BBIE
     *  Hazardous Item. Emergency Procedures Code. Code
     *  The emergency procedures for the Hazardous Item, expressed as a code.
     *  0..1
     *  Hazardous Item
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
     *  Hazardous Item. Emergency Procedures Code. Code
     *  The emergency procedures for the Hazardous Item, expressed as a code.
     *  0..1
     *  Hazardous Item
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
     * Gets as medicalFirstAidGuideCode
     *
     * BBIE
     *  Hazardous Item. Medical First Aid Guide Code. Code
     *  The identifier of a medical first aid guide that is relevant to specific hazardous goods, expressed as a code.
     *  0..1
     *  Hazardous Item
     *  Medical First Aid Guide Code
     *  Code
     *  Code. Type
     *  MFAG page number
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\MedicalFirstAidGuideCode
     */
    public function getMedicalFirstAidGuideCode()
    {
        return $this->medicalFirstAidGuideCode;
    }

    /**
     * Sets a new medicalFirstAidGuideCode
     *
     * BBIE
     *  Hazardous Item. Medical First Aid Guide Code. Code
     *  The identifier of a medical first aid guide that is relevant to specific hazardous goods, expressed as a code.
     *  0..1
     *  Hazardous Item
     *  Medical First Aid Guide Code
     *  Code
     *  Code. Type
     *  MFAG page number
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\MedicalFirstAidGuideCode $medicalFirstAidGuideCode
     * @return self
     */
    public function setMedicalFirstAidGuideCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\MedicalFirstAidGuideCode $medicalFirstAidGuideCode)
    {
        $this->medicalFirstAidGuideCode = $medicalFirstAidGuideCode;
        return $this;
    }

    /**
     * Gets as technicalName
     *
     * BBIE
     *  Hazardous Item. Technical_ Name. Name
     *  The full technical name of the specific hazardous substance.
     *  0..1
     *  Hazardous Item
     *  Technical
     *  Name
     *  Name
     *  Name. Type
     *  "Granular Sodium Chlorate WeedKiller"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TechnicalName
     */
    public function getTechnicalName()
    {
        return $this->technicalName;
    }

    /**
     * Sets a new technicalName
     *
     * BBIE
     *  Hazardous Item. Technical_ Name. Name
     *  The full technical name of the specific hazardous substance.
     *  0..1
     *  Hazardous Item
     *  Technical
     *  Name
     *  Name
     *  Name. Type
     *  "Granular Sodium Chlorate WeedKiller"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TechnicalName $technicalName
     * @return self
     */
    public function setTechnicalName(\NOKA\PHPUBL\UBL\Common\BasicComponents\TechnicalName $technicalName)
    {
        $this->technicalName = $technicalName;
        return $this;
    }

    /**
     * Gets as categoryName
     *
     * BBIE
     *  Hazardous Item. Category. Name
     *  The name of the category of hazard that applies to the Item.
     *  0..1
     *  Hazardous Item
     *  Category
     *  Name
     *  Name. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\CategoryName
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * Sets a new categoryName
     *
     * BBIE
     *  Hazardous Item. Category. Name
     *  The name of the category of hazard that applies to the Item.
     *  0..1
     *  Hazardous Item
     *  Category
     *  Name
     *  Name. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\CategoryName $categoryName
     * @return self
     */
    public function setCategoryName(\NOKA\PHPUBL\UBL\Common\BasicComponents\CategoryName $categoryName)
    {
        $this->categoryName = $categoryName;
        return $this;
    }

    /**
     * Gets as hazardousCategoryCode
     *
     * BBIE
     *  Hazardous Item. Hazardous Category Code. Code
     *  Code specifying a kind of hazard for a material.
     *  0..1
     *  Hazardous Item
     *  Hazardous Category Code
     *  Code
     *  Code. Type
     *  Hazardous material class code
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\HazardousCategoryCode
     */
    public function getHazardousCategoryCode()
    {
        return $this->hazardousCategoryCode;
    }

    /**
     * Sets a new hazardousCategoryCode
     *
     * BBIE
     *  Hazardous Item. Hazardous Category Code. Code
     *  Code specifying a kind of hazard for a material.
     *  0..1
     *  Hazardous Item
     *  Hazardous Category Code
     *  Code
     *  Code. Type
     *  Hazardous material class code
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\HazardousCategoryCode $hazardousCategoryCode
     * @return self
     */
    public function setHazardousCategoryCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\HazardousCategoryCode $hazardousCategoryCode)
    {
        $this->hazardousCategoryCode = $hazardousCategoryCode;
        return $this;
    }

    /**
     * Gets as upperOrangeHazardPlacardID
     *
     * BBIE
     *  Hazardous Item. Upper_ Orange Hazard Placard Identifier. Identifier
     *  Specifies the identity number for the upper part of the orange hazard placard required on the means of transport.
     *  0..1
     *  Hazardous Item
     *  Upper
     *  Orange Hazard Placard Identifier
     *  Identifier
     *  Identifier. Type
     *  Hazard identification number (upper part)
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\UpperOrangeHazardPlacardID
     */
    public function getUpperOrangeHazardPlacardID()
    {
        return $this->upperOrangeHazardPlacardID;
    }

    /**
     * Sets a new upperOrangeHazardPlacardID
     *
     * BBIE
     *  Hazardous Item. Upper_ Orange Hazard Placard Identifier. Identifier
     *  Specifies the identity number for the upper part of the orange hazard placard required on the means of transport.
     *  0..1
     *  Hazardous Item
     *  Upper
     *  Orange Hazard Placard Identifier
     *  Identifier
     *  Identifier. Type
     *  Hazard identification number (upper part)
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\UpperOrangeHazardPlacardID $upperOrangeHazardPlacardID
     * @return self
     */
    public function setUpperOrangeHazardPlacardID(\NOKA\PHPUBL\UBL\Common\BasicComponents\UpperOrangeHazardPlacardID $upperOrangeHazardPlacardID)
    {
        $this->upperOrangeHazardPlacardID = $upperOrangeHazardPlacardID;
        return $this;
    }

    /**
     * Gets as lowerOrangeHazardPlacardID
     *
     * BBIE
     *  Hazardous Item. Lower_ Orange Hazard Placard Identifier. Identifier
     *  Specifies the identity number for the lower part of the orange hazard placard required on the means of transport.
     *  0..1
     *  Hazardous Item
     *  Lower
     *  Orange Hazard Placard Identifier
     *  Identifier
     *  Identifier. Type
     *  Substance identification number (lower part)
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\LowerOrangeHazardPlacardID
     */
    public function getLowerOrangeHazardPlacardID()
    {
        return $this->lowerOrangeHazardPlacardID;
    }

    /**
     * Sets a new lowerOrangeHazardPlacardID
     *
     * BBIE
     *  Hazardous Item. Lower_ Orange Hazard Placard Identifier. Identifier
     *  Specifies the identity number for the lower part of the orange hazard placard required on the means of transport.
     *  0..1
     *  Hazardous Item
     *  Lower
     *  Orange Hazard Placard Identifier
     *  Identifier
     *  Identifier. Type
     *  Substance identification number (lower part)
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\LowerOrangeHazardPlacardID $lowerOrangeHazardPlacardID
     * @return self
     */
    public function setLowerOrangeHazardPlacardID(\NOKA\PHPUBL\UBL\Common\BasicComponents\LowerOrangeHazardPlacardID $lowerOrangeHazardPlacardID)
    {
        $this->lowerOrangeHazardPlacardID = $lowerOrangeHazardPlacardID;
        return $this;
    }

    /**
     * Gets as markingID
     *
     * BBIE
     *  Hazardous Item. Marking Identifier. Identifier
     *  Identifies the marking of dangerous goods.
     *  0..1
     *  Hazardous Item
     *  Marking Identifier
     *  Identifier
     *  Identifier. Type
     *  Dangerous goods label marking
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\MarkingID
     */
    public function getMarkingID()
    {
        return $this->markingID;
    }

    /**
     * Sets a new markingID
     *
     * BBIE
     *  Hazardous Item. Marking Identifier. Identifier
     *  Identifies the marking of dangerous goods.
     *  0..1
     *  Hazardous Item
     *  Marking Identifier
     *  Identifier
     *  Identifier. Type
     *  Dangerous goods label marking
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\MarkingID $markingID
     * @return self
     */
    public function setMarkingID(\NOKA\PHPUBL\UBL\Common\BasicComponents\MarkingID $markingID)
    {
        $this->markingID = $markingID;
        return $this;
    }

    /**
     * Gets as hazardClassID
     *
     * BBIE
     *  Hazardous Item. Hazard Class Identifier. Identifier
     *  Identifies a hazard class applicable to dangerous goods as defined by the relevant regulation authority, such as the IMDG Class Number of the SOLAS Convention of IMO and the ADR/RID Class Number for the road/rail environment.
     *  0..1
     *  Hazardous Item
     *  Hazard Class Identifier
     *  Identifier
     *  Identifier. Type
     *  IMDG Class Number, ADR/RID Class Number
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\HazardClassID
     */
    public function getHazardClassID()
    {
        return $this->hazardClassID;
    }

    /**
     * Sets a new hazardClassID
     *
     * BBIE
     *  Hazardous Item. Hazard Class Identifier. Identifier
     *  Identifies a hazard class applicable to dangerous goods as defined by the relevant regulation authority, such as the IMDG Class Number of the SOLAS Convention of IMO and the ADR/RID Class Number for the road/rail environment.
     *  0..1
     *  Hazardous Item
     *  Hazard Class Identifier
     *  Identifier
     *  Identifier. Type
     *  IMDG Class Number, ADR/RID Class Number
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\HazardClassID $hazardClassID
     * @return self
     */
    public function setHazardClassID(\NOKA\PHPUBL\UBL\Common\BasicComponents\HazardClassID $hazardClassID)
    {
        $this->hazardClassID = $hazardClassID;
        return $this;
    }

    /**
     * Gets as netWeightMeasure
     *
     * BBIE
     *  Hazardous Item. Net_ Weight. Measure
     *  The total net weight of hazardous goods; the weight of the goods plus packaging.
     *  0..1
     *  Hazardous Item
     *  Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\NetWeightMeasure
     */
    public function getNetWeightMeasure()
    {
        return $this->netWeightMeasure;
    }

    /**
     * Sets a new netWeightMeasure
     *
     * BBIE
     *  Hazardous Item. Net_ Weight. Measure
     *  The total net weight of hazardous goods; the weight of the goods plus packaging.
     *  0..1
     *  Hazardous Item
     *  Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\NetWeightMeasure $netWeightMeasure
     * @return self
     */
    public function setNetWeightMeasure(\NOKA\PHPUBL\UBL\Common\BasicComponents\NetWeightMeasure $netWeightMeasure)
    {
        $this->netWeightMeasure = $netWeightMeasure;
        return $this;
    }

    /**
     * Gets as netVolumeMeasure
     *
     * BBIE
     *  Hazardous Item. Net_ Volume. Measure
     *  The volume of hazardous goods net of packaging and transport equipment.
     *  0..1
     *  Hazardous Item
     *  Net
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\NetVolumeMeasure
     */
    public function getNetVolumeMeasure()
    {
        return $this->netVolumeMeasure;
    }

    /**
     * Sets a new netVolumeMeasure
     *
     * BBIE
     *  Hazardous Item. Net_ Volume. Measure
     *  The volume of hazardous goods net of packaging and transport equipment.
     *  0..1
     *  Hazardous Item
     *  Net
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\NetVolumeMeasure $netVolumeMeasure
     * @return self
     */
    public function setNetVolumeMeasure(\NOKA\PHPUBL\UBL\Common\BasicComponents\NetVolumeMeasure $netVolumeMeasure)
    {
        $this->netVolumeMeasure = $netVolumeMeasure;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * BBIE
     *  Hazardous Item. Quantity
     *  The quantity of goods that are hazardous.
     *  0..1
     *  Hazardous Item
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
     *  Hazardous Item. Quantity
     *  The quantity of goods that are hazardous.
     *  0..1
     *  Hazardous Item
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
     * Gets as contactParty
     *
     * ASBIE
     *  Hazardous Item. Contact_ Party. Party
     *  Associates the Hazardous Item with details of an individual, group, or body that is the contact in case of hazard incident.
     *  0..1
     *  Hazardous Item
     *  Contact
     *  Party
     *  Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ContactParty
     */
    public function getContactParty()
    {
        return $this->contactParty;
    }

    /**
     * Sets a new contactParty
     *
     * ASBIE
     *  Hazardous Item. Contact_ Party. Party
     *  Associates the Hazardous Item with details of an individual, group, or body that is the contact in case of hazard incident.
     *  0..1
     *  Hazardous Item
     *  Contact
     *  Party
     *  Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ContactParty $contactParty
     * @return self
     */
    public function setContactParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ContactParty $contactParty)
    {
        $this->contactParty = $contactParty;
        return $this;
    }

    /**
     * Adds as secondaryHazard
     *
     * ASBIE
     *  Hazardous Item. Secondary Hazard
     *  Associates the Hazardous Item with information about secondary hazards.
     *  0..n
     *  Hazardous Item
     *  Secondary Hazard
     *  Secondary Hazard
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\SecondaryHazard $secondaryHazard
     */
    public function addToSecondaryHazard(\NOKA\PHPUBL\UBL\Common\AggregateComponents\SecondaryHazard $secondaryHazard)
    {
        $this->secondaryHazard[] = $secondaryHazard;
        return $this;
    }

    /**
     * isset secondaryHazard
     *
     * ASBIE
     *  Hazardous Item. Secondary Hazard
     *  Associates the Hazardous Item with information about secondary hazards.
     *  0..n
     *  Hazardous Item
     *  Secondary Hazard
     *  Secondary Hazard
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSecondaryHazard($index)
    {
        return isset($this->secondaryHazard[$index]);
    }

    /**
     * unset secondaryHazard
     *
     * ASBIE
     *  Hazardous Item. Secondary Hazard
     *  Associates the Hazardous Item with information about secondary hazards.
     *  0..n
     *  Hazardous Item
     *  Secondary Hazard
     *  Secondary Hazard
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSecondaryHazard($index)
    {
        unset($this->secondaryHazard[$index]);
    }

    /**
     * Gets as secondaryHazard
     *
     * ASBIE
     *  Hazardous Item. Secondary Hazard
     *  Associates the Hazardous Item with information about secondary hazards.
     *  0..n
     *  Hazardous Item
     *  Secondary Hazard
     *  Secondary Hazard
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\SecondaryHazard[]
     */
    public function getSecondaryHazard()
    {
        return $this->secondaryHazard;
    }

    /**
     * Sets a new secondaryHazard
     *
     * ASBIE
     *  Hazardous Item. Secondary Hazard
     *  Associates the Hazardous Item with information about secondary hazards.
     *  0..n
     *  Hazardous Item
     *  Secondary Hazard
     *  Secondary Hazard
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\SecondaryHazard[] $secondaryHazard
     * @return self
     */
    public function setSecondaryHazard(array $secondaryHazard)
    {
        $this->secondaryHazard = $secondaryHazard;
        return $this;
    }

    /**
     * Adds as hazardousGoodsTransit
     *
     * ASBIE
     *  Hazardous Item. Hazardous Goods Transit
     *  Associates the Hazardous Item with information about the transportation of hazardous goods.
     *  0..n
     *  Hazardous Item
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\HazardousGoodsTransit $hazardousGoodsTransit
     */
    public function addToHazardousGoodsTransit(\NOKA\PHPUBL\UBL\Common\AggregateComponents\HazardousGoodsTransit $hazardousGoodsTransit)
    {
        $this->hazardousGoodsTransit[] = $hazardousGoodsTransit;
        return $this;
    }

    /**
     * isset hazardousGoodsTransit
     *
     * ASBIE
     *  Hazardous Item. Hazardous Goods Transit
     *  Associates the Hazardous Item with information about the transportation of hazardous goods.
     *  0..n
     *  Hazardous Item
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHazardousGoodsTransit($index)
    {
        return isset($this->hazardousGoodsTransit[$index]);
    }

    /**
     * unset hazardousGoodsTransit
     *
     * ASBIE
     *  Hazardous Item. Hazardous Goods Transit
     *  Associates the Hazardous Item with information about the transportation of hazardous goods.
     *  0..n
     *  Hazardous Item
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHazardousGoodsTransit($index)
    {
        unset($this->hazardousGoodsTransit[$index]);
    }

    /**
     * Gets as hazardousGoodsTransit
     *
     * ASBIE
     *  Hazardous Item. Hazardous Goods Transit
     *  Associates the Hazardous Item with information about the transportation of hazardous goods.
     *  0..n
     *  Hazardous Item
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\HazardousGoodsTransit[]
     */
    public function getHazardousGoodsTransit()
    {
        return $this->hazardousGoodsTransit;
    }

    /**
     * Sets a new hazardousGoodsTransit
     *
     * ASBIE
     *  Hazardous Item. Hazardous Goods Transit
     *  Associates the Hazardous Item with information about the transportation of hazardous goods.
     *  0..n
     *  Hazardous Item
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\HazardousGoodsTransit[] $hazardousGoodsTransit
     * @return self
     */
    public function setHazardousGoodsTransit(array $hazardousGoodsTransit)
    {
        $this->hazardousGoodsTransit = $hazardousGoodsTransit;
        return $this;
    }

    /**
     * Gets as emergencyTemperature
     *
     * ASBIE
     *  Hazardous Item. Emergency_ Temperature. Temperature
     *  Associates the Hazardous Item with the temperature at which emergency procedures apply during the handling of temperature-controlled hazardous goods.
     *  0..1
     *  Hazardous Item
     *  Emergency
     *  Temperature
     *  Temperature
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\EmergencyTemperature
     */
    public function getEmergencyTemperature()
    {
        return $this->emergencyTemperature;
    }

    /**
     * Sets a new emergencyTemperature
     *
     * ASBIE
     *  Hazardous Item. Emergency_ Temperature. Temperature
     *  Associates the Hazardous Item with the temperature at which emergency procedures apply during the handling of temperature-controlled hazardous goods.
     *  0..1
     *  Hazardous Item
     *  Emergency
     *  Temperature
     *  Temperature
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\EmergencyTemperature $emergencyTemperature
     * @return self
     */
    public function setEmergencyTemperature(\NOKA\PHPUBL\UBL\Common\AggregateComponents\EmergencyTemperature $emergencyTemperature)
    {
        $this->emergencyTemperature = $emergencyTemperature;
        return $this;
    }

    /**
     * Gets as flashpointTemperature
     *
     * ASBIE
     *  Hazardous Item. Flashpoint_ Temperature. Temperature
     *  Associates the Hazardous Item with the lowest temperature at which the vapor of a combustible liquid can be made to ignite momentarily in air, known in hazardous goods procedures as the flashpoint.
     *  0..1
     *  Hazardous Item
     *  Flashpoint
     *  Temperature
     *  Temperature
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\FlashpointTemperature
     */
    public function getFlashpointTemperature()
    {
        return $this->flashpointTemperature;
    }

    /**
     * Sets a new flashpointTemperature
     *
     * ASBIE
     *  Hazardous Item. Flashpoint_ Temperature. Temperature
     *  Associates the Hazardous Item with the lowest temperature at which the vapor of a combustible liquid can be made to ignite momentarily in air, known in hazardous goods procedures as the flashpoint.
     *  0..1
     *  Hazardous Item
     *  Flashpoint
     *  Temperature
     *  Temperature
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\FlashpointTemperature $flashpointTemperature
     * @return self
     */
    public function setFlashpointTemperature(\NOKA\PHPUBL\UBL\Common\AggregateComponents\FlashpointTemperature $flashpointTemperature)
    {
        $this->flashpointTemperature = $flashpointTemperature;
        return $this;
    }

    /**
     * Adds as additionalTemperature
     *
     * ASBIE
     *  Hazardous Item. Additional_ Temperature. Temperature
     *  Information providing details of temperatures relevant to the handling of hazardous goods.
     *  0..n
     *  Hazardous Item
     *  Additional
     *  Temperature
     *  Temperature
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\AdditionalTemperature $additionalTemperature
     */
    public function addToAdditionalTemperature(\NOKA\PHPUBL\UBL\Common\AggregateComponents\AdditionalTemperature $additionalTemperature)
    {
        $this->additionalTemperature[] = $additionalTemperature;
        return $this;
    }

    /**
     * isset additionalTemperature
     *
     * ASBIE
     *  Hazardous Item. Additional_ Temperature. Temperature
     *  Information providing details of temperatures relevant to the handling of hazardous goods.
     *  0..n
     *  Hazardous Item
     *  Additional
     *  Temperature
     *  Temperature
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalTemperature($index)
    {
        return isset($this->additionalTemperature[$index]);
    }

    /**
     * unset additionalTemperature
     *
     * ASBIE
     *  Hazardous Item. Additional_ Temperature. Temperature
     *  Information providing details of temperatures relevant to the handling of hazardous goods.
     *  0..n
     *  Hazardous Item
     *  Additional
     *  Temperature
     *  Temperature
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalTemperature($index)
    {
        unset($this->additionalTemperature[$index]);
    }

    /**
     * Gets as additionalTemperature
     *
     * ASBIE
     *  Hazardous Item. Additional_ Temperature. Temperature
     *  Information providing details of temperatures relevant to the handling of hazardous goods.
     *  0..n
     *  Hazardous Item
     *  Additional
     *  Temperature
     *  Temperature
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\AdditionalTemperature[]
     */
    public function getAdditionalTemperature()
    {
        return $this->additionalTemperature;
    }

    /**
     * Sets a new additionalTemperature
     *
     * ASBIE
     *  Hazardous Item. Additional_ Temperature. Temperature
     *  Information providing details of temperatures relevant to the handling of hazardous goods.
     *  0..n
     *  Hazardous Item
     *  Additional
     *  Temperature
     *  Temperature
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\AdditionalTemperature[] $additionalTemperature
     * @return self
     */
    public function setAdditionalTemperature(array $additionalTemperature)
    {
        $this->additionalTemperature = $additionalTemperature;
        return $this;
    }


}

