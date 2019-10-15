<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit057ba806e4729fa7ab61276b193dedd9
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'lhm\\SayHello\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'lhm\\SayHello\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit057ba806e4729fa7ab61276b193dedd9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit057ba806e4729fa7ab61276b193dedd9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
