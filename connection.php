<?php
$myuservername="localhost";
$myusername="root";
$mypass="";
$mydb="lone_mayaka";
// connect to the database
$connect=new mysqli($myuservername,$myusername,$mypass,$mydb);

// checking the connection
if ($connect->connect_error){
    die("It did not connect to db".$connect->connect_error);
}else{
    echo "Connected successfully";
}