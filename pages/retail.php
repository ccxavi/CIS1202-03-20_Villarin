<?php
    $name = isset($_POST["name"]) ? $_POST["name"] : null;
    $product = isset($_POST["product"]) ? $_POST["product"] : null;
    $quantity = isset($_POST["quantity"]) ? $_POST["quantity"] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Order Form | PHPActivity2_Villarin</title>
    <link rel="stylesheet" href="../styles/global.css">
</head>
<body>
    <main>
    <form method="POST">
        Name: <input type="text" name="name"><br>
        Product: <input type="text" name="product"><br>
        Quantity: <input type="number" name="quantity"><br>
        <input type="submit" value="Order">
    </form>
    </main>
</body>
</html>