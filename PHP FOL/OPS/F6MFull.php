<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>
<body>
    Check it out: 
    <br>
</body>
</html>
<?php

$hostname="localhost";
$username="root";
$pass="";
$database="php_test";
$port=3306;
try{
    $connection=new mysqli($hostname,$username,$pass,$database,$port);
    if($connection){
        echo "The connection matched the Power Level.";
    }else{
        die("Connection Overpowered! " . $connection->connect_error);
    }
}
catch(Error){
    echo "There's an error";
}
if($connection){
    // $sql="CREATE DATABASE dbl";
    // $sql="USE dbl";
    // $sql="CREATE TABLE Dragon(
    // id int(10) auto_increment primary key,
    // first_n char(20),
    // email varchar(25)
    // )";
    $sql="INSERT INTO Dragon VALUES('5','Yujiro','hanmaYujiro@baki.com')";
    if($connection->query($sql)===TRUE){
        $last_id=$connection->insert_id;
        // echo "Database Created dammnit!!";
        // echo "Table Created dammnit!!";
        // echo "values inserted dammnit!!";
        echo "values inserted dammnit!! . The Last inserted ID :" . $last_id;
    }else{
        echo "You are Under arrested.";
    }
}
$connection->close();


?>