<?php
/**
 * Created by PhpStorm.
 * User: bishw
 * Date: 15-11-2017
 * Time: 10:13 PM
 */
include_once '../includes/connection.php';
global $db;
$res=$db->query("SELECT DISTINCT  rest_name FROM restora");
while ($row=$res->fetch_assoc()){
    echo "<option value='".$row['rest_name']."'>".$row['rest_name']."</option>";
}
exit;