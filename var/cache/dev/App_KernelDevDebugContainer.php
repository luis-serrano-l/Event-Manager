<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKixhdTx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKixhdTx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKixhdTx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKixhdTx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKixhdTx\App_KernelDevDebugContainer([
    'container.build_hash' => 'KixhdTx',
    'container.build_id' => '34f96313',
    'container.build_time' => 1710760831,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKixhdTx');
