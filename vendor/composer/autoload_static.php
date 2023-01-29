<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6cd502f811ffbaebfaa2cdaa9bc831b6
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vincent\\RemoteAuthClient\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vincent\\RemoteAuthClient\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6cd502f811ffbaebfaa2cdaa9bc831b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6cd502f811ffbaebfaa2cdaa9bc831b6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6cd502f811ffbaebfaa2cdaa9bc831b6::$classMap;

        }, null, ClassLoader::class);
    }
}
