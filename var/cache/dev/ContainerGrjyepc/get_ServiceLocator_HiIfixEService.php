<?php

namespace ContainerGrjyepc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HiIfixEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hiIfixE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hiIfixE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'conseil' => ['privates', '.errored..service_locator.hiIfixE.App\\Entity\\Conseil', NULL, 'Cannot autowire service ".service_locator.hiIfixE": it needs an instance of "App\\Entity\\Conseil" but this type has been excluded in "config/services.yaml".'],
        ], [
            'conseil' => 'App\\Entity\\Conseil',
        ]);
    }
}
