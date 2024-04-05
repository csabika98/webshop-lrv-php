<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Comparison & Logical operators</title>
</head>

<body>

<h2>Comparison Operators</h2>
<pre>

equal ==
identical ===
compare > < >= <= <>
not equal !=
not identical !==

</pre>

<h2>Logical Operators</h2>
<pre>

And &&
or ||
Not !


</pre>



<?php

// Comparison operators
// equal ==
// identical ===
// compare > < >= <= <>
// not equal !=
// not identical !==
// Logical operators
// and &&
// or ||
// not !

//if( 4 <= 4) {

//echo "it is true";

//}

//if( 4 == 4) {

//    echo "it is true";
    
//    }


// not the same datatype, so its not identical, 4 is int, and '4' is string
//if(4==='4'){
//    echo "it is identical";
//}


// or operator , all the two condition not nessesiarly true , no need to be true, it will execute
// if one of the condition is true
if(4 === '4' || 5 <10 ){

echo "it is true";

}

// all conditions need to be true(4 is not identical to 4 so its not true, the program will execute , it will be false)
if(4 === '4' && 5 <10 ){

    echo "it is true";
    
    }
    




?>


</body>

</html>