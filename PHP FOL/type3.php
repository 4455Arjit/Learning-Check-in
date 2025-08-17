<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opssiee</title>
</head>

<body>
    <p>Choose from : k1 , k2, k3 , k4 ,,and write in the input box.</p>
    <form action="type3.php" method="POST">
        <label for="inp1">Enter Value of Input: </label>
        <input type="text" name="inp1">
        <input type="submit" name="Login" value="LOG IN">
    </form>
</body>

</html>
<?php
$kess = array(
    "k1" => "val1",
    "k2" => "val2",
    "k3" => "val3",
    "k4" => "val4",
    "japan" => "Tokyo",
    "India" => "pata nai",
    "pata nai" => "India",
    "GTA" => "six"
);
$caps = $kess[$_POST["inp1"]];  //countries[index as input] -> input filled -> searched for value: if found=Value ,else "Array error".
echo "The Value of " . $_POST['inp1'] . " is $caps";
?>