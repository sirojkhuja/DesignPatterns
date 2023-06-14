<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8b3cfefbc0da4274d4dff30b41a8941c
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DesignPatterns\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DesignPatterns\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8b3cfefbc0da4274d4dff30b41a8941c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8b3cfefbc0da4274d4dff30b41a8941c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8b3cfefbc0da4274d4dff30b41a8941c::$classMap;

        }, null, ClassLoader::class);
    }
}