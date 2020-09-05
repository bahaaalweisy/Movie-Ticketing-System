<?php
      
      if(isset($_POST['submit'] )){
      
          $to =$_POST['yourname'];
          $subject = "Send Events And Experiences by Movie House Cinemas";
          
          $message = "<h1> Birthday discounts</h1>";
          $message .= "<h3>On your birthday, you can get great discounts. All you have to do is bring your ID to the cinema with you.</h3>";
          
          $message .= "<h1>National holiday discounts</h1>";
          $message .= "<h3>The cinema will announce the discounts for the national holidays on time.</h3>";
          
          
         
          $header = "From:alweisyb@gmail.com \r\n";
          
          $header .= "MIME-Version: 1.0\r\n";
          $header .= "Content-type: text/html\r\n";
          
          $retval = mail ($to,$subject,$message,$header);
          
          if( $retval == true ) {
              echo "Message sent successfully...";
          }else {
              echo "Message could not be sent...";
          }
      
      
      
      
      }
      
        
      ?>