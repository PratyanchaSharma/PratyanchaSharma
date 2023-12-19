<?php
$con=new mysqli("localhost","root","","test1");
$qry="select * from event";
$result=mysqli_query($con,$qry);
while($row=mysqli_fetch_array($result)){
    $EID=$row['EID'] ;
    $Ename=$row['Ename'];
    $Mode=$row['Mode'];
    $EDate=$row['EDate'];
    $Guest=$row['Guest'];
    $budget=$row['budget'];
    $menu=$row['menu'];
    $Venue=$row['Venue'];
    $soundp=$row['soundp'];
    $photo=$row['photo'];
    $deco=$row['deco'];
    $Description=$row['Description'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event update</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .form-box{
    width: 380px;
    display:-ms-inline-grid;
    height: auto;
    position: relative;
    margin: 2% auto;
    background:lightblue;
    border-color: black;
    border-radius: 60px;
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
    color:blue;
    border:0;
    outline: none;
    border-radius: 30px;
    margin-top: 30;
    margin-bottom: 34;

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
.check-box{
    margin: 30px 10px 34px 0;
}

</style>
<body>
<center>
  <h2> Update Event Here</h2>
<form class="form-box" action="Eventupdateconn.php" method="post">
<!-- <input type="email" class="input-field" id="email" name="email" maxlength="70" value="<?php echo $email;?>"  readonly><br> -->
            <input type="text" class="input-field" id="Ename" name="Ename" maxlength="40"   placeholder="Enter Event name" onkeyup="textonly(this)" title="Enter the valid Event name under range " value="<?php echo $Ename;?>"   required><br> 
            <label for="m_sectionidb"><p >Mode</p></label>
            <hp ><input type="radio" name="Mode" value="Real" required>  Real 
            <input type="radio" name="Mode" value="Virtual" required> Virtual</p><br> 
            <input type="date" name="EDate" class="input-field" min="28-05-2023" placeholder="Expected Date" title="Enter the expected date after 28-05-2023" value="<?php echo $EDate;?>"   required><br> 
            <input type="number" name="Guest" class="input-field" maxlength="6" placeholder="Expected Guests" onkeyup="numberonly(this)" title="Enter the expected number of Guest" value="<?php echo $Guest;?>"  required><br>
            <input type="number" name="budget" class="input-field" placeholder="Expected Budget" value="<?php echo $budget;?>" required ><br><br> 
            
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
            <textarea cols="75" rows="5" class="input-field" id="Description" name="Description"  placeholder="Description if any.." value="<?php echo $Description;?>"  required></textarea><br><br> 
            <!-- <input type="checkbox" class="checkbox"> I agree to the terms and condition<br><br> -->
            <button type="submit" name="submit" class="submit-btn"><b>Confirm event</b></button>
          </form></center>
</body>
</html>