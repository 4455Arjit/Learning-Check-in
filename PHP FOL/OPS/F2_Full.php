<?php
echo 'The PHP superglobal variables are:

$GLOBALS,
$_SERVER,
$_REQUEST,
$_POST,
$_GET,
$_FILES,
$_ENV,
$_COOKIE,
$_SESSION' ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple one</title>
</head>
<body>
    <form action="F2_Full.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
    Welcome <?php echo $_POST["name"];?>,<br>
    Your Email is :<?php echo $_POST["email"];?>

    
</body>
</html>