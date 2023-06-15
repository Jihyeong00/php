<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    userId 세션 값: <?= $_SESSION["userId"] ?? "" ?> <br>
    <a href="13-5.php"> 세션변수 생성</a><br>
    <a href="13-6.php"> 세션변수 삭제</a>
</body>

</html>