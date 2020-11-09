<?php

namespace NOKA\PHPUBL\UBL\Common\ExtensionComponents;

/**
 * Class representing UBLExtensionsType
 *
 * A container for all extensions present in the document.
 * XSD Type: UBLExtensionsType
 */
class UBLExtensionsType
{

    /**
     * A single extension for private use.
     *
     * @var \NOKA\PHPUBL\UBL\Common\ExtensionComponents\UBLExtension[] $uBLExtension
     */
    private $uBLExtension = [
        
    ];

    /**
     * Adds as uBLExtension
     *
     * A single extension for private use.
     *
     * @return self
     * @param \NOKA\PHPUBL\UBL\Common\ExtensionComponents\UBLExtension $uBLExtension
     */
    public function addToUBLExtension(\NOKA\PHPUBL\UBL\Common\ExtensionComponents\UBLExtension $uBLExtension)
    {
        $this->uBLExtension[] = $uBLExtension;
        return $this;
    }

    /**
     * isset uBLExtension
     *
     * A single extension for private use.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUBLExtension($index)
    {
        return isset($this->uBLExtension[$index]);
    }

    /**
     * unset uBLExtension
     *
     * A single extension for private use.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUBLExtension($index)
    {
        unset($this->uBLExtension[$index]);
    }

    /**
     * Gets as uBLExtension
     *
     * A single extension for private use.
     *
     * @return \NOKA\PHPUBL\UBL\Common\ExtensionComponents\UBLExtension[]
     */
    public function getUBLExtension()
    {
        return $this->uBLExtension;
    }

    /**
     * Sets a new uBLExtension
     *
     * A single extension for private use.
     *
     * @param \NOKA\PHPUBL\UBL\Common\ExtensionComponents\UBLExtension[] $uBLExtension
     * @return self
     */
    public function setUBLExtension(array $uBLExtension)
    {
        $this->uBLExtension = $uBLExtension;
        return $this;
    }


}

