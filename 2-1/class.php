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
      class Student {
        private $name, $age, $height, $gender;

        const mali = "남자";
        const female = "여자";
        public function __construct($name, $age, $height, $gender){
            $this->setStudents($name, $age, $height, $gender);
        }
        public function setStudents ($name, $age, $height, $gender) {
            $this->name = $name;
            $this->age = $age;
            $this->height = $height;
            $this->gender = $gender;
        }

        public function printStudentsInfo (){
            echo "제 이름은 ".$this->name."입니다.<br>";
            echo "제 나이는 ".$this->age."입니다.<br>";
            echo "제 키는 ".$this->height."입니다.<br>";
            echo "제 성별은 ".$this->gender."입니다.<br>";
        }
      }

      $오혜린 = new Student("오혜린", 24, 160, Student::female);
      $박세리 = new Student("박세리", 26, 162, Student::female);
    
      $박세리->printStudentsInfo();
      $오혜린->printStudentsInfo();
    ?>
</body>

</html>