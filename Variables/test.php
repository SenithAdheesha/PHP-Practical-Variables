
<?php

$a = 5;
$b = &$a;   // $b is a reference to $a


$b = 10;    // changing $b also changes $a

echo $a;    // Output: 10
echo "<br>";
echo $b;    // Output: 10


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
 
 f1();
?>

