<?php
$cars="Range Rover";
$marks=95;

switch ($cars){
    case "Toyota":
        echo "I like Toyota Cars.";
        break;
    case "Nissan":
        echo "I like Nissan Cars.";
        break;
    case "Subaru":
        echo "The best when it comes to speed.";
        break;
    case "Range Rover":
        echo "Its a German machine and its powerful.";
        break;
    case "Mercedes Benz":
        echo "The comfort it offers its the best.";
        break;
    default:
        echo "Its not in the list.";
}
echo"<br>";

switch ($marks){
    case $marks>=0 && $marks<=39:
        echo "Pull up your socks.";
        break;
    case $marks>=40 && $marks<=49:
        echo "Good.";
        break;
    case $marks>=50 && $marks<=59:
        echo "Average.";
        break;
    case $marks>=60 && $marks<=69:
        echo "Credit.";
        break;
    case $marks>=70 && $marks<=89:
        echo "Excellent.";
        break;
    case $marks>=90 && $marks<=99:
        echo "Good.";
        break;
    case $marks=100:
        echo "Distinction.";
        break;
    default:
        echo"Not included.";
        break;
}
echo"<br>";