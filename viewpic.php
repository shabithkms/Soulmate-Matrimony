<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
  <link rel="stylesheet" href="font awesome/css/all.css">
  <link rel="stylesheet" href="css files/home.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css files/style.css">
  <link rel="stylesheet" href="css files/registration.css">
  <link rel="stylesheet" type="text/css" href="css files/main.css">
  <link rel="stylesheet" type="text/css" href="css files/util.css">
   
    
</head>
<body>
<header class="header"  >
<div class="col-md-6">
<div class="" id="logo">
    <img src="images/logo.png" alt="" class="logoimg">
</div>
</div>

</header>


<section class="section">
    <center>
<?php
    include "conn.php";
    if (isset($_POST['submit'])) {
		$searchkey=$_POST['email'];
    
    $sel="SELECT * FROM photo where email='$searchkey'";
    $que=mysqli_query($conn,$sel);
    

    

    while($row=mysqli_fetch_array($que)){

        echo "<img src='upload/".$row['image']."' style='width:400px;height:400px;' "."class='rounded-circle'>";
    }
}else{
    echo "Error 404";
}



    ?>
    </center>
    <br><br><br>
    <center>
        <a href="view.php" style="text-decoration: none;">
           <input type="submit" name="submit" value="Back to Profile" class="login100-form-btn" style="width: 140px;">
           </a> </center>
    


</section>

    
    
   
</body>
</html>