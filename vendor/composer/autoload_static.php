<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit875dc822bf2681132c38427563fc9791
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit875dc822bf2681132c38427563fc9791::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit875dc822bf2681132c38427563fc9791::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit875dc822bf2681132c38427563fc9791::$classMap;

        }, null, ClassLoader::class);
    }
}
