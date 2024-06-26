<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9c36ff675f5799f1b7c0961e81980598
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Avell\\PhpOo\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Avell\\PhpOo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9c36ff675f5799f1b7c0961e81980598::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9c36ff675f5799f1b7c0961e81980598::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9c36ff675f5799f1b7c0961e81980598::$classMap;

        }, null, ClassLoader::class);
    }
}
