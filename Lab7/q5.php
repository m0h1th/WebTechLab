<!DOCTYPE html>
<html>
    <head>
        <title>Array example</title>
    </head>
    <body>
        <?php
            $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
            $strings = array("apple", "banana", "cherry", "date", "elderberry", "fig", "grape", "honeydew", "kiwi", "lemon");

            echo "Numerical Array:<br>";
            for ($i = 0; $i < count($numbers); $i++) {
                echo $numbers[$i] . "<br>";
            }
            echo "<br>String Array:<br>";
            for ($i = 0; $i < count($strings); $i++) {
                echo $strings[$i] . "<br>";
            }
        ?>
    </body>
</html>
