<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa3473b6f9937b43863d360ddc74e665
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfa3473b6f9937b43863d360ddc74e665::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfa3473b6f9937b43863d360ddc74e665::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
