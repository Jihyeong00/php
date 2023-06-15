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
            $a = 0;

            do{if($a >= 11 && $a % 2 != 0){
                    echo "$a<br>";
                }
                $a++;
            }while($a < 32);
            echo "<hr/>";
            $sumNumber = 0;
            $count = 0;
            do{
                if($count >= 10){
                    $sumNumber += $count;
                }
                $count++;
            }while($count < 31);
            
            echo "$sumNumber <br>"
        ?>
</body>

</html>