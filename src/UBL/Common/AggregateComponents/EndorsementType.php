<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing EndorsementType
 *
 * ABIE
 *  Endorsement. Details
 *  Details of an endorsement on the document.
 *  Endorsement
 * XSD Type: EndorsementType
 */
class EndorsementType
{

    /**
     * BBIE
     *  Endorsement. Document. Identifier
     *  Identifies the endorsement.
     *  1
     *  Endorsement
     *  Document
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\DocumentID $documentID
     */
    private $documentID = null;

    /**
     * BBIE
     *  Endorsement. Approval Status. Text
     *  Specifies the status of the endorsement.
     *  1
     *  Endorsement
     *  Approval Status
     *  Text
     *  Text. Type
     *  Authentication Code
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ApprovalStatus $approvalStatus
     */
    private $approvalStatus = null;

    /**
     * BBIE
     *  Endorsement. Remarks. Text
     *  Remarks by the endorsing party.
     *  0..n
     *  Endorsement
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Remarks[] $remarks
     */
    private $remarks = [
        
    ];

    /**
     * ASBIE
     *  Endorsement. Endorser Party
     *  The type of party providing the endorsement.
     *  1
     *  Endorsement
     *  Endorser Party
     *  Endorser Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\EndorserParty $endorserParty
     */
    private $endorserParty = null;

    /**
     * ASBIE
     *  Endorsement. Signature
     *  One or more signatures applied to the endorsement.
     *  0..n
     *  Endorsement
     *  Signature
     *  Signature
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Signature[] $signature
     */
    private $signature = [
        
    ];

    /**
     * Gets as documentID
     *
     * BBIE
     *  Endorsement. Document. Identifier
     *  Identifies the endorsement.
     *  1
     *  Endorsement
     *  Document
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\DocumentID
     */
    public function getDocumentID()
    {
        return $this->documentID;
    }

    /**
     * Sets a new documentID
     *
     * BBIE
     *  Endorsement. Document. Identifier
     *  Identifies the endorsement.
     *  1
     *  Endorsement
     *  Document
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\DocumentID $documentID
     * @return self
     */
    public function setDocumentID(\NOKA\PHPUBL\UBL\Common\BasicComponents\DocumentID $documentID)
    {
        $this->documentID = $documentID;
        return $this;
    }

    /**
     * Gets as approvalStatus
     *
     * BBIE
     *  Endorsement. Approval Status. Text
     *  Specifies the status of the endorsement.
     *  1
     *  Endorsement
     *  Approval Status
     *  Text
     *  Text. Type
     *  Authentication Code
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ApprovalStatus
     */
    public function getApprovalStatus()
    {
        return $this->approvalStatus;
    }

    /**
     * Sets a new approvalStatus
     *
     * BBIE
     *  Endorsement. Approval Status. Text
     *  Specifies the status of the endorsement.
     *  1
     *  Endorsement
     *  Approval Status
     *  Text
     *  Text. Type
     *  Authentication Code
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ApprovalStatus $approvalStatus
     * @return self
     */
    public function setApprovalStatus(\NOKA\PHPUBL\UBL\Common\BasicComponents\ApprovalStatus $approvalStatus)
    {
        $this->approvalStatus = $approvalStatus;
        return $this;
    }

    /**
     * Adds as remarks
     *
     * BBIE
     *  Endorsement. Remarks. Text
     *  Remarks by the endorsing party.
     *  0..n
     *  Endorsement
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Remarks $remarks
     */
    public function addToRemarks(\NOKA\PHPUBL\UBL\Common\BasicComponents\Remarks $remarks)
    {
        $this->remarks[] = $remarks;
        return $this;
    }

    /**
     * isset remarks
     *
     * BBIE
     *  Endorsement. Remarks. Text
     *  Remarks by the endorsing party.
     *  0..n
     *  Endorsement
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRemarks($index)
    {
        return isset($this->remarks[$index]);
    }

    /**
     * unset remarks
     *
     * BBIE
     *  Endorsement. Remarks. Text
     *  Remarks by the endorsing party.
     *  0..n
     *  Endorsement
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRemarks($index)
    {
        unset($this->remarks[$index]);
    }

    /**
     * Gets as remarks
     *
     * BBIE
     *  Endorsement. Remarks. Text
     *  Remarks by the endorsing party.
     *  0..n
     *  Endorsement
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Remarks[]
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Sets a new remarks
     *
     * BBIE
     *  Endorsement. Remarks. Text
     *  Remarks by the endorsing party.
     *  0..n
     *  Endorsement
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Remarks[] $remarks
     * @return self
     */
    public function setRemarks(array $remarks)
    {
        $this->remarks = $remarks;
        return $this;
    }

    /**
     * Gets as endorserParty
     *
     * ASBIE
     *  Endorsement. Endorser Party
     *  The type of party providing the endorsement.
     *  1
     *  Endorsement
     *  Endorser Party
     *  Endorser Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\EndorserParty
     */
    public function getEndorserParty()
    {
        return $this->endorserParty;
    }

    /**
     * Sets a new endorserParty
     *
     * ASBIE
     *  Endorsement. Endorser Party
     *  The type of party providing the endorsement.
     *  1
     *  Endorsement
     *  Endorser Party
     *  Endorser Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\EndorserParty $endorserParty
     * @return self
     */
    public function setEndorserParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\EndorserParty $endorserParty)
    {
        $this->endorserParty = $endorserParty;
        return $this;
    }

    /**
     * Adds as signature
     *
     * ASBIE
     *  Endorsement. Signature
     *  One or more signatures applied to the endorsement.
     *  0..n
     *  Endorsement
     *  Signature
     *  Signature
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Signature $signature
     */
    public function addToSignature(\NOKA\PHPUBL\UBL\Common\AggregateComponents\Signature $signature)
    {
        $this->signature[] = $signature;
        return $this;
    }

    /**
     * isset signature
     *
     * ASBIE
     *  Endorsement. Signature
     *  One or more signatures applied to the endorsement.
     *  0..n
     *  Endorsement
     *  Signature
     *  Signature
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSignature($index)
    {
        return isset($this->signature[$index]);
    }

    /**
     * unset signature
     *
     * ASBIE
     *  Endorsement. Signature
     *  One or more signatures applied to the endorsement.
     *  0..n
     *  Endorsement
     *  Signature
     *  Signature
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSignature($index)
    {
        unset($this->signature[$index]);
    }

    /**
     * Gets as signature
     *
     * ASBIE
     *  Endorsement. Signature
     *  One or more signatures applied to the endorsement.
     *  0..n
     *  Endorsement
     *  Signature
     *  Signature
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\Signature[]
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * ASBIE
     *  Endorsement. Signature
     *  One or more signatures applied to the endorsement.
     *  0..n
     *  Endorsement
     *  Signature
     *  Signature
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Signature[] $signature
     * @return self
     */
    public function setSignature(array $signature)
    {
        $this->signature = $signature;
        return $this;
    }


}

