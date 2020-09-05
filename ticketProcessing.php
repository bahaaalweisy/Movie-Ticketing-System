<?php 
if (!session_id()) {
	session_start();
} 
include 'db.php';?>
<!DOCTYPE html>
<html>
<head>	
	<title>Confirm Ticket</title>
	<link rel="stylesheet" type="text/css" href="css/customerPanel.css">
	<link href="bootstrap/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- font awesome -->
  	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
	<!-- rating star css -->
  	<link rel="stylesheet" href="js/ratingstar.css">  	
	<style type="text/css">
		.boxStyle{width: 100%;
			border: 1px solid #ccc;
			background: #FFF;
			margin: 0 0 5px;
			padding: 10px;
			font-style: normal;
			font-variant-ligatures: normal;
			font-variant-caps: normal;
			font-variant-numeric: normal;
			font-weight: 400;
			font-stretch: normal;
			font-size: 12px;
			line-height: 16px;
			font-family: Roboto, Helvetica, Arial, sans-serif;
			
		}
	</style>
			<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet"> 

</head>
<body>
	<?php include_once 'header1.php'; ?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12  toppad" >
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">
							<?php 
//for time slot
							//$timeSlot=$conn->query("select time from timeslot");	

//movie details
							$movieId=$_POST['movieId'];	
							$_SESSION['movieId']=$movieId;
							$res=$conn->query("select * from movielist where movieId=$movieId;");
							$row=$res->fetch_object();

							echo "".$row->Name;?>
						</h3>
					</div>
				
					<div class="panel-body">
						<div class="row">
							<div class="col-md-4 col-lg-4 " align="center">
								<img alt="User Pic4" src=<?php echo '"uploadimages/'.$row->image.'"';?> class=" img-responsive"> <br><br>
			
			                      <p style="font-family: Anton ; font-size:25px ;">Watch The Movie Trailer</p>
			
			                    <video width="400" controls class=" img-responsive">
  <source src=<?php echo '"uploadvideo/'.$row->video_url.'"';?>  type="video/mp4">
  <source src=<?php echo '"uploadvideo/'.$row->video_url.'"';?>  type="video/ogg">
  
</video>
			
			
							</div>
							<div class=" col-md-8 col-lg-8 "> 
								<table class="table table-user-information">
									<tbody>
										<tr>
											<td><strong>Movie Name </strong></td>
											<td><?php echo "".$row->Name;?> </td>
										</tr>
										<tr>
											<td><strong>Genre</strong></td>
											<td> <?php echo "".$row->Genre;?> </td>
										</tr>
										<tr>
											<td><strong>Director</strong></td>
											<td><?php echo "".$row->Director;?> </td>
										</tr>
										<tr>
											<tr>
												<td><strong>IMDB</strong></td>
												<td><?php echo "".$row->imdb;?> </td>
											</tr>
											<tr>
												<td><strong>Description</strong></td>
												<td><?php echo "".$row->Description;	?> </td>
											</tr>



											<form action="ticketConfirmation.php" method="post" >

												<tr>
													<td><strong>Date</strong></td>
													<td><input class="boxStyle" type="date" name="date"></td>
												</tr>
												<tr>

													<td><strong>Show Time</strong></td>
													<td>  <select name="timeSlot" class="boxStyle"> 
														<?php $timeSlot=$conn->query("select time from timeslot"); 
														while ($showTime=$timeSlot->fetch_object()) {

															echo " <option value='".$showTime->time."'>". $showTime->time."</option>
															";
														} ?> 
													</select></td>
												</tr>
												<tr>
													<td><strong>Theater</strong></td>
													<td>
														<select name="theater" class="boxStyle"> 
															<?php $resourse=$conn->query("select theaterName from theater"); 
															while ($theater=$resourse->fetch_object()) {

																echo " <option value='".$theater->theaterName."'>". $theater->theaterName."</option>
																";
															} ?> 
														</td>
													</tr>	
													
													<tr>
													<td><strong>Your Email</strong></td>
													<td>
													   <input  name="user" placeholder="Email" type="text" tabindex="1" required autofocus>
									
													</td>
													
													
													
													
													
													
													
													</tr>
													<tr>									
														<td colspan="2" width="100%">
															<input class="btn btn-primary btn-xs btn-block" type="submit" name="submit" value="Request For Ticket">
														</td>
													</tr>
												</form>



											</tbody>
										</table>

									</div>
								</div>
                              
                              
 
 
 
 
							</div>
						</div>
					</div>

				</div>

			</div>
 
		
		
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Movie Seat Booking</title>
    <style type="text/css">
    
    
    @import url('https://fonts.googleapis.com/css?family=Lato&display=swap');

body {
  
  
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  
  font-family: 'Lato', sans-serif;
  margin: 0;
}


.container {
  perspective: 1000px;
  margin-bottom: 30px;
}

.empty {
   background-color: gray;
  height: 50px;
  width: 50px;
  margin: 3px;
   color : white;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}

.select {
 
 background-color: green;
  height: 50px;
  width: 50px;
  margin: 3px;
   color : white;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
 
}

.occupied {
  background-color: red;
  
  height: 15px;
  width: 15px;
  margin: 3px;
  
   color : white;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}




.screen {

  line-height:50px;
  font-size:50px;
  


  background-color: #4388cc;
  height: 100px;
  width: 100%;
  color:#fff;
   
  margin: 15px 0;
  transform: rotateX(-45deg);
  box-shadow: 0 3px 10px rgba(255, 255, 255, 0.7);
}
table {
  width: 100%;
}

th {
  height: 50px;
   width: 100%;
}
 
    




input[type=checkbox] {
    width:0px;
    margin-right:18px;
}

input[type=checkbox]:before {
    content: "";
     display: inline-block;
    width: 20px;
    height: 20px;
   
   
    
    background-color:#ccc;
    
  
  margin: 3px;
 
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
    
}

input[type=checkbox]:checked:before {
    background-color:Green;
    
}
    
    
    
    
    
    </style>
    
    
  </head>
  <h3> Select The Seat Please </h3>
  <body>
  <form  action="seat.php" method="post" id="myForm">
    <div class="movie-container">
    
      <label>Movie name: </label>
      <select id="Movie" name="Movie">
        <option value="7">

        </option>
           
		 
		<?php $resourse=$conn->query("select Name from movielist"); 
		while ($movieId=$resourse->fetch_object()) {

	echo " <option value='".$movieId->Name."'>". $movieId->Name."</option>
																";
	} ?> 
        
        
       
      </select>
    </div>

    <ul class="showcase">
      <li>
        <div class="empty"></div>
        <small>Empty Seat</small>
      </li>
      <li>
        <div class=" select"></div>
        <small>Selected Seat</small>
      </li>
     
    </ul>



<table  >
  <tr>
    <td colspan="14"><div class="screen"> <center>SCREEN</center></div></td>
</tr>

<tr >
    <td></td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td></td>
    <td>6</td>
    <td>7</td>
    <td>8</td>
    <td>9</td>
    <td>10</td>
    <td>11</td>
    <td>12</td>
</tr>
  
<tr>
    <td>A</td>
    <td> <div > <input   name="Seat"    type="checkbox"  class="save-cb-state" id="mycheckbox"      value="A1"></div></td>
    <td><div ><input    name="Seat"   type="checkbox" class="save-cb-state" id="mycheckbox2"    value="A2"></div></td>
    <td> <div > <input   name="Seat"    type="checkbox"  class="save-cb-state" id="mycheckbox3"      value="A3"></div></td>
    <td><div  ><input    name="Seat"   type="checkbox" class="save-cb-state" id="mycheckbox4"       value="A4"></div></td>
    <td><div ><input    name="Seat"   type="checkbox" class="save-cb-state" id="mycheckbox5"    value="A5"></div></td>
    
   
    <td class="seatGap"></td>
    <td><div ><input    name="Seat"   type="checkbox" class="save-cb-state" id="mycheckbox6"    value="A6"></div></td>
    <td><div ><input    name="Seat"   type="checkbox" class="save-cb-state" id="mycheckbox7"    value="A7"></div></td>
    <td><input  name="Seat"     type="checkbox" class="save-cb-state" id="mycheckbox8"  value="A8"></td>
    <td><input   name="Seat"    type="checkbox" class="save-cb-state" id="mycheckbox9"   value="A9"></td>
    <td><input    name="Seat"   type="checkbox" class="save-cb-state" id="mycheckbox10"   value="A10"></td>
    <td><input    name="Seat"   type="checkbox" class="save-cb-state" id="mycheckbox11"   value="A11"></td>
    <td><input  name="Seat"     type="checkbox" class="save-cb-state" id="mycheckbox12"   value="A12"></td>
    
           
  </tr>
  
  <tr>
    <td>B</td>
    <td><input  name="Seat"     type="checkbox"  class="save-cb-state" id="mycheckbox13" value="B1"></td>
    <td><input  name="Seat"     type="checkbox"  class="save-cb-state" id="mycheckbox14" value="B2"></td>
    <td><input   name="Seat"    type="checkbox"  class="save-cb-state" id="mycheckbox15"value="B3"></td>
    <td><input    name="Seat"   type="checkbox"  class="save-cb-state" id="mycheckbox16" value="B4"></td>
    <td><input    name="Seat"   type="checkbox"  class="save-cb-state" id="mycheckbox17" value="B5"></td>
    <td></td>
    <td><input   name="Seat"    type="checkbox"  class="save-cb-state" id="mycheckbox18"  value="B6"></td>
    <td><input   name="Seat"    type="checkbox"   class="save-cb-state" id="mycheckbox19" value="B7"></td>
    <td><input   name="Seat"    type="checkbox"  class="save-cb-state"  id="mycheckbox20" value="B8"></td>
    <td><input  name="Seat"     type="checkbox"  class="save-cb-state"  id="mycheckbox21" value="B9"></td>
    <td><input    name="Seat"   type="checkbox"   class="save-cb-state" id="mycheckbox22" value="B10"></td>
    <td><input    name="Seat"   type="checkbox"   class="save-cb-state" id="mycheckbox23" value="B11"></td>
    <td><input   name="Seat"    type="checkbox"   class="save-cb-state" id="mycheckbox24" value="B12"></td>
  </tr>
  
  <tr>
    <td>C</td>
    <td><input   name="Seat"    type="checkbox"  class="save-cb-state" id="mycheckbox25"  value="C1"></td>
    <td><input   name="Seat"    type="checkbox"   class="save-cb-state" id="mycheckbox26"  value="C2"></td>
    <td><input   name="Seat"    type="checkbox"   class="save-cb-state"id="mycheckbox27"  value="C3"></td>
    <td><input   name="Seat"    type="checkbox"   class="save-cb-state" id="mycheckbox28"  value="C4"></td>
    <td><input    name="Seat"   type="checkbox"  class="save-cb-state" id="mycheckbox29" value="C5"></td>
    <td></td>
    <td><input   name="Seat"     type="checkbox"  class="save-cb-state" id="mycheckbox30"  value="C6"></td>
    <td><input  name="Seat"      type="checkbox"   class="save-cb-state"id="mycheckbox31"  value="C7"></td>
    <td><input   name="Seat"     type="checkbox"    class="save-cb-state" id="mycheckbox32"  value="C8"></td>
    <td><input    name="Seat"    type="checkbox"  class="save-cb-state" id="mycheckbox33"  value="C9"></td>
    <td><input    name="Seat"    type="checkbox"  class="save-cb-state" id="mycheckbox34"  value="C10"></td>
    <td><input    name="Seat"    type="checkbox"   class="save-cb-state" id="mycheckbox35"  value="C11"></td>
    <td><input   name="Seat"     type="checkbox"   class="save-cb-state" id="mycheckbox36"  value="C12"></td>
</tr>
  
<tr>
    <td>D</td>
    <td><input  name="Seat"   type="checkbox"  class="save-cb-state" id="mycheckbox37"  value="D1"></td>
    <td><input  name="Seat"   type="checkbox"  class="save-cb-state" id="mycheckbox38"  value="D2"></td>
    <td><input   name="Seat"  type="checkbox"  class="save-cb-state" id="mycheckbox39"  value="D3"></td>
    <td><input  name="Seat"   type="checkbox"  class="save-cb-state" id="mycheckbox40"  value="D4"></td>
    <td><input  name="Seat"    type="checkbox"  class="save-cb-state" id="mycheckbox41"  value="D5"></td>
    <td></td>
    <td><input  name="Seat"   type="checkbox"  class="save-cb-state"  id="mycheckbox42" value="D6"></td>
    <td><input  name="Seat"   type="checkbox"  class="save-cb-state"  id="mycheckbox43" value="D7"></td>
    <td><input name="Seat"    type="checkbox"   class="save-cb-state"  id="mycheckbox44" value="D8"></td>
    <td><input  name="Seat"   type="checkbox"   class="save-cb-state"  id="mycheckbox45" value="D9"></td>
    <td><input  name="Seat"   type="checkbox"  class="save-cb-state"  id="mycheckbox46" value="D10"></td>
    <td><input   name="Seat"  type="checkbox"   class="save-cb-state"  id="mycheckbox47" value="D11"></td>
    <td><input   name="Seat"  type="checkbox"  class="save-cb-state"  id="mycheckbox48" value="D12"></td>
</tr>
  
<tr>
    <td>E</td>
    <td><input  name="Seat"    type="checkbox"  class="save-cb-state"  id="mycheckbox49" value="E1"></td>
    <td><input  name="Seat"    type="checkbox"  class="save-cb-state"  id="mycheckbox50" value="E2"></td>
    <td><input  name="Seat"    type="checkbox"  class="save-cb-state"  id="mycheckbox51" value="E3"></td>

    <td><input  name="Seat"    type="checkbox"  class="save-cb-state"  id="mycheckbox52" value="E4"></td>
    <td><input   name="Seat"   type="checkbox"  class="save-cb-state"  id="mycheckbox53" value="E5"></td>
    <td></td>
    <td><input  name="Seat"    type="checkbox"  class="save-cb-state"  id="mycheckbox54" value="E6"></td>
    <td><input   name="Seat"   type="checkbox"  class="save-cb-state"  id="mycheckbox55" value="E7"></td>
    <td><input   name="Seat"   type="checkbox"  class="save-cb-state"  id="mycheckbox56" value="E8"></td>
    <td><input    name="Seat"  type="checkbox"   class="save-cb-state" id="mycheckbox57" value="E9"></td>
    <td><input    name="Seat"  type="checkbox"   class="save-cb-state" id="mycheckbox58" value="E10"></td>
    <td><input    name="Seat"  type="checkbox"   class="save-cb-state" id="mycheckbox59" value="E11"></td>
    <td><input    name="Seat"  type="checkbox"   class="save-cb-state" id="mycheckbox60" value="E12"></td>
    
</tr>
  
<tr class="seat"></tr>
  
<tr>
    <td>F</td>
    <td><input  name="Seat"    type="checkbox"  class="save-cb-state" id="mycheckbox61" value="F1" ></td>
    <td><input   name="Seat"   type="checkbox"  class="save-cb-state"id="mycheckbox62" value="F2"></td>
    <td><input   name="Seat"   type="checkbox"   class="save-cb-state"id="mycheckbox63" value="F3"></td>
    <td><input    name="Seat"  type="checkbox"   class="save-cb-state" id="mycheckbox64" value="F4"></td>
    <td><input    name="Seat"  type="checkbox"    class="save-cb-state" id="mycheckbox65" value="F5"></td>
    <td></td>
    <td><input   name="Seat"   type="checkbox"  class="save-cb-state" id="mycheckbox66" value="F6"></td>
    <td><input   name="Seat"   type="checkbox"   class="save-cb-state" id="mycheckbox67" value="F7"></td>
    <td><input   name="Seat"   type="checkbox"  class="save-cb-state" id="mycheckbox68" value="F8"></td>
    <td><input    name="Seat"  type="checkbox"   class="save-cb-state" id="mycheckbox69" value="F9"></td>
    <td><input   name="Seat"   type="checkbox"   class="save-cb-state" id="mycheckbox70" value="F10"></td>
    <td><input   name="Seat"   type="checkbox"    class="save-cb-state" id="mycheckbox71" value="F11"></td>
    <td><input    name="Seat"  type="checkbox"    class="save-cb-state" id="mycheckbox72"  value="F12"></td>
</tr>
  
<tr>
    <td>G</td>
    <td><input   name="Seat"   type="checkbox"  class="save-cb-state" id="mycheckbox73" value="G1"></td>
    <td><input    name="Seat"  type="checkbox"  class="save-cb-state" id="mycheckbox74" value="G2"></td>
    <td><input   name="Seat"   type="checkbox"   class="save-cb-state" id="mycheckbox75" value="G3"></td>
    <td><input    name="Seat"  type="checkbox"   class="save-cb-state"id="mycheckbox76" value="G4"></td>
    <td><input    name="Seat"  type="checkbox"   class="save-cb-state"id="mycheckbox77" value="G5"></td>
    <td></td>
    <td><input  name="Seat"    type="checkbox"  class="save-cb-state" id="mycheckbox78" value="G6"></td>
    <td><input   name="Seat"   type="checkbox"  class="save-cb-state" id="mycheckbox79" value="G7"></td>
    <td><input   name="Seat"   type="checkbox"  class="save-cb-state" id="mycheckbox80" value="G8"></td>
    <td><input   name="Seat"   type="checkbox"   class="save-cb-state" id="mycheckbox81" value="G9"></td>
    <td><input   name="Seat"  type="checkbox"  class="save-cb-state" id="mycheckbox82" value="G10"></td>
    <td><input   name="Seat"  type="checkbox"   class="save-cb-state" id="mycheckbox83" value="G11"></td>
    <td><input   name="Seat"   type="checkbox"   class="save-cb-state"id="mycheckbox84" value="G12"></td>
</tr>
  
<tr>
    <td>H</td>
    <td><input  name="Seat"     type="checkbox"  class="save-cb-state" id="mycheckbox85" value="H4"></td>
    <td><input  name="Seat"     type="checkbox"  class="save-cb-state" id="mycheckbox86" value="H4"></td>
    <td><input  name="Seat"     type="checkbox"  class="save-cb-state" id="mycheckbox87" value="H4"></td>
    <td><input  name="Seat"     type="checkbox"  class="save-cb-state" id="mycheckbox88" value="H4"></td>
    <td><input   name="Seat"   type="checkbox"  class="save-cb-state" id="mycheckbox89" value="H5"></td>
    <td></td>
    <td><input   name="Seat"    type="checkbox"  class="save-cb-state" id="mycheckbox90" value="H6"></td>
    <td><input    name="Seat"   type="checkbox"  class="save-cb-state" id="mycheckbox91" value="H7"></td>
    <td><input     name="Seat"  type="checkbox"  class="save-cb-state" id="mycheckbox92" value="H8"></td>
    <td><input     name="Seat"  type="checkbox"  class="save-cb-state" id="mycheckbox93" value="H9"></td>
    <td><input  name="Seat"     type="checkbox"  class="save-cb-state" id="mycheckbox94" value="H4"></td>
    <td><input  name="Seat"     type="checkbox"  class="save-cb-state" id="mycheckbox95" value="H4"></td>
    <td><input  name="Seat"     type="checkbox"  class="save-cb-state" id="mycheckbox96" value="H4"></td>
    
</tr>
  
<tr>
    <td>I</td>
    <td><input  name="Seat"     type="checkbox"  class="save-cb-state" id="mycheckbox97" value="H4"></td>
    <td><input  name="Seat"     type="checkbox"  class="save-cb-state" id="mycheckbox98" value="H4"></td>
    <td><input  name="Seat"     type="checkbox"  class="save-cb-state" id="mycheckbox99" value="H4"></td>
    <td><input    name="Seat"   type="checkbox"  class="save-cb-state" id="mycheckbox100" value="I4"></td>
    <td><input     name="Seat"  type="checkbox"   class="save-cb-state" id="mycheckbox101" value="I5"></td>
    <td></td>
    <td><input    name="Seat"   type="checkbox"  class="save-cb-state" id="mycheckbox102" value="I6"></td>
    <td><input    name="Seat"   type="checkbox"   class="save-cb-state" id="mycheckbox103" value="I7"></td>
    <td><input     name="Seat"  type="checkbox"   class="save-cb-state" id="mycheckbox104" value="I8"></td>
    <td><input   name="Seat"    type="checkbox"   class="save-cb-state" id="mycheckbox105" value="I9"></td>
    <td><input  name="Seat"     type="checkbox"  class="save-cb-state" id="mycheckbox106" value="H4"></td>
    <td><input  name="Seat"     type="checkbox"  class="save-cb-state" id="mycheckbox107" value="H4"></td>
    <td><input  name="Seat"     type="checkbox"  class="save-cb-state" id="mycheckbox108" value="H4"></td>
    
</tr>
  
<tr>
    <td>J</td>
        <td><input  name="Seat"     type="checkbox"  class="save-cb-state" id="mycheckbox109" value="H4"></td>
        <td><input  name="Seat"     type="checkbox"  class="save-cb-state" id="mycheckbox110" value="H4"></td>
        <td><input  name="Seat"     type="checkbox"  class="save-cb-state" id="mycheckbox111" value="H4"></td>
    
    <td><input   name="Seat"    type="checkbox"  class="save-cb-state" id="mycheckbox112" value="J4"></td>
    <td><input    name="Seat"  type="checkbox"  class="save-cb-state" id="mycheckbox113" value="J5"></td>
    <td></td>
    <td><input  name="Seat"   type="checkbox"  class="save-cb-state" id="mycheckbox114" value="J6"></td>
    <td><input   name="Seat"  type="checkbox"  class="save-cb-state" id="mycheckbox115" value="J7"></td>
    <td><input   name="Seat"  type="checkbox"   class="save-cb-state" id="mycheckbox116" value="J8"></td>
    <td><input  name="Seat"   type="checkbox"   class="save-cb-state" id="mycheckbox117" value="J9"></td>
       <td><input  name="Seat"     type="checkbox"  class="save-cb-state" id="mycheckbox118" value="H4"></td>
       <td><input  name="Seat"     type="checkbox"  class="save-cb-state" id="mycheckbox119" value="H4"></td>
       <td><input  name="Seat"     type="checkbox"  class="save-cb-state" id="mycheckbox120" value="H4"></td>
   
</tr>
  









</table><br><br>
    

    
          <p><strong>Your Email: </strong></p>
	 <input  name="yourname" id="yourname" placeholder="Email" type="text" tabindex="1" required autofocus><br><br>

	<input class="btn btn-success" type="submit" id="sub" name="submit" value="Request For seat">
    

</form>


<span id="result"></span>
<script type="text/javascript">


$("#sub").click( function() {
	 $.post( $("#myForm").attr("action"), 
	         $("#myForm :input").serializeArray(), 
	         function(info){ $("#result").html(info); 
	   });
	 
	});
	 
	$("#myForm").submit( function() {
	  return false;	
	});




</script> 

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

   
   <script>
// Avoid scoping issues by encapsulating code inside anonymous function
(function() {
  // variable to store our current state
  var cbstate;
  
  // bind to the onload event
  window.addEventListener('load', function() {
    // Get the current state from localstorage
    // State is stored as a JSON string
    cbstate = JSON.parse(localStorage['CBState'] || '{}');
  
    // Loop through state array and restore checked 
    // state for matching elements
    for(var i in cbstate) {
      var el = document.querySelector('input[id="' + i + '"]');
      if (el) el.checked = true;
    }
  
    // Get all checkboxes that you want to monitor state for
    var cb = document.getElementsByClassName('save-cb-state');
  
    // Loop through results and ...
    for(var i = 0; i < cb.length; i++) {
  
      //bind click event handler
      cb[i].addEventListener('click', function(evt) {
        // If checkboxe is checked then save to state
        if (this.checked) {
          cbstate[this.id] = true;
        }
    
    // Else remove from state
        else if (cbstate[this.id]) {
          delete cbstate[this.id];
        }
    
    // Persist state
        localStorage.CBState = JSON.stringify(cbstate);
      });
    }
  });
})();




	
	 
	
</script>




   
  </body>
</html>


<h3> Rate The Film Please </h3>
<body class="container">
<div class="row">
<div class="col-md-12">
	<div class="form-group">
		<div class="form-group has-success has-feedback">
		    <label for="name">Your Name :</label>
		    <input type="text" class="form-control" id="name">		    
	  	</div>
	    
	  <div class="form-group has-success has-feedback">
		    <label for="fname">Your Movie :</label>
		     
		     <select id="fname" name="Movie">
        <option value="7">

        </option>
           
		 
		<?php $resourse=$conn->query("select Name from movielist"); 
		while ($movieId=$resourse->fetch_object()) {

	echo " <option value='".$movieId->Name."'>". $movieId->Name."</option>
																";
	} ?> 
        
        
       
      </select>
		    
	   
	    <label for="email"> Rating :</label>	  	
	  	<div class='starrr' id='rating-student'></div> 	<br>
	  	<input type="button" id="submit" class="btn btn-success" value="Rate">
	  	<div class="msg"></div>
	</div>	
</div>

<hr>
<!-- show the student -->
<h2>Rate Details</h2>
<table class="table table-condensed">
	<thead>
	  <tr>
	    <th>User Name</th>
	    <th>Film Name</th>
	    <th>User Rating</th>
	  </tr>
	</thead>
	<tbody>
	<?php 
		$conn = mysqli_connect('movie.com','root','','moviedb');
		if($qry = mysqli_query($conn,"SELECT * FROM records")){
			while($show = mysqli_fetch_assoc($qry)){
				echo "<tr>";
					echo "<td>".$show['name']."</td>";					
					echo "<td>".$show['fname']."</td>";					
					if($show['rating']==1){ echo "<td><i class='fa fa-star'></i></td>"; }
					if($show['rating']==2){ echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i></td>"; }
					if($show['rating']==3){ echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></td>"; }
					if($show['rating']==4){ echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></td>"; }
					if($show['rating']==5){ echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></td>"; }
				echo "</tr>";
			}
		}
	?>
	</tbody>
</table>
	
</div>



<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- star js -->
<script src="js/ratingstar.js"></script>
<!-- ajax -->
<script>
// rating
var rate;
$('#rating-student').starrr({
  change: function(e, value){ 
  	rate = value;  	       
    if (value) {
      $('.your-choice-was').show();      
    } else {
      $('.your-choice-was').hide();
    }
  }
});
// ajax submit
$("#submit").click(function(){	
	var name = $('#name').val();
	var fname = $('#fname').val();	
	$.ajax({		
        url: "rating.php",
        type: 'post',
        data: {v1 : name, v2 : fname, v3 : rate},
        success: function (status) {
        	if(status == 1){
            	$('.msg').html('<b>Rate Done !</b>');           	
        	}else{
            	$('.msg').html('<b>Server side error !</b>');        		
        	}
        }
    });

});
</script>
</body>
</html>


		
		
		
		
		
		
		
		
		
		
		
		
		
		