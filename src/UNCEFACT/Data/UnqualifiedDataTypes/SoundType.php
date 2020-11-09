<?php

namespace NOKA\PHPUBL\UNCEFACT\Data\UnqualifiedDataTypes;

/**
 * Class representing SoundType
 *
 * UDT000005
 *  UDT
 *  Sound. Type
 *  1.0
 *  A diagram, graph, mathematical curves, or similar representation.
 *  Sound
 *  binary
 *  base64Binary
 * XSD Type: SoundType
 */
class SoundType
{

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * UDT000005-SC2
     *  SC
     *  Sound. Format. Text
     *  The format of the sound content.
     *  Sound
     *  Format
     *  Text
     *  string
     *  string
     *
     * @var string $format
     */
    private $format = null;

    /**
     * UDT000005-SC3
     *  SC
     *  Sound. Mime. Code
     *  The mime type of the sound object.
     *  Sound
     *  Mime
     *  Code
     *  string
     *  normalizedString
     *
     * @var string $mimeCode
     */
    private $mimeCode = null;

    /**
     * UDT000005-SC4
     *  SC
     *  Sound. Encoding. Code
     *  Specifies the decoding algorithm of the sound object.
     *  Sound
     *  Encoding
     *  Code
     *  string
     *  normalizedString
     *
     * @var string $encodingCode
     */
    private $encodingCode = null;

    /**
     * UDT000005-SC6
     *  SC
     *  Sound. Uniform Resource. Identifier
     *  The Uniform Resource Identifier that identifies where the sound object is located.
     *  Sound
     *  Uniform Resource Identifier
     *  Identifier
     *  string
     *  anyURI
     *
     * @var string $uri
     */
    private $uri = null;

    /**
     * UDT000005-SC7
     *  SC
     *  Sound. Filename.Text
     *  The filename of the sound object.
     *  Sound
     *  Filename
     *  Text
     *  string
     *  string
     *
     * @var string $filename
     */
    private $filename = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as format
     *
     * UDT000005-SC2
     *  SC
     *  Sound. Format. Text
     *  The format of the sound content.
     *  Sound
     *  Format
     *  Text
     *  string
     *  string
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Sets a new format
     *
     * UDT000005-SC2
     *  SC
     *  Sound. Format. Text
     *  The format of the sound content.
     *  Sound
     *  Format
     *  Text
     *  string
     *  string
     *
     * @param string $format
     * @return self
     */
    public function setFormat($format)
    {
        $this->format = $format;
        return $this;
    }

    /**
     * Gets as mimeCode
     *
     * UDT000005-SC3
     *  SC
     *  Sound. Mime. Code
     *  The mime type of the sound object.
     *  Sound
     *  Mime
     *  Code
     *  string
     *  normalizedString
     *
     * @return string
     */
    public function getMimeCode()
    {
        return $this->mimeCode;
    }

    /**
     * Sets a new mimeCode
     *
     * UDT000005-SC3
     *  SC
     *  Sound. Mime. Code
     *  The mime type of the sound object.
     *  Sound
     *  Mime
     *  Code
     *  string
     *  normalizedString
     *
     * @param string $mimeCode
     * @return self
     */
    public function setMimeCode($mimeCode)
    {
        $this->mimeCode = $mimeCode;
        return $this;
    }

    /**
     * Gets as encodingCode
     *
     * UDT000005-SC4
     *  SC
     *  Sound. Encoding. Code
     *  Specifies the decoding algorithm of the sound object.
     *  Sound
     *  Encoding
     *  Code
     *  string
     *  normalizedString
     *
     * @return string
     */
    public function getEncodingCode()
    {
        return $this->encodingCode;
    }

    /**
     * Sets a new encodingCode
     *
     * UDT000005-SC4
     *  SC
     *  Sound. Encoding. Code
     *  Specifies the decoding algorithm of the sound object.
     *  Sound
     *  Encoding
     *  Code
     *  string
     *  normalizedString
     *
     * @param string $encodingCode
     * @return self
     */
    public function setEncodingCode($encodingCode)
    {
        $this->encodingCode = $encodingCode;
        return $this;
    }

    /**
     * Gets as uri
     *
     * UDT000005-SC6
     *  SC
     *  Sound. Uniform Resource. Identifier
     *  The Uniform Resource Identifier that identifies where the sound object is located.
     *  Sound
     *  Uniform Resource Identifier
     *  Identifier
     *  string
     *  anyURI
     *
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Sets a new uri
     *
     * UDT000005-SC6
     *  SC
     *  Sound. Uniform Resource. Identifier
     *  The Uniform Resource Identifier that identifies where the sound object is located.
     *  Sound
     *  Uniform Resource Identifier
     *  Identifier
     *  string
     *  anyURI
     *
     * @param string $uri
     * @return self
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
        return $this;
    }

    /**
     * Gets as filename
     *
     * UDT000005-SC7
     *  SC
     *  Sound. Filename.Text
     *  The filename of the sound object.
     *  Sound
     *  Filename
     *  Text
     *  string
     *  string
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Sets a new filename
     *
     * UDT000005-SC7
     *  SC
     *  Sound. Filename.Text
     *  The filename of the sound object.
     *  Sound
     *  Filename
     *  Text
     *  string
     *  string
     *
     * @param string $filename
     * @return self
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
        return $this;
    }


}

