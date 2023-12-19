<?php

// include('userdashboard.php');
session_start();
echo"wellcome : ".$email="email";
// // Check if the user is logged in
   if (!isset($_SESSION['email'])) {
// // //     // User is not logged in, redirect to the login page
// // //     header("Location: login.php");
//      exit();
   }

// // User is logged in, retrieve the email from the session
 //echo"wellcome".$email= $_SESSION['email'];

// Connect to the database
$host = "localhost"; // Modify if your database is on a different host
$db_username = "root"; // Modify with your database username
$db_password = ""; // Modify with your database password
$db_name = "test1"; // Modify with your database name

$conn = mysqli_connect($host, $db_username, $db_password, $db_name);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Fetch user data from the database based on email
//$query = "SELECT * FROM events WHERE Eid = '$Eid'";
 $query="SELECT *FROM registration JOIN feedback ON registration.email= feedback.email_add";
 // $query ="SELECT  * FROM feedback WHERE email_add='$email_add' ";
  $result = mysqli_query($conn,$query);

if (mysqli_num_rows($result) > 0) {
    // User data found, display the profile information
    $row = mysqli_fetch_assoc($result);
    $email_add=$row['email_add'];
    $UName=$row['UName'];
    $Comments=$row['Comments'];
    $Ratings=$row['Ratings'];
    //@$first_name=$row['first_name'];
     // $Guest=$_POST['Guest'];
    // $first_name=$_POST['first_name'];
    // $menu=$_POST['menu'];
    // $gardens=$_POST['gardens'];
    // $hotels=$_POST['hotels'];
    // $lounge=$_POST['lounge'];
    // $soundp=$_POST['soundp'];
    // $photo=$_POST['photo'];
    // $deco=$_POST['deco'];
    // $Description=$_REQUEST['Description'];
    // Add more user data fields if needed


    ?>
    <div class="container">
    <div class="col-lg-12">
      <br><br>
      <h1 class="text-warning text-center"> Wellcome<?php echo"$UName";?></h1><br>
      <h1 class="text-warning text-center">User Feedback Information</h1><br>
    <table class="table table-striped table-hover table-bordered">
          <tr>
            <th>User Name</th>
            <th>Email</th>
            <th>Comments</th>
            <th>Ratings</th>
            <th>   </th>
          </tr>
    <tr>
   <td><?php echo " $UName";?></td>
   
   <td> <?php echo " $email_add";?></td>
   <td> <?php echo " $Comments";?></td>
   <td><?php echo"$Ratings";?></td>
   
</tr>
</table>
</diV>
</div>
    <?php
    // echo "Welcome, $email!<br>";
    // echo "Profile Details:<br>";
    // echo "First NAME: $email_add<br>";
    // echo "Last NAME: $UName<br>";
    // echo "number: $Ratings<br>";
    // echo "First NAME: $Comments<br>";
    //  echo "Mode: <br>";

    // echo "Date of Event, $Date!<br>";
    // echo "how many Guest: $Guest<br>";
    // echo "BUdget:$budget<br>";
    // echo "Menu, $menu!<br>";

    // echo "Gargedns: $gardens<br>";
    // echo "Hotels: $hotels<br>";
    // echo "Welcome, $lounge!<br>";

    // echo "Sound Syastem: $soundp<br>";
    // echo "Photo Shoot: $email<br>";
    // echo "Decoration management: $soundp<br>";
    // echo "Description of your event: $Description<br>";


    // Display additional user data fields as needed
} else {
    // User data not found
    echo "User data not found.";
}

// Close the database connection
mysqli_close($conn);
?>