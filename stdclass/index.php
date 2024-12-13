<?php
//stdclass is a generic class in php we can add properties and methods to it dinamically
$Person = new stdClass();
echo gettype($Person); //output: Person
print_r($Person); //output: stdClass Person ( )
echo"<br>";
echo"<br>";
//add properties to the Person
$Person->name = "thoka yatogami";
$Person->age = 16;
$Person->gender= "Female";
$Person->hair="violett";
$Person->eyes="purple";
$Person->city = "Tokyo";
print_r($Person); //output: stdClass Person
echo"<br>";
//modify properties
$Person->name = "miku";
print_r($Person); //output: stdClass Person 
echo"<br>";

//useful for working with json

//convert an object to an array
$arr_person= (array)$Person;
echo"<br>";
echo "Now person is an array".$arr_person["name"]; //output: miku
foreach($arr_person as $key=>$value)
{
    echo "<br>".$key."=>".$value;
}
echo"<br>";
echo"<br>";

//convert an array to an object
$obj_person = (object)$arr_person;

print_r($obj_person); //output: stdClass Person
echo"<br>";
echo "Now is an obj \n".$obj_person->name; //output: miku

//obj can store methods 

?>