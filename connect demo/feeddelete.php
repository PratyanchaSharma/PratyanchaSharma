<?php
$con =mysqli_connect('localhost','root');
mysqli_select_db($con,'test1');
if($con){
 echo"connected";

}else{
 echo"not connected";
}
$email_add = $_GET['email_add'];
$q = "delete from feedback WHERE email_add = '$email_add' ";
mysqli_query($con,$q);
header('location:feedbackadminshow.php');
?>