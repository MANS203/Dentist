<?php
//connect to mysql database named 'hospital'
$coonn =mysqli_connect('localhost','root','','hospital');
 if(!$coonn){
    die('error'.mysqli_connect_error());
 }
?>
