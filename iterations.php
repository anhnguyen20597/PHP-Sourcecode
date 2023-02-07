<?php
    for($i = 0; $i <= 10; $i++) {
        echo  "$i<br>";
        //echo "i = $i<br>";
    }
     
    $i = 0;
    while($i<=10){
        echo "i = $i<br>";
        $i++;
    }

    do{
        echo "i = $i<br>";
        $i++;
    }while($i <=10 );

    $fruits = ['apple', 'pineapple', 'orange', 'lemon'];
    for($i = 0; $i < count($fruits); $i++) {
        echo "$fruits[$i] <br>";
    }
     foreach ($fruits as $index => $fruit) {
        echo "$index - $fruit <br>";
    }
?>