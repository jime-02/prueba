<?php
    //comentarios
    /* comentarios de bloque */

    $status = true; //boolean
    $name = "string"; //string
    $val = 1234; //number

?>
<!-- comentario -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- https://medoo.in -->
   <form action="response.php" method="post">

    <label for="recipe">Recipe</label>
    <input type="text" name="recipe">
    <label for="category">Category</label>
    <input type="text" name="category">
    <label for="time">Prep. time</label>
    <input type="text" name="time">

    <input type="submit" value="SUBMIT">
   </form>

</body>
</html>