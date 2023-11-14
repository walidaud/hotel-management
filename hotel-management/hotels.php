<?php include "database.php" ?>
<?php
if(isset($_GET['DeleteID']) AND !empty($_GET['DeleteID'])) {
    
    $result = mysqli_query($connection, "delete from HOTEL where HotelID = '" . $_GET['DeleteID'] . "'");
    echo '<div class="alert alert-danger" role="alert">
        Record deleted!
    </div>';
}
?>



<html>
<head>
    <?php include "theme.php" ?>
    <meta charset="UTF-8">
    <title>Hotels</title>
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
            <h1 class="page-header" style="margin-top:150px; margin-left:-690px;">Registered Hotels</h1>
        </div>
    </div>
   
   <a class='btn btn-primary' href = "add-hotel.php" style="margin-top:25px; margin-left:-905px;">Add Hotel</a>
   
   <table class="guesttable" style="margin-top:130px; margin-left:-40px;">
      <thead class="thead-light">
       <tr>
           <th>ID</th>
           <th>Name</th>
           <th>Address</th>
           <th>ZIP Code</th>
           <th>City</th>
           <th>Country</th>
           <th>Phone Number</th>
           <th>Actions</th>
       </tr>
       
       </thead>
       
       <?php include "database.php";
       
       global $connection;
        
       $query = "SELECT * from HOTEL";
       $result = mysqli_query($connection, $query);
       if (mysqli_num_rows($result) > 0) {
           while ($row = mysqli_fetch_assoc($result)) {
               echo "<tr><td>". $row["HotelID"] . "<td>". $row["HotelName"] ."<td>". $row["HotelAddress"] ."<td>". $row["HotelZip"] . "<td>". $row["HotelCity"] . "<td>". $row["HotelCountry"] . "<td>". $row["HotelPhoneNumber"] . "<td> <div class= 'btn-group'>
               
               <a class='btn btn-secondary' href = 'rooms-" . $row['HotelID'] . ".php'>View</a>
              
               <a class='btn btn-danger' name='delete' href = '?DeleteID=" . $row['HotelID'] . "' onclick=\"return confirm('Delete?')\"> Delete</a>
               
               </div>";
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