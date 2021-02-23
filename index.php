<?php
require_once('functions.php');
$cars[0]['year'] = 2012 ;
$cars[0]['SPZ'] = "3S5 3751" ;
$cars[1]['year'] = 2005 ;
$cars[1]['SPZ'] = "NO SPZ" ;
$cars[2]['year'] = 2019 ;
$cars[2]['SPZ'] = "1A3 9437" ;
$cars[3]['year'] = 1999 ;
$cars[3]['SPZ'] = "3LY 4872" ;
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
    <?php
    for ($i=0; $i < count($cars); $i++) { 
        echo $cars[$i]['SPZ'] . " : ";
        getCarInfo($cars[$i]['year']); ?>
        <br> <?php
    }
    ?>
</body>
</html>