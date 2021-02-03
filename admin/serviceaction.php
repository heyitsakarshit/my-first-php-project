
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
  $query = "SELECT * FROM services ";
  $result = mysqli_query($connect, $query);
  $output = '
   <table class="table table-bordered table-striped">  
    <tr>
     <th width="10%">ID</th>
     <th width="10%">Name</th>
     <th width="10%">Desciption</th>
     <th width="10%">Symptoms</th>
     <th width="70%">Image</th> 
     <th width="10%">Update</th>
     <th width="10%">Remove</th>
    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '

    <tr>
     <td>'.$row["id"].'</td>
      <td>'.$row["name"].'</td>
       <td>'.$row["description"].'</td>
             <td>'.$row["symptom"].'</td>
     <td>
      <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="200" class="img-thumbnail" />
     </td>
       
     <td><a href="updateservice.php?id='.$row["id"].'"  class="btn btn-success">Update</a></td>
     <td><button type="button" name="delete" class="btn btn-danger bt-xs delete" id="'.$row["id"].'">Remove</button></td>
    </tr>
   ';
  }
  $output .= '</table>';
  echo $output;
 }

if($_POST["action"] == "insert")
 {
   
            
  $fullname = $_POST['name'];
  $symptom = implode('\n',$_POST['symptom_name']);

  $age = $_POST['description'];
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $query = "INSERT INTO services (name,description,	symptom,image) VALUES ('$fullname','$age','$symptom','$file')";
  if(mysqli_query($connect, $query))
  {
   echo 'Service added into Database';
  }
 }

 if($_POST["action"] == "update")
 {
      $fullname = $_POST['name'];
      $symptom = implode('\n ', $_POST['symptom_name']);
    $age = $_POST['description'];
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $query = "UPDATE services SET image = '$file',name='$fullname', description='$age', symptom='$symptom' WHERE id = '".$_POST["image_id"]."'";
  if(mysqli_query($connect, $query)) 
  {
   echo 'Updated into Database';
  }
 }
 if($_POST["action"] == "delete")
 {
  $query = "DELETE FROM services WHERE id = '".$_POST["image_id"]."'";
  if(mysqli_query($connect, $query))
  {
   echo ' Deleted from Database';
  }
 }
}
?>