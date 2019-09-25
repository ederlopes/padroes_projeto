<?php
    class SingletonLogs
    {
        private static $singletonLogs;

        private function __construct()
        {

        }

        private function __wakeup()
        {
            // TODO: Implement __wakeup() method.
        }

        private function __clone()
        {
            // TODO: Implement __clone() method.
        }

        public static function getInstance(){
            if (self::$singletonLogs === null){
                self::$singletonLogs = new SingletonLogs();
            }

            return self::$singletonLogs;
        }
    }