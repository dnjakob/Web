<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4. Unterrichtsblock</title>
</head>

<body>
    <form action="" method="post">
        <label for="farben">Wählen Sie eine Farbe aus:</label>
        <select name="farben" id="farben">
            <option value="" selected disabled hidden>Auswählen</option>
            <option value="rot">rot</option>
            <option value="blau">blau</option>
            <option value="grün">grün</option>
            <option value="lila">lila</option>
        </select>
        <input type="submit" value="Einreichen" name="submit"><br>
    </form>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $lieblingsfarbe = $_POST["farben"];

        switch ($lieblingsfarbe) {
            case "rot":
                echo "Die Lieblingsfarbe ist rot.";
                break;
            case "blau":
                echo "Die Lieblingsfarbe ist blau.";
                break;
            case "grün":
                echo "Die Lieblingsfarbe ist grün.";
                break;
            default:
                echo "Die Lieblingsfarbe ist weder rot, blau oder grün.";
                break;
        }
    }
    ?>
</body>

</html>