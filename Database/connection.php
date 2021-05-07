<?php

function config()
{
    $server = "localhost";
    $database = "taskmanager";
    $user = "root";
    $password = "";

    $connection = mysqli_connect($server,$user,$password,$database);
    return $connection;
}


?>