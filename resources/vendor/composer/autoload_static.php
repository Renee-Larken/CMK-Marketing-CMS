<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit162de1777975756ed4f9da94ee148a3c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit162de1777975756ed4f9da94ee148a3c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit162de1777975756ed4f9da94ee148a3c::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit162de1777975756ed4f9da94ee148a3c::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
