<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>

<?php

$str= "According to a researcher (sic) at Cambridge University , it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole .";
$str= explode(" ", $str);

foreach ($str as $word){
	echo str_shuffle($word)." ";
}

echo '<hr>';

$name = 'emilie';
echo ucfirst($name);

echo '<hr>';

echo 'The current time is: ' . date('l jS \of F Y h:i:s A');

echo '<hr>';

function sum($num1, $num2) {
    if (is_numeric($num1) AND is_numeric($num2)) {
        return 'The sum is: ' . ($num1 + $num2);
    } else {
        return 'Error: argument is not a number.';
    }
}

echo sum(5, 3);

echo '<hr>';

function make_acronym($string) {
    $temp = explode(' ', $string);
    $result = '';
    foreach($temp as $t)
        $result .= strtoupper($t[0]);
    return '"' . $string . '"' . ' becomes: ' . $result;
}

echo make_acronym('In code we trust');

echo '<hr>';

$words1 = ["caecotrophie", "chaenichthys","microsphaera", "sphaerotheca"];

function replace_ae($words1) {
    $result = [];
    foreach ($words1 as $word) {
        $result[] = str_replace("ae", "æ", $word);
    }
    return $result;
}

echo '<pre>';
print_r(replace_ae($words1));
echo '</pre>';

echo '<hr>';

$words2 = ["cæcotrophie", "chænichthys", "microsphæra", "sphærotheca"];

function replace_æ($words1) {
    $result = [];
    foreach ($words1 as $word) {
        $result[] = str_replace("æ", "ae", $word);
    }
    return $result;
}

echo '<pre>';
print_r(replace_æ($words1));
echo '</pre>';

echo '<hr>';

function feedback($message, $class = "info") {
    return '<div class=' . $class . '>' . ucfirst($class) . ': ' . $message . '.</div>';
}

echo feedback("Incorrect email address", "error");

echo '<hr>';

echo '<h3>Generate a new word</h3>';

if(isset($_POST['generate'])) { 
    echo 'Word length from 1 to 5 letters: ';
    echo get_random_word(rand(1, 5));
    echo '<br>';
    echo 'Word length from 7 to 15 letters: ';
    echo get_random_word(rand(7, 15));
}

if(isset($_POST['reset'])) {
    echo '';
}

function get_random_word($len) {
    $word = array_merge(range('a', 'z'), range('A', 'Z'));
    shuffle($word);
    return substr(implode($word), 0, $len);
}

?>

<p></p>
<form method="post">
    <input type="submit" name="generate" value="Generate"/>
    <input type="submit" name="reset" value="Reset"/>
</form>
<p></p>

<?php

echo '<hr>';

echo strtolower("STOP YELLING I CAN'T HEAR MYSELF THINKING!!");

echo '<hr>';

function calc_vol($radius, $height) {
    $volume = pow($radius, 2) * pi() * $height / 3;
    echo 'The volume of a cone with a radius of ' . $radius . ' and height of ' . $height . ' = ' . number_format($volume, 2, ',', ' ') . ' cm<sup>3</sup><br />';  
}

echo calc_vol(5, 2);
echo calc_vol(3, 4);

?>
    
</body>
</html>