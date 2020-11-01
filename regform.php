<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = $firstname = $surname = $email = $date = "";
$username_err = $password_err = $confirm_password_err = $firstname_err = $surname_err = $email_err = $date_err = "";
 
 //form validations
 function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(test_input($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM admins WHERE username = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);
            
            // Set parameters
            $param_username = test_input($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = test_input($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        $stmt->close();
    }
    
    // Validate password
    if(empty(test_input($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(test_input($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = test_input($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(test_input($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = test_input($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    $firstname = test_input($_POST["firstname"]);
    $surname = test_input($_POST["surname"]);
    $email = test_input($_POST["email"]);
    $date = test_input($_POST["date"]);
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO admins (username, password, firstname, surname, email, dob) VALUES (?, ?, ?, ?, ?, ?)";
         
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ssssss", $param_username, $param_password, $param_firstname, $param_surname, $param_email, $param_date);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_firstname = $firstname;
            $param_surname = $surname;
            $param_email = $email;
            $param_date = $date;
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: admin.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        
    }
    
    // Close connection
    $mysqli->close();
}
?>
 
<?php require "headers.php" ?>
    <div class="row">
        <div class="col-md-2 col-sm-1"></div>
        <div class="col-md-8 co1-sm-10">
            <h2>Sign Up</h2>
            <p>Please fill this form to create an account.</p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                    <span class="help-block"><?php echo $username_err; ?></span>
                </div>    
                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                    <span class="help-block"><?php echo $password_err; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                    <span class="help-block"><?php echo $confirm_password_err; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($firstname_err)) ? 'has-error' : ''; ?>">
                    <label>Firstname</label>
                    <input type="text" name="firstname" class="form-control" value="<?php echo $firstname;  ?>"> 
                    <span class="help-block"><?php echo $firstname_err; ?></span>               
                </div>
                <div class="form-group <?php echo (!empty($surname_err)) ? 'has-error' : ''; ?>"> 
                    <label>Surname</label>
                    <input type="text" name="surname" class="form-control" value="<?php echo $surname; ?>"> 
                    <span class="help-block"><?php echo $surname_err; ?></span>                 
                </div>
                <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                    <label>Email Address</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $email; ?>"> 
                    <span class="help-block"><?php echo $email_err; ?></span>                              
                </div>
                <div class="form-group <?php echo (!empty($date_err)) ? 'has-error' : ''; ?>">
                    <label>Date of Birth</label>
                    <input type="date" name="date" class="form-control" value="<?php echo $date; ?>"> 
                    <span class="help-block"><?php echo $date_err; ?></span>                 
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <input type="reset" class="btn btn-default" value="Reset">
                </div>
                <p>Already have an account? <a href="admin.php">Login here</a>.</p>
            </form>
        </div>
        <div class="col-md-2 col-sm-1"></div>
    </div>    
<?php require "footers.php" ?>