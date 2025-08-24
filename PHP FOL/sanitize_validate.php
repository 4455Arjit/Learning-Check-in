<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitize Validate</title>
</head>
<body>
    <form action="sanitize_validate.php" method="post">
        Username: <br>
        <input type="text" name="username"><br>
        AGE:
        <input type="text" name="age"><br>
        Email:
        <input type="email" name="Eadd"><br>

        <input type="submit" name="login" value= "LOGIN"><br>
    </form>

</body>
</html>
<?php
    if(isset($_POST["login"])){
        // $usrn=$_POST["username"];
        $usrn=filter_input(INPUT_POST,"username",
        FILTER_SANITIZE_SPECIAL_CHARS);
        $age=filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);
        $EmailAdd=filter_input(INPUT_POST,"Eadd",FILTER_SANITIZE_EMAIL);
        echo "Heloooo baawe {$usrn}";
        echo "Heloooo baawe {$age}";
        echo "Heloooo baawe {$EmailAdd}";
        echo "Now it is VALIDATION PART!!";
        $em=filter_input(INPUT_POST,"Eadd",FILTER_VALIDATE_EMAIL);
        $ag=filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);
        
    }
?>