<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css files/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>PHP Search by name</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
				<div class="row">
                    <?php
                        include "conn.php";
                        if (isset($_POST['submit'])) {
                            $searchkey=$_POST['search'];
                            $query="SELECT u_id,name,dob,state,district,post,email,phone FROM general WHERE name LIKE '$searchkey%'";
                        }else{
                            $query="SELECT * FROM general";
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
					</tr>
                    <?php
                        while($row=mysqli_fetch_object($res)){

                      ?>  
					<tr>
						<td><?php echo $row->u_id ?></td>
						<td><?php echo $row->name ?></td>
						<td><?php echo $row->dob ?></td>
                        <td><?php echo $row->state ?></td>
						<td><?php echo $row->district ?></td>
						<td><?php echo $row->post ?></td>
                        <td><?php echo $row->email ?></td>
						<td><?php echo $row->phone ?></td>
						
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