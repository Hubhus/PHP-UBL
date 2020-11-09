<?php

namespace NOKA\PHPUBL\UNCEFACT\Data\UnqualifiedDataTypes;

/**
 * Class representing BinaryObjectType
 *
 * UDT000002
 *  UDT
 *  Binary Object. Type
 *  1.0
 *  A set of finite-length sequences of binary octets.
 *  Binary Object
 *  binary
 *  base64Binary
 * XSD Type: BinaryObjectType
 */
class BinaryObjectType
{

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * UDT000002-SC2
     *  SC
     *  Binary Object. Format. Text
     *  The format of the binary content.
     *  Binary Object
     *  Format
     *  Text
     *  string
     *  string
     *
     * @var string $format
     */
    private $format = null;

    /**
     * UDT000002-SC3
     *  SC
     *  Binary Object. Mime. Code
     *  The mime type of the binary object.
     *  Binary Object
     *  Mime
     *  Code
     *  string
     *  normalizedString
     *
     * @var string $mimeCode
     */
    private $mimeCode = null;

    /**
     * UDT000002-SC4
     *  SC
     *  Binary Object. Encoding. Code
     *  Specifies the decoding algorithm of the binary object.
     *  Binary Object
     *  Encoding
     *  Code
     *  string
     *  normalizedString
     *
     * @var string $encodingCode
     */
    private $encodingCode = null;

    /**
     * UDT000002-SC5
     *  SC
     *  Binary Object. Character Set. Code
     *  The character set of the binary object if the mime type is text.
     *  Binary Object
     *  Character Set
     *  Code
     *  string
     *  normalizedString
     *
     * @var string $characterSetCode
     */
    private $characterSetCode = null;

    /**
     * UDT000002-SC6
     *  SC
     *  Binary Object. Uniform Resource. Identifier
     *  The Uniform Resource Identifier that identifies where the binary object is located.
     *  Binary Object
     *  Uniform Resource Identifier
     *  Identifier
     *  string
     *  anyURI
     *
     * @var string $uri
     */
    private $uri = null;

    /**
     * UDT000002-SC7
     *  SC
     *  Binary Object. Filename.Text
     *  The filename of the binary object.
     *  Binary Object
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
     * UDT000002-SC2
     *  SC
     *  Binary Object. Format. Text
     *  The format of the binary content.
     *  Binary Object
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
     * UDT000002-SC2
     *  SC
     *  Binary Object. Format. Text
     *  The format of the binary content.
     *  Binary Object
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
     * UDT000002-SC3
     *  SC
     *  Binary Object. Mime. Code
     *  The mime type of the binary object.
     *  Binary Object
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
     * UDT000002-SC3
     *  SC
     *  Binary Object. Mime. Code
     *  The mime type of the binary object.
     *  Binary Object
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
     * UDT000002-SC4
     *  SC
     *  Binary Object. Encoding. Code
     *  Specifies the decoding algorithm of the binary object.
     *  Binary Object
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
     * UDT000002-SC4
     *  SC
     *  Binary Object. Encoding. Code
     *  Specifies the decoding algorithm of the binary object.
     *  Binary Object
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
     * Gets as characterSetCode
     *
     * UDT000002-SC5
     *  SC
     *  Binary Object. Character Set. Code
     *  The character set of the binary object if the mime type is text.
     *  Binary Object
     *  Character Set
     *  Code
     *  string
     *  normalizedString
     *
     * @return string
     */
    public function getCharacterSetCode()
    {
        return $this->characterSetCode;
    }

    /**
     * Sets a new characterSetCode
     *
     * UDT000002-SC5
     *  SC
     *  Binary Object. Character Set. Code
     *  The character set of the binary object if the mime type is text.
     *  Binary Object
     *  Character Set
     *  Code
     *  string
     *  normalizedString
     *
     * @param string $characterSetCode
     * @return self
     */
    public function setCharacterSetCode($characterSetCode)
    {
        $this->characterSetCode = $characterSetCode;
        return $this;
    }

    /**
     * Gets as uri
     *
     * UDT000002-SC6
     *  SC
     *  Binary Object. Uniform Resource. Identifier
     *  The Uniform Resource Identifier that identifies where the binary object is located.
     *  Binary Object
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
     * UDT000002-SC6
     *  SC
     *  Binary Object. Uniform Resource. Identifier
     *  The Uniform Resource Identifier that identifies where the binary object is located.
     *  Binary Object
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
     * UDT000002-SC7
     *  SC
     *  Binary Object. Filename.Text
     *  The filename of the binary object.
     *  Binary Object
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
     * UDT000002-SC7
     *  SC
     *  Binary Object. Filename.Text
     *  The filename of the binary object.
     *  Binary Object
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

