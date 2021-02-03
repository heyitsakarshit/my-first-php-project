<?php
$servername = "localhost"; 
$username = "drakpandey"; 
$password = "Pandey@809"; 
$dbname = "akpandey"; // Create connection 
$con =  mysqli_connect($servername, $username, $password, $dbname); 

$id=$_REQUEST['id'];
$query = "DELETE FROM contacts WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: enquiry.php?success=1"); 

?>