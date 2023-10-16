<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc48d0411ea026162ca02d273af590c4e
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Routes\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Routes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/routes',
        ),
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc48d0411ea026162ca02d273af590c4e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc48d0411ea026162ca02d273af590c4e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc48d0411ea026162ca02d273af590c4e::$classMap;

        }, null, ClassLoader::class);
    }
}
