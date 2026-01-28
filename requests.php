<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <form action="requests.php" method="post">
        <label for="username">username: </label><br>
        <input type="text" name="username"><br>
        <label for="password">password: </label><br>
        <input type="password" name="password" id=""><br>

        <br><input type="submit" value="Log In">
    </form>
    
</body>
</html>

<?php 
    // echo("Username is: {$_GET["username"]} <br>");
    // echo("Username is: {$_GET["password"]} <br>");

    // echo("Username is: {$_POST["username"]} <br>");
    // echo("Username is: {$_POST["password"]} <br>");
?>