<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>

<?php

$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');

foreach ($pronouns as $pronoun) {
    echo $pronoun . ' code';
    echo $pronoun == 'He/She' ? 's' : '';
    echo '<br>';
}

echo '<br><br>List using WHILE loop:<br><br>';
$i = 1;
while ($i <= 120) {
    echo $i . '<br>';
    $i++;
}

echo '<br><br>List using FOR loop:<br><br>';
for ($j=1; $j <= 120; $j++) { 
    echo $j . '<br>';
}

$names = [
    'Nathan Jacquet',
    'Christophe Vanderlinden',
    'Adrien Delpire',
    'Albert Ndizeye',
    'Jeremy Linard',
    'Maxendre Martin',
    'Robby Delvaux',
    'Jean-Charles Brognez',
    'Aurore Limage',
    'Calvin Jitnaree',
    'Robin Jacquemart',
    'Aleksandra Slowik',
    'Simon Duquaine',
    'Nicolas Denoel',
    'Jurgen Cruz',
    'Stephane Kalonji',
    'John Laterre',
    'Pierre Weets',
    'Mohamed Shmayssany',
    'François Wauters',
    'Bastien Dewerse',
    'Loic Hobe',
    'Gerardo Cella',
    'Marie Pierard'
];

echo '<br><br>List of startup participants:<br><br>';
foreach ($names as $name) {
    echo $name .'<br>';
}

$countries = array(
    'RU' => 'Russia (39.0%)',
    'UA' => 'Ukraine (5.9%)',
    'FR' => 'France (5.4%)',
    'ES' => 'Spain (4.9%)',
    'SE' => 'Sweden (4.4%)',
    'NO' => 'Norway (3.8%)',
    'DE' => 'Germany (3.5%)',
    'FA' => 'Finland (3.3%)',
    'PL' => 'Poland (3.1%)',
    'IT' => 'Italy (3.0%)',
    'UK' => 'United Kingdom (2.4%)',
    'RO' => 'Romania (2.3%)'
);

echo '<br><br>';
echo '<label for="countries">Choose a country: </label>';
echo '<select name="countries" id="countries">';
foreach($countries as $key => $value){
    echo '<option value=' . $key . '>' . $value . '</option>';
}
echo '<select>';

?>

<p></p>

</body>
</html>