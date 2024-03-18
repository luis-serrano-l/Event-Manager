<?php

namespace ContainerXXoffBV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_AssetMapper_Importmap_Command_Update_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.asset_mapper.importmap.command.update.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.asset_mapper.importmap.command.update.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('importmap:update', [], 'Update JavaScript packages to their latest versions', false, #[\Closure(name: 'asset_mapper.importmap.command.update', class: 'Symfony\\Component\\AssetMapper\\Command\\ImportMapUpdateCommand')] fn (): \Symfony\Component\AssetMapper\Command\ImportMapUpdateCommand => ($container->privates['asset_mapper.importmap.command.update'] ?? $container->load('getAssetMapper_Importmap_Command_UpdateService')));
    }
}
