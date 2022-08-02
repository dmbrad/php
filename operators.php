<?php
$num1=65;
$num2=54;
$num3=55;
$num4="55";

//Arithmetic Operators
echo $num1 + $num2; //Addition Operator
echo "<br>";
echo $num1 - $num2; //Subtraction Operator
echo "<br>";
echo $num1 * $num2; //Multiplication Operator
echo "<br>";
echo $num1 / $num2; //Division Operator
echo "<br>";
echo $num1 % $num2; //Modulus Operator
echo "<br>";

//Comparison Operators
var_dump($num3==$num4); //Equal Operator
echo "<br>";
var_dump($num3===$num4); //Identical Operator
echo "<br>";
var_dump($num3!=$num4); //Not Equal Operator
echo "<br>";
var_dump($num1>$num2); //Greater than Operator
echo "<br>";
var_dump($num1!==$num2); //Not Identical Operator
echo "<br>";
var_dump($num1>=$num2); //Greater than or Equal to Operator
echo "<br>";
var_dump($num2<=$num1); //Less than or Equal to Operator
echo "<br>";
var_dump($num1<>$num2); //Not Equal Operator
echo "<br>";

//Logical Operators
var_dump($num1>=$num2 || $num3==$num4);
echo "<br>";
var_dump($num1>=$num2 and $num3==$num4);
echo "<br>";
var_dump($num1>=$num2 && $num3==$num4);
echo "<br>";

//String Operator
$name1="Johnson";
$name2="Mayaka";
echo $name1 . $name2;