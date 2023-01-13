<?php
require_once "./Movie/Movie.php";

// l'oggetto rappresenta in questo caso un film vero e proprio
$film1 = new Movie();

// $mySelecion->name = "nome";
// $mySelecion->type = "Film";

$film1->setName("Avatar");
$film1->setType("Azione");

$film2 = new Movie();

$film2->setName('Avatar 2');
$film2->setType('Azione');


var_dump($film1);
var_dump($film2);

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