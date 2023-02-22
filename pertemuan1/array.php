<?php
// array index
$animals = ['Kambing', 'Kucing', 'Ayam'];

// akses array
foreach($animals as $animal){
    echo $animal . '<br>';
    
}

// array assosiatif
$student = [
    'name' => 'Rizqi Naufal',
    'major' => 'Informatic',
    'age' => 20
];

echo $student['name'];