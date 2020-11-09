<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing ContactType
 *
 * ABIE
 *  Contact. Details
 *  Information about a contactable person or organization department.
 *  Contact
 * XSD Type: ContactType
 */
class ContactType
{

    /**
     * BBIE
     *  Contact. Identifier
     *  An identifier for the Contact.
     *  0..1
     *  Contact
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "Receivals Clerk"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Contact. Name
     *  The name of the Contact.
     *  0..1
     *  Contact
     *  Name
     *  Name
     *  Name. Type
     *  "Delivery Dock"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Contact. Telephone. Text
     *  The telephone number of the Contact.
     *  0..1
     *  Contact
     *  Telephone
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Telephone $telephone
     */
    private $telephone = null;

    /**
     * BBIE
     *  Contact. Telefax. Text
     *  The fax number of the Contact.
     *  0..1
     *  Contact
     *  Telefax
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Telefax $telefax
     */
    private $telefax = null;

    /**
     * BBIE
     *  Contact. Electronic_ Mail. Text
     *  The email address of the Contact.
     *  0..1
     *  Contact
     *  Electronic
     *  Mail
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ElectronicMail $electronicMail
     */
    private $electronicMail = null;

    /**
     * BBIE
     *  Contact. Note. Text
     *  A note such as 'Emergency' or 'After Hours' describing the circumstances in which the Contact can be used.
     *  0..1
     *  Contact
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Note $note
     */
    private $note = null;

    /**
     * ASBIE
     *  Contact. Other_ Communication. Communication
     *  An association to Other Communication.
     *  0..n
     *  Contact
     *  Other
     *  Communication
     *  Communication
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\OtherCommunication[] $otherCommunication
     */
    private $otherCommunication = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Contact. Identifier
     *  An identifier for the Contact.
     *  0..1
     *  Contact
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "Receivals Clerk"
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
     *  Contact. Identifier
     *  An identifier for the Contact.
     *  0..1
     *  Contact
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "Receivals Clerk"
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
     * Gets as name
     *
     * BBIE
     *  Contact. Name
     *  The name of the Contact.
     *  0..1
     *  Contact
     *  Name
     *  Name
     *  Name. Type
     *  "Delivery Dock"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Contact. Name
     *  The name of the Contact.
     *  0..1
     *  Contact
     *  Name
     *  Name
     *  Name. Type
     *  "Delivery Dock"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Name $name
     * @return self
     */
    public function setName(\NOKA\PHPUBL\UBL\Common\BasicComponents\Name $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as telephone
     *
     * BBIE
     *  Contact. Telephone. Text
     *  The telephone number of the Contact.
     *  0..1
     *  Contact
     *  Telephone
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Telephone
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * BBIE
     *  Contact. Telephone. Text
     *  The telephone number of the Contact.
     *  0..1
     *  Contact
     *  Telephone
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Telephone $telephone
     * @return self
     */
    public function setTelephone(\NOKA\PHPUBL\UBL\Common\BasicComponents\Telephone $telephone)
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * Gets as telefax
     *
     * BBIE
     *  Contact. Telefax. Text
     *  The fax number of the Contact.
     *  0..1
     *  Contact
     *  Telefax
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Telefax
     */
    public function getTelefax()
    {
        return $this->telefax;
    }

    /**
     * Sets a new telefax
     *
     * BBIE
     *  Contact. Telefax. Text
     *  The fax number of the Contact.
     *  0..1
     *  Contact
     *  Telefax
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Telefax $telefax
     * @return self
     */
    public function setTelefax(\NOKA\PHPUBL\UBL\Common\BasicComponents\Telefax $telefax)
    {
        $this->telefax = $telefax;
        return $this;
    }

    /**
     * Gets as electronicMail
     *
     * BBIE
     *  Contact. Electronic_ Mail. Text
     *  The email address of the Contact.
     *  0..1
     *  Contact
     *  Electronic
     *  Mail
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ElectronicMail
     */
    public function getElectronicMail()
    {
        return $this->electronicMail;
    }

    /**
     * Sets a new electronicMail
     *
     * BBIE
     *  Contact. Electronic_ Mail. Text
     *  The email address of the Contact.
     *  0..1
     *  Contact
     *  Electronic
     *  Mail
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ElectronicMail $electronicMail
     * @return self
     */
    public function setElectronicMail(\NOKA\PHPUBL\UBL\Common\BasicComponents\ElectronicMail $electronicMail)
    {
        $this->electronicMail = $electronicMail;
        return $this;
    }

    /**
     * Gets as note
     *
     * BBIE
     *  Contact. Note. Text
     *  A note such as 'Emergency' or 'After Hours' describing the circumstances in which the Contact can be used.
     *  0..1
     *  Contact
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Note
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Contact. Note. Text
     *  A note such as 'Emergency' or 'After Hours' describing the circumstances in which the Contact can be used.
     *  0..1
     *  Contact
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Note $note
     * @return self
     */
    public function setNote(\NOKA\PHPUBL\UBL\Common\BasicComponents\Note $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Adds as otherCommunication
     *
     * ASBIE
     *  Contact. Other_ Communication. Communication
     *  An association to Other Communication.
     *  0..n
     *  Contact
     *  Other
     *  Communication
     *  Communication
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\OtherCommunication $otherCommunication
     */
    public function addToOtherCommunication(\NOKA\PHPUBL\UBL\Common\AggregateComponents\OtherCommunication $otherCommunication)
    {
        $this->otherCommunication[] = $otherCommunication;
        return $this;
    }

    /**
     * isset otherCommunication
     *
     * ASBIE
     *  Contact. Other_ Communication. Communication
     *  An association to Other Communication.
     *  0..n
     *  Contact
     *  Other
     *  Communication
     *  Communication
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOtherCommunication($index)
    {
        return isset($this->otherCommunication[$index]);
    }

    /**
     * unset otherCommunication
     *
     * ASBIE
     *  Contact. Other_ Communication. Communication
     *  An association to Other Communication.
     *  0..n
     *  Contact
     *  Other
     *  Communication
     *  Communication
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOtherCommunication($index)
    {
        unset($this->otherCommunication[$index]);
    }

    /**
     * Gets as otherCommunication
     *
     * ASBIE
     *  Contact. Other_ Communication. Communication
     *  An association to Other Communication.
     *  0..n
     *  Contact
     *  Other
     *  Communication
     *  Communication
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\OtherCommunication[]
     */
    public function getOtherCommunication()
    {
        return $this->otherCommunication;
    }

    /**
     * Sets a new otherCommunication
     *
     * ASBIE
     *  Contact. Other_ Communication. Communication
     *  An association to Other Communication.
     *  0..n
     *  Contact
     *  Other
     *  Communication
     *  Communication
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\OtherCommunication[] $otherCommunication
     * @return self
     */
    public function setOtherCommunication(array $otherCommunication)
    {
        $this->otherCommunication = $otherCommunication;
        return $this;
    }


}

