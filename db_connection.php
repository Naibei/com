<?php
//...file to connect to database
$host="localhost";
$user="root";
$db_password="";
$db_name="ews_system";
// Creating Connection to dbase
$conn=mysqli_connect($host,$user,$db_password,$db_name);
// Checking the Connection
if (!$conn){
    die("Connection failed: ".mysqli_connect_error());
}else{
    echo "Connection was successful";
}
