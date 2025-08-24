<?php


$db_server="localhost";
$db_user="root";
$db_pass="";
$db_name="powerdb";
$db_Connection="";
try{
    $db_Connection=mysqli_connect($db_server,$db_user,$db_pass,$db_name);

}catch(Error){
    echo "An error occured while we were connecting !";
}
if($db_Connection){
    echo "Database Connected!!<br>";
}
?>