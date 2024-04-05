<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>While Loop</title>
</head>

<body>

<?php


// while this is true it will execute our code.
// it will stop our loop if its not true anyomre

// if we leave our while loop without break or counter it causes infinite loops


$counter = 0;

while($counter<10){

    echo "hello Student";
    $counter = $counter + 1;  // or use: $counter++  note: this will print us 10 Hello student



}


$counter = 0;

while($counter<10){

    echo $counter;
    $counter = $counter + 1;  // or use: $counter++  note: this will print us numbers till 9.



}










?>












</body>

</html>