<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search for groom by Religion</title>
    <link rel="stylesheet" href="font awesome/css/all.css">
    <link rel="stylesheet" href="css files/home.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
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
        <p>
          
        <h1 class="text-center">Search profile By Religion</h1>
        <div class="container-fluid form-container">
            <div class="container">
              <div class="form-card">
                <div class="row covero">
                  <div class="col-md-3 addresscol">
                    </div>
                
                  <div class="col-md-9 formcol">
            <form action="search_rel_bride_back.php" method="POST">


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
                            <input type="text" class="form-control" name="caste" placeholder="Caste" maxlength="">
                           
                          </div>
                  <center>
                          <input type="submit" name="submit" value="SEARCH" class="login100-form-btn" style="width: 140px;margin-top: 1em;">
                    </center>
            </form>


            
                  </div></div></div></div></div></div>
                  
        
    </section>  
</body>
</html>