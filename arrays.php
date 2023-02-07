<?php
    //配列を宣言
    $some_numbers = [1,2,3,4,5];
    $fruits = ['apple', 'melon','lemon'];
    print_r($some_numbers);
    print_r($fruits);

    //キーは値
    $colors = [
        3 => 'red',
        5 => 'green',
        7 => 'blue'
    ];
    echo $colors[3];

    $hex_colors = [
        'red' => '#FF0000',
        'green' => '#00FF00',
        'blue' => '#0000FF',  
    ];
    echo $hex_colors['green'];

    //配列の配列
    $person = [
        'full_name' => 'Nguyen Thi Anh',
        'age' => 25,
        'email' => 'anhnt18@rikkeisoft.com' 
    ];
    print_r($person);
    echo $person['email'];

    $persons = [
        [
            'full_name' => 'Nguyen Duc Hoang',
            'age' => 43,
            'email' => 'sunlight4d@gmail.com' 
        ],
        [
            'full_name' => 'John Dang',
            'age' => 18,
            'email' => 'john@gmail.com' 
        ],
        [
            'full_name' => 'Kelly',
            'age' => 40,
            'email' => 'kelly123@gmail.com' 
        ]
    ];
    //print_r($persons);
    //echo $persons[2]['email'];
    //ほかのところに送る
    var_dump(json_encode($persons));
?>