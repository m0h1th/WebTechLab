<!DOCTYPE html>
<html>
    <head>
        <title>Multiplication tables</title>
    </head>
    <body>
        <?php
            $y = 6;
            for ($x = 1; $x <=10; $x++)
            {
                echo $x." x ".$y." = ".($x*$y)."<br>";
            }
        ?>
    </body>
</html>