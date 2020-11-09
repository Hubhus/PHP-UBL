<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing ConsignmentType
 *
 * ABIE
 *  Consignment. Details
 *  A separately identifiable collection of goods items (available to be) transported from one consignor to one consignee via one or more modes of transport.
 *  Consignment
 * XSD Type: ConsignmentType
 */
class ConsignmentType
{

    /**
     * BBIE
     *  Consignment. Identifier
     *  Unique number assigned to goods, both for import and export.
     *  1
     *  Consignment
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Unique consignment reference number (UCR)
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Consignment. Summary_ Description. Text
     *  General descriptive text that is not part of any remarks.
     *  0..n
     *  Consignment
     *  Summary
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\SummaryDescription[] $summaryDescription
     */
    private $summaryDescription = [
        
    ];

    /**
     * BBIE
     *  Consignment. Total_ Invoice Amount. Amount
     *  Total of all invoice amounts declared in a single consignment.
     *  0..1
     *  Consignment
     *  Total
     *  Invoice Amount
     *  Amount
     *  Amount. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TotalInvoiceAmount $totalInvoiceAmount
     */
    private $totalInvoiceAmount = null;

    /**
     * BBIE
     *  Consignment. Declared Customs_ Value. Amount
     *  Amount declared for customs purposes of those goods in a consignment, whether or not they are subject to the same customs procedure, tariff/statistical heading, country information, and duty regime.
     *  0..1
     *  Consignment
     *  Declared Customs
     *  Value
     *  Amount
     *  Amount. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\DeclaredCustomsValueAmount $declaredCustomsValueAmount
     */
    private $declaredCustomsValueAmount = null;

    /**
     * BBIE
     *  Consignment. Tariff Description. Text
     *  A description of the tariff applied to a consignment.
     *  0..n
     *  Consignment
     *  Tariff Description
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TariffDescription[] $tariffDescription
     */
    private $tariffDescription = [
        
    ];

    /**
     * BBIE
     *  Consignment. Tariff Code. Code
     *  Code specifying a tariff applied to a consignment.
     *  0..1
     *  Consignment
     *  Tariff Code
     *  Code
     *  Code. Type
     *  Tariff code number (WCO ID 145)
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TariffCode $tariffCode
     */
    private $tariffCode = null;

    /**
     * BBIE
     *  Consignment. Insurance Premium Amount. Amount
     *  Amount of premium payable to the insurance company for insuring the goods.
     *  0..1
     *  Consignment
     *  Insurance Premium Amount
     *  Amount
     *  Amount. Type
     *  Insurance Cost
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\InsurancePremiumAmount $insurancePremiumAmount
     */
    private $insurancePremiumAmount = null;

    /**
     * BBIE
     *  Consignment. Gross_ Weight. Measure
     *  Total weight (mass) of goods for a declaration, including packaging but excluding the carrier's equipment.
     *  0..1
     *  Consignment
     *  Gross
     *  Weight
     *  Measure
     *  Measure. Type
     *  Total gross weight (WCO ID 131)
     *  Total cube of all goods items referred to as one consignment.
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\GrossWeightMeasure $grossWeightMeasure
     */
    private $grossWeightMeasure = null;

    /**
     * BBIE
     *  Consignment. Net_ Weight. Measure
     *  Total net weight (mass) of all the goods items referred to as one consignment.
     *  0..1
     *  Consignment
     *  Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\NetWeightMeasure $netWeightMeasure
     */
    private $netWeightMeasure = null;

    /**
     * BBIE
     *  Consignment. Net Net_ Weight. Measure
     *  Weight (mass) of the goods themselves without any packing.
     *  0..1
     *  Consignment
     *  Net Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\NetNetWeightMeasure $netNetWeightMeasure
     */
    private $netNetWeightMeasure = null;

    /**
     * BBIE
     *  Consignment. Chargeable_ Weight. Measure
     *  Gross weight (mass) on which a charge is to be based.
     *  0..1
     *  Consignment
     *  Chargeable
     *  Weight
     *  Measure
     *  Measure. Type
     *  Chargeable Weight. Basis.Measure
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ChargeableWeightMeasure $chargeableWeightMeasure
     */
    private $chargeableWeightMeasure = null;

    /**
     * BBIE
     *  Consignment. Gross_ Volume. Measure
     *  Total volume of all goods items referred to as one consignment.
     *  0..1
     *  Consignment
     *  Gross
     *  Volume
     *  Measure
     *  Measure. Type
     *  Cube
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\GrossVolumeMeasure $grossVolumeMeasure
     */
    private $grossVolumeMeasure = null;

    /**
     * BBIE
     *  Consignment. Net_ Volume. Measure
     *  Net volume of all goods items referred to as one consignment.
     *  0..1
     *  Consignment
     *  Net
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\NetVolumeMeasure $netVolumeMeasure
     */
    private $netVolumeMeasure = null;

    /**
     * BBIE
     *  Consignment. Loading_ Length. Measure
     *  Total length in a means of transport or a piece of transport equipment whereby the complete width and height over that length is needed for loading all the consignments referred to as one consolidation.
     *  0..1
     *  Consignment
     *  Loading
     *  Length
     *  Measure
     *  Measure. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\LoadingLengthMeasure $loadingLengthMeasure
     */
    private $loadingLengthMeasure = null;

    /**
     * BBIE
     *  Consignment. Remarks. Text
     *  Remarks concerning the complete consignment to be printed on the transport document.
     *  0..n
     *  Consignment
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Remarks[] $remarks
     */
    private $remarks = [
        
    ];

    /**
     * BBIE
     *  Consignment. Hazardous Risk_ Indicator. Indicator
     *  Indication that the transport is or is not subject to an international regulation concerning the carriage of dangerous goods.
     *  0..1
     *  Consignment
     *  Hazardous Risk
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Dangerous Goods RID Indicator
     *  default is negative
     *
     * @var bool $hazardousRiskIndicator
     */
    private $hazardousRiskIndicator = null;

    /**
     * ASBIE
     *  Consignment. Consignee_ Party. Party
     *  Party to which goods are consigned.
     *  0..1
     *  Consignment
     *  Consignee
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ConsigneeParty $consigneeParty
     */
    private $consigneeParty = null;

    /**
     * ASBIE
     *  Consignment. Exporter_ Party. Party
     *  The party who makes the export declaration, or on whose behalf the export declaration is made, and who is the owner of the goods or has similar right of disposal over them at the time when the declaration is accepted.
     *  0..1
     *  Consignment
     *  Exporter
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ExporterParty $exporterParty
     */
    private $exporterParty = null;

    /**
     * ASBIE
     *  Consignment. Consignor_ Party. Party
     *  The party consigning goods, as stipulated in the transport contract by the party ordering transport.
     *  0..1
     *  Consignment
     *  Consignor
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ConsignorParty $consignorParty
     */
    private $consignorParty = null;

    /**
     * ASBIE
     *  Consignment. Importer_ Party. Party
     *  The party who makes an import declaration, or on whose behalf a Customs clearing agent or other authorized person makes an import declaration. This may include a person who has possession of the goods or to whom the goods are consigned.
     *  0..1
     *  Consignment
     *  Importer
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\ImporterParty $importerParty
     */
    private $importerParty = null;

    /**
     * ASBIE
     *  Consignment. Carrier_ Party. Party
     *  The party providing the transport of goods between named points.
     *  0..1
     *  Consignment
     *  Carrier
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\CarrierParty $carrierParty
     */
    private $carrierParty = null;

    /**
     * ASBIE
     *  Consignment. Freight Forwarder_ Party. Party
     *  The party combining individual smaller consignments into a single larger shipment (so called consolidated shipment) that is sent to a counterpart who mirrors the consolidator's activity by dividing the consolidated consignment into its original components.
     *  0..1
     *  Consignment
     *  Freight Forwarder
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\FreightForwarderParty $freightForwarderParty
     */
    private $freightForwarderParty = null;

    /**
     * ASBIE
     *  Consignment. Notify_ Party. Party
     *  The party to be notified.
     *  0..1
     *  Consignment
     *  Notify
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\NotifyParty $notifyParty
     */
    private $notifyParty = null;

    /**
     * ASBIE
     *  Consignment. Original Despatch_ Party. Party
     *  The original despatch party.
     *  0..1
     *  Consignment
     *  Original Despatch
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginalDespatchParty $originalDespatchParty
     */
    private $originalDespatchParty = null;

    /**
     * ASBIE
     *  Consignment. Final Delivery_ Party. Party
     *  The final delivery party.
     *  0..1
     *  Consignment
     *  Final Delivery
     *  Party
     *  Party
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\FinalDeliveryParty $finalDeliveryParty
     */
    private $finalDeliveryParty = null;

    /**
     * ASBIE
     *  Consignment. Original Departure_ Country. Country
     *  The country from which the goods are originally exported, without any commercial transaction taking place in intermediate countries.
     *  0..1
     *  Consignment
     *  Original Departure
     *  Country
     *  Country
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginalDepartureCountry $originalDepartureCountry
     */
    private $originalDepartureCountry = null;

    /**
     * ASBIE
     *  Consignment. Final Destination_ Country. Country
     *  Name of the country to which the goods are to be delivered to the final consignee or buyer.
     *  0..1
     *  Consignment
     *  Final Destination
     *  Country
     *  Country
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\FinalDestinationCountry $finalDestinationCountry
     */
    private $finalDestinationCountry = null;

    /**
     * ASBIE
     *  Consignment. Transit_ Country. Country
     *  The countries through which goods or passengers are routed between the country of original departure and the country of final destination.
     *  0..n
     *  Consignment
     *  Transit
     *  Country
     *  Country
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransitCountry[] $transitCountry
     */
    private $transitCountry = [
        
    ];

    /**
     * ASBIE
     *  Consignment. Transport_ Contract. Contract
     *  An association to Transport Contact.
     *  0..1
     *  Consignment
     *  Transport
     *  Contract
     *  Contract
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransportContract $transportContract
     */
    private $transportContract = null;

    /**
     * ASBIE
     *  Consignment. Original Despatch_ Transportation Service. Transportation Service
     *  The service for pick-up from the consignor under the transport contract.
     *  0..1
     *  Consignment
     *  Original Despatch
     *  Transportation Service
     *  Transportation Service
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginalDespatchTransportationService $originalDespatchTransportationService
     */
    private $originalDespatchTransportationService = null;

    /**
     * ASBIE
     *  Consignment. Final Delivery_ Transportation Service. Transportation Service
     *  The service for delivery to the consignee under the transport contract.
     *  0..1
     *  Consignment
     *  Final Delivery
     *  Transportation Service
     *  Transportation Service
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\FinalDeliveryTransportationService $finalDeliveryTransportationService
     */
    private $finalDeliveryTransportationService = null;

    /**
     * ASBIE
     *  Consignment. Delivery Terms
     *  All the conditions agreed upon between a seller and a buyer with regard to the delivery of goods and/or services, e.g., CIF, FOB, or EXW from the INCOTERMS Terms of Delivery.
     *  0..1
     *  Consignment
     *  Delivery Terms
     *  Delivery Terms
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryTerms $deliveryTerms
     */
    private $deliveryTerms = null;

    /**
     * ASBIE
     *  Consignment. Payment Terms
     *  The conditions of payment between the parties in a transaction.
     *  0..1
     *  Consignment
     *  Payment Terms
     *  Payment Terms
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentTerms $paymentTerms
     */
    private $paymentTerms = null;

    /**
     * ASBIE
     *  Consignment. Freight_ Allowance Charge. Allowance Charge
     *  Costs incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance (to the extent that they relate to the freight costs).
     *  0..n
     *  Consignment
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \NOKA\PHPUBL\UBL\Common\AggregateComponents\FreightAllowanceCharge[] $freightAllowanceCharge
     */
    private $freightAllowanceCharge = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Consignment. Identifier
     *  Unique number assigned to goods, both for import and export.
     *  1
     *  Consignment
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Unique consignment reference number (UCR)
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
     *  Consignment. Identifier
     *  Unique number assigned to goods, both for import and export.
     *  1
     *  Consignment
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Unique consignment reference number (UCR)
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
     * Adds as summaryDescription
     *
     * BBIE
     *  Consignment. Summary_ Description. Text
     *  General descriptive text that is not part of any remarks.
     *  0..n
     *  Consignment
     *  Summary
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\SummaryDescription $summaryDescription
     */
    public function addToSummaryDescription(\NOKA\PHPUBL\UBL\Common\BasicComponents\SummaryDescription $summaryDescription)
    {
        $this->summaryDescription[] = $summaryDescription;
        return $this;
    }

    /**
     * isset summaryDescription
     *
     * BBIE
     *  Consignment. Summary_ Description. Text
     *  General descriptive text that is not part of any remarks.
     *  0..n
     *  Consignment
     *  Summary
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSummaryDescription($index)
    {
        return isset($this->summaryDescription[$index]);
    }

    /**
     * unset summaryDescription
     *
     * BBIE
     *  Consignment. Summary_ Description. Text
     *  General descriptive text that is not part of any remarks.
     *  0..n
     *  Consignment
     *  Summary
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSummaryDescription($index)
    {
        unset($this->summaryDescription[$index]);
    }

    /**
     * Gets as summaryDescription
     *
     * BBIE
     *  Consignment. Summary_ Description. Text
     *  General descriptive text that is not part of any remarks.
     *  0..n
     *  Consignment
     *  Summary
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\SummaryDescription[]
     */
    public function getSummaryDescription()
    {
        return $this->summaryDescription;
    }

    /**
     * Sets a new summaryDescription
     *
     * BBIE
     *  Consignment. Summary_ Description. Text
     *  General descriptive text that is not part of any remarks.
     *  0..n
     *  Consignment
     *  Summary
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\SummaryDescription[] $summaryDescription
     * @return self
     */
    public function setSummaryDescription(array $summaryDescription)
    {
        $this->summaryDescription = $summaryDescription;
        return $this;
    }

    /**
     * Gets as totalInvoiceAmount
     *
     * BBIE
     *  Consignment. Total_ Invoice Amount. Amount
     *  Total of all invoice amounts declared in a single consignment.
     *  0..1
     *  Consignment
     *  Total
     *  Invoice Amount
     *  Amount
     *  Amount. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TotalInvoiceAmount
     */
    public function getTotalInvoiceAmount()
    {
        return $this->totalInvoiceAmount;
    }

    /**
     * Sets a new totalInvoiceAmount
     *
     * BBIE
     *  Consignment. Total_ Invoice Amount. Amount
     *  Total of all invoice amounts declared in a single consignment.
     *  0..1
     *  Consignment
     *  Total
     *  Invoice Amount
     *  Amount
     *  Amount. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TotalInvoiceAmount $totalInvoiceAmount
     * @return self
     */
    public function setTotalInvoiceAmount(\NOKA\PHPUBL\UBL\Common\BasicComponents\TotalInvoiceAmount $totalInvoiceAmount)
    {
        $this->totalInvoiceAmount = $totalInvoiceAmount;
        return $this;
    }

    /**
     * Gets as declaredCustomsValueAmount
     *
     * BBIE
     *  Consignment. Declared Customs_ Value. Amount
     *  Amount declared for customs purposes of those goods in a consignment, whether or not they are subject to the same customs procedure, tariff/statistical heading, country information, and duty regime.
     *  0..1
     *  Consignment
     *  Declared Customs
     *  Value
     *  Amount
     *  Amount. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\DeclaredCustomsValueAmount
     */
    public function getDeclaredCustomsValueAmount()
    {
        return $this->declaredCustomsValueAmount;
    }

    /**
     * Sets a new declaredCustomsValueAmount
     *
     * BBIE
     *  Consignment. Declared Customs_ Value. Amount
     *  Amount declared for customs purposes of those goods in a consignment, whether or not they are subject to the same customs procedure, tariff/statistical heading, country information, and duty regime.
     *  0..1
     *  Consignment
     *  Declared Customs
     *  Value
     *  Amount
     *  Amount. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\DeclaredCustomsValueAmount $declaredCustomsValueAmount
     * @return self
     */
    public function setDeclaredCustomsValueAmount(\NOKA\PHPUBL\UBL\Common\BasicComponents\DeclaredCustomsValueAmount $declaredCustomsValueAmount)
    {
        $this->declaredCustomsValueAmount = $declaredCustomsValueAmount;
        return $this;
    }

    /**
     * Adds as tariffDescription
     *
     * BBIE
     *  Consignment. Tariff Description. Text
     *  A description of the tariff applied to a consignment.
     *  0..n
     *  Consignment
     *  Tariff Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TariffDescription $tariffDescription
     */
    public function addToTariffDescription(\NOKA\PHPUBL\UBL\Common\BasicComponents\TariffDescription $tariffDescription)
    {
        $this->tariffDescription[] = $tariffDescription;
        return $this;
    }

    /**
     * isset tariffDescription
     *
     * BBIE
     *  Consignment. Tariff Description. Text
     *  A description of the tariff applied to a consignment.
     *  0..n
     *  Consignment
     *  Tariff Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTariffDescription($index)
    {
        return isset($this->tariffDescription[$index]);
    }

    /**
     * unset tariffDescription
     *
     * BBIE
     *  Consignment. Tariff Description. Text
     *  A description of the tariff applied to a consignment.
     *  0..n
     *  Consignment
     *  Tariff Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTariffDescription($index)
    {
        unset($this->tariffDescription[$index]);
    }

    /**
     * Gets as tariffDescription
     *
     * BBIE
     *  Consignment. Tariff Description. Text
     *  A description of the tariff applied to a consignment.
     *  0..n
     *  Consignment
     *  Tariff Description
     *  Text
     *  Text. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TariffDescription[]
     */
    public function getTariffDescription()
    {
        return $this->tariffDescription;
    }

    /**
     * Sets a new tariffDescription
     *
     * BBIE
     *  Consignment. Tariff Description. Text
     *  A description of the tariff applied to a consignment.
     *  0..n
     *  Consignment
     *  Tariff Description
     *  Text
     *  Text. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TariffDescription[] $tariffDescription
     * @return self
     */
    public function setTariffDescription(array $tariffDescription)
    {
        $this->tariffDescription = $tariffDescription;
        return $this;
    }

    /**
     * Gets as tariffCode
     *
     * BBIE
     *  Consignment. Tariff Code. Code
     *  Code specifying a tariff applied to a consignment.
     *  0..1
     *  Consignment
     *  Tariff Code
     *  Code
     *  Code. Type
     *  Tariff code number (WCO ID 145)
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TariffCode
     */
    public function getTariffCode()
    {
        return $this->tariffCode;
    }

    /**
     * Sets a new tariffCode
     *
     * BBIE
     *  Consignment. Tariff Code. Code
     *  Code specifying a tariff applied to a consignment.
     *  0..1
     *  Consignment
     *  Tariff Code
     *  Code
     *  Code. Type
     *  Tariff code number (WCO ID 145)
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TariffCode $tariffCode
     * @return self
     */
    public function setTariffCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\TariffCode $tariffCode)
    {
        $this->tariffCode = $tariffCode;
        return $this;
    }

    /**
     * Gets as insurancePremiumAmount
     *
     * BBIE
     *  Consignment. Insurance Premium Amount. Amount
     *  Amount of premium payable to the insurance company for insuring the goods.
     *  0..1
     *  Consignment
     *  Insurance Premium Amount
     *  Amount
     *  Amount. Type
     *  Insurance Cost
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\InsurancePremiumAmount
     */
    public function getInsurancePremiumAmount()
    {
        return $this->insurancePremiumAmount;
    }

    /**
     * Sets a new insurancePremiumAmount
     *
     * BBIE
     *  Consignment. Insurance Premium Amount. Amount
     *  Amount of premium payable to the insurance company for insuring the goods.
     *  0..1
     *  Consignment
     *  Insurance Premium Amount
     *  Amount
     *  Amount. Type
     *  Insurance Cost
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\InsurancePremiumAmount $insurancePremiumAmount
     * @return self
     */
    public function setInsurancePremiumAmount(\NOKA\PHPUBL\UBL\Common\BasicComponents\InsurancePremiumAmount $insurancePremiumAmount)
    {
        $this->insurancePremiumAmount = $insurancePremiumAmount;
        return $this;
    }

    /**
     * Gets as grossWeightMeasure
     *
     * BBIE
     *  Consignment. Gross_ Weight. Measure
     *  Total weight (mass) of goods for a declaration, including packaging but excluding the carrier's equipment.
     *  0..1
     *  Consignment
     *  Gross
     *  Weight
     *  Measure
     *  Measure. Type
     *  Total gross weight (WCO ID 131)
     *  Total cube of all goods items referred to as one consignment.
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\GrossWeightMeasure
     */
    public function getGrossWeightMeasure()
    {
        return $this->grossWeightMeasure;
    }

    /**
     * Sets a new grossWeightMeasure
     *
     * BBIE
     *  Consignment. Gross_ Weight. Measure
     *  Total weight (mass) of goods for a declaration, including packaging but excluding the carrier's equipment.
     *  0..1
     *  Consignment
     *  Gross
     *  Weight
     *  Measure
     *  Measure. Type
     *  Total gross weight (WCO ID 131)
     *  Total cube of all goods items referred to as one consignment.
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\GrossWeightMeasure $grossWeightMeasure
     * @return self
     */
    public function setGrossWeightMeasure(\NOKA\PHPUBL\UBL\Common\BasicComponents\GrossWeightMeasure $grossWeightMeasure)
    {
        $this->grossWeightMeasure = $grossWeightMeasure;
        return $this;
    }

    /**
     * Gets as netWeightMeasure
     *
     * BBIE
     *  Consignment. Net_ Weight. Measure
     *  Total net weight (mass) of all the goods items referred to as one consignment.
     *  0..1
     *  Consignment
     *  Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\NetWeightMeasure
     */
    public function getNetWeightMeasure()
    {
        return $this->netWeightMeasure;
    }

    /**
     * Sets a new netWeightMeasure
     *
     * BBIE
     *  Consignment. Net_ Weight. Measure
     *  Total net weight (mass) of all the goods items referred to as one consignment.
     *  0..1
     *  Consignment
     *  Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\NetWeightMeasure $netWeightMeasure
     * @return self
     */
    public function setNetWeightMeasure(\NOKA\PHPUBL\UBL\Common\BasicComponents\NetWeightMeasure $netWeightMeasure)
    {
        $this->netWeightMeasure = $netWeightMeasure;
        return $this;
    }

    /**
     * Gets as netNetWeightMeasure
     *
     * BBIE
     *  Consignment. Net Net_ Weight. Measure
     *  Weight (mass) of the goods themselves without any packing.
     *  0..1
     *  Consignment
     *  Net Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\NetNetWeightMeasure
     */
    public function getNetNetWeightMeasure()
    {
        return $this->netNetWeightMeasure;
    }

    /**
     * Sets a new netNetWeightMeasure
     *
     * BBIE
     *  Consignment. Net Net_ Weight. Measure
     *  Weight (mass) of the goods themselves without any packing.
     *  0..1
     *  Consignment
     *  Net Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\NetNetWeightMeasure $netNetWeightMeasure
     * @return self
     */
    public function setNetNetWeightMeasure(\NOKA\PHPUBL\UBL\Common\BasicComponents\NetNetWeightMeasure $netNetWeightMeasure)
    {
        $this->netNetWeightMeasure = $netNetWeightMeasure;
        return $this;
    }

    /**
     * Gets as chargeableWeightMeasure
     *
     * BBIE
     *  Consignment. Chargeable_ Weight. Measure
     *  Gross weight (mass) on which a charge is to be based.
     *  0..1
     *  Consignment
     *  Chargeable
     *  Weight
     *  Measure
     *  Measure. Type
     *  Chargeable Weight. Basis.Measure
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ChargeableWeightMeasure
     */
    public function getChargeableWeightMeasure()
    {
        return $this->chargeableWeightMeasure;
    }

    /**
     * Sets a new chargeableWeightMeasure
     *
     * BBIE
     *  Consignment. Chargeable_ Weight. Measure
     *  Gross weight (mass) on which a charge is to be based.
     *  0..1
     *  Consignment
     *  Chargeable
     *  Weight
     *  Measure
     *  Measure. Type
     *  Chargeable Weight. Basis.Measure
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ChargeableWeightMeasure $chargeableWeightMeasure
     * @return self
     */
    public function setChargeableWeightMeasure(\NOKA\PHPUBL\UBL\Common\BasicComponents\ChargeableWeightMeasure $chargeableWeightMeasure)
    {
        $this->chargeableWeightMeasure = $chargeableWeightMeasure;
        return $this;
    }

    /**
     * Gets as grossVolumeMeasure
     *
     * BBIE
     *  Consignment. Gross_ Volume. Measure
     *  Total volume of all goods items referred to as one consignment.
     *  0..1
     *  Consignment
     *  Gross
     *  Volume
     *  Measure
     *  Measure. Type
     *  Cube
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\GrossVolumeMeasure
     */
    public function getGrossVolumeMeasure()
    {
        return $this->grossVolumeMeasure;
    }

    /**
     * Sets a new grossVolumeMeasure
     *
     * BBIE
     *  Consignment. Gross_ Volume. Measure
     *  Total volume of all goods items referred to as one consignment.
     *  0..1
     *  Consignment
     *  Gross
     *  Volume
     *  Measure
     *  Measure. Type
     *  Cube
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\GrossVolumeMeasure $grossVolumeMeasure
     * @return self
     */
    public function setGrossVolumeMeasure(\NOKA\PHPUBL\UBL\Common\BasicComponents\GrossVolumeMeasure $grossVolumeMeasure)
    {
        $this->grossVolumeMeasure = $grossVolumeMeasure;
        return $this;
    }

    /**
     * Gets as netVolumeMeasure
     *
     * BBIE
     *  Consignment. Net_ Volume. Measure
     *  Net volume of all goods items referred to as one consignment.
     *  0..1
     *  Consignment
     *  Net
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\NetVolumeMeasure
     */
    public function getNetVolumeMeasure()
    {
        return $this->netVolumeMeasure;
    }

    /**
     * Sets a new netVolumeMeasure
     *
     * BBIE
     *  Consignment. Net_ Volume. Measure
     *  Net volume of all goods items referred to as one consignment.
     *  0..1
     *  Consignment
     *  Net
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\NetVolumeMeasure $netVolumeMeasure
     * @return self
     */
    public function setNetVolumeMeasure(\NOKA\PHPUBL\UBL\Common\BasicComponents\NetVolumeMeasure $netVolumeMeasure)
    {
        $this->netVolumeMeasure = $netVolumeMeasure;
        return $this;
    }

    /**
     * Gets as loadingLengthMeasure
     *
     * BBIE
     *  Consignment. Loading_ Length. Measure
     *  Total length in a means of transport or a piece of transport equipment whereby the complete width and height over that length is needed for loading all the consignments referred to as one consolidation.
     *  0..1
     *  Consignment
     *  Loading
     *  Length
     *  Measure
     *  Measure. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\LoadingLengthMeasure
     */
    public function getLoadingLengthMeasure()
    {
        return $this->loadingLengthMeasure;
    }

    /**
     * Sets a new loadingLengthMeasure
     *
     * BBIE
     *  Consignment. Loading_ Length. Measure
     *  Total length in a means of transport or a piece of transport equipment whereby the complete width and height over that length is needed for loading all the consignments referred to as one consolidation.
     *  0..1
     *  Consignment
     *  Loading
     *  Length
     *  Measure
     *  Measure. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\LoadingLengthMeasure $loadingLengthMeasure
     * @return self
     */
    public function setLoadingLengthMeasure(\NOKA\PHPUBL\UBL\Common\BasicComponents\LoadingLengthMeasure $loadingLengthMeasure)
    {
        $this->loadingLengthMeasure = $loadingLengthMeasure;
        return $this;
    }

    /**
     * Adds as remarks
     *
     * BBIE
     *  Consignment. Remarks. Text
     *  Remarks concerning the complete consignment to be printed on the transport document.
     *  0..n
     *  Consignment
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
     *  Consignment. Remarks. Text
     *  Remarks concerning the complete consignment to be printed on the transport document.
     *  0..n
     *  Consignment
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
     *  Consignment. Remarks. Text
     *  Remarks concerning the complete consignment to be printed on the transport document.
     *  0..n
     *  Consignment
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
     *  Consignment. Remarks. Text
     *  Remarks concerning the complete consignment to be printed on the transport document.
     *  0..n
     *  Consignment
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
     *  Consignment. Remarks. Text
     *  Remarks concerning the complete consignment to be printed on the transport document.
     *  0..n
     *  Consignment
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
     * Gets as hazardousRiskIndicator
     *
     * BBIE
     *  Consignment. Hazardous Risk_ Indicator. Indicator
     *  Indication that the transport is or is not subject to an international regulation concerning the carriage of dangerous goods.
     *  0..1
     *  Consignment
     *  Hazardous Risk
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Dangerous Goods RID Indicator
     *  default is negative
     *
     * @return bool
     */
    public function getHazardousRiskIndicator()
    {
        return $this->hazardousRiskIndicator;
    }

    /**
     * Sets a new hazardousRiskIndicator
     *
     * BBIE
     *  Consignment. Hazardous Risk_ Indicator. Indicator
     *  Indication that the transport is or is not subject to an international regulation concerning the carriage of dangerous goods.
     *  0..1
     *  Consignment
     *  Hazardous Risk
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Dangerous Goods RID Indicator
     *  default is negative
     *
     * @param bool $hazardousRiskIndicator
     * @return self
     */
    public function setHazardousRiskIndicator($hazardousRiskIndicator)
    {
        $this->hazardousRiskIndicator = $hazardousRiskIndicator;
        return $this;
    }

    /**
     * Gets as consigneeParty
     *
     * ASBIE
     *  Consignment. Consignee_ Party. Party
     *  Party to which goods are consigned.
     *  0..1
     *  Consignment
     *  Consignee
     *  Party
     *  Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ConsigneeParty
     */
    public function getConsigneeParty()
    {
        return $this->consigneeParty;
    }

    /**
     * Sets a new consigneeParty
     *
     * ASBIE
     *  Consignment. Consignee_ Party. Party
     *  Party to which goods are consigned.
     *  0..1
     *  Consignment
     *  Consignee
     *  Party
     *  Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ConsigneeParty $consigneeParty
     * @return self
     */
    public function setConsigneeParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ConsigneeParty $consigneeParty)
    {
        $this->consigneeParty = $consigneeParty;
        return $this;
    }

    /**
     * Gets as exporterParty
     *
     * ASBIE
     *  Consignment. Exporter_ Party. Party
     *  The party who makes the export declaration, or on whose behalf the export declaration is made, and who is the owner of the goods or has similar right of disposal over them at the time when the declaration is accepted.
     *  0..1
     *  Consignment
     *  Exporter
     *  Party
     *  Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ExporterParty
     */
    public function getExporterParty()
    {
        return $this->exporterParty;
    }

    /**
     * Sets a new exporterParty
     *
     * ASBIE
     *  Consignment. Exporter_ Party. Party
     *  The party who makes the export declaration, or on whose behalf the export declaration is made, and who is the owner of the goods or has similar right of disposal over them at the time when the declaration is accepted.
     *  0..1
     *  Consignment
     *  Exporter
     *  Party
     *  Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ExporterParty $exporterParty
     * @return self
     */
    public function setExporterParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ExporterParty $exporterParty)
    {
        $this->exporterParty = $exporterParty;
        return $this;
    }

    /**
     * Gets as consignorParty
     *
     * ASBIE
     *  Consignment. Consignor_ Party. Party
     *  The party consigning goods, as stipulated in the transport contract by the party ordering transport.
     *  0..1
     *  Consignment
     *  Consignor
     *  Party
     *  Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ConsignorParty
     */
    public function getConsignorParty()
    {
        return $this->consignorParty;
    }

    /**
     * Sets a new consignorParty
     *
     * ASBIE
     *  Consignment. Consignor_ Party. Party
     *  The party consigning goods, as stipulated in the transport contract by the party ordering transport.
     *  0..1
     *  Consignment
     *  Consignor
     *  Party
     *  Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ConsignorParty $consignorParty
     * @return self
     */
    public function setConsignorParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ConsignorParty $consignorParty)
    {
        $this->consignorParty = $consignorParty;
        return $this;
    }

    /**
     * Gets as importerParty
     *
     * ASBIE
     *  Consignment. Importer_ Party. Party
     *  The party who makes an import declaration, or on whose behalf a Customs clearing agent or other authorized person makes an import declaration. This may include a person who has possession of the goods or to whom the goods are consigned.
     *  0..1
     *  Consignment
     *  Importer
     *  Party
     *  Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\ImporterParty
     */
    public function getImporterParty()
    {
        return $this->importerParty;
    }

    /**
     * Sets a new importerParty
     *
     * ASBIE
     *  Consignment. Importer_ Party. Party
     *  The party who makes an import declaration, or on whose behalf a Customs clearing agent or other authorized person makes an import declaration. This may include a person who has possession of the goods or to whom the goods are consigned.
     *  0..1
     *  Consignment
     *  Importer
     *  Party
     *  Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\ImporterParty $importerParty
     * @return self
     */
    public function setImporterParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\ImporterParty $importerParty)
    {
        $this->importerParty = $importerParty;
        return $this;
    }

    /**
     * Gets as carrierParty
     *
     * ASBIE
     *  Consignment. Carrier_ Party. Party
     *  The party providing the transport of goods between named points.
     *  0..1
     *  Consignment
     *  Carrier
     *  Party
     *  Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\CarrierParty
     */
    public function getCarrierParty()
    {
        return $this->carrierParty;
    }

    /**
     * Sets a new carrierParty
     *
     * ASBIE
     *  Consignment. Carrier_ Party. Party
     *  The party providing the transport of goods between named points.
     *  0..1
     *  Consignment
     *  Carrier
     *  Party
     *  Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\CarrierParty $carrierParty
     * @return self
     */
    public function setCarrierParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\CarrierParty $carrierParty)
    {
        $this->carrierParty = $carrierParty;
        return $this;
    }

    /**
     * Gets as freightForwarderParty
     *
     * ASBIE
     *  Consignment. Freight Forwarder_ Party. Party
     *  The party combining individual smaller consignments into a single larger shipment (so called consolidated shipment) that is sent to a counterpart who mirrors the consolidator's activity by dividing the consolidated consignment into its original components.
     *  0..1
     *  Consignment
     *  Freight Forwarder
     *  Party
     *  Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\FreightForwarderParty
     */
    public function getFreightForwarderParty()
    {
        return $this->freightForwarderParty;
    }

    /**
     * Sets a new freightForwarderParty
     *
     * ASBIE
     *  Consignment. Freight Forwarder_ Party. Party
     *  The party combining individual smaller consignments into a single larger shipment (so called consolidated shipment) that is sent to a counterpart who mirrors the consolidator's activity by dividing the consolidated consignment into its original components.
     *  0..1
     *  Consignment
     *  Freight Forwarder
     *  Party
     *  Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\FreightForwarderParty $freightForwarderParty
     * @return self
     */
    public function setFreightForwarderParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\FreightForwarderParty $freightForwarderParty)
    {
        $this->freightForwarderParty = $freightForwarderParty;
        return $this;
    }

    /**
     * Gets as notifyParty
     *
     * ASBIE
     *  Consignment. Notify_ Party. Party
     *  The party to be notified.
     *  0..1
     *  Consignment
     *  Notify
     *  Party
     *  Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\NotifyParty
     */
    public function getNotifyParty()
    {
        return $this->notifyParty;
    }

    /**
     * Sets a new notifyParty
     *
     * ASBIE
     *  Consignment. Notify_ Party. Party
     *  The party to be notified.
     *  0..1
     *  Consignment
     *  Notify
     *  Party
     *  Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\NotifyParty $notifyParty
     * @return self
     */
    public function setNotifyParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\NotifyParty $notifyParty)
    {
        $this->notifyParty = $notifyParty;
        return $this;
    }

    /**
     * Gets as originalDespatchParty
     *
     * ASBIE
     *  Consignment. Original Despatch_ Party. Party
     *  The original despatch party.
     *  0..1
     *  Consignment
     *  Original Despatch
     *  Party
     *  Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginalDespatchParty
     */
    public function getOriginalDespatchParty()
    {
        return $this->originalDespatchParty;
    }

    /**
     * Sets a new originalDespatchParty
     *
     * ASBIE
     *  Consignment. Original Despatch_ Party. Party
     *  The original despatch party.
     *  0..1
     *  Consignment
     *  Original Despatch
     *  Party
     *  Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginalDespatchParty $originalDespatchParty
     * @return self
     */
    public function setOriginalDespatchParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginalDespatchParty $originalDespatchParty)
    {
        $this->originalDespatchParty = $originalDespatchParty;
        return $this;
    }

    /**
     * Gets as finalDeliveryParty
     *
     * ASBIE
     *  Consignment. Final Delivery_ Party. Party
     *  The final delivery party.
     *  0..1
     *  Consignment
     *  Final Delivery
     *  Party
     *  Party
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\FinalDeliveryParty
     */
    public function getFinalDeliveryParty()
    {
        return $this->finalDeliveryParty;
    }

    /**
     * Sets a new finalDeliveryParty
     *
     * ASBIE
     *  Consignment. Final Delivery_ Party. Party
     *  The final delivery party.
     *  0..1
     *  Consignment
     *  Final Delivery
     *  Party
     *  Party
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\FinalDeliveryParty $finalDeliveryParty
     * @return self
     */
    public function setFinalDeliveryParty(\NOKA\PHPUBL\UBL\Common\AggregateComponents\FinalDeliveryParty $finalDeliveryParty)
    {
        $this->finalDeliveryParty = $finalDeliveryParty;
        return $this;
    }

    /**
     * Gets as originalDepartureCountry
     *
     * ASBIE
     *  Consignment. Original Departure_ Country. Country
     *  The country from which the goods are originally exported, without any commercial transaction taking place in intermediate countries.
     *  0..1
     *  Consignment
     *  Original Departure
     *  Country
     *  Country
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginalDepartureCountry
     */
    public function getOriginalDepartureCountry()
    {
        return $this->originalDepartureCountry;
    }

    /**
     * Sets a new originalDepartureCountry
     *
     * ASBIE
     *  Consignment. Original Departure_ Country. Country
     *  The country from which the goods are originally exported, without any commercial transaction taking place in intermediate countries.
     *  0..1
     *  Consignment
     *  Original Departure
     *  Country
     *  Country
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginalDepartureCountry $originalDepartureCountry
     * @return self
     */
    public function setOriginalDepartureCountry(\NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginalDepartureCountry $originalDepartureCountry)
    {
        $this->originalDepartureCountry = $originalDepartureCountry;
        return $this;
    }

    /**
     * Gets as finalDestinationCountry
     *
     * ASBIE
     *  Consignment. Final Destination_ Country. Country
     *  Name of the country to which the goods are to be delivered to the final consignee or buyer.
     *  0..1
     *  Consignment
     *  Final Destination
     *  Country
     *  Country
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\FinalDestinationCountry
     */
    public function getFinalDestinationCountry()
    {
        return $this->finalDestinationCountry;
    }

    /**
     * Sets a new finalDestinationCountry
     *
     * ASBIE
     *  Consignment. Final Destination_ Country. Country
     *  Name of the country to which the goods are to be delivered to the final consignee or buyer.
     *  0..1
     *  Consignment
     *  Final Destination
     *  Country
     *  Country
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\FinalDestinationCountry $finalDestinationCountry
     * @return self
     */
    public function setFinalDestinationCountry(\NOKA\PHPUBL\UBL\Common\AggregateComponents\FinalDestinationCountry $finalDestinationCountry)
    {
        $this->finalDestinationCountry = $finalDestinationCountry;
        return $this;
    }

    /**
     * Adds as transitCountry
     *
     * ASBIE
     *  Consignment. Transit_ Country. Country
     *  The countries through which goods or passengers are routed between the country of original departure and the country of final destination.
     *  0..n
     *  Consignment
     *  Transit
     *  Country
     *  Country
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransitCountry $transitCountry
     */
    public function addToTransitCountry(\NOKA\PHPUBL\UBL\Common\AggregateComponents\TransitCountry $transitCountry)
    {
        $this->transitCountry[] = $transitCountry;
        return $this;
    }

    /**
     * isset transitCountry
     *
     * ASBIE
     *  Consignment. Transit_ Country. Country
     *  The countries through which goods or passengers are routed between the country of original departure and the country of final destination.
     *  0..n
     *  Consignment
     *  Transit
     *  Country
     *  Country
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransitCountry($index)
    {
        return isset($this->transitCountry[$index]);
    }

    /**
     * unset transitCountry
     *
     * ASBIE
     *  Consignment. Transit_ Country. Country
     *  The countries through which goods or passengers are routed between the country of original departure and the country of final destination.
     *  0..n
     *  Consignment
     *  Transit
     *  Country
     *  Country
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransitCountry($index)
    {
        unset($this->transitCountry[$index]);
    }

    /**
     * Gets as transitCountry
     *
     * ASBIE
     *  Consignment. Transit_ Country. Country
     *  The countries through which goods or passengers are routed between the country of original departure and the country of final destination.
     *  0..n
     *  Consignment
     *  Transit
     *  Country
     *  Country
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransitCountry[]
     */
    public function getTransitCountry()
    {
        return $this->transitCountry;
    }

    /**
     * Sets a new transitCountry
     *
     * ASBIE
     *  Consignment. Transit_ Country. Country
     *  The countries through which goods or passengers are routed between the country of original departure and the country of final destination.
     *  0..n
     *  Consignment
     *  Transit
     *  Country
     *  Country
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransitCountry[] $transitCountry
     * @return self
     */
    public function setTransitCountry(array $transitCountry)
    {
        $this->transitCountry = $transitCountry;
        return $this;
    }

    /**
     * Gets as transportContract
     *
     * ASBIE
     *  Consignment. Transport_ Contract. Contract
     *  An association to Transport Contact.
     *  0..1
     *  Consignment
     *  Transport
     *  Contract
     *  Contract
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransportContract
     */
    public function getTransportContract()
    {
        return $this->transportContract;
    }

    /**
     * Sets a new transportContract
     *
     * ASBIE
     *  Consignment. Transport_ Contract. Contract
     *  An association to Transport Contact.
     *  0..1
     *  Consignment
     *  Transport
     *  Contract
     *  Contract
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\TransportContract $transportContract
     * @return self
     */
    public function setTransportContract(\NOKA\PHPUBL\UBL\Common\AggregateComponents\TransportContract $transportContract)
    {
        $this->transportContract = $transportContract;
        return $this;
    }

    /**
     * Gets as originalDespatchTransportationService
     *
     * ASBIE
     *  Consignment. Original Despatch_ Transportation Service. Transportation Service
     *  The service for pick-up from the consignor under the transport contract.
     *  0..1
     *  Consignment
     *  Original Despatch
     *  Transportation Service
     *  Transportation Service
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginalDespatchTransportationService
     */
    public function getOriginalDespatchTransportationService()
    {
        return $this->originalDespatchTransportationService;
    }

    /**
     * Sets a new originalDespatchTransportationService
     *
     * ASBIE
     *  Consignment. Original Despatch_ Transportation Service. Transportation Service
     *  The service for pick-up from the consignor under the transport contract.
     *  0..1
     *  Consignment
     *  Original Despatch
     *  Transportation Service
     *  Transportation Service
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginalDespatchTransportationService $originalDespatchTransportationService
     * @return self
     */
    public function setOriginalDespatchTransportationService(\NOKA\PHPUBL\UBL\Common\AggregateComponents\OriginalDespatchTransportationService $originalDespatchTransportationService)
    {
        $this->originalDespatchTransportationService = $originalDespatchTransportationService;
        return $this;
    }

    /**
     * Gets as finalDeliveryTransportationService
     *
     * ASBIE
     *  Consignment. Final Delivery_ Transportation Service. Transportation Service
     *  The service for delivery to the consignee under the transport contract.
     *  0..1
     *  Consignment
     *  Final Delivery
     *  Transportation Service
     *  Transportation Service
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\FinalDeliveryTransportationService
     */
    public function getFinalDeliveryTransportationService()
    {
        return $this->finalDeliveryTransportationService;
    }

    /**
     * Sets a new finalDeliveryTransportationService
     *
     * ASBIE
     *  Consignment. Final Delivery_ Transportation Service. Transportation Service
     *  The service for delivery to the consignee under the transport contract.
     *  0..1
     *  Consignment
     *  Final Delivery
     *  Transportation Service
     *  Transportation Service
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\FinalDeliveryTransportationService $finalDeliveryTransportationService
     * @return self
     */
    public function setFinalDeliveryTransportationService(\NOKA\PHPUBL\UBL\Common\AggregateComponents\FinalDeliveryTransportationService $finalDeliveryTransportationService)
    {
        $this->finalDeliveryTransportationService = $finalDeliveryTransportationService;
        return $this;
    }

    /**
     * Gets as deliveryTerms
     *
     * ASBIE
     *  Consignment. Delivery Terms
     *  All the conditions agreed upon between a seller and a buyer with regard to the delivery of goods and/or services, e.g., CIF, FOB, or EXW from the INCOTERMS Terms of Delivery.
     *  0..1
     *  Consignment
     *  Delivery Terms
     *  Delivery Terms
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryTerms
     */
    public function getDeliveryTerms()
    {
        return $this->deliveryTerms;
    }

    /**
     * Sets a new deliveryTerms
     *
     * ASBIE
     *  Consignment. Delivery Terms
     *  All the conditions agreed upon between a seller and a buyer with regard to the delivery of goods and/or services, e.g., CIF, FOB, or EXW from the INCOTERMS Terms of Delivery.
     *  0..1
     *  Consignment
     *  Delivery Terms
     *  Delivery Terms
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryTerms $deliveryTerms
     * @return self
     */
    public function setDeliveryTerms(\NOKA\PHPUBL\UBL\Common\AggregateComponents\DeliveryTerms $deliveryTerms)
    {
        $this->deliveryTerms = $deliveryTerms;
        return $this;
    }

    /**
     * Gets as paymentTerms
     *
     * ASBIE
     *  Consignment. Payment Terms
     *  The conditions of payment between the parties in a transaction.
     *  0..1
     *  Consignment
     *  Payment Terms
     *  Payment Terms
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentTerms
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    /**
     * Sets a new paymentTerms
     *
     * ASBIE
     *  Consignment. Payment Terms
     *  The conditions of payment between the parties in a transaction.
     *  0..1
     *  Consignment
     *  Payment Terms
     *  Payment Terms
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentTerms $paymentTerms
     * @return self
     */
    public function setPaymentTerms(\NOKA\PHPUBL\UBL\Common\AggregateComponents\PaymentTerms $paymentTerms)
    {
        $this->paymentTerms = $paymentTerms;
        return $this;
    }

    /**
     * Adds as freightAllowanceCharge
     *
     * ASBIE
     *  Consignment. Freight_ Allowance Charge. Allowance Charge
     *  Costs incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance (to the extent that they relate to the freight costs).
     *  0..n
     *  Consignment
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\FreightAllowanceCharge $freightAllowanceCharge
     */
    public function addToFreightAllowanceCharge(\NOKA\PHPUBL\UBL\Common\AggregateComponents\FreightAllowanceCharge $freightAllowanceCharge)
    {
        $this->freightAllowanceCharge[] = $freightAllowanceCharge;
        return $this;
    }

    /**
     * isset freightAllowanceCharge
     *
     * ASBIE
     *  Consignment. Freight_ Allowance Charge. Allowance Charge
     *  Costs incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance (to the extent that they relate to the freight costs).
     *  0..n
     *  Consignment
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFreightAllowanceCharge($index)
    {
        return isset($this->freightAllowanceCharge[$index]);
    }

    /**
     * unset freightAllowanceCharge
     *
     * ASBIE
     *  Consignment. Freight_ Allowance Charge. Allowance Charge
     *  Costs incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance (to the extent that they relate to the freight costs).
     *  0..n
     *  Consignment
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFreightAllowanceCharge($index)
    {
        unset($this->freightAllowanceCharge[$index]);
    }

    /**
     * Gets as freightAllowanceCharge
     *
     * ASBIE
     *  Consignment. Freight_ Allowance Charge. Allowance Charge
     *  Costs incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance (to the extent that they relate to the freight costs).
     *  0..n
     *  Consignment
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return \NOKA\PHPUBL\UBL\Common\AggregateComponents\FreightAllowanceCharge[]
     */
    public function getFreightAllowanceCharge()
    {
        return $this->freightAllowanceCharge;
    }

    /**
     * Sets a new freightAllowanceCharge
     *
     * ASBIE
     *  Consignment. Freight_ Allowance Charge. Allowance Charge
     *  Costs incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance (to the extent that they relate to the freight costs).
     *  0..n
     *  Consignment
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param \NOKA\PHPUBL\UBL\Common\AggregateComponents\FreightAllowanceCharge[] $freightAllowanceCharge
     * @return self
     */
    public function setFreightAllowanceCharge(array $freightAllowanceCharge)
    {
        $this->freightAllowanceCharge = $freightAllowanceCharge;
        return $this;
    }


}

