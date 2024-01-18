<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit59f062962c65d7942f08459a1cbb962e
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

        spl_autoload_register(array('ComposerAutoloaderInit59f062962c65d7942f08459a1cbb962e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit59f062962c65d7942f08459a1cbb962e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit59f062962c65d7942f08459a1cbb962e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}