<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Test I did Myself</title>
</head>
<body><form action="type7.php" method="POST">

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

</form>
</body>
</html>
<?php
//-----------------------------------------------------------------------------------------------------------------------------------------
// if ($_SERVER["REQUEST_METHOD"]="POST"){
    
//     if(isset($_POST["Submit"])){
       
//         if(isset($_POST["Card"])){
            
//             $card_selection=$_POST["Card"];
//             if($card_selection=="Card1 A"){
//                 echo "You just selected {$card_selection}";
//             }
//             elseif($card_selection=="Card2 B"){
//                 echo "You just selected {$card_selection} , nothing happened bro.";
//             }elseif($card_selection=="Card3 C"){
//                 echo "You just selected {$card_selection} , you're getting rich";
//             }elseif($card_selection=="Card4 D"){
//                 echo "You just selected {$card_selection} AND you got Super Skill+ Super saiyan form";
//             }elseif($card_selection=="Card5 E"){
//                 echo "You just selected {$card_selection} , You are not me";
//             }elseif($card_selection=="Card6 F"){
//                 echo "You just selected {$card_selection}, kuch ni hoga";
//             }elseif($card_selection=="Card7 G"){
//                 echo "You just selected {$card_selection}. Everything will be alright! ";
//             }
//         }
//         else{
//             echo "Select a Card Bro! ";
//         }
//     } //I DID IT >>>>FINALLYY...wohoooo
// }
//---------------------------------------------------------------------------------------------------------------------------------
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
                    echo "You selected {$card} as said it is the Demon Card and it is from File named <<<My TESTPHP.php >>>..";
                    break;
                case "Card5 E":
                    echo "You selected {$card} as said it is the 5th Card ..";
                    break;
                case "Card6 F":
                    echo "You selected {$card} as said it is the 6th Card ..";
                    break;
                case "Card7 G":
                    echo "You selected {$card} as said it is the Last Card ..";
                    break;
            }
        }else {
            echo "Select a Card -> then proceed to Submit";
        }


    }
}
?>