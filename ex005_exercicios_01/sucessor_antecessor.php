
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Resultado</h1>
    </header>
    <section>
    <form action="cad.php" method="get">
        <?php 
            $numero_principal = $_GET["numero"];
            $numero_sucessor = $numero_principal + 1;
            $numero_antecessor = $numero_principal - 1;        
        
            echo "<strong>O número escolhido foi:</strong> $numero_principal<br><br>
                    Sucessor: $numero_sucessor <br>Antecessor: $numero_antecessor"
        ?>
    </form>
    </section>
</body>
</html>
