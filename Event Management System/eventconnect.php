<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$db='test1';
$conn=mysqli_connect($dbhost,$dbuser,"",$db);
if($conn === false){
    die("ERROR: Could not connect. ". mysqli_connect_error());
}
session_start();
if(isset($_POST['submit'])) {
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
$sql = " INSERT INTO event(Ename,Mode,EDate,Guest,budget,menu,Venue,soundp,photo,deco,Description) VALUES ('$Ename','$Mode','$EDate','$Guest','$budget','$menu','$Venue','$soundp','$photo','$deco','$Description')";

		
if ($conn->query($sql) === TRUE) {
    $_SESSION["email"]=$email;
			echo "<script>alert('Event created successfully!..')</script>";
            header('Location:booking.php');
        }
else{
    header('Location:register.html');
    echo "<script>alert('Please login First')</script>"
        . mysqli_error($conn);
}

// Close connection
// mysqli_close($conn);
}
?>
