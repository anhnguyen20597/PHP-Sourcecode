<?php

    $full_name = 'Nguyen Thi Anh';
    //配列の長さ
    echo "length: " . strlen($full_name);
    
    //配列が逆に表示され
    echo strrev($full_name);
    
    //配列がすべて小文字になる
    echo strtolower($full_name);
    //配列がすべて大文字になる
    echo strtoupper($full_name);

    //空白のとことに'-'を変える
    echo str_replace(' ', '-', $full_name);

    //最初の配列にnguyenがあるか
    if(str_starts_with(strtolower($full_name), 'nguyen')) 
    {
        echo "His name starts with nguyen<br>";
    }
    //最後の配列にAnhがあるか
    if(str_ends_with(strtolower($full_name), 'anh')) {
        echo "His name ends with anh <br>";
    }
    echo "<h1>html string</h1>";    
    //htmlspecialcharsを通訳しない、すべて表示する。
    echo htmlspecialchars("<h1>html string</h1>");
    //echo "<script>alert('This is javascript code')</script>";
    echo htmlspecialchars("<script>alert('This is javascript code')</script>");
    //htmlspecialchars used to get data in form
    printf('<br>%s likes %s', 'Anh', 'Mercedes G63');
    printf('pi = %f', 3.14);
    
?>