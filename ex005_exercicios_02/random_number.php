<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h1><strong>Sorteie um número entre 0 e 100.</strong></h1>
    </header>
    <section>
        <?php 
            $rand_num = rand(0, 100);
            echo "$rand_num"
        ?>
    </section>
</body>
</html>

