<?php
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h1>Signup!</h1>
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
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
        try{
            mysqli_query($database_connection, $sql);
            echo("Successfully Registered!");
        } catch(mysqli_sql_exception){
            echo("Username is Taken, Please try Again!");
        }
    }

    mysqli_close($database_connection);
?>