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
            foreach ($numbers as $value) {
                echo $value."<br>";
            }
            echo "<br>String Array:<br>";
            foreach ($strings as $value) {
                echo $value."<br>";
            }
        ?>
    </body>
</html>
