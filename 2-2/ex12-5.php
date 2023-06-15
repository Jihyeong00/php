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

    $db = new PDO('mysql:host=localhost;port=3307;dbname=user_db',"user","user1234");
    $result = $db->query('select * from score');
    while ($row = $result->fetch()){
        // FETCH:ASSOC : 하나의 레코드만 연관 배열로 만들어서 반환한다.
        // FETCH:NUM : 하나의 레코드를 일반 배열로 만들어서 넣습니다.
        echo '번호 : '.$row['num'].' ';
        echo $row['name'] .'의 점수입니다. ';
        echo '국어 : '.$row['kor'].', ';
        echo '수학 : '.$row['math'].', ';
        echo '영어 : '.$row['english'].', ';
        echo '<br/>';
    }
?>

</body>

</html>