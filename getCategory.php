<?php
include("./connection.php");

$getCategory = "SELECT * FROM `category` WHERE 1";

$query = mysqli_query($conn , $getCategory);


