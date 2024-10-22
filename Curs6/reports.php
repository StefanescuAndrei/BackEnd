<?php

require_once 'export_to_csv.php';

$persons = [
    [
        'first_name' => 'Marian',
        'last_name' => 'Jones',
        'phone' => '0749046666',
        'email' => 'marian.jones@example.com',
    ],
    [
        'first_name' => 'John',
        'last_name' => 'Cena',
        'phone' => '0749049999',
        'email' => 'cena.jones@example.com',
    ],
    [
        'first_name' => 'Cristisor',
        'last_name' => 'Iovulescu',
        'phone' => '0749696969',
        'email' => 'cristisor.vyovulescu@example.com',
    ],
];

exportToCSV($persons, 'persons.csv', 'w+');
