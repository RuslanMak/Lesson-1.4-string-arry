<?php

$countrys = [
    'Canada' => ['Canadian horse', 'American beaver'],
    'Finland' => ['Brown bear', 'Holly blue'],
    'Iraq' => ['Chukar partridge', 'Goat'],
    'Japan' => ['Green pheasant', 'Carp'],
    'Mexico' => ['Golden eagle', 'Jaguar', 'Vaquita'],
];

echo '<pre>';
//print_r($countrys);

foreach ($countrys as $country => $animals) {
    foreach ($animals as $animal) {
        if (strpos($animal, ' ')) {
//            echo "<h2>$country</h2>";
//            echo $animal;
            list($word1[], $word2[]) = explode(' ', $animal);
            list($countrys2[]) = explode(' ', $country);
        }
    }
}

shuffle($word2);

$i = 0;

foreach ($word1 as $key => $word) {
    echo "<h2>$countrys2[$i]</h2>";
    $i++;
    echo $word . " " . $word2[$key] . "\n";
}

exit;




//Version-1 -  It is not the best. because it has some problem
$countrys = [
    'Canada' => ['Canadian horse', 'American beaver'],
    'Finland' => ['Brown bear', 'Holly blue'],
    'Iraq' => ['Chukar partridge', 'Goat'],
    'Japan' => ['Green pheasant', 'Carp'],
    'Mexico' => ['Golden eagle', 'Jaguar', 'Vaquita'],
];

echo '<pre>';
//print_r($countrys);

foreach ($countrys as $country => $animals) {
    foreach ($animals as $animal) {
        if (strpos($animal, ' ')) {
            list($word1[], $word2[]) = explode(' ', $animal);
            break;
        }
    }
}

shuffle($word2);

foreach ($word1 as $key => $word) {
    $countrys2 = key($countrys);
    echo "<h2>$countrys2</h2>";
    next($countrys);
    echo $word . " " . $word2[$key] . "\n";
}


