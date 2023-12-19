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
    // Check if the form is submitted
    if(isset($_POST['submit'])) {
        // Retrieve form data
        $UName = $_POST['UName'];
        $email_add = $_POST['email_add'];
        @$Ratings = $_POST['Ratings'];
        @$Comments = $_POST['Comments'];
        
             
            $sql = "INSERT INTO feedback (UName, email_add, Ratings, Comments) VALUES ('$UName', '$email_add', '$Ratings', '$Comments')";
            
            if ($conn->query($sql) === TRUE) {
                // Display a success message
                echo "<p>Thank you for your feedback!</p>";
                header('Location: index.html');
            }
    
            else {
                // Display an error message
                echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
            }
        
    }

        
    
    ?> 


