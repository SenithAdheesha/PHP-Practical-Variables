
<?php




//cinstant variable and scope 
define("sName","GTA Vi");
define("sAddress","Vice City");
$x = "Lucia";
$y = 3;

function f1(){
global $x,$y;
 echo $x;
 echo "<br>";

 }

$a = array("Red","Green");
array_push($a,"Jason");
array_pop($a);
print_r $a;
 
 f1();
?>



