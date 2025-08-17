<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="Newfile.php" method="POST">
        <div>
            <label for="inp1">Input 1 : </label>
        </div>
        <div>
            <input type="number" name="inp1">
        </div>
        <div>
            <label for="inp2">Input 2 : </label>
        </div>
        <input type="number" name="inp2">
        <div>
            <label for="inp3">Amount of protein you need in Grams: </label>
        </div>
        <input type="text" name="inp3">
        <div>
            <label for="inp4">Add items here: </label>
        </div>
        <input type="text" name=inp4>
        
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>
</body>

</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $num1 = $_POST["inp1"];
    $num2 = $_POST["inp2"];
    $sum = $num1 + $num2;
    $protein = $_POST['inp3'];
    $items = $_POST['inp4'];
    echo "The Sum is : $sum "."<br>";
    echo "The amount of Protein is : $protein"."<br>";
    echo "Items in your cart : $items"."<br>";

}
?>