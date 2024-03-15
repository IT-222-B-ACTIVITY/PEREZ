<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // heart star pattern
    $size = 6;
    
    for ($i = $size / 2; $i < $size; $i += 2) {
        // print first spaces
        for ($j = 1; $j < $size - $i; $j += 2) {
            echo "&nbsp;&nbsp;";
        }
        // print first stars
        for ($j = 1; $j < $i + 1; $j++) {
            echo "*";
        }
        // print second spaces
        for ($j = 1; $j < $size - $i + 1; $j++) {
            echo "&nbsp;&nbsp;";
        }
        // print second stars
        for ($j = 1; $j < $i + 1; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    // lower part
    // inverted pyramid
    for ($i = $size; $i > 0; $i--) {
        for ($j = 0; $j < $size - $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for ($j = 1; $j < $i * 2; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    echo "<br>";
?>
<?php
    // hollow square pattern
    $size = 10;
    for($i = 0; $i < $size; $i++) {
        // print column
        for($j = 0; $j < $size; $j++) {
            // print only star in first and last row
            if($i === 0 || $i === $size - 1) {
                echo "*";
            }
            else {
                // print star only in first and last position row
                if($j === 0 || $j === $size - 1) {
                    echo "*";
                }
                else {
                    // use &nbsp; for space
                    echo "&nbsp;&nbsp;";
                }
            }
        }
        echo "<br>";
    }
    echo "<br>";
?>


<?php

for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10 - $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 0; $j <= $i; $j++) {
        echo "*&nbsp;&nbsp;";
    }
    echo "<br>";
}
echo "<br>";
?>


<?php

for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= 20; $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";
?>


<?php

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";
?>
</body>
</html>