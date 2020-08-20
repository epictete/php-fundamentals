<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School sucks!</title>
</head>
<body>

<form action="" method="get">
    <!-- Grade -->
    <label for="grade">Student's grade: </label><br>
    <input type="text" id="grade" name="grade"><br>
    <!-- Submit / Reset -->
    <input type="submit" value="Submit">
    <input type="reset">
</form>
    
<?php

/**
 * Series of exercises on PHP conditional structures.
*/  

if (isset($_GET['grade'])) {
    $grade = $_GET['grade'];
    if ($grade < 5) {
        echo "This work is really bad. What a dumb kid!";
    } else if ($grade >= 5 AND $grade < 10) {
        echo "This is not sufficient. More studying is required.";
    } else if ($grade == 10) {
        echo "Barely enough!";
    } else if ($grade > 10 AND $grade < 15) {
        echo "Not bad!";
    } else if ($grade >= 15 AND $grade < 19) {
        echo "Bravo, bravissimo!";
    } else {
        echo "Too good to be true : confront the cheater!";
    }
}

?>

</body>
</html>
