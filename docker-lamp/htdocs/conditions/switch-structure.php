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
    switch ($_GET['grade']) {
        case 0:
        case 1:
        case 2:
        case 3:
        case 4:
            echo "This work is really bad. What a dumb kid!";
            break;
        case 5:
        case 6:
        case 7:
        case 8:
        case 9:
            echo "This is not sufficient. More studying is required.";
            break;
        case 10:
            echo "Barely enough!";
            break;
        case 11:
        case 12:
        case 13:
        case 14:
            echo "Not bad!";
            break;
        case 15:
        case 16:
        case 17:
        case 18:
            echo "Bravo, bravissimo!";
            break;
        default:
            echo "Too good to be true : confront the cheater!";
            break;
    }
}

?>

</body>
</html>
