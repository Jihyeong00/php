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
        $data = [
            "lang" => ["C", "Java", "JavaScript", "PHP"],
            "hobby" => ["영화", "운동", "독서", "기타"]
        ]; 

       for($i = 0; $i < count($data["lang"]); $i++){
        echo " 제가 좋아하는 과목은 ". $data["lang"][$i] ."입니다.<br>";
       }
        
       foreach($data["hobby"] as $value){
        echo " 제가 좋아하는 과목은 ". $value ."입니다.<br>";
       }
    ?>
</body>

</html>