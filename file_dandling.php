<?php
    //ファイルに読み書き
    $file_path = './anh.txt';
    if(file_exists($file_path)) //ファイルがある場合
     {
        //echo readFile($file_path);
        $file_handle = fopen($file_path, 'r');  //ファイルを開く      
        //ファイルを読む
        $file_content = fread($file_handle, 
                            filesize($file_path));
        //ファイルを閉じる
        fclose($file_handle);
        echo $file_content;
    } else //ファイルがない場合 
    {     
        $file_handle = fopen($file_path, 'w');
        $file_content = 'banana'.PHP_EOL.'mango'.PHP_EOL.'grape';
        fwrite($file_handle, $file_content);
        fclose($file_handle);
    }
?>