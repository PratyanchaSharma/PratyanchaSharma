<html>
  <head>
<title>user info</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  </head>
  <body  >
  <center>
    <div class="container">
      <div class="col-lg-12">
        <br><br>
        <h1 class="text-warning text-center">Booking Information of Users</h1><br>
        <table class="table table-striped table-hover table-bordered">
          <tr>
            <!--th>id</th-->
            <th>Event Name</th>
            <th>customer Name</th>
            <!--th>Gender</th-->
            <th>Venue</th>
            <th>Booking Date</th>
          <th>Delete</th>
          <!--th>Update</th-->
            <!--th>update</th-->
          </tr>
             <?php
             $con =mysqli_connect('localhost','root');
             mysqli_select_db($con,'test1');
             if($con){
              echo"connected";

             }else{
              echo"not connected";
             }
              //include'form.php';
             /* @$first_name = $_POST['first_name'];
              @$last_name = $_POST['last_name'];
              //$dob = $_POST['dob'];
              @$Gender = $_POST['Gender'];
              @$email = $_POST['email'];
              @$password = $_POST['password'];
               @$number = $_POST['number'];*/
              $q ="select *from booking";
              $query = mysqli_query($con,$q);
               while($res =mysqli_fetch_array($query)){
             ?>

          <tr>
            <!-- <td><?php echo $res[''];?></td> -->
            <td><?php echo $res['Ename'];?></td>
            <td><?php echo $res['Cname'];?></td>
            <!--td>?php echo $res['gender'];?></td-->
            <td><?php echo $res['Venue'];?></td>
            <td><?php echo $res['Bdate'];?></td>
            
            <td><button class="btn-danger btn"><a href="bookingdelete.php?Bdate=<?php echo $res[ 'Bdate']; ?>" class="text-white">Delete</a></button></td>
            <!--td><button class="btn-danger btn"><a href="bookingupdate.php?id=<?php echo $res[ 'Bid']; ?>" class="text-white">Update</a></button></td-->

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
