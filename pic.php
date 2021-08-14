<?php
include "conn.php";
if (isset($_POST['submit'])) {


    $file=$_FILES['image']['name'];
    $target="upload/".basename($_FILES['image']['name']);

    $query="INSERT INTO photo(image) VALUES('$file')";
    

    $res=mysqli_query($conn,$query);
    if($res){
       if( move_uploaded_file($_FILES['image']['tmp_name'],$target)){
           echo "success";

       }else{
           echo "error";
       }
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
    <form  method="post" action="pic_show.php" enctype="multipart/form-data">
<input type="file" name="image">
<input type="submit" name="submit" value="UPLOAD">
</form>
<div>
    
</div>
</body>
</html>