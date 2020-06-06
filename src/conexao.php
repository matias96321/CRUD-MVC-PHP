<?php
    
    $host = "localhost";
    $user = "root";
    $db = "senai";
    $pass = "";

    if(!$link = mysqli_connect($host,$user,$pass,$db)){
        echo("Não conectou ao banco");
    }

?>