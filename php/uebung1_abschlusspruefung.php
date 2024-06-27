<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>PHP Prüfung</title>
</head>

<body>
    <h1>Willkommen zur PHP Aufgabe</h1>
    <p><?php $obererText = "Dieser Text wird von PHP generiert.";
        if (isset($_POST['aenderButton'])) {
            $obererText = "Der Text wurde geändert!";
        };
        echo $obererText; ?></p>

    <form method="post">
        <button type="submit" name="aenderButton">Text ändern</button>
        <button type="submit" name="neuerButton">Neuer Text</button> <!-- Button für die neue Funktion -->
    </form>

    <?php
    // Funktion für neuen Paragraphen
    if (isset($_POST['neuerButton'])) {
        echo "<p>Neuer Paragraph hinzugefügt!</p>";
    }
    ?>
</body>

</html>