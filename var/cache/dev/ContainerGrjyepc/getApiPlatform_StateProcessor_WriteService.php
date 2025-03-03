<?php

namespace ContainerGrjyepc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_StateProcessor_WriteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.state_processor.write' shared service.
     *
     * @return \ApiPlatform\State\Processor\WriteProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'State'.\DIRECTORY_SEPARATOR.'ProcessorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'State'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'WriteProcessor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'State'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'SerializeProcessor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'HttpCache'.\DIRECTORY_SEPARATOR.'State'.\DIRECTORY_SEPARATOR.'AddHeadersProcessor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'State'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'AddLinkHeaderProcessor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'State'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'CorsTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Hydra'.\DIRECTORY_SEPARATOR.'State'.\DIRECTORY_SEPARATOR.'HydraLinkProcessor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'State'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'RespondProcessor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'State'.\DIRECTORY_SEPARATOR.'CallableProcessor.php';

        return $container->privates['api_platform.state_processor.write'] = new \ApiPlatform\State\Processor\WriteProcessor(new \ApiPlatform\State\Processor\SerializeProcessor(new \ApiPlatform\HttpCache\State\AddHeadersProcessor(new \ApiPlatform\State\Processor\AddLinkHeaderProcessor(new \ApiPlatform\Hydra\State\HydraLinkProcessor(new \ApiPlatform\State\Processor\RespondProcessor(($container->privates['api_platform.symfony.iri_converter'] ?? self::getApiPlatform_Symfony_IriConverterService($container)), ($container->privates['api_platform.resource_class_resolver'] ?? self::getApiPlatform_ResourceClassResolverService($container)), ($container->privates['api_platform.metadata.operation.metadata_factory'] ?? self::getApiPlatform_Metadata_Operation_MetadataFactoryService($container))), ($container->privates['api_platform.router'] ?? self::getApiPlatform_RouterService($container)))), true, NULL, NULL, $container->parameters['api_platform.http_cache.vary'], NULL), ($container->privates['debug.serializer'] ?? self::getDebug_SerializerService($container)), ($container->privates['api_platform.openapi.serializer_context_builder'] ?? $container->load('getApiPlatform_Openapi_SerializerContextBuilderService'))), new \ApiPlatform\State\CallableProcessor(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'ApiPlatform\\Doctrine\\Common\\State\\PersistProcessor' => ['privates', 'api_platform.doctrine.orm.state.persist_processor', 'getApiPlatform_Doctrine_Orm_State_PersistProcessorService', true],
            'ApiPlatform\\Doctrine\\Common\\State\\RemoveProcessor' => ['privates', 'api_platform.doctrine.orm.state.remove_processor', 'getApiPlatform_Doctrine_Orm_State_RemoveProcessorService', true],
            'ApiPlatform\\Symfony\\Messenger\\Processor' => ['privates', 'ApiPlatform\\Symfony\\Messenger\\Processor', 'getProcessorService', true],
            'api_platform.doctrine.orm.state.persist_processor' => ['privates', 'api_platform.doctrine.orm.state.persist_processor', 'getApiPlatform_Doctrine_Orm_State_PersistProcessorService', true],
            'api_platform.doctrine.orm.state.remove_processor' => ['privates', 'api_platform.doctrine.orm.state.remove_processor', 'getApiPlatform_Doctrine_Orm_State_RemoveProcessorService', true],
            'api_platform.swagger_ui.processor' => ['privates', 'api_platform.swagger_ui.processor', 'getApiPlatform_SwaggerUi_ProcessorService', true],
        ], [
            'ApiPlatform\\Doctrine\\Common\\State\\PersistProcessor' => 'ApiPlatform\\Doctrine\\Common\\State\\PersistProcessor',
            'ApiPlatform\\Doctrine\\Common\\State\\RemoveProcessor' => 'ApiPlatform\\Doctrine\\Common\\State\\RemoveProcessor',
            'ApiPlatform\\Symfony\\Messenger\\Processor' => 'ApiPlatform\\Symfony\\Messenger\\Processor',
            'api_platform.doctrine.orm.state.persist_processor' => 'ApiPlatform\\Doctrine\\Common\\State\\PersistProcessor',
            'api_platform.doctrine.orm.state.remove_processor' => 'ApiPlatform\\Doctrine\\Common\\State\\RemoveProcessor',
            'api_platform.swagger_ui.processor' => 'ApiPlatform\\Symfony\\Bundle\\SwaggerUi\\SwaggerUiProcessor',
        ])));
    }
}
