<?php
/**
 * Created by PhpStorm.
 * User: bishw
 * Date: 11-11-2017
 * Time: 02:31 PM
 */
require_once ("connection.php");
global $db;
if(isset($_POST['addRest'])){
    $stmt=$db->stmt_init();
    $stmt->prepare("INSERT into restora(rest_name, rest_type, rest_addr, rest_open, rest_close, rest_logo) VALUES (?,?,?,?,?,?)");

    if(!empty($_FILES['rest_pic']['name'])) {
        $target_dir = "../images/data/";
        $ext = pathinfo($_FILES['rest_pic']['name'], PATHINFO_EXTENSION);
        $sha_hash = sha1_file($_FILES['rest_pic']['tmp_name']);
        $filename = $sha_hash . "." . $ext;
        if ($_FILES['rest_pic']['size'] == 0) {

        } else {
            if (move_uploaded_file($_FILES['rest_pic']['tmp_name'], $target_dir . $filename)) {
                $stmt->bind_param("sissss", $_POST['rest_id'], $_POST['rest_type'], $_POST['rest_addr'], $_POST['time_open'], $_POST['time_close'], $filename);
                $stmt->execute();
                $stmt->close();
                echo "Success";
            } else {
                echo "Error While Uploading Image. Redirecting";
                header("location:../add.php;");
            }
        }
    }

    echo("Restaurant!");
}else if(isset($_POST['addMenu'])){
    $stmt=$db->stmt_init();
    $stmt->prepare("INSERT into menu(item_nme, item_category, item_restaurant, item_pic,item_price) VALUES (?,?,?,?,?)");
    echo ("here 1");
    if(!empty($_FILES['menu_itm_pic']['name'])) {
        $target_dir = "../images/data/";
        $ext = pathinfo($_FILES['menu_itm_pic']['name'], PATHINFO_EXTENSION);
        $sha_hash = sha1_file($_FILES['menu_itm_pic']['tmp_name']);
        $filename = $sha_hash . "." . $ext;
        if ($_FILES['menu_itm_pic']['size'] == 0) {

        } else {
            if (move_uploaded_file($_FILES['menu_itm_pic']['tmp_name'], $target_dir . $filename)) {
                $stmt->bind_param("ssssd", $_POST['menu_itm_name'], $_POST['select_category'], $_POST['select_restaurant'], $filename,$_POST['menu_itm_price']);
                $stmt->execute();
                echo ("here 2");
                $stmt->close();
                echo "Success";
            } else {
                echo "Error While Uploading Image. Redirecting";
                header("location:../add.php;");
            }
        }
    }
    echo ("Menu");
}

if(isset($_POST['signup'])){
    $stmt=$db->stmt_init();
    $uname=filter_var($_POST['log_uname'],FILTER_SANITIZE_STRING);
    $pwd=filter_var($_POST['log_pwd'],FILTER_SANITIZE_STRING);
    $phn=$_POST['log_phn'];
    $email=filter_var($_POST['log_email'],FILTER_SANITIZE_EMAIL);
    $stmt->prepare("INSERT into users(usr_phn, usr_nme, usr_passwd, usr_mail) VALUES (?,?,?,?)");
    $stmt->bind_param("ssss",$phn,$uname,$pwd,$email);
    $stmt->execute();
    $stmt->close();
    header("location:../index.php");
}else if (isset($_POST['login'])){
    $uname=filter_var($_POST['log'],FILTER_SANITIZE_STRING);
    $passw=filter_var($_POST['pwd'],FILTER_SANITIZE_STRING);
    $userqry=$db->query("SELECT usr_nme,usr_mail,usr_phn FROM users WHERE usr_nme LIKE '".$uname."' AND usr_passwd LIKE '".$passw."'");
    if ($userqry->num_rows==1){
        $det=$userqry->fetch_assoc();
        session_start();
        session_regenerate_id(true);
        $_SESSION['user']=$det['usr_nme'];
        $_SESSION['uPhone']=$det['usr_phn'];
        $_SESSION['uMail']=$det['usr_mail'];
        header("location:../index.php");
    }
}