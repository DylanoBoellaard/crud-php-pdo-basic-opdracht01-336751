<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>PDO CRUD</title>
</head>
<body>
    <h3>PDO CRUD</h3>
    <a href="read.php">DB table</a>
    <form action="create.php" method="post">
        <label for="firstname">Voornaam:</label><br>
        <input type="text" id="firstname" name="firstname"><br>
        <br>
        <label for="infix">Tussenvoegsel:</label><br>
        <input type="text" id="infix" name="infix"><br>
        <br>
        <label for="lastname">Achternaam:</label><br>
        <input type="text" id="lastname" name="lastname"><br>
        <br>
        <label for="phone">Mobiel</label><br>
        <input type="text" id="phone" name="phone"><br>
        <br>
        <label for="street">Straatnaam</label><br>
        <input type="text" id="street" name="street"><br>
        <br>
        <label for="house">Huisnummer</label><br>
        <input type="text" id="house" name="house"><br>
        <br>
        <label for="residence">Woonplaats</label><br>
        <input type="text" id="residence" name="residence"><br>
        <br>
        <label for="zipcode">Postcode</label><br>
        <input type="text" id="zipcode" name="zipcode"><br>
        <br>
        <label for="country">Landnaam</label><br>
        <input type="text" id="country" name="country"><br>
        <br>
        <input type="submit" value="Verstuur">
    </form>
</body>
</html>