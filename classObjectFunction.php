<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>classObjectFunction</title>
</head>
<body>
    <form action="classObjectFunction.php" method="post">
        <input type="number" name="num1" placeholder="Enter first number"><br>
        <input type="radio" name="sign" value="+" id="add"><label for="add">+</label>
        <input type="radio" name="sign" value="-" id="subtract"><label for="subtract">-</label>
        <input type="radio" name="sign" value="*" id="multiply"><label for="multiply">*</label>
        <input type="radio" name="sign" value="/" id="divide"><label for="divide">/</label><br>
        <input type="number" name="num2" placeholder="Enter second number"><br>
        <input type="submit" value="Calculate"><br>
    </form>
    <?php 
    // Class definition
    class Calculator {
        public $num1;
        public $num2;
        public $sign;

        public function __construct($num1, $num2, $sign) {
            $this->num1 = $num1;
            $this->num2 = $num2;
            $this->sign = $sign;
        }

        public function calculate() {
            switch ($this->sign) {
                case "+":
                    return $this->num1 + $this->num2;
                case "-":
                    return $this->num1 - $this->num2;
                case "*":
                    return $this->num1 * $this->num2;
                case "/":
                    if ($this->num2 != 0) {
                        return $this->num1 / $this->num2;
                    } else {
                        return "Error: Division by zero is not allowed.";
                    }
                default:
                    return "Invalid operation selected.";
            }
        }
    }
    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = filter_input(INPUT_POST, 'num1', FILTER_VALIDATE_FLOAT);
        $num2 = filter_input(INPUT_POST, 'num2', FILTER_VALIDATE_FLOAT);
        $sign = filter_input(INPUT_POST, 'sign', FILTER_SANITIZE_SPECIAL_CHARS);

        if ($num1 !== false && $num2 !== false && $sign !== null) {
            $calc = new Calculator($num1, $num2, $sign);
            $result = $calc->calculate();
            echo "The result is: " . $result . "<br>";
        } else {
            echo "Please fill in all fields correctly.";
        }
    }
    ?>
</body>
</html>