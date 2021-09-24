<?php
$con=mysqli_connect("localhost","root","","ju_econnect_db") or die("Server Error");
if($con==true)
{
    //echo "Success";
}
else
{
    mysql_close($con);
}
?>