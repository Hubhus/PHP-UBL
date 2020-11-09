<?php

namespace NOKA\PHPUBL\UBL\Common\AggregateComponents;

/**
 * Class representing CommunicationType
 *
 * ABIE
 *  Communication. Details
 *  Information about a means of communication.
 *  Communication
 * XSD Type: CommunicationType
 */
class CommunicationType
{

    /**
     * BBIE
     *  Communication. Channel Code. Code
     *  The method of communication, expressed as a code.
     *  0..1
     *  Communication
     *  Channel Code
     *  Code
     *  Channel_ Code. Type
     *  Phone Fax Email
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\ChannelCode $channelCode
     */
    private $channelCode = null;

    /**
     * BBIE
     *  Communication. Channel. Text
     *  The method of communication, expressed as text.
     *  0..1
     *  Communication
     *  Channel
     *  Text
     *  Text. Type
     *  Skype
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Channel $channel
     */
    private $channel = null;

    /**
     * BBIE
     *  Communication. Value. Text
     *  The communication value, such as phone number or email address.
     *  0..1
     *  Communication
     *  Value
     *  Text
     *  Text. Type
     *  "+44 1 2345 6789" "president@whitehouse.com"
     *
     * @var \NOKA\PHPUBL\UBL\Common\BasicComponents\Value $value
     */
    private $value = null;

    /**
     * Gets as channelCode
     *
     * BBIE
     *  Communication. Channel Code. Code
     *  The method of communication, expressed as a code.
     *  0..1
     *  Communication
     *  Channel Code
     *  Code
     *  Channel_ Code. Type
     *  Phone Fax Email
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\ChannelCode
     */
    public function getChannelCode()
    {
        return $this->channelCode;
    }

    /**
     * Sets a new channelCode
     *
     * BBIE
     *  Communication. Channel Code. Code
     *  The method of communication, expressed as a code.
     *  0..1
     *  Communication
     *  Channel Code
     *  Code
     *  Channel_ Code. Type
     *  Phone Fax Email
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\ChannelCode $channelCode
     * @return self
     */
    public function setChannelCode(\NOKA\PHPUBL\UBL\Common\BasicComponents\ChannelCode $channelCode)
    {
        $this->channelCode = $channelCode;
        return $this;
    }

    /**
     * Gets as channel
     *
     * BBIE
     *  Communication. Channel. Text
     *  The method of communication, expressed as text.
     *  0..1
     *  Communication
     *  Channel
     *  Text
     *  Text. Type
     *  Skype
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Channel
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Sets a new channel
     *
     * BBIE
     *  Communication. Channel. Text
     *  The method of communication, expressed as text.
     *  0..1
     *  Communication
     *  Channel
     *  Text
     *  Text. Type
     *  Skype
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Channel $channel
     * @return self
     */
    public function setChannel(\NOKA\PHPUBL\UBL\Common\BasicComponents\Channel $channel)
    {
        $this->channel = $channel;
        return $this;
    }

    /**
     * Gets as value
     *
     * BBIE
     *  Communication. Value. Text
     *  The communication value, such as phone number or email address.
     *  0..1
     *  Communication
     *  Value
     *  Text
     *  Text. Type
     *  "+44 1 2345 6789" "president@whitehouse.com"
     *
     * @return \NOKA\PHPUBL\UBL\Common\BasicComponents\Value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * BBIE
     *  Communication. Value. Text
     *  The communication value, such as phone number or email address.
     *  0..1
     *  Communication
     *  Value
     *  Text
     *  Text. Type
     *  "+44 1 2345 6789" "president@whitehouse.com"
     *
     * @param \NOKA\PHPUBL\UBL\Common\BasicComponents\Value $value
     * @return self
     */
    public function setValue(\NOKA\PHPUBL\UBL\Common\BasicComponents\Value $value)
    {
        $this->value = $value;
        return $this;
    }


}

