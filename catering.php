<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caterers</title>
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
<form action="" method="POST">
<div class="input-group">
    
                <div class="input-group-prepend">
                  <span class="input-group-text" id="">Place</span>
                </div>
                <input type="text" class="form-control" name="id" placeholder="Enter Place">
</div>
                <br>
                <br>
                <center>
           <input type="submit" name="submit" value="SEARCH" class="login100-form-btn" style="width: 140px;">
          </center>

<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
				<div class="row">
                </form>
<?php
	include "conn.php";
	if (isset($_POST['submit'])) {
		$searchkey=$_POST['id'];
		$query="SELECT id,name,place,details FROM catering WHERE place  LIKE '$searchkey%' ";
	}else{
		$query="SELECT * FROM catering";
		$searchkey="";

	}
	
	
	$res=mysqli_query($conn,$query);



?>
				

				<br>
				<br>
				</div>
				<table class="table-borderless " >
					
						
						
						
						
					
                    <?php
                        while($row=mysqli_fetch_object($res)){

                      ?> 
                    <tr>
						<th> ID:</th>
                        <td><?php echo $row->id ?></td>
                    </tr>
                    <tr>
                        <th>Name:</th>
                        <td><?php echo $row->name ?></td>
                    </tr>
                    <tr>
                        <th>place:</th>
                        <td><?php echo $row->place ?></td>
                    </tr>
                    <tr>
                        <th>Details:</th>
                        <td><?php echo $row->details ?></td>
                    </tr>
                    
                    
                    
                     
					
                    <?php
                        }
                    ?>
				</table>
			</div>
		</div>
	</div>
    
    
    




</section>

    
    
   
</body>
</html>