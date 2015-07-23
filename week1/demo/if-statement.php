<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $a = 0;
            $b = false;
            /*
             * Triple equals compares both value and type
             * double equals only comapres values
             *               
             */
            if($a === $b){
                echo 'A === B ';
            }
                echo '<br /> ';
                 if($a == $b){
                echo 'A == B ';
            }
            
        ?>
    </body>
</html>
