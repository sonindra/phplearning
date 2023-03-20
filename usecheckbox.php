<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
    
<form action="usecheckbox.php" method="post">
Apple:<input type="checkbox"  name="fruits[]" value="apple"><br>
Orange:<input type="checkbox" name="fruits[]" value="Oranges"><br>
pear:<input type="checkbox" name="fruits[]" value="pears"><br>


 

<input type="submit">

</form>
<?php
$fruits = $_POST["fruits"];
echo $fruits[0];

?>

</body>
</html>