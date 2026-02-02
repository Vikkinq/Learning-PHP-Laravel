<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Page | Activity #1</title>
</head>
<body>
    <form action="logical_operators.php" method="get">
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
    $temperature = 15;

    if($temperature >= 0 || $temperature <= 30){
        echo("The Weather is Bad");
    } else {
        echo("The Weather is Good");
    }
?>