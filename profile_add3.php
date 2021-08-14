<?php
include "conn.php";
if (isset($_POST['submit'])) {

    $email=$_POST['email'];
    $file=$_FILES['image']['name'];
    $target="upload/".basename($_FILES['image']['name']);

    $query="INSERT INTO photo(image,email) VALUES('$file','$email')";

    $res=mysqli_query($conn,$query);
    if($res){
       if( move_uploaded_file($_FILES['image']['tmp_name'],$target)){
           header('location:thankyou.php');

       }else{
           echo "error";
       }
      
    }
} else{
    echo "there was a error in your upload";
}



?>