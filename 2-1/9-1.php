<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        class Member{
            // 프로퍼티 정의
            public $id, $name, $age, $phone;

            public function printMemberInfo(){
                echo "이름 :$this->name 입니다.<br>";
                echo "나이는 :$this->age 입니다.<br>";
                echo "전화번호는 :$this->phone 입니다.<br>";
                echo "<br>";
            }
        }

        // $홍길동 = new Member();
        // $이순신 = new Member();

        $홍길동->id = 1; 
        $홍길동->name = "홍길동"; 
        $홍길동->age = 20; 
        $홍길동->phone = "010-1234-1234"; 

        $이순신->id = 2; 
        $이순신->name = "이순신"; 
        $이순신->age = 52; 
        $이순신->phone = "010-4321-4321"; 

        $홍길동->printMemberInfo();
        $이순신->printMemberInfo();
    ?>
</body>

</html> -->