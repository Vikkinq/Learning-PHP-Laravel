<?php 
    $name = "Symon";
    $age = 23;
    $email = "symon@gmail.com";
    $gpa = 3.2;
    $tax_rate = 5.1;
    $isAdult = $age > 18;

    echo("Index Page <br>");
    // echo("I am {$name}<br>");
    // echo("My age is {$age} years old<br>");
    // echo("My email is {$email}<br>");

    if($isAdult){
        echo("You are Adult");
    } else {
        echo("You are not");
    }

    
    

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
</head>
<body>
    <br>
    <button>What the Shit</button>
</body>
</html>