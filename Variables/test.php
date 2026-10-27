
<?php




//cinstant variable and scope 
define("sName","Senith");
$x = "Adheesha";
$y = 3;

function f1(){
global $x,$y;
 echo $x;
 echo "<br>";
 echo $y;
 }

$a = array("Red","Green");
array_push($a,"Orange");
array_pop($a);
print_r $a;
 
 f1();
?>


