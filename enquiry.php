<?php 
// Include config file
require "config.php";

// Define variables and initialize with empty values
$fullname = $phonenumber = $emails = $states = $city = $addresses = "";
$fullname_err = $phonenumber_err = $emails_err = $addresses_err = "";
$congratulations = "";
 

if($_SERVER["REQUEST_METHOD"] == "POST"){

    //fullname
    if(empty($_POST["fullname"])){
        $fullname_err = "please enter your fullname";
    } else{
        $fullname = $_POST["fullname"];
    }
    //phonenumber
    if(empty($_POST["phonenumber"])){
        $phonenumber_err = "please enter your Phone Number";
    } else{
        $phonenumber = $_POST["phonenumber"];
    }
    //emails
    if(empty($_POST["emails"])){
        $emails_err = "please enter your email address";
    } else{
        $emails = $_POST["fullname"];
    }
    //states
    if(empty($_POST["states"])){
        $states_err = "please kindly pick states";
    } else{
        $states = $_POST["states"];
    }
    // city
    if(empty($_POST["city"])){
        $city_err = "please kindly pick a State";
    } else{
        $city = $_POST["city"];
    }
    // address
    if(empty($_POST["address"])){
        $addresses_err = "please kindly provide your address";
    } else{
        $addresses = $_POST["address"];
    }

    //form validations
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $fullname = test_input($_POST["fullname"]);
    $phonenumber = test_input($_POST["phonenumber"]);
    $emails = test_input($_POST["emails"]);
    $states = test_input($_POST["states"]);
    $city = test_input($_POST["city"]);
    $addresses = test_input($_POST["address"]);
        
    if(empty($fullname_err) && empty($phonenumber_err) && empty($states_err) && empty($city_err) && empty($addresses_err)){
        // Prepare an insert statement
        $sql = $mysqli->query("INSERT INTO `inquirys`( `fullname`, `phonenumber`, `emails`, `states`, `local_government`, `addresses`) VALUES ('$fullname', '$phonenumber', '$emails', '$states', '$city', '$addresses')");           
        $sqlss = $mysqli->query("INSERT INTO `inquiry_table`( `fullname`, `phonenumber`, `states`, `local_government`, `addresses`) VALUES ('$fullname', '$phonenumber', '$states', '$city', '$addresses')");
        if($sql && $sqlss){
            $congratulations = "<button class='alert alert-success' role='alert'> Submission well received <br> Thanks for your Interest, would get back to you shortly </button>";

            }
         }else{
                $congratulations = "<button class='alert alert-danger' role='alert'> Submission not received <br> Kindly, fill the forms properly</button>";
        }
         
        // Close statement
        
}
 $query = "SELECT * FROM states ORDER BY name ASC";
 $result = $mysqli->query($query);
?>
<?php require "headers.php" ?>
    <div class="row" id="rowEnquiry">
        
        <div class="col-md-12 col-sm-12 enquiry" id="privateUse">
            <h4 class="priv">If you would love STC30 products for yourself, Kindly <a href="order.php"> <button class="btn btn-primary"> click here </button> </a> 
            </h4>
        </div>

        <div class="col-md-12 col-sm-12 enquiry networkUse" id="networkUse">
            <h4 class="priv">If you would want to join the Network, Kindly <button class="btn btn-primary toggle-btn"> click here </button>
            </h4>
        </div>

        <div class="col-md-12 col-sm-12 enquiry" id="networkForm">

                <form class="form-control formsss" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" >

                    <span class="help-block" style="background-color: #00ff99; color: balck;"> <?php echo $congratulations; ?></span>

                        <div class="form-group <?php echo (!empty($fullname_err)) ? 'has-error' : ''; ?>">
                            <input type="text" class="form-control" name="fullname" id="name" placeholder="Full Name" value="<?php echo $fullname; ?>" required>
                            <span class="help-block"><?php echo $fullname_err; ?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($phonenumber_err)) ? 'has-error' : ''; ?>">
                            <input type="number" class="form-control" name="phonenumber" id="number" placeholder="Mobile Number" value="<?php echo $phonenumber; ?>" required>
                            <span class="help-block"><?php echo $phonenumber_err; ?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($emails_err)) ? 'has-error' : ''; ?>">
                            <input type="email" class="form-control" name="emails" id="email" placeholder="Email Address" value="<?php echo $emails; ?>" required>
                            <span class="help-block"><?php echo $emails_err; ?></span>
                        </div>

                        <div class="form-group">
                        <select id="state" name="states" class="form-control" required> State of Residence
                            <option  value="">--Select state--</option>
                            <?php 
                                if($result->num_rows > 0){
                                    while($row = $result->fetch_assoc()){
                                        echo '<option value="' .$row['id']. '">' .$row['name']. '</option>';
                                    }
                                }else{
                                    echo '<option value=""> state not available </option>';
                                }
                            ?>
                            <span class="help-block"><?php echo $states_err; ?></span>
                            </select>
                        </div>

                        <div class="form-group">
                                <select id="city" name="city" class="form-control" required> Local Government Area
                                    <option value="">--Select state first--</option>
                                    <span class="help-block"><?php echo $city_err; ?></span>
                                </select>
                        </div>
                        
                        <div class="form-group <?php echo (!empty($addresses_err)) ? 'has-error' : ''; ?>">
                            <textarea type="text" class="form-control" name="address" id="address" value="<?php echo $addresses; ?>" required placeholder="Home Address for delievry"></textarea>
                            <span class="help-block"><?php echo $addresses_err; ?></span>
                        </div>

                    <p style="text-align: center"> <button type="submit" class="btn btn-primary">Submit</button> </p>
                </form>
        </div>

        <div class="col-md-12 col-sm-12 enquiry">
            <h4 class="priv">for more information on STC30 products and its benefits, kindly <a href="https://superlifeworld.com/our-products/" id="official"> <button class="btn btn-primary"> click here </button> </a>
            </h4>
        </div>

        <div class="col-md-12 col-sm-12 enquiry">
            <h4 class="priv">If you want to talk to us, Kindly <a href="index.php#contact"> <button class="btn btn-primary"> click here </button> </a>
            </h4>
        </div>
    </div>
<?php require "footers.php" ?>