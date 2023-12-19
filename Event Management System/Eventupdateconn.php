 

<?php
$con =mysqli_connect('localhost','root');
mysqli_select_db($con,'test1');
if($con){
 echo"connected";

}else{
 echo"not connected";
}
if(isset($_POST['submit'])){
    $EID=$_POST['EID'] ;  
    $Ename=$_POST['Ename'];
    $Mode=$_POST['Mode'];
    $EDate=$_POST['EDate'];
    $Guest=$_POST['Guest'];
    $budget=$_POST['budget'];
    $menu=$_POST['menu'];
     $Venue=$_POST['Venue'];
     $soundp=$_POST['soundp'];
     $photo=$_POST['photo'];
     $deco=$_POST['deco'];
     $Description=$_POST['Description'];


     $q= " UPDATE event SET Ename='$Ename', Mode='$Mode', EDate='$EDate', Guest='$Guest', budget='$budget',menu='$menu', Venue='$Venue', soundp='$soundp', photo='$photo', deco='$deco', 
     Description='$Description'  WHERE EID='$EID' ";

$query=mysqli_query($con,$q);
header('location:eventadminshow.php');
}
?>