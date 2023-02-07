<?php
    
    if(isset($_POST['submit'])) {
        //ファイルが下記を通りに合ってるか確認
        $permitted_extensions = ['png', 'jpg', 'jpeg', 'gif'];        
        $file_name = $_FILES['upload']['name'];
        if(!empty($file_name)) {
            //print_r($_FILES);
            $file_size = $_FILES['upload']['size'];
            $file_tmp_name = $_FILES['upload']['tmp_name']; 
            //同じファイル名でも数字を変えて保存する 
            $generated_file_name = time().'-'.$file_name;   
            //アップロードした写真がuploadsファイルに追加して保存する       
            $destination_path = "uploads/${generated_file_name}";
            $file_extension = explode('.', $file_name);
            $file_extension = strtolower(end($file_extension));
            //echo "$file_name, $file_size, $file_extension, $destination_path";            
            
            if(in_array($file_extension, $permitted_extensions)) {
                if($file_size <= 1000000) {
                    move_uploaded_file($file_tmp_name, $destination_path);
                    $message = '<p style="color:green;">
                        アップロードしました</p>'; 
                } else {
                    $message = '<p style="color:red;">
                        写真のサイズが大きいすぎる</p>';                    
                }
            } else {
                $message = '<p style="color:red;">
                        写真のタイプではない</p>';
            }
        } else {
            $message = '<p style="color:red;">
                写真のファイルがないので、もう一度試してください</p>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>File upload in PHP</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" 
        method="post"
        enctype="multipart/form-data"
        >
        Choose your image to upload
        <input type="file" name="upload">
        <input type="submit" value="submit" name="submit">
    </form>
    <?php echo $message ?? '' ?>
</body>
</html>