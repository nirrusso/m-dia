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
        <h3 class="text-center text-white bg-danger">A MÉDIA DOS 3 NÚMEROS</h3>
        </header>
        <p style="margin-top: 20px; margin-right: 10px; margin-bottom: 20px; margin-left: 10px;">
        <div class="centralizado">
        <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        
        $media = ($num1 + $num2 + $num3) / 3;

        
        echo "<h2>A média dos números é: " . number_format($media, 2) . "</h2>";
    } else {
        
        echo "<p>Por favor, preencha todos os campos do formulário.</p>";
    }
    ?>

    <br>
    <a href="media3numeros.php">Voltar ao formulário</a>
            </form>
        </div>
        </p>

    </div>

</body>
</html>