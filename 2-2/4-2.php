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
        $id = $_REQUEST['id'];
        $pw = $_REQUEST['pw'];
        $pn = $_REQUEST['pn1'];$_REQUEST['pn2'];$_REQUEST['pn3'];
        $gender = $_REQUEST['gender'];
        $subs = $_REQUEST['subs'];
        $addr = $_REQUEST['addr'];
        $memo = $_REQUEST['memo'];
        echo "아이디 :". $id ."<br>";
        echo "비밀번호 :". $pw ."<br>";
        echo "휴대폰 :". $pn ."<br>";
        echo "성별 :". $gender ."<br>";
        echo "취미 :". $subs ."<br>";
        echo "주소 :". $addr ."<br>";
        echo "메모 :". $memo ."<br>"; 
        echo "관심언어 : ";
        foreach ($_REQUEST["lang"] as $value)
		    echo "$value " ;
	    echo "<br>";

        echo "취미 : ";
        foreach ($_REQUEST["hobby"] as $value)
		    echo "$value " ;
	    echo "<br>";
    ?>
</body>

</html>