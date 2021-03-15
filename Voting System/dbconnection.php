<?php
$con = mysqli_connect("localhost", "root", "","isc_votingsystem");

if(mysqli_connect_errno())
{
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
    
}
?>