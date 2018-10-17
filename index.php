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

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Жестокое обращение с животными</title>
</head>
<body>
 
 <?php 
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
 ?>
  
</body>
</html>
