<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing SignatureType
 *
 * ABIE
 *  Signature. Details
 *  Information about signature. A placeholder for signature.
 *  Signature
 * XSD Type: SignatureType
 */
class SignatureType
{

    /**
     * BBIE
     *  Signature. Identifier
     *  An identifier for the Signature.
     *  1
     *  Signature
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Signature. Note. Text
     *  Free form text about the signature or the circumstances where the signature has been used.
     *  0..1
     *  Signature
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Note $note
     */
    private $note = null;

    /**
     * BBIE
     *  Signature. Validation Date. Date
     *  Specifies the date when the signature was approved.
     *  0..1
     *  Signature
     *  Validation Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $validationDate
     */
    private $validationDate = null;

    /**
     * BBIE
     *  Signature. Validation Time. Time
     *  Specifies the time when the signature was approved.
     *  0..1
     *  Signature
     *  Validation Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $validationTime
     */
    private $validationTime = null;

    /**
     * BBIE
     *  Signature. Validator Identifier. Identifier
     *  Identifies the organization, person, service or server that has validated the signature.
     *  0..1
     *  Signature
     *  Validator Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ValidatorID $validatorID
     */
    private $validatorID = null;

    /**
     * BBIE
     *  Signature. Canonicalization Method. Text
     *  The mathematical logic method used by the Signature.
     *  0..1
     *  Signature
     *  Canonicalization Method
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\CanonicalizationMethod $canonicalizationMethod
     */
    private $canonicalizationMethod = null;

    /**
     * BBIE
     *  Signature. Signature Method. Text
     *  The method of signature.
     *  0..1
     *  Signature
     *  Signature Method
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\SignatureMethod $signatureMethod
     */
    private $signatureMethod = null;

    /**
     * ASBIE
     *  Signature. Signatory_ Party. Party
     *  An association to the signing Party.
     *  1
     *  Signature
     *  Signatory
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\SignatoryParty $signatoryParty
     */
    private $signatoryParty = null;

    /**
     * ASBIE
     *  Signature. Digital Signature_ Attachment. Attachment
     *  Refers to the actual encoded signature (e.g., in XMLDSIG format).
     *  0..1
     *  Signature
     *  Digital Signature
     *  Attachment
     *  Attachment
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DigitalSignatureAttachment $digitalSignatureAttachment
     */
    private $digitalSignatureAttachment = null;

    /**
     * ASBIE
     *  Signature. Original_ Document Reference. Document Reference
     *  A reference to the actual document that the signature applies to. For evidentiary purposes, this may be the document image that the signatory party saw when applying their signature.
     *  0..1
     *  Signature
     *  Original
     *  Document Reference
     *  Document Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginalDocumentReference $originalDocumentReference
     */
    private $originalDocumentReference = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Signature. Identifier
     *  An identifier for the Signature.
     *  1
     *  Signature
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
     *  Signature. Identifier
     *  An identifier for the Signature.
     *  1
     *  Signature
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
     * Gets as note
     *
     * BBIE
     *  Signature. Note. Text
     *  Free form text about the signature or the circumstances where the signature has been used.
     *  0..1
     *  Signature
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
     *  Signature. Note. Text
     *  Free form text about the signature or the circumstances where the signature has been used.
     *  0..1
     *  Signature
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
     * Gets as validationDate
     *
     * BBIE
     *  Signature. Validation Date. Date
     *  Specifies the date when the signature was approved.
     *  0..1
     *  Signature
     *  Validation Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getValidationDate()
    {
        return $this->validationDate;
    }

    /**
     * Sets a new validationDate
     *
     * BBIE
     *  Signature. Validation Date. Date
     *  Specifies the date when the signature was approved.
     *  0..1
     *  Signature
     *  Validation Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $validationDate
     * @return self
     */
    public function setValidationDate(\DateTime $validationDate)
    {
        $this->validationDate = $validationDate;
        return $this;
    }

    /**
     * Gets as validationTime
     *
     * BBIE
     *  Signature. Validation Time. Time
     *  Specifies the time when the signature was approved.
     *  0..1
     *  Signature
     *  Validation Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getValidationTime()
    {
        return $this->validationTime;
    }

    /**
     * Sets a new validationTime
     *
     * BBIE
     *  Signature. Validation Time. Time
     *  Specifies the time when the signature was approved.
     *  0..1
     *  Signature
     *  Validation Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $validationTime
     * @return self
     */
    public function setValidationTime(\DateTime $validationTime)
    {
        $this->validationTime = $validationTime;
        return $this;
    }

    /**
     * Gets as validatorID
     *
     * BBIE
     *  Signature. Validator Identifier. Identifier
     *  Identifies the organization, person, service or server that has validated the signature.
     *  0..1
     *  Signature
     *  Validator Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ValidatorID
     */
    public function getValidatorID()
    {
        return $this->validatorID;
    }

    /**
     * Sets a new validatorID
     *
     * BBIE
     *  Signature. Validator Identifier. Identifier
     *  Identifies the organization, person, service or server that has validated the signature.
     *  0..1
     *  Signature
     *  Validator Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ValidatorID $validatorID
     * @return self
     */
    public function setValidatorID(\NOKA\PHPUBL\UBL\Common\BasicComponents\ValidatorID $validatorID)
    {
        $this->validatorID = $validatorID;
        return $this;
    }

    /**
     * Gets as canonicalizationMethod
     *
     * BBIE
     *  Signature. Canonicalization Method. Text
     *  The mathematical logic method used by the Signature.
     *  0..1
     *  Signature
     *  Canonicalization Method
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\CanonicalizationMethod
     */
    public function getCanonicalizationMethod()
    {
        return $this->canonicalizationMethod;
    }

    /**
     * Sets a new canonicalizationMethod
     *
     * BBIE
     *  Signature. Canonicalization Method. Text
     *  The mathematical logic method used by the Signature.
     *  0..1
     *  Signature
     *  Canonicalization Method
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\CanonicalizationMethod $canonicalizationMethod
     * @return self
     */
    public function setCanonicalizationMethod(\NOKA\PHPUBL\UBL\Common\BasicComponents\CanonicalizationMethod $canonicalizationMethod)
    {
        $this->canonicalizationMethod = $canonicalizationMethod;
        return $this;
    }

    /**
     * Gets as signatureMethod
     *
     * BBIE
     *  Signature. Signature Method. Text
     *  The method of signature.
     *  0..1
     *  Signature
     *  Signature Method
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\SignatureMethod
     */
    public function getSignatureMethod()
    {
        return $this->signatureMethod;
    }

    /**
     * Sets a new signatureMethod
     *
     * BBIE
     *  Signature. Signature Method. Text
     *  The method of signature.
     *  0..1
     *  Signature
     *  Signature Method
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\SignatureMethod $signatureMethod
     * @return self
     */
    public function setSignatureMethod(\NOKA\PHPUBL\UBL\Common\BasicComponents\SignatureMethod $signatureMethod)
    {
        $this->signatureMethod = $signatureMethod;
        return $this;
    }

    /**
     * Gets as signatoryParty
     *
     * ASBIE
     *  Signature. Signatory_ Party. Party
     *  An association to the signing Party.
     *  1
     *  Signature
     *  Signatory
     *  Party
     *  Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\SignatoryParty
     */
    public function getSignatoryParty()
    {
        return $this->signatoryParty;
    }

    /**
     * Sets a new signatoryParty
     *
     * ASBIE
     *  Signature. Signatory_ Party. Party
     *  An association to the signing Party.
     *  1
     *  Signature
     *  Signatory
     *  Party
     *  Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\SignatoryParty $signatoryParty
     * @return self
     */
    public function setSignatoryParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\SignatoryParty $signatoryParty)
    {
        $this->signatoryParty = $signatoryParty;
        return $this;
    }

    /**
     * Gets as digitalSignatureAttachment
     *
     * ASBIE
     *  Signature. Digital Signature_ Attachment. Attachment
     *  Refers to the actual encoded signature (e.g., in XMLDSIG format).
     *  0..1
     *  Signature
     *  Digital Signature
     *  Attachment
     *  Attachment
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\DigitalSignatureAttachment
     */
    public function getDigitalSignatureAttachment()
    {
        return $this->digitalSignatureAttachment;
    }

    /**
     * Sets a new digitalSignatureAttachment
     *
     * ASBIE
     *  Signature. Digital Signature_ Attachment. Attachment
     *  Refers to the actual encoded signature (e.g., in XMLDSIG format).
     *  0..1
     *  Signature
     *  Digital Signature
     *  Attachment
     *  Attachment
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DigitalSignatureAttachment $digitalSignatureAttachment
     * @return self
     */
    public function setDigitalSignatureAttachment(\NOKA\PHPUBL\UBL\Common\AggregateComponents\DigitalSignatureAttachment $digitalSignatureAttachment)
    {
        $this->digitalSignatureAttachment = $digitalSignatureAttachment;
        return $this;
    }

    /**
     * Gets as originalDocumentReference
     *
     * ASBIE
     *  Signature. Original_ Document Reference. Document Reference
     *  A reference to the actual document that the signature applies to. For evidentiary purposes, this may be the document image that the signatory party saw when applying their signature.
     *  0..1
     *  Signature
     *  Original
     *  Document Reference
     *  Document Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginalDocumentReference
     */
    public function getOriginalDocumentReference()
    {
        return $this->originalDocumentReference;
    }

    /**
     * Sets a new originalDocumentReference
     *
     * ASBIE
     *  Signature. Original_ Document Reference. Document Reference
     *  A reference to the actual document that the signature applies to. For evidentiary purposes, this may be the document image that the signatory party saw when applying their signature.
     *  0..1
     *  Signature
     *  Original
     *  Document Reference
     *  Document Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginalDocumentReference $originalDocumentReference
     * @return self
     */
    public function setOriginalDocumentReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginalDocumentReference $originalDocumentReference)
    {
        $this->originalDocumentReference = $originalDocumentReference;
        return $this;
    }


}

