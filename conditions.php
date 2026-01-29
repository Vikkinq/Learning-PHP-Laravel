<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Page | Activity #1</title>
</head>
<body>
    <form action="conditions.php" method="get">
        <div>
            <label for="order">Name: </label>
            <input type="text" name="name">
        </div>

        <div>
            <label for="quantity">Age: </label>
            <input type="number" name="age">
        </div>
        
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>
</body>
</html>

<?php 
    $name = $_GET["name"];
    $age = $_GET["age"];

    echo("Name: {$name}");
    echo("Age: {$age}");
    
    if($age > 18){
        echo("You are an Adult");
    } elseif($age > 15){
        echo("You are a Teen");
    } elseif($age > 5){
        echo("You are a Kid");
    }
?>