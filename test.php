<?php
    session_start();

    if(isset($_SESSION['email'])) {
        echo "Welcome to Home<br>";
        echo "email: " . $_SESSION['email'];
        echo "<a href='/logout.php'>Logout</a>";
    } else {   
        echo "Welcome guest to Dashboard";
        echo "<a href='/sessions.php'>Back to Login</a>";
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>I'm Anh</h1>
</body>
</html>