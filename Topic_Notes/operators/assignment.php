<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment operators</title>
</head>
<body>
    <?php
    echo "<h1>Assignment operators</h1>";
    echo "<br>";
    $var2 = 100;
    echo "value of old variable is $var2 <br>";
    echo "1. = ";
    echo "<br>";
    $var1 = $var2; // = is an assignment operator
    echo "The value of new variable is ";
    echo $var2;
    echo "<br>";
    
    echo "2. += ";
    echo "<br>";
    $var2 += 5; // += is an assignment operator
    echo "The value of new variable is ";
    echo $var2;
    echo "<br>";

    echo "2. *= ";
    echo "<br>";
    $var2 *= 5; // += is an assignment operator
    echo "The value of new variable is ";
    echo $var2;
    echo "<br>";

    echo "2. /= ";
    echo "<br>";
    $var2 /= 2; // += is an assignment operator
    echo "The value of new variable is ";
    echo $var2;
    echo "<br>";
    ?>
</body>
</html>