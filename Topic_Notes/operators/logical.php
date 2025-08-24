<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Operators</title>
</head>
<body>
    <?php
    echo "<h1> Logical Operators </h1> <br>";
    echo "Types-<br>";
    echo "1. and (&&) <br>";
    echo "2. or (||) <br>";
    echo "3. xor <br>";
    echo "4. ! <br>";

    echo "<br>$ var = (true and true) will give  ";
    $var = (true and true);
    echo var_dump($var);
    echo "<br>$ var = (true and false) will give  ";
    $var = (true and false);
    echo var_dump($var);
    echo "<br>$ var = (true or true) will give  ";
    $var = (true or true);
    echo var_dump($var);
    echo "<br>$ var = (true or false) will give  ";
    $var = (true or false);
    echo var_dump($var);
    echo "<br>$ var = (true xor true) will give  ";
    $var = (true xor true);
    echo var_dump($var);
    echo "<br>$ var = (true xor false) will give  ";
    $var = (true xor false);
    echo var_dump($var);


    
    
    ?>
</body>
</html>