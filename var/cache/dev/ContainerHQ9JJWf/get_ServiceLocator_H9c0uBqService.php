<?php

namespace ContainerHQ9JJWf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_H9c0uBqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.h9c0uBq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.h9c0uBq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'reservation' => ['privates', '.errored..service_locator.h9c0uBq.App\\Entity\\Reservation', NULL, 'Cannot autowire service ".service_locator.h9c0uBq": it needs an instance of "App\\Entity\\Reservation" but this type has been excluded in "config/services.yaml".'],
        ], [
            'reservation' => 'App\\Entity\\Reservation',
        ]);
    }
}
