<?php
    include "connection.php";
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
            $phonenumber = $_POST['phonenumber'];
            $email = $_POST['email'];
            $date=$_POST['date'];
            $time=$_POST['time'];
            $address=$_POST['address'];
           
        

        $result =mysqli_query($db,"INSERT INTO bookappointment (name,phonenumber, email, date, time, address) 
        VALUES ('$name','$phonenumber', '$email', '$date', '$time', '$address','$image_file')");
       
    }
?>
<!DOCTYPE html>
<html>
<head>
 <title>Form</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Book Appointment</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create.php"><span style="font-size:larger;">Add New</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-primary">
 <h1 class="text-white text-center">  Create New Member </h1>
 </div><br>

 <label> NAME: </label>
 <input type="text" name="name" class="form-control"> <br>

 <label> PHONENUMBER: </label>
 <input type="text" name="phonenumber" class="form-control"> <br>

 <label> EMAIL: </label>
 <input type="text" name="email" class="form-control"> <br>
  <label> DATE: </label>
 <input type="date" name="date" class="form-control"> <br>
  <label> TIME: </label>
 <input type="time" name="time" class="form-control"> <br>
  <label> ADDRESS: </label>
 <input type="text" name="address" class="form-control"> <br>
 

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>