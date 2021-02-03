
<?php  
//action.php
$servername = "localhost"; 
$username = "drakpandey"; 
$password = "Pandey@809"; 
$dbname = "akpandey"; // Create connection 
if(isset($_POST["action"]))
{
 $connect =  mysqli_connect($servername, $username, $password, $dbname); 
 if($_POST["action"] == "fetch")
 {
  $query = "SELECT * FROM symptoms ";
  $result = mysqli_query($connect, $query);
  $output = '
   <table class="table table-bordered table-striped">  
    <tr>
     <th width="10%">ID</th>
    
     <th width="10%">Disease Symptoms</th>
     <th width="10%">Update</th>
     <th width="10%">Remove</th>
    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '

    <tr>
     <td>'.$row["id"].'</td>
    
       <td>'.$row["symptoms_name"].'</td>
     
     
     <td><button type="button" name="update" class="btn btn-warning bt-xs update" id="'.$row["id"].'">Update</button></td>
     <td><button type="button" name="delete" class="btn btn-danger bt-xs delete" id="'.$row["id"].'">Remove</button></td>
    </tr>
   ';
  }
  $output .= '</table>';
  echo $output;
 }

if($_POST["action"] == "insert")
 {
    
    $age = $_POST['symptoms_name'];
  $query = "INSERT INTO symptoms (symptoms_name) VALUES ('$age')";
  if(mysqli_query($connect, $query))
  {
   echo 'Symptoms added into Database';
  }
 }

 if($_POST["action"] == "update")
 {
     
    $age = $_POST['symptoms_name'];

  $query = "UPDATE symptoms SET  symptoms_name='$age' WHERE id = '".$_POST["image_id"]."'";
  if(mysqli_query($connect, $query))
  {
   echo 'Updated into Database';
  }
 }
 if($_POST["action"] == "delete")
 {
  $query = "DELETE FROM symptoms WHERE id = '".$_POST["image_id"]."'";
  if(mysqli_query($connect, $query))
  {
   echo ' Deleted from Database';
  }
 }
}
?>