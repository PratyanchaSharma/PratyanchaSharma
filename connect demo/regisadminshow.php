<html>
  <head>
<title>user info</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  </head>
  <body style="background-color:white; ">
  <center>
    <div class="container">
      <div class="col-lg-12">
        <br><br>
        <h1 class="text-warning text-center">Registration Information of Users</h1><br>
        <table class="table table-striped table-hover table-bordered">
          <tr>
            <!--th>id</th-->
            <th>First Name</th>
            <th>Last Name</th>
            <!--th>Gender</th-->
            <th>EMail</th>
            <th>Number</th>
            
            <th>delete</th>
            <!-- <th>update</th> -->
          </tr>
             <?php
             $con =mysqli_connect('localhost','root');
             mysqli_select_db($con,'test1');
             if($con){
              echo"c";

             }else{
              echo"not connected";
             }
              
              $q ="select * from registration";
              $query = mysqli_query($con,$q);
               while($res =mysqli_fetch_array($query)){
             ?>

          <tr>
            <!-- <td><?php echo $res['id'];?></td> -->
            <td><?php echo $res['first_name'];?></td>
            <td><?php echo $res['last_name'];?></td>
            <td><?php echo $res['email'];?></td>
            <td><?php echo $res['number'];?></td>
            <td><button class="btn-danger btn"><a href="signout1.php?email=<?php echo $res[ 'email']; ?>" class="text-white">Delete</a></button></td>
           <!-- <td><button class="btn-danger btn"><a href="regisupdate.php?email=<?php echo $res[ 'email']; ?>" class="text-white">Update</a></button></td> -->

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

 
