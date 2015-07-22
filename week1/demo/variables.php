<!DOCTYPE html>
<?php 
    $myvar = 'hello';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My page Title<?php echo$myvar; ?></title>
    </head>
    <body>
        <h1> 
            <?php
            $randNumber = rand(1,10); 
            echo'my number is '.$randNumber; 
            ?>
        </h1>
    </body>
</html>
