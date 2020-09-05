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
              <td style="font-weight: bold;"> Name</td>
              <td>
                	<input type="text" class="form-control" placeholder="Name" name="email" autocomplete="off" required="required">
                                               
              </td>
            </tr>
             <tr>
              <td style="font-weight: bold;">Bestfriend Name</td>
              <td>
                    <input type="text" class="form-control" placeholder="Someone...." name="bf" autocomplete="off" required="required">
                                              
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


include_once ('db.php');
if(isset($_POST['change'])){
    
    $email=$_POST['email'];
    $recovery_account=$_POST['bf'];
    
    $selectuser = "select * from user where userName='$email' AND forgotten_answer='$recovery_account'";
    
    $query = mysqli_query($conn,$selectuser);
    
    $checkuser = mysqli_num_rows($query);
    
    if($checkuser==1){
        
        $_SESSION['userName']=$email;
        
        echo "<script>window.open('password.php','_self')</script>";
        
    }
    else {
        echo "<script>alert('Your Email or your Bestfriend name is Incorrect')</script>";
        echo "<script>window.open('changepass.php','_self')</script>";
    }
    
    
}
?>