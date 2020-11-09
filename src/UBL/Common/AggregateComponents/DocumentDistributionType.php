<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing DocumentDistributionType
 *
 * ABIE
 *  Document Distribution. Details
 *  The details of the distribution of the document among business partners.
 *  Document Distribution
 * XSD Type: DocumentDistributionType
 */
class DocumentDistributionType
{

    /**
     * BBIE
     *  Document Distribution. Print_ Qualifier. Text
     *  The access right for a Party to distribute the document.
     *  1
     *  Document Distribution
     *  Print
     *  Qualifier
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\PrintQualifier $printQualifier
     */
    private $printQualifier = null;

    /**
     * BBIE
     *  Document Distribution. Maximum_ Copies. Numeric
     *  Specifies the maximum number of copies of the document that the user can print.
     *  1
     *  Document Distribution
     *  Maximum
     *  Copies
     *  Numeric
     *  Numeric. Type
     *
     * @var float $maximumCopiesNumeric
     */
    private $maximumCopiesNumeric = null;

    /**
     * ASBIE
     *  Document Distribution. Party
     *  Details of the Party who can access the document.
     *  1
     *  Document Distribution
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\Party $party
     */
    private $party = null;

    /**
     * Gets as printQualifier
     *
     * BBIE
     *  Document Distribution. Print_ Qualifier. Text
     *  The access right for a Party to distribute the document.
     *  1
     *  Document Distribution
     *  Print
     *  Qualifier
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\PrintQualifier
     */
    public function getPrintQualifier()
    {
        return $this->printQualifier;
    }

    /**
     * Sets a new printQualifier
     *
     * BBIE
     *  Document Distribution. Print_ Qualifier. Text
     *  The access right for a Party to distribute the document.
     *  1
     *  Document Distribution
     *  Print
     *  Qualifier
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\PrintQualifier $printQualifier
     * @return self
     */
    public function setPrintQualifier(\NOKA\PHPUBL\UBL\Common\BasicComponents\PrintQualifier $printQualifier)
    {
        $this->printQualifier = $printQualifier;
        return $this;
    }

    /**
     * Gets as maximumCopiesNumeric
     *
     * BBIE
     *  Document Distribution. Maximum_ Copies. Numeric
     *  Specifies the maximum number of copies of the document that the user can print.
     *  1
     *  Document Distribution
     *  Maximum
     *  Copies
     *  Numeric
     *  Numeric. Type
     *
     * @return float
     */
    public function getMaximumCopiesNumeric()
    {
        return $this->maximumCopiesNumeric;
    }

    /**
     * Sets a new maximumCopiesNumeric
     *
     * BBIE
     *  Document Distribution. Maximum_ Copies. Numeric
     *  Specifies the maximum number of copies of the document that the user can print.
     *  1
     *  Document Distribution
     *  Maximum
     *  Copies
     *  Numeric
     *  Numeric. Type
     *
     * @param float $maximumCopiesNumeric
     * @return self
     */
    public function setMaximumCopiesNumeric($maximumCopiesNumeric)
    {
        $this->maximumCopiesNumeric = $maximumCopiesNumeric;
        return $this;
    }

    /**
     * Gets as party
     *
     * ASBIE
     *  Document Distribution. Party
     *  Details of the Party who can access the document.
     *  1
     *  Document Distribution
     *  Party
     *  Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\Party
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Sets a new party
     *
     * ASBIE
     *  Document Distribution. Party
     *  Details of the Party who can access the document.
     *  1
     *  Document Distribution
     *  Party
     *  Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\Party $party
     * @return self
     */
    public function setParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\Party $party)
    {
        $this->party = $party;
        return $this;
    }


}

