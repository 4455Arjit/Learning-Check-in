<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle</title>
</head>
<body>
    <form action="calcpi.php" method="POST">
    <label for="inp1">Enter the Radius in CM: </label>
    <input type="number" name="inp1">
    <input type="submit" value="SUBMIT">
    </form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $inp1=$_POST['inp1'];
    $result=2*3.14*$inp1;
    $volume=(4/3)*3.14*pow($inp1,3);
    echo "The circumference of Circle is : $result centimeter"."<br>";
    echo "The volume of the circle is : $volume Centimeter cube";
    if($inp1<100){
        echo"<br>";
        for($lop=1;$lop<=$inp1;$lop++){
            echo "$lop"."<br>";
        }
    }
    elseif($inp1>1000){
        $vol=array($volume , "here","is","the","array");
        echo "Here is the array ".$vol;    //Trying to fix in other File.
        echo $vol[0] . "Accessed by Index";

    }
    else{
        echo"<br>";
        $looop=0;
        while($looop<$result){
            $looop++;
            echo "$looop"."<br>";
        }
    }
}
?>