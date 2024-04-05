<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>My Simple Calculator</title>
</head>
<body>
    
    

<?php
    
$number1 = $_POST['number1'];     
$number2 = $_POST['number2'];
    
echo $number1 + $number2;
    
    
?>    
<form action="" method="post">
<br><label for="number1">First number</label>
<br><input type="number" name="number1" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $number1 ?>">
<br><label for="number2" >Second number</label>
<br><input type="number" name="number2" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $number2 ?>">
<br><input type="submit" value="Calc">
</form>
    
    
    
    
    
    
    
    
    
    
</body>
</html>