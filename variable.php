<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <?php
        echo "There once was a man named Alen <br>";
        echo "He was 21 years old <br>";
        echo "He really liked the name Alen <br>";
        echo "But didn't like being 21 <br>";
        echo "<hr>";
        
        $name = "Alen";
        $age = 21;
        echo "There once was a man named $name <br>";
        echo "He was $age years old <br>";
        $name = "Sarungbam Alen Meetei";
        echo "He really liked the name $name <br>";
        echo "But didn't like being $age <br>";
        $isMale = true;
        $height = 5.74146982;
        $isTall = ($height >= 5.7) ? true : false;
        //$isTall = $height >= 5.7;
        if ($isMale && $isTall) {
            echo "He is a tall male<br>";
        } elseif ($isMale && !$isTall) {    
            echo "He is a short male<br>";
        } elseif (!$isMale && $isTall) {
            echo "He is not a male but is tall<br>";
        } else {
            echo "He is not a male and not tall<br>";
        }
        echo "<hr>";
        
        $phrase = "To be or not to be, that is the question.";
        echo strtolower($phrase) . "<br>";
        echo strtoupper($phrase) . "<br>";
        echo strlen($phrase) . "<br>";
        echo $phrase[0] . "<br>";
        echo $phrase[10] . "<br>";
        echo str_replace("be", "meetei", $phrase) . "<br>";
        echo substr($phrase, 0, 14) . "<br>";
        echo "<hr>";

        $number = 10;
        echo $number . "<br>";
        $number += 5;
        echo $number . "<br>";
        $number *= 10;
        echo $number . "<br>";
        $number /= 2;
        echo $number . "<br>"; 
        $number -= 15;
        echo $number . "<br>";
        $number %= 7;
        echo $number . "<br>";
        $number++;
        echo $number . "<br>";
        $number--;
        echo $number . "<br>";
        $number = -10;
        echo abs($number) . "<br>";
        echo pow(2, 3) . "<br>";
        echo sqrt(144) . "<br>";
        echo max(2, 10) . "<br>";
        echo min(2, 10) . "<br>";
        echo round(4.6) . "<br>";
        echo ceil(4.1) . "<br>";
        echo floor(4.9) . "<br>";
        
    ?>
</body>
</html>