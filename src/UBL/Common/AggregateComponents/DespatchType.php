<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing DespatchType
 *
 * ABIE
 *  Despatch. Details
 *  Information about Despatch.
 *  Despatch
 * XSD Type: DespatchType
 */
class DespatchType
{

    /**
     * BBIE
     *  Despatch. Identifier
     *  The identifier for the Delivery.
     *  0..1
     *  Despatch
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Despatch. Requested_ Despatch Date. Date
     *  The despatch (pick-up) date requested by the buyer.
     *  0..1
     *  Despatch
     *  Requested
     *  Despatch Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $requestedDespatchDate
     */
    private $requestedDespatchDate = null;

    /**
     * BBIE
     *  Despatch. Requested_ Despatch Time. Time
     *  The despatch (pick-up) time requested by the buyer.
     *  0..1
     *  Despatch
     *  Requested
     *  Despatch Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $requestedDespatchTime
     */
    private $requestedDespatchTime = null;

    /**
     * BBIE
     *  Despatch. Estimated_ Despatch Date. Date
     *  The despatch (pick-up) date estimated by the seller or Despatch.
     *  0..1
     *  Despatch
     *  Estimated
     *  Despatch Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $estimatedDespatchDate
     */
    private $estimatedDespatchDate = null;

    /**
     * BBIE
     *  Despatch. Estimated_ Despatch Time. Time
     *  The despatch (pick-up) time estimated by the seller or Despatch.
     *  0..1
     *  Despatch
     *  Estimated
     *  Despatch Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $estimatedDespatchTime
     */
    private $estimatedDespatchTime = null;

    /**
     * BBIE
     *  Despatch. Actual_ Despatch Date. Date
     *  The actual despatch (pick-up) date.
     *  0..1
     *  Despatch
     *  Actual
     *  Despatch Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $actualDespatchDate
     */
    private $actualDespatchDate = null;

    /**
     * BBIE
     *  Despatch. Actual_ Despatch Time. Time
     *  The actual despatch (pick-up) time.
     *  0..1
     *  Despatch
     *  Actual
     *  Despatch Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $actualDespatchTime
     */
    private $actualDespatchTime = null;

    /**
     * ASBIE
     *  Despatch. Despatch_ Address. Address
     *  An association to Despatch Address.
     *  0..1
     *  Despatch
     *  Despatch
     *  Address
     *  Address
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DespatchAddress $despatchAddress
     */
    private $despatchAddress = null;

    /**
     * ASBIE
     *  Despatch. Despatch_ Party. Party
     *  The party who despatched the delivery.
     *  0..1
     *  Despatch
     *  Despatch
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DespatchParty $despatchParty
     */
    private $despatchParty = null;

    /**
     * ASBIE
     *  Despatch. Contact
     *  An association to Contact.
     *  0..1
     *  Despatch
     *  Contact
     *  Contact
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Contact $contact
     */
    private $contact = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Despatch. Identifier
     *  The identifier for the Delivery.
     *  0..1
     *  Despatch
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
     *  Despatch. Identifier
     *  The identifier for the Delivery.
     *  0..1
     *  Despatch
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
     * Gets as requestedDespatchDate
     *
     * BBIE
     *  Despatch. Requested_ Despatch Date. Date
     *  The despatch (pick-up) date requested by the buyer.
     *  0..1
     *  Despatch
     *  Requested
     *  Despatch Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getRequestedDespatchDate()
    {
        return $this->requestedDespatchDate;
    }

    /**
     * Sets a new requestedDespatchDate
     *
     * BBIE
     *  Despatch. Requested_ Despatch Date. Date
     *  The despatch (pick-up) date requested by the buyer.
     *  0..1
     *  Despatch
     *  Requested
     *  Despatch Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $requestedDespatchDate
     * @return self
     */
    public function setRequestedDespatchDate(\DateTime $requestedDespatchDate)
    {
        $this->requestedDespatchDate = $requestedDespatchDate;
        return $this;
    }

    /**
     * Gets as requestedDespatchTime
     *
     * BBIE
     *  Despatch. Requested_ Despatch Time. Time
     *  The despatch (pick-up) time requested by the buyer.
     *  0..1
     *  Despatch
     *  Requested
     *  Despatch Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getRequestedDespatchTime()
    {
        return $this->requestedDespatchTime;
    }

    /**
     * Sets a new requestedDespatchTime
     *
     * BBIE
     *  Despatch. Requested_ Despatch Time. Time
     *  The despatch (pick-up) time requested by the buyer.
     *  0..1
     *  Despatch
     *  Requested
     *  Despatch Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $requestedDespatchTime
     * @return self
     */
    public function setRequestedDespatchTime(\DateTime $requestedDespatchTime)
    {
        $this->requestedDespatchTime = $requestedDespatchTime;
        return $this;
    }

    /**
     * Gets as estimatedDespatchDate
     *
     * BBIE
     *  Despatch. Estimated_ Despatch Date. Date
     *  The despatch (pick-up) date estimated by the seller or Despatch.
     *  0..1
     *  Despatch
     *  Estimated
     *  Despatch Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getEstimatedDespatchDate()
    {
        return $this->estimatedDespatchDate;
    }

    /**
     * Sets a new estimatedDespatchDate
     *
     * BBIE
     *  Despatch. Estimated_ Despatch Date. Date
     *  The despatch (pick-up) date estimated by the seller or Despatch.
     *  0..1
     *  Despatch
     *  Estimated
     *  Despatch Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $estimatedDespatchDate
     * @return self
     */
    public function setEstimatedDespatchDate(\DateTime $estimatedDespatchDate)
    {
        $this->estimatedDespatchDate = $estimatedDespatchDate;
        return $this;
    }

    /**
     * Gets as estimatedDespatchTime
     *
     * BBIE
     *  Despatch. Estimated_ Despatch Time. Time
     *  The despatch (pick-up) time estimated by the seller or Despatch.
     *  0..1
     *  Despatch
     *  Estimated
     *  Despatch Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getEstimatedDespatchTime()
    {
        return $this->estimatedDespatchTime;
    }

    /**
     * Sets a new estimatedDespatchTime
     *
     * BBIE
     *  Despatch. Estimated_ Despatch Time. Time
     *  The despatch (pick-up) time estimated by the seller or Despatch.
     *  0..1
     *  Despatch
     *  Estimated
     *  Despatch Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $estimatedDespatchTime
     * @return self
     */
    public function setEstimatedDespatchTime(\DateTime $estimatedDespatchTime)
    {
        $this->estimatedDespatchTime = $estimatedDespatchTime;
        return $this;
    }

    /**
     * Gets as actualDespatchDate
     *
     * BBIE
     *  Despatch. Actual_ Despatch Date. Date
     *  The actual despatch (pick-up) date.
     *  0..1
     *  Despatch
     *  Actual
     *  Despatch Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getActualDespatchDate()
    {
        return $this->actualDespatchDate;
    }

    /**
     * Sets a new actualDespatchDate
     *
     * BBIE
     *  Despatch. Actual_ Despatch Date. Date
     *  The actual despatch (pick-up) date.
     *  0..1
     *  Despatch
     *  Actual
     *  Despatch Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $actualDespatchDate
     * @return self
     */
    public function setActualDespatchDate(\DateTime $actualDespatchDate)
    {
        $this->actualDespatchDate = $actualDespatchDate;
        return $this;
    }

    /**
     * Gets as actualDespatchTime
     *
     * BBIE
     *  Despatch. Actual_ Despatch Time. Time
     *  The actual despatch (pick-up) time.
     *  0..1
     *  Despatch
     *  Actual
     *  Despatch Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getActualDespatchTime()
    {
        return $this->actualDespatchTime;
    }

    /**
     * Sets a new actualDespatchTime
     *
     * BBIE
     *  Despatch. Actual_ Despatch Time. Time
     *  The actual despatch (pick-up) time.
     *  0..1
     *  Despatch
     *  Actual
     *  Despatch Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $actualDespatchTime
     * @return self
     */
    public function setActualDespatchTime(\DateTime $actualDespatchTime)
    {
        $this->actualDespatchTime = $actualDespatchTime;
        return $this;
    }

    /**
     * Gets as despatchAddress
     *
     * ASBIE
     *  Despatch. Despatch_ Address. Address
     *  An association to Despatch Address.
     *  0..1
     *  Despatch
     *  Despatch
     *  Address
     *  Address
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\DespatchAddress
     */
    public function getDespatchAddress()
    {
        return $this->despatchAddress;
    }

    /**
     * Sets a new despatchAddress
     *
     * ASBIE
     *  Despatch. Despatch_ Address. Address
     *  An association to Despatch Address.
     *  0..1
     *  Despatch
     *  Despatch
     *  Address
     *  Address
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DespatchAddress $despatchAddress
     * @return self
     */
    public function setDespatchAddress(\NOKA\PHPUBL\UBL\Common\AggregateComponents\DespatchAddress $despatchAddress)
    {
        $this->despatchAddress = $despatchAddress;
        return $this;
    }

    /**
     * Gets as despatchParty
     *
     * ASBIE
     *  Despatch. Despatch_ Party. Party
     *  The party who despatched the delivery.
     *  0..1
     *  Despatch
     *  Despatch
     *  Party
     *  Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\DespatchParty
     */
    public function getDespatchParty()
    {
        return $this->despatchParty;
    }

    /**
     * Sets a new despatchParty
     *
     * ASBIE
     *  Despatch. Despatch_ Party. Party
     *  The party who despatched the delivery.
     *  0..1
     *  Despatch
     *  Despatch
     *  Party
     *  Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DespatchParty $despatchParty
     * @return self
     */
    public function setDespatchParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\DespatchParty $despatchParty)
    {
        $this->despatchParty = $despatchParty;
        return $this;
    }

    /**
     * Gets as contact
     *
     * ASBIE
     *  Despatch. Contact
     *  An association to Contact.
     *  0..1
     *  Despatch
     *  Contact
     *  Contact
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * ASBIE
     *  Despatch. Contact
     *  An association to Contact.
     *  0..1
     *  Despatch
     *  Contact
     *  Contact
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Contact $contact
     * @return self
     */
    public function setContact(\NOKA\PHPUBL\UBL\Common\AggregateComponents\Contact $contact)
    {
        $this->contact = $contact;
        return $this;
    }


}

