<?php
session_start();
$conn = new mysqli("localhost", "root", "",  "bucket_db");

$searchTerm = $_GET['term'];
$sql = "SELECT * FROM file_uploaded WHERE title LIKE '%".$searchTerm."%'"; 
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
  $tutorialData = array(); 
  while($row = $result->fetch_assoc()) {
   $data['id']    = $row['id']; 
   $data['value'] = $row['title'];
   array_push($tutorialData, $data);
} 
}
 echo json_encode($tutorialData);
?>