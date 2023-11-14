<html>
<head>
    <?php include "theme.php" ?>
    <meta charset="UTF-8">
    <title>Rooms-2</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</head>
<body>
   
   <div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header" style="margin-top:150px; margin-left:-690px;">Rooms</h1>
        </div>
    </div>
   
   <table class="guesttable" style="margin-top:960px; margin-left:-30px;">
      <thead class="thead-light">
       <tr>
           <th>ID</th>
           <th>Room Number</th>
           <th>Room Type</th>
           <th>Room rate</th>
           <th>Hotel ID</th>
           <th>Status</th>
       </tr>
       
       </thead>
       
       <?php include "database.php";
       
       global $connection;
        
       $query = "SELECT * from ROOM where HotelID = 2";
       $result = mysqli_query($connection, $query);
       if (mysqli_num_rows($result) > 0) {
           while ($row = mysqli_fetch_assoc($result)) {
               echo "<tr><td>". $row["RoomID"] . "<td>". $row["RoomNumber"] ."<td>". $row["RoomType"] ."<td>". $row["RoomRate"] ."<td>". $row["HotelID"] . "<td>". $row["RoomStatus"];
           }
           echo "</table>";
       }
       
       else {
           echo "Query Failed";
       }
       
       ?>
       
   </table>
    </div>
    
</body>
</html>