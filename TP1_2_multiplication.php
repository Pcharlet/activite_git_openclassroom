<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Multiplication</title>
    </head>

    <body>
        <?php
            //tp1 afficher une page web la table de multiplication de 7
            for($i=0;$i<11;$i++){
                echo '7 * '.$i.' = '.$i*7;  
                echo '<br>';
            }
            echo '<br>';


            //tp2 afficher les table de 1 a 10
            for($i=1;$i<11;$i++){
                for($j=0;$j<11;$j++){
                    echo $i.' * '.$j.' = '.$i*$j;
                    echo '<br>';
                }
                echo '<br>';
            }
        ?>
    
    
    </body>
</html>