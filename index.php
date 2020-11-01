<?php require "headers.php" ?>
                <!--Welcome Font& image-->
                <div class="row rows">
                    <div class="col-md-12 col-sm-12 rowColor">
                        <h1 class="welcomeText">
                            Welcome To SuperLife Total Care 30
                        </h1>
                        <p id="welcomeText">
                            Proudly sold by Tolly Queen. Get your dose at your Doorstep, NationWide
                        </p>
                    </div>
                    <div class="col-md-1 col-sm-6 rowColor order"></div>
                    <div class="col-md-4 col-sm-6 rowColor order">
                         <p class="orders"> <button class="btn btn-light"> <a href="order.php" class="orderes"> <img src="icons/placeOrder.png" width="70px" height="70px" alt="orderIcon"> 
                            Kindly place your order </a> </button> 
                        </p>
                    </div>
                    <div class="col-md-2 col-sm-6 rowColor order"></div>
            
                    <div class="col-md-4 col-sm-6 rowColor order">
                        <p class="orders"> <button class="btn btn-light"> <a href="enquiry.php" class="orderes"> <img src="icons/question.png" width="70px" height="70px" alt="enquiryIcon"> 
                            For further enquiry </a> </button> </p>
                    </div>
                    <div class="col-md-1 col-sm-6 rowColor order"></div>
                </div>
                <!--end of fonts and images-->
                <!--Tesitomy Display-->
                <div class="row" id="testiRow">
                    <div class="col-md-10 offset-md-1 col-sm-10 offset-sm-1 testiMony">
                        <h2 id="testiHeader">
                            Testimonials
                        </h2>
                    </div>
                    <div class="col-md-4 col-sm-6 testiDiv">
                        <div class="col-10 offset-1 vids">
                        <?php require "config.php" ?>
                            <?php
                                $records = $mysqli->query("SELECT * FROM `testimonial` WHERE id=1"); // fetch data from database
                                while($data = $records->fetch_assoc())
                                {?>
                                    <iframe width="100%" height="250px" src="<?php echo $data['images']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <p>
                        <?php echo $data['testimony']; ?></p>
                    <?php   }  ?>  
                    <?php mysqli_close($mysqli);  // close connection ?>
                    </div>
                    <div class="col-md-4 col-sm-6 testiDiv">
                        <div class="col-10 offset-1 vids">
                            <?php require "config.php" ?>
                                <?php
                                    $records = $mysqli->query("SELECT * FROM `testimonial` WHERE id=2"); // fetch data from database
                                    while($data = $records->fetch_assoc())
                                {?>
                                <iframe width="100%" height="250px" src="<?php echo $data['images']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <p>
                            <?php echo $data['testimony']; ?>
                        </p>
                        <?php   }  ?>  
                        <?php mysqli_close($mysqli);  // close connection ?>
                    </div>
                    <div class="col-md-4 col-sm-6 testiDiv">
                    <div class="col-10 offset-1 vids">
                            <?php require "config.php" ?>
                                <?php
                                    $records = $mysqli->query("SELECT * FROM `testimonial` WHERE id=3"); // fetch data from database
                                    while($data = $records->fetch_assoc())
                                {?>
                                <iframe width="100%" height="250px" src="<?php echo $data['images']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <p>
                            <?php echo $data['testimony']; ?>
                        </p>
                        <?php   }  ?>  
                        <?php mysqli_close($mysqli);  // close connection ?>
                    </div>
                    
                </div>
                <!--End of Testimonies-->
                <!--videos from STC-->
                <div class="row">
                    <div class="col-md-10 offset-md-1 col-sm-10 offset-sm-1" id="stcVid">
                        <iframe width="100%" height="500px" src="https://www.youtube.com/embed/uMwxOpG2JE8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="utube"></iframe>
                    </div>
                </div>
                <!--End of videos-->
                <!--About the Product-->
                <div class="row tests" id="about">
                    <div class="col-md-10 offset-md-1 col-sm-10 offset-sm-1 testiMony">
                        <h2 id="testiHeader">
                            About The Product
                        </h2>
                    </div>
                </div>
                <div class="row aboutpic">
                    <div class="col-md-2 col-sm-10 vision"></div>
                        <div class="col-md-8 col-sm-10 vision">
                            <h4 class="visions">
                                VISION
                            </h4>
                                <p class="visionText">We Aim to Build a Holistic SuperLife Ecosystem Underpinned by Strong Spirit of Integrity and Kindredness, Striving for the Pursuit of Excellence in the Areas of Health and Wealth</p>
                            
                            <h4 class="visions">
                                MISSION
                            </h4>
                                <p class="visionText">
                                Our Mission is to To Improve the Health & Well-Being of Communities by Promoting Scientifically Tested Products While Leveraging a Digital Platform Which Empowers SuperLife Members to Attain Sustainable Wealth by Promoting the Products Globally
                                </p>
                        </div>
                    <div class="col-md-2 col-sm-10 vision"></div>
                </div>
            <div class="row">
                <div class="col-md-7 col-sm-6 featureImg">
                    <img src="images/stc30.png" alt="stc30" width="100%" height="500px">
                </div>
                 <div class="col-md-1 col-sm-1"></div>
                <div class="col-md-4 col-sm-5 featureN">
                    <h4 class="featureNews">
                        <p>                        
                        THE BENEFITS OF STC30
                        </p>
                            The STC30 is a new technology in the world of Stem Cell Therapy. STC30 is made of the following ingredients:
                            <br>• Blackcurrant Juice Powder
                            <br>• Bilberry Extract
                            <br>• Glisodin (Cantaloupe Extract)
                            <br>• PhytoCellTec Solar Vitis (Vitis Vinifera)
                            <br>• PhytoCellTec Malus Domestica (Uttwiler Spatlauber)</h4>
                </div>
                <div class="col-md-4 col-sm-5 featureN">
                    <h4 class="featureNews">
                        <p>
                                GLISODIN (CANTALOUPE EXTRACT)
                        </p>
                                Glisodin is a radical new form of antioxidant supplement. As an essential component of STC30, glisodin stimulates the body’s antioxidant defence system. It enhances the body’s production of its own natural antioxidants including Superoxide Dismutase (SOD, the most powerful antioxidant). Because of this, the body is well equipped to recover and from and combat stress.
                        <p>
                            <br>  OTHER CLINICALLY PROVEN BENEFITS OF GILSODIN INCLUDE:
                        </p>                    
                            • Prevention of DNA damage induced by oxidative stress
                            <br>  • Inhibition of photo-oxidative stress
                            <br>  • Dispersion of lactic acid thus preventing its accumulation during exercise
                    </h4>
                </div>
            <div class="col-md-1 col-sm-1">

            </div>
            <div class="col-md-7 col-sm-6 featureImg">
            <img src="images/0007.jpg" alt="stc30" width="100%" height="500px">
           
            </div>
                </div>
                <!--End-->
                <!--contact us-->
            <div class="row">
                <div class="col-md-10 offset-md-1 col-sm-10 offset-sm-1 testiMony" style="margin-top: 10px;">
                    <h2 id="testiHeader">
                        Contact us
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-sm-2 contact"></div>
                <div class="col-md-8 col-sm-12 contact" id="contact">
                    <h4>
                        For futher Enquiry,<br>
                        Kindly contact us on <br>
                        +234(0)8067702514 or +234(0)7088886135 <br>
                        Whatsapp us on <a href="https://api.whatsapp.com/send?phone=2348067702514"><img src="images/whatsapp.png" alt="whatsapp Link" width="30px" height="30px" ></a><br>
                        Follow us on <a href="https://www.instagram.com/stc30_tolly_queen/" id="insta"> <img src="images/insta.png" alt="instagram Link" width="30px" height="30px" ></a> <br>
                        Like our Page and comment on <a href="https://web.facebook.com/Superlife4Tollyqueen-105794801140475/" id="face"> <img src="images/fbs.png" alt="facebook Image" width="30px" height="30px"></a> <br>
                    </h4>
                </div>
                <div class="col-md-2 col-sm-2 contact"></div>
             </div>
                <!--End-->

<?php require "footers.php" ?>