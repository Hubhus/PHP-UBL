<?php

namespace NOKA\PHPUBL;

use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\SerializerBuilder;

class PHPUBL
{
    /**
     * @return \JMS\Serializer\Serializer
     */
    public static function getSerializer()
    {
        $serializerBuilder = SerializerBuilder::create();
        $metadata_dir = dirname(__DIR__) . '/metadata';
        $serializerBuilder->addMetadataDir($metadata_dir, 'NOKA\PHPUBL');
        $serializerBuilder->configureHandlers(function(HandlerRegistryInterface  $handler) use ($serializerBuilder) {
            $serializerBuilder->addDefaultHandlers();
            $handler->registerSubscribingHandler(new BaseTypesHandler());
            $handler->registerSubscribingHandler(new XmlSchemaDateHandler());
        });
        return $serializerBuilder->build();
    }
}