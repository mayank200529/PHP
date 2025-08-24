<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Operators in php
    /* Types - Arthimetic operators
               Comparision operators 
               Asignment operators
               Increment/decrement operators
               Logical operators */
    
    echo "Arthimatic operators:-";
    echo "<br>";
    $var1 = 100;
    echo "First no is - $var1"; 
    echo "<br>" ;
    $var2 = 20;
    echo "Second no is - $var2"; 
    echo "<br>" ;
    $sum = $var1 + $var2;
    $subtract = $var1 - $var2;
    $multiply = $var1 * $var2;
    $devide = $var1 / $var2;
    $modulus = $var1 % $var2;
    // $exponential = $var1 ** $var2;

    echo "$var1 + $var2 = $sum";
    echo "<br>";
    echo "$var1 - $var2 = $subtract";
    echo "<br>";
    echo "$var1 * $var2 = $multiply";
    echo "<br>";
    echo "$var1 / $var2 = $devide";
    echo "<br>";
    echo "$var1 % $var2 = $modulus";
    echo "<br>";
    // echo "$var1 ** $var2 = $exponential";
    ?>
</body>
</html>