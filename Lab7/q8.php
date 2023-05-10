<!DOCTYPE html>
<html>
    <head>
        <title>Constants example</title>
    </head>
    <body>
        <?php
            define("PI", 3.14);
            define("GRAVITY", 9.81);
            $area = PI * 10 * 10;
            $force = GRAVITY * 100;
            echo $area."<br>";
            echo $force."<br>";
            define("PI", 3.14159);
            echo PI;
        ?>
    </body>
</html>
