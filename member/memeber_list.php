<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {width : 400px; text-align: center;}
        th {background-color: cyan;}
    </style>
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>아이디</th>
            <th>비밀번호</th>
            <th>이름</th>
        </tr>
        <?php
        require("db_connect.php");
        $result = $db ->query("select * from member");
        while($row = $result->fetch()){
        ?>
        <tr>
            <td><?= $row["id"] ?></td>
            <td><?= $row["pw"] ?></td>
            <td><?= $row["name"] ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>