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
    define("X", "dss");
        class Member{
            private $id, $name, $age, $phone, $gender;
            const MALE ="M";
            const FEMALE = "F";
            public function __construct($id, $name, $age, $phone, $gender){
                $this->setMemberInfo($id, $name, $age, $phone, $gender);
            }
            public function setMemberInfo($id, $name, $age, $phone, $gender){
                $this->id = $id;
                $this->name = $name;
                $this->age = $age;
                $this->phone = $phone;
                $this->gender = $gender;
            }
            public function printMemberInfo(){
                echo "이름 :$this->name 입니다.<br>";
                echo "나이는 :$this->age 입니다.<br>";
                echo "전화번호는 :$this->phone 입니다.<br>";
                echo "성별은 :$this->gender 입니다.<br>";
                echo "<br>";
            }
        }

        $이순신 = new Member(2,"이순신",52,"010-432-4213",Member::FEMALE);
        $이순신->setMemberInfo(2,"이순신",52,"010-432-4213",Member::MALE);
        $이순신->printMemberInfo();
    ?>
</body>

</html>