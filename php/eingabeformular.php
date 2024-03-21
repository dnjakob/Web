<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eingabeformular</title>
</head>

<body>
  <h1>Eingabeformular</h1>
  <form action="absenden.php" method="POST">
    <label for="name">Name</label><br>
    <input type="text" id="name" name="name"><br><br>
    <label for="vorname">Vorname</label><br>
    <input type="text" id="vorname" name="vorname"><br><br>
    <label for="datum">Geburtsdatum</label><br>
    <input type="date" id="datum" name="datum"><br><br>
    <label for="plz">PLZ</label><br>
    <input type="text" id="plz" name="plz"><br><br>
    <label for="ort">Ort</label><br>
    <input type="text" id="ort" name="ort"><br><br>
    <label for="strasse">Straße/Hausnummer</label><br>
    <input type="text" id="strasse" name="strasse"><br><br>
    <input type="submit" value="Einreichen">
  </form>
</body>

</html>