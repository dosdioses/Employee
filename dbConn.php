<?php

$db = mysqli_connect("localhost","root","","tbl_employee");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>