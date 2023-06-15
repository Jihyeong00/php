<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <?php
        $number = $_REQUEST["number"];
        
        $judge = $number % 2 != 0 ? "홀수" : "짝수";
    ?> -->
    <!-- <?php
        $age = $_REQUEST["age"];
        $price = 5000;
        $price = ($age <= 7 || $age >= 60)? $price*0.5 : $price;
    ?> -->

    <!-- <h1>입력받은 숫자 <?=$number?>는 <?=$judge?> 입니다.</h1> -->
    <!-- <h1>나이 <?=$age?>의 지불할 금액은
        <?=$price?>원 입니다.
    </h1> -->

    <?php
        $number1 = $_REQUEST["number1"];
        $number2 = $_REQUEST["number2"];
        $calc = $_REQUEST["calc"];
        switch($calc){
            case "+": echo $number1 + $number2; 
                break;
            case "-": echo $number1 - $number2; 
                break;
            case "*": echo $number1 * $number2; 
                break;
            case "/": 
                if ($number2 == 0){
                    echo "0으로는 나눌수 없습니다.";
                    break;
                }
                echo $number1 / $number2;
                break;
            default : echo `{$calc}는 잘못된 연산자 입니다.`; 
        } 
    ?>




</body>

</html>