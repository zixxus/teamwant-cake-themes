<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7080226d89f670894e9c035e2d1471df
{
    public static $files = array (
        '2ed0c2b43e006237adaceb91a2ba2fbc' => __DIR__ . '/../..' . '/functions/View.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Teamwant\\Themes\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Teamwant\\Themes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/functions',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7080226d89f670894e9c035e2d1471df::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7080226d89f670894e9c035e2d1471df::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
