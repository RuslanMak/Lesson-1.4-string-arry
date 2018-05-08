<?php

$countries = [
    'Canada' => ['Canadian horse', 'North American beaver'],
    'Finland' => ['Brown bear', 'Holly blue'],
    'Iraq' => ['Chukar partridge', 'Goat'],
    'Japan' => ['Green pheasant', 'Carp'],
    'Mexico' => ['Golden eagle', 'Jaguar', 'Vaquita'],
];

$word1 = [];
$word2 = [];

foreach ($countries as $country => $animals) {
    foreach ($animals as $animal) {
        $two_animals = [];
        $str = explode(' ', $animal);

        if (count($str) == 2) {
            $two_animals[] = $str;
            $part1[$country][] = $str[0];
            $part2[] = $str[1];
        }
    }
}

shuffle($part2);

$fantastic_animals = [];

foreach ($part1 as $country => $animals) {
    foreach ($animals as $animal) {
        $fantastic_animals[$country][] = $animal . ' ' . array_shift($part2);
    }
}

foreach ($fantastic_animals as $country => $animal) {
    echo "<h2>$country</h2>";
    echo (implode(", ", $animal)) . ".";
}

exit;

//---- выправил ошибту в нижнем вареанте -----

$countries = [
    'Canada' => ['Canadian horse', 'North American beaver'],
    'Finland' => ['Brown bear', 'Holly blue'],
    'Iraq' => ['Chukar partridge', 'Goat'],
    'Japan' => ['Green pheasant', 'Carp'],
    'Mexico' => ['Golden eagle', 'Jaguar', 'Vaquita'],
];

echo '<pre>';
$word1 = [];
$word2 = [];
$countries2 = [];

foreach ($countries as $country => $animals) {
    foreach ($animals as $animal) {
        if (substr_count($animal, " ") == 1) {
            list($word1[], $word2[]) = explode(' ', $animal);
            list($countries2[]) = explode(' ', $country);
        }
    }
}

shuffle($word2);
$i = 0;

foreach ($word1 as $key => $word) {
    $not_repeat = array_unique($countries2);

    if (isset($not_repeat[$i]) == "") {
        echo ", ";
    } else {
        echo "<h2>$not_repeat[$i]</h2>";
    }

    $i++;
    echo $word . " " . $word2[$key];
}