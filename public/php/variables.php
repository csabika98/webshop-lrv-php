<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Variables</title>
</head>
<body>
    
    
    
<?php
    
    
// let's create an empty variable   
$name;   

//you can store anything
$name = "Edwin";
$number = 100;
$Number_List = 100;
//$num-ber=400;  bad variable 
//$0number = 500; bad variable
// we can call them , we can print out for example
// THESE TWO NOT THE SAME cuz Case-Sensitive for exmaple
    $number;
    $NUMBER;
    
  
    
    
//echo $name;
//echo $number;
    
// PHP DATA-TYPES
// String
// Integer
// Float
// Boolean
// Array
// Object
// NULL
// Resource

$String = "Csaba"; // String
$Integer = 2; // interger
$Float=2.4; // float
$boolean = true; // boolean represents two possible states : TRUE OR FALSE
$boolean = false; 
$array = array("array0", "array1", "array2"); // arrays
var_dump($array);
// var_dump == dumps information about a variable
    
// CONCATENATION , like + "" + , in PHP this is dot(.)
    
echo $name . " " . $number;   
    
// embed html    
$name = "<h1>Hello</h1>";
    
echo $name;
    
    
?>    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</body>
</html>