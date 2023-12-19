<?php
$con =mysqli_connect('localhost','root');
mysqli_select_db($con,'test1');
if($con){
 echo"connected";

}else{
 echo"not connected";
}
$Bdate = $_GET['Bdate'];
$q = "DELETE from booking WHERE Bdate = '$Bdate' ";
mysqli_query($con,$q);
header('location:bookingdelete.php');
?>