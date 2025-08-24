<?php
include("interaction.php");
$sql_que="INSERT INTO pokemons (name,power) VALUES
('Squirtle','waterJet')";
try{
   mysqli_query($database_connection,$sql_que);
   echo "User Registered";
}catch(mysqli_sql_exception){
    echo "breh you cooked!!";
}

mysqli_close($database_connection);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Display from the Server</title>
</head>
<body>
    
</body>
</html>