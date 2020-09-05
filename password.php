<!DOCTYPE html>
<?php 
if (!session_id()) {
    session_start();
}
include_once ('db.php');
include_once ('header1.php');
?>









<html>
<head>
  <title>Account Setting</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<style>
  body{
    overflow-x: hidden;
  }
</style>
<body>

<div class="row">
  <div class="col-sm-2">
  </div>
   
  
  <div class="col-sm-8">
    <form action="" method="post" enctype="multipart/form-data">
          <table class="table table-bordered table-hover">
            <tr align="center">
              <td colspan="6" class="active"><h2>Change Password</h2></td>
            </tr>
            <tr>
              <td style="font-weight: bold;"> Enter Password</td>
              <td>
                                     	<input type="password" class="form-control" placeholder="Password" name="pass1" autocomplete="off" required="required">
                                                                            
              </td>
            </tr>
             <tr>
              <td style="font-weight: bold;">Confirm Password</td>
              <td>
            <input type="password" class="form-control" placeholder="Confirm Password" name="pass2" autocomplete="off" required="required">
                                                                           
              </td>
            </tr>
          
            <tr align="center">
              <td colspan="6">
              <input class="btn btn-info" style="width: 250px;" type="submit" name="change" value="Change"/>
              </td>
            </tr>
          </table>
        </form>
            
            
  </div>
  <div class="col-sm-2">
  </div>
</div>


             
</body>
</html>
<?php 



if(isset($_POST['change'])){
    
    $user = $_SESSION['userName'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    
    if($pass1 != $pass2){
        echo"
	          <div class='alert alert-danger'>
	            <strong>Your new password did't match with each other</strong>
	          </div>
	        ";
    }
    if($pass1 < 9 AND $pass2 < 9){
        echo"
	          <div class='alert alert-danger'>
	            <strong>Use 9 or more than 9 characters</strong>
	          </div>
	        ";
    }
    if($pass1 == $pass2){
        $update_pass = mysqli_query($conn, "UPDATE user SET password='$pass1' WHERE userName='$user'");
        session_destroy();
        echo"
            	 <div class='alert alert-danger'>
                    <strong>Your Password is changed</strong> 
                  </div>
      
            ";
    }
    
}


?>