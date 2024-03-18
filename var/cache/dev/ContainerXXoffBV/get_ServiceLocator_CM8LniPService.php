<?php

namespace ContainerXXoffBV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CM8LniPService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cM8LniP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cM8LniP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'formFactory' => ['privates', 'form.factory', 'getForm_FactoryService', true],
        ], [
            'formFactory' => '?',
        ]);
    }
}
