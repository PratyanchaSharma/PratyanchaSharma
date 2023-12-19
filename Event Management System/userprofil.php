
<html>
  
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>   
</head>
</html>
    <?php
session_start();
    include('userdashboard.php');
  
echo"Wellcome ".$email="email";
// Check if the user is logged in
//if (!isset($_SESSION["email"])) {
    // session_start();
    // if(session_status===PHP_SESSION_NONE){
    //       session_start();
        //   }

    // User is not logged in, redirect to the login page
    //header("Location: register2.html");
   // exit();
//}

// User is logged in, retrieve the username from the session


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

// Fetch user data from the database based on username

 //if(isset($_SESSION['email'])){
 //$email=$_SESSION['email'];
 
 //}
 $query = "SELECT * FROM registration WHERE email = $email";
 $result =mysqli_query($conn,$query);

if (mysqli_num_rows($result) > 0) {
    // User data found, display the profile information
    $row = mysqli_fetch_assoc($result);
    $email = $row["email"];
    $first_name=$row['first_name'];
    $last_name=$row['last_name'];
    $password=$row['password'];
    $number=$row['number'];
    // Add more user data fields if needed

     
    ?>
    <div class="container">
    <div class="col-lg-12">
      
      <h1 class="text-warning text-center"> Welcome<?php echo " $first_name";?></h1><br>
      <h1 class="text-warning text-center">Profile Details</h1><br>
    <table  style="background-color:white;"class="table table-striped table-hover table-bordered">
          <tr>
            <th>Email</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Password</th>
            <th>Number</th>
          </tr>
    <tr>
   <td><?php echo " $email";?></td>
   
   <td> <?php echo " $first_name";?></td>
   <td> <?php echo " $last_name";?></td>
   <td><?php echo"$password";?></td>
   <td> <?PHP echo"$number";?></td>
</tr>
</table>
</diV>
</div>
    <?php
    // Display additional user data fields as needed
} else {
    // User data not found
    echo "User data not found.";
}

// Close the database connection
mysqli_close($conn);
?>

<?php
// session_start();
// //sesssion_destroy();
// // Check if the user is logged in
// if (!isset($_SESSION["email"])) {
//     // User is not logged in, redirect to the login page
//     header("");
//     exit();
// }

// // User is logged in, retrieve the email from the session
// $email = $_SESSION["email"];

// // Connect to the database
// $host = "localhost"; // Modify if your database is on a different host
// $db_username = "root"; // Modify with your database username
// $db_password = ""; // Modify with your database password
// $db_name = "test1"; // Modify with your database name

// $conn = mysqli_connect($host, $db_username, $db_password, $db_name);

// // Check if the connection was successful
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// // Fetch user data from the database based on email
// $query = "SELECT * FROM registration WHERE email = '$email'";
// $result = mysqli_query($conn, $query);

// if (mysqli_num_rows($result) > 0) {
//     // User data found, display the profile information
//     $row = mysqli_fetch_assoc($result);
//     $username = $row["username"];
//     // Add more user data fields if needed

//     echo "Welcome, $username!<br>";
//     echo "Profile Details:<br>";
//     echo "Username: $username<br>";
//     echo "Email: $email<br>";
//     // Display additional user data fields as needed
// } else {
//     // User data not found
//     echo "User data not found.";
// }

// // Close the database connection
// mysqli_close($conn);
// ?>



<!--<html>
    <head>
        <title>Userinfomation</title>
       
        
        ?php
session_start();

// // Check if the user is logged in
 if (!isset($_SESSION["email"])) {
//     // User is not logged in, redirect to the login page
//     header("Location: login.php");
     exit();
 }

// // User is logged in, retrieve the email from the session
 $email = $_SESSION["email"];

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
$query = "SELECT * FROM registration WHERE email = '$email'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // User data found, display the profile information
    $row = mysqli_fetch_assoc($result);
    $email = $row["email"];
    // Add more user data fields if needed

    echo "Welcome, $first_name!<br>";
    echo "Profile Details:<br>";
    echo "Username: $first_name<br>";
    echo "Email: $email<br>";
    // Display additional user data fields as needed
} else {
    // User data not found
    echo "User data not found.";
}

// Close the database connection
mysqli_close($conn);
?>-->
        

<!--?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["email"])) {
    // User is not logged in, redirect to the login page
    //header("Location: register2.php");
    exit();
}

// User is logged in, retrieve the username from the session
$email = $_SESSION["email"];

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

// Fetch user data from the database based on username

$query = "SELECT * FROM registration WHERE email = '$email'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // User data found, display the profile information
    $row = mysqli_fetch_assoc($result);
    
    
            $first_name = $row["first_name"];
            $last_name = $row["last_name"];
            $email = $row["email"];
            $number = $row["number"];
            $password = $row["password"];

            
    // Add more user data fields if needed <tr>
            
                   
                    echo " wellcome,$first_name"; 
                    echo "$last_name";
                    echo " $email";
                    echo "$number";
                    echo"$password"; 
    

    // Display additional user data fields as needed
    
} else {
    // User data not found
    echo "User data not found.";
}

// Close the database connection
mysqli_close($conn);
?>
 </table>
      </div>
    </div>
  </center>
  </body>


</html>-->