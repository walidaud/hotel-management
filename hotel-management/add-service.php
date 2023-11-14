<?php include "database.php"; ?>


<?php 
if(isset($_POST["submit"])){

    $service_name = $_POST['service_name'];
    $charge = $_POST['charge'];
    

    if ($service_name != "" && $charge != ""){

        $query = "INSERT INTO `SERVICE` (`ServiceName`, `ServiceCharge`) VALUES
                ('$service_name', '$charge')";
        $result = mysqli_query($connection, $query);
        
        if($result > 0){
            header('Location: services.php');
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
    <title>Add Service</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</head>
<body>

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header" style="margin-top:150px; margin-left:780px;">Register New Service</h1>
        </div>
    </div>
     
    <div align="center">
    <div class="container">
    <div class="col-xs-6">
    
    <form method = "POST">

    
    <div class="form-group">    
    <label for="service_name">Service</label>
    <input type="text" name="service_name" class="form-control" style="width: 500px;">
    </div> 
    
    <div class="form-group"> 
    <label for="Charge">Charge</label>   
    <input type="number" name="charge" class="form-control" style="width: 500px;">
    </div>
    
    <div class="form-group">   
    <input class="btn btn-primary" type="submit" name="submit" value="Add Service" style="width: 500px;"><br>
    </div>
    
    </form>   
    </div>
    </div>
    </div>

  



</body>
</html>