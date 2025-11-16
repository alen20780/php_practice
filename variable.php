<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    ?>
</body>
</html>