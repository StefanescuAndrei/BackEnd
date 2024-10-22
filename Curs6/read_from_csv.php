<?php

$file = fopen('persons.csv', 'r');

$persons = [];
$columns = fgetcsv($file);
while ($data = fgetcsv($file)) {
    $person = $data;
    foreach ($person as $key => $value) {
        $person[$columns[$key]] = $value;
        unset($person[$key]);
    }
    $persons[] = $person;

}


//TODO: de facut functie si de folosit in reports.php codul de mai sus

echo '<pre>';
print_r($persons);
