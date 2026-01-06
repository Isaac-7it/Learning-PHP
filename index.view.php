<!DOCTYPE html>
<html>
    <head>
        <meta charset = 'UTF-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Project</title>
    </head>
    <body>
        <?php 
        require 'index.php';
        ?>
        <h1><?php echo $person['name'] . ' is a ' . $person['occupation'] . '. He is ' . $person['age'] . ' and his BMI is currently ' . $person['bmi'] ?></h1>
    </body>
</html>