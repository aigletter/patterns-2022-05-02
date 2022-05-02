<?php

namespace patterns\Singleton;

class Db
{
    protected static $instance;

    private function __construct()
    {}

    public static function getInstance()
    {
        //if (self::$instance === null)
        if (!isset(self::$instance)) {
            self::$instance = new \patterns\Singleton\Db();
        }

        return self::$instance;
    }

    public function query($sql)
    {
        // Use connection
        echo 'Run query method' . PHP_EOL;
    }
}