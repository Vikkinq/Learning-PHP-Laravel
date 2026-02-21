<?php
    $database_server = "127.0.0.1";
    $database_user = "root";
    $database_pass = "";
    $database_name = "practice";
    $database_connection = "";

    try{
        $database_connection = mysqli_connect($database_server, $database_user, $database_pass, $database_name);
    } catch(mysqli_sql_exception){
        echo("Failed to Connect to Database");
    }

    if($database_connection){
        echo("Database Connected");
    }

?>