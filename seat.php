<?php     

    $movie=$_POST['Movie'];
    $seat=$_POST['Seat'];
    $user=$_POST['yourname'];
    
	$conn = mysqli_connect('localhost','root','','movieDb');
	if(mysqli_query($conn,"INSERT INTO seat VALUES('','".$_POST['Movie']."','".$_POST['Seat']."','".$_POST['yourname']."')")){
	       
	    echo "Successfully Inserted";
	    
	    
	}else{

	    echo "Insertion Failed";
	    
	
	}


?>
