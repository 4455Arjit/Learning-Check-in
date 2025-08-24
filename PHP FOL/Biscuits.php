<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cooking my cookies</title>
</head>
<body>
    
</body>
</html>
<?php
    setcookie("fav_power","kaioken",time()-0,"/"); //Cookie is DEAD now...cuz "time-0"
    setcookie("fav_aura","Blue",time()-0,"/"); //24 hours(86400seconds) * 4 = 4 days)
    setcookie("fav_energy","Saiyan",time()+(86400 * 3),"/");

    foreach($_COOKIE as $key =>$val){
        echo "{$key}= {$val}<br>";
    }
    if(isset($_COOKIE["fav_aura"])){
        echo" Buy {$_COOKIE["fav_aura"]} AURA from the body!! ";
    }else{
        echo "Breh ? where's the type??";
    }
?>