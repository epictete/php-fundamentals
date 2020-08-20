<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Different greetings according to time</title>
</head>
<body>
    
<?php

/**
 * Series of exercises on PHP conditional structures.
*/  

// 2. "Different greetings according to time" Exercise

$local_timezone = date_default_timezone_set('Europe/Brussels');
$now = date('m/d/Y h:i:s a', time()); // How to get the current time in PHP ? Google is your friend ;-)
echo "<br>The local timezone is: " . $local_timezone;
echo "<br>The local time is: " . $now;

// Test the value of $now and display the right message according to the specifications.
if ($now > 5 AND $now <= 9) {
    echo "<br>Good morning !";
} else if ($now > 9 AND $now <= 12) {
    echo "<br>Good day !";
} else if ($now > 12 AND $now <= 16) {
    echo "<br>Good afternoon !";
} else if ($now > 16 AND $now <= 21) {
    echo "<br>Good evening !";
} else {
    echo "<br>Good night !";
}

?>

</body>
</html>
