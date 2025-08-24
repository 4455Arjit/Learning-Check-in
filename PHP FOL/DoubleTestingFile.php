<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Test I did Myself</title>
</head>
<body><form action="My TestPHP.php" method="POST">

    <input type="radio" name="Card" value="Card1 A"> Card 1
    <br>
    <input type="radio" name="Card" value="Card2 B"> Card 2
    <br>
    <input type="radio" name="Card" value="Card3 C"> Card 3
    <br>
    <input type="radio" name="Card" value="Card4 D"> Card 4
    <br>
    <input type="radio" name="Card" value="Card5 E"> Card 5
    <br>
    <input type="radio" name="Card" value="Card6 F"> Card 6
    <br>
    <input type="radio" name="Card" value="Card7 G"> Card 7
    <br>
    <input type="submit" name="Submit" value="submit">
<?php

if($_SERVER["REQUEST_METHOD"]="POST"){

    if(isset($_POST["Submit"])){

        if(isset($_POST["Card"])){
            $card=$_POST["Card"];
            switch($card){
                case "Card1 A":
                    echo "You selected {$card} as said it is the First Card ..";
                    break;
                case "Card2 B":
                    echo "You selected {$card} as said it is the 2nd Card ..";
                    break;
                case "Card3 C":
                    echo "You selected {$card} as said it is the 3rd Card ..";
                    break;
                case "Card4 D":
                    echo "You selected {$card} as said it is the Demon Card ..";
                    break;
                case "Card5 E":
                    echo "You selected {$card} as said it is the 5th Card ..";
                    break;
                case "Card6 F":
                    echo "You selected {$card} as said it is the 6th Card ..";
                    break;
                case "Card7 G":
                    echo "You selected {$card} as said it is the Last Card from ANOTHER FILE NAMED<<< TYPE7.PHP>>..";
                    break;
            }
        }else {
            echo "Select a Card -> then proceed to Submit";
        }

    }
}
?>
</form>
<form action="type7.php" method="POST">

    <input type="radio" name="card" value="Card1 A"> Card 1
    <br>
    <input type="radio" name="card" value="Card2 B"> Card 2
    <br>
    <input type="radio" name="card" value="Card3 C"> Card 3
    <br>
    <input type="radio" name="card" value="Card4 D"> Card 4
    <br>
    <input type="radio" name="card" value="Card5 E"> Card 5
    <br>
    <input type="radio" name="card" value="Card6 F"> Card 6
    <br>
    <input type="radio" name="card" value="Card7 G"> Card 7
    <br>
    <input type="submit" name="SUBMIT" value="submit">

</form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]="POST"){

    if(isset($_POST["SUBMIT"])){

        if(isset($_POST["card"])){
            $card_test=$_POST["card"];
            switch($card_test){
                case "Card1 A":
                    echo "You selected {$card_test} as said it is the First Card ..";
                    break;
                case "Card2 B":
                    echo "You selected {$card_test} as said it is the 2nd Card ..";
                    break;
                case "Card3 C":
                    echo "You selected {$card_test} as said it is the 3rd Card ..";
                    break;
                case "Card4 D":
                    echo "You selected {$card_test} as said it is the Demon Card and it is from File named MyTESTPHP.php>>>..";
                    break;
                case "Card5 E":
                    echo "You selected {$card_test} as said it is the 5th Card ..";
                    break;
                case "Card6 F":
                    echo "You selected {$card_test} as said it is the 6th Card ..";
                    break;
                case "Card7 G":
                    echo "You selected {$card_test} as said it is the Last Card ..";
                    break;
            }
        }else {
            echo "Select a Card -> then proceed to Submit";
        }


    }
}
?>
