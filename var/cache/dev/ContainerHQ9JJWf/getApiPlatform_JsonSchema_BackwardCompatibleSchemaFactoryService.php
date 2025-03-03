<?php

namespace ContainerHQ9JJWf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_JsonSchema_BackwardCompatibleSchemaFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.json_schema.backward_compatible_schema_factory' shared service.
     *
     * @return \ApiPlatform\JsonSchema\BackwardCompatibleSchemaFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'JsonSchema'.\DIRECTORY_SEPARATOR.'SchemaFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'JsonSchema'.\DIRECTORY_SEPARATOR.'SchemaFactoryAwareInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'JsonSchema'.\DIRECTORY_SEPARATOR.'BackwardCompatibleSchemaFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Hydra'.\DIRECTORY_SEPARATOR.'JsonSchema'.\DIRECTORY_SEPARATOR.'SchemaFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'JsonSchema'.\DIRECTORY_SEPARATOR.'ResourceMetadataTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'JsonSchema'.\DIRECTORY_SEPARATOR.'SchemaFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'JsonSchema'.\DIRECTORY_SEPARATOR.'DefinitionNameFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'JsonSchema'.\DIRECTORY_SEPARATOR.'DefinitionNameFactory.php';

        $a = ($container->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService($container));

        if (isset($container->privates['api_platform.json_schema.backward_compatible_schema_factory'])) {
            return $container->privates['api_platform.json_schema.backward_compatible_schema_factory'];
        }
        $b = ($container->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService($container));

        if (isset($container->privates['api_platform.json_schema.backward_compatible_schema_factory'])) {
            return $container->privates['api_platform.json_schema.backward_compatible_schema_factory'];
        }

        return $container->privates['api_platform.json_schema.backward_compatible_schema_factory'] = new \ApiPlatform\JsonSchema\BackwardCompatibleSchemaFactory(new \ApiPlatform\Hydra\JsonSchema\SchemaFactory(new \ApiPlatform\JsonSchema\SchemaFactory($a, $b, ($container->privates['api_platform.metadata.property.metadata_factory.cached'] ?? self::getApiPlatform_Metadata_Property_MetadataFactory_CachedService($container)), ($container->privates['api_platform.hydra.name_converter.hydra_prefix'] ?? self::getApiPlatform_Hydra_NameConverter_HydraPrefixService($container)), ($container->privates['api_platform.resource_class_resolver'] ?? self::getApiPlatform_ResourceClassResolverService($container)), $container->parameters['api_platform.jsonschema_formats'], new \ApiPlatform\JsonSchema\DefinitionNameFactory($container->parameters['api_platform.jsonschema_formats'])), $container->parameters['api_platform.serializer.default_context']));
    }
}
