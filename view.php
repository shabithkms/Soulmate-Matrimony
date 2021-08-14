<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
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
                  <span class="input-group-text" id="">Email</span>
                </div>
                <input type="email" class="form-control" name="email" placeholder="Enter your Email">
</div>
                <br>
                <br>
                <center>
           <input type="submit" name="submit" value="View" class="login100-form-btn" style="width: 140px;">
          </center>

<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
				<div class="row">
                </form>
<?php
	include "conn.php";
	if (isset($_POST['submit'])) {
		$searchkey=$_POST['email'];
		$query="SELECT uid,name,dob,age,state,district,post,address,religion,caste,edu,job,email,phone FROM datas WHERE email= '$searchkey' ";
	}else{
		$query="SELECT * FROM datas";
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
						<th>User ID:</th>
                        <td><?php echo $row->uid ?></td>
                    </tr>
                    <tr>
                        <th>Name:</th>
                        <td><?php echo $row->name ?></td>
                    </tr>
                    <tr>
                        <th>DOB:</th>
                        <td><?php echo $row->dob ?></td>
                    </tr>
                    <tr>
                        <th>Age:</th>
                        <td><?php echo $row->age ?></td>
                    </tr>
                    <tr>
                        <th>State:</th>
                        <td><?php echo $row->state ?></td>
                    </tr>
                    <tr>
                        <th>District:</th>
                        <td><?php echo $row->district ?></td>
                    </tr>
                    <tr>
                        <th>POST:</th>
                        <td><?php echo $row->post ?></td>
                    </tr>
                    <tr>
                        <th>Address:</th>
                        <td><?php echo $row->address ?></td>
                    </tr>
                    <tr>
                        <th>Religion:</th>
                        <td><?php echo $row->religion ?></td>
                    </tr>
                    <tr>
                        <th>Caste:</th>
                        <td><?php echo $row->caste ?></td>
                    </tr>
                    <tr>
                        <th>Education:</th>
                        <td><?php echo $row->edu?></td>
                    </tr>
                    <tr>
                        <th>JOb:</th>
                        <td><?php echo $row->job?></td>
                    </tr>
                    <tr>
                        <th>Phone:</th>
                        <td><?php echo $row->phone ?></td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td><?php echo $row->email ?></td>
                    </tr>
                    <br>
                    <br>
                    
                     
					
                    <?php
                        }
                    ?>
				</table>
			</div>
		</div>
	</div>
    <form action="viewpic.php" method="POST">
    <div class="input-group">
    
    <div class="input-group-prepend">
      <span class="input-group-text" id="">Email</span>
    </div>
    <input type="email" class="form-control" name="email" placeholder="Enter your Email">
</div>
<center>
           <input type="submit" name="submit" value="View Photo" class="login100-form-btn" style="width: 140px;">
          </center>

</form>

</section>

    
    
   
</body>
</html>