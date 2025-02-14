<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit54bbe058a12e93451a0ee68f715725e1
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'AmoCRM\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'AmoCRM\\' => 
        array (
            0 => __DIR__ . '/..' . '/andrey-tech/amocrm-api-php/src/AmoCRM',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit54bbe058a12e93451a0ee68f715725e1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit54bbe058a12e93451a0ee68f715725e1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit54bbe058a12e93451a0ee68f715725e1::$classMap;

        }, null, ClassLoader::class);
    }
}
