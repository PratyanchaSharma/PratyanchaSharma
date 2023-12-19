
<html><head>
    <title>Admin page</title>
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


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
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
        <h4> Hello Admin !</h4>
        <div class="profile">
            
            <img class="profile-image" src="profile.png">
        
        <p class="profile-name">Admin</p>
    </div> 
</nav>
<!--sidebar-->

    <input type="checkbox" id="toggle">
    <label class="side-toggle" for="toggle"> <span class="fas fa-bars"></span>
    </label>
    <div class="sidebar">
    <div class="sidebar-menu">
        <span class="fas fa-clipboard-list"></span><a class="add"href="index.html"> <p style="color:lightgreen; font-size:16">Home</p></a>
        
        </div> 

<div class="sidebar-menu">
    <span class="fas fa-users">
</span><a class="add" href="regisadminshow.php"><p style="color:lightgreen;">Users</p></a>
</div> 

<div class="sidebar-menu">
    <span class="fas fa-credit-card">
</span><a class="add"href="eventadminshow.php"><p style="color:lightgreen;">Events</p></a></div>
<!-- <div class="sidebar-menu">
    <span class="fas fa-handshake">
</span><p>Services</p></div> -->

<div class="sidebar-menu">
    <span class="fas fa-credit-card">
</span><a class="add"href="bookingadminshow.php"><p style="color:lightgreen;">Booking</p></a>
</div>
<div class="sidebar-menu">
    <span class="fas fa-credit-card">
</span><a class="add"href="payment.php"><p style="color:lightgreen;">Bills</p></a>
</div>

<div class="sidebar-menu">
    <span class="fas fa-envelope">
</span> <a class="add" href="feedbackadminshow.php"><p style="color:lightgreen;">Feedback</p></a>
</div>
<div class="sidebar-menu">
    <span class="fas fa-sign-out-alt">
</span><a class="add"href="logout.php"><p style="color:lightgreen;">Logout</p></a>
</div>
    </div>

    <div>
<div class="col-div-3">
    <div class="box">
    <?php
        include('connect1.php');
        $query="SELECT Eid from event ORDER BY Eid";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)){
            $row=mysqli_num_rows($result);

        }
        ?>
        <p><?php echo"$row";?><span><br/>Events</span></p>
        <i style="color:white;" class="fa fa-envelope box-icon "></i>
    </div>
</div><div class="col-div-3">
    <div class="box">
    <?php
        include('connect1.php');
        $query="SELECT email from registration ORDER BY email";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)){
            $row=mysqli_num_rows($result);

        }
        ?>
        <p><?php echo"$row";?><br/><span>Users</span></p>
        <i style="color:white;" class="fa fa-users box-icon"></i>
    </div>
</div><div class="col-div-3">
    <div class="box">
    <?php
        include('connect1.php');
        $query="SELECT Bid from booking ORDER BY Bid";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)){
            $row=mysqli_num_rows($result);

        }
        ?>
        <a href=""><p><?php echo"$row";?><br/><span>Booking</span></p></a>
        <i  style="color:white;"class="fa fa-credit-card box-icon"></i>
    </div>
</div>
<div class="clearfix"></div>
    </div>
<!--main content-->


<scripts src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></scripts>


</body>
</html>

