<?php
$con =mysqli_connect('localhost','root');
mysqli_select_db($con,'test1');
if($con){
 echo"<script>alert('Connected')</script>";

}else{
 echo"<script>alert('Not Connected')</script>";
}
$EID = $_GET['EID'];
$q = "DELETE from event WHERE EID = '$EID' ";
mysqli_query($con,$q);
header('location:eventadminshow.php');
?>