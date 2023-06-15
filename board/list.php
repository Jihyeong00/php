 <!DOCTYPE html>
 <html>

 <head>
     <meta charset="UTF-8">
     <style>
     table {
         width: 680px;
         text-align: center;
     }

     th {
         background-color: beige;
     }

     a {
         text-decoration: none;
     }

     a:link {
         color: blue;
     }

     a:visited {
         color: gray;
     }

     a:hover {
         color: red;
     }
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
         $listSize = 2;
         $start = ($page - 1) * $listSize;
            $page = $_REQUEST["page"] ?? 1;
         require("db_connect.php");
         $result = $db->query("select * from board order by num desc
                               limit $start, $listSize");
         
          while ($row = $result->fetch()) {
          ?>
         <tr>
             <td><?= $row["num"] ?></td>
             <td style="text-align:left;">
                 <a href="view.php?num=<?= $row["num"] ?>&page=<?=$page?>">
                     <?= $row["title"] ?>
                 </a>
             </td>
             <td><?= $row["writer"] ?></td>
             <td><?= $row["regtime"] ?></td>
             <td><?= $row["hits"] ?></td>
         </tr>
         <?php
          }
          ?>
     </table>
     <br>
     <div style="width:680px; text-align: center;">
         <?php
$paginationSize = 3;

$firstLink = floor(($page - 1) / $paginationSize) * $paginationSize + 1;

$lastLink = $firstLink + $paginationSize - 1;
$numRecords = $db->query("select count(*) from board")->fetch()[0];
$numPages = ceil($numRecords / $listSize); 
if ($lastLink > $numPages) {
    $lastLink = $numPages;
}

if($firstLink > 1){
    $link = $firstLink - 1;
    echo "<a href='list.php?page=$link'>이전</a>";
}

for ($i = $firstLink; $i <= $lastLink; $i++){
    $underLine = ($i==$page) ? "text-decoration : underline" : '';
    echo "<a href='list.php?page=$i' style='$underLine'>$i</a> ";
}

if($lastLink < $numPages){
    $link = $lastLink + 1;
    echo "<a href='list.php?page=$link'>다음</a>";
}
?></div>
     <br>
     <input type="button" value="글쓰기" onclick="location.href='write.php'">
 </body>

 </html>