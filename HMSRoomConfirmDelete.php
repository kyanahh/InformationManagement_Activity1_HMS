<?php

$roomid = $_REQUEST["roomid"];

include("HMSconnection.php");

$query_delete = mysqli_query($HMSconnection, "SELECT * FROM hmsroom WHERE roomid='$roomid'");

while($row_delete = mysqli_fetch_assoc($query_delete)){

    $roomid = $row_delete["roomid"];
    $booking_id = $row_delete["booking_id"];

    $db_room = $row_delete["room"];
    $db_type = $row_delete["type"];
    $db_beds = $row_delete["beds"];
    $db_adult = $row_delete["adult"];
    $db_child = $row_delete["child"];

}

?>

<!DOCTYPE html>
<html>
    <body>
        <form method="POST" action="HMSRoomDelete.php">
            <link rel="stylesheet" href="style.css"/>
            <div class="let">
            <input type="hidden" name="roomid" value="<?php echo $roomid; ?>"><br><br>
            <label class="del">Are you sure you want to permanently delete this item?</label>
            </div>
            <div class="del">
            <input class="but" type="submit" value="Yes"> 
            <a class="but" href="HMSRegister.php">No</a>
            </div>
            
        </form>
    </body>
</html>