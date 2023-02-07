<?php
    
    session_start();
    //全部の情報を削除する
    session_destroy();
    //戻りたい画面
    header('Location: /sessions.php');
?>