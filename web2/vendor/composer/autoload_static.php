<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita3b1007bae36a66347011e4fe743c637
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInita3b1007bae36a66347011e4fe743c637::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
