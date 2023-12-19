<html>
    <?php
session_start();
// $_SESSION['email'] = $row['email'];
//                     $_SESSION['role'] = 'user';
//                     $_SESSION['email']=$email;
//                     $_SESSION['Eid']=$Eid;
if($_SESSION['email']){

echo"WellCome USEr" .$_SESSION['email'];

}else{
    header('location:eventdmin.php');
}
?>
<!-- <a href='logout.php'>Logout</a> -->


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel= "stylesheet" href="admin style.css">

    <!--font popping-->
    <link ref="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!--bootstrap-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!--navbar-->
    <nav class="navbar">
        <h4>User Dashboard</h4>
        <div class="profile">
            
            <img class="profile-image" src="profile.png">
        
        <p>My Profile</p>
    </div> 
</nav>
<!--sidebar-->

    <input type="checkbox" id="toggle">
    <label class="side-toggle" for="toggle"> <span class="fas fa-bars"></span>
    </label>
    <div class="sidebar">
    <div class="sidebar-menu">
        <span class="fas fa-clipboard-list"></span><a href="index.html"><p>Home</p></a>
        
        </div> 
 
<div class="sidebar-menu">
    <span class="fas fa-sign-out-alt">
</span><a href="logout.php"><p>Logout</p></a>
</div>
<div class="sidebar-menu">
    <span class="fas fa-sign-out-alt">
</span><a href="signout1.php"><p>Signout</p></a>
</div>
    </div>
    <div>
<div class="col-div-3">
    <div class="box">
        
        <p style="color:white;"><a href="eventuserinfo.php"> <br/><span>Events</span></p>
        <i style="color:white;" class="fa fa-handshake box-icon"></i>
    </div>
</div><div class="col-div-3">
    <div class="box">
        <p style="color:white;"><a href="feedbackuser.php"> <br/><span>Feedback</span></a></p>
        <i  style="color:white;" class="fa fa-envelope box-icon"></i>
    </div>
</div><div class="col-div-3">
    <div class="box">
        <p style="color:white;"><a href="userprofil.php"> <br/><span>Persnol-Info</span></a></p>
        <i style="color:white;" class = "fa fa-users box-icon"></i>
    </div>
</div>
<div class="clearfix"></div>
    </div>
<!--main content-->
<br>
<div>

<h3 style="color:black;"> Persnol-Info</h3></div><br>

<scripts src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></scripts>
</body>
</html>
<?php
