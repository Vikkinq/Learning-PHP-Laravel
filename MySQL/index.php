<?php
    include("database.php");

    /* // Inserting Values to MySQL Table
    $username = "samueljackson";
    $password = "samuel123";
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";

    try {
        mysqli_query($database_connection, $sql);
        echo("User Registered Successfully!");
    } catch(mysqli_sql_exception){
        echo("Cant register User!");
    } */

    // Retrieving Specific Value from MySQL using WHERE clause

    /*
    $sql = "SELECT * FROM users WHERE username = 'fritzsymon23'";
    $result = mysqli_query($database_connection, $sql);

    if(mysqli_num_rows($result)){
        $row = mysqli_fetch_assoc($result);
        echo("<br> {$row["id"]} <br>");
        echo("<br> {$row["username"]} <br>");
        echo("<br> {$row["registered_date"]} <br>");
    } else {
        echo("No User Found");
    } */

    // Finds all Value and Echo all of it without Clause
    $sql = "SELECT * FROM users";
    $result = mysqli_query($database_connection, $sql);

    if(mysqli_num_rows($result)){
        while($row = mysqli_fetch_assoc($result)){
            echo("<br> {$row["id"]} <br>");
            echo("<br> {$row["username"]} <br>");
            echo("<br> {$row["registered_date"]} <br>");
        }
    } else {
        echo("No User Found");
    }

    mysqli_close($database_connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>
        Hello
    </h1>
</body>
</html>