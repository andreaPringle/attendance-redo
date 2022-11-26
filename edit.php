<?php 
$title = "Edit Record";
require_once "includes/header.php"; 
require_once "db/con_redo.php";

$results = $crud->getSpecialties();
if(!isset($_GET["id"])){
    echo "<br/>  <br/> ";
    include "includes/errormessage.php";
    header("Location: viewrecords.php");
  } else{
    $id= $_GET["id"];
$attendee = $crud->getAttendeesDetails($id);
  
?>
    <br/>  <br/> 
    <h1 class="text-center">Edit Record</h1>
    <br/>  <br/>  


    <form method="post" action="editpost.php">
        <input type="hidden" name= "id" value="<?php echo $attendee["attendee_id"]?>"/>

    <div class="form-group">
    <label for="fname">First Name</label>
    <input type="text" class="form-control" value="<?php echo $attendee["firstname"]?>" 
    id="fname" name="fname" placeholder="Enter first name">
  </div>
  <br/> 
  <div class="form-group">
    <label for="lname">Last Name</label>
    <input type="text" class="form-control" value="<?php echo $attendee["lastname"]?>" 
    id="lname" name="lname" placeholder="Enter last name">
  </div>
  <br/> 
  <div class="form-group">
    <label for="dob">Date of Birth</label>
    <input type="text" class="form-control" value="<?php echo $attendee["dateofbirth"]?>" 
    id="dob" name="dob" placeholder="Enter date of birth">
  </div>
  <br/> 
  <div class="form-group">
    <label for="specialty">Area of Expertise</label>
    <select  class="form-control" value="<?php echo $attendee["name"]?>" 
    id="specialty" name="specialty">
    <?php 
        while($r=$results->fetch(PDO::FETCH_ASSOC)) { ?>
          <option value="<?php echo $r["specialty_id"] ?> "
          <?php if($r["specialty_id"] == $attendee["specialty_id"]) echo 'selected'?>>
          <?php echo $r["name"] ?> </option>
        <?php } ?>
    </select>
  </div>
  <br/> 
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" value="<?php echo $attendee["email"]?>" 
    id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <br/> 
  <div class="form-group">
    <label for="tel">Contact #</label>
    <input type="text" class="form-control" value="<?php echo $attendee["contact_number"]?>" 
    id="tel" name="tel" aria-describedby="telHelp"placeholder="Enter contact number">
    <small id="telHelp" class="form-text text-muted">We'll never share your contact number with anyone else.</small>
  </div>
  <br/> 
  <a href="viewrecords.php" class="btn btn-default" > Back to List </a>
  <button type="submit" name="submit" class="btn btn-success"  >Save Changes</button>
</form>
<?php }?>
<br/> <br/>  
    <?php require_once "includes/footer.php"; ?>