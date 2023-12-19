
<html>
    <head>
        <title>EVENT INFORMATION</title>

     <html><head>
    <title>User page</title>
</head>
    <!--?php
session_start();
if($_SESSION['email']){

echo"WellCome USEr" .$_SESSION['email'];

}else{
    header('location:eventdmin.php');
}
?-->
<!-- <a href='logout.php'>Logout</a> -->


<!-- <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel= "stylesheet" href="admin style.css"-->

    <!--font popping-->
    <!-- <link ref="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->
    <!--bootstrap-->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    navbar -->
    <!-- <nav class="navbar">
        <h4>User Dashboard</h4>
        <div class="profile">
            <span class="fas fa-search"></span>
            <img class="profile-image" src="https://fastly.picsum.photos/id/818/200/200.jpg?hmac=gfhJZngz3JDsSmE1obNFY5OeAQBVsJLED2VkwuGsC-o">
        
        <p class="profile-name">Vijay Harsha Pratyancha</p>
    </div> 
</nav> -->
<!--sidebar-->

    <!-- <input type="checkbox" id="toggle">
    <label class="side-toggle" for="toggle"> <span class="fas fa-bars"></span>
    </label>
    <div class="sidebar">
    <div class="sidebar-menu">
        <span class="fas fa-clipboard-list"></span><a class=""href="index.html"></a> <p>Home</p>
        
        </div> 

<div class="sidebar-menu">
    <span class="fas fa-users">
</span><a class="" href="loginuserinfo.php"><p>Users-info</p></a>
</div> 

<div class="sidebar-menu">
    <span class="fas fa-credit-card">
</span><a class="" href="eventuserinfo.php"><p>Event-info</p> </a></div>
<div class="sidebar-menu">
    <span class="fas fa-handshake">
</span><p>Services</p>

</div><div class="sidebar-menu">
    <span class="fas fa-credit-card">
</span><p>Booking</p>
</div>

<div class="sidebar-menu">
    <span class="fas fa-envelope">
</span> <a class="" href="feedback.php"><p>Feedback</p></a>
</div>
<div class="sidebar-menu">
    <span class="fas fa-sign-out-alt">
</span><a href="signout.php"><p>Signout</p></a>
</div>
    </div> --> 




    <!--div>
<div class="col-div-3">
    <div class="box">
        <p>5 <br/><span>Events</span></p>
        <i class="fa fa-users box-icon"></i>
    </div>
</div><div class="col-div-3">
    <div class="box">
        <p>5 <br/><span>Users</span></p>
        <i class="fa fa-users box-icon"></i>
    </div>
</div><div class="col-div-3">
    <div class="box">
        <p>5 <br/><span>Booking</span></p>
        <i class="fa fa-users box-icon"></i>
    </div>
</div>
<div class="clearfix"></div>
    </div>
main content-->


<scripts src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></scripts>
</body>
</html>

  
        
        <?php
session_start();
if(isset($_SESSION['Eid'])){
    $Eid=$_SESSION['Eid'];
echo $Eid;
}    


// // Check if the user is logged in
//   if (!isset($_SESSION["email"])) {
// // //     // User is not logged in, redirect to the login page
// // //     header("Location: login.php");
//       exit();
//   }

// // User is logged in, retrieve the email from the session
 echo"".$email= $_SESSION['email'];
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

$query ="SELECT *FROM event WHERE Eid=1";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // User data found, display the profile information
    $row = mysqli_fetch_assoc($result);
    @$Eid=$_POST['Eid'];
    @$Ename=$_POST['Ename'];
    @$Mode=$_POST['Mode'];
    @$Date=$_POST['Date'];
    @$Guest=$_POST['Guest'];
    @$budget=$_POST['budget'];
    @$menu=$_POST['menu'];
    @$gardens=$_POST['gardens'];
    @$hotels=$_POST['hotels'];
    @$lounge=$_POST['lounge'];
    @$soundp=$_POST['soundp'];
    @$photo=$_POST['photo'];
    @$deco=$_POST['deco'];
    @$Description=$_REQUEST['Description'];

?>


    // Add more user data fields if needed
<center style="padding: top 100%;"><?php
    echo "$email!<br>";
    echo "Profile Details:<br>";
    echo "EventNAME: $Ename<br>";
    echo "Mode: $Mode<br>";

    echo "Date of Event, $Date!<br>";
    echo "how many Guest: $Guest<br>";
    echo "BUdget:$budget<br>";
    echo "Menu: $menu!<br>";

    echo "Gargedns: $gardens<br>";
    echo "Hotels: $hotels<br>";
    echo "Welcome, $lounge!<br>";

    echo "Sound Syastem: $soundp<br>";
    echo "Photo Shoot: $photo<br>";
    echo "Decoration management: $soundp<br>";
    echo "Description of your event: $Description<br>";
    ?>
</center>
<?php
    // Display additional user data fields as needed
} else {
    // User data not found
    echo "User data not found.";
}

// Close the database connection
mysqli_close($conn);

?>