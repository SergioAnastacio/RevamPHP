<?php 
//Loops bucles

//For loop
//for (initialization; condition; increment) {
for ($i=0; $i < 10; $i++) { 
    echo "This is a for loop \n";
}
//While loop
$i = 0;
//while (condition) 
while ($i < 10) {
    echo "This is a while loop \n";
    $i++;
}
//Do while loop
$i = 0;
// do {function}while (condition);
do {
    echo "This is a do while loop \n";
    $i++;
} while ($i < 10);
//Foreach loop
//foreach ($array as $value) 
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
    echo "$value \n";
}

?>