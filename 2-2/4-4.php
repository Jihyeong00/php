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
    if($_FILES["upload"]["error"] == UPLOAD_ERR_OK){
        $temp_name = $_FILES["upload"]["tmp_name"];
        $file_name = $_FILES["upload"]["name"];
        $save_name = iconv("utf-8", "cp949", $file_name);
        // 시험에 안나옴
        $part = pathinfo($save_name);
        $ext = isset($part["extension"]) ? ".$part[extension]" : "";
        //file_exists 파일이 있는지 검사
        for($i=1; file_exists("files/$save_name"); $i++){
            $save_name = "$part[filename] ($i)$ext";
        }
        // 파일명이 없을수도 있으니 설정
        if(move_uploaded_file($temp_name, "files/$save_name")){
            echo "업로드 성공<br>";
            echo "업로드한 파일명 : $file_name<br>";
            $save_name_utf8 = iconv("cp949", "utf-8", $save_name);
            echo "저장된 파일명 : $save_name_utf8";
            
        } else{
            echo "파일 저장 실패";
        }
    }else if($_FILES["upload"]["error"] == UPLOAD_ERR_NO_FILE){
        echo "선택된 파일이 없습니다";
    }else{
        echo "파일 전송 실패";
    }
?>
</body>

</html>