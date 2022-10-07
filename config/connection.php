<?php
    require_once "config.php";
    markPageVisiting();

    try {
        $conn = new PDO("mysql:host=".SERVER.";dbname=".DATABASE.";charset=utf8", USERNAME, PASSWORD);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $ex){
        echo $ex->getMessage();
    }

    function markPageVisiting(){
        $open = fopen(LOG_FILE, "a");
        $date=date("d-m-Y H:i:s");
        if($open){
            fwrite($open, "{$_SERVER['REQUEST_URI']}__{$_SERVER['REMOTE_ADDR']}__{$date}\n");
            fclose($open);
        }
    }
    
?>