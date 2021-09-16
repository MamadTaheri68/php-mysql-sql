<?php
  echo "salam"."<br>";

  $text = "Webprog.ir";
  echo $text."<br>";

  $x = "Web";
  $y = 'Prog $x';
  $z = "Prog $x";
  echo $y."<br>";
  echo $z."<br>";

  $intExample = 6585632;
  echo $intExample."<br>";

  $floatExample = 6585.32;
  echo $floatExample."<br>";

  $cars1 = array("WebProg", 1, true, 2.55);
  var_dump($cars1);
  echo "<br>";

  $cars2 = ["WebProg", 1, true, 2.55];
  var_dump($cars2);
  echo "<br>";

  $nulll = null;
  var_dump($nulll);
  echo "<br>";

  $converted = (float)16;
  var_dump($converted);
  echo "<br>";
