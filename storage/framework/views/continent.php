<?php  
$continents = [
    'Africa'=>[
        'Giraffa camelopardalis', 
        'Panthera leo'
    ],
    
    'Eurasia'=>[
        'Ursus arctos',
        'Canis lupus',
    ],
    'North America'=>[
        'Puma concolor', 
        'Canis latrans'
    ],
    
    'South America'=>[
        'Eunectes murinus',
        'Cingulata',
    ],
    'Australia'=>[
        'Canis lupus dingo', 
        'Ornithorhynchus anatinus'
    ],
    
    'Antarctica'=>[
        'Physeter macrocephalus',
        'Aptenodytes forsteri',
    ]
];
//Массив из животных содержащих 2 слова в имени
$first = [];
$second = [];
foreach ($continents as $continent => $animalNames) {
    foreach ($animalNames as $animalName) {
        $animals = [];
        $str = explode(' ', $animalName);
        if (count($str)==2) {
            $animals[] = $str;
            $first[$continent][] = $str[0];
            $second[] = $str[1];
        }
    }
}
shuffle($second);
// Создаем новый массив и мешаем 1 и 2 слово
$mixedAnimals = [];
foreach ($first as $continent => $animalNames) {
    foreach ($animalNames as $animalName) {
        $mixedAnimals[$continent][] = $animalName . ' ' . array_shift($second);
    }
}
// Вывод форматированного массива
foreach ($mixedAnimals as $continent => $animalNames) {
    echo "<h2>$continent</h2>";
    echo (implode(", ", $animalNames)) . ".";
}