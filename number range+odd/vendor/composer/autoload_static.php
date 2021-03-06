<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite863743963d363877150f9e42e83dd7e
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite863743963d363877150f9e42e83dd7e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite863743963d363877150f9e42e83dd7e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite863743963d363877150f9e42e83dd7e::$classMap;

        }, null, ClassLoader::class);
    }
}
