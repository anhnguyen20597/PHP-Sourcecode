<?php
    /*$y = 20;
    function sayHello($name) {
        global $y; //グローバル変数を宣言する
        echo "y = $y<br>";
        $x = 123; //ローカル変数
        echo "Hello $name";
    }
    sayHello("anhnt18<br>");  //関数を呼び出す
    function sum($a = 0, $b = 0) {
        //default arguments' values
        return $a + $b;
    }
    echo sum(2, 3);
    
    $multiply = function ($a, $b) {
        return $a * $b;
    };
    echo $multiply(3,4);
    
    $substract = fn($a, $b) => $a - $b;
    echo $substract(6, 2);
    */
    //配列の数を数える
    $names = ['Nguyen', 'Thi', 'Anh', 'nt18'];
    echo $names;
    //echo "number of items : ".count($names);
    //配列にAnhの名前があるかどうか確認
    //var_dump(in_array('Anh', $names));
    
    //配列末尾に追加する
    //array_push($names, 'Nan');
    //print_r($name);

    //最初に追加する
    //array_unshift($names, 'satoshi');

    //最後に削除する
    array_pop($names);
    //最初に削除する
    array_shift($names);

    unset($names[3]);

    //配列を分ける
    $chunked_array = array_chunk($names, 3);
    print_r($chunked_array);
    $array_one = [1, 3, 5];
    $array_two = [2, 4, 6];

    //配列を結合するマージと言う
    $merged_array = array_merge($array_one, $array_two);    
     
    //配列を同じようなコピーする、値が同じ.保存するところが違います
    $array_three = [...$merged_array];

    $merged_array[0] = 111;
    //print_r($merged_array);
    //print_r($array_three);
    
    $array_four = [...$array_one, ...$array_two];
    //print_r($array_four);
    
    $a = ['name', 'email', 'age'];
    $b = ['Anh', 'anhnt18@rikkeisoft.com', 18];
    $c = array_combine($a, $b);
    //print_r($c);
    //print_r(array_flip($c));
    // print_r(array_keys($c));
    // print_r(array_values($c));
    
    //range
    $numbers = range(0, 10);
    print_r($numbers);
    
    //
    $squared_numbers = array_map(fn($each_number) => 
        $each_number * $each_number
    , $numbers);
    print_r($squared_numbers);
    
    $filtered_numbers = array_filter($numbers, 
        fn($each_number) => $each_number % 2 == 0);
    print_r($filtered_numbers);
    
?> 