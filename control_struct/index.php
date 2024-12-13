<?php 
//Control Structures

//If statement == true  && elseif statement == true || else statement == true

if (true) {
    echo "This is an if statement \n";
}
//elseif statement
elseif (true) {
    echo "This is an elseif statement \n";
}
//else statement
else {
    echo "This is an else statement \n";
} 
//switch statement
switch (2) {
    //single case
    case 1:
        echo "This is case 1 \n";
        break;
    case 2:
        echo "This is case 2 \n";
        break;
    //multiple cases
    case 3:
    case 4:
        echo "This is case 3 \n";
        break;
    //default case
    default:
        echo "This is default case \n";
        break;
}

//ternary operator
$var1 = 10;
$var2 = 20;
// compact if else statement ()? true : false
$var3 = ($var1 > $var2) ? "var1 is greater than var2" : "var2 is greater than var1";
echo $var3;

?>