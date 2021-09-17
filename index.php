<?php
// $x = true;

// echo $status = ($x) ? "true" : "false";

// $colors = ["red","blue","white","green"];

// foreach($colors as $color) {
//   echo $color."<br>";
// }

// ***************************************

// function writeMsg1(){
//   echo "Hi To All";
//   echo "<br>";
// }
// writeMsg1();

// function writeMsg2($text){
//   echo "My name is : ".$text;
//   echo "<br>";
// }
 
// writeMsg2("mohammad");

// function addNumbers (int $num1, int $num2){
//   echo $num1 + $num2;
//   echo "<br>";
// }

// addNumbers(5,2);

// function setHeight($minHeight = 50) {
//   echo "The height is : " . $minHeight;
//   echo "<br>";
// }

// setHeight();
// setHeight(100);

// function sum($x , $y){
//   return $x + $y;
// }

// echo sum(5, 10);
// echo "<br>";

// echo "*******************************<br>";
// ***************************************

// define("SITE", "MamadTaheri.ir");
// define("PI", 3.14596865222);

// $radius = 10;
// $area = $radius / 2 * PI;

// echo $area;

// $x = 10;

// if($x === 5) {
//   die("5");
// } else {
//   die("Not 5");
// }

// $x = 5;
// $y = 10;

// unset($x);

// echo isset($x) ? "X exist" : "X not exist";
// echo "<br>";
// echo isset($y) ? "Y exist" : "Y not exist";

// ***************************************

// $cookie_name = "user";
// $cookie_value = "Mamad Taheri";

// setcookie($cookie_name, $cookie_value, time() + 3600);

// // echo time();

// echo "<br>";

// if(!isset($_COOKIE[$cookie_name])) {
//   echo "not set";
// } else {
//   echo "is set";
// }

// setcookie($cookie_name, "", time() - 3600);

// ***************************************

session_start();

$session_name = "user";
$session_value = "Ali Sheikh";

if (isset($_SESSION[$session_name])) {
  echo "Session '" . $session_name . "' is set!<br>";
  echo "Value is : " . $_SESSION[$session_name];
} else {
  $_SESSION[$session_name] = $session_value;
  echo "Session Started";
}

session_unset();
