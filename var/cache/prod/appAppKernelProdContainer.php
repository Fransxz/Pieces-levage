<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerY9UpRzM\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerY9UpRzM/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerY9UpRzM.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerY9UpRzM\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerY9UpRzM\appAppKernelProdContainer([
    'container.build_hash' => 'Y9UpRzM',
    'container.build_id' => '3de5861c',
    'container.build_time' => 1695655336,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerY9UpRzM');
