<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit352eae737770c8ed42fdd8201340efa9
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Ziplaravelproject\\Ziplaravelconvertproject\\' => 43,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ziplaravelproject\\Ziplaravelconvertproject\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit352eae737770c8ed42fdd8201340efa9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit352eae737770c8ed42fdd8201340efa9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit352eae737770c8ed42fdd8201340efa9::$classMap;

        }, null, ClassLoader::class);
    }
}