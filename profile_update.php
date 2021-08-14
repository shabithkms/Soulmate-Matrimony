<?php
 
 session_start();
 include "conn.php";
 if(isset($_POST['edit']))
 {
    
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $district=$_POST['district'];
    $post=$_POST['post'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $age=$_POST['age'];
    $height=$_POST['height'];
    $weight=$_POST['weight'];
    $address=$_POST['address'];
    $religion=$_POST['religion'];
    $caste=$_POST['caste'];
    $edu=$_POST['edu'];
    $otheredu=$_POST['otheredu'];
    $job=$_POST['job'];
    $otherjob=$_POST['otherjob'];
    $salary=$_POST['salary'];
    $select= "select * from datas where email='$email'";
    $sql = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['email'];
    if($res === $email)
    {
   
       $update = "update datas set name='$name',password='$password',dob='$dob',district='$district',post='$post',height='$height',weight='$weight',address='$address',age='$age',religion='$religion',caste='$caste',edu='$edu',otheredu='$otheredu',job='$job',otherjob='$otherjob',salary='$salary',phone='$phone' where email='$email'";
       //echo "$update";
       $sql2=mysqli_query($conn,$update);
if($sql2)
       { 
           /*Successful*/
           echo"<h1><BR><BR><BR><BR> <CENTER>YOUR PROFILE EDITED SUCCESSFULLY</H1><br><br>" ;
           echo"<a href='view.php' ><CENTER><h4 style='text-decoration:none;'>View Updated Profile</h4></a></ceneter>" ;
       }
       else
       {
           /*sorry your profile is not update*/
           header('location:register.html');
       }
    }
    else
    {
        /*sorry your id is not match*/
        header('location:Profile_form.php');
    }
 }
?>