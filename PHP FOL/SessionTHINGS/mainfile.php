<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-></title>
</head>
<body>
    <form action="mainfile.php" method="post">

        <h4>Username: </h4>
        <input type="text" name="username"><br>
        <h4>Password: </h4>
    <input type="password" name="passw"><br>
    <input type="submit" name="LOGIN">
    <a href="home.php">HOME PAGE LINK -FIREEE!!!!!</a>
</form>
</body>
</html>
<?php
echo "<br>";
if($_SERVER["REQUEST_METHOD"]=="POST"){
  if(isset($_POST["LOGIN"])){
    if(isset($_POST["username"]) && isset($_POST["passw"])){

        $_SESSION["username"]=$_POST["username"];
        $_SESSION["passw"]=$_POST["passw"];

        echo $_SESSION["username"]."<br>";
        echo $_SESSION["passw"]."<br>";
        header("Location: home.php");
    }
    else{
        echo "Some dudes are missin from the baxeezz..";
}


}
// $_SESSION["username"]="UltraMeU";
// $_SESSION["passw"]="UltraMeP";
}
?>