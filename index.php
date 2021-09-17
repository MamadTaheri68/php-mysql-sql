<?php
$x = true;

echo $status = ($x) ? "true" : "false";

$colors = ["red","blue","white","green"];

foreach($colors as $color) {
  echo $color."<br>";
}

// ***************************************

function writeMsg1(){
  echo "Hi To All";
  echo "<br>";
}
writeMsg1();

function writeMsg2($text){
  echo "My name is : ".$text;
  echo "<br>";
}
 
writeMsg2("mohammad");

function addNumbers (int $num1, int $num2){
  echo $num1 + $num2;
  echo "<br>";
}

addNumbers(5,2);

function setHeight($minHeight = 50) {
  echo "The height is : " . $minHeight;
  echo "<br>";
}

setHeight();
setHeight(100);

function sum($x , $y){
  return $x + $y;
}

echo sum(5, 10);


// ***************************************

