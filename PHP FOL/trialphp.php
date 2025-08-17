<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try it</title>
</head>
<body>
    <form action="trialphp.php" method="post">
        <label for="usrnme">Username : </label>
        <input type="text" name="usrnme">
        <label for="pass">Your Password : </label>
        <input type="password" name="pass">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
    <?php
    echo "{$_POST["usrnme"]}<br>";
    echo "{$_POST["pass"]}<br>";
    ?>