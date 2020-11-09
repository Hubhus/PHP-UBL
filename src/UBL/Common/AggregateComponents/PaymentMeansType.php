<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing PaymentMeansType
 *
 * ABIE
 *  Payment Means. Details
 *  Information about Payment Means.
 *  Payment Means
 * XSD Type: PaymentMeansType
 */
class PaymentMeansType
{

    /**
     * BBIE
     *  Payment Means. Identifier
     *  Identifies the Payment Means.
     *  0..1
     *  Payment Means
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Payment Means. Payment Means Code. Code
     *  The Payment Means expressed as a code
     *  1
     *  Payment Means
     *  Payment Means Code
     *  Code
     *  Payment Means_ Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\PaymentMeansCode $paymentMeansCode
     */
    private $paymentMeansCode = null;

    /**
     * BBIE
     *  Payment Means. Payment Due Date. Date
     *  The date on which payment is due for the Payment Means.
     *  0..1
     *  Payment Means
     *  Payment Due Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $paymentDueDate
     */
    private $paymentDueDate = null;

    /**
     * BBIE
     *  Payment Means. Payment Channel Code. Code
     *  The Payment Channel, expressed as a code.
     *  0..1
     *  Payment Means
     *  Payment Channel Code
     *  Code
     *  Code. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\PaymentChannelCode $paymentChannelCode
     */
    private $paymentChannelCode = null;

    /**
     * BBIE
     *  Payment Means. Instruction Identifier. Identifier
     *  Identifies the Payment Instruction.
     *  0..1
     *  Payment Means
     *  Instruction Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\InstructionID $instructionID
     */
    private $instructionID = null;

    /**
     * BBIE
     *  Payment Means. Instruction_ Note. Text
     *  Free-form text applying to the Payment.
     *  0..n
     *  Payment Means
     *  Instruction
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\InstructionNote[] $instructionNote
     */
    private $instructionNote = [
        
    ];

    /**
     * BBIE
     *  Payment Means. Payment Identifier. Identifier
     *  Identifies the Payment(s).
     *  0..n
     *  Payment Means
     *  Payment Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\PaymentID[] $paymentID
     */
    private $paymentID = [
        
    ];

    /**
     * ASBIE
     *  Payment Means. Card Account
     *  An association to Card Account.
     *  0..1
     *  Payment Means
     *  Card Account
     *  Card Account
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\CardAccount $cardAccount
     */
    private $cardAccount = null;

    /**
     * ASBIE
     *  Payment Means. Payer_ Financial Account. Financial Account
     *  An association to the payer's Financial Account.
     *  0..1
     *  Payment Means
     *  Payer
     *  Financial Account
     *  Financial Account
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\PayerFinancialAccount $payerFinancialAccount
     */
    private $payerFinancialAccount = null;

    /**
     * ASBIE
     *  Payment Means. Payee_ Financial Account. Financial Account
     *  An association to the payee's Financial Account.
     *  0..1
     *  Payment Means
     *  Payee
     *  Financial Account
     *  Financial Account
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\PayeeFinancialAccount $payeeFinancialAccount
     */
    private $payeeFinancialAccount = null;

    /**
     * ASBIE
     *  Payment Means. Credit Account
     *  An association to Credit Account.
     *  0..1
     *  Payment Means
     *  Credit Account
     *  Credit Account
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\CreditAccount $creditAccount
     */
    private $creditAccount = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Payment Means. Identifier
     *  Identifies the Payment Means.
     *  0..1
     *  Payment Means
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
     *  Payment Means. Identifier
     *  Identifies the Payment Means.
     *  0..1
     *  Payment Means
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
     * Gets as paymentMeansCode
     *
     * BBIE
     *  Payment Means. Payment Means Code. Code
     *  The Payment Means expressed as a code
     *  1
     *  Payment Means
     *  Payment Means Code
     *  Code
     *  Payment Means_ Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\PaymentMeansCode
     */
    public function getPaymentMeansCode()
    {
        return $this->paymentMeansCode;
    }

    /**
     * Sets a new paymentMeansCode
     *
     * BBIE
     *  Payment Means. Payment Means Code. Code
     *  The Payment Means expressed as a code
     *  1
     *  Payment Means
     *  Payment Means Code
     *  Code
     *  Payment Means_ Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\PaymentMeansCode $paymentMeansCode
     * @return self
     */
    public function setPaymentMeansCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\PaymentMeansCode $paymentMeansCode)
    {
        $this->paymentMeansCode = $paymentMeansCode;
        return $this;
    }

    /**
     * Gets as paymentDueDate
     *
     * BBIE
     *  Payment Means. Payment Due Date. Date
     *  The date on which payment is due for the Payment Means.
     *  0..1
     *  Payment Means
     *  Payment Due Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getPaymentDueDate()
    {
        return $this->paymentDueDate;
    }

    /**
     * Sets a new paymentDueDate
     *
     * BBIE
     *  Payment Means. Payment Due Date. Date
     *  The date on which payment is due for the Payment Means.
     *  0..1
     *  Payment Means
     *  Payment Due Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $paymentDueDate
     * @return self
     */
    public function setPaymentDueDate(\DateTime $paymentDueDate)
    {
        $this->paymentDueDate = $paymentDueDate;
        return $this;
    }

    /**
     * Gets as paymentChannelCode
     *
     * BBIE
     *  Payment Means. Payment Channel Code. Code
     *  The Payment Channel, expressed as a code.
     *  0..1
     *  Payment Means
     *  Payment Channel Code
     *  Code
     *  Code. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\PaymentChannelCode
     */
    public function getPaymentChannelCode()
    {
        return $this->paymentChannelCode;
    }

    /**
     * Sets a new paymentChannelCode
     *
     * BBIE
     *  Payment Means. Payment Channel Code. Code
     *  The Payment Channel, expressed as a code.
     *  0..1
     *  Payment Means
     *  Payment Channel Code
     *  Code
     *  Code. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\PaymentChannelCode $paymentChannelCode
     * @return self
     */
    public function setPaymentChannelCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\PaymentChannelCode $paymentChannelCode)
    {
        $this->paymentChannelCode = $paymentChannelCode;
        return $this;
    }

    /**
     * Gets as instructionID
     *
     * BBIE
     *  Payment Means. Instruction Identifier. Identifier
     *  Identifies the Payment Instruction.
     *  0..1
     *  Payment Means
     *  Instruction Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\InstructionID
     */
    public function getInstructionID()
    {
        return $this->instructionID;
    }

    /**
     * Sets a new instructionID
     *
     * BBIE
     *  Payment Means. Instruction Identifier. Identifier
     *  Identifies the Payment Instruction.
     *  0..1
     *  Payment Means
     *  Instruction Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\InstructionID $instructionID
     * @return self
     */
    public function setInstructionID(\NOKA\PHPUBL\UBL\Common\BasicComponents\InstructionID $instructionID)
    {
        $this->instructionID = $instructionID;
        return $this;
    }

    /**
     * Adds as instructionNote
     *
     * BBIE
     *  Payment Means. Instruction_ Note. Text
     *  Free-form text applying to the Payment.
     *  0..n
     *  Payment Means
     *  Instruction
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\InstructionNote $instructionNote
     */
    public function addToInstructionNote(\NOKA\PHPUBL\UBL\Common\BasicComponents\InstructionNote $instructionNote)
    {
        $this->instructionNote[] = $instructionNote;
        return $this;
    }

    /**
     * isset instructionNote
     *
     * BBIE
     *  Payment Means. Instruction_ Note. Text
     *  Free-form text applying to the Payment.
     *  0..n
     *  Payment Means
     *  Instruction
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInstructionNote($index)
    {
        return isset($this->instructionNote[$index]);
    }

    /**
     * unset instructionNote
     *
     * BBIE
     *  Payment Means. Instruction_ Note. Text
     *  Free-form text applying to the Payment.
     *  0..n
     *  Payment Means
     *  Instruction
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInstructionNote($index)
    {
        unset($this->instructionNote[$index]);
    }

    /**
     * Gets as instructionNote
     *
     * BBIE
     *  Payment Means. Instruction_ Note. Text
     *  Free-form text applying to the Payment.
     *  0..n
     *  Payment Means
     *  Instruction
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\InstructionNote[]
     */
    public function getInstructionNote()
    {
        return $this->instructionNote;
    }

    /**
     * Sets a new instructionNote
     *
     * BBIE
     *  Payment Means. Instruction_ Note. Text
     *  Free-form text applying to the Payment.
     *  0..n
     *  Payment Means
     *  Instruction
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\InstructionNote[] $instructionNote
     * @return self
     */
    public function setInstructionNote(array $instructionNote)
    {
        $this->instructionNote = $instructionNote;
        return $this;
    }

    /**
     * Adds as paymentID
     *
     * BBIE
     *  Payment Means. Payment Identifier. Identifier
     *  Identifies the Payment(s).
     *  0..n
     *  Payment Means
     *  Payment Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\PaymentID $paymentID
     */
    public function addToPaymentID(\NOKA\PHPUBL\UBL\Common\BasicComponents\PaymentID $paymentID)
    {
        $this->paymentID[] = $paymentID;
        return $this;
    }

    /**
     * isset paymentID
     *
     * BBIE
     *  Payment Means. Payment Identifier. Identifier
     *  Identifies the Payment(s).
     *  0..n
     *  Payment Means
     *  Payment Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentID($index)
    {
        return isset($this->paymentID[$index]);
    }

    /**
     * unset paymentID
     *
     * BBIE
     *  Payment Means. Payment Identifier. Identifier
     *  Identifies the Payment(s).
     *  0..n
     *  Payment Means
     *  Payment Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentID($index)
    {
        unset($this->paymentID[$index]);
    }

    /**
     * Gets as paymentID
     *
     * BBIE
     *  Payment Means. Payment Identifier. Identifier
     *  Identifies the Payment(s).
     *  0..n
     *  Payment Means
     *  Payment Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\PaymentID[]
     */
    public function getPaymentID()
    {
        return $this->paymentID;
    }

    /**
     * Sets a new paymentID
     *
     * BBIE
     *  Payment Means. Payment Identifier. Identifier
     *  Identifies the Payment(s).
     *  0..n
     *  Payment Means
     *  Payment Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\PaymentID[] $paymentID
     * @return self
     */
    public function setPaymentID(array $paymentID)
    {
        $this->paymentID = $paymentID;
        return $this;
    }

    /**
     * Gets as cardAccount
     *
     * ASBIE
     *  Payment Means. Card Account
     *  An association to Card Account.
     *  0..1
     *  Payment Means
     *  Card Account
     *  Card Account
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\CardAccount
     */
    public function getCardAccount()
    {
        return $this->cardAccount;
    }

    /**
     * Sets a new cardAccount
     *
     * ASBIE
     *  Payment Means. Card Account
     *  An association to Card Account.
     *  0..1
     *  Payment Means
     *  Card Account
     *  Card Account
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\CardAccount $cardAccount
     * @return self
     */
    public function setCardAccount(\NOKA\PHPUBL\UBL\Common\AggregateComponents\CardAccount $cardAccount)
    {
        $this->cardAccount = $cardAccount;
        return $this;
    }

    /**
     * Gets as payerFinancialAccount
     *
     * ASBIE
     *  Payment Means. Payer_ Financial Account. Financial Account
     *  An association to the payer's Financial Account.
     *  0..1
     *  Payment Means
     *  Payer
     *  Financial Account
     *  Financial Account
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\PayerFinancialAccount
     */
    public function getPayerFinancialAccount()
    {
        return $this->payerFinancialAccount;
    }

    /**
     * Sets a new payerFinancialAccount
     *
     * ASBIE
     *  Payment Means. Payer_ Financial Account. Financial Account
     *  An association to the payer's Financial Account.
     *  0..1
     *  Payment Means
     *  Payer
     *  Financial Account
     *  Financial Account
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\PayerFinancialAccount $payerFinancialAccount
     * @return self
     */
    public function setPayerFinancialAccount(\NOKA\PHPUBL\UBL\Common\AggregateComponents\PayerFinancialAccount $payerFinancialAccount)
    {
        $this->payerFinancialAccount = $payerFinancialAccount;
        return $this;
    }

    /**
     * Gets as payeeFinancialAccount
     *
     * ASBIE
     *  Payment Means. Payee_ Financial Account. Financial Account
     *  An association to the payee's Financial Account.
     *  0..1
     *  Payment Means
     *  Payee
     *  Financial Account
     *  Financial Account
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\PayeeFinancialAccount
     */
    public function getPayeeFinancialAccount()
    {
        return $this->payeeFinancialAccount;
    }

    /**
     * Sets a new payeeFinancialAccount
     *
     * ASBIE
     *  Payment Means. Payee_ Financial Account. Financial Account
     *  An association to the payee's Financial Account.
     *  0..1
     *  Payment Means
     *  Payee
     *  Financial Account
     *  Financial Account
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\PayeeFinancialAccount $payeeFinancialAccount
     * @return self
     */
    public function setPayeeFinancialAccount(\NOKA\PHPUBL\UBL\Common\AggregateComponents\PayeeFinancialAccount $payeeFinancialAccount)
    {
        $this->payeeFinancialAccount = $payeeFinancialAccount;
        return $this;
    }

    /**
     * Gets as creditAccount
     *
     * ASBIE
     *  Payment Means. Credit Account
     *  An association to Credit Account.
     *  0..1
     *  Payment Means
     *  Credit Account
     *  Credit Account
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\CreditAccount
     */
    public function getCreditAccount()
    {
        return $this->creditAccount;
    }

    /**
     * Sets a new creditAccount
     *
     * ASBIE
     *  Payment Means. Credit Account
     *  An association to Credit Account.
     *  0..1
     *  Payment Means
     *  Credit Account
     *  Credit Account
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\CreditAccount $creditAccount
     * @return self
     */
    public function setCreditAccount(\NOKA\PHPUBL\UBL\Common\AggregateComponents\CreditAccount $creditAccount)
    {
        $this->creditAccount = $creditAccount;
        return $this;
    }


}

