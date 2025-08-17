<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP code</title>
</head>
<body>
    <?php
   // phpinfo(); //Displays all php information
    echo "bye Earth ! , Hello Jupiter and Mars<br>";
    $a=23;
    $b=34;
    $sum=$a+$b;
    $mult=$a*$b;
    $div=$a/$b;
    $rem=$a%$b;
    $sub=$a-$b;
    echo "Sum is {$sum} and this is escape sequence incase you're using any symbol : \${$sum} Money<br>";
    
    echo "multiplication: {$mult}<br>";
    echo "div: {$div}<br>";
    echo "Remainder is {$rem}<br>";
    echo "Subtraction : {$sub}<br>";
?>

</body>
</html>