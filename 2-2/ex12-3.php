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

        $sql = 'create table address_book (
            num int auto_increment primary key,
            name varchar(40),
            address varchar(80),
            phone varchar(40)
        )';
        $db->exec($sql);
    ?>
</body>

</html>