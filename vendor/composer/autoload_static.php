<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcd06791a00819e4b9351b80676801076
{
    public static $files = array (
        'ba06869db0754c35c8b50aee0aaecfa8' => __DIR__ . '/../..' . '/app/helprs/validate.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitcd06791a00819e4b9351b80676801076::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcd06791a00819e4b9351b80676801076::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcd06791a00819e4b9351b80676801076::$classMap;

        }, null, ClassLoader::class);
    }
}