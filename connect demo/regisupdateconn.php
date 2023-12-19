<?php
$con =mysqli_connect('localhost','root');
mysqli_select_db($con,'test1');
if($con){
 //echo"connected";

}else{
 echo"not connected";
}
if(isset($_POST['submit'])){

@$first_name = $_POST['first_name'];
@$last_name = $_POST['last_name'];
//$dob = $_POST['dob'];

@$email = $_POST['email'];

@$number = $_POST['number'];

$q=" UPDATE registration SET first_name='$first_name', last_name='$last_name', email='$email', 
number = '$number', WHERE email='$email' " ;

$query=mysqli_query($con,$q);
header('location:regisadminshow.php');
}
?>