<?php

include("HMSconnection.php");

$booking_id = $_POST["booking_id"];

$new_fullname = $_POST["new_fullname"];
$new_phone = $_POST["new_phone"];
$new_email = $_POST["new_email"];
$new_add1 = $_POST["new_add1"];
$new_add2 = $_POST["new_add2"];
$new_brgy = $_POST["new_brgy"];
$new_city = $_POST["new_city"];
$new_state = $_POST["new_state"];
$new_zip = $_POST["new_zip"];

mysqli_query($HMSconnection, "UPDATE hms SET fullname='$new_fullname', phone='$new_phone', email='$new_email', add1='$new_add1', add2='$new_add2', brgy='$new_brgy', city='$new_city', state='$new_state', zip='$new_zip' WHERE booking_id='$booking_id'");

echo "<script>alert('Record has been updated')</script>";

echo "<script>window.location.href='HMSRegister.php';</script>";

?>