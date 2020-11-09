<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing BillingReferenceType
 *
 * ABIE
 *  Billing Reference. Details
 *  Information directly relating to a related document.
 *  Billing Reference
 * XSD Type: BillingReferenceType
 */
class BillingReferenceType
{

    /**
     * ASBIE
     *  Billing Reference. Invoice_ Document Reference. Document Reference
     *  An associative reference to Invoice.
     *  0..1
     *  Billing Reference
     *  Invoice
     *  Document Reference
     *  Document Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\InvoiceDocumentReference $invoiceDocumentReference
     */
    private $invoiceDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Self Billed Invoice_ Document Reference. Document Reference
     *  An associative reference to Self Billed Invoice.
     *  0..1
     *  Billing Reference
     *  Self Billed Invoice
     *  Document Reference
     *  Document Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\SelfBilledInvoiceDocumentReference $selfBilledInvoiceDocumentReference
     */
    private $selfBilledInvoiceDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Credit Note_ Document Reference. Document Reference
     *  An associative reference to Credit Note.
     *  0..1
     *  Billing Reference
     *  Credit Note
     *  Document Reference
     *  Document Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\CreditNoteDocumentReference $creditNoteDocumentReference
     */
    private $creditNoteDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Self Billed Credit Note_ Document Reference. Document Reference
     *  An associative reference to Self Billed Credit Note.
     *  0..1
     *  Billing Reference
     *  Self Billed Credit Note
     *  Document Reference
     *  Document Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\SelfBilledCreditNoteDocumentReference $selfBilledCreditNoteDocumentReference
     */
    private $selfBilledCreditNoteDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Debit Note_ Document Reference. Document Reference
     *  An associative reference to Debit Note.
     *  0..1
     *  Billing Reference
     *  Debit Note
     *  Document Reference
     *  Document Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DebitNoteDocumentReference $debitNoteDocumentReference
     */
    private $debitNoteDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Reminder_ Document Reference. Document Reference
     *  An associative reference to Reminder Document Reference
     *  0..1
     *  Billing Reference
     *  Reminder
     *  Document Reference
     *  Document Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReminderDocumentReference $reminderDocumentReference
     */
    private $reminderDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..1
     *  Billing Reference
     *  Additional
     *  Document Reference
     *  Document Reference
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\AdditionalDocumentReference $additionalDocumentReference
     */
    private $additionalDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Billing Reference Line
     *  An association to Billing Reference Line.
     *  0..n
     *  Billing Reference
     *  Billing Reference Line
     *  Billing Reference Line
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\BillingReferenceLine[] $billingReferenceLine
     */
    private $billingReferenceLine = [
        
    ];

    /**
     * Gets as invoiceDocumentReference
     *
     * ASBIE
     *  Billing Reference. Invoice_ Document Reference. Document Reference
     *  An associative reference to Invoice.
     *  0..1
     *  Billing Reference
     *  Invoice
     *  Document Reference
     *  Document Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\InvoiceDocumentReference
     */
    public function getInvoiceDocumentReference()
    {
        return $this->invoiceDocumentReference;
    }

    /**
     * Sets a new invoiceDocumentReference
     *
     * ASBIE
     *  Billing Reference. Invoice_ Document Reference. Document Reference
     *  An associative reference to Invoice.
     *  0..1
     *  Billing Reference
     *  Invoice
     *  Document Reference
     *  Document Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\InvoiceDocumentReference $invoiceDocumentReference
     * @return self
     */
    public function setInvoiceDocumentReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\InvoiceDocumentReference $invoiceDocumentReference)
    {
        $this->invoiceDocumentReference = $invoiceDocumentReference;
        return $this;
    }

    /**
     * Gets as selfBilledInvoiceDocumentReference
     *
     * ASBIE
     *  Billing Reference. Self Billed Invoice_ Document Reference. Document Reference
     *  An associative reference to Self Billed Invoice.
     *  0..1
     *  Billing Reference
     *  Self Billed Invoice
     *  Document Reference
     *  Document Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\SelfBilledInvoiceDocumentReference
     */
    public function getSelfBilledInvoiceDocumentReference()
    {
        return $this->selfBilledInvoiceDocumentReference;
    }

    /**
     * Sets a new selfBilledInvoiceDocumentReference
     *
     * ASBIE
     *  Billing Reference. Self Billed Invoice_ Document Reference. Document Reference
     *  An associative reference to Self Billed Invoice.
     *  0..1
     *  Billing Reference
     *  Self Billed Invoice
     *  Document Reference
     *  Document Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\SelfBilledInvoiceDocumentReference $selfBilledInvoiceDocumentReference
     * @return self
     */
    public function setSelfBilledInvoiceDocumentReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\SelfBilledInvoiceDocumentReference $selfBilledInvoiceDocumentReference)
    {
        $this->selfBilledInvoiceDocumentReference = $selfBilledInvoiceDocumentReference;
        return $this;
    }

    /**
     * Gets as creditNoteDocumentReference
     *
     * ASBIE
     *  Billing Reference. Credit Note_ Document Reference. Document Reference
     *  An associative reference to Credit Note.
     *  0..1
     *  Billing Reference
     *  Credit Note
     *  Document Reference
     *  Document Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\CreditNoteDocumentReference
     */
    public function getCreditNoteDocumentReference()
    {
        return $this->creditNoteDocumentReference;
    }

    /**
     * Sets a new creditNoteDocumentReference
     *
     * ASBIE
     *  Billing Reference. Credit Note_ Document Reference. Document Reference
     *  An associative reference to Credit Note.
     *  0..1
     *  Billing Reference
     *  Credit Note
     *  Document Reference
     *  Document Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\CreditNoteDocumentReference $creditNoteDocumentReference
     * @return self
     */
    public function setCreditNoteDocumentReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\CreditNoteDocumentReference $creditNoteDocumentReference)
    {
        $this->creditNoteDocumentReference = $creditNoteDocumentReference;
        return $this;
    }

    /**
     * Gets as selfBilledCreditNoteDocumentReference
     *
     * ASBIE
     *  Billing Reference. Self Billed Credit Note_ Document Reference. Document Reference
     *  An associative reference to Self Billed Credit Note.
     *  0..1
     *  Billing Reference
     *  Self Billed Credit Note
     *  Document Reference
     *  Document Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\SelfBilledCreditNoteDocumentReference
     */
    public function getSelfBilledCreditNoteDocumentReference()
    {
        return $this->selfBilledCreditNoteDocumentReference;
    }

    /**
     * Sets a new selfBilledCreditNoteDocumentReference
     *
     * ASBIE
     *  Billing Reference. Self Billed Credit Note_ Document Reference. Document Reference
     *  An associative reference to Self Billed Credit Note.
     *  0..1
     *  Billing Reference
     *  Self Billed Credit Note
     *  Document Reference
     *  Document Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\SelfBilledCreditNoteDocumentReference $selfBilledCreditNoteDocumentReference
     * @return self
     */
    public function setSelfBilledCreditNoteDocumentReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\SelfBilledCreditNoteDocumentReference $selfBilledCreditNoteDocumentReference)
    {
        $this->selfBilledCreditNoteDocumentReference = $selfBilledCreditNoteDocumentReference;
        return $this;
    }

    /**
     * Gets as debitNoteDocumentReference
     *
     * ASBIE
     *  Billing Reference. Debit Note_ Document Reference. Document Reference
     *  An associative reference to Debit Note.
     *  0..1
     *  Billing Reference
     *  Debit Note
     *  Document Reference
     *  Document Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\DebitNoteDocumentReference
     */
    public function getDebitNoteDocumentReference()
    {
        return $this->debitNoteDocumentReference;
    }

    /**
     * Sets a new debitNoteDocumentReference
     *
     * ASBIE
     *  Billing Reference. Debit Note_ Document Reference. Document Reference
     *  An associative reference to Debit Note.
     *  0..1
     *  Billing Reference
     *  Debit Note
     *  Document Reference
     *  Document Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DebitNoteDocumentReference $debitNoteDocumentReference
     * @return self
     */
    public function setDebitNoteDocumentReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\DebitNoteDocumentReference $debitNoteDocumentReference)
    {
        $this->debitNoteDocumentReference = $debitNoteDocumentReference;
        return $this;
    }

    /**
     * Gets as reminderDocumentReference
     *
     * ASBIE
     *  Billing Reference. Reminder_ Document Reference. Document Reference
     *  An associative reference to Reminder Document Reference
     *  0..1
     *  Billing Reference
     *  Reminder
     *  Document Reference
     *  Document Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReminderDocumentReference
     */
    public function getReminderDocumentReference()
    {
        return $this->reminderDocumentReference;
    }

    /**
     * Sets a new reminderDocumentReference
     *
     * ASBIE
     *  Billing Reference. Reminder_ Document Reference. Document Reference
     *  An associative reference to Reminder Document Reference
     *  0..1
     *  Billing Reference
     *  Reminder
     *  Document Reference
     *  Document Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ReminderDocumentReference $reminderDocumentReference
     * @return self
     */
    public function setReminderDocumentReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ReminderDocumentReference $reminderDocumentReference)
    {
        $this->reminderDocumentReference = $reminderDocumentReference;
        return $this;
    }

    /**
     * Gets as additionalDocumentReference
     *
     * ASBIE
     *  Billing Reference. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..1
     *  Billing Reference
     *  Additional
     *  Document Reference
     *  Document Reference
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\AdditionalDocumentReference
     */
    public function getAdditionalDocumentReference()
    {
        return $this->additionalDocumentReference;
    }

    /**
     * Sets a new additionalDocumentReference
     *
     * ASBIE
     *  Billing Reference. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..1
     *  Billing Reference
     *  Additional
     *  Document Reference
     *  Document Reference
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\AdditionalDocumentReference $additionalDocumentReference
     * @return self
     */
    public function setAdditionalDocumentReference(\NOKA\PHPUBL\UBL\Common\AggregateComponents\AdditionalDocumentReference $additionalDocumentReference)
    {
        $this->additionalDocumentReference = $additionalDocumentReference;
        return $this;
    }

    /**
     * Adds as billingReferenceLine
     *
     * ASBIE
     *  Billing Reference. Billing Reference Line
     *  An association to Billing Reference Line.
     *  0..n
     *  Billing Reference
     *  Billing Reference Line
     *  Billing Reference Line
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\BillingReferenceLine $billingReferenceLine
     */
    public function addToBillingReferenceLine(\NOKA\PHPUBL\UBL\Common\AggregateComponents\BillingReferenceLine $billingReferenceLine)
    {
        $this->billingReferenceLine[] = $billingReferenceLine;
        return $this;
    }

    /**
     * isset billingReferenceLine
     *
     * ASBIE
     *  Billing Reference. Billing Reference Line
     *  An association to Billing Reference Line.
     *  0..n
     *  Billing Reference
     *  Billing Reference Line
     *  Billing Reference Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBillingReferenceLine($index)
    {
        return isset($this->billingReferenceLine[$index]);
    }

    /**
     * unset billingReferenceLine
     *
     * ASBIE
     *  Billing Reference. Billing Reference Line
     *  An association to Billing Reference Line.
     *  0..n
     *  Billing Reference
     *  Billing Reference Line
     *  Billing Reference Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBillingReferenceLine($index)
    {
        unset($this->billingReferenceLine[$index]);
    }

    /**
     * Gets as billingReferenceLine
     *
     * ASBIE
     *  Billing Reference. Billing Reference Line
     *  An association to Billing Reference Line.
     *  0..n
     *  Billing Reference
     *  Billing Reference Line
     *  Billing Reference Line
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\BillingReferenceLine[]
     */
    public function getBillingReferenceLine()
    {
        return $this->billingReferenceLine;
    }

    /**
     * Sets a new billingReferenceLine
     *
     * ASBIE
     *  Billing Reference. Billing Reference Line
     *  An association to Billing Reference Line.
     *  0..n
     *  Billing Reference
     *  Billing Reference Line
     *  Billing Reference Line
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\BillingReferenceLine[] $billingReferenceLine
     * @return self
     */
    public function setBillingReferenceLine(array $billingReferenceLine)
    {
        $this->billingReferenceLine = $billingReferenceLine;
        return $this;
    }


}

