<?php
    $database="cacheticos";
    $user="root";
    $pass="";
    try {
        $con = new PDO('mysql:host=localhost;dbname='.$database,$user,$pass);
    }catch(PDOException $e){
        echo'Error'.$e->getMessage();
    }
?>