<?php

$servername = "localhost";
$username = "jouw_gebruikersnaam";
$password = "jouw_wachtwoord";
$dbname = "Winkel";

// Verbinding maken met de database
$conn = new mysqli($servername, $username, $password, $dbname);

// Controleren op fouten bij het maken van de verbinding
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Controleer of het formulier is ingediend
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Ontvang de waarden uit het formulier
    $productNaam = $_POST["product_naam"];
    $prijsPerStuk = $_POST["prijs_per_stuk"];
    $omschrijving = $_POST["omschrijving"];

    // Voorbereiden van de SQL-query voor het invoegen van het product
    $sql = "INSERT INTO Producten (product_naam, prijs_per_stuk, omschrijving) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sds", $productNaam, $prijsPerStuk, $omschrijving);

    // Uitvoeren van de SQL-query
    if ($stmt->execute()) {
        echo "Product toegevoegd: $productNaam<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Sluiten van de SQL statement
    $stmt->close();
}

// Verbinding sluiten
$conn->close();
?>