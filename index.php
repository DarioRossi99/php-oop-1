<?php
require_once "./Movie/Movie.php";

$mySelecion = new Movie();

// $mySelecion->name = "nome";
// $mySelecion->type = "Film";

$mySelecion->setName("nome");
$mySelecion->setType("Film");

var_dump($mySelecion);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
    
</body>
</html>