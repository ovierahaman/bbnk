<?php
   $link = mysqli_connect("localhost", "root", "", "bbnk");
/* Attempt to connect to MySQL database */
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>