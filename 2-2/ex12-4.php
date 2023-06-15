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
// db 연결문
$db->exec('drop table score');
// 이미 테이블이 있을시 지워주는 명령어
$sql = 'create table score (
    num int auto_increment primary key,
    name varchar(10),
    kor int,
    english int,
    math int
)';
$db->exec($sql);
// 테이블이 이미 있을시에 오류가 일어나지 않게 제거해주는 명령어
$db->exec("insert into score(name, kor, english, math) values('이지형', 80, 70, 60)");
$db->exec("insert into score(name, kor, english, math) values('오혜린', 80, 70, 60)");
$db->exec("insert into score(name, kor, english, math) values('장동민', 80, 70, 60)");

echo 'DB 접속 성공 문제 없음'
    ?>
</body>

</html>