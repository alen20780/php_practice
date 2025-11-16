<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="getting_User_Input.php" method="get">
        Name: <input type="text" name="username">
        <br>
        Age: <input type="number" name="age">
        <br>
        Height: <input type="number" step="0.01" name="height">
        <br>
        Gender:
        <input type="radio" name="gender" value="male" id="gender_male"> <label for="gender_male">Male</label>
        <input type="radio" name="gender" value="female" id="gender_female"> <label for="gender_female">Female</label>
        <input type="radio" name="gender" value="other" id="gender_other"> <label for="gender_other">Other</label>
                <input type="submit">
        </form>
        <br>
    <?php 
        // Safely get input (no "undefined index" notices)
        $name = filter_input(INPUT_GET, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        $age  = filter_input(INPUT_GET, 'age', FILTER_VALIDATE_INT);
        $gender = filter_input(INPUT_GET, 'gender', FILTER_SANITIZE_SPECIAL_CHARS);
        $height = filter_input(INPUT_GET, 'height', FILTER_VALIDATE_FLOAT);
        
        // Only show output when the form is submitted
        if ($name !== null || $age !== null) {
            // Provide defaults if empty/invalid
            $displayName = $name !== null && $name !== '' ? $name : 'unknown';
            $displayAge  = $age !== false && $age !== null ? $age : 'unknown';
            $displayGender = $gender !== null && $gender !== '' ? $gender : 'unknown';
            $heightValue = $height !== false && $height !== null ? $height : 'unknown';
            echo "Hello, my name is $displayName and I am $displayAge years old.";

        echo "There once was a man named $displayName <br>";
        echo "He was $displayAge years old <br>";
        $name = "Sarungbam Alen Meetei";
        echo "He really liked the name $displayName <br>";
        echo "But didn't like being $displayName <br>";
        $isTall = ($heightValue >= 5.7) ? true : false;
        //$isTall = $height >= 5.7;
        if ($displayGender && $isTall) {
            echo "He is a tall male<br>";
        } elseif ($displayGender && !$isTall) {    
            echo "He is a short male<br>";
        } elseif (!$displayGender && $isTall) {
            echo "He is not a male but is tall<br>";
        } else {
            echo "He is not a male and not tall<br>";
        }
    }
    ?>

</body>
</html>