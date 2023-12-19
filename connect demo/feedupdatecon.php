<?php
$con =mysqli_connect('localhost','root');
mysqli_select_db($con,'test1');
if($con){
 //echo"connected";

}else{
 echo"not connected";
}
if(isset($_POST['submit'])){

$UName = $_POST['UName'];
$email_add = $_POST['email_add'];
$Comments = $_POST['Comments'];
$Ratings = $_POST['Ratings'];
// $s="SELECT * FROM feedback WHERE email_add='$email_add' ";
// $query=mysqli_query($con,$s);
// header('location:feedupdate.php');
$q=" UPDATE feedback SET email_add='$email_add', UName='$UName',Comments= '$Comments',Ratings='$Ratings' WHERE email_add='$email_add' ";

$query=mysqli_query($con,$q);
header('location:feedbackadminshow.php');
}
?>
