<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ternary operators</title>
</head>
<body>

<form action="" method="get">
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

if (isset($_GET['gender'])) {
    $hello = ($_GET['gender'] == "male") ? "Hello mister!" : "Hello miss!";
    echo $hello;
}

?>

</body>
</html>
