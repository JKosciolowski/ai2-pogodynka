<?php

namespace ContainerI5eUYsi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_H8_YisbService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.H8.Yisb' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.H8.Yisb'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'location' => ['privates', '.errored.ySUgl6m', NULL, 'Cannot determine controller argument for "App\\Controller\\WeatherController::city()": the $location argument is type-hinted with the non-existent class or interface: "App\\Controller\\Location". Did you forget to add a use statement?'],
            'repository' => ['privates', '.errored.6guCk.s', NULL, 'Cannot determine controller argument for "App\\Controller\\WeatherController::city()": the $repository argument is type-hinted with the non-existent class or interface: "App\\Controller\\MeasurementRepository". Did you forget to add a use statement?'],
        ], [
            'location' => '?',
            'repository' => '?',
        ]);
    }
}