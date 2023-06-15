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
    $user = [
        "id" => "hong",
        "name" => "홍길동",
        "addr" => "서울",
        "phone" => "123-4567",
    ];

             // 배열이름    값
    foreach ($user as $key => $value){
        echo "$key => $value <br>";
    }

    $List = [
        "id" => "Lee",
        "name" => "이순신",
        "addr" => "부산",
        "phone" => "010-1231-3123"
    ];
    foreach ($List as $key => $value){
        echo "$key => $value <br>";

    }

    $phone = [
        '101' => '111-2222', 
        '102' => '234-5678', 
        '103' => '346-3353', 
        '104' => '223-4633', 
        '105' => '242-4532'
    ];
    
    foreach ($phone as $key => $value){
        echo "$key => $value <br>";
    }

    echo $phone['101']."<br>";
    echo $phone['102']."<br>";
    echo $phone['103']."<br>";
    echo $phone['104']."<br>";
    echo $phone['105']."<br>";
    ?>
</body>

</html>