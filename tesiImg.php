<?php require "config.php"; ?>

<?php

if(isset($_POST["submit"])){ //&& !empty($_FILES["imagess"]["name"])){
    // Allow certain file formats
    //$allowTypes = array('jpg','png','jpeg','gif','pdf','JPG','mp3','mp4','avi','3gp','mov','mpeg','mkv');
        // Upload file to server
            function test_input($data) {
                            $data = trim($data);
                            $data = stripslashes($data);
                            $data = htmlspecialchars($data);
                            return $data;
                        }
                        $imagesss = $_POST["imagess"];
                        $testimonys = test_input($_POST["testimony"]);
            // Insert image file name into database
   $record = $mysqli->query("UPDATE `testimonial` SET `images`=('$imagesss'), `testimony`=('$testimonys') WHERE id = 1");  // executing insert query
    
    if($record)
    {       
        echo '<script type="text/javascript"> alert("Data Inserted Seccessfully!"); </script>';  // alert message
    }
    else
    {
    	echo '<script type="text/javascript"> alert("Error Uploading Data!"); </script>';  // when error occur
    }
    header("location: admin.php");
}
//New Upload code

$statusMsg = '';


if(isset($_POST["submits"])){ //&& !empty($_FILES["imagess"]["name"])){
    // Allow certain file formats
    //$allowTypes = array('jpg','png','jpeg','gif','pdf','JPG','mp3','mp4','avi','3gp','mov','mpeg','mkv');
        // Upload file to server
            function test_input($data) {
                            $data = trim($data);
                            $data = stripslashes($data);
                            $data = htmlspecialchars($data);
                            return $data;
                        }
                        $imagesss = $_POST["imagess"];
                        $testimonys = test_input($_POST["testimony"]);
            // Insert image file name into database
            $insert = $mysqli->query("UPDATE `testimonial` SET `images`=('$imagesss'), `testimony`=('$testimonys') WHERE id = 2");
            if($insert){
                $statusMsg = "The file has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
    header ("location: admin.php");



    if(isset($_POST["submitss"])){ //&& !empty($_FILES["imagess"]["name"])){
        // Allow certain file formats
        //$allowTypes = array('jpg','png','jpeg','gif','pdf','JPG','mp3','mp4','avi','3gp','mov','mpeg','mkv');
            // Upload file to server
                function test_input($data) {
                                $data = trim($data);
                                $data = stripslashes($data);
                                $data = htmlspecialchars($data);
                                return $data;
                            }
                            $imagesss = $_POST["imagess"];
                            $testimonys = test_input($_POST["testimony"]);
   $record = $mysqli->query("UPDATE `testimonial` SET `images`=('$imagesss'), `testimony`=('$testimonys') WHERE id = 3");  // executing insert query
    
    if($record)
    {       
        echo '<script type="text/javascript"> alert("Data Inserted Seccessfully!"); </script>';  // alert message
    }
    else
    {
    	echo '<script type="text/javascript"> alert("Error Uploading Data!"); </script>';  // when error occur
    }
    header("location: admin.php");
}

// if(isset($_POST["submitsss"]))
// {
//     $var1 = rand(1111,9999);  // generate random number in $var1 variable
//     $var2 = rand(1111,9999);  // generate random number in $var2 variable
	
//     $var3 = $var1.$var2;  // concatenate $var1 and $var2 in $var3
//     $var3 = md5($var3);   // convert $var3 using md5 function and generate 32 characters hex number

//     $fnm = $_FILES["imagess"]["name"];    // get the image name in $fnm variable
//     $dst = "all_images/".$var3.$fnm;  // storing image path into the {all_images} folder with 32 characters hex number and file name
//     $dst_db = "all_images/".$var3.$fnm; // storing image path into the database with 32 characters hex number and file name
     
//     move_uploaded_file($_FILES["imagess"]["tmp_name"],$dst);  // move image into the {all_images} folder with 32 characters hex number and image name
// 	//form validations
//         function test_input($data) {
//             $data = trim($data);
//             $data = stripslashes($data);
//             $data = htmlspecialchars($data);
//             return $data;
//         }
//         $testimonys = test_input($_POST["testimony"]);
//    $record = $mysqli->query("UPDATE `testimonial` SET `images`=('$dst_db'), `testimony`=('$testimonys') WHERE id = 6");  // executing insert query
    
//     if($record)
//     {       
//         echo '<script type="text/javascript"> alert("Data Inserted Seccessfully!"); </script>';  // alert message
//     }
//     else
//     {
//     	echo '<script type="text/javascript"> alert("Error Uploading Data!"); </script>';  // when error occur
//     }
//     header("location: portal.php");
// }
// ?>