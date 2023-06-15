<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Practice</title>
</head>

<body>
    <?php
    
    class Student{
        
        private $name, $age, $gender;
        
        const Female = "Female";
        const Male = "male";
        public function __construct($name, $age, $gender){
            $this->setStudent($name, $age, $gender);
        }

        public function setStudent($name, $age, $gender){
            $this->name = $name;
            $this->age = $age;
            $this->gender = $gender;
        }

        public function printStudent(){
            echo "제 이름은 $this->name 이고 나이는 $this->age 성별은 $this->gender 입니다.";
        }

    }
    $a = new Student("홍길동", 29, Student::Female);

    $a ->printStudent();
    ?>
</body>

</html>