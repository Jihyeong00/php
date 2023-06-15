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
    $id = $_REQUEST["id"] ?? "";
    if($id=""){
        echo "아이디를 입력하세요.";
    } else{
        require("db_connect.php");
        $result = $db ->query("select * from member where id = '$id'");
        if($row = $result -> fetch()){
            echo "이미 있는 아이디입니다.";
        } else {
            echo "사용할 수 있는 아이디입니다.";
        }
    }
    ?>
</body>
</html>