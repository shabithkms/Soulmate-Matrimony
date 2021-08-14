<?php
 
 session_start();
 include "conn.php";
 if(isset($_POST['edit']))
 {
    $id=$_POST['id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $select= "select * from users where id='$id'";
    $sql = pg_query($conn,$select);
    $row = pg_fetch_assoc($sql);
    $res= $row['id'];
    if($res === $id)
    {
   
       $update = "update users set fname='$fname',lname='$lname',email='$email' where id='$id'";
       $sql2=pg_query($conn,$update);
if($sql2)
       { 
           /*Successful*/
           header('location:login.php');
       }
       else
       {
           /*sorry your profile is not update*/
           header('location:home.html');
       }
    }
    else
    {
        /*sorry your id is not match*/
        header('location:Profile_form.php');
    }
 }
?>