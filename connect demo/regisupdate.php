<?php
$con=new mysqli("localhost","root","","test1");
$qry="select * from registration where role!='admin' ";
$result=mysqli_query($con,$qry);
while($row=mysqli_fetch_array($result)){
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
        $email = $row['email'];
        @$number = $row['number'];
        
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>register</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    #login-form{
      background-image:conic-gradient( from -45deg,rgb(250, 237, 237),rgb(255, 217, 0) ); 
    height: 100%;
    

    }
    

    .form-box{
    width: 380px;
    display:-ms-inline-grid;
    height: 100%;
    position: relative;
    margin: 2% auto;
    background:transparent;
    border-color: black;
    border-radius: 60px4
    padding: 10px;
    overflow:hidden;
    outline:black;
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
#login{

left: 50px;

}
.submit-btn:hover{
  color:aliceblue;
}
.login-input{

color:white;
font: size 15px;
}

.input-group-login{
    top: 150px;
    position: absolute;
    width: 280px;
    transition: .5s;
    
}
input-group-register{
    top: 120px;
     position: absolute;
    width: 280px;
    transition: .5s;

}
#Register{

left:450px;
}
.Register-input{
color: white;
font-size: 15px;
}

</style>
<body  background-image="feedbackbg2(1).png" width="100%" background size="cover" background-repeat="no-repeat" background position="center">

	<center>
		
        <<div id="login-form" >
              
              
                <h1 style="color:rgb(45, 45, 237);  font-family:Times New Roman">Update</h1>   
		   <form class=form-box id="register" action="regisupdateconn.php" method="post">
            
<p>            
			<label for="firstName">First Name:</label>
			<input class=input-field type="text" name="first_name" id="firstName" placeholder="required first name" value="<?php echo $first_name;?>"  required >			
            </p>			
<p>
			<label for="lastName">Last Name:</label>
			<input class=input-field type="text" name="last_name" id="lastName" placeholder="required last name" value="<?php echo $last_name;?>" required >
			</p>

<p>
            <label for="number">number:</label>
            <input class=input-field type="text" name="number" id="number" placeholder="required phone number" value="<?php echo $number;?>" required>
            </p><br>

            			
<p>
                <label for="email">Email Address:</label>
                <input class=input-field type="text" name="email" id="email" placeholder="required email address" value="<?php echo $email;?>"  readonly required>
                </p>			

            <input type="checkbox" class="checkbox"> I agree to the terms and condition<br><br>
			<button class="submit-btn" type="submit" value="Submit" name="submit">update</Sign-up></button>
		</form>
    </div>
    </div>
	</center>
	
  
</body>
</html>
