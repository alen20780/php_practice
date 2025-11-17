<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>
    <form action="calculator.php" method="post">
        <input type="number" name="num1" placeholder="Enter first number"><br>
        <input type="radio" name="sign" value="+" id="add"><label for="add">+</label>
        <input type="radio" name="sign" value="-" id="subtract"><label for="subtract">-</label>
        <input type="radio" name="sign" value="*" id="multiply"><label for="multiply">*</label>
        <input type="radio" name="sign" value="/" id="divide"><label for="divide">/</label><br>
        <input type="number" name="num2" placeholder="Enter second number">
        <input type="submit" value="Calculate">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $sign = $_POST['sign'];
        if ($num1 !== false && $num2 !== false && $sign !== null) {
            $result = 0;
            switch ($sign) {
                case "+":
                    $result = $num1 + $num2;
                    echo "The result is: " . $result;
                    break;
                case "-":
                    $result = $num1 - $num2;
                    echo "The result is: " . $result;
                    break;
                case "*":
                    $result = $num1 * $num2;
                    echo "The result is: " . $result;
                    break;
                case "/":
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                        echo "The result is: " . $result;
                    } else {
                        echo "Error: Division by zero is not allowed.";
                    }
                    break;
                default:
                    echo "Invalid operation selected.";
                    break;
            }
        }
    }
    ?>
</body>

</html>