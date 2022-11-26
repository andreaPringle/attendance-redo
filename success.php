<?php 
$title = "Success";
require_once "includes/header.php"; 
require_once "db/con_redo.php";

if(isset($_POST["submit"])){

  $fname= $_POST["fname"];
  $lname= $_POST["lname"];
  $dob= $_POST["dob"];
  $specialty= $_POST["specialty"];
  $email= $_POST["email"];
  $tel= $_POST["tel"];
  $isSucess = $crud->insertAttendees($fname, $lname, $dob, $specialty, $email, $tel);

  if($isSucess){
    include "includes/successmessage.php";
  } else{
    include "includes/errormessage.php";
  }
}
?>

 
 <br/>  <br/> 
 <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_POST["fname"]; echo" "; echo $_POST["lname"]; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted">  </h6>
    <p class="card-text"> Date of Birth: <?php echo $_POST["dob"]; ?></p>
    <p class="card-text"> Area of Expertise: <?php echo $_POST["specialty"]; ?></p>
    <p class="card-text">Email: <?php echo $_POST["email"]; ?></p>
    <p class="card-text">Contact: <?php echo $_POST["tel"]; ?> </p>
  </div>
</div>
 <?php
 //echo $_POST["fname"];
 //echo $_POST["lname"];
// echo $_POST["dob"];
 //echo $_POST["specialty"];
 //echo $_POST["email"];
 //echo $_POST["tel"];
 ?>

<br/> <br/>  
    <?php require_once "includes/footer.php"; ?>