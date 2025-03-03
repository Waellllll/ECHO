<?php

namespace ContainerSYd1xjq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_J_Xg0KuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.j.xg0Ku' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.j.xg0Ku'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'user' => ['privates', '.errored..service_locator.j.xg0Ku.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.j.xg0Ku": it needs an instance of "App\\Entity\\User" but this type has been excluded in "config/services.yaml".'],
        ], [
            'doctrine' => '?',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
