<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Document</title>
</head>
<body>
    <form action="Associativearray.php" method="post">
    <input type="text" name="student">

    <input type="submit">

    </form>

<?php
$grades= array("raj"=>"A+","prem"=>"B-","vijay"=>"C+");
$grades["vijay"]="M";

echo $grades["raj"];
//echo $gardes["vijay"];
echo $grades[$_POST["student"]];

?>


</body>
</html>