<?php
    $data_host="localhost";
    $data_user="dbuser_testacc";
    $data_pass="PHPserverpass";
    $database_name="php_test";

    $Err_or="Unable to connect to Database";
    $database_connection="";
    try{
        
        $database_connection=mysqli_connect($data_host,$data_user,$data_pass,$database_name);

    }catch(ErrorException){
        echo "{$Err_or}";
    }
    if($database_connection){
        echo "Connection Succeded ! ";
    }
?>