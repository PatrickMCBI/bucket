<?php 
require_once('database.php');

$db=$conn; // Enter your Connection variable;
$tableName='files'; // Enter your table Name;

// fetching files from database
$fetchFiles=fetch_files($tableName);

// uploading files on submit
if(isset($_POST['submit'])){ 

    //  uploading files
    echo upload_files($tableName); 
}



  function upload_files($tableName){
    global $db;
    $uploadTo = "uploads/"; 
    $allowFileExt = array('jpg','png','jpeg','mp4');
    $fileName = array_filter($_FILES['file_name']['name']);
    $fileTempName=$_FILES["file_name"]["tmp_name"];
    $tableName= trim($tableName);

    $name = $_POST['name'];

    $store="INSERT INTO `user_file` (`name`) VALUES ('$name')";
    $exec= $db->query($store);

    $id = mysqli_insert_id($db);

    if(empty($fileName)){ 
       $error="Please Select files..";
       return $error;
     }else if(empty($tableName)){
       $error="You must declare table name";
       return $error;
     }else{
    
     $error=$storeFilesBasename='';

    foreach($fileName as $index=>$file){
         
    $fileBasename = basename($fileName[$index]);
    $filePath = $uploadTo.$fileBasename; 
    $fileExt = pathinfo($filePath, PATHINFO_EXTENSION); 

    if(in_array($fileExt, $allowFileExt)){ 

        // Upload file to server 
        if(move_uploaded_file($fileTempName[$index],$filePath)){ 
        
         // Store Files into database table
         $storeFilesBasename .= "('".$fileBasename."', $id),"; 
          
         }else{ 
         $error = 'File Not uploaded ! try again';

         } 

     }else{

       $error .= $_FILES['file_name']['name'][$index].' - file extensions not allowed<br> ';

     }
    }

    store_files($storeFilesBasename, $tableName);
  }

    return $error;
}
    // File upload configuration 

    function store_files($storeFilesBasename, $tableName){
      global $db;
      if(!empty($storeFilesBasename))
      {
      $value = trim($storeFilesBasename, ',');


       $store="INSERT INTO ".$tableName." (file_name, user_id) VALUES".$value;

      
      $exec= $db->query($store);
       if($exec){
       
        echo "files are uploaded successfully";
         
       }else{
        echo  "Error: " .  $store . "<br>" . $db->error;
       }
      }
    }
   
      
      // fetching padination data
function fetch_files($tableName){
   global $db;
   $tableName= trim($tableName);
   if(!empty($tableName)){
  $query = "SELECT * FROM ".$tableName." ORDER BY id DESC";
  $result = $db->query($query);

if ($result->num_rows > 0) {
    $row= $result->fetch_all(MYSQLI_ASSOC);
    return $row;       
  }else{
    
    echo "No files are stored in database";
  }
}else{
  echo "you must declare table name to fetch files";
}
}   
    
?>