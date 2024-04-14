<?php

$booking_id = $_REQUEST["booking_id"];

include("HMSconnection.php");

$query_delete = mysqli_query($HMSconnection, "SELECT * FROM hms WHERE booking_id='$booking_id'");

while($row_delete = mysqli_fetch_assoc($query_delete)){

    $booking_id = $row_delete["booking_id"];

    $db_fullname = $row_delete["fullname"];
    $db_phone = $row_delete["phone"];
    $db_email = $row_delete["email"];
    $db_add1 = $row_delete["add1"];
    $db_add2 = $row_delete["add2"];
    $db_brgy = $row_delete["brgy"];
    $db_city = $row_delete["city"];
    $db_state = $row_delete["state"];
    $db_zip = $row_delete["zip"];

}

?>

<!DOCTYPE html>
<html>
    <body>
        <form method="POST" action="HMSDelete.php">
            <link rel="stylesheet" href="style.css"/>
            <div class="let">
            <input type="hidden" name="booking_id" value="<?php echo $booking_id; ?>"><br><br>
            <label class="del">Are you sure you want to permanently delete this item?</label>
            </div>
            <div class="del">
            <input class="but" type="submit" value="Yes"> 
            <a class="but" href="HMSRegister.php">No</a>
            </div>
            
        </form>
    </body>
</html>