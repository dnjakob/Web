<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4. Unterrichtsblock Taschenrechner</title>
</head>

<body>
    <form action="" method="post">
        <label for="zahl1">Zahl 1:</label>
        <input type="text" name="zahl1" id="zahl1"><br>
        <label for="zahl2">Zahl 2:</label>
        <input type="text" name="zahl2" id="zahl2"><br><br>
        <label for="operator">Operator:</label><br>
        <input type="radio" name="operator" id="+" checked>
        <label for="+">+</label><br>
        <input type="radio" name="operator" id="-">
        <label for="-">-</label><br>
        <input type="radio" name="operator" id="*">
        <label for="*">*</label><br>
        <input type="radio" name="operator" id="/">
        <label for="/">/</label><br><br>
        <input type="submit" value="Ausrechnen" name="submit"><br>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $zahl1 = $_POST["zahl1"];
        $zahl2 = $_POST["zahl2"];
        $operator = $_POST["operator"];

        switch ($operator) {
            case "+":
                echo (int)$zahl1 + $zahl2;
                break;
            case "-":
                echo $zahl1 - $zahl2;
                break;
            case "*":
                echo $zahl1 * $zahl2;
                break;
            case "/":
                echo $zahl1 / $zahl2;
                break;
        }
    }
    ?>
</body>

</html>