<?php
$con=new mysqli("localhost","root","","test1");
$qry="select * from feedback";
$result=mysqli_query($con,$qry);
while($row=mysqli_fetch_array($result)){
    $UName = $row['UName'];
        $email_add = $row['email_add'];
        @$Ratings = $row['Ratings'];
        @$Comments = $row['Comments'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Update</title>
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
    height: 480px;
    position: relative;
    margin: 2% auto;
    background:transparent;
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
    background: #1c24f5;
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
<body background="feedbackbg2.png" widht="100%" background size="cover" background-repeat="no-repeat” background position="center><br>
<center>
<form class="form-box" action="feedupdatecon.php" method="post">
   <br><br><h1 style="color:rgb(45, 45, 237);  font-family:Times New Roman">  Feedback Please..!<h1></h1><br><br>
    <input type="text" class="input-field" id="UName" name="UName" placeholder="Enter name" value="<?php echo $UName;?>" readonly required><br><br> 
    <input type="text"  class="input-field" id="email_add" name="email_add" placeholder=" Enter Email Id" value="<?php echo $email_add;?>" readonly required><br><br> 
    <label for="Ratings">Rate us....</label> 
    <input type="radio" name="Ratings" value="1">1
    <input type="radio" name="Ratings" value="2">2 
    <input type="radio" name="Ratings" value="3">3
    <input type="radio" name="Ratings" value="4">4
    <input type="radio" name="Ratings" value="5">5 <br> 
    <textarea cols="75" rows="5" class="input-field" id="Comments" name="Comments"  placeholder="Comments please.." value="<?php echo $Comments;?>" required></textarea><br><br> 
    <input type="checkbox" class="checkbox"> I agree to the terms and condition<br><br>
    <button type="submit" name="submit" class="submit-btn" name="submit">Submit</button>
</form>
</center>
</body>
</html>