<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <table border = "1">
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
            </tr>
        </table>
        
<hr/> 

        <?php
            /*
             * Table Generator
           */
        ?>
        
        <table border = "1">   
                <?php
                    for ($tr = 1; $tr <= 3; $tr++):?>
                        <tr>
                           <?php for ($td = 1; $td <= 3; $td++) : ?>
                            <td> <?php echo $td; ?> </td>
                           <?php endfor; ?> 
                        </tr>
                <?php endfor; ?>   
        </table>      
    </body>
</html>
