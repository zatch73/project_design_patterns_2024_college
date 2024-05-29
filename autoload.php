<?php

spl_autoload_register(function ($class) {
    $path = __DIR__ .'/'. $class;
    $classFile = str_replace('/', '\\', $path) . '.php';

    if (file_exists($classFile)) {
        include $classFile;
    }
});

?>