<?php
$con =mysqli_connect('localhost','root');
mysqli_select_db($con,'test1');
if($con){
 echo"connected";

}else{
 echo"not connected";
}
$email = $_GET['email'];
$q = "delete from registration WHERE email = '$email' ";
mysqli_query($con,$q);
header('location:userdata.php');
?>