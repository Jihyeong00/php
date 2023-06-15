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
    function startDrawing($number) {
        for($i = 0; $i < $number ; $i++){
            for($j = 0; $j < $i+1 ; $j++){
                echo "*";
            }
            echo "<br>";
        }
    }

    startDrawing(3)
    ?>
</body>

</html>