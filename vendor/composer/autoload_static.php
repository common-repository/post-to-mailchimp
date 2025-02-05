<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe98777d43565134f1643d8f5712d151
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DrewM\\MailChimp\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DrewM\\MailChimp\\' => 
        array (
            0 => __DIR__ . '/..' . '/drewm/mailchimp-api/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe98777d43565134f1643d8f5712d151::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe98777d43565134f1643d8f5712d151::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
