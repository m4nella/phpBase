<?php
include 'connect.php';
include'checkLogin.php';

$sq="delete from reg where id='$_SESSION[id]'";
mysqli_query($con,$sq);
header('location:add_district.php');
?>