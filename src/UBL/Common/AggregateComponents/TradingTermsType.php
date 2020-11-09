<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing TradingTermsType
 *
 * ABIE
 *  Trading Terms. Details
 *  Information about the terms of a trade agreement.
 *  Trading Terms
 * XSD Type: TradingTermsType
 */
class TradingTermsType
{

    /**
     * BBIE
     *  Trading Terms. Information. Text
     *  The terms in text.
     *  0..n
     *  Trading Terms
     *  Information
     *  Text
     *  Text. Type
     *  "Unless credit terms have been expressly agreed by Dell, payment for the products or services shall be made in full before physical delivery of products or services. Customer shall pay for all shipping and handling charges."
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Information[] $information
     */
    private $information = [
        
    ];

    /**
     * BBIE
     *  Trading Terms. Reference. Text
     *  A reference to the terms.
     *  0..1
     *  Trading Terms
     *  Reference
     *  Text
     *  Text. Type
     *  http://www1.ap.dell.com/content/topics/topic.aspx/ap/policy/en/au/sales_terms_au?c=au&l=en&s=gen
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Reference $reference
     */
    private $reference = null;

    /**
     * ASBIE
     *  Trading Terms. Applicable_ Address. Address
     *  An association to Address.
     *  0..1
     *  Trading Terms
     *  Applicable
     *  Address
     *  Address
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ApplicableAddress $applicableAddress
     */
    private $applicableAddress = null;

    /**
     * Adds as information
     *
     * BBIE
     *  Trading Terms. Information. Text
     *  The terms in text.
     *  0..n
     *  Trading Terms
     *  Information
     *  Text
     *  Text. Type
     *  "Unless credit terms have been expressly agreed by Dell, payment for the products or services shall be made in full before physical delivery of products or services. Customer shall pay for all shipping and handling charges."
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Information $information
     */
    public function addToInformation(\NOKA\PHPUBL\UBL\Common\BasicComponents\Information $information)
    {
        $this->information[] = $information;
        return $this;
    }

    /**
     * isset information
     *
     * BBIE
     *  Trading Terms. Information. Text
     *  The terms in text.
     *  0..n
     *  Trading Terms
     *  Information
     *  Text
     *  Text. Type
     *  "Unless credit terms have been expressly agreed by Dell, payment for the products or services shall be made in full before physical delivery of products or services. Customer shall pay for all shipping and handling charges."
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInformation($index)
    {
        return isset($this->information[$index]);
    }

    /**
     * unset information
     *
     * BBIE
     *  Trading Terms. Information. Text
     *  The terms in text.
     *  0..n
     *  Trading Terms
     *  Information
     *  Text
     *  Text. Type
     *  "Unless credit terms have been expressly agreed by Dell, payment for the products or services shall be made in full before physical delivery of products or services. Customer shall pay for all shipping and handling charges."
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInformation($index)
    {
        unset($this->information[$index]);
    }

    /**
     * Gets as information
     *
     * BBIE
     *  Trading Terms. Information. Text
     *  The terms in text.
     *  0..n
     *  Trading Terms
     *  Information
     *  Text
     *  Text. Type
     *  "Unless credit terms have been expressly agreed by Dell, payment for the products or services shall be made in full before physical delivery of products or services. Customer shall pay for all shipping and handling charges."
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Information[]
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Sets a new information
     *
     * BBIE
     *  Trading Terms. Information. Text
     *  The terms in text.
     *  0..n
     *  Trading Terms
     *  Information
     *  Text
     *  Text. Type
     *  "Unless credit terms have been expressly agreed by Dell, payment for the products or services shall be made in full before physical delivery of products or services. Customer shall pay for all shipping and handling charges."
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Information[] $information
     * @return self
     */
    public function setInformation(array $information)
    {
        $this->information = $information;
        return $this;
    }

    /**
     * Gets as reference
     *
     * BBIE
     *  Trading Terms. Reference. Text
     *  A reference to the terms.
     *  0..1
     *  Trading Terms
     *  Reference
     *  Text
     *  Text. Type
     *  http://www1.ap.dell.com/content/topics/topic.aspx/ap/policy/en/au/sales_terms_au?c=au&l=en&s=gen
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Reference
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * BBIE
     *  Trading Terms. Reference. Text
     *  A reference to the terms.
     *  0..1
     *  Trading Terms
     *  Reference
     *  Text
     *  Text. Type
     *  http://www1.ap.dell.com/content/topics/topic.aspx/ap/policy/en/au/sales_terms_au?c=au&l=en&s=gen
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Reference $reference
     * @return self
     */
    public function setReference(\NOKA\PHPUBL\UBL\Common\BasicComponents\Reference $reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Gets as applicableAddress
     *
     * ASBIE
     *  Trading Terms. Applicable_ Address. Address
     *  An association to Address.
     *  0..1
     *  Trading Terms
     *  Applicable
     *  Address
     *  Address
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ApplicableAddress
     */
    public function getApplicableAddress()
    {
        return $this->applicableAddress;
    }

    /**
     * Sets a new applicableAddress
     *
     * ASBIE
     *  Trading Terms. Applicable_ Address. Address
     *  An association to Address.
     *  0..1
     *  Trading Terms
     *  Applicable
     *  Address
     *  Address
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ApplicableAddress $applicableAddress
     * @return self
     */
    public function setApplicableAddress(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ApplicableAddress $applicableAddress)
    {
        $this->applicableAddress = $applicableAddress;
        return $this;
    }


}

