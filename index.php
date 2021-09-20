<!doctype html>

<?php  
$license_filename="includes/.lic";
if(!file_exists($license_filename))
{
    header("Location:install/index.php");
    exit;
}
?>
<?php
  include("includes/connection.php");
	include("language/language.php");

	if(isset($_SESSION['admin_name']))
	{
		header("Location:home.php");
		exit;
	}
?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login_assest/fonts/icomoon/style.css">
    <title>© Will VPN <?php if(APP_NAME!=''){ echo '| '.APP_NAME; }?></title>
    <link rel="icon" href="images/<?php echo APP_LOGO;?>" sizes="16x16">
    <link rel="stylesheet" href="login_assest/css/owl.carousel.min.css">
    <link rel="stylesheet" href="login_assest/css/bootstrap.min.css">
    <link rel="stylesheet" href="login_assest/css/style.css">
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="login_assest/images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3 class="mb-4">Wel-Come <?php echo APP_NAME;?> Admin Panel. <p><a href="http://localhost"><span style="color: rgb(97, 189, 109);"><strong><span style="font-family: 'Arial Black', Gadget, sans-serif;">Buy Now Click here</span></strong></span></a><span style="font-family: 'Arial Black', Gadget, sans-serif;"><br></span></p></h3>
            </div>
            <form action="login_db.php" method="post">
              <div class="form-group first">
              <?php if(isset($_SESSION['msg'])){?>
                <div class="alert alert-danger alert-dismissible" role="alert"> <?php echo $client_lang[$_SESSION['msg']]; ?> </div>
                <?php unset($_SESSION['msg']);}?>
                
                <label for="username"></label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" aria-describedby="basic-addon1" value="admin">

              </div>
              <div class="form-group last mb-4">
                <label for="password"></label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" aria-describedby="basic-addon2" value="admin">
                
              </div>
             

              <input type="submit" value="Log In" class="btn btn-block btn-primary">

             
            </form>

            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="login_assest/js/jquery-3.3.1.min.js"></script>
    <script src="login_assest/js/popper.min.js"></script>
    <script src="login_assest/js/bootstrap.min.js"></script>
    <script src="login_assest/js/main.js"></script>
  </body>
</html>