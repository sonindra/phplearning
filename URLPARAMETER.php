<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
    <form action="URLPARAMETER.php" method="get">
        Name:<input type="text" name="name"> <br>
    <input type="submit">
    <br> <br>
    <?php 
    // in php  we can add value on the url so the infromation can fetch from the url
    
    echo $_GET["name"];
    ?>

    </form>
</body>
</html>