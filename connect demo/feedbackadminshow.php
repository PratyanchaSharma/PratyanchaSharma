<html>
  <head>
<title>Feedback</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<!--dashboard-->
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel= "stylesheet" href="admin style.css">

    <!--font popping-->
    <link ref="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!--bootstrap-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    
  </style>
</head>

  
  <body >
<!--start nav bar-->
<!-- <nav class="navbar">
        <h4>Admin Dashboard</h4>
        <div class="profile">
            <span class="fas fa-search"></span>
            <img class="profile-image" src="https://fastly.picsum.photos/id/818/200/200.jpg?hmac=gfhJZngz3JDsSmE1obNFY5OeAQBVsJLED2VkwuGsC-o">
        
        <p class="profile-name">Vijay Harsha Pratyancha</p>
    </div> 
</nav>
sidebar

    <input type="checkbox" id="toggle">
    <label class="side-toggle" for="toggle"> <span class="fas fa-bars"></span>
    </label>
    <div class="sidebar">
    <div class="sidebar-menu">
        <span class="fas fa-clipboard-list"></span><a class="add"href="index.html"></a> <p>Home</p>
        
        </div> 

<div class="sidebar-menu">
    <span class="fas fa-users">
</span><a class="add" href="regisadminshow.php"><p>Users-info</p></a>
</div> 

<div class="sidebar-menu">
    <span class="fas fa-credit-card">
</span><a class="add" href="eventadminshow.php"><p>Event-info</p> </a></div>
<div class="sidebar-menu">
    <span class="fas fa-credit-card">
</span><a class="add" href="bookingadminshow.php"><p>Booking</p></a>
</div>

<div class="sidebar-menu">
    <span class="fas fa-envelope">
</span> <a class="add" href="feedbackadminshow.php"><p>Feedback</p></a>
</div>
<div class="sidebar-menu">
    <span class="fas fa-sign-out-alt">
</span><a class="add" href="signout.php"><p>Signout</p></a>
</div>
    </div>

    <div>
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
<!--main content-->


<scripts src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></scripts>


  <center>


    <div class="container">
      <div class="col-lg-12">
        <br><br>
        <h1 class="text-warning text-center">Feedback  Information</h1><br>
        <table class="table table-striped table-hover table-bordered">
          <tr>
            
            <th>Username</th>
            <th>Email</th>
            <th>Comment</th>
            <th>Rating</th>
            <th>Delete</th>
            <th>Update</th>
          </tr>
             <?php
             $con =mysqli_connect('localhost','root');
             mysqli_select_db($con,'test1');
             if($con){
              echo".";

             }else{
              echo"not connected";
             }
              
              $q ="select *from feedback";
              $query = mysqli_query($con,$q);
               while($res =mysqli_fetch_array($query)){
             ?>

          <tr>
             
            <td><?php echo $res['UName'];?></td>
            <td><?php echo $res['email_add'];?></td>
            <td> <?php echo $res['Comments'];?></td>
            <td><?php echo $res['Ratings'];?></td>
            <td><button class="btn-danger btn"><a href="feeddelete.php?email_add=<?php echo $res[ 'email_add']; ?>" class="text-white">Delete</a></button></td>
            <td><button class="btn-danger btn"><a href="feedupdate.php?email_add=<?php echo $res[ 'email_add']; ?>" class="text-white">Update</a></button></td>

          </tr>
          <?php
               }
          ?>
        </table>
      </div>
    </div>
  </center>
  </body>
</html>