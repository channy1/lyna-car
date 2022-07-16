            <!-- Footer
            ============================================= -->
            <footer id="footer" class="dark" style="color: #a4509f !important;">

                <div class="container">

                    <!-- Footer Widgets
                    ============================================= -->
                   
                    <div style="color: #a4509f !important;" class="footer-widgets-wrap clearfix">
                        <div class="col_one_fourth">
                            <div class="widget clearfix">
                                <h4 style="background-color: #a4509f !important; color: white; padding-left: 5px;">
                                Upcoming Events</h4>
                                
                                <div>
                                <?php  
                                    // include_once("./menu_authentication.php"); 
                                    // require_once("./system/config/database.php");
                                    // require_once("./system/config/athonication.php");
                                    $v_sql = "SELECT * FROM  tbl_ft_upcoming";
                                    $result = $connect->query($v_sql);
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()){
                                            echo "<div class='spost clearfix'>";
                                            echo "<div class='entry-c'>";
                                            echo "<div class='entry-title'>";
                                            echo "<h4><a href='event/524/Networking-Event-to-Celebrate-the-Launch-of-Benelux-Chapter-.html' style='color: #a4509f !important;'>".$row["ft_title"]."</a></h4>";
                                            echo "</div><ul class='entry-meta'></ul></div></div>";
                                        }
                                    }
                                    else { 
                                    }
                                ?>
                                    <!-- <div class="spost clearfix">
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="event/524/Networking-Event-to-Celebrate-the-Launch-of-Benelux-Chapter-.html" style="color: #a4509f !important;">Networking Event to Celebrate the Launch of Benelux Chapter </a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                           
                                            </ul>
                                        </div>
                                        </div> -->
                                        <!-- <div class="spost clearfix">
                                            <div class="entry-c">
                                                <div class="entry-title">
                                                    <h4><a href="event/526/Breakfast-Talk-on-Managerial-Delegation.html" style="color: #a4509f !important;">Breakfast Talk on Managerial Delegation</a></h4>
                                                </div>
                                                <ul class="entry-meta">
                                                   
                                                </ul>
                                            </div>
                                        </div> -->
                                        <!-- <div class="spost clearfix">
                                            <div class="entry-c">
                                                <div class="entry-title">
                                                    <h4><a href="event/518/ISO-450012018-Lead-Auditor-Course-.html" style="color: #a4509f !important;">ISO 45001:2018 Lead Auditor Course </a></h4>
                                                </div>
                                                <ul class="entry-meta">
                                                    <li style="color: #a4509f !important;">19 December, 2018 - Member Event</li>
                                                </ul>
                                            </div>
                                        </div> -->
                                </div>
                            </div>

                        </div>

                        <div class="col_one_fourth">

                            <div class="widget clearfix">
                            <h4 style="background-color: #a4509f !important; color: white; padding-left: 5px;">
                                Latest News</h4>
                                <div>
                                <?php  
                                    $v_sql = "SELECT * FROM tbl_ft_latest_news";
                                    $result = $connect->query($v_sql);
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()){
                                            echo "<div class='spost clearfix'>";
                                            echo "<div class='entry-c'>";
                                            echo "<div class='entry-title'>";
                                            echo "<h4><a href='event/524/Networking-Event-to-Celebrate-the-Launch-of-Benelux-Chapter-.html' style='color: #a4509f !important;'>".$row["ft_title"]."</a></h4>";
                                            echo "</div><ul class='entry-meta'></ul></div></div>";
                                        }
                                    }
                                    else { 
                                    }
                                ?>
                                    <!-- <div class="spost clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4 style="color: #a4509f !important;"><a style="color: #a4509f !important;" href="#">Event Recap: Breakfast Talk on Laos Business Opportunities</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li style="color: #a4509f !important;">06 December, 2019</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="spost clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4 style="color: #a4509f !important;"><a style="color: #a4509f !important;" href="#">LCRC, chambers and other business associations sign an MoU with the Cambodia Chamber of Commerce.</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li style="color: #a4509f !important;">26 November, 2019</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="spost clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4 style="color: #a4509f !important;"><a style="color: #a4509f !important;" href="#">LCRC joins a meeting with The Ministry of Labour and Vocational Training on Seniority Prakas</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li style="color: #a4509f !important;">26 November, 2019</li>
                                        </ul>
                                    </div>
                                </div>   -->
                                </div>
                            </div>

                        </div>

                        <div class="col_one_fourth">

                            <div class="widget clearfix">
                            <h4 style="background-color: #a4509f !important; color: white; padding-left: 5px;">
                            Job Announcements</h4>
                                <div>
                                <?php  
                                    $v_sql = "SELECT * FROM tbl_ft_job_announ";
                                    $result = $connect->query($v_sql);
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()){
                                            echo "<div class='spost clearfix'>";
                                            echo "<div class='entry-c'>";
                                            echo "<div class='entry-title'>";
                                            echo "<h4><a href='event/524/Networking-Event-to-Celebrate-the-Launch-of-Benelux-Chapter-.html' style='color: #a4509f !important;'>".$row["ft_title"]."</a></h4>";
                                            echo "</div><ul class='entry-meta'></ul></div></div>";
                                        }
                                    }
                                    else { 
                                    }
                                ?>
                                    <!-- <div class="spost clearfix">
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="job/247/Assistant-Operations-Manager-Medical-Services.html" style="color: #a4509f !important;">Assistant Operations Manager, Medical Services</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li style="color: #a4509f !important;">Posted by: INTERNATIONAL SOS CAMBODIA</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="spost clearfix">
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4 style="color: #a4509f !important;"><a href="job/246/Business-Development-Manager.html" style="color: #a4509f !important;">
                                                Business Development Manager</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li style="color: #a4509f !important;">Posted by: INTERNATIONAL SOS CAMBODIA</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="spost clearfix">
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="job/248/Business-Development-Manager.html" style="color: #a4509f !important;">
                                                Business Development Manager</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li style="color: #a4509f !important;">Posted by: Archetype Cambodia Ltd</li>
                                            </ul>
                                        </div>
                                    </div> -->
                                </div>
                            </div>

                        </div>



                        <div class="col_one_fourth col_last">

                            <div class="widget subscribe-widget clearfix">
                                <h5 style="color: #a4509f !important;"><strong>Subscribe</strong> to our newsletter to get the latest news and upcoming event notifications...</h5>
                                <div id="widget-subscribe-form-result" data-notify-type="success" data-notify-msg=""></div>
                                <form id="widget-subscribe-form" action="http://www.eurocham-cambodia.org/main/ajax/newsletter_subscribe" role="form" method="post" class="nobottommargin">
                                    <div class="col_half">
                                        <input id="newsletter-firstname" name="newsletter-firstname" class="form-control required" placeholder="First Name">
                                    </div>
                                    <div class="col_half col_last">
                                        <input id="newsletter-lastname" name="newsletter-lastname" class="form-control required" placeholder="Last Name">
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col_full" style="margin-top: 10px;">
                                        <div class="input-group divcenter">
                                            <span class="input-group-addon" style="display: none;"><i class="icon-email2"></i></span>
                                            <input type="email" id="newsletter-email" name="newsletter-email" class="form-control required email" placeholder="Enter your Email">
                                            <span class="input-group-btn">
                                                <button class="btn btn-success" style="background-color: #a4509f; border-color: #283991;" type="submit">Subscribe</button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                                <script type="text/javascript">
                                    $("#widget-subscribe-form").validate({
                                        submitHandler: function(form) {
                                            $(form).find('.input-group-addon').show().find('.icon-email2').removeClass('icon-email2').addClass('icon-line-loader icon-spin');
                                            $(form).ajaxSubmit({
                                                target: '#widget-subscribe-form-result',
                                                success: function() {
                                                    $(form).find('.input-group-addon').hide();
                                                    $('#widget-subscribe-form').find('.form-control').val('');
                                                    $('#widget-subscribe-form-result').attr('data-notify-msg', $('#widget-subscribe-form-result').html()).html('');
                                                    SEMICOLON.widget.notifications($('#widget-subscribe-form-result'));
                                                }
                                            });
                                        }
                                    });
                                </script>
                            </div>


                            <div class="widget clearfix hidden-sm hidden-xs" style="margin-bottom: -20px; margin-top: 30px;">

                                    <h4 style="color: #a4509f !important;">FOUNDING CHAMBERS</h4>

                                <!-- <div class="col_one_third">
                                    <a href="http://www.ccfcambodge.org/" target="_blank"><img src="images/ccfc_logo.png" alt="" class="footer-logo"></a>
                                </div>

                                <div class="col_one_third">
                                    <a href="http://www.adw-cambodia.org/" target="_blank"><img src="images/adw_logo.png" alt="" class="footer-logo"></a>
                                </div>

                                <div class="col_one_third col_last">
                                    <a href="http://britchamcambodia.org/" target="_blank"><img src="images/britcham_logo.png" alt="" class="footer-logo"></a>
                                </div>

                                <div class="col_one_third">
                                    <a href="https://www.facebook.com/ICBA17/" target="_blank"><img src="images/icba_logo.png" alt="" class="footer-logo"></a>
                                </div>

                                <div class="col_one_third">
                                    <img src="images/nord_logo.png" alt="" class="footer-logo"></a>
                                </div> -->

                            </div>



                        </div>

                    </div><!-- .footer-widgets-wrap end -->

                </div>

                <!-- Copyrights
                ============================================= -->
            <div id="copyrights">
                <div class="container clearfix">
                    <div class="col_half">
                        <!-- mobile social icons -->
                        <div class="visible-xs clearfix">
                            <p>
                                <a href="http://www.facebook.com/EuropeanChamberOfCommerceInCambodia" target='_blank' class="social-icon si-small si-colored si-facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>

                                <a href="https://twitter.com/eurochamcam" target='_blank' class="social-icon si-small si-colored si-twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>

                                <a href="https://plus.google.com/118344152212669499677/about" target='_blank' class="social-icon si-small si-colored si-gplus">
                                    <i class="icon-gplus"></i>
                                    <i class="icon-gplus"></i>
                                </a>

                                <a href="https://www.linkedin.com/company/3671634" target='_blank' class="social-icon si-small si-colored si-linkedin">
                                    <i class="icon-linkedin"></i>
                                    <i class="icon-linkedin"></i>
                                </a>
                            </p>
                        </div>
                        <?php  
                            $v_sql = "SELECT * FROM tbl_footer_text WHERE ft_id = 2 ";
                            $result = $connect->query($v_sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                                    echo $row["ft_text"];
                                }
                            }
                            else { 
                            }
                        ?>
                        <!-- Copyright &copy; 2001 - 2019 All Rights Reserved by Lyna-CarRental.Com<br> -->
                        
                        <div class="copyright-links">
                        <?php  
                            $v_sql = "SELECT * FROM tbl_menu_footer";
                            $result = $connect->query($v_sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                                    echo "<a style='color: #a4509f !important;' href='statutes.html'>".$row["ft_title"]."</a> /";
                                }
                            }
                            else {
                            }
                        ?>
                        <!-- <a style="color: #a4509f !important;" href="statutes.html">Statutes</a> /
                        <a style="color: #a4509f !important;" href="terms_of_use.html">Terms of Use</a> /
                        <a style="color: #a4509f !important;" href="privacy_policy.html">Privacy Policy</a> /
                        <a style="color: #a4509f !important;" href="contact.html">Contact</a> /
                        <a style="color: #a4509f !important;" href="members/sponsorship_advertising.html">Sponsorship</a> /
                        <a style="color: #a4509f !important;" href="sitemap.html">Sitemap</a> -->
                        </div>
                    </div>

                    <div class="col_half col_last tright">
                        <div class="fright clearfix">
                        <?php
                            $v_sql = "SELECT * FROM tbl_ft_img_foooter";
                            $result = $connect->query($v_sql);
                            if ($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    $str = str_replace("fa fa-","si-",$row["ft_detail"]);
                                    echo "<a href='".$row["ft_title"]."' target='_blank' class='si-small social-icon  si-colored ".$str." '  >";
                                    echo "<i class='".$row["ft_detail"]." fa-2x'></i>";
                                    echo "<i class='".$row["ft_detail"]." fa-2x'></i></a>";
                                }
                            }
                            else {
                            }
                        ?>

                        <!-- <a href="https://twitter.com/LCarrental" target='_blank' class="social-icon si-small si-colored si-twitter">
                            <i class="fa fa-facebook"></i>
                            <i class="icon-twitter"></i>
                        </a> -->

                        <!--<a href="https://plus.google.com/" target='_blank' class="social-icon si-small si-colored si-gplus">
                            <i class="icon-gplus"></i>
                            <i class="icon-gplus"></i>
                        </a>

                            <a href="https://www.linkedin.com/in/lyna-carrental-a37410138/" target='_blank' class="social-icon si-small si-colored si-linkedin">
                                <i class="icon-linkedin"></i>
                                <i class="icon-linkedin"></i>
                            </a> -->
                        </div>

                        <div class="clear"></div>
                        <?php  
                                $v_sql = "SELECT * FROM   tbl_footer_text WHERE ft_id=1";
                                $result = $connect->query($v_sql);
                                if ($result->num_rows > 0) {
                                    while($row = $result ->fetch_assoc()){
                                        echo $row["ft_text"];
                                        }
                                }
                                else { 
                                }
                        ?>
                        
                        <!-- info@Lyna-CarRental.Com <span class="middot">&middot;</span>  -->
                        <i class="icon-headphones"></i>&nbsp;
                        <!-- <b>+855 012 55 42 47</b>  <br>
                        &nbsp;&nbsp;<b>+855 012 924 517</b>  <br>
                        &nbsp;&nbsp;<b>+855 092 14 30 14  -->
                        <?php  
                                $v_sql = "SELECT * FROM  tbl_ft_phone";
                                $result = $connect->query($v_sql);
                                if ($result->num_rows > 0) {
                                    while($row = $result ->fetch_assoc()){
                                        echo "<b>".$row["ft_detail"]."</b>  <br>
                                        &nbsp;&nbsp;";
                                        }
                                }
                                else { 
                                }
                            ?>

                    </div>
                        </b>

                    </div>

                </div>

            </div><!-- #copyrights end -->

            </footer><!-- #footer end -->
            <!-- #wrapper end -->
                <!-- Go To Top
        ============================================= -->
        <div id="gotoTop" class="icon-angle-up"></div>
        <style>
            #scrollToTop {
            padding-top: 7px;
            padding-right: 10px;
            padding-left: 9px;
            padding-bottom: 10px;
            width: 40px;
            border-radius: 50px;
            cursor: pointer;
            display: none;
            height: 40px;
            margin: 5px;
            position: fixed;
            transition: .5s;
            right: 14px;
            bottom: 8px;
            color: white;
            z-index: 10000;
            text-align: center;
            overflow: hidden;
            background-color:#a4509f;    
            }
            #menu-down {
                    width: 100%;
                    height: 50px;
                    background-color: white;
            }
        </style>
        <!-- <div id="menu-downs" class="menu-fixed-top">
            <div style=" margin-bottom: -15px;">
                <ul class="main-menu" id="main-menus">
                    <li><a href="./index.php">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">SERVICES</a></li>
                    <li><a href="#">CAR SALES</a></li>    
                    <li><a href="#">JOB SEEKERS</a></li>                  
                    <li><a href="#"><i class="fa fa-caret-down" style="font-size: 14px;"></i> INFO CENTER</a>
                        <ul class="sub-menu">
                            <li><a href="#">PHOTO GALLERIES</a></li>
                            <li><a href="#">NEWS</a></li>
                            <li><a href="#">REGULATION UPDATES</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-caret-down" style="font-size: 14px;"></i> EVENTS & PROMOTION</a>
                        <ul class ="sub-menu">
                            <li><a href="#">UPCOMING EVENTS</a></li>
                            <li><a href="#">PAST EVENTS</a></li>
                            <li><a href="#">SUBMIT A TALK IDEA</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-caret-down" style="font-size: 14px;"></i> PARTNERS</a>
                        <ul class="sub-menu">
                            <li><a href="#">PARTNER BENEFIT</a></li>
                            <li><a href="#">BECOME A PARTNER</a></li>
                        </ul>    
                    </li>
                    <li style="border: none;"><a style="border: none;" href="#"><i class="fa fa-caret-down" style="font-size: 14px;"></i> CUSTOMERS</a>
                        <ul class="sub-menu">
                            <li><a href="#">CUSTOMER BENEFIT</a></li>
                            <li><a href="#">BECOME A CUSTOMER</a></li>
                        </ul> 
                    </li>
                </ul>
            </div>   
        </div> -->
        <div id="scrollToTop">
            <a href="#"><i class="fa fa-arrow-up" style="font-size: 26px; color: white;"></i></a>
        </div>  
        <!-- Footer Scripts
        ============================================= -->
        <script>
            $(document).ready(function() {
                base_url = 'index.html';
                $('#loader').hide();
                $('#main-table-box').fadeIn();
  
            //$('.samesize').matchHeight(); //WEIRDLY NOT WORKING
		    $('.ipost').matchHeight(); 
                
                
                if ($('.magpop').length) {
                    $('.magpop').magnificPopup({
                        type: 'inline',
                        preloader: false,
                        mainClass: 'mfp-fade',
                        gallery: {
                            // options for gallery
                            enabled: true
                        },
                        modal: false
                    });
                }

                if ($('.modal-basic').length) {
                    var popup = $('.modal-basic');
                    popup.magnificPopup({
                        type: 'inline',
                        preloader: false,
                        mainClass: 'mfp-fade',
                        modal: true
                    });
                }

                if ($('.modal-image').length) {
                    var popup = $('.modal-image');
                    popup.magnificPopup({
                        type: 'image',
                        preloader: true,
                        mainClass: 'mfp-fade',
                        modal: false,
                        gallery: {
                            // options for gallery
                            enabled: true
                        }
                    });
                }

                if ($('.modal-video').length) {
                    var popup = $('.modal-video');
                    popup.magnificPopup({
                        type: 'video',
                        preloader: true,
                        mainClass: 'mfp-fade',
                        modal: false,
                        gallery: {
                            // options for gallery
                            enabled: true
                        }
                    });
                }

                if ($('.popframe').length) {
                    $('.popframe').magnificPopup({
                        type: 'iframe',
                        preloader: true,
                        mainClass: 'mfp-fade',
                        modal: false
                    });
                }

                doSubscribe = function() {

                    $.post("newsletter/subscribe.html", {email: $('#sub_email').val()})
                            .done(function(data) {
                                $('#sub_thanks').fadeIn();
                                $('#sub_form').hide();
                                // $('#subscribe_popup').html("<h3></h3>");
                            }
                            );
                }


                function validateEmail(email) {
                    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    return re.test(email);
                }
                $('#site-searchform').submit(function() {
                    doSearch();
                });
                //SEaRCH
                doSearch = function() {
                    // window.location = "http://www.eurocham-cambodia.org/search/" + $('#s').val();
                };
                $('[data-toggle="popover"]').popover();


                //accordion scroll to
                $(".acctitle").click(function() {
                    var blob = $(this);
                    setTimeout(function() {
                        scrollhere(blob);
                    }, 400);
                });


                function scrollhere(destination) {
                    var stop = $(destination).offset().top - 80;
                    var delay = 1000;
                    $('body,html').animate({scrollTop: stop}, delay);

                    return false;
                }

            });
        </script>
        <script type="text/javascript" src="template/js/functions.js"></script>
        <script type="text/javascript" src="javascript/jquery.matchHeight-min.js"></script>
        <!-- finished footer container -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                // $("#menu-down").css({"display":"none","transition":".5s"});
                // show hide button when scroll
                $(window).scroll(function() {
                    if($(this).scrollTop() > 200) {
                        // $("#menu-downs").css({
                        //     "transition" : ".5s",
                        //     "display" : "block",
                        //     "position" : "fixed",
                        //     "z-index" : 10000,
                        //     "top" : "0px",
                        //     "width" : "100%",
                        //     "background-color" : "white",
                        //     "box-shadow": "0px  0px 3px #a4509f",
                        //     "padding" : "10px",
                        //     "margin" : "auto"
                        // });
                        // $("#main-menus").css({"margin-left":"120px", "background-color": "white"});
                        $("#scrollToTop").fadeIn("slow");
                    }
                    else {
                        $("#scrollToTop").fadeOut();
                        // $("#menu-downs").fadeOut();
                        // $("#header-container-fixed").fadeOut("slow");
                    }
                });
                // smoth scroll to top
                $("#scrollToTop").click(function(){
                    $("html, body").animate({ scrollTop : 0 }, 1000);
                });
            });    
        </script>
</body>
</html>