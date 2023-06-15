 <!doctype html>
 <html>

 <head>
     <meta charset="utf-8">
 </head>

 <body>
     <?php
      $id   = $_REQUEST["id"];
      $pw   = $_REQUEST["pw"];
      $name = $_REQUEST["name"];
  
      require("db_connect.php");
 
      if ($id == "" || $pw == "" || $name == "") {
         ?>
     <script>
     alert('빈칸 없이 입력해야 합니다.');
     history.back();
     </script>
     <?php
         } else {
             $db->exec("update member set pw='$pw', name='$name' 
                        where id='$id'");
             session_start();
             $_SESSION["userName"] = $name;
         ?>
     <script>
     alert('수정이 완료되었습니다.');
     opener.location.reload();
     // 열어준 페이지 리로딩
     window.close();
     </script>
     <?php
         }
         ?>
 </body>

 </html>