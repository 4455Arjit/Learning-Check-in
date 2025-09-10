<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File 1 STE</title>
</head>
<body>
    comments using <!- -  - -> .
    use a $ to set variable : like : -> $a=4395; ..
    use echo to display anything
    Data Types are all same as learnt in js..: str,int,float,boolean,array,objects too man...,NULL, RESOURCE-> Not an actual datatype(its a storing of a reference to functions and resources external to php...IDK)
    
</body>
</html>

<?php
$st="Destroy Earth";
echo "<br>Length using strlen: ". strlen($st);

echo "<br>Number of words using str_word_count: ". str_word_count($st);
echo "<br>Position of Words using strpos: ". strpos($st,"Earth");
echo "<br>To Upper case using strtoupper: ". strtoupper($st);
echo "<br>To Lower case using strtolower: ". strtolower($st);
echo "<br>To replace string using str_replace: " . str_replace("Destroy","Erase",$st);
echo "<br>To reverse a string using strrev: " . strrev($st);
echo "<br>To remove any WhiteSpace from string using trim: " . trim($st);
echo "<br>Returns the string as an array with index numbers shown : " ;
$newst=explode(" ",$st);
print_r($newst);
echo "<br>slice a string with 'substr': " . substr($st,4,6) . " " .substr($st,5);
echo "<br>";
var_dump($st);
echo "<br> To convert one datatype to another if it is convertible: just use do it like this(spaces are used by me in case php wont take them as variables): <br> $ a = (int) $ a; just change the datatype in place of 'int' "; 
echo "<br> to make a CONSTANT...use define.. like ";
define("VAR_NAME_IN_CAPITAL","value of the constant");
echo "<br>";
echo VAR_NAME_IN_CAPITAL . "<==The value inside the constant VAR_NAME_IN_CAPITAL";
echo "<br>or i can use the const keyword also like js.but define is good as it offers more functionality than const..so use the 'define' method.  <br>";
const MYCAR= "GoSweez";
echo MYCAR;
$n=70;
if($n<50){
    echo "<br>The number is below";
}elseif($n>50 && $n<60){
    echo "<br>The number is above 50 and below 60";
}else{
    echo "<br>The number is above range.";
}
$res=$n<40? "<br>hi" : "<br>Bye";
echo $res;
$k="hi";
switch($k){
    case "hi":
        echo "<br>its a hi";
        break;
    case "Bye":
        echo "<br>Its a Bye";
        break;
    default:
    echo "<br>I dont know";
}   
$loop=9;
while($loop<40){
    $loop++;
    if($loop==30){
        echo "Here's the place of 30 ..we stopped it";
        break;
    }
    echo '<br>' . $loop;
}
$looop=20;
while($looop<40){
    $looop++;
    if($looop==30){
        echo "Here's the place of 30 ..we skipped it";
        continue;
    }
    echo '<br>' . $looop;
}
$lup=20;
echo "<br>here the do while doing his work below";
do{
    echo "<br>$lup";
    $lup++;
}while($lup<30);
echo "The FOR is same as js...checkout for other variation of FOR loop like 'foreach' ";
echo "FOREACH used below..see the code<br>";
$foeac=["3",4,465,654,54];
foreach($foeac as $fe){
    echo "$fe<br>";
}
$menme=array("me"=>"patanai","Me"=>"illusion","mE"=>"GOD");
foreach($menme as $ky => $val){
    echo "<br>$ky value is-> $val<br>";
}
echo "PHP functions same as js";
function newf(){
    echo "SOMETHING WITHIN ME BOILING<br>";
}
newf();
function witharg($ar1,$ar2){
    echo "$ar1 and $ar2  are the values insige the arguments.";
}
witharg("val1","bal2");
function dothistoo($a,$b,...$ab){
    echo "<br>$a arg1, $b is arg2 and <br>";
    foreach($ab as $content){
        echo "<br> $content";
    }
}
dothistoo("anger","hatred towards mortals","insidearray1","insidearray2","insidearray3","insidearray4");
echo "<br>Three types of ARRAYS:indexed ,associative,multidimentional";
$chek=array("pp","oo",['ww','ee'],"rr",witharg('<br>inside array function',"value"));
$chek[4];
$chek[4]="another value changed using index";
echo "<br>";
print_r($chek);
echo "<br> The count is " . count($chek) . "<br>";
var_dump($menme);
$menme[]="value added";
$menme["as a key"]="again added";
print_r($menme);
echo "<br>";
array_push($menme,"val44","bal345","n number of values");
print_r($menme);
$newar=["s",'ds','dsf'];
array_splice($newar,1,1);
print_r($newar);
//array_pop and array_shift = pop for last element and shift for first one.
//sort() in ascending ...rsort = reverse sort ,
//asort() for associative arrays in ascending order according to value
// and ksort() is also for associative (ascending)-> but sort according to key
//arsort() descending order for associative array according to value.
//krsort() ---------------------------------------according to key.
echo "<br>";
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

?>

