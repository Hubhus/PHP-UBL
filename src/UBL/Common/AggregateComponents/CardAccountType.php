<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing CardAccountType
 *
 * ABIE
 *  Card Account. Details
 *  Information about a credit card, debit card, or charge card.
 *  Card Account
 * XSD Type: CardAccountType
 */
class CardAccountType
{

    /**
     * BBIE
     *  Card Account. Primary_ Account Number. Identifier
     *  The card number; the Primary Account Number (PAN).
     *  1
     *  Card Account
     *  Primary
     *  Account Number
     *  Identifier
     *  Identifier. Type
     *  4558 XXXX XXXX XXXX (a real card number)
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\PrimaryAccountNumberID $primaryAccountNumberID
     */
    private $primaryAccountNumberID = null;

    /**
     * BBIE
     *  Card Account. Network. Identifier
     *  The card network provider.
     *  1
     *  Card Account
     *  Network
     *  Identifier
     *  Identifier. Type
     *  “VISA”, “MasterCard”, “American Express”
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\NetworkID $networkID
     */
    private $networkID = null;

    /**
     * BBIE
     *  Card Account. Card Type Code. Code
     *  The type of card.
     *  0..1
     *  Card Account
     *  Card Type Code
     *  Code
     *  Code. Type
     *  “Debit Card”, “Credit Card”, “Procurement Card”
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\CardTypeCode $cardTypeCode
     */
    private $cardTypeCode = null;

    /**
     * BBIE
     *  Card Account. Validity Start Date. Date
     *  The date from which the card is valid.
     *  0..1
     *  Card Account
     *  Validity Start Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $validityStartDate
     */
    private $validityStartDate = null;

    /**
     * BBIE
     *  Card Account. Expiry Date. Date
     *  The date up to which the card is valid.
     *  0..1
     *  Card Account
     *  Expiry Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $expiryDate
     */
    private $expiryDate = null;

    /**
     * BBIE
     *  Card Account. Issuer. Identifier
     *  The identifier for the card issuer.
     *  0..1
     *  Card Account
     *  Issuer
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\IssuerID $issuerID
     */
    private $issuerID = null;

    /**
     * BBIE
     *  Card Account. Issue Number. Identifier
     *  The card issue number.
     *  0..1
     *  Card Account
     *  Issue Number
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\IssueNumberID $issueNumberID
     */
    private $issueNumberID = null;

    /**
     * BBIE
     *  Card Account. CV2. Identifier
     *  The Card Verification Value.
     *  0..1
     *  Card Account
     *  CV2
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\CV2ID $cV2ID
     */
    private $cV2ID = null;

    /**
     * BBIE
     *  Card Account. Card Chip Code. Code
     *  The distinction between CHIP and MAG STRIPE cards.
     *  0..1
     *  Card Account
     *  Card Chip Code
     *  Code
     *  Chip_ Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\CardChipCode $cardChipCode
     */
    private $cardChipCode = null;

    /**
     * BBIE
     *  Card Account. Chip_ Application. Identifier
     *  An identifier for the application (AID) on a chip card that provides the information quoted.
     *  0..1
     *  Card Account
     *  Chip
     *  Application
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ChipApplicationID $chipApplicationID
     */
    private $chipApplicationID = null;

    /**
     * BBIE
     *  Card Account. Holder. Name
     *  The name of the cardholder.
     *  0..1
     *  Card Account
     *  Holder
     *  Name
     *  Name. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\HolderName $holderName
     */
    private $holderName = null;

    /**
     * Gets as primaryAccountNumberID
     *
     * BBIE
     *  Card Account. Primary_ Account Number. Identifier
     *  The card number; the Primary Account Number (PAN).
     *  1
     *  Card Account
     *  Primary
     *  Account Number
     *  Identifier
     *  Identifier. Type
     *  4558 XXXX XXXX XXXX (a real card number)
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\PrimaryAccountNumberID
     */
    public function getPrimaryAccountNumberID()
    {
        return $this->primaryAccountNumberID;
    }

    /**
     * Sets a new primaryAccountNumberID
     *
     * BBIE
     *  Card Account. Primary_ Account Number. Identifier
     *  The card number; the Primary Account Number (PAN).
     *  1
     *  Card Account
     *  Primary
     *  Account Number
     *  Identifier
     *  Identifier. Type
     *  4558 XXXX XXXX XXXX (a real card number)
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\PrimaryAccountNumberID $primaryAccountNumberID
     * @return self
     */
    public function setPrimaryAccountNumberID(\NOKA\PHPUBL\UBL\Common\BasicComponents\PrimaryAccountNumberID $primaryAccountNumberID)
    {
        $this->primaryAccountNumberID = $primaryAccountNumberID;
        return $this;
    }

    /**
     * Gets as networkID
     *
     * BBIE
     *  Card Account. Network. Identifier
     *  The card network provider.
     *  1
     *  Card Account
     *  Network
     *  Identifier
     *  Identifier. Type
     *  “VISA”, “MasterCard”, “American Express”
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\NetworkID
     */
    public function getNetworkID()
    {
        return $this->networkID;
    }

    /**
     * Sets a new networkID
     *
     * BBIE
     *  Card Account. Network. Identifier
     *  The card network provider.
     *  1
     *  Card Account
     *  Network
     *  Identifier
     *  Identifier. Type
     *  “VISA”, “MasterCard”, “American Express”
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\NetworkID $networkID
     * @return self
     */
    public function setNetworkID(\NOKA\PHPUBL\UBL\Common\BasicComponents\NetworkID $networkID)
    {
        $this->networkID = $networkID;
        return $this;
    }

    /**
     * Gets as cardTypeCode
     *
     * BBIE
     *  Card Account. Card Type Code. Code
     *  The type of card.
     *  0..1
     *  Card Account
     *  Card Type Code
     *  Code
     *  Code. Type
     *  “Debit Card”, “Credit Card”, “Procurement Card”
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\CardTypeCode
     */
    public function getCardTypeCode()
    {
        return $this->cardTypeCode;
    }

    /**
     * Sets a new cardTypeCode
     *
     * BBIE
     *  Card Account. Card Type Code. Code
     *  The type of card.
     *  0..1
     *  Card Account
     *  Card Type Code
     *  Code
     *  Code. Type
     *  “Debit Card”, “Credit Card”, “Procurement Card”
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\CardTypeCode $cardTypeCode
     * @return self
     */
    public function setCardTypeCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\CardTypeCode $cardTypeCode)
    {
        $this->cardTypeCode = $cardTypeCode;
        return $this;
    }

    /**
     * Gets as validityStartDate
     *
     * BBIE
     *  Card Account. Validity Start Date. Date
     *  The date from which the card is valid.
     *  0..1
     *  Card Account
     *  Validity Start Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getValidityStartDate()
    {
        return $this->validityStartDate;
    }

    /**
     * Sets a new validityStartDate
     *
     * BBIE
     *  Card Account. Validity Start Date. Date
     *  The date from which the card is valid.
     *  0..1
     *  Card Account
     *  Validity Start Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $validityStartDate
     * @return self
     */
    public function setValidityStartDate(\DateTime $validityStartDate)
    {
        $this->validityStartDate = $validityStartDate;
        return $this;
    }

    /**
     * Gets as expiryDate
     *
     * BBIE
     *  Card Account. Expiry Date. Date
     *  The date up to which the card is valid.
     *  0..1
     *  Card Account
     *  Expiry Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * Sets a new expiryDate
     *
     * BBIE
     *  Card Account. Expiry Date. Date
     *  The date up to which the card is valid.
     *  0..1
     *  Card Account
     *  Expiry Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $expiryDate
     * @return self
     */
    public function setExpiryDate(\DateTime $expiryDate)
    {
        $this->expiryDate = $expiryDate;
        return $this;
    }

    /**
     * Gets as issuerID
     *
     * BBIE
     *  Card Account. Issuer. Identifier
     *  The identifier for the card issuer.
     *  0..1
     *  Card Account
     *  Issuer
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\IssuerID
     */
    public function getIssuerID()
    {
        return $this->issuerID;
    }

    /**
     * Sets a new issuerID
     *
     * BBIE
     *  Card Account. Issuer. Identifier
     *  The identifier for the card issuer.
     *  0..1
     *  Card Account
     *  Issuer
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\IssuerID $issuerID
     * @return self
     */
    public function setIssuerID(\NOKA\PHPUBL\UBL\Common\BasicComponents\IssuerID $issuerID)
    {
        $this->issuerID = $issuerID;
        return $this;
    }

    /**
     * Gets as issueNumberID
     *
     * BBIE
     *  Card Account. Issue Number. Identifier
     *  The card issue number.
     *  0..1
     *  Card Account
     *  Issue Number
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\IssueNumberID
     */
    public function getIssueNumberID()
    {
        return $this->issueNumberID;
    }

    /**
     * Sets a new issueNumberID
     *
     * BBIE
     *  Card Account. Issue Number. Identifier
     *  The card issue number.
     *  0..1
     *  Card Account
     *  Issue Number
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\IssueNumberID $issueNumberID
     * @return self
     */
    public function setIssueNumberID(\NOKA\PHPUBL\UBL\Common\BasicComponents\IssueNumberID $issueNumberID)
    {
        $this->issueNumberID = $issueNumberID;
        return $this;
    }

    /**
     * Gets as cV2ID
     *
     * BBIE
     *  Card Account. CV2. Identifier
     *  The Card Verification Value.
     *  0..1
     *  Card Account
     *  CV2
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\CV2ID
     */
    public function getCV2ID()
    {
        return $this->cV2ID;
    }

    /**
     * Sets a new cV2ID
     *
     * BBIE
     *  Card Account. CV2. Identifier
     *  The Card Verification Value.
     *  0..1
     *  Card Account
     *  CV2
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\CV2ID $cV2ID
     * @return self
     */
    public function setCV2ID(\NOKA\PHPUBL\UBL\Common\BasicComponents\CV2ID $cV2ID)
    {
        $this->cV2ID = $cV2ID;
        return $this;
    }

    /**
     * Gets as cardChipCode
     *
     * BBIE
     *  Card Account. Card Chip Code. Code
     *  The distinction between CHIP and MAG STRIPE cards.
     *  0..1
     *  Card Account
     *  Card Chip Code
     *  Code
     *  Chip_ Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\CardChipCode
     */
    public function getCardChipCode()
    {
        return $this->cardChipCode;
    }

    /**
     * Sets a new cardChipCode
     *
     * BBIE
     *  Card Account. Card Chip Code. Code
     *  The distinction between CHIP and MAG STRIPE cards.
     *  0..1
     *  Card Account
     *  Card Chip Code
     *  Code
     *  Chip_ Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\CardChipCode $cardChipCode
     * @return self
     */
    public function setCardChipCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\CardChipCode $cardChipCode)
    {
        $this->cardChipCode = $cardChipCode;
        return $this;
    }

    /**
     * Gets as chipApplicationID
     *
     * BBIE
     *  Card Account. Chip_ Application. Identifier
     *  An identifier for the application (AID) on a chip card that provides the information quoted.
     *  0..1
     *  Card Account
     *  Chip
     *  Application
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ChipApplicationID
     */
    public function getChipApplicationID()
    {
        return $this->chipApplicationID;
    }

    /**
     * Sets a new chipApplicationID
     *
     * BBIE
     *  Card Account. Chip_ Application. Identifier
     *  An identifier for the application (AID) on a chip card that provides the information quoted.
     *  0..1
     *  Card Account
     *  Chip
     *  Application
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ChipApplicationID $chipApplicationID
     * @return self
     */
    public function setChipApplicationID(\NOKA\PHPUBL\UBL\Common\BasicComponents\ChipApplicationID $chipApplicationID)
    {
        $this->chipApplicationID = $chipApplicationID;
        return $this;
    }

    /**
     * Gets as holderName
     *
     * BBIE
     *  Card Account. Holder. Name
     *  The name of the cardholder.
     *  0..1
     *  Card Account
     *  Holder
     *  Name
     *  Name. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\HolderName
     */
    public function getHolderName()
    {
        return $this->holderName;
    }

    /**
     * Sets a new holderName
     *
     * BBIE
     *  Card Account. Holder. Name
     *  The name of the cardholder.
     *  0..1
     *  Card Account
     *  Holder
     *  Name
     *  Name. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\HolderName $holderName
     * @return self
     */
    public function setHolderName(\NOKA\PHPUBL\UBL\Common\BasicComponents\HolderName $holderName)
    {
        $this->holderName = $holderName;
        return $this;
    }


}

