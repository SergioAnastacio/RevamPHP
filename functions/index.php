<?php 
//Functions
//function functionName(params) {code to be executed returned value}
//function does not case sensitive
function hello() {
    echo "Hello World \n";
}
hello(); //calling the function

//function with parameters
function add($num1, $num2) {
    return $num1 + $num2;
}
echo add(10, 20); //output: 30

//function with default parameters
function add2($num1 = 10, $num2 = 20) {
    return $num1 + $num2;
}
echo add2(); //output: 30

//function with types
function add3(int $num1, int $num2) {
    return $num1 + $num2;
}
echo add3(10, 20); //output: 30

//function with return type
function add4(int $num1, int $num2): int {
    return $num1 + $num2;
}

/*note in php have a lot of built-in functions for different purposes
* its better to use built-in functions instead of creating your own functions
* because built-in functions are optimized and tested
* try to search for built-in functions before creating your own functions
*/

?>