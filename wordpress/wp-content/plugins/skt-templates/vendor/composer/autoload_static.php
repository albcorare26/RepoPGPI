<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1e269f633082fed79b894754c7016454
{
    public static $files = array (
        '62bc7c35996f19a64625f7ff3ba2fb5e' => __DIR__ . '/..' . '/websites/full-width-page-templates/load.php',
        'b4f42ddc6ece5b15b772913931d8824c' => __DIR__ . '/..' . '/websites/templates-directory/load.php',
    );

    public static $prefixLengthsPsr4 = array ( );

    public static $prefixDirsPsr4 = array ( );

    public static $classMap = array (
 
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1e269f633082fed79b894754c7016454::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1e269f633082fed79b894754c7016454::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1e269f633082fed79b894754c7016454::$classMap;

        }, null, ClassLoader::class);
    }
}
