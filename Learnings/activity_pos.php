<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Page | Activity #1</title>
</head>
<body>
    <form action="activity_pos.php" method="get">
        <div>
            <label for="order">Order: </label>
            <select name="orders" id="orders">
                <option value="35">Burger</option>
                <option value="80">Pizza</option>
                <option value="60">Adobo</option>
                <option value="20">Coke</option>
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
    $order = $_GET["orders"];
    $quantity = $_GET["quantity"];
    $total = $order * $quantity;
    echo("Your total order are: P{$total}");
?>