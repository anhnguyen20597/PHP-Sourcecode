<?php
    //24時間に保存する
    setcookie('name','Anh',time() + 24 * 3600);

    if(isset($_COOKIE['name'])){
        echo $_COOKIE['name'];
    }

    setcookie('name','',time() - 24 * 3600);

?>