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
                        <span class="input-group-text" id="">Email</span>
                        </div>
                        <input type="email" class="form-control" name="email" placeholder="Enter your email" maxlength="">
                    
                </div>    
                

                
                
                <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="">First and last name</span>
                    </div>
                    <input type="text" class="form-control" name="fname" placeholder="Firstname">
                    <input type="text" class="form-control" name="lname" placeholder="Lastname">
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
                    <span class="input-group-text" id="">Phone Number</span>
                    </div>
                    <input type="number" class="form-control" name="phone" placeholder="Phone" maxlength="10">
                
                </div>

                <div class="submit align-content-center">
                    <center>
                <input type="submit" name="submit" value="CONTINUE" class="btn">
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