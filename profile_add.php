<?php
 
 session_start();
 //$conn=mysqli_connect('localhost','root','','project') or die("could not connect");
 include "conn.php";
 if(isset($_POST['submit']))
 {
    $uid=$_POST['uid'];
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $state=$_POST['state'];
    $district=$_POST['district'];
    $post=$_POST['post'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cnfm_pass=$_POST['cnfm_pass'];
    $phone=$_POST['phone'];
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
    $edu=$_POST['edu'];
    $otheredu=$_POST['otheredu'];
    $job=$_POST['job'];
    $otherjob=$_POST['otherjob'];
    $salary=$_POST['salary'];

    

    $query= "INSERT INTO datas(uid,name,gender,dob,state,district,post,email,password,cnfm_pass,phone,age,blood,sign,height,
    weight,address,religion,caste,fname,fjob,mname,mjob,family,edu,otheredu,job,otherjob,salary)
     VALUES('$uid','$name','$gender','$dob','$state','$district','$post','$email','$password','$cnfm_pass','$phone',
     '$age','$blood','$sign','$height','$weight', '$address',
    '$religion','$caste','$fname','$fjob','$mname','$mjob','$family','$edu','$otheredu','$job','$otherjob','$salary')";
    echo $query;
       $sql2=mysqli_query($conn,$query);
if($sql2)
       { 
        
        header('location:reg3.php');
       }
       else
       {
           /*sorry your profile data not added*/
           echo "<h1>failed1</h1>";
       }
    }
 







?>