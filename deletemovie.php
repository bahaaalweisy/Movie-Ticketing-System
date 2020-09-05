<html>
<head>
<title> Delete Movie </title>
 <meta name="viewport" content="width=device-width, initial-scale=1">  
</head>
<body>
<center><h1> Copy film <strong style="color:red" >ID</strong> and put it in field to delete it </h1></center><hr>
<?php 
$host="localhost";
$username="root";
$password="";
$db_name="movieDb";
// Create connection
$conn = new mysqli($host, $username, $password,$db_name);
$sql = "SELECT * FROM movielist";
echo "<center style='color:green; font-size:50px'>Film Name and <strong style='color:red'  > ID</strong></center>";echo '<br>'; 
echo '<hr>';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
echo "<strong><center>".$row['Name']." | <strong style='color:red' >ID</strong> = ";
echo $row['movieId'];

echo "<hr>";

       
    }
} else {
    echo "0 results";
}

?>
<hr>
<h1>Delete Film Here</h1>
<form action="deletedone.php" method="post">
<strong style="color:red" >ID</strong> : <input type="text" name="movieId" ><br/>
<br>
<input type="submit"  >

</form>
</body>
</html>