<!DOCTYPE html>
<html>

<head>
	<title>Registration successful</title>
</head>

<body>
	<center>
		<?php

$dbhost='localhost';
$dbuser='root';
$dbpass='';
$db='test1';
		// $conn = mysqli_connect("localhost", "root", "", "test1");
        $conn=mysqli_connect($dbhost,$dbuser,"",$db);
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
    if (isset($_POST['submit'])) {
		$Ename = $_POST['Ename'];
		$Cname = $_POST['Cname'];
		$Venue = $_POST['Venue'];
        $Bdate = $_POST['Bdate'];
    
		$sql = "INSERT INTO booking(Ename,Cname,Venue, Bdate) VALUES ('$Ename',
			'$Cname','$Venue','$Bdate')";
		
		 if(mysqli_query($conn,$sql)){
			      echo  " <script>alert('Booking successful');</script>";
			
			header("Location: userdashboard.php");
				} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}

    }
		?>
	</center>
</body>

</html>
