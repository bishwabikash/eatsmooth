<!DOCTYPE html>
<!-- START HEAD -->
<?php include("includes/head.php")?>
<!-- END HEAD -->
<!-- START BODY -->
<body class="home page no_js responsive stretched">
    
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a18f946198bd56b8c03d3d4/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<!-- START BG SHADOW -->




<div class="bg-shadow">

<!-- START WRAPPER -->
    <div id="wrapper" class="container group">
   
   <div class="mobileHide">
   
    <?php include "includes/header.php";?></div>
    <!-- END HEADER -->

    <!-- START PRIMARY -->

<div class="mobileShow"> <img src="images/back.png"><br><br>



</div>



    <div id="primary" class="sidebar-no">
        <div class="container group">


		 <div class="clear"></div>
                        <div class="row">
                            <!-- START SECTION BLOG -->
                            <div class="section blog margin-bottom span12">
                               <center> <h3 class="title">
                                  We present you our exclusive app from which you can keep all the restaurants in your pocket. <br><br>Get the app now.<br><BR>
								 <a href=""><img src="images/gp.png"></a>
                                </h3> </center>
								</div></div><BR><BR>
								    
								    
								    
							<div>
							    
								   <center>
								      <a href="restaurantlist.php"><button class="button button2">Check out all the restaurants</button></a></div></center> 	<br><br>



            <div class="row">
            <!-- START CONTENT -->
            
            
            <div class="mobileHide">
                
                <div id="content-home" class="span12 content group">
                    <div class="page type-page status-publish hentry group">
                        <div class="box-sections numbers-sections margin-bottom ">
                                <div class="number number-left number-zero"></div>
                                <div class="number number-right number-1"></div>
                                <h4>
                                   Fast <span class="title-highlight">Delivery</span>
                                </h4>
                                <p>
                                   We deliver the fastest delivery possible, so that your hunger doesn’t eat you.
                                </p>
                        </div>

                        <div class="box-sections numbers-sections margin-bottom ">
                            <div class="number number-left number-zero"></div>
                            <div class="number number-right number-2"></div>
                            <h4>
                                Maximum <span class="title-highlight">Restaurants</span>
                            </h4>
                            <p>
                               Almost all the restaurants from Silchar and 8kms around it are under our radar.
                            </p>
                        </div>

                        <div class="box-sections numbers-sections margin-bottom ">
                            <div class="number number-left number-zero"></div>
                            <div class="number number-right number-3"></div>
                            <h4>
                              No Minimum  <span class="title-highlight">Order</span>
                            </h4>
                            <p>
                                We have no minimum order policy which ensures you order at a very affordable price.
                            </p>
                        </div>

                        <div class="box-sections numbers-sections margin-bottom  last">
                            <div class="number number-left number-zero"></div>
                            <div class="number number-right number-4"></div>
                            <h4>
                                Special <span class="title-highlight">Discounts</span>
                            </h4>
                            <p>
                                From time to time you’ll have the privilege to get special discounts from us.
                            </p>
                        </div>

</div></div></div>

                        <br><br>



						<div class="w3-content w3-section" style="max-width:100%">
  <img class="mySlides w3-animate-top" src="images/slider/flexslider/1.png" style="width:100%">
  <img class="mySlides w3-animate-bottom" src="images/slider/flexslider/2.png">
  <img class="mySlides w3-animate-top" src="images/slider/flexslider/3.png">
  <img class="mySlides w3-animate-bottom" src="images/slider/flexslider/4.png">
  <img class="mySlides w3-animate-bottom" src="images/slider/flexslider/5.png">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2500);
}
</script>




                        <br><br>


                        <div class="clear"></div>

                        <div class="margin-bottom">
                            <div class="logos-slider wrapper">
                                <h2>
                                   Restaurants <span class="title-highlight"> Available</span>
                                </h2>
                                <div class="list_carousel">
                                    <ul class="logos-slides">
                                    <?php
                                    $reslogo_quer=$db->query("SELECT rest_logo FROM restora");
                                    if($reslogo_quer) {
                                        while ($reslogo_row=$reslogo_quer->fetch_assoc()){
                                        ?>
                                        <li style="height: 70px;">
                                            <a href="#" class="bwWrapper">
                                                <img src="images/data/<?php echo $reslogo_row['rest_logo']?>" style="max-height: 70px;"
                                                     class="logo"/>
                                            </a>
                                        </li>
                                        <?php
                                        }
                                    }
                                    ?>

                                    </ul>
                                </div>
                                <div class="clear"></div>
                                <div class="nav">
                                    <a class="prev" href="#"></a>
                                    <a class="next" href="#"></a>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>

                        <script type="text/javascript">
                            jQuery(function($){

                                $('.logos-slides').imagesLoaded(function(){
                                    $('.logos-slides').carouFredSel({
                                        auto: true,
                                        width: '100%',
                                        prev: '.logos-slider .prev',
                                        next: '.logos-slider .next',
                                        swipe: {
                                            onTouch: true
                                        },
                                        scroll : {
                                            items     : 1,
                                            duration  :	500				}
                                    });
                                });

                                $('.bwWrapper').BlackAndWhite({
                                    hoverEffect : true, // default true
                                    // set the path to BnWWorker.js for a superfast implementation
                                    webworkerPath : false,
                                    // for the images with a fluid width and height
                                    responsive:true,
                                    speed: { //this property could also be just speed: value for both fadeIn and fadeOut
                                        fadeIn: 200, // 200ms for fadeIn animations
                                        fadeOut: 300 // 800ms for fadeOut animations
                                    }
                                });

                                $("a.bwWrapper[href='#']").click(function(){ return false })

                            });
                        </script>


                    </div>
                    <!-- START COMMENTS -->
                    <div id="comments"></div>
                    <!-- END COMMENTS -->
                </div>
            <!-- END CONTENT -->

            <!-- START EXTRA CONTENT -->
            <!-- END EXTRA CONTENT -->

            </div>
        </div>
   
    <!-- END PRIMARY -->

    <!-- START FOOTER -->
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="footer-widgets-area with-sidebar-right">
                   

                      <div class="widget span2 widget_nav_menu">
                        <h3>About Eat Smooth</h3>

                        <div class="menu-widget-footer-container">
                            <ul id="menu-widget-footer" class="menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="about.php">About Us</a>
                                </li>

                                <li class="menu-item menu-item-type-post_type">
                                    <a href="fq.html">FAQ</a>
                                </li>

                                <li class="menu-item menu-item-type-post_type">
                                    <a href="contact.html">Contacts</a>
                                </li>

                                <li class="menu-item menu-item-type-post_type">
                                    <a href="tc.html">Terms and Condition</a>
                                </li>
<li class="menu-item menu-item-type-post_type">
                                    <a href="pp.html">Privacy Policy</a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>

                    <div class="widget-last widget span2 widget_nav_menu">
                        <h3>Socialize</h3>

                        <div class="menu-socialize-container">
                            <ul id="menu-socialize" class="menu">

                                <li class="menu-item menu-item-type-custom">
                                    <a href="https://www.facebook.com/eatsmoooth">Facebook</a>
                                </li>

                                <li class="menu-item menu-item-type-custom">
                                    <a href="https://www.twitter.com/eat_smooth">Twitter</a>
                                </li>

                                <li class="menu-item menu-item-type-custom">
                                    <a href="https://www.linkedin.com/company/eatsmooth">LinkedIn</a>
                                </li>



                                <li class="menu-item menu-item-type-custom">
                                    <a href="https://www.Instagram.com/eat_smooth">Instagram</a>
                                </li>

                                
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="footer-widgets-sidebar with-sidebar-right">
                    <div  class="widget-first widget span6 yit_quick_contact">
                        <h3>Get in touch</h3>

                        <form class="contact-form row" method="post" action="" enctype="multipart/form-data">

                            <div class="usermessagea"></div>
                            <fieldset>
                                <ul>
                                    <li class="text-field with-icon span3">
                                        <label>
                                            <span class="mainlabel">Name</span>
                                        </label>

                                        <div class="input-prepend">
                                            <span class="add-on">
                                                <img src="images/footer/author-footer.png" alt="" title=""/></span>
                                            <input type="text" name="yit_contact[name]" class="with-icon required" value=""/>
                                        </div>
                                        <div class="msg-error"></div>
                                        <div class="clear"></div>
                                    </li>

                                    <li class="text-field with-icon span3">
                                        <label>
                                            <span class="mainlabel">Email</span>
                                        </label>

                                        <div class="input-prepend">
                                            <span class="add-on">
                                                <img src="images/footer/envelope-footer.png" alt="" title=""/>
                                            </span>
                                            <input type="text" name="yit_contact[email]" class="with-icon required email-validate" value=""/>
                                        </div>
                                        <div class="msg-error"></div>
                                        <div class="clear"></div>
                                    </li>

                                    <li class="textarea-field with-icon span6">
                                        <label>
                                            <span class="mainlabel">Message</span>
                                        </label>

                                        <div class="input-prepend">
                                            <span class="add-on">
                                                <img src="images/footer/pencil-footer.png" alt="" title=""/>
                                            </span>
                                            <textarea name="yit_contact[message]" rows="8" cols="30" class="with-icon required"></textarea>
                                        </div>
                                        <div class="msg-error"></div>
                                        <div class="clear"></div>
                                    </li>

                                    <li class="submit-button span6">
                                        <div style="position:absolute;left:-9999px;">
                                            <input type="text" name="email_check_2" id="email_check_2" value=""/>
                                        </div>
                                        <input type="hidden" name="yit_action" value="sendemail" id="yit_action"/>
                                        <input type="hidden" name="yit_referer" value="index.html"/>
                                        <input type="hidden" name="id_form" value="228"/>
                                        <input type="submit" name="yit_sendemail" value="SEND" class="sendmail alignright"/>
                                        <div class="clear"></div>
                                    </li>
                                </ul>
                            </fieldset>
                        </form>

                        <script type="text/javascript">
                            var messages_form_228 = {
                                name: "Insert the name",
                                email: "Insert a valid email",
                                message: "Insert a message"
                            };
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END FOOTER -->

    <!-- START COPYRIGHT -->
   
    <!-- END COPYRIGHT -->

    <div class="wrapper-border"></div>

    </div>
<!-- END WRAPPER -->


<!-- END BG SHADOW -->

<script type='text/javascript' src='js/comment-reply.min.js'></script>
<script type='text/javascript' src='js/underscore.min.js'></script>
<script type='text/javascript' src='js/jquery/jquery.masonry.min.js'></script>
<script type='text/javascript' src='sliders/polaroid/js/jquery.polaroid.js'></script>
<script type='text/javascript' src='js/jquery.colorbox-min.js'></script>
<script type='text/javascript' src='js/jquery.easing.js'></script>
<script type='text/javascript' src='js/jquery.carouFredSel-6.1.0-packed.js'></script>
<script type='text/javascript' src='js/jQuery.BlackAndWhite.js'></script>
<script type='text/javascript' src='js/jquery.touchSwipe.min.js'></script>
<script type='text/javascript' src='sliders/polaroid/js/jquery.transform-0.8.0.min.js'></script>
<script type='text/javascript' src='sliders/polaroid/js/jquery.preloader.js'></script>
<script type='text/javascript' src='js/responsive.js'></script>
<script type='text/javascript' src='js/mobilemenu.js'></script>
<script type='text/javascript' src='js/jquery.superfish.js'></script>
<script type='text/javascript' src='js/jquery.placeholder.js'></script>
<script type='text/javascript' src='js/contact.js'></script>
<script type='text/javascript' src='js/jquery.tipsy.js'></script>
<script type='text/javascript' src='js/jquery.cycle.min.js'></script>
<script type='text/javascript' src='js/shortcodes.js'></script>
<script type='text/javascript' src='js/jquery.custom.js'></script>
</body>
<!-- END BODY -->
</html>