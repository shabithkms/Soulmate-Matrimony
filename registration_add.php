<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
  <!------------------------------------------------------------------------>  
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
  <!------------------------------------------------------------------------->
    <link rel="stylesheet" href="css files/registration.css">
    <link rel="stylesheet" type="text/css" href="css files/main.css">
	  <link rel="stylesheet" type="text/css" href="css files/util.css">
  <!------------------------------------------------------------------------->
</head>

<body>
<header class="header"  >
<div class="col-md-6">
<div class="" id="logo">
    <img src="images/logo.png" alt="" class="logoimg">
</div>
</div>
<div class="col-md-6 my-auto ml-auto" id="login">
  <h5 id="h5">
  Already have an account <a class="txt2" href="registration_add.php">
							Login 
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
</h5>
</div>
</header>



<section class="section">
    
    <div class="container">
        <h1 class="text-center">REGISTRATION</h1>
    <div class="row">
        <div class="col-md-12" id="form">

    <form class="" action="profile_add.php" method="post">
        <div class="form-row">
            <div class="col ">
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="">Username</span>
                    </div>
                    <input type="text" class="form-control text-lowercase" name="uname" placeholder="Username">
                   
                </div>
                
               
            

            </div>
            
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="">First and last name</span>
                </div>
                <input type="text" class="form-control" name="fname" placeholder="Firstname">
                <input type="text" class="form-control" name="lname" placeholder="Lastname">
              </div>
              
            
            
        </div>
        Gender: <br>
        <div class="gender">
        <div class="form-check-inline">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" value="male" name="gender">male
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" value="female" name="gender">female
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="gender" value="others" >Others
            </label>
          </div>
        </div>
        DOB: <br>
        <div><input type="date" class="gender" placeholder="Date of birth" name="dob">
        </div>
        
        


        State: <br>
        <select name="state" class="custom-select " >
            <option value="Kerala">Kerala</option>
            
          </select>

          District:
        <select name="district" class="custom-select" >
            <option selected>District</option>
            <option value="Thiruvananthapuram">Thiruvananthapuram</option>
            <option value="Kollam">Kollam</option>
            <option value="Alappuzha">Alappuzha</option>
            <option value="Pathanamthitta">Pathanamthitta</option>
            <option value="Kottayam">Kottayam</option>
            <option value="Idukki">Idukki</option>
            <option value="Ernakulam">Ernakulam</option>
            <option value="Thrissur">Thrissur</option>
            <option value="Palakkad">Palakkad</option>
            <option value="Malappuram">Malappuram</option>
            <option value="Kozhikode">Kozhikode</option>
            <option value="Wayanad">Wayanad</option>
            <option value="Kannur">Kannur</option>
            <option value="Kasaragod">Kasaragod</option>
          </select>

          
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="">Postal Code/ZIP code</span>
          </div>
          <input type="number" class="form-control" name="post" placeholder="Postal code" maxlength="6">
         
        </div>
        

        <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="">Email and Password</span>
            </div>
            <input type="email" class="form-control" name="email" placeholder="Email">
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>

          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="">Phone Number</span>
            </div>
            <input type="number" class="form-control" name="phone" placeholder="Phone" maxlength="10">
           
          </div>
          
          <div class="submit align-content-center">
            <center>
           <input type="submit" name="submit" value="CONTINUE" class="login100-form-btn" style="width: 140px;">
          </center>
          </div>
        
        </div>
        
        
        

</div>
</div>


</section>
<footer class="pt-2em " id="footer">
<div class="">
    <div class="text-center">all rights reserved.
    </div>
    </div>
</footer>

</body>
</html>