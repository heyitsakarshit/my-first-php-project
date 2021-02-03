
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
  $query = "SELECT * FROM gallery ORDER BY id DESC";
  $result = mysqli_query($connect, $query);
  $output = '
   <table class="table table-bordered table-striped">  
    <tr>
     <th width="10%">ID</th>
     <th width="70%">Image</th>
  <th width="10%">Update Image</th>
     <th width="10%">Remove</th>
    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '

    <tr>
     <td>'.$row["id"].'</td>
     <td>
      <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="200" class="img-thumbnail" required/>
     </td>
       <td><button type="button" name="update" class="btn btn-warning bt-xs update" id="'.$row["id"].'">Update Image</button></td>
     <td><button type="button" name="delete" class="btn btn-danger bt-xs delete" id="'.$row["id"].'">Remove</button></td>
    </tr>
   ';
  }
  $output .= '</table>';
  echo $output;
 }
 
 
 if($_POST["action"] == "insert")
 {
  
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $query = "INSERT INTO gallery (image) VALUES ('$file')";
  if(mysqli_query($connect, $query))
  {
   echo 'Image Inserted into Database';
  }
 }



 if($_POST["action"] == "update")
 {
      
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $query = "UPDATE gallery SET image = '$file' WHERE id = '".$_POST["image_id"]."'";
  if(mysqli_query($connect, $query))
  {
   echo 'Updated into Database';
  }
 }
 if($_POST["action"] == "delete")
 {
  $query = "DELETE FROM gallery WHERE id = '".$_POST["image_id"]."'";
  if(mysqli_query($connect, $query))
  {
   echo 'Image Deleted from Database';
  }
 }
}
?>