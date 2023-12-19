<html>
  <head>
<title>Event info</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  </head>
  <body style="background-color:white; ">
    <div class="container">
      <div class="col-lg-12">
        <br><br>
        <h1 class="text-warning text-center">Event Form Information</h1><br>
        <table class="table table-striped table-hover table-bordered">
          <tr>
            <th>EId</th>
            <th>Ename</th>
            <th>Mode</th>
            <th>Date</th>
            <th>Guest</th>
            <th>Budget</th>
            <th>menu</th>
            <th>venue</th>
            <th>soundp</th>
            <th>photo</th>
            <th>Deco</th>
            <th>Description</th>
            <th>Delete</th>
            <th>Update</th>
          </tr>
             <?php
             $con =mysqli_connect('localhost','root');
             mysqli_select_db($con,'test1');
             if($con){
              echo"<script>alert('connected')</script>";

             }else{
              echo"<script>alert(' not connected')</script>";
             }
              
              $q ="select *from event";
              $query = mysqli_query($con,$q);
               while($res =mysqli_fetch_array($query)){
             ?>

          <tr>
             <td><?php echo $res['EID'];?></td>
             <td><?php echo $res['Ename'];?></td>
            <td><?php echo $res['Mode'];?></td>
            <td> <?php echo $res['EDate'];?></td>
            <td><?php echo $res['Guest'];?></td>
            <td><?php echo $res['budget'];?></td>
            <td><?php echo $res['menu'];?></td>
            <td><?php echo $res['Venue'];?></td>
            <td><?php echo $res['soundp'];?></td>
            <td><?php echo $res['photo'];?></td>
            <td><?php echo $res['deco'];?></td>
            <td> <?php echo $res['Description'];?></td>
            


            <td><button class="btn-danger btn"><a href="eventdelete.php?EID=<?php echo $res['EID'];?>" class="text-white">Delete</a></button></td>
            <td><button class="btn-danger btn"><a href="Eventupdate.php?EID=<?php echo $res['EID']; ?>" class="text-white">Update</a></button></td>

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