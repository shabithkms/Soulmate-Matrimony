<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css files/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>PHP Search</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
				<div class="row">
                    <?php
                        include "conn.php";
                        if (isset($_POST['search'])) {
                            $searchkey=$_POST['search'];
                            $query="SELECT * FROM users WHERE name LIKE '%$searchkey%'";
                        }else{
                            $query="SELECT * FROM users";
                            $searchkey="";

                        }
                        
                        $res=mysqli_query($conn,$query);



                    ?>
				<form action="" method="POST"> 
					<div class="">
						<input type="text" name="search" class='' placeholder="Search By Name" value="<?php echo $searchkey ?>" style="width: 75%;" > 
					</div>
					<div class="">
						<button class="btn">Search</button>
					</div>
				</form>

				<br>
				<br>
				</div>
				<table class="table table-bordered">
					<tr>
						<th>Name</th>
						<th>Amount</th>
						<th>City</th>
					</tr>
                    <?php
                        while($row=mysqli_fetch_object($res)){

                      ?>  
					<tr>
						<td><?php echo $row->name ?></td>
						<td><?php echo $row->amount ?></td>
						<td><?php echo $row->city ?></td>
					</tr>
                    <?php
                        }
                    ?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>