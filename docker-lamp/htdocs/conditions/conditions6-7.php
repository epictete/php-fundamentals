<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Girl Soccer Team</title>
</head>
<body>

<form action="" method="get">
    <!-- Age -->
    <label for="age">How old are you: </label><br>
    <input type="text" id="age" name="age"><br>
    <!-- Gender -->
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br>
    <!-- Submit / Reset -->
    <input type="submit" value="Submit">
    <input type="reset">
</form>
    
<?php

/**
 * Series of exercises on PHP conditional structures.
*/  

if (isset($_GET['age']) && isset($_GET['gender'])) {
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $message = "Sorry you don't fit the criteria";
    if ($age >= 21 AND $age <= 40 AND $gender == 'female') {
        $message = "Welcome to the team !";
    }
    echo $message;
}

?>

</body>
</html>
