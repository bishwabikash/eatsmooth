<?php
session_start();
date_default_timezone_set("Asia/Kolkata");
include_once "../includes/connection.php";
global $db;
if (isset($_POST)){
    if(empty(trim($_POST['order_detail']))){
        return null;
    }else{
        $order_detail="<table border='1' cellpadding='0' cellspacing='0' width='200px' style='border-collapse:collapse;'>";
        $rows=explode(";",$_POST['order_detail']);
        foreach ($rows as $row){
            $order_detail.="<tr>";
            $cells=explode(",",$row);
            foreach ($cells as $cell){
                if (strcmp($cell,'+')==0 || strcmp($cell,'-')==0 ||strcmp($cell,'')==0){

                }else {
                    $order_detail .= "<td>" . $cell . "</td>";
                }
            }
            $order_detail.="</tr>";
        }
        $order_detail.="</table>";

        $stmt=$db->stmt_init();
        $stmt->prepare("INSERT into orders(order_detail, user_phone, user_mail,order_tax,order_ship,order_total,rest_name) VALUES (?,?,?,?,?,?,?)");
        $stmt->bind_param("sssddds",$_POST['order_detail'],$_SESSION['uPhone'],$_POST['user_mail'],$_POST['GST'],$_POST['ship'],$_POST['grand'],$_POST['restName']);
        $stmt->execute();
        $id=$stmt->insert_id;
        $stmt->close();

        /*Mail Section*/
        $content ="<html><body>";
        $content.="<h4>Order Details #{$id}</h4><br> Dear,{$_SESSION['uPhone']}<br> Here is Your Recent Order at <a href='http://www.eatsmooth.com'>Eatsmooth.com</a><br><br><br>";
        $content.="Restaurant name:<b>{$_POST['restName']}</b>";
        $content.=$order_detail;
        $content.="<br><b>cart total:</b> {$_POST['cart_total']}<br><b>GST(5% of total):</b> {$_POST['GST']}<br><b>Carrying Charge:</b> {$_POST['ship']}<br><b>Grand Total:</b> {$_POST['grand']}";
        $content.="<br><br> Please Pay in Cash. And Do Pay in change ( <i>That's Convenient </i> :) ) <br><br>";
        $content.="</body></html>";
        $to=$_POST['user_mail'];
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


        $headers .= 'From: shop@eatsmooth.com'."\r\n".
            'Reply-To: no-reply@eatsmooth.com'."\r\n" .
            'X-Mailer: PHP/' . phpversion();



        $adm_content ="<html><body>";
        $adm_content.="<h4>Order Details #{$id}</h4><br><br> Here is Your Recent Order at <a href='http://www.eatsmooth.com'>Eatsmooth.com</a><br><br><br>";
        $adm_content.="Restaurant Name:<b>{$_POST['restName']}</b>";
        $adm_content.=$order_detail;
        $adm_content.="<br><b>cart total:</b> {$_POST['cart_total']}<br><b>GST(5% of total):</b> {$_POST['GST']}<br><b>Carrying Charge:</b> {$_POST['ship']}<br><b>Grand Total:</b> {$_POST['grand']}";
        $adm_content.="<br><br> Ordered on:".date("d-m-Y h:i:sa")."<br><br>";
        $adm_content.="<b>To Address:</b><br>";
        $adm_content.="{$_SESSION['uAddr']}<br>";
        $adm_content.="{$_SESSION['uPin']}";
        $adm_content.="FROM:{$_POST['restName']}";
        $adm_content.="</body></html>";
        $adm_to="auskriti@gmail.com";
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


        $headers .= 'From: shop@eatsmooth.com'."\r\n".
            'Reply-To: no-reply@eatsmooth.com'."\r\n" .
            'X-Mailer: PHP/' . phpversion();

        if(mail($to,"Eatsmooth.com Order #{$id}",$content,$headers)==true && mail($adm_to,"Eatsmooth.com Order #{$id}",$content,$headers)==true){
            echo "Order Successful. Please Check Mail. \n Here is your Order Id:  {$id}";
        }else {
            echo "Order Failure. Please Call us for Booking Via Call \n Please Refer to Order Id: {$id} on call";
        }

    }
    exit;
}