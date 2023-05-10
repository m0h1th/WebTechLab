<!DOCTYPE html>
<html>
    <head>
        <title>Array example</title>
    </head>
    <body>
        <?php
            $a = "The first string";
            $b = "The second string";
            echo "Lengths: ".strlen($a).", ".strlen($b);
            echo "<br>Equals: ".strcmp($a, $b);
            echo "<br>Last four: ".substr($a,-4).", ".substr($b,-4);
        ?>
    </body>
</html>
