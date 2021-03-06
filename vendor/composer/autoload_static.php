<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd80623a038a1f256804e3dbb7443666d
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TelegramBot\\Api\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TelegramBot\\Api\\' => 
        array (
            0 => __DIR__ . '/..' . '/telegram-bot/api/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd80623a038a1f256804e3dbb7443666d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd80623a038a1f256804e3dbb7443666d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
