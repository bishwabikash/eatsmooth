<?php
session_start();
error_reporting(E_ERROR);
include_once ("connection.php");
global $db;?>
<head>
    <meta charset="UTF-8" />

    <!-- this line will appear only if the website is visited with an iPad -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />



    <title>Eatsmooth.com</title>

    <!-- RESET STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
    <!-- BOOTSTRAP STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.css" />
    <!-- MAIN THEME STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="css/style.css" />

    <!-- [favicon] begin -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <!-- [favicon] end -->

    <!-- Touch icons more info: http://mathiasbynens.be/notes/touch-icons -->
    <!-- For iPad3 with retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x.png" />
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x.png" />
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x.png">
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57x.png" />


    <link rel='stylesheet' id='thickbox-css'  href='js/thickbox/thickbox.css' type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-css'  href='http://fonts.googleapis.com/css?family=Playfair+Display%7COpen+Sans+Condensed%3A300%7COpen+Sans%7CShadows+Into+Light%7CMuli%7CDroid+Sans%7CArbutus+Slab%7CAbel&#038;ver=3.5.1' type='text/css' media='all' />
    <link rel='stylesheet' id='fontawesome-css'  href='css/font-awesome.css' type='text/css' media='all' />
    <link rel='stylesheet' id='responsive-css'  href='css/responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' id='polaroid-slider-css'  href='sliders/polaroid/css/polaroid.css' type='text/css' media='all' />
    <link rel='stylesheet' id='ahortcodes-css'  href='css/shortcodes.css' type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-css'  href='css/contact_form.css' type='text/css' media='all' />
    <link rel='stylesheet' id='blog-libra-big-css'  href='blog/big/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='custom-css'  href='css/custom.css' type='text/css' media='all' />
    <link rel='stylesheet' id='custom-css-2'  href='css/newsli.css' type='text/css' media='all' />
    <script type="text/javascript" src="js/simpleCart.js"></script>

    <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>
    <style type="text/css">
        body { background-color: #ffffff; background-image: url('../images/bg-pattern.png'); background-repeat: repeat; background-position: top left; background-attachment: scroll; }
    </style>

    <script type='text/javascript' src='js/jquery/jquery.js'></script>
    <style>
        table {
            width:100%;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }



        table#t01 tr:nth-child(even) {
            background-color: #eee;
        }
        table#t01 tr:nth-child(odd) {
            background-color:#fff;
        }
        table#t01 th {
            background-color: black;
            color: white;
        }

        table.fixed { table-layout:fixed; }
        table.fixed td { overflow: hidden; }

    </style>


    <style>
        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button2 {background-color: #008CBA;} /* Blue */
        .button3 {background-color: #f44336;} /* Red */
        .button4 {background-color: #e7e7e7; color: black;} /* Gray */
        .button5 {background-color: #555555;} /* Black */
    </style>
    <script type="text/javascript">
        function validateForm() {
            if (!document.forms['signupform']['log_uname'].value.match(/^[a-zA-Z0-9]+$/)){
                    alert("invalid username");
                    return false;
            }
            if(document.forms['signupform']['log_pwd'].value.localeCompare(document.forms['signupform']['log_pwd_conf'].value)){
                alert("Password Mismatch");
                return false;
            }
            if(!document.forms['signupform']['log_email'].value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)){
                alert("Invalid Phone");
                return false;
            }
            
        }

    </script>
    <script type="text/javascript">
        function fetch(id,mail,restName,total,tax,shipping){
            var order_string="";
            table =document.getElementById(id);
            ctotal=document.getElementById(total).innerText;
            ctax=document.getElementById(tax).innerText;
            cship=document.getElementById(shipping).innerText;
            for(i=0;i<table.rows.length;i++){
                for(j=0;j<table.rows[i].cells.length;j++){
                    order_string+=table.rows[i].cells[j].innerText+",";
                }
                order_string=order_string.replace(/(^\s*,)|(,\s*$)/g, '',"");
                order_string+=";";
            }
            if (mail===""){
                alert("Please Login for Placing order");
            }else{
                var post_data={
                    'order_detail' : order_string,
                    'user_mail'  :mail,
                    'restName'  :restName,
                    'cart_total' :ctotal,
                    'GST'        :ctax,
                    'ship'       :cship,
                    'grand'      :parseInt(ctotal)+parseFloat(ctax)+parseInt(cship)
                }
                $.ajax({
                    data: post_data,
                    type: "post",
                    url: "../ajax/mail_order.php",
                    success: function (data) {
                        alert(data);
                    }
                })
            }
        }
    </script>

    
    
    
            
<style type="text/css"> 
  .mobileShow {display: none;} 

  /* Smartphone Portrait and Landscape */ 
  @media only screen 
    and (min-device-width : 320px) 
    and (max-device-width : 480px){ 
      .mobileShow {display: inline;}
  }
</style>



<style type="text/css">
  .mobileHide { display: inline; } 

  /* Smartphone Portrait and Landscape */ 
  @media only screen 
    and (min-device-width : 320px) 
    and (max-device-width : 480px){ 
     .mobileHide { display: none;}
  }
</style>
        

</head>