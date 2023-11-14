<?php include "database.php"; ?>


<?php 
if(isset($_POST["submit"])){

    $hotel_name = $_POST['hotel_name'];
    $address = $_POST['address'];
    $zip = $_POST['zip'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $phone_number = $_POST['phone_number'];
    

    if ($hotel_name != "" && $address != "" && $zip != "" && $city != "" && $country != "" && $phone_number != ""){

        $query = "INSERT INTO `HOTEL` (`HotelName`, `HotelAddress`, `HotelZip`, `HotelCity`, `HotelCountry`, `HotelPhoneNumber`) VALUES
                ('$hotel_name', '$address', '$zip', '$city', '$country', '$phone_number')";
        $result = mysqli_query($connection, $query);
        
        if($result > 0){
            header('Location: hotels.php');
        }else{
            echo "Registration Failed! Please try again.";
        }
    }

}

?>








<!DOCTYPE html>
<html>
<head>
    <?php include "theme.php" ?>
    <meta charset="UTF-8">
    <title>Add Hotel</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</head>
<body>

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header" style="margin-top:150px; margin-left:780px;">Register New Hotel</h1>
        </div>
    </div>
     
    <div align="center">
    <div class="container">
    <div class="col-xs-6">
    
    <form method = "POST">

    
    <div class="form-group">    
    <label for="hotel_name">Hotel Name</label>
    <input type="text" name="hotel_name" class="form-control" style="width: 500px;">
    </div> 
    
    <div class="form-group"> 
    <label for="address">Address</label>   
    <input type="text" name="address" class="form-control" style="width: 500px;">
    </div>
    
    <div class="form-group"> 
    <label for="zip">ZIP Code</label>   
    <input type="text" name="zip" class="form-control" style="width: 500px;">
    </div>
    
    <div class="form-group"> 
    <label for="city">City</label>   
    <input type="text" name="city" class="form-control" style="width: 500px;">
    </div>
    
    <div class="form-group"> 
    <label for="country">Country</label>   
    <input type="text" name="country" class="form-control" style="width: 500px;">
    </div>
    
    <div class="form-group"> 
    <label for="phone_number">Phone Number</label>   
    <input type="text" name="phone_number" class="form-control" style="width: 500px;">
    </div>
    
    
    <div class="form-group">   
    <input class="btn btn-primary" type="submit" name="submit" value="Add Hotel" style="width: 500px;"><br>
    </div>
    
    </form>   
    </div>
    </div>
    </div>

  



</body>
</html>