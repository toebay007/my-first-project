<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: admin.php");
    exit;
}
?>
<?php require "headers.php" ?>

<div class="row boss">

    <div class="col-md-2 col-sm-10 portMenu">

        <div class="btnss" id="ordersPortal">
            <button type="button" class="btn btn-outline-primary btn-block">
               <p> Orders </p>
            </button>
        </div>
        <div class="btnss" id="enquiryPortal">
            <button type="button" class="btn btn-outline-primary btn-block">
               <p> Enquirys </p>
            </button>
        </div>
        <div class="btnss" id="testiPortal">
            <button type="button" class="btn btn-outline-primary btn-block">
               <p> Testimonials </p>
            </button>
        </div>
        <div class="btnss" id="orderCustomers">
            <button type="button" class="btn btn-outline-primary btn-block">
               <p> Customers for Orders </p>
            </button>
        </div>
        <div class="btnss" id="enquiryCustomers">
            <button type="button" class="btn btn-outline-primary btn-block">
               <p> Customers for enquiry </p>
            </button>
        </div>
        <div class="btnss" id="enquiryCustomers">
            <button type="button" class="btn btn-outline-primary btn-block">
            <a href="logout.php"class="btnss">Sign Out of Your Account</a>
            </button>
        </div>
        <div class="btnss" id="enquiryCustomers">
            <button type="button" class="btn btn-outline-primary btn-block">
            <a href="regform.php" class="btnss">Sign up now for new Admin</a>
            </button>
        </div>
        
    </div>

    <div class="col-md-10 col-sm-10 portDetails">
        <div class="col-md-10 offset-md-1 col-sm-10 offset-sm-1 tablesPor" id="orderTable">
            <div class="col-md-10 offset-md-1 col-sm-10 offset-sm-1 testiMony">
                    <h2 class="testiHeader">
                        Customer Order
                    </h2>
                </div>
                
            <?php require "config.php" ?>
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>
                            Name
                        </th>
                        <th>
                            Phone Number
                        </th>
                        <th>
                            Email Address
                        </th>
                        <th>
                            State of Residence
                        </th>
                        <th>
                            LGA
                        </th>
                        <th>
                            Orders
                        </th>
                        <th>
                            Address
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                        $records = $mysqli->query("SELECT * FROM `orderss` JOIN states ON orderss.states=states.id");//fetch data from database

                        while($data = $records->fetch_assoc()){
                        
                    ?>
                    <tr>
                        <td>
                            <?php echo $data['fullname'] ?>
                        </td>

                        <td>
                            <?php echo $data['phonenumber'] ?>
                        </td>

                        <td>
                            <?php echo $data['emails'] ?>
                        </td>

                        <td>
                            <?php echo $data['name'] ?>
                        </td>

                        <td>
                            <?php echo $data['local_governments'] ?>
                        </td>

                        <td>
                             <?php echo $data['request'] ?>
                        </td>

                        <td>
                            <?php echo $data['addresses'] ?>
                        </td>

                        <td>
                            <button class="btn btn-danger"> <a href="delete.php?id=<?php echo $data['ids']; ?>" style="color: white;"> Delivered </a> </button>
                        </td>
                    </tr>
                    <?php 
                        }
                    ?>
                </tbody>
            </table>
        <?php mysqli_close($mysqli) ?>  
        </div>

        <div class="col-md-10 offset-md-1 col-sm-10 offset-sm-1 tablesPor" id="enquiryTable">
                 <div class="col-md-10 offset-md-1 col-sm-10 offset-sm-1 testiMony">
                    <h2 class="testiHeader">
                        Customers making Inquiry
                    </h2>
                </div>
        <?php require "config.php" ?>
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>
                            Name
                        </th>
                        <th>
                            Phone Number
                        </th>
                        <th>
                            Email Address
                        </th>
                        <th>
                            State of Residence
                        </th>
                        <th>
                            LGA
                        </th>
                        <th>
                            Address
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                        $recordss = $mysqli->query("SELECT * FROM `inquirys` JOIN states ON inquirys.states=states.id");//fetch data from database

                        while($data = $recordss->fetch_assoc()){
                        
                    ?>
                    <tr>
                        <td>
                            <?php echo $data['fullname'] ?>
                        </td>
                        <td>
                            <?php echo $data['phonenumber'] ?>
                        </td>
                        <td>
                            <?php echo $data['emails'] ?>
                        </td>
                        <td>
                            <?php echo $data['name'] ?>
                        </td>
                        <td>
                            <?php echo $data['local_government'] ?>
                        </td>
                        <td>
                            <?php echo $data['addresses'] ?>
                        </td>
                        <td>
                            <button class="btn btn-danger"> <a href="deletes.php?id=<?php echo $data['ids']; ?>" style="color: white;"> Contacted </a> </button>
                        </td>
                    </tr>
                    <?php 
                        }
                    ?>
                </tbody>
            </table>
         <?php mysqli_close($mysqli) ?>
        </div>

        <div class="col-md-10 offset-md-1 col-sm-10 offset-sm-1 tablesPor" id="testimoinials">

             <div class="col-md-10 offset-md-1 col-sm-10 offset-sm-1 testiMony">
                    <h2 class="testiHeader">
                        Testimony display and Text
                    </h2>
                </div>
            
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                        <tr>
                            <th>
                                S/N
                            </th>
                            <th>
                                Youtube Video Link
                            </th>
                            <th>
                                Testimony
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <form method="POST" action="tesiImg.php" enctype="multipart/form-data">
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                <textarea type="name" name="imagess" placeholder="Kindly edit and make the width='100%' and Height='250px'"></textarea>
                            </td>
                            <td> 
                                <textarea type="text" name="testimony" placeholder="Customer Testimony"></textarea>
                            </td>
                            <td>
                                <button class="btn btn-primary" type="submit" name="submit"> Upload </button>
                            </td>
                        </tr>
                    </form>
                    <form method="POST" action="tesiImg.php" enctype="multipart/form-data">
                        <tr>
                            <td>
                                2
                            </td>
                            <td>
                                <textarea type="name" name="imagess" placeholder="Kindly edit and make the width='100%' and Height='250px'"></textarea>
                            </td>
                            <td>
                                <textarea type="text" name="testimony" placeholder="Customer Testimony"></textarea>
                            </td>
                            <td>
                                <button class="btn btn-primary" type="submit" name="submits"> Upload </button>
                            </td>
                        </tr>
                    </form>
                    <form method="POST" action="tesiImg.php" enctype="multipart/form-data">
                        <tr>
                            <td>
                                3
                            </td>
                            <td>
                                <textarea type="name" name="imagess" placeholder="Kindly edit and make the width='100%' and Height='250px'"></textarea>
                            </td>
                            <td>
                                 <textarea type="text" name="testimony" placeholder="Customer Testimony"></textarea>
                            </td>
                            <td>
                                <button class="btn btn-primary" type="submit" name="submitss"> Upload </button>
                            </td>
                        </tr>
                    </form>
                    </tbody>
                </table>
                <div>
                    <h3 class="testiHeader">How to Upload videos from Youtube</h3>
                    <ol class="testiHeader">
                        <li>Open the Video you wish to upload on youtube.</li>
                        <li>Click on the share button, you'll see Embed with (< >).</li>
                        <li>After clicking on the embed, you'll see < iframe width="" height="" src="****" ...></ iframe >. </li>
                        <li>Copy the src="<b>***********</b>" Only</li>
                        <li>It should look like "https://www.youtube.com/embed/******".</li>
                        <li>Then you paste it in the space provided for Youtube Videos.</li>
                        <li>Ensure your Testimony Write up doesn't have any grammatical error.</li>
                        <li>Then upload it.</li>
                    </ol>
                </div>
        </div>

        <div class="col-md-10 offset-md-1 col-sm-10 offset-sm-1 tablesPor" id="customerTable">
                <div class="col-md-10 offset-md-1 col-sm-10 offset-sm-1 testiMony">
                    <h2 class="testiHeader">
                        Customer Database
                    </h2>
                </div>
                <?php require "config.php" ?>
             <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>
                            S/N
                        </th>
                        <th>
                            Full Name
                        </th>
                        <th>
                            Phone Number
                        </th>
                        <th>
                            State
                        </th>
                        <th>
                            LGA
                        </th>
                        <th>
                            Address
                        </th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                        $recordss = $mysqli->query("SELECT * FROM `customer_Order` JOIN states ON customer_Order.states=states.id");//fetch data from database

                        while($data = $recordss->fetch_assoc()){
                        
                    ?>
                    <tr>
                        <td>
                        <?php echo $data['ids'] ?>
                        </td>
                        <td>
                            <?php echo $data['fullname'] ?>
                        </td>
                        <td>
                            <?php echo $data['phonenumber'] ?>
                        </td>
                        <td>
                            <?php echo $data['name'] ?>
                        </td>
                        <td>
                            <?php echo $data['local_government'] ?>
                        </td>
                        <td>
                            <?php echo $data['addresses'] ?>
                        </td>
                    </tr>
                    <?php 
                        }
                    ?>
                </tbody>
            </table>
         <?php mysqli_close($mysqli) ?>
        </div>

        <div class="col-md-10 offset-md-1 col-sm-10 offset-sm-1 tablesPor" id="enquiryTableCus">
                 <div class="col-md-10 offset-md-1 col-sm-10 offset-sm-1 testiMony">
                    <h2 class="testiHeader">
                        Customer Enquiry Database
                    </h2>
                </div>
            <?php require "config.php" ?>
             <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                        <tr>
                            <th>
                                S/N
                            </th>
                            <th>
                                Full Name
                            </th>
                            <th>
                                Phone Number
                            </th>
                            <th>
                                State
                            </th>
                            <th>
                                LGA
                            </th>
                            <th>
                                Address
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $recordss = $mysqli->query("SELECT * FROM `inquiry_table` JOIN states ON inquiry_table.states=states.id");//fetch data from database

                        while($data = $recordss->fetch_assoc()){
                        
                    ?>
                        <tr>
                            <td>
                            <?php echo $data['ids'] ?>
                            </td>
                            <td>
                            <?php echo $data['fullname'] ?>
                        </td>
                        <td>
                            <?php echo $data['phonenumber'] ?>
                        </td>
                        <td>
                            <?php echo $data['name'] ?>
                        </td>
                        <td>
                            <?php echo $data['local_government'] ?>
                        </td>
                        <td>
                            <?php echo $data['addresses'] ?>
                        </td>
                        </tr>
                        <?php 
                        }
                    ?>
                    </tbody>
                </table>
         <?php mysqli_close($mysqli) ?>
        </div>
    </div>
</div>
<?php require "footers.php" ?>