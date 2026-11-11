
<?php




//cinstant variable and scope 
define("sName","Test Name");
define("sAddress","Test Address");
$x = "Senith";
$y = 3;

function f1(){
global $x,$y;
 echo $x;
 echo "<br>";

 }

$a = array("Red","Green");
array_push($a,"Orange");
array_pop($a);
print_r $a;
 
 f1();
?>


