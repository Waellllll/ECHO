<?php

namespace ContainerGrjyepc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NgvlNzcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NgvlNzc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NgvlNzc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'materiel' => ['privates', '.errored..service_locator.NgvlNzc.App\\Entity\\Materiel', NULL, 'Cannot autowire service ".service_locator.NgvlNzc": it needs an instance of "App\\Entity\\Materiel" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'materiel' => 'App\\Entity\\Materiel',
        ]);
    }
}
