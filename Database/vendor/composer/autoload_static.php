<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb23aff9920cadb215d545f9ac75d6e87
{
    public static $files = array (
        'cd4bb0ee0f09227889f016ae97965c66' => __DIR__ . '/..' . '/jiny/database/src/Helpers/Helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jiny\\Database\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jiny\\Database\\' => 
        array (
            0 => __DIR__ . '/..' . '/jiny/database/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb23aff9920cadb215d545f9ac75d6e87::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb23aff9920cadb215d545f9ac75d6e87::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
