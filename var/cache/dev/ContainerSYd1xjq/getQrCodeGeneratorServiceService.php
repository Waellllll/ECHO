<?php

namespace ContainerSYd1xjq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getQrCodeGeneratorServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\QrCodeGeneratorService' shared autowired service.
     *
     * @return \App\Service\QrCodeGeneratorService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'QrCodeGeneratorService.php';

        return $container->privates['App\\Service\\QrCodeGeneratorService'] = new \App\Service\QrCodeGeneratorService();
    }
}
