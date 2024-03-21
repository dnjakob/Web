<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abgesendetes Formular</title>
</head>

<body>
    <p>Hallo <?php echo $_POST["vorname"]; ?>
        <?php echo $_POST["name"]; ?>, herzlich willkommen auf unserer Homepage!</p>
    <p><b>Geburtsdatum:</b> <?php echo $_POST["datum"]; ?></p>
    <p><b>Adresse:</b></p>
    <p><?php echo $_POST["plz"]; ?>, <?php echo $_POST["ort"] ?></p>
    <p><?php echo $_POST["strasse"]; ?></p>
</body>

</html>