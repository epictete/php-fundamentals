<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake Excuse Notes Generator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<p></p>
<div class="container">
<div class="jumbotron">
<h1 class="display-4">Hello there!</h1>
<p class="lead">Welcome to my Fake Excuse Notes Generator</p>
<hr class="my-4">
<p class="font-italic">Just fill in the form below to generate a ready-made text that you can send directly to the professor.</p>
<form method="get" action="">
    <!-- Name -->
	<label for="name"><br>What is the student's name : </label>
	<input type="text" name="name"><br>
    <!-- Gender -->
    <p>What is the student's gender ?</p>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br><br>
    <!-- Teacher -->
    <label for="teacher">What is the teacher's name : </label>
	<input type="text" name="teacher"><br>
    <!-- Reason -->
    <p>What is the reason ?</p>
    <input type="radio" id="illness" name="reason" value="illness">
    <label for="illness">Illness</label><br>
    <input type="radio" id="death" name="reason" value="death">
    <label for="death">Death of the pet (or a family member)</label><br>
    <input type="radio" id="extra" name="reason" value="extra">
    <label for="extra">Significant extra-curricular activity</label><br>
    <input type="radio" id="code" name="reason" value="code">
    <label for="code">Learn to code</label><br><br>
    <!-- Submit -->
	<input type="submit" value="Submit" class="btn btn-primary">
    <input type="reset" class="btn btn-secondary">
</form>
</div>

<div class="card">
  <div class="card-header">
    Your customised excuse note:
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>
      <?php

        if (isset($_GET['name'], $_GET['gender'], $_GET['teacher'], $_GET['reason'])) {

        // Variables declaration
        $name = $_GET['name'];
        $gender = $_GET['gender'];
        $teacher = $_GET['teacher'];
        $reason = $_GET['reason'];
        $excuses = [
            " is very sick.",
            "'s goldfish died last night.",
            " wants to volunteer in the fight against COVID-19.",
            " needs to learn coding!"
        ];
        $local_timezone = date_default_timezone_set('Europe/Brussels');
        $now = date('m/d/Y h:i:s a', time());

        // Text elements
        $greeting =
        "<br><br>Dear professor "
        . $teacher
        . ",<br>Please excuse my "
        . ($gender == 'male' ? 'son ' : 'daughter ')
        . $name
        . " for "
        . ($gender == 'male' ? 'his ' : 'her ')
        . "absence today.";

        $justification =
        "<br>I am very sorry, but ". $name;

        $ending = "<br>Please be assured that "
        . $name
        . " will be back soon.<br>Thank you very much in advance for your kind understanding.<br>Best regards.";

        // Display final text
        echo '<br>';
        echo date('l, jS \of F Y');
        echo $greeting;
        echo $justification;

        switch ($reason) {
            case 'illness':
                echo $excuses[0];
                break;
            case 'death':
                echo $excuses[1];
                break;
            case 'extra':
                echo $excuses[2];
                break;
            case 'code':
                echo $excuses[3];
                break;
        }

        echo $ending;
        }

        ?>
      </p>
      <footer class="blockquote-footer">A loving parent</footer>
    </blockquote>
  </div>
</div>

</div>
<p></p>



</body>
</html>
