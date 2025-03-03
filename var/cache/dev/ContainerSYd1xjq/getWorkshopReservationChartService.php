<?php

namespace ContainerSYd1xjq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWorkshopReservationChartService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Chart\WorkshopReservationChart' shared autowired service.
     *
     * @return \App\Chart\WorkshopReservationChart
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Chart'.\DIRECTORY_SEPARATOR.'WorkshopReservationChart.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-chartjs'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Builder'.\DIRECTORY_SEPARATOR.'ChartBuilderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-chartjs'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Builder'.\DIRECTORY_SEPARATOR.'ChartBuilder.php';

        return $container->privates['App\\Chart\\WorkshopReservationChart'] = new \App\Chart\WorkshopReservationChart(new \Symfony\UX\Chartjs\Builder\ChartBuilder());
    }
}
