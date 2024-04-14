<?php

$booking_id = $_REQUEST["booking_id"];

include("HMSconnection.php");

$get_record = mysqli_query($HMSconnection, "SELECT * FROM hms WHERE booking_id='$booking_id'");

while($row_edit = mysqli_fetch_assoc($get_record)){

    $db_fullname = $row_edit["fullname"];
    $db_phone = $row_edit["phone"];
    $db_email = $row_edit["email"];
    $db_add1 = $row_edit["add1"];
    $db_add2 = $row_edit["add2"];
    $db_brgy = $row_edit["brgy"];
    $db_city = $row_edit["city"];
    $db_state = $row_edit["state"];
    $db_zip = $row_edit["zip"];

}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Hotel Management System</title>
        <link rel="stylesheet" href="style.css"/>
            
    </head>
    <body>
    <form method="POST" action="HMSUpdate.php">
        <div>
            <h1 class="for-h1">Hotel Management System</h1>
        </div>

        <div id="one">
            <h2>Customer Registration Form</h2>
        </div>
        <br>
        <br>
        <div id="two" class="row">
            <label class="col-2">Full Name</label>
            <input type="hidden" name="booking_id" value="<?php echo $booking_id; ?>">
            <input type="text" name="new_fullname" value="<?php echo $db_fullname; ?>" class="col-1">
            <label class="col-3">Phone Number</label>
            <input type="text" name="new_phone" value="<?php echo $db_phone; ?>" class="col-4"> <br>
        </div>
        <div id="two" class="row">
            <label class="col-2">Email</label>
            <input type="text" name="new_email" value="<?php echo $db_email; ?>" class="col-1">
            <label class="col-3">House No./Street</label>
            <input type="text" name="new_add1" value="<?php echo $db_add1; ?>" class="col-4">
        </div>
        <div id="two" class="row">
            <label class="col-2">Subdivision/Village</label>
            <input type="text" name="new_add2" value="<?php echo $db_add2; ?>" class="col-1">
            <label class="col-3">Barangay</label>
            <input type="text" name="new_brgy" value="<?php echo $db_brgy; ?>" class="col-4">
        </div>
        <div id="two" class="row">
            <label class="col-2">City</label>
            <input type="text" name="new_city" value="<?php echo $db_city; ?>" class="col-1">
        </div>
        <div id="two" class="row">
            <label class="col-2">State</label>
            <input type="text" name="new_state" value="<?php echo $db_state; ?>" class="col-1">

        </div>
        <div id="two" class="row">
            <label class="col-2">Zip</label>
            <input type="text" name="new_zip" value="<?php echo $db_zip; ?>" class="col-1">
        </div>
        <div class="row">
            <input type="submit" value="Update" class="col-5">
        </div>
        <br><hr><br>
    </form>
    </body>
</html>