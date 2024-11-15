<?php

printf(
    "Wenn sie Files öffnen wollen, dann verwenden sie folgende Befehle:\n" .
    "copy kopiert Dateien, unlink löscht eine Datei, fopen und fclose öffnen und schliessen Dateien.\n" .
    "Falls sie auf- und/oder abrunden wollen, benutzen sie die Befehle ceil(\$number) und floor(\$number).\n" .
    "Um zu runden, verwenden sie round(\$zahl, \$praezision). \$zahl ist die Zahl, und \$praezision ist die Präzision.\n"
);

// Benutzerdefinierte Funktionen für Rechenoperationen
function addieren($a, $b)
{
    return $a + $b;
}

function subtrahieren($a, $b)
{
    return $a - $b;
}

function multiplizieren($a, $b)
{
    return $a * $b;
}

function dividieren($a, $b)
{
    if ($b == 0) {
        return "Division durch null ist unmöglich.";
    }
    return $a / $b;
}

// Funktion für den Textfilter
function filterText($text)
{
    $schimpfwoerter = ["/Mist/", "/dumm/", "/blöd/"];
    $ersetzen = "******";
    return preg_replace($schimpfwoerter, $ersetzen, $text);
}

// Eingaben und Text verarbeiten
$zal1 = filterText(readline("Bitte geben Sie die erste Zahl ein, falls sie den Rechner benutzen möchten: "));
$zal2 = filterText(readline("Bitte geben Sie die zweite Zahl ein: "));

// Rechenoperation wählen
echo filterText("Welche Rechenoperation möchten Sie ausführen?\n");
echo filterText("1: Addieren\n");
echo filterText("2: Subtrahieren\n");
echo filterText("3: Multiplizieren\n");
echo filterText("4: Dividieren\n");

$operation = filterText(readline("Bitte geben Sie die Nummer der Operation ein: "));

// Ergebnis berechnen
$ergebnis = null;

switch ($operation) {
    case '1':
        $ergebnis = addieren((float)$zal1, (float)$zal2);
        break;
    case '2':
        $ergebnis = subtrahieren((float)$zal1, (float)$zal2);
        break;
    case '3':
        $ergebnis = multiplizieren((float)$zal1, (float)$zal2);
        break;
    case '4':
        $ergebnis = dividieren((float)$zal1, (float)$zal2);
        break;
    default:
        echo filterText("Ungültige Auswahl. Bitte starten Sie das Programm erneut.\n");
        exit;
}

// Ergebnis anzeigen
echo filterText("Das Ergebnis ist: $ergebnis\n");

// Beispieltext und Schimpfwortprüfung
$text = "Das gehört sich aber nicht.... Mist!";
$gefiltert = filterText($text);

// Überprüfen, ob Schimpfwörter ersetzt wurden
if ($text !== $gefiltert) {
    echo $gefiltert . "\n";
}
