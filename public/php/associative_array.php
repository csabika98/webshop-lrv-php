<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Associative Array</title>
</head>
<body>
    
    
    
    
<?php
    
// normal array    
$name = array('juanita', 'maria', 'jose');
print_r($name);
echo $name[2] . "<br>";
    
//assoc array    
    
$names = array("first_name" => 'Edwin', "Last_Name"=>'Diaz');    

print_r($names);

echo $names['first_name'] . "  " .  $names['Last_Name'];
    
    
?>    
    
    
    
    
    
    
    
    
    
    
    
</body>
</html>