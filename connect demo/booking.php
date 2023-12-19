<?php
$con=new mysqli("localhost","root","","test1");
$qry="select * from event";
$result=mysqli_query($con,$qry);
while($row=mysqli_fetch_array($result)){
    $Ename = $row['Ename'];
        // $Eid=$row['Eid'];
        @$Venue = $row['Venue'];
        
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Booking</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
    
        body{
          background:url("bookingbg.jpg"); 
           width:"100%";
            height: 100%;
            position:relative;
            background-repeat: no-repeat;
            background-size: cover;
          
        }
        .topnav {
      overflow: hidden;
      background-color: rgb(9, 9, 9);
      position: fixed;
      z-index:+1;
      top: 0;
      width: 100%;
     
      
    }
    
    .topnav a {
      float: left;
      display: block;
      color:aqua;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }
    
    .topnav a:hover {
      background-color: #1613c6;
      color: white;
    }
    
    .topnav a.active {
      background-color: #31f726;
      color: white;
    }
    
    .topnav .icon {
      display: none;
    }
    
    @media screen and (max-width: 600px) {
      .topnav a:not(:first-child) {display: none;}
      .topnav a.icon {
        float: right;
        display: block;
      }
    }
    
    @media screen and (max-width: 600px) {
      .topnav.responsive {position: relative;}
      .topnav.responsive .icon {
        position: absolute;
        right: 0;
        top: 0;
      }
      .topnav.responsive a {
        float: none;
        display: block;
        text-align: left;
      }
    }
    .book{
        position:absolute;
        left: 15% ;
    }
    .form-box{
    width: 380px;
    display:-ms-inline-grid;
    height: 100%;
    position: left;
    left:auto;
    margin: 2% auto;
    background:rgb(247, 207, 213);
    border-color: black;
    border-radius: 50px;
    box-shadow:0 0 20px 9px #0a0a0af0;
    padding: 10px;
    overflow:hidden;
    outline: black;
    }
    .submit-btn{
    width: 85%;
    padding: 10px 30px;
    cursor: pointer;
    display: block;
    margin: auto;
    background: #31f726;
    border:0;
    outline: none;
    border-radius: 30px;
    margin-top: 30;
    margin-bottom: 34;
    
}
.submit-btn:hover{
    color:black;
    background-color: aqua;
}
.input-field{
    width: 100%;
    padding: 10px 0;
    margin: 5px 0 ;
    border-left: 0;
    border-top:0;
    border-right: 0;
    border-bottom: 1px solid rgb(17, 1, 1);
    outline:none;
    background:transparent;
    color: rgb(10, 9, 9);
}
    </style>
</head>
<body>
    <div class="topnav" id="myTopnav">
        <a herf="index.html"><h5 style="color:aliceblue"> Event Management System        <h5></a>
        <a href="index.html" >Home</a>
        <a href="about.html" >About Us</a>
        <a href="feedback.html">Feedback</a>
        <a href="event.php"  class="active">Events</a>
        <a href="service.html" >Service Providers</a>
        <a href="register2.html">Log-in</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </div><br><br>
      <script>
      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
      </script><br><br>
      <div class="book" id="container">
      <center> 
       <form class="form-box" action="bookingconnect.php" method="post">
        <br> <h2 style="color:#31f726";text-align=center;> Booking</h2><br>
<input type="text" name="Ename" id="Ename" class="input-field" placeholder="Event name"  onkeyup="textonly(this)" value="<?php echo $Ename;?>" readonly required><br>
<input type="text" name="Cname" id="Cname" class="input-field" placeholder="Customer name" onkeyup="textonly(this)" required><br>
<input type="text" name="Venue" id="Venue" class="input-field" placeholder="Venue"  onkeyup="textonly(this)" value="<?php echo $Venue;?>" readonly required><br>
<input type="date" name="Bdate" id="Bdate" class="input-field" placeholder="Booking Date" required><br><br>
<button type="submit" name="submit" class="submit-btn" ><h4>Booked</h4></button><br>
       </form>
       
       <h2 style="color:#31f726;">For More Information and Queries Please Contact us  </h2>
       <a herf="feedback.html"><h2>Contact us</h2></a><br><br>
    </center>
       </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
       <center>
       

<p Style="color:grey;font-size: small;">@2023copyright.All rights reserved.</p><br><hr><br><br>
</center>
<script>
  function textonly(input){
    var let=/[^a-z\s]/gi;
    input.value = input.value.replace(let,"");
  }

  function numberonly(input){
    var num =/[^0-9]/gi;
    input.value = input.value.replace(num,"");
  }
</script>
</body>
</html>