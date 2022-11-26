<?php 
$title = "View Record";
require_once "includes/header.php"; 
require_once "db/con_redo.php";

if(!isset($_GET["id"])){
    echo "<br/>  <br/> ";
    include "includes/errormessage.php";
    header("Location: viewrecords.php");
  } else{
    $id= $_GET["id"];
    $results = $crud->getAttendeesDetails($id);
  
?>
 <br/>  <br/> 
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">
        <?php echo $results["firstname"]; echo" "; echo $results["lastname"]; ?>
    </h5>
    <h6 class="card-subtitle mb-2 text-muted">  </h6>
    <p class="card-text"> Date of Birth: <?php echo $results["dateofbirth"]; ?></p>
    <p class="card-text"> Area of Expertise: <?php echo $results["name"]; ?></p>
    <p class="card-text">Email: <?php echo $results["email"]; ?></p>
    <p class="card-text">Contact: <?php echo $results["contact_number"]; ?> </p>
  </div>
</div>
<br/>
<a href="viewrecords.php" class= "btn btn-info">Back to list</a>
<a href="edit.php?id=<?php echo $results["attendee_id"] ?> " class= "btn btn-warning">Edit</a>
<a onclick="return confirm('Are you sure you want to delete this record?')" href="delete.php?id=<?php echo $results["attendee_id"] ?> " class= "btn btn-danger">Delete</a>
            
<?php }?>
<br/> <br/>  
    <?php require_once "includes/footer.php"; ?>