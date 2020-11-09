<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing PersonType
 *
 * ABIE
 *  Person. Details
 *  Information about a person.
 *  Person
 * XSD Type: PersonType
 */
class PersonType
{

    /**
     * BBIE
     *  Person. First_ Name. Name
     *  A person's forename or first name.
     *  0..1
     *  Person
     *  First
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\FirstName $firstName
     */
    private $firstName = null;

    /**
     * BBIE
     *  Person. Family_ Name. Name
     *  A person's surname or family name.
     *  0..1
     *  Person
     *  Family
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\FamilyName $familyName
     */
    private $familyName = null;

    /**
     * BBIE
     *  Person. Title. Text
     *  A person's title of address, e.g., Mr, Ms, Dr, Sir.
     *  0..1
     *  Person
     *  Title
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Title $title
     */
    private $title = null;

    /**
     * BBIE
     *  Person. Middle_ Name. Name
     *  A person's middle name(s) and/or initial(s).
     *  0..1
     *  Person
     *  Middle
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\MiddleName $middleName
     */
    private $middleName = null;

    /**
     * BBIE
     *  Person. Name Suffix. Text
     *  A suffix to a person's name, e.g., PhD, OBE, Jnr.
     *  0..1
     *  Person
     *  Name Suffix
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\NameSuffix $nameSuffix
     */
    private $nameSuffix = null;

    /**
     * BBIE
     *  Person. Job Title. Text
     *  A person's job title within an organization (for a particular role).
     *  0..1
     *  Person
     *  Job Title
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\JobTitle $jobTitle
     */
    private $jobTitle = null;

    /**
     * BBIE
     *  Person. Organization_ Department. Text
     *  The department or subdivision of an organization that the person belongs to (for a particular role).
     *  0..1
     *  Person
     *  Organization
     *  Department
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\OrganizationDepartment $organizationDepartment
     */
    private $organizationDepartment = null;

    /**
     * Gets as firstName
     *
     * BBIE
     *  Person. First_ Name. Name
     *  A person's forename or first name.
     *  0..1
     *  Person
     *  First
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\FirstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets a new firstName
     *
     * BBIE
     *  Person. First_ Name. Name
     *  A person's forename or first name.
     *  0..1
     *  Person
     *  First
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\FirstName $firstName
     * @return self
     */
    public function setFirstName(\NOKA\PHPUBL\UBL\Common\BasicComponents\FirstName $firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Gets as familyName
     *
     * BBIE
     *  Person. Family_ Name. Name
     *  A person's surname or family name.
     *  0..1
     *  Person
     *  Family
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\FamilyName
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }

    /**
     * Sets a new familyName
     *
     * BBIE
     *  Person. Family_ Name. Name
     *  A person's surname or family name.
     *  0..1
     *  Person
     *  Family
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\FamilyName $familyName
     * @return self
     */
    public function setFamilyName(\NOKA\PHPUBL\UBL\Common\BasicComponents\FamilyName $familyName)
    {
        $this->familyName = $familyName;
        return $this;
    }

    /**
     * Gets as title
     *
     * BBIE
     *  Person. Title. Text
     *  A person's title of address, e.g., Mr, Ms, Dr, Sir.
     *  0..1
     *  Person
     *  Title
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * BBIE
     *  Person. Title. Text
     *  A person's title of address, e.g., Mr, Ms, Dr, Sir.
     *  0..1
     *  Person
     *  Title
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Title $title
     * @return self
     */
    public function setTitle(\NOKA\PHPUBL\UBL\Common\BasicComponents\Title $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as middleName
     *
     * BBIE
     *  Person. Middle_ Name. Name
     *  A person's middle name(s) and/or initial(s).
     *  0..1
     *  Person
     *  Middle
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\MiddleName
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * Sets a new middleName
     *
     * BBIE
     *  Person. Middle_ Name. Name
     *  A person's middle name(s) and/or initial(s).
     *  0..1
     *  Person
     *  Middle
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\MiddleName $middleName
     * @return self
     */
    public function setMiddleName(\NOKA\PHPUBL\UBL\Common\BasicComponents\MiddleName $middleName)
    {
        $this->middleName = $middleName;
        return $this;
    }

    /**
     * Gets as nameSuffix
     *
     * BBIE
     *  Person. Name Suffix. Text
     *  A suffix to a person's name, e.g., PhD, OBE, Jnr.
     *  0..1
     *  Person
     *  Name Suffix
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\NameSuffix
     */
    public function getNameSuffix()
    {
        return $this->nameSuffix;
    }

    /**
     * Sets a new nameSuffix
     *
     * BBIE
     *  Person. Name Suffix. Text
     *  A suffix to a person's name, e.g., PhD, OBE, Jnr.
     *  0..1
     *  Person
     *  Name Suffix
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\NameSuffix $nameSuffix
     * @return self
     */
    public function setNameSuffix(\NOKA\PHPUBL\UBL\Common\BasicComponents\NameSuffix $nameSuffix)
    {
        $this->nameSuffix = $nameSuffix;
        return $this;
    }

    /**
     * Gets as jobTitle
     *
     * BBIE
     *  Person. Job Title. Text
     *  A person's job title within an organization (for a particular role).
     *  0..1
     *  Person
     *  Job Title
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\JobTitle
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * Sets a new jobTitle
     *
     * BBIE
     *  Person. Job Title. Text
     *  A person's job title within an organization (for a particular role).
     *  0..1
     *  Person
     *  Job Title
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\JobTitle $jobTitle
     * @return self
     */
    public function setJobTitle(\NOKA\PHPUBL\UBL\Common\BasicComponents\JobTitle $jobTitle)
    {
        $this->jobTitle = $jobTitle;
        return $this;
    }

    /**
     * Gets as organizationDepartment
     *
     * BBIE
     *  Person. Organization_ Department. Text
     *  The department or subdivision of an organization that the person belongs to (for a particular role).
     *  0..1
     *  Person
     *  Organization
     *  Department
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\OrganizationDepartment
     */
    public function getOrganizationDepartment()
    {
        return $this->organizationDepartment;
    }

    /**
     * Sets a new organizationDepartment
     *
     * BBIE
     *  Person. Organization_ Department. Text
     *  The department or subdivision of an organization that the person belongs to (for a particular role).
     *  0..1
     *  Person
     *  Organization
     *  Department
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\OrganizationDepartment $organizationDepartment
     * @return self
     */
    public function setOrganizationDepartment(\NOKA\PHPUBL\UBL\Common\BasicComponents\OrganizationDepartment $organizationDepartment)
    {
        $this->organizationDepartment = $organizationDepartment;
        return $this;
    }


}

