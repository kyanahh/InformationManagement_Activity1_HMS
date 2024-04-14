<?php

include("HMSconnection.php");

$booking_id = $_POST["booking_id"];

mysqli_query($HMSconnection, "DELETE FROM hms WHERE booking_id='$booking_id'");

echo "<script language='javascript'>alert('Record has been Deleted')</script>";

echo "<script>window.location.href='HMSRegister.php';</script>";

?>