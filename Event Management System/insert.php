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
		$first_name = ucwords($_POST['first_name']);
		$last_name = ucwords($_POST['last_name']);
		$email = $_POST['email'];
        $password =$_POST['password'];
        $number = $_POST['number'];
		
		
		$sql = "INSERT INTO registration (first_name,
        last_name,email,password,number) VALUES ('$first_name',
			'$last_name','$email','$password','$number')" ;
		
		if(mysqli_query($conn, $sql)){
			echo "<script>alert('Registration successful!..')</script>";
header('Location:index.html');
			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		?>
	