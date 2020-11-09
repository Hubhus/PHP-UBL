<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing AddressType
 *
 * ABIE
 *  Address. Details
 *  Information about a structured address.
 *  Address
 * XSD Type: AddressType
 */
class AddressType
{

    /**
     * BBIE
     *  Address. Identifier
     *  An identifier for a specific address within a scheme of registered addresses.
     *  0..1
     *  Address
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  DetailsKey
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Address. Address Type Code. Code
     *  A code specifying the type of this address, such as business address or home address.
     *  0..1
     *  Address
     *  Address Type Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AddressTypeCode $addressTypeCode
     */
    private $addressTypeCode = null;

    /**
     * BBIE
     *  Address. Address Format Code. Code
     *  A code specifying the format of this address.
     *  0..1
     *  Address
     *  Address Format Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AddressFormatCode $addressFormatCode
     */
    private $addressFormatCode = null;

    /**
     * BBIE
     *  Address. Postbox. Text
     *  A post office box number.
     *  0..1
     *  Address
     *  Postbox
     *  Text
     *  Text. Type
     *  PostBox, PO Box
     *  "123"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Postbox $postbox
     */
    private $postbox = null;

    /**
     * BBIE
     *  Address. Floor. Text
     *  An addressable floor of a building.
     *  0..1
     *  Address
     *  Floor
     *  Text
     *  Text. Type
     *  SubPremiseNumber
     *  "30"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Floor $floor
     */
    private $floor = null;

    /**
     * BBIE
     *  Address. Room. Text
     *  A room, suite, or apartment of a building.
     *  0..1
     *  Address
     *  Room
     *  Text
     *  Text. Type
     *  SubPremiseNumber
     *  "Reception"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Room $room
     */
    private $room = null;

    /**
     * BBIE
     *  Address. Street Name. Name
     *  The name of a street.
     *  0..1
     *  Address
     *  Street Name
     *  Name
     *  Name. Type
     *  Thoroughfare
     *  "Kwun Tong Road"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\StreetName $streetName
     */
    private $streetName = null;

    /**
     * BBIE
     *  Address. Additional_ Street Name. Name
     *  An additional name of a street used to further specify the street name.
     *  0..1
     *  Address
     *  Additional
     *  Street Name
     *  Name
     *  Name. Type
     *  Thoroughfare
     *  "Cnr Aberdeen Road"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AdditionalStreetName $additionalStreetName
     */
    private $additionalStreetName = null;

    /**
     * BBIE
     *  Address. Block Name. Name
     *  The block name, expressed as text, for an area surrounded by streets and usually containing several buildings for this address.
     *  0..1
     *  Address
     *  Block Name
     *  Name
     *  Name. Type
     *  Seabird
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\BlockName $blockName
     */
    private $blockName = null;

    /**
     * BBIE
     *  Address. Building Name. Name
     *  The name of a building.
     *  0..1
     *  Address
     *  Building Name
     *  Name
     *  Name. Type
     *  BuildingName
     *  "Plot 421"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\BuildingName $buildingName
     */
    private $buildingName = null;

    /**
     * BBIE
     *  Address. Building Number. Text
     *  The number of a building.
     *  0..1
     *  Address
     *  Building Number
     *  Text
     *  Text. Type
     *  PremiseNumber
     *  "388"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\BuildingNumber $buildingNumber
     */
    private $buildingNumber = null;

    /**
     * BBIE
     *  Address. Inhouse_ Mail. Text
     *  A specific location within a building.
     *  0..1
     *  Address
     *  Inhouse
     *  Mail
     *  Text
     *  Text. Type
     *  MailStop
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\InhouseMail $inhouseMail
     */
    private $inhouseMail = null;

    /**
     * BBIE
     *  Address. Department. Text
     *  An addressable department of an organization.
     *  0..1
     *  Address
     *  Department
     *  Text
     *  Text. Type
     *  Department
     *  "Accounts Payable"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Department $department
     */
    private $department = null;

    /**
     * BBIE
     *  Address. Mark Attention. Text
     *  The name, expressed as text, of a person or department in the organization to whom incoming mail is marked with words such as 'for the attention of' or 'FAO' or 'ATTN' for this address.
     *  0..1
     *  Address
     *  Mark Attention
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\MarkAttention $markAttention
     */
    private $markAttention = null;

    /**
     * BBIE
     *  Address. Mark Care. Text
     *  The name, expressed as text, of a person or organization at this address to whom incoming mail is marked with words such as 'care of' or 'C/O'.
     *  0..1
     *  Address
     *  Mark Care
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\MarkCare $markCare
     */
    private $markCare = null;

    /**
     * BBIE
     *  Address. Plot Identification. Text
     *  The textual expression of the unique identifier for the piece of land on which this address is located such as a plot number.
     *  0..1
     *  Address
     *  Plot Identification
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\PlotIdentification $plotIdentification
     */
    private $plotIdentification = null;

    /**
     * BBIE
     *  Address. City Subdivision Name. Name
     *  A name, expressed as text, of a subdivision of a city for this address, for example, a district or borough.
     *  0..1
     *  Address
     *  City Subdivision Name
     *  Name
     *  Name. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\CitySubdivisionName $citySubdivisionName
     */
    private $citySubdivisionName = null;

    /**
     * BBIE
     *  Address. City Name. Name
     *  The name of a city, town, or village.
     *  0..1
     *  Address
     *  City Name
     *  Name
     *  Name. Type
     *  LocalityName
     *  "Hong Kong"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\CityName $cityName
     */
    private $cityName = null;

    /**
     * BBIE
     *  Address. Postal_ Zone. Text
     *  The identifier for an addressable group of properties according to the relevant national postal service, such as a ZIP code or Post Code.
     *  0..1
     *  Address
     *  Postal
     *  Zone
     *  Text
     *  Text. Type
     *  PostalCodeNumber
     *  "SW11 4EW" "2500 GG"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\PostalZone $postalZone
     */
    private $postalZone = null;

    /**
     * BBIE
     *  Address. Country Subentity. Text
     *  A territorial division of a country, such as a county or state.
     *  0..1
     *  Address
     *  Country Subentity
     *  Text
     *  Text. Type
     *  AdministrativeArea, State, Country, Shire, Canton
     *  "Florida","Tamilnadu"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\CountrySubentity $countrySubentity
     */
    private $countrySubentity = null;

    /**
     * BBIE
     *  Address. Country Subentity Code. Code
     *  A territorial division of a country, such as a county or state, expressed as a code.
     *  0..1
     *  Address
     *  Country Subentity Code
     *  Code
     *  Code. Type
     *  AdministrativeAreaCode, State Code
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\CountrySubentityCode $countrySubentityCode
     */
    private $countrySubentityCode = null;

    /**
     * BBIE
     *  Address. Region. Text
     *  An addressable region or group of countries.
     *  0..1
     *  Address
     *  Region
     *  Text
     *  Text. Type
     *  LocalityName, Economic Zone
     *  "European Union"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Region $region
     */
    private $region = null;

    /**
     * BBIE
     *  Address. District. Text
     *  A geographical division of a country.
     *  0..1
     *  Address
     *  District
     *  Text
     *  Text. Type
     *  LocalityName, Area
     *  "East Coast"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\District $district
     */
    private $district = null;

    /**
     * BBIE
     *  Address. Timezone Offset. Text
     *  For the time zone in which the address is situated, the measure of time offset from Universal Coordinated Time (UTC).
     *  0..1
     *  Address
     *  Timezone Offset
     *  Text
     *  Text. Type
     *  "+8:00" "-3:00"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TimezoneOffset $timezoneOffset
     */
    private $timezoneOffset = null;

    /**
     * ASBIE
     *  Address. Address Line
     *  An association to Address Line.
     *  0..n
     *  Address
     *  Address Line
     *  Address Line
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AddressLine[] $addressLine
     */
    private $addressLine = [
        
    ];

    /**
     * ASBIE
     *  Address. Country
     *  An association to Country.
     *  0..1
     *  Address
     *  Country
     *  Country
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Country $country
     */
    private $country = null;

    /**
     * ASBIE
     *  Address. Location Coordinate
     *  An association to Location Coordinate.
     *  0..1
     *  Address
     *  Location Coordinate
     *  Location Coordinate
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\LocationCoordinate $locationCoordinate
     */
    private $locationCoordinate = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Address. Identifier
     *  An identifier for a specific address within a scheme of registered addresses.
     *  0..1
     *  Address
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  DetailsKey
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
     *  Address. Identifier
     *  An identifier for a specific address within a scheme of registered addresses.
     *  0..1
     *  Address
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  DetailsKey
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
     * Gets as addressTypeCode
     *
     * BBIE
     *  Address. Address Type Code. Code
     *  A code specifying the type of this address, such as business address or home address.
     *  0..1
     *  Address
     *  Address Type Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\AddressTypeCode
     */
    public function getAddressTypeCode()
    {
        return $this->addressTypeCode;
    }

    /**
     * Sets a new addressTypeCode
     *
     * BBIE
     *  Address. Address Type Code. Code
     *  A code specifying the type of this address, such as business address or home address.
     *  0..1
     *  Address
     *  Address Type Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\AddressTypeCode $addressTypeCode
     * @return self
     */
    public function setAddressTypeCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\AddressTypeCode $addressTypeCode)
    {
        $this->addressTypeCode = $addressTypeCode;
        return $this;
    }

    /**
     * Gets as addressFormatCode
     *
     * BBIE
     *  Address. Address Format Code. Code
     *  A code specifying the format of this address.
     *  0..1
     *  Address
     *  Address Format Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\AddressFormatCode
     */
    public function getAddressFormatCode()
    {
        return $this->addressFormatCode;
    }

    /**
     * Sets a new addressFormatCode
     *
     * BBIE
     *  Address. Address Format Code. Code
     *  A code specifying the format of this address.
     *  0..1
     *  Address
     *  Address Format Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\AddressFormatCode $addressFormatCode
     * @return self
     */
    public function setAddressFormatCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\AddressFormatCode $addressFormatCode)
    {
        $this->addressFormatCode = $addressFormatCode;
        return $this;
    }

    /**
     * Gets as postbox
     *
     * BBIE
     *  Address. Postbox. Text
     *  A post office box number.
     *  0..1
     *  Address
     *  Postbox
     *  Text
     *  Text. Type
     *  PostBox, PO Box
     *  "123"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Postbox
     */
    public function getPostbox()
    {
        return $this->postbox;
    }

    /**
     * Sets a new postbox
     *
     * BBIE
     *  Address. Postbox. Text
     *  A post office box number.
     *  0..1
     *  Address
     *  Postbox
     *  Text
     *  Text. Type
     *  PostBox, PO Box
     *  "123"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Postbox $postbox
     * @return self
     */
    public function setPostbox(\NOKA\PHPUBL\UBL\Common\BasicComponents\Postbox $postbox)
    {
        $this->postbox = $postbox;
        return $this;
    }

    /**
     * Gets as floor
     *
     * BBIE
     *  Address. Floor. Text
     *  An addressable floor of a building.
     *  0..1
     *  Address
     *  Floor
     *  Text
     *  Text. Type
     *  SubPremiseNumber
     *  "30"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Floor
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * Sets a new floor
     *
     * BBIE
     *  Address. Floor. Text
     *  An addressable floor of a building.
     *  0..1
     *  Address
     *  Floor
     *  Text
     *  Text. Type
     *  SubPremiseNumber
     *  "30"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Floor $floor
     * @return self
     */
    public function setFloor(\NOKA\PHPUBL\UBL\Common\BasicComponents\Floor $floor)
    {
        $this->floor = $floor;
        return $this;
    }

    /**
     * Gets as room
     *
     * BBIE
     *  Address. Room. Text
     *  A room, suite, or apartment of a building.
     *  0..1
     *  Address
     *  Room
     *  Text
     *  Text. Type
     *  SubPremiseNumber
     *  "Reception"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Room
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Sets a new room
     *
     * BBIE
     *  Address. Room. Text
     *  A room, suite, or apartment of a building.
     *  0..1
     *  Address
     *  Room
     *  Text
     *  Text. Type
     *  SubPremiseNumber
     *  "Reception"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Room $room
     * @return self
     */
    public function setRoom(\NOKA\PHPUBL\UBL\Common\BasicComponents\Room $room)
    {
        $this->room = $room;
        return $this;
    }

    /**
     * Gets as streetName
     *
     * BBIE
     *  Address. Street Name. Name
     *  The name of a street.
     *  0..1
     *  Address
     *  Street Name
     *  Name
     *  Name. Type
     *  Thoroughfare
     *  "Kwun Tong Road"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\StreetName
     */
    public function getStreetName()
    {
        return $this->streetName;
    }

    /**
     * Sets a new streetName
     *
     * BBIE
     *  Address. Street Name. Name
     *  The name of a street.
     *  0..1
     *  Address
     *  Street Name
     *  Name
     *  Name. Type
     *  Thoroughfare
     *  "Kwun Tong Road"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\StreetName $streetName
     * @return self
     */
    public function setStreetName(\NOKA\PHPUBL\UBL\Common\BasicComponents\StreetName $streetName)
    {
        $this->streetName = $streetName;
        return $this;
    }

    /**
     * Gets as additionalStreetName
     *
     * BBIE
     *  Address. Additional_ Street Name. Name
     *  An additional name of a street used to further specify the street name.
     *  0..1
     *  Address
     *  Additional
     *  Street Name
     *  Name
     *  Name. Type
     *  Thoroughfare
     *  "Cnr Aberdeen Road"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\AdditionalStreetName
     */
    public function getAdditionalStreetName()
    {
        return $this->additionalStreetName;
    }

    /**
     * Sets a new additionalStreetName
     *
     * BBIE
     *  Address. Additional_ Street Name. Name
     *  An additional name of a street used to further specify the street name.
     *  0..1
     *  Address
     *  Additional
     *  Street Name
     *  Name
     *  Name. Type
     *  Thoroughfare
     *  "Cnr Aberdeen Road"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\AdditionalStreetName $additionalStreetName
     * @return self
     */
    public function setAdditionalStreetName(\NOKA\PHPUBL\UBL\Common\BasicComponents\AdditionalStreetName $additionalStreetName)
    {
        $this->additionalStreetName = $additionalStreetName;
        return $this;
    }

    /**
     * Gets as blockName
     *
     * BBIE
     *  Address. Block Name. Name
     *  The block name, expressed as text, for an area surrounded by streets and usually containing several buildings for this address.
     *  0..1
     *  Address
     *  Block Name
     *  Name
     *  Name. Type
     *  Seabird
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\BlockName
     */
    public function getBlockName()
    {
        return $this->blockName;
    }

    /**
     * Sets a new blockName
     *
     * BBIE
     *  Address. Block Name. Name
     *  The block name, expressed as text, for an area surrounded by streets and usually containing several buildings for this address.
     *  0..1
     *  Address
     *  Block Name
     *  Name
     *  Name. Type
     *  Seabird
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\BlockName $blockName
     * @return self
     */
    public function setBlockName(\NOKA\PHPUBL\UBL\Common\BasicComponents\BlockName $blockName)
    {
        $this->blockName = $blockName;
        return $this;
    }

    /**
     * Gets as buildingName
     *
     * BBIE
     *  Address. Building Name. Name
     *  The name of a building.
     *  0..1
     *  Address
     *  Building Name
     *  Name
     *  Name. Type
     *  BuildingName
     *  "Plot 421"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\BuildingName
     */
    public function getBuildingName()
    {
        return $this->buildingName;
    }

    /**
     * Sets a new buildingName
     *
     * BBIE
     *  Address. Building Name. Name
     *  The name of a building.
     *  0..1
     *  Address
     *  Building Name
     *  Name
     *  Name. Type
     *  BuildingName
     *  "Plot 421"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\BuildingName $buildingName
     * @return self
     */
    public function setBuildingName(\NOKA\PHPUBL\UBL\Common\BasicComponents\BuildingName $buildingName)
    {
        $this->buildingName = $buildingName;
        return $this;
    }

    /**
     * Gets as buildingNumber
     *
     * BBIE
     *  Address. Building Number. Text
     *  The number of a building.
     *  0..1
     *  Address
     *  Building Number
     *  Text
     *  Text. Type
     *  PremiseNumber
     *  "388"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\BuildingNumber
     */
    public function getBuildingNumber()
    {
        return $this->buildingNumber;
    }

    /**
     * Sets a new buildingNumber
     *
     * BBIE
     *  Address. Building Number. Text
     *  The number of a building.
     *  0..1
     *  Address
     *  Building Number
     *  Text
     *  Text. Type
     *  PremiseNumber
     *  "388"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\BuildingNumber $buildingNumber
     * @return self
     */
    public function setBuildingNumber(\NOKA\PHPUBL\UBL\Common\BasicComponents\BuildingNumber $buildingNumber)
    {
        $this->buildingNumber = $buildingNumber;
        return $this;
    }

    /**
     * Gets as inhouseMail
     *
     * BBIE
     *  Address. Inhouse_ Mail. Text
     *  A specific location within a building.
     *  0..1
     *  Address
     *  Inhouse
     *  Mail
     *  Text
     *  Text. Type
     *  MailStop
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\InhouseMail
     */
    public function getInhouseMail()
    {
        return $this->inhouseMail;
    }

    /**
     * Sets a new inhouseMail
     *
     * BBIE
     *  Address. Inhouse_ Mail. Text
     *  A specific location within a building.
     *  0..1
     *  Address
     *  Inhouse
     *  Mail
     *  Text
     *  Text. Type
     *  MailStop
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\InhouseMail $inhouseMail
     * @return self
     */
    public function setInhouseMail(\NOKA\PHPUBL\UBL\Common\BasicComponents\InhouseMail $inhouseMail)
    {
        $this->inhouseMail = $inhouseMail;
        return $this;
    }

    /**
     * Gets as department
     *
     * BBIE
     *  Address. Department. Text
     *  An addressable department of an organization.
     *  0..1
     *  Address
     *  Department
     *  Text
     *  Text. Type
     *  Department
     *  "Accounts Payable"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Department
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Sets a new department
     *
     * BBIE
     *  Address. Department. Text
     *  An addressable department of an organization.
     *  0..1
     *  Address
     *  Department
     *  Text
     *  Text. Type
     *  Department
     *  "Accounts Payable"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Department $department
     * @return self
     */
    public function setDepartment(\NOKA\PHPUBL\UBL\Common\BasicComponents\Department $department)
    {
        $this->department = $department;
        return $this;
    }

    /**
     * Gets as markAttention
     *
     * BBIE
     *  Address. Mark Attention. Text
     *  The name, expressed as text, of a person or department in the organization to whom incoming mail is marked with words such as 'for the attention of' or 'FAO' or 'ATTN' for this address.
     *  0..1
     *  Address
     *  Mark Attention
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\MarkAttention
     */
    public function getMarkAttention()
    {
        return $this->markAttention;
    }

    /**
     * Sets a new markAttention
     *
     * BBIE
     *  Address. Mark Attention. Text
     *  The name, expressed as text, of a person or department in the organization to whom incoming mail is marked with words such as 'for the attention of' or 'FAO' or 'ATTN' for this address.
     *  0..1
     *  Address
     *  Mark Attention
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\MarkAttention $markAttention
     * @return self
     */
    public function setMarkAttention(\NOKA\PHPUBL\UBL\Common\BasicComponents\MarkAttention $markAttention)
    {
        $this->markAttention = $markAttention;
        return $this;
    }

    /**
     * Gets as markCare
     *
     * BBIE
     *  Address. Mark Care. Text
     *  The name, expressed as text, of a person or organization at this address to whom incoming mail is marked with words such as 'care of' or 'C/O'.
     *  0..1
     *  Address
     *  Mark Care
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\MarkCare
     */
    public function getMarkCare()
    {
        return $this->markCare;
    }

    /**
     * Sets a new markCare
     *
     * BBIE
     *  Address. Mark Care. Text
     *  The name, expressed as text, of a person or organization at this address to whom incoming mail is marked with words such as 'care of' or 'C/O'.
     *  0..1
     *  Address
     *  Mark Care
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\MarkCare $markCare
     * @return self
     */
    public function setMarkCare(\NOKA\PHPUBL\UBL\Common\BasicComponents\MarkCare $markCare)
    {
        $this->markCare = $markCare;
        return $this;
    }

    /**
     * Gets as plotIdentification
     *
     * BBIE
     *  Address. Plot Identification. Text
     *  The textual expression of the unique identifier for the piece of land on which this address is located such as a plot number.
     *  0..1
     *  Address
     *  Plot Identification
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\PlotIdentification
     */
    public function getPlotIdentification()
    {
        return $this->plotIdentification;
    }

    /**
     * Sets a new plotIdentification
     *
     * BBIE
     *  Address. Plot Identification. Text
     *  The textual expression of the unique identifier for the piece of land on which this address is located such as a plot number.
     *  0..1
     *  Address
     *  Plot Identification
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\PlotIdentification $plotIdentification
     * @return self
     */
    public function setPlotIdentification(\NOKA\PHPUBL\UBL\Common\BasicComponents\PlotIdentification $plotIdentification)
    {
        $this->plotIdentification = $plotIdentification;
        return $this;
    }

    /**
     * Gets as citySubdivisionName
     *
     * BBIE
     *  Address. City Subdivision Name. Name
     *  A name, expressed as text, of a subdivision of a city for this address, for example, a district or borough.
     *  0..1
     *  Address
     *  City Subdivision Name
     *  Name
     *  Name. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\CitySubdivisionName
     */
    public function getCitySubdivisionName()
    {
        return $this->citySubdivisionName;
    }

    /**
     * Sets a new citySubdivisionName
     *
     * BBIE
     *  Address. City Subdivision Name. Name
     *  A name, expressed as text, of a subdivision of a city for this address, for example, a district or borough.
     *  0..1
     *  Address
     *  City Subdivision Name
     *  Name
     *  Name. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\CitySubdivisionName $citySubdivisionName
     * @return self
     */
    public function setCitySubdivisionName(\NOKA\PHPUBL\UBL\Common\BasicComponents\CitySubdivisionName $citySubdivisionName)
    {
        $this->citySubdivisionName = $citySubdivisionName;
        return $this;
    }

    /**
     * Gets as cityName
     *
     * BBIE
     *  Address. City Name. Name
     *  The name of a city, town, or village.
     *  0..1
     *  Address
     *  City Name
     *  Name
     *  Name. Type
     *  LocalityName
     *  "Hong Kong"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\CityName
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * Sets a new cityName
     *
     * BBIE
     *  Address. City Name. Name
     *  The name of a city, town, or village.
     *  0..1
     *  Address
     *  City Name
     *  Name
     *  Name. Type
     *  LocalityName
     *  "Hong Kong"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\CityName $cityName
     * @return self
     */
    public function setCityName(\NOKA\PHPUBL\UBL\Common\BasicComponents\CityName $cityName)
    {
        $this->cityName = $cityName;
        return $this;
    }

    /**
     * Gets as postalZone
     *
     * BBIE
     *  Address. Postal_ Zone. Text
     *  The identifier for an addressable group of properties according to the relevant national postal service, such as a ZIP code or Post Code.
     *  0..1
     *  Address
     *  Postal
     *  Zone
     *  Text
     *  Text. Type
     *  PostalCodeNumber
     *  "SW11 4EW" "2500 GG"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\PostalZone
     */
    public function getPostalZone()
    {
        return $this->postalZone;
    }

    /**
     * Sets a new postalZone
     *
     * BBIE
     *  Address. Postal_ Zone. Text
     *  The identifier for an addressable group of properties according to the relevant national postal service, such as a ZIP code or Post Code.
     *  0..1
     *  Address
     *  Postal
     *  Zone
     *  Text
     *  Text. Type
     *  PostalCodeNumber
     *  "SW11 4EW" "2500 GG"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\PostalZone $postalZone
     * @return self
     */
    public function setPostalZone(\NOKA\PHPUBL\UBL\Common\BasicComponents\PostalZone $postalZone)
    {
        $this->postalZone = $postalZone;
        return $this;
    }

    /**
     * Gets as countrySubentity
     *
     * BBIE
     *  Address. Country Subentity. Text
     *  A territorial division of a country, such as a county or state.
     *  0..1
     *  Address
     *  Country Subentity
     *  Text
     *  Text. Type
     *  AdministrativeArea, State, Country, Shire, Canton
     *  "Florida","Tamilnadu"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\CountrySubentity
     */
    public function getCountrySubentity()
    {
        return $this->countrySubentity;
    }

    /**
     * Sets a new countrySubentity
     *
     * BBIE
     *  Address. Country Subentity. Text
     *  A territorial division of a country, such as a county or state.
     *  0..1
     *  Address
     *  Country Subentity
     *  Text
     *  Text. Type
     *  AdministrativeArea, State, Country, Shire, Canton
     *  "Florida","Tamilnadu"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\CountrySubentity $countrySubentity
     * @return self
     */
    public function setCountrySubentity(\NOKA\PHPUBL\UBL\Common\BasicComponents\CountrySubentity $countrySubentity)
    {
        $this->countrySubentity = $countrySubentity;
        return $this;
    }

    /**
     * Gets as countrySubentityCode
     *
     * BBIE
     *  Address. Country Subentity Code. Code
     *  A territorial division of a country, such as a county or state, expressed as a code.
     *  0..1
     *  Address
     *  Country Subentity Code
     *  Code
     *  Code. Type
     *  AdministrativeAreaCode, State Code
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\CountrySubentityCode
     */
    public function getCountrySubentityCode()
    {
        return $this->countrySubentityCode;
    }

    /**
     * Sets a new countrySubentityCode
     *
     * BBIE
     *  Address. Country Subentity Code. Code
     *  A territorial division of a country, such as a county or state, expressed as a code.
     *  0..1
     *  Address
     *  Country Subentity Code
     *  Code
     *  Code. Type
     *  AdministrativeAreaCode, State Code
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\CountrySubentityCode $countrySubentityCode
     * @return self
     */
    public function setCountrySubentityCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\CountrySubentityCode $countrySubentityCode)
    {
        $this->countrySubentityCode = $countrySubentityCode;
        return $this;
    }

    /**
     * Gets as region
     *
     * BBIE
     *  Address. Region. Text
     *  An addressable region or group of countries.
     *  0..1
     *  Address
     *  Region
     *  Text
     *  Text. Type
     *  LocalityName, Economic Zone
     *  "European Union"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Region
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Sets a new region
     *
     * BBIE
     *  Address. Region. Text
     *  An addressable region or group of countries.
     *  0..1
     *  Address
     *  Region
     *  Text
     *  Text. Type
     *  LocalityName, Economic Zone
     *  "European Union"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Region $region
     * @return self
     */
    public function setRegion(\NOKA\PHPUBL\UBL\Common\BasicComponents\Region $region)
    {
        $this->region = $region;
        return $this;
    }

    /**
     * Gets as district
     *
     * BBIE
     *  Address. District. Text
     *  A geographical division of a country.
     *  0..1
     *  Address
     *  District
     *  Text
     *  Text. Type
     *  LocalityName, Area
     *  "East Coast"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\District
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Sets a new district
     *
     * BBIE
     *  Address. District. Text
     *  A geographical division of a country.
     *  0..1
     *  Address
     *  District
     *  Text
     *  Text. Type
     *  LocalityName, Area
     *  "East Coast"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\District $district
     * @return self
     */
    public function setDistrict(\NOKA\PHPUBL\UBL\Common\BasicComponents\District $district)
    {
        $this->district = $district;
        return $this;
    }

    /**
     * Gets as timezoneOffset
     *
     * BBIE
     *  Address. Timezone Offset. Text
     *  For the time zone in which the address is situated, the measure of time offset from Universal Coordinated Time (UTC).
     *  0..1
     *  Address
     *  Timezone Offset
     *  Text
     *  Text. Type
     *  "+8:00" "-3:00"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TimezoneOffset
     */
    public function getTimezoneOffset()
    {
        return $this->timezoneOffset;
    }

    /**
     * Sets a new timezoneOffset
     *
     * BBIE
     *  Address. Timezone Offset. Text
     *  For the time zone in which the address is situated, the measure of time offset from Universal Coordinated Time (UTC).
     *  0..1
     *  Address
     *  Timezone Offset
     *  Text
     *  Text. Type
     *  "+8:00" "-3:00"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TimezoneOffset $timezoneOffset
     * @return self
     */
    public function setTimezoneOffset(\NOKA\PHPUBL\UBL\Common\BasicComponents\TimezoneOffset $timezoneOffset)
    {
        $this->timezoneOffset = $timezoneOffset;
        return $this;
    }

    /**
     * Adds as addressLine
     *
     * ASBIE
     *  Address. Address Line
     *  An association to Address Line.
     *  0..n
     *  Address
     *  Address Line
     *  Address Line
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\AddressLine $addressLine
     */
    public function addToAddressLine(\NOKA\PHPUBL\UBL\Common\AggregateComponents\AddressLine $addressLine)
    {
        $this->addressLine[] = $addressLine;
        return $this;
    }

    /**
     * isset addressLine
     *
     * ASBIE
     *  Address. Address Line
     *  An association to Address Line.
     *  0..n
     *  Address
     *  Address Line
     *  Address Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddressLine($index)
    {
        return isset($this->addressLine[$index]);
    }

    /**
     * unset addressLine
     *
     * ASBIE
     *  Address. Address Line
     *  An association to Address Line.
     *  0..n
     *  Address
     *  Address Line
     *  Address Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddressLine($index)
    {
        unset($this->addressLine[$index]);
    }

    /**
     * Gets as addressLine
     *
     * ASBIE
     *  Address. Address Line
     *  An association to Address Line.
     *  0..n
     *  Address
     *  Address Line
     *  Address Line
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\AddressLine[]
     */
    public function getAddressLine()
    {
        return $this->addressLine;
    }

    /**
     * Sets a new addressLine
     *
     * ASBIE
     *  Address. Address Line
     *  An association to Address Line.
     *  0..n
     *  Address
     *  Address Line
     *  Address Line
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\AddressLine[] $addressLine
     * @return self
     */
    public function setAddressLine(array $addressLine)
    {
        $this->addressLine = $addressLine;
        return $this;
    }

    /**
     * Gets as country
     *
     * ASBIE
     *  Address. Country
     *  An association to Country.
     *  0..1
     *  Address
     *  Country
     *  Country
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * ASBIE
     *  Address. Country
     *  An association to Country.
     *  0..1
     *  Address
     *  Country
     *  Country
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Country $country
     * @return self
     */
    public function setCountry(\NOKA\PHPUBL\UBL\Common\AggregateComponents\Country $country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Gets as locationCoordinate
     *
     * ASBIE
     *  Address. Location Coordinate
     *  An association to Location Coordinate.
     *  0..1
     *  Address
     *  Location Coordinate
     *  Location Coordinate
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\LocationCoordinate
     */
    public function getLocationCoordinate()
    {
        return $this->locationCoordinate;
    }

    /**
     * Sets a new locationCoordinate
     *
     * ASBIE
     *  Address. Location Coordinate
     *  An association to Location Coordinate.
     *  0..1
     *  Address
     *  Location Coordinate
     *  Location Coordinate
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\LocationCoordinate $locationCoordinate
     * @return self
     */
    public function setLocationCoordinate(\NOKA\PHPUBL\UBL\Common\AggregateComponents\LocationCoordinate $locationCoordinate)
    {
        $this->locationCoordinate = $locationCoordinate;
        return $this;
    }


}

