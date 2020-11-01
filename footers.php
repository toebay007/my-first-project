  <!--START OF FOOTER-->
                <div class="row">
                    <div class="col-md-1 col-sm-12 footer"></div>
                     <div class="col-md-10 col-sm-12 footer">
                        &copy;TOG developers 2020. 
                            <span> This website is strictly for sales, networking and distribution of STC30 products by Trolly Ventures</span>
                     </div>
                     <div class="col-md-1 col-sm-12 footer"></div>
                </div>
            </div>
            <script src='js/jquery.js' type='text/javascript' ></script>
            <script src='js/popper.min.js' type='text/javascript' ></script>
            <script src='js/bootstrap.min.js'  type='text/javascript'></script>
            <script type="text/javascript" src="style.js"></script>
            <script>
                $(document).ready(function(){
                $('#state').on('change',function(){
                    var countryID = $(this).val();
                        if(countryID){
                            $.ajax({
                                type: 'POST',
                                url: 'ajaxData.php',
                                data: 'id='+countryID,
                                success: function(html){
                                    $('#city').html(html);
                                }
                            });
                        }else{
                            $('#city').html('<option value=""> Select State First</option>');
                        }
                });

                });
        </script>
        </body> 
    </html>