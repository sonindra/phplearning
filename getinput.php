<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="getinput.php" method="get" >
       Name:<input type="text" name="USERNAME">
       AGE:<input type="number" name="age">

       <input type="submit">
    </form>
    <br>
    your have filled your age <?php
    echo $_GET["age"]
    ?>
    <br>

    you have logged in with the name <?php
    echo $_GET["USERNAME"]
    ?>

    </body>
</html>