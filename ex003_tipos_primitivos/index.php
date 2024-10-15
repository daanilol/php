<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
</head>
<body>
    <h1>Tipos primitivos</h1>
    <?php 

        $lastName = "Lisboa";
        $age = 31;
        $weight = 110.3;
        $married = true;


        function printMessage() 
        {
            global $lastName, $age, $weight, $married;
            echo "<br><b>$lastName, $age, $weight, $married</b></br>\n";
        }

        printMessage();

        var_dump($lastName, $age, $weight, $married);
    ?>
</body>
</html>
