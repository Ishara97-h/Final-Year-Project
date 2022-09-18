<?php

include "db_connect.php"; // Using database connection file here

$reg_id = $_GET['reg_id']; // get id through query string

$del = mysqli_query($db,"delete from patients where reg_id = '$reg_id'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:patient_details.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>