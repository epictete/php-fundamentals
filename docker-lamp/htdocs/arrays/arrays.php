<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Arrays</title>
</head>
<body>

<?php

$countries = array( 'Belgium', 'France' , 'Germany', 'Netherlands', 'Ukraine' ); 

// echo '<pre>';
// print_r($countries);
// echo '</pre>';

// var_dump($countries);

$me = array (
    'firstname' => 'John',
    'age' => 36,
    'Favorite season of the year' => 'Winter',
    'like soccer' => false,
    'favourite_movies' => [
        'Star Wars', 'Matrix', 'Lord of the Rings'
    ]
);

$me['hobbies'] = [
    'Coding', 'Piano', 'Reading', 'Jogging', 'Movies'
];

$loulou = array (
    'firstname' => 'Audrey',
    'age' => 35,
    'favorite season of the year' => 'Summer',
    'like soccer' => false,
    'favourite_movies' => [
        'Harry Potter', 'Eat Pray Love', 'Twilight'
    ],
    'hobbies' => [
        'Cooking', 'Reading', 'Series'
    ]
);

$me['loulou'] = $loulou;

// echo $count_me = count($me['hobbies']);
// echo $count_loulou = count($loulou['hobbies']);
// echo ($count_me + $count_loulou);

$me['hobbies'][] = 'Taxidermy';
$me['firstname'] = 'Durant';

$possible_hobbies_via_intersection = array_intersect($me['hobbies'], $loulou['hobbies']);
$possible_hobbies_via_merge = array_merge($me['hobbies'], $loulou['hobbies']);

// echo '<pre>';
// print_r($possible_hobbies_via_intersection);
// print_r($possible_hobbies_via_merge);
// echo '</pre>';

$web_development = array (
    'frontend' => [],
    'backend' => []
);

$web_development['frontend'][] = 'xhtml';
$web_development['backend'][] = 'Ruby on Rails';
$web_development['frontend'][] = 'CSS';
$web_development['frontend'][] = 'Flash';
$web_development['frontend'][] = 'JavaScript';
$web_development['backend'][] = 'JavaScript';
$web_development['frontend'][0] = 'html';
unset($web_development['frontend'][2]);

echo '<pre>';
print_r($web_development);
echo '</pre>';


?>
    
</body>
</html>