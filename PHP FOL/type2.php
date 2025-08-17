<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="type2.php">
        <label for="arry">Part one of Array: </label>
        <input type="text" name="arry">
        <div>
            <input type="submit" value="SUBMIT">
        </div>
    </form>
</body>
</html>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $arr=$_POST["arry"];
        echo $arr." is written"."<br>";
        $food=array("ape","human","sappp","kaiju");
        foreach($food as $foods){
            echo $foods ."<br>";
        }
        //------------------------------------------------------------
        $self=array("a","b","c","d","E","f","g","h","i","j","k");
        echo $self[3];
        echo $self[2];
        var_dump($self);
        echo"------------------------------------------<br>";
        print_r($self);
        array_pop($self); //will remove the last element from the array
        array_shift($self); //first element will be removed(shifted).
        array_push($self," Im a Saiyan Warrior");
        $rev=array_reverse($self); //will reverse the array but you have to reassign
        foreach($rev as $me){
            echo $me."<br>";
        }

    }
        
        $self2=array("k1"=>"val1",
                        "k2"=>"val2",
                        "k3"=>"val3",
                        "k4"=>"val4");
                        $self2["k2"]="Kaioken";
                        echo "<br>";
                        print_r($self2);
                        $vls=array_values($self2);
                        echo "<br>";
                        print_r($vls);
                        $kyes=array_keys($self2);
                        echo "<br>";
                       print_r($kyes);

                       $self2=array_flip($self2); //to flip associative array keys => value and values=>keys..see below.
    foreach($self2 as $kys=>$vals){
        echo "{$kys}={$vals} <br>";
    }

    ?>