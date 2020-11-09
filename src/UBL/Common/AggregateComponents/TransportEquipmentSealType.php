<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing TransportEquipmentSealType
 *
 * ABIE
 *  Transport Equipment Seal. Details
 *  Information about a transport equipment seal (a security device attached to the doors of a shipping container).
 *  Transport Equipment Seal
 *  Container Seal
 * XSD Type: TransportEquipmentSealType
 */
class TransportEquipmentSealType
{

    /**
     * BBIE
     *  Transport Equipment Seal. Identifier
     *  Identifies the seal.
     *  1
     *  Transport Equipment Seal
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "ACS1234"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Transport Equipment Seal. Seal Issuer Type Code. Code
     *  The type of party that issues and is responsible for a seal, expressed as a code.
     *  0..1
     *  Transport Equipment Seal
     *  Seal Issuer Type Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\SealIssuerTypeCode $sealIssuerTypeCode
     */
    private $sealIssuerTypeCode = null;

    /**
     * BBIE
     *  Transport Equipment Seal. Condition. Text
     *  Information about the condition of a seal.
     *  0..1
     *  Transport Equipment Seal
     *  Condition
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Condition $condition
     */
    private $condition = null;

    /**
     * BBIE
     *  Transport Equipment Seal. Seal Status Code. Code
     *  The status of a seal, expressed as a code.
     *  0..1
     *  Transport Equipment Seal
     *  Seal Status Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\SealStatusCode $sealStatusCode
     */
    private $sealStatusCode = null;

    /**
     * BBIE
     *  Transport Equipment Seal. Sealing Party Type. Text
     *  Textual description of the role of a sealing party.
     *  0..1
     *  Transport Equipment Seal
     *  Sealing Party Type
     *  Text
     *  Text. Type
     *  Sealing Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\SealingPartyType $sealingPartyType
     */
    private $sealingPartyType = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Transport Equipment Seal. Identifier
     *  Identifies the seal.
     *  1
     *  Transport Equipment Seal
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "ACS1234"
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
     *  Transport Equipment Seal. Identifier
     *  Identifies the seal.
     *  1
     *  Transport Equipment Seal
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "ACS1234"
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
     * Gets as sealIssuerTypeCode
     *
     * BBIE
     *  Transport Equipment Seal. Seal Issuer Type Code. Code
     *  The type of party that issues and is responsible for a seal, expressed as a code.
     *  0..1
     *  Transport Equipment Seal
     *  Seal Issuer Type Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\SealIssuerTypeCode
     */
    public function getSealIssuerTypeCode()
    {
        return $this->sealIssuerTypeCode;
    }

    /**
     * Sets a new sealIssuerTypeCode
     *
     * BBIE
     *  Transport Equipment Seal. Seal Issuer Type Code. Code
     *  The type of party that issues and is responsible for a seal, expressed as a code.
     *  0..1
     *  Transport Equipment Seal
     *  Seal Issuer Type Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\SealIssuerTypeCode $sealIssuerTypeCode
     * @return self
     */
    public function setSealIssuerTypeCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\SealIssuerTypeCode $sealIssuerTypeCode)
    {
        $this->sealIssuerTypeCode = $sealIssuerTypeCode;
        return $this;
    }

    /**
     * Gets as condition
     *
     * BBIE
     *  Transport Equipment Seal. Condition. Text
     *  Information about the condition of a seal.
     *  0..1
     *  Transport Equipment Seal
     *  Condition
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Condition
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * BBIE
     *  Transport Equipment Seal. Condition. Text
     *  Information about the condition of a seal.
     *  0..1
     *  Transport Equipment Seal
     *  Condition
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Condition $condition
     * @return self
     */
    public function setCondition(\NOKA\PHPUBL\UBL\Common\BasicComponents\Condition $condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Gets as sealStatusCode
     *
     * BBIE
     *  Transport Equipment Seal. Seal Status Code. Code
     *  The status of a seal, expressed as a code.
     *  0..1
     *  Transport Equipment Seal
     *  Seal Status Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\SealStatusCode
     */
    public function getSealStatusCode()
    {
        return $this->sealStatusCode;
    }

    /**
     * Sets a new sealStatusCode
     *
     * BBIE
     *  Transport Equipment Seal. Seal Status Code. Code
     *  The status of a seal, expressed as a code.
     *  0..1
     *  Transport Equipment Seal
     *  Seal Status Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\SealStatusCode $sealStatusCode
     * @return self
     */
    public function setSealStatusCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\SealStatusCode $sealStatusCode)
    {
        $this->sealStatusCode = $sealStatusCode;
        return $this;
    }

    /**
     * Gets as sealingPartyType
     *
     * BBIE
     *  Transport Equipment Seal. Sealing Party Type. Text
     *  Textual description of the role of a sealing party.
     *  0..1
     *  Transport Equipment Seal
     *  Sealing Party Type
     *  Text
     *  Text. Type
     *  Sealing Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\SealingPartyType
     */
    public function getSealingPartyType()
    {
        return $this->sealingPartyType;
    }

    /**
     * Sets a new sealingPartyType
     *
     * BBIE
     *  Transport Equipment Seal. Sealing Party Type. Text
     *  Textual description of the role of a sealing party.
     *  0..1
     *  Transport Equipment Seal
     *  Sealing Party Type
     *  Text
     *  Text. Type
     *  Sealing Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\SealingPartyType $sealingPartyType
     * @return self
     */
    public function setSealingPartyType(\NOKA\PHPUBL\UBL\Common\BasicComponents\SealingPartyType $sealingPartyType)
    {
        $this->sealingPartyType = $sealingPartyType;
        return $this;
    }


}

