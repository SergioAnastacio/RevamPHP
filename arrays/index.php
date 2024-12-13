<?php 
//Arrays
//Indexed arrays
$colors = array("red", "green", "blue", "yellow");
//pushback 
$colors[] = "purple"; //add a new value to the end of the array
echo $colors[4]."\n"; //need to use an index to access the value : output: purple 
//Associative arrays
$age = array("hatsune_miku"=>"35", "thoka_yatogami"=>"37", "Jhon_Doe"=>"43");
echo $age["hatsune_miku"]."\n"; //need to use the key to access the value : output: 35
//change the value of an associative array
$age["hatsune_miku"] = "29";
//Multidimensional arrays
$car = array(
    array("Mercedes",22,18),
    array("BMW",15,13),
    array("Volvo",5,2),
    array("Land Rover",17,15)
);

//functions to work with arrays
//count() function
echo count($colors)."\n"; //output: 5
// print_r() function
print_r($colors);
//array_push() function
array_push($colors, "black", "white"); //add new elements to the end of the array
//array_pop() function
$last_color=array_pop($colors); //remove the last element of the array
echo $last_color."\n"; //output: white
print_r($colors);
//in_array() function 
if (in_array("red", $colors)) {
    echo "red is in the array \n";
}

//array_merge() function 
$more_colors = array("orange", "pink", "brown");
$all_colors = array_merge($colors, $more_colors); //merge two arrays
print_r($all_colors);

/**
 * note in php have a lot of built-in functions for arrays use-cases
 */

?>