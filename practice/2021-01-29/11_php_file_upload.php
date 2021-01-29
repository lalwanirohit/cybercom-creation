<?php

if(isset($_POST['submit'])){
    $name = $_FILES['photo']['name'];
    $max_size = 2048000;
    $extension = strtolower(substr($name , strpos($name , '.')+1));
    $type = $_FILES['photo']['type'];
    $file_size = $_FILES['photo']['size']; 
    $temp_name = $_FILES['photo']['tmp_name'];

    if(isset($name)) {
        if(!empty($name)) {
            if(($extension == 'jpg' || $extension == 'jpeg') && $type == 'image/jpeg' && $file_size < $max_size) {
                $locaiton = 'uploads/';
        
                if(move_uploaded_file($temp_name , $locaiton.$name)) {
                    echo 'uploaded....';
                }
                else {
                    echo 'there was an error';
                }
            }
            else {
                echo 'please select proper file with jpeg/jpg format and should be less than 2 mb';
            }
        }
        else {
            echo 'please select any file';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP</title>
</head>
<body>
    <hr>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="photo" accept="image/jpeg"><br><br>
        <input type="submit" name="submit" value="Upload">            
    </form>
</body>
</html>