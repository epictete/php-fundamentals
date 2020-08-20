<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Different greetings according to age</title>
</head>
<body>

<form method="get" action="">
    <!-- Age -->
	<label for="age">What is your age : </label>
	<input type="text" name="age"><br>
    <!-- Gender -->
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br>
    <!-- Language -->
    Do you speak English ?<br>
    <input type="radio" id="yes" name="language" value="yes">
    <label for="yes">Yes</label><br>
    <input type="radio" id="no" name="language" value="no">
    <label for="no">No</label><br>
    <!-- Submit -->
	<input type="submit" name="submit" value="Greet me now">
</form>

<?php
    
/**
 * Series of exercises on PHP conditional structures.
*/  

// 3. "Different greetings according to age" Exercise

if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['language'])) {
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $english = ($_GET['language']);
    if ($english == 'yes') {
        if ($gender == 'male') {
            if ($age < 12) {
                echo "Hello mister kiddo!";
            } else if ($age >= 12 AND $age < 18) {
                echo "Hello mister Teenager !";
            } else if ($age >= 18 AND $age < 115) {
                echo "Hello mister Adult !";
            } else {
                echo "Wow! Still alive ? Are you a mister robot, like me ? Can I hug you ?";
            }
        } else {
            if ($age < 12) {
                echo "Hello miss kiddo!";
            } else if ($age >= 12 AND $age < 18) {
                echo "Hello miss Teenager !";
            } else if ($age >= 18 AND $age < 115) {
                echo "Hello miss Adult !";
            } else {
                echo "Wow! Still alive ? Are you a miss robot, like me ? Can I hug you ?";
            }
        }
    } else {
        if ($gender == 'male') {
            if ($age < 12) {
                echo "Aloha mister kiddo!";
            } else if ($age >= 12 AND $age < 18) {
                echo "Aloha mister Teenager !";
            } else if ($age >= 18 AND $age < 115) {
                echo "Aloha mister Adult !";
            } else {
                echo "Wow! Aloha ? Are you a mister robot, like me ? Can I hug you ?";
            }
        } else {
            if ($age < 12) {
                echo "Aloha miss kiddo!";
            } else if ($age >= 12 AND $age < 18) {
                echo "Aloha miss Teenager !";
            } else if ($age >= 18 AND $age < 115) {
                echo "Aloha miss Adult !";
            } else {
                echo "Wow! Still alive ? Are you a miss robot, like me ? Can I hug you ?";
            }
        }  
    } 
}

?>

</body>
</html>
