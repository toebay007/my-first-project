<?php 

    include "config.php";//using the database connection

    $id = $_GET['id']; //get id through string

    $del = $mysqli->query("DELETE `orderss` from `orderss` JOIN states on orderss.states=states.id WHERE orderss.ids = '$id'"); //delete query

    if($del){
        mysqli_close($mysqli); //close connection
        header("location:admin.php");//redirect to the portal page after record is deleted

        exit;
    }else{
        echo "Error Deleting record"; // display error message if not deleted
    }
?>