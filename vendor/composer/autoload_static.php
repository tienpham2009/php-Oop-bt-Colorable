<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6f25d1260da1a93b6c0321f9d7c0ce87
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Shape\\' => 6,
        ),
        'Q' => 
        array (
            'Quadrilateral\\' => 14,
        ),
        'C' => 
        array (
            'Colorable\\' => 10,
            'Circle\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Shape\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Shape',
        ),
        'Quadrilateral\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Quadrilateral',
        ),
        'Colorable\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Colorable',
        ),
        'Circle\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Circle',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6f25d1260da1a93b6c0321f9d7c0ce87::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6f25d1260da1a93b6c0321f9d7c0ce87::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
