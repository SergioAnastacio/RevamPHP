<?php 
//Data types

//String
$var1 = "Hello \n";
echo "this is an String".$var1;
//using gettype() function
echo gettype($var1);

//Integer
$var2 = 10;
$var2= (string) $var2; //convert integer to string with type casting
echo "this is an Integer".$var2;
//using gettype() function
echo gettype($var2);

//Float
$var3 = 10.5;
echo "this is an Float".$var3;
//using gettype() function
echo gettype($var3);

//Boolean
$var4 = true;
echo "this is an Boolean".$var4;
//using gettype() function
echo gettype($var4);

//Null
$var5 = null;
echo "this is an Boolean".$var5;
//using gettype() function
echo gettype($var5);


?>