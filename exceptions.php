<?php
    function divide($a,$b){
        if(!$b){
            throw new Exception("Oならできません");
        }
        return $a/$b;
    }
    //echo divide(5,0);

    try{
        echo divide(10,2)."\n";
        echo divide(5,0);
        echo "no errors";
    }catch(Exception $e){
        echo "Caught exception : " . $e->getMessage(). "\n";
    }finally  //エラーでも実行する
    {
        echo "ここはFinallyです";
    }
?>