<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Switch Statements</title>
</head>

<body>


<?php



$number = 10;

// So if any switch case is true , it will execute the echo code.
// for instance in here our variable is 10, so only one case is true
// which says case 10: 
switch($number){ // our $number variable is equal to 10!

    case 34:  // is it true that 10 is equal to 34? false
        echo "is it 34";
        break;
    case 37:  // is it true that 10 is equal to 37? false
        echo "is it 37";
        break;
    case 35:  // is it true that 10 is equal to 35? false
        echo "is it 35";
        break;
    case 24:  // is it true that 10 is equal to 24? false
        echo "is it 34";
        break;
    case 10:  // is it true that 10 is equal to 10? true, this will execute
        echo "is it 10";
        break;

    default:
        echo "we could not find anything";
        break;

}



?>













</body>

</html>