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
        $score = $_REQUEST['score'];
        $score = $score == 100 ? "합격입니다" : "불합격입니다.";
    ?>
    <?= $score ?>

</body>

</html>