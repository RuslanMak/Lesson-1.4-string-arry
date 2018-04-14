<?php

$countries = [
    'Canada' => ['Canadian horse', 'North American beaver'],
    'Finland' => ['Brown bear', 'Holly blue'],
    'Iraq' => ['Chukar partridge', 'Goat'],
    'Japan' => ['Green pheasant', 'Carp'],
    'Mexico' => ['Golden eagle', 'Jaguar', 'Vaquita'],
];

echo '<pre>';
//print_r($countries);

$word1 = [];
$word2 = [];
$countries2 = [];

foreach ($countries as $country => $animals) {
    foreach ($animals as $animal) {
        $space = substr_count($animal, " ");
        if (strpos($animal, ' ') && $space < 2) {
//            echo "<h2>$country</h2>";
//            echo $animal;
            list($word1[], $word2[]) = explode(' ', $animal);
            list($countries2[]) = explode(' ', $country);
//            break;
        }
    }
}

shuffle($word2);

$i = 0;

foreach ($word1 as $key => $word) {
    $not_repeat = array_unique($countries2);
    if ($not_repeat[$i] == "") {
        echo ", ";
    } else {
        echo "<h2>$not_repeat[$i]</h2>";
    }
    $i++;
    echo $word . " " . $word2[$key];
}
