<?php
$tijd = date('H:i'); // Haal de huidige tijd op

if ($tijd < '12:00') {
    echo "Goedemorgen";
} elseif ($tijd < '18:00') {
    echo "Goedemiddag";
} else {
    echo "Goedenavond";
}
?>

<?php
function berekenGemiddelde($getal1, $getal2) {
    $gemiddelde = ($getal1 + $getal2) / 2;
    echo "Het gemiddelde is: " . $gemiddelde;
}

berekenGemiddelde(4, 8); // Voorbeeldgebruik van de functie met getallen 4 en 8
?>


<?php
function resterendeDagen() {
    $huidigeDatum = date('Y-m-d');
    $eindeJaar = date('Y') . "-12-31";
    $resterendeDagen = (strtotime($eindeJaar) - strtotime($huidigeDatum)) / (60 * 60 * 24);
    echo "Er zijn nog " . $resterendeDagen . " dagen tot het einde van het jaar.";
}

resterendeDagen(); // Roep de functie aan om het aantal resterende dagen te berekenen
?>

<?php
function berekenTotaleLengte($strings) {
    $totaleLengte = 0;
    foreach ($strings as $string) {
        $totaleLengte += strlen($string);
    }
    return $totaleLengte;
}

$array = array("Hallo", "Wereld", "Dit", "is", "een", "test");
echo "Totale lengte: " . berekenTotaleLengte($array);
?>
