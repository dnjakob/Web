<?php
class Zeichenkette {
    public function umkehren() {
        return strrev("Hallo Welt!");
    }

    public function zaehlen() {
        return 'Die Anzahl der Zeichen beträgt: ' . strlen("Hallo Welt!");
    }

    public function finden() {
        return 'Ist der String "Welt" in "Hallo Welt!" enthalten: ' . strpos("Hallo Welt!", "Welt");
    }

    public function kleinUmwandeln() {
        return strtolower("RINDFLEISCHETTIKETIERUNGSUEBERWACHUNGSAUFGABENUEBERTRAGUNGSGESETZ");
    }

    public function ersetzen() {
        return str_replace("Hallo", "Morgen", "Hallo Welt!");
    }
}

echo "<h2>Aufgabe 1</h2>";

$ersteAufgabe = new Zeichenkette();
echo $ersteAufgabe -> umkehren();

echo "<h2>Aufgabe 2</h2>";
echo "<br>";

$zweiteAufgabe = new Zeichenkette();
echo $zweiteAufgabe -> zaehlen();

echo "<h2>Aufgabe 3</h2>";
echo "<br>";

$dritteAufgabe = new Zeichenkette();
echo $dritteAufgabe -> finden();

echo "<h2>Aufgabe 4</h2>";
echo "<br>";

$vierteAufgabe = new Zeichenkette();
echo $vierteAufgabe -> kleinUmwandeln();

echo "<h2>Aufgabe 5</h2>";
echo "<br>";

$fuenfteAufgabe = new Zeichenkette();
echo $fuenfteAufgabe -> ersetzen();

class Zahlen {
    public function addition($ersteZahl, $zweiteZahl) {
        return "$ersteZahl + $zweiteZahl = " . $ersteZahl + $zweiteZahl;
    }

    public function division($ersteZahl, $zweiteZahl) {
        return "$ersteZahl / $zweiteZahl = " . $ersteZahl / $zweiteZahl;
    }

    public function runden($zahl) {
        return "Die gerundete Zahl von $zahl lautet: " . round($zahl);
    }

    public function typUmwandlung($zahl) {
        return (int)$zahl;
    }

    public function berechnen($zahl1, $zahl2) {
        $antwortZahl = $zahl1 + $zahl2;
        return (int)$antwortZahl;
    }

}

echo "<h2>Aufgabe 1</h2>";
echo "<br>";

$aufgabe1 = new Zahlen();
echo $aufgabe1 -> addition(25, 10);

echo "<h2>Aufgabe 2</h2>";
echo "<br>";

$aufgabe2 = new Zahlen();
echo $aufgabe2 -> division(12.2, 2.4);

echo "<h2>Aufgabe 3</h2>";
echo "<br>";

$aufgabe3 = new Zahlen();
echo $aufgabe3 -> runden(7.71);

echo "<h2>Aufgabe 4</h2>";
echo "<br>";

$aufgabe4 = new Zahlen();
echo $aufgabe4 -> typUmwandlung(4.6);

echo "<h2>Aufgabe 5</h2>";
echo "<br>";

$aufgabe5 = new Zahlen();
echo $aufgabe5 -> berechnen(5.9, 3);

?>