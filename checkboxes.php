<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkboxes.php" method="post">
        <div>
            <input type="checkbox" name="food[]" value="Adobo">Adobo<br>
            <input type="checkbox" name="food[]" value="Lechon">Lechon<br>
            <input type="checkbox" name="food[]" value="Hamburger">Hamburger<br>
            <input type="checkbox" name="food[]" value="Chicken Curry">Chicken Curry<br>
        </div>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php 

    if(isset($_POST["submit"])){

        if(isset($_POST["food"])){
            $food = $_POST["food"];
            echo("You have selected:");
            foreach($food as $key => $value){
                echo(" {$value}, ");
            }
        }
    }
?>
