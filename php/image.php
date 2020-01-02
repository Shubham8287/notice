
<?php

require("connect.php");

// Check if image file is a actual image or fake image
if(isset($_POST["imagesubmit"])) {
    $target_dir = "uploads/";
$target= $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target,PATHINFO_EXTENSION));
    $check=true;
    if($check !== false) {
          if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }


    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }


    $title=$_POST["title"];
    $time=$_POST["time"];
    $cmd="SELECT * FROM uploads where name ='".$target."' ";
$result= mysqli_query($connection,$cmd);
if(mysqli_num_rows($result)==0){
    $query = "INSERT INTO `uploads` (title,name,time) VALUES('$title','$target','$time')";
     mysqli_query($connection,$query) ;
}else
{ echo (  "<script> alert(' Image with this name already exist') </script>") ;
 }

}
?>
