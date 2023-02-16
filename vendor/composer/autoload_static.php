<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitadd5e3d70e27e51345a333cc17d8aa64
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
        'e39a8b23c42d4e1452234d762b03835a' => __DIR__ . '/..' . '/ramsey/uuid/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Utils\\' => 6,
        ),
        'T' => 
        array (
            'Tuupola\\Middleware\\' => 19,
            'Tuupola\\Http\\Factory\\' => 21,
            'Tuupola\\' => 8,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Slim\\Middleware\\' => 16,
            'Slim\\Handlers\\' => 14,
            'Slim\\' => 5,
        ),
        'R' => 
        array (
            'Ramsey\\Uuid\\' => 12,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Server\\' => 16,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
        ),
        'N' => 
        array (
            'Neomerx\\Cors\\' => 13,
            'Negotiation\\' => 12,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'G' => 
        array (
            'Gofabian\\Negotiation\\' => 21,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
            'FastRoute\\' => 10,
        ),
        'E' => 
        array (
            'Exception\\' => 10,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
            'Doctrine\\DBAL\\Logging\\' => 22,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Utils\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Utils',
        ),
        'Tuupola\\Middleware\\' => 
        array (
            0 => __DIR__ . '/..' . '/tuupola/callable-handler/src',
            1 => __DIR__ . '/..' . '/tuupola/cors-middleware/src',
        ),
        'Tuupola\\Http\\Factory\\' => 
        array (
            0 => __DIR__ . '/..' . '/tuupola/http-factory/src',
        ),
        'Tuupola\\' => 
        array (
            0 => __DIR__ . '/..' . '/tuupola/base62/src',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Slim\\Middleware\\' => 
        array (
            0 => __DIR__ . '/..' . '/tuupola/slim-basic-auth/src',
            1 => __DIR__ . '/..' . '/tuupola/slim-jwt-auth/src',
        ),
        'Slim\\Handlers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Slim/Handlers',
        ),
        'Slim\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/slim/Slim',
        ),
        'Ramsey\\Uuid\\' => 
        array (
            0 => __DIR__ . '/..' . '/ramsey/uuid/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Http\\Server\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-server-handler/src',
            1 => __DIR__ . '/..' . '/psr/http-server-middleware/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Neomerx\\Cors\\' => 
        array (
            0 => __DIR__ . '/..' . '/neomerx/cors-psr7/src',
        ),
        'Negotiation\\' => 
        array (
            0 => __DIR__ . '/..' . '/willdurand/negotiation/src/Negotiation',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Gofabian\\Negotiation\\' => 
        array (
            0 => __DIR__ . '/..' . '/gofabian/negotiation-middleware/src',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'Exception\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Exception',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
        'Doctrine\\DBAL\\Logging\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Doctrine/DBAL/Logging',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/App',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitadd5e3d70e27e51345a333cc17d8aa64::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitadd5e3d70e27e51345a333cc17d8aa64::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitadd5e3d70e27e51345a333cc17d8aa64::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitadd5e3d70e27e51345a333cc17d8aa64::$classMap;

        }, null, ClassLoader::class);
    }
}