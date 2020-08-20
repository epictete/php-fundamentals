<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unicorn</title>
</head>
<body>

<form action="" method="get">
    <!-- Type -->
    <p>Are you a human, a cat or a unicorn ?</p>
    <input type="radio" id="human" name="type" value="human">
    <label for="human">Human</label><br>
    <input type="radio" id="cat" name="type" value="cat">
    <label for="cat">Cat</label><br>
    <input type="radio" id="unicorn" name="type" value="unicorn">
    <label for="unicorn">Unicorn</label><br>
    <!-- Submit / Reset -->
    <input type="submit" value="Submit">
    <input type="reset">
</form>
    
<?php

/**
 * Series of exercises on PHP conditional structures.
*/  

if (isset($_GET['type'])) {
    $type = $_GET['type'];
    $human = '<iframe src="https://giphy.com/embed/xT1R9XIOLQzGsNRnbi" width="480" height="360" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/animation-black-and-white-vintage-xT1R9XIOLQzGsNRnbi">via GIPHY</a></p>';
    $cat = '<iframe src="https://giphy.com/embed/yFQ0ywscgobJK" width="398" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/facepalm-yFQ0ywscgobJK">via GIPHY</a></p>';
    $unicorn = '<iframe src="https://giphy.com/embed/l0HlMr2G3EKFgpUY0" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/l0HlMr2G3EKFgpUY0">via GIPHY</a></p>';    

    echo ($type == 'human' ? $human : ($type == 'cat' ? $cat : $unicorn));
}

?>

</body>
</html>
