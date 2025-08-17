<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="type4.php">
        <div>
            <label for="usrn">Username: </label>
            <input type="text" name="usrn_1" id="username">
        </div>
        <div>

            <label for="pass">Password: </label>
            <input type="password" name="pass_2">
        </div>
        <input type="submit" name="login" value="Log In">
    </form>
</body>
</html>
<?php
   /* foreach($_POST as $kyoe => $value){  //=> POST is a SUPER GLOBAL VARIABLE which can access values as KEY VALUE PAIRS. like in this loop
        */
    if(isset($_POST["login"])){
        // echo "Login Successful";
        $usrn_1=$_POST["usrn_1"];
        $pass_2=$_POST["pass_2"];
        if(empty($usrn_1) && empty($pass_2)){
            echo "Both fields are dead dude=> make 'em alive";
        }
        elseif (empty($usrn_1)){
            echo "Enter Username !";

        }
        elseif(empty($pass_2)){
            echo "bro Password? did you forget it or something?";
        }
        else{
            echo "LOGGED in as [ {$usrn_1} ]!!!!!!!!!!! woooh  hhhooooo";
        }
    }
?>
