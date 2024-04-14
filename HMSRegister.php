<?php

    $fullname = $phone = $email = $add1 = $add2 = $brgy = $city = $state = $zip =  "";

    $booking_id2 = $room = $type = $beds = $adult = $child = $fare = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $add1 = $_POST["add1"];
    $add2 = $_POST["add2"];
    $brgy = $_POST["brgy"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zip = $_POST["zip"];
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $booking_id2 = $_POST["booking_id2"];
        $room = $_POST["room"];
        $type = $_POST["type"];
        $beds = $_POST["beds"];
        $adult = $_POST["adult"];
        $child = $_POST["child"];
        $fare = $_POST["fare"];
        }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Hotel Management System</title>
        <link rel="stylesheet" href="style.css"/>
        
    </head>

    <body>
        <form method="POST" action="<?php htmlspecialchars("SELF_PHP"); ?>">
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
                <input type="text" name="fullname" value="<?php echo $fullname; ?>" class="col-1">
                <label class="col-3">Phone Number</label>
                <input type="text" name="phone" value="<?php echo $phone; ?>" class="col-4"> <br>
            </div>
            <div id="two" class="row">
                <label class="col-2">Email</label>
                <input type="text" name="email" value="<?php echo $email; ?>" class="col-1">
                <label class="col-3">House No./Street</label>
                <input type="text" name="add1" value="<?php echo $add1; ?>" class="col-4">
            </div>
            <div id="two" class="row">
                <label class="col-2">Subdivision/Village</label>
                <input type="text" name="add2" value="<?php echo $add2; ?>" class="col-1">
                <label class="col-3">Barangay</label>
                <input type="text" name="brgy" value="<?php echo $brgy; ?>" class="col-4">
            </div>
            <div id="two" class="row">
                <label class="col-2">City</label>
                <input type="text" name="city" value="<?php echo $city; ?>" class="col-1">
            </div>
            <div id="two" class="row">
                <label class="col-2">State</label>
                <input type="text" name="state" value="<?php echo $state; ?>" class="col-1">

            </div>
            <div id="two" class="row">
                <label class="col-2">Zip</label>
                <input type="text" name="zip" value="<?php echo $zip; ?>" class="col-1">
            </div>
            <div class="row">
                <input type="submit" value="Submit" class="col-5">
            </div>
            <br><hr><br>

            <div>
            <h3>Room Form</h3>
            </div>
            <div id="two" class="row">
                <label class="col-2">Booking ID</label>
                <input type="text" name="booking_id2" value="<?php echo $booking_id2; ?>" class="col-1">
            </div>
            <div id="two" class="row">
                <label class="col-2">Room No.</label>
                <input type="text" name="room" value="<?php echo $room; ?>" class="col-1">
            </div>
            <div id="two" class="row">
                <label class="col-2">Room Type</label>
                <input type="text" name="type" value="<?php echo $type; ?>" class="col-1">
            </div>
            <div id="two" class="row">
                <label class="col-2">Beds</label>
                <input type="text" name="beds" value="<?php echo $beds; ?>" class="col-1">
            </div>
            <div id="two" class="row">
                <label class="col-2">Max Adult</label>
                <input type="text" name="adult" value="<?php echo $adult; ?>" class="col-1">
            </div>
            <div id="two" class="row">
                <label class="col-2">Max Children</label>
                <input type="text" name="child" value="<?php echo $child; ?>" class="col-1">
            </div>
            <div id="two" class="row">
                <label class="col-2">Fare</label>
                <input type="text" name="fare" value="<?php echo $fare; ?>" class="col-1">
            </div>
            <div class="row">
                <input type="submit" value="Submit" class="col-5">
            </div>
            <br><hr><br>
        </form>
    </body>
</html>

<?php

include("HMSconnection.php");

    if ($fullname && $phone && $email && $add1 && $add2 && $brgy && $city && $state && $zip) {
        $query = mysqli_query($HMSconnection, "INSERT INTO hms(fullname, phone, email, add1, add2, brgy, city, state, zip) VALUES('$fullname','$phone','$email','$add1','$add2','$brgy','$city','$state','$zip')");

        echo "<script language='javascript'>alert('New Record has been inserted!')</script>";
        echo "<script>window.location.href='HMSRegister.php';</script>";
    }

    $view_query = mysqli_query($HMSconnection, "SELECT * FROM hms");

    echo "<div style='overflow-y: auto; height: 300px;'>";
    echo "<table>";
    echo "<thead style='position: sticky; top: 0; background-color: #BC544B;'>";
    echo "<tr>
            <th>Booking ID</th>
            <th>Full Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>House No./Street</th>
            <th>Subdivision/Village</th>
            <th>Barangay</th>
            <th>City</th>
            <th>State</th>
            <th>Zip Code</th>

            <th>Action</th>

            </tr>";
    echo "</thead>";

    while($row = mysqli_fetch_assoc($view_query)){

        $booking_id = $row["booking_id"];
        $db_fullname = $row["fullname"];
        $db_phone = $row["phone"];
        $db_email = $row["email"];
        $db_add1 = $row["add1"];
        $db_add2 = $row["add2"];
        $db_brgy = $row["brgy"];
        $db_city = $row["city"];
        $db_state = $row["state"];
        $db_zip = $row["zip"];

        echo "<tbody>";
        echo "<tr>
            <td>$booking_id</td>
            <td>$db_fullname</td>
            <td>$db_phone</td>
            <td>$db_email</td>
            <td>$db_add1</td>
            <td>$db_add2</td>
            <td>$db_brgy</td>
            <td>$db_city</td>
            <td>$db_state</td>
            <td>$db_zip</td>

            <td>
            <a class='button12' href='HMSEdit.php?booking_id=$booking_id'>Edit</a>
            <a class='button12' href='HMSConfirmDelete.php?booking_id=$booking_id'>Delete</a>
            </td>
            </tr>";
        echo "</tbody>";
    }
?>

<?php

include("HMSconnection.php");

    if ($booking_id2 && $room && $type && $beds && $adult && $child && $fare) {

        $query = mysqli_query($HMSconnection, "INSERT INTO hmsroom(booking_id, room, type, beds, adult, child, fare) VALUES('$booking_id2','$room','$type','$beds','$adult','$child','$fare')");
    
        echo "<script language='javascript'>alert('New Record has been inserted!')</script>";
        echo "<script>window.location.href='HMSRegister.php';</script>";
    }

    $view_query = mysqli_query($HMSconnection, "SELECT * FROM hmsroom");

    echo "</table>";
    echo "</div><br><hr><br>";

    echo "<div style='overflow-y: auto; height: 300px;'>";
    echo "<table>";
    echo "<thead style='position: sticky; top: 0; background-color: #BC544B;'>";
    echo "<tr>
            <th>Room ID</th>
            <th>Booking ID</th>
            <th>Room Number</th>
            <th>Room Type</th>
            <th>Beds</th>
            <th>Max Adults</th>
            <th>Max Children</th>
            <th>Fare</th>
            <th>Action</th>
            </tr>";
    echo "</thead>";

    while($row = mysqli_fetch_assoc($view_query)){

        $roomid = $row["roomid"];
        $booking_id2 = $row["booking_id"];
        $db_room = $row["room"];
        $db_type = $row["type"];
        $db_beds = $row["beds"];
        $db_adult = $row["adult"];
        $db_child = $row["child"];
        $db_fare = $row["fare"];

        echo "<tbody>";
        echo "<tr>
            <td>$roomid</td>
            <td>$booking_id2</td>
            <td>$db_room</td>
            <td>$db_type</td>
            <td>$db_beds</td>
            <td>$db_adult</td>
            <td>$db_child</td>
            <td>$db_fare</td>

            <td>
            <a class='button12' href='HMSRoomEdit.php?roomid=$roomid'>Edit</a>
            <a class='button12' href='HMSRoomConfirmDelete.php?roomid=$roomid'>Delete</a>
            </td>
            </tr>";
        echo "</tbody>";
    }
?>

