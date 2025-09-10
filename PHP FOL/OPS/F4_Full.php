<?php
// readfile("F1Full.php");
namespace F4_Full;
session_start();
//If you open F3_Full.php file first and then after it ->open the F4_Full.php file ..-> 
//you'll see that Session brings the value of "PowerInside" variable to the F4_Full.php from the F3_Full.php..

// include("F3_Full.php");
function namespa_test($onw,$tww){
        echo "{$onw} and {$tww}";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set a cookie</title>
</head>
<body>
    <form method="post" action="F4_Full.php">
        Type your Name: 
        <input type="text" name="na_me">
<input type="submit" name="sub_mit">
    </form>
    <?php
    if(isset($_POST['sub_mit'])){
       $name=$_POST["na_me"];
       echo "The Name is $name";
       setcookie("User_name",$name,time()+(400*2),"/");
       echo "The Name is Set as a cookie.";
    }
    echo $_SESSION["PowerInside"];
    print_r($_SESSION);
    ?>
    <br>
    <input type="submit" value="LOGOUT">
</body>
</html>
<?php
if(isset($_POST["LOGOUT"])){
    session_destroy();
}

?>