<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // post and are the method /funtions in the php
    ?>
    <form action="postvsget.php" method="post">

        PASSWORD:<input type="password" name="password">
        <input type="submit">
        <?php
// post is used with the purpose of security
echo $_POST["password"]
      // echo $_GET["password"]
      // while we use get funtion the information is shown in  the url
      // while we use the post method it never includs the information tp the url
      // so post method is more secure then the get method 
      // post and get both methods are used to take input from the user
      
       ?>

    </form>


</body>
</html>