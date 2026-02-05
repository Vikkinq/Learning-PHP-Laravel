<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="isset_empty.php" method="post">
        <div>
            <label for="username">Username: </label>
            <input type="text" placeholder="Enter Username" name="username">
            <br>
            <label for="password">Password: </label>
            <input type="password" placeholder="Enter Password" name="password">
            <br>
            <input type="Submit" name="login" value="Login">
        </div>
    </form>
</body>
</html>

<?php 

    /*foreach($_POST as $key => $value){
        echo("{$key} = {$value} <br>");
    };
    */

    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)){
            echo("You need Username to Login");
        } elseif(empty($password)){
            echo("Password Required");
        } else {
            echo(" <br>Hello {$username} <br>");
            echo("Username: {$username} <br>");
            echo("Password: {$password} <br>");
        }
    }
?>
