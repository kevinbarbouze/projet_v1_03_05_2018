<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXg3wbv6\appTestDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXg3wbv6/appTestDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerXg3wbv6.legacy');

    return;
}

if (!\class_exists(appTestDebugProjectContainer::class, false)) {
    \class_alias(\ContainerXg3wbv6\appTestDebugProjectContainer::class, appTestDebugProjectContainer::class, false);
}

return new \ContainerXg3wbv6\appTestDebugProjectContainer(array(
    'container.build_hash' => 'Xg3wbv6',
    'container.build_id' => '56f4724d',
    'container.build_time' => 1525343996,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerXg3wbv6');
