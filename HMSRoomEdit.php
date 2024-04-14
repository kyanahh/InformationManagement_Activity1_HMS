<?php 

$roomid = $_REQUEST["roomid"];

include("HMSconnection.php");

$get_record = mysqli_query($HMSconnection, "SELECT * FROM hmsroom WHERE roomid='$roomid'");

while($row_edit = mysqli_fetch_assoc($get_record)){

    $roomid = $row_edit["roomid"];
    $booking_id2 = $row_edit["booking_id"];
    $db_room = $row_edit["room"];
    $db_type = $row_edit["type"];
    $db_beds = $row_edit["beds"];
    $db_adult = $row_edit["adult"];
    $db_child = $row_edit["child"];
    $db_fare = $row_edit["fare"];

}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Hotel Management System</title>
        <link rel="stylesheet" href="style.css"/>
            
    </head>
    <body>
    <form method="POST" action="HMSRoomUpdate.php">
        <div>
            <h1 class="for-h1">Hotel Management System</h1>
        </div>

        <div id="one">
            <h2>Customer Registration Form</h2>
        </div>
        <br>
        <br>
            <div>
            <h3>Room Form</h3>
            </div>
            <div id="two" class="row">
                <input type="hidden" name="roomid" value="<?php echo $roomid; ?>">
                <label class="col-2">Booking ID</label>
                <input type="text" name="booking_id2" value="<?php echo $booking_id2; ?>" class="col-1">
            </div>
            <div id="two" class="row">
                <label class="col-2">Room No.</label>
                <input type="text" name="new_room" value="<?php echo $db_room; ?>" class="col-1">
            </div>
            <div id="two" class="row">
                <label class="col-2">Room Type</label>
                <input type="text" name="new_type" value="<?php echo $db_type; ?>" class="col-1">
            </div>
            <div id="two" class="row">
                <label class="col-2">Beds</label>
                <input type="text" name="new_beds" value="<?php echo $db_beds; ?>" class="col-1">
            </div>
            <div id="two" class="row">
                <label class="col-2">Max Adult</label>
                <input type="text" name="new_adult" value="<?php echo $db_adult; ?>" class="col-1">
            </div>
            <div id="two" class="row">
                <label class="col-2">Max Children</label>
                <input type="text" name="new_child" value="<?php echo $db_child; ?>" class="col-1">
            </div>
            <div id="two" class="row">
                <label class="col-2">Fare</label>
                <input type="text" name="new_fare" value="<?php echo $db_fare; ?>" class="col-1">
            </div>
            <div class="row">
                <input type="submit" value="Submit" class="col-5">
            </div>
            <br><hr><br>
    </form>
    </body>
</html>