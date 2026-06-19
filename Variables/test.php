
<?php

$a = 5;
$b = &$a;// $b is a reference to $a
$c = &$b;
$d = &$c;
$e = &$d;
$f = &$d;


$b = 10;    // changing $b also changes $a
$d = 50;    // changing $b also changes $a
$c = 80;    // changing $b also changes $a
$d = 90;    // changing $b also changes $a
$a = 70;    // changing $b also changes $a

echo $a;    // Output: 10
echo "<br>";
echo $b;    // Output: 10
echo $c;    // Output: 10
echo $f;    // Output: 10


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


