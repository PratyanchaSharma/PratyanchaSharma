




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Creation</title>
    
  <link rel="stylesheet" href="style.css">
</head>
<style>
  *{
    padding: 0;
    margin: 0;
    box-sizing: content-box;
}
body{
    background-color: #FFF1ED;
}
.form-container{
    height: 600px;
    width: 600px;
    margin: 5px auto;
}
.form-container form{
    height: 550px;
    width: 500px;
    margin: auto;
    display: flex;
   flex-direction: column;
   background-image: conic-gradient(from -45deg,rgb(138, 138, 235),rgb(209, 115, 209));
   padding: 30px;
   text-transform: capitalize;
   border-radius: 30px;
   color: #ffff;
  
}
.form-container form h3{
    text-align: center;
    font-size: 2.5rem;
    color: purple;

}
.form-container form label{
    font-size: 1.3em;
    padding: 3px 0;
    color: black;

}
.form-container textarea{
    height: 60px;
    width: 500px;
  display: flex;
   flex-direction: column;
}

.form-container form input, textarea{
    padding: 8px;
    border-radius: 20px;
    margin: 5px 0 5px 0;
    border: none;
    box-shadow: 3px 3px 3px 0 rgba(0,0,0,0.3);
    text-transform: capitalize;
    font-size: 1rem;
}
.form-container form input[type="button"]{
    align-self: flex-end;
    height: 17px;
    width: 60px;
   /* font-size: 100%;*/

}
</style>

<body >
    <container ><center>
    <div class="form-container" >
   
      <form action="" >
            <h3>BILL GENERATE</h3>
            <label for="UName">Mode</label>
            <section>
              <input type="radio" name="Mode" value="Real" required>Real
              <input type="radio" name="Mode" value="Virtual"reqired>Virtual
              </section> 
            
           
            <!-- <label for="email_add">Email_add:</label>
            <input type="text" pattern='^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$' id="email_add"placeholder="Enter the email address" required>  -->
            <label for="Ename" >Event Name</label>
            <input type="text"name="Ename"placeholder="Enter Event Name" onkeyup="textonly(this)"required>
            <label for="Cname">Customer Name</label>
            <input type="text" id="Cname" name="Cname" placeholder="Enter Customer Name" onkeyup="textonly(this)" required>
            <label for="amount">Amount</label>
            <input type="text" id="amount" name="amount" placeholder="Enter Amount" onkeyup="numberonly(this)" required>
            <label for="Pdate">Payment date and Time</label>
            <input type="datetime-local" id="Pdate" name="Pdate" placeholder="Enter Date" onkeyup="numberonly(this)" required><br><br><br>
            <input type="submit"   value= "Submit "> 
           
    </form>
    </div></center>
    
</container>

<script type="text/javascript">
  function textonly(input){
    var let=/[^a-z ]/gi;
    input.value = input.value.replace(let,"");
  }

  function numberonly(input){
    var num =/[^0-9]/gi;
    input.value = input.value.replace(num,"");
  }
</script>
</body>
</html>


<body>
	<center>
	<?php



$dbhost='localhost';
$dbuser='root';
$dbpass='';
$db='test1';
		// $conn = mysqli_connect("localhost", "root", "", "test1");
        $conn=mysqli_connect($dbhost,$dbuser,"",$db);
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		@$Rno = $_REQUEST['Rno'];
		@$Ename = $_REQUEST['Ename'];
		@$Cname = $_REQUEST['Cname'];
    @$amount = $_REQUEST['amount'];
    @$Pdate = $_REQUEST['Pdate'];
    @$Mode = $_REQUEST['Mode'];

		
		$sql = "INSERT INTO bills (Rno, Ename, Cname,amount,Pdate,Mode) VALUES ('$Rno','$Ename','$Cname','$amount','$Pdate','$Mode')";
		
		 if(mysqli_query($conn, $sql)){
			
         echo"<script>alert(' Payment form');</script>";
				
				} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
