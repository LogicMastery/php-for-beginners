<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionals And Booleans</title>
</head>
<body>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>

    <?php
    $name = "Dark Matter";
    $read = true;
    ?>
    <h1>
        You have read "<?php if ($name != $read){
            echo $name; 
        } else{
            echo "nothing";
        }
        ?>."
    </h1>
    
</body>
</html>