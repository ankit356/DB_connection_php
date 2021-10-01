<?php
include('db_connection.php');

// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id=1";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);