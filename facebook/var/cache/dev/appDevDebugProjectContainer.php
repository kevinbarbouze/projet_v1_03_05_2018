<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFos3xea\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFos3xea/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerFos3xea.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerFos3xea\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerFos3xea\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Fos3xea',
    'container.build_id' => 'c19bbdaf',
    'container.build_time' => 1525882880,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerFos3xea');
