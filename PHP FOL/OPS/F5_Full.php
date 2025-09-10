<?php

namespace F4_Full;
use F4_Full;
require_once "F4_Full.php";
// namespa_test("oye kya ", "heheheh");
\F4_Full\namespa_test("aye yo ma ","n*gga");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Callbacks</title>
</head>
<body>
    <?php
    function callhim($item){
        return strlen($item);
    }
    $stri=["appropriate","saiyan","Power","Strength"];
    $lens=array_map("callhim",$stri);
    print_r($lens);
    function pagal($sss){
        return $sss . "!";
    }
    function ask($sss){
        return $sss . "?";
    }
    function printFormatted($sysm,$frmt){
        echo $frmt($sysm);
    }
    printFormatted("<br>Planet Earth is trash","pagal");
    printFormatted("<br>Humans are trash","ask");
    class Powerup{
        public $name;
        public $color;
        function set_itbreh($naime){
            $this->name=$naime;
        }
        function get_itbreh(){
            return $this->name;
        }

    }
    $netP=new Powerup();
    $netP->set_itbreh("Ultima");
    echo "<br>";
    echo $netP->get_itbreh();
    ?>
    <?php
     
     class LevelInf{
        private $cal;
        private $cal2;
        function ops($call1,$call2){
           $this->cal=$call1;
           $this->cal2=$call2;
        }
        function ohyeah(){
            return $this->cal . $this->cal2;
        }
     }
     $power= new LevelInf();
     $power->ops('something','written');
     echo $power->ohyeah();
     echo "<br>";
    var_dump($power instanceof LevelInf);
    class Picking extends LevelInf{
        public $yo;
        public $dude;
        function __construct($yu,$doode){
            $this->yo=$yu;
            $this->dude=$doode;
        }
       public static function useit(){
            echo "You're cookking";
        }
        function __destruct()
        {
            echo $this->yo . $this->dude;
        }
    }
    $pick=new Picking("Yo"," This is Dude");
    echo $pick->useit();
    $pick2 = new Picking("Yosshaa","Petrification");
    $pick2->useit();
    ?>

</body>
</html>