<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit42f37e4a1ed8579351794cd265788973
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Webmozart\\Assert\\' => 17,
            'Webimpress\\SafeWriter\\' => 22,
        ),
        'S' => 
        array (
            'Snicco\\Component\\StrArr\\' => 24,
            'Snicco\\Component\\Psr7ErrorHandler\\' => 34,
            'Snicco\\Component\\MinimalLogger\\' => 31,
            'Snicco\\Component\\Kernel\\' => 24,
            'Snicco\\Component\\HttpRouting\\' => 29,
            'Snicco\\Component\\EventDispatcher\\' => 33,
            'Snicco\\Component\\BetterWPHooks\\' => 31,
            'Snicco\\Component\\BetterWPAPI\\' => 29,
            'Snicco\\Bundle\\HttpRouting\\' => 26,
            'Snicco\\Bundle\\BetterWPHooks\\' => 28,
            'Snicco\\Bridge\\Pimple\\' => 21,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Server\\' => 16,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\EventDispatcher\\' => 20,
            'Psr\\Container\\' => 14,
        ),
        'N' => 
        array (
            'Nyholm\\Psr7\\' => 12,
            'Nyholm\\Psr7Server\\' => 18,
        ),
        'L' => 
        array (
            'Laminas\\HttpHandlerRunner\\' => 26,
        ),
        'H' => 
        array (
            'Http\\Message\\' => 13,
            'HelloSnicco\\' => 12,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Webmozart\\Assert\\' => 
        array (
            0 => __DIR__ . '/..' . '/webmozart/assert/src',
        ),
        'Webimpress\\SafeWriter\\' => 
        array (
            0 => __DIR__ . '/..' . '/webimpress/safe-writer/src',
        ),
        'Snicco\\Component\\StrArr\\' => 
        array (
            0 => __DIR__ . '/..' . '/snicco/str-arr/src',
        ),
        'Snicco\\Component\\Psr7ErrorHandler\\' => 
        array (
            0 => __DIR__ . '/..' . '/snicco/psr7-error-handler/src',
        ),
        'Snicco\\Component\\MinimalLogger\\' => 
        array (
            0 => __DIR__ . '/..' . '/snicco/minimal-logger/src',
        ),
        'Snicco\\Component\\Kernel\\' => 
        array (
            0 => __DIR__ . '/..' . '/snicco/kernel/src',
        ),
        'Snicco\\Component\\HttpRouting\\' => 
        array (
            0 => __DIR__ . '/..' . '/snicco/http-routing/src',
        ),
        'Snicco\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/snicco/event-dispatcher/src',
        ),
        'Snicco\\Component\\BetterWPHooks\\' => 
        array (
            0 => __DIR__ . '/..' . '/snicco/better-wp-hooks/src',
        ),
        'Snicco\\Component\\BetterWPAPI\\' => 
        array (
            0 => __DIR__ . '/..' . '/snicco/better-wp-api/src',
        ),
        'Snicco\\Bundle\\HttpRouting\\' => 
        array (
            0 => __DIR__ . '/..' . '/snicco/http-routing-bundle/src',
        ),
        'Snicco\\Bundle\\BetterWPHooks\\' => 
        array (
            0 => __DIR__ . '/..' . '/snicco/better-wp-hooks-bundle/src',
        ),
        'Snicco\\Bridge\\Pimple\\' => 
        array (
            0 => __DIR__ . '/..' . '/snicco/pimple-bridge/src',
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
        'Psr\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/event-dispatcher/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Nyholm\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/nyholm/psr7/src',
        ),
        'Nyholm\\Psr7Server\\' => 
        array (
            0 => __DIR__ . '/..' . '/nyholm/psr7-server/src',
        ),
        'Laminas\\HttpHandlerRunner\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-httphandlerrunner/src',
        ),
        'Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-http/message-factory/src',
        ),
        'HelloSnicco\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit42f37e4a1ed8579351794cd265788973::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit42f37e4a1ed8579351794cd265788973::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit42f37e4a1ed8579351794cd265788973::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit42f37e4a1ed8579351794cd265788973::$classMap;

        }, null, ClassLoader::class);
    }
}
