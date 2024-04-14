<?php

include("HMSconnection.php");

$roomid = $_POST["roomid"];
$booking_id2 = $_POST["booking_id2"];

$new_room = $_POST["new_room"];
$new_type = $_POST["new_type"];
$new_beds = $_POST["new_beds"];
$new_adult = $_POST["new_adult"];
$new_child = $_POST["new_child"];
$new_fare = $_POST["new_fare"];

mysqli_query($HMSconnection, "UPDATE hmsroom SET room='$new_room', type='$new_type', beds='$new_beds', adult='$new_adult', child='$new_child', fare='$new_fare' WHERE roomid='$roomid'");

echo "<script>alert('Record has been updated')</script>";

echo "<script>window.location.href='HMSRegister.php';</script>";

?>