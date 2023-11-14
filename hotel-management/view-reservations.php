<?php include "database.php" ?>

<?php

if(isset($_POST['submit'])) {
    $vid = $_GET['viewid'];
    
}
?>


<!DOCTYPE html>
<html>
<head>
    <?php include "theme.php" ?>
    <meta charset="UTF-8">
    <title>Reservations</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</head>
<body>

    <div align="center">
   <div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header" style="margin-top:150px; margin-left:-750px;">Reservations</h1>
        </div>
    </div>
   
   
   
   <table class="guesttable" style="margin-top:250px; margin-left:-25px;" >
      <thead class="thead-light">
       <tr>
           <th>Reservation ID</th>
           <th>Guest ID</th>
           <th>Check-In</th>
           <th>Check-Out</th>
           <th>Registration Date</th>
           <th>Room ID</th>
           
       </tr>
       
       </thead>
       
       <?php include "database.php";
       
       global $connection;
        
       $query = "SELECT * from RESERVATION";
       $result = mysqli_query($connection, $query);
       if (mysqli_num_rows($result) > 0) {
           while ($row = mysqli_fetch_assoc($result)) {
               echo "<tr><td>". $row["ReservationID"] . "<td>". $row["GuestID"] ."<td>". $row["CheckInDate"] ."<td>". $row["CheckOutDate"] ."<td>". $row["RegistrationDate"] . "<td>". $row["RoomID"];          
           }
           echo "</table>";
       }
       
       else {
           echo "Query Failed";
       }
       
       ?>
       
   </table>
    </div>
    </div>






</body>
</html>