<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h1>Login Page</h1>

    <form action="index.php" method="post">
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
    $users = [
        "admin" => [
            "password" => password_hash("admin123", PASSWORD_DEFAULT),
            "role" => "Administrator"
        ],
        "fritz" => [
            "password" => password_hash("secret123", PASSWORD_DEFAULT),
            "role" => "User"
            ]
    ];

    $inputs = [];
    $errors = [];
    
    if($_SERVER["REQUEST_METHOD"] === "POST"){

        $username = htmlspecialchars($_POST["username"], ENT_QUOTES, 'UTF-8');
        $password = htmlspecialchars($_POST["password"], ENT_QUOTES, 'UTF-8');

        if(array_key_exists($username, $users)){
            $hashedPassword = $users[$username]["password"];

            if(password_verify($password, $hashedPassword)){
                $_SESSION["username"] = $username;
                $_SESSION["password"] = $hashedPassword;
                $_SESSION["role"] = $users[$username]["role"];
                echo("Login Successfully");

                header("Location: home.php");
            } else {
                echo("Wrong Password/Username");
            }
        } else {
            echo("User `{$username}` doesn't Exist");
        }

    } else {
        echo("Not POST");
    }

?>