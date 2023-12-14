<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit40b7262001a78016ac3123a5c27d2908
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'sms_net_bd\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'sms_net_bd\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit40b7262001a78016ac3123a5c27d2908::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit40b7262001a78016ac3123a5c27d2908::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit40b7262001a78016ac3123a5c27d2908::$classMap;

        }, null, ClassLoader::class);
    }
}
