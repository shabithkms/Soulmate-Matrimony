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
  <script src="jquery/jquery-3.6.0.js"></script>
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
        <h4 class="text-center">Upload your Photo</h4>
              <form action="profile_add3.php" method="POST" enctype="multipart/form-data" >
              <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="">Email</span>
            </div>
            <input type="email" class="form-control" name="email" placeholder="Email">
            
        </div>

              
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile" name="image">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                            <div class="submit align-content-center">
                              <center>
                                <input type="submit" name="submit" value="UPLOAD" class="btn">
                              </center>
                            </div>
              </form>
            </div>

            


            </div>
        </div>
        
      </div>
    </div> 


  

  </body>
  </html>
  
  <script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
