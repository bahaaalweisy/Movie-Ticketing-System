<?php
$host="localhost";
$username="root";
$password="";
$db_name="movieDb";
$conn = new mysqli($host, $username, $password,$db_name);
$stmt=$conn->prepare("Delete From movielist where movieId=?");
$stmt->bind_param("s",$_POST["movieId"]);
$stmt->execute();
echo "<center><h1 style='color:red; font-size:50px; ' >Delete Done</h1></center>";
?>