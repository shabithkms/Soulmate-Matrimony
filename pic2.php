<?php
include "conn.php";
if(isset($_POST['submit'])) {

    //Process the image that is uploaded by the user

    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    

    //$image=basename( $_FILES["imageUpload"]["name"],".jpg"); // used to store the filename in a variable

    //storing the data in your database
    //$query= "INSERT INTO image_table(image) VALUES ('$image')";
    $image_base64=base64_encode(file_get_contents($_FILES['imageUpload']['tmp_name']));
        $image='data:image/'.$imageFileType.';base64,'.$image_base64;
        $query="insert into image_table(image) values('$image')";
    echo $query;
    if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["imageUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    /*require('heading.php');
    echo "Your add has been submited, you will be redirected to your account page in 3 seconds....";
    header( "Refresh:3; url=account.php", true, 303);*/
}
/*
while($row = mysqli_fetch_row($result)) {
    echo "<tr>";
    echo "<td><img src='uploads/$row[6].jpg' height='150px' width='300px'></td>";
    echo "</tr>\n";
}
*/

?>