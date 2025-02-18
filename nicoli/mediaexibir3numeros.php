<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>a media</title>
</head>
<body>
   <h1>A MÉDIA</h1> 
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
</body>
</html>