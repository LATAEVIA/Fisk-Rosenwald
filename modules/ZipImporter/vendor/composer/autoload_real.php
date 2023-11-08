<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit609bc94bc8600ae1b71562d821c56258
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit609bc94bc8600ae1b71562d821c56258', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit609bc94bc8600ae1b71562d821c56258', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit609bc94bc8600ae1b71562d821c56258::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
