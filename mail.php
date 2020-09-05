<html>
   <head>
      <title>Sending HTML email using PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <style type="text/css">
body {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  
  font-family: 'Lato', sans-serif;
  margin: 0;
}
   </style>
   
   </head>
   
   <body>       
      <form action="mails.php" method="post" id="myForm">
      
      
          <p><strong>Email: </strong></p>
	 <input  name="yourname" id="yourname" placeholder="Email" type="text" tabindex="1" required autofocus><br><br>

	<input class="btn btn-success" type="submit" id="sub" name="submit" value="Send">
    
      

      </form>
      
      
      
   </body>
</html>
































