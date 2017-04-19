<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdd440dbe8ec1f2b45cd2d4fc4add8db2
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdd440dbe8ec1f2b45cd2d4fc4add8db2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdd440dbe8ec1f2b45cd2d4fc4add8db2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
