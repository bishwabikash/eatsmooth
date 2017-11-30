<?php
 require_once "includes/connection.php";
 global $db;
 if ($_SERVER['REQUEST_METHOD']=="GET" && isset($_GET['rest'])){

     ?>
         <!DOCTYPE html>


         <!-- START HEAD -->
         <?php include_once 'includes/head.php' ?>
         <!-- END HEAD -->
         <!-- START BODY -->
         <body class="page no_js responsive stretched">

         <!-- START BG SHADOW -->
         <div class="bg-shadow">

             <!-- START WRAPPER -->
             <div id="wrapper" class="container group">



 <div class="mobileHide">

                 <?php include_once 'includes/header.php' ?> </div>
                 
                 
                 <div class="mobileShow"> <img src="images/back.png"><br><br>
                 
                 	<div>
							    
								   <center>
								      <a href="index.php"><button class="button button3">HOME</button></a></div></center> </div>	<br><br>
                 
                 
                 
                 <div class="slogan">
                     <h2><?php echo str_replace("_", " ", $_GET['rest']) ?></h2>
                     <h3><?php echo $db->query("SELECT rest_addr FROM restora WHERE rest_name LIKE '" . str_replace("_", " ", $_GET['rest']) . "'")->fetch_assoc()['rest_addr'] ?>
                     </h3>
                     <h3><?php echo "Service Hours: " . date('h:m A', strtotime($db->query("SELECT rest_open FROM restora WHERE rest_name LIKE '" . str_replace("_", " ", $_GET['rest']) . "'")->fetch_assoc()['rest_open'])) . "-" . date('h:m A', strtotime($db->query("SELECT rest_close FROM restora WHERE rest_name LIKE '" . str_replace("_", " ", $_GET['rest']) . "'")->fetch_assoc()['rest_close'])); ?></h3>
                 </div>
                 <!-- START PRIMARY -->
                 <div id="primary" class="sidebar-right">
                     <div class="container group">
                         <div class="row">

                             <!-- START CONTENT -->
                             <div id="content-blog" class="span9 content group">

                                 <div class="post type-post status-publish format-video sticky hentry hentry-post group blog-big">
                                     <!-- post featured & title -->

                                     <div class="thumbnail">
                                         <!-- post title -->

                                         <img width="890" height="340" src="images/blog/3.jpg"
                                              class="attachment-blog_big wp-post-image" alt="3"/>
                                         <!-- post meta -->


                                     </div>

                                     <div class="clear"></div>
                                 </div>
                                 <?php
                                 $cat_query = $db->query("SELECT DISTINCT  item_category FROM menu WHERE item_restaurant= '" . str_replace("_", " ", $_GET['rest']) . "'");
                                 while ($rest_row = $cat_query->fetch_assoc()) {
                                     ?>
                                     <table id="t01" class="fixed">
                                         <col width="80px"/>
                                         <col width="20px"/>
                                         <tr>
                                             <th><?php echo $rest_row['item_category'] ?></th>
                                             <th>Price(INR)</th>


                                         </tr>
                                         <?php
                                         $cat_itm_query = $db->query("SELECT * FROM menu WHERE item_category='" . $rest_row['item_category'] . "' AND item_restaurant LIKE '" . $_GET['rest'] . "'");
                                         while ($itm = $cat_itm_query->fetch_assoc()) {
                                             ?>
                                             <tr class="simpleCart_shelfItem">

                                                 <td class="item_name">
                                                     <img src="images/data/<?php echo $itm['item_pic'] ?>" width="50"
                                                          height="auto"> <?php echo $itm['item_nme'] ?></td>

                                                 <td align="right" class="item_price"><?php echo $itm['item_price'] ?>
                                                     &nbsp; &nbsp;&nbsp; <a href="javascript:;" class="item_add"><img
                                                                 src="images/plus.png"
                                                                 height="20" width="auto">
                                                         add to cart</a></td>
                                             </tr>
                                         <?php } ?>


                                     </table>
                                     <br>
                                 <?php } ?>


                             </div>
                             <br><br>
                             <!-- END CONTENT -->

                             <!-- END CONTENT -->

                             <!-- START SIDEBAR -->
                             <div id="sidebar-blog-sidebar" class="span3 sidebar group">
                                 <div class="widget-first widget recent-posts">
                                     <h3>your <span class="title-highlight">CART <img src="images/cart.png" height="20"
                                                                                      width="auto"></span></h3>
                                     <div class="recent-post group">
                                         <div class="hentry-post group">
                                             <div class="thumb-img" id="printdiv">
                                                 <strong><?php echo str_replace("_", " ", $_GET['rest']) ?></strong><br>
                                                 <table class="simpleCart_items"></table>
                                                 <table>
                                                     <tr><td width="150px">Cart Total:</td><td><div id="simpleCart_total" class="simpleCart_total"></div></td></tr>
                                                     <tr><td>GST(5% of Total)</td><td><div id="simpleCart_tax" class="simpleCart_tax"></div></td></tr>
                                                     <tr><td>Shipping(including packing):</td><td><div id="simpleCart_shipping" class="simpleCart_shipping"></div></td></tr>
                                                     <tr><td>Grand Total</td><td><div id="simpleCart_grandTotal" class="simpleCart_grandTotal"></div></td></tr>
                                                 </table>
                                                 <?php if(isset($_SESSION['uPhone'])){ ?>
                                                 <a href="javascript:;" button
                                                    class="simpleCart_empty">Reset Cart</a>
                                                 <a href="javascript:fetch('shop_cart','<?php if(isset($_SESSION['uMail'])){echo $_SESSION['uMail'];}?>','<?php echo str_replace("_", " ", $_GET['rest']) ?>','simpleCart_total','simpleCart_tax','simpleCart_shipping')"
                                                    button class=" button button5" id="checkout_cart">Place Order</a>
                                                 <?php }?>
                                             </div>

                                         </div>

                                     </div>
                                 </div>


                             </div>
                             <br><br><br><br><br><br>
                             <!-- END SIDEBAR -->
                         </div>
                     </div>
                 </div>
                 <!-- END PRIMARY -->


                 <!-- START FOOTER --><br><br><br><br><br><br><br><br>
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


                                         </ul>
                                     </div>
                                 </div>

                                 <div class="widget-last widget span2 widget_nav_menu">
                                     <h3>Socialize</h3>

                                     <div class="menu-socialize-container">
                                         <ul id="menu-socialize" class="menu">

                                             <li class="menu-item menu-item-type-custom">
                                                 <a href="https://www.facebook.com/eatsmoooth/">Facebook</a>
                                             </li>

                                             <li class="menu-item menu-item-type-custom">
                                                 <a href="www.twitter.com/eat_smooth">Twitter</a>
                                             </li>

                                             <li class="menu-item menu-item-type-custom">
                                                 <a href="www.linkedin.com/company/eatsmooth">LinkedIn</a>
                                             </li>


                                             <li class="menu-item menu-item-type-custom">
                                                 <a href="www.Instagram.com/eat_smooth">Instagram</a>
                                             </li>

                                         </ul>
                                     </div>
                                 </div>
                             </div>

                             <div class="footer-widgets-sidebar with-sidebar-right">
                                 <div class="widget-first widget span6 yit_quick_contact">
                                     <h3>Get in touch</h3>

                                     <form class="contact-form row" method="post" action=""
                                           enctype="multipart/form-data">

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
                                                         <input type="text" name="yit_contact[name]"
                                                                class="with-icon required" value=""/>
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
                                                         <input type="text" name="yit_contact[email]"
                                                                class="with-icon required email-validate" value=""/>
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
                                                         <textarea name="yit_contact[message]" rows="8" cols="30"
                                                                   class="with-icon required"></textarea>
                                                     </div>
                                                     <div class="msg-error"></div>
                                                     <div class="clear"></div>
                                                 </li>

                                                 <li class="submit-button span6">
                                                     <div style="position:absolute;left:-9999px;">
                                                         <input type="text" name="email_check_2" id="email_check_2"
                                                                value=""/>
                                                     </div>
                                                     <input type="hidden" name="yit_action" value="sendemail"
                                                            id="yit_action"/>
                                                     <input type="hidden" name="yit_referer" value="index.html"/>
                                                     <input type="hidden" name="id_form" value="228"/>
                                                     <input type="submit" name="yit_sendemail" value="SEND"
                                                            class="sendmail alignright"/>
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

         </div>
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
         <?php }else{
         echo "Not Done";
     }
     ?>