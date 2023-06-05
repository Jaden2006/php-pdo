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

// Succesbericht weergeven
echo "Connected to database ($dbname).";

// Verbinding sluiten
$conn->close();
?>
