<?php

    define("ABSOLUTE_PATH", $_SERVER['DOCUMENT_ROOT']."/stephstoreonlinework");
    define("ENV_FILE", ABSOLUTE_PATH."/config/.env");
    define("LOG_FILE", ABSOLUTE_PATH."/data/log.txt");

    define("SERVER", env("SERVER"));
    define("DATABASE", env("DATABASE"));
    define("USERNAME", env("USERNAME"));
    define("PASSWORD", env("PASSWORD"));

    function env($name){
        $open = fopen(ENV_FILE, "r");
        $array = file(ENV_FILE);
        $valueBack = "";
        foreach($array as $key=>$value){
            $config = explode("=", $value);
            if($config[0]==$name){
                $valueBack = trim($config[1]);
            }
        }
        return $valueBack;
    }
?>