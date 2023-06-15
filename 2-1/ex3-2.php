<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>$a = 20</div>
    <div>$b = 8</div>
    <?php
    $a = 20;
    $b = 8;
    ?>
    <span>$a + $b = <?php echo $a + $b,"<br>"; ?></span>
    <span>$a - $b = <?php echo $a - $b,"<br>"; ?></span>
    <span>$a * $b = <?php echo $a * $b,"<br>"; ?></span>
    <span>$a / $b = <?php echo $a / $b ?></span>
</body>

</html>