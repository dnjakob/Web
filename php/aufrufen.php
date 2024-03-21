<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abgesendetes Formular</title>
</head>

<body>
    <p>Hallo <?php echo $_GET["vorname"]; ?>
        <?php echo $_GET["name"]; ?>, herzlich willkommen auf unserer Homepage!</p>
    <p><b>Geburtsdatum:</b> <?php echo $_GET["datum"]; ?></p>
    <p><b>Adresse:</b></p>
    <p><?php echo $_GET["plz"]; ?>, <?php echo $_GET["ort"] ?></p>
    <p><?php echo $_GET["strasse"]; ?></p>
</body>

</html>