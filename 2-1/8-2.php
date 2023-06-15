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
    function Number($number){
        $result = 1;
        for($i = 1 ; $i < $number+1 ; $i++){
            $result *= $i;
        }
        return $result;
    }
    echo Number(5)+Number(10);
    ?>
</body>

</html>