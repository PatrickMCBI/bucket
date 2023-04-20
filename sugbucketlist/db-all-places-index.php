<?php 
    session_start();
    $conn = new mysqli("localhost", "root", "",  "bucket_db");
    $db = $conn;

    $id = $_GET['id'];
    $placeslistImages = fetch_placesImages($id);
    $placesTitle = fetch_placesTitle($id);
    
    function fetch_placesImages($id){
        
        global $db;
         if(!empty($id)){

            $query = "SELECT * FROM `file_uploaded_details` WHERE file_uploaded_id = ".$id."";
            $result = $db->query($query);
            

          if ($result->num_rows > 0) {
              $row= $result->fetch_all(MYSQLI_ASSOC);
              return $row;
            }else{
          
              echo "No files are stored in database  ";
            }
        }
        else{
            echo "your Url has invalid";
        }

    }
    function fetch_placesTitle($id){
        
        global $db;
         if(!empty($id)){
            $query = "SELECT * FROM `file_uploaded` WHERE id = ".$id.";";
            $result = $db->query($query);

          if ($result->num_rows > 0) {
              $row= $result->fetch_all(MYSQLI_ASSOC);
              return $row;
            }else{
          
              echo "No files are stored in database  ";
            }
        }
        else{
            echo "your Url has invalid";
        }

    }

    if(isset($_POST['submit'])) // If the submit button was clicked
    {
        echo save_bucketlist();

    }
    function save_bucketlist(){
        global $db;

        $userid = $_POST['user_id'];
        $placeid = $_POST['places_id'];

        $store="INSERT INTO `bucket_list`(`user_id`, `places_id`, `status`) VALUES ('$userid','$placeid',0)";
        $exec= $db->query($store);
       
        if ($exec) {
            echo 1;
        } else {
            echo 0;
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        foreach($placesTitle as $fileData){
            ?>
            <h1> <?php echo $fileData['title'] ?> </h1>
            <p> <?php echo $fileData['description']?> </p>

    <?php } ?>

    <?php 
        if(!empty($placeslistImages)){
            foreach($placeslistImages as $fileData){
                $allowFileExt = array('jpg','png','jpeg','mp4');

                $fileExt = pathinfo($fileData['filename_uploaded'], PATHINFO_EXTENSION); 
                $fileURL='uploads/'.$fileData['filename_uploaded'];
                if(in_array($fileExt, $allowFileExt)){ 
                
                    $imgURL='uploads/'.$fileData['filename_uploaded'];
                    if($fileExt == 'mp4'){
                        ?>
                    
                        <div class="images">
                            <video src="<?php echo $fileURL ?>" controls>
                                Your browser does not support the video tag.
                            </video>
                        </div>
            
                        
                    <?php
            
                    }
                    else{
                        ?>
                    
                        <div class="images">
                            <img src="<?php echo $fileURL ?>">
                        </div>
                    <?php
                    }
                }
            }
        }
    ?>
     <form method="post">
        <input type="hidden" name="places_id" value="<?php echo $id ?>">
        <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'] ?>">
        <?php 
            if($fileData['places_id'] === NULL){ ?>
                <input type="submit" name="submit" value="add to bucketlist">
        <?php } ?>
       
    </form>
</body>
</html>