<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Box Bro</title>
</head>
<body>
    <form action="Thetestedone.php" method="POST">

    <input type="checkbox" name="pata_nai" value="kuch b">Hehe 1
    <input type="checkbox" name="pata_nai1" value="kuch b ni">Hehe 2
    <input type="checkbox" name="pata_nai2" value="kuch b ni hua">Hehe 3
    <input type="checkbox" name="pata_nai3" value="kuch b ni pata nai">Hehe 4
    <input type="checkbox" name="pata_nai4" value="kuch b ni ....aaa">Hehe 15
    <input type="checkbox" name="pata_nai5" value="aaaaaaaaa">Hehe 5
    <input type="checkbox" name="pata_nai6" value="KAIOKENN  times 100">Hehe 6
    <input type="submit" name="Submit" value= "SUBMIT" >
</form>
</body>
<!-- jskd@#d473hj -> CAPGEMINI -->
</html>
<?php

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        // print_r($_POST);
        if(isset($_POST["Submit"])){
            if(isset($_POST["pata_nai"])){
                echo "Value inside is {$_POST["pata_nai"]}<br>";
            }
            if(isset($_POST["pata_nai1"])){
                echo "Value inside is {$_POST["pata_nai1"]}<br>";
            }
            if(isset($_POST["pata_nai2"])){
                echo "Value inside is {$_POST["pata_nai2"]}<br>";
            }
            if(isset($_POST["pata_nai3"])){
                echo "Value inside is {$_POST["pata_nai3"]}<br>";
            }
            if(isset($_POST["pata_nai4"])){
                echo "Value inside is {$_POST["pata_nai4"]}<br>";
            }
            if(isset($_POST["pata_nai5"])){
                echo "Value inside is {$_POST["pata_nai5"]}<br>";
            }
            if(isset($_POST["pata_nai6"])){
                echo "Value inside is {$_POST["pata_nai6"]}<br>";
            } 
       }
    }
    
?>