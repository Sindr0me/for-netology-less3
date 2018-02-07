
<?php
$continents = [
    'Africa' => [
        'African elephant',
        'Crocodile',
        'Spotted hyena',
        'Zebra',
        'Chimpanzee',
        'Python',
        'Scorpio',
        'Canna',
    ],
    'Eurasia' => [
        'Tapir',
        'Snow leopard',
        'Varan',
        'Big panda',
        'Capercaillie',
        'Pheasant',
        'Mantis',
        'Brown bear'
    ],
    'Antarctida' => [
        'Aptenodytes forsteri',
        'Pygoscelis adeliae',
        'Mirounga angustirostris',
        'Eubalaena australis',
        'Phocoena dioptrica'
    ]
];
 
$name_two_words = [];

foreach($continents as $continent => $animals){
    foreach($animals as $animal){
     if (count(explode(' ', $animal)) === 2) 
                {
                    $name_two_words[] = $animal; 
                }          
     }
}

echo '<pre>';
var_dump($name_two_words);
echo '<pre>';


$first = [];
$second = [];

// перемешка 2 слов с помощью shuffle
foreach($name_two_words as $name){
    $parts = explode(' ', $name);
    $first[] = $parts[0];
    $second[] = $parts[1];
}
shuffle($second);

$final_result2 = [];
 
for($i = 0; $i < count($name_two_words); $i++){
    $final_result2[]= $first[$i] . ' ' . $second[$i];  
}

var_dump($final_result2);


