<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing RailTransportType
 *
 * ABIE
 *  Rail Transport. Details
 *  Describes a train.
 *  Rail Transport
 * XSD Type: RailTransportType
 */
class RailTransportType
{

    /**
     * BBIE
     *  Rail Transport. Train Identifier. Identifier
     *  Identifies a train.
     *  1
     *  Rail Transport
     *  Train Identifier
     *  Identifier
     *  Identifier. Type
     *  Train Number (WCO ID 167)
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\TrainID $trainID
     */
    private $trainID = null;

    /**
     * BBIE
     *  Rail Transport. Rail Car Identifier. Identifier
     *  Identifies the rail car on the train used for the means of transport.
     *  0..1
     *  Rail Transport
     *  Rail Car Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\RailCarID $railCarID
     */
    private $railCarID = null;

    /**
     * Gets as trainID
     *
     * BBIE
     *  Rail Transport. Train Identifier. Identifier
     *  Identifies a train.
     *  1
     *  Rail Transport
     *  Train Identifier
     *  Identifier
     *  Identifier. Type
     *  Train Number (WCO ID 167)
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\TrainID
     */
    public function getTrainID()
    {
        return $this->trainID;
    }

    /**
     * Sets a new trainID
     *
     * BBIE
     *  Rail Transport. Train Identifier. Identifier
     *  Identifies a train.
     *  1
     *  Rail Transport
     *  Train Identifier
     *  Identifier
     *  Identifier. Type
     *  Train Number (WCO ID 167)
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\TrainID $trainID
     * @return self
     */
    public function setTrainID(\NOKA\PHPUBL\UBL\Common\BasicComponents\TrainID $trainID)
    {
        $this->trainID = $trainID;
        return $this;
    }

    /**
     * Gets as railCarID
     *
     * BBIE
     *  Rail Transport. Rail Car Identifier. Identifier
     *  Identifies the rail car on the train used for the means of transport.
     *  0..1
     *  Rail Transport
     *  Rail Car Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\RailCarID
     */
    public function getRailCarID()
    {
        return $this->railCarID;
    }

    /**
     * Sets a new railCarID
     *
     * BBIE
     *  Rail Transport. Rail Car Identifier. Identifier
     *  Identifies the rail car on the train used for the means of transport.
     *  0..1
     *  Rail Transport
     *  Rail Car Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\RailCarID $railCarID
     * @return self
     */
    public function setRailCarID(\NOKA\PHPUBL\UBL\Common\BasicComponents\RailCarID $railCarID)
    {
        $this->railCarID = $railCarID;
        return $this;
    }


}

