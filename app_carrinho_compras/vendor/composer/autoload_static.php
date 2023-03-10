<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit44391ae3f0a64a105716867c1a7bfd40
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
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'src\\CarrinhoCompra' => __DIR__ . '/../..' . '/src/CarrinhoCompra.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit44391ae3f0a64a105716867c1a7bfd40::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit44391ae3f0a64a105716867c1a7bfd40::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit44391ae3f0a64a105716867c1a7bfd40::$classMap;

        }, null, ClassLoader::class);
    }
}
