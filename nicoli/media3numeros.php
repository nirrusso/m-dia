<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3 numeros</title>
</head>
<body>
    <h1>MÉDIA DE 3 NÚMEROS</h1>

    <form action="mediaexibir3numeros.php" method="POST">
        <label for="num1">Primeiro número:</label>
        <input type="number" name="num1" id="num1" required><br><br>

        <label for="num2">Segundo número:</label>
        <input type="number" name="num2" id="num2" required><br><br>

        <label for="num3">Terceiro número:</label>
        <input type="number" name="num3" id="num3" required><br><br>

        <input type="submit" value="Calcular Média">
    </form>
</body>
</html>