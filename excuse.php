<?php
// Pfad zur Excuse-Datei
$dateipfad = 'BOFH-Excuses.txt';

// Überprüfen, ob die Datei existiert und lesbar ist
if (is_readable($dateipfad)) {
    // Datei in ein Array einlesen, jede Zeile wird zu einem Array-Element
    $excuses = file($dateipfad, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    // Überprüfen, ob das Array nicht leer ist
    if (!empty($excuses)) {
        // Zufälligen Index auswählen
        $zufallsindex = array_rand($excuses);

        // Zufälligen Excuse ausgeben
        echo $excuses[$zufallsindex];
    } else {
        echo 'Die Excuse-Liste ist leer.';
    }
} else {
    echo 'Die Datei ist nicht lesbar oder existiert nicht.';
}
?>
