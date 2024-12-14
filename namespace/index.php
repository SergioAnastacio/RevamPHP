<?php 
// namespaces is a way to organize classes in php to avoid name conflicts
// require to include the file with namespace
require 'utils/operations.php';
// use the namespace
use Utils\Operations; // this is like a package in java
$operations = new Operations();
echo $operations->add(10, -5); // a substraction  is actually an addition of numbers with different signs
?>