<?php
$servername="database-2.crehlabvfzmg.ap-south-1.rds.amazonaws.com";
$username="admin";
$password="123456789";
$databasename="test";

$conn = new mysqli($servername,$username,$password,$databasename);

if($conn)
{
        //echo "Connection is ok";
     //die("Connection failed:" . mysqli_connect_error());
}
else
{
        echo "Connection Failed".mysqli_connect_error();
}
?>
