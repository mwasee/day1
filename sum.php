<?php

$x=0;
$y=0;
$s=0;

//how to get value of submitted form
//$your_variable=$_POST['html_variable_name'];
//$your_variable=$_GET['html_variable_name'];
//$your_variable=$_REQUEST['html_variable_name'];

$x=$_POST['num1'];   //geting num1
$y=$_POST['num2'];   //getting num2
$s=$x+$y;    //calucalating 
echo "Sum is :".$s;  //output

