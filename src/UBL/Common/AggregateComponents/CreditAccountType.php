<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing CreditAccountType
 *
 * ABIE
 *  Credit Account. Details
 *  Information about a Credit Account (for sales on account).
 *  Credit Account
 * XSD Type: CreditAccountType
 */
class CreditAccountType
{

    /**
     * BBIE
     *  Credit Account. Account Identifier. Identifier
     *  Identifies the Credit Account.
     *  1
     *  Credit Account
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *  "Customer Code 29"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\AccountID $accountID
     */
    private $accountID = null;

    /**
     * Gets as accountID
     *
     * BBIE
     *  Credit Account. Account Identifier. Identifier
     *  Identifies the Credit Account.
     *  1
     *  Credit Account
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *  "Customer Code 29"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\AccountID
     */
    public function getAccountID()
    {
        return $this->accountID;
    }

    /**
     * Sets a new accountID
     *
     * BBIE
     *  Credit Account. Account Identifier. Identifier
     *  Identifies the Credit Account.
     *  1
     *  Credit Account
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *  "Customer Code 29"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\AccountID $accountID
     * @return self
     */
    public function setAccountID(\NOKA\PHPUBL\UBL\Common\BasicComponents\AccountID $accountID)
    {
        $this->accountID = $accountID;
        return $this;
    }


}

