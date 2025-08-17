<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio</title>
</head>
<body>
    <form action="type5.php" method="POST">
        <input type="radio" name="onenonly_card" value="Credit">Credit Card -> DBZ
        <div></div>
        <input type="radio" name="onenonly_card" value="Debit">Debit Card -> DBK
        <div></div>
        <input type="radio" name="onenonly_card" value="Golden">Golden Card -> DBS
        <div></div>
        <input type="submit" name="confirm" value="Continue">
    </form>
</body>
</html>
<?php

    if(isset($_POST["confirm"])){

        $credit=null;
        if(isset($_POST["onenonly_card"])){
            
            $credit=$_POST['onenonly_card'];
        }
        if($credit=="Credit"){
            echo "You selected a Credit CARD !";
        }
        elseif($credit=="Debit"){
            echo "You selected a Debit CARD !";
        }
        elseif($credit=="Golden"){
            echo "You selected a Golden CARD !";
        }else{
            echo "You are POOR";
        }
    }
   







   /* if(isset($_POST["confirm"])){
        if(isset($_POST["onenonly_card"])){     //This one also Works ..try this too
            $credit=$_POST["onenonly_card"];
            echo "You selected {$credit} card! ";
        }else{
        echo "You continued without selecting any card";
        }
    }  */




    //Try this one also (this is separate):
    /*foreach($_POST as $key => $value){   //So the "name" and "value" written in the 
                    //input are referred to as KEY and VALUE here inthe LOOP
        echo "You have chosen the {$value} Card ";
    }*/
?>