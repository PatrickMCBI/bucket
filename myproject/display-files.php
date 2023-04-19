<?php
include('upload-script.php');

?>

<!DOCTYPE html>
<html>
<body>

<?php
if(!empty($fetchFiles)){
  
  foreach($fetchFiles as $fileData){
   
   $allowFileExt = array('jpg','png','jpeg','mp4');

    $fileExt = pathinfo($fileData['file_name'], PATHINFO_EXTENSION); 
    $fileURL='uploads/'.$fileData['file_name'];
    if(in_array($fileExt, $allowFileExt)){ 
    
        $imgURL='uploads/'.$fileData['file_name'];
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
       
 
    }else{
?>

        <div class="files">
            <p>Download Now</p>
            <a href='<?php echo $fileURL ?>'><?php echo $fileExt; ?></a>
        </div>
    
        <?php
        }
    }

 }

?>
<!--display files from databse-->
</body>
</html>