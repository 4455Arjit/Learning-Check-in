<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Box Bro</title>
</head>
<body>
    <form action="type18_08.php" method="post">

        <input type="checkbox" name="k1[]" value="v1">Hehe 1<br>
        <input type="checkbox" name="k1[]" value="v2">Hehe 2<br>
        <input type="checkbox" name="k1[]" value="KAIOKENN  times 100">Hehe 6<br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){

        $kys=$_POST["k1"];
        foreach($kys as $ky){
            echo "{$ky}<br>";
        }
        //--------------------Use the block of code by removing the []'s of input names in the HTML code and replace them with k1 k2 or k3. 
    //     if(isset($_POST["k1"])){
    //         echo "You selected the K1 Option !<br>";
    //     }
    //     if(isset($_POST["k2"])){
    //         echo "You selected the K2 Option with V2 engine!<br>";
    //     }
    //     if(isset($_POST["k3"])){
    //         echo "You selected the KAIOKEN times 100 !!!Option !Dayyymmm!<br>";
    //     }
    //     else{
    //     echo "select Something dude!";
    // }
    }
?>