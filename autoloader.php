<?php

spl_autoload_register(function ($namespace) {
    $filename = __DIR__ . '/src/' . str_replace('\\', '/', $namespace) . '.php';
    if (file_exists($filename)) {
        return require_once $filename;
    }
    throw new ErrorException("Can't load `{$filename}`");
});
