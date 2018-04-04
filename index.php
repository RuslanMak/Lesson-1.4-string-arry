<?php

$countrys = [
    'Canada' => ['Canadian horse', 'North American beaver'],
    'Finland' => ['Brown bear', 'Holly blue'],
    'Iraq' => ['Chukar partridge', 'Goat'],
    'Japan' => ['Green pheasant', 'Carp'],
    'Mexico' => ['Golden eagle', 'Jaguar', 'Vaquita'],
];

echo '<pre>';
print_r($countrys);

$animals_2_words = array();

foreach ($countrys as $country => $animals) {
    $animals_2_words[$country] = preg_grep ("~\s{1}~",$animals);
}

foreach ($animals_2_words as $country => $animals) {
    foreach ($animals as $animal) {
        echo "<h2>$country</h2>";
        echo $animal . "<br>";
    }
}

foreach ($animals_2_words as $country => $animals) {
    foreach ($animals as $animal) {
        $words = explode(" ", $animal);
        shuffle($words);
        echo implode(", ", $words);
    }
}
?>




<?php
//$animals = [
//    'Algeria' => 'Fennec fox',
//    'Anguilla' => 'Zenaida dove',
//    'Argentina' => 'Rufous hornero',
//    'Bhutan' => 'Takin',
//    'Cambodia' => 'Kouprey',
//    'China' => 'Giant panda',
//    'Canada' => 'Canadian horse',
//    'Croatia' => 'Pine marten',
//    'Ethiopia' => 'Lion',
//    'Finland' => 'Brown bear',
//
//
//    'Greece' => 'Dolphins',
//    'Haiti' => 'Hispaniolan Trogan',
//    'Japan' => 'Carp',
//    'Oman' => 'Arabian oryx',
//    'Romania' => 'Lynx',
//];
//
//echo '<pre>';
//print_r($animals);
//
//$animals_2_words = array();
//
//foreach ($animals as $country => $animal) {
//    if (strpos($animal, ' ') !== false) {
//        array_push($animals_2_words, $animal);
//        echo $country." ".$animal."\n";
//    }
//}
//
//print_r($animals_2_words);
//print_r($animals);
//?>


