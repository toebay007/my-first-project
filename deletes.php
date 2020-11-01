<?php


include "config.php";//using the database connection

$idss = $_GET['id']; //get id through string

$dels = $mysqli->query("DELETE `inquirys` from `inquirys` JOIN states on inquirys.states=states.id WHERE inquirys.ids ='$idss'"); //delete query

if($dels){
    mysqli_close($mysqli); //close connection
    header("location:admin.php");//redirect to the portal page after record is deleted

    exit;
}else{
    echo "Error Deleting record"; // display error message if not deleted
}
?>