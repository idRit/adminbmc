<?php
    include_once ("../includes/connection.php");
    $name = $_POST['name'];
    $aadhaar_id = $_POST['aadhaar'];
    $pincode = $_POST['pincode'];
    $email_id = $_POST['email'];
    $phone_no = $_POST['ph'];
    $query = "INSERT INTO `sweeper_id`(s_name,addhaar,pin_code,ph_no,email_id) VALUES ($name,$aadhaar_id,$pincode,$phone_no,$email_id)";
    
    $result = mysqli_

?>