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
    /*
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
        */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h1>Login!</h1>
        <div>
            <label for="username">Username: </label>
            <input type="text" name="username" id="username" placeholder="Enter Username">
            <label for="password">Password: </label>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="login">
        </div>
    </form>
</body>
</html>

<?php 

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
    }

    if(empty($username)){
        echo("Username must not be Empty!");
    } elseif(empty($password)){
        echo("Password must not be Empty!");
    } else {
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($database_connection, $sql);

        if(mysqli_num_rows($result)){
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row["password"])){
                echo("<br> {$row["id"]} <br>");
                echo("<br> {$row["username"]} <br>");
                echo("<br> {$row["registered_date"]} <br>");
            } else {
                echo("<br>Wrong Password and Username, Please try Again!");
            }
        } else {
            echo("No User Found");
        }
    }


    

    mysqli_close($database_connection);
?>