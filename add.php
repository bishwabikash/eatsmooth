<?php
/**
 * Created by PhpStorm.
 * User: bishw
 * Date: 11-11-2017
 * Time: 02:36 PM
 */

        ?>

        <html>
        <head>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script>
            $( document.getElementById('select_restaurant') ).ready(function() {
            $.ajax({
            type: 'get',
            url: 'ajax//fetch_rest.php',
            data: {},
            success: function (response) {
            document.getElementById("select_restaurant").innerHTML=response;
            }
            })
            });
            </script>
        </head>
        <body>
        <div class="container">
            <div class="row" id="add_restaurant">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#add_rest">Add Restaurant</a></li>
                        <li><a href="#add_menu" data-toggle="tab">Add Menu</a></li>
                        <li><a href="includes/logout.php">Log out</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="add_rest" class="tab-pane fade in active">
                            <form method="post" action="includes/enterdata.php" id="Restaurant_form" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="rest_id">Restaurant:</label>
                                    <input type="text" id="rest_id" name="rest_id" class="form-control"
                                           placeholder="Restaurant Name" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="rest_addr">Address:</label>
                                    <textarea id="rest_addr" name="rest_addr" class="form-control"
                                              placeholder="Restaurant Address" required="required"></textarea>
                                </div>
                                <div class="form-horizontal form-group">
                                    <label for="time_open">Opening time</label>
                                    <input type="time" class="form-control" id="time_open" name="time_open" required="required">
                                    <label for="time_close">Closing time</label>
                                    <input type="time" id="time_close" class="form-control" name="time_close" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="rest_pic">Restaurant Logo</label>
                                    <input type="file" id="rest_pic" name="rest_pic" required="required" accept=".jpg,.png,.jpeg">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="rest_type" required="required">
                                        <option selected disabled>Restaurant Type</option>
                                        <option value="1">Confectionary</option>
                                        <option value="2">Bakery</option>
                                        <option value="3">Restaurant</option>
                                        <option value="4">Ice Cream Parlour</option>
                                    </select>
                                </div>
                                <input type="hidden" name="addRest" value="restaurant">
                                <div class=" btn-group btn-group-justified">
                                <a width="200px" onclick="$(this).closest('form').submit()" role="button"  class="btn btn-primary" value="submit">Submit</a>
                                    <a type="reset" role="button" name="Restreset" onclick="$(this).closest('form').resetForm()" class="btn btn-primary" value="reset">Reset</a>
                                </div>
                            </form>
                        </div>
                        <div id="add_menu" class="tab-pane fade">
                            <form method="post" action="includes/enterdata.php" enctype="multipart/form-data">
                                <input type="hidden" name="addMenu" value="Menu">
                                <div class="form-group">
                                    <label for="select_restaurant">Select Restaurant</label>
                                    <select id="select_restaurant" onload="populate();" name="select_restaurant" class="form-control">
                                        <option selected disabled>Select An Option</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="select_category">Select Category</label>
                                    <select id="select_category" name="select_category" class="form-control">
                                        <option selected disabled>Select An Option</option>
                                        <option value="Biryani">Biryani</option>
<option value="Snacks">Snacks</option>
<option value="Dessert">Dessert</option>
<option value="Fish">Fish</option>
<option value="Chop Suey">Chop Suey</option>
<option value="Rice">Rice</option>
<option value="Indian Veg Curry">Indian Veg Curry</option>
<option value="Indian Non Veg Curry">Indian Non Veg Curry</option>
<option value="Drinks">Drinks</option>
<option value="Tarka">Tarka</option>
<option value="Chicken">Chicken</option>
<option value="Mutton">Mutton</option>
<option value="Fried Rice">Fried Rice</option>
<option value="Soup">Soup</option>
<option value="Paneer">Paneer</option>
<option value="Tandoori">Tandoori</option>
<option value="Hot from Tandoori">Hot from Tandoori</option>
<option value="Special Veg Curry">Special Veg Curry</option>
<option value="Chicken Curry">Chicken Curry</option>
<option value="Tandoori Chicken">Tandoori Chicken</option>
<option value="Chow">Chow</option>
<option value="Breakfast">Breakfast</option>
<option value="Indian Curry">Indian Curry</option>
<option value="Egg Items">Egg Items</option>
<option value="Meal">Meal</option>
<option value="Vyanjan Special Snacks">Vyanjan Special Snacks</option>
<option value="Chowmin">Chowmin</option>
<option value="Roll Items">Roll Items</option>
<option value="Beverages Hot & Cold">Beverages Hot & Cold</option>
<option value="Indian Varieties Rice">Indian Varieties Rice</option>
<option value="Naan/Roti">Naan/Roti</option>
<option value="Dal">Dal</option>
<option value="Veg Curry Varieties">Veg Curry Varieties</option>
<option value="Local Fish">Local Fish</option>
<option value="Kalta Fish Varieties">Katla Fish Varieties</option>
<option value="Boiled Rice">Boiled Rice</option>
<option value="Veg Soup">Veg Soup</option>
<option value="Non Veg Soup">Non Veg Soup</option>
<option value="Curd">Curd</option>
<option value="Salad">Salad</option>
<option value="Stew">Stew</option>
<option value="Cutlets">Cutlets</option>
<option value="South Indian">South Indian</option>
<option value="Veg Thali">Veg Thali</option>
<option value="Mutton Thali">Mutton Thali</option>
<option value="Chicken Thali">Chicken Thali</option>
<option value="Fish Thali">Fish Thali</option>
<option value="Fried Rice">Fried Rice</option>
<option value="Beverages">Beverages</option>
<option value="Main Course">Main Course</option>
<option value="Breads">Breads</option>
<option value="Paratha & Puri">Paratha & Puri</option>
<option value="Chat Pata Corner">Chat Pata Corner</option>
<option value="Special Thali">Special Thali</option>
<option value="Thandai ki Farmaish">Thandai ki Farmaish</option>
<option value="Shorba aur Soap">Shorba aur Soup</option>
<option value="Momo">Momo</option>
<option value="Subzi ki Bahar-Hindustani Khasiyat">Subzi ki Bahar-Hindustani Khasiyat</option>
<option value="Taste of Tawa">Taste of Tawa </option>
<option value="Khaas-E-Kadai">Khaas-E-Kadai</option>
<option value="Dal Darbar">Dal Darbar</option>
<option value="Papad">Papad</option>
<option value="Raita">Raita</option>
<option value="Sizzlers">Sizzlers</option>
<option value="Pasta">Pasta</option>
<option value="Meethi Mulakatey">Meethi Mulakatey</option>
<option value="Mocktail">Mocktail</option>
<option value="Tasty Bites">Tasty Bites</option>
<option value="Tandoori Kabab">Tandoori Kabab</option>
<option value="Basmati ka Khazana">Basmati ka Khazana</option>
<option value="From our Traditional Oven">From our Traditional Oven</option>
<option value="Noodles">Noodles</option>
<option value="Chinese">Chinese</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="menu_itm_name">Item Name:</label>
                                    <input type="text" id="menu_itm_name" name="menu_itm_name" class="form-control"
                                           placeholder="Item Name" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="menu_itm_price">Item Price:</label>
                                    <input type="text" id="menu_itm_price" name="menu_itm_price" class="form-control"
                                           placeholder="Item Price" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="menu_itm_pic">Item Picture</label>
                                    <input type="file" id="menu_itm_pic" name="menu_itm_pic" required="required" accept=".jpg,.png,.jpeg">
                                </div>
                                <div class=" btn-group btn-group-justified">
                                    <a width="200px" onclick="$(this).closest('form').submit()" role="button"  class="btn btn-primary" value="submit">Submit</a>
                                    <a type="reset" role="button" name="Restreset" onclick="$(this).closest('form').reset()" class="btn btn-primary" value="reset">Reset</a>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="col-md-2"></div>

            </div>
        </div>
        </body>
        </html>

        <?php


?>



