<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Events</title>
    <style>
      *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family: Arial, Helvetica, sans-serif;
      }
  
      body{
        background:url("planning1.jpg"); 
         width:"80%";
          height: 90%;
          /* max-width:100%;
          max-height: auto; */
          
          position:relative;
          background-repeat: no-repeat;
          background-size: cover;
        background-position:30%;
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
      .form-box{
      width: 380px;
      display:-ms-inline-grid;
      height: 100%;
      position: left;
      margin: 2% auto;
      background:transparent;
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
      background: rgb(9, 244, 13);
      border:0;
      outline: none;
      border-radius: 30px;
      margin-top: 30;
      margin-bottom: 34;
  
  }
  .submit-btn:hover{
    color:aqua;
    background-color: #000008;
  }
  .input-field{
      width: 100%;
      padding: 10px 0;
      font-size: 15px;
      margin: 5px 0 ;
      border-left: 0;
      border-top:0;
      border-right: 0;
      border-bottom: 1px solid rgb(7, 7, 7);
      outline:none;
      background:white;
      color: black;
  }
  .check-box{
      margin: 30px 10px 34px 0;
  }
  .button-box{
      width: 220px;
      margin: 65px ;
      position:absolute;
      box-shadow:0 0 20px 9px #f40303f0;
      border-radius: 30px;
      
      
  }
  
  .btn{
      top: 0;
      left: 0;
      position: absolute;
      width:110px;
      height:"100%";
      background: #F3c693;
      border-radius:30px;
      transition: .5s;
  
  }
  </style>
</head>
<body>
    <div class="topnav" id="myTopnav">
        <a herf="index.html"><h5 style="color:aliceblue"> Event Management System<h5></a>&amp;&amp;
        <a href="index.html">Home</a>
        <a href="about.html" >About Us</a>
        <a href="feedback.html">Feedback</a>
        <a href="gallery.html">Gallery</a>
        <a href="event.php" class="active" >Events</a>
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
      </script> 
      
      <center>
        <form class="form-box" action="eventconnect.php" method="post"><br>
           <h1 style="color:rgb(250, 250, 250);  font-family:Times New Roman">  Plan Your Event Here..!<h1></h1><br>
            <!-- <input type="text" class="input-field" id="Ename" name="Ename" maxlength="40"  placeholder="Enter Event name" onkeyup="textonly(this)" title="Enter the valid Event name under range " required><br>  -->
            <lable for="m_sectionidb"><p style="color:white;">Event Name</p></lable>
            <select name="Ename" id="Ename">
              <option value=" "> </option>
              <option value="Birthday Party">Birthday Party</option>
              <option value="Freshers Party">Freshers Party</option>
              <option value="Farewell Party ">Farewell Party</option>
              <option value="Anniversary Party">Anniversary Party</option>
              <option value="Wedding">Wedding</option>
              <option value="Conference">Conference</option>
              <option value="Music Night">Music Nights</option>
              <option value="Dinner Party">Dinner Party</option>
              <option value="Festives Celebration">Festives Celebration</option>
            </select><br><br>
            <label for="m_sectionidb"><p style="color:white;">Mode</p></label>
            <hp style="color:white;"><input type="radio" name="Mode" value="Real" required>  Real 
            <input type="radio" name="Mode" value="Virtual" required> Virtual</p><br> 
            <input type="date" name="EDate" class="input-field" min="28-05-2023" placeholder="Expected Date" title="Enter the expected date after 28-05-2023" required><br> 
            <input type="number" name="Guest" class="input-field" maxlength="6" placeholder="Expected Guests" onkeyup="numberonly(this)" title="Enter the expected number of Guest" required><br>
            <input type="number" name="budget" class="input-field" placeholder="Expected Budget" required><br><br> 
            <lable for="m_sectionidb"><p style="color:black;">Services</p></lable>
            <lable for="m_sectionidb"><p style="color:black;">Caterers/Restauraun</p></lable>
            <select name="menu" id="menu">
              <option value=" "> </option>
              <option value="Vichitra halwai ">Vichitra halwai </option>
              <option value="Vimal Jain Caterers ">Vimal Jain Caterers </option>
              <option value="Chetna Caterers ">Chetna Caterers </option>
              <option value="Radhey Krishna Catering Gwalior">Radhey Krishna Catering </option>
              <option value="Agra Hut Resort Cafe & Restaurant">Agra Hut Resort Cafe & Restaurant</option>
              <option value="Raju Gupta caterers">Raju Gupta caterers</option>
              <option value="The Taste Of Town">The Taste Of Town</option>
              <option value="Ruchee Catering Services">Ruchee Catering Services</option>
              <option value="The Gully Kitchen">The Gully Kitchen</option>
              <option value="Raju Caterers">Raju Caterers</option>
              <option value="Raj Cooking (Mr. pradeep Jain)">Raj Cooking (Mr. pradeep Jain)</option>
              <option value="GK CATERING LTD.">GK CATERING LTD.</option>

            </select><br>
            <lable for="m_sectionidb"><p style="color:black;">Venues :</p></lable>
            <!-- <lable for="m_sectionidb"><p style="color:black;">Gardens</p></lable> -->
            <select name="Venue" id="Venue">
              <option value=" "> </option>
              <option value="RangMahal"> RangMahal----2lakh INR/Day</option>
              <option value="Sangam">Sangam----1.5lakh INR/Day</option>
              <option value="The Rajbagh Marriage Garden">The Rajbagh--2.5lakh INR/Day</option>
              <option value="Sunshine marriage garden">Sunshine----1.7lakh INR/Day</option>
              <option value="Balaji Garden By Nirvana">Balaji(Nirvana)----2.lakh INR/Day</option>
            <br>
            <lable for="m_sectionidb"><p style="color:black;">Hotels</p></lable>
            <!-- <select name="Venues" id="Venues"> -->
              <option value=" "> </option>
              <option value="Ambience"> Ambience----2lakh INR/Day</option>
              <option value="landmark">Landmark----1.5lakh INR/Day</option>
              <option value="Clarks Inn Suiets">Clarks Inn Suiets----2.5lakh INR/Day</option>
              <option value="Central Park">Central Park----1.7lakh INR/Day</option>
              <option value="Radiance">Radiance----2.lakh INR/Day</option>
            <br>
            <lable for="m_sectionidb"><p style="color:black;">Lounges/Clubs</p></lable>
            <!-- <select name="Venues" id="lounge"> -->
              <option value=" "> </option>
              <option value="MEDUSA Nightclub & Lounge"> MEDUSA Nightclub & Lounge----2k INR/Preson</option>
              <option value="Jalsa Club & Lounge">Jalsa Club & Lounge----1.5k INR/Preson</option>
              <option value="Sky Lounge">Sky Lounge----2.5k INR/Preson</option>
              <option value="Gwalior TDR">Gwalior TDR----1.7k INR/Preson</option>
              <option value="Hang Out">Hang Out----2k INR/Preson</option>
            </select><br>
            <lable for="m_sectionidb"><p style="color:black;">Sound</p></lable>
            <select name="soundp" id="soundp">
              <option value=" "> </option>
              <option value="DJ Wikkey">DJ Wikkey----20k INR/Day</option>
              <option value="DJ Sonu">DJ Sonu----10k INR/Day</option>
              <option value="Honey Dj ">Honey Dj ----2.5k INR/Day</option>
              <option value="Sheetal Dj">Sheetal Dj----1.7k INR/Day</option>
              <option value="DJ JAY KUSHWAH">DJ JAY KUSHWAH----0.7k INR/Day</option>
            </select><br>
            <lable for="m_sectionidb"><p style="color:black;">Photography</p></lable>
            <select name="photo" id="photo">
              <option value=" "> </option>
              <option value="Star Studio">Star Studio----7k INR/Day</option>
              <option value="M kumar Studio">M kumar Studio----5k INR/Day</option>
              <option value="Bhanu Jain Production">Bhanu Jain Production----2.5k INR/Day</option>
              <option value="Vaishno Production">Vaishno Production----1.7k INR/Day</option>
              <option value="Sujan Digital Studio">Sujan Digital Studio----2.7k INR/Day</option>
            </select><br>
            <lable for="m_sectionidb"><p style="color:black;">Decoration</p></lable>
            <select name="deco" id="deco">
              <option value=" "> </option>
              <option value="FireFLY DECO">FireFLY DECO----20k INR/Day</option>
              <option value="Khushi event's planner">Khushi event's planner--10k INR/Day</option>
              <option value="Party Nation">Party Nation----2.5k INR/Day</option>
              <option value="BlissWeddings">BlissWeddings----1.7k INR/Day</option>
              <option value="Desire Creation Events ">Desire Creation Events ----0.7k INR/Day</option>
            </select><br>
            <textarea cols="75" rows="5" class="input-field" id="Description" name="Description"  placeholder="Description if any.." required></textarea><br><br> 
            <!-- <input type="checkbox" class="checkbox"> I agree to the terms and condition<br><br> -->
            <button type="submit" name="submit" class="submit-btn"><b>Confirm event</b></button>
          </form></center>
        <br><center>
        <h2>For more Queries</h2><a href="feedback.html"><h2> Contact us now :</h2></a><h5>EMS2023@gmail.com</h5><br><br>
        <p Style="color:white; background-color: #212125; opacity:0.7">@2023copyrigth.All rights reserved.</p><br><hr><br><br> 
        </center> 
        <script type="text/javascript">
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

           