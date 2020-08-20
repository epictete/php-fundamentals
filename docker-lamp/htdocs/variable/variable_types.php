<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = "John";
    $age = 36;
    $eyes = "brown";
    $family = [
        0 => "Audrey",
        1 => "Jean-Pierre",
        2 => "Claudine",
    ];
    ?>
    <p>Hi! My name is <?php echo$name ?></p>
    <p>I am <?php echo$age ?> years old</p>
    <p>My eyes are <?php echo$eyes ?></p>
    <p>The first person in my family is <?php echo$family[0]?></p>
</body>
</html>

