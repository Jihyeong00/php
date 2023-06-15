<?php
 session_start();
 $id = $_SESSION["userId"];
 
 require("db_connect.php");
 
 $result = $db->query("select * from member where id='$id'");
 $row = $result->fetch();
  $pw   = $row["pw"];
  $name = $row["name"];
  ?>
<!doctype html>
<html>


<head>
    <meta charset="utf-8">
</head>

<body>
    <form action="member_update.php" method="post">
        <table>
            <tr>
                <td>아이디</td>
                <td><input type="text" name="id" value="<?= $id ?>" readonly></td>
            </tr>
            <tr>
                <td>비밀번호</td>
                <td><input type="password" name="pw" value="<?= $pw ?>"></td>
            </tr>

            <tr>
                <td>이름</td>
                <td><input type="text" name="name" value="<?= $name ?>"></td>
            </tr>
        </table>
        <input type="submit" value="등록">
    </form>
</body>

</ht