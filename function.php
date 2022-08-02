<?php
function emobilis(){
    $num1=29;
    $num2=65;
    echo "The product of $num1 and $num2 is " .$num1*$num2;
    echo "<br>";
}
emobilis();
emobilis();
emobilis();

function studentname($fname,$lname,$year){
    echo "My name is ".$fname ." ".$lname . "and I am $year " . "years old" ;
    echo "<br>";
}
studentname("Johnson","Mayaka", 19);
studentname("Consolata","Adipo", 18);
studentname("Mason","Mount", 21);
studentname("Thomas","Tuchel", 37);
studentname("Leo","Messi", 36);
