<?php


// Databaseverbinding
$servername = "localhost";
$username = "jouw_gebruikersnaam";
$password = "jouw_wachtwoord";
$dbname = "winkel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Verbindingsfout: " . $conn->connect_error);
}

// Query voor het selecteren van alle data uit de tabel
$sql = "SELECT * FROM jouw_tabelnaam";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Uitvoeren van de data in een mooie volgorde
    while ($row = $result->fetch_assoc()) {
        echo "Product: " . $row["product_naam"] . "<br>";
        echo "Prijs: " . $row["product_prijs"] . "<br>";
        echo "Voorraad: " . $row["product_voorraad"] . "<br>";
        echo "<br>";
    }
} else {
    echo "Geen resultaten gevonden.";
}

$conn->close();
?>


<?php


// Databaseverbinding (hetzelfde als in deel 1)

// Query voor het selecteren van een enkele rij met product_code = 1
$sql = "SELECT * FROM jouw_tabelnaam WHERE product_code = ?";

// Voorbereiden van de statement met een placeholder
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $productCode); // "i" geeft aan dat het een integer is

$productCode = 1; // De product_code die we willen selecteren

$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Uitvoeren van de data
    $row = $result->fetch_assoc();
    echo "Product: " . $row["product_naam"] . "<br>";
    echo "Prijs: " . $row["product_prijs"] . "<br>";
    echo "Voorraad: " . $row["product_voorraad"] . "<br>";
} else {
    echo "Geen resultaten gevonden.";
}

$stmt->close();
$conn->close();
?>
