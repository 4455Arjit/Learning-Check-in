<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Test</title>
</head>
<body>
    <form action="clastest.php" method="post">
        <h4>Type a number here: </h4>
        <input type="number" name="inpn1"><br>
        <h4>Type another number here: </h4>
        <input type="number" name="inpn2"><br>
        <input type="submit" name="submission">
    </form>
</body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["submission"])){
            $n1=$_POST["inpn1"];
            $n2=$_POST["inpn2"];
            $sum=$n1+$n2;
            $mul=$n1*$n2;
            $sub=$n1-$n2;
            $div=$n1/$n2;
            echo "The sum is {$sum} <br>";
            echo "The Multiplication is {$mul}<br>";
            echo "The subtraction is {$sub}<br>";
            echo "The Division is {$div}<br>";
        }
        else{
            echo "Enter numbers -> then proceed to Submit";
        }
    }

?>