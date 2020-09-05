<?php 
include 'db.php';
if (!session_id()) {
	session_start();
}
if (!(($_SESSION['user'])==1)) {
	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link href="js/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/adminpage.css" rel="stylesheet" type="text/css" media="all" />



</head>
<body  >
	<!-- header-section-starts -->
	<div class="header">
		<div class="header-top-strip">
			<div class="container">
				<div class="header-top-left">
					<ul>
						<li>
							<?php include 'header.php'; ?>
						</li>			
					</ul>
				</div>
			</div>
		</div>
		<?php 
		if (!empty($_SESSION['msg'])) {
			echo "
			<p style='font-family: cursive; text-align: center; color: blue; font-size: 2vw;'>".$_SESSION['msg']."</p>
			";
			$_SESSION['msg']="";

		}
		include 'profile.php';
		?>
		<center>
		<div >
                 <div>
					<a style=" text-align: center; font-size: 150%;  height: 40px;width: 500px;" href="Add.php" class="btn btn-primary btn-xs btn-block">Add Movie/Teater/Time</a><br>

                  </div>		
			<div class="row">

				<div >
					<a style=" text-align: center; font-size: 150%;  height: 40px;width: 500px; " href="deletemovie.php" class="btn btn-primary btn-xs btn-block"> Delete Movie </a><br>
				</div>
				<div >
					<a style=" text-align: center; font-size: 150%;  height: 40px;width: 500px;" href="showorder.php" class="btn btn-primary btn-xs btn-block"> Show Order </a><br>
				</div>
				<div >
					<a style=" text-align: center; font-size: 150%;  height: 40px;width: 500px;" href="orderseat.php" class="btn btn-primary btn-xs btn-block"> Seat Order  </a><br>
				</div>
				<div >
					<a style=" text-align: center; font-size: 150%;  height: 40px;width: 500px;" href="mail.php" class="btn btn-primary btn-xs btn-block"> Send Mail  </a><br>
				</div>
			</div> 

		</div>
       </center>
 <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/main.js"></script>


	</body>

	</html>
