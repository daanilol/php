<?php
    $name = "Danilo Lisboa";

    function my_name() 
    {
        global $name;
        echo "<p>My name is $name!</p>";
    }
    
    my_name();
?>
