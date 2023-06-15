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
    $hangule = $_REQUEST['국어']; 
    $math = $_REQUEST['수학']; 
    $english = $_REQUEST['영어']; 
    $avg = ($hangule + $math + $english)/3;
    ?>
    <?= round($avg,2) ?>
</body>

</html>