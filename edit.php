<?php
  include "connection.php";
  $id="";
  $name="";
  $phonenumber="";
  $email="";
    $date="";
  $time="";
  $address="";
  

  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      header("location:http://localhost/bookappointment/index.php");
      exit;
    }
    $id = $_GET['id'];
    $sql = "select * from bookappointment where id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location:http://localhost/bookappointment/index.php");
      exit;
    }
    $name=$row["name"];
    $phonenumber=$row["phonenumber"];
    $email=$row["email"];
        $date=$row["date"];
    $time=$row["time"];
    $address=$row["address"];
    $image=$row["image"];


  }
  else{
    $id = $_POST["id"];
    $name=$_POST["name"];
    $phonenumber=$_POST["phonenumber"];
    $email=$_POST["email"];
        $date=$_POST["date"];
    $time=$_POST["time"];
    $address=$_POST["address"];
    


    $sql = "update bookappointment set name='$name', phonenumber='$phonenumber',email='$email',date='$date',time='$time',address='$address where id='$id'";
    $result = $conn->query($sql);
    
  }
  
?>
<!DOCTYPE html>
<html>
<head>
 <title>FORM</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" class="fw-bold">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">BOOKAPPOINTMENT</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create.php">Add New</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-warning">
 <h1 class="text-white text-center">  Update Member </h1>
 </div><br>

 <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"> <br>

 <label> NAME: </label>
 <input type="text" name="name" value="<?php echo $name; ?>" class="form-control"> <br>
 <label> PHONENUMBER: </label>
 <input type="text" name="phonenumber" value="<?php echo $phonenumber; ?>" class="form-control"> <br>

 <label> EMAIL: </label>
 <input type="text" name="email" value="<?php echo $email; ?>" class="form-control"> <br>
  <label> DATE: </label>
 <input type="date" name="date" value="<?php echo $date; ?>" class="form-control"> <br>
  <label> TIME: </label>
 <input type="time" name="time" value="<?php echo $time; ?>" class="form-control"> <br>
  <label> ADDRESS: </label>
 <input type="text" name="address" value="<?php echo $address; ?>" class="form-control"> <br>



 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>