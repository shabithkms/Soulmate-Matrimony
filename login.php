<?php
include "conn.php";
if($_POST['login'])
{

$un=$_POST['email'];
$pd=$_POST['password'];
$qry="select * from datas where email='$un' and password='$pd'";
$result= mysqli_query($conn,$qry)or die("coudnt perform query");
if(mysqli_num_rows($result)>0)
{
    header('location:home.php');
}
else{
    echo("login failed");
}

}
?>