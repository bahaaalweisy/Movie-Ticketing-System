<!DOCTYPE html>
<html lang="en">
<head>
	<title>Forgotten Password</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/signin.css">
</head>
<body>

<div class="signin-form">
    <form action="" method="post">
		<div class="form-header">
			<h2>Forgot Password</h2>
			
		</div>
		<div class="form-group">
			<label>Name</label>
        	<input type="text" class="form-control" placeholder="Name" name="email" autocomplete="off" required="required">
        </div>
        <div class="form-group">
			<label>Bestfriend Name</label>
            <input type="text" class="form-control" placeholder="Someone...." name="bf" autocomplete="off" required="required">
        </div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block btn-lg" name="submit">Submit</button>
		</div>
    </form>
</div>
</body>
</html>
<?php 
  session_start();

include_once ('db.php');
if(isset($_POST['submit'])){

     $email=$_POST['email'];
    $recovery_account=$_POST['bf'];
	
	$selectuser = "select * from user where userName='$email' AND forgotten_answer='$recovery_account'";
	
	$query = mysqli_query($conn,$selectuser); 
	
	$checkuser = mysqli_num_rows($query);
	
	if($checkuser==1){
	
	$_SESSION['userName']=$email;
	
	echo "<script>window.open('create_password.php','_self')</script>";
	
	}
	else {
	echo "<script>alert('Your Email or your Bestfriend name is Incorrect')</script>";
	echo "<script>window.open('forgot_pass.php','_self')</script>";
	}
	

}
?>