<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resuktado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Processando esta merda</h1>
    </header>
    <main>
        <?php 
            $n = $_GET["nome"] ?? "sem nome";
            $s = $_GET["sobrenome"] ?? "desconhecido";

            echo "É um grande parzer te conhecer $n $s.";
        ?>
    </main>
</body>
</html>
