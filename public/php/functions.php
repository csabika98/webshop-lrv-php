<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Functions</title>
</head>

<body>
<?php

//function say_Something(){

//echo "Hello Student, do you like the class? yes? okay great";




//}

//calling the functions
//say_Something();

// call multiple functions!
function init(){
    say_Something();
    echo "<br>";
    calculate();

}

function calculate(){
    echo 456 + 345;
}

function say_Something(){
    echo "Hello Student, do you like the class? yes? okay great";
}



init();

// functions parameters





?>
</body>

</html>
