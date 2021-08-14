<?php
 
 session_start();
 include "conn.php";
 if(isset($_REQUEST['edit']))
 {
    $id=$_REQUEST['id'];
    $fname=$_REQUEST['fname'];
    $lname=$_REQUEST['lname'];
    $email=$_REQUEST['email'];


   
        $query= "INSERT INTO user VALUES('$id','$fname','$lname','$email')";
       $sql2=pg_query($conn,$query);
if($sql2)
       { 
           /*Successful*/
           echo "success";
       }
       else
       {
           /*sorry your profile is not update*/
           echo "failed1";
       }
    }
 







?>