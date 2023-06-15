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
        $phone = [
            '101' => '111-2222',
            '102' => '234-5678',
            '103' => '345-3353',
            '104' => '223-4653',
            '105' => '243-4532',
        ];
        $isTrue = isset($phone['105']) ? "존재하는 값" : "없는 값";
        echo $isTrue;
        echo '<br/>';
        $id = $_REQUEST["id"];
        if(isset($phone[$id])){
            echo "학번 {$id}인 학생의 전화번호는 $phone[$id]";
        } else{
            echo "그런 학생은 없습니다";
        }
    ?>
</body>

</html>