
// Deel 1
$myArray = ['auto', 'fiets', 'brommer', 'bus', 'vliegtuig', 'trein'];

// a) Waarde toevoegen aan het array
$myArray[] = 'boot';

// b) Waarden van het array afdrukken
foreach ($myArray as $value) {
echo $value . "\n";
}

// Deel 2
$myArray = ['auto', 'fiets', 'brommer', 'bus', 'vliegtuig', 'trein'];

// Aantal elementen bepalen en afdrukken
$count = count($myArray);
echo "Het array heeft " . $count . " elementen.\n";

// Element toevoegen aan het array
$myArray[] = 'boot';

// Bijgewerkt aantal elementen afdrukken
$count = count($myArray);
echo "Het array heeft " . $count . " elementen.\n";



Regel 2: bar
Regel 5: print nummer 4
Regel 8: het print Toyota uit
Regel 9: Het print de alle auto's 
Regel 12: Het print nummer 5 uit 
Regel 19: Het telt van 5 naar 1 


<?php

$cijfersPHP = [4.4, 4.6, 5.6, 6.1, 7.6, 7.2];

// Bereken het gemiddelde door alle cijfers op te tellen en te delen door het aantal
$gemiddelde = round(array_sum($cijfersPHP) / count($cijfersPHP), 1);

echo "Gemiddelde is: " . $gemiddelde;

?>

Ik denk dat het beter is om de regels samen te voegen, omdat dit de code beknopter en overzichtelijker maakt.
Het gebruik van de round()-functie in combinatie met array_sum() en count() in één regel laat duidelijk zien dat het doel is om het 
gemiddelde met één decimaal af te ronden.



