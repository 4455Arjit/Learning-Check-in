<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    The HOME: 
    <br>
    <a href="mainfile.php">Path to MAIN FILE</a><br>
    <form action="home.php" method="post">
        <input type="submit" name="Logout" value="LOGOUT">
    </form>
</body>
</html>
<?php
echo $_SESSION["username"]."<br>";
echo $_SESSION["passw"]."<br>";
if(isset($_POST["Logout"])){
    session_destroy();
    header("Location: MainFILE.php");
}
?>
