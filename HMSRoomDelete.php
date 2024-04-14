<?php

include("HMSconnection.php");

$roomid = $_POST["roomid"];

mysqli_query($HMSconnection, "DELETE FROM hmsroom WHERE roomid='$roomid'");

echo "<script language='javascript'>alert('Record has been Deleted')</script>";

echo "<script>window.location.href='HMSRegister.php';</script>";

?>