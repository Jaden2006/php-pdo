<!DOCTYPE html>
<html>
<head>
    <title>POST Formulier</title>
</head>
<body>
    <form action="post.php" method="post">
        <label for="naam">Naam:</label>
        <input type="text" id="naam" name="naam"><br>

        <label for="achternaam">Achternaam:</label>
        <input type="text" id="achternaam" name="achternaam"><br>

        <label for="leeftijd">Leeftijd:</label>
        <input type="number" id="leeftijd" name="leeftijd"><br>

        <label for="adres">Adres:</label>
        <input type="text" id="adres" name="adres"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>

        <input type="submit" value="Verzenden">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["naam"]) && isset($_POST["achternaam"]) &&