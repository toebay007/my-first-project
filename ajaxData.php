<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php 
    //include the database config file;
    include_once 'config.php';

    if(!empty($_POST['id'])){
        //fetch local government data based on the specific state
        $query = "SELECT * FROM local_governments where state_id = ". $_POST['id'] ." ORDER BY names ASC";
        $result = $mysqli->query($query);

        //generate HTML of state options list
        if($result->num_rows > 0){
            echo '<option value="">Select city</option>';
                while($row = $result->fetch_assoc()){
                    echo '<option value="'.$row['names'].'">'.$row['names'].'</option>';
                }
        }else{
            echo '<option value="">LGA not available</option>';
        }
    }
?>