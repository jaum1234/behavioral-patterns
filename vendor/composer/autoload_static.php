<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc00e30124e2b2b6e1dde1c8dde5265c5
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DesignPattern\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DesignPattern\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc00e30124e2b2b6e1dde1c8dde5265c5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc00e30124e2b2b6e1dde1c8dde5265c5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc00e30124e2b2b6e1dde1c8dde5265c5::$classMap;

        }, null, ClassLoader::class);
    }
}
