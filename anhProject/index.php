<?php  
    require 'components/header.php'; //ぜひこのファイルがある
    $name = $email = $body = '';
    $name_error = $email_error = $body_error = '';    
    if(isset($_POST['submit'])) {
        //お名前を確認する      
        if(empty($_POST['name'])) {
            $name_error = '名前を確認する';
        } else {
            $name = htmlspecialchars($_POST['name']);    
        }
        if(empty($_POST['email']))  //メールを確認する  
        {
            $email_error = 'メールを確認する';
        } else {
            $email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_EMAIL);    
        }
        echo $_POST['body'];
        if(empty($_POST['body'])) {
            $body_error = '情報を確認する';
        } else {
            $body = filter_input(INPUT_POST, 'body',
                        FILTER_SANITIZE_FULL_SPECIAL_CHARS);    
        } 
        $validate_sucess = empty($name_error) && empty($email_error)&& empty($body_error);
        if($validate_sucess) {
            $sql = "INSERT INTO feedback(name, email, body)VALUES(?, ?, ?)";
            try {
                $statement = $connection->prepare($sql);
                $statement->bindParam(1, $name);
                $statement->bindParam(2, $email);
                $statement->bindParam(3, $body);
                $statement->execute();
                header("Location: feedback_list.php");
            }catch(PDOException $e) {
                echo "Cannot insert feedback into database".$e->getMessage();
            }
        }
    }
    ?>
    <h1>おはようございます！</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
          method="post" >
        <div class="mb-3">
            <input type="text" class="form-control 
            <?php echo $name_error ? 'is-invalid' : ''; ?>"
            name="name" placeholder="お名前は ?">
            <p class="text-danger">
                <?php echo $name_error; ?>
            </p>
        </div>
        <div class="mb-3">
            <input type="email" class="form-control
            <?php echo $email_error ? 'is-invalid' : ''; ?>" 
            name="email" placeholder="メールアドレス">
        </div>
        <p class="text-danger">
            <?php echo $email_error; ?>
        </p>
        <div class="mb-3">
            <textarea class="form-control
            <?php echo $name_error ? 'is-invalid' : ''; ?>" 
            name="body" placeholder="コメント" 
            rows="2"></textarea>
        </div>
        <p class="text-danger">
            <?php echo $body_error; ?>
        </p>
        <div class="mb-3"> 
            <input type="submit" 
                class="btn btn-primary"
                name="submit" value="送信">
        </div> 
    </form>
<?php include 'components/footer.php'; ?>