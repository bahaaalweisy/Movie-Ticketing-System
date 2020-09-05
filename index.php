  <?php
  if (!session_id()) {
    session_start();
  }
  include_once ('db.php');
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="#">

    <title>Movie House Cinemas </title>
  

  <!-- Bootstrap core CSS -->
  <!-- <link href="./movie_files/bootstrap.min.css" rel="stylesheet"> -->
  <link href="https://bootswatch.com/flatly/bootstrap.css" rel="stylesheet">
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
  
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="js/ie-emulation-modes-warning.js"></script>



  <!-- Custom styles for this template -->
   <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/rotating-card.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/anotherDefault.css" rel="stylesheet">
   
   
   
   
   
   
   
   
    <!-- FOR PRELOADER PAGE -->
   
    <link href="css/main.css" rel="stylesheet">   	
    <link rel="stylesheet" href="css/normalize.css">
    
    
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="js/main.js"></script>
<style type="text/css">


.demo 
{
 background-image:url("images/bgnew.jpg");
 background-position:top!important;
  background-color:#fff;
 padding-bottom:280px;
 position:relative;
}




</style>


<script type="text/javascript">





$(document).ready(function() {
	
	setTimeout(function(){
		$('body').addClass('loaded');
		$('div').removeClass('loaded');
	}, 1000);
	
});




</script>

</head>

  <body class="demo"> 
     
     
     
      <div id="demo-content">

         

		<div id="loader-wrapper">
			<div id="loader"></div>

			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

		</div>
         



<div id="content">
<!-- NAVBAR
  ================================================== -->
        <nav id="main-menu" >
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed"  data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <img alt="" src="https://www.moviehouse.co.uk/content/images/logo-moviehouse.png" >
            </div>
            <div >
              <ul class="nav navbar-nav" >
                <li class="nav-item active"><a class="nav-link " href="index.php">Home</a></li>
                <li class="nav-item" ><a class="nav-link"  href="movie.php" >Movies</a></li>
                <li class="nav-item" ><a class="nav-link"  href="Cinemas.php" >Cinemas</a></li>
                <li class="nav-item" ><a class="nav-link"  href="showtimes.php" >Show Times</a></li>
                <li class="nav-item" ><a class="nav-link"  href="food.php" >Food & Drink</a></li>
                <li class="nav-item" ><a class="nav-link"  href="pricing.php" >Buy Ticket</a></li>
                <li class="nav-item" ><a class="nav-link"  href="about.php" >About</a></li>
                <li class="nav-item"><a class="nav-link"  href="event.php" >Events &amp; Experiences</a></li>
                <li class="nav-item"><a class="nav-link"  href="javascript:void(0)" onclick="openLoginModal();"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
                
              </ul>
            
            </div>
            
          </div>
        </nav>
</div>
      </div>
    <br>
   
    <?php include 'carousel.php'; 
    include 'movieList.php'; ?>


    


    <div class="modal fade login" id="loginModal">
      <div class="modal-dialog login animated">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Login</h4>
          </div>

          <!-- login -->
          <div class="modal-body">  
            <div class="box">
              <div class="content">

                <div class="error"></div>


                <div class="form loginBox">
                  <form method="post" action="index.php" accept-charset="UTF-8">
                    <input id="userName" class="form-control" type="text" placeholder="Username" name="Username">
                    <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                    <input class="btn btn-default btn-login" type="button" value="Login" onclick="loginAjax()">
                    <center>  <div class="small">Forgot password? <a href="forgot_pass.php">Click Here</a></div>
                          </center>
                          <br> 
                  </form>
                </div>
              </div>
            </div>

            <!-- Registration -->

            <div class="box" id="RegistrationBox">
              <div class="content registerBox" style="display:none;">
                <div class="form">
                  <form method="post" html="{:multipart=>true}" data-remote="true" action="index.php" accept-charset="UTF-8">
                    <input id="registrationName" class="form-control" type="text" placeholder="username" name="username">
                    <input id="registrationPassword" class="form-control" type="password" placeholder="Password" name="password">
                    <input id="registrationPassword_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation">
                    <input class="btn btn-default btn-register" type="submit" value="Create account" name="commit" onclick=" RegistrationAjax(event)">
                         
                    
                  </form>
                </div>


              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="forgot login-footer">
              <span>Looking to 
                <a href="javascript: showRegisterForm();">create an account</a>
                ?</span>
              </div>
              
              <div class="forgot register-footer" style="display:none">
                <span>Already have an account?</span>
                <a href="javascript: showLoginForm();">Login</a>
              </div>
            </div>        
          </div>
        </div>
      </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/main.js"></script>
    
    
    
    
    
    
    
    
    
    
    
    
    <?php include 'footer.php'; ?>  
  </body>
  </html>