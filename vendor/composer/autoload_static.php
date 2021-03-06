<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1c60ac32f35ad6820834f7beb05f410e
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1c60ac32f35ad6820834f7beb05f410e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1c60ac32f35ad6820834f7beb05f410e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
