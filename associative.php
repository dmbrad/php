<?php
$age=array("Johnson"=>"19","Consolata"=>"18","Glenn"=>"56","Tom"=>"51","Linet"=>"49");
echo "Johnson is ".$age['Johnson']."Years old.";
echo "<br>";
$num1=array(22,34,54,67,87);
var_dump($num1);
sort($num1);
echo "<br>";
unset($num1[2]);
$num1=array_values($num1);
var_dump($num1);

