<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit68d9b46c6d0805b67fbac94fa4f0bba4
{
    public static $files = array (
        '7ba3c774c30c8399e359b5ff7f3b943e' => __DIR__ . '/..' . '/tightenco/collect/src/Illuminate/Support/helpers.php',
        '9482a87e9277ddb6e60ffd43b6b8c721' => __DIR__ . '/../..' . '/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Silk\\' => 5,
        ),
        'I' => 
        array (
            'Illuminate\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Silk\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Illuminate\\' => 
        array (
            0 => __DIR__ . '/..' . '/tightenco/collect/src/Illuminate',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit68d9b46c6d0805b67fbac94fa4f0bba4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit68d9b46c6d0805b67fbac94fa4f0bba4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
