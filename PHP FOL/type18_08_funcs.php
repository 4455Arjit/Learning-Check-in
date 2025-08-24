<?php
function happy_me($me){
    echo "Power up my Energy and {$me}";
}
happy_me("Super Me<br>");
happy_me("Saiyan Power");
function is_energy($cal){
    $fly=$cal * 2000 ;
    return $fly;
}
echo "<br>"; echo is_energy(90);
function strrings(){
    $usern="IDK nothing";
    $numb= "23-234-234-235";
    echo "<br>";
    $rets=array();
    echo $rets[0]=strtolower($usern);
    echo $rets[1]=strtoupper($usern);
    echo $rets[2]=str_pad($usern,20,"//");
    echo $rets[3]=strrev($usern);
    echo $rets[4]=str_shuffle($usern);
    echo $rets[5]=str_replace("-","--",$numb);
    echo $rets[6]=strlen($numb);
    echo $rets[7]=trim($usern);
    echo $rets[8]=strcmp($usern,"IDK nothing");
    echo $rets[9]=strpos($usern,"K");
    echo $rets[10]=substr($usern,0,4); //Sub string is usable a bit
    echo $rets[11]=substr($usern,5); //Try this out (SubString)..
    echo "<br>";
    for($ule=0;$ule<=11;$ule++){
        echo $rets[$ule] . "<br>";
    }
    echo "<br>". $usern;
    $full=explode(" ",$usern);
    
    echo "<br>";
    foreach($full as $nam){
        echo "<br>";
        echo $nam;
    }
    $usernew=array("this", "is","new","username");
    $usernew=implode("--",$usernew);
    echo "<br>";
    echo $usernew;

}
strrings();
?>
