<?php
 
 session_start();
 include "conn.php";
 if(isset($_POST['submit']))
 {
    $email=$_POST['email'];
    $age=$_POST['age'];
    $blood=$_POST['blood'];
    $sign=$_POST['sign'];
    $height=$_POST['height'];
    $weight=$_POST['weight'];
    $address=$_POST['address'];
    $religion=$_POST['religion'];
    $caste=$_POST['caste'];
    $fname=$_POST['fname'];
    $fjob=$_POST['fjob'];
    $mname=$_POST['mname'];
    $mjob=$_POST['mjob'];
    $family=$_POST['family'];
    $education=$_POST['edu'];
    $otheredu=$_POST['otheredu'];
    $job=$_POST['job'];
    $otherjob=$_POST['otherjob'];
    $salary=$_POST['salary'];

    
        $query= "INSERT INTO datas(age,blood,sign,height,weight,address,religion,caste,fname,fjob,mname,mjob,family,edu,otheredu,job,otherjob,salary)  VALUES ('$age','$blood','$sign','$height','$weight', '$address',
        '$religion','$caste','$fname','$fjob','$mname','$mjob','$family','$edu','$otheredu','$job','$otherjob','$salary' ) WHERE email='$email'";
        echo $query;
       $sql2=mysqli_query($conn,$query);
if($sql2)
       { 
           /*Successful*/
           header('location:reg3.php');
       }
       else
       {
           /*sorry your profile is not update*/
           echo "failed1";
       }
    }
 







?>