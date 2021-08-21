<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc898c3f9d73cbd73be1b591f6e9d5c1d
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
            1 => __DIR__ . '/..' . '/osvaldogdelrio/factory/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc898c3f9d73cbd73be1b591f6e9d5c1d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc898c3f9d73cbd73be1b591f6e9d5c1d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc898c3f9d73cbd73be1b591f6e9d5c1d::$classMap;

        }, null, ClassLoader::class);
    }
}
