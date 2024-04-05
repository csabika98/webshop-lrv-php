<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Return Values in Functions</title>
</head>

<body>



<?php



function addNumbers($number1, $number2){

    $sum = $number1 + $number2;


    return $sum;



}

$result = addNumbers(34,64);

$result = addNumbers(100,$result);

$result = addNumbers(10000, $result);


echo $result;


?>






</body>

</html>
