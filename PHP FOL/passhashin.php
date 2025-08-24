<?php
    $pass="powerup99999";
    $hash=password_hash($pass,PASSWORD_DEFAULT);
    if(password_verify("powerup99999",$hash)){ //Will verify the pass value with the hashed one.
        echo "Logged iNNNN!!";
    }
    else{
        echo "Pagal password!";
    }
?>