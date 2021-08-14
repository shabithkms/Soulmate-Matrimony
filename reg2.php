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
  Already have an account <a href="index.php" style="text-decoration: none;color: black;">Login now</a>
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
        <h4 class="text-center">Personal Information</h4>
    <div class="row">
        <div class="col-md-12" id="form">
            <form class="" action="profile_add2.php" method="post">
                <div class="form-row">
                    <div class="col ">
                    <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="">Email</span>
            </div>
            <input type="email" class="form-control" name="email" placeholder="Email">
            
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
                            <input type="text" class="form-control" name="fathername" placeholder="Name of Father" maxlength="">
                           
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
                            <input type="text" class="form-control" name="mothername" placeholder="Name of Mother" maxlength="">
                           
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
                          <select name="education" class="custom-select" >
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

                              <div class="submit align-content-center">
                                <center>
                               <input type="submit" name="submit" value="CONTINUE" class="btn">
                              </center>
                              </div>
                         

                    </div>       
                </div>  
            </form>
        </div>
    </div>
     
            </div>  
          </div>
        </div>
        
      </div>
    </div> 

  </body>
  </html>