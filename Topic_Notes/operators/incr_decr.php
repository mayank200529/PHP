<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Increment/Decrement Operators</title>
</head>
<body>
    <?php
    echo "<h1> Increment/Decrement Operators <br></h1>";
    $v1 = 5;
    echo "Initial value of variable is $v1<br>";
    echo "$v1++  =  "; 
    echo $v1++; 
    echo "<br>Now , value of variable is $v1<br>";
echo "$v1--  =  "; 
    echo $v1--; 
    echo "<br>Now , value of variable is $v1<br>";
echo "++$v1  =  "; 
    echo ++$v1; 
    echo "<br>Now , value of variable is $v1<br>";
echo "--$v1  =  "; 
    echo --$v1; 
    echo "<br>Now , value of variable is $v1<br>";

    ?>
</body>
</html>