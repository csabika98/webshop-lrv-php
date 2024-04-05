<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Arrays</title>
</head>
<body>
    
    
    
    
<?php
    
// first method    
$numberList = array(23,56,265,346,5667,443,'3234', '<h1>Hello</h1>');   
    
// print out arrays by their index.
echo $numberList[7]; // indexes of array starts with 0

// or you can print out all of them    
print_r($numberList);
var_dump($numberList);
    
    

// second 'newer' method
    
    
// => double arrow operator, is used as an access mechanism for arrays.
$numberList = ['name'=>'Csabi'];
    

    
$numberList = [2,4,5,6,'3231',2];
    
    
?>    
    
    
    
    
    
    
    
    
    
    
    
    
    
</body>
</html>