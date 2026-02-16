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
    <a href="home.php">This goes to Home Page</a>
</body>
</html>

<?php
    $_SESSION["username"] = "pisotoy";
    $_SESSION["password"] = "pinisotpisot123";

    echo($_SESSION["username"]  . "<br>");
    echo($_SESSION["password"] . "<br>");
?>