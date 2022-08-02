<?php
$num1=76;
$num2=23;
$num3=567;
$num4=675;
$t=Date("H");
$marks=100;
$feepaid=7500;

//if Statement
if ($num1>$num2){
   echo "$num1 is greater than $num2";
}
echo "<br>";

if ($num3<$num4){
    echo "$num3 is less than $num4";
}
echo "<br>";

if ($t<"20"){
    echo "Have a good day!";
}
echo "<br>";

//if...else statement
if ($num1<$num2){
    echo "$num1 is less than $num2";
}else{
    echo "$num1 is not less than $num2";
}
echo "<br>";

//if...elseif...if statement
if ($marks>=0 && $marks<=49){
    echo "You have failed";
}elseif ($marks>=50 && $marks<=79){
    echo "You have passed";
}elseif ($marks>=80 && $marks<=99){
    echo "Credit";
}elseif ($marks=100){
    echo "Distinction";
} else{
    echo "Invalid number";
}
echo "<br>";

//if...elseif...if statement
if ($feepaid>0 && $feepaid<=999){
    echo "You are giving the school hard time";
}elseif ($feepaid>=1000 && $feepaid<=2999){
    echo "Be ready to be sent home";
}elseif ($feepaid>=3000 && $feepaid<=5999){
    echo "Pay it in full within the next month";
}elseif ($feepaid>=6000 && $feepaid<=8999){
    echo "Bravo to your parent/guardian";
}elseif ($feepaid=9000){
    echo "Thank you for working hand in hand with the school administration";
}


