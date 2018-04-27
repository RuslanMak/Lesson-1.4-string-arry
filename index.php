<?php
//
//$countries = [
//    'Canada' => ['Canadian horse', 'North American beaver'],
//    'Finland' => ['Brown bear', 'Holly blue'],
//    'Iraq' => ['Chukar partridge', 'Goat'],
//    'Japan' => ['Green pheasant', 'Carp'],
//    'Mexico' => ['Golden eagle', 'Jaguar', 'Vaquita'],
//];
//
//echo '<pre>';
//$i = 0;
//
//$word1 = [];
//$word2 = [];
//
//foreach ($countries as $country => $animals) {
//    foreach ($animals as $animal) {
//
//        if (substr_count($animal, " ") == 1) {
//            list($word1[], $word2[]) = explode(' ', $animal);
//            $result = implode(', ', $animals);
//        }
//    }
//}
//
//shuffle($word2);
//
//
////$result = implode(', ', $animals);
//echo '<pre>';
//$word2 = explode(' ', $result);
//print_r($word2);
//$word3 = implode(', ', $word2);
////print_r($result);
//print_r($word3);
//
//foreach ($countries as $country => $animals) {
//    echo "<h2>$country</h2>";
//    foreach ($animals as $animal) {
////        $result = implode(', ', $animals);
////        print_r($result);
//
//        if (substr_count($animal, " ") == 1) {
////        $result = implode(', ', $animals);
////            $animals = explode(' ', $result);
////            echo $result . " ";
////            $result = implode(', ', $animals);
////            print_r($result);
//            echo $word1[$i] . " ";
//            echo $word2[$i] . " ";
//            $i++;
//        }
//    }
//}
//
//exit;


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
exit;

$countries = [
    'Canada' => ['Canadian horse', 'North American beaver'],
    'Finland' => ['Brown bear', 'Holly blue'],
    'Iraq' => ['Chukar partridge', 'Goat'],
    'Japan' => ['Green pheasant', 'Carp'],
    'Mexico' => ['Golden eagle', 'Jaguar', 'Vaquita'],
];
echo '<pre>';
$i = 0;
$word1 = [];
$word2 = [];
foreach ($countries as $country => $animals) {
    foreach ($animals as $animal) {
        if (substr_count($animal, " ") == 1) {
            list($word1[], $word2[]) = explode(' ', $animal);
        }
    }
}
shuffle($word2);
$result = implode(', ', $word2);
echo '<pre>';
$word2 = explode(' ', $result);
foreach ($countries as $country => $animals) {
    echo "<h2>$country</h2>";
    foreach ($animals as $animal) {
        if (substr_count($animal, " ") == 1) {
            echo $word1[$i] . " ";
            echo $word2[$i] . " ";
            $i++;
        }
    }
}