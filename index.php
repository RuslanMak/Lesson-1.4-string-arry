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

foreach ($countries as $country => $animals) {
    foreach ($animals as $animal) {
        $space = substr_count($animal, " ");
        if (strpos($animal, ' ') && $space < 2) {
//            echo "<h2>$country</h2>";
//            echo $animal;
            list($word1[], $word2[]) = explode(' ', $animal);
            list($countries2[]) = explode(' ', $country);
        }
    }
}

shuffle($word2);

$i = 0;

foreach ($word1 as $key => $word) {
    echo "<h2>$countries2[$i]</h2>";
    $i++;
    echo $word . " " . $word2[$key] . "\n";
}

