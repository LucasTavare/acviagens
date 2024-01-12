<?php

    define('server','localhost');
    define('password','');
    define('database','db_acviagens');
    define('user','root');

    try{
        $con = new PDO("mysql:host=".server.";dbname=".database.";charset=utf8", user, password);

    $con ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $error){
        echo $erro -> getMessage();
    }

?>