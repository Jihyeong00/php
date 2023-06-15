<?php
$title = "";
$writer = "";
$content = "";
$action = "insert.php";

$num = $_REQUEST["num"] ?? 0;
if ($num > 0) {   // 글번호가 전달됨--> 수정모드
    $page = $_REQUEST["page"];

    require("db_connect.php");
    $result = $db->query("select * from board where num=$num");
    if ($row = $result->fetch()) {
        $title = $row["title"];
        $writer = $row["writer"];
        $content = $row["content"];
        $action = "update.php?num=$num&page=$page";
    }
}
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <style>
        table { width:680px; text-align:center; }
        th    { width:100px; background-color:cyan; }
        input[type=text], textarea { width:100%; }
    </style>
</head>

<body>
    <form action="<?=$action?>" method="post">
        <table>
            <tr>
                <th>제목</th>
                <td>
                    <input type="text" name="title" maxlength="80" value="<?=$title?>">
                </td>
            </tr>
            <tr>
                <th>작성자</th>
                <td>
                    <input type="text" name="writer" maxlength="40" value="<?=$writer?>">
                </td>
            </tr>
            <tr>
                <th>내용</th>
                <td>
                    <textarea name="content" rows="10"><?=$content?></textarea>
                </td>
            </tr>
        </table>

        <br>
        <input type="submit" value="저장">
        <input type="button" value="취소" onclick="history.back()">
    </form>
</body>

</html>
