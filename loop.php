<?php
$num1=15;
$num2=100;
$num3=76;

while ($num1<=30){
    echo "My numbers are : $num1 <br>";
    $num1+=5;
}
echo "<br>";

while ($num2>=0){
    echo "My numbers are : $num2 <br>";
    $num2-=20;
}
echo "<br>";

do{
    echo "My number is $num3 <br>";
    $num3++;
}while($num3<=100);
echo "<br>";

for ($num4=50;$num4<=78;$num4++){
    echo "My number is $num4: <br>";
}
echo "<br>";

for ($num5=7;$num5>=0;$num5--){
    echo "My number is $num5: <br>";
}
