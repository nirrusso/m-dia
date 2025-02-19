<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3 Números</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .centralizado {
            text-align: center;
        }

    </style>
</head>
<body>

    <div class="container">


    <p style="margin-top: 25px; margin-right: 10px; margin-bottom: 20px; margin-left: 10px;">
        <header>
        <h3 class="text-center text-white bg-danger">MÉDIA 3 NÚMEROS</h3>
        </header>
        <p style="margin-top: 20px; margin-right: 10px; margin-bottom: 20px; margin-left: 10px;">
        <div class="centralizado">
            <form action="mediaexibir3numeros.php" method="POST">
                <label for="num1">Primeiro número:</label>
                <input type="number" name="num1" id="num1" required><br><br>

                <label for="num2">Segundo número:</label>
                <input type="number" name="num2" id="num2" required><br><br>

                <label for="num3">Terceiro número:</label>
                <input type="number" name="num3" id="num3" required><br><br>

                <input type="submit" value="CALCULAR MÉDIA">
            </form>
        </div>
        </p>

    </div>

</body>
</html>
