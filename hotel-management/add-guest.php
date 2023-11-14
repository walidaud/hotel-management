<?php include "database.php"; ?>


<?php 
if(isset($_POST["submit"])){

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    

    if ($first_name != "" && $last_name != "" && $phone_number != "" && $email != "" && $address != "" && $city != "" && $country != ""){

        $query = "INSERT INTO `GUEST` (`GuestFirstName`, `GuestLastName`, `GuestPhoneNumber`, `GuestEmail`, `GuestAddress`, `GuestCity`, `GuestCountry`) VALUES
                ('$first_name', '$last_name', '$phone_number', '$email', '$address', '$city', '$country')";
        $result = mysqli_query($connection, $query);
        
        if($result > 0){
            header('Location: guests.php');
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
    <title>Register Guest</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</head>
<body>

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header" style="margin-top:150px; margin-left:780px;">Register New Guest</h1>
        </div>
    </div>
     
    <div align="center">
    <div class="container">
    <div class="col-xs-6">
    
    <form method = "POST">

    
    <div class="form-group">    
    <label for="first_name">First Name</label>
    <input type="text" name="first_name" class="form-control" style="width: 500px;">
    </div> 
    
    <div class="form-group"> 
    <label for="last_name">Last Name</label>   
    <input type="text" name="last_name" class="form-control" style="width: 500px;">
    </div>
    
    <div class="form-group"> 
    <label for="phone_number">Phone Number</label>   
    <input type="text" name="phone_number" class="form-control" style="width: 500px;">
    </div>
    
    <div class="form-group"> 
    <label for="email">Email</label>   
    <input type="email" name="email" class="form-control" style="width: 500px;">
    </div>
    
    <div class="form-group"> 
    <label for="address">Address</label>   
    <input type="text" name="address" class="form-control" style="width: 500px;">
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
    <input class="btn btn-primary" type="submit" name="submit" value="Register" style="width: 500px;"><br>
    </div>
    
    </form>   
    </div>
    </div>
    </div>

  



</body>
</html>