<?php

require dirname(__DIR__) . '/autoloader.php';

use MyNamespace\MyOtherClass;

echo (new MyClass)->myMethod(), PHP_EOL;

echo (new MyOtherClass)->myMethod(), PHP_EOL;


