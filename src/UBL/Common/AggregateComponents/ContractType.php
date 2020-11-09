<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing ContractType
 *
 * ABIE
 *  Contract. Details
 *  Information about a Contract.
 *  Contract
 * XSD Type: ContractType
 */
class ContractType
{

    /**
     * BBIE
     *  Contract. Identifier
     *  Identifies the Contract.
     *  0..1
     *  Contract
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "CC23"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Contract. Issue Date. Date
     *  The date on which the Contract was issued.
     *  0..1
     *  Contract
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Contract. Issue Time. Time
     *  The time at which the Contract was issued.
     *  0..1
     *  Contract
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Contract. Contract Type Code. Code
     *  The type of Contract, expressed as a code.
     *  0..1
     *  Contract
     *  Contract Type Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ContractTypeCode $contractTypeCode
     */
    private $contractTypeCode = null;

    /**
     * BBIE
     *  Contract. Contract Type. Text
     *  The type of Contract, expressed as text.
     *  0..1
     *  Contract
     *  Contract Type
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ContractType $contractType
     */
    private $contractType = null;

    /**
     * ASBIE
     *  Contract. Validity_ Period. Period
     *  An association to Validity Period.
     *  0..1
     *  Contract
     *  Validity
     *  Period
     *  Period
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ValidityPeriod $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * ASBIE
     *  Contract. Contract_ Document Reference. Document Reference
     *  An associative reference to Contract Document.
     *  0..n
     *  Contract
     *  Contract
     *  Document Reference
     *  Document Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ContractDocumentReference[] $contractDocumentReference
     */
    private $contractDocumentReference = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Contract. Identifier
     *  Identifies the Contract.
     *  0..1
     *  Contract
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "CC23"
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
     *  Contract. Identifier
     *  Identifies the Contract.
     *  0..1
     *  Contract
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "CC23"
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
     * Gets as issueDate
     *
     * BBIE
     *  Contract. Issue Date. Date
     *  The date on which the Contract was issued.
     *  0..1
     *  Contract
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * Sets a new issueDate
     *
     * BBIE
     *  Contract. Issue Date. Date
     *  The date on which the Contract was issued.
     *  0..1
     *  Contract
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $issueDate
     * @return self
     */
    public function setIssueDate(\DateTime $issueDate)
    {
        $this->issueDate = $issueDate;
        return $this;
    }

    /**
     * Gets as issueTime
     *
     * BBIE
     *  Contract. Issue Time. Time
     *  The time at which the Contract was issued.
     *  0..1
     *  Contract
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getIssueTime()
    {
        return $this->issueTime;
    }

    /**
     * Sets a new issueTime
     *
     * BBIE
     *  Contract. Issue Time. Time
     *  The time at which the Contract was issued.
     *  0..1
     *  Contract
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $issueTime
     * @return self
     */
    public function setIssueTime(\DateTime $issueTime)
    {
        $this->issueTime = $issueTime;
        return $this;
    }

    /**
     * Gets as contractTypeCode
     *
     * BBIE
     *  Contract. Contract Type Code. Code
     *  The type of Contract, expressed as a code.
     *  0..1
     *  Contract
     *  Contract Type Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ContractTypeCode
     */
    public function getContractTypeCode()
    {
        return $this->contractTypeCode;
    }

    /**
     * Sets a new contractTypeCode
     *
     * BBIE
     *  Contract. Contract Type Code. Code
     *  The type of Contract, expressed as a code.
     *  0..1
     *  Contract
     *  Contract Type Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ContractTypeCode $contractTypeCode
     * @return self
     */
    public function setContractTypeCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\ContractTypeCode $contractTypeCode)
    {
        $this->contractTypeCode = $contractTypeCode;
        return $this;
    }

    /**
     * Gets as contractType
     *
     * BBIE
     *  Contract. Contract Type. Text
     *  The type of Contract, expressed as text.
     *  0..1
     *  Contract
     *  Contract Type
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ContractType
     */
    public function getContractType()
    {
        return $this->contractType;
    }

    /**
     * Sets a new contractType
     *
     * BBIE
     *  Contract. Contract Type. Text
     *  The type of Contract, expressed as text.
     *  0..1
     *  Contract
     *  Contract Type
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ContractType $contractType
     * @return self
     */
    public function setContractType(\NOKA\PHPUBL\UBL\Common\BasicComponents\ContractType $contractType)
    {
        $this->contractType = $contractType;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * ASBIE
     *  Contract. Validity_ Period. Period
     *  An association to Validity Period.
     *  0..1
     *  Contract
     *  Validity
     *  Period
     *  Period
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ValidityPeriod
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * ASBIE
     *  Contract. Validity_ Period. Period
     *  An association to Validity Period.
     *  0..1
     *  Contract
     *  Validity
     *  Period
     *  Period
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ValidityPeriod $validityPeriod
     * @return self
     */
    public function setValidityPeriod(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ValidityPeriod $validityPeriod)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Adds as contractDocumentReference
     *
     * ASBIE
     *  Contract. Contract_ Document Reference. Document Reference
     *  An associative reference to Contract Document.
     *  0..n
     *  Contract
     *  Contract
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ContractDocumentReference $contractDocumentReference
     */
    public function addToContractDocumentReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ContractDocumentReference $contractDocumentReference)
    {
        $this->contractDocumentReference[] = $contractDocumentReference;
        return $this;
    }

    /**
     * isset contractDocumentReference
     *
     * ASBIE
     *  Contract. Contract_ Document Reference. Document Reference
     *  An associative reference to Contract Document.
     *  0..n
     *  Contract
     *  Contract
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContractDocumentReference($index)
    {
        return isset($this->contractDocumentReference[$index]);
    }

    /**
     * unset contractDocumentReference
     *
     * ASBIE
     *  Contract. Contract_ Document Reference. Document Reference
     *  An associative reference to Contract Document.
     *  0..n
     *  Contract
     *  Contract
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContractDocumentReference($index)
    {
        unset($this->contractDocumentReference[$index]);
    }

    /**
     * Gets as contractDocumentReference
     *
     * ASBIE
     *  Contract. Contract_ Document Reference. Document Reference
     *  An associative reference to Contract Document.
     *  0..n
     *  Contract
     *  Contract
     *  Document Reference
     *  Document Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ContractDocumentReference[]
     */
    public function getContractDocumentReference()
    {
        return $this->contractDocumentReference;
    }

    /**
     * Sets a new contractDocumentReference
     *
     * ASBIE
     *  Contract. Contract_ Document Reference. Document Reference
     *  An associative reference to Contract Document.
     *  0..n
     *  Contract
     *  Contract
     *  Document Reference
     *  Document Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ContractDocumentReference[] $contractDocumentReference
     * @return self
     */
    public function setContractDocumentReference(array $contractDocumentReference)
    {
        $this->contractDocumentReference = $contractDocumentReference;
        return $this;
    }


}

