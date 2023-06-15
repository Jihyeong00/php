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
        $db = new PDO('mysql:host=localhost;port=3307;dbname=user_db',"user","user1234");

        echo "DB접속 성공";
    ?>
</body>

</html>