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
        $num3 = 3;
        $count = 1;
        for(;;){
            $result = $num3 * $count;
            echo "$result <br>";
            $count++;
            if($result >= 21){
                break;
            }
        }
    ?>
    <?php
        echo "<hr>";
        $result2 = 0;
        for($number= 100;$number<=200 ;$number++){
            $result2 += $number;
        }
        echo "$result2"
    ?>
</body>

</html>