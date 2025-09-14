<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>maa taeesst</title>
</head>

<body>
    <form action="MaTestupgrade.php" method="post">
        <label for="inp1">Row 1 => ID
            <input type="number" name="u_in1" id="inp1">
        </label>
        <br>
        <label for="inp2">Row 2 => Name
            <input type="text" name="u_in2" id="inp2">
        </label>
        <br>
        <label for="inp3">Row 3 => Email
            <input type="text" name="u_in3" id="inp3">
        </label>
        <br>
        <input type="submit" name="Fill" value="Fill In!">
        <?php
        function inserting_values(&$i_d,&$R_nme,&$R_em)
        {
            $host = "localhost";
            $username = "dbuser_testacc";
            $pass = "PHPserverpass";
            $database = "dbl";
            $port = 3306;
            $db_connection = "";
            try {
                $db_connection = mysqli_connect($host, $username, $pass, $database, $port);
                if ($db_connection) {
                    echo "<br>Database Connection Succeed";
                }
            } catch (Error) {
                echo "Error happened.!";
            }
            if ($db_connection) {

                $sql_query = $db_connection->prepare("INSERT INTO dragon_2 (`sr_dragon`,`slayer`,`email`) VALUES(?,?,?)");
                $sql_query->bind_param("iss", $serial, $name, $email);
                $serial=$i_d;
                $name=$R_nme;
                $email=$R_em;
                if ($sql_query->execute()) {
                    echo "<br>Query Executed Successfully!";
                } else {
                    echo "Opssiee! query failed (x_x)";
                }
            }
        }
        ?>
    </form>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Row_ID = $_POST["u_in1"];
    $Row_name = $_POST["u_in2"];
    $Row_email = $_POST["u_in3"];
    $submit_button = $_POST["Fill"];
    if (isset($submit_button)) {
        if (empty($Row_ID && $Row_email && $Row_name)) {
            echo "<br>Some Box is empty: Therefore the Process is terminated! ";
        } else {
            echo "<br>You filled {$Row_ID} , {$Row_name}, {$Row_email}.";
            inserting_values($Row_ID,$Row_name,$Row_email);
        }
    }
}
?>