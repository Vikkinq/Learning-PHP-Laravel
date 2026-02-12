<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
</head>
<body>
    <form action="validation_input.php" method="post">
        <div>
            <label for="username">Username: </label>
            <input type="text" name="username" >

            <input type="submit" name="login" value="Submit">
        </div>
    </form>
    
</body>
</html>

<?php

    if(isset($_POST["login"])){
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

        echo("Hello {$username}");
    }
?>