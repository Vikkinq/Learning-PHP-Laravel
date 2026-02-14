<?php
    setcookie("user", "pisotoy", time() - 0, "/PHP/Learnings/cookies.php");
    setcookie("favorite", "burger", time() + (86400 * 2), "/PHP/Learnings/cookies.php");
    setcookie("dog", "saur", time() + (86400 * 2), "/PHP/Learnings/cookies.php");

    foreach($_COOKIE as $key => $value){
        echo("{$key} === {$value}" . "<br>");
    };

    if(isset($_COOKIE["user"])){
        echo("Good Morning {$_COOKIE["user"]}");
    } else {
        echo("You need to Login");
    }

    ?>
