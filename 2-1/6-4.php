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
    $score = [80, 90, 40, 60, 5];
    $sum = array_sum($score);
    $avg = $sum/count($score);
    $toString = implode(", ", $score);
    echo "점수: $toString <br>";
    echo "총점: $sum <br>";
    echo "평균: $avg <br>";

    ?>
</body>

</html>