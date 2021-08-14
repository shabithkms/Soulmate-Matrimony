<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css files/bootstrap.min.css">
	<link rel="stylesheet" href="css files/registration.css">
	<meta charset="UTF-8">
	<title>PHP Search</title>
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
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
				<div class="row">
<?php
	include "conn.php";
	if (isset($_POST['submit'])) {
		$searchkey=$_POST['search'];
		$query="SELECT uid,name,dob,state,district,post,email,phone,age FROM datas WHERE age= '$searchkey' AND gender='female'";
	}else{
		$query="SELECT * FROM datas";
		$searchkey="";

	}
	
	
	$res=mysqli_query($conn,$query);



?>
				

				<br>
				<br>
				</div>
				<table class="table table-bordered">
					<tr>
						<th>User ID</th>
						<th>Name</th>
						<th>DOB</th>
                        <th>State</th>
						<th>District</th>
						<th>Post</th>
                        <th>Email</th>
						<th>Phone</th>
                        <th>Age</th>
					</tr>
                    <?php
                        while($row=mysqli_fetch_object($res)){

                      ?>  
					<tr>
						<td><?php echo $row->uid ?></td>
						<td><?php echo $row->name ?></td>
						<td><?php echo $row->dob ?></td>
                        <td><?php echo $row->state ?></td>
						<td><?php echo $row->district ?></td>
						<td><?php echo $row->post ?></td>
                        <td><?php echo $row->email ?></td>
						<td><?php echo $row->phone ?></td>
                        <td><?php echo $row->age ?></td>
						
					</tr>
                    <?php
                        }
                    ?>
				</table>
			</div>
		</div>
	</div>
	<center>
        <a href="view.php" style="text-decoration: none;">
           <input type="submit" name="submit" value="View Profile" class="login100-form-btn" style="width: 140px;">
           </a> </center>
	</section>
</body>
</html>