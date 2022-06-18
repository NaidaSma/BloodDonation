<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb6f911935de70489df7f2da2287ecb0e
{
    public static $files = array (
        'fc73bab8d04e21bcdda37ca319c63800' => __DIR__ . '/..' . '/mikecao/flight/flight/autoload.php',
        '5b7d984aab5ae919d3362ad9588977eb' => __DIR__ . '/..' . '/mikecao/flight/flight/Flight.php',
    );

    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vendor\\Vendor\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vendor\\Vendor\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb6f911935de70489df7f2da2287ecb0e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb6f911935de70489df7f2da2287ecb0e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb6f911935de70489df7f2da2287ecb0e::$classMap;

        }, null, ClassLoader::class);
    }
}