<?php

namespace framework\core;

class Loader
{
    /**
     * @param string $className
     */
    public static function loadClass($className)
    {
        if (file_exists(ROOT . "/" . $className . ".php")) {

            require_once(ROOT . "/" . $className . ".php");

        } else {
            require_once(ROOT . "/src/Students/" . $className . ".php");
        }
    }
}