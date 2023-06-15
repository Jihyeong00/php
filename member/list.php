<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <style>
        table     { width:680px; text-align:center; }
        th        { background-color:cyan; }
        
        a         { text-decoration:none; }
        a:link    { color:blue; }
        a:visited { color:gray; }
        a:hover   { color:red;  }
    </style>
</head>

<body>
    <table>
        <tr>
            <th style="width:80px;">번호</th>
            <th style="width:230px;">제목</th>
            <th style="width:100px;">작성자</th>
            <th style="width:180px;">작성일시</th>
            <th>조회수</th>
        </tr>
        <?php
        $page = $_REQUEST["page"] ?? 1;
        $listSize = 1;
        $start = ($page - 1) * $listSize;

        require("db_connect.php");
        $result = $db->query("select * from board order by num desc limit $start, $listSize");
        while ($row = $result->fetch()) {
        ?>
        <tr>
            <td><?=$row["num"]?></td>
            <td style="text-align:left;"><a href="view.php?num=<?=$row["num"]?>&page=<?=$page?>"><?=$row["title"]?></a></td>
            <td><?=$row["writer"]?></td>
            <td><?=$row["regtime"]?></td>
            <td><?=$row["hits"]?></td>
        </tr>
        <?php
        }
        ?>
    </table>

    <br>
    <div style="width:680px; text-align:center;">
    <?php
    $paginationSize = 3;
    $firstLink = floor(($page - 1) / $paginationSize) * $paginationSize + 1;
    $lastLink = $firstLink + $paginationSize -1;

    $numRecords = $db->query("select count(*) from board")->fetch()[0];
    $numPages = ceil($numRecords / $listSize);
    if ($lastLink > $numPages) {
        $lastLink = $numPages;
    }

    if ($firstLink > 1) {
        $link = $firstLink - 1;
        echo "<a href='list.php?page=$link'>&lt</a> ";
    }

    for ($i = $firstLink; $i <= $lastLink; $i++) {
        $underline = ($i == $page) ? 'text-decoration:underline' : '';
        echo "<a href='list.php?page=$i' style='$underline'>$i</a> ";
    }

    if ($lastLink < $numPages) {
        $link = $lastLink + 1;
        echo "<a href='list.php?page=$link'>&gt</a> ";
    }
    ?>
    </div>

    <br><br>
    <input type="button" value="글쓰기" onclick="location.href='write.php'">
</body>

</html>
