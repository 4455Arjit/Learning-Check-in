<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$name=$email=$website="";
$nameerror=$emailerror=$websiteerror="";
function test_input($userdata){
    $userdata=trim($userdata);
    $userdata=stripslashes($userdata);
    $userdata=htmlspecialchars($userdata);
    return $userdata;
}
if($_SERVER["REQUEST_METHOD"]="POST"){
    if(empty($_POST['name'])){
        $nameerror="Fill your name !";
    }else{
        $name=test_input($_POST["name"]);
    }
    if(empty($_POST['email'])){
        $emailerror="Fill in your Email. ";
    }else{
        $email=test_input($_POST['email']);
    }
    if(empty($_POST['website'])){
        $websiteerror="Enter your Website address";
    }else{
        $website=test_input($_POST['website']);
    }
}
$_SESSION["PowerInside"]="Above 9999999";
?>
   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name" value="<?php echo $name; ?>">
    <span class="error">* <?php echo $nameerror; ?></span>
    <br>
    Email: <input type="text" name="email">
    <span class="error">* <?php echo $emailerror; ?></span>
    <br>
    Website: <input type="text" name="website">
    <span class="error">* <?php echo $websiteerror; ?>
    <br>
    <input type="submit" name="submit" value="SUBMIT">
   </form> 
    
<?php 
echo "<br>Your Inputs: ";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
?>
</body>
</html>