<!-- START TOP BAR -->

<div id="topbar">
    <div class="container">
        <div class="row">
            <div id="nav" class="span12 light">

                <!-- START MAIN NAVIGATION -->

                <ul id="menu-menu" class="level-1">

                    <li>
                        <a href="#">RESTAURANTS</a>

                        <ul class="sub-menu">
                            <?php
                             $rest_query=$db->query('SELECT rest_name FROM restora WHERE rest_type='.class_RESTAURANT);
                             if ($rest_query){
                                 while ($rest_row=$rest_query->fetch_assoc()){
                            ?>
                            <li><a href="srv-<?php echo str_replace(" ","_",$rest_row['rest_name'])?>.php"><?php echo $rest_row['rest_name'];?></a></li>

<?php
                                 }
                                 }?>
                        </ul>
                    </li>
                    <li>
                        <a href="#">BAKERIES</a>
                        <ul class="sub-menu">
                            <?php
                            $rest_query=$db->query('SELECT rest_name FROM restora WHERE rest_type='.class_BAKERY);
                            if ($rest_query){
                                while ($rest_row=$rest_query->fetch_assoc()){
                                    ?>
                                    <li><a href="srv-<?php echo str_replace(" ","_",$rest_row['rest_name'])?>.php"><?php echo $rest_row['rest_name'];?></a></li>

                                    <?php
                                }
                            }?>

                        </ul>
                    </li>
                    <li>
                        <a href="#">VEGETABLES</a>
                        <ul class="sub-menu">
                            <?php
                            $rest_query=$db->query('SELECT rest_name FROM restora WHERE rest_type='.class_VEGETABLES);
                            if ($rest_query){
                                while ($rest_row=$rest_query->fetch_assoc()){
                                    ?>
                                    <li><a href="srv-<?php echo str_replace(" ","_",$rest_row['rest_name'])?>.php"><?php echo $rest_row['rest_name'];?></a></li>

                                    <?php
                                }
                            }?>

                        </ul>
                    </li>
                    <li>
                        <a href="#">ICE CREAM</a>
                        <ul class="sub-menu">
                            <?php
                            $rest_query=$db->query('SELECT rest_name FROM restora WHERE rest_type='.class_ICECREAM);
                            if ($rest_query){
                                while ($rest_row=$rest_query->fetch_assoc()){
                                    ?>
                                    <li><a href="srv-<?php echo str_replace(" ","_",$rest_row['rest_name'])?>.php"><?php echo $rest_row['rest_name'];?></a></li>

                                    <?php
                                }
                            }?>
                        </ul>
                    </li>

                </ul>
                <!-- END MAIN NAVIGATION -->

                <!-- START TOPBAR LOGIN -->

                <div id="topbar_login" class="not_logged_in">
                    <?php if(isset($_SESSION['uPhone']) && !empty($_SESSION['uPhone'])){?>
                        <a class="topbar_login" href="#">

                            <?php
                            $cur_usr=$_SESSION['user'];
                            echo $cur_usr;?>
                            <span class="sf-sub-indicator"></span>
                        </a>
                        <div id="fast_login" class="access-info-box">
                            <a id="topbar_login"href="includes/logout.php">
                                Logout
                            </a>
                        </div>
                    <?php }else{ ?>
                        <a class="topbar_login" href="#">

                            LOGIN
                            <span class="sf-sub-indicator"></span>
                        </a>
                        <div id="fast-login" class="access-info-box">
                            <form action="includes/enterdata.php" method="post" name="loginform">
                                <input type="hidden" name="login" value="login">
                                <div class="form">
                                    <p>
                                        <label>

                                            <input type="text" placeholder="Username" tabindex="10" size="20" value="" name="log"
                                                   class="input-text"/>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input type="password" placeholder="Password" tabindex="20" size="20" value="" name="pwd"
                                                   class="input-text"/>
                                        </label>
                                    </p>
                                    <a class="align-left lostpassword" href="#"
                                       title="Password Lost and Found">
                                        lost password?
                                    </a>

                                    <p class="align-right">
                                        <input type="submit" tabindex="100" value="Login" name="wp-submit"
                                               class="input-submit"/>
                                        <input type="hidden" value="index.html" name="redirect_to"/>
                                        <input type="hidden" value="1" name="testcookie"/>
                                    </p>
                                    <br>
                                    <a class="align-left lostpassword" href="#"
                                       title="Password Lost and Found">
                                        OR Login with Facebook
                                    </a>

                                </div>
                            </form>
                            <form action="includes/enterdata.php" method="post" name="signupform" onsubmit="return validateForm()">
                                <input type="hidden" name="signup" value="signup">
                                <div class="form">
                                    <p>
                                        <label>
                                            <input type="text" placeholder="Username" tabindex="10" size="20" value="" name="log_uname"
                                                   class="input-text"/>
                                        </label>
                                    </p>
                                    <p>
                                        <textarea name="log_addr" class="input-text" placeholder="Complete Address With Pincode">

                                        </textarea>
                                    </p>
                                    <p>
                                        <label>
                                            <input type="text" tabindex="20" placeholder="Pin Code" size="20" value="" name="log_pin"
                                                   class="input-text"/>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input type="password" tabindex="20" placeholder="Password" size="20" value="" name="log_pwd"
                                                   class="input-text"/>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input type="password" placeholder="Confirm Password" tabindex="20" size="20" value="" name="log_pwd_conf"
                                                   class="input-text"/>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input type="tel" placeholder="Phone" tabindex="20" size="20" value="" name="log_phn"
                                                   class="input-text"/>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input type="email" placeholder="Email" tabindex="20" size="20" value="" name="log_email"
                                                   class="input-text"/>
                                        </label>
                                    </p>
                                    <p class="align-left">
                                        <input type="reset" class="input-submit" value="Reset">
                                    </p>
                                    <p class="align-right">
                                        <input type="submit" class="input-submit" value="Sign up">
                                    </p>
                                </div>
                            </form>
                        </div>
                    <?php }?>
                </div>
                <!-- END TOPBAR LOGIN -->
            </div>
        </div>
    </div>
</div>
<!-- END TOP BAR -->

<!-- START HEADER -->
<div id="header" class="group margin-bottom">

    <div class="group container">
        <div class="row" id="logo-headersidebar-container">
            <!-- START LOGO -->
            <div id="logo" class="span6 group">
                <a id="logo-img" href="index.php" title="eatsmooth">
                    <img src="images/libra-logo1.png" title="eatsmooth" alt="eatsmooth"/>
                </a>
                <p id='tagline'>Smooth delivery. Order now.</p>
            </div>
            <!-- END LOGO -->

            <!-- START HEADER SIDEBAR -->
            <div id="header-sidebar" class="span6 group"><img src="images/eat.png" title="Libra"
                                                              alt="Libra"/> &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
                <div class="widget-first widget header-text-image">
                    <div class="text-image" style="text-align:left">
                        <img src="images/phone1.png" alt="CUSTOMER SUPPORT"/>
                    </div>

                    <div class="text-content">
                        <h3>CUSTOMER SUPPORT</h3>
                        <p>7576052463</p>
                    </div>
                </div>


            </div>
        </div>
    </div>

<!-- END HEADER -->


<div id="slider-polaroid-0" class="slider slider-polaroid polaroid no-responsive" style="height:400px;">
            <div class="thumbs  container">
                <div class="thumb">
                    <img src="images/slider/flexslider/001-150x150.png" alt="images/slider/flexslider/001.png" />
                    <div class="slide-content container align-right" style="background-image:url('images/slider/flexslider/001.png');">
                        <div class="text">
                            <h2>Eat Smooth is Fast and Efficient</h2>
                            <p>
                                A single window for ordering from a wide range of restaurants, we have our own exclusive fleet of delivery personnel to pick up orders from restaurants and deliver it to customers.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="thumb">
                    <img src="images/slider/flexslider/0026-150x150.jpg" alt="images/slider/flexslider/0026.jpg" />
                </div>

                <div class="thumb">
                    <img src="images/slider/flexslider/003-150x150.png" alt="images/slider/flexslider/003.png" />
                    <div class="slide-content container align-right" style="background-image:url('images/slider/flexslider/003.png');">
                        <div class="text">
                            <h2>Happy and Satisfied customers.</h2>
                            <h3><font color="white">
                              “Eat Smooth gave us the taste of how a best food delivery service works.” <b><br>– Saurabh</b><br><br>
“On-time delivery and best quality packaging from Eat Smooth is makes it different from the rest.” <br><b>– Roshni.</b>

                            </font></h3>
                        </div>
                    </div>
                </div>

                <div class="thumb">
                    <img src="images/slider/flexslider/0043-150x150.jpg" alt="images/slider/flexslider/0043.jpg" />
                    <div class="slide-content container align-right full" style="background-image:url('images/slider/flexslider/0043.jpg');">
                       
                    </div>
                </div>

                <div class="thumb">
                    <img src="images/slider/flexslider/0052-150x150.jpg" alt="images/slider/flexslider/0052.jpg" />
                    <div class="slide-content container align-right full" style="background-image:url('images/slider/flexslider/0052.jpg');">
                        <div class="container"></div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            jQuery(document).ready(function($){
                $('#slider-polaroid-0').polaroid({
                    animation: '',
                    pause: 8000,
                    animationSpeed: 800			    });
            });
        </script>

        <div class="mobile-slider">
            <div class="slider fixed-image container">
                <img src="images/slider/flexslider/fixed-polaroid.jpg" alt="" />
            </div>
        </div>
    </div>
    </div>

<!-- SLOGAN -->