<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetterSetter</title>
</head>
<body>
    <form action="getterSetter.php" method="post">
        <input type="text" name="name" placeholder="Enter your name"><br>
        <input type="number" name="age" placeholder="Enter your age"><br>
        <input type="submit" value="Submit"><br>
    <?php 
    class Person {
        private $name;
        private $age;

        public function getName() {
            return $this->name;
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function getAge() {
            return $this->age;
        }

        public function setAge($age) {
            if ($age >= 0) {
                $this->age = $age;
            } else {
                echo "Age cannot be negative.";
            }
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);

        $person = new Person();
        $person->setName($name);
        $person->setAge($age);

        echo "Name: " . $person->getName() . "<br>";
        echo "Age: " . $person->getAge() . "<br>";
    }
    ?>
</body>
</html>