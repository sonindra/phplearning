<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <style>
        form{
            border:2px solid red;

        }
        input{
            align:center;
            
        }
    </style>
</head>
<body>
    <form action="madlibsgame.php" method="get"><br>
    color:<input type="text" name="color"><br>
    plural noun:<input type="text" name="pluralnoun"><br>
    color:<input type="text" name="celebrity">

        <input type="submit">

    </form>
    <br><br>
    <?php
    $color=$_GET["color"];
    $pluralnoun=$_GET["pluralnoun"];
    $celebrity=$_GET["celebrity"];

    echo "Roses are $color <br>";
    echo "$pluralnoun are blue <br>";
    echo "I love $celebrity<br>";

    ?>

    
</body>
</html>