<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registration</title>
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
  <header class="header">
<div class="col-md-6">
<div class="" id="logo">
    <img src="images/logo.png" alt="" class="logoimg">
</div>
</div>
<div class="col-md-6 my-auto ml-auto" id="login">
  <h5 id="h5">
  Already have an account <a href="index.php" style="text-decoration: none;color: black;"><b>Login now</b></a>
</h5>
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
        <h1 class="text-center">REGISTRATION</h1>
    <div class="row">
        <div class="col-md-12" id="form">

    <form class="" action="profile_add.php" method="post">
        <div class="form-row">
            <div class="col ">
                
                
               
            

            </div>
            
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="">Name</span>
                </div>
                <input type="text" class="form-control" name="name" placeholder="Enter your name">
                
            </div>
            <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="">Email</span>
            </div>
            <input type="email" class="form-control" name="email" placeholder="Email">
            
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
              <span class="input-group-text" id="">Age</span>
            </div>
            <input type="" class="form-control" name="age" placeholder="Age" maxlength="">
            
          </div>
                  
                  
                          <div class="input-group">
                          <select name="blood" class="custom-select" >
                              <option selected>Blood group</option>
                              <option value="A+">A+</option>
                              <option value="A-">A-</option>
                              <option value="B+">B+</option>
                              <option value="B-">B-</option>
                              <option value="AB+">AB+</option>
                              <option value="AB-">AB-</option>
                              <option value="O+">O+</option>
                              <option value="O-">O-</option>
                          </select>
                           
                          </div>
                  
                  
                  
                          <div class="input-group">
                          <select name="sign" class="custom-select" >
                              <option selected>Zodiac Sign</option>
                              <option value="cancer">Cancer</option>
                              <option value="sagittarius">Sagittaruis</option>
                              <option value="taurus">Taurus</option>
                              <option value="scorpio">Scorpio</option>
                              <option value="aries">Aries</option>
                              <option value="leo">Leo</option>
                              <option value="gemini">Gemini</option>
                              <option value="pisces">Pisces</option>
                              <option value="libra">Libra</option>
                              <option value="virgo">Virgo</option>
                              <option value="capricorn">Capricorn</option>
                              <option value="aquarius">Aquarius</option>
                              <option value="scorpius">Scorpius</option>
                          </select>
                           
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
                            <textarea class="form-control" rows="5" id="" name="address"></textarea>
                          </div>

                          
                          Religion:
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

                          <h4 class="text-center">Family details</h4>

                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="">Father's Name</span>
                            </div>
                            <input type="text" class="form-control" name="fname" placeholder="Name of Father" maxlength="">
                           
                          </div>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="">Father's Occupation</span>
                            </div>
                            <input type="text" class="form-control" name="fjob" placeholder="Father's Occupation(optional)" maxlength="">
                           
                          </div>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="">Mother's Name</span>
                            </div>
                            <input type="text" class="form-control" name="mname" placeholder="Name of Mother" maxlength="">
                           
                          </div>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="">Mother's Occupation</span>
                            </div>
                            <input type="text" class="form-control" name="mjob" placeholder="Mother's Occupation(optional)" maxlength="">
                           
                          </div>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="">No of Family members</span>
                            </div>
                            <input type="number" class="form-control" name="family" placeholder="No of Family members" maxlength="">
                           
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
            <div class="input-group-prepend">
              <span class="input-group-text" id="">Password</span>
            </div>
            <input type="password" class="form-control" name="password" placeholder="Enter your password" >
           
          </div>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="">Confirm</span>
            </div>
            <input type="password" class="form-control" name="cnfm_pass" placeholder="Confirm your password" >
           
          </div>

          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="">Phone Number</span>
            </div>
            <input type="number" class="form-control" name="phone" placeholder="Phone" maxlength="10">
           
          </div>
                           
                            
          
          <div class="submit align-content-center">
            <center>
           <input type="submit" name="submit" value="REGISTER" class="login100-form-btn" style="width: 140px;">
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
