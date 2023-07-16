<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5ad8d63589e44e4702ec44e0610c47ca
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5ad8d63589e44e4702ec44e0610c47ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5ad8d63589e44e4702ec44e0610c47ca::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5ad8d63589e44e4702ec44e0610c47ca::$classMap;

        }, null, ClassLoader::class);
    }
}
