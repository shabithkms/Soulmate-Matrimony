<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css files/registration.css">
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
        <h3 class="text-center">Update your details</h3>
        
    <div class="row">
        <div class="col-md-12" id="form">
    <form class="" action="profile_add.php" method="post">

        <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="">Age</span>
            </div>
            <input type="text" class="form-control" name="age" placeholder="Age" maxlength="">
           
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
            <input type="text" class="form-control" name="family" placeholder="No of Family members" maxlength="">
           
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
                               <input type="submit" name="submit" value="UPDATE" class="btn">
                              </center>
                              </div>









    </form>
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