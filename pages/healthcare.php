<?php
    $name = isset($_POST["name"]) ? $_POST["name"] : null;
    $contact = isset($_POST["contact"]) ? $_POST["contact"] : null;
    $date = isset($_POST["date"]) ? $_POST["date"] : null;

    function displayAppointment($name, $contact, $date){
        if()
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Order Form | CIS1202-03-20_Villarin</title>
    <link rel="stylesheet" href="../styles/global.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <main class = "container-fluid d-flex flex-column justify-content-center align-items-center vh-100 vw-100">
    <form method="POST">
        Name: <input type="text" name="name"><br>
        Product: <input type="text" name="product"><br>
        Quantity: <input type="number" name="quantity"><br>
        <input type="submit" value="Order">
    </form>
    </main>
</body>
</html>