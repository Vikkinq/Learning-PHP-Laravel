<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Page | Activity #1</title>
</head>
<body>
    <form action="activity_order.php" method="get">
        <div>
            <label for="order">Order: </label>
            <select name="orders" id="orders">
                <option value="burger">Burger</option>
                <option value="pizza">Pizza</option>
                <option value="adobo">Adobo</option>
                <option value="Coke">Coke</option>
            </select>
        </div>

        <div>
            <label for="quantity">Quantity: </label>
            <input type="number" name="quantity">
        </div>
        
        <div>
            <input type="submit" value="Order">
        </div>
    </form>
</body>
</html>

<?php 
    echo("You have ordered, {$_GET["quantity"]} {$_GET["orders"]}'s");
?>