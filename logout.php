<?php
include 'includes/connection.php';



session_start();
$update_msg = mysqli_query($con, "UPDATE users SET active='Offline' WHERE user_name='$user_name'");
session_destroy();




header("location:index.php");

?>