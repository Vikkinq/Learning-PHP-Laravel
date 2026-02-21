<?php
    include("database.php");

    $username = "samueljackson";
    $password = "samuel123";
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";

    try {
        mysqli_query($database_connection, $sql);
        echo("User Registered Successfully!");
    } catch(mysqli_sql_exception){
        echo("Cant register User!");
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