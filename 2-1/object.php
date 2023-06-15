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
        $오혜린 = [
            "name" => "오혜린",
            "age" => "24",
            "height" => "168",
        ];

        echo $오혜린["name"]."<br>";
        echo $오혜린["age"]."<br>";
        echo $오혜린["height"]."<br>";

        foreach($오혜린 as $value => $key){
            echo $value ."<br> ". $key ;
        }
    ?>
</body>

</html>