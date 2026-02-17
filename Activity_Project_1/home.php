<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <h1>Home Page</h1>

    <form action="home.php" method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>

<?php 
    echo($_SESSION["username"] . "<br>");
    echo($_SESSION["password"] . "<br>");
    echo($_SESSION["role"] . "<br>");

    if(isset($_POST["logout"])){
        session_destroy();
        header("Location: index.php");
    }
?>