<?php 
require_once "db/con_redo.php";

//gets values from post operation
if(isset($_POST["submit"])){
    //extracts values from $_POST array
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $specialty = $_POST['specialty'];
  
  //call crud function
  $result = $crud->editAttendee($id, $fname, $lname, $dob, $email, $tel, $specialty);
  //redirect to index page
  if($result){
    header("Location: viewrecords.php");
  } else{
    include "includes/errormessage.php";
  }
}
  else{
    include "includes/errormessage.php";
}
?>
