<?php
include('db_connection.php');

$sql = "UPDATE MyGuests SET lastname='Srivastava' WHERE id=3";
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>