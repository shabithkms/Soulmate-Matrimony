<?php
include "conn.php";

// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        
    $target_dir="upload/";
    $target_file=$target_dir.$fileName;
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
            move_uploaded_file($_FILES['image']['tmp_name'],$target_dir);
            // Insert image content into database 
            $insert ="INSERT into image_table (image) VALUES ('$imgContent')";
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 

/*
if(isset($_POST['submit'])){
    
    $name=$_FILES['file']['name'];
    $target_dir="upload/";
    $target_file=$target_dir.basename($_FILES['file']['name']);
    $imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $extension_array=array("jpg","jpeg","png","gif");
    if(in_array($imageFileType,$extension_array)){
        $image_base64=base64_encode(file_get_contents($_FILES['file']['tmp_name']));
        $image='data:image/'.$imageFileType.';base64'.$image_base64;
        $query="insert into image_table(image) values('$image')";
        mysqli_query($conn,$query);
        move_uploaded_file($_FILES['file']['tmp_name'],$target_file);
        header('location:pic.php');
        //move_uploaded_file($_FILES['file']['name'],$target_dir.$name);
    }
}
*/

?>