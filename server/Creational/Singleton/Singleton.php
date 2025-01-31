<?php

namespace Singleton;

class Singleton
{
    private static $instance = [];

    /**
     * 雖然建構子是不可訪問的，但要改子類別使用，所以設為protected
     */
    protected function __construct()
    {
    }

    /**
     * 取得實例
     */
    public static function getInstance()
    {
        $subclass = static::class;
        if (!isset(self::$instance[$subclass])) {
            // Note that here we use the "static" keyword instead of the actual
            // class name. In this context, the "static" keyword means "the name
            // of the current class". That detail is important because when the
            // method is called on the subclass, we want an instance of that
            // subclass to be created here.
            self::$instance[$subclass] = new static();
        }

        return self::$instance[$subclass];
    }

    private function __clone()
    {
    }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }
}