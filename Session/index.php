<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <div>
            <label for="username">Username: </label>
            <input type="text" name="username" id="username" placeholder="Enter Username">
            <label for="password">Password: </label>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="login">
        </div>
    </form>

    <a href="home.php">Home Page</a>
</body>
</html>

<?php
    if(isset($_POST["login"])){
        if(!empty($_POST["username"] && !empty($_POST["password"]))){
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            header("Location: home.php");
        } else {
            echo("Missing password and username");
        }
    }

?>