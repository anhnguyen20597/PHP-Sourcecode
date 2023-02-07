<?php
    session_start();  //sessionを始まる。

    if(isset($_POST['submit'])) //submitボタンを押す場合 
    {
        $email = filter_input(INPUT_POST, 'email', 
                    FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST['password'];
        if($email == 'anhnt18@rikkeisoft.com'  //このアドレスであればログインできる
            && $password == '123456') {
            $_SESSION['email'] = $email;    
            header('Location: ./test.php');
        } else {
            echo "Incorrect email/password";
        }
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
    <form 
        //actionはphpのURLをつながる
        action="<?php echo 
            htmlspecialchars($_SERVER['PHP_SELF']); ?>"
        method="POST"
        >
        <h3>Login to your account</h3>
        <div>
            <label for="name">Email:</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password">
        </div>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>