<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Update Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="css files/style.css">
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
  <!------------------------------------------------------------------------->
    <link rel="stylesheet" href="css files/registration.css">
    <link rel="stylesheet" type="text/css" href="css files/main.css">
	  <link rel="stylesheet" type="text/css" href="css files/util.css">
    <script src="jquery/jquery-3.6.0.js"></script>
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
  
</div>
</header>
    <div class="container-fluid form-container">
      <div class="container">
        <div class="form-card">
          <div class="row covero">
            <div class="col-md-3 addresscol">
              
            </div>
            <div class="col-md-9 formcol">
              
    <div class="container">
        <h1 class="text-center">EDIT PROFILE</h1>
    <div class="row">
        <div class="col-md-12" id="form">

    <form class="" action="profile_update.php" method="post">
        <div class="form-row">
            <div class="col ">
                
                
               
            

            </div>
            <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="">Email</span>
            </div>
            <input type="email" class="form-control" name="email" placeholder="Email">
            
        </div>
            
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="">Name</span>
                </div>
                <input type="text" class="form-control" name="name" placeholder="Enter your name">
                
              </div>
              
            
            
        </div>
     
        DOB: <br>
        <div><input type="date" class="gender" placeholder="Date of birth" name="dob">
        </div>
        
        


        

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
                <span class="input-group-text" id="">Age</span>
            </div>
            <input type="" class="form-control" name="age" placeholder="Age" maxlength="">
            
          </div>
                  
                  
                         
                         
                           
                          
        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="">Height(cms)</span>
        </div>
        <input type="text" class="form-control" name="height" placeholder="Height" maxlength="">
        
        </div>
        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="">Weight(kg)</span>
        </div>
        <input type="text" class="form-control" name="weight" placeholder="Weight" maxlength="">
        
        </div>

        <div class="form-group">
        <label for="comment">Address</label>
        <textarea class="form-control" rows="5" id="" name="address"></textarea><br>
        </div>

                          
                          
            <select name="religion" class="custom-select" >
                <option selected>Religion</option>
                <option value="Muslim">Muslim</option>
                <option value="Hindu">Hindu</option>
                <option value="Christian">Christian</option>
            </select>
    
            <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">Caste</span>
            </div>
            <input type="text" class="form-control" name="caste" placeholder="Caste(optional)" maxlength="">
            
            </div>

            

            <h4 class="text-center">Educational Qualification</h4>

            Highest Education:
            <select name="edu" class="custom-select" >
                <option selected>Education</option>
                <option value="PG">PG</option>
                <option value="UG">UG</option>
                <option value="DIPLOMA">DIPLOMA</option>
                <option value="PLUS TWO">PLUS TWO</option>
                <option value="SSLC">SSLC</option>
                <option value="Other">Other</option>
            </select>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Other</span>
                </div>
                <input type="text" class="form-control" name="otheredu" placeholder="Optional" maxlength="">
                
                </div>

            Job:
                <select name="job" class="custom-select" >
                <option selected value="None">None</option>
                <option value="Government">Government</option>
                <option value="Private">Private</option>
                <option value="Business">Business</option>
                <option value="Other">Other</option>
                </select>

                <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Other</span>
                </div>
                <input type="text" class="form-control" name="otherjob" placeholder="Optional" maxlength="">
                
                </div>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Salary</span>
                </div>
                <input type="text" class="form-control" name="salary" placeholder="Salary" maxlength="">
            </div>

                <div class="input-group">
           

         

          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="">Phone Number</span>
            </div>
            <input type="tel" class="form-control" name="phone" placeholder="Phone" maxlength="10">
           
          </div>
          <div class="input-group">
          <div class="input-group-prepend">
              <span class="input-group-text" id="">Password</span>
            </div>
            <input type="password" class="form-control" name="password" placeholder="Enter your password" >
         </div> </div>

                           
                            
          
          <div class="submit align-content-center">
            <center>
           <input type="submit" name="edit" value="UPDATE" class="login100-form-btn" style="width: 140px;">
          </center>
          </div>
        
        </div>
        
        
        

</div>
</div>
            </div>  
          </div>
        </div>
        
      </div>
    </div> 

   
  </body>
  </html>
