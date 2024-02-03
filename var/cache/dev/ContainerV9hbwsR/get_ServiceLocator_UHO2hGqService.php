<?php

namespace ContainerV9hbwsR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UHO2hGqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UHO2hGq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UHO2hGq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'location' => ['privates', '.errored..service_locator.UHO2hGq.App\\Entity\\Location', NULL, 'Cannot autowire service ".service_locator.UHO2hGq": it needs an instance of "App\\Entity\\Location" but this type has been excluded in "config/services.yaml".'],
            'repository' => ['privates', 'App\\Repository\\MeasurementRepository', 'getMeasurementRepositoryService', true],
        ], [
            'location' => 'App\\Entity\\Location',
            'repository' => 'App\\Repository\\MeasurementRepository',
        ]);
    }
}
